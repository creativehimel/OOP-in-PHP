<?php
class BlogPost{
    private $author = "Niton";
    private $post = "Something goes here...";
    public function showInfo(){
        echo "Author: " . $this->author."\n";
        echo "Post: " . $this->post;
    }
}
$data = new BlogPost();
var_dump($data);
$data->showInfo();