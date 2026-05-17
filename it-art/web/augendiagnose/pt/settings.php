<h2><?php if (!array_key_exists("createHtmlString", $_GET)) {?><span class="mobile"><?=$appname?> - </span><?php }?>Ajustes</h2>

O aplicativo permite as seguintes configurações:
<?PHP
if (isAugendiagnose ()) {
	?>
<h3>Configurações de entrada</h3>

<table width="100%" border="1">
	<tr>
		<td width="30%" valign="top">Pasta de entrada para novas fotos</td>
		<td width="70%" valign="top">
			<p>Esta é a pasta, de onde as novas fotos são importadas. Por padrão, essa é a pasta de destino do aplicativo Eye-Fi
				ou a pasta de aplicativos padrão da câmera. No entanto, você pode configurar qualquer outra pasta aqui.</p>

			<p>Bagagem com relação à aplicação Eye-Fi: normalmente, a câmera do celular não é suficiente para tirar fotos de olho
				em alta qualidade. Uma abordagem mais prática é usar uma câmera externa com SD Eye-Fi, que transfere as fotos via
				WLAN no dispositivo celular.</p>
		</td>
	</tr>
	<tr>
		<td width="30%" valign="top">Última foto é olho direito</td>
		<td width="70%" valign="top">Aqui você pode definir se a última foto é o olho direito ou o olho esquerdo. Por padrão,
			este é o olho esquerdo (o que significa que você primeiro tirou uma foto do olho direito e depois do olho esquerdo).</td>
	</tr>
</table>
<?PHP
}
?>

<h3>Configurações de exibição</h3>

<table width="100%" border="1">
	<tr>
		<td width="30%" valign="top">Ordenar pelo sobrenome</td>
		<td width="70%" valign="top">Aqui você pode definir se a lista de nomes será classificada pelo sobrenome.</td>
	</tr>
	<tr>
		<td width="30%" valign="top">Configuração guiada de íris e pupila</td>
		<td width="70%" valign="top">Aqui você pode decidir se será guiado através da determinação da posição da íris e da
			pupila antes de poder mostrar sobreposições.</td>
	</tr>
	<tr>
		<td width="30%" valign="top">Cor padrão de sobreposições</td>
		<td width="70%" valign="top">Aqui você pode definir a cor padrão para sobreposições de topografias da íris. (Padrão:
			vermelho)</td>
	</tr>
	<tr>
		<td width="30%" valign="top">Idioma</td>
		<td width="70%" valign="top">Aqui você pode alterar o idioma em que o aplicativo será exibido. Uma alteração no valor
			força uma reinicialização do aplicativo.</td>
	</tr>
	<tr>
		<td width="30%" valign="top">Mostrar todas as dicas</td>
		<td width="70%" valign="top">Aqui você pode reativar todas as dicas.</td>
	</tr>
	<tr>
		<td width="30%" valign="top">Não mostre conselhos</td>
		<td width="70%" valign="top">Aqui você pode desativar todas as dicas existentes (o que é útil após a nova instalação,
			se você já conhece o aplicativo).</td>
	</tr>
</table>

<h3>Configurações de armazenamento e memória</h3>

<table width="100%" border="1">
	<tr>
		<td width="30%" valign="top">Pasta de fotos dos olhos</td>
		<td width="70%" valign="top"><p>Esta é a pasta na qual o aplicativo gerencia as fotos dos olhos. Normalmente, você não
				precisa alterar isso. A partir daqui, você pode copiar as fotos para outros dispositivos.</p>

			<p>A pasta padrão é &laquo;FotosOcular&raquo;.</p>

			<p>Você pode selecionar uma pasta aqui, na memória do dispositivo ou em um cartão SD. No Android 4.4 (Kitkat), o
				armazenamento no cartão SD tem algumas limitações, portanto, algumas operações levarão mais tempo. No Android 5, ao
				selecionar uma pasta no cartão SD, você terá que conceder direitos de acesso ao cartão SD através do &laquo;Storage
				Access Framework&raquo; do Android.</p></td>
	</tr>
	<tr>
		<td width="30%" valign="top">Tamanho máximo de bitmaps</td>
		<td width="70%" valign="top">Este é o tamanho em que as fotos são reduzidas antes de serem exibidas. Isso é necessário
			para salvar a memória do dispositivo. O valor padrão é 2048. Em dispositivos com pouca memória, pode ser necessário
			definir um valor mais baixo (por exemplo, 1024). valores muito grandes podem bloquear o aplicativo.</td>
	</tr>
	<tr>
		<td width="30%" valign="top">Mostrar imagem de alta resolução</td>
		<td width="70%" valign="top">Aqui você pode decidir sob quais circunstâncias a foto é mostrada em alta resolução, o
			que permite ver mais detalhes na foto, mas consome memória e tempo de cálculo.

			<ul>
				<li><b>Sempre carregar automaticamente:</b> O aplicativo sempre armazena as fotos em resolução máxima na memória.
					Isso proporciona a melhor experiência do usuário em dispositivos de última geração, mas pode levar a falhas se não
					houver memória suficiente disponível.</li>

				<li><b>Carregar automaticamente quando apenas uma foto é exibida:</b> O aplicativo mostra a resolução completa
					somente quando uma única imagem é exibida. Isso requer um meio de memória.</li>

				<li><b>Carregar apenas se solicitado</b> O aplicativo não mostra a imagem em alta resolução. Isso requer menos
					memória e tempo de cálculo, mas os detalhes na foto podem ser perdidos. O botão &laquo;lupa&raquo; <img
					src="<?=$basepath?>/drawable/ic_clarity.png" /> permite visualizar os detalhes atuais da imagem em resolução total.</li>
			</ul>
		</td>
	</tr>
	<tr>
		<td width="30%" valign="top">Salvar dados adicionais no JPG</td>
		<td width="70%" valign="top">Aqui você pode limitar o armazenamento de dados nos arquivos JPG do aplicativo.

			<ul>
				<li><b>Salvar em EXIF (recomendado):</b> O aplicativo salva as informações relevantes no arquivo JPG, mesmo em
					campos padrão visíveis no Windows.</li>

				<li><b>Salvar em campos personalizados:</b> O aplicativo salva as informações no arquivo JPG, mas apenas em campos
					separados. Campos padrão permanecem inalterados; Os dados do Exchange com o Windows não são possíveis.</li>

				<li><b>Não salve dados em imagens:</b> O aplicativo não armazena informações em arquivos JPG. (Isso limita a
					funcionalidade do aplicativo.)</li>
			</ul>
		</td>
	</tr>
	<tr>
		<td width="30%" valign="top">Detecção automática de íris</td>
		<td width="70%" valign="top">Aqui você pode selecionar se o aplicativo deve tentar encontrar automaticamente a posição
			da íris e da pupila nas fotos dos olhos. Normalmente, isso simplifica o posicionamento das sobreposições, mas exige
			muitos recursos do telefone, e o resultado pode estar incorreto.</td>
	</tr>
</table>

<h3>Configurações da câmera</h3>

<table width="100%" border="1">
<?PHP
if (isMiniris ()) {
	?>
		<tr>
		<td width="30%" valign="top">Comece com o olho esquerdo</td>
		<td width="70%" valign="top">Aqui você pode definir o olho que deve ser fotografado primeiro. Por padrão, esse é o
			olho direito.</td>
	</tr>
<?PHP
}
?>
		<tr>
		<td width="30%" valign="top">Compatibilidade câmera</td>
		<td width="70%" valign="top">Se o dispositivo funcionar com o Android 5 ou superior, aqui você pode selecionar se a
			câmera deve ou não usar as novas funções do Android 5. Seleção de «Android 4» faz sentido no caso de problemas com
			compatibilidade com o Android 5.</td>
	</tr>
	<tr>
		<td width="30%" valign="top">Ativar o flash</td>
		<td width="70%" valign="top">Aqui você pode ativar o flash. Por padrão, isso é desativado, pois é perigoso usar o
			flash próximo ao olho.</td>
	</tr>
	<tr>
		<td width="30%" valign="top">Ativar flash LED externo</td>
		<td width="70%" valign="top">Aqui você pode definir se o uso de um &laquo;Flash & Fill-in Light&raquo; conectado ao
			fone de ouvido deve ser ativado.</td>
	</tr>
	<tr>
		<td width="30%" valign="top">Use a câmera frontal</td>
		<td width="70%" valign="top">Aqui você pode especificar para usar a câmera frontal para tirar fotos. Por padrão, a
			câmera traseira é usada.</td>
	</tr>
	<tr>
		<td width="30%" valign="top">Mostrar link para o apl. câmera</td>
		<td width="70%" valign="top">Aqui você pode especificar se deseja mostrar o botão para tirar fotos com o aplicativo da
			câmera do sistema.</td>
	</tr>
	<tr>
		<td width="30%" valign="top">Posição da tela da câmera</td>
		<td width="70%" valign="top">Se a fita Miniris ocultar alguns botões na tela da câmera, você poderá usar essa
			configuração para mover a tela da câmera para a direita ou para a esquerda.</td>
	</tr>
</table>

<h3>Botões de sobreposição</h3>

<p>Esta página permite definir quais topografias de íris podem ser exibidas pressionando os botões de sobreposição. Isso
	também pode ser feito enquanto visualiza as fotos, fazendo uma pressão longa em um botão de sobreposição.</p>

<h3>Pacotes Premium / Ajuda</h3>

<p>Esta página oferece a possibilidade de comprar um pacote premium, que lhe dá acesso ilimitado a todas as funções do
	aplicativo.</p>

<p>Além disso, existem as seguintes funções:</p>

<table width="100%" border="1">
<?PHP
if (isAugendiagnose ()) {
	?>
		<tr>
		<td width="30%" valign="top">Remover anúncios (somente para usuários de versões anteriores)</td>
		<td width="70%" valign="top">Aquí usted puede desactivar todos los anuncios (actualmente sólo en los Estados Unidos).
			Esta función se puede activar a través de una donación o mediante clave de usuário.</td>
	</tr>
<?PHP
}
?>
		<tr>
		<td width="30%" valign="top">Entre em contato com o desenvolvedor</td>
		<td width="70%" valign="top">Aqui você pode enviar um email para o desenvolvedor em caso de ter desejos ou problemas.</td>
	</tr>
	<tr>
		<td width="30%" valign="top">Senha do usuário</td>
		<td width="70%" valign="top">Uma chave de usuário que permite o desbloqueio de funcionalidades adicionais.</td>
	</tr>
</table>
