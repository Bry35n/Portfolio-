<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link href="CSS/index.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/105c9e7bab.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
        <title>Mon Portfolio</title>
    </head>
    <body>
        <div id="menu">
            <header>
                <div>
                    <a id="accueil" href="index.html#first_page">accueil</a>
                </div>
                <nav>
                    <a class="lien" href="index.html#competences">compétences</a>
                    <a class="lien" href="index.html#portfolio">portfolio</a>
                    <a class="lien" href="index.html#contact">contact</a>
                </nav>
            </header>
        </div>
        <div id="first_page">
            <section>
                <h1>Développeur Front End</h1>
                <p>
                    Unde Rufinus ea tempestate praefectus praetorio ad discrimen trusus est ultimum. ire enim ipse compellebatur ad militem, quem exagitabat inopia simul et feritas, et alioqui coalito more in ordinarias dignitates asperum semper et saevum, ut satisfaceret atque monstraret, quam ob causam annonae convectio sit impedita.
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
                    <img src="IMG/tp%20cv.PNG"/>
                    <p>Cette maquette à été réalisée dans le cadre d'un tp de cours, il s'agit d'un site CV le but était evidemment de reproduire la maquette au maximum. Il s'agit ma première réalisation en html/css</p>
                </div>
                <div class="projet">
                    <img src="IMG/Tp%20Final.PNG"/>
                    <p>Ceci est ma deuxieme réalisation, aussi issu dans le cadre de ma formation, nous devions ici aussi reproduire la maquette au maximum</p>
                </div>
            </div>
        </div>
<!----------------------------------------------CONTACT QUATRIEME PAGE---------------------------------------------->
        <div id="contact">
            <h1 class="titre">Me contacter</h1>
            <form>
                <div id="nom_mail">
                    <label for="Nom"><input type="text" class="input" name="nom" placeholder="   Nom" /></label>
                    <label for="Email"><input type="email" id="email" name="Email" placeholder="   Email" /></label>
                </div>
                <div id="objet_message">
                    <label for="objet"><input type="text" id="objet" name="objet" placeholder="   Objet" /></label>
                    <label for="message"><textarea type="text" id="message" name="message" placeholder="   Message"></textarea></label>
                    <input id="envoyer" type="submit" value="Envoyer" name="envoi" />
                </div>
            </form>
            <div id="join_me">
                <p>Je suis aussi joignable via :<p>
                <a target="blank" href="https://www.linkedin.com/in/bryan-chaupitre-380678199/"><i class="fab fa-linkedin fa-2x"></i></a>
            </div>
            <footer>
                <p>©2019 copyright</p><p>designed by<span>&nbsp;CHAUPITRE BRYAN</span></p>
            </footer>
        </div>
    </body>
</html>
