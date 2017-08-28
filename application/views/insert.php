<?php include 'includes/header.php' ?>
<!-- header section ends here -->
<!-- the body section begins below -->
<?php include 'includes/sidebar.php';$exception= array('payment'); ?>

<div id="content" class="content">
<div class="underline-block">
<?php if (!in_array($model, $exception)): ?>
	<div  class="form-btn btn btn-primary" target-form='popup'>
		Add New <?php echo $model ?>
	</div>
<?php endif ?>

<div class="clear"></div>
</div>
<?php 
$capitalize = ucfirst($model);

if (!in_array($model, $exception)) {
		$form = $this->Form_builder->start('user_form')
	->appendInsertForm($capitalize)
      ->addSubmitLink()
      ->appendSubmitButton('Save ', 'btn-success')->build();
}

      $ignore = array('password');
      if ($model=='unit_activity') {
      	$table= $this->Table_generator->getFilteredTableHtml($model,array('unit'=>$id),$mess,array('unit'));
      } else {
      	$table = $this->Table_generator->getTableHtml($capitalize,$message,$ignore);
      }
      
        
 ?>
<div class="">
	<h3 class="underline-block">List of <?php echo $capitalize ?>s</h3>
	<?php echo $table ?>
</div>

</div>
<div class="clear"></div>
<?php if (!in_array($model, $exception)): ?>
	<div class="popup" id="popup">
	<div class="form-container"  id="form-container" >
	<span class="close">&times;</span>
	<h3 >Add New <?php echo $model ?></h3>
		<?=$form?>
	</div>
	</div>
<?php endif ?>

<div class="clear"></div>
<script type="text/javascript">
	function ajaxFormSuccess(target,data) {
		showNotification(data.status,data.message);
		if (data.status) {
			window.location.reload();
		}
	}
	</script>
<?php include 'includes/footer.php' ?>