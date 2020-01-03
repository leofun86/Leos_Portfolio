<link rel="stylesheet" href="css/madre.css">

<body style="background-image:url('media/backimg.jpg');background-size:cover;background-repeat:no-repeat;background-attachment:fixed;">
  <?php
    $accion = $_GET['ac'];
    echo '<br><br>';
    switch($accion) {
      case 1:
        echo '<div id="contimg"><img id="im" src="media/uni2/01.jpg"><br><br>';
        echo '<div id="caption">Los nucleótidos del ADN... formados por: una pentosa (glúcido de 5 carbonos) enlazada a una base nitrogenada y a un fosfato.<br><br>
              <a href="https://www.youtube.com/watch?v=BTrfxDicwuw&index=38&list=PL1CB6A" target="_blank">https://www.youtube.com/watch?v=BTrfxDicwuw&index=38&list=PL1CB6A</a><br>
              <a href="https://www.youtube.com/watch?v=-Q_Lvzdkexo&list=PL1CB6AC75FEB2A393&index=37" target="_blank">https://www.youtube.com/watch?v=-Q_Lvzdkexo&list=PL1CB6AC75FEB2A393&index=37</a></div>
              <br><br></div>';
        break;
      case 2:
        echo '<div id="contimg"><img id="im" src="media/uni2/02.jpg"><br><br>';
        echo '<div id="caption">El ADN... formado por 2 cadenas de nucleótidos, complementarias (A-T y C-G) entre sí, y antiparalelas (las cadenas siempre se inician en el carbono 5 de la primera pentosa, y siempre finalizan en el carbono 3" de la última pentosa de la cadena).<br><br>;
        <a href="https://www.youtube.com/watch?v=8yNuYU1tyFA&list=PL1CB6AC75FEB2A393&index=3" target="_blank">https://www.youtube.com/watch?v=8yNuYU1tyFA&list=PL1CB6AC75FEB2A393&index=3</a></div>
        <br><br></div>';
        break;
      case 3:
        echo '<div id="contimg"><img id="im" src="media/uni2/03.gif"><br><br>';
        echo '<div id="caption">Las subpartículas quarks se agrupan para formar la partícula protón.</div>
              <br><br></div>';
        break;
      case 4:
        echo '<div id="contimg"><img id="im" src="media/uni2/04.gif"><br><br>';
        echo '<div id="caption">La 2ª "molécula de la vida"... la doble hélice de la molécula de ADN... cada cadena de nucleótidos gira hacia la derecha (sentido horario).</div>
              <br><br></div>';
        break;
      case 5:
        echo '<div id="contimg"><img id="im" src="media/uni2/05.png"><br><br>';
        echo '<div id="caption">El "diccionario de la vida"... el código genético...<br><br>
        <a href="https://www.youtube.com/watch?v=rW8NKvQQ8P4&index=87&list=PL1CB6AC75FEB2A393" target="_blank">https://www.youtube.com/watch?v=rW8NKvQQ8P4&index=87&list=PL1CB6AC75FEB2A393</a></div>
              <br><br></div>';
        break;
      case 6:
        echo '<div id="contimg"><img id="im" src="media/uni2/06.jpg"><br><br>';
        echo '<div id="caption">Interpretar, analizar imagen y videos...<br><br>
        <a href="https://www.youtube.com/watch?v=ztPkv7wc3yU&list=PL1CB6AC75FEB2A393&index=83" target="_blank">https://www.youtube.com/watch?v=ztPkv7wc3yU&list=PL1CB6AC75FEB2A393&index=83</a><br>
        <a href="https://www.youtube.com/watch?v=SMtWvDbfHLo&index=10&list=PL1CB6AC75FEB2A393" target="_blank">https://www.youtube.com/watch?v=SMtWvDbfHLo&index=10&list=PL1CB6AC75FEB2A393</a></div>
        <br><br></div>';
        break;
      case 7:
        echo '<div id="contimg"><img id="im" src="media/uni2/07.jpg"><br><br>';
        echo '<div id="caption">Primero Interpretar dibujo...<br>
        Segundo interpretar videos...<br><br>
        <a href="https://www.youtube.com/watch?v=B6O6uRb1D38&index=69&list=PL1CB6AC75FEB2A393" target="_blank">https://www.youtube.com/watch?v=B6O6uRb1D38&index=69&list=PL1CB6AC75FEB2A393</a><br>
        <a href="https://www.youtube.com/watch?v=-zb6r1MMTkc&index=84&list=PL1CB6AC75FEB2A393" target="_blank">https://www.youtube.com/watch?v=-zb6r1MMTkc&index=84&list=PL1CB6AC75FEB2A393</a><br>
        <a href="https://www.youtube.com/watch?v=5bLEDd-PSTQ&list=PL1CB6AC75FEB2A393&index=85" target="_blank">https://www.youtube.com/watch?v=5bLEDd-PSTQ&list=PL1CB6AC75FEB2A393&index=85</a></div>
        <br><br></div>';
        break;
      case 8:
        echo '<div id="contimg"><img id="im" src="media/uni2/08.jpg"><br><br>';
        echo '<div id="caption">Interpretar y analizar...</div>
        <br><br></div>';
        break;
      case 9:
        echo '<div id="contimg"><img id="im" src="media/uni2/09.png"><br><br>';
        echo '<div id="caption">Interpretar, analizar imagen y videos...<br><br>
        <a href="https://www.youtube.com/watch?v=Rfc71nFYYgE&index=8&list=PL1CB6AC75FEB2A393" target="_blank">https://www.youtube.com/watch?v=Rfc71nFYYgE&index=8&list=PL1CB6AC75FEB2A393</a><br>
        <a href="https://www.youtube.com/watch?v=D3fOXt4MrOM&list=PL1CB6AC75FEB2A393&index=39" target="_blank">https://www.youtube.com/watch?v=D3fOXt4MrOM&list=PL1CB6AC75FEB2A393&index=39</a></div>
        <br><br></div>';
        break;
      case 10:
        echo '<div id="contimg"><img id="im" src="media/uni2/10.png"><br><br>';
        echo '<div id="caption">La 1ª forma de vida en la Tierra... la procariota (bacteria)...</div>
              <br><br></div>';
        break;
      case 11:
        echo '<div id="contimg"><img id="im" src="media/uni2/11.jpg"><br><br>';
        echo '<div id="caption">La fuerza electromagnética... electrones orbitando alrededor del núcleo de los distintos átomos.</div>
              <br><br></div>';
        break;
      case 12:
        echo '<div id="contimg"><img id="im" src="media/uni2/12.jpg"><br><br>';
        echo '<div id="caption">Interpretar, analizar imagen y videos...<br><br>
        <a href="https://www.youtube.com/watch?v=T-g-G0-kehU&list=PL1CB6AC75FEB2A393&index=49" target="_blank">https://www.youtube.com/watch?v=T-g-G0-kehU&list=PL1CB6AC75FEB2A393&index=49</a><br>
        <a href="https://www.youtube.com/watch?v=-mtLXpgjHL0&list=PL1CB6AC75FEB2A393&index=9" target="_blank">https://www.youtube.com/watch?v=-mtLXpgjHL0&list=PL1CB6AC75FEB2A393&index=9</a><br>
        <a href="https://www.youtube.com/watch?v=I9ArIJWYZHI&index=51&list=PL1CB6AC75FEB2A393" target="_blank">https://www.youtube.com/watch?v=I9ArIJWYZHI&index=51&list=PL1CB6AC75FEB2A393</a></div>
              <br><br></div>';
        break;
      case 13:
        echo '<div id="contimg"><img id="im" src="media/uni2/13.jpg"><br><br>';
        echo '<div id="caption">El "Dogma Central de la Biología"...<br><br>
              <a href="https://www.youtube.com/watch?v=4PKjF7OumYo&list=PL1CB6AC75FEB2A393&index=65" target="_blank">https://www.youtube.com/watch?v=4PKjF7OumYo&list=PL1CB6AC75FEB2A393&index=65</a></div>
              <br><br></div>';
        break;
      case 14:
        echo '<div id="contimg"><img id="im" src="media/uni2/14.jpg"><br><br>';
        echo '<div id="caption">Primero la mutación genética al azar... y luego...</div>
              <br><br></div>';
        break;
      case 15:
        echo '<div id="contimg"><img id="im" src="media/uni2/15.jpg"><br><br>';
        echo '<div id="caption">Los dos estados de la cromatina... desenrollada (eucromatina) y compactada en forma leve/moderada (heterocromatina)...<br><br>
              <a href="https://www.youtube.com/watch?v=8rXizmLjegI&list=PL1CB6AC75FEB2A393&index=52" target="_blank">https://www.youtube.com/watch?v=8rXizmLjegI&list=PL1CB6AC75FEB2A393&index=52</a></div>
              <br><br></div>';
        break;
      case 16:
        echo '<div id="contimg"><img id="im" src="media/uni2/16.jpg"><br><br>';
        echo '<div id="caption">El núcleo de interfase... la cromatina en sus 2 estados (eucromatina y heterocromatina)... la célula transcribe y/o replica su ADN...</div>
              <br><br></div>';
        break;
      case 17:
        echo '<div id="contimg"><img id="im" src="media/uni2/17.jpg"><br><br>';
        echo '<div id="caption">El núcleo de una célula comienza su mitosis... la profase temprana... la membrana nuclear y el nucléolo van a desintegrarse... las 92 moléculas de ADN (cromatina) van a empaquetarse (compactarse) en forma progresiva...<br><br>
        <a href="https://www.youtube.com/watch?v=gbSIBhFwQ4s&list=PL1CB6AC75FEB2A393&index=44" target="_blank">https://www.youtube.com/watch?v=gbSIBhFwQ4s&list=PL1CB6AC75FEB2A393&index=44</a></div>
        <br><br></div>';
        break;
      case 18:
        echo '<div id="contimg"><img id="im" src="media/uni2/18.jpg"><br><br>';
        echo '<div id="caption">División del citoplasma por la mitad... la citocinesis temprana... el núcleo de cada mitad aun no presenta nucléolo...</div>
              <br><br></div>';
        break;
      case 19:
        echo '<div id="contimg"><img id="im" src="media/uni2/19.jpg"><br><br>';
        echo '<div id="caption">Un cariotipo...<br><br>
              <s href="https://www.youtube.com/watch?v=E0WkZr819UU&index=7&list=PL1CB6AC75FEB2A393" target="_blank">https://www.youtube.com/watch?v=E0WkZr819UU&index=7&list=PL1CB6AC75FEB2A393</a></div>
              <br><br></div>';
        break;
      case 20:
        echo '<div id="contimg"><img id="im" src="media/uni2/.jpg"><br><br>';
        echo '
              <br><br></div>';
        break;
      case 21:
        echo '<div id="contimg"><img id="im" src="media/uni2/.jpg"><br><br>';
        echo '
              <br><br></div>';
        break;
    }




  ?>
</body>
