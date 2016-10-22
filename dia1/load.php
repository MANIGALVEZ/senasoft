<?php 


	if($_GET)
	{
		include 'libs/database.php';
		include 'libs/product.php';

		$prd = new product();
		$producto = $prd->showProduct($_GET['idp']);
	}

 ?>



 <?php foreach ($producto as $prod): ?>
	<div class="panel panel-success">
		<div class="panel-heading">
			<h3 class="text-center panel-tittle"><?php echo $prod['nombre']; ?></h3>
		</div>
		<div class="panel-body">
		<img src='<?php echo $prod['imagen']; ?>' class="img-responsive">
			<p class="lead">
				<?php echo $prod['descripcion']; ?>
			</p>
			<p class="lead">
				Cantidad: <span class="badge"> <?php echo $prod['cantidad']; ?> unds </span>
				&nbsp;&nbsp;|&nbsp;&nbsp
				Precio: <span class="badge"> $ <?php echo $prod['precio']; ?> </span>
			</p>
		</div>
	</div>
 <?php endforeach ?>