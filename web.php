<!DOCTYPE html>
<html lang="fr">
<?php
require_once("head.html");
?>

<body>

<h1 class="site-heading text-center text-white d-none d-lg-block">
  <span class="site-heading-lower">Travaux</span>
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
          <span class="section-heading-upper">Stage au GRETA de la Loire</span>
          <span class="section-heading-lower">Interface de gestion</span>
        </h2>
        <p>Cette <b>application</b> est utilisée par le personnel du GRETA pour <b>ajouter</b> des actions de formation à la base de données du Livret Numérique, les <b>modifier</b> ou les <b>supprimer</b> . Le <b>Livret Numérique</b> permet aux élèves du <b>GRETA</b> de consulter des informations générales, et spécifiques à leur formation. C'est une application réservée à un usage <b>intranet</b>: c'est pourquoi je vous la présente sans laisser la possibilité de l'utiliser.  </p>
        <p class="mb-0">J'ai créé le <b>front-end</b> avec <em>HTML5</em>, <em>CSS3</em> et  <em>BOOTSTRAP</em> et le <b>back-end</b> avec <em>MySQL</em> et <em>PHP</em>. Je l'ai <b>mise en production</b> sur <b>O2SWITCH</b>, après l'avoir codée en local, pour béneficier des extensions de <b>VSCode</b>. </p>
        <div class="intro-button mx-auto">
          </br>
          <a class="btn btn-primary btn-xl" href="usageWeb.php" target="_blank">INTERFACE DE GESTION</a>
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
          <span class="section-heading-upper">Stage au GRETA de la Loire</span>
          <span class="section-heading-lower">migration PDO</span>
        </h2>
        <p>J'ai réalisé la migration <b>mysql_connect</b> (<em>PHP 5.6.4</em>) vers <b>PDO</b> (<em>PHP 7.4.3</em>) du site intranet <b>GenAc</b> du <b>GRETA</b> afin de <b>sécuriser</b> ses données. </p>
        <p class="mb-0"><b>PDO</b> ( <em>PHP Data Objects</em> ) est une extension <em>PHP</em> qui définit une <b>interface d'accès</b> à une <b>base de données</b>.
        PDO permet de parer aux <b>injections SQL</b>. Les <b>pirates</b> ont recours aux injections SQL pour avoir accès aux commandes d’administration, afficher des données cachées, écraser des valeurs importantes...</p>
        <div class="intro-button mx-auto">
          </br>
          <a class="btn btn-primary btn-xl" href="pdo.php" >EXEMPLE COMMENTE</a>
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
          <span class="section-heading-upper">Stage au GRETA de la Loire</span>
          <span class="section-heading-lower">maquettage</span>
        </h2>
        <p>Voici le <b>maquettage</b>, réalisé sur <em>Pencil</em>, d'un projet d'extentions pour le site <b>GenAc</b>, qui permet de générer des attestations de compétences sous format <em>pdf</em>. Les <b>extensions</b> prévues permettront de <b>mémoriser</b> les acquis en cours de formation, d’<b>authentifier</b> les utilisateurs, ainsi que de <b>gérer les inscriptions</b> des élèves, du personnel administratif et des enseignants.
</p>
        <p class="mb-0"></b>.
        <div class="intro-button mx-auto">
          <a class="btn btn-primary btn-xl" href="maquet.php" >MAQUETTE</a>
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
          <span class="section-heading-upper">Stage au GRETA de la Loire</span>
          <span class="section-heading-lower">base de données</span>
        </h2>
        <p><b>Refonte</b> de la <b>base de données</b> du site <b>GenAc</b> en vue du projet d'extensions. Création de <b>nouvelles tables</b>, changement et uniformisation des <b>types</b> et <b>interclassements</b>. Afin de garantir l’intégrité de la base de données, j’ai changé le moteur stockage <em>MyISAM</em> en <em>InnoDB</em> afin de placer des <b>clés étrangères</b> entre les tables existantes ainsi que les nouvelles. </p>
        <p class="mb-0"></p>
        <div class="intro-button mx-auto">
          </br>
          <a class="btn btn-primary btn-xl" href="mld.php" >MLD BASE DE DONNEES</a>
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
          <span class="section-heading-upper">Site wordpress</span>
          <span class="section-heading-lower">sports extrêmes</span>
        </h2>
        <p>Création du site <b>XDREAM</b>, à l'aide du <b>CMS</b> <em>WORDRESS</em>. Création d'un <b>Plugin</b> permettant d’afficher en <em>AJAX</em> le niveau de l’eau à Saint Jean de Luz en interrogeant une <b>API Web</b>.</p>
        <p class="mb-0"></p>
        <div class="intro-button mx-auto">
          </br>
          <a class="btn btn-primary btn-xl" href="xdream.php" >XDREAM</a>
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

</html>
