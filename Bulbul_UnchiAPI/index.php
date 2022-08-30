<?php
// 文字コード設定
header('Content-Type: application/json; charset=UTF-8');
// numをエスケープ(xss対策)
$param = htmlspecialchars($_GET["num"]);
// メイン処理
$arr["status"] = "yes";
$arr["url"] = "unchi";
// 配列をjson形式にデコードして出力, 第二引数は、整形するためのオプション
print json_encode($arr, JSON_PRETTY_PRINT);
?>