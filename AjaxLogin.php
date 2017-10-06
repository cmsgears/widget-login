<?php
namespace cmsgears\widgets\login;

// Yii Imports
use yii\helpers\Html;

// CMG Imports
use cmsgears\core\common\config\CoreProperties;

use cmsgears\core\common\base\Widget;

// TODO: Add a bootstrap view apart from cmgtools

/**
 * The AjaxLogin widget can be used to embed ajaxified login form within the view.
 */
class AjaxLogin extends Widget {

	// Variables ---------------------------------------------------

	// Public Variables --------------------

	/**
	 * It determines whether login box is required.
	 */
	public $login			= true;

	/**
	 * Message to be displayed if login is disabled.
	 */
	public $loginMessage	= 'Login is disabled by site admin';

	/**
	 * It determines whether register box is required.
	 */
	public $forgotPassword	= true;

	/**
	 * Message to be displayed if registration is disabled.
	 */
	public $registerMessage	= 'Registration is disabled by site admin';

	/**
	 * It determines whether register box is required.
	 */
	public $register		= true;

	/**
	 * It determines whether label should be displayed.
	 */
	public $label			= false;

	/**
	 * It determines whether field icon should be displayed.
	 */
	public $fieldIcon		= true;

	/**
	 * It determines whether option fields i.e. username, first name and last name should be displayed on register box.
	 */
	public $optionalFields	= true;

	/**
	 * It determines whether the login and register box actions are included in widget. The actions can also lie outside the widget.
	 */
	public $actions			= false;

    /**
     * Dynamic Controller Actions
     */
    //----------- Login ----------------

    public $loginCmtController      = 'site';
    public $loginCmtAction          = 'login';
    public $loginAction             = 'site/login';

    //----------- Forgot ----------------

    public $forgotCmtController     = 'site';
    public $forgotCmtAction         = 'default';
    public $forgotAction            = 'site/forgot-password';

    //----------- Register ----------------

    public $registerCmtController   = 'site';
    public $registerCmtAction       = 'default';
    public $registerAction          = 'site/register';

    // Private

    /**
     * Flag to check whether login is disabled by site admin.
     */
    private $loginDisabled;

    /**
     * Flag to check whether registration is disabled by site admin.
     */
    private $registerDisabled;

	// Constructor and Initialisation ------------------------------

	// yii\base\Object

	/**
	 * @inheritdoc
	 */
    public function init() {

        parent::init();

        $this->loginDisabled	= !CoreProperties::getInstance()->isLogin();

        $this->registerDisabled	= !CoreProperties::getInstance()->isRegistration();
    }

	// Instance Methods --------------------------------------------

	// yii\base\Widget

	/**
	 * @inheritdoc
	 */
    public function run() {

		$widgetHtml = $this->renderWidget();

		// wraps both the login and register boxes in a div.
		return Html::tag( 'div', $widgetHtml, $this->options );
    }

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

		return $widgetHtml;
	}
}
