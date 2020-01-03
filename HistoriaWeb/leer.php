<p id="leer" class="btn btn-primary center-block" style="cursor:pointer;">Leer más
  <script type="text/javascript">
    $(document).ready(function(){
      $('.texto').toggle( function(e){
        $(this).text('Leer menos...');
        e.preventDefault();
      },
      function(e){
          $(this).text('Leer más...');
          e.preventDefault();
        });
      });
  </script>
</p>

<!--

<p id="leer" class="texto" style="cursor:pointer;">Leer más
  <script type="text/javascript">
    $(document).ready(function(){
      $('.texto').toggle( function(e){
        $(this).text('Leer menos...');
        e.preventDefault();
      },
      function(e){
          $(this).text('Leer más...');
          e.preventDefault();
        });
      });
  </script>
</p>

-->
