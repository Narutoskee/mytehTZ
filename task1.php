<?php
/**
 * Created by PhpStorm.
 * User: snabweb
 * Date: 004 04.04.19
 * Time: 15:59
 */
//make analog of var_dump
include "func.php" ;
//Есть числовая матрица в виде php массива следующего вида: $m = [ [4, 1, 7], [8, 3, 2], [2, 9, 5] ]; нужно написать php код, который сгенерирует новую матрицу с числами первой, расположенных в порядке возрастания.
$m = [
    [4, 1, 7],
    [8, 3, 2],
    [2, 9, 5]
];
//check this out
debugMe($m);
// i make function print to monitor array $m in table style
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
echo "Array before<br>";
drawArr($m);
echo "</div>";
echo "<div>";
//fast and simple
echo "Array after Sort<br>";
sortArray($m);

echo "</div>";
echo "</div>";
