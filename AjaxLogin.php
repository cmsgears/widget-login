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
class AjaxLogin extends Widget {

	// Variables ---------------------------------------------------

	// Public Variables --------------------

	/**
	 * The html options for the parent container.
	 */
	public $options;

	/**
	 * The path at which view file is located. It can have alias. By default it's the views folder within widget directory.
	 */
	public $viewPath	= null;

	/**
	 * The view file used to render widget.
	 */
	public $view		= 'simple';

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
	 * The method returns the view path for this widget if set while calling widget. 
	 */
	public function getViewPath() {

		if( isset( $this->viewPath ) ) {

			return $this->viewPath;
		}

		return parent::getViewPath();
	}

	/**
	 * @inheritdoc
	 */
    public function run() {

		$this->registerJs();

		$widgetHtml = $this->render( $this->view, [
			'actions' => $this->actions
		] );

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