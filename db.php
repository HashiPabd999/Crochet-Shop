<?php

$conn = new mysqli("localhost","root","","crochet_shop");

if(!$conn){
    die("connection failed:".$conn->connect_error);
}