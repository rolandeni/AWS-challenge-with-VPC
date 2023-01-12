<!DOCTYPE html>
<html>
  <body>

    <h1> 
      Demo PHP page </h1>

    <h1>
      <?php

          echo "hostname is:".gethostname();

      ?>
    </h1>

  </body>
</html>



<!DOCTYPE html>
<html>  
  <body>
    <p>
        <?php 
            
            echo "hostname is:".gethostname();
            echo $_SERVER['LOCAL_ADDR'];
        ?>
    </p>
  </body>
</html>