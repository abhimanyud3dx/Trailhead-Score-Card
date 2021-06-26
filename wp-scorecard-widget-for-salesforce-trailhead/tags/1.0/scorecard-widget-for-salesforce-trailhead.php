<?php
/**
* Plugin Name: Scorecard Widget for Salesforce Trailhead
* Description: See your Salesforce Trailhead Badges count, points and trails score live in wordpress. A must plugin to have for salesforce bloggers. This plugin will enable a widget that you can setup just by setting the trailhead Id from the Trailhead Profile.
* Version: 1.0
* Author: Abhimanyud3dx
* Author URI: http://superqbit.com/author/admin/
**/

// The widget class
class SF_Trailhead_Scorecard_Widget extends WP_Widget {
	// Main constructor
	public function __construct() {
		parent::__construct(
			'sf_trailhead_scorecard_widget',
			__( 'Salesforce Trailhead Scorecard', 'text_domain' ),
			array(
				'customize_selective_refresh' => true,
			)
		);
	}
	// The widget form (for the backend )
	public function form( $instance ) {
		// Set widget defaults
		$defaults = array(
			'trailheadId'    => 'test'
		);
		
		// Parse current settings with defaults
		extract( wp_parse_args( ( array ) $instance, $defaults ) ); 
		
		// Trailhead Id ?>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'trailheadId' ) ); ?>"><?php _e( 'Trailhead Id', 'text_domain' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'trailheadId' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'trailheadId' ) ); ?>" type="text" value="<?php echo esc_attr( $trailheadId ); ?>" />
		</p>
		<?php echo 'Get your Trailhead Id from your public trailhead profile page URL which would look something like this
		<a href="https://raw.githubusercontent.com/abhimanyud3dx/Trailhead-Score-Card/master/Screenshots/trailheadProfile.png" target="blank">https://trailhead.salesforce.com/me/<strong>{TrailheadId}</strong></a>. Makse sure your profile is public.<br/>'; ?>

	<?php }
	// Update widget settings
	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['trailheadId']    = isset( $new_instance['trailheadId'] ) ? wp_strip_all_tags( $new_instance['trailheadId'] ) : '';
		return $instance;
	}
	// Display the widget
	public function widget( $args, $instance ) {
		extract( $args );
		// Check the widget options
		$trailheadId     = isset( $instance['trailheadId'] ) ? $instance['trailheadId'] : '';
		
		// WordPress core before_widget hook (always include )
		echo $before_widget;
		
		echo '<iframe src="https://api-superqbit.herokuapp.com/salesforce/trailheadcard/'.$trailheadId.'" style="border:none;overflow:hidden;" width="100%" height="350px" scrolling="no"></iframe>';
		
		// WordPress core after_widget hook (always include )
		echo $after_widget;
	}
}
// Register the widget
function my_register_salesforce_trailhead_widget() {
	register_widget( 'SF_Trailhead_Scorecard_Widget' );
}
add_action( 'widgets_init', 'my_register_salesforce_trailhead_widget' );
?>