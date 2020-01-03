<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/madre.css">
  </head>
  <body>
    <div class="fondex">
    <div id="back1">
      <div id="back2">
        <!--<iframe style="opacity:0.4;" src="https://www.youtube.com/embed/hMfur2X7Qco?controls=0&showinfo=0&rel=0&autoplay=1&version=3&loop=1&playlist=hMfur2X7Qco&mute=1&html5=1;" frameborder="0" allowfullscreen></iframe>-->
        <video autoplay loop mute poster="posterimage.jpg">
          <source src="media/fondo1.mp4" type="video/mp4">
        </video>
        <script type="text/javascript">
          video.addEventListener('canplay', function(e) {
          this.volume = 0;
          this.currentTime = 10;
          this.play();
          }, false);
        </script>
      </div>
    </div>

    <div align="center" id="contenido">
      <div class="pdf">
        <h1 class="bio">BIOLOGÍA</h1>
        <h1 class="leo">Leonardo Casás</h3>
        <br>
        <hr class="linea">
        <br><br>
        <a id="unix" href="uni1/u1p1.php">Unidad 1<br><img src="media/docu.png"></a>
        <a id="unix" href="uni2/u2p1.php">Unidad 2<br><img src="media/docu.png"></a>
        <a id="unix" href="uni3/u3p1.php">Unidad 3<br><img src="media/docu.png"></a>
        <br>
        <hr class="linea2">
        <?php include 'pie.php'; ?>
      </div>
    </div>
  </div>
  </body>
</html>
