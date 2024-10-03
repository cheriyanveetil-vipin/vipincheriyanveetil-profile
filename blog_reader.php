<?php
// URL to your remote sitemap.xml
$sitemap_url = 'https://buddyclaps.com/post-sitemap.xml';

// Load the sitemap XML from the external URL
$sitemap_content = file_get_contents($sitemap_url);

// Check if the sitemap content was loaded successfully
if ($sitemap_content === false) {
    echo "Failed to load sitemap from URL.";
    exit;
}

// Parse the XML content
$xml = simplexml_load_string($sitemap_content);

// Check if the XML was parsed successfully
if ($xml === false) {
    echo "Failed to parse sitemap.";
    exit;
}

// Function to fetch the title from a URL
function get_blog_title($url) {
    // Fetch the HTML content of the blog post
    $html_content = @file_get_contents($url);

    // If unable to load content, return a default message
    if ($html_content === false) {
        return 'Title not available';
    }

    // Use a regular expression to extract the <title> tag content
    if (preg_match('/<title>(.*?)<\/title>/is', $html_content, $matches)) {
        return $matches[1]; // Return the title text
    }

    return 'Title not found'; // Return if title tag is missing
}

// Initialize an array to hold the titles and URLs
$blog_posts = [];

// Loop through each <url> element in the sitemap
foreach ($xml->url as $url) {
    $loc = (string)$url->loc; // Get the URL of the blog post
    
    // Fetch the title of the blog post
    $title = get_blog_title($loc);

    // Add the title and URL to the blog_posts array
    $blog_posts[] = [
        'title' => $title,
        'url' => $loc
    ];
}

// Convert the array to JSON format
$json_data = json_encode($blog_posts, JSON_PRETTY_PRINT);

// Write the JSON data to a file
file_put_contents('blog_posts.json', $json_data);

// Output a message to confirm the JSON file has been written
echo "Blog post titles and URLs have been written to blog_posts.json";
?>


<?php
// URL of the API to fetch RSS data (as JSON)
$api_url = 'https://api.rss2json.com/v1/api.json?rss_url=https://medium.com/feed/@vipinc.007';

// Function to fetch data from API
function fetch_api_data($url) {
    // Use file_get_contents to make an HTTP request to the API
    $response = file_get_contents($url);

    // Check if the response is valid
    if ($response === false) {
        echo "Failed to fetch API data.";
        exit;
    }

    // Decode the JSON response into an associative array
    return json_decode($response, true);
}

// Function to save data to JSON file
function save_to_json_file($file, $data) {
    // Convert the array to a JSON string with pretty print
    $json_data = json_encode($data, JSON_PRETTY_PRINT);

    // Write the JSON data to the file
    file_put_contents($file, $json_data);

    echo "Data successfully written to $file.";
}

// Path to the JSON file where blog posts will be stored
$json_file = 'blog_posts.json';

// Fetch the API data
$api_data = fetch_api_data($api_url);

// Check if the data contains the items array
if (isset($api_data['items'])) {
    // Load existing blog posts from the JSON file
    $existing_blog_posts = [];
    if (file_exists($json_file)) {
        $existing_content = file_get_contents($json_file);
        $existing_blog_posts = json_decode($existing_content, true);
    }

    // Loop through the API items and add new blog posts
    foreach ($api_data['items'] as $item) {
        // Extract title and link from the item
        $title = $item['title'];
        $link = $item['link'];

        // Append the new blog post to the array
        $existing_blog_posts[] = [
            'title' => $title,
            'url' => $link
        ];
    }

    // Save the updated blog posts list to the JSON file
    save_to_json_file($json_file, $existing_blog_posts);
    echo "blog items saved to json file";
} else {
    echo "No blog items found in the API response.";
}
?>
