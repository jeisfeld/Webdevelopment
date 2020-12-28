<h2>Ver fotos</h2>

<p>Aquí se puede seleccionar el nombre de una persona cuyas fotos oculares se quiere ver. Luego la aplicación mostrará
	todas las fotos de ojo de esta persona en una lista ordenada por fecha.</p>

<p>A continuación, usted tiene las siguientes posibilidades:</p>

<ul>
	<li>Mostrar una de las fotos en detalle (haciendo clic en una foto).</li>

	<li>Mostrar los dos fotos de una fecha (haciendo clic en una fecha).</li>

	<li>Mostrar dos fotos de diferentes fechas (haciendo largo clic en una foto y después clic en una segunda foto).</li>

	<li>Mostrar dos fotos de diferentes personas: seleccione una foto de esta persona (mediante pulsación larga) y luego
		seleccione una foto de una persona diferente.</li>
</ul>

<p>Tenga en cuenta que los gráficos de la topografía del iris pueden organizarse como fotos oculares - Esto permite
	comparar las fotos de los ojos con los gráficos de la topografía del iris. Tal gráficos no están incluidos en la
	aplicación (excepto de superposiciónes).</p>

<h3>Otras opciones en la vista general</h3>

<ul>
	<li>Al hacer una pulsación larga en un nombre en la lista de nombres, es posible que cambiar o eliminar el nombre</li>

	<li>Al hacer una pulsación larga en una fecha en la lista de fotos para una nombre, usted puede cambiar la fecha o
			eliminar las imágenes de esa fecha, o puede 
			<?PHP if(isMiniris()) { ?>
			trasladar estas fotos a un diferente nombre.
			<?PHP } else { ?>
			mover estas fotos a la carpeta de entrada (por ejemplo, con el fin de trasladarlos a un diferente nombre).
			<?PHP } ?>
		</li>
</ul>

<h3>Otras opciones en la vista de detalle</h3>

<p>En la vista de detalle (una o dos fotos), tiene las siguientes más posibilidades:</p>

<ul>
	<li>Cambio de brillo y contraste mediante correderas <img src="<?=$basepath?>/drawable/ic_seek_brightness.png" /><img
		src="<?=$basepath?>/drawable/ic_seek_contrast.png" />, así como el cambio de saturación <img
		src="<?=$basepath?>/drawable/ic_seek_saturation.png" /> y temperatura de color <img
		src="<?=$basepath?>/drawable/ic_seek_color_temperature.png" /></li>

	<li>Rotación de la foto (botón <img src="<?=$basepath?>/drawable/ic_btn_rotate.png" class="frameless" />)
	</li>

	<li>
		<p>
			Visualización de una topografía de iris como superposición (botón círculo <img src="<?=$basepath?>/drawable/ic_btn_wheel.png"
				class="frameless" /> y botones numerados), adaptación de la superposición al iris y almacenamiento de la posición de
			superposición (botón de cerradura <img src="<?=$basepath?>/drawable/ic_lock_open.png" />)
		</p>
		<p>Al hacer una pulsación larga en uno de los botones numerados, puede cambiar la superposición para este botón. Por
			el último botón numerado, esto le permite también eliminar el botón o añadir otro botón.</p>
	</li>

	<li>Adaptación del tamaño de la pupila de las superposiciones (botón <img src="<?=$basepath?>/drawable/ic_btn_pupil_0.png"
		class="frameless" />). Aquí usted puede mantener la pupila centrada (<img src="<?=$basepath?>/drawable/ic_btn_pupil_1.png"
		class="frameless" />) o moverla libremente (<img src="<?=$basepath?>/drawable/ic_btn_pupil_2.png" class="frameless" />).
	</li>

	<li>Guardar los ajustes seleccionados de brillo y contraste (por medio del botón &laquo;guardar&raquo; <img
		src="<?=$basepath?>/drawable/ic_action_save.png" /> en la barra de acciones)
	</li>

	<li>Guardar la posición y zoom (por medio del botón &laquo;guardar&raquo; <img src="<?=$basepath?>/drawable/ic_action_save.png" />
		en la barra de acciones)
	</li>

	<li>Compartir la foto (por medio del botón &laquo;compartir&raquo; <img src="<?=$basepath?>/drawable/ic_action_share.png" /> en la
		barra de acciones)
	</li>

	<li>Cambiar el comentario de la foto (por medio del botón &laquo;documento&raquo; <img src="<?=$basepath?>/drawable/ic_comment.png" />
		en la barra de acciones)
	</li>
</ul>

<p>
	Estas funciones pueden activarse o desactivarse mediante el botón &laquo;Mostrar/Ocultar herramientas&raquo; (<img
		src="<?=$basepath?>/drawable/ic_tools_up.png" /> <img src="<?=$basepath?>/drawable/ic_tools_down.png" /> <img
		src="<?=$basepath?>/drawable/ic_tools_left.png" /> <img src="<?=$basepath?>/drawable/ic_tools_right.png" />).
</p>
