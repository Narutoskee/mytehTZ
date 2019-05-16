<?php
/**
 * Created by PhpStorm.
 * User: snabweb
 * Date: 004 04.04.19
 * Time: 17:23
 */

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
?>
<div>
    <p>необходимо написать php код, который реализовал бы следующее:</p>
    <p>2.1 отсортировал элементы массива так, чтобы значения sort были расположены в порядке возрастания</p>
    <p>2.2 в каждый элемент массива добавил обозначение группы, согласно следующему условию:</p>
    <p>- если значение "type" начинается на цифру 1, то это группа a</p>
    <p>- если на 32 или 36, то группа b</p>
    <p>- если на 3[0-1,3-5,7-9], то группа c</p>
    <p>- во всех остальных случаях группа d.</p>
</div>
<div class="row">
    <div class="col-5">
        Array before
        <?php drawArrA($arr);?>
    </div>
    <div class="col-5">
        Array after Sort<br>
        <?php sortArrayA($arr);?>
    </div>
</div>