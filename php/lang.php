

<?php #Index ?>


<?php
  $lang = null;
  if(!isset($_GET['lang']))
    $lang = 0;
  elseif(isset($_GET['lang'])) {
    if($_GET['lang'] == 0) 
      $lang = 0;
    else if($_GET['lang'] == 1)
      $lang = 1;
  }
  // $lang = $lang;




  
  // if(isset($_GET['lang'])) {
  //   if($_GET['lang'] == 1) {
  //     $lang = 1;
  //   }else if($_GET['lang'] == 2) {
  //     $lang = 2;
  //   }else if($_GET['lang'] == 3) {
  //     $lang = 3;
  //   }
  // }

  $symbole = array('fr', 'en');
  $titre = array('Malicc - Plateform de services locations', 'Malicc - Rental service platform');
  $title = array('Trouver tres vite <br> un  service de <span>LOCATION</span>', 'Find a &nbsp;<span>RENTAL</span> <br>  service very quickly', 'Finden sehr schnell <br> ein geschaft von <span>MIETEN</span>');
  $titlesmart = array('Trouvez trés vite un service de location', 'Find a rental service very quickly');
  $quoi = array('Quoi... ?', 'What... ?');
  $ou = array('Ou... ?', 'Where... ?');
  $recherche = array('Recherche', 'Search');
  $popular = array('Services populaires : ', 'Popular services : ');
  $LocationVehicule = array('Locations de vehicule', 'Vehicle rental');
  $rechercheLogement = array('Recherche de logement', 'Housing search');
  $LocationEngins = array('Locations d\'engins', 'Maschine rental');
  $voitures = array('Voitures', 'Car');
  $appartements = array('Appartements', 'Apartment');
  $stadeFootball = array('Stade de Football', 'Football stadium');
  $stade = array('Stades', 'Stadium');
  $voituresSUV = array('Voitures SUV', 'SUV car');
  $villa = array('villa', 'villa');
  $engis = array('Engins', 'Engines');
  $terrainNues = array('Terrain Nues', 'Bare ground');
?>

<?php #Header ?>

<?php
  $choixLangue = array('Selectionez une langue', 'Select a language');
  $langue = array('Francais', 'Englisch');
  $queRecherchezVous = array('Que recherchez-vous...', 'What are you looking for...');
  $rejoindreMalik = array('Rejoindre Malicc', 'Join Malicc');
  $bienvenue = array('Bienvenue sur Malicc ! Souhaitez-vous découvrir Malicc en anglais ? <a href=".?lang=1">C\'est parti !</a>', 'Welcome to Malicc ! Would you like to discover Malicc in french ? <a href=".">let\'s go</a>');
  $devenirPrestataire = array('Devenir prestataire', 'Become a seller');
  $seConnecter = array('Se connecter', 'Sign in');
  $sIncrire = array('S\'incrire', 'Join');
  $parcourirCategories = array('Parcourir les categories', 'Browse categories');
  $logements = array('Logements', 'Hausing');
  $immeubles = array('Immeuble', 'Building');
  $maisons = array('Maison', 'House');
  $studios = array('Studio', 'Studio');
  $vehicules = array('Vehicules', 'Vehicle');
  $grosCamion = array('Gros camion', 'Big truck');
  $miniCamion = array('Mini camion', 'Mini truck');
  $camionClassic = array('Camion classic', 'Classic truck');
  $Limousines = array('Limousines', 'Limousine');
  $MotoClassic = array('Moto classic', 'Classic motorcycles');
  $MotoCross = array('Moto cross', 'Moto cross');
  $MotoCourse = array('Moto course', 'Motorcycle racing');
  $voituresClassic = array('Voitures classic', 'Classic car');
  $voituresPickup = array('Voitures pickup', 'Pickup car');
  $camion = array('Camion', 'Truck');
  $van = array('van', 'van');
  $chargeuse = array('Chargeuse', 'Loader');
  $miniChargeuse = array('Mini-chargeuse', 'Mini Loader');
  $nacelle = array('Nacelle', 'Aerial work platform');
  $niveleuse = array('Niveleuse', 'Motor grader');
  $pelleteuse = array('Pelleteuse', 'Backhoe');
  $rouleauCompresseur = array('Rouleau-compresseur', 'Compressor-rollers');
  $tractopelle = array('Tractopelle', 'Backhoe loader');
  $bateaux = array('Bateaux', 'Boat');
  $boites = array('Boites', 'Box');
  $boutiques = array('Boutiques', 'Boutique');
  $bureaux = array('Bureaux', 'Office');
  $machines = array('Machines', 'Machine');
  $magasin = array('Magasins', 'Store');
  $autres = array('Autres', 'Other');
  $salleFete = array('Salle des fetes', 'Party room');
  $solutionsAffaires = array('Des solutions d\'affaires', 'Bussiness solutions');
  $acceuil = array('Acceuil', 'Home');
  $aProposMalik = array('A propos de Malicc', 'About Malicc');
?>

<?php #Footer ?>

<?php
  $aPropos = array('A propos', 'About');
  $partenaire = array('Partenaires', 'Partners');
  $conditionUtilisateur = array('Condition d\'utilisateur', 'Terms of use');
  $communaute = array('Communaute', 'Community');
  $temoignages = array('Temoignages', 'Testimonials');
?>

<?php #Search ?>


<?php
  $resultatsPour = array('Resultats pour', 'Results for');
  $servicesDisponibles = array('services disponibles', 'Service available');
  $aPartirDe = array('A partir de', 'From');
?>

<?php #connexion ?>

<?php
  $creerNouveauCompte = array('Creer un nouveau compte', 'Create a new account');
  $vousAvezCompte = array('Vous avez deja un compte?', 'Have you already a account?');
  $continuerGoogle = array('Continuer avec Google', 'Continue with Google');
  $continuerEmail = array('Continuer avec votre email', 'Continue with email');
?>
