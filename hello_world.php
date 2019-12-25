<?php
echo "Hello world!";

//phpQueryの読み込み
require_once('./phpQuery-onefile.php');

//指定したwebサイトから読み込む
$html = file_get_contents('https://www.nintendo.com/');

//結果を表示、見出しだけ
echo phpQuery::newDocument($html)->find('h1')->text();


function fact($args){
  if($args > 0){
    return $args * fact($args - 1);
  } 

  return 1;
}

echo "\n 10の階乗 " . fact(10);//10の階乗
?>