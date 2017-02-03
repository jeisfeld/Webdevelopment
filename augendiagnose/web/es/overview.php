<?PHP
include "pageheader.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title><?=$appname?> - Información general</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../stylesheets/styles.css" rel="Stylesheet" type="text/css">
</head>
<body>
	<h2><?=$appname?> - Información general</h2>

<?PHP
if (isAugendiagnose ()) {
	?>
	
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

	<p>
		Como alternativa adicional, es posible tomar imágenes directamente desde la aplicación con la cámara del dispositivo.
		Esto normalmente no le dé fotos en una calidad adecuada, pero sirve como una alternativa a una cámara profesional, en
		particular, si se utiliza una lente macro, como el
		<a href="http://irisocamera.com" target="_blank">Miniris-2</a>
		.
	</p>

	<h4>Paso 2:. Visualizar las fotos</h4>

	<p>Este es el objetivo principal de la aplicación, pero requiere de las fotos para ser organizado por medio del paso 1.</p>

	<p>En esta actividad, usted puede</p>
	<ul>
		<li>Mostrar una de las fotos en detalle. Aquí también se puede cambiar el brillo y el contraste de la foto, muestra
			iris topografías como superposición, o escribir comentario a una foto.</li>

		<li>Mostrar dos fotos para la comparación (y cambiar el tamaño independiente).</li>
	</ul>

	<h3>Periodo de prueba / Paquetes premium</h3>

	<p>La aplicación permite el uso gratuito sólo durante un periodo de prueba de dos semanas. Uso adicional requiere la
		compra de un paquete dentro de la aplicación. (una sola vez).</p>

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
		
<?PHP
}
else {
	?>

	<p>
		Esta aplicación tiene la finalidad de apoyar la captura y visualización de fotografías del iris en un dispositivo
		Android, con el fin de hacer un diagnóstico del iris. Está optimizado para el uso con el
		<a href="http://irisocamera.com" target="_blank">Miniris-2 aditamento</a>
		.
	</p>

	<p>Las características principales de la App son</p>

	<ul>
		<li>Captura de fotos del iris usando la cámara del teléfono (por ejemplo, con la ayuda del Miniris-2 aditamento).</li>
		<li>La organización de fotos del iris por nombre, fecha y lateral (derecha / izquierda).</li>
		<li>La visualización de dos fotos de iris en paralelo (con el soporte del cambio de tamaño individual).</li>
		<li>Cambio de brillo y contraste de la foto durante la visualización, superposición con una topografía del iris, y
			ahorro de comentarios.</li>
	</ul>

	<p>La aplicación graba información (como posición del iris o comentarios) directamente en los archivos de imagen JPG.
		Esto tiene la ventaja de que toda la información es todavía disponible si copia las imágenes de un dispositivo a otro.</p>

	<h3>Uso de la cámara</h3>

	<p>Al abrir la cámara, verá las siguientes áreas:</p>

	<ul>
		<li>En el lado derecho en el medio está el botón para capturar la foto. Después de capturar una foto, puede decidir si
			desea conservar la foto o si desea descartarlo y capturar la foto de nuevo.</li>
		<li>En las esquinas en la parte superior se encuentra la pantalla del derecho y del izquierdo ojo. La marca roja
			indica que ojo está previsto para la próxima foto. Pulsando sobre una de estas áreas se puede cambiar el lado.</li>
		<li>En la pantalla de la cámara hay un gran círculo. Este círculo indica el lugar donde el iris debe aparecer en la
			foto.</li>
		<li>En la parte inferior izquierda, hay un botón con un círculo y el texto &laquo;zoom&raquo;. Aquí se puede
			establecer el zoom de la cámara y seleccionar qué tan grande el iris debe estar en la foto.</li>
		<li>Arriba, hay un botón con el texto &laquo;MACRO&raquo; o &laquo;AUTO&raquo;. Aquí usted puede seleccionar el modo
			de enfoque de la cámara. Para primeros planos, el modo macro es normalmente una buena opción.</li>
		<li>Arriba, hay un botón de flash. Aquí se puede encender la luz de su dispositivo. Como un flash frente a el ojo es
			peligroso, esto está desactivado por defecto, pero puede activarlo en la configuración.</li>
	</ul>

	<p>Después de tomar fotos de ambos ojos, se abre una página donde usted puede revisar las dos fotos, y donde se puede
		introducir el nombre de la persona a la que estas fotos se deben asignar. Aquí también se puede cambiar la fecha de la
		fotos - para cada persona y cada fecha, sólo un par de fotos se pueden almacenar.</p>

	<p>Si detiene la aplicación después de tomar una o dos fotos de los ojos, pero antes de asignar un nombre, luego el
		siguiente inicio de la aplicación continuará donde se detuvo - las fotos que se han tomado se mantendrá hasta que
		decida eliminar o sobrescribir ellos.</p>

	<h3>Periodo de prueba / Paquetes premium</h3>

	<p>La aplicación permite el uso gratuito sólo durante un periodo de prueba de dos semanas. Uso adicional requiere la
		compra de un paquete dentro de la aplicación. (una sola vez).</p>

	<h3>Aplicación para Windows</h3>

	<p>
		Hay una aplicación de acompañamiento de Windows que se puede utilizar para ver las fotos que han sido organizada con
		esta aplicación. Para obtener más información, consulte
		<a href="http://miniris.jeisfeld.de/?lang=es&page=windowsapp" target="_top">http://miniris.jeisfeld.de/?page=windowsapp</a>
		.
	</p>

<?PHP
}
?>

	<a name="privacy"></a>
	<h3>Política de privacidad</h3>

	<p>
		La aplicación &laquo;<?=$appname?>&raquo; utiliza la cámara para tomar fotos de los ojos.
		La aplicación no almacena, recopila ni envía ningún tipo de datos personales.
		Todas las fotografías tomadas por la aplicación se almacenan sólo localmente en el dispositivo.
	</p>

	<p>
		La aplicación también utiliza Google Analytics para recopilar información estadística sobre errores y uso de la
		aplicación. Esto tiene el propósito de obtener información para mejoras de la aplicación. Vea el
		<a href="https://support.google.com/analytics/answer/6004245?hl=es" target="_blank">Política de privacidad de Google
			Analytics</a>
		para más detalles.
	</p>
</body>
</html>
