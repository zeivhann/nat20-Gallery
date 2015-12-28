<?php ?>
<script src="../wp-content/plugins/nat20-gallery/js/main.js"></script>


<p id="msg"></p>


<br />
Listing of current galleries:<br /><br />

<?php

foreach(glob('../wp-content/plugins/nat20-gallery/images/*', GLOB_ONLYDIR) as $dirs) {
    $dirs = str_replace('../wp-content/plugins/nat20-gallery/images/', '', $dirs);
    echo "<strong><big>" . str_replace('-', ' ', $dirs) . "</big></strong><br />";
}

?>

<br /><br />

<form action="../wp-content/plugins/nat20-gallery/nat20-gallery-process-create-gallery.php" class="ajax">
	<h3>Create New Gallery</h3>
	<input name="foldername" id="foldername" placeholder="Gallery Name">
	<input type="submit" value="Create">
</form>

<br /><br />


<form method="post" id="removeForm" action="../wp-content/plugins/nat20-gallery/nat20-gallery-process-remove-gallery.php" class="ajax">
<h3>Delete Existing Gallery</h3>
 <select id="galleryName" name="galleryName">
 
 
		 <?php

		foreach(glob('../wp-content/plugins/nat20-gallery/images/*', GLOB_ONLYDIR) as $dirs) {
			$dirs = str_replace('../wp-content/plugins/nat20-gallery/images/', '', $dirs);
			echo "<option value=\"" . $dirs . "\">" . str_replace('-', ' ', $dirs) . "</option>";
		}

		?>
</select>
<input type="submit" value="Remove" onclick="return chk()" />
</form>