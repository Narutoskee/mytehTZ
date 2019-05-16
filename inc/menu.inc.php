<h2>Навигация</h2>
<!-- Меню -->
<?php
const ERROR_IN_DRAW_MENU =" SORRY my fault";
$menuMain=[
    ['title'=>'Главная','href'=>'index.php'],
    ['title'=>'Задание 1','href'=>'index.php?id=task1'],
    ['title'=>'Задание 2','href'=>'index.php?id=task2'],
    ['title'=>'Задание 3','href'=>'index.php?id=task3'],

];
if (!drawMenu($menuMain)):
    trigger_error(ERROR_IN_DRAW_MENU,E_USER_ERROR);
endif;