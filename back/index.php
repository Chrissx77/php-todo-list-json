<?php

header('Content-Type: application/json');
header("Access-Control-Allow-Headers: X-Requested-With");
header("Access-Control-Allow-Origin: http://localhost:5173");

$jsonTasks = file_get_contents(__DIR__ . "/tasks.json");
echo $jsonTasks;









// $tasks = [
//     [
//         'testo' => 'Fare la spesa',
//         'stato' => false,
//     ],
//     [
//         'testo' => 'Studiare per l\'esame',
//         'stato' => false,
//     ],
//     [
//         'testo' => 'Scrivere il report',
//         'stato' => true,
//     ],
//     [
//         'testo' => 'Andare in palestra',
//         'stato' => false,
//     ],
//     [
//         'testo' => 'Preparare la cena',
//         'stato' => true,
//     ],
// ];


// $jsonTasks = json_encode($tasks);
// file_put_contents("tasks.json", $jsonTasks);
