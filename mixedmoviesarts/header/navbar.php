<?php
session_start();
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="stylesheet" href="mma/css/navbar.css">


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="mma-home">MMA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="mma-home" id="page">Accueil</a>
        </li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Association
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="mma-histoire">Histoire</a></li>
            <li><a class="dropdown-item" href="mma-benevole">Devenir Bénévole</a></li>
            <li><a class="dropdown-item" href="mma-equipe">L'équipe</a></li>
            <li><a class="dropdown-item" href="mma-reference">Text de référence</a></li>
            <li><a class="dropdown-item" href="mma-recrutement">Recrutement</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Activités
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="mma-films">Films / Courts métrages</a></li>
            <li><a class="dropdown-item" href="mma-photos">Photos</a></li>
            <li><a class="dropdown-item" href="mma-art">Art</a></li>
            <li><a class="dropdown-item" href="mma-concerts">Concerts</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Infos pratiques
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li><a class="dropdown-item" href="mma-support">Support</a></li>
          <li><a class="dropdown-item" href="mma-contact">Contact</a></li>
          <li><a class="dropdown-item" href="mma-newsletter">Newsletter</a></li>
          <li><a class="dropdown-item" href="mma-partenaire">Partenaires</a></li>
          <li><a class="dropdown-item" href="mma-reseaux">Réseaux sociaux</a></li>
        </ul>
      </li>
      <?php 
      if (!isset($_SESSION["email"]))
      {
        echo "<li class='nav-item dropdown'>
        <a class='nav-link dropdown-toggle' href='#' id='navbarDropdownMenuLink' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
          Compte
        </a>
        <ul class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>
          <li><a class='dropdown-item' href='mma-connexion'>Connexion</a></li>
          <li><a class='dropdown-item' href='mma-inscription'>Inscription</a></li>
        </ul>
      </li>";
      }
      if (isset($_SESSION["email"]))
      {
        echo "<li class='nav-item dropdown'>
        <a class='nav-link dropdown-toggle' href='#' id='navbarDropdownMenuLink' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
          Compte
        </a>
        <ul class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>
          <li><a class='dropdown-item' href='mma-deconnexion'>Deconnexion</a></li>
          <li><a class='dropdown-item' href='mma-compte'>Compte</a></li>
        </ul>
      </li>";
      echo "<li class='nav-item dropdown'>
        <a class='nav-link dropdown-toggle' href='#' id='navbarDropdownMenuLink' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
          Discussion
        </a>
        <ul class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>
          <li><a class='dropdown-item' href='forum-chat'>Chat</a></li>
          <li><a class='dropdown-item' href='forum-home'>Forum</a></li>
        </ul>
      </li>";
      // session_destroy();
      }
      ?>
          <li class="nav-item">
            <a class="nav-link" href="mma-billetterie" id="page">Billetterie</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="mma-donation" id="page">donation</a>
          </li>
        </ul>
        <span class="navbar-text">
          Mixed Movies Arts
        </span>
      </div>
    </div>
  </nav>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <?php
  // session_destroy();
  ?>