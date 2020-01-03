<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>1º BL - Física</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<?php include "favicon.php" ?>
<link rel="stylesheet" type="text/css" href="css/madre.css">
</head>
<body>
	<?php include "header.php"; ?>
	<div id="cuerpo">
		<div id="contenido">
			<h1 id="titmaterias" >FÍSICA</h1>
			<br>
			<h2>+ FUERZA</h2>
			<div id="tab1" class="plegable">
			<br>
				<ul>
					<li class="lsn"><b>DEF:</b> Interacción entre dos o más cuerpos, capaz de deformar o modificar el estado de movimiento de uno de ellos.</li>
					<br>
					<li class="lsn"><b>TIPOS DE FUERZA</b>
						<ul>
							<ul>
								<li>Peso</li>
								<li>Normal</li>
								<li>Elástica</li>
								<li>Tensión</li>
								<li>Neta</li>
							</ul>
						</ul>
					</li>
					<br>
					<li class="lsn"><b>SUMA VECTORIAL</b>
						<ul>
							<ul>
								<li>Teroría del coseno ==> C = √ A<sup>2</sup> + B<sup>2</sup> + 2 x A x B x cos α</li>
							</ul>
						</ul>
					</li>
					<br>
					<li class="lsn"><b>SUMA VECTORIAL:</b> Tres posibles situaciones
							<br><br>
							<ol>
								<b><li>Vectores con igual dirección</li>
								<img src="media/fisica/sumFuerza1.png">
								<li>Vectores con igual dirección y sentido contrario</li>
								<img src="media/fisica/sumFuerza2.png">
								<li>Vectores con distinta dirección</li></b>
								<img src="media/fisica/sumFuerza3.png">
							</ol>
					</li>
				</ul>
			<br>
			</div>
			<hr>
			<br>
			<h2>+ FUERZAS IMPORTANTES</h2>
			<div id="tab1" class="plegable">
			<br>
				<table id="tfuerzas">
					<tr>
						<th class="fn">FUERZA</th>
						<th class="fn">CUERPO QUE LA REALIZA</th>
						<th class="fn">DIRECCIÓN Y SENTIDO</th>
						<th class="fn">MÓDULO</th>
					</tr>
					<tr>
						<th class="fv">PESO</th>
						<th>Planeta Tierra</th>
						<th>Vertical hacia abajo</th>
						<th><span class="curs">g</span> = Aceleración de la gravedad<br><span class="curs">g</span> = 10 m/s<sup>2</sup><br>PESO = <span class="curs">m x g</span></th>
					</tr>
					<tr>
						<th class="fv">NORMAL</th>
						<th>Superficie de apoyo</th>
						<th>Perpendicular a la superficie hacia arriba</th>
						<th>Se deben tener en cuenta las leyes de Newton</th>
					</tr>
					<tr>
						<th class="fv">ROZAMIENTO</th>
						<th>Cuerpo en contacto con otro cuerpo</th>
						<th>Contraria al movimiento aparente</th>
						<th>M => Coheficiente de coramiento<br>
							<ul>
								<li>Siempre es positivo</li>
								<li>Está entre 0 y 1</li>
								<li>0 < M < 1 // F<sub>r</sub> = M x N</li>
							</ul>
						</th>
					</tr>
					<tr>
						<th class="fv">ELÁSTICA</th>
						<th>Cualquier cuerpo elástico deformado (resorte)</th>
						<th>Dirección => La del resorte</th>
						<th>K = Constante elástica<br>
							<ul>
								<li>△<span class="curs">l</span>
									<ul>
										<li>Delta ele => Deformacion
											<ul>
												<li>F<sub>e</sub> = K x △<span class="curs">l</span></li>
											</ul>
										</li>
									</ul>
								</li>
							</ul>
						</th>
					</tr>
				</table>
			<br>
			<br>
			<br>
			</div>
			<hr>
			<br>
			<h2>+ PRIMER LEY DE NEWTON</h2>
			<div id="tab1" class="plegable">
				<br>
				<p><b>Si un cuerpo se encuentra en equilibrio (Fuerza = 0<sub>n</sub>) permanecerá en reposo o con movimiento en línea recta con velocidad constante (M.R.V)</b></p>
				<br>
			</div>
			<hr>
			<br>
			<h2>+ SEGUNDA LEY DE NEWTON</h2>
			<div id="tab1" class="plegable">
				<br>
				<ul>
					<li>Fneta ≠ 0 N</li>
					<li>El cuerpo posée una aceleración = <span class="fa">Cambio de velocidad</span></li>
					<li>La Fneta es dorectamente proporcional a la aceleración del cuerpo</li>
					<li><span class="fa">Fneta = m.a</span></li>
					<li>Fneta = Dirección y sentido que la aceleración</li>
					<br>
					<hr>
					<br>
					<li><b>Ejercicio</b>
						<ul>
							<ul>
								<br>
								<li>El sistema de la figura se mueve como se indica con una aceleración de 3 m/s<sup>2</sup></li>
								<li>Determinar
									<ul>
										<br>
										<li>Tensión de la cuerda</li>
										<li>Fr sobre el bloque 2 y la superficie</li>
										<li>μ sobre el bloque 2 y la superficie</li>
										<img src="media/fisica/aceleracion1.jpg">
										<br>
										<br>
										<li><span class="fa">CUERPO 1</span>
											<ul>
												<br>
												<li>Fneta = m x a</li>
												<li>P1 - T = m x a</li>
												<li>P1 = m1 x g = 25</li>
												<li>m x a = 2.5 x 3.0 = 7.5N
													<ul>
														<br>
														<li>25 -T = 7.5 N</li>
														<li>25 = 7.5 + T</li>
														<li>25 - 7.5 = T = 17.5N</li>
													</ul>
												</li>
											</ul>
										</li>
										<br>
										<li><span class="fa">CUERPO 2</span>
											<ul>
												<br>
												<li>T - Fr = m2 x a</li>
												<li>17.5 - Fr = 4.0 x 3.0</li>
												<li>17.5 - Fr = 12</li>
												<li>17.5 - 12 = 5.5 N = Fr</li>
											</ul>
										</li>
										<br>
										<hr>
										<br>
										<li> Fr = μ x N</li>
										<li>Eje y -> Fneta = 0N</li>
										<br>
										<li>|N| = |P2| = m2 x g = 40N</li>
										<li>Fr / N = μ = 5.5 / 40 = 0.13N = μ</li>
									</ul>
								</li>
							</ul>
						</ul>
					</li>
				</ul>
				<br>
			</div>
			<hr>
			<br>
			<h2>+ MOVIMIENTO RECTILÍNEO UNIFORME</h2>
			<div id="tab1" class="plegable">
				<br>
				<ul>
					<li>Apuntes 1: <a href="media/fisica/apuntes/01_Movimiento_rectilineo_uniforme.pdf" target="_blank">Descargar</a></li><br>
					<li>Apuntes 2: <a href="media/fisica/apuntes/01_Movimiento_rectilineo_uniforme2.pdf" target="_blank">Descargar</a></li>
				</ul>
				<br>
			</div>
			<hr>
			<br>
			<h2>+ TRABAJO Y ENERGÍA</h2>
			<div id="tab1" class="plegable">
				<br>
				<ul>
					<li>Primeros conceptos: <a href="media/fisica/apuntes/02_Trabajo_Energia.pdf" target="_blank">Descargar</a></li><br>
					<li>Ejercicios: <a href="media/fisica/apuntes/03_Trabajo_Energia_Ejercicios.pdf" target="_blank">Descargar</a></li>
				</ul>
				<br>
			</div>
			<hr>
			<br>
			<h2 class="verde1">+ MATERIAL EXTERNO</h2>
			<div id="tab1" class="plegable">
			<br>
				<ul>
					<li><a href="https://es.wikipedia.org/wiki/Fuerza" target="_blank">Fuerza</a></li>
					<li><a href="https://www.fisicalab.com/apartado/suma-fuerzas#contenidos" target="_blank">Suma de fuerzas</a></li>
				</ul>
			<br>
			</div>


			<br>
			<hr>
			<br>
			<?php include "footer.php"; ?>
		</div>
	</div>
</body>
</html>
<script type="text/javascript" src="js/desplegable.js"></script>
