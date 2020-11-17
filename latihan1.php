<?php

$mahasiswa = [

    [
        "nama" => "Rakeyan Nuramria",
        "nrp" => "183040098",
        "email" => "nuramria.183040098@mail.unpas.ac.id"
    ],
    [
        "nama" => "Ryan",
        "nrp" => "18304000",
        "email" => "ryan@gmail.com"
    ]

];


$data = json_encode($mahasiswa);
echo $data;
