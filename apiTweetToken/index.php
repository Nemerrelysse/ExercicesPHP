<?php
session_start();

$endpoints=[
    "/createpost"=> function(){
        if(isset($_POST['message'])){
            $message=$_POST['message'];
            $id=$_SESSION['userid'];
            $stmt= $db->prepare("insert into posts (author_id,created_at,content) values (:id,NOW(),:message)");
            $stmt->execute(['id'=>$id, 'message'=>$message]);
            http_response_code(200);
        }
    },
    "/deletepost"=> function(){

    },
    "/showlastposts"=> function(){

    },
    "/getpost"=> function(){

    }
];

if(!isset($endpoint[$_SERVER['REQUEST_URI']])){
    http_response_code(404);
    echo json_encode([
        "err"=>"endpoint_does_not_exist"
    ]);
    exit;
}

$endpoint = $endpoints[$_SERVER['REQUEST_URI']];
$endpoint();