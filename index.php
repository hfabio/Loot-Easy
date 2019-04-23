<!DOCTYPE html>
<html lang="pt-br">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Loot Easy</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/landing-page.min.css" rel="stylesheet">
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-light bg-light static-top">
      <div class="container">
        <a class="navbar-brand" href="index.php"><i class="far fa-money-bill-alt"></i> Loot Easy</a>
      </div>
    </nav>

    <!-- Masthead -->
    <header class="masthead text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h1 class="mb-5 alert alert-dark">Saiba em automaticamente sobre a divisão do loot! <img src="img/Crystal_Coin.gif"></h1>
          </div>
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
              <div class="form-row">
                <div class="col-12 col-md-9 mb-2 mb-md-0">
                  <form action="#" method="post">
                  <select name="n_players" id="n_players" class="form-control form-control-lg">
                      <?php 
                      for($i = 2; $i < 5 ; $i++){
                          if($_POST['n_players']==$i){
                              echo '<option value="'.$i.'" selected>'.$i.' players</option>';
                          }else{
                              echo '<option value="'.$i.'">'.$i.' players</option>';
                          }
                      }
                      ?>
                  </select>
                </div>
                <div class="col-12 col-md-3">
                  <button type="submit" class="btn btn-block btn-lg btn-primary">Let's hunt!</button>
                </form>
                </div>
              </div>
          </div>
        </div>
      </div>
    </header>

<body>

  <div class="container">
    <div class="row">
      <div class="col-lg-2">

      </div>
      <div class="col-md-9 h-100 text-center text-lg-left my-auto">
        <?php
        if (isset($_POST['n_players'])) {
          $n_players = $_POST['n_players'];
            echo '<input type="number" id="numero_players" value="'.$n_players.'" hidden>';
          require("hunt.php");
          $body = criaTabela($n_players);
          ?>
          <center><br><img src="img/Gold_Ingot.gif"> <img src="img/Bar_of_Gold.gif"> <img src="img/Pair_of_Soft_Boots.gif"> <img src="img/Ultimate_Health_Potion.gif"> <img src="img/Ultimate_Spirit_Potion.gif"> <img src="img/Ultimate_Mana_Potion.gif"> <img src="img/Spellbook_of_Ancient_Arcana.gif"> <br><hr></center>
            <table class="table table-bordered" style="text-align: center;">
              <thead>
                <tr>
                  <th scope="col">Cabeçalho</th>
                  <th>Valor</th>
                </tr>
              </thead>
              <tbody>
                  <?php echo $body;?>
              </tbody>
            </table>
          <?php
        }else{
            ?>
            <br><hr><br>
            <div class="alert alert-success" role="alert">
                <p class="float-left"><i class="fas fa-mobile-alt fa-3x"></i></p><p><center>Não se esqueça de que você pode usar o LootEasy <strong>no celular <i class="fas fa-mobile"></i></strong> também!</center></p>
            </div>
            <p><center><img src="img/Draken_Warmaster.gif"> <img src="img/Silencer.gif"> <mark>Digite o número de players da hunt!</mark> <img src="img/Midnight_Asura.gif"> <img src="img/Animated_Guzzlemaw.gif"></center><hr></p>
            <?php
        }
         ?>
      </div>
    </div>
  </div>
</body>
    
        <script>
        window.onload = function() {
            var n_players = parseInt(document.getElementById("numero_players").value);
            calcula(n_players);
         };
            
        function calcula(n){
            var waste = [];
            var total_loot = parseInt(document.getElementById("total_loot").value);
            var total_waste = 0;
            for(i = 0; i<n; i++){
                waste[i] = parseInt(document.getElementById(""+i).value);
                total_waste += parseInt(document.getElementById(""+i).value);
            }
            
            //altera valores
            document.getElementById("waste_total").value = total_waste;
            document.getElementById("profit_total").value = total_loot - total_waste;
            document.getElementById("profit_unitario").value = ((total_loot - total_waste)/n).toFixed(0);;
            
            /*
            console.log(total_waste);
            console.log(waste);
            console.log(total_loot);
            */
        }
    </script>
    <!-- Footer -->
    <footer class="footer bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 h-100 text-center text-lg-center my-auto">
            <p class="text-muted text-center large mb-4 mb-lg-0">Esta ferramenta foi desenvolvida por <span class="badge"><a href="https://fb.com/heltonfabio" target="_blank">Helton Fabio</a></span>.</p>
          <p class="text-muted text-center large mb-4 mb-lg-0">Doações de coins: <a class="text-success"> Czar Heltus</a></p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
