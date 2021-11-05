<?php include("header.php") ?>

	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
			<h2> Buscas algo en especifico?</h2>
			</div>

			<div class="articulo">
				<article>
				<br><br>
				
						
						<form action="#" method="post">
							<p>Año del modelo buscado: <select name="modelo">
								<option>2000</option>
								<option>2001</option>
								<option>2002</option>
								<option>2003</option>
								<option>2004</option>
								<option>2005</option>
								<option>2006</option>
							</select></p><br>
							<p>Marca <select name="modelo">
								<option>GMC</option>
								<option>Ford</option>
								<option>Chevrolet</option>
								<option>Volkswagen</option>
								<option>Italika</option>
								<option>Honda</option>
								<option>Pidgeot</option>
							</select></p><br>
							<p>Color <select name="traccion">
								<option>Rojo</option>
								<option>Rojo oscuro</option>
								<option>Azul</option>
								<option>Azul oscuro</option>
							</select></p><br>
							<p>Tipo <select name="credito">
								<option>Camioneta</option>
								<option>Auto</option>
								<option>Auto compacto</option>
								<option>Todo terreno</option>
								<option>De carga</option>
								<option>Familiar</option>
							</select></p><br>
							<p>Estado <select name="credito">
								<option>Nuevo</option>
								<option>Seminuevo</option>
								<option>Usado en buenas condiciones</option>
								<option>Reparado</option>
								<option>Con fallas</option>
							</select></p>
							<br>

							<input type="reset" name="reset" value="Comenzar búsqueda"></p>
							</form>
				</article>
			</div>

			<?php include("lado.php") ?>
		</div>
	</section>
	
    <?php include("pies.php") ?>
</body>
</html>