<?php
/**
 * This file is part of CMSGears Framework. Please view License file distributed
 * with the source code for license details.
 *
 * @link https://www.cmsgears.org/
 * @copyright Copyright (c) 2015 VulpineCode Technologies Pvt. Ltd.
 */

namespace cmsgears\widgets\login;

// Yii Imports
use yii\helpers\Html;

// CMG Imports
use cmsgears\core\common\config\CoreProperties;

use cmsgears\core\common\base\Widget;

/**
 * The LoginWidget can be used to embed ajaxified login, register and forgot password form.
 *
 * @since 1.0.0
 */
class LoginWidget extends Widget {

	// Variables ---------------------------------------------------

	// Globals -------------------------------

	// Constants --------------

	// Public -----------------

	// Protected --------------

	// Variables -----------------------------

	// Public -----------------

	/**
	 * Checks whether login box is required.
	 */
	public $login = true;

	/**
	 * Message to be displayed if login is disabled.
	 */
	public $loginMessage = 'Login is disabled. Please visit later.';

	/**
	 * Checks whether register box is required.
	 */
	public $register = true;

	/**
	 * Message to be displayed if registration is disabled.
	 */
	public $registerMessage	= 'Registration is disabled. Please visit later.';

	/**
	 * Checks whether forgot password box is required.
	 */
	public $forgotPassword = true;

	/**
	 * Checks whether label should be displayed.
	 */
	public $label = false;

	/**
	 * Checks whether field icon should be displayed.
	 */
	public $fieldIcon = true;

	/**
	 * Checks whether option fields i.e. username, first name and last name should be
	 * displayed on register box.
	 */
	public $optionalFields = false;

	/**
	 * Checks whether the login and register box actions are included in widget. The actions
	 * can also be placed outside the widget ex: header.
	 */
	public $actions = false;

    // -- Login ----------------

    public $loginCmtController      = 'site';
    public $loginCmtAction          = 'login';
    public $loginAction             = 'site/login';

    // -- Register -------------

    public $registerCmtController   = 'site';
    public $registerCmtAction       = 'default';
    public $registerAction          = 'site/register';

	// -- Forgot Password ------

    public $forgotCmtController     = 'site';
    public $forgotCmtAction         = 'default';
    public $forgotAction            = 'site/forgot-password';

	// Protected --------------

	// Private ----------------

    /**
     * Checks whether login is disabled
     */
    private $loginDisabled;

    /**
     * Checks whether registration is disabled
     */
    private $registerDisabled;

	// Traits ------------------------------------------------------

	// Constructor and Initialisation ------------------------------

	/**
	 * @inheritdoc
	 */
    public function init() {

        parent::init();

		$coreProperties = CoreProperties::getInstance();

        $this->loginDisabled	= !$coreProperties->isLogin();

        $this->registerDisabled	= !$coreProperties->isRegistration();
    }

	// Instance methods --------------------------------------------

	// Yii interfaces ------------------------

	// Yii parent classes --------------------

	// yii\base\Widget --------

	// CMG interfaces ------------------------

	// CMG parent classes --------------------

	// LoginWidget ---------------------------

	public function renderWidget( $config = [] ) {

		$widgetHtml = $this->render( $this->template, [
			'login' => $this->login,
			'loginDisabled' => $this->loginDisabled,
			'loginMessage' => $this->loginMessage,
			'forgotPassword' => $this->forgotPassword,
			'registerDisabled' => $this->registerDisabled,
			'registerMessage' => $this->registerMessage,
			'register' => $this->register,
			'label' => $this->label,
			'fieldIcon' => $this->fieldIcon,
			'optionalFields' => $this->optionalFields,
			'actions' => $this->actions,
			'widget' => $this
		]);

		if( $this->wrap ) {

			return Html::tag( $this->wrapper, $widgetHtml, $this->options );
		}

		return $widgetHtml;
	}

}
