<h2><?php if (!array_key_exists("createHtmlString", $_GET)) {?><span class="mobile"><?=$appname?> - </span><?php }?>Visualizar fotos</h2>

<p>Aqui você pode selecionar o nome de uma pessoa cujas fotos de olhos você deseja ver. Em seguida, o aplicativo
	mostrará todas as fotos dos olhos dessa pessoa em uma lista ordenada por data.</p>

<p>Em seguida, você tem as seguintes possibilidades:</p>

<ul>
	<li>Mostre uma das fotos em detalhes (clicando em uma foto).</li>

	<li>Mostrar as duas fotos de uma data (clicando em uma data).</li>

	<li>Mostrar duas fotos de datas diferentes (clicando longamente em uma foto e clicando em uma segunda foto).</li>

	<li>Mostrar duas fotos de pessoas diferentes: selecione uma foto dessa pessoa (pressione e segure) e selecione uma foto
		de uma pessoa diferente.</li>
</ul>

<p>Observe que os gráficos de topografia da íris podem ser organizados como fotos de olhos - Isso permite comparar as
	fotos dos olhos com os gráficos da topografia da íris. Esses gráficos não estão incluídos no aplicativo (exceto para
	sobreposições).</p>

<h3>Outras opções na visão geral</h3>

<ul>
	<li>Ao pressionar demoradamente um nome na lista de nomes, você pode alterar ou excluir o nome</li>

	<li>Ao clicar longamente em uma data na lista de fotos para um nome, você pode alterar a data ou excluir as imagens dessa data ou pode  
			<?PHP if(isMiniris()) { ?>
			mover essas fotos para um nome diferente.
			<?PHP } else { ?>
			mover essas fotos para a pasta de entrada (por exemplo, para movê-las para um nome diferente).
			<?PHP } ?>
		</li>
</ul>

<h3>Outras opções na visualização detalhada</h3>

<p>Na exibição detalhada (uma ou duas fotos), você tem as seguintes possibilidades:</p>

<ul>
	<li>Mudança de brilho e contraste através de deslizamento <img src="<?=$basepath?>/drawable/ic_seek_brightness.png" /><img
		src="<?=$basepath?>/drawable/ic_seek_contrast.png" />, bem como a mudança de saturação <img
		src="<?=$basepath?>/drawable/ic_seek_saturation.png" /> e temperatura de cor <img src="<?=$basepath?>/drawable/ic_seek_color_temperature.png" /></li>

	<li>Rotação da foto (botão <img src="<?=$basepath?>/drawable/ic_btn_rotate.png" class="frameless" />)
	</li>

	<li>
		<p>
			Visualizando uma topografia da íris como uma sobreposição (botão de círculo <img src="<?=$basepath?>/drawable/ic_btn_wheel.png"
				class="frameless" /> e botões numerados), adaptação da sobreposição de íris e armazenamento da posição de
			sobreposição <img src="<?=$basepath?>/drawable/ic_lock_open.png" />)
		</p>
		<p>Ao pressionar longamente um dos botões numerados, você pode alterar a sobreposição para este botão. Pelo último
			botão numerado, isso também permite excluir o botão ou adicionar outro botão.</p>
	</li>

	<li>Adaptação do tamanho da pupila das sobreposições (botão <img src="<?=$basepath?>/drawable/ic_btn_pupil_0.png" class="frameless" />).
		Aqui você pode manter a pupila centrado (<img src="<?=$basepath?>/drawable/ic_btn_pupil_1.png" class="frameless" />) ou movê-lo
		livremente (<img src="<?=$basepath?>/drawable/ic_btn_pupil_2.png" class="frameless" />).
	</li>

	<li>Salve as configurações de brilho e contraste selecionadas (por meio do botão &laquo;salvar&raquo; <img
		src="<?=$basepath?>/drawable/ic_action_save.png" /> na barra de ação)
	</li>

	<li>Salve a posição e zoom (por meio do botão &laquo;salvar&raquo; <img src="<?=$basepath?>/drawable/ic_action_save.png" /> na
		barra de ação)
	</li>

	<li>Partilhar a foto (através do botão &laquo;partilhar&raquo; <img src="<?=$basepath?>/drawable/ic_action_share.png" /> na barra
		de ação)
	</li>

	<li>Alterar o comentário da foto (por meio do botão &laquo;documento&raquo; <img src="<?=$basepath?>/drawable/ic_comment.png" /> na
		barra de ação)
	</li>
</ul>

<p>
	Estas funções podem ser ativadas ou desativadas através do botão &laquo;Mostrar/Ocultar ferramentas&raquo; (<img
		src="<?=$basepath?>/drawable/ic_tools_up.png" /> <img src="<?=$basepath?>/drawable/ic_tools_down.png" /> <img
		src="<?=$basepath?>/drawable/ic_tools_left.png" /> <img src="<?=$basepath?>/drawable/ic_tools_right.png" />).
</p>
