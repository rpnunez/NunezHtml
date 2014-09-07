<?php
/**
 * Created by PhpStorm.
 * User: raymond
 * Date: 9/7/14
 * Time: 12:56 AM
 */

/**
|*\ Idea 1
 */

// Init core object
$NunezHtml = new NunezHtml\Html();

$html = new Element('html');
$head = new Element('head');
$script = new Element('script',
    array(
        'type' => 'javascript',
        'href' => array(
            'app.js',
            'models.js'
        )
    )
);

$script->appendTo($head);
$head->appendTo($html);

$body = new Element('body');
$p = new Element('p',
    array(
        'content' => 'Hello, world!'
    )
);

$body->prependTo($html);

echo $html->html();