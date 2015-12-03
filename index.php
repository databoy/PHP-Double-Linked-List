<?php
/**
 * Created by PhpStorm.
 * User: chris
 * Date: 12/2/15
 * Time: 11:18 AM
 */

include("vendor/autoload.php");

use PHPDoubleLinkedList\View;

$view = new View();

$view->insertFirst("foo");

echo $view->totalNodes() . '<br />';
$view->displayForward();
