<?php
    $pages = isset($_POST['pages']) && null != $_POST['pages'] ? $_POST['pages'] : $pages=1;
    $pages = abs(clearInt($pages));
    $dirName = isset($_POST['dirName']) && null != $_POST['dirName'] ? $_POST['dirName'] : '';
    $dirName = clearStr($dirName);
    $url = isset($_POST['url']) && null != $_POST['url'] ? $_POST['url'] : '';
    $url = clearStr($url);
    $urlShort = isset($_POST['urlShort']) && null != $_POST['urlShort'] ? $_POST['urlShort'] : '';
    $urlShort = clearStr($urlShort);

?>
<div>Задача была такая создать парсер контента с каталога сайта http://juventa.ua/ru/catalog/.
    Парсер упрощенный и заточен под конкрентный сайт. Суть задачи была такая что бы помочь контент менеджеру переодически сверять информацию. Для удобства сделана форма. Создается папка если не создана, и csv файл где будет содержаться нужный контент.</div>
<div class="container">
    <div class="row">
        <div class="col-4">
            <!-- Область основного контента -->
            <form action='<?= $_SERVER['REQUEST_URI'] ?>' method="post">
                <div class="form-group">
                    <label>Количество страниц: </label>
                    <input class="form-control" name='pages' type='number' value="<?=$pages?>"/>
                </div>
                <div class="form-group">
                    <label>Название для каталога </label>
                    <select class="form-control" name="dirName">
                        <option>*</option>
                        <option name="dirName">juventa</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Урл для скачивания: </label>
                    <select class="form-control" name="url">
                        <option >*</option>
                        <option name="url">http://juventa.ua/ru/catalog/</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Короткий урл для относительных ссылок: </label>
                    <select class="form-control" name="urlShort">
                        <option>*</option>
                        <option name="urlShort">http://juventa.ua</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Создать</button>
            </form>
        </div>

        <!-- Таблица -->
        <div class="col-6">
<?php if(!empty($dirName))
    parseJyvUa($dirName,$pages,$url,$urlShort);?>
        </div>
    </div>
</div>

