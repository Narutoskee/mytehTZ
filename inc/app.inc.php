<?php
/**
 * Created by PhpStorm.
 * User: snabweb
 * Date: 004 04.04.19
 * Time: 17:42
 */
function debugMe($var)
{
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
}
function drawMenu($menu,$vertical=true){
    if(!is_array($menu))
        return false;
    $style="";
    if (!$vertical):
        $style=" class='d-inline mr-1'";
    endif;
    echo "<ul>";
    foreach ($menu as $item){
        echo "<li$style>";
        echo "<a href='{$item['href']}'>{$item['title']}</a>";
        echo "</li>";
    }
    echo "<ul>";
    return true;
}
function myError($no,$msg,$file,$line){
    $errDateTime =date("d-m-Y H:i:s");
    $str = "[$errDateTime] - $msg in $file:$line\n";
    switch ($no):
        case E_USER_ERROR:
        case E_USER_WARNING:
        case E_USER_NOTICE:
            echo $msg;
    endswitch;
    error_log($str,3,"error.log");
}
function drawHello (){
    /* Приветсвие*/
    $hour =(int)strftime('%H');
    if($hour>0 and $hour <6):
        $welcome ="Доброй ночи";
    elseif ($hour>=6 and $hour<12):
        $welcome ="Доброе утро";
    elseif ($hour>=12 and $hour<18):
        $welcome ="Добрый день";
    elseif ($hour>=18 and $hour<23):
        $welcome ="Добрый вечер";
    else:
        $welcome ="Доброй ночи";
    endif;
    return $welcome;
}

//draw arr first task 1
function drawArr($arr)
{
    echo "<table class='table'>";
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
//draw arr first task 1 decision
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
    echo '<table class="table">';
    foreach ($rowData as $row => $tr):
        echo '<tr>';
        foreach ($tr as $td):
            echo '<td>' . $td . '</td>';
        endforeach;
        echo '</tr>';
    endforeach;
    echo '</table>';
}

function drawArrA($arr){

    echo "<table class='table'>";
    foreach($arr as $arrLine => $massiv):
        $firstLeter= substr($massiv['type'],0,1);
        $firstTwo = substr($massiv['type'],0,2);
        echo "<tr>";
        if ($firstLeter==1):
            echo "<td>A</td>";
        elseif ($firstTwo==32 || $firstTwo==36):
            echo "<td>B</td>";
        elseif ($firstLeter==3&&($firstTwo!==32 || $firstTwo!==36)):
            echo "<td>C</td>";
        else:
            echo "<td>D</td>";
        endif;
        foreach($massiv  as  $inner_key => $value):
            if (is_array($value) || is_object($value)):
                foreach($value  as  $inner_value=> $val):
                    echo "<td>$val</td>";
                endforeach;
            else:
                echo "<td>$value</td>";
            endif;
        endforeach;
        echo "</tr>";
    endforeach;
    echo "</table>";
}

function sortMe($a, $b){
    if ($a['data']['sort'] == $b['data']['sort'])
        return 0;
    return ($a['data']['sort'] < $b['data']['sort']) ? -1 : 1;
}

function sortArrayA($arr){
    uasort($arr, 'sortMe');

    echo '<table class="table">';
    foreach ($arr as $row => $tr):
        $firstLeter= substr($tr['type'],0,1);
        $firstTwo = substr($tr['type'],0,2);
        echo "<tr>";
        if ($firstLeter==1):
            echo "<td>A</td>";
        elseif ($firstTwo==32 || $firstTwo==36):
            echo "<td>B</td>";
        elseif ($firstLeter==3&&($firstTwo!==32 || $firstTwo!==36)):
            echo "<td>C</td>";
        else:
            echo "<td>D</td>";
        endif;
        foreach ($tr as $td):
            if (is_array($td) || is_object($td)):
                echo '<td>' . $td['sort'] .'</td>';
            else:
                echo '<td>' . $td .'</td>';
            endif;
        endforeach;
        echo '</tr>';
    endforeach;
    echo '</table>';

}