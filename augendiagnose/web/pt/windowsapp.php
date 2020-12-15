<?php
$page="windowsapp";
include "pageheader_pt.php";
?>
<h2>O aplicativo para o Windows</h2>

<p>Existe um aplicativo de acompanhamento do Windows que permite visualizar as fotos de seus olhos em um computador com
	Windows, como no aplicativo Android.</p>

<p>O aplicativo do Windows foi projetado apenas como um complemento para o aplicativo Android. Permite menos funções do
	que a aplicação Android. Em particular, não permite organizar novas fotos e estabelecer a posição das sobreposições. No
	entanto, permite mostrar fotos e sobreposições e editar o comentário.</p>

<p>
	Para usar o aplicativo do Windows, você precisa sincronizar a pasta de fotos do olho do seu dispositivo Android com uma
	pasta de foto de olho correspondente no computador Windows. Esta pasta deve ser configurada nas configurações.<br> Uma
	maneira possível de sincronizar é instalar um aplicativo WebDAV no seu dispositivo Android e instalar algum aplicativo
	de sincronização no seu computador Windows (como o FreeFileSync). Você pode então configurar os aplicativos de
	sincronização de forma que acesse seu dispositivo Android sem fio através do WebDAV.
</p>

<h3>Entradas do menu</h3>
<ul>
	<li><b>Arquivo&rarr;Sair:</b> Sai do aplicativo.</li>

	<li><b>Visualizar&rarr;Barra de sobreposição:</b> Mostra ou oculta o painel para exibir sobreposições ou alterar o
		brilho / contraste</li>

	<li><b>Visualizar&rarr;Barra de comentários:</b> Mostra ou oculta o painel para editar o comentário.</li>

	<li><b>Visualizar&rarr;Janela dividida:</b> Divida da janela, para que duas fotos possam ser visualizadas em paralelo.</li>

	<li><b>Janela&rarr;Fechar:</b> Aqui você pode fechar a visão detalhada de um olho. (Você também pode clicar na cruz no
		canto superior direito.)</li>

	<li><b>Janela&rarr;Ajustes:</b> Altera as configurações.</li>

	<li><b>Ajuda&rarr;Verificar atualizações:</b> Aqui você pode verificar se há uma atualização do aplicativo. Se houver
		uma nova atualização, você também será informado uma vez no início do aplicativo.</li>

	<li><b>Ajuda&rarr;Desinstalar aplicativo:</b> Aqui você pode desinstalar o aplicativo.</li>
</ul>

<h3>Ajustes</h3>

<ul>
	<li><b>Pasta de fotos dos olhos:</b> Aqui você tem que selecionar a pasta principal onde as fotos dos olhos são
		armazenadas. Esta pasta deve ter a mesma estrutura que no aplicativo Android.</li>

	<li><b>Tamanho máximo dos bitmaps:</b> Este é o tamanho em que as fotos são reduzidas antes de serem exibidas.</li>

	<li><b>Tamanho máximo da imagem de visualização:</b> Este é o tamanho das fotos que são reduzidas na visualização de
		miniaturas.</li>

	<li><b>Cor padrão de sobreposições:</b> Aqui você pode definir a cor padrão para sobreposições de topografias da íris.</li>

	<li><b>Ordenar pelo sobrenome:</b> Aqui você pode definir se a lista de nomes será classificada pelo sobrenome.</li>

	<li><b>Atualizar automaticamente:</b> Se você selecionar essa opção, novas versões do aplicativo serão instaladas
		automaticamente na inicialização.</li>

	<li><b>Idioma:</b> Aqui você pode alterar o idioma em que o aplicativo será exibido. Uma alteração no valor força uma
		reinicialização do aplicativo.</li>
</ul>

<h3>Notas de lançamento</h3>

<ul>
	<li><b>Versão 0.1.15:</b> Adicionado mapa de Jausas (francês). Correção de erros.</li>

	<li><b>Versão 0.1.14:</b> Adicionado sobreposiçãos em francês e polonês</li>

	<li><b>Versão 0.1.13:</b> Adicionado mapa de Rayid numérico. Correção de erros.</li>

	<li><b>Versão 0.1.12:</b> Adicionado localização portuguesa. Correção de erros.</li>

	<li><b>Versão 0.1.11:</b> Ativando o manuseio de uma única foto do olho. Correção de erros.</li>

	<li><b>Versão 0.1.10:</b> Visualização simples e ocultação de comentários.</li>

	<li><b>Versão 0.1.9:</b> Mudança simples entre visualização de imagem simples e dupla.</li>

	<li><b>Versão 0.1.8:</b> Amplie a imagem através da tela sensível ao toque.</li>

	<li><b>Versão 0.1.7:</b> Alteração de saturação e temperatura de cor.</li>

	<li><b>Versão 0.1.6:</b> Correção de erros.</li>

	<li><b>Versão 0.1.5:</b> Os usuários agora podem especificar quais superposições estão associadas aos botões de
		sobreposição. Correção de erros.</li>

	<li><b>Versão 0.1.4:</b> Adaptação de sobreposições no tamanho da pupila. Corrigir a visualização de fotos giradas.</li>

	<li><b>Versão 0.1.3:</b> Visualizando duas fotos ao mesmo tempo. Exibição em tela cheia rápida.</li>

	<li><b>Versão 0.1.2:</b> Dê um aviso ao fechar a janela enquanto edita o comentário.</li>

	<li><b>Versão 0.1.1:</b> Seleção de idioma ativado.</li>

	<li><b>Versão 0.1:</b> Versão inicial. Permite que você navegue pelas fotos organizadas de olho, mostre um olho em
		detalhes, mostre sobreposições, altere o brilho e o contraste, edite o comentário.</li>
</ul>

<h3>
	<a href="../?lang=pt&page=downloads" target="_parent">Vá para a página de download</a>
</h3>
<?php
include "../php/pagefooter.php";
?>
