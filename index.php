<?php
namespace Template;
require_once __DIR__ . '/support/lib/vendor/autoload.php';

use Approach\context;
use Approach\Render\HTML;

$root = new HTML(tag:'div');
$root = new HTML(tag:'link', attributes:['rel' => 'stylesheet', 'href' => 'styles.css']);

$root[] = new HTML(tag:'nav', classes:'navbar');

$navItems = [
    'Home',
    'About',
    'Contact',
    'Services',
];

foreach($navItems as $item) {
    $root[] = new HTML(tag:'a', content:$item, classes:'nav-link');
}


$card = new HTML(tag:'div', id:'card');

$cardContent = new HTML(tag:'div', classes:'card-content');
$cardContent[] = new HTML(tag:'h2', content:'Card Title', classes:"card-title");
$cardContent[] = new HTML(tag:'p', content:'This is some information about the card', classes:'card-info');

$card[] = $cardContent;
$root[] = $card;

$root[] = new HTML(tag:'ul', classes:'list-group');

$listItems = [
    'A disabled item',
    'A second item',
    'A third item',
    'A fourth item'
];


foreach($listItems as $index => $item) {
    $attributes = ['class' => 'list-group-item'];
    if ($index === 0) {
        $attributes['class'] .= ' disabled';
        $attributes['aria-disabled'] = 'true';
    }
    $root[] = new HTML(tag:'li', content:$item, attributes:$attributes);
}

// $root[] = new HTML(tag:'h1', content:'Hello World', classes:'title')


$root[] = new HTML(tag:'br');

$newroot = new HTML(tag:'div', classes:'badge');

    $heading = new HTML(tag:'h1', content: 'Example heading <br>');
    $badge = new HTML(tag:'span', content: 1, classes:'badge');
    $newroot[] = new HTML(tag:'br');
    $heading[]  = $badge;
    $newroot[] = $heading;

    echo $newroot;

    $root[] = new HTML(tag:'br');
    $root[] = new HTML(tag:'button', content:'Click me', attributes:['onclick' => 'alert("Hello World")']);
    echo $root;



