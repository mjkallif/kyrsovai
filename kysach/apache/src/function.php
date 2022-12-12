<?php

require 'connenct.php';


function getPosts($connect){
    $posts = mysqli_query($connect, "SELECT * FROM Hats");

    $postList = [];

    while($post = mysqli_fetch_assoc($posts)) {
        $postList[] = $post;
    }

    print_r($postList);
}

function getPost($connect){
    $id = ($_GET['id']);
    $post = mysqli_query($connect, "SELECT * FROM Hats WHERE id_hats = $id");
    if (mysqli_num_rows($post) < 1){
        http_response_code(404);
        $res = [
            "status" => false,
            "message" => "Пост не найден"
        ];
        echo json_encode($res);
    }
    else{
        $post = mysqli_fetch_assoc($post);
        echo json_encode($post);
    }
}

function addPost(){

}
