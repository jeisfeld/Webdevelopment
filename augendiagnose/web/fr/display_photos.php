<h2>
	<span class="mobile"><?=$appname?> - </span>Afficher les photos
</h2>

<p>Ici, vous pouvez sélectionner le nom d'une personne dont vous souhaitez voir les photos oculaires. Ensuite, toutes
	les photos oculaires de cette personne vous sont présentées dans une liste triée par date.</p>

<p>Vous avez alors les possibilités suivantes :</p>

<ul>
	<li>Afficher une des photos en détail (en cliquant sur une photo).</li>

	<li>Afficher les deux photos d'une date (en cliquant sur une date).</li>

	<li>Afficher deux photos de dates différentes (en effectuant un appui long sur une photo puis en cliquant sur une
		seconde photo).</li>

	<li>Afficher deux photos de personnes différentes : Sélectionnez une photo de cette personne (en effectuant un appui
		long) puis sélectionnez une photo d'une autre personne.</li>
</ul>

<p>Notez que les graphiques de topographie de l'iris peuvent être organisés comme les photos oculaires ; cela permet de
	comparer les photos des yeux avec les graphiques de topographie de l'iris. De tels graphiques ne sont pas inclus dans
	l'application (sauf en tant que superpositions).</p>

<h3>Autres options dans l'aperçu</h3>

<ul>
	<li>En effectuant un appui long sur un nom dans la liste des noms, vous pouvez modifier ou supprimer le nom.</li>

	<li>En effectuant un appui long sur une date dans la liste des images pour un nom, vous pouvez changer la date ou supprimer les images de cette date, ou vous pouvez
        <?PHP if(isMiniris()) { ?>
        les déplacer vers un autre nom.
        <?PHP } else { ?>
        les déplacer vers le dossier d'entrée (par exemple pour les déplacer vers un autre nom).
        <?PHP } ?>
    </li>
</ul>

<h3>Autres options dans la vue détaillée</h3>

<p>Dans la vue détaillée (une ou deux photos), vous avez les possibilités supplémentaires suivantes :</p>

<ul>
	<li>Modifier la luminosité et le contraste via les curseurs <img src="<?=$basepath?>/drawable/ic_seek_brightness.png" /><img
		src="<?=$basepath?>/drawable/ic_seek_contrast.png" />, ainsi que la saturation <img
		src="<?=$basepath?>/drawable/ic_seek_saturation.png" /> et la température de couleur <img
		src="<?=$basepath?>/drawable/ic_seek_color_temperature.png" /></li>

	<li>Rotation de la photo (bouton <img src="<?=$basepath?>/drawable/ic_btn_rotate.png" class="frameless" />)
	</li>

	<li>
		<p>
			Affichage des topographies de l'iris en superposition (bouton circulaire <img
				src="<?=$basepath?>/drawable/ic_btn_wheel.png" class="frameless" /> et boutons numérotés), adaptation de la
			superposition à l'iris et stockage de la position de la superposition (bouton de verrouillage <img
				src="<?=$basepath?>/drawable/ic_lock_open.png" />)
		</p>
		<p>En effectuant un appui long sur l'un des boutons numérotés, vous pouvez changer la superposition pour ce bouton.
			Pour le dernier bouton numéroté, cela vous permet également de supprimer le bouton ou d'en ajouter un autre.</p>
	</li>

	<li>Définir la taille de la pupille pour les superpositions (bouton <img
		src="<?=$basepath?>/drawable/ic_btn_pupil_0.png" class="frameless" />). Ici, vous pouvez soit garder la pupille
		centrée (<img src="<?=$basepath?>/drawable/ic_btn_pupil_1.png" class="frameless" />), soit la déplacer librement (<img
		src="<?=$basepath?>/drawable/ic_btn_pupil_2.png" class="frameless" />).
	</li>

	<li>Enregistrer les réglages sélectionnés de luminosité et de contraste (via le bouton « enregistrer » <img
		src="<?=$basepath?>/drawable/ic_action_save.png" /> sur la barre d'action)
	</li>

	<li>Enregistrer la position et le zoom (via le bouton « enregistrer » <img
		src="<?=$basepath?>/drawable/ic_action_save.png" /> sur la barre d'action)
	</li>

	<li>Partager l'image (via le bouton « partager » <img src="<?=$basepath?>/drawable/ic_action_share.png" /> sur la barre
		d'action)
	</li>

	<li>Modifier le commentaire de la photo (via le bouton « document » <img src="<?=$basepath?>/drawable/ic_comment.png" />
		sur la barre d'action)
	</li>
</ul>

<p>
	Ces fonctionnalités peuvent être activées ou désactivées via le bouton « Afficher/Masquer les utilitaires » (<img
		src="<?=$basepath?>/drawable/ic_tools_up.png" /> <img src="<?=$basepath?>/drawable/ic_tools_down.png" /> <img
		src="<?=$basepath?>/drawable/ic_tools_left.png" /> <img src="<?=$basepath?>/drawable/ic_tools_right.png" />).
</p>
