<?php

// see env.php
if(_IN_PRODUCTION_) set_error_handler("my_error_handler");


function my_error_handler($errno, $msg){
    $log = $errno."::".$msg."\n";
    //see env.php
    $handler = fopen(_LOG_, "a");
    fwrite($handler, $log);
    fclose($handler);
}

class Greska {
    public $id;
    public $description;

    function __construct($id, $description){
        $this->id = $id;
        $this->description = $description;
    } 
}