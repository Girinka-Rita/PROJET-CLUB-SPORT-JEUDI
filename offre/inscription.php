<?php include '../commun/header.php'; ?>
  <div class="container mt-4">
    <h1>Inscription activités.</h1>
    <p>Complétez votre inscription pour l'activité sélectionnée.</p>
  </div>

  <section id="inscription" class="py-5">
        <!-- Contenu des offres -->
        <div class="container">
            <h2 class="text-center mb-4">Formulaire d'inscription.</h2>
            <form>
                <div class="mb-3">
                   <label for="nom" class="form-label">Nom</label>
                   <input type="text" class="form-control" id="nom" required>
                </div>

                <div class="mb-3">
                   <label for="prenom" class="form-label">Prénom</label>
                   <input type="text" class="form-control" id="prenom" required>
                </div>

                <div class="mb-3">
                   <label for="email" class="form-label">Adresse e-mail</label>
                   <input type="email" class="form-control" id="email" required>
                </div>
                <div class="mb-3">
                   <label for="adresse" class="form-label">Adresse</label>
                   <input type="text" class="form-control" id="adresse" required>
                </div>
                <div class="mb-3">
                   <label for="date_naissance" class="form-label">Date de naissance</label>
                   <input type="date" class="form-control" id="date_naissance" required>
                </div>
                

                <div class="mb-3">
                   <label for="activite" class="form-label">Activité choisie</label>
                <select class="form-select" id="activite" required>

                    <option value="" disabled selected>Choisissez une activité</option>
                     <option value="basketball">Basketball</option>
                    <option value="tennis">Tennis</option>
                    <option value="volleyball">Volleyball</option>
                </select>
            </div>
                <div class="mb-3">
                <label for="niveau" class="form-label">Niveau</label>
                <select class="form-select" id="niveau" required>
                    <option value="" disabled selected>Choisissez votre niveaux</option>

                    <option value="basketball">Debutant</option>
                    <option value="tennis">Intermediaire</option>
                    <option value="volleyball">Avancée</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">S'inscrire</button>

            </form>
        </div>
    </section>
    <?php include '../commun/footer.php'; ?>