<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <link rel="stylesheet" href="app/view/css/style.css">

  <title>Api Pokemon</title>
</head>

<body class="bg-warning">
  <header>
    <nav class="navbar navbar-dark menu">
      <a class="navbar-brand" href="#"><img src="app/view/img/pokedex.png" width="70" height="60" class="d-inline-block align-top" alt="Logo Pokedex"><span class="d-inline-block mt-3"> Pokedex APP</span>
      </a>
    </nav>
  </header>

  <main class="container">
    <section class="container">
      <div class="mt-5 pt-5">

        <?php
        require_once __DIR__ . '/../components/pokedex.php';


        ?>


        <div class="col-12-lg row ">
          <?php
          (new Pokedex())->show();
          //** quando se coloca um objeto ou new dentro de um (), como o caso de cima, ele significa que o objeto deve ser criado antes de se chamar o metodo show*/
          ?>



        </div>


      </div>
    </section>
  </main>









  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>


</html>