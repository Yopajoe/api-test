<?php

class Student {

    public $id;
    public $name;
    public $grades = [];
    public $pass;

    //if grades is empty returns -1
    public function csm_pass() {
        return empty($this->grades)?false:array_sum($this->grades)/count($this->grades)>=7;
    }

    public function csmb_pass(){
        if(count($this->grades)>2){
            //side effect on $this->grades
            arsort($this->grades);
            array_pop($this->grades);
            $this->grades = array_values($this->grades);
        }
        return max($this->grades)>8;
    }

}