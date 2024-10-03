<?php include("includes/header.php"); ?>

<div class="col-md-8 col-lg-10 content-column white-background">
          <div class="small-navbar d-flex d-md-none">
            <button type="button" data-toggle="offcanvas" class="btn btn-outline-primary"> <i class="fa fa-align-left mr-2"></i>Menu</button>
            <h1 class="small-navbar-heading"> <a href="index.html">Creative </a></h1>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="content-column-content">
                <h1>Blog</h1>
                
                
        <!-- <p class="lead"> -->
        
        <div>
          My blog at medium.com is at : <br/><a href="https://www.medium.com/@vipinc.007" target="_blank">https://www.medium.com/@vipinc.007</a>
</br/>
          My personal blog is at : <br/><a href="https://www.buddyclaps.com" target="_blank">https://www.buddyclaps.com/</a>
          </a>
        </div>
        <div id="myDIV001">
          Few of my article are ...
        </div>
        <?php
// Path to the JSON file
$json_file = 'blog_posts.json';

// Load the contents of the JSON file
$json_content = file_get_contents($json_file);

// Check if the JSON content was loaded successfully
if ($json_content === false) {
    echo "Failed to load JSON file.";
    exit;
}

// Decode the JSON data into a PHP array
$blog_posts = json_decode($json_content, true); // true converts JSON objects into associative arrays

// Check if the JSON was parsed successfully
if ($blog_posts === null) {
    echo "Failed to parse JSON.";
    exit;
}

// Loop through each blog post and display the title and URL
echo "<ul id='my_blog_posts'>";
foreach ($blog_posts as $post) {
    $title = htmlspecialchars($post['title']); // Escape any special characters
    $url = htmlspecialchars($post['url']); // Escape any special characters
    
    // Display the title as a clickable link
    echo "<li><a href='{$url}' target='_blank'>{$title}</a></li>";
}
echo "</ul>";
?>


        <div id="myDIV">
          My Posts on Medium
        </div>
        <ul id="myUL">
        </ul>

        <script>
            // call the function to start execution
            get();

            // function that call the API to get the JSON data
            async function get() {
                var r = await fetch('https://api.rss2json.com/v1/api.json?rss_url=https://medium.com/feed/@vipinc.007');
                var data = await r.json();
                // console.log(data)
                // display your title in header
                // document.getElementById("myDIV").textContent = data['feed']['title'];

                // iterate the array of items and call the newElement function which add the new list item
                for(var i=0; i<data['items'].length; i++)
                {
                    newElement(data['items'][i]['title'], data['items'][i]['link']);
                }
            }

            // Create a new list item when clicking on the "Add" button
            function newElement(textContent, posturl) {
                var li = document.createElement("li");
                // var t = document.createTextNode(textContent);
                var link = document.createElement('a');

                // set the link's href attribute
                link.href = posturl;
                link.target = "_blank";

                // set the link's text content
                link.textContent = textContent;

                // li.appendChild(t);
                li.appendChild(link);
                document.getElementById("myUL").appendChild(li);
            }
        </script>
        
             
              </div>
            </div>
          </div>
        </div>
		
		<?php include("includes/footer.php"); ?>