<?php
/**
 * Created by PhpStorm.
 * User: chris
 * Source: http://www.codediesel.com/algorithms/doubly-linked-list-in-php/
 * Date: 12/2/15
 * Time: 11:19 AM
 */

namespace PHPDoubleLinkedList;

class Model
{
    public $data;
    public $previous;
    public $next;

    function __construct($data) {
        $this->data = $data;
    }

    public function readNode() {
        return $this->data;
    }
}
