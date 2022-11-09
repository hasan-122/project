<?php
$conn  = mysqli_connect('localhost','root','','winer');
mysqli_set_charset($conn,'UTF8');
if (!$conn){
    echo "Erorr: ".mysqli_connect_error() ;
}