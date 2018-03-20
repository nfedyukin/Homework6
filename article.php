<?php

require_once __DIR__ . '/boot.php';

$view = new View();

if(isset($_GET['id']))
{
    $query = 'SELECT * FROM news WHERE id = :id';
    $db = new DB;
    $view->add('newslist', $db->query($query,[':id'=>$_GET['id']],\News\Article::class));
    $view->display(__DIR__ . '/templates/article.php');
}
else
{
    $view->display(__DIR__ . '/templates/404.php');
}


