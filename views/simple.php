<?php
use yii\helpers\Html;
?>

<?php if( $actions ) { ?>
<div class="actions clearfix">
	<div class="colf2" id='box-login-show'>Login</div>
	<div class="colf2" id='box-signup-show'>Register</div>
</div>
<?php } ?>
<div id="box-login" class='popout-header'>
	<form class="frm-ajax" id="frm-login" cmt-controller="default" cmt-action="login" action="<?php echo Yii::$app->urlManager->createAbsoluteUrl("apix/login"); ?>" method="post">
		<div class="max-area-cover spinner"><div class="valign-center fa fa-3x fa-spinner fa-spin"></div></div>

		<div class="frm-icon-field">
			<span class="wrap-icon fa fa-at"></span><input  type="text" name="Login[email]" placeholder="Email *">
		</div>
		<span class="error" cmt-error="email"></span>

		<div class="frm-icon-field">
			<span class="wrap-icon fa fa-lock"></span><input  type="password" name="Login[password]" placeholder="Password *">
		</div>
		<span class="error" cmt-error="password"></span>
		
		<div class="row clearfix">
			<?= Html::a( "Forgot your Password ?", [ '/forgot-password' ] ) ?>
		</div>

		<div class="row clearfix">
			<input type="submit" name="submit" value="Login">
		</div>

		<div class="row clearfix">
			<div class="message warning"></div>
		</div>

		<?php if( !$actions ) { ?>
		<div class="row clearfix">
			<?= Html::a( "Sign Up", [ '#' ], [ 'id' => 'box-signup-show'] ) ?>
		</div>
		<?php } ?>
	</form>
</div>
<div id="box-signup" class='popout-header'>
	<form class="frm-ajax" id="frm-register" cmt-controller="default" cmt-action="register" action="<?php echo Yii::$app->urlManager->createAbsoluteUrl("apix/register"); ?>" method="post">
		<div class="max-area-cover spinner"><div class="valign-center fa fa-3x fa-spinner fa-spin"></div></div>
		<div class="frm-icon-field">
			<span class="wrap-icon fa fa-user"></span><input type="text" name="Register[username]" placeholder="Username *">
		</div>
		<span class="error" cmt-error="username"></span>
		
		<div class="frm-icon-field">
			<span class="wrap-icon fa fa-at"></span><input type="text" name="Register[email]" placeholder="Email *">
		</div>
		<span class="error" cmt-error="email"></span>

		<div class="frm-icon-field">
			<span class="wrap-icon fa fa-lock"></span><input type="password" name="Register[password]" placeholder="Password *">
		</div>
		<span class="error" cmt-error="password"></span>

		<div class="frm-icon-field">
			<span class="wrap-icon fa fa-lock"></span><input type="password" name="Register[password_repeat]" placeholder="Repeat Password *">
		</div>
		<span class="error" cmt-error="password_repeat"></span>
		
		<!--
		<div class="frm-icon-field">
			<span class="wrap-icon fa fa-user"></span><input type="text" name="Register[firstName]" placeholder="First Name">
		</div>
		<span class="error" cmt-error="firstName"></span>

		<div class="frm-icon-field">
			<span class="wrap-icon fa fa-user"></span><input type="text" name="Register[lastName]" placeholder="Last Name">
		</div>
		<span class="error" cmt-error="lastName"></span>
		-->
		
		<div class="row clearfix">
			<input type="checkbox" name="Register[newsletter]"> Sign Up for our newsletter.
		</div>

		<div class="row clearfix">
			<div class="row clearfix">
				<input type="checkbox" name="Register[terms]"> <span class="text">I agree to Terms and Conditions and Privacy.</span>
			</div>
			<span class="error" cmt-error="terms"></span>
			<input type="submit" name="submit" value="Sign Up">
		</div>

		<div class="row clearfix">
			<div class="message warning"></div>
		</div>
		
		<?php if( !$actions ) { ?>
		<div class="row clearfix">
			<?= Html::a( "Login", [ '#' ], [ 'id' => 'box-login-show'] ) ?>
		</div>
		<?php } ?>
	</form>
</div>