<h2><?=$appname?> - Vue d'ensemble</h2>

<?PHP
if (isAugendiagnose ()) {
	?>
    
    Cette application a pour but de soutenir la visualisation de photographies oculaires sur un appareil Android, afin de réaliser un diagnostic médical.

<h3>Fonctionnalités principales</h3>

<ul>
	<li>Organisation des photos oculaires par nom, date et côté (droit/gauche)</li>

	<li>Affichage de deux photos oculaires en parallèle (avec prise en charge complète du redimensionnement individuel),
		afin de permettre des comparaisons (telles que comparaison droite-gauche, comparaison avant-après, comparaison de
		personnes différentes ou comparaison avec une topographie de l'iris).</li>

	<li>Modification de la luminosité et du contraste de la photo pendant l'affichage, et superposition avec une
		topographie de l'iris.</li>

	<li>Vous pouvez également enregistrer des informations dans les photos, telles que les adaptations de luminosité et les
		commentaires. Pour pouvoir stocker des informations et utiliser toutes les fonctionnalités de l'application, vous avez
		besoin de photos au format JPG.</li>

</ul>

<h3>Activités principales</h3>

<h4>Étape 1: Organiser les photos.</h4>

<p>Dans cette étape, vous pouvez organiser les photos oculaires.</p>

<p>L'application attend de nouvelles photos oculaires dans un dossier d'entrée. Ce dossier est préconfiguré comme
	dossier cible de l'application Eye-Fi ou comme dossier par défaut de la caméra, mais peut être modifié via les
	paramètres.</p>

<p>Dans l'activité «Organiser de nouvelles photos», vous pouvez attribuer de nouvelles photos oculaires du dossier
	d'entrée à une personne et à une date, et les préparer ainsi pour l'application. Ensuite, les photos seront renommées
	et déplacées vers le dossier des photos oculaires.</p>

<p>
	Comme autre alternative, vous pouvez prendre des photos directement depuis l'application avec la caméra de l'appareil.
	Cela ne donnera normalement pas des photos de qualité adéquate, mais cela sert d'alternative à une caméra
	professionnelle, en particulier si vous utilisez une lentille macro telle que le
	<a href="https://sites.google.com/view/irisocamera/home/francais/miniris-fr" target="_blank">Miniris-2</a>
	ou
	<a href="https://sites.google.com/view/irisocamera/home/francais/iricell-fr" target="_blank">Iricell</a>
	.
</p>

<p>Comme troisième alternative,</p>

<h4>Étape 2: Afficher les photos.</h4>

<p>C'est l'objectif principal de l'application, mais cela nécessite que les photos soient organisées via l'étape 1.</p>

<p>Dans cette activité, vous pouvez</p>

<ul>
	<li>Afficher l'une des photos en détail. Ici, vous pouvez également modifier la luminosité et le contraste de la photo,
		afficher des topographies de l'iris en superposition ou écrire un commentaire sur une photo.</li>

	<li>Afficher deux photos pour comparaison (et les zoomer indépendamment).</li>
</ul>

<h3>Période d'essai / Achats intégrés</h3>

<p>L'application permet une utilisation gratuite uniquement pendant une période d'essai de deux semaines. Une
	utilisation ultérieure nécessite l'achat unique d'un package intégré.</p>

<h3>Application Windows</h3>

<p>
	Il existe une application Windows complémentaire qui peut être utilisée pour visualiser les photos qui ont été
	organisées avec cette application. Pour plus d'informations, voir
	<a href="https://augendiagnose-app.de/fr/windowsapp/">https://augendiagnose-app.de/fr/windowsapp/</a>
	.
</p>

<h3>Stockage des données</h3>

<p>L'application stocke des informations (comme la position de l'iris ou les commentaires) directement dans les fichiers
	image JPG. Cela a l'avantage que toutes ces informations sont toujours disponibles si vous copiez les images d'un
	appareil à un autre. Dans une certaine mesure, des informations comme les commentaires seront même disponibles lors de
	la visualisation des fichiers sous MS Windows.</p>

<p>Toutefois, ce type de stockage comporte un petit risque. Il peut arriver que sur certains appareils, ou pour des
	images provenant de certains appareils photo, le stockage d'informations dans le JPG échoue, ou puisse même détruire le
	fichier JPG. Par conséquent, il est recommandé de conserver des sauvegardes de vos fichiers JPG au moins lors de
	l'utilisation de l'application pour la première fois avec un nouvel appareil ou avec un nouvel appareil photo.</p>

<?PHP
}
else {
	?>

<p>
	Cette application a pour but de soutenir la capture et la visualisation de photographies de l'iris sur un appareil
	Android, afin de réaliser un diagnostic médical de l'iris. Elle est optimisée pour une utilisation avec l'accessoire
	<a href="https://sites.google.com/view/irisocamera/home/francais/miniris-fr" target="_blank">Miniris-2</a>
	ou
	<a href="https://sites.google.com/view/irisocamera/home/francais/iricell-fr" target="_blank">Iricell</a>
	.
</p>

<h3>Fonctionnalités principales</h3>

<p>Les fonctionnalités principales de l'application sont</p>

<ul>
	<li>La capture de photos de l'iris en utilisant la caméra du téléphone (par exemple avec l'aide de l'accessoire
		Miniris-2).</li>
	<li>L'organisation des photos de l'iris par nom, date et côté (droit/gauche).</li>
	<li>L'affichage de deux photos de l'iris en parallèle (avec prise en charge complète du redimensionnement individuel).</li>
	<li>La modification de la luminosité et du contraste de la photo pendant l'affichage, la superposition avec une
		topographie de l'iris, et la sauvegarde des commentaires.</li>
</ul>

<p>L'application stocke les données (telles que la position du centre de l'œil) en tant que métadonnées dans les
	fichiers JPG. Cela permet de transférer les données stockées entre différents appareils en copiant simplement les
	photos.</p>

<h3>Utilisation de la caméra</h3>

<p>En ouvrant la caméra, vous voyez les zones suivantes :</p>

<ul>
	<li>Sur le côté droit au milieu, il y a le bouton pour capturer la photo. Après avoir capturé une photo, vous pouvez
		décider si vous voulez conserver la photo ou si vous voulez la rejeter et réessayer.</li>
	<li>En dessous, il y a un bouton qui permet de prendre la photo avec l'application caméra du système. Cela peut être
		utile dans le cas d'appareils avec des fonctionnalités spéciales de la caméra, comme la double lentille.</li>
	<li>Dans les coins en haut de l'écran, il y a l'affichage des photos de l'œil droit et gauche. Le marquage rouge
		indique quel œil est prévu pour la prochaine photo. En appuyant sur l'une de ces zones, vous pouvez changer le côté.</li>
	<li>Sur l'affichage de la caméra, il y a un grand cercle. Ce cercle indique l'endroit où l'iris doit apparaître sur la
		photo.</li>
	<li>En bas à gauche, il y a un bouton avec un cercle et le texte «zoom». Ici, vous pouvez régler le zoom de la caméra
		et sélectionner la taille de l'iris sur la photo.</li>
	<li>Au-dessus, il y a un bouton avec le texte «MACRO» ou «AUTO». Ici, vous pouvez sélectionner le mode de mise au
		point de la caméra. Pour les gros plans, le mode MACRO est normalement un bon choix.</li>
	<li>Au-dessus, il y a un bouton de lampe torche. Ici, vous pouvez allumer la lumière de votre appareil. Comme une lampe
		torche devant votre œil est dangereuse, cela est désactivé par défaut, mais vous pouvez l'activer dans les paramètres.
		Vous pouvez également utiliser une LED «Flash & Fill-in Light» branchée sur la prise casque.</li>
</ul>

<p>Après avoir pris des photos des deux yeux, vous êtes dirigé vers une page où vous pouvez examiner les deux photos, et
	où vous devez entrer le nom de la personne à qui ces photos doivent être attribuées. Ici, vous pouvez également changer
	la date des photos ; pour chaque personne et chaque date, une seule paire de photos peut être stockée.</p>

<p>Si vous arrêtez l'application après avoir pris une ou deux photos des yeux, mais avant d'avoir attribué un nom, alors
	le prochain démarrage de l'application continuera là où vous vous êtes arrêté ; les photos que vous avez prises seront
	conservées jusqu'à ce que vous décidiez de les supprimer ou de les écraser.</p>

<h3>Période d'essai / Achats intégrés</h3>

<p>L'application permet une utilisation gratuite uniquement pendant une période d'essai de deux semaines. Une
	utilisation ultérieure nécessite l'achat unique d'un package intégré.</p>

<h3>Application Windows</h3>

<p>
	Il existe une application Windows complémentaire qui peut être utilisée pour visualiser les photos qui ont été
	organisées avec cette application. Pour plus d'informations, voir
	<a href="https://augendiagnose-app.de/miniris/fr/windowsapp/">https://augendiagnose-app.de/miniris/fr/windowsapp/</a>
	.
</p>

<?PHP
}
?>

<a name="privacy"></a>
<h3>Politique de confidentialité</h3>

<p>
    L'application «<?=$appname?>» utilise la caméra pour prendre des photos des yeux. L'application ne stocke, ne collecte ni n'envoie aucune donnée personnelle de quelque nature que ce soit. Toutes les photos prises par l'application sont stockées uniquement localement sur votre appareil.
</p>

<p>
	L'application utilise également Google Analytics pour collecter des informations statistiques sur les erreurs de
	l'application et son utilisation. Cela a pour but d'obtenir des informations pour de futures améliorations de
	l'application. Consultez la
	<a href="https://support.google.com/analytics/answer/6004245?hl=fr" target="_blank">Politique de confidentialité de
		Google Analytics</a>
	pour plus de détails.
</p>
