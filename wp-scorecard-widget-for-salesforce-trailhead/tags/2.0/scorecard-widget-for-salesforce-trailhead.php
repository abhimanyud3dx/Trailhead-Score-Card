<?php
/**
* Plugin Name: Scorecard Widget for Salesforce Trailhead
* Description: See your Salesforce Trailhead Badges count, points and trails score live in wordpress. A must plugin to have for salesforce bloggers. This plugin will enable a widget that you can setup just by setting the trailhead Id from the Trailhead Profile.
* Version: 2.0
* Author: Abhimanyud3dx
* Author URI: https://superqbit.com/abhimanyud3dx
**/

// The widget class
class SF_Trailhead_Scorecard_Widget extends WP_Widget {
	// Main constructor
	public function __construct() {
		parent::__construct(
			'sf_trailhead_scorecard_widget',
			__( 'Salesforce Trailhead Certifications Scorecard', 'text_domain' ),
			array(
				'customize_selective_refresh' => true,
			)
		);
	}
	// The widget form (for the backend )
	public function form( $instance ) {
		// Set widget defaults
		$defaults = array(
			'trailheadId'    => 'test',
			'uitype'    => 'a',
			'size'    => '100',
			'frameHeight' => '200'
		);
		
		// Parse current settings with defaults
		extract( wp_parse_args( ( array ) $instance, $defaults ) ); 
		
		// Trailhead Id ?>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'trailheadId' ) ); ?>"><?php _e( 'Trailhead Id', 'text_domain' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'trailheadId' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'trailheadId' ) ); ?>" type="text" value="<?php echo esc_attr( $trailheadId ); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'uitype' ) ); ?>"><?php _e( 'Type', 'text_domain' ); ?></label>			
			<select id="<?php echo esc_attr( $this->get_field_id( 'uitype' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'uitype' ) ); ?>" selected="<?php echo esc_attr( $uitype ); ?>" value="<?php echo esc_attr( $uitype ); ?>">
				<option <?php if("a"== esc_attr( $uitype )) { echo 'selected';} ?> value="a">TrailHead Info</option>
				<option <?php if("b"== esc_attr( $uitype )) { echo 'selected';} ?> value="b">Certifications</option>
				<option <?php if("b1"== esc_attr( $uitype )) { echo 'selected';} ?> value="b1">Certifications without Title</option>
				<option <?php if("b2"== esc_attr( $uitype )) { echo 'selected';} ?> value="b2">Certifications  without Date</option>
				<option <?php if("b12"== esc_attr( $uitype )) { echo 'selected';} ?> value="b12">Certifications without Title &amp; Date</option>
				<option <?php if("c"== esc_attr( $uitype )) { echo 'selected';} ?> value="c">TrailHead &amp; Certifications </option>
				<option <?php if("c1"== esc_attr( $uitype )) { echo 'selected';} ?> value="c1">TrailHead &amp; Certifications without Title </option>
				<option <?php if("c2"== esc_attr( $uitype )) { echo 'selected';} ?> value="c2">TrailHead &amp; Certifications without Date </option>
				<option <?php if("c12"== esc_attr( $uitype )) { echo 'selected';} ?> value="c12">TrailHead &amp; Certifications without Title &amp; Date </option>
			</select>			
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'size' ) ); ?>"><?php _e( 'Image Size', 'text_domain' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'size' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'size' ) ); ?>" type="text" value="<?php echo esc_attr( $size ); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'frameHeight' ) ); ?>"><?php _e( 'Height of Widget', 'text_domain' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'frameHeight' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'frameHeight' ) ); ?>" type="text" value="<?php echo esc_attr( $frameHeight ); ?>" />
		</p>


		<?php echo ' To get your Trailhead Id, read https://github.com/abhimanyud3dx/Trailhead-Score-Card'; ?>

	<?php }
	// Update widget settings
	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['trailheadId'] = isset( $new_instance['trailheadId'] ) ? wp_strip_all_tags( $new_instance['trailheadId'] ) : '';
		$instance['uitype'] = isset( $new_instance['uitype'] ) ? wp_strip_all_tags( $new_instance['uitype'] ) : '';
		$instance['size'] = isset( $new_instance['size'] ) ? wp_strip_all_tags( $new_instance['size'] ) : '';
		$instance['frameHeight'] = isset( $new_instance['frameHeight'] ) ? wp_strip_all_tags( $new_instance['frameHeight'] ) : '';
		return $instance;
	}
	// Display the widget
	public function widget( $args, $instance ) {
		extract( $args );
		// Check the widget options
		$trailheadId     = isset( $instance['trailheadId'] ) ? $instance['trailheadId'] : '';
		$uitype     = isset( $instance['uitype'] ) ? $instance['uitype'] : 'a';
		$size     = isset( $instance['size'] ) ? $instance['size'] : '100';
		$frameHeight     = isset( $instance['frameHeight'] ) ? $instance['frameHeight'] : '200';
		
		// WordPress core before_widget hook (always include )
		echo $before_widget;
		
		echo '<iframe src="https://superqbit.herokuapp.com/trailhead?uid='.$trailheadId.'&type='.$uitype.'&s='.$size.'" style="border:none;overflow:hidden;" width="100%" height="'.$frameHeight.'px"  scrolling="no"></iframe>';
		
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