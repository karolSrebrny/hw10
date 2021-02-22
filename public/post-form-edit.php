<?php

require_once '../vendor/autoload.php';
require_once '../config/eloquent.php';
require_once '../config/blade.php';

/** @var $blade */

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $post = \App\Model\Post::find($_POST['id']);
    $post -> title = $_POST ['title'];
    $post -> slug = $_POST ['slug'];
    $post ->save();

    header('Location: index.php');

}





echo $blade->make('post/post-form-edit', compact('category')) ->render();
