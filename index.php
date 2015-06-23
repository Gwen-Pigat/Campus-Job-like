<html>
<head>
<?php include "include/header.php"; ?>

</head>
<body>

<section class="social-media">
<a href=""><i class="fa fa-facebook-square fa-3x"></i></a>
<a href=""><i class="fa fa-linkedin-square fa-3x"></i></a>
<a href=""><i class="fa fa-twitter-square fa-3x"></i></a>
<a href=""><i class="fa fa-youtube-square fa-3x"></i></a>
</section>


<?php

session_destroy();

//Partie employeur

if (isset($_GET['Employeur'])) { ?>
  <?php if (isset($_GET['erreur_connexion'])) { ?>
  <script type="text/javascript">
    $(document).ready(function(){
      alert("Mauvais mot de passe ou nom d'utilisateur");
    });
  </script>
  <?php } ?>
<title>Projet Employeur</title>

<div class="header">

<div class="categorie">
<?php echo "<a href='index.php'><button class='btn-etudiant'>Etudiant</button></a>
<button class='btn-login' data-toggle='modal' data-target='#Connexion'>Se connecter</button></a>"; ?>
</div>

<div class='container text-center'>
  <div class="logo">
  <i class="fa fa-university fa-5x"></i><br>
  <span class='title'>SpeedJob</span>
  </div>
    <h1 class="main">Trouvez les meilleurs étudiants pour votre entreprise</h1>
    <h3 class="main-description">Seuls les étudiants qui correspondent à vos critères peuvent postuler à votre offre</h3>

  <br><br><br>

<button class='btn-lg btn-custom' data-toggle="modal" data-target="#myModal">Poster une offre gratuitement</button><br><br><br>
<a class="tarifs" data-toggle="modal" data-target="#Modal-pricing">Voir les tarifs</a>
</div>


<!-- Modal pour pricing  -->
  <div class="modal fade" id="Modal-pricing" role="dialog">
    <div class="modal-dialog">
    
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Nos offres</h4>
        </div>
        <div class="modal-body">
          <p>Veuilez remplir tout les champs ci-dessous afin de valider votre inscription.</p>
          <center>
          <form>
            <input type="text" name="nom" placeholder="Votre nom" required>
            <input type="text" name="prenom" placeholder="Votre prénom" required><br>
            <input type="text" name="entreprise" placeholder="Nom de l'entreprise" required>
            <input type="text" name="telephone" placeholder="Numéro de téléphone" required>
            <input type="email" name="email" placeholder="E-mail" required>
            <input type="password" name="password" placeholder="Mot de passe" required><br>
            <input class="btn btn-danger" type="submit" value="Valider">
          </form>
          </center>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-info" data-dismiss="modal">Retour</button>
        </div>
      </div>    
    </div>
  </div>

<!-- Modal pour connexion  -->
  <div class="modal fade" id="Connexion" role="dialog">
    <div class="modal-dialog">
    
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Connexion à votre compte</h4>
        </div>
        <div class="modal-body">
          <center>
          <form class="col-md-12" method="POST" action="include/connexion.php">
            <input class="col-md-12" type="email" name="email" placeholder="Votre adresse e-mail" required>
            <input class="col-md-12" type="password" name="password" placeholder="Votre mot de passe" required><br>
            <input class="btn btn-danger col-md-12" type="submit" value="Valider">
          </form>
          </center>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-info" data-dismiss="modal">Retour</button>
        </div>
      </div>    
    </div>
  </div>

<!-- Modal pour inscription  -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Formulaire d'inscription</h4>
        </div>
        <div class="modal-body">
          <p>Veuilez remplir tout les champs ci-dessous afin de valider votre inscription.</p>
          <center>
          <form method="POST" action="redirect_master.php?employeur">
            <input type="text" name="nom" placeholder="Votre nom" required>
            <input type="text" name="prenom" placeholder="Votre prénom" required><br>
            <input type="text" name="entreprise" placeholder="Nom de l'entreprise" required>
            <input type="telephone" name="telephone" placeholder="Numéro de téléphone" required>
            <input type="email" name="email" placeholder="E-mail" required>
            <input type="password" name="password" placeholder="Mot de passe" required><br>
            <input class="btn btn-danger" type="submit" value="Valider">
          </form>
          </center>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-info" data-dismiss="modal">Retour</button>
        </div>
      </div>    
    </div>
  </div>
</div>


  <!-- Comment ca marche -->
  <section class="page-section step-section" id="about">
    <h1 class="text-center">Comment ca marche</h1>
    <br><br>
    <div class="container">
      <div class="row">

        <div class="col-sm-4">
          <div class="step">
            <div class="img-container with-padding img-rounded img-shadow">
              <img src="https://s3.amazonaws.com/static.campusjob.com/assets/about_step1a.png" class="img-responsive center-block">
            </div>
            <h3>Step 1</h3>
            <p>Students sign up for Campus Job (always free!) and fill out their virtual profile. Meanwhile, employers create a profile and post a job (it’s free to post). Employers can be as specific or vague as they want with targeting students, so that only qualified students can see the job listing.</p>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="step">
            <div class="img-container">
              <img src="https://s3.amazonaws.com/static.campusjob.com/assets/about_step2.gif" class="img-responsive center-block">
            </div>
            <h3>Step 2</h3>
            <p>If the job is approved, qualified students will be notified, and the matching can begin. Students can apply to the job (often through just one click, like a Common App but for job applications), and businesses can also search through our student database and invite specific students to apply.</p>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="step">
            <div class="img-container">
              <img src="https://s3.amazonaws.com/static.campusjob.com/assets/about_step3a.png" class="img-responsive img-rounded img-shadow center-block">
            </div>
            <h3>Step 3</h3>
            <p>It’s a match made in heaven! (Well, actually, it’s made on campusjob.com...) Employers will get the applicant’s full contact information, and can then contact the student directly to interview or hire.</p>
          </div>
        </div>

      </div>
    </div>

  </section>
  <!-- Comment ca marche : fin  -->


  <section class="team col-md-12">
    <div class="container">

    <h1>Rencontrer l'équipe</h1>
    <div>
      <div class="member col-md-3">
        <img class="member-1" src="img/user.png" onmouseover="this.src='img/user.gif'" onmouseout="this.src='img/user.png'" style="transition: 0.6s">
        <center>
        <div class="team-info team-info-1">
          <ul class="team-info-list">
            <li><h4 class="light-coral">Gwen</h4></li>
            <li>Front/Back-end developpeur</li>
            <li>Formé à la "Wild Code School"</li>
            <li class="job-label">Passe temps favori :</li>
            <li class="n-as-newline">Le code, le code, le code !!</li>
          </ul>
        </div>
        </center>
      </div>
    </div>  
      <div class="member col-md-3">
        <img class="member-2" src="img/user.png" onmouseover="this.src='img/user.gif'" onmouseout="this.src='img/user.png'" style="transition: 0.6s">
        <center>
        <div class="team-info team-info-2">
          <ul class="team-info-list">
            <li><h4 class="light-coral">Gwen</h4></li>
            <li>Front/Back-end developpeur</li>
            <li>Formé à la "Wild Code School"</li>
            <li class="job-label">Passe temps favori :</li>
            <li class="n-as-newline">Le code, le code, le code !!</li>
          </ul>
        </div>
        </center>
      </div>
      <div class="member col-md-3">
        <img class="member-3" src="img/user.png" onmouseover="this.src='img/user.gif'" onmouseout="this.src='img/user.png'" style="transition: 0.6s">
        <center>
        <div class="team-info team-info-3">
          <ul class="team-info-list">
            <li><h4 class="light-coral">Gwen</h4></li>
            <li>Front/Back-end developpeur</li>
            <li>Formé à la "Wild Code School"</li>
            <li class="job-label">Passe temps favori :</li>
            <li class="n-as-newline">Le code, le code, le code !!</li>
          </ul>
        </div>
        </center>
      </div>
      <div class="member col-md-3">
        <img class="member-4" src="img/user.png" onmouseover="this.src='img/user.gif'" onmouseout="this.src='img/user.png'" style="transition: 0.6s">
        <center>
        <div class="team-info team-info-4">
          <ul class="team-info-list">
            <li><h4 class="light-coral">Gwen</h4></li>
            <li>Front/Back-end developpeur</li>
            <li>Formé à la "Wild Code School"</li>
            <li class="job-label">Passe temps favori :</li>
            <li class="n-as-newline">Le code, le code, le code !!</li>
          </ul>
        </div>
        </center>
      </div>
      </div>
  </section>

<section class="contact_us text-center col-md-12">
 <h1>Des questions ? <a href="contact.php">Contactez-nous</a></h1>

 <div class="social">
        <ul class="social-list">
            <li>
                <a href="https://www.linkedin.com/company/5304501?trk=prof-0-ovw-curr_pos" target="_blank">
                    <i class="fa fa-linkedin-square fa-5x"></i>
                </a>
            </li>
            <li>
                <a href="https://facebook.com/thecampusjob" target="_blank">
                    <i class="fa fa-facebook-square fa-5x"></i>
                </a>
            </li>
            <li>
                <a href="https://twitter.com/thecampusjob" target="_blank">
                    <i class="fa  fa-twitter-square fa-5x"></i>
                </a>
            </li>
            <li>
                <a target="_blank" href="https://www.youtube.com/user/thecampusjob">
                    <i class="fa fa-youtube-square fa-5x"></i>
                </a>
            </li>
        </ul>
    </div>

</section>
<?php }



//Partie étudiant

else{

  include "include/carousel.php" ?>

<title>Projet Etudiant</title>

<section class="categorie">
<?php echo "<a href='index.php?Employeur'><button class='btn-employeur'>Employeur</button></a>
<button class='btn-login'>Se connecter</button>"; ?>
</section>


<div class='container text-center'>
<div class="logo">
<i class="fa fa-university fa-5x"></i><br>
<span class='title'>SpeedJob</span>
</div>
<h1 class="main">Etudiant :<br>  trouve un stage ou un job</h1>

<!-- Test de slider -->


	<br><br><br>

<button class='btn-custom' data-toggle="modal" data-target="#myModal"><strong>Trouve ton stage maintenant</strong></button>
</div>

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Formulaire d'inscription</h4>
        </div>
        <div class="modal-body">
          <p>Veuilez remplir tout les champs ci-dessous afin de valider votre inscription.</p>
          <center>
          <form method="POST" action="redirect_master.php">
            <input type="text" name="nom" placeholder="Votre nom" required>
            <input type="text" name="prenom" placeholder="Votre prénom" required><br>
            <input type="email" name="email" placeholder="E-mail" required>
            <input type="password" name="password" placeholder="Mot de passe"  required><br>
            <input class="btn btn-danger" type="submit" value="Valider">
          </form>
          </center>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-info" data-dismiss="modal">Retour</button>
        </div>
      </div>    
    </div>
  </div>

<?php } ?>
</div>
</body>
</html>

<?php include "include/footer.php"; ?>