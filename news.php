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
			<h1>Новости</h1>
			<div class="news-wrapper">
				<?php foreach ($data as $row):?>
				<div class="news-item">
					<div class="news-item__header">
						<div class="news-item__date"><?=date('d.m.Y', $row['idate'])?></div>
				    	<div class="news-item__title"><a href="../site/view.php?id=<?=$row['id']?>"><?=$row['title']?></a></div>
				 	</div>
			    	<div class="news-item__annons"><?=$row['announce']?></div>						
				</div>
				<?php endforeach; ?>
			</div>
			<div class="pages-text">Страницы:</div>
			<div class="news-nav">
			<?php 
			for($i = 1; $i <= $num_pages; $i++):
			 	if ($i - 1 == $page): ?>
				  	<div class="news-nav__active">
				    	<div class="news-nav__element"><?=$i?></div>
				    </div>
				  	<?php else:?>
			  		<div class="news-nav__container">
			    		<a class="news-nav__element" href="<?=$_SERVER['PHP_SELF']?>?page=<?=$i?>"><?=$i?></a>
			    	</div>
				<?php 
				endif;
			endfor;?>
			</div>
		</section>
	</main>
	<footer></footer>
</body>
</html>