<h2 class="mobile"><span class="hideondropdown"><?=$appname?> - </span>Contenu</h2>

<p>
    <a href="<?=$urlprefix?>/fr/overview/">Vue d'ensemble</a>
</p>

<p>
    <a href="<?=$urlprefix?>/fr/settings/">Paramètres</a>
</p>

<?PHP
if (isAugendiagnose ()) {
    ?>
<p>
    <a href="<?=$urlprefix?>/fr/organize_photos/">Organiser les photos</a>
</p>
<?PHP
}
?>

<p>
    <a href="<?=$urlprefix?>/fr/display_photos/">Afficher les photos</a>
</p>

<p>
    <a href="<?=$urlprefix?>/fr/windowsapp/">L'application Windows</a>
</p>

<p>
    <a href="<?=$urlprefix?>/fr/downloads/">Téléchargements</a>
</p>

<p>
    <a href="<?=$urlprefix?>/fr/impressum/">Mentions légales</a>
</p>