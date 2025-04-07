<div class="wp-block wp-block-kubio-query-layout  position-relative wp-block-kubio-query-layout__outer stormea-search__k__1MCYzfcZN-outer stormea-local-640-outer d-flex h-section-global-spacing align-items-lg-center align-items-md-center align-items-center" data-kubio="kubio/query-layout" id="blog-layout">
	<div class="position-relative wp-block-kubio-query-layout__inner stormea-search__k__1MCYzfcZN-inner stormea-local-640-inner h-section-grid-container h-section-boxed-container">
		<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container stormea-search__k__baLWB4dRKjp-container stormea-local-641-container gutters-row-lg-2 gutters-row-v-lg-0 gutters-row-md-0 gutters-row-v-md-0 gutters-row-0 gutters-row-v-0" data-kubio="kubio/row">
			<div class="position-relative wp-block-kubio-row__inner stormea-search__k__baLWB4dRKjp-inner stormea-local-641-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-2 gutters-col-v-lg-0 gutters-col-md-0 gutters-col-v-md-0 gutters-col-0 gutters-col-v-0">
				<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container stormea-search__k__kxeqsSpdy-n-container stormea-local-642-container d-flex h-col-lg h-col-md h-col-auto" data-kubio="kubio/column">
					<div class="position-relative wp-block-kubio-column__inner stormea-search__k__kxeqsSpdy-n-inner stormea-local-642-inner d-flex h-flex-basis h-px-lg-2 v-inner-lg-0 h-px-md-0 v-inner-md-0 h-px-2 v-inner-0">
						<div class="position-relative wp-block-kubio-column__align stormea-search__k__kxeqsSpdy-n-align stormea-local-642-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
							<div class="wp-block wp-block-kubio-query  position-relative wp-block-kubio-query__container stormea-search__k__CtKC_EuIZL-container stormea-local-643-container" data-kubio="kubio/query">
								<div class="wp-block wp-block-kubio-query-loop  position-relative wp-block-kubio-query-loop__container stormea-search__k__vrf0UGkWrN-container stormea-local-644-container gutters-row-lg-2 gutters-row-v-lg-2 gutters-row-md-2 gutters-row-v-md-2 gutters-row-0 gutters-row-v-2" data-kubio="kubio/query-loop" data-kubio-component="masonry" data-kubio-settings="{&quot;enabled&quot;:&quot;1&quot;,&quot;targetSelector&quot;:&quot;.wp-block-kubio-query-loop__inner&quot;}">
									<div class="position-relative wp-block-kubio-query-loop__inner stormea-search__k__vrf0UGkWrN-inner stormea-local-644-inner h-row">
										<?php stormea_theme()->get('archive-loop')->render(array (
  'view' => 'content/search/loop-item',
)); ?>
									</div>
								</div>
								<?php if(stormea_has_pagination()): ?>
								<div class="wp-block wp-block-kubio-query-pagination  position-relative wp-block-kubio-query-pagination__container stormea-search__k__vD7AVCTELY-container stormea-local-651-container gutters-row-lg-0 gutters-row-v-lg-2 gutters-row-md-2 gutters-row-v-md-2 gutters-row-0 gutters-row-v-2" data-kubio="kubio/query-pagination">
									<div class="position-relative wp-block-kubio-query-pagination__inner stormea-search__k__vD7AVCTELY-inner stormea-local-651-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-0 gutters-col-v-lg-2 gutters-col-md-2 gutters-col-v-md-2 gutters-col-0 gutters-col-v-2">
										<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container stormea-search__k__tBYU0uM8Xx-container stormea-local-652-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
											<div class="position-relative wp-block-kubio-column__inner stormea-search__k__tBYU0uM8Xx-inner stormea-local-652-inner d-flex h-flex-basis h-px-lg-2 v-inner-lg-2 h-px-md-2 v-inner-md-2 h-px-2 v-inner-2">
												<div class="position-relative wp-block-kubio-column__align stormea-search__k__tBYU0uM8Xx-align stormea-local-652-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
													<?php if(stormea_has_pagination_button(true)): ?>
													<div class="position-relative wp-block-kubio-pagination-nav-button__spacing stormea-search__k__ELgmeRXRD--spacing stormea-local-653-spacing">
														<span class="wp-block wp-block-kubio-pagination-nav-button  position-relative wp-block-kubio-pagination-nav-button__outer stormea-search__k__ELgmeRXRD--outer stormea-local-653-outer kubio-button-container" data-kubio="kubio/pagination-nav-button">
															<a class="position-relative wp-block-kubio-pagination-nav-button__link stormea-search__k__ELgmeRXRD--link stormea-local-653-link h-w-100 h-global-transition" href="<?php stormea_get_navigation_button_link(true); ?>">
																<span class="position-relative wp-block-kubio-pagination-nav-button__text stormea-search__k__ELgmeRXRD--text stormea-local-653-text kubio-inherit-typography">
																	<?php esc_html_e('Previous', 'stormea'); ?>
																</span>
															</a>
														</span>
													</div>
													<?php endif; ?>
												</div>
											</div>
										</div>
										<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container stormea-search__k__P2OarhUKUK-container stormea-local-654-container d-flex h-col-lg h-col-md h-col" data-kubio="kubio/column">
											<div class="position-relative wp-block-kubio-column__inner stormea-search__k__P2OarhUKUK-inner stormea-local-654-inner d-flex h-flex-basis h-px-lg-2 v-inner-lg-2 h-px-md-2 v-inner-md-2 h-px-1 v-inner-2">
												<div class="position-relative wp-block-kubio-column__align stormea-search__k__P2OarhUKUK-align stormea-local-654-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-center align-self-md-center align-self-center">
													<div class="wp-block wp-block-kubio-pagination-numbers  position-relative wp-block-kubio-pagination-numbers__outer stormea-search__k__tRiQFlrj8q-outer stormea-local-655-outer" data-kubio="kubio/pagination-numbers">
														<?php stormea_pagination_numbers(); ?>
													</div>
												</div>
											</div>
										</div>
										<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container stormea-search__k__tBYU0uM8Xx-container stormea-local-656-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
											<div class="position-relative wp-block-kubio-column__inner stormea-search__k__tBYU0uM8Xx-inner stormea-local-656-inner d-flex h-flex-basis h-px-lg-2 v-inner-lg-2 h-px-md-2 v-inner-md-2 h-px-2 v-inner-2">
												<div class="position-relative wp-block-kubio-column__align stormea-search__k__tBYU0uM8Xx-align stormea-local-656-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-center align-self-md-center align-self-center">
													<?php if(stormea_has_pagination_button()): ?>
													<div class="position-relative wp-block-kubio-pagination-nav-button__spacing stormea-search__k__ELgmeRXRD--spacing stormea-local-657-spacing">
														<span class="wp-block wp-block-kubio-pagination-nav-button  position-relative wp-block-kubio-pagination-nav-button__outer stormea-search__k__ELgmeRXRD--outer stormea-local-657-outer kubio-button-container" data-kubio="kubio/pagination-nav-button">
															<a class="position-relative wp-block-kubio-pagination-nav-button__link stormea-search__k__ELgmeRXRD--link stormea-local-657-link h-w-100 h-global-transition" href="<?php stormea_get_navigation_button_link(); ?>">
																<span class="position-relative wp-block-kubio-pagination-nav-button__text stormea-search__k__ELgmeRXRD--text stormea-local-657-text kubio-inherit-typography">
																	<?php esc_html_e('Next', 'stormea'); ?>
																</span>
															</a>
														</span>
													</div>
													<?php endif; ?>
												</div>
											</div>
										</div>
									</div>
								</div>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
