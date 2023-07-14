<?php
use Phelo\Blog\models\Post;

$post = new Post($postName.'.md');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="src/resources/main.css">
</head>
<body>
    <?php require 'src/resources/navbar.php'; ?>
    <div class="post-container">
        <?php
        echo $post->getContent();
        ?>
    </div>
</body>
</html>