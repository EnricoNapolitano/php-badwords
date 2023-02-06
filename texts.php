<?php
$text = $_GET['text'];
$censure = $_GET['censure'];
$censured_text = str_replace($censure, '***', $text);
$unce_length = strlen($text);
$cen_length = strlen($censured_text);
?>