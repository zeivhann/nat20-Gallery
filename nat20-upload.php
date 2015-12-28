<?php ?>

<script src="../wp-content/plugins/nat20-gallery/js/main.js"></script>
		
			<div>
			<div id="formResponse" style="display: none;"></div>
				
				<form action="../wp-content/plugins/nat20-gallery/nat20-gallery-process-upload.php" method="post" enctype="multipart/form-data" class="ajax">
					Image to Upload: <input type="file" name="fileToUpload" size="25" />
					<br /><br />
					<input type="submit" name="submit" value="Upload Image" />
				</form>

				
				
				
				<script language="JavaScript">
					jQuery(document).ready(function() {
					jQuery('#upload_image_button').click(function() {
					formfield = jQuery('#upload_image').attr('name');
					tb_show('', 'media-upload.php?type=image&TB_iframe=true');
					return false;
					});

					window.send_to_editor = function(html) {
					imgurl = jQuery('img',html).attr('src');
					jQuery('#upload_image').val(imgurl);
					tb_remove();
					}

					});
					
					</script>
				
				
			</div>
			