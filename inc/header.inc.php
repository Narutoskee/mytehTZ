<?php
// Инициализация заголовков страницы
    $title = 'Задачи по PHP';
    $header = drawHello();
    $header.=", незнакомец!";
    $id = isset($_GET['id']) ? strtolower(strip_tags(trim($_GET['id']))) : '';
    switch($id):
    case 'task1':
    $title = 'Задача1';
    $header = 'Первая задача';
    break;
    case 'task2':
    $title = 'Задача2';
    $header = 'Вторая задача';
    break;
   endswitch;