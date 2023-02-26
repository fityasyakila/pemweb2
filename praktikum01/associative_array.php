<?php
$profileArray = [
    "nama" => "Fitya",
    "semester" => 2
];

echo $profileArray["nama"] . "<br>";
echo $profileArray["semester"] . "<br>";

$profileMultiArray = [ 
    [
        "nama" => "Fitya",
        "semester" => 2
    ], [
        "nama" => "Zee",
        "semester" => 4
    ]
];
foreach($profileMultiArray as $profile) {
    echo $profile['nama'] . "<br>";
    echo $profile['semester'] . "<br>";
}