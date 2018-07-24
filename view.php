<?php include_once ('db/mysql.php');?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<title>Новости</title>
</head>
<body>
<header></header>
<main>
	<section class="inner">
		<div class="news-detail">
		<?php 
		if ($stmt->execute(array($_GET['id']))):
			while ($row = $stmt->fetch()):?>
				<div class="news-detail__title">
					<?=$row['title']?>
				</div>
				<div class="news-detail__content">
					<?=$row['content']?>
				</div>
			<?php 
			endwhile; 
		endif;?>
		</div>
		<div class="news-detail-link">
			<a href="news.php">Все новости >></a>
		</div>
	</section>
</main>
<footer></footer>
</body>
</html>