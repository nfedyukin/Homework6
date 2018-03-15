<?php

require_once __DIR__ . '/boot.php';

$view = new View();

if(isset($_GET['id']))
{
    $qry = 'SELECT * FROM news WHERE id = :id';
    $view ->add('DB', new DB);
    $view ->add('qry', $qry);
    $view ->add('dat',[':id'=>$_GET['id']]);
    $view->display(__DIR__ . '/templates/article.php');
}
else
{
    $view->display(__DIR__ . '/templates/404.php');
}


