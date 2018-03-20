<?php

require_once __DIR__ . '/boot.php';

$query = 'SELECT * FROM news ORDER BY id DESC';

$view = new View();
$db = new DB;
$view->add('newslist', $db->query($query,[],\News\Article::class));


$view->display(__DIR__ . '/templates/index.php');