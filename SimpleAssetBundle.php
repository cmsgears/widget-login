<?php
namespace cmsgears\login;

// Yii Imports
use yii\web\AssetBundle;
use yii\web\View;

class SimpleAssetBundle extends AssetBundle {

	// Public variables --------------------------------------------

	// Path Configuration

    public $sourcePath = '@cmsgears/widget-login/resources';

	// Load CSS

    public $css     = [
		// Add CSS
    ];

	// Load Javascript

    public $js      = [
		'simple.js'
    ];

	// Define the Position to load Assets
    public $jsOptions = [
        'position' => View::POS_END
    ];

	// Define dependent Asset Loaders
    public $depends = [
		'yii\web\JqueryAsset'
    ];

	// Constructor and Initialisation ------------------------------

	public function __construct()  {

		parent::__construct();
	}
}

?>