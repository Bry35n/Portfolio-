<meta charset="utf-8" />
<?php
include 'log.php';
$bdd = new PDO($db,$id,$mdp);	//Connexion à la BDD

if(isset($_GET['id']) AND !empty($_GET['id'])) {		//On vérifie que la variable n'est $getid n'est pas vide
	
	$getid = htmlspecialchars($_GET['id']);

	$projet = $bdd->prepare('SELECT * FROM projets WHERE id = ?');		//Recherche dans tous les articles 
	$projet->execute(array($getid));											//Ici on récupère
	$projet = $projet->fetch();												//L'article

	if(isset($_POST['submit_com'])) {
		if(isset($_POST['nom'],$_POST['commentaire']) AND !empty($_POST['nom']) AND !empty($_POST['commentaire'])) {
			$nom = htmlspecialchars($_POST['nom']);
			$commentaire = htmlspecialchars($_POST['commentaire']);
			if(strlen($nom) < 25) {

				$ins = $bdd->prepare('INSERT INTO commentaires (commentaires_nom, commentaires_commentaire, id_projet) VALUES (?,?,?)');
				$ins->execute(array($nom,$commentaire,$getid));
				$y_n_msg = "<span style='color: green'>Votre message à bien été posté</span>";
			} else {
				$y_n_msg = "Erreur : Le nom doit faire moins de 25 caractères";
			}
		} else {
			$y_n_msg = "Erreur : Tous les champs doivent être rempli";
		}
	}
	$commentaires = $bdd->prepare('SELECT * FROM commentaires WHERE id_projet= ? ORDER BY id DESC');
	$commentaires->execute(array($getid));

?>

<h2>projet :</h2>
<p><?= $projet['projet_contenu'] ?></p>									<!--On affiche son contenu ici-->

<br />

<h2>Commentaires :</h2>
<form method="POST">
	<input type="text" name="nom" placeholder="nom"><br />
	<textarea name="commentaire" placeholder="Commentaire"></textarea><br />
	<input type="submit" value="Envoyer" name="submit_com" />
</form>
<?php if(isset($y_n_msg)) { echo $y_n_msg; } ?>
<br /><br />
<?php while($c = $commentaires->fetch()) { ?>
	<b><?= $c['commentaires_nom'] ?>:</b> <?= $c['commentaires_commentaire'] ?><br />
<?php } ?>

<?php
}
?>