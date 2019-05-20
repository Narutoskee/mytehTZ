<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') :
    $url = clearStr($_POST['url']);
    $urlFrom = clearStr($_POST['urlShort']);
else :
    $urlFrom = (isset($url)) ? $url : 'https://www.cp.pt/passageiros/en/buy-tickets';
    $url = (isset($urlShort)) ? $urlShort : 'https://venda.cp.pt/bilheteira/comprar/pesquisar';
endif;
?>

<div>
    Задача была такая создать парсер в который можно было бы вбить нужные данные и получить информацию с сайта https://www.cp.pt/passageiros/en/buy-tickets. тут представлен код который только уже подключает к сайту и что то оттуда получает. Поля собраны в массив можно было это в форму преобразовать но такой задачи не было, была важно просто проверить возможность. Тут форма содержит два параметра это урл откуда и куда. То есть сайт откуда беретеся и куда их форма передает эти данные. Тут для наглядности.
</div>
<div>
    <code>
        $data = [
        'textBoxPartida' => 'Abrantes',
        'textBoxChegada' => 'Aguas Santas - Palmilheira',
        'textBoxDataIda' => '2019-05-17',
        'textBoxDataVolta' => '2019-05-18',
        'departDate' => '17 May, 2019',
        'returnDate' => '18 May, 2019',
        'radioButtonClasse' => '1',
        'passengers' => '1',
        'numTicket' => '1',
        'language' => 'en',
        'sessionId' => $sessionId,
        'corporate' => '0'
        ];
    </code>
</div>
<div class="container">
    <div class="row">
        <div class="col-4">
            <!-- Область основного контента -->
            <form action='<?= $_SERVER['REQUEST_URI'] ?>' method="post">
                <div class="form-group">
                    <label>Урл где форма расположена: </label>
                    <select class="form-control" name="urlFrom">
                        <option>*</option>
                        <option name="urlShort">https://www.cp.pt/passageiros/en/buy-tickets</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Урл куда данные передаются: </label>
                    <input class="form-control" name='url' type='text' value="<?=$url?>"/>
                </div>
                <button type="submit" class="btn btn-primary">Создать</button>
            </form>
        </div>

        <!-- Таблица -->
        <div class="col-6">
            <?php getTik($urlFrom,$url);?>
        </div>
    </div>
</div>




