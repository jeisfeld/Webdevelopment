<h2 class="mobile"><span class="hideondropdown"><?=$appname?> - </span>Conteúdo</h2>

<p>
	<a href="<?=$urlprefix?>/pt/overview/">Informações gerais</a>
</p>

<p>
	<a href="<?=$urlprefix?>/pt/settings/">Ajustes</a>
</p>

<?PHP
if (isAugendiagnose ()) {
	?>
<p>
	<a href="<?=$urlprefix?>/pt/organize_photos/">Organize novas fotos</a>
</p>
<?PHP
}
?>

<p>
	<a href="<?=$urlprefix?>/pt/display_photos/">Visualizar fotos</a>
</p>

<p>
	<a href="<?=$urlprefix?>/pt/windowsapp/">O aplicativo para o Windows</a>
</p>

<p>
	<a href="<?=$urlprefix?>/pt/downloads/">Downloads</a>
</p>

<p>
	<a href="<?=$urlprefix?>/pt/impressum/">Aviso Legal</a>
</p>
