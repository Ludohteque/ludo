    <!-- Main jumbotron for a primary marketing message or call to action -->
    <?php 
    require_once('DAO/JeuDAO.php');
    require_once('Modele/Jeu.php');
    $jeuDAO = new JeuDAO();
    $lesNouveautes = $jeuDAO->getNouveautes();
    $lesPopulaires = $jeuDAO->getPopulaires();
    $lesEmpruntes = $jeuDAO->getDerniersEmprunt();
    
    include('Vue/v_header.php');
    include('Vue/v_actus.php'); 
    
    if (UserDAO::estConnecte()){include('Vue/v_tablemesjeux.php');} ?>
        <div id="en blanc">
        </div>
    

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Jeux populaires :</h2>
          <p>ici vont les jeux populaires... Cékomssapicétou !!!<p>
          <table class="jeuxaccueil">
              <tr class="trjeuxmain">
                  <th>Jeu</th>
                  <th>Note</th>
              </tr>
              <?php 
              foreach ($lesPopulaires as $leJeu) { 
                  ?>
              <tr>
                  <th><?php echo $leJeu->getNom();?></th>
                  <th><?php echo $leJeu->getNote();?></th>
              </tr>   
                   <?php
              } 
              ?>
          </table>
          <a class="btn btn-default" href="#" role="button">Voir plus &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Nouveautés</h2>
          <p>Ici vont les nouveautés ... Cékomssapicétou !!!</p>
          <table class="jeuxaccueil">
              <tr class="trjeuxmain">
                  <th>Jeu</th>
                  <th>Note</th>
              </tr>
              <?php 
              foreach ($lesNouveautes as $leJeu) { 
                  ?>
              <tr>
                  <th><?php echo $leJeu->getNom();?></th>
                  <th><?php echo $leJeu->getNote();?></th>
              </tr>   
                   <?php
              } 
              ?>
          </table>
          <a class="btn btn-default" href="#" role="button">Voir plus &raquo;</a>
        </div>
        <div class="col-md-4">
          <h2>Derniers jeux empruntés</h2>
          <p>Ici vont les derniers jeux empruntés .... Cékomssapicétou !!!<p>
          <table class="jeuxaccueil">
              <tr class="trjeuxmain">
                  <th>Jeu</th>
                  <th>Date d'emprunt</th>
                  <th>Note</th>
              </tr>
              <?php 
              foreach ($lesEmpruntes as $leJeu) { 
                  ?>
              <tr>
                  <th><?php echo $leJeu['nom'];?></th>
                  <th><?php echo $leJeu['date_emprunts'];?></th>
                  <th><?php echo $leJeu['note'];?></th>
              </tr>   
                   <?php
              } 
              ?>
          </table>
          <a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
      </div>
    </div>
      <hr id="barreH"> <!-- Balise de barre horizontale --> <!-- /container -->        
    <?php 
    include('Vue/v_footer.php'); ?>
