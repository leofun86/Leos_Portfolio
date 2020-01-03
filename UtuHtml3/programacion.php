<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>1º BL - Programación</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<?php include "favicon.php" ?>
<link rel="stylesheet" type="text/css" href="css/madre.css">
</head>
<body>
	<?php include "header.php"; ?>
	<div id="cuerpo">
		<div id="contenido">
			<h1 id="titmaterias" >PROGRAMACIÓN</h1>
			<br>
			<h3 class="tab1" id="rojo1">+ ESCRITO 2</h3>
			<div id="tab1" class="plegable">
				<br>
				<ul>
					<li>Fecha: 29 de junio</li>
					<br>
					<li>LETRA: Escribir un programa que solicite 100 sueldos. A cada sueldo se hará descuento de irpf y montepío:
							<br>
							<ul>
								<li>Entre 0 y 10000: Irpf=0%, Montepío=15%</li>
								<li>Entre 10000 y 20000: irpf=5%, Montepío=15%</li>
								<li>Más de 20000: Irpf=10%, Montepío=15%</li>
							</ul>
					</li>
					<br>
					<Li>Desplegar:
						<br>
							<ul>
								<li>Irpf total</li>
								<li>Montepío total</li>
								<li>Líquido</li>
								<li>Promedio de sueldos totales</li>
							</ul>
					</li>
					<br>
					<li><a href="media/prog/ejercicios/escrito2.jpg" target="_blank">Descargar ejemplo</a></li>
				</ul>
				<br>
			</div>
			<hr>
			<br>
			<h2>+ PRIMEROS CONCEPTOS</h2>
			<div id="tab1" class="plegable">
				<br>
					<ul>
						<li><b>PROGRAMA:</b> Conjunto de órdenes escritas en un determinado órden que cumplen un fin específico</li>
						<br>
						<li><b>LENGUAJE A UTILIZAR:<b/> Java</li>
						<br>
						<li><b>IDE:</b> Procesador para escribir código</li>
						<br>
						<li><b>SOFTWARE:</b> Eclipse ==> <a href="http://www.eclipse.org/downloads/" target="_blank">descargar</a></li>
					</ul>
				<br>
				</div>
				<hr>
				<br>
				<h2>+ VARIABLES</h2>
				<div id="tab1" class="plegable">
				<br>
					<table class="octal" style="text-align:left; padding:40px;">
						<tr>
							<th></th>
							<th class="fv">NOMBRE</th>
							<th></th>
						</tr>
						<tr>
							<th rowspan="4" class="fa"> valores<br>enteros</th>
							<th class="fv">Byte = almacena 8 bits</th>
							<th rowspan="6" class="fn"><b>NUMÉRICOS</b><br>- almacena 4 bytes</th>
						</tr>
						<tr>
							<th class="fv">short</th>
						</tr>
						<tr>
							<th class="fv">int</th>
						</tr>
						<tr>
							<th class="fv">long</th>
						</tr>
						<tr>
							<th rowspan="2" class="fa">valores decimales</th>
							<th class="fv">float</th>
						</tr>
						<tr>
							<th class="fv">double = almacena mayor cantidad<br> que float</th>
						</tr>
						<tr>
							<th></th>
							<th class="fv">char</th>
							<th></th>
						</tr>
						<tr>
							<th></th>
							<th class="fv">boolean</th>
							<th>LÓGICO</th>
						</tr>
					</table>
					<br>
					<ul>
						<li><b>CREAR VARIABLE</b>
							<ul>
								<ul>
									<br>
									<li><span class="fa">int ventas;</span></li>
								</ul>
							</ul>
						</li>
						<br>
						<li><b>DEFINIR VALOR</b>
							<ul>
								<ul>
									<br>
									<li><span class="fa">ventas = 158;</span></li>
								</ul>
							</ul>
						</li>
						<br>
						<li><b>OPERADORES ARITMÉTICOS</b>
							<ul>
								<ul>
									<br>
									<li><span class="fa">+, -, *, /, %</span></li>
								</ul>
							</ul>
						</li>
						<br>
						<li><b>OPERADORES DE ASIGNACIÓN</b>
							<ul>
								<ul>
									<br>
									<li><span class="fa">=</span> // Define el valor de la variable</li>
								</ul>
							</ul>
						</li>
						<br>
						<li><b>>>>> TODAS LAS VARIABLES SE DEFINEN AL PRINCIPIO <<<<</b></li>
						<br>
						<hr>
						<br>
						<li><b>EJEMPLO</b>
							<ul>
								<ul>
									<br>
									<li>int nota1;</li>
									<li>nota1 = 7;</li>
									<li>nota2 = nota1 + 4;
										<ul>
											<br>
											<li><b>¿Qué pasó en este último?</b>
												<ul>
													<br>
													<li>nota 1 & 4 = <span class="fa">operando</span></li>
													<li>+ = <span class="fa">operador</span></li>
													<li>operando + operador + operando = <span class="fa"><b>EXPRESIÓN</b></span>
														<ul>
															<li>El resultado final es guardado en nota2</li>
														</ul>
													</li>
												</ul>
											</li>
										</ul>
									</li>
								</ul>
							</ul>
						</li>
						<br>
						<hr>
						<br>
						<li><b>PRIORIDAD EN LOS CÁLCULOS</b>
							<ul>
								<ul>
									<li>( ) ==> paréntesis</li>
									<li>* / % ==> multiplicar, dividir, porcentaje</li>
									<li>+ - ==> más, resta</li>
								</ul>
							</ul>
						</li>
						<br>
						<li><b>EJEMPLO</b>
							<ul>
								<ol>
									<br>
									<li>2 +2 * 4 = 14</li>
									<li>2 + (3 * 4) = 14</li>
									<li>(2 + 3) * 4 = 20</li>
								</ol>
							</ul>
						</li>
					</ul>
					<br><br>
				<br>
				</div>
				<hr>
				<br>
	            <h3 id="tab1" class="naranja">+ ESCRITO 1</h3>
	            <div id="tab1" class="plegable">
	                <br>
	                <ul>
	                    <li>Crear un programa que reciba los datos de "Altura", "Ancho" y "Peso" y que devuelva el resultado de "(Altura * Ancho) / Peso" de la siguiente manera:
	                        <ul>
	                            <ul>
	                                <br>
	                                <li><span class="fa">El resultado de "Altura" por "Ancho" dividido "Peso" es de "Resultado"</span></li>
	                            </ul>
	                        </ul>
	                    </li>
	                    <br>
	                    <hr>
	                    <br>
	                    <li class="lsn">  import java.util.Scanner;
	                        <ul>
	                            <br>
	                            <li class="lsn">public class escrito {
	                                <ul>
	                                    <br>
	                                    <li class="lsn">public static void main(String [] args) {
	                                        <ul>
	                                            <br>
	                                            <li class="lsn">
	                                                int a, b, c;<br>
													<br>
													float f;
													<br>
	                                                Scanner sc = new Scanner(System.in);<br>
	                                                <br>
	                                                System.out.println("Ingrese altura: ");<br>
	                                                a = sc.NextInt();<br>
	                                                <br>
	                                                System.out.println("Ingrese ancho: ");<br>
	                                                b = sc.NextInt();<br>
	                                                <br>
	                                                System.out.println("Ingrese peso: ");<br>
	                                                c = sc.NextInt();<br>
	                                                <br>
	                                                f = (float)(a*b)/c;<br>
	                                                <br>
	                                                System.out.println("El resultado de "+a+" por "+b+" dividido "+c+" es de "+f+".");
	                                                <br><br>
	                                            </li>
	                                        </ul>
	                                    </li>
	                                    <li class="lsn">}</li>
	                                </ul>
	                            </li>
	                            <li class="lsn">}</li>
	                        </ul>
	                    </li>
	                </ul>
	                <br>
	                <br>
	                <br>
	                <br>
	            </div>
	            <hr>
				<br>
				<h2>+ CASTEO</h2>
				<div id="tab1" class="plegable">
					<br>
					<ul>
						<li><b>DEFINICIÓN:</b>
							<ul>
								<ul>
									<br>
									<li> El casteo (casting) es un procedimiento para transformar una variable primitiva de un tipo a otro, o transformar un objeto de una clase a otra clase siempre y cuando haya una relación de herencia  entre ambas.<br></li>
								</ul>
							</ul>
						</li>
						<br>
						<hr>
						<br>
						<li>( a / b ) * 3
							<ul>
								<li>Dentro del paréntesis se asume que se dividen dos números enteros (int)</li>
							</ul>
						</li>
						<br>
						<li>( float ) ( a / b ) * 3 ==> INCORRECTO
							<ul>
								<br>
								<li>El "float" colocado previamente al paréntesis no va a modificar el el resultado de la división dentro del paréntesis</li>
							</ul>
						</li>
						<li>( ( float ) a / b ) * 3 ==> CORRECTO
							<ul>
								<br>
								<li>El "float" colocado dentro del paréntesis y previo a la división, modifica el valor int por "float", por lo tanto el resultado final será "float"</li>
							</ul>
						</li>
					</ul>
					<br>
					<br>
					<br>
				</div>
				<hr>
				<br>
				<h2>+ ESTRUCTURAS DE SELECCION</h2>
				<div id="tab1" class="plegable">
					<br>
					<ul>
						<li><b>DEFINICIÓN</b>
							<ul>
								<ul>
									<br>
									<li>Es aquella capaz de evaluar una condición y tomar una desición (ejecutar un bloque de código) dependiendo del resultado de la evaluación</li>
								</ul>
							</ul>
						</li>
						<br>
						<hr>
						<br>
						<li><b>OPERADORES RELACIONALES</b>
							<ul>
								<ul>
									<br>
									<li><span class="fa">></span> = mayor que</li>
									<li><span class="fa"><</span> = menor que</li>
									<li><span class="fa">>=</span> = mayor o igual a</li>
									<li><span class="fa"><=</span> = menor o igual a</li>
								</ul>
							</ul>
						</li>
						<br>
						<hr>
						<br>
						<li><b>CONDICIÓN</b>
							<ul>
								<ul>
									<br>
									<li>a > 2
										<ul>
											<br>
											<li><span class="fa">a, 2</span> = operando</li>
											<li><span class="fa">></span> = operador relacional</li>
										</ul>
									</li>
								</ul>
							</ul>
						</li>
					<br>
				</div>
				<h3 id="tab1" class="naranja">+ IF - EJERCICIO I</h3>
				<div id="tab1" class="plegable">
					<br>
					<ul>
						<li>Pedir a un usuario 2 valores e indique cual es el mayor</li>
						<li>El usuario no ingresará valores iguales</li>
						<br>
						<img src="media/prog/ejercicios/ej1.jpg">
					</ul>
					<br>
				</div>
				<h3 id="tab1" class="naranja">+ IF - EJERCICIO II</h3>
				<div id="tab1" class="plegable">
					<br>
					<ul>
						<li>Escribir un programa que solicite a un usuario 2 valores enteros y calcule su promedio.</li>
						<li>El programa deberá indicar si el promedio es un valor entero o no.</li>
						<br>
						<img src="media/prog/ejercicios/ej2.jpg">
					<br>
				</div>
				<h3 id="tab1" class="naranja">+ IF - EJERCICIO III</h3>
				<div id="tab1" class="plegable">
					<br>
					<ul>
						<li>Escribir un programa que solicite 2 valores e indique cuál es el valor mayor, cuál es el menor, o en su defecto que son iguales.</li>
						<br>
						<img src="media/prog/ejercicios/ej3.jpg">
					<br>
				</div>
				<hr>
				<br>
				<h2>+ OPERADORES DE IGUALDAD</h2>
				<div id="tab1" class="plegable">
					<br>
					<ul>
						<li><span class="fa">==</span>: igual a
							<ul>
								<ul>
									<br>
									<li>a == b</li>
								</ul>
							</ul>
						</li>
						<li><span class="fa">!=</span>: diferente a
							<ul>
								<ul>
									<br>
									<li>a != b</li>
								</ul>
							</ul>
						</li>
						<li><span class="fa">SWITCH</span>
						<br>
						<img style="width:70%;" src="media/prog/ejercicios/switch1.jpg">
						</li>
					</ul>
					<br>
				</div>
				<h3 id="tab1" class="naranja">+ SWITCH - EJERCICIO DEPARTAMENTOS</h3>
				<div id="tab1" class="plegable">
					<br>
					<ul>
						<li>Escriba un programa que solicite a un usuario un número de departamentos del Uruguay (del 1 al 19) y despliegue el nombre según el número escrito</li>
						<br>
						<img src="media/prog/ejercicios/departamentos.jpg">
					<br>
				</div>
				<hr>
				<br>
				<h2>+ OPERADORES LOGICOS</h2>
				<div id="tab1" class="plegable">
					<br>
					<ul>
						<li><span class="fa">&&</span>: condición <span class="fa">y</span> condición</li>
						<li><span class="fa">||</span>: condición <span class="fa">o</span> condición</li>
						<br>
						<hr>
						<br>
						<li><b>JERARQUÍA</b>
							<ol>
								<br>
								<li>Op. aritméticos
									<ul>
										<ul>
											<br>
											<li>*, /, %</li>
											<li>+, -</li>
										</ul>
									</ul>
								</li>
								<li>Op. relacionales
									<ul>
										<ul>
											<br>
											<li>==</li>
											<li>!=</li>
										</ul>
									</ul>
								</li>
								<li>Op. lógicos
									<ul>
										<ul>
											<br>
											<li>&&</li>
											<li>||</li>
										</ul>
									</ul>
								</li>
							</ol>
						</li>
						<br>
						<img src="media/prog/ejercicios/orjer.jpg">
					</ul>
					<br>
				</div>
				<h3 id="tab1" class="naranja">+ EJERCICIO CON OPERADOR OR</h3>
				<div id="tab1" class="plegable">
					<br>
					<ul>
						<li>Escribir un programa que solicite DEPÓSITO y ANTIGUEDAD LABORAL</li>
						<li>Se le dará el crédito si el depósito es mayor a 500.000 $ o bien con más de 10 años de antiguedad</li>
						<li>Si se cumple una de las dondiciones. el crédito se otorgará</li>
						<br>
						<img src="media/prog/ejercicios/or1.jpg">
					</ul>
					<br>
				</div>
				<h3 id="tab1" class="naranja">+ EJERCICIO PRESTAMO + RESULTADOS</h3>
				<div id="tab1" class="plegable">
					<br>
					<ul>
						<li>Escribir un programa que indique monto del préstamo a otorgar. Se solicitarán los siguientes valores:
							<ol>
								<br>
								<li>Sueldo</li>
								<li>Edad</li>
								<li>Antiguedad de la empresa</li>
							</ol>
						</li>
						<br>
						<li>Si la persona tiene más de 15 años de antiguedad laboral, se otorgará un préstamo del 200% del sueldo.</li>
						<li>En caso contrario, si el sueldo es mayor a 40.000 $ se otorgará un préstamo del 150% del sueldo.</li>
						<li>Si el sueldo es de 40.000 $ o menos, se otorgará un préstamo del 120 % del sueldo.</li>
						<li>En caso de que la persona tenga más de 50 años, se añadirá un 10 % del préstamo otorgado.</li>
						<br>
						<img src="media/prog/prestamo/prest1.jpg" alt="Préstamo ejercicio">
						<br><hr><br>
						<li>RESULTADOS</li>
						<br><hr><br>
						<img src="media/prog/prestamo/prest2.jpg" alt="Restultado 1">
						<br>
						<img src="media/prog/prestamo/prest3.jpg" alt="Restultado 2">
						<br>
						<img src="media/prog/prestamo/prest4.jpg" alt="Restultado 3">
						<br>
						<img src="media/prog/prestamo/prest5.jpg" alt="Restultado 4">
					</ul>
					<br>
				</div>
				<h3 id="tab1" class="naranja">+ EJERCICIO VENTAS + RESULTADOS</h3>
				<div id="tab1" class="plegable">
					<br>
					<ul>
						<li>Escribir un programa que solicite a un usuario la cantidad de ventas por mes de enero, febrero, marzo, abril.</li>
						<li>Si el promedio de ventas está entre 0 y 100 se otorgará un bono de 5.000$.</li>
						<li>Si el promedio de ventas es mayor a 100 y menor a 500 se otorgará un bono de 6.500$ + 1 peso por cada unidad vendida.</li>
						<li>Si el promedio de ventas es mayor a 500 se otorgará un bono de 11.000$ + 2 pesos por unidad vendida.</li>
						<br>
						<img src="media/prog/ventas/1.jpg" alt="Ventas ejercicio">
						<br>
						<hr>
						<li>RESULTADOS</li>
						<hr>
						<br>
						<img src="media/prog/ventas/2.jpg" alt="Ventas ejercicio resultado 1">
						<img src="media/prog/ventas/3.jpg" alt="Ventas ejercicio resultado 2">
						<img src="media/prog/ventas/4.jpg" alt="Ventas ejercicio resultado 3">
					<br>
				</div>
				<h3 id="tab1" class="naranja">+ EJERCICIO PROPIEDADES + RESULTADOS</h3>
				<div id="tab1" class="plegable">
					<br>
					<ul>
						<li>Escribe un programa que analice la viabilidad una propiedad. Se solicitará de  una propiedad los siguientes datos:
							<ul>
								<ul>
									<br>
									<li>Zona: 1, 2, 3</li>
									<li>El valor</li>
									<li>Año de construcción</li>
									<li>Año actual</li>
								</ul>
							</ul>
						</li>
						<br>
						<li>Valor según la zona
							<ul>
								<ul>
									<br>
									<li>ZONA 1: Afecta el valor de la propiedad negativamente en un 10%</li>
									<li>ZONA 2: Afecta el valor de la propiedad negativamente en un 20%</li>
									<li>ZONA 3: Afecta el valor de la propiedad positivamente en un 15%</li>
								</ul>
							</ul>
						</li>
						<br>
						<li>Si la propiedad tiene más de 60 años de antiguedad: No se va a adquirir</li>
						<li>Si la propiedad tiene una antiguedad de entre 30 y 60 años, y su valor (apreciado o depreciado) sea menor de 50.000 $: Se adquiere</li>
						<li>Si la antiguedad de la propiedad es menor de 30 años, y el valor (apreciado o depreciado) es menor a 80.000$: Se adquiere</li>
						<br>
						<img src="media/prog/propiedades/01.jpg" alt="Ejercicio Propiedades">
						<br>
						<hr>
						<li>RESULTADOS</li>
						<hr>
						<br>
						<li>
						<img src="media/prog/propiedades/02.jpg" alt="Ejercicio propiedades resultado 1">
						<img src="media/prog/propiedades/03.jpg" alt="Ejercicio propiedades resultado 2">
						<img src="media/prog/propiedades/04.jpg" alt="Ejercicio propiedades resultado 3">
						<img src="media/prog/propiedades/05.jpg" alt="Ejercicio propiedades resultado 4">
					</ul>
					<br>
				</div>
				<hr>
				<br>
				<h2>+ WHILE</h2>
				<div id="tab1" class="plegable">
					<br>
					<ul>
						<li>Apuntes y ejercicios: <a href="media/prog/apuntes/01_While1.pdf" target="_blank">Descargar</a></li>
					</ul>
					<br>
				</div>
				<h3 id="tab1" class="naranja">+ Ejercicio - 15 de junio</h3>
				<div id="tab1" class="plegable">
					<br>
					<ul>
						<li>Escribir un programa que solkicite notas y calcule su promedio. Se pedirán notas hasta que el usuario ingrese como nota el número 0</li>
					</ul>
					<br>
				</div>
				<h3 id="tab1" class="naranja">+ Ejercicios - 22 de junio</h3>
				<div id="tab1" class="plegable">
					<br>
					<ol>
						<li>Escribir un programa que solicite cantidad de goles del equipo A y del equipo B de 100 partidos (entre A y B) indique:
							<ul>
								<ul>
									<br>
									<li>Cantidad de puntos del equipo A y del equipo B</li>
								</ul>
							</ul>
						</li>
						<br>
						<hr>
						<br>
						<li>Escribir un programa que solicite cantidad de habitantes de 50 países.
							<ul>
								<ul>
									<br>
									<li>Se calculará el promedio de aquellos países que tengan menos de 50 millones de habitantes</li>
								</ul>
							</ul>
						</li>
					</ol>
					<br>
				</div>
				<hr>
				<br>
				<h2>+ MENU: array, while y switch</h2>
				<div id="tab1" class="plegable">
					<br>
					<ul>
						<li><a href="media/prog/ejercicios/menu1.jpg" target="_blank">Descargar</a></li>
					</ul>
					<br>
				</div>
				<hr>
				<br>
				<h3 id="tab1" class="naranja">+ EJERCICIO CÉDULA-SUELDO, GOLES, 4 ARRAYS Y MENU FINAL</h3>
				<div id="tab1" class="plegable">
					<br>
					<ul>
						<li><a href="media/prog/ejercicios/ejercicioFinal.pdf" target="_blank">Descargar</a></li>
					</ul>
					<br>
				</div>
				<hr>
				<br>
				<h2 class="verde1">+ MATERIAL EXTERNO</h2>
				<div id="tab1" class="plegable">
				<br>
					<ul>
						<li><a href="media/prog/variables2.jpg" target="_blank">Tipos de variables</a></li>
						<br>
						<li><a href="http://labojava.blogspot.com.uy/2012/05/casteos.html" target="_blank">Casteo</a></li>
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
