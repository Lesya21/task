<?php
include_once ('connect.php');

$per_page = 5;
(isset($_GET['page'])) ? $page = ($_GET['page'] - 1) : $page = 0;
$start = abs($page * $per_page);

$data = $DBH->query("SELECT * FROM news ORDER BY idate DESC LIMIT $start, $per_page")->fetchAll();

$row = $DBH->query("SELECT count(*) FROM news")->fetch(PDO::FETCH_NUM);
$total_rows = $row[0];
$num_pages = ceil($total_rows / $per_page);

if (!empty($_GET['id']))
	$stmt = $DBH->prepare("SELECT * FROM news WHERE id = ?");

	
