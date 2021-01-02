<h2><span class="mobile">Imagen Aleatoria - </span>Ajustes</h2>

<h3>Ajustes de la aplicación</h3>

<p>
	Mientras está en la página de configuración principal, puede presionar el icono <img
		src="<?=$basepath?>/drawable/ic_action_settings.png" /> para ir a la página de configuración. Aquí encontrará las
	siguientes categorías de configuraciones:
</p>

<h4>Versión premium</h4>

<p>Puede comprar la aplicación &laquo;Imagen Aleatoria Pro&raquo; que permite el uso de más de tres listas de imágenes
	en la aplicación.</p>

<h4>Apoyo</h4>

<p>Aquí puede abrir esta página de ayuda o ponerse en contacto con el desarrollador por correo electrónico.</p>

<h4>
	<a name="randomImageView"></a>
	Vista de imagen aleatoria
</h4>

<ul>
	<li><b>Escalado de imagen:</b> Aquí puede definir cómo se deben escalar las imágenes.</li>
	<li><b>Color de fondo:</b> Aquí puede configurar el color de fondo que se mostrará.</li>
	<li><b>Comportamiento al lanzar:</b> Aquí puede especificar qué sucede al lanzar una imagen.
		<ul>
			<li><b>Siempre nueva imagen aleatoria:</b> Se selecciona aleatoriamente una nueva imagen</li>
			<li><b>Permitir retroceder una imagen:</b> Análoga, pero puede retroceder una imagen</li>
			<li><b>Permitir retroceder varias imágenes:</b> Análoga, pero puede retroceder varias imágenes</li>
			<li><b>Permitir retroceder, evitar repeticiones:</b> Análoga, pero al seleccionar la siguiente imagen aleatoria se
				evitan las repeticiones</li>
			<li><b>Mostrar todas las imágenes cíclicamente:</b> Todas las imágenes de la lista se muestran cíclicamente</li>
			<li><b>Sin cambios:</b> Lanzar no tiene efecto</li>
			<li><b>Cerrar pantalla:</b> Lanzar cierra la pantalla</li>
		</ul></li>
	<li><b>Frecuencia de cambio automático:</b> Aquí puede especificar si y con qué frecuencia la imagen debería cambiar
		automáticamente.</li>
	<li><b>Tocar en lugar de lanzar:</b> Aquí puede seleccionar si la imagen se puede cambiar con un solo toque en lugar de
		lanzar.</li>
	<li><b>Prevenir el tempo de espera de la pantalla:</b> Aquí puede seleccionar si se debe evitar el tiempo de espera de
		la pantalla al mostrar imágenes.</li>
</ul>

<h4>Configuraciones adicionales</h4>

<ul>
	<li><b>Selección de carpeta:</b> Aquí puede seleccionar entre tres mecanismos diferentes para agregar imágenes y
		carpetas:
		<ul>
			<li><b>Lista de carpetas de imágenes (predeterminado):</b> Aquí obtiene la lista de todas las carpetas de imágenes
				que se muestran y puede seleccionar de esta lista. Esta es la opción más fácil.</li>
			<li><b>Explorador de archivos:</b> Aquí puede seleccionar sus carpetas de imágenes en un explorador de archivos.</li>
			<li><b>Galería:</b> Aquí puede seleccionar la carpeta de imágenes a través de la aplicación Galería. Esto puede ser
				útil si encuentra sus imágenes más fáciles en la galería.</li>
		</ul></li>
	<li><b>Buscar carpetas de imágenes:</b> Aquí puede activar una nueva exploración de la memoria del dispositivo en busca
		de carpetas de imágenes.</li>
	<li><b>Restablecer carpeta de copia de seguridad (Android 10 y superior):</b> aquí puede deshacer la selección de la
		carpeta de copia de seguridad para que se vuelva a consultar la próxima vez que realice una copia de seguridad /
		restauración.</li>
	<li><b>Mostrar carpetas ocultas:</b> Aquí puede seleccionar si se consideran las imágenes de las carpetas ocultas.</li>
	<li><b>Aplicaciones que evitan las notificaciones emergentes:</b> Aquí puede seleccionar aplicaciones para que al usar
		estas aplicaciones no se muestren notificaciones emergentes (Android 5 o superior).</li>
	<li><b>Idioma:</b> Cambia el idioma de la aplicación. (Actualmente compatible: inglés, alemán y español)</li>
	<li><b>Notificar sobre el cambio de lista:</b> Aquí puede decidir mostrar notificaciones en caso de agregar / eliminar
		imágenes o carpetas a alguna lista de imágenes.</li>
	<li><b>Usar filtro de expresión regular:</b> Esto permite filtrar globalmente ciertas listas o carpetas de la pantalla.</li>
	<li><b>Mostrar todos los mensajes de información:</b> Hay varios mensajes de información en la aplicación que puede
		desactivar presionando el botón &laquo;No mostrar de nuevo&raquo;. El botón &laquo;Mostrar todos los mensajes de
		información&raquo; vuelve a habilitar todos estos mensajes.</li>
	<li><b>No mostrar mensajes de información:</b> Esto deshabilita todo tipo de mensajes de información que, de lo
		contrario, deben desactivarse individualmente. Esto es útil para usuarios experimentados que instalan la aplicación en
		un nuevo dispositivo.</li>
</ul>

<h3>
	<a name="widgetSettings"></a>
	Configuración de widgets
</h3>

<ul>
	<li><b>Nombre de la lista:</b> Aquí puede configurar la lista de imágenes que utilizará el widget.</li>
	<li><b>Editar lista de imágenes:</b> Aste enlace conduce a la página de edición de la lista de imágenes asignada al
		widget.</li>
	<li><b>Nombre del widget:</b> Aquí puede establecer un nombre que se muestra en la configuración del widget.</li>
	<li><b>Ícono del widget:</b> Para el mini widget, puede seleccionar aquí una imagen de icono.</li>
	<li><b>Frecuencia de cambio:</b> Aquí puede definir con qué frecuencia debe cambiar la imagen.</li>
	<li><b>Mostrar como lista:</b> Si se selecciona esta opción, la pila de imagenes se muestra como una lista desplazable
		en lugar de una pila.</li>
	<li><b>Mostrar todas las imágenes cíclicamente:</b> En la pila de imágenes aleatorias, puede seleccionar aquí si todas
		las imágenes de la lista deben estar contenidas en la cubierta, o si solo deben estar contenidas partes de la lista
		(de acuerdo con el peso de las listas anidadas) - recomendable para listas de imágenes muy grandes.</li>
	<li><b>Fondo:</b> Aquí puede establecer el color de fondo del widget. La opción &laquo;Rellenar con imagen&raquo;
		significa que la imagen se estira para llenar todo el widget.</li>
	<li><b>Estilo del botones:</b> Aquí puede definir dónde aparecerán los dos botones del widget. Estos son:
		<ul>
			<li>Un botón para cambiar la configuración del widget.</li>
			<li>Un botón para cambiar la imagen mostrada.</li>
		</ul></li>
	<li><b>Color de botones:</b> Aquí puede seleccionar el color de estos dos botones.</li>
	<li><b>Usar configuración predeterminada:</b> Aquí puede especificar si, al ver la imagen en detalle, se debe usar la
		configuración predeterminada, o si las configuraciones &laquo;Escala de imagen&raquo;, &laquo;Color de fondo&raquo;,
		&laquo;Comportamiento al lanzar&raquo;, &laquo;Frecuencia de cambio automático&raquo;, &laquo;Tocar en lugar de
		lanzar&raquo; y &laquo;Prevenir el tiempo de espera de la pantalla&raquo; deben definirse por separado para esta
		notificación. (Consulte <a href="#randomImageView">más arriba</a> la explicación de estas configuraciones).
	
	<li><b>Duración de uso del widget:</b> Aquí puede limitar el tiempo que puede ver las imágenes a través del mini
		widget.</li>
	<li><b>Duración de bloqueo del widget:</b> Aquí puede limitar la frecuencia con la que puede usar el mini widget.</li>
</ul>

<h3>
	<a name="notificationSettings"></a>
	Configuración de notificaciones
</h3>

<ul>
	<li><b>Nombre de la lista:</b> Aquí puede configurar la lista de imágenes que utilizará el widget.</li>
	<li><b>Editar lista de imágenes:</b> Aste enlace conduce a la página de edición de la lista de imágenes asignada al
		widget.</li>
	<li><b>Nombre de la notificatión:</b> Aquí puede establecer un nombre que se muestra en la configuración de
		notificación.</li>
	<li><b>Frecuencia de notificación:</b> Aquí puede seleccionar con qué frecuencia se debe mostrar una notificación.</li>
	<li><b>Variabilidad de la notificación:</b> Aquí puede decidir si las notificaciones vienen en intervalos de tiempo
		bastante iguales o en una variación mayor.</li>
	<li><b>Hora de inicio para notificaciones, Hora de finalización para notificaciones:</b> Aquí puede seleccionar una
		ventana de tiempo en la que pueden aparecer las notificaciones.</li>
	<li><b>Duración:</b> Aquí puede decidir eliminar las notificaciones automáticamente después de un tiempo determinado.</li>
	<li><b>Estilo de notificación:</b> Aquí puede seleccionar entre cuatro tipos de notificaciones.</li>
	<li><b>Color del LED:</b> Aquí puede seleccionar si el LED debe parpadear cuando la notificación esté disponible.</li>
	<li><b>Vibración:</b> Aquí puede seleccionar si el dispositivo debe vibrar cuando se muestra la notificación.</li>
	<li><b>Icono de color:</b> aquí puede seleccionar si el símbolo de notificación debe ser blanco o de color.</li>
	<li><b>Usar configuración predeterminada:</b> Aquí puede especificar si, al ver la imagen en detalle, se debe usar la
		configuración predeterminada, o si las configuraciones &laquo;Escala de imagen&raquo;, &laquo;Color de fondo&raquo;,
		&laquo;Comportamiento al lanzar&raquo;, &laquo;Frecuencia de cambio automático&raquo;, &laquo;Tocar en lugar de
		lanzar&raquo; y &laquo;Prevenir el tiempo de espera de la pantalla&raquo; deben definirse por separado para esta
		notificación. (Consulte <a href="#randomImageView">más arriba</a> la explicación de estas configuraciones).
	
	<li><b>Borrar notificación:</b> Aquí puede borrar la notificación.</li>

</ul>
