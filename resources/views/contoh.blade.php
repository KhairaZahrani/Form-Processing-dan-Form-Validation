<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet"  href="/css/bootstrap.min.css">
	<title>Daftar Mahasiswa</title>
</head>
<body>
	<div class="container text-center mt-4">
		<h1>Daftar Mahasiswa</h1>
		<ol class="list-group my-4">
			<?php 
				foreach ($mahasiswa as $nama) {
					echo "<li class=\"list-group-item\"> $nama </li>";
				} 
			?>
		</ol>
		<div>
			<img class="rounded-circle img-thumbnail m-2" src="/img/abc.jpg" width="90px">
			<img class="rounded-circle img-thumbnail m-2" src="/img/abc.jpg" width="90px">
			<img class="rounded-circle img-thumbnail m-2" src="/img/abc.jpg" width="90px">
			<img class="rounded-circle img-thumbnail m-2" src="/img/abc.jpg" width="90px">
		</div>
		<div>
			Copyright © <?php echo date("Y"); ?> Duniailkom
		</div>
		<script src="/js/bootstrap.bundle.min.js"></script>
	</div>
</body>
</html>