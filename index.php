<?php
// Redirige vers la version statique HTML. Remplacez si vous avez besoin de logique PHP.
header('Location: index.html', true, 302);
exit;

<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="Portfolio étudiant BTS SIO - [PRÉNOM] [NOM] - Présentation des compétences, projets et stages.">
	<title>[PRÉNOM NOM] — Portfolio BTS SIO</title>
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
	<script defer src="scripts.js"></script>
</head>
<body>
	<header class="site-header">
		<nav class="nav" aria-label="Navigation principale">
			<a class="logo" href="#hero">[PRÉNOM NOM]</a>
			<button class="nav-toggle" aria-expanded="false" aria-controls="nav-list">Menu</button>
			<ul id="nav-list" class="nav-list">
				<li><a href="#about">À propos</a></li>
				<li><a href="#skills">Compétences</a></li>
				<li><a href="#projects">Projets</a></li>
				<li><a href="#experience">Stages</a></li>
				<li><a href="#veille">Veille</a></li>
				<li><a href="#e4">E4</a></li>
				<li><a href="#e5">E5</a></li>
				<li><a href="#documents">Documents</a></li>
				<li><a href="#contact">Contact</a></li>
			</ul>
		</nav>
	</header>

	<main>
		<section id="hero" class="hero">
			<div class="hero-inner">
				<div class="hero-text">
					<h1>Bonjour, je suis <span class="name">[PRÉNOM NOM]</span></h1>
					<p class="lead">Étudiant en BTS SIO — Option [SISR / SLAM]</p>
					<p class="intro">Je construis des solutions informatiques robustes et apprends constamment de nouvelles technologies. Ce portfolio présente mon parcours, mes projets, mes stages et mes compétences.</p>
					<div class="hero-ctas">
						<a class="btn primary" href="#projects">Découvrir mon portfolio</a>
						<a class="btn" href="assets/CV-[PRENOM]-[NOM].pdf" download>Télécharger mon CV</a>
					</div>
					<div class="socials">
						<a href="#" aria-label="GitHub">GitHub</a>
						<a href="#" aria-label="LinkedIn">LinkedIn</a>
					</div>
				</div>
				<div class="hero-media">
					<img src="assets/profile.svg" alt="Photo de [PRÉNOM NOM]" class="profile-photo">
				</div>
			</div>
		</section>

		<section id="about" class="about reveal">
			<h2>À propos</h2>
			<div class="about-grid">
				<div>
					<h3>Parcours scolaire</h3>
					<p>[Parcours scolaire ici — utilisez des placeholders]</p>
					<h3>Pourquoi le BTS SIO</h3>
					<p>[Motivations]</p>
					<h3>Option</h3>
					<p>[SISR / SLAM]</p>
					<h3>Objectifs professionnels</h3>
					<p>[Objectifs]</p>
				</div>
				<aside>
					<img src="assets/profile.svg" alt="Photo de profil" class="about-photo">
				</aside>
			</div>
		</section>

		<section id="skills" class="skills reveal">
			<h2>Compétences</h2>
			<p class="muted">Sélectionnez votre option et ajustez les compétences.</p>
			<div class="skills-grid">
				<!-- Example skill card, duplicate & edit as needed -->
				<div class="skill-card">
					<h4>Administration systèmes</h4>
					<div class="skill-bar" aria-hidden="true"><span style="width:70%"></span></div>
					<p class="level">Intermédiaire</p>
				</div>
				<div class="skill-card">
					<h4>Réseaux</h4>
					<div class="skill-bar" aria-hidden="true"><span style="width:75%"></span></div>
					<p class="level">Intermédiaire</p>
				</div>
				<div class="skill-card">
					<h4>Linux</h4>
					<div class="skill-bar" aria-hidden="true"><span style="width:80%"></span></div>
					<p class="level">Bonnes bases</p>
				</div>
				<div class="skill-card">
					<h4>Virtualisation</h4>
					<div class="skill-bar" aria-hidden="true"><span style="width:60%"></span></div>
					<p class="level">Notions pratiques</p>
				</div>
			</div>
		</section>

		<section id="projects" class="projects reveal">
			<h2>Projets</h2>
			<p class="muted">Minimum 4 projets — utilisez les placeholders et remplacez les contenus.</p>
			<div class="projects-grid">
				<!-- Project card template -->
				<article class="project-card">
					<img src="assets/project-1.svg" alt="Capture du projet [PROJET]">
					<div class="project-body">
						<h3>[PROJET 1]</h3>
						<p class="proj-desc">Brève description du projet.</p>
						<p class="proj-meta"><strong>Technologies :</strong> [TECHNOLOGIES]</p>
						<details>
							<summary>Plus d'informations</summary>
							<p><strong>Difficultés :</strong> [DIFFICULTÉS]</p>
							<p><strong>Solutions :</strong> [SOLUTIONS]</p>
							<p><strong>Ce que j'ai appris :</strong> [APPRENTISSAGES]</p>
							<p><a href="#" target="_blank" rel="noopener">Voir sur GitHub</a></p>
						</details>
					</div>
				</article>
				<!-- Duplicate minimal cards to reach 4 -->
				<article class="project-card">
					<img src="assets/project-2.svg" alt="Capture du projet [PROJET]">
					<div class="project-body"><h3>[PROJET 2]</h3><p class="proj-desc">Description...</p></div>
				</article>
				<article class="project-card">
					<img src="assets/project-3.svg" alt="Capture du projet [PROJET]">
					<div class="project-body"><h3>[PROJET 3]</h3><p class="proj-desc">Description...</p></div>
				</article>
				<article class="project-card">
					<img src="assets/project-4.svg" alt="Capture du projet [PROJET]">
					<div class="project-body"><h3>[PROJET 4]</h3><p class="proj-desc">Description...</p></div>
				</article>
			</div>
		</section>

		<section id="experience" class="experience reveal">
			<h2>Stages & Expériences</h2>
			<div class="timeline">
				<div class="timeline-item">
					<time>MM/YYYY — MM/YYYY</time>
					<h3>[ENTREPRISE]</h3>
					<p><strong>Poste :</strong> [POSTE]</p>
					<p><strong>Missions :</strong> [MISSIONS]</p>
				</div>
			</div>
		</section>

		<section id="veille" class="veille reveal">
			<h2>Veille technologique</h2>
			<article class="veille-item">
				<h3>[SUJET DE VEILLE]</h3>
				<p><strong>Problématique :</strong> [PROBLÉMATIQUE]</p>
				<p><strong>Sources :</strong> [SOURCES]</p>
				<p><strong>Résumé :</strong> [RÉSUMÉ]</p>
				<p class="muted">Date : [DATE]</p>
			</article>
		</section>

		<section id="e4" class="e4 reveal">
			<h2>Épreuve E4</h2>
			<div class="cards-grid">
				<article class="card">
					<h3>Situation professionnelle</h3>
					<p><strong>Contexte :</strong> [CONTEXTE]</p>
					<p><strong>Technologies :</strong> [TECH]</p>
					<p><strong>Résultats :</strong> [RÉSULTATS]</p>
				</article>
			</div>
		</section>

		<section id="e5" class="e5 reveal">
			<h2>Épreuve E5</h2>
			<div class="cards-grid">
				<article class="card">
					<h3>Projet</h3>
					<p><strong>Contexte :</strong> [CONTEXTE]</p>
					<p><strong>Technologies :</strong> [TECH]</p>
					<p><strong>Tests & Résultats :</strong> [TESTS]</p>
				</article>
			</div>
		</section>

		<section id="documents" class="documents reveal">
			<h2>Documents</h2>
			<ul>
				<li><a href="assets/CV-[PRENOM]-[NOM].pdf" download>CV (PDF)</a></li>
				<li><a href="#">Tableau de synthèse E4</a></li>
				<li><a href="#">Comptes rendus de stage</a></li>
			</ul>
		</section>

		<section id="contact" class="contact reveal">
			<h2>Contact</h2>
			<form id="contact-form" novalidate>
				<label for="name">Nom</label>
				<input id="name" name="name" type="text" placeholder="Votre nom" required>

				<label for="email">Email</label>
				<input id="email" name="email" type="email" placeholder="votre@email.com" required>

				<label for="message">Message</label>
				<textarea id="message" name="message" rows="6" placeholder="Votre message" required></textarea>

				<button type="submit" class="btn primary">Envoyer</button>
			</form>
			<div class="contact-info">
				<p>Email : <a href="mailto:contact@[DOMAIN]">contact@[DOMAIN]</a></p>
				<p>GitHub / LinkedIn : <a href="#">Voir profils</a></p>
			</div>
		</section>
	</main>

	<footer class="site-footer">
		<p>[PRÉNOM NOM] — BTS SIO [SISR/SLAM] — 2026</p>
		<p><a href="#">GitHub</a> • <a href="#">LinkedIn</a></p>
	</footer>
</body>
</html>

