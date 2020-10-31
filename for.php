<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8" >
	<title>forを使ってみよう</title>
	<link rel="stylesheet" href="/php/css/skyblue.css">
</head>
<body>
	<div class="bg-success padding-y-20">
		<div class="container text-center">
			<h1>forを使ってみよう</h1>
		</div>
	</div>
	<div class="container padding-y-20">
		<!-- ここから -->
		<?php
		for ( $i = 1; $i <= 5; $i++ ) {
			echo "カウンタ変数：". $i. "<br>";
		}
		?>
		<!-- ここまで -->
		<ul>
			<!-- ここから -->
			<?php
			for ( $i = 0; $i < 5; $i++ ) {
				echo "<li>";
				echo $i;
				echo "</li>";
			}
			?>
			<!-- ここまで -->
		</ul>
	</div>
</body>
</html>
