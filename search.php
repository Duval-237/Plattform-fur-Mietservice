<?php

session_start();

?>
<?php include('php/lang.php') ?>
<!DOCTYPE html>
<html lang="<?php echo $symbole[$lang]; ?>">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titre[$lang]; ?></title>
    <link rel="shortcut icon" href="img/Malik.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/search.css">
  </head>
  <body>

    <form action="#" method="get" id="_ZONE_FILTER" class="">
      <div class="top">
        <div class="close-filter">
          <div class="clos"></div>
          <div class="text">Filtres</div>
        </div>
      </div>

      <div class="middle">
        <div class="filter-options trier-par">
          <div class="filter-name">

            <span>Trier par</span>
          </div>
          <ul>
            <li class="options">
              <label>
                <input type="radio" name="trier">
                <div class='btn'>Moins couteux</div>
              </label>
            </li>
            <li class="options">
              <label>
                <input type="radio" name="trier">
                <div class='btn'>Plus couteux</div>
              </label>
            </li>
            <li class="options">
              <label>
                <input type="radio" name="trier">
                <div class='btn'>Plus couteux</div>
              </label>
            </li>
          </ul>
        </div>
        
        <div class="filter-options">
          <div class="filter-name">

            <span>Choisissez le pays</span>
          </div>
          <ul>
            <li class="options">
              <select name="country" class='btn' id="">
                <option value="de">Allemagne</option>
                <option value="cmr" selected="selected">Cameroun</option>
                <option value="fr">France</option>
              </select>
            </li>
          </ul>
        </div>
      </div>

      <div class="bottom">
        <input type="submit" class="btn-appliquer" value="Appliquer">
      </div>
    </form>

    <?php include("php/header.php"); ?>

    <div class="searchMenu-wrapper">
      <section id="search-menu">
        <div class="filter-pc">
          <ul class="filter-menu">
            <li>
              <div class="filter-btn">
                <span class="text">Trier par</span>
                <span class="dev"></span>
              </div>
              <form action="#">
                <ul>
                  <li>
                    <label>
                      <input type="radio" name="trier">
                      <div class="btn-trier">
                        <span>moins couteux</span>
                      </div>
                    </label>
                  </li>
                  <li>
                    <label>
                      <input type="radio" name="trier" >
                      <div class="btn-trier">
                        <span>plus couteux</span>
                      </div>
                    </label>
                  </li>
                  <li>
                    <label>
                      <input type="radio" name="trier" >
                      <div class="btn-trier">
                        <span>plus pertinent</span>
                      </div>
                    </label>
                  </li>
                </ul>
                <div class="recherche">
                  <input type="reset" value="Decrocher">
                  <input type="submit" value="Chercher">
                </div>
              </form>
            </li>
            <li>
            <div class="filter-btn">
              <span class="text">Lieu</span>
              <span class="dev"></span>
            </div>
            <form action="#">
              <ul>
                <li>
                  <span>Pays</span>
                  <label>
                    <select name="country" class='btn-trier' id="">
                      <option value="de">Allemagne</option>
                      <option value="cmr" selected="selected">Cameroun</option>
                      <option value="fr">France</option>
                    </select>
                  </label>
                </li>
                <li>
                  <span>Ville</span>
                  <label>
                    <select name="country" class='btn-trier' id="">
                      <option value="de" selected="selected">Douala</option>
                      <option value="cmr">Younde</option>
                      <option value="fr">Bafoussam</option>
                    </select>
                  </label>
                </li>
              </ul>
              <div class="recherche">
                <input type="reset" value="Decrocher">
                <input type="submit" value="Chercher">
              </div>
            </form>
            </li>
          </ul>
        </div>

        <div class="search">
          <input type="text" name="" id="" placeholder="<?php echo $queRecherchezVous[$lang]; ?>">
          <a href="#">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 254.77 263.68"><defs><style>.cls-1,.cls-2{fill:none;stroke-width:25px;}.cls-1{stroke-miterlimit:10;}.cls-2{stroke-linejoin:round;}</style></defs><g id="Calque_2" data-name="Calque 2"><g id="Calque_1-2" data-name="Calque 1"><circle class="cls-1" cx="108.26" cy="108.26" r="95.76"/><path class="cls-2" d="M176.45,175.73l65.82,75.45Z"/></g></g></svg>
          </a>
        </div>

        <div class="filter">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 214.13 184.1"><defs><style>.cercle{fill:#fff;}</style></defs><g id="Calque_2" data-name="Calque 2"><g id="Calque_1-2" data-name="Calque 1"><path d="M10.19,20H45a0,0,0,0,1,0,0V39.6a0,0,0,0,1,0,0H10.19A9.81,9.81,0,0,1,.39,29.79v0A9.81,9.81,0,0,1,10.19,20Z"/><rect x="106.52" y="19.98" width="107.48" height="19.61" rx="9.81"/><rect y="82.24" width="106.52" height="19.61" rx="9.81"/><path d="M169.23,82.24h35.1A9.81,9.81,0,0,1,214.13,92v0a9.81,9.81,0,0,1-9.81,9.81h-35.1a0,0,0,0,1,0,0V82.24A0,0,0,0,1,169.23,82.24Z"/><path d="M9.81,144.5H45a0,0,0,0,1,0,0v19.61a0,0,0,0,1,0,0H9.81A9.81,9.81,0,0,1,0,154.31v0a9.81,9.81,0,0,1,9.81-9.81Z"/><rect x="106.52" y="144.5" width="107.48" height="19.61" rx="9.81"/><path class="cercle" d="M69.84,0A29.79,29.79,0,1,0,99.63,29.79,29.79,29.79,0,0,0,69.84,0Zm0,42.79a13,13,0,1,1,13-13A13,13,0,0,1,69.84,42.79Z"/><path class="cercle" d="M144,62.26a29.79,29.79,0,1,0,29.79,29.79A29.79,29.79,0,0,0,144,62.26Zm0,42.79a13,13,0,1,1,13-13A13,13,0,0,1,144,105.05Z"/><path class="cercle" d="M69.45,124.52a29.79,29.79,0,1,0,29.79,29.79A29.79,29.79,0,0,0,69.45,124.52Zm0,42.79a13,13,0,1,1,13-13A13,13,0,0,1,69.45,167.31Z"/></g></g></svg>
        </div>
      </section>
    </div>
    <div class="search-wrapper">
      <section id="search">
        <div class="info-search">
          <div class="word-search">
          <?php echo $resultatsPour[$lang]; ?> <span>Voitures</span>
          </div>
          <span class="number-search">4600 <?php echo $servicesDisponibles[$lang]; ?></span>
        </div>
        <div class="container">
          
          <div class="content">
            <div class="box1">
              <div class="img">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 592 517.85">
                <defs><style>.cls-3{stroke-miterlimit:10;}</style></defs><g id="Calque_2" data-name="Calque 2"><g id="Calque_1-2" data-name="Calque 1"><path class="cls-3" d="M40,188.75V183A142.93,142.93,0,0,1,284,81.87l12,12,11.1-12C340.6,49.22,387,34.36,432.6,42A142.91,142.91,0,0,1,552,183v5.8a149.6,149.6,0,0,1-47.6,109.5L323.7,467a40.65,40.65,0,0,1-55.4,0L87.59,298.25A149.74,149.74,0,0,1,40,188.75Z"/></g></g>
                </svg>
                <img src="img/v3.jpg" alt="">
              </div>
              <div class="box-profil">
                <a href="location.php" class="profil">
                  <div class="img"><img src="img/Malik.ico" alt=""></div>
                  <div class="name">Duval Tetsol</div>
                </a>
                <div class="certificat">
                  
                </div>
              </div>
            </div>
            <div class="box2">
              <a href="location.php" class="description">ipsum dolor sit amet nsectetur, adipisicing elit. Minima elit. Minima, adipisicing elit. Minima </a>
              <a href="location.php" class="position">
                <div class="poso">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                    <path d="M168.3 499.2C116.1 435 0 279.4 0 192C0 85.96 85.96 0 192 0C298 0 384 85.96 384 192C384 279.4 267 435 215.7 499.2C203.4 514.5 180.6 514.5 168.3 499.2H168.3zM192 256C227.3 256 256 227.3 256 192C256 156.7 227.3 128 192 128C156.7 128 128 156.7 128 192C128 227.3 156.7 256 192 256z"/>
                  </svg>
                  <span>Bonapriso, Douala</span>
                </div>
                <!-- <div class="eval">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 608.11 592.06">
                    <defs><style>.cls-3{stroke-miterlimit:10;}</style></defs><g id="Calque_2" data-name="Calque 2"><g id="Calque_1-2" data-name="Calque 1"><path class="cls-3" d="M397.11,190.34l143.7,21.2a32,32,0,0,1,17.8,54.4l-104.2,102.2L479,514.74a32,32,0,0,1-46.6,33.6L304,479.84l-128.3,68.5a32.22,32.22,0,0,1-33.8-2.3,31.84,31.84,0,0,1-12.8-31.3l24.6-146.6L49.49,265.94a32.15,32.15,0,0,1-7.89-32.8,31.81,31.81,0,0,1,25.73-21.6l143.58-21.2L275.31,58a32,32,0,0,1,57.5,0Z"/></g></g>
                  </svg>
                  <span>4.5</span>
                </div> -->
              </a>
              <a href="location.php" class="price"><?php echo $aPartirDe[$lang]; ?> 1.000.000XAF</a>
            </div>
          </div>

          
          <div class="content">
            <div class="box1">
              <div class="img">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 592 517.85">
                <defs><style>.cls-3{stroke-miterlimit:10;}</style></defs><g id="Calque_2" data-name="Calque 2"><g id="Calque_1-2" data-name="Calque 1"><path class="cls-3" d="M40,188.75V183A142.93,142.93,0,0,1,284,81.87l12,12,11.1-12C340.6,49.22,387,34.36,432.6,42A142.91,142.91,0,0,1,552,183v5.8a149.6,149.6,0,0,1-47.6,109.5L323.7,467a40.65,40.65,0,0,1-55.4,0L87.59,298.25A149.74,149.74,0,0,1,40,188.75Z"/></g></g>
                </svg>
                <img src="img/l3.jpg" alt="">
              </div>
              <div class="box-profil">
                <a href="location.php" class="profil">
                  <div class="img"><img src="img/tn1.jpg" alt=""></div>
                  <div class="name">Duval Tetsol</div>
                </a>
                <div class="certificat">
                  
                </div>
              </div>
            </div>
            <div class="box2">
              <a href="location.php" class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima, numquam ! </a>
              <a href="location.php" class="position">
                <div class="poso">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                    <path d="M168.3 499.2C116.1 435 0 279.4 0 192C0 85.96 85.96 0 192 0C298 0 384 85.96 384 192C384 279.4 267 435 215.7 499.2C203.4 514.5 180.6 514.5 168.3 499.2H168.3zM192 256C227.3 256 256 227.3 256 192C256 156.7 227.3 128 192 128C156.7 128 128 156.7 128 192C128 227.3 156.7 256 192 256z"/>
                  </svg>
                  <span>Bonapriso, Douala</span>
                </div>
                <!-- <div class="eval">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 608.11 592.06">
                    <defs><style>.cls-3{stroke-miterlimit:10;}</style></defs><g id="Calque_2" data-name="Calque 2"><g id="Calque_1-2" data-name="Calque 1"><path class="cls-3" d="M397.11,190.34l143.7,21.2a32,32,0,0,1,17.8,54.4l-104.2,102.2L479,514.74a32,32,0,0,1-46.6,33.6L304,479.84l-128.3,68.5a32.22,32.22,0,0,1-33.8-2.3,31.84,31.84,0,0,1-12.8-31.3l24.6-146.6L49.49,265.94a32.15,32.15,0,0,1-7.89-32.8,31.81,31.81,0,0,1,25.73-21.6l143.58-21.2L275.31,58a32,32,0,0,1,57.5,0Z"/></g></g>
                  </svg>
                  <span>4.5</span>
                </div> -->
              </a>
              <a href="location.php" class="price"><?php echo $aPartirDe[$lang]; ?>  1.000.000XAF</a>
            </div>
          </div>

          
          <div class="content">
            <div class="box1">
              <div class="img">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 592 517.85">
                <defs><style>.cls-3{stroke-miterlimit:10;}</style></defs><g id="Calque_2" data-name="Calque 2"><g id="Calque_1-2" data-name="Calque 1"><path class="cls-3" d="M40,188.75V183A142.93,142.93,0,0,1,284,81.87l12,12,11.1-12C340.6,49.22,387,34.36,432.6,42A142.91,142.91,0,0,1,552,183v5.8a149.6,149.6,0,0,1-47.6,109.5L323.7,467a40.65,40.65,0,0,1-55.4,0L87.59,298.25A149.74,149.74,0,0,1,40,188.75Z"/></g></g>
                </svg>
                <img src="img/v4.jpg" alt="">
              </div>
              <div class="box-profil">
                <a href="location.php" class="profil">
                  <div class="img"><img src="img/v2.jpg" alt=""></div>
                  <div class="name">Duval Tetsol</div>
                </a>
                <div class="certificat">
                  
                </div>
              </div>
            </div>
            <div class="box2">
              <a href="location.php" class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima, numquam ! </a>
              <a href="location.php" class="position">
                <div class="poso">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                    <path d="M168.3 499.2C116.1 435 0 279.4 0 192C0 85.96 85.96 0 192 0C298 0 384 85.96 384 192C384 279.4 267 435 215.7 499.2C203.4 514.5 180.6 514.5 168.3 499.2H168.3zM192 256C227.3 256 256 227.3 256 192C256 156.7 227.3 128 192 128C156.7 128 128 156.7 128 192C128 227.3 156.7 256 192 256z"/>
                  </svg>
                  <span>Bonapriso, Douala</span>
                </div>
                <!-- <div class="eval">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 608.11 592.06">
                    <defs><style>.cls-3{stroke-miterlimit:10;}</style></defs><g id="Calque_2" data-name="Calque 2"><g id="Calque_1-2" data-name="Calque 1"><path class="cls-3" d="M397.11,190.34l143.7,21.2a32,32,0,0,1,17.8,54.4l-104.2,102.2L479,514.74a32,32,0,0,1-46.6,33.6L304,479.84l-128.3,68.5a32.22,32.22,0,0,1-33.8-2.3,31.84,31.84,0,0,1-12.8-31.3l24.6-146.6L49.49,265.94a32.15,32.15,0,0,1-7.89-32.8,31.81,31.81,0,0,1,25.73-21.6l143.58-21.2L275.31,58a32,32,0,0,1,57.5,0Z"/></g></g>
                  </svg>
                  <span>4.5</span>
                </div> -->
              </a>
              <a href="location.php" class="price"><?php echo $aPartirDe[$lang]; ?>  1.000.000XAF</a>
            </div>
          </div>
    

          <div class="content">
            <div class="box1">
              <div class="img">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 592 517.85">
                <defs><style>.cls-3{stroke-miterlimit:10;}</style></defs><g id="Calque_2" data-name="Calque 2"><g id="Calque_1-2" data-name="Calque 1"><path class="cls-3" d="M40,188.75V183A142.93,142.93,0,0,1,284,81.87l12,12,11.1-12C340.6,49.22,387,34.36,432.6,42A142.91,142.91,0,0,1,552,183v5.8a149.6,149.6,0,0,1-47.6,109.5L323.7,467a40.65,40.65,0,0,1-55.4,0L87.59,298.25A149.74,149.74,0,0,1,40,188.75Z"/></g></g>
                </svg>
                <img src="img/e2.jpg" alt="">
              </div>
              <div class="box-profil">
                <a href="location.php" class="profil">
                  <div class="img"><img src="img/sf1.jpg" alt=""></div>
                  <div class="name">Duval Tetsol</div>
                </a>
                <div class="certificat">
                  
                </div>
              </div>
            </div>
            <div class="box2">
              <a href="location.php" class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima, numquam ! </a>
              <a href="location.php" class="position">
                <div class="poso">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                    <path d="M168.3 499.2C116.1 435 0 279.4 0 192C0 85.96 85.96 0 192 0C298 0 384 85.96 384 192C384 279.4 267 435 215.7 499.2C203.4 514.5 180.6 514.5 168.3 499.2H168.3zM192 256C227.3 256 256 227.3 256 192C256 156.7 227.3 128 192 128C156.7 128 128 156.7 128 192C128 227.3 156.7 256 192 256z"/>
                  </svg>
                  <span>Bonapriso, Douala</span>
                </div>
                <!-- <div class="eval">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 608.11 592.06">
                    <defs><style>.cls-3{stroke-miterlimit:10;}</style></defs><g id="Calque_2" data-name="Calque 2"><g id="Calque_1-2" data-name="Calque 1"><path class="cls-3" d="M397.11,190.34l143.7,21.2a32,32,0,0,1,17.8,54.4l-104.2,102.2L479,514.74a32,32,0,0,1-46.6,33.6L304,479.84l-128.3,68.5a32.22,32.22,0,0,1-33.8-2.3,31.84,31.84,0,0,1-12.8-31.3l24.6-146.6L49.49,265.94a32.15,32.15,0,0,1-7.89-32.8,31.81,31.81,0,0,1,25.73-21.6l143.58-21.2L275.31,58a32,32,0,0,1,57.5,0Z"/></g></g>
                  </svg>
                  <span>4.5</span>
                </div> -->
              </a>
              <a href="location.php" class="price"><?php echo $aPartirDe[$lang]; ?>  1.000.000XAF</a>
            </div>
          </div>

          
          <div class="content">
            <div class="box1">
              <div class="img">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 592 517.85">
                <defs><style>.cls-3{stroke-miterlimit:10;}</style></defs><g id="Calque_2" data-name="Calque 2"><g id="Calque_1-2" data-name="Calque 1"><path class="cls-3" d="M40,188.75V183A142.93,142.93,0,0,1,284,81.87l12,12,11.1-12C340.6,49.22,387,34.36,432.6,42A142.91,142.91,0,0,1,552,183v5.8a149.6,149.6,0,0,1-47.6,109.5L323.7,467a40.65,40.65,0,0,1-55.4,0L87.59,298.25A149.74,149.74,0,0,1,40,188.75Z"/></g></g>
                </svg>
                <img src="img/l2.jpg" alt="">
              </div>
              <div class="box-profil">
                <a href="location.php" class="profil">
                  <div class="img"><img src="img/Malik.ico" alt=""></div>
                  <div class="name">Duval Tetsol</div>
                </a>
                <div class="certificat">
                  
                </div>
              </div>
            </div>
            <div class="box2">
              <a href="location.php" class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima, numquam ! </a>
              <a href="location.php" class="position">
                <div class="poso">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                    <path d="M168.3 499.2C116.1 435 0 279.4 0 192C0 85.96 85.96 0 192 0C298 0 384 85.96 384 192C384 279.4 267 435 215.7 499.2C203.4 514.5 180.6 514.5 168.3 499.2H168.3zM192 256C227.3 256 256 227.3 256 192C256 156.7 227.3 128 192 128C156.7 128 128 156.7 128 192C128 227.3 156.7 256 192 256z"/>
                  </svg>
                  <span>Bonapriso, Douala</span>
                </div>
                <!-- <div class="eval">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 608.11 592.06">
                    <defs><style>.cls-3{stroke-miterlimit:10;}</style></defs><g id="Calque_2" data-name="Calque 2"><g id="Calque_1-2" data-name="Calque 1"><path class="cls-3" d="M397.11,190.34l143.7,21.2a32,32,0,0,1,17.8,54.4l-104.2,102.2L479,514.74a32,32,0,0,1-46.6,33.6L304,479.84l-128.3,68.5a32.22,32.22,0,0,1-33.8-2.3,31.84,31.84,0,0,1-12.8-31.3l24.6-146.6L49.49,265.94a32.15,32.15,0,0,1-7.89-32.8,31.81,31.81,0,0,1,25.73-21.6l143.58-21.2L275.31,58a32,32,0,0,1,57.5,0Z"/></g></g>
                  </svg>
                  <span>4.5</span>
                </div> -->
              </a>
              <a href="location.php" class="price"><?php echo $aPartirDe[$lang]; ?>  1.000.000XAF</a>
            </div>
          </div>

          
          <div class="content">
            <div class="box1">
              <div class="img">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 592 517.85">
                <defs><style>.cls-3{stroke-miterlimit:10;}</style></defs><g id="Calque_2" data-name="Calque 2"><g id="Calque_1-2" data-name="Calque 1"><path class="cls-3" d="M40,188.75V183A142.93,142.93,0,0,1,284,81.87l12,12,11.1-12C340.6,49.22,387,34.36,432.6,42A142.91,142.91,0,0,1,552,183v5.8a149.6,149.6,0,0,1-47.6,109.5L323.7,467a40.65,40.65,0,0,1-55.4,0L87.59,298.25A149.74,149.74,0,0,1,40,188.75Z"/></g></g>
                </svg>
                <img src="img/sf1.jpg" alt="">
              </div>
              <div class="box-profil">
                <a href="location.php" class="profil">
                    <div class="img"><img src="img/bt1.jpg" alt=""></div>
                  <div class="name">Duval Tetsol</div>
                </a>
                <div class="certificat">
                  
                </div>
              </div>
            </div>
            <div class="box2">
              <a href="location.php" class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima, numquam ! </a>
              <a href="location.php" class="position">
                <div class="poso">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                    <path d="M168.3 499.2C116.1 435 0 279.4 0 192C0 85.96 85.96 0 192 0C298 0 384 85.96 384 192C384 279.4 267 435 215.7 499.2C203.4 514.5 180.6 514.5 168.3 499.2H168.3zM192 256C227.3 256 256 227.3 256 192C256 156.7 227.3 128 192 128C156.7 128 128 156.7 128 192C128 227.3 156.7 256 192 256z"/>
                  </svg>
                  <span>Bonapriso, Douala</span>
                </div>
                <!-- <div class="eval">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 608.11 592.06">
                    <defs><style>.cls-3{stroke-miterlimit:10;}</style></defs><g id="Calque_2" data-name="Calque 2"><g id="Calque_1-2" data-name="Calque 1"><path class="cls-3" d="M397.11,190.34l143.7,21.2a32,32,0,0,1,17.8,54.4l-104.2,102.2L479,514.74a32,32,0,0,1-46.6,33.6L304,479.84l-128.3,68.5a32.22,32.22,0,0,1-33.8-2.3,31.84,31.84,0,0,1-12.8-31.3l24.6-146.6L49.49,265.94a32.15,32.15,0,0,1-7.89-32.8,31.81,31.81,0,0,1,25.73-21.6l143.58-21.2L275.31,58a32,32,0,0,1,57.5,0Z"/></g></g>
                  </svg>
                  <span>4.5</span>
                </div> -->
              </a>
              <a href="location.php" class="price"><?php echo $aPartirDe[$lang]; ?>  1.000.000XAF</a>
            </div>
          </div>
          <div class="content">
            <div class="box1">
              <div class="img">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 592 517.85">
                <defs><style>.cls-3{stroke-miterlimit:10;}</style></defs><g id="Calque_2" data-name="Calque 2"><g id="Calque_1-2" data-name="Calque 1"><path class="cls-3" d="M40,188.75V183A142.93,142.93,0,0,1,284,81.87l12,12,11.1-12C340.6,49.22,387,34.36,432.6,42A142.91,142.91,0,0,1,552,183v5.8a149.6,149.6,0,0,1-47.6,109.5L323.7,467a40.65,40.65,0,0,1-55.4,0L87.59,298.25A149.74,149.74,0,0,1,40,188.75Z"/></g></g>
                </svg>
                <img src="img/v3.jpg" alt="">
              </div>
              <div class="box-profil">
                <a href="location.php" class="profil">
                    <div class="img"><img src="img/Malik.ico" alt=""></div>
                  <div class="name">Duval Tetsol</div>
                </a>
                <div class="certificat">
                  
                </div>
              </div>
            </div>
            <div class="box2">
              <a href="location.php" class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima, numquam ! </a>
              <a href="location.php" class="position">
                <div class="poso">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                    <path d="M168.3 499.2C116.1 435 0 279.4 0 192C0 85.96 85.96 0 192 0C298 0 384 85.96 384 192C384 279.4 267 435 215.7 499.2C203.4 514.5 180.6 514.5 168.3 499.2H168.3zM192 256C227.3 256 256 227.3 256 192C256 156.7 227.3 128 192 128C156.7 128 128 156.7 128 192C128 227.3 156.7 256 192 256z"/>
                  </svg>
                  <span>Bonapriso, Douala</span>
                </div>
                <!-- <div class="eval">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 608.11 592.06">
                    <defs><style>.cls-3{stroke-miterlimit:10;}</style></defs><g id="Calque_2" data-name="Calque 2"><g id="Calque_1-2" data-name="Calque 1"><path class="cls-3" d="M397.11,190.34l143.7,21.2a32,32,0,0,1,17.8,54.4l-104.2,102.2L479,514.74a32,32,0,0,1-46.6,33.6L304,479.84l-128.3,68.5a32.22,32.22,0,0,1-33.8-2.3,31.84,31.84,0,0,1-12.8-31.3l24.6-146.6L49.49,265.94a32.15,32.15,0,0,1-7.89-32.8,31.81,31.81,0,0,1,25.73-21.6l143.58-21.2L275.31,58a32,32,0,0,1,57.5,0Z"/></g></g>
                  </svg>
                  <span>4.5</span>
                </div> -->
              </a>
              <a href="location.php" class="price"><?php echo $aPartirDe[$lang]; ?> 1.000.000XAF</a>
            </div>
          </div>

          
          <div class="content">
            <div class="box1">
              <div class="img">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 592 517.85">
                <defs><style>.cls-3{stroke-miterlimit:10;}</style></defs><g id="Calque_2" data-name="Calque 2"><g id="Calque_1-2" data-name="Calque 1"><path class="cls-3" d="M40,188.75V183A142.93,142.93,0,0,1,284,81.87l12,12,11.1-12C340.6,49.22,387,34.36,432.6,42A142.91,142.91,0,0,1,552,183v5.8a149.6,149.6,0,0,1-47.6,109.5L323.7,467a40.65,40.65,0,0,1-55.4,0L87.59,298.25A149.74,149.74,0,0,1,40,188.75Z"/></g></g>
                </svg>
                <img src="img/l3.jpg" alt="">
              </div>
              <div class="box-profil">
                <a href="location.php" class="profil">
                    <div class="img"><img src="img/tn1.jpg" alt=""></div>
                  <div class="name">Duval Tetsol</div>
                </a>
                <div class="certificat">
                  
                </div>
              </div>
            </div>
            <div class="box2">
              <a href="location.php" class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima, numquam ! </a>
              <a href="location.php" class="position">
                <div class="poso">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                    <path d="M168.3 499.2C116.1 435 0 279.4 0 192C0 85.96 85.96 0 192 0C298 0 384 85.96 384 192C384 279.4 267 435 215.7 499.2C203.4 514.5 180.6 514.5 168.3 499.2H168.3zM192 256C227.3 256 256 227.3 256 192C256 156.7 227.3 128 192 128C156.7 128 128 156.7 128 192C128 227.3 156.7 256 192 256z"/>
                  </svg>
                  <span>Bonapriso, Douala</span>
                </div>
                <!-- <div class="eval">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 608.11 592.06">
                    <defs><style>.cls-3{stroke-miterlimit:10;}</style></defs><g id="Calque_2" data-name="Calque 2"><g id="Calque_1-2" data-name="Calque 1"><path class="cls-3" d="M397.11,190.34l143.7,21.2a32,32,0,0,1,17.8,54.4l-104.2,102.2L479,514.74a32,32,0,0,1-46.6,33.6L304,479.84l-128.3,68.5a32.22,32.22,0,0,1-33.8-2.3,31.84,31.84,0,0,1-12.8-31.3l24.6-146.6L49.49,265.94a32.15,32.15,0,0,1-7.89-32.8,31.81,31.81,0,0,1,25.73-21.6l143.58-21.2L275.31,58a32,32,0,0,1,57.5,0Z"/></g></g>
                  </svg>
                  <span>4.5</span>
                </div> -->
              </a>
              <a href="location.php" class="price"><?php echo $aPartirDe[$lang]; ?>  1.000.000XAF</a>
            </div>
          </div>

          
          <div class="content">
            <div class="box1">
              <div class="img">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 592 517.85">
                <defs><style>.cls-3{stroke-miterlimit:10;}</style></defs><g id="Calque_2" data-name="Calque 2"><g id="Calque_1-2" data-name="Calque 1"><path class="cls-3" d="M40,188.75V183A142.93,142.93,0,0,1,284,81.87l12,12,11.1-12C340.6,49.22,387,34.36,432.6,42A142.91,142.91,0,0,1,552,183v5.8a149.6,149.6,0,0,1-47.6,109.5L323.7,467a40.65,40.65,0,0,1-55.4,0L87.59,298.25A149.74,149.74,0,0,1,40,188.75Z"/></g></g>
                </svg>
                <img src="img/v4.jpg" alt="">
              </div>
              <div class="box-profil">
                <a href="location.php" class="profil">
                  <div class="img"><img src="img/v2.jpg" alt=""></div>
                  <div class="name">Duval Tetsol</div>
                </a>
                <div class="certificat">
                  
                </div>
              </div>
            </div>
            <div class="box2">
              <a href="location.php" class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima, numquam ! </a>
              <a href="location.php" class="position">
                <div class="poso">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                    <path d="M168.3 499.2C116.1 435 0 279.4 0 192C0 85.96 85.96 0 192 0C298 0 384 85.96 384 192C384 279.4 267 435 215.7 499.2C203.4 514.5 180.6 514.5 168.3 499.2H168.3zM192 256C227.3 256 256 227.3 256 192C256 156.7 227.3 128 192 128C156.7 128 128 156.7 128 192C128 227.3 156.7 256 192 256z"/>
                  </svg>
                  <span>Bonapriso, Douala</span>
                </div>
                <!-- <div class="eval">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 608.11 592.06">
                    <defs><style>.cls-3{stroke-miterlimit:10;}</style></defs><g id="Calque_2" data-name="Calque 2"><g id="Calque_1-2" data-name="Calque 1"><path class="cls-3" d="M397.11,190.34l143.7,21.2a32,32,0,0,1,17.8,54.4l-104.2,102.2L479,514.74a32,32,0,0,1-46.6,33.6L304,479.84l-128.3,68.5a32.22,32.22,0,0,1-33.8-2.3,31.84,31.84,0,0,1-12.8-31.3l24.6-146.6L49.49,265.94a32.15,32.15,0,0,1-7.89-32.8,31.81,31.81,0,0,1,25.73-21.6l143.58-21.2L275.31,58a32,32,0,0,1,57.5,0Z"/></g></g>
                  </svg>
                  <span>4.5</span>
                </div> -->
              </a>
              <a href="location.php" class="price"><?php echo $aPartirDe[$lang]; ?>  1.000.000XAF</a>
            </div>
          </div>
    

          <div class="content">
            <div class="box1">
              <div class="img">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 592 517.85">
                <defs><style>.cls-3{stroke-miterlimit:10;}</style></defs><g id="Calque_2" data-name="Calque 2"><g id="Calque_1-2" data-name="Calque 1"><path class="cls-3" d="M40,188.75V183A142.93,142.93,0,0,1,284,81.87l12,12,11.1-12C340.6,49.22,387,34.36,432.6,42A142.91,142.91,0,0,1,552,183v5.8a149.6,149.6,0,0,1-47.6,109.5L323.7,467a40.65,40.65,0,0,1-55.4,0L87.59,298.25A149.74,149.74,0,0,1,40,188.75Z"/></g></g>
                </svg>
                <img src="img/e2.jpg" alt="">
              </div>
              <div class="box-profil">
                <a href="location.php" class="profil">
                  <div class="img"><img src="img/sf1.jpg" alt=""></div>
                  <div class="name">Duval Tetsol</div>
                </a>
                <div class="certificat">
                  
                </div>
              </div>
            </div>
            <div class="box2">
              <a href="location.php" class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima, numquam ! </a>
              <a href="location.php" class="position">
                <div class="poso">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                    <path d="M168.3 499.2C116.1 435 0 279.4 0 192C0 85.96 85.96 0 192 0C298 0 384 85.96 384 192C384 279.4 267 435 215.7 499.2C203.4 514.5 180.6 514.5 168.3 499.2H168.3zM192 256C227.3 256 256 227.3 256 192C256 156.7 227.3 128 192 128C156.7 128 128 156.7 128 192C128 227.3 156.7 256 192 256z"/>
                  </svg>
                  <span>Bonapriso, Douala</span>
                </div>
                <!-- <div class="eval">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 608.11 592.06">
                    <defs><style>.cls-3{stroke-miterlimit:10;}</style></defs><g id="Calque_2" data-name="Calque 2"><g id="Calque_1-2" data-name="Calque 1"><path class="cls-3" d="M397.11,190.34l143.7,21.2a32,32,0,0,1,17.8,54.4l-104.2,102.2L479,514.74a32,32,0,0,1-46.6,33.6L304,479.84l-128.3,68.5a32.22,32.22,0,0,1-33.8-2.3,31.84,31.84,0,0,1-12.8-31.3l24.6-146.6L49.49,265.94a32.15,32.15,0,0,1-7.89-32.8,31.81,31.81,0,0,1,25.73-21.6l143.58-21.2L275.31,58a32,32,0,0,1,57.5,0Z"/></g></g>
                  </svg>
                  <span>4.5</span>
                </div> -->
              </a>
              <a href="location.php" class="price"><?php echo $aPartirDe[$lang]; ?>  1.000.000XAF</a>
            </div>
          </div>

          
          <div class="content">
            <div class="box1">
              <div class="img">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 592 517.85">
                <defs><style>.cls-3{stroke-miterlimit:10;}</style></defs><g id="Calque_2" data-name="Calque 2"><g id="Calque_1-2" data-name="Calque 1"><path class="cls-3" d="M40,188.75V183A142.93,142.93,0,0,1,284,81.87l12,12,11.1-12C340.6,49.22,387,34.36,432.6,42A142.91,142.91,0,0,1,552,183v5.8a149.6,149.6,0,0,1-47.6,109.5L323.7,467a40.65,40.65,0,0,1-55.4,0L87.59,298.25A149.74,149.74,0,0,1,40,188.75Z"/></g></g>
                </svg>
                <img src="img/l2.jpg" alt="">
              </div>
              <div class="box-profil">
                <a href="location.php" class="profil">
                  <div class="img"><img src="img/Malik.ico" alt=""></div>
                  <div class="name">Duval Tetsol</div>
                </a>
                <div class="certificat">
                  
                </div>
              </div>
            </div>
            <div class="box2">
              <a href="location.php" class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima, numquam ! </a>
              <a href="location.php" class="position">
                <div class="poso">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                    <path d="M168.3 499.2C116.1 435 0 279.4 0 192C0 85.96 85.96 0 192 0C298 0 384 85.96 384 192C384 279.4 267 435 215.7 499.2C203.4 514.5 180.6 514.5 168.3 499.2H168.3zM192 256C227.3 256 256 227.3 256 192C256 156.7 227.3 128 192 128C156.7 128 128 156.7 128 192C128 227.3 156.7 256 192 256z"/>
                  </svg>
                  <span>Bonapriso, Douala</span>
                </div>
                <!-- <div class="eval">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 608.11 592.06">
                    <defs><style>.cls-3{stroke-miterlimit:10;}</style></defs><g id="Calque_2" data-name="Calque 2"><g id="Calque_1-2" data-name="Calque 1"><path class="cls-3" d="M397.11,190.34l143.7,21.2a32,32,0,0,1,17.8,54.4l-104.2,102.2L479,514.74a32,32,0,0,1-46.6,33.6L304,479.84l-128.3,68.5a32.22,32.22,0,0,1-33.8-2.3,31.84,31.84,0,0,1-12.8-31.3l24.6-146.6L49.49,265.94a32.15,32.15,0,0,1-7.89-32.8,31.81,31.81,0,0,1,25.73-21.6l143.58-21.2L275.31,58a32,32,0,0,1,57.5,0Z"/></g></g>
                  </svg>
                  <span>4.5</span>
                </div> -->
              </a>
              <a href="location.php" class="price"><?php echo $aPartirDe[$lang]; ?>  1.000.000XAF</a>
            </div>
          </div>

          
          <div class="content">
            <div class="box1">
              <div class="img">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 592 517.85">
                <defs><style>.cls-3{stroke-miterlimit:10;}</style></defs><g id="Calque_2" data-name="Calque 2"><g id="Calque_1-2" data-name="Calque 1"><path class="cls-3" d="M40,188.75V183A142.93,142.93,0,0,1,284,81.87l12,12,11.1-12C340.6,49.22,387,34.36,432.6,42A142.91,142.91,0,0,1,552,183v5.8a149.6,149.6,0,0,1-47.6,109.5L323.7,467a40.65,40.65,0,0,1-55.4,0L87.59,298.25A149.74,149.74,0,0,1,40,188.75Z"/></g></g>
                </svg>
                <img src="img/sf1.jpg" alt="">
              </div>
              <div class="box-profil">
                <a href="location.php" class="profil">
                    <div class="img"><img src="img/bt1.jpg" alt=""></div>
                  <div class="name">Duval Tetsol</div>
                </a>
                <div class="certificat">
                  
                </div>
              </div>
            </div>
            <div class="box2">
              <a href="location.php" class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima, numquam ! </a>
              <a href="location.php" class="position">
                <div class="poso">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                    <path d="M168.3 499.2C116.1 435 0 279.4 0 192C0 85.96 85.96 0 192 0C298 0 384 85.96 384 192C384 279.4 267 435 215.7 499.2C203.4 514.5 180.6 514.5 168.3 499.2H168.3zM192 256C227.3 256 256 227.3 256 192C256 156.7 227.3 128 192 128C156.7 128 128 156.7 128 192C128 227.3 156.7 256 192 256z"/>
                  </svg>
                  <span>Bonapriso, Douala</span>
                </div>
                <!-- <div class="eval">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 608.11 592.06">
                    <defs><style>.cls-3{stroke-miterlimit:10;}</style></defs><g id="Calque_2" data-name="Calque 2"><g id="Calque_1-2" data-name="Calque 1"><path class="cls-3" d="M397.11,190.34l143.7,21.2a32,32,0,0,1,17.8,54.4l-104.2,102.2L479,514.74a32,32,0,0,1-46.6,33.6L304,479.84l-128.3,68.5a32.22,32.22,0,0,1-33.8-2.3,31.84,31.84,0,0,1-12.8-31.3l24.6-146.6L49.49,265.94a32.15,32.15,0,0,1-7.89-32.8,31.81,31.81,0,0,1,25.73-21.6l143.58-21.2L275.31,58a32,32,0,0,1,57.5,0Z"/></g></g>
                  </svg>
                  <span>4.5</span>
                </div> -->
              </a>
              <a href="location.php" class="price"><?php echo $aPartirDe[$lang]; ?>  1.000.000XAF</a>
            </div>
          </div>
        </div>
        <div class="nextpage">
          <a href="#"><<</a>
          <a href="#" class="eneable">1</a>
          <a href="#">2</a>
          <a href="#">3</a>
          <a href="#">4</a>
          <a href="#">5</a>
          <a href="#">>></a>
        </div>
      </section>
    </div>


    <?php include("php/footer.php"); ?>
    
    <script src="js/search.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>