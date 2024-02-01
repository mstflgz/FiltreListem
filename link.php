<?php

// Hedef URL
$url = "https://www.jestyayingiris5.xyz/";

// HTTP isteği gönder
$html = file_get_contents($url);

// HTML içeriğini parse et
$dom = new DOMDocument;
@$dom->loadHTML($html);

// XPath kullanarak istediğimiz öğeyi bul
$xpath = new DOMXPath($dom);
$link = $xpath->query('//a[@class="light"]/@href')->item(0)->nodeValue;

// Çekilen URL'yi doğrudan yönlendir
header("Location: $link");
exit;

?>
