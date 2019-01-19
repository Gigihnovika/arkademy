<?php
// array
$array = Array (
    "0" => Array (
        "name" => "Gigih",
        "address" => "Bumiayu",
        "hobbies" => "explore",
        "is_married" => "false",
        "schools" => "SMK Telkom Purwokerto",
        "skills" => "Programming"
    ),
    "1" => Array (
        "name" => "Rani",
        "address" => "Kroya",
        "hobbies" => "makan",
        "is_married" => "false",
        "schools" => "SMK Telkom Purwokerto",
        "skills" => "Tidur"
    ),
    "2" => Array (
        "name" => "Rio",
        "address" => "Bumiayu",
        "hobbies" => "Sepakbola",
        "is_married" => "false",
        "schools" => "SMAN 1 Bumiayu",
        "skills" => "Sepakbola"
    )
);

// encode array to json
$json = json_encode(array('data' => $array));

// write json to file
if (file_put_contents("data.json", $json))
    echo "File JSON sukses dibuat...";
else 
    echo "Oops! Terjadi error saat membuat file JSON...";

// data.json

// {"data":[{"id":"USR1","name":"Steve Jobs","company":"Apple"},{"id":"USR2","name":"Bill Gates","company":"Microsoft"},{"id":"USR3","name":"Mark Zuckerberg","company":"Facebook"}]}
?>