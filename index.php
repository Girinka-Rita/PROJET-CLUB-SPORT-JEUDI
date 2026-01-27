<?php include 'commun/header.php'; ?>

<style>
  .carousel-section {
    margin: 40px 0;
  }
  
  .carousel-img {
    width: 100%;
    height: auto;
    display: block;
  }
  
  .presentation-section {
    padding: 60px 0;
  }
  
  .presentation-item {
    display: grid;
    grid-template-columns: 1fr 1fr; /* chaque colomne occupera 50% de l'espace dispo */
    gap: 40px;
    align-items: center;
    margin-bottom: 80px;
  }
  
  .presentation-item.reverse {
    direction: rtl; /* Right-to-Left */
  }
  
  .presentation-item.reverse > * {
    direction: ltr; /* Left-to-Right */
  }
  
  .presentation-image {
    width: 100%;
    height: 300px;
    object-fit: cover;
    border-radius: 8px;
  }
  
  .presentation-text h3 {
    font-size: 1.8rem;
    margin-bottom: 20px;
    color: #0d6efd;
    font-weight: 600;
  }
  
  .presentation-text p {
    font-size: 1rem;
    line-height: 1.6;
    color: #555;
    margin-bottom: 15px;
  }
  
  @media (max-width: 768px) {
    .presentation-item {
      grid-template-columns: 1fr;
      gap: 20px;
    }
    
    .presentation-item.reverse {
      direction: ltr;
    }
  }
</style>

<div class="container">
  <h1 class="mt-5 mb-3">Club Sportif Multi-Sports</h1>
  <p class="text-muted mb-4">Bienvenue à votre destination sportive</p>

  <!-- Carousel Section -->
  <section class="carousel-section">
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="/Promo321/PROJET-CLUB-SPORT-JEUDI/img/basketball5.jpg" class="d-block w-100 rounded carousel-img" alt="joueurs de basketball">
        </div>
        <div class="carousel-item">
          <img src="/Promo321/PROJET-CLUB-SPORT-JEUDI/img/Volleyball2.jpg" class="d-block w-100 rounded carousel-img" alt="joueurs de volleyball">
        </div>
        <div class="carousel-item">
          <img src="/Promo321/PROJET-CLUB-SPORT-JEUDI/img/tennis2.jpg" class="d-block w-100 rounded carousel-img" alt="joueurs de tennis">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Précédent</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Prochain</span>
      </button>
    </div>
  </section>

  <!-- Section présentation -->
  <section class="presentation-section">
    <h2 class="text-center mb-5">À Propos de Notre Club</h2>


     <div class="presentation-item reverse">
      <div class="presentation-text">
        <h3>🎾 Tennis</h3>
        <p>Découvrez l'art du tennis avec nos instructeurs expérimentés. Nous proposons des cours pour tous les niveaux et des tournois internes réguliers. Développez votre technique et participez à une communauté passionnée.</p>
        <a href="/Promo321/PROJET-CLUB-SPORT-JEUDI/offre/inscription.php" class="btn btn-outline-primary btn-sm">S'inscrire</a>
      </div>
      <img src="/Promo321/PROJET-CLUB-SPORT-JEUDI/img/tennis2.jpg" class="presentation-image" alt="tennis">
    </div>

    <div class="presentation-item">
      <div class="presentation-text">
        <h3>🏀 Basketball</h3>
        <p>Rejoignez notre équipe de basketball dynamique. Nos coachs qualifiés vous guideront à travers des entraînements intensifs et des matchs amicaux. Que vous soyez débutant ou confirmé, nous avons une place pour vous.</p>
        <a href="/Promo321/PROJET-CLUB-SPORT-JEUDI/offre/inscription.php" class="btn btn-outline-primary btn-sm">S'inscrire</a>
      </div>
      <img src="/Promo321/PROJET-CLUB-SPORT-JEUDI/img/basketball5.jpg" class="presentation-image" alt="basketball">
    </div>

<<<<<<< HEAD
    <!-- Item 2 REVERSE -->
    <div class="presentation-item reverse"> <!-- Reverse fait que l'image est à gauche -->
      <div class="presentation-text">
        <h3>🎾 Tennis</h3>
        <p>Découvrez l'art du tennis avec nos instructeurs expérimentés. Nous proposons des cours pour tous les niveaux et des tournois internes réguliers. Développez votre technique et participez à une communauté passionnée.</p>
        <a href="/Promo321/PROJET-CLUB-SPORT-JEUDI/offre/inscription.php" class="btn btn-outline-primary btn-sm">S'inscrire</a>
      </div>
      <img src="/Promo321/PROJET-CLUB-SPORT-JEUDI/img/tennis.jpg" class="presentation-image" alt="tennis">
    </div>
=======

>>>>>>> e19f3504328f48932ea6415ebce77208e4035e3f

    <!-- Item 3 -->
    <div class="presentation-item reverse">
      <div class="presentation-text">
        <h3>🏐 Volleyball</h3>
        <p>Le volleyball est un sport d'équipe par excellence. Entraînements réguliers, matchs amicaux et compétitions vous attendent. Rejoignez notre communauté de volleyeurs motivés et améliez vos compétences.</p>
        <a href="/Promo321/PROJET-CLUB-SPORT-JEUDI/offre/inscription.php" class="btn btn-outline-primary btn-sm">S'inscrire</a>
      </div>
      <img src="/Promo321/PROJET-CLUB-SPORT-JEUDI/img/Volleyball2.jpg" class="presentation-image" alt="volleyball">
    </div>
  </section>
</div>

<?php include 'commun/footer.php'; ?>