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
        //first line
        echo "<tr>";
        foreach ($items as $key => $value):
            //val of massive
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
    $rowData = [];//make new arr before cicle
    foreach ($arr as $mass):
        $sorted = [];//make new arr after first cicle
        foreach ($mass as $cell):
            $sorted[] = $cell; //drop up val to new sort array
            sort($sorted);// function sort val  new array
        endforeach;
        $rowData[] = $sorted; // pass on
    endforeach;
    //and collect our new array
    echo '<table border="1">';
    foreach ($rowData as $row => $tr):
        echo '<tr>';
        foreach ($tr as $td):
            echo '<td style=\'padding: 10px;\'>' . $td . '</td>';
        endforeach;
        echo '</tr>';
    endforeach;
    echo '</table>';
}
//fast and simple
echo "Array after Sort<br>";
sortArray($m);

echo "</div>";
echo "</div>";
