<!DOCTYPE HTML>
<html lang="es">

<head>
	<html lang="es">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width" />
	<title>2MG</title>
	<meta name="author" content="Brandemma" />
	<meta name="description" content="" />

	<!--================== 	ENLACE HOJA DE ESTILOS (INICIA)  =====================-->

	<link rel="stylesheet" type="text/css" href="css/estilos.css">

	<!--================== 	ENLACE HOJA DE ESTILOS (TERMINA)  =====================-->

	<!--================== 	ENLACE ICONO (INICIA)  =====================-->

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<!--================== 	ENLACE ICONO (TERMINA)  =====================-->

</head>

<body>
	<header>
		<?php
			include 'menu.php';
		?>
	</header>
	
	<div class="contenido linea-energetica">
		<div class="izquierda-energetica">
			<img src="img/solucion-energetica-2mg.jpg">
		</div>
		<div class="derecha-energetica">
			<div class="derecha-energetica-centrado">
				<h2 class="tit-part1">Soluções de</h2>
				<h2 class="tit-part2">Eficiência <span>Energética</span></h2>
				<p>A eficiência energética consiste em obter o melhor desempenho na produção de um material ou serviço com o menor gasto de energia. Como exemplo de ação, consta a modernização de equipamentos no sentido de redução de consumo de energia. Os programas para o consumo consciente também contribuem para o desenvolvimento da economia.<br><br>
				Grande parte da energia ‘e empregada na fabricação dos produtos que utilizamos, especialmente os que levam como matéria prima papel, vidro e aço. Portanto, ações de reutilização e reciclagem também ajudam a economizar energia. Do mesmo modo, a energia ‘e utilizada para o bombeamento de agua, o que se economizada, diminuem o consumo energético.<br><br>
				Como parte dos trabalhos e serviços que oferecemos, temos a capacidade de efetuar estudos de viabilidade econômica para a substituição de luzes por tecnologia LED, contribuindo, deste modo, com a preservação do meio ambiente e promovendo melhoras na economia Peruana.</p>
				
				<!-- <p class="texto-azul espaciado">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean elementum urna vel enim aliquet, ac vulputate ipsum faucibus. Duis ut eleifend neque.</p> -->

				<div class="contenedor-caracteristicas">
					<div class="caracteristicas foco">
						<img src="img/foco.png"> 
						<img src="img/corchete.png"> 
						<p>Melhor desempenho na produção.</p>
					</div>

					<div class="caracteristicas rayo">
						<img src="img/rayo.png"> 
						<img src="img/corchete.png"> 
						<p>Menor consumo de energia.</p>
					</div>

					<div class="caracteristicas esquema">
						<img src="img/esquema.png"> 
						<img src="img/corchete.png"> 
						<p>Viabilidade econômica estuda para a mudança de iluminação.</p>
					</div>

					<div class="caracteristicas precaucion">
						<img src="img/precaucion.png"> 
						<img src="img/corchete.png"> 
						<p>Redução do consumo de energia.</p>
					</div>
				</div>

				<div class="escribenos">
					<a href="">Escreva-nos <img src="img/flecha-derecha-blanca.png"></a>
				</div>

				<!-- <p class="texto-azul espaciado">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean elementum urna vel enim aliquet.</p>

				<p class="texto-azul">Lorem ipsum dolor <span>sit amet</span>.</p> -->
			</div>
		</div>

		<div class="clear"></div>

		<?php
			include 'contacto.php';
		?>
	</div>

	<?php
		include 'pie-pagina.php';
	?>
</body>

</html>