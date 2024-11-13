<h2>
	<?php if (!array_key_exists("createHtmlString", $_GET)) {?><span class="mobile"><?=$appname?> - </span><?php }?>Paramètres
</h2>

L'application permet les paramètres suivants :
<?PHP
if (isAugendiagnose ()) {
	?>
<h3>Paramètres d'entrée</h3>

<table width="100%" border="1">
	<tr>
		<td width="30%" valign="top">Dossier d'entrée pour les nouvelles photos oculaires</td>
		<td width="70%" valign="top">
			<p>C'est le dossier à partir duquel l'application importe de nouvelles photos oculaires. Par défaut, il s'agit soit
				du dossier cible de l'application Eye-Fi, soit du dossier standard de l'application Appareil photo. Cependant, vous
				pouvez configurer ici tout autre dossier.</p>

			<p>Contexte concernant l'application Eye-Fi : généralement, l'appareil photo du dispositif mobile n'est pas suffisant
				pour capturer des photos oculaires de haute qualité. Une approche plus pratique consiste à utiliser un appareil
				photo externe avec une carte SD Eye-Fi, qui transfère les photos via WLAN vers le dispositif mobile.</p>
		</td>
	</tr>
	<tr>
		<td width="30%" valign="top">La dernière photo est l'œil droit</td>
		<td width="70%" valign="top">Ici, vous pouvez définir si la dernière photo est l'œil droit ou l'œil gauche. Par
			défaut, c'est l'œil gauche (ce qui signifie que vous avez d'abord pris une photo de l'œil droit puis de l'œil
			gauche).</td>
	</tr>
</table>
<?PHP
}
?>

<h3>Paramètres d'affichage</h3>

<table width="100%" border="1">
	<tr>
		<td width="30%" valign="top">Trier par nom de famille</td>
		<td width="70%" valign="top">Ici, vous pouvez décider que les noms ne sont pas ordonnés strictement par ordre
			alphabétique tel que donné, mais par le nom de famille.</td>
	</tr>
	<tr>
		<td width="30%" valign="top">Configuration guidée de la position de l'iris et de la pupille</td>
		<td width="70%" valign="top">Ici, vous pouvez décider si vous êtes guidé pour définir la position de l'iris et de la
			pupille avant de pouvoir afficher les superpositions.</td>
	</tr>
	<tr>
		<td width="30%" valign="top">Couleur par défaut des superpositions</td>
		<td width="70%" valign="top">Ici, vous pouvez définir la couleur par défaut pour les superpositions de topographie de
			l'iris. (Standard : rouge)</td>
	</tr>
	<tr>
		<td width="30%" valign="top">Langue</td>
		<td width="70%" valign="top">Ici, vous pouvez changer la langue dans laquelle l'application est affichée. Un
			changement de valeur force un redémarrage de l'application.</td>
	</tr>
	<tr>
		<td width="30%" valign="top">Afficher tous les conseils</td>
		<td width="70%" valign="top">Ici, vous pouvez réactiver tous les conseils.</td>
	</tr>
	<tr>
		<td width="30%" valign="top">Ne pas afficher les conseils</td>
		<td width="70%" valign="top">Ici, vous pouvez désactiver tous les conseils existants (ce qui est utile après une
			nouvelle installation si vous connaissez déjà l'application).</td>
	</tr>
</table>

<h3>Paramètres de stockage et de mémoire</h3>

<table width="100%" border="1">
	<tr>
		<td width="30%" valign="top">Dossier des photos oculaires</td>
		<td width="70%" valign="top"><p>C'est le dossier dans lequel l'application gère les photos oculaires. Normalement,
				vous n'avez pas besoin de changer cela. À partir de là, vous pouvez copier les photos vers d'autres appareils.</p>

			<p>Le dossier prédéfini est «EyePhotos».</p>

			<p>Vous pouvez sélectionner ici un dossier soit sur la mémoire de votre appareil, soit sur une carte SD. Sous
				Android 4.4 (Kitkat), le stockage sur carte SD a certaines limitations, donc certaines opérations prendront plus de
				temps. Sous Android 5, lors de la sélection d'un dossier sur carte SD, vous devrez accorder des droits d'accès à la
				carte SD via le Framework d'accès au stockage d'Android.</p></td>
	</tr>
	<tr>
		<td width="30%" valign="top">Taille maximale du bitmap</td>
		<td width="70%" valign="top">C'est la taille à laquelle les photos sont réduites avant l'affichage. Cette réduction
			est nécessaire pour économiser la mémoire de l'appareil. La valeur par défaut est 2048. Sur les appareils avec peu de
			mémoire, il peut être nécessaire de configurer une valeur plus petite (comme 1024). Des valeurs trop grandes peuvent
			faire planter l'application.</td>
	</tr>
	<tr>
		<td width="30%" valign="top">Afficher l'image en pleine résolution</td>
		<td width="70%" valign="top">Ici, vous pouvez décider dans quelles circonstances la photo est affichée en pleine
			résolution, ce qui permet de voir plus de détails sur la photo, mais consomme de la mémoire et du temps de calcul.

			<ul>
				<li><b>Toujours charger automatiquement :</b> L'application stocke toujours les photos en pleine résolution en
					mémoire. Cela offre la meilleure expérience utilisateur sur les appareils haut de gamme, mais peut entraîner des
					plantages s'il n'y a pas assez de mémoire disponible.</li>

				<li><b>Charger automatiquement lors de l'affichage d'une seule photo :</b> L'application affiche la pleine
					résolution uniquement lors de l'affichage d'une seule image. Cela nécessite la moitié de la mémoire.</li>

				<li><b>Charger uniquement à la demande :</b> L'application n'affiche pas l'image en pleine résolution. Cela
					nécessite le moins de mémoire et de CPU, mais des détails de la photo peuvent être perdus. Le bouton «loupe» <img
					src="<?=$basepath?>/drawable/ic_clarity.png" /> permet d'afficher le détail actuel de l'image en pleine résolution.</li>
			</ul>
		</td>
	</tr>
	<tr>
		<td width="30%" valign="top">Enregistrer des données supplémentaires dans le JPEG</td>
		<td width="70%" valign="top">Ici, vous pouvez limiter le stockage de données dans les fichiers JPG par l'application.

			<ul>
				<li><b>Stocker dans EXIF (recommandé) :</b> L'application stocke les informations pertinentes dans le fichier JPG,
					même dans les champs standard qui sont visibles sous Windows.</li>

				<li><b>Stocker dans des champs personnalisés :</b> L'application stocke les informations dans le fichier JPG, mais
					uniquement dans des champs séparés. Les champs standard restent inchangés ; l'échange de données avec Windows n'est
					pas possible.</li>

				<li><b>Ne pas stocker de données dans les images :</b> L'application ne stocke pas d'informations dans les fichiers
					JPG. (Cela limite les fonctionnalités de l'application.)</li>
			</ul>
		</td>
	</tr>
	<tr>
		<td width="30%" valign="top">Détection automatique de l'iris</td>
		<td width="70%" valign="top">Ici, vous pouvez sélectionner si l'application doit automatiquement essayer de trouver la
			position de l'iris et de la pupille dans les photos oculaires. Cela simplifiera généralement le positionnement des
			superpositions, mais cela nécessite de nombreuses ressources du téléphone, et le résultat peut être incorrect.</td>
	</tr>
</table>

<h3>Paramètres de la caméra</h3>

<table width="100%" border="1">
<?PHP
if (isMiniris ()) {
	?>
		<tr>
		<td width="30%" valign="top">Commencer avec l'œil gauche</td>
		<td width="70%" valign="top">Ici, vous pouvez définir quel œil doit être photographié en premier. Par défaut, c'est
			l'œil droit.</td>
	</tr>
<?PHP
}
?>
		<tr>
		<td width="30%" valign="top">Compatibilité de la caméra</td>
		<td width="70%" valign="top">Si votre appareil fonctionne sous Android 5 ou supérieur, vous pouvez ici sélectionner si
			la fonctionnalité de la caméra doit utiliser les nouvelles fonctionnalités d'Android 5 ou non. La sélection de
			«Android 4» a du sens en cas de problèmes de compatibilité avec Android 5.</td>
	</tr>
	<tr>
		<td width="30%" valign="top">Activer le flash</td>
		<td width="70%" valign="top">Ici, vous pouvez activer la fonctionnalité de la lampe torche. Par défaut, elle est
			désactivée, car il est dangereux d'utiliser la lampe torche près de l'œil.</td>
	</tr>
	<tr>
		<td width="30%" valign="top">Activer le flash LED externe</td>
		<td width="70%" valign="top">Ici, vous pouvez définir si l'utilisation d'un «Flash & Fill-in Light» branché dans la
			prise casque doit être prise en charge.</td>
	</tr>
	<tr>
		<td width="30%" valign="top">Utiliser la caméra frontale</td>
		<td width="70%" valign="top">Ici, vous pouvez spécifier d'utiliser la caméra frontale pour prendre des photos. Par
			défaut, la caméra arrière est utilisée.</td>
	</tr>
	<tr>
		<td width="30%" valign="top">Afficher le lien vers l'application Appareil photo</td>
		<td width="70%" valign="top">Ici, vous pouvez spécifier si le bouton pour prendre des photos avec l'application caméra
			du système doit être affiché.</td>
	</tr>
	<tr>
		<td width="30%" valign="top">Position de l'écran de la caméra</td>
		<td width="70%" valign="top">Si le ruban Miniris cache certains boutons sur l'écran de la caméra, vous pouvez utiliser
			ce paramètre pour déplacer l'écran de la caméra vers la droite ou la gauche.</td>
	</tr>
</table>

<h3>Configuration des boutons de superposition</h3>

<p>Cette page vous permet de définir quelles superpositions de topographie de l'iris peuvent être affichées en appuyant
	sur les boutons de superposition. Le même réglage peut également être effectué lors de l'affichage des photos, en
	effectuant un appui long sur un bouton de superposition.</p>

<h3>Packs Premium / Support</h3>

<p>Cette page offre la possibilité d'acheter un pack premium qui vous donne un accès illimité à toutes les fonctions de
	l'application.</p>

<p>De plus, il y a les fonctionnalités suivantes :</p>

<table width="100%" border="1">
<?PHP
if (isAugendiagnose ()) {
	?>
		<tr>
		<td width="30%" valign="top">Supprimer les publicités (uniquement pour les utilisateurs des anciennes versions)</td>
		<td width="70%" valign="top">Ici, vous pouvez désactiver toutes les publicités (actuellement uniquement aux
			États-Unis). Cette fonctionnalité peut être activée via un don ou via une clé utilisateur.</td>
	</tr>
<?PHP
}
?>
		<tr>
		<td width="30%" valign="top">Contacter le développeur</td>
		<td width="70%" valign="top">Ici, vous pouvez envoyer un e-mail au développeur en cas de souhaits ou de problèmes.</td>
	</tr>
	<tr>
		<td width="30%" valign="top">Clé utilisateur</td>
		<td width="70%" valign="top">Une clé utilisateur qui permet de débloquer des fonctionnalités supplémentaires.</td>
	</tr>
</table>
