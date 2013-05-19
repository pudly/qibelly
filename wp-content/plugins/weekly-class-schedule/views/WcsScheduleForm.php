<?php
/**
 * @file
 * Item form template.
 *
 * Available variables:
 * - $edit_url
 * - $classes
 * - $instructors
 * - $classrooms
 * - $weekdays_array: Full list of weekdays to be used in select lists.
 * - $visibility: Status of entry (visibile or hidden)
 * - $weekdays: Only days which contain entries.
 * - $items: Array of entry objects (WcsSchedule)
 */
?>
<table id="schedule-entry-form" class="wp-list-table widefat fixed">
	<tr>
		<td class="wcs-label-column">Class</td>
		<td class="wcs-entry-column">
			<?php echo WcsHtml::generateSelectList($classes, array( 'name' => 'class_select' ), FALSE, $post['class_select'] ); ?>
		</td>
	</tr>
	<tr>
		<td class="wcs-label-column">Instructor</td>
		<td class="wcs-entry-column">
			<?php echo WcsHtml::generateSelectList($instructors, array( 'name' => 'instructor_select' ), FALSE, $post['instructor_select'] ); ?>
		</td>
	</tr>
	<tr>
		<td class="wcs-label-column">Classroom</td>
		<td class="wcs-entry-column">
			<?php echo WcsHtml::generateSelectList($classrooms, array( 'name' => 'classroom_select' ), FALSE, $post['classroom_select'] ); ?>
		</td>
	</tr>
	<tr>
		<td class="wcs-label-column">Day</td>
		<td class="wcs-entry-column"><?php echo WcsHtml::generateSelectList( $weekdays_array, array( 'name' => 'weekday_select' ), TRUE, get_option('wcs_first_day_of_week') ); ?></td>
	</tr>
	<tr>
		<td class="wcs-label-column">Start Hour</td>
		<td class="wcs-entry-column"><?php echo WcsTime::renderHourSelectList( 'start_hour' ); ?></td>
	</tr>
	<tr>
		<td class="wcs-label-column">End Hour</td>
		<td class="wcs-entry-column"><?php echo WcsTime::renderHourSelectList( 'end_hour' ); ?></td>
	</tr>
	<?php if ( get_option( 'wcs_use_timezones' ) == 'yes' ): ?>
	<tr>
		<td class="wcs-label-column">Timezone</td>
		<td class="wcs-entry-column"><?php echo WcsTime::renderTimezonesSelectList( 'timezone' ); ?></td>
	</tr>
	<?php endif; ?>
	<tr>
		<td class="wcs-label-column">Visibility</td>
		<td class="wcs-entry-column"><?php echo WcsHtml::generateSelectList( $visibility, array( 'name' => 'visibility_select' ), TRUE, 1 ); ?></td>
	</tr>
	<tr>
		<td class="wcs-label-column">Notes</td>
		<td class="wcs-entry-column">
			<textarea name='notes' cols='30' placeholder='Notes'></textarea>
		</td>
	</tr>
</table>

<p>
	<input id='wcs-submit-item' type='submit' class='button-primary' value="<?php esc_attr_e('Add Item'); ?>" name='add_item' />
</p>

<?php foreach( $weekdays as  $key => $weekday ): ?>
	<?php echo "<h3>$weekday</h3>"; ?>
	<table id="schedule-entries-table" class="wp-list-table widefat fixed <?php if ( get_option( 'wcs_use_timezones' ) != 'yes' ) echo 'no-timezone'; ?>">
		<tr>
			<th class="check-column"></th>
			<th class="wcs-class-column">Class</th>
			<th class="wcs-instructor-column">Instructor</th>
			<th class="wcs-classroom-column">Classroom</th>
			<th class="wcs-start-hour-column">Start Hour</th>
			<th class="wcs-end-hour-column">End Hour</th>
			<?php if ( get_option( 'wcs_use_timezones' ) == 'yes' ): ?>
				<th class="wcs-timezone-column">Timezone</th>
			<?php endif; ?>
			<th class="wcs-status-column">Status</th>
			<th class="wcs-notes-column">Notes</th>
			<th class="wcs-edit-column">Edit</th>
		</tr>
		<?php if ( isset( $items ) && ! empty( $items ) ): ?>
			<?php foreach( $items as $item ): ?>
				<?php if ( $item->getWeekday() == $key ): ?>
					<tr>
						<td><input type="checkbox" name="delete_<?php echo $item->id; ?>" value="<?php echo $item->id; ?>" /></td>
						<td class="wcs-class-column"><?php echo $item->getClassName(); ?></td>
						<td class="wcs-instructor-column"><?php echo $item->getInstructorName(); ?></td>
						<td class="wcs-classroom-column"><?php echo $item->getClassroomName(); ?></td>
						<td class="wcs-start-hour-column"><?php echo $item->getStartHour(); ?></td>
						<td class="wcs-end-hour-column"><?php echo $item->getEndHour(); ?></td>
						<?php if ( get_option( 'wcs_use_timezones' ) == 'yes' ): ?>
							<td class="wcs-timezone-column"><?php echo $item->getTimezone(); ?></td>
						<?php endif; ?>
						<td class="wcs-status-column"><?php echo $item->getVisibility(); ?></td>
						<td class="wcs-notes-column"><?php echo $item->getNotes(); ?></td>
						<td class="wcs-edit-column"><a href="<?php echo $edit_url; ?>&wcsid=<?php echo $item->id; ?>">Edit</a></td>
					</tr>
				<?php endif; ?>
			<?php endforeach; ?>
		<?php endif; ?>
	</table>
<?php endforeach; ?>
<?php if ( ! empty( $weekdays ) ): ?>
<p>
	<input id='wcs-delete-item' type='submit' class='button-primary' value="<?php esc_attr_e('Delete Item'); ?>" name='delete_items' />
</p>
<?php endif; ?>