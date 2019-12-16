<<!DOCTYPE html>

<html>
    <head>
        <meta charset = "utf-8">
    </head>
    <body>

        <?php session_start();?>
        <?php
              session_unset();
              session_destroy();
         ?>
         <p><h3>Successfully reset the current Order Seesion!!!!</h3><p>
         <p><h3>Please Click Home Link Below to Go to Main Page and View Our Menu And Order Again!</h3><p>
          <p><a href = "index.html">Home</a><p>
        
    </body>
</html>
