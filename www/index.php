<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <link href="style.css" rel="stylesheet">
    <title>Portefolio</title>
</head>


<body class="bg-dark">


  <nav class="navbar navbar-expand-lg bg-light m-2 sticky-top rounded-pill" id="nav">

      <div class="container">


        <a class="navbar-brand" href="index.html">
          <img id="logo" src="ETHAN__1_-removebg-preview.png" alt="Bootstrap" width="75" height="75">
        </a>


        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">

          <ul class="navbar-nav">

            <li class="nav-item">
              <a class="nav-link active text-dark fs-5" href="Qui_suisje.html">Mon parcours scolaire</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-dark fs-5" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Experiences professionnelles
              </a>
              <ul class="dropdown-menu dropdown-menu-dark">
                <li>
                  <a class="dropdown-item" href="stage1.html">Stage 1er année
  
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="Stage2.html">Stage 2ème année
                  </a>
                </li>
              </ul>
              <li class="nav-item">
                <a class="nav-link active text-dark fs-5" href="projet.html">Projet</a>
            </li>

            <li class="nav-item">
              <a class="nav-link active text-dark fs-5" href="veille.html">Veille technologique</a>
            </li>

            <li class="nav-item">
              <a class="nav-link active text-dark fs-5" href="contact.php">Contact</a>
            </li>

          </ul>

        </div>

      </div>

    </nav>
    
      <header class="container" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('header.jpeg'); background-size: cover; background-position: center; padding:100px ">
        <div class="card justify-content-center">
          <div class="card-body" id="cardacceuil">
            <h5 class="card-title d-flex justify-content-center fs-1">Mon portfolio</h5>
            <p class="card-text text-center fs-3">Je m'appelle Ethan Reina. Je suis en Bachelor dévellopement web et application. Je suis à la recherche d'une entreprise pour uen alternance. Sur ce site, vous trouverez mon parcours et mes projets que j'ai réalisé auparavant.</p>
            <a href="CVEthanReina.pdf" class="btn btn-primary">Mon CV</a>
          </div>
        </div>
      </header>

    <script src="app.js"></script>
</body>
</html>