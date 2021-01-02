<h2><span class="mobile"><?=$appname?> - </span>Ajustes</h2>

La aplicación permite a los siguientes ajustes:
<?PHP
if (isAugendiagnose ()) {
	?>
<h3>Ajustes de entrada</h3>

<table width="100%" border="1">
	<tr>
		<td width="30%" valign="top">Carpeta de entrada para nuevas fotos</td>
		<td width="70%" valign="top">
			<p>Esta es la carpeta, de donde las nuevas fotos son importadas. Como configuración predeterminada, este es o bien la
				carpeta de destino de la aplicación Eye-Fi o la carpeta norma de la aplicación de la cámara. Sin embargo, puede
				configurar aquí cualquiera otra carpeta.</p>

			<p>Bagaje con respecto a la aplicación Eye-Fi: normalmente, la cámara del dispositivo celular no es suficiente para
				tomar fotos oculares en alta calidad. Un enfoque más práctico es utilizar una cámara externa con SD Eye-Fi, que
				transfiere las fotos a través de WLAN en el dispositivo celular.</p>
		</td>
	</tr>
	<tr>
		<td width="30%" valign="top">Última foto es ojo derecho</td>
		<td width="70%" valign="top">Aquí puede definir si la última foto es el ojo derecho o el ojo izquierdo. Como
			configuración predeterminada este es el ojo izquierdo (lo que significa que usted hizo primero una foto del ojo
			derecho y luego del ojo izquierdo).</td>
	</tr>
</table>
<?PHP
}
?>

<h3>Ajustes de la visualización</h3>

<table width="100%" border="1">
	<tr>
		<td width="30%" valign="top">Ordenar por apellido</td>
		<td width="70%" valign="top">Aquí se puede establecer si la lista de nombres será ordenada por apellido.</td>
	</tr>
	<tr>
		<td width="30%" valign="top">Configuración guiada de iris y pupila</td>
		<td width="70%" valign="top">Aquí usted puede decidir si se le guiará a través de la determinación de la posición del
			iris y de la pupila antes puede mostrar superposiciones.</td>
	</tr>
	<tr>
		<td width="30%" valign="top">Color predeterminado de superposiciones</td>
		<td width="70%" valign="top">Aquí puede definir el color predeterminado para los superposiciones de topografías del
			iris. (Estándar: rojo)</td>
	</tr>
	<tr>
		<td width="30%" valign="top">Idioma</td>
		<td width="70%" valign="top">Aquí puede cambiar el idioma en el que se mostrará la aplicación. Un cambio de valor
			fuerza un reinicio de la aplicación.</td>
	</tr>
	<tr>
		<td width="30%" valign="top">Mostrar todos los consejos</td>
		<td width="70%" valign="top">Aquí se puede volver a habilitar todos los consejos.</td>
	</tr>
	<tr>
		<td width="30%" valign="top">No mostrar consejos</td>
		<td width="70%" valign="top">Aquí se puede desactivar todas consejos existentes (que es útile después de la nueva
			instalación si ya conoce la aplicación).</td>
	</tr>
</table>

<h3>Ajustes de almacenamiento y memoria</h3>

<table width="100%" border="1">
	<tr>
		<td width="30%" valign="top">Carpeta de fotos oculares</td>
		<td width="70%" valign="top"><p>Esta es la carpeta en la que la aplicación administra las fotos de ojos. Normalmente,
				usted no tiene que cambiar esto. Desde aquí, puede copiar las fotos a otros dispositivos.</p>

			<p>La carpeta predeterminada es &laquo;FotosOcular&raquo;.</p>

			<p>Puede seleccionar aquí una carpeta, ya sea en la memoria del dispositivo o en una tarjeta SD. En Android 4.4
				(Kitkat), almacenamiento en la tarjeta SD tiene algunas limitaciones, Por lo tanto, algunas operaciones tardarán
				más. En Android 5, al seleccionar una carpeta en la tarjeta SD, usted tendrá que conceder derechos de acceso a la
				tarjeta SD a través del &laquo;Storage Access Framework&raquo; de Android.</p></td>
	</tr>
	<tr>
		<td width="30%" valign="top">Tamaño máximo de mapas de bits</td>
		<td width="70%" valign="top">Este es el tamaño en el que las fotos se reducen antes de mostrar. Este se requiere para
			ahorrar memoria del dispositivo. El valor predeterminado es 2048. En dispositivos con poca memoria, puede ser
			necesario para configurar un valor menor (por ejemplo, 1024). valores demasiado grandes pueden bloquear la
			aplicación.</td>
	</tr>
	<tr>
		<td width="30%" valign="top">Mostrar imagen en alta resolución</td>
		<td width="70%" valign="top">Aquí usted puede decidir en qué circunstancias se muestra la foto en alta resolución, que
			permite ver más detalles en la foto, pero consume memoria y tiempo de cálculo.

			<ul>
				<li><b>Siempre cargar automáticamente:</b> La aplicación siempre almacena las fotos en resolución completa en la
					memoria. Esto da la mejor experiencia del usuario en los dispositivos de gama alta, pero puede conducir a fallos si
					no hay suficiente memoria disponible.</li>

				<li><b>Cargar automáticamente cuando se muestra sola foto:</b> La aplicación muestra la resolución completa sólo
					cuando se muestre un único imagen. Esto requiere un medio de la memoria.</li>

				<li><b>Cargar sólo si se solicita:</b> La aplicación no muestra la imagen en alta resolución. Esto requiere menos
					memoria y tiempo de cálculo, pero los detalles en la foto se pueden perder. La botón &laquo;lupa&raquo; <img
					src="<?=$basepath?>/drawable/ic_clarity.png" /> permite visualizar el detalle actual de la imagen en la plena resolución.</li>
			</ul>
		</td>
	</tr>
	<tr>
		<td width="30%" valign="top">Guardar datos adicionales en JPG</td>
		<td width="70%" valign="top">Aquí puede limitar el almacenamiento de datos en los archivos JPG de la aplicación.

			<ul>
				<li><b>Guardar en EXIF (recomendado):</b> La aplicación guarda la información relevante en el archivo JPG, incluso
					en campos estándar que son visibles en Windows.</li>

				<li><b>Guardar en campos personalizados:</b> La aplicación guarda la información en el archivo JPG, pero sólo en
					campos separados. Campos estándar se mantienen sin cambios; los datos intercambio con Windows no es posible.</li>

				<li><b>No guarde datos en imágenes:</b> La aplicación no almacena información en archivos JPG. (Esto limita la
					funcionalidad de la aplicación.)</li>
			</ul>
		</td>
	</tr>
	<tr>
		<td width="30%" valign="top">Detección automática del iris</td>
		<td width="70%" valign="top">Aquí puede seleccionar si la aplicación debe tratar de encontrar automáticamente la
			posición del iris y pupila en las fotos de ojos. Normalmente, esto va a simplificar la colocación de las
			superposiciones, pero requiere muchos recursos de la teléfono, y el resultado puede ser incorrecto.</td>
	</tr>
</table>

<h3>Ajustes de la cámara</h3>

<table width="100%" border="1">
<?PHP
if (isMiniris ()) {
	?>
		<tr>
		<td width="30%" valign="top">Comenzar con el ojo izquierdo</td>
		<td width="70%" valign="top">Aquí puede definir el ojo que debería ser fotografiada primero. Como configuración
			predeterminada este es el ojo derecho.</td>
	</tr>
<?PHP
}
?>
		<tr>
		<td width="30%" valign="top">Compatibilidad de la cámara</td>
		<td width="70%" valign="top">Si el dispositivo funciona con Android 5 o superior, entonces aquí se puede seleccionar
			si la cámara debe utilizar los nuevos Android 5 funciones o no. Selección de &laquo;Android 4&raquo; tiene sentido en
			el caso de problemas con Android 5 compatibilidad.</td>
	</tr>
	<tr>
		<td width="30%" valign="top">Activar el flash</td>
		<td width="70%" valign="top">Aquí usted puede habilitar el flash. Por defecto, este está desactivado, ya que es
			peligroso para usar el flash cerca del ojo.</td>
	</tr>
	<tr>
		<td width="30%" valign="top">Activar flash LED externo</td>
		<td width="70%" valign="top">Aquí puede establecer si el uso de un &laquo;Flash & Fill-in Light&raquo; enchufado a la
			toma de auriculares debe ser habilitado.</td>
	</tr>
	<tr>
		<td width="30%" valign="top">Utilizar la cámara frontal</td>
		<td width="70%" valign="top">Aquí puede especificar utilizar la cámara frontal para tomar fotografías. De forma
			predeterminada, se utiliza la cámara trasera.</td>
	</tr>
	<tr>
		<td width="30%" valign="top">Mostrar enlace a la apl. cámara</td>
		<td width="70%" valign="top">Aquí puede especificar si se debe mostrar el botón para tomar fotos con la aplicación de
			cámara del sistema.</td>
	</tr>
	<tr>
		<td width="30%" valign="top">Posición de la pantalla de la cámara</td>
		<td width="70%" valign="top">Si la cinta Miniris oculta algunos botones de la pantalla de la cámara, entonces usted
			puede utilizar este ajuste para desplazar la pantalla de la cámara hacia la derecha o izquierda.</td>
	</tr>
</table>

<h3>Botones de superposición</h3>

<p>Esta página le permite definir que superposiciones topografía del iris se puede visualizar pulsando los botones de
	superposición. Esto también se puede hacer mientras ve las fotos, haciendo una pulsación larga en algún botón de
	superposición.</p>

<h3>Paquetes premium / Ayuda</h3>

<p>Esta página ofrece la posibilidad de comprar un paquete premium, que le da acceso anlimited a todas las funciones de
	la aplicación.</p>

<p>Además, hay las siguientes funciones:</p>

<table width="100%" border="1">
<?PHP
if (isAugendiagnose ()) {
	?>
		<tr>
		<td width="30%" valign="top">Quitar anuncios (sólo para usuarios de versiones anteriores)</td>
		<td width="70%" valign="top">Aquí usted puede desactivar todos los anuncios (actualmente sólo en los Estados Unidos).
			Esta función se puede activar a través de una donación o mediante clave de usuario.</td>
	</tr>
<?PHP
}
?>
		<tr>
		<td width="30%" valign="top">Póngase en contacto co el desarrollador</td>
		<td width="70%" valign="top">Aquí usted puede enviar un correo electrónico al desarrollador en caso de tener deseos o
			problemas.</td>
	</tr>
	<tr>
		<td width="30%" valign="top">Clave de usuario</td>
		<td width="70%" valign="top">Una clave de usuario que permite el desbloqueo de la funcionalidad adicional.</td>
	</tr>
</table>
