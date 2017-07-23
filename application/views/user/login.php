
<div class="container">
	
	<div class="row">
		<?php if (validation_errors()) : ?>
			<div class="col-md-12">
				<div class="alert alert-danger" role="alert">
					<?= validation_errors() ?>
				</div>
			</div>
		<?php endif; ?>
		<?php if (isset($error)) : ?>
			<div class="col-md-12">
				<div class="alert alert-danger" role="alert">
					<?= $error ?>
				</div>
			</div>
		<?php endif; ?>
		<div class="col-md-12">
			<div class="page-header">
				<h1>User Login</h1>
			</div>
			<?= form_open() ?>
			<form class="form-inline">
				<div class="form-group">
					<div class="row">
						<div class="col-md-3">
							<label for="email">Email</label>
							<input type="email" class="form-control" id="email" name="email" placeholder="mail@mail.com">
						</div>

						<div class="col-md-3">
							<label for="password">Password</label>
							<input type="password" class="form-control" id="password" name="password" placeholder="Your password">
						</div>
					</div>
				<hr>
					<input type="submit" class="btn btn-success" value="Login">
				</div>
			</form>
		</div>
	</div><!-- .row -->
</div>