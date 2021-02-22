<?php

require_once '../vendor/autoload.php';
require_once '../config/eloquent.php';
require_once '../config/blade.php';

/** @var $blade */
$tag = new \App\Model\Tag();

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $tag = new \App\Model\Tag();
    $tag-> title = $_POST ['title'];
    $tag -> slug = $_POST ['slug'];
    $tag ->save();

    header('Location: index.php');

}

echo $blade->make('category/tag-form') ->render();
