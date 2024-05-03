<?php
require_once '../../UserControllers/userMapper.php';
// Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
UserMapper::selectAllUsers();