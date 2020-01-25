<?php

print_r(biodataSaya());

function biodataSaya(){
    $biodata = array(
        "name" => "Alvito Barimansyah",
        "age" => 18,
        "address"=> "KOMP. TUGU PERMAI BLOK C4/6 RT 010/012, TUGU UTARA, KOJA, JAKARTA UTARA, DKI JAKARTA 14260",
        "hobbies" => array("coding", "nonton anime", "gaming"),
        "is_married"=>false,
        "school"=>[
            "highSchool"=> "SMK PERGURUAN CIKINI JAKARTA",
            "year_in" => 2016,
            "year_out" => 2019,
            "major"  => "Teknik Elektronika Audio Video"
        ],
        "skills"=> array(
            [
            "name" => "Web Developer",
            "level" => "Beginner"
            ],
            [
                "name" => "Mobile Programming",
                "level" => "Beginner"
            ],
            )
    );
    return json_encode($biodata);
}