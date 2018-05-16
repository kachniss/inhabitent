<?php
/**
 * Inhabitent Business Hours Widget
 *
 *
 * @package   Business Hours
 * @author    Your Name <email@example.com>
 * @license   GPL-2.0+
 * @link      http://inhabitent.com
 * @copyright 2018 Katerina Vopalkova
 *
 * @wordpress-plugin
 * Plugin Name:       Business Hours Widget
 * Plugin URI:        http://inhabitent.com
 * Description:       Plugin for defining business hours widget
 * Version:           1.0.0
 * Author:            kachniss
 * Author URI:        @TODO
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Prevent direct file access
if ( ! defined ( 'ABSPATH' ) ) {
	exit;
}

class Inhabitent_Business_Hours extends WP_Widget {
    /**
     * Unique identifier for your widget.
     *
     * @since    1.0.0
     *
     * @var      string
     */
    protected $widget_slug = 'inhabitent-business-hours';

	/*--------------------------------------------------*/
	/* Constructor
	/*--------------------------------------------------*/

	/**
	 * Specifies the classname and description, and instantiates the widget.
	 */
	public function __construct() {

		parent::__construct(
			$this->get_widget_slug(),
			'Inhabitent Business Hours',
			array(
				'classname'  => $this->get_widget_slug().'-class',
				'description' => 'Add the global business hours.'
			)
		);

	} // end constructor

    /**
     * Return the widget slug.
     *
     * @since    1.0.0
     *
     * @return    Plugin slug variable.
     */
    public function get_widget_slug() {
        return $this->widget_slug;
    }

	/*--------------------------------------------------*/
	/* Widget API Functions
	/*--------------------------------------------------*/

	/**
	 * Outputs the content of the widget.
	 *
	 * @param array $args     The array of form elements
	 * @param array $instance The current instance of the widget
	 */
	public function widget( $args, $instance ) {

		if ( ! isset ( $args['widget_id'] ) ) {
         $args['widget_id'] = $this->id;
      }

		// go on with your widget logic, put everything into a string and …

		extract( $args, EXTR_SKIP );

		$widget_string = $before_widget;

		// Manipulate the widget's values based on their input fields
		$title = empty( $instance['title'] ) ? '' : apply_filters( 'widget_title', $instance['title'] );
		$weekdays = empty( $instance['weekdays'] ) ? '' : apply_filters( 'weekdays', $instance['weekdays'] );
		$saturday = empty( $instance['saturday'] ) ? '' : apply_filters( 'saturday', $instance['saturday'] );
		$sunday = empty( $instance['sunday'] ) ? '' : apply_filters( 'sunday', $instance['sunday'] );

		ob_start();

		if ( $title ){
			$widget_string .= "<h2 class='widget-title'>";
			$widget_string .= $title;
			$widget_string .= "</h2>";
		}

		include( plugin_dir_path( __FILE__ ) . 'views/widget.php' );
		$widget_string .= ob_get_clean();
		$widget_string .= $after_widget;

		print $widget_string;

	} // end widget

	/**
	 * Processes the widget's options to be saved.
	 *
	 * @param array $new_instance The new instance of values to be generated via the update.
	 * @param array $old_instance The previous instance of values before the update.
	 */
	public function update( $new_instance, $old_instance ) {

		$instance = $old_instance;

		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['weekdays'] = strip_tags( $new_instance['weekdays'] );
		$instance['saturday'] = strip_tags( $new_instance['saturday'] );
		$instance['sunday'] = strip_tags( $new_instance['sunday'] );

		return $instance;

	} // end widget

	/**
	 * Generates the administration form for the widget.
	 *
	 * @param array $instance The array of keys and values for the widget.
	 */
	public function form( $instance ) {

		$instance = wp_parse_args(
			(array) $instance,
			array(
				'title' => 'Business Hours',
				'weekdays' => '',
				'saturday' => '',
				'sunday' => '',
			)
		);

		$title = strip_tags( $instance['title'] );
		$weekdays = strip_tags( $instance['weekdays'] );
		$saturday = strip_tags( $instance['saturday'] );
		$sunday = strip_tags( $instance['sunday'] );

		// Display the admin form
		include( plugin_dir_path( __FILE__ ) . 'views/admin.php' );

	} // end form

} // end class

// TODO: Remember to change 'Widget_Name' to match the class name definition
add_action( 'widgets_init', function(){
     register_widget( 'Inhabitent_Business_Hours' );
});
