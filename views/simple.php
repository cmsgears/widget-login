<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>

<?php if( $actions ) { ?>
<div class="wrap-actions clearfix">
	<div class="btn-login colf2">Login</div>
	<div class="btn-signup colf2">Register</div>
</div>
<?php } ?>

<?php if( $login ) { ?>
	<div id="box-login" class='box-login'>
		<form class="cmt-form" id="frm-login" cmt-controller="user" cmt-action="login" action="<?= Url::toRoute( ['apix/site/login' ], true ) ?>" method="post">
			<div class="max-area-cover spinner">
				<div class="valign-center cmti cmti-2x cmti-spinner-1 spin"></div>
			</div>
			<div class="frm-field clearfix">
				<?php if( $label ) { ?>
					<label>Email *</label>
				<?php } ?>
				<?php if( $fieldIcon ) { ?>
					<div class="frm-icon-element">
						<span class="cmti cmti-at"></span>
						<input  type="text" name="Login[email]" placeholder="Email *">
					</div>
				<?php } else { ?>
					<input  type="text" name="Login[email]" placeholder="Email *">
				<?php } ?>
				<span class="error" cmt-error="email"></span>
			</div>
			<div class="frm-field clearfix">
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
			<div>
				<?= Html::a( "Forgot your Password ?", [ '/forgot-password' ], [ 'class' => 'btn-forgot-password' ] ) ?>
			</div>
			<div class="filler-height"></div>
			<div>
				<input type="submit" name="submit" value="Login">
			</div>
			<div class="message warning"></div>
			<div class="wrap-signup-btn">
				<span class="btn-signup">Sign Up</span>
			</div>
		</form>
	</div>
	<div id="box-forgot-password" class='box-forgot-password'>
		<form class="cmt-form" id="frm-forgot-password" cmt-controller="user" cmt-action="forgotPassword" action="<?= Url::toRoute( ['apix/site/forgot-password' ], true ) ?>" method="post">
			<div class="max-area-cover spinner">
				<div class="valign-center cmti cmti-2x cmti-spinner-1 spin"></div>
			</div>
			<div class="frm-field clearfix">
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
			<div>
				<?= Html::a( "Login ?", [ '/login' ], [ 'class' => 'btn-login' ] ) ?>
			</div>
			<div class="filler-height"></div>
			<div>
				<input type="submit" name="submit" value="Submit">
			</div>
			<div class="message warning"></div>
		</form>
	</div>
<?php } ?>

<?php if( $register ) { ?>
	<div id="box-signup" class='box-signup'>
		<form class="cmt-form" id="frm-signup" cmt-controller="user" cmt-action="register" action="<?= Url::toRoute( ['apix/site/register' ], true ) ?>" method="post">
			<div class="max-area-cover spinner">
				<div class="valign-center cmti cmti-2x cmti-spinner-1 spin"></div>
			</div>
			<div class="frm-field clearfix">
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
			<div class="frm-field clearfix">
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
			<div class="frm-field clearfix">
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
			<div class="frm-field clearfix">
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

			<div class="clearfix">
				<input type="checkbox" name="Register[newsletter]"> Sign Up for our newsletter.
			</div>
			<div class="filler-height"></div>
			<div class="clearfix">
				<div class="clearfix">
					<input type="checkbox" name="Register[terms]"> <em>I agree to Terms and Conditions and Privacy.</em>
				</div>
				<span class="error" cmt-error="terms"></span>
			</div>
			<div class="filler-height"></div>
			<div>
				<input type="submit" name="submit" value="Sign Up">
			</div>
			<div class="message warning"></div>
			<div class="wrap-login-btn">
				<span class="btn-login">Login</span>
			</div>
		</form>
	</div>
<?php } ?>