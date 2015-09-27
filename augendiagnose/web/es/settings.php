<?PHP
include "pageheader.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title><?=$appname?> - Ajustes</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../stylesheets/styles.css" rel="Stylesheet" type="text/css">
</head>
<body>
	<h2>Ajustes</h2>

	La aplicaci�n permite a los siguientes ajustes:
<?PHP
if (isAugendiagnose ()) {
	?>
	<h3>Carpeta de entrada para nuevas fotos</h3>

	<p>Esta es la carpeta, de donde las nuevas fotos son importadas. Como configuraci�n predeterminada, este es o bien la
		carpeta de destino de la aplicaci�n Eye-Fi o la carpeta norma de la aplicaci�n de la c�mara. Sin embargo, puede
		configurar aqu� cualquiera otra carpeta.</p>

	<p>Bagaje con respecto a la aplicaci�n Eye-Fi: normalmente, la c�mara del dispositivo celular no es suficiente para
		tomar fotos oculares en alta calidad. Un enfoque m�s pr�ctico es utilizar una c�mara externa con SD Eye-Fi, que
		transfiere las fotos a trav�s de WLAN en el dispositivo celular.</p>
<?PHP
}
?>

	<h3>Ajustes de la visualizaci�n</h3>

	<table width="100%" border="1">
		<tr>
			<td width="30%" valign="top">�ltima foto es ojo derecho</td>
			<td width="70%" valign="top">Aqu� puede definir si la �ltima foto es el ojo derecho o el ojo izquierdo. Como
				configuraci�n predeterminada este es el ojo izquierdo (lo que significa que usted hizo primero una foto del ojo
				derecho y luego del ojo izquierdo).</td>
		</tr>
		<tr>
			<td width="30%" valign="top">Ordenar por apellido</td>
			<td width="70%" valign="top">Aqu� se puede establecer si la lista de nombres ser� ordenada por apellido.</td>
		</tr>
		<tr>
			<td width="30%" valign="top">Color predeterminado de superposiciones</td>
			<td width="70%" valign="top">Aqu� puede definir el color predeterminado para los superposiciones de topograf�as del
				iris. (Est�ndar: rojo)</td>
		</tr>
		<tr>
			<td width="30%" valign="top">Idioma</td>
			<td width="70%" valign="top">Aqu� puede cambiar el idioma en el que se mostrar� la aplicaci�n. Un cambio de valor
				fuerza un reinicio de la aplicaci�n.</td>
		</tr>
		<tr>
			<td width="30%" valign="top">Consejos</td>
			<td width="70%" valign="top">Aqu� se puede volver a habilitar todos los consejos, o puede desactivar todas consejos
				existentes (que es �tile despu�s de la nueva instalaci�n si ya conoce la aplicaci�n).</td>
		</tr>
	</table>

	<h3>Ajustes de almacenamiento y memoria</h3>

	<table width="100%" border="1">
		<tr>
			<td width="30%" valign="top">Carpeta de fotos oculares</td>
			<td width="70%" valign="top"><p>Esta es la carpeta en la que la aplicaci�n administra las fotos de ojos. Normalmente,
					usted no tiene que cambiar esto. Desde aqu�, puede copiar las fotos a otros dispositivos.</p>

				<p>La carpeta predeterminada es &laquo;FotosOcular&raquo;.</p>

				<p>Puede seleccionar aqu� una carpeta, ya sea en la memoria del dispositivo o en una tarjeta SD. En Android 4.4
					(Kitkat), almacenamiento en la tarjeta SD tiene algunas limitaciones, Por lo tanto, algunas operaciones tardar�n
					m�s. En Android 5, al seleccionar una carpeta en la tarjeta SD, usted tendr� que conceder derechos de acceso a la
					tarjeta SD a trav�s del &laquo;Storage Access Framework&raquo; de Android.</p></td>
		</tr>
		<tr>
			<td width="30%" valign="top">Tama�o m�ximo de mapas de bits</td>
			<td width="70%" valign="top">Este es el tama�o en el que las fotos se reducen antes de mostrar. Este se requiere para
				ahorrar memoria del dispositivo. El valor predeterminado es 2048. En dispositivos con poca memoria, puede ser
				necesario para configurar un valor menor (por ejemplo, 1024). valores demasiado grandes pueden bloquear la
				aplicaci�n.</td>
		</tr>
		<tr>
			<td width="30%" valign="top">Mostrar imagen en alta resoluci�n</td>
			<td width="70%" valign="top">Aqu� usted puede decidir en qu� circunstancias se muestra la foto en alta resoluci�n,
				que permite ver m�s detalles en la foto, pero consume memoria y tiempo de c�lculo.

				<ul>
					<li><b>Siempre cargar autom�ticamente:</b> La aplicaci�n siempre almacena las fotos en resoluci�n completa en la
						memoria. Esto da la mejor experiencia del usuario en los dispositivos de gama alta, pero puede conducir a fallos
						si no hay suficiente memoria disponible.</li>

					<li><b>Cargar autom�ticamente cuando se muestra sola foto:</b> La aplicaci�n muestra la resoluci�n completa s�lo
						cuando se muestre un �nico imagen. Esto requiere un medio de la memoria.</li>

					<li><b>Cargar s�lo si se solicita:</b> La aplicaci�n no muestra la imagen en alta resoluci�n. Esto requiere menos
						memoria y tiempo de c�lculo, pero los detalles en la foto se pueden perder. La bot�n &laquo;lupa&raquo; <img
						src="../drawable/ic_clarity.png" /> permite visualizar el detalle actual de la imagen en la plena resoluci�n.</li>
				</ul>
			</td>
		</tr>
		<tr>
			<td width="30%" valign="top">Guardar datos adicionales en JPG</td>
			<td width="70%" valign="top">Aqu� puede limitar el almacenamiento de datos en los archivos JPG de la aplicaci�n.

				<ul>
					<li><b>Guardar en EXIF (recomendado):</b> La aplicaci�n guarda la informaci�n relevante en el archivo JPG, incluso
						en campos est�ndar que son visibles en Windows.</li>

					<li><b>Guardar en campos personalizados:</b> La aplicaci�n guarda la informaci�n en el archivo JPG, pero s�lo en
						campos separados. Campos est�ndar se mantienen sin cambios; los datos intercambio con Windows no es posible.</li>

					<li><b>No guarde datos en im�genes:</b> La aplicaci�n no almacena informaci�n en archivos JPG. (Esto limita la
						funcionalidad de la aplicaci�n.)</li>
				</ul>
			</td>
		</tr>
	</table>

	<h3>Ajustes de la c�mara</h3>

	<table width="100%" border="1">
		<tr>
			<td width="30%" valign="top">Compatibilidad de la c�mara</td>
			<td width="70%" valign="top">Si el dispositivo funciona con Android 5 o superior, entonces aqu� se puede seleccionar
				si la c�mara debe utilizar los nuevos Android 5 funciones o no. Selecci�n de &laquo;Android 4&raquo; tiene sentido
				en el caso de problemas con Android 5 compatibilidad.</td>
		</tr>
		<tr>
			<td width="30%" valign="top">Activar el flash</td>
			<td width="70%" valign="top">Aqu� usted puede habilitar el flash. Por defecto, este est� desactivado, ya que es
				peligroso para usar el flash cerca del ojo.</td>
		</tr>
	</table>

	<h3>Paquetes premium / Ayuda</h3>

	<p>Esta p�gina ofrece la posibilidad de comprar un paquete premium, que le da acceso anlimited a todas las funciones de
		la aplicaci�n.</p>

	<p>Adem�s, hay las siguientes funciones:</p>

	<table width="100%" border="1">
<?PHP
if (isAugendiagnose ()) {
	?>
		<tr>
			<td width="30%" valign="top">Quitar anuncios (s�lo para usuarios de versiones anteriores)</td>
			<td width="70%" valign="top">Aqu� usted puede desactivar todos los anuncios (actualmente s�lo en los Estados Unidos).
				Esta funci�n se puede activar a trav�s de una donaci�n o mediante clave de usuario.</td>
		</tr>
<?PHP
}
?>
		<tr>
			<td width="30%" valign="top">P�ngase en contacto co el desarrollador</td>
			<td width="70%" valign="top">Aqu� usted puede enviar un correo electr�nico al desarrollador en caso de tener deseos o
				problemas.</td>
		</tr>
		<tr>
			<td width="30%" valign="top">Clave de usuario</td>
			<td width="70%" valign="top">Una clave de usuario que permite el desbloqueo de la funcionalidad adicional.</td>
		</tr>
	</table>


</body>
</html>