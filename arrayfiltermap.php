<?php
//L-23 array filter and array map
class Post{
    public $title;
    public $isPublish;
    public function __construct($titleName,$isPublished)
    {
        $this->title=$titleName;
        $this->isPublish=$isPublished;
    }
}
$posts=[
    new Post("First Post",true),
    new Post("Second Post",false),
    new Post("Third Post",true),
    new Post("Fourth Post",false)
];

$unPublishedPosts=array_filter($posts,function($post){
    return !$post->isPublish;
});
echo "<pre>";
var_dump($unPublishedPosts);

$titleofPosts=array_map(function($post){
    return $post->title;
},$posts);

echo "<pre>";
print_r($titleofPosts);
?>