<?php

$razze_cane = ["Labrador Retriever", "Golden Retriever", "German Shepherd", "Bulldog", "Poodle"];

header('Content-Type: application/json');
header("Access-Control-Allow-Origin: http://localhost:5173");

echo json_encode($razze_cane);



