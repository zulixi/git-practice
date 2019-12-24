<?php
echo "Hello world!";

//phpQueryの読み込み
require_once('./phpQuery-onefile.php');

//指定したwebサイトから読み込む
$html = file_get_contents('https://www.nintendo.com/');

//結果を表示、見出しだけ
echo phpQuery::newDocument($html)->find('h1')->text();
?>
