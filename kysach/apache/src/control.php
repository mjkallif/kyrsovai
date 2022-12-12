<?php
require 'connenct.php';
require 'function.php';

header('Content-type: json/appli');

if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    if (isset($_GET['id']) == true){
        getPost($connect);
    }
    else getPosts($connect);
    
} elseif($_SERVER['REQUEST_METHOD'] == 'POST'){
    
}
?>