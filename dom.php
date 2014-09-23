<?php
// The DOM extension uses UTF-8 encoding by default

$dom = new DOMDocument('1.0');
$album = new DOMElement('Album');
$track = new DOMElement('Track');

// album has to be appended to a DOMDocument first, otherwise you get:
// Fatal error: Uncaught exception 'DOMException' with message 'No Modification Allowed Error'
// $album->appendChild($track);
// $album->setAttribute('name', 'First');


$dom->appendChild($album);
$album->appendChild($track);  // now you can append Track
$album->setAttribute('name', 'First');

// Alternatively use createElement()
$album = $dom->createElement('Album');
$album->setAttribute('name', 'Second');

// using $track variable here would move Track from the first Album element to the second one
//$album->appendChild($track);

$album->appendChild($dom->createElement('Track'));
$dom->appendChild($album);

echo $dom->saveXML();