<?php


?>
<div class="row">
    <div class="col-md-3 col-sm-3 ">

        <h4>Category</h4>

        <div class="row">
            <?= renderCategories ("../../../../template/categories",$categories) ?>
        </div>
        <hr>

        <h4>Цена</h4>

        <div class="row">
            <div class="input-group mb-1">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">от</span>
                </div>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"> &nbsp;
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">до</span>
                </div>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">&nbsp;

                <button type="button" class="btn btn-success">Найти</button>
            </div>
        </div>
        <hr>
        <h4>Издательство</h4>

        <div class="row">
            <?= renderPublisher ("../../../../template/publisher",$publisher)?>
        </div>
        <hr>


    </div>

    <div class="col-md-9 col-sm-9 ">

        <h1><?= $namePage ?></h1>

        <?php
        $bookCounter = (ceil(count($books) / 3)) * 3;
        for ($i = 0; $i < $bookCounter; $i += 3){
            ?>
            <div class="card-deck">
                <?php
                for ($j = $i; $j < $i +3; $j++){
                    if (array_key_exists($j, $books)){
                        $price = $books[$j]['price'];
                        $title = $books[$j]['title'];
                        $author = $books[$j]['author'];
                        $description = $books[$j]['description'];
                        $idBook = $books[$j]['idbook'];
                    } else {
                        $price = ' - ';
                        $title = ' - ';
                        $author = ' - ';
                        $description = ' - ';
                        $idBook = ' - ';
                    }
                    ?>
                    <div class="card">
                        <div class="card-body">
                            <img src="img/item.png"  alt="...">
                            <h3 class="card-title"><?= $price?> руб</h3>
                            <p class="card-text"><small class="text-muted">Название: <?= $title?></small></p>
                            <p class="card-text"><small class="text-muted">Автор: <?= $author?></small></p>
                            <p class="card-text"><?= $description?>.<br/> Издательство: <a href="#"><?= $publisher[3]?></a></p>
                        </div>
                        <div class="card-footer">
                            <a href="?add2basket=<?=$idBook?>" class="btn btn-primary">В корзину</a>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
            <?php
        }
        ?>


    </div>


</div>
