<?php
/**
 * Created by PhpStorm.
 * User: snabweb
 * Date: 004 04.04.19
 * Time: 15:59
 */
//make analog of var_dump
//Есть числовая матрица в виде php массива следующего вида: $m = [ [4, 1, 7], [8, 3, 2], [2, 9, 5] ]; нужно написать php код, который сгенерирует новую матрицу с числами первой, расположенных в порядке возрастания.
$m = [
    [4, 1, 7],
    [8, 3, 2],
    [2, 9, 5]
];
?>
<div>
    <p>Есть числовая матрица в виде php массива следующего вида: $m = [ [4, 1, 7], [8, 3, 2], [2, 9, 5] ];</p>
    <p>нужно написать php код, который сгенерирует новую матрицу с числами первой, расположенных в порядке
        возрастания.</p>
</div>
<div class="row">
<div class="col-5">
Array before
<?php drawArr($m);?>
</div>
    <div class="col-5">
Array after Sort<br>
<?php sortArray($m);?>
</div>
</div>