<?php include 'includes/header.php';include 'includes/sidebar.php' ?>

<div class="content">
	<h4 class="underline-block">WELCOME TO THE ADMINISTATIVE PAGE OF THE CHURCH</h4>

		<a class="dashboard-item" href="<?= base_url('adm/edit/church') ?>" >
			Church Information
		</a>
		<a class="dashboard-item" href="<?= base_url('adm/v/event') ?>" >
			Events
		</a>
		<a class="dashboard-item" href="<?= base_url('adm/v/sermon') ?>" >
			Sermon
		</a>
		<a class="dashboard-item" href="<?= base_url('adm/v/unit') ?>" >
			Units
		</a>
		<a class="dashboard-item" href="<?= base_url('adm/v/payment') ?>" >
			Payments
		</a>
		<a class="dashboard-item" href="<?= base_url('adm/v/payment') ?>" >
			Gallery
		</a>
</div>

<?php include 'includes/footer.php' ?>