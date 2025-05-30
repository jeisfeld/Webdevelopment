<h2>
	<span class="mobile">Imagen Aleatoria - </span>Notas de uso
</h2>

<p>Esta aplicación muestra imágenes aleatorias de las listas de imágenes que configura. Por lo tanto, primero debe
	configurar una lista de imágenes antes de poder disfrutar de la visualización de imágenes aleatorias.</p>

<h3>Configuración de la lista de imágenes</h3>

<h4>Primeros pasos</h4>

<p>Cuando abra la aplicación por primera vez, primero buscará carpetas de imágenes en su dispositivo (incluida la
	tarjeta SD) y se creará una lista de imágenes que contiene todas estas carpetas de imágenes. Luego puede usar esta
	lista para ver imágenes aleatorias de su dispositivo. Luego, puede cambiar la lista de imágenes, si desea ver solo
	ciertas carpetas de imágenes desde su dispositivo.</p>

<h4>Abrir la página de configuración</h4>

<p>Generalmente, para configurar su lista de imágenes, debe abrir la página de configuración de la lista. Puede acceder
	a esta página de las siguientes maneras:</p>

<ul>
	<li>Al presionar prolongadamente una imagen mientras la ve, y luego presionar &laquo;Editar lista de imágenes&raquo;.</li>
	<li>Desde la <a href="#mainConfiguration">página de configuración principal</a> que muestra todas sus listas de
		imágenes.
	</li>
	<li>Desde la página de configuración de un widget o notificación usando esta lista de imágenes.</li>
</ul>

<h4>Agregar imágenes a la lista de imágenes</h4>

<p>Si desea agregar imágenes a su lista, existen las siguientes opciones:</p>

<ul>
	<li>En la página de configuración de la lista de imágenes, presione el icono <img
		src="<?=$basepath?>/drawable/ic_action_plus.png" />. Entonces ve una lista de
		<ul>
			<li>Sus otras listas de imágenes (azul)</li>
			<li>Las carpetas de imágenes en su dispositivo (amarillo)</li>
			<li>Las carpetas principales de estas carpetas (naranja)</li>
		</ul> Ahora usted puede
		<ul>
			<li>Seleccionar una carpeta de imágenes (amarilla). Luego se mostrarán las imágenes de esta carpeta. Luego puede
				seleccionar imágenes de esta carpeta para agregarlas o puede presionar el símbolo <img
				src="<?=$basepath?>/drawable/ic_action_add_folder.png" /> para agregar toda la carpeta. Puede agregar un filtro para
				mostrar solo las carpetas que contienen una determinada cadena de caracteres en su ruta.
			</li>
			<li>Seleccionar una de sus listas de imágenes (azul) para agregarla a su lista como lista anidada.</li>
			<li>Seleccionar una carpeta principal (naranja) para agregarla a su lista, incluidas todas las subcarpetas.</li>
			<li>Presionar el símbolo <img src="<?=$basepath?>/drawable/ic_action_checkbox.png" /> y luego seleccionar varias
				carpetas para agregar.
			</li>
			<li>Presionar el símbolo <img src="<?=$basepath?>/drawable/ic_action_folder.png" /> y luego explorar su sistema de
				archivos para seleccionar carpetas de imágenes o imágenes para agregar.
			</li>
		</ul>
	</li>
	<li>Alternativamente, puede mostrar una foto en la aplicación de la galería y enviar la imagen desde allí a la
		aplicación Imagen Aleatoria, o puede seleccionar varias fotos en la aplicación de la galería y enviarlas a la
		aplicación Imagen Aleatoria.</li>
</ul>

<p>
	A través del símbolo <img src="<?=$basepath?>/drawable/ic_action_minus.png" /> puede eliminar imágenes y carpetas de su
	lista de imágenes.
</p>

<p>Las listas incluidas se muestran como una carpeta azul. Si hace un clic largo en tal lista, puede ajustar la
	frecuencia con la que se toman las imágenes de esta lista anidada. De esta manera, puede aumentar la frecuencia de
	visualización de imágenes de pequeñas listas. Lo mismo que puede hacer para las carpetas</p>

<h3>
	<a name="viewImages"></a>
	Ver las imagenes
</h3>

<h4>Ver imágenes aleatorias a través del iniciador</h4>

<ul>
	<li>Si presiona el icono del iniciador, la aplicación comenzará a mostrar una imagen aleatoria de su lista de imágenes
		aleatorias en pantalla completa. Si ha configurado varias listas de imágenes, primero se le pide que seleccione la
		lista de imágenes desde la que desea mostrar las imágenes.</li>
	<li>Si desea ver más detalles, simplemente haga zoom como de costumbre con dos dedos.</li>
	<li>Si desea ver una imagen diferente de la lista, simplemente lanze la imagen.</li>
	<li>Puede retroceder una imagen lanzando en la otra dirección.</li>
	<li>Si desea conocer la ubicación del archivo de esta imagen, presione prolongadamente la imagen. Desde aquí, también
		puede hacer otras cosas:
		<ul>
			<li>Mostrar la imagen en la galería</li>
			<li>Enviar la imagen (por ejemplo, por correo electrónico)</li>
			<li>Visualizar la ubicación de la foto en un mapa</li>
			<li>Use la imagen como imagen de widget</li>
			<li>Eliminar la imagen de la lista de imágenes</li>
		</ul>
	</li>
</ul>

<h4>Usando widgets</h4>

Hay tres tipos de widgets que puede colocar en su pantalla de inicio para ver imágenes aleatorias.

<ul>
	<li><b>Mini Widget:</b> Este widget se comporta como el iniciador, si solo tenga una lista de imágenes. Si tiene varias
		listas de imágenes configuradas, entonces el Mini Widget le permite mostrar una imagen aleatoria de una lista de
		imágenes específica.</li>
	<li><b>Marco de imágenes:</b> Este widget coloca una de las imágenes de su lista en la pantalla de inicio y la cambia a
		intervalos regulares. Tiene varias posibilidades de configuración.</li>
	<li><b>Pila de imágenes:</b> Este widget coloca las imágenes de su lista en orden aleatorio como una baraja de cartas o
		como una lista desplazable en la pantalla de inicio. Puede moverse de una imagen a la siguiente.</li>
</ul>

<p>Si toca el Marco de imagen aleatoria o la Pila de imagen aleatoria, puede ver la foto mostrada en detalle. Desde
	aquí, puede lanzar la imagen para ver otras imágenes de la misma lista.</p>

<p>
	El marco de imagen aleatorio también le permite cambiar a una nueva imagen aleatoria (tocando el símbolo <img
		src="<?=$basepath?>/drawable/ic_widget_next.png" /> en el borde derecho del marco), o para cambiar la configuración
	del marco (tocando el símbolo <img src="<?=$basepath?>/drawable/ic_widget_settings.png" /> en el borde izquierdo del
	marco).
</p>

<p>Si tiene varias listas de imágenes, puede colocar widgets para múltiples listas de imágenes en su pantalla de inicio,
	por ejemplo, puede tener siempre una foto de su socio y una foto de sus últimas vacaciones en paralelo en su pantalla.</p>
<p>Tenga en cuenta que directamente después de reiniciar el teléfono o la tableta, aún no se puede acceder a la tarjeta
	SD externa. Por lo tanto, después de reiniciar, los widgets solo pueden mostrar imágenes de la memoria interna del
	teléfono. Si desea ver una buena imagen directamente después de reiniciar, debe agregar una buena foto de la memoria
	interna del teléfono a cada una de sus listas de imágenes.</p>

<h4>Usando notificaciones</h4>

<p>
	Como alternativa a los widgets, puede usar notificaciones para ver imágenes de sus listas de imágenes a intervalos de
	tiempo variables. La configuración de las notificaciones se puede realizar desde la página de configuración principal.
	Encontrará más detalles en la sección
	<a href="settings.html#notificationSettings">Configuración de notificaciones</a>
	.
</p>



<h3>
	<a name="mainConfiguration"></a>
	Configuración principal
</h3>

<p>Se puede acceder a la página principal de configuración de las siguientes maneras:</p>

<ul>
	<li>Al agregar el iniciador para la configuración de imagen aleatoria a su pantalla de inicio. (Este es un segundo
		iniciador proporcionado por la aplicación)</li>
	<li>Cuando esté en la página de configuración de una lista de imágenes, tocando en la esquina superior izquierda o en
		el icono <img src="<?=$basepath?>/drawable/ic_action_home.png" />.
	</li>
</ul>

<p>Aquí tiene las siguientes posibilidades:</p>

<ul>
	<li>Andar a la configuración de una lista de imágenes individuales (presionando el símbolo de una lista de imágenes)</li>
	<li>Agregar una nueva lista de imágenes (presionando <img src="<?=$basepath?>/drawable/ic_action_plus.png" />)
	</li>
	<li>Seleccionar varias listas de imágenes para copia de seguridad, restauración o eliminación (presionando <img
		src="<?=$basepath?>/drawable/ic_action_checkbox.png" />)
	</li>
	<li>Andar a la configuración general de la aplicación (presionando <img
		src="<?=$basepath?>/drawable/ic_action_settings.png" />)
	</li>
	<li>Cambiar la configuración del widget</li>
	<li>Cambiar la configuración de notificaciones (y agregar o eliminar notificaciones)</li>
	<li>Copia de seguridad, restaurar, renombrar, eliminar o clonar una sola lista de imágenes, o crear un acceso directo
		(presionando prolongadamente un símbolo de lista de imágenes</li>
</ul>
