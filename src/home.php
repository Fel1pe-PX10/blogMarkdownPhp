<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="src/resources/main.css">
</head>
<body>
    <?php require 'src/resources/navbar.php'; ?>
    <div class="post-container">
        <h1>Bienvenido a mi Blog</h1>
        <?php
        use Phelo\Blog\models\Post;
        
        $posts = Post::getPosts();

        foreach($posts as $post){
            echo "<div><a href='{$post->getUrl()}' class='post'>{$post->getPostName()}</a></div>";
        }
        ?>

    </div>
</body>
</html>