<?php include 'includes/header.php' ?>
<!-- header section ends here -->
<!-- the body section begins below -->
<?php include 'includes/sidebar.php' ?>

<div id="content" class="content">

<?php 
$capitalize = ucfirst($model);
	$form = $this->Form_builder->start('data_form')
	->appendUpdateForm($capitalize,true,$id)
      ->addSubmitLink(null,false)
      ->appendSubmitButton('Save ', 'btn-success')->build(); 
 ?>
<div class="">
	<h3 class="underline-block">Update Information changed </h3>
	<?php echo $form ?>
</div>

</div>
<div class="clear"></div>

<div class="clear"></div>
<script type="text/javascript">
	function ajaxFormSuccess(target,data) {
		showNotification(data.status,data.message);
		// if (data.status) {
		// 	window.location.reload();
		// }
	}
	</script>
<?php include 'includes/footer.php' ?>