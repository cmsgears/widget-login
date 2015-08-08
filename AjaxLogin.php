<?php
namespace cmsgears\widgets\login;

// Yii Imports
use \Yii;
use yii\base\Widget;
use yii\helpers\Html;

// TODO: Add a bootstrap view apart from cmgtools

/**
 * The AjaxLogin widget can be used to embed ajaxified login form within the view.
 */
class AjaxLogin extends \cmsgears\core\common\base\Widget {

	// Variables ---------------------------------------------------

	// Public Variables --------------------

	/**
	 * It determines whether the login and register boxes need action or either of them is always visible.
	 */
	public $actions		= false;

	// Constructor and Initialisation ------------------------------

	// yii\base\Object

    public function init() {

        parent::init();

		// Do init tasks
    }

	// Instance Methods --------------------------------------------

	// yii\base\Widget

	/**
	 * @inheritdoc
	 */
    public function run() {

		$this->registerJs();

		$widgetHtml = $this->render( $this->viewFile, [
			'actions' => $this->actions
		]);

		return Html::tag( 'div', $widgetHtml, $this->options );
    }

	/**
	 * Register the JS at bottom to show and hide the boxes for login and registration.
	 */
	private function registerJs() {

		// Register resources
		switch( $this->view ) {

			case 'simple': {

				SimpleAssetBundle::register( $this->getView() );

				break;
			}
		}
	}
}

?>