<?PHP
include "pageheader.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title><?=$appname?> - Visualizar las fotos</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../stylesheets/styles.css" rel="Stylesheet" type="text/css">
</head>
<body>
	<h2>Visualizar las fotos</h2>

	<p>Aqui se puede seleccionar el nombre de una persona cuyas fotos oculares se quiere ver. Luego la aplicaci�n mostrar�
		todas las fotos de ojo de esta persona en una lista ordenada por fecha.</p>

	<p>A continuaci�n, usted tiene las siguientes posibilidades:</p>

	<ul>
		<li>Mostrar una de las fotos en detalle (haciendo clic en una foto).</li>

		<li>Mostrar los dos fotos de una fecha (haciendo clic en una fecha)</li>

		<li>Mostrar dos fotos de diferentes fechas (haciendo largo clic en una foto y despu�s clic en una segunda foto)</li>

		<li>Mostrar dos fotos de diferentes personas: seleccione una foto de esta persona (mediante pulsaci�n larga) y luego
			seleccione una foto de una persona diferente.</li>
	</ul>

	<p>Tenga en cuenta que los gr�ficos de la topograf�a del iris pueden organizarse como fotos oculares - Esto permite
		comparar las fotos de los ojos con los gr�ficos de la topograf�a del iris. Tal gr�ficos no est�n incluidos en la
		aplicaci�n (excepto de superposici�nes).</p>

	<h3>Otras opciones en la vista general</h3>

	<ul>
		<li>Al hacer una pulsaci�n larga en un nombre en la lista de nombres, es posible que cambiar o eliminar el nombre</li>

		<li>Al hacer una pulsaci�n larga en una fecha en la lista de fotos para una nombre, usted puede cambiar la fecha o
			eliminar las im�genes de esa fecha, o puede 
			<?PHP if(isMiniris()) { ?>
			trasladar estas fotos a un diferente nombre.
			<?PHP } else { ?>
			mover estas fotos a la carpeta de entrada (por ejemplo, con el fin de trasladarlos a un diferente nombre).
			<?PHP } ?>
		</li>
	</ul>

	<h3>Otras opciones en la vista de detalle</h3>

	<p>En la vista de detalle (una o dos fotos), tiene las siguientes m�s posibilidades:</p>

	<ul>
		<li>Cambio de brillo y contraste mediante correderas <img src="../drawable/ic_seek_brightness.png" /><img
			src="../drawable/ic_seek_contrast.png" /></li>

		<li>Visualizaci�n de una topograf�a de iris como superposici�n (botones numerados), adaptaci�n de la superposici�n al
			iris y almacenamiento de la posici�n de superposici�n (bot�n de cerradura <img src="../drawable/ic_lock_open.png" />)
		</li>

		<li>Guardar los ajustes seleccionados de brillo y contraste (por medio del bot�n &laquo;guardar&raquo; <img
			src="../drawable/ic_action_save.png" /> en la barra de acciones)
		</li>

		<li>Guardar la posici�n y zoom (por medio del bot�n &laquo;guardar&raquo; <img src="../drawable/ic_action_save.png" />
			en la barra de acciones)
		</li>

		<li>Cambiar el comentario de la foto (por medio del bot�n &laquo;documento&raquo; <img
			src="../drawable/ic_comment.png" /> en la barra de acciones)
		</li>
	</ul>

	<p>
		Estas funciones pueden activarse o desactivarse mediante el bot�n &laquo;Mostrar/Ocultar herramientas&raquo; <img
			src="../drawable/ic_tools_up.png" />.
	</p>
</body>
</html>