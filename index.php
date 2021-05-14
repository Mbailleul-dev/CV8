<!DOCTYPE HTML>

<html>
	<head>
		
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<title>CV Numérqiue</title>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						
						<div class="content">
							<div class="inner">
								<h1>Morgan Bailleul</h1>
								<p style ="font-size : 1rem;">Developpeur Web et Web Mobile.</p>
							</div>
						</div>
						<nav>
							<ul>
								<li><a href="#intro">Présentation</a></li>
								<li><a href="#work">Compétences</a></li>
								<li><a href="#about">Expériences</a></li>
								<li><a href="#contact">Contact</a></li>
								<!--<li><a href="#elements">Elements</a></li>-->
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<div id="main">

						<!-- Intro -->
							<article id="intro">
								<h2 class="major">Présentation</h2>
								<span class="image main"><img src="images/profil.jpg" alt="" /></span>
								<p>De formation axée scientifique j'ai obtenu un Bac S spé Maths, et commencé une Licence "des
									Mathématqiues
									appliqués à l'informatique".J'ai ensuite passé 4 ans en tant que technico-commercial, puis 5 ans
									dans la logistique.<br>
									A 33 ans j'ai décidé de revenir à aux origines. Récemment diplomé d'un Titre Professionnel Web
									Developpeur et Web Mobile,
									je suis à la recherche d'un poste full-stack. </p>
									<p><a href="#work">Mes compétences ici.</a></p>
							</article>

						<!-- Work -->
							<article id="work">
								<h2 class="major">Compétences</h2>
								<div id="iconC">
									<p>
									<i class="fab fa-html5"> HTML 5</i><br>
									<i class="fab fa-css3-alt"> CSS 3</i><br>
									<i class="fab fa-sass"> SASS</i><br>
									<i class="fab fa-js"> JAVASCRIPT</i><br>
									<i class="fab fa-bootstrap"> BOOTSTRAP</i><br>
									<i class="fab fa-wordpress"> WORDPRESS</i><br>
								</p>
								</div>
								<p><a href="#about">Mes expériences ici.</a></p>
							</article>

						<!-- About -->
							<article id="about">
								<h2 class="major">Expériences</h2>
								<p><span style="font-weight: bold;">2021: </span> 6 mois de formation à LaMAnu Noyon(60).<br>
								Obtention du diplôme Developpeur Web et Web Mobile.</p>
								<p><a href="#contact">Pour me contacter c'est ici.</a></p>
							</article>

						<!-- Contact -->
							<article id="contact">
								<h2 class="major">Contact</h2>
								<form method="post" action="mailto:morgan.bailleul.contact@gmail.com">
									<div class="fields">
										<div class="field half">
											<label for="name">Nom</label>
											<input type="text" name="name" id="name" />
										</div>
										<div class="field half">
											<label for="email">Email</label>
											<input type="text" name="email" id="email" />
										</div>
										<div class="field">
											<label for="message">Message</label>
											<textarea name="message" id="message" rows="4"></textarea>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send Message" class="primary" /></li>
										<li><input type="reset" value="Reset" /></li>
									</ul>
								</form>
								<?php
    if (isset($_POST['message'])) {
        $position_arobase = strpos($_POST['email'], '@');
        if ($position_arobase === false)
            echo '<p>Votre email doit comporter un arobase.</p>';
        else {
            $retour = mail('morgan.bailleul.contact@gmail.com', 'Envoi depuis la page Contact', $_POST['message'], 'From: ' . $_POST['email']);
            if($retour)
                echo '<p>Votre message a été envoyé.</p>';
            else
                echo '<p>Erreur.</p>';
        }
    }
    ?>
								<ul class="icons">
									<li><a href="https://www.linkedin.com/in/morgan-bailleul-933976210/" class="icon brands fa-linkedin"><span class="label">Twitter</span></a></li>
									<li><a href="assets/Morgan Bailleul CV Cariste v2.pdf" class="icon far fa-file"><span class="label">CV PDF</span></a></li>
								</ul>
							</article>

						<!-- Elements -->
							

					</div>

				<!-- Footer -->
					<footer id="footer">
						
					</footer>

			</div>

		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
