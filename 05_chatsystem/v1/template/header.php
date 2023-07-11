<?php
session_start();
include("includes/DBConnection.php");

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<title><?= isset($_SESSION["title"]) ? $_SESSION["title"] : "Chat System"; ?></title>
		<!-- Google Fonts -->
		<link href="https://fonts.gstatic.com" rel="preconnect">
		<link
				href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
				rel="stylesheet">

		<!-- Vendor CSS Files -->
		<link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
		<link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
		<link href="../../assets/vendor/quill/quill.snow.css" rel="stylesheet">
		<link href="../../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
		<link href="../../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
		<link href="../../assets/vendor/simple-datatables/style.css" rel="stylesheet">
		<link rel="stylesheet"
				href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/css/bootstrap-select.min.css">

		<!-- Library Leaflet - maps -->
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
			integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
			crossorigin=""/>
		<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
			integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
			crossorigin=""></script>

		<!-- Template Main CSS File -->
		<link href="assets/css/app.css" rel="stylesheet">
	</head>
	<body>
