<?php


$con = mysqli_connect('localhost', 'root', '', 'shoutbox');

if($con == false){
    die("Connection not found! ");
}