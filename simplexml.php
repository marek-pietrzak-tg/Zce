<?php
$string = "<?xml version='1.0'?>
<application>
    <param>l</param>
    <param>a</param>
    <help>
        <cmd>h</cmd>
    </help>
</application>";

$xml = new SimpleXMLElement($string);
//$xml = simplexml_load_string($string);    // this method is also correct

// to load from file use:
// - new SimpleXMLElement($filename, null, true);
// - or: simplexml_load_file($filename);

$xml->addAttribute('name', 'ls');             // this will add key attribute to the <application> root node

echo $xml->children()->count() . PHP_EOL;       // 3

// getting to param:
/*
var_dump($xml->children()->param);
var_dump($xml->param);                          // SimpleXMLElement[] array but:
var_dump($xml->help);                           // as help is a single child it will return SimpleXMLElement object
var_dump($xml->xpath('param'));                 // xpath() returns an array
*/

$node = $xml->param[0];


echo $node->getName() . PHP_EOL;            // param
echo $node . PHP_EOL;                       // l

$node->addAttribute('long', 'list');        // this will add long attribute to current <param> node
var_dump($xml->xpath('param[@long="list"]'));

$xml->addChild('new-node', true);           // true is converted to 1

var_dump($xml->asXML());
/*
string(181) "<?xml version="1.0"?>
<application name="ls">
    <param long="list">l</param>
    <param>a</param>
    <help>
        <cmd>h</cmd>
    </help>
    <new-node>1</new-node>
</application>
 */

//----------

$iterator = new SimpleXMLIterator($string);
foreach ($iterator as $key => $value) {
    echo "key: {$key}, value: {$value}\n";

    if ($iterator->hasChildren()) {
        var_dump($iterator->current());
    }
}

/*
key: param, value: l
key: param, value: a
key: help, value:


object(SimpleXMLIterator)#5 (1) {
["cmd"]=>
  string(1) "h"
}
*/