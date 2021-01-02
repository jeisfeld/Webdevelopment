<h2 class="mobile"><span class="hideondropdown"><?=$appname?> - </span>Contenido</h2>

<p>
	<a href="<?=$urlprefix?>/es/overview/">Información general</a>
</p>

<p>
	<a href="<?=$urlprefix?>/es/settings/">Ajustes</a>
</p>

<?PHP
if (isAugendiagnose ()) {
	?>
<p>
	<a href="<?=$urlprefix?>/es/organize_photos/">Organizar nuevas fotos</a>
</p>
<?PHP
}
?>

<p>
	<a href="<?=$urlprefix?>/es/display_photos/">Ver fotos</a>
</p>

<p>
	<a href="<?=$urlprefix?>/es/windowsapp/">La aplicación para Windows</a>
</p>

<p>
	<a href="<?=$urlprefix?>/es/downloads/">Descargas</a>
</p>

<p>
	<a href="<?=$urlprefix?>/es/impressum/">Aviso legal</a>
</p>
