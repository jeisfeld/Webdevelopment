<h2 class="mobile"><span class="hideondropdown"><?=$appname?> - </span>Contenu</h2>

<p>
    <a href="<?=htmlspecialchars($urlprefix, ENT_QUOTES, 'UTF-8')?>/fr/overview/">Vue d'ensemble</a>
</p>

<p>
    <a href="<?=htmlspecialchars($urlprefix, ENT_QUOTES, 'UTF-8')?>/fr/settings/">Paramètres</a>
</p>

<?PHP
if (isAugendiagnose ()) {
    ?>
<p>
    <a href="<?=htmlspecialchars($urlprefix, ENT_QUOTES, 'UTF-8')?>/fr/organize_photos/">Organiser les photos</a>
</p>
<?PHP
}
?>

<p>
    <a href="<?=htmlspecialchars($urlprefix, ENT_QUOTES, 'UTF-8')?>/fr/display_photos/">Afficher les photos</a>
</p>

<p>
    <a href="<?=htmlspecialchars($urlprefix, ENT_QUOTES, 'UTF-8')?>/fr/windowsapp/">L'application Windows</a>
</p>

<p>
    <a href="<?=htmlspecialchars($urlprefix, ENT_QUOTES, 'UTF-8')?>/fr/downloads/">Téléchargements</a>
</p>

<p>
    <a href="<?=htmlspecialchars($urlprefix, ENT_QUOTES, 'UTF-8')?>/fr/impressum/">Mentions légales</a>
</p>