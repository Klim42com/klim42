<?php

class Goods
{
    const GOODS_HTML = 'HTML';
    const GOODS_JSON = 'JSON';
    const GOODS_CSV = 'CSV';
    const GOODS_ARRAY = 'ARRAY';

    public string $title = '';
    public float $price = 0;
    public int $idGoods = 0;


    public function __construct ($idGoods, $title, $price) {
        $this->idGoods = $idGoods;
        $this->title = $title;
        $this->price = $price;
    }
}