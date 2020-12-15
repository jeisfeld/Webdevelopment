<h2 class="mobile">Contenido</h2>

<p>
	<a href="../?app=<?=$app ?>&lang=es&page=overview" target="_parent">Información general</a>
</p>

<p>
	<a href="../?app=<?=$app ?>&lang=es&page=settings" target="_parent">Ajustes</a>
</p>

<?PHP
if (isAugendiagnose ()) {
	?>
<p>
	<a href="../?app=<?=$app ?>&lang=es&page=organize_photos" target="_parent">Organizar nuevas fotos</a>
</p>
<?PHP
}
?>

<p>
	<a href="../?app=<?=$app ?>&lang=es&page=display_photos" target="_parent">Ver fotos</a>
</p>

<p>
	<a href="../?app=<?=$app ?>&lang=es&page=windowsapp" target="_parent">La aplicación para Windows</a>
</p>

<p>
	<a href="../?app=<?=$app ?>&lang=es&page=downloads" target="_parent">Descargas</a>
</p>

<p>
	<a href="../?app=<?=$app ?>&lang=de&page=impressum" target="_parent">Aviso legal</a>
</p>
