<h2 class="mobile"><span class="hideondropdown"><?=$appname?> - </span>Conteúdo</h2>

<p>
        <a href="<?=htmlspecialchars($urlprefix, ENT_QUOTES, 'UTF-8')?>/pt/overview/">Informações gerais</a>
</p>

<p>
        <a href="<?=htmlspecialchars($urlprefix, ENT_QUOTES, 'UTF-8')?>/pt/settings/">Ajustes</a>
</p>

<?PHP
if (isAugendiagnose ()) {
	?>
<p>
        <a href="<?=htmlspecialchars($urlprefix, ENT_QUOTES, 'UTF-8')?>/pt/organize_photos/">Organize novas fotos</a>
</p>
<?PHP
}
?>

<p>
        <a href="<?=htmlspecialchars($urlprefix, ENT_QUOTES, 'UTF-8')?>/pt/display_photos/">Visualizar fotos</a>
</p>

<p>
        <a href="<?=htmlspecialchars($urlprefix, ENT_QUOTES, 'UTF-8')?>/pt/windowsapp/">O aplicativo para o Windows</a>
</p>

<p>
        <a href="<?=htmlspecialchars($urlprefix, ENT_QUOTES, 'UTF-8')?>/pt/downloads/">Downloads</a>
</p>

<p>
        <a href="<?=htmlspecialchars($urlprefix, ENT_QUOTES, 'UTF-8')?>/pt/impressum/">Aviso Legal</a>
</p>
