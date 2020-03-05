<!DOCTYPE html>
<html>
    <head>
        <script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="987dede5-b4e5-458a-82c3-c5b5ac437c9f" data-blockingmode="auto" type="text/javascript"></script>
        <meta charset="utf-8"/>
        <link href="CSS/index.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/105c9e7bab.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mon Portfolio</title>
    </head>
    <body>
        <nav>
		<div class="logo">
			<a href="index.php#first_page">Accueil</a>
		</div>
		<ul class="nav-links">
			<li><a href="index.php#competences">Compétences</a></li>
			<li><a href="index.php#portfolio">Portfolio</a></li>
			<li><a href="index.php#contact">Contact</a></li>
		</ul>
		<div class="burger">
			<div class="line1"></div>
			<div class="line2"></div>
			<div class="line3"></div>
		</div>
	</nav>
	<script type="text/javascript">
		const navSlide = () => {
			const burger = document.querySelector('.burger');
			const nav = document.querySelector('.nav-links');
			const navLinks = document.querySelectorAll('.nav-links li')
			
			burger.addEventListener('click',()=>{

				//toggle nav
				nav.classList.toggle('nav-active');

			//Animate Links
			navLinks.forEach((link, index) => {
				if(link.style.animation) {
					link.style.animation = '';
				} else {
					link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 +0.5}s`;
				}
			});
		});
	}

		navSlide();
	</script>
        <div id="first_page">
            <section>
                <h1>Développeur Front End</h1>
                <p>
                    Hello World ! <br /><br /> Je suis étudiant au Campus Academy de Bruz, en Bachelor Informatique, c'est ma première année, j'aimerai me spécialiser dans le développement web Front-End. <br /><br />Actuellement je recherche un stage pour une période de 2 à 4 mois, je serai disponible à partir du 13 Mai. Ensuite j'aimerais effectuer 2 ans d'alternance, jusqu'à la fin de mon Bachelor.<br /><br /> Si vous souhaitez en connaître plus sur moi, n'hésitez pas à télécharger mon cv, ou à me contacter via le Formulaire.
                </p>
                <i class="fas fa-download"></i>
                <a href="CV.PDF">telecharger mon cv</a>
            </section>
        </div>
        <div class="footer_page"></div>
<!----------------------------------------------COMPETENCES SECONDE PAGE---------------------------------------------->
        <div id="competences">
            <h1 class="titre">Compétences</h1>
            <div id="banner"></div>
            <section>
                <article>
                    <i class="fas fa-code fa-3x"></i>
                    <h2>langages</h2>
                    <div class="back_competences">
                        <p>html</p>
                        <p>css</p>
                        <p>python</p>
                        <p>php</p>
                    </div>
                </article>
                <article>
                    <i class="fas fa-laptop-code fa-3x"></i>
                    <h2>logiciels</h2>
                    <div class="back_competences">
                        <p>virtualbox</p>
                        <p>office 365</p>
                        <p>figma</p>
                    </div>
                </article>
                <article>
                    <i class="fab fa-windows fa-3x"></i>
                    <h2>os</h2>
                    <div class="back_competences">
                        <p>windows</p>
                        <p>linux</p>
                    </div>
                </article>
            </section>
        </div>
        <div class="footer_page"></div>
<!----------------------------------------------PORTFOLIO TROISIEME PAGE---------------------------------------------->
        <div id="portfolio">
            <h1 class="titre">Portfolio</h1>
            <div id="containeur">
                <div class="projet">
                    <img src="IMG/tp%20cv.PNG" alt="intégration maquette cv" />
                    <article>
                        <p>Cette maquette à été réalisée dans le cadre d'un tp de cours, il s'agit d'un site CV le but était evidemment de reproduire la maquette au maximum. Il s'agit ma première réalisation en html/css</p>
                        <div class="boutons">
                            <a href="https://github.com/Bry35n/CV-Maquette" target="_blank">Voir</a>
                            <a href="avis.php?id=1">Avis</a>
                        </div>
                    </article>
                </div>
                <div class="projet">
                    <img src="IMG/Tp%20Final.PNG" alt="intégration maquette"/>
                    <article>
                        <p>Ceci est ma deuxieme réalisation, aussi issu dans le cadre de ma formation, nous devions ici aussi reproduire la maquette au maximum</p>
                        <div class="boutons">
                            <a href="https://github.com/Bry35n/Tp-de-cours" target="_blank">Voir</a>
                            <a href="avis.php?id=2">Avis</a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
<!----------------------------------------------CONTACT QUATRIEME PAGE---------------------------------------------->
        <div id="contact">
            <h1 class="titre">Me contacter</h1>
                <?php
                $action=$_REQUEST['action'];
                if ($action=="")    /* display the contact form */
                    {
                    ?>
                    <form  action="" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="action" value="submit">
                    <input name="Nom" type="text" class="input" placeholder="Nom"/><br>
                    <input name="email" type="text" class="input" placeholder="Email"/><br>
                    <textarea name="message" id="message" placeholder="Votre message"></textarea><br>
                    <input type="submit" value="Envoyer" id="envoyer"/>
                    </form>
                    <?php
                    } 
                else                /* send the submitted data */
                    {
                    $name=$_REQUEST['Nom'];
                    $email=$_REQUEST['email'];
                    $message=$_REQUEST['message'];
                    if (($name=="")||($email=="")||($message==""))
                        {
                        echo "Tous les champs doivent être rempli, veuillez remplir le <a href='index.php#contact'>formulaire</a> à nouveau.";
                        }
                    else{		
                        $from="From: $name<$email>\r\nReturn-path: $email";
                        $subject="Message envoyé depuis le formulaire de contact du site CV";
                        mail("bry35n@gmail.com", $subject, $message, $from);
                        echo "Email envoyé !";
                        header("Refresh:0");
                        }
                    }
                ?>
            <div id="join_me">
                <p>Je suis aussi joignable via :<p>
                <a target="blank" href="https://www.linkedin.com/in/bryan-chaupitre-380678199/"><i class="fab fa-linkedin fa-2x"></i></a>
            </div>
        </div>
<!-------------------------------------------------------------FOOTER---------------------------------------------------------------------->
        <footer>
            <a href="mentions_l%C3%A9gales.html">Mentions légales</a><p>©2019 copyright</p><p>designed by<span>&nbsp;CHAUPITRE BRYAN</span></p>
        </footer>
    </body>
</html>
