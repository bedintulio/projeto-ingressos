<?php
$db = new PDO('sqlite:' . __DIR__ . '/../storage/database.sqlite');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
return $db;
