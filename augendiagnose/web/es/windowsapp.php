<?PHP
include "pageheader.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title><?=$appname?> - La aplicación para Windows</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../stylesheets/styles.css" rel="Stylesheet" type="text/css">
</head>
<body>
	<h2>La aplicación para Windows</h2>

	<p>Hay una aplicación de acompañamiento de Windows que permite visualizar las fotos de los ojos en un ordenador de
		Windows como en la aplicación para Android.</p>

	<p>La aplicación de Windows sólo se diseñó como complemento a la aplicación para Android. Permite menos funciones que
		la aplicación para Android. En particular, no permite organizar nuevas fotos y establecer la posición de las
		superposiciones. Sin embargo, permite mostrar las fotos y las superposiciones y editar el comentario.</p>

	<p>
		Para utilizar la aplicación para Windows, usted tiene que sincronizar la carpeta de fotos oculares de su dispositivo
		Android con una carpeta de fotos oculares correspondiente en el ordenador de Windows. Esta carpeta debe configurarse
		en las ajustes.<br> Una posible forma de sincronización es instalar una aplicación WebDAV en su dispositivo Android e
		instalar alguna aplicación de sincronización en el ordenador de Windows (como FreeFileSync). A continuación, puede
		configurar las aplicación de sincronización de una manera que accede a su dispositivo Android de forma inalámbrica a
		través de WebDAV.
	</p>

	<h3>Entradas del menú</h3>
	<ul>
		<li><b>Archivo&rarr;Salir:</b> Salir la aplicación.</li>

		<li><b>Ver&rarr;Barra de superposiciónes:</b> Mostrar u ocultar el panel para la visualización de superposiciones o
			modificación de brillo/contraste.</li>

		<li><b>Ver&rarr;Barra de comentario:</b> Mostrar u ocultar el panel para editar el comentario.</li>

		<li><b>Ver&rarr;Ventana dividida:</b> Dividir de la ventana, de modo que dos fotos se pueden visualizar en paralelo.</li>

		<li><b>Ventana&rarr;Cerrar:</b> Aquí usted puede cerrar la vista detallada de un ojo. (También puede hacer clic en la
			cruz en la parte superior derecha.)</li>

		<li><b>Ventana&rarr;Ajustes:</b> Cambiar las ajustes.</li>

		<li><b>Ayuda&rarr;Buscar actualizaciones:</b> Aquí puede comprobar si hay una actualización de la aplicación. Si hay
			una nueva actualización, se le informó también una vez al arranque de la aplicación.</li>

		<li><b>Ayuda&rarr;Desinstalar aplicación:</b> Aquí puede desinstalar la aplicación.</li>
	</ul>

	<h3>Ajustes</h3>

	<ul>
		<li><b>Carpeta de fotos oculares:</b> Aquí usted tiene que seleccionar la carpeta principal donde se almacenan las
			fotos de los ojos. Esta carpeta debe tener la misma estructura que en la aplicación para Android.</li>

		<li><b>Tamaño máximo de mapas de bits:</b> Este es el tamaño en el que las fotos se reducen antes de mostrar.</li>

		<li><b>Tamaño máximo de imagen de previsualización:</b> Este es el tamaño de las fotos que se reducen en el vista en
			miniatura.</li>

		<li><b>Color predeterminado de superposiciones:</b> Aquí puede definir el color predeterminado para los
			superposiciones de topografías del iris.</li>

		<li><b>Ordenar por apellido:</b> Aquí se puede establecer si la lista de nombres será ordenada por apellido.</li>

		<li><b>Actualizar automáticamente:</b> Si selecciona esta opción, a continuación, se instalarán nuevas versiones de la
			aplicación automáticamente en el arranque.</li>

		<li><b>Idioma:</b> Aquí puede cambiar el idioma en el que se mostrará la aplicación. Un cambio de valor fuerza un
			reinicio de la aplicación.</li>
	</ul>

	<h3>Notas de lanzamiento</h3>

	<ul>
		<li><b>Versión 0.1.12:</b> Añadido localización portuguesa. Corrección de errores.</li>

		<li><b>Versión 0.1.11:</b> Habilitado el manejo de un solo foto de ojo. Corrección de errores.</li>

		<li><b>Versión 0.1.10:</b> Visualización y ocultación simple del comentarios.</li>

		<li><b>Versión 0.1.9:</b> Cambio simple entre sola y doble vista de imagen.</li>
		
		<li><b>Versión 0.1.8:</b> Zoom de la imagen a través de la pantalla táctil.</li>

		<li><b>Versión 0.1.7:</b> Cambio de la saturación y temperatura de color.</li>

		<li><b>Versión 0.1.6:</b> Corrección de errores.</li>

		<li><b>Versión 0.1.5:</b> Ahora los usuarios pueden especificar qué superposiciones estén asociados con los botones de
			superposicién. Corrección de errores.</li>

		<li><b>Versión 0.1.4:</b> Adaptación de superposiciones en el tamaño de la pupila. Correcta visualización de fotos
			giradas.</li>

		<li><b>Versión 0.1.3:</b> Visualización de dos fotos al mismo tiempo. Visualización a pantalla completa rápida.</li>

		<li><b>Versión 0.1.2:</b> Dar aviso al cerrar la ventana mientras se edita comentario.</li>

		<li><b>Versión 0.1.1:</b> Habilitado selección de idioma.</li>

		<li><b>Versión 0.1:</b> Versión inicial. Permite navegar por las fotos oculares organizadas, mostrar un ojo foto en
			detalle, mostrar superposiciones, cambiar brillo y contraste, editar el comentario.</li>
	</ul>

	<h3>
		<a href="../?lang=es&page=downloads" target="_parent">Ir a la página de descarga</a>
	</h3>

</body>
</html>