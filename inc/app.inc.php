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
function parseJyvUa($dirName,$pages,$url,$urlShort){
    $mc = dirname(__FILE__) . "/$dirName/";
    echo(!file_exists($mc) ?
        (!mkdir($mc, 0777, true) ? 'Failed to create folders...' : 'Succesfully created nested directories...') : 'maybe allready done');
    // massive for properties
    $divContents = [];
    $count = 1;
    for ( $page = 1; $page <= $pages; $page++ ) {
        $html = file_get_html_curl($url);
        if (count($html->find('a.product_link'))) {
            foreach ($html->find('a.product_link') as $level) {
                $html2 = file_get_html_curl($urlShort . $level->href);
                foreach ($html2->find('.jshop_list_product .product .name a') as $step2) {
                    $product = [];
                    $product['url'] = $urlShort . $step2->href;
                    $html3 = file_get_html_curl($product['url']);
                    $product['name'] = trim($html3->find('h1', 0)->plaintext);
                    $product['color'] = $html3->find('span#block_attr_sel_8', 0) ? trim($html3->find('span#block_attr_sel_8', 0)->plaintext) : "";
                    $product['size'] = trim($html3->find('span#block_attr_sel_7', 0)->plaintext) ?: "";
                    $product['disc'] = trim($html3->find('div.attr_description', 0)->plaintext) ?: "";
                    $divContents[] = $product;
                    $count++;
                    usleep(600000); // 0.5 сек
                    print_r($product);
                    echo str_repeat('&nbsp;', 100) . '<br><hr><br>';
                    flush();
                    $html3->clear();
                }
                $html2->clear();
            }
        }
        $html->clear();
    }
    $fp = fopen( $dirName.'csv', 'w' );
    foreach ( $divContents as $line ) {
        fputcsv( $fp, $line );
    }
    fclose( $fp );
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

function getTik($urlFrom,$url){
    $ch = curl_init();
    curl_setopt ($ch, CURLOPT_URL, $urlFrom);
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch , CURLOPT_COOKIEJAR, 'cookies.txt');
    curl_setopt($ch , CURLOPT_COOKIEFILE, 'cookies.txt');
    $html = curl_exec ($ch);
    curl_close ($ch);
    if (preg_match('(name="sessionId" value="([^"]+)")si', $html, $m)) {
        $sessionId = $m[1];
        $data = [
            'textBoxPartida' => 'Abrantes',
            'textBoxChegada' => 'Aguas Santas - Palmilheira',
            'textBoxDataIda' => '2019-02-28',
            'textBoxDataVolta' => '2019-03-01',
            'departDate' => '26 November, 2018',
            'returnDate' => '27 November, 2018',
            'radioButtonClasse' => '1',
            'passengers' => '1',
            'numTicket' => '1',
            'language' => 'en',
            'sessionId' => $sessionId,
            'corporate' => '0'
        ];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch , CURLOPT_COOKIEJAR, 'cookies.txt');
        curl_setopt($ch , CURLOPT_COOKIEFILE, 'cookies.txt');
        curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, true );
        curl_setopt($ch , CURLOPT_HEADER, 0);
        $result = curl_exec($ch);
        curl_close($ch);

        echo $result;

    } else {
        echo 'sessionId not found';
    }
}

function clearInt($data)
{
    return (int)$data;
}
function clearStr($data){
    return trim(strip_tags($data));
}