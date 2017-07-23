
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
					<h1>New User</h1>
				</div>
				<?= form_open() ?>
				<form class="form-inline">
					<div class="form-group">
						<div class="row">
							<div class="col-md-4">
								<label for="firstname">First Name</label>
								<input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter First Name">
							</div>
							<div class="col-md-4">
								<label for="lastname">Last Name</label>
								<input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter Last Name">
							</div>
						<div class="col-md-4">
								<label for="contact">Contact No</label>
								<input class="form-control" type="contact" class="form-control" id="contact" name="contact" placeholder="Enter you Contact No">
							</div>
							</div>
							
						
						
						<div class="row">
						<div class="col-md-4">
								<label for="email">Email</label>
								<input class="form-control" type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
							</div>
							<div class="col-md-4">
								<label for="password">Password</label>
								<input type="password" class="form-control" id="password" name="password" placeholder="Enter a password">
								<p class="help-block">At least 6 characters</p>
							</div>
							<div class="col-md-4">
								<label for="password_confirm">Confirm password</label>
								<input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm your password">
								<p class="help-block">Must match your password</p>
							</div>
						</div>
					<hr>
					<input type="submit" class="btn btn-success" value="Register">

				</div>
				</form>
			</div>
		</div><!-- .row -->
	
	