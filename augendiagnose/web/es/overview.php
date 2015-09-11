<?PHP
include "pageheader.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title><?=$appname?> - Información general</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../stylesheets/styles.css" rel="Stylesheet" type="text/css">
</head>
<body>
	<h2><?=$appname?> - Información general</h2>

	Esta aplicación tiene el objetivo de ayudar a la visualización de fotografías de los ojos en un dispositivo Android,
	con el fin de hacer el diagnóstico médico.

	<h3>Características principales</h3>

	<ul>
		<li>Organización de los fotos oculares por nombre, fecha y lado (derecho/izquierdo)</li>
		<li>Visualización de dos fotos oculares en paralelo (con la posibilidad de cambio de tamaño individual), con el fin de
			compararlos (por ejemplo, derecha-izquierda comparación, la comparación antes-después, comparación de personas
			diferentes, o comparación con una topografía del iris).</li>
		<li>Cambio de brillo y contraste de la foto durante la visualización, y superposición con una topografía del iris.</li>
		<li>También puede guardar la información en las fotos, por ejemplo el brillo y comentarios. Para ser capaz de
			almacenar información y usar la plena funcionalidad de la aplicación, las fotos tienen que tener formato JPG.</li>
	</ul>
	Esta es sólo una versión beta de la aplicación. Otras características están por venir. Ideas para otras características
	son bienvenidos.

	<h3>Principales actividades</h3>

	<h4>Paso 1:. Organizar las fotos</h4>

	<p>En este paso, puede organizar las fotos de ojos.</p>

	<p>La aplicación espera nuevas fotos de los ojos en una carpeta de entrada. Esta está preconfigurada como la carpeta de
		destino de la aplicación Eye-Fi o como la carpeta predeterminada de la cámara, pero se puede cambiarlo por medio de la
		configuración.</p>

	<p>En el actividad &laquo;Organizar nuevas fotos&raquo;, puede asignar nuevas fotos de los ojos de la carpeta de
		entrada a una persona y una fecha y prepararlos en esta manera para la aplicación. De este modo, las fotos serán
		renombradas y trasladadas a la carpeta de la aplicación.</p>

	<p>Como alternativa, puede seleccionar dos fotos en un explorador de archivos o en una aplicación de fotos, y enviar
		estas fotos a la aplicación Diagnóstico del ojo. A continuación, puede organizar estas fotos en la aplicación. En este
		caso, las fotos no se eliminarán de su ubicación anterior.</p>

	<p>Como alternativa adicional, es posible tomar imágenes directamente desde la aplicación con la cámara del
		dispositivo. Esto normalmente no le dé fotos en una calidad adecuada, pero sirve como una alternativa a una cámara
		profesional.</p>

	<h4>Paso 2:. Visualizar las fotos</h4>

	<p>Este es el objetivo principal de la aplicación, pero requiere de las fotos para ser organizado por medio del paso 1.</p>

	<p>En esta actividad, usted puede</p>
	<ul>
		<li>Mostrar una de las fotos en detalle. Aquí también se puede cambiar el brillo y el contraste de la foto, muestra
			iris topografías como superposición, o escribir comentario a una foto.</li>

		<li>Mostrar dos fotos para la comparación (y cambiar el tamaño independiente).</li>
	</ul>

	<h3>Aplicación para Windows</h3>

	<p>
		Hay una aplicación de acompañamiento de Windows que se puede utilizar para ver las fotos que han sido organizada con
		esta aplicación. Para obtener más información, consulte
		<a href="http://augendiagnose.jeisfeld.de/?lang=es&page=windowsapp" target="_top">http://augendiagnose.jeisfeld.de/?page=windowsapp</a>
		.
	</p>

	<h3>Almacenamiento de datos</h3>

	<p>La aplicación graba información (como posición del iris o comentarios) directamente en los archivos de imagen JPG.
		Esto tiene la ventaja de que toda la información es todavía disponible si copia las imágenes de un dispositivo a otro.
		En parte, la información como los comentarios será aún disponible en MS Windows.</p>

	<p>Sin embargo, este tipo de almacenamiento impone un pequeño riesgo. Puede suceder que en algunos dispositivos, o para
		los cuadros del algunas cámaras, el almacenamiento de información en el JPG falla, o posiblemente hasta destruye el
		archivo JPG. Por lo tanto, es recomendado que mantenga copias de seguridad de sus archivos JPG, al menos cuando se
		utiliza el aplicación por primera vez con un nuevo dispositivo o con una nueva cámara.</p>
</body>
</html>