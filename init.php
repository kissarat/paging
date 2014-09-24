<?php
$db = new PDO("mysql:host=". getenv('IP') .";dbname=c9", getenv('C9_USER'));
$limit = 10;
$offset = isset($_GET['offset']) ? $_GET['offset'] : 0;
