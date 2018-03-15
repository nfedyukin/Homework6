<?php

require_once __DIR__ . '/boot.php';

$qry = 'SELECT * FROM news ORDER BY id DESC';

$view = new View();
$view ->add('DB', new DB);
$view ->add('qry', $qry);
$view ->add('dat', []);

$view->display(__DIR__ . '/templates/index.php');