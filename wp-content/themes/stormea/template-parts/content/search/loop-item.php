<div class="<?php stormea_print_archive_entry_class('wp-block wp-block-kubio-query-loop-item  position-relative wp-block-kubio-query-loop-item__container stormea-search__k__QtetVXHJ9I-container stormea-local-645-container d-flex   '); ?>"" data-kubio="kubio/query-loop-item">
	<div class="position-relative wp-block-kubio-query-loop-item__inner stormea-search__k__QtetVXHJ9I-inner stormea-local-645-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-0 h-px-md-0 v-inner-md-0 h-px-0 v-inner-0">
		<div class="position-relative wp-block-kubio-query-loop-item__align stormea-search__k__QtetVXHJ9I-align stormea-local-645-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
			<figure class="wp-block wp-block-kubio-post-featured-image  position-relative wp-block-kubio-post-featured-image__container stormea-search__k__iE82N7AEu-container stormea-local-646-container h-aspect-ratio--4-3 <?php stormea_post_missing_featured_image_class(); ?>" data-kubio="kubio/post-featured-image" data-kubio-settings="{{kubio_settings_value}}">
				<?php if(has_post_thumbnail()): ?>
				<img class='position-relative wp-block-kubio-post-featured-image__image stormea-search__k__iE82N7AEu-image stormea-local--image' src='<?php echo esc_url(get_the_post_thumbnail_url());?>' />
				<?php endif; ?>
				<div class="position-relative wp-block-kubio-post-featured-image__inner stormea-search__k__iE82N7AEu-inner stormea-local-646-inner">
					<div class="position-relative wp-block-kubio-post-featured-image__align stormea-search__k__iE82N7AEu-align stormea-local-646-align h-y-container align-self-lg-start align-self-md-start align-self-start"></div>
				</div>
			</figure>
			<a class="position-relative wp-block-kubio-post-title__link stormea-search__k__tstzQ_uACq-link stormea-local-647-link d-block" href="<?php echo esc_url(get_the_permalink()); ?>">
				<h4 class="wp-block wp-block-kubio-post-title  position-relative wp-block-kubio-post-title__container stormea-search__k__tstzQ_uACq-container stormea-local-647-container" data-kubio="kubio/post-title">
					<?php the_title(); ?>
				</h4>
			</a>
			<div class="wp-block wp-block-kubio-post-meta  position-relative wp-block-kubio-post-meta__metaDataContainer stormea-search__k__in2mlwF4a-metaDataContainer stormea-local-648-metaDataContainer h-blog-meta" data-kubio="kubio/post-meta">
				<span class="metadata-item">
					<span class="metadata-prefix">
						<?php esc_html_e('by', 'stormea'); ?>
					</span>
					<a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta("ID"))); ?>">
						<?php echo esc_html(get_the_author_meta("display_name",get_post_field("post_author"))); ?>
					</a>
				</span>
				<span class="metadata-separator">
					|
				</span>
				<span class="metadata-item">
					<span class="metadata-prefix">
						<?php esc_html_e('on', 'stormea'); ?>
					</span>
					<a href="<?php echo esc_url(get_day_link(get_post_time( 'Y' ),get_post_time( 'm' ),get_post_time( 'j' ))); ?>">
						<?php echo esc_html(get_the_date('F j')); ?>
					</a>
				</span>
			</div>
			<p class="wp-block wp-block-kubio-post-excerpt  position-relative wp-block-kubio-post-excerpt__text stormea-search__k__-hWWlFyCEF-text stormea-local-649-text" data-kubio="kubio/post-excerpt">
				<?php stormea_post_excerpt(array (
  'max_length' => 16,
)); ?>
			</p>
			<div class="position-relative wp-block-kubio-read-more-button__spacing stormea-search__k__7TrnS1SQ70-spacing stormea-local-650-spacing">
				<span class="wp-block wp-block-kubio-read-more-button  position-relative wp-block-kubio-read-more-button__outer stormea-search__k__7TrnS1SQ70-outer stormea-local-650-outer kubio-button-container" data-kubio="kubio/read-more-button">
					<a class="position-relative wp-block-kubio-read-more-button__link stormea-search__k__7TrnS1SQ70-link stormea-local-650-link h-w-100 h-global-transition" href="<?php echo esc_url(get_the_permalink()); ?>">
						<span class="position-relative wp-block-kubio-read-more-button__text stormea-search__k__7TrnS1SQ70-text stormea-local-650-text kubio-inherit-typography">
							<?php esc_html_e('Read more', 'stormea'); ?>
						</span>
					</a>
				</span>
			</div>
		</div>
	</div>
</div>
