<?php 
	include 'conf/conn.php'; 
	include 'conf/conf.php'; 
?> 

<!DOCTYPE html> 
<html> 
<head> 
	<title>PDO CRUD PBO</title> 
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="assets/css/css.css"> 
</head> 
<body> 
	<div class="container">
		<nav class="navbar navbar-dark bg-dark navbar-expand-lg"> 
			<?php include 'pages/menu.php';?> 
		</nav> 
			<?php 
				if(!is_null(get('p'))) { 
					switch (get('p')) { 
						case 'home': 
							inc('pages/home'); 
							break; 
						case 'datanama': 
							switch (get('m')) { 
								case 'home': 
									inc('pages/all'); 
									break; 
								case 'add': 
									inc('pages/add'); 
									break; 
								case 'edit': 
									inc('pages/edit'); 
									break; 
								default: 
									inc('pages/all'); 
									break; 
							} 
						break; 
						default: 
							inc('pages/home'); 
							break; 
					} 
					}else{ inc('pages/home'); 
				} 
			?> 
	</div>
</body> 
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</html>