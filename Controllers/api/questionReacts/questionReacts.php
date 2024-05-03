<?php
require_once '../../questionControllers/questionMapper.php';
// Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
$questionId = isset($_GET['id']) ? $_GET['id'] : die();
$questionArr = QuestionMapper::selectObjectAsArray($questionId, 'id');
echo json_encode($questionArr[0]);