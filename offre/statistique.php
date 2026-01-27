<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Statistiques - Club Sport</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  <style>
    .hero-section {
      background-color: #0d6efd;
      color: white;
      padding: 80px 20px;
      text-align: center;
      margin-bottom: 60px;
    }
    
    .hero-section h1 {
      font-size: 3.5rem;
      font-weight: 700;
      margin-bottom: 20px;
    }
    
    .hero-section p {
      font-size: 1.3rem;
      opacity: 0.95;
    }
    
    .stat-number {
      font-size: 3rem;
      font-weight: 700;
      color: #0d6efd;
      margin: 20px 0;
    }
    
    .stat-label {
      font-size: 1rem;
      color: #555;
      font-weight: 500;
    }
    
    .sport-icon {
      font-size: 2.5rem;
      margin-bottom: 15px;
    }
    
    .total-stat {
      background: linear-gradient(135deg, #0d6efd 0%, #0b5ed7 100%);
      color: white;
      padding: 50px 30px;
      border-radius: 8px;
      text-align: center;
    }
    
    .total-stat h2 {
      font-size: 1.3rem;
      margin-bottom: 15px;
      opacity: 0.95;
    }
    
    .total-number {
      font-size: 4rem;
      font-weight: 700;
      margin: 20px 0;
    }
    
    .total-stat p {
      font-size: 1rem;
      opacity: 0.9;
    }
    
    @media (max-width: 768px) {
      .hero-section h1 {
        font-size: 2.5rem;
      }
      
      .stat-number {
        font-size: 2.5rem;
      }
      
      .total-number {
        font-size: 3rem;
      }
    }
  </style>
</head>
<body>
<?php include '../commun/header.php'; ?>

<?php
// Connexion à la base de données
$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$base = "club_sport";

$connexion = new mysqli($serveur, $utilisateur, $motdepasse, $base);

// Vérifier la connexion
if ($connexion->connect_error) {
    die("Erreur de connexion: " . $connexion->connect_error);
}

// Récupérer le nombre total de membres
$sql_total = "SELECT COUNT(*) as total FROM membres";
$resultat_total = $connexion->query($sql_total);
$row_total = $resultat_total->fetch_assoc();
$total_membres = $row_total['total'];

// Récupérer le nombre de membres par sport
$sql_sports = "SELECT s.nom, COUNT(m.id) as nombre FROM sports s 
               LEFT JOIN membres m ON s.id = m.sport_id 
               GROUP BY s.id, s.nom 
               ORDER BY nombre DESC";
$resultat_sports = $connexion->query($sql_sports);

$sports_data = array();
while ($row = $resultat_sports->fetch_assoc()) {
    $sports_data[] = $row;
}

$connexion->close();
?>

  <!-- Hero Section -->
  <div class="hero-section">
    <h1>Nos Statistiques</h1>
    <p>Découvrez la communauté croissante de notre club sportif</p>
  </div>

  <!-- Main Container -->
  <div class="container mb-5">
    <!-- Sport Statistics Cards -->
    <div class="row g-4 mb-5">
      <?php foreach ($sports_data as $sport): ?>
        <div class="col-md-4">
          <div class="card h-100 text-center">
            <div class="card-body">
              <div class="sport-icon">
                <?php 
                  $icons = array(
                    'Basketball' => '🏀',
                    'Tennis' => '🥎',
                    'Volleyball' => '🏐'
                  );
                  echo isset($icons[$sport['nom']]) ? $icons[$sport['nom']] : '⚽';
                ?>
              </div>
              <div class="stat-number"><?php echo $sport['nombre']; ?></div>
              <div class="stat-label"><?php echo $sport['nom']; ?></div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    
    <!-- Total Members Card -->
    <div class="row">
      <div class="col-12">
        <div class="total-stat">
          <h2>Membres Totaux du Club</h2>
          <div class="total-number"><?php echo $total_membres; ?></div>
          <p>Rejoignez notre communauté en croissance constante</p>
          <p style="font-size: 0.95rem; margin-top: 15px;">Passionnés de sport, tous réunis dans un même club</p>
        </div>
      </div>
    </div>
  </div>

<?php include '../commun/footer.php'; ?>

</body>
</html>
