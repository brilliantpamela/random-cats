<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link      https://bebrilliantmedia.com
 * @since      1.0.0
 *
 * @package    Random_Cats
 * @subpackage Random_Cats/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Random_Cats
 * @subpackage Random_Cats/public
 * @author     Pamela Bey <pamela@bebrilliantmedia.com>
 */
class Random_Cats_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $random_cats    The ID of this plugin.
	 */
	private $random_cats;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $random_cats       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $random_cats, $version ) {

		$this->random_cats = $random_cats;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Random_Cats_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Random_Cats_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->random_cats, plugin_dir_url( __FILE__ ) . 'css/random-cats-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Random_Cats_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Random_Cats_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->random_cats, plugin_dir_url( __FILE__ ) . 'js/random-cats-public.js', array( 'jquery' ), $this->version, false );

	}

}
