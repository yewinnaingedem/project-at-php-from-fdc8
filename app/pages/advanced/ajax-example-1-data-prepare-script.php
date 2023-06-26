<?php
    $people = [
        [
            "id" => 1,
            "firstname" => "Aung Phyo",
            "lastname" => "Wai",
            "email" => "apw@gmail.com"
        ],
        [
            "id" => 2,
            "firstname" => "Hein Htet",
            "lastname" => "Oo",
            "email" => "hto@gmail.com"
        ],
        [
            "id" => 3,
            "firstname" => "Kyaw",
            "lastname" => "Hein",
            "email" => "kh@gmail.com"
        ],
    ];

    echo json_encode($people); //php object to javascript object
?>