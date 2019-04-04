<?php
/**
 * Created by PhpStorm.
 * User: snabweb
 * Date: 004 04.04.19
 * Time: 17:23
 */
include "func.php" ;
//необходимо написать php код, который реализовал бы следующее:
//2.1 отсортировал элементы массива так, чтобы значения sort были расположены в порядке возрастания
//2.2 в каждый элемент массива добавил обозначение группы, согласно следующему условию:
//- если значение "type" начинается на цифру 1, то это группа a
//- если на 32 или 36, то группа b
//- если на 3[0-1,3-5,7-9], то группа c
//- во всех остальных случаях группа d.
$arr = [
    ['id' => 1, 'data' => ['sort' => 3], 'type' => 101],
    ['id' => 2, 'data' => ['sort' => 4], 'type' => 321],
    ['id' => 3, 'data' => ['sort' => 1], 'type' => 210],
    ['id' => 4, 'data' => ['sort' => 5], 'type' => 764],
    ['id' => 5, 'data' => ['sort' => 2], 'type' => 357]
];
debugMe($arr);
echo "<style>
    div{
    width: 200px;
    border: 1px solid red;
    padding: 2px;
    overflow: hidden;
    text-align: center;
    margin: 0 auto;
    }
    div>div{
    width: 50%;
    display: inline-block;
    border: none;
    }
    td{
    padding: 10px;
    }
</style>";
echo "<div>";
echo "<div>";

echo "Массив До";
drawArrA($arr);
echo "</div>";
echo "<div>";

echo "Массив после";
sortArrayA($arr);
echo "</div>";
echo "</div>";