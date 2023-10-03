<?php 
include __DIR__ .'../back-end/api/get-disk.php';
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Simple TODO list</title>

		<!-- Bootstrap 5.3.0 -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />

		<!-- Font-awesome 6.4.2 -->
		<!-- <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    /> -->

		<!-- Custom style -->
		<link rel="stylesheet" href="./css/style.css" />

		<!-- VUE 3 -->
		<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

		<!-- Axios -->
		<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

		<!-- VUE 3 APP -->
		<script src="./js/main.js" defer></script>
	</head>

	<body>
		<div class="wrapper">
			<div id="app">
				<main>
					<div class="container">
						<div class="disk" v-for="disk in dischi" key="index">
							<img :src="disk-poster">
							<h3>{{disk.title}}</h3>
							<small>{{disk.author}}</small>
						</div>
					</div>
				</main>
			</div>
		</div>
	</body>
</html>
