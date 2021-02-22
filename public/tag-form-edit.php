<?php

require_once '../vendor/autoload.php';
require_once '../config/eloquent.php';
require_once '../config/blade.php';

/** @var $blade */

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tag = \App\Model\Tag::find($_POST['id']);
    $tag -> title = $_POST ['title'];
    $tag -> slug = $_POST ['slug'];
    $tag ->save();

    header('Location: index.php');

}






echo $blade->make('category/tag-form-edit', compact('tag')) ->render();
