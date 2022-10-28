<?php  

header("Access-Control-Allow-Origin: *");

// Creating GET Request Method
$method = $_SERVER['REQUEST_METHOD'];

if($method == 'GET') {
    $required = [
        "slackUsername" => "sparkybug",
        "backend" => true,
        "age" => 22,
        "bio" => "I am a Computer Science Undergrad with a great passion to impact the world and make a difference via the tool of Technology!"
    ];

    print_r(json_encode($required));
}

?>