<?php

header('Content-Type: application/json');
header("Access-Control-Allow-Headers: X-Requested-With");
header("Access-Control-Allow-Origin: http://localhost:5173");


// versione 2 :DEFINITIVA
$jsonTasks = file_get_contents(__DIR__ . "/tasks.json");
$tasks = json_decode($jsonTasks, true);

$newTaskText = $_POST['text'];
$newTask = [
    'testo' => $newTaskText,
    'stato' => false
];

$tasks[] = $newTask;
$jsonTasks = json_encode($tasks);
file_put_contents(__DIR__ . "/tasks.json", $jsonTasks);
echo $jsonTasks;








// verisone 1
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

// $newTaskTesto = $_POST['text'];
// $newTask = [
//     'testo' => $newTaskTesto,
//     'stato' => false
// ];

// $tasks[] = $newTask;

// $jsonTasks = json_encode($tasks);
// echo $jsonTasks;
