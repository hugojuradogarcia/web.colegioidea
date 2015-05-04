<?php 
require('../lib/recursos_model.php'); 
$recursos = new Recursos();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Recursos colegio con idea</title>
	<link rel="stylesheet" href="css/main.css">
</head>
<body id="recursos">
		<header class="header-recursos">
			<img class="imgCloud floating-left" src="img/recursos/nubesIzq.png" alt="">
			<img
class="imgCloud floating-right" src="img/recursos/nubesDer.png" alt="">
		</header>

		<section id="section-recursos">
			<header class="col-12">
				<img src="img/recursos/titulo.png" class="col-3" alt="">
			</header>
			<div class="container">
				<div class="col-3">
					<?php 
					$recursos->get(19);
					?>
					<a href="#<?php echo $recursos->rows_recursos[ 0 ]["id_recursos"];?>" class="recursos">
						<img src="<?php echo "../../admin.recursos/".$recursos->rows_recursos[ 0 ]["logo"];?>" class="img-responsive" alt="">
					</a>
				</div>

				<div class="col-3">
					<?php 
					$recursos->get(31);
					?>
					<a href="#<?php echo $recursos->rows_recursos[ 0 ]["id_recursos"];?>" class="recursos">
						<img src="<?php echo "../../admin.recursos/".$recursos->rows_recursos[ 0 ]["logo"];?>" class="img-responsive" alt="">
					</a>
				</div>
				<div class="col-3">
					<?php 
					$recursos->get(16);
					?>
					<a href="#<?php echo $recursos->rows_recursos[ 0 ]["id_recursos"];?>" class="recursos">
						<img src="<?php echo "../../admin.recursos/".$recursos->rows_recursos[ 0 ]["logo"];?>" class="img-responsive" alt="">
					</a>
				</div>
				<div class="col-3">
					<?php 
					$recursos->get(12);
					?>
					<a href="#<?php echo $recursos->rows_recursos[ 0 ]["id_recursos"];?>" class="recursos">
						<img src="<?php echo "../../admin.recursos/".$recursos->rows_recursos[ 0 ]["logo"];?>" class="img-responsive" alt="">
					</a>
				</div>

				<div class="col-3">
					<?php 
					$recursos->get(25);
					?>
					<a href="#<?php echo $recursos->rows_recursos[ 0 ]["id_recursos"];?>" class="recursos">
						<img src="<?php echo "../../admin.recursos/".$recursos->rows_recursos[ 0 ]["logo"];?>" class="img-responsive" alt="">
					</a>
				</div>
				<div class="col-3">
					<?php 
					$recursos->get(29);
					?>
					<a href="#<?php echo $recursos->rows_recursos[ 0 ]["id_recursos"];?>" class="recursos">
						<img src="<?php echo "../../admin.recursos/".$recursos->rows_recursos[ 0 ]["logo"];?>" class="img-responsive" alt="">
					</a>
				</div>
				<div class="col-3">
					<?php 
					$recursos->get(43);
					?>
					<a href="#<?php echo $recursos->rows_recursos[ 0 ]["id_recursos"];?>" class="recursos">
						<img src="<?php echo "../../admin.recursos/".$recursos->rows_recursos[ 0 ]["logo"];?>" class="img-responsive" alt="">
					</a>
				</div>
				<div class="col-3">
					<?php 
					$recursos->get(34);
					?>
					<a href="#<?php echo $recursos->rows_recursos[ 0 ]["id_recursos"];?>" class="recursos">
						<img src="<?php echo "../../admin.recursos/".$recursos->rows_recursos[ 0 ]["logo"];?>" class="img-responsive" alt="">
					</a>
				</div>

				<div class="col-3">
					<?php 
					$recursos->get(35);
					?>
					<a href="#<?php echo $recursos->rows_recursos[ 0 ]["id_recursos"];?>" class="recursos">
						<img src="<?php echo "../../admin.recursos/".$recursos->rows_recursos[ 0 ]["logo"];?>" class="img-responsive" alt="">
					</a>
				</div>
				<div class="col-3">
					<?php 
					$recursos->get(37);
					?>
					<a href="#<?php echo $recursos->rows_recursos[ 0 ]["id_recursos"];?>" class="recursos">
						<img src="<?php echo "../../admin.recursos/".$recursos->rows_recursos[ 0 ]["logo"];?>" class="img-responsive" alt="">
					</a>
				</div>


			</div>

		</section>

		<footer id="footer-recursos">
			<!--<img src="img/recursos/edificios.png" class="component-footer-recursos" id="edificios-recursos" width="100%" alt="">-->
			<img src="img/recursos/car.png" class="component-footer-recursos slideRight-car" width="150px" id="car-recursos" alt="">
			<img src="img/recursos/bus.png" class="component-footer-recursos slideRight-bus" width="300px" id="bus-recursos" alt="">
		</footer>
	
	<!-- MODAL -->
	<!--<div class="md-modal md-effect-10" id="modal-10">
		<div class="md-content">
			<h3>Colegio con Idea</h3>
			<div>
				<p><strong>Introducción:</strong> Colegio con IDEA es una solución integral desarrollada especialmente para la educación de nivel preescolar y primaria</p>
				<button class="md-close">Cerrar</button>
			</div>
		</div>
	</div>-->


	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="js/modal.js"></script>

	<script>
	$(document).ready(function(){
		$("a[href^='#'].recursos").click(function(event){
			var id =  $(this).attr("href");
			alert(id);
		});
	})
	</script>

</body>
</html>