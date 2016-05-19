<?php
namespace cmsgears\widgets\login;

// Yii Imports
use \Yii;
use yii\base\Widget;
use yii\helpers\Html;

// CMG Imports
use cmsgears\widgets\login\assets\LoginAssets;

// TODO: Add a bootstrap view apart from cmgtools

/**
 * The AjaxLogin widget can be used to embed ajaxified login form within the view.
 */
class AjaxLogin extends \cmsgears\core\common\base\Widget {

	// Variables ---------------------------------------------------

	// Public Variables --------------------

	/**
	 * It determines whether login box is required.
	 */
	public $login			= true;

	/**
	 * It determines whether register box is required.
	 */
	public $forgotPassword	= true;

	/**
	 * It determines whether register box is required.
	 */
	public $register	= true;

	/**
	 * It determines whether label should be displayed.
	 */
	public $label		= false;

	/**
	 * It determines whether field icon should be displayed.
	 */
	public $fieldIcon	= true;

	/**
	 * It determines whether option fields i.e. username, first name and last name should be displayed.
	 */
	public $optionalFields	= true;

	/**
	 * It determines whether the login and register box actions are included in widget. The actions can also lie outside the widget.
	 */
	public $actions		= false;

    /**
     * Dynamic Controller Actions
     */
    //----------- Login ----------------
    public $loginCmtController      = 'user';
    public $loginCmtAction          = 'login';
    public $loginAction             = 'site/login';

    //----------- Forgot ----------------
    public $forgotCmtController     = 'user';
    public $forgotCmtAction         = 'forgotPassword';
    public $forgotAction            = 'site/forgot-password';

    //----------- Register ----------------
    public $registerCmtController   = 'user';
    public $registerCmtAction       = 'register';
    public $registerAction          = 'site/register';

	// Constructor and Initialisation ------------------------------

	// yii\base\Object

	/**
	 * @inheritdoc
	 */
    public function init() {

        parent::init();
    }

	// Instance Methods --------------------------------------------

	// yii\base\Widget

	/**
	 * @inheritdoc
	 */
    public function run() {

		if( $this->loadAssets ) {

			LoginAssets::register( $this->getView() );
		}

		$widgetHtml = $this->renderWidget();

		// wraps both the login and register boxes in a div.
		return Html::tag( 'div', $widgetHtml, $this->options );
    }

	public function renderWidget( $config = [] ) {

		$widgetHtml = $this->render( $this->template, [
			'login' => $this->login,
			'forgotPassword' => $this->forgotPassword,
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

?>