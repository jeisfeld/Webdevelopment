<?PHP
include "pageheader.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title><?=$appname?> - Informaci�n general</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../stylesheets/styles.css" rel="Stylesheet" type="text/css">
</head>
<body>
	<h2><?=$appname?> - Informaci�n general</h2>

<?PHP
if (isAugendiagnose ()) {
	?>
	
	Esta aplicaci�n tiene el objetivo de ayudar a la visualizaci�n de fotograf�as de los ojos en un dispositivo Android,
	con el fin de hacer el diagn�stico m�dico.

	<h3>Caracter�sticas principales</h3>

	<ul>
		<li>Organizaci�n de los fotos oculares por nombre, fecha y lado (derecho/izquierdo)</li>
		<li>Visualizaci�n de dos fotos oculares en paralelo (con la posibilidad de cambio de tama�o individual), con el fin de
			compararlos (por ejemplo, derecha-izquierda comparaci�n, la comparaci�n antes-despu�s, comparaci�n de personas
			diferentes, o comparaci�n con una topograf�a del iris).</li>
		<li>Cambio de brillo y contraste de la foto durante la visualizaci�n, y superposici�n con una topograf�a del iris.</li>
		<li>Tambi�n puede guardar la informaci�n en las fotos, por ejemplo el brillo y comentarios. Para ser capaz de
			almacenar informaci�n y usar la plena funcionalidad de la aplicaci�n, las fotos tienen que tener formato JPG.</li>
	</ul>
	Esta es s�lo una versi�n beta de la aplicaci�n. Otras caracter�sticas est�n por venir. Ideas para otras caracter�sticas
	son bienvenidos.

	<h3>Principales actividades</h3>

	<h4>Paso 1:. Organizar las fotos</h4>

	<p>En este paso, puede organizar las fotos de ojos.</p>

	<p>La aplicaci�n espera nuevas fotos de los ojos en una carpeta de entrada. Esta est� preconfigurada como la carpeta de
		destino de la aplicaci�n Eye-Fi o como la carpeta predeterminada de la c�mara, pero se puede cambiarlo por medio de la
		configuraci�n.</p>

	<p>En el actividad &laquo;Organizar nuevas fotos&raquo;, puede asignar nuevas fotos de los ojos de la carpeta de
		entrada a una persona y una fecha y prepararlos en esta manera para la aplicaci�n. De este modo, las fotos ser�n
		renombradas y trasladadas a la carpeta de la aplicaci�n.</p>

	<p>Como alternativa, puede seleccionar dos fotos en un explorador de archivos o en una aplicaci�n de fotos, y enviar
		estas fotos a la aplicaci�n Diagn�stico del ojo. A continuaci�n, puede organizar estas fotos en la aplicaci�n. En este
		caso, las fotos no se eliminar�n de su ubicaci�n anterior.</p>

	<p>Como alternativa adicional, es posible tomar im�genes directamente desde la aplicaci�n con la c�mara del
		dispositivo. Esto normalmente no le d� fotos en una calidad adecuada, pero sirve como una alternativa a una c�mara
		profesional.</p>

	<h4>Paso 2:. Visualizar las fotos</h4>

	<p>Este es el objetivo principal de la aplicaci�n, pero requiere de las fotos para ser organizado por medio del paso 1.</p>

	<p>En esta actividad, usted puede</p>
	<ul>
		<li>Mostrar una de las fotos en detalle. Aqu� tambi�n se puede cambiar el brillo y el contraste de la foto, muestra
			iris topograf�as como superposici�n, o escribir comentario a una foto.</li>

		<li>Mostrar dos fotos para la comparaci�n (y cambiar el tama�o independiente).</li>
	</ul>

	<h3>Aplicaci�n para Windows</h3>

	<p>
		Hay una aplicaci�n de acompa�amiento de Windows que se puede utilizar para ver las fotos que han sido organizada con
		esta aplicaci�n. Para obtener m�s informaci�n, consulte
		<a href="http://augendiagnose.jeisfeld.de/?lang=es&page=windowsapp" target="_top">http://augendiagnose.jeisfeld.de/?page=windowsapp</a>
		.
	</p>

	<h3>Almacenamiento de datos</h3>

	<p>La aplicaci�n graba informaci�n (como posici�n del iris o comentarios) directamente en los archivos de imagen JPG.
		Esto tiene la ventaja de que toda la informaci�n es todav�a disponible si copia las im�genes de un dispositivo a otro.
		En parte, la informaci�n como los comentarios ser� a�n disponible en MS Windows.</p>

	<p>Sin embargo, este tipo de almacenamiento impone un peque�o riesgo. Puede suceder que en algunos dispositivos, o para
		los cuadros del algunas c�maras, el almacenamiento de informaci�n en el JPG falla, o posiblemente hasta destruye el
		archivo JPG. Por lo tanto, es recomendado que mantenga copias de seguridad de sus archivos JPG, al menos cuando se
		utiliza el aplicaci�n por primera vez con un nuevo dispositivo o con una nueva c�mara.</p>
		
<?PHP
}
else {
	?>

	<p>Esta aplicaci�n tiene la finalidad de apoyar la captura y visualizaci�n de fotograf�as del iris en un dispositivo
		Android, con el fin de hacer un diagn�stico del iris. Est� optimizado para el uso con la herramienta Miniris.</p>

	<p>Las caracter�sticas principales de la App son</p>

	<ul>
		<li>Captura de fotos del iris usando la c�mara del tel�fono (por ejemplo, con la ayuda de la herramienta Miniris).</li>
		<li>La organizaci�n de fotos del iris por nombre, fecha y lateral (derecha / izquierda).</li>
		<li>La visualizaci�n de dos fotos de iris en paralelo (con el soporte del cambio de tama�o individual).</li>
		<li>Cambio de brillo y contraste de la foto durante la visualizaci�n, superposici�n con una topograf�a del iris, y
			ahorro de comentarios.</li>
	</ul>

	<p>La aplicaci�n graba informaci�n (como posici�n del iris o comentarios) directamente en los archivos de imagen JPG.
		Esto tiene la ventaja de que toda la informaci�n es todav�a disponible si copia las im�genes de un dispositivo a otro.</p>

	<h3>Uso de la c�mara</h3>

	<p>Al abrir la c�mara, ver� las siguientes �reas:</p>

	<ul>
		<li>En el lado derecho en el medio est� el bot�n para capturar la foto. Despu�s de capturar una foto, puede decidir si
			desea conservar la foto o si desea descartarlo y capturar la foto de nuevo.</li>
		<li>En las esquinas en la parte superior se encuentra la pantalla del derecho y del izquierdo ojo. La marca roja
			indica que ojo est� previsto para la pr�xima foto. Pulsando sobre una de estas �reas se puede cambiar el lado.</li>
		<li>En la pantalla de la c�mara hay un gran c�rculo. Este c�rculo indica el lugar donde el iris debe aparecer en la
			foto.</li>
		<li>En el lado izquierdo, hay un bot�n de flash. Aqu� puede seleccionar si desea utilizar el flash del dispositivo.</li>
		<li>Arriba, hay un bot�n con un c�rculo. Aqu� puede seleccionar qu� tan grande el iris debe estar en la foto.</li>
	</ul>

	<p>Despu�s de tomar fotos de ambos ojos, se abre una pagina donde usted puede revisar las dos fotos, y donde se puede
		introducir el nombre de la persona a la que estas fotos se deben asignar. Aqu� tambi�n se puede cambiar la fecha de la
		fotos - para cada persona y cada fecha, s�lo un par de fotos se pueden almacenar.</p>

	<p>Si detiene la aplicaci�n despu�s de tomar una o dos fotos de los ojos, pero antes de asignar un nombre, luego el
		siguiente inicio de la aplicaci�n continuar� donde se detuvo - las fotos que se han tomado se mantendr� hasta que
		decida eliminar o sobrescribir ellos.</p>

	<h3>Aplicaci�n para Windows</h3>

	<p>
		Hay una aplicaci�n de acompa�amiento de Windows que se puede utilizar para ver las fotos que han sido organizada con
		esta aplicaci�n. Para obtener m�s informaci�n, consulte
		<a href="http://miniris.jeisfeld.de/?lang=es&page=windowsapp" target="_top">http://miniris.jeisfeld.de/?page=windowsapp</a>
		.
	</p>

<?PHP
}
?>
</body>
</html>
