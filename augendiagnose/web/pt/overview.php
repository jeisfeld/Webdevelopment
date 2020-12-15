<h2><?=$appname?> - Informações Gerais</h2>

<?PHP
if (isAugendiagnose ()) {
	?>
	
	Esta aplicação tem como objetivo auxiliar na visualização de fotografias dos olhos em um dispositivo Android, a fim de realizar o diagnóstico médico.

<h3>Características principais</h3>

<ul>
	<li>Organização de fotos de olhos por nome, data e lado (direita/esquerda)</li>
	<li>Visualização de duas fotos de olho em paralelo (com a possibilidade de redimensionamento individual), a fim de
		compará-las (por exemplo, comparação da direita para a esquerda, comparação antes-depois, comparação de pessoas
		diferentes ou comparação com uma topografia da íris ).</li>
	<li>Mudança de brilho e contraste da foto durante a visualização e superposição com uma topografia da íris.</li>
	<li>Você também pode salvar as informações nas fotos, por exemplo, o brilho e os comentários. Para poder armazenar
		informações e usar toda a funcionalidade do aplicativo, as fotos devem estar no formato JPG.</li>
</ul>

<h3>Atividades principais</h3>

<h4>Passo 1:. Organize fotos</h4>

<p>Nesta etapa, você pode organizar as fotos dos olhos.</p>

<p>O aplicativo espera novas fotos dos olhos em uma pasta de entrada. Isso é pré-configurado como a pasta de destino do
	aplicativo Eye-Fi ou como a pasta padrão da câmera, mas pode ser alterado por meio da configuração.</p>

<p>Na atividade &laquo;Organizar novas fotos&raquo;, você pode atribuir novas fotos dos olhos da pasta de entrada a uma
	pessoa e uma data e prepará-las dessa maneira para o aplicativo. Desta forma, as fotos serão renomeadas e transferidas
	para a pasta do aplicativo.</p>

<p>Como alternativa, você pode selecionar duas fotos em um navegador de arquivos ou em um aplicativo de fotos e enviar
	essas fotos para o aplicativo Eye Diagnostic. Você pode organizar essas fotos no aplicativo. Nesse caso, as fotos não
	serão excluídas do local anterior.</p>

<p>
	Como alternativa adicional, é possível tirar fotos diretamente do aplicativo com a câmera do dispositivo. Isso
	geralmente não oferece fotos com qualidade adequada, mas serve como uma alternativa para uma câmera profissional, em
	particular, se você usar uma lente macro, como o
	<a href="https://sites.google.com/view/irisocamera/home/espanol/miniris-esp" target="_blank">Miniris-2</a>
	ou o
	<a href="https://sites.google.com/view/irisocamera/home/espanol/iricell-esp" target="_blank">Iricell</a>
	.
</p>

<h4>Passo 2: Visualizar fotos</h4>

<p>Este é o objetivo principal do aplicativo, mas requer que as fotos sejam organizadas por meio do passo 1.</p>

<p>Nesta atividade, você pode</p>
<ul>
	<li>Mostrar uma das fotos em detalhes. Aqui você também pode alterar o brilho e o contraste da foto, exibir topografias
		de íris como sobreposição ou escrever comentários em uma foto.</li>

	<li>Mostrar duas fotos para comparação (e alterar o tamanho independente).</li>
</ul>

<h3>Período de experiência / pacotes Premium</h3>

<p>O aplicativo permite o uso gratuito somente durante um período de teste de duas semanas. O uso adicional requer a
	compra de um pacote dentro do aplicativo (uma só vez).</p>

<h3>Aplicativo para Windows</h3>

<p>
	Existe um aplicativo de acompanhamento do Windows que pode ser usado para visualizar as fotos que foram organizadas com
	este aplicativo. Para mais informações, consulte
	<a href="https://augendiagnose-app.de/?lang=pt&page=windowsapp" target="_top">https://augendiagnose-app.de/?page=windowsapp</a>
	.
</p>

<h3>Armazenamento de dados</h3>

<p>O aplicativo registra informações (como posição da íris ou comentários) diretamente nos arquivos de imagem JPG. Isso
	tem a vantagem de que todas as informações ainda estão disponíveis se você copiar as imagens de um dispositivo para
	outro. Em parte, informações como comentários ainda estarão disponíveis no MS Windows.</p>

<p>No entanto, esse tipo de armazenamento impõe um pequeno risco. Pode acontecer que em alguns dispositivos, ou para as
	imagens de algumas câmeras, o armazenamento de informações no JPG falhe, ou até mesmo destrua o arquivo JPG. Portanto,
	é recomendável que você mantenha cópias de backup de seus arquivos JPG, pelo menos quando você usar o aplicativo pela
	primeira vez com um novo dispositivo ou com uma nova câmera.</p>

<?PHP
}
else {
	?>

<p>
	Esta aplicação tem o objetivo de apoiar a captura e visualização de fotografias da íris em um dispositivo Android, a
	fim de fazer um diagnóstico da íris. Ele é otimizado para uso com o anexo
	<a href="https://sites.google.com/view/irisocamera/home/espanol/miniris-esp" target="_blank">Miniris-2</a>
	o el
	<a href="https://sites.google.com/view/irisocamera/home/espanol/iricell-esp" target="_blank">Iricell</a>
	.
</p>

<p>As principais características do aplicativo são</p>

<ul>
	<li>Capture fotos da íris usando a câmera do telefone (por exemplo, com a ajuda do anexo Miniris-2).</li>
	<li>Organização das fotos da íris por nome, data e lado (direita / esquerda).</li>
	<li>A visualização de duas fotos de íris em paralelo (com o apoio da mudança de tamanho individual).</li>
	<li>Mudança de brilho e contraste da foto durante a visualização, sobreposição com a topografia da íris e economia de
		comentários.</li>
</ul>

<p>O aplicativo registra informações (como posição da íris ou comentários) diretamente nos arquivos de imagem JPG. Isso
	tem a vantagem de que todas as informações ainda estão disponíveis se você copiar as imagens de um dispositivo para
	outro.</p>

<h3>Usando a câmera</h3>

<p>Quando você abre a câmera, você verá as seguintes áreas:</p>

<ul>
	<li>No lado direito no meio está o botão para capturar a foto. Depois de capturar uma foto, você pode decidir se deseja
		manter a foto ou se deseja descartá-la e capturar a foto novamente.</li>
	<li>Abaixo está um botão que permite tirar a foto com o aplicativo da câmera do sistema. Isso pode ser útil no caso de
		dispositivos com características especiais da câmera, como lentes duplas.</li>
	<li>Nos cantos no topo é a tela do olho direito e esquerdo. A marca vermelha indica qual olho está planejado para a
		próxima foto. Ao clicar em uma dessas áreas, você pode alterar o lado.</li>
	<li>Há um grande círculo na tela da câmera. Este círculo indica o local onde a íris deve aparecer na foto.</li>
	<li>No canto inferior esquerdo, há um botão com um círculo e o texto &laquo;zoom&raquo;. Aqui você pode definir o zoom
		da câmera e selecionar o tamanho da íris na foto.</li>
	<li>Acima, há um botão com o texto &laquo;MACRO&raquo; ou &laquo;AUTO&raquo;. Aqui você pode selecionar o modo de foco
		da câmera. Para close-ups, o modo macro geralmente é uma boa escolha.</li>
	<li>Para cima, há um botão de flash. Aqui você pode ligar a luz do seu dispositivo. Como um flash na frente do olho é
		perigoso, ele está desabilitado por padrão, mas você pode ativá-lo na configuração. Você também pode usar o
		&laquo;Flash & Fill-in Light&raquo; conectado à entrada do fone de ouvido.</li>
</ul>

<p>Depois de tirar fotos de ambos os olhos, uma página é aberta, onde você pode revisar as duas fotos e inserir o nome
	da pessoa a quem essas fotos devem ser atribuídas. Aqui você também pode alterar a data das fotos - para cada pessoa e
	cada data, apenas algumas fotos podem ser armazenadas.</p>

<p>Se você parar o aplicativo depois de tirar uma ou duas fotos dos olhos, mas antes de atribuir um nome, o próximo
	início do aplicativo continuará onde parou - as fotos que foram tiradas permanecerão até você decidir excluí-las ou
	substituí-las.</p>

<h3>Período de experiência / pacotes Premium</h3>

<p>O aplicativo permite o uso gratuito somente durante um período de teste de duas semanas. O uso adicional requer a
	compra de um pacote dentro do aplicativo (uma só vez).</p>

<h3>Aplicativo para Windows</h3>

<p>
	Existe um aplicativo de acompanhamento do Windows que pode ser usado para visualizar as fotos que foram organizadas com
	este aplicativo. Para mais informações, consulte
	<a href="https://augendiagnose-app.de/?app=miniris&lang=pt&page=windowsapp" target="_top">https://augendiagnose-app.de/?app=miniris&page=windowsapp</a>
	.
</p>

<?PHP
}
?>

<a name="privacy"></a>
<h3>Política de privacidade</h3>

<p>
		O aplicativo &laquo;<?=$appname?>&raquo; usa a câmera para tirar fotos dos olhos. O aplicativo não armazena, 
		coleta ou envia dados pessoais. Todas as fotografias tiradas pela aplicação são armazenadas apenas localmente 
		no dispositivo.
	</p>

<p>
	O aplicativo também usa o Google Analytics para coletar informações estatísticas sobre erros e uso do aplicativo. Isso
	é com o objetivo de obter informações para melhorias no aplicativo. Consulte a
	<a href="https://support.google.com/analytics/answer/6004245?hl=pt" target="_blank">Política de Privacidade do Google
		Analytics </a>
	para mais detalhes.
</p>

<div class="mobile">
	<?php include ("./".$language."/navigation.php"); ?>
</div>

