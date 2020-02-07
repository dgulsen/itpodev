<?php 
include("functions/ayar.php");
$id=@$_POST["idgun"];
$getir=$baglan->query("DELETE FROM `kisiler` WHERE `id` = '$id'");
echo'<div class="alert alert-success" role="alert">
	<div class="container">
		<div class="alert-icon">
			<i class="now-ui-icons ui-2_like"></i>
		</div>
		<strong>Silme İşlemi Başarılı..</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">
				<i class="now-ui-icons ui-1_simple-remove"></i>
			</span>
		</button>
	</div>
</div>';
?>
