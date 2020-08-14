<?php
require 'require.php';
$id = -1;
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['student'])) {
        $id = intval($_GET['student']);
    } else {
        $er = array(
            //Undetified request format
            "error" =>  new Greska(0,_ERROR_[0])
        );
        echo json_encode($er);
        return;
    }
    try {
        $db_operator = new MySqlApi();
        if($db_student = $db_operator->getStudent($id, "csmb")){
            $student = new Student();
            $student->id = $db_student["id"];
            $student->name = $db_student["name"];
            $student->grades = array_map("intval", explode(" ", $db_student["grades"]));
            //care of sides effect $student->grades might be changed
            $student->pass = $student->csmb_pass();
            echo json_encode($student);
        } else {
            echo "{}";
        };
    }
    catch(Exception $e){
        $tmp_arr = explode(":", $e->getMessage());
        $er = array(
            "error" =>  new Greska($tmp_arr[0],$tmp_arr[1])
        );
        echo json_encode($er);
        exit(255);
    }
}


