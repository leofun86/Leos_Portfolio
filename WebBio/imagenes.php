<link rel="stylesheet" href="css/madre.css">

<body style="background-image:url('media/backimg.jpg');background-size:cover;background-repeat:no-repeat;background-attachment:fixed;">
  <div style="opacity:0.4;">
    <?php include 'header.php'; ?>
  </div>
  <?php
    $accion = $_GET['ac'];
    echo '<br><br>';
    switch($accion) {
      case 1:
        echo '<div id="contimg"><img id="im" src="media/uni1/01.jpg"><br><br>';
        echo '<div id="caption">Hace 13700 ± 200 millones de años toda la materia y energía que hoy existe en el Universo estaba concentrada en una bolita de fuego (singularidad).</div>
              <br><br></div>';
        break;
      case 2:
        echo '<div id="contimg"><img id="im" src="media/uni1/02.jpg"><br><br>';
        echo '<div id="caption">Las subpartículas de la materia son...</div>
              <br><br></div>';
        break;
      case 3:
        echo '<div id="contimg"><img id="im" src="media/uni1/03.jpg"><br><br>';
        echo '<div id="caption">Las subpartículas quarks se agrupan para formar la partícula protón.</div>
              <br><br></div>';
        break;
      case 4:
        echo '<div id="contimg"><img id="im" src="media/uni1/04.jpg"><br><br>';
        echo '<div id="caption">Las subpartículas quarks se agrupan para formar la partícula neutrón.</div>
              <br><br></div>';
        break;
      case 5:
        echo '<div id="contimg"><img id="im" src="media/uni1/05.gif"><br><br>';
        echo '<div id="caption">Deuterio... el isotopo del elemento químico hidrógeno formado por: un protón unido a un neutrón (núcleo) y su único electrón orbitando.</div>
              <br><br></div>';
        break;
      case 6:
        echo '<div id="contimg"><img id="im" src="media/uni1/06.jpg"><br><br>';
        echo '<div id="caption">La radiación gamma libera fotones.</div>
              <br><br></div>';
        break;
      case 7:
        echo '<div id="contimg"><img id="im" src="media/uni1/07.jpg"><br><br>';
        echo '
              <br><br></div>';
        break;
      case 8:
        echo '<div id="contimg"><img id="im" src="media/uni1/08.jpg"><br><br>';
        echo '<div id="caption">La fuerza fundamental nuclear fuerte... es tan potente que determina la unión de las partículas (protones y neutrones) entre sí, a pesar de la repulsión eléctrica que existe entre los protones (+)</div>
              <br><br></div>';
        break;
      case 9:
        echo '<div id="contimg"><img id="im" src="media/uni1/09.png"><br><br>';
        echo '<div id="caption">La nucleosíntesis primordial... dos protones se unen por primera vez para dar un núcleo de deuterio; luego ese núcleo de deuterio se une por primera vez con un protón para dar un núcleo de helio-3, finalmente dos núcleos de helio-3 se unen por primera vez para dar el primer núcleo de helio-4</div>
        <br><br></div>';
        break;
      case 10:
        echo '<div id="contimg"><img id="im" src="media/uni1/10.png"><br><br>';
        echo '<div id="caption">Los estados de la materia...</div>
        <br><br></div>';
        break;
      case 11:
        echo '<div id="contimg"><img id="im" src="media/uni1/11.jpg"><br><br>';
        echo '<div id="caption">La fuerza electromagnética... electrones orbitando alrededor del núcleo de los distintos átomos.</div>
        <br><br></div>';
        break;
      case 12:
        echo '<div id="contimg"><img id="im" src="media/uni1/12.jpg"><br><br>';
        echo '<div id="caption">El eco del Big Bang... la radiación de fondo de microondas...</div>
              <br><br></div>';
        break;
      case 13:
        echo '<div id="contimg"><img id="im" src="media/uni1/13.jpg"><br><br>';
        echo '<div id="caption">Nacimiento de estrellas</div>
        <br><br></div>';
        break;
      case 14:
        echo '<div id="contimg"><img id="im" src="media/uni1/14.jpg"><br><br>';
        echo '<div id="caption">Sobrevivientes" de la 1ª generación de estrellas... los quasars con más de 10.000 millones de años de edad...</div>
        <br><br></div>';
        break;
      case 15:
        echo '<div id="contimg"><img id="im" src="media/uni1/15.jpg"><br><br>';
        echo '
        <br><br></div>';
        break;
      case 16:
        echo '<div id="contimg"><img id="im" src="media/uni1/16.jpg"><br><br>';
        echo '<div id="caption">A los 9100 millones de años del Big Bang se originó de una nebulosa protosolar el Sistema Solar, formado por el Sol y sus protoplanetas orbitando a su alrededor...</div>
        <br><br></div>';
        break;
      case 17:
        echo '<div id="contimg"><img id="im" src="media/uni1/17.jpg"><br><br>';
        echo '
      <br><br></div>';
        break;
      case 18:
        echo '<div id="contimg"><img id="im" src="media/uni1/18.jpg"><br><br>';
        echo '<div id="caption">Arrhenius (1908) y su teoría de la Panspermia...</div>
        <br><br></div>';
        break;
      case 19:
        echo '<div id="contimg"><img id="im" src="media/uni1/19.jpg"><br><br>';
        echo '<div id="caption">La evolución química prebiótica acontecida en la Tierra según la teoría: Heterogénesis Endógena...</div>
        <br><br></div>';
        break;
      case 20:
        echo '<div id="contimg"><img id="im" src="media/uni1/20.jpg"><br><br>';
        echo '<div id="caption">Las moléculas de lípidos poseen una cabeza que atrae a las moléculas de agua (hidrofílica), y una cola que las rechaza (hidrofóbica).</div>
        <br><br></div>';
        break;
      case 21:
        echo '<div id="contimg"><img id="im" src="media/uni1/21.jpg"><br><br>';
        echo '<div id="caption">Interpretar y analizar...</div>
        <br><br></div>';
        break;
      case 22:
        echo '<div id="contimg"><img id="im" src="media/uni1/22.jpg"><br><br>';
        echo '<div id="caption">Los fosfolípidos (cabeza y dos colas) tienen la propiedad de agruparse...</div>
        <br><br></div>';
        break;
      case 23:
        echo '<div id="contimg"><img id="im" src="media/uni1/23.jpg"><br><br>';
        echo '<div id="caption">Interpretar y analizar...</div>
        <br><br></div>';
        break;
      case 24:
        echo '<div id="contimg"><img id="im" src="media/uni1/24.jpg"><br><br>';
        echo '<div id="caption">Miller(1953) demostró en el laboratorio la teoría de Oparin/Heterogénesis Endógena...</div>
        <br><br></div>';
        break;
      case 25:
        echo '<div id="contimg"><img id="im" src="media/uni1/25.jpg"><br><br>';
        echo '<div id="caption">Un antes y un después en la ciencia... 1969, Murchison (Australia)...</div>
        <br><br></div>';
        break;
      case 26:
        echo '<div id="contimg"><img id="im" src="media/uni1/26.jpg"><br><br>';
        echo '
        <br><br></div>';
        break;
      case 27:
        echo '<div id="contimg"><img id="im" src="media/uni1/27.jpg"><br><br>';
        echo '<div id="caption">La 1ª forma de vida en la Tierra... la procariota (bacteria)...</div>
        <br><br></div>';
        break;
      case 28:
        echo '<div id="contimg"><img id="im" src="media/uni1/28.jpg"><br><br>';
        echo '<div id="caption"><h3>La membrana celular...</h3>
        <a href="https://www.youtube.com/watch?v=Qqsf_UJcfBc&list=PL1CB6AC75FEB2A393&" target="_blank">https://www.youtube.com/watch?v=Qqsf_UJcfBc&list=PL1CB6AC75FEB2A393&</a><br>
        <a href="https://www.youtube.com/watch?v=UpHONKsoxlI&index=61&list=PL1CB6AC75FEB2A39" target="_blank">https://www.youtube.com/watch?v=UpHONKsoxlI&index=61&list=PL1CB6AC75FEB2A39</a></div>
        <br><br></div>';
        break;
      case 29:
        echo '<div id="contimg"><img id="im" src="media/uni1/29.png"><br><br>';
        echo '<div id="caption">Otra forma de vida en la Tierra... la eucariota vegetal...</div>
        <br><br></div>';
        break;
      case 30:
        echo '<div id="contimg"><img id="im" src="media/uni1/30.jpg"><br><br>';
        echo '<div id="caption">Otra forma de vida en la Tierra... la eucariota animal...</div>
        <br><br></div>';
        break;
    }




  ?>
</body>
