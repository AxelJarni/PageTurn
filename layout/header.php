<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/css/normalize.css">
  <link rel="stylesheet" href="assets/css/main.css?v=<?php echo time(); ?>">
  

  <meta name="theme-color" content="#fafafa">
</head>
<div id="wrap">
<body>
    <header class="jumbotron jumbotron-fluid bg-light my-0 py-4">
        <section class="container mb-2 text-center">
            <?php echo'<img src ="../assets/img/booklogo.png" alt="Logo of an open book" id="booklogo">' ?>
            <h1 class="display-4 border-bottom border-primary mt-0"><strong>PageTurn</strong></h1>
            <p class="lead pb-2">Your library application to help you manage.</p>
        </section>
    </header>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mx-5" id="navbarNavDropdown">
            <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link text-black mx-2" href="index.php">Home <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-black mx-2" href="books.php">Books</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-black mx-2" href="users.php">Users</a>
            </li>
            </ul>
        </div>
    </nav>
  

  <main class="container my-5">