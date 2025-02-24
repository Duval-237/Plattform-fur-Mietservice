<!-- <?# password_hash("duval", PASSWORD_BCRYPT, ["cost"=> 14]) ?>  -->

<?php include('lang.php'); ?>
<?php include('config.php'); ?>
<!-- <div id="_zone_search">
</div> -->
    <?php if(!isset($_SESSION['pseudo'])) { ?>
        
      <div id="_ZONE_CONNECTION" class=''>
        <div class="content">
          <div class="box1">
            <!-- <span>Hello, friend!</span> -->
            <img src="img/2149764144.jpg">
          </div>

          <div class="logo">
            <svg id="Calque_1" data-name="Calque 1"  viewBox="0 0 956.29 168.26"><defs><style>.cls-8{fill:#007fff;}</style></defs><polygon points="208.34 0 208.34 168.26 166.51 168.26 166.51 69.78 111.84 142.77 56.89 69.78 56.89 168.26 15.11 168.26 15.11 42.07 0 0 56.89 0 56.89 0.24 111.84 72.99 166.51 0.24 166.51 0 208.34 0"/><polygon points="384.24 168.26 337.46 168.26 300.12 93.77 262.49 168.26 215.75 168.26 276.61 47.02 276.65 46.91 273.39 40.52 271.97 37.71 253.1 0 299.88 0 300.12 0.24 323.39 47.02 384.24 168.26"/><polygon points="392.65 168.26 392.65 42.07 377.54 0 434.47 0 434.47 126.43 505.24 126.43 518.6 168.26 392.65 168.26"/><path d="M848.08,665.87V834.12H806.27V707.93H806l-14.84-42.06Z" transform="translate(-271.86 -665.87)"/><path d="M928.74,792.3h109.11v41.83H922a52.49,52.49,0,0,1-52.45-52.45V718.56A52.54,52.54,0,0,1,922,665.87h100.7l15.11,42.07H932.39c-8.8,0-16.77,5.95-16.77,5.95a16.13,16.13,0,0,0-4.2,11.1v50A17.19,17.19,0,0,0,928.74,792.3Z" transform="translate(-271.86 -665.87)"/><path class="cls-8" d="M1122.69,707.94h105.45L1213,665.87h-100.7A52.5,52.5,0,0,0,1061,707.94Z" transform="translate(-271.86 -665.87)"/><path class="cls-8" d="M1119,792.3H1061a52.51,52.51,0,0,0,51.37,41.83h115.8V792.3H1119Z" transform="translate(-271.86 -665.87)"/></svg>
          </div>
      
          <div class="box2 inscrire">
            <div class="close_connect">
              <i></i><span>Fermer</span>
            </div>
            <h2><?php echo $creerNouveauCompte[$lang]; ?></h2>
            <h3><?php echo $vousAvezCompte[$lang]; ?> <a href="#" id="connecter"><?php echo $seConnecter[$lang]; ?></a></h3>
            <a href="https://accounts.google.com/o/oauth2/v2/auth?scope=email&access_type=online&response_type=code&redirect_uri=<?=urlencode('http://localhost/malicc/search.php')?>&client_id=<?= GOOGLE_ID ?>">
              <img src="img/Google__G.png" alt="Google">
              <span><?php echo $continuerGoogle[$lang]; ?></span>
            </a>
            <a href="#" id="emailInscription">
              <svg  viewBox="0 0 512 512"><rect x="48" y="96" width="416" height="320" rx="40" ry="40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M112 160l144 112 144-112"/></svg>
              <span><?php echo $continuerEmail[$lang]; ?></span>
            </a>
            <div class="condition">
              En vous inscrivant. vous acceptez les <a href="#">Conditions generales</a> d'utilisation de Malicc et de recevoir occasionnellement des e-mails de notre part. veuillez lire notre <a href="#">Politique de confidentialite</a> pour savoir comment nous utilisons vos donnees personnelles.
            </div>
          </div>

          <div class="box2 connecte">
            <div class="close_connect">
              <i></i><span>Fermer</span>
            </div>
            <h2>Connectez-vous a votre compte</h2>
            <h3>Vous n'avez pas de compte ? <a href="#" id="inscrire"><?php echo $sIncrire[$lang]; ?></a></h3>
            <a href="#">
              <img src="img/Google__G.png" alt="Google">
              <span><?php echo $continuerGoogle[$lang]; ?></span>
            </a>
            <a href="#" id="emailConnection">
              <svg  viewBox="0 0 512 512"><rect x="48" y="96" width="416" height="320" rx="40" ry="40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M112 160l144 112 144-112"/></svg>
              <span><?php echo $continuerEmail[$lang]; ?></span>
            </a>
            <div class="condition">
              En vous connectant. vous acceptez les <a href="#">Conditions generales</a> d'utilisation de Malicc et de recevoir occasionnellement des e-mails de notre part. veuillez lire notre <a href="#">Politique de confidentialite</a> pour savoir comment nous utilisons vos donnees personnelles.
            </div>
          </div>

          <div class="box3 inscrire">
            <div class="retour_inscrire">
              <svg  viewBox="0 0 448 512"><path d="M447.1 256C447.1 273.7 433.7 288 416 288H109.3l105.4 105.4c12.5 12.5 12.5 32.75 0 45.25C208.4 444.9 200.2 448 192 448s-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25l160-160c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L109.3 224H416C433.7 224 447.1 238.3 447.1 256z"/></svg>
              <span>Retour</span>
            </div>
            <div class="close_connect">
              <i></i><span>Fermer</span>
            </div>
            <h2>Continuer avec votre e-mail</h2>
            <form action="php/inscription.php" method="post">
              <div class="inputbox">
                <label for="email">E-mail</label>
                <input type="email" id="0" class="email_input" name="email" placeholder="exemple@email.com" required>
              </div>
              <div class="inputbox">
                <label for="password">Mot de passe</label>
                <div class="password">
                  <input type="password" id="0" class="password_input" name="password" required>
                  <svg  viewBox="0 0 640 512" class="no_see_password" id="0"><path d="M150.7 92.77C195 58.27 251.8 32 320 32C400.8 32 465.5 68.84 512.6 112.6C559.4 156 590.7 207.1 605.5 243.7C608.8 251.6 608.8 260.4 605.5 268.3C592.1 300.6 565.2 346.1 525.6 386.7L630.8 469.1C641.2 477.3 643.1 492.4 634.9 502.8C626.7 513.2 611.6 515.1 601.2 506.9L9.196 42.89C-1.236 34.71-3.065 19.63 5.112 9.196C13.29-1.236 28.37-3.065 38.81 5.112L150.7 92.77zM189.8 123.5L235.8 159.5C258.3 139.9 287.8 128 320 128C390.7 128 448 185.3 448 256C448 277.2 442.9 297.1 433.8 314.7L487.6 356.9C521.1 322.8 545.9 283.1 558.6 256C544.1 225.1 518.4 183.5 479.9 147.7C438.8 109.6 385.2 79.1 320 79.1C269.5 79.1 225.1 97.73 189.8 123.5L189.8 123.5zM394.9 284.2C398.2 275.4 400 265.9 400 255.1C400 211.8 364.2 175.1 320 175.1C319.3 175.1 318.7 176 317.1 176C319.3 181.1 320 186.5 320 191.1C320 202.2 317.6 211.8 313.4 220.3L394.9 284.2zM404.3 414.5L446.2 447.5C409.9 467.1 367.8 480 320 480C239.2 480 174.5 443.2 127.4 399.4C80.62 355.1 49.34 304 34.46 268.3C31.18 260.4 31.18 251.6 34.46 243.7C44 220.8 60.29 191.2 83.09 161.5L120.8 191.2C102.1 214.5 89.76 237.6 81.45 255.1C95.02 286 121.6 328.5 160.1 364.3C201.2 402.4 254.8 432 320 432C350.7 432 378.8 425.4 404.3 414.5H404.3zM192 255.1C192 253.1 192.1 250.3 192.3 247.5L248.4 291.7C258.9 312.8 278.5 328.6 302 333.1L358.2 378.2C346.1 381.1 333.3 384 319.1 384C249.3 384 191.1 326.7 191.1 255.1H192z"/></svg>
                  <svg  viewBox="0 0 576 512" class="see_password" id="0"><path d="M160 256C160 185.3 217.3 128 288 128C358.7 128 416 185.3 416 256C416 326.7 358.7 384 288 384C217.3 384 160 326.7 160 256zM288 336C332.2 336 368 300.2 368 256C368 211.8 332.2 176 288 176C287.3 176 286.7 176 285.1 176C287.3 181.1 288 186.5 288 192C288 227.3 259.3 256 224 256C218.5 256 213.1 255.3 208 253.1C208 254.7 208 255.3 208 255.1C208 300.2 243.8 336 288 336L288 336zM95.42 112.6C142.5 68.84 207.2 32 288 32C368.8 32 433.5 68.84 480.6 112.6C527.4 156 558.7 207.1 573.5 243.7C576.8 251.6 576.8 260.4 573.5 268.3C558.7 304 527.4 355.1 480.6 399.4C433.5 443.2 368.8 480 288 480C207.2 480 142.5 443.2 95.42 399.4C48.62 355.1 17.34 304 2.461 268.3C-.8205 260.4-.8205 251.6 2.461 243.7C17.34 207.1 48.62 156 95.42 112.6V112.6zM288 80C222.8 80 169.2 109.6 128.1 147.7C89.6 183.5 63.02 225.1 49.44 256C63.02 286 89.6 328.5 128.1 364.3C169.2 402.4 222.8 432 288 432C353.2 432 406.8 402.4 447.9 364.3C486.4 328.5 512.1 286 526.6 256C512.1 225.1 486.4 183.5 447.9 147.7C406.8 109.6 353.2 80 288 80V80z"/></svg>
                </div>
                <div class="error">Nom d'utilisateur ou mot de passe incorrect, veuillez reessayer</div>
              </div>
              <div class="condition">
              En vous inscrivant. vous acceptez les <a href="#">Conditions generales</a> d'utilisation de Malicc et de recevoir occasionnellement des e-mails de notre part. veuillez lire notre <a href="#">Politique de confidentialite</a> pour savoir comment nous utilisons vos donnees personnelles.
              </div>
              <input type="submit" value="Continuer" id="0" class="continuer">
            </form>
            <div class="condition">
              En vous inscrivant. vous acceptez les <a href="#">Conditions generales</a> d'utilisation de Malicc et de recevoir occasionnellement des e-mails de notre part. veuillez lire notre <a href="#">Politique de confidentialite</a> pour savoir comment nous utilisons vos donnees personnelles.
            </div>
          </div>

          <div class="box3 connecte">
            <div class="retour_connecte">
              <svg  viewBox="0 0 448 512"><path d="M447.1 256C447.1 273.7 433.7 288 416 288H109.3l105.4 105.4c12.5 12.5 12.5 32.75 0 45.25C208.4 444.9 200.2 448 192 448s-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25l160-160c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L109.3 224H416C433.7 224 447.1 238.3 447.1 256z"/></svg>
              <span>Retour</span>
            </div>
            <div class="close_connect">
              <i></i><span>Fermer</span>
            </div>
            <h2>Continuer avec votre adresse e-mail ou votre nom d'utilisateur</h2>
            <form action="php/connexion.php" method="post">
              <div class="inputbox">
                <label for="email">E-mail ou nom d'utilisateur</label>
                <input type="text" id="1" class="email_input" name="email" required>
              </div>
              <div class="inputbox">
                <label for="password">Mot de passe</label>
                <div class="password">
                  <input type="password" id="1" class="password_input" name="password" required>
                  <svg  viewBox="0 0 640 512" class="no_see_password" id="1"><path d="M150.7 92.77C195 58.27 251.8 32 320 32C400.8 32 465.5 68.84 512.6 112.6C559.4 156 590.7 207.1 605.5 243.7C608.8 251.6 608.8 260.4 605.5 268.3C592.1 300.6 565.2 346.1 525.6 386.7L630.8 469.1C641.2 477.3 643.1 492.4 634.9 502.8C626.7 513.2 611.6 515.1 601.2 506.9L9.196 42.89C-1.236 34.71-3.065 19.63 5.112 9.196C13.29-1.236 28.37-3.065 38.81 5.112L150.7 92.77zM189.8 123.5L235.8 159.5C258.3 139.9 287.8 128 320 128C390.7 128 448 185.3 448 256C448 277.2 442.9 297.1 433.8 314.7L487.6 356.9C521.1 322.8 545.9 283.1 558.6 256C544.1 225.1 518.4 183.5 479.9 147.7C438.8 109.6 385.2 79.1 320 79.1C269.5 79.1 225.1 97.73 189.8 123.5L189.8 123.5zM394.9 284.2C398.2 275.4 400 265.9 400 255.1C400 211.8 364.2 175.1 320 175.1C319.3 175.1 318.7 176 317.1 176C319.3 181.1 320 186.5 320 191.1C320 202.2 317.6 211.8 313.4 220.3L394.9 284.2zM404.3 414.5L446.2 447.5C409.9 467.1 367.8 480 320 480C239.2 480 174.5 443.2 127.4 399.4C80.62 355.1 49.34 304 34.46 268.3C31.18 260.4 31.18 251.6 34.46 243.7C44 220.8 60.29 191.2 83.09 161.5L120.8 191.2C102.1 214.5 89.76 237.6 81.45 255.1C95.02 286 121.6 328.5 160.1 364.3C201.2 402.4 254.8 432 320 432C350.7 432 378.8 425.4 404.3 414.5H404.3zM192 255.1C192 253.1 192.1 250.3 192.3 247.5L248.4 291.7C258.9 312.8 278.5 328.6 302 333.1L358.2 378.2C346.1 381.1 333.3 384 319.1 384C249.3 384 191.1 326.7 191.1 255.1H192z"/></svg>
                  <svg  viewBox="0 0 576 512" class="see_password" id="1"><path d="M160 256C160 185.3 217.3 128 288 128C358.7 128 416 185.3 416 256C416 326.7 358.7 384 288 384C217.3 384 160 326.7 160 256zM288 336C332.2 336 368 300.2 368 256C368 211.8 332.2 176 288 176C287.3 176 286.7 176 285.1 176C287.3 181.1 288 186.5 288 192C288 227.3 259.3 256 224 256C218.5 256 213.1 255.3 208 253.1C208 254.7 208 255.3 208 255.1C208 300.2 243.8 336 288 336L288 336zM95.42 112.6C142.5 68.84 207.2 32 288 32C368.8 32 433.5 68.84 480.6 112.6C527.4 156 558.7 207.1 573.5 243.7C576.8 251.6 576.8 260.4 573.5 268.3C558.7 304 527.4 355.1 480.6 399.4C433.5 443.2 368.8 480 288 480C207.2 480 142.5 443.2 95.42 399.4C48.62 355.1 17.34 304 2.461 268.3C-.8205 260.4-.8205 251.6 2.461 243.7C17.34 207.1 48.62 156 95.42 112.6V112.6zM288 80C222.8 80 169.2 109.6 128.1 147.7C89.6 183.5 63.02 225.1 49.44 256C63.02 286 89.6 328.5 128.1 364.3C169.2 402.4 222.8 432 288 432C353.2 432 406.8 402.4 447.9 364.3C486.4 328.5 512.1 286 526.6 256C512.1 225.1 486.4 183.5 447.9 147.7C406.8 109.6 353.2 80 288 80V80z"/></svg>
                </div>
                <div class="error">Nom d'utilisateur ou mot de passe incorrect, veuillez reessayer</div>
                <a href="#" class="forget">Mot de passe oublie ?</a>
              </div>
              <div class="condition">
              En vous inscrivant. vous acceptez les <a href="#">Conditions generales</a> d'utilisation de Malicc et de recevoir occasionnellement des e-mails de notre part. veuillez lire notre <a href="#">Politique de confidentialite</a> pour savoir comment nous utilisons vos donnees personnelles.
            </div>
              <input type="submit" value="Continuer" id="1" class="continuer">
            </form>
            <div class="condition">
              En vous connectant. vous acceptez les <a href="#">Conditions generales</a> d'utilisation de Malicc et de recevoir occasionnellement des e-mails de notre part. veuillez lire notre <a href="#">Politique de confidentialite</a> pour savoir comment nous utilisons vos donnees personnelles.
            </div>
          </div>
          
          <div class="box3 send">
            <div class="retour_send">
              <svg  viewBox="0 0 448 512"><path d="M447.1 256C447.1 273.7 433.7 288 416 288H109.3l105.4 105.4c12.5 12.5 12.5 32.75 0 45.25C208.4 444.9 200.2 448 192 448s-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25l160-160c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L109.3 224H416C433.7 224 447.1 238.3 447.1 256z"/></svg>
              <span>Retour</span>
            </div>
            <div class="close_connect">
              <i></i><span>Fermer</span>
            </div>
            <h2>Réinitialisez le mot de passe</h2>
            <div class="descrip">Veuillez saisir votre adresse e-mail afin de recevoir un lien pour renitialiser votre mot de passe</div>
            <form action="#" method="post">
              <div class="inputbox">
                <label for="email">E-mail</label>
                <input type="email" id="1" class="email_input" placeholder="exemple@email.com" required>
              </div>
              <input type="submit" value="Réinitialisez le mot de passe" id="1" class="continuer">
            </form>
          </div>

        </div>
      </div>
    <?php } ?>
    <div id="_ZONE_LANGUAGE">
      <div class="box">
        <div class="title">
          <span><?php echo $choixLangue[$lang]; ?></span>
          <div class="close"></div>
        </div>
        <ul class="lang">
          <li><?php if($lang == 1) echo '<span></span>';?><a href=".?lang=1">Englisch</a></li>
          <li><?php if($lang == 0) echo '<span></span>';?><a href=".">Francais</a></li>
          <!-- <li><?php if($lang == 2) echo '<span></span>';?><a href="">Deutsch</a></li>
          <li><?php if($lang == 3) echo '<span></span>';?><a href="">Espagniol</a></li> -->
        </ul>
      </div>
    </div>

    <div id="mobile-menu" class=''>
      <div class="menu">
        <div class="menu-bloc">
            <?php if(isset($_SESSION['pseudo'])) { ?>
            <div class="profil">
              <a href="profile.php">
                <div class="bximg" style="background: <?php echo $_SESSION['color']; ?>;"><?php echo strtoupper(substr($_SESSION['pseudo'], 0, 2)) ; ?></div>
              </a>
              <div class="name-profil">
                <a href="profile.php" class="name-user"><?php echo $_SESSION['pseudo']; ?></a>
                <a href="profile.php" class="email"><?php echo $_SESSION['email']; ?></a>
              </div>
            </div>
            <ul class="menu-profil">
              <li>
                <a href="chat.php">Boite de reception</a>
              </li>
              <li>
                <a href="#">Mes Favories</a>
              </li>
            </ul>
            <?php } ?>
          </div>
        <div class="menu-bloc">
          <?php if(!isset($_SESSION['pseudo'])) { ?>
            <a href="#" class="btnInscrire"><?php echo $rejoindreMalik[$lang]; ?></a>
          <?php } ?>
          <ul>
            <?php if(!isset($_SESSION['pseudo'])) { ?>
              <li><a href="#" class="btnConnecter"><?php echo $seConnecter[$lang]; ?></a></li>
            <?php } ?>
            <li><a href="#"><?php echo $devenirPrestataire[$lang]; ?></a></li>
            <li class="">
              <div class="dev">
                <span><?php echo $parcourirCategories[$lang]; ?></span><span class="ufl"></span>
              </div>
              <ul class="categories">
                <li>
                  <div class="dev">
                    <span><?php echo $logements[$lang]; ?></span><span class="ufl"></span>
                  </div>
                  <ul>
                    <li><a href="#"><?php echo $appartements[$lang]; ?></a></li>
                    <li><a href="#"><?php echo $immeubles[$lang]; ?></a></li>
                    <li><a href="#"><?php echo $maisons[$lang]; ?></a></li>
                    <li><a href="#"><?php echo $villa[$lang]; ?></a></li>
                    <li><a href="#"><?php echo $studios[$lang]; ?></a></li>
                  </ul>
                </li>  
                <li>
                  <div class="dev">
                    <span><?php echo $vehicules[$lang]; ?></span><span class="ufl"></span>
                  </div>
                  <ul>
                    <li><a href="#"><?php echo $voitures[$lang]; ?></a></li>
                    <li><a href="#"><?php echo $camion[$lang]; ?></a></li>
                    <li><a href="#">Moto</a></li>
                    <li><a href="#"><?php echo $bateaux[$lang]; ?></a></li>
                  </ul>
                </li>  
                <!-- <li>
                  <div class="dev">
                    <span>Herbergements</span><span class="ufl"></span>
                  </div>
                  <ul>
                    <li><a href="#">Hotel</a></li>
                    <li><a href="#">Motel</a></li>
                  </ul>
                </li>   -->
                <li>
                  <div class="dev">
                    <span><?php echo $boites[$lang]; ?></span><span class="ufl"></span>
                  </div>
                  <ul>
                    <li><a href="#"><?php echo $boutiques[$lang]; ?></a></li>
                    <li><a href="#"><?php echo $bureaux[$lang]; ?></a></li>
                    <li><a href="#"><?php echo $magasin[$lang]; ?></a></li>
                  </ul>
                </li>  
                <li>
                  <div class="dev">
                    <span><?php echo $machines[$lang]; ?></span><span class="ufl"></span>
                  </div>
                  <ul>
                    <li><a href="#">Bulldozer</a></li>
                    <li><a href="#"><?php echo $chargeuse[$lang]; ?></a></li>
                    <li><a href="#"><?php echo $miniChargeuse[$lang]; ?></a></li>
                    <li><a href="#"><?php echo $niveleuse[$lang]; ?></a></li>
                    <li><a href="#"><?php echo $nacelle[$lang]; ?></a></li>
                    <li><a href="#"><?php echo $pelleteuse[$lang]; ?></a></li>
                    <li><a href="#"><?php echo $rouleauCompresseur[$lang]; ?></a></li>
                    <li><a href="#"><?php echo $tractopelle[$lang]; ?></a></li>
                  </ul>
                </li>  
                <li>
                  <div class="dev">
                    <span>Terrain</span><span class="ufl"></span>
                  </div>
                  <ul>
                    <li><a href="#"><?php echo $stade[$lang]; ?></a></li>
                    <li><a href="#"><?php echo $terrainNues[$lang]; ?></a></li>
                  </ul>
                </li>  
                <li>
                  <div class="dev">
                    <span><?php echo $autres[$lang]; ?></span><span class="ufl"></span>
                  </div>
                  <ul class="_Menu5Jy5w1PY">
                    <li class="_lists7KLc94r"><a href="#"><?php echo $salleFete[$lang]; ?></a></li>
                    <li class="_lists7KLc94r"><a href="#">Snack</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="">
              <div class="dev">
                <span><?php echo $solutionsAffaires[$lang]; ?></span><span class="ufl"></span>
              </div>
              <ul>
                <li><a href="#">Malicc Pro</a></li>
                <li><a href="#">Malicc Entreprise</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="menu-bloc">
          <span>General</span>
          <ul>
            <li>
              <a href="index.php<?php if(isset($_GET['lang'])) echo '?lang='.$lang; ?>">
                <?php echo $acceuil[$lang]; ?>
              </a>
            </li>
            <?php if(isset($_SESSION['pseudo'])) { ?>
              <li>
                <a href="#" class="btnInscrire">Parametres</a>
              </li>
            <?php } ?>
            <li class="">
              <div class="dev">
                <span><?php echo $langue[$lang]; ?><svg  viewBox="0 0 512 512">
                  <path d="M352 256C352 278.2 350.8 299.6 348.7 320H163.3C161.2 299.6 159.1 278.2 159.1 256C159.1 233.8 161.2 212.4 163.3 192H348.7C350.8 212.4 352 233.8 352 256zM503.9 192C509.2 212.5 512 233.9 512 256C512 278.1 509.2 299.5 503.9 320H380.8C382.9 299.4 384 277.1 384 256C384 234 382.9 212.6 380.8 192H503.9zM493.4 160H376.7C366.7 96.14 346.9 42.62 321.4 8.442C399.8 29.09 463.4 85.94 493.4 160zM344.3 160H167.7C173.8 123.6 183.2 91.38 194.7 65.35C205.2 41.74 216.9 24.61 228.2 13.81C239.4 3.178 248.7 0 256 0C263.3 0 272.6 3.178 283.8 13.81C295.1 24.61 306.8 41.74 317.3 65.35C328.8 91.38 338.2 123.6 344.3 160H344.3zM18.61 160C48.59 85.94 112.2 29.09 190.6 8.442C165.1 42.62 145.3 96.14 135.3 160H18.61zM131.2 192C129.1 212.6 127.1 234 127.1 256C127.1 277.1 129.1 299.4 131.2 320H8.065C2.8 299.5 0 278.1 0 256C0 233.9 2.8 212.5 8.065 192H131.2zM194.7 446.6C183.2 420.6 173.8 388.4 167.7 352H344.3C338.2 388.4 328.8 420.6 317.3 446.6C306.8 470.3 295.1 487.4 283.8 498.2C272.6 508.8 263.3 512 255.1 512C248.7 512 239.4 508.8 228.2 498.2C216.9 487.4 205.2 470.3 194.7 446.6H194.7zM190.6 503.6C112.2 482.9 48.59 426.1 18.61 352H135.3C145.3 415.9 165.1 469.4 190.6 503.6V503.6zM321.4 503.6C346.9 469.4 366.7 415.9 376.7 352H493.4C463.4 426.1 399.8 482.9 321.4 503.6V503.6z"/>
                </svg></span><span class="ufl"></span>
              </div>
              <ul class="lang">
                <li><?php  if($lang == 1) echo '<span></span>';?><a href=".?lang=1">Englisch</a></li>
                <li><?php if($lang == 0) echo '<span></span>';?><a href=".">Francais</a></li>
                <li><?php if($lang == 2) echo '<span></span>';?><a href="">Deutsch</a></li>
                <li><?php if($lang == 3) echo '<span></span>';?><a href="">Espagniol</a></li>
              </ul>
            </li>
            <?php if(isset($_SESSION['pseudo'])) { ?>
              <li>
                <a href="php/deconnexion.php">Se deconnecter</a>
              </li>
              <?php } ?>
            <li>
              <span><?php echo $aProposMalik[$lang]; ?></span>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="header-wrapper">

      <div id="_ZONE_MESSAGE">
        <span><?php echo $bienvenue[$lang]; ?></span>
        <div class="close_Zone"></div>
      </div>

      <header id="header">
        <div class="left">
          <div class="toggle"><span></span><span></span><span></span></div>
          <a href="index.php" id="" class="header-title">
            <svg id="Calque_1" data-name="Calque 1"  viewBox="0 0 956.29 168.26"><defs><style>.cls-8{fill:#007fff;}</style></defs><polygon points="208.34 0 208.34 168.26 166.51 168.26 166.51 69.78 111.84 142.77 56.89 69.78 56.89 168.26 15.11 168.26 15.11 42.07 0 0 56.89 0 56.89 0.24 111.84 72.99 166.51 0.24 166.51 0 208.34 0"/><polygon points="384.24 168.26 337.46 168.26 300.12 93.77 262.49 168.26 215.75 168.26 276.61 47.02 276.65 46.91 273.39 40.52 271.97 37.71 253.1 0 299.88 0 300.12 0.24 323.39 47.02 384.24 168.26"/><polygon points="392.65 168.26 392.65 42.07 377.54 0 434.47 0 434.47 126.43 505.24 126.43 518.6 168.26 392.65 168.26"/><path d="M848.08,665.87V834.12H806.27V707.93H806l-14.84-42.06Z" transform="translate(-271.86 -665.87)"/><path d="M928.74,792.3h109.11v41.83H922a52.49,52.49,0,0,1-52.45-52.45V718.56A52.54,52.54,0,0,1,922,665.87h100.7l15.11,42.07H932.39c-8.8,0-16.77,5.95-16.77,5.95a16.13,16.13,0,0,0-4.2,11.1v50A17.19,17.19,0,0,0,928.74,792.3Z" transform="translate(-271.86 -665.87)"/><path class="cls-8" d="M1122.69,707.94h105.45L1213,665.87h-100.7A52.5,52.5,0,0,0,1061,707.94Z" transform="translate(-271.86 -665.87)"/><path class="cls-8" d="M1119,792.3H1061a52.51,52.51,0,0,0,51.37,41.83h115.8V792.3H1119Z" transform="translate(-271.86 -665.87)"/></svg>
          </a>
        </div>
        <a href="#" id="" class="header-title title-2">
          <svg id="Calque_1" data-name="Calque 1"  viewBox="0 0 956.29 168.26"><defs><style>.cls-8{fill:#007fff;}</style></defs><polygon points="208.34 0 208.34 168.26 166.51 168.26 166.51 69.78 111.84 142.77 56.89 69.78 56.89 168.26 15.11 168.26 15.11 42.07 0 0 56.89 0 56.89 0.24 111.84 72.99 166.51 0.24 166.51 0 208.34 0"/><polygon points="384.24 168.26 337.46 168.26 300.12 93.77 262.49 168.26 215.75 168.26 276.61 47.02 276.65 46.91 273.39 40.52 271.97 37.71 253.1 0 299.88 0 300.12 0.24 323.39 47.02 384.24 168.26"/><polygon points="392.65 168.26 392.65 42.07 377.54 0 434.47 0 434.47 126.43 505.24 126.43 518.6 168.26 392.65 168.26"/><path d="M848.08,665.87V834.12H806.27V707.93H806l-14.84-42.06Z" transform="translate(-271.86 -665.87)"/><path d="M928.74,792.3h109.11v41.83H922a52.49,52.49,0,0,1-52.45-52.45V718.56A52.54,52.54,0,0,1,922,665.87h100.7l15.11,42.07H932.39c-8.8,0-16.77,5.95-16.77,5.95a16.13,16.13,0,0,0-4.2,11.1v50A17.19,17.19,0,0,0,928.74,792.3Z" transform="translate(-271.86 -665.87)"/><path class="cls-8" d="M1122.69,707.94h105.45L1213,665.87h-100.7A52.5,52.5,0,0,0,1061,707.94Z" transform="translate(-271.86 -665.87)"/><path class="cls-8" d="M1119,792.3H1061a52.51,52.51,0,0,0,51.37,41.83h115.8V792.3H1119Z" transform="translate(-271.86 -665.87)"/></svg>
        </a>
        <form action="#" class="header-search">
          <input type="search" name="" id="" placeholder="<?php echo $queRecherchezVous[$lang]; ?>" autocomplete="off">
          <a href="search.php">
            <svg  viewBox="0 0 254.77 263.68"><defs><style>.cls-1,.cls-2{fill:none;stroke-width:25px;}.cls-1{stroke-miterlimit:10;}.cls-2{stroke-linejoin:round;}</style></defs><g id="Calque_2" data-name="Calque 2"><g id="Calque_1-2" data-name="Calque 1"><circle class="cls-1" cx="108.26" cy="108.26" r="95.76"/><path class="cls-2" d="M176.45,175.73l65.82,75.45Z"/></g></g></svg>
          </a>
        </form>
        <ul class="header-menu">
          <?php
            if(!isset($_SESSION['pseudo'])) {
          ?>
          <li class="list language">
            <a href="#">
              <svg  viewBox="0 0 512 512">
                <path d="M352 256C352 278.2 350.8 299.6 348.7 320H163.3C161.2 299.6 159.1 278.2 159.1 256C159.1 233.8 161.2 212.4 163.3 192H348.7C350.8 212.4 352 233.8 352 256zM503.9 192C509.2 212.5 512 233.9 512 256C512 278.1 509.2 299.5 503.9 320H380.8C382.9 299.4 384 277.1 384 256C384 234 382.9 212.6 380.8 192H503.9zM493.4 160H376.7C366.7 96.14 346.9 42.62 321.4 8.442C399.8 29.09 463.4 85.94 493.4 160zM344.3 160H167.7C173.8 123.6 183.2 91.38 194.7 65.35C205.2 41.74 216.9 24.61 228.2 13.81C239.4 3.178 248.7 0 256 0C263.3 0 272.6 3.178 283.8 13.81C295.1 24.61 306.8 41.74 317.3 65.35C328.8 91.38 338.2 123.6 344.3 160H344.3zM18.61 160C48.59 85.94 112.2 29.09 190.6 8.442C165.1 42.62 145.3 96.14 135.3 160H18.61zM131.2 192C129.1 212.6 127.1 234 127.1 256C127.1 277.1 129.1 299.4 131.2 320H8.065C2.8 299.5 0 278.1 0 256C0 233.9 2.8 212.5 8.065 192H131.2zM194.7 446.6C183.2 420.6 173.8 388.4 167.7 352H344.3C338.2 388.4 328.8 420.6 317.3 446.6C306.8 470.3 295.1 487.4 283.8 498.2C272.6 508.8 263.3 512 255.1 512C248.7 512 239.4 508.8 228.2 498.2C216.9 487.4 205.2 470.3 194.7 446.6H194.7zM190.6 503.6C112.2 482.9 48.59 426.1 18.61 352H135.3C145.3 415.9 165.1 469.4 190.6 503.6V503.6zM321.4 503.6C346.9 469.4 366.7 415.9 376.7 352H493.4C463.4 426.1 399.8 482.9 321.4 503.6V503.6z"/>
              </svg>
              <span><?php echo $langue[$lang]; ?></span>
            </a>
          </li>
          <li class="list">
            <a href="#">
              <?php echo $devenirPrestataire[$lang]; ?>
            </a>
          </li>
          <li class="list">
            <a href="#" class="btnConnecter">
              <?php echo $seConnecter[$lang]; ?>
            </a>
          </li>
          <li class="list inscrire">
            <a href="#" class="btnInscrire">
              <?php echo $sIncrire[$lang]; ?>
            </a>
          </li>
          <?php
            } else {
          ?>
          <li class="list profil"><a href="#">
            <svg  viewBox="0 0 592 517.85"><g id="Calque_2" data-name="Calque 2"><g id="Calque_1-2" data-name="Calque 1"><path class="cls-3" d="M40,188.75V183A142.93,142.93,0,0,1,284,81.87l12,12,11.1-12C340.6,49.22,387,34.36,432.6,42A142.91,142.91,0,0,1,552,183v5.8a149.6,149.6,0,0,1-47.6,109.5L323.7,467a40.65,40.65,0,0,1-55.4,0L87.59,298.25A149.74,149.74,0,0,1,40,188.75Z"/></g></g>
            </svg></a>
          </li>
          <li class="list profil">
            <a href="chat.php"><svg  viewBox="0 0 512 512"><rect x="48" y="96" width="416" height="320" rx="40" ry="40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M112 160l144 112 144-112"/></svg></a>
          </li>
          <li class="list profil">
          <a href="#"><svg  viewBox="0 0 512 512"><path d="M427.68 351.43C402 320 383.87 304 383.87 217.35 383.87 138 343.35 109.73 310 96c-4.43-1.82-8.6-6-9.95-10.55C294.2 65.54 277.8 48 256 48s-38.21 17.55-44 37.47c-1.35 4.6-5.52 8.71-9.95 10.53-33.39 13.75-73.87 41.92-73.87 121.35C128.13 304 110 320 84.32 351.43 73.68 364.45 83 384 101.61 384h308.88c18.51 0 27.77-19.61 17.19-32.57zM320 384v16a64 64 0 01-128 0v-16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
          </li>
          <li class="list profil plus" style="background: <?php echo $_SESSION['color']; ?>;" >
            <span><?php echo strtoupper(substr($_SESSION['pseudo'], 0, 2)); ?></span>
            <i></i>
            <ul class="option">
              <li>
                <a href="profile.php">Profil</a>
              </li>
              <li>
                <a href="chat.php">Boites de reception</a>
                <a href="#">Favories</a>
                <a href="#">Devenir prestataire</a>
              </li>
              <li>
                <a href="#">Parametre</a>
                <a href="#" class="language">Francais <svg  viewBox="0 0 512 512"><path d="M352 256C352 278.2 350.8 299.6 348.7 320H163.3C161.2 299.6 159.1 278.2 159.1 256C159.1 233.8 161.2 212.4 163.3 192H348.7C350.8 212.4 352 233.8 352 256zM503.9 192C509.2 212.5 512 233.9 512 256C512 278.1 509.2 299.5 503.9 320H380.8C382.9 299.4 384 277.1 384 256C384 234 382.9 212.6 380.8 192H503.9zM493.4 160H376.7C366.7 96.14 346.9 42.62 321.4 8.442C399.8 29.09 463.4 85.94 493.4 160zM344.3 160H167.7C173.8 123.6 183.2 91.38 194.7 65.35C205.2 41.74 216.9 24.61 228.2 13.81C239.4 3.178 248.7 0 256 0C263.3 0 272.6 3.178 283.8 13.81C295.1 24.61 306.8 41.74 317.3 65.35C328.8 91.38 338.2 123.6 344.3 160H344.3zM18.61 160C48.59 85.94 112.2 29.09 190.6 8.442C165.1 42.62 145.3 96.14 135.3 160H18.61zM131.2 192C129.1 212.6 127.1 234 127.1 256C127.1 277.1 129.1 299.4 131.2 320H8.065C2.8 299.5 0 278.1 0 256C0 233.9 2.8 212.5 8.065 192H131.2zM194.7 446.6C183.2 420.6 173.8 388.4 167.7 352H344.3C338.2 388.4 328.8 420.6 317.3 446.6C306.8 470.3 295.1 487.4 283.8 498.2C272.6 508.8 263.3 512 255.1 512C248.7 512 239.4 508.8 228.2 498.2C216.9 487.4 205.2 470.3 194.7 446.6H194.7zM190.6 503.6C112.2 482.9 48.59 426.1 18.61 352H135.3C145.3 415.9 165.1 469.4 190.6 503.6V503.6zM321.4 503.6C346.9 469.4 366.7 415.9 376.7 352H493.4C463.4 426.1 399.8 482.9 321.4 503.6V503.6z"/></svg></a>
                <a href="php/deconnexion.php">Se deconnecter</a>
              </li>
            </ul>
          </li>
          <?php } ?>
        </ul>
      </header>

      <div class="sub-header-wrapper">
        <ul class="container">
          <li class="sub sub1"><span><?php echo $logements[$lang]; ?></span>
            <ul class="_Menu5Jy5w1PY">
              <li class="_lists7KLc94r"><a href="#"><?php echo $appartements[$lang]; ?></a>
                <li class="_lists7KLc94r"><a href="#"><?php echo $immeubles[$lang]; ?></a></li>
                <li class="_lists7KLc94r"><a href="#"><?php echo $maisons[$lang]; ?></a></li>
                <li class="_lists7KLc94r"><a href="#"><?php echo $studios[$lang]; ?></a></li>
                <li class="_lists7KLc94r"><a href="#"><?php echo $villa[$lang]; ?></a></li>
              </li>
            </ul>
          </li>
          <li class="sub sub2"><span><?php echo $vehicules[$lang]; ?></span>
            <ul class="_Menu5Jy5w1PY">
              <li class="_lists7KLc94r"><a href="#"><?php echo $voitures[$lang]; ?></a>
                <ul>
                  <li><a href="#"><?php echo $voituresClassic[$lang]; ?></a></li>
                  <li><a href="#"><?php echo $voituresSUV[$lang]; ?></a></li>
                  <li><a href="#">Van</a></li>
                  <li><a href="#"><?php echo $Limousines[$lang]; ?></a></li>
                  <li><a href="#"><?php echo $voituresPickup[$lang]; ?></a></li>
                </ul>
              </li>
              <li class="_lists7KLc94r"><a href="#"><?php echo $camion[$lang]; ?></a>
                <ul>
                  <li><a href="#"><?php echo $camionClassic[$lang]; ?></a></li>
                  <li><a href="#"><?php echo $miniCamion[$lang]; ?></a></li>
                  <li><a href="#"><?php echo $grosCamion[$lang]; ?></a></li>
                </ul>
              </li>
              <li class="_lists7KLc94r"><a href="#">Moto</a>
                <ul>
                  <li><a href="#"><?php echo $MotoClassic[$lang]; ?></a></li>
                  <li><a href="#"><?php echo $MotoCross[$lang]; ?></a></li>
                  <li><a href="#"><?php echo $MotoCourse[$lang]; ?></a></li>
                  <li><a href="#">Scooter</a></li>
                </ul>
              </li>
              <li class="_lists7KLc94r"><a href="#"><?php echo $bateaux[$lang]; ?></a></li>
            </ul>
          </li>
          <!-- <li class="sub sub1"><span>Herbergements  </span>
            <ul class="_Menu5Jy5w1PY">
              <li class="_lists7KLc94r"><a href="#">Hotel</a>
                <li class="_lists7KLc94r"><a href="#">Motel</a></li>
              </li>
            </ul>
          </li> -->
          <li class="sub sub3"><span>Espaces evenementiels</span>
            <ul class="_Menu5Jy5w1PY">
              <li class="_lists7KLc94r"><a href="#"></a>
                <li class="_lists7KLc94r"><a href="#">salle de conference</a></li>
                <li class="_lists7KLc94r"><a href="#">Espaces coworking</a></li>
                <li class="_lists7KLc94r"><a href="#">Jardins pour evenement</a></li>
                <li class="_lists7KLc94r"><a href="#">Salle de fete</a></li>
                <li class="_lists7KLc94r"><a href="#">Snack</a></li>
              </li>
            </ul>
          </li>
          <li class="sub sub4"><span><?php echo $boites[$lang]; ?></span>
            <ul class="_Menu5Jy5w1PY">
              <li class="_lists7KLc94r"><a href="#"><?php echo $bureaux[$lang]; ?></a></li>
              <li class="_lists7KLc94r"><a href="#"><?php echo $boutiques[$lang]; ?></a></li>
              <li class="_lists7KLc94r"><a href="#"><?php echo $magasin[$lang]; ?></a></li>
            </ul>
          </li>
          <li class="sub sub5"><span><?php echo $machines[$lang]; ?></span>
            <ul class="_Menu5Jy5w1PY">
              <li class="_lists7KLc94r"><a href="#"><?php echo $engis[$lang]; ?></a>
                <ul>
                  <li><a href="#">Bulldozer</a></li>
                  <li><a href="#"><?php echo $chargeuse[$lang]; ?></a></li>
                  <li><a href="#"><?php echo $miniChargeuse[$lang]; ?></a></li>
                  <li><a href="#"><?php echo $nacelle[$lang]; ?></a></li>
                  <li><a href="#"><?php echo $niveleuse[$lang]; ?></a></li>
                  <li><a href="#"><?php echo $pelleteuse[$lang]; ?></a></li>
                  <li><a href="#"><?php echo $rouleauCompresseur[$lang]; ?></a></li>
                  <li><a href="#"><?php echo $tractopelle[$lang]; ?></a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="sub sub1"><span>Vetements<span>
            <ul class="_Menu5Jy5w1PY">
              <li class="_lists7KLc94r"><a href="#">Costumes</a>
                <li class="_lists7KLc94r"><a href="#">Deguissements</a></li>
                <li class="_lists7KLc94r"><a href="#">Robes de soiree</a></li>
              </li>
            </ul>
          </li>
          <li class="sub sub6"><span>Terrains</span>
            <ul class="_Menu5Jy5w1PY">
              <li class="_lists7KLc94r"><a href="#">Stades</a>
                <ul>
                  <li><a href="#">Basketball</a></li>
                  <li><a href="#">Football</a></li>
                  <li><a href="#">Tennis</a></li>
                  <li><a href="#">Volleyball</a></li>
                </ul>
              </li>
              <li class="_lists7KLc94r"><a href="#"><?php echo $terrainNues[$lang]; ?></a></li>
            </ul>
          </li>
          <li class="sub sub7"><span><?php echo $autres[$lang]; ?></span>
            <ul class="_Menu5Jy5w1PY">
              <li class="_lists7KLc94r"><a href="#">Chapiteau</a></li>
              <li class="_lists7KLc94r"><a href="#">Chaises</a></li>
              <li class="_lists7KLc94r"><a href="#">Jeux video</a></li>
              <li class="_lists7KLc94r"><a href="#">Jeux gonflables</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>

