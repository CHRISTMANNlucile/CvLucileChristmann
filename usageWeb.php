<!DOCTYPE html>
<html lang="fr">
<?php
require_once("head.html");
?>
<body>
  <h1 class="site-heading text-center text-white d-none d-lg-block">
    <span class="site-heading-lower">INTERFACE DE GESTION</span>
  </h1>

  <?php
require_once("menu.html");
?>

</br>
  <div class="about-heading-content">
    <div class="row">
      <div class="col-xl-9 col-lg-10 mx-auto">
        <div class="bg-faded rounded p-5">
          <h2 class="section-heading mb-4">
              <span class="section-heading-upper">Interface de gestion</span>
              <span class="section-heading-lower">page d'accueil</span>
            </h2>
            <p class="mb-3">Les <b>couleurs</b> et le <b>logo</b> de la page d'accueil sont en adéquation avec <b>la charte graphique</b>.</br> Le <b>titre</b> et <b>le bandeau de formations</b> sont animés en <em>Javascript</em> et <em>CSS</em>.
          </br>
            <div class="intro-button mx-auto">
              <a class="btn btn-primary btn-xl" href="accueil.php" target="_blank">PAGE D'ACCUEIL</a>
            </div>
        </div>
      </div>
    </div>
  </div>
</br>
  <div class="about-heading-content">
    <div class="row">
      <div class="col-xl-9 col-lg-10 mx-auto">
        <div class="bg-faded rounded p-5">
          <h2 class="section-heading mb-4">
            <span class="section-heading-upper">UN FORMULAIRE DE 45 CHAMPS</span>
            <span class="section-heading-lower">AJOUTER UNE ACTION</span>
          </h2>
          <p>Un <b>motif</b> à l'entrée de chaque <b>champ</b>, ainsi qu'un <b>texte</b> à l'intérieur indiquent le contenu désiré.</br>La <b>taille</b> des champs est <b>adaptée</b> au contenu.   </p>
          <div class="intro-button mx-auto">
            <a class="btn btn-primary btn-xl" href="ajout.php" target="_blank">FORMULAIRE D'AJOUT</a>
          </div></div>
      </div>
    </div>
  </div>
</br>
  <div class="about-heading-content">
    <div class="row">
      <div class="col-xl-9 col-lg-10 mx-auto">
        <div class="bg-faded rounded p-5">
          <h2 class="section-heading mb-4">
            <span class="section-heading-upper">un formulaire pré-rempli</span>
            <span class="section-heading-lower">modifier / supprimer</span>
          </h2>
          <p><em></em>Le formulaire de modification <b>affiche</b> les <b>informations</b> existantes dans la <b>base de données</b>. Il suffit de les <b>modifier</b> ou de les <b>compléter</b>.</br>Un <b>meu déroulant</b> permet de choisir l'action de formation à modifier ou à <b>supprimer</b>.</p>
          <div class="intro-button mx-auto">
            <a class="btn btn-primary btn-xl" href="modif.php" target="_blank">MODIFICATION</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</br>


<?php
require_once("footer.html");
?>
</body>