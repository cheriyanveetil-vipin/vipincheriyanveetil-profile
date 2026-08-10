<?php
$pageTitle = 'Blogs | Vipin Cheriyanveetil';
$pageDescription = 'Articles and blog posts by Vipin Cheriyanveetil on software development, web technologies, and programming.';
$canonicalPath = 'blog.php';
?>
<?php include("includes/header.php"); ?>
<h1>Blog</h1>

<div>
  My blog at medium.com is at: <br><a href="https://www.medium.com/@vipinc.007" target="_blank">https://www.medium.com/@vipinc.007</a>
  <br>
  My personal blog is at: <br><a href="https://www.buddyclaps.com" target="_blank">https://www.buddyclaps.com/</a>
</div>

<?php
$json_file = __DIR__ . '/blog_posts.json';

if (file_exists($json_file)) {
    $json_content = file_get_contents($json_file);
    $blog_posts = json_decode($json_content, true);

    if (is_array($blog_posts)) {
        echo "<div id='myDIV001'>Few of my articles are ...</div>";
        echo "<ul id='my_blog_posts'>";
        foreach ($blog_posts as $post) {
            $title = htmlspecialchars($post['title']);
            $url = htmlspecialchars($post['url']);
            echo "<li><a href='{$url}' target='_blank'>{$title}</a></li>";
        }
        echo "</ul>";
    }
}
?>
<?php include("includes/footer.php"); ?>
