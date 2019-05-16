<?php
/**
 * Created by PhpStorm.
 * User: snabweb
 * Date: 016 16.05.19
 * Time: 15:08
 */
require_once "inc/conf.inc.php";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title><?=$title?></title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-lg-4">
            <div id="nav">
                <!-- Навигация -->
                <?php
                require_once "inc/menu.inc.php";
                ?>
                <!-- Навигация -->
            </div>
        </div>
        <div class="col-xs-12 col-lg-8">
        <div id="content">
            <!-- Заголовок -->
            <h1><?=$header;?></h1>
            <!-- Заголовок -->
            <!-- Область основного контента -->
            <?php
            switch($id){
                case 'task1':
                    include 'inc/task1.inc.php';
                    break;
                case 'task2':
                    include 'inc/task2.inc.php';
                    break;
                default:
                    include 'inc/frontpage.inc.php';
            }
            ?>
            <!-- Область основного контента -->

        </div>
        </div>
    </div>

</div>

<div id="footer">
    <!-- Нижняя часть страницы -->
    <?php
    require_once "inc/footer.inc.php";
    ?>
    <!-- Нижняя часть страницы -->
</div>

</body>

</html>