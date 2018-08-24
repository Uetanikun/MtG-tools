<?php
require_once("phpQuery-onefile.php");
$html = file_get_contents("http://wonder.wisdom-guild.net/price/Mox+Amber/");
$doc = phpQuery::newDocument($html);

//カード名の抽出
$name = $doc["h1.wg-title.bg-yellow"] -> text();
//最安値抽出 同じ要素から3番目に出てくる内容を抽出
$price = $doc["span.line:eq(2)"] -> text();


//カードテキストの抽出
$html = file_get_contents("http://whisper.wisdom-guild.net/card/Mox+Amber/");
$doc = phpQuery::newDocument($html);
$cost = $doc["td.lc:eq(0)"] -> text();
$text = $doc["td.lc:eq(1)"] -> text();

echo "カード名：$name</br>最安値：$price</br>マナ・コスト：$cost</br>効果：$text";
 ?>
