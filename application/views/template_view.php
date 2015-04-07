<!Doctype html>
<html>
<head>
	<meta charset="utf-8">
    <title>Сервер 1</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container"><link href="application/css/mainstyle.css" rel="stylesheet">
	<?php if(isset($_SESSION["user_id"])) { ?><a href="main/logOut">Выйти</a> <?php }?>
	<?php include 'application/views/'.$content_view; ?>
</div>
</body>
</html>