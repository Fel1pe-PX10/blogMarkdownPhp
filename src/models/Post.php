<?php

namespace Phelo\Blog\models;

class Post{

    public function __construct(private string $file)
    {
        
    }

    public function getContent(){
        $stream = fopen($this->getFileName(), 'r');
        $content = fread($stream, filesize($this->getFileName()));

        echo $content;
    }

    public function getFileName(){
        $dir = Url::getRootPath();
        $fileName = "{$dir}/entries/{$this->file}";
        
        return $fileName;
    }

    public static function getPosts(){
        $posts = [];
        $files = scandir(Url::getRootPath().'/entries');

        foreach($files as $file){
            if(strpos($file, '.md') > 0){
                $post = new Post($file);
                array_push($posts, $post);
            }
        }
        return $posts;
    }

    public function getUrl(){
        $url = substr($this->file, 0, strpos($this->file, '.md'));
        $title = str_replace(' ', '-', $url);

        return $title;
    }
}