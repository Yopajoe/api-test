<?php

const HOST = "localhost";
const USER = "myapi";
const DATABASE = "api-test_db";

const _IN_PRODUCTION_ = true;
const _LOG_ = "C:\\xampp\\htdocs\\api-test\\logs.txt";

const _ERROR_ = array(
    0 => "Undentified request format.",
    1 => "Conncetion to database has been failed.",
    2 => "Student id must be unsigend integer.",
    3 => "Invalid query statement."
);