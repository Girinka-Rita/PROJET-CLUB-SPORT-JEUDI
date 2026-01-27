<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Projet Sport - Offres</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  <style>
    .container.mt-4 {
      text-align: center;
    }
    #inscription .container {
      max-width: 600px;
      margin-left: auto;
      margin-right: auto;
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

$message = "";
$type_message = "";

// Traiter le formulaire si POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $connexion->real_escape_string($_POST['nom']);
    $prenom = $connexion->real_escape_string($_POST['prenom']);
    $email = $connexion->real_escape_string($_POST['email']);
    $adresse = $connexion->real_escape_string($_POST['adresse']);
    $telephone = $connexion->real_escape_string($_POST['telephone']);
    $date_naissance = $connexion->real_escape_string($_POST['date_naissance']);
    $activite = $connexion->real_escape_string($_POST['activite']);
    
    // Récupérer l'ID du sport basé sur le nom
    $sql_sport = "SELECT id FROM sports WHERE nom = '$activite'";
    $resultat = $connexion->query($sql_sport);
    $sport = $resultat->fetch_assoc();
    $sport_id = $sport['id'];
    
    // Insérer les données
    $sql = "INSERT INTO membres (nom, prenom, email, adresse, telephone, date_naissance, sport_id) 
            VALUES ('$nom', '$prenom', '$email', '$adresse', '$telephone', '$date_naissance', $sport_id)";
    
    if ($connexion->query($sql) === TRUE) {
        $message = "Inscription réussie! Bienvenue au club.";
        $type_message = "success";
    } else {
        $message = "Erreur: " . $connexion->error;
        $type_message = "danger";
    }
}
?>

  <div class="container mt-4">
    <h1>Inscription activités</h1>
    <p>Complétez votre inscription pour l'activité sélectionnée.</p>
  </div>

  <section id="inscription" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Formulaire d'inscription.</h2>
            
            <?php if ($message): ?>
                <div class="alert alert-<?php echo $type_message; ?> alert-dismissible fade show" role="alert">
                    <?php echo $message; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
            
            <form method="POST" action="">
                <div class="mb-3">
                   <label for="nom" class="form-label">Nom</label>
                   <input type="text" class="form-control" id="nom" name="nom" required>
                </div>

                <div class="mb-3">
                   <label for="prenom" class="form-label">Prénom</label>
                   <input type="text" class="form-control" id="prenom" name="prenom" required>
                </div>

                <div class="mb-3">
                   <label for="email" class="form-label">Adresse e-mail</label>
                   <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                   <label for="adresse" class="form-label">Adresse</label>
                   <input type="text" class="form-control" id="adresse" name="adresse" required>
                </div>
                <div class="mb-3">
                   <label for="date_naissance" class="form-label">Date de naissance</label>
                   <input type="date" class="form-control" id="date_naissance" name="date_naissance" required>
                </div>
                <div class="mb-3">
                   <label for="tel" class="form-label">Téléphone</label>
                   <input type="tel" class="form-control" id="telephone" name="telephone" pattern="0[0-9\s]{9,13}" placeholder="0X XX XX XX XX" required>
                </div>
                <div class="mb-3">
                   <label for="activite" class="form-label">Activité choisie</label>
                <select class="form-select" id="activite" name="activite" required>

                    <option value="" disabled selected>Choisissez une activité</option>
                     <option value="Basketball">Basketball</option>
                    <option value="Tennis">Tennis</option>
                    <option value="Volleyball">Volleyball</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">S'inscrire</button>

            </form>
        </div>
    </section>
    <?php include '../commun/footer.php'; ?>
</body>
</html>