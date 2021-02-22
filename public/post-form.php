<?php

require_once '../vendor/autoload.php';
require_once '../config/eloquent.php';
require_once '../config/blade.php';

/** @var $blade */
$category = new \App\Model\Post();

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $post = new \App\Model\Post();
    $post -> title = $_POST ['title'];
    $post -> slug = $_POST ['slug'];
    $post ->save();

    header('Location: index.php');

}

echo $blade->make('post/post-form', compact('post'))->render();