<?php

try {
	$pdo = new PDO('mysql:dbname=users; host=localhost', 'mysql', 'mysql');
} catch (PDOException $e) {
	die($e->getMessage());
}