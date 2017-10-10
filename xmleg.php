<?php
$conn=new mysqli("localhost","root","","prac");
/*$xmlDoc = new DOMDocument();
$xmlDoc->load("xmdata.xml");

$xmlObject = $xmlDoc->getElementsByTagName('item');


$itemCount = $xmlObject->length;

for ($i=0; $i < $itemCount; $i++)
{
  $title = $xmlObject->item($i)->getElementsByTagName('firstname')->item(0)->nodeValue;
  $link  = $xmlObject->item($i)->getElementsByTagName('lastname')->item(0)->nodeValue;
  $sql   = "INSERT INTO my_table_name (title, url) VALUES ('$title', '$link')"."<br>";
  echo $sql;

}*/
//$xmlfile = 'xmdata.xml';
//$xmlparser = xml_parser_create();

$xmldata=file_get_contents('xmdata.xml');
$data=simplexml_load_string($xmldata);
//print_r($data);
echo $data->item['3']->id
/*foreach (simplexml_load_string($xmldata) as $key) {
  echo $key->firstname."<br>";

}*/
?>
