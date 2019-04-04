<?php
/**
 * Created by PhpStorm.
 * User: snabweb
 * Date: 004 04.04.19
 * Time: 15:59
 */
//make analog of var_dump
function debugMe($var)
{
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
}
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
</style>";
echo "<div>";
echo "<div>";
function drawArr($arr)
{
    echo "<table border='1'>";
    foreach ($arr as $mass => $items):
        echo "<tr>";
        foreach ($items as $key => $value):
            echo "<td style='padding: 10px;'>$value</td>";
        endforeach;
        echo "</tr>";
    endforeach;
    echo "</table>";
}

echo "Array before<br>";
drawArr($m);
echo "</div>";
echo "<div>";
function sortArray($arr)
{
    $rowData = [];
    foreach ($arr as $mass) {
        $sorted = [];
        foreach ($mass as $cell) {
            $sorted[] = $cell;
            sort($sorted);
        }
        $rowData[] = $sorted;
    }
    echo '<table border="1">';
    foreach ($rowData as $row => $tr) {
        echo '<tr>';
        foreach ($tr as $td)
            echo '<td style=\'padding: 10px;\'>' . $td . '</td>';
        echo '</tr>';
    }
    echo '</table>';
}

echo "Array after Sort<br>";
sortArray($m);

echo "</div>";
echo "</div>";
