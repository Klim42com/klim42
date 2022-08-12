<?php

class Book extends Goods
{

public string $author = '';
public string $description = '';
public string $publisher = '';

public function __construct ($idGoods, $title, $author, $price, $description, $publisher) {
    parent::__construct ($idGoods, $title, $price);
    $this->author = $author;
    $this->description = $description;
    $this->publisher = $publisher;
}

public function getHTML (){
//    echo $this->title, '<hr/>';
    echo <<<LABEL
                    <div class="card">
                        <div class="card-body">
                            <img src="img/item.png"  alt="...">
                            <h3 class="card-title">$this->price руб</h3>
                            <p class="card-text"><small class="text-muted">Название: $this->title</small></p>
                            <p class="card-text"><small class="text-muted">Автор: $this->author</small></p>
                            <p class="card-text"> $this->description.<br/> Издательство: <a href="#"> $this->publisher</a></p>
                        </div>
                        <div class="card-footer">
                            <a href="?add2basket=$this->idGoods" class="btn btn-primary">В корзину</a>
                        </div>
                    </div>
LABEL;
}
public function get($format = self::GOODS_HTML) {

}
public function __destruct () {
    echo 'The book: ' . $this->title . ' has been deleted! <br>';
}
}