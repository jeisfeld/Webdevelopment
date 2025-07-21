<h2 class="mobile"><span class="hideondropdown"><?=$appname?> - </span>Contenido</h2>

<p>
        <a href="<?=htmlspecialchars($urlprefix, ENT_QUOTES, 'UTF-8')?>/es/overview/">Información general</a>
</p>

<p>
        <a href="<?=htmlspecialchars($urlprefix, ENT_QUOTES, 'UTF-8')?>/es/settings/">Ajustes</a>
</p>

<?PHP
if (isAugendiagnose ()) {
	?>
<p>
        <a href="<?=htmlspecialchars($urlprefix, ENT_QUOTES, 'UTF-8')?>/es/organize_photos/">Organizar nuevas fotos</a>
</p>
<?PHP
}
?>

<p>
        <a href="<?=htmlspecialchars($urlprefix, ENT_QUOTES, 'UTF-8')?>/es/display_photos/">Ver fotos</a>
</p>

<p>
        <a href="<?=htmlspecialchars($urlprefix, ENT_QUOTES, 'UTF-8')?>/es/windowsapp/">La aplicación para Windows</a>
</p>

<p>
        <a href="<?=htmlspecialchars($urlprefix, ENT_QUOTES, 'UTF-8')?>/es/downloads/">Descargas</a>
</p>

<p>
        <a href="<?=htmlspecialchars($urlprefix, ENT_QUOTES, 'UTF-8')?>/es/impressum/">Aviso legal</a>
</p>
