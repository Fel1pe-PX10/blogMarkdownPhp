<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Mi primer post</h1>
    <?php
    use Phelo\Blog\models\Post;

   // $post = new Post('test.md');
    $posts = Post::getPosts();

    foreach($posts as $post){
        echo "<div><a href='{$post->getUrl()}'>{$post->getFileName()}</a></div>";
    }

    ?>
</body>
</html>