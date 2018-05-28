<?php
use yii\helpers\Html;
?>
<div class="box-login-wrap">
	<?php if( $actions ) { ?>
	<div class="row login-actions">
		<div class="colf colf2 btn-login">Login</div>
		<div class="colf colf2 btn-signup">Register</div>
	</div>
	<?php } ?>

	<?php if( $login ) { ?>
		<div class="box-login">
			<div class="box-content-wrap">
				<div class="box-content">
				<?php if( $loginDisabled ) { ?>
				<p class="info"><?= $loginMessage ?></p>
				<?php } else { ?>
				<form cmt-app="site" cmt-controller="<?= $widget->loginCmtController ?>" cmt-action="<?= $widget->loginCmtAction ?>" action="<?= $widget->loginAction ?>">
					<div class="max-area-cover spinner">
						<div class="valign-center cmti cmti-2x cmti-spinner-1 spin"></div>
					</div>
					<div class="box-login-fields">
						<div class="frm-field">
							<?php if( $label ) { ?>
								<label>Email *</label>
							<?php } ?>
							<?php if( $fieldIcon ) { ?>
								<div class="frm-icon-element">
									<span class="cmti cmti-user"></span>
									<input  type="text" name="Login[email]" placeholder="Email or Username*">
								</div>
							<?php } else { ?>
								<input  type="text" name="Login[email]" placeholder="Email *">
							<?php } ?>
							<span class="error" cmt-error="email"></span>
						</div>
						<div class="frm-field">
							<?php if( $label ) { ?>
								<label>Password *</label>
							<?php } ?>
							<?php if( $fieldIcon ) { ?>
								<div class="frm-icon-element">
									<span class="cmti cmti-lock-close"></span>
									<input  type="password" name="Login[password]" placeholder="Password *">
								</div>
							<?php } else { ?>
								<input  type="password" name="Login[password]" placeholder="Password *">
							<?php } ?>
							<span class="error" cmt-error="password"></span>
						</div>
					</div>
					<div class="btn-forgot-wrap">
						<?= Html::a( "Forgot your Password ?", [ '/forgot-password' ], [ 'class' => 'btn-forgot' ] ) ?>
					</div>
					<div class="filler-height"></div>
					<div>
						<input type="submit" name="submit" value="Login">
					</div>
					<div class="message success"></div>
					<div class="message warning"></div>
					<div class="message error"></div>
					<div class="btn-signup-wrap">
						<span class="btn-signup">Sign Up</span>
					</div>
				</form>
				<?php } ?>
				</div>
			</div>
		</div>
	<?php } ?>

	<?php if( $forgotPassword ) { ?>
		<div class="box-forgot">
			<div class="box-content-wrap">
				<div class="box-content">
					<form cmt-app="site" cmt-controller="<?= $widget->forgotCmtController ?>" cmt-action="<?= $widget->forgotCmtAction ?>" action="<?= $widget->forgotAction ?>">
						<div class="max-area-cover spinner">
							<div class="valign-center cmti cmti-2x cmti-spinner-1 spin"></div>
						</div>
						<div class="box-forgot-fields">
							<div class="frm-field">
								<?php if( $label ) { ?>
									<label>Email *</label>
								<?php } ?>
								<?php if( $fieldIcon ) { ?>
									<div class="frm-icon-element">
										<span class="cmti cmti-at"></span>
										<input  type="text" name="ForgotPassword[email]" placeholder="Email *">
									</div>
								<?php } else { ?>
									<input  type="text" name="ForgotPassword[email]" placeholder="Email *">
								<?php } ?>
								<span class="error" cmt-error="email"></span>
							</div>
						</div>
						<div class="btn-login-wrap">
							<?= Html::a( "Login ?", [ '/login' ], [ 'class' => 'btn-login' ] ) ?>
						</div>
						<div class="filler-height"></div>
						<div class="message success"></div>
						<div class="message warning"></div>
						<div class="message error"></div>
						<div>
							<input type="submit" name="submit" value="Submit">
						</div>
					</form>
				</div>
			</div>
		</div>
	<?php } ?>

	<?php if( $register ) { ?>
		<div class="box-signup">
			<div class="box-content-wrap">
				<div class="box-content">
				<?php if( $registerDisabled ) { ?>
					<p class="info"><?= $registerMessage ?></p>
				<?php } else { ?>
				<form cmt-app="site" cmt-controller="<?= $widget->registerCmtController ?>" cmt-action="<?= $widget->registerCmtAction ?>" action="<?= $widget->registerAction ?>">
					<div class="max-area-cover spinner">
						<div class="valign-center cmti cmti-2x cmti-spinner-1 spin"></div>
					</div>
					<div class="box-signup-fields">
						<div class="frm-field">
							<?php if( $label ) { ?>
								<label>Email *</label>
							<?php } ?>
							<?php if( $fieldIcon ) { ?>
								<div class="frm-icon-element">
									<span class="cmti cmti-at"></span>
									<input  type="text" name="Register[email]" placeholder="Email *">
								</div>
							<?php } else { ?>
								<input  type="text" name="Register[email]" placeholder="Email *">
							<?php } ?>
							<span class="error" cmt-error="email"></span>
						</div>
						<div class="frm-field">
							<?php if( $label ) { ?>
								<label>Password *</label>
							<?php } ?>
							<?php if( $fieldIcon ) { ?>
								<div class="frm-icon-element">
									<span class="cmti cmti-lock-close"></span>
									<input  type="password" name="Register[password]" placeholder="Password *">
								</div>
							<?php } else { ?>
								<input  type="password" name="Register[password]" placeholder="Password *">
							<?php } ?>
							<span class="error" cmt-error="password"></span>
						</div>
						<div class="frm-field">
							<?php if( $label ) { ?>
								<label>Confirm Password *</label>
							<?php } ?>
							<?php if( $fieldIcon ) { ?>
								<div class="frm-icon-element">
									<span class="cmti cmti-lock-close"></span>
									<input  type="password" name="Register[password_repeat]" placeholder="Confirm Password *">
								</div>
							<?php } else { ?>
								<input  type="password" name="Register[password_repeat]" placeholder="Confirm Password *">
							<?php } ?>
							<span class="error" cmt-error="password_repeat"></span>
						</div>

						<?php if( $optionalFields ) { ?>
						<div class="frm-field">
							<?php if( $label ) { ?>
								<label>Username</label>
							<?php } ?>
							<?php if( $fieldIcon ) { ?>
								<div class="frm-icon-element">
									<span class="cmti cmti-user"></span>
									<input type="text" name="Register[username]" placeholder="Username">
								</div>
							<?php } else { ?>
								<input type="text" name="Register[username]" placeholder="Username">
							<?php } ?>
							<span class="error" cmt-error="username"></span>
						</div>
						<div class="frm-field">
							<?php if( $label ) { ?>
								<label>First Name</label>
							<?php } ?>
							<?php if( $fieldIcon ) { ?>
								<div class="frm-icon-element">
									<span class="cmti cmti-user"></span>
									<input type="text" name="Register[firstName]" placeholder="First Name">
								</div>
							<?php } else { ?>
								<input type="text" name="Register[firstName]" placeholder="First Name">
							<?php } ?>
							<span class="error" cmt-error="firstName"></span>
						</div>
						<div class="frm-field">
							<?php if( $label ) { ?>
								<label>First Name</label>
							<?php } ?>
							<?php if( $fieldIcon ) { ?>
								<div class="frm-icon-element">
									<span class="cmti cmti-user"></span>
									<input type="text" name="Register[lastName]" placeholder="Last Name">
								</div>
							<?php } else { ?>
								<input type="text" name="Register[lastName]" placeholder="Last Name">
							<?php } ?>
							<span class="error" cmt-error="lastName"></span>
						</div>
						<?php } ?>
						<div class="filler-height"></div>
						<div class="clearfix">
							<div class="clearfix">
								<input type="checkbox" name="Register[terms]">
								<em>I agree to the <?= Html::a( "Terms", [ '/terms' ], null ) ?> and <?= Html::a( "Privacy Policy", [ '/privacy' ], null ) ?></em>
							</div>
							<span class="error" cmt-error="terms"></span>
						</div>
					</div>
					<div class="filler-height"></div>
					<div class="message success"></div>
					<div class="message warning"></div>
					<div class="message error"></div>
					<div>
						<input type="submit" name="submit" value="Sign Up">
					</div>
					<div class="btn-login-wrap">
						<span class="btn-login">Login</span>
					</div>
				</form>
				<?php } ?>
				</div>
			</div>
		</div>
	<?php } ?>
</div>