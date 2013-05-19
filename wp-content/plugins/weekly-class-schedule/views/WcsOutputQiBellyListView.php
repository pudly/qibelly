<?php
/**
 * @file
 * Output view template.
 *
 * Available Variables:
 * - $weekday_names: Array of weekday names to be used in table output.
 * - $weekdays: Array of used weekdays based on user preference.
 * - $start_hours: Array of unique start hours.
 * - $classes: Multi-dimensional array in the structure of $classes[weekday][start_hour].
 */
?>

<div id="wcs-schedule-qibelly-list"> 
        
	<?php foreach ( $weekdays as $weekday ): ?>
	<div class="list-container">
		<?php foreach ( $start_hours as $start_hour ): ?>
		<?php echo WcsSchedule::model()->renderQiBellyListItem( $classes, $start_hour, $weekday ) ?>
		<?php endforeach; ?>
	</div>
	<?php endforeach; ?>
        
</div>