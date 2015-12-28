<?php

if (!is_dir('images') || !file_exists('images')) {
	mkdir('images', 0777, true);
}

$foldername = $_GET["foldername"];
$foldername = str_replace(' ', '-', $foldername);

if (!is_dir('./images/' . $foldername) || !file_exists('./images/' . $foldername)) {
	mkdir('./images/' . $foldername, 0700);
} else {
	echo "That gallery already exists.";
}