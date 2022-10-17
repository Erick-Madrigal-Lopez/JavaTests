<?php $active = 'productos'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Productos | ASERSA</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="copyright" content="">
	<style>
		p.title{
			font-size: 23px;
			color: #000;
			font-weight: bold;
		}
		p.description{
			font-size: 17px;
			color: #000;
		}
		p.price{
			color: green;
		}
		img.imagen{
			height: 200px;
			width: auto;
		}
	</style>

	<?php //include_once('partials/metas.php'); ?>
	<?php include_once('partials/styles.php'); ?>
</head>
<body>
	<?php include_once('partials/header.php'); ?>

	<div class="container">
		<div class="row">
			<?php
			$lista = [[1, "Tapon Enroscado", 244.74],[2, "Tapon Enroscado", 244.74],[3, "Tapon Enroscado", 244.74],[4, "Tapon Enroscado", 244.74]
				,[5, "Tapon Enroscado", 244.74],[6, "Tapon Enroscado", 244.74],[7, "Tapon Enroscado", 244.74],[8, "Tapon Enroscado", 244.74],[9, "Tapon Enroscado", 244.74],[10, "Tapon Enroscado", 244.74]
				,[11, "Tapon Enroscado", 244.74],[12, "Tapon Enroscado", 244.74],[13, "Tapon Enroscado", 244.74],[14, "Tapon Enroscado", 244.74],[15, "Tapon Enroscado", 244.74],[16, "Tapon Enroscado", 244.74]];
			foreach ($lista as $key => $item) { 
				echo '<a href="#"> <div class="col-3 justify-content-center mb-3 p-2">
						<img class="imagen" src="img/asersa/productos/producto1.jpg" alt="producto'.$item[0].'">
						<p class="title">'.$item[1].'</p>
						<p class="description">Descripsion</p>
						<p class="price">$'.$item[2].' MXN</p>
					</div> </a>';
			}
			?>
		</div>
	</div>

    <?php include_once('partials/footer.php'); ?>
	<?php include_once('partials/scripts.php'); ?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mb.YTPlayer/3.2.9/jquery.mb.YTPlayer.min.js"></script>
	<script>
		$(function(){
			/*----------  Video Intro  ----------*/
			//$("#video").YTPlayer();
		});
	</script>
</body>
</html>