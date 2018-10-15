<?php

$mName=$_POST['menu'];
$iName=$_POST['item'];
$price=$_POST['price'];

$filename="Item.xml";
$xml = new XMLWriter();
$xml->openMemory();
//$xml->openURI("php://output");  //print on screen no file output
$xml->setIndent(true);
$xml->startDocument('1.0', 'UTF-8');
$xml->startElement('information');

    $xml->startElement("MenuData");
    $xml->writeElement("Menu_name",$mName);
//$xml->endElement();
//$xml->startElement("Item");
    $xml->writeElement("Item_name",$iName);
//$xml->endElement();
//$xml->startElement("price");
    $xml->writeElement("Price",$price);
    $xml->endElement();

    $xml->endElement();
    $xml->endDocument();




//header('Content-type: text/xml'); //print on screen no file output with output memory
//echo $xml->outputMemory(); //print on screen no file output with output memory

$file = $xml->outputMemory();
file_put_contents($filename,$file,FILE_APPEND);

//$xml->flush(); //print on screen no file output

echo "XML write successful! <a href='Menu.php'>go back</a>";
?>