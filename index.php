<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Club sportif</title>
    <style>
    
      .carousel-img {
        height: 300px;
        object-fit: cover;
      }
      @media (max-width: 576px) {
        .carousel-img { height: 180px; }
      }
    </style>
</head>
<?php include'commun/header.php'; ?>
<body>
<div class="container mt-5">
    <h1>Club Sportif Multi-Sports</h1>

<section>
      <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/basketball.jpg" class="d-block w-100 rounded carousel-img" alt="joueurs de basketball">
          </div>
          <div class="carousel-item">
            <img src="img/Volleyball.jpg" class="d-block w-100 rounded carousel-img" alt="joueurs de volleyball">
          </div>
          <div class="carousel-item">
            <img src="img/tennis.jpg" class="d-block w-100 rounded carousel-img" alt="joueurs de tennis">
          </div>
        </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Precedent</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Prochain</span>
      </button>
    </div>
  </section>
</body>
</html>