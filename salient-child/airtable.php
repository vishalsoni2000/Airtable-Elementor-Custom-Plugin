<?php
/**
* Template Name: airtable
* Template Post Type: post, page, resources
*/
?>

<?php get_header(); ?>
<?php //echo do_shortcode('[elementor-template id="84456"]');//echo Elementor\Plugin::instance()->frontend->get_builder_content(84456);
$current_post_id = get_the_ID();
$jsondata = get_post_meta($current_post_id, '_elementor_data', true);

$data_array = json_decode($jsondata, true);
print_r($data_array[0]);
?>
<div class="airtable-first-skipped">
	<?php
		$query = get_post(get_the_ID());
		$content = apply_filters('the_content', $query->post_content);
		//echo $content;
	?>
</div>

<div class="content-left">
	<div class="container-local">
		<div class="main-conetnt">
			<div class=" left">
				<?php

				$query = get_post(get_the_ID());
				$content = apply_filters('the_content', $query->post_content);

				//echo $content;
				echo Elementor\Plugin::instance()->frontend->get_builder_content(get_the_ID());
				?>
			</div>
		</div>
	</div>
</div>
<div class="airtable-reviews-list elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5631bef0">
   <div class="elementor-widget-wrap elementor-element-populated">
      <section class="elementor-section elementor-inner-section elementor-element elementor-element-5e41d5b7 elementor-section-content-space-between elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5e41d5b7" data-element_type="section">
         <div class="elementor-container elementor-column-gap-default">
			<?php
			$json_data = get_post_meta($current_post_id, '_elementor_data', true);

			if (is_string($json_data)) {
				$data = json_decode($json_data, true);

				if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
					// There was an error decoding the JSON.
					// Handle the error as needed.
				}
			$post_count = 0; // Initialize a counter
			$first_iteration = true;
			foreach ($data as $element) {
				if ($post_count >= 5) {
					break; // Exit the loop if we've reached 5 posts
				}
				if ($first_iteration) {
					$first_iteration = false; // Set the flag to false after the first iteration
					continue; // Skip processing for the first element
				}
				$title = $element['elements'][0]['elements'][0]['settings']['select_partner'];
				$content = $element['elements'][0]['elements'][1]['settings']['title'];
				$logo_url = $element['elements'][0]['elements'][3]['elements'][0]['elements'][0]['settings']['image']['url'];

				$list_rate1 = $element['elements'][0]['elements'][4]['elements'][1]['elements'][0]['settings']['rating'];
                $list_rate2 = $element['elements'][0]['elements'][4]['elements'][1]['elements'][1]['settings']['rating'];
                $list_rate3 = $element['elements'][0]['elements'][4]['elements'][1]['elements'][2]['settings']['rating'];
                $list_rate4 = $element['elements'][0]['elements'][4]['elements'][1]['elements'][3]['settings']['rating'];

                $average_rating = ($list_rate1 + $list_rate2 + $list_rate3 + $list_rate4) / 4;


				?>
				<div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-637650a1" data-id="637650a1" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
							<div class="elementor-widget-wrap elementor-element-populated">
								<div class="airtable-reviews-top elementor-element elementor-element-746d3b50 elementor-widget elementor-widget-heading" data-id="746d3b50" data-element_type="widget" data-widget_type="heading.default">
									<div class="elementor-widget-container">
										<h6 class="elementor-heading-title elementor-size-default">Featured Topic</h6>
										<p></p>
									</div>
								</div>
								<div class="airtable-reviews-img elementor-element elementor-element-1e7970ba elementor-widget__width-auto content-bottom-p elementor-widget elementor-widget-image" data-id="1e7970ba" data-element_type="widget" data-widget_type="image.default">
									<div class="elementor-widget-container">
										<img decoding="async" width="100" height="100" src="<?php echo $logo_url;?>" class="attachment-full size-full wp-image-30588" alt="" loading="lazy">
									</div>
								</div>
								<div class="airtable-reviews-middle elementor-element elementor-element-1a57e45d elementor-widget elementor-widget-heading" data-id="1a57e45d" data-element_type="widget" data-widget_type="heading.default">
									<div class="elementor-widget-container">
										<h4 class="elementor-heading-title elementor-size-default"><?php echo $title; ?></h4>
										<p></p>
									</div>
								</div>
								<div class="rating">
								    <div class="rating-value">
									<?php
										echo $average_rating;
									?>
									</div>
									<?php
										for ($i = 1; $i <= 5; $i++) :
											$starClass = ($i <= $average_rating) ? 'checked' : '';
											if (is_float($average_rating) && $i == ceil($average_rating)) {
												$rateStar = 'fa-star-half-full';
											} else {
												$rateStar = 'fa-star';
											}
										?>
										<span class="fa <?php echo $rateStar; ?> <?php echo $starClass; ?>"></span>
										<style>
											.checked , .fa-star-half-full{
												color: orange;
											}
										</style>
									<?php endfor; ?>

								</div>
								<div class="airtable-reviews-content elementor-element elementor-element-7826292f content-bottom-p elementor-widget elementor-widget-text-editor" data-id="7826292f" data-element_type="widget" data-widget_type="text-editor.default">
									<div class="elementor-widget-container">
										<style>/*! elementor - v3.16.0 - 14-09-2023 */
										.elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap{background-color:#69727d;color:#fff}.elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap{color:#69727d;border:3px solid;background-color:transparent}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap{margin-top:8px}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter{width:1em;height:1em}.elementor-widget-text-editor .elementor-drop-cap{float:left;text-align:center;line-height:1;font-size:50px}.elementor-widget-text-editor .elementor-drop-cap-letter{display:inline-block}
										</style>
										<p>	<?php echo wp_trim_words( $content, 20, '...' ); ?> </p>
									</div>
								</div>
								<div class="airtable-reviews-button elementor-element elementor-element-4821d3c3 elementor-align-center elementor-widget elementor-widget-button" data-id="4821d3c3" data-element_type="widget" data-widget_type="button.default">
									<div class="elementor-widget-container">
										<div class="elementor-button-wrapper">
										<a class="elementor-button elementor-button-link elementor-size-sm" href="#" target="_blank"><br>
										<span class="elementor-button-content-wrapper"><br>
										<span class="elementor-button-text">Visit Site</span><br>
										</span><br>
										</a>
										</div>
									</div>
								</div>
								<div class="airtable-reviews-link elementor-element elementor-element-36f91b7f elementor-align-center elementor-widget elementor-widget-button" data-id="36f91b7f" data-element_type="widget" data-widget_type="button.default">
									<div class="elementor-widget-container">
										<div class="elementor-button-wrapper">
										<a class="elementor-button elementor-button-link elementor-size-sm" href="#<?php echo str_replace(' ', '-', trim($title));?>"><br>
										<span class="elementor-button-content-wrapper"><br>
										<span class="elementor-button-icon elementor-align-icon-right"><br>
										<i aria-hidden="true" class="fas fa-arrow-right"></i>			</span><br>
										<span class="elementor-button-text">Read Full Review</span><br>
										</span><br>
										</a>
										</div>
									</div>
								</div>
							</div>
							</div>
			<?php
				$post_count++; // Increment the post counter
			}
	 	}


			foreach ($data as $section) {
				foreach ($section['elements'] as $column) {
					foreach ($column['elements'] as $widget) {
						// Access widget data here and generate HTML output
						$list_items = $widget['settings']['list_items'];
						$first_iteration = true;
						foreach ($list_items as $item) {
							if ($first_iteration) {
								$first_iteration = false; // Set the flag to false after the first iteration
								continue; // Skip processing for the first element
							}
							if ($post_count >= 5) {
								break; // Exit the loop if we've reached 5 posts
							}

							$text = $item['text'];
							$content = $item['content'];
							$featured_image_url = $item['featured'][0]['url']; // Get the featured image URL

							?>
							<div class="  elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-637650a1" data-id="637650a1" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
							<div class="elementor-widget-wrap elementor-element-populated">
								<div class="airtable-reviews-top elementor-element elementor-element-746d3b50 elementor-widget elementor-widget-heading" data-id="746d3b50" data-element_type="widget" data-widget_type="heading.default">
									<div class="elementor-widget-container">
										<h6 class="elementor-heading-title elementor-size-default">Featured Topic</h6>
										<p></p>
									</div>
								</div>
								<div class="airtable-reviews-img elementor-element elementor-element-1e7970ba elementor-widget__width-auto content-bottom-p elementor-widget elementor-widget-image" data-id="1e7970ba" data-element_type="widget" data-widget_type="image.default">
									<div class="elementor-widget-container">
										<img decoding="async" width="100" height="100" src="<?php echo $featured_image_url;?>" class="attachment-full size-full wp-image-30588" alt="" loading="lazy">
									</div>
								</div>
								<div class="airtable-reviews-middle elementor-element elementor-element-1a57e45d elementor-widget elementor-widget-heading" data-id="1a57e45d" data-element_type="widget" data-widget_type="heading.default">
									<div class="elementor-widget-container">
										<h4 class="elementor-heading-title elementor-size-default"><?php echo $text; ?></h4>
										<p></p>
									</div>
								</div>
								<div class="airtable-reviews-content elementor-element elementor-element-7826292f content-bottom-p elementor-widget elementor-widget-text-editor" data-id="7826292f" data-element_type="widget" data-widget_type="text-editor.default">
									<div class="elementor-widget-container">
										<style>/*! elementor - v3.16.0 - 14-09-2023 */
										.elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap{background-color:#69727d;color:#fff}.elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap{color:#69727d;border:3px solid;background-color:transparent}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap{margin-top:8px}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter{width:1em;height:1em}.elementor-widget-text-editor .elementor-drop-cap{float:left;text-align:center;line-height:1;font-size:50px}.elementor-widget-text-editor .elementor-drop-cap-letter{display:inline-block}
										</style>
										<p>	<?php echo wp_trim_words( $content, 30, '...' ); ?> </p>
									</div>
								</div>
								<div class="airtable-reviews-button elementor-element elementor-element-4821d3c3 elementor-align-center elementor-widget elementor-widget-button" data-id="4821d3c3" data-element_type="widget" data-widget_type="button.default">
									<div class="elementor-widget-container">
										<div class="elementor-button-wrapper">
										<a class="elementor-button elementor-button-link elementor-size-sm" href="#" target="_blank"><br>
										<span class="elementor-button-content-wrapper"><br>
										<span class="elementor-button-text">Visit Site</span><br>
										</span><br>
										</a>
										</div>
									</div>
								</div>
								<div class="airtable-reviews-link elementor-element elementor-element-36f91b7f elementor-align-center elementor-widget elementor-widget-button" data-id="36f91b7f" data-element_type="widget" data-widget_type="button.default">
									<div class="elementor-widget-container">
										<div class="elementor-button-wrapper">
										<a class="elementor-button elementor-button-link elementor-size-sm" href="#<?php echo str_replace(' ', '-', trim($title));?>"><br>
										<span class="elementor-button-content-wrapper"><br>
										<span class="elementor-button-icon elementor-align-icon-right"><br>
										<i aria-hidden="true" class="fas fa-arrow-right"></i>			</span><br>
										<span class="elementor-button-text">Read Full Review</span><br>
										</span><br>
										</a>
										</div>
									</div>
								</div>
							</div>
							</div>
						<?php
							$post_count++; // Increment the post counter
						}
					}

					if ($post_count >= 5) {
						break; // Exit the loop if we've reached 5 posts
					}
				}

				if ($post_count >= 5) {
					break; // Exit the loop if we've reached 5 posts
				}
			}



				$airtable_block_ids = get_post_meta($current_post_id, 'airtable_data', true); // Fetch the meta value as a single value
				//print_r($airtable_block_ids);
				if (!empty($airtable_block_ids)) {
					$args = array(
						'post_type'      => 'airtable-posts',
						'posts_per_page' => -1,
						'meta_key'       => 'weightedcpc', // Your custom field for sorting
						'orderby'        => 'meta_value_num', // Sort by numeric value
						'order'          => 'DESC', // Descending order (highest value first)
					);

					$query = new WP_Query($args);

					if ($query->have_posts()) {
						$counter = 0;
						while ($query->have_posts()  && $counter < 5) {

							$query->the_post();
							$block_id = get_post_meta($post->ID, 'airtable_block_id', true);

							// Check if the current $block_id exists in the $airtable_block_ids array
							if (in_array($block_id, $airtable_block_ids)) { ?>

							<?php  $counter++;
							}
						}
						wp_reset_postdata(); // Restore the global post data
					} else {
						// No matching posts found
					}
				} else {
					// No 'airtable_data' values found for the current post
				}
				?>
         </div>
      </section>
   </div>
</div>
<?php get_footer();?>