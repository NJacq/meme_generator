<?php
session_start();
require('model/model.php');

$response = getImages();
$images=$response->fetchAll(PDO::FETCH_ASSOC);

require('view/choixbddView.php');
