<?php
echo "Hello world!";

//phpQueryの読み込み
require_once('./phpQuery-onefile.php');

//指定したwebサイトから読み込む
$html = file_get_contents('https://www.nintendo.com/');

//結果を表示、見出しだけ
echo phpQuery::newDocument($html)->find('h1')->text();

$arr = array();

function fact($i, $acc){
  if($i == 0){ 
    return $acc;
  }else{
    return fact($i-1, $i*$acc);
  }
}
echo "\n 10の階乗 " . fact(10, 1);//10の階乗
?>