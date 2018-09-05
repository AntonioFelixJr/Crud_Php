<!DOCTYPE html>
<html lang="en">
<head>
  <?php 
            require_once 'Cliente.php';
  ?>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
    <body>
        <div class="container ">
          
            <?php
            //$nome = $_POST('nome');
            //$idade = $_POST('idade');

            var_dump($_POST);

            ?>
            </form> 
            <form action=<?php echo $_SERVER['PHP_SELF'] ?> method="post">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" name="nome" id="nome">
                </div>      
                <div class="form-group">
                    <label for="idade">Idade:</label>
                    <input type="text" class="form-control" name="idade" id="idade">
                </div>
            <input type="submit" value="Cadastrar"/>
            </form>
          
        <?php 

 
              $info = array();
              $info[] = array('Antonio','22');
              $info[] = array('Luiz','20');
              $info[] = array('Anderson','30');
              $info[] = array('Leandro','25');
              $info[] = array('Lucas','22');
              $info[] = array($nome,$idade);
              var_dump($info);
              echo "<br>";
              $cliente = new Cliente();
              echo "Foi";
              $cliente = $cliente->pegarCliente();
              var_dump($cliente);

              for ($i=0; $i < 5; $i++) { 
                  echo "<span class='' style='float:left; width:200px; border: 1px solid red;'>";
                  echo "<h2>".$info[$i][0]."</h2> ";
                  echo "<h3>".$info[$i][1]."</h3>";
                  echo "</span>";

                    
              }
        ?>
      
        </div>
    </body>
</html>