<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SENASOFT 2016 - Armenia Quindio - Dia 1</title>
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="public/css/custom.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h1 class="text-center text-muted">PRODUCTOS</h1>
				<hr>
			</div>
		</div>
			<div class="row">
				<div class="col-md-2"></div>
					<div class="col-md-4">
					<h3 class="text-center text-muted">LISTA</h3>
					<hr>
						<div class="form-group">
								<?php  
									include 'libs/database.php';
									include 'libs/product.php';

									$prds = new Product();
									$productos = $prds->listProducts();
								?>

							<select id="productos" class="form-control">
								<option value="">Seleccione el Producto...</option>
									<?php foreach ($productos as $prd):?>
										<option value="<?php echo $prd['id']; ?>">
											<?php echo $prd["nombre"] ?>
										</option>
									<?php endforeach ?>
							</select>
						</div>
						<div class="form-group">
							<button id="btn-action" class="btn btn-success" >MOSTRAR</button>
						</div>
				</div>
				<div class="col-md-4">
					<h3 class="text-center text-muted">INFORMACION</h3>
					<hr>
						<div id="info">
							
						</div>
				</div>
				<div class="col-md-2"></div>
			</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<hr>
						<h5 class="text-center text-muted">SENASOFT 2016 - Armenia Quindio - Dia 1</h5>
					</div>
				</div>
	</div>

	<script src="public/js/jquery-3.1.1.min.js"></script>
	<script src="public/js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function()
		{
			$('body').on("click", '#btn-action', function(event)
			{
				event.preventDefault();
				$idp=$('#productos').val();
				
				$.get('load.php', {idp: $idp}, function(data)
				{
					$('#info').html(data);
					$('#info').removeClass('showprod').empty();

					setTimeout(function()
					{
						$('#info').html(data).addClass('showprod');
					}, 100);
					//console.log(data);

				});

			});
		});
	</script>
</body>
</html>