<div class="wp-block wp-block-kubio-query-layout  position-relative wp-block-kubio-query-layout__outer stormea-home__k__1MCYzfcZN-outer stormea-local-434-outer d-flex h-section-global-spacing align-items-lg-center align-items-md-center align-items-center" data-kubio="kubio/query-layout" id="blog-layout">
	<div class="position-relative wp-block-kubio-query-layout__inner stormea-home__k__1MCYzfcZN-inner stormea-local-434-inner h-section-grid-container h-section-boxed-container">
		<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container stormea-home__k__baLWB4dRKjp-container stormea-local-435-container gutters-row-lg-2 gutters-row-v-lg-0 gutters-row-md-0 gutters-row-v-md-0 gutters-row-0 gutters-row-v-0" data-kubio="kubio/row">
			<div class="position-relative wp-block-kubio-row__inner stormea-home__k__baLWB4dRKjp-inner stormea-local-435-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-2 gutters-col-v-lg-0 gutters-col-md-0 gutters-col-v-md-0 gutters-col-0 gutters-col-v-0">
				<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container stormea-home__k__kxeqsSpdy-n-container stormea-local-436-container d-flex h-col-lg h-col-md h-col-auto" data-kubio="kubio/column">
					<div class="position-relative wp-block-kubio-column__inner stormea-home__k__kxeqsSpdy-n-inner stormea-local-436-inner d-flex h-flex-basis h-px-lg-2 v-inner-lg-0 h-px-md-2 v-inner-md-0 h-px-1 v-inner-0">
						<div class="position-relative wp-block-kubio-column__align stormea-home__k__kxeqsSpdy-n-align stormea-local-436-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
							<div class="wp-block wp-block-kubio-query  position-relative wp-block-kubio-query__container stormea-home__k__CtKC_EuIZL-container stormea-local-437-container" data-kubio="kubio/query">
								<div class="wp-block wp-block-kubio-query-loop  position-relative wp-block-kubio-query-loop__container stormea-home__k__vrf0UGkWrN-container stormea-local-438-container gutters-row-lg-2 gutters-row-v-lg-2 gutters-row-md-2 gutters-row-v-md-2 gutters-row-0 gutters-row-v-2" data-kubio="kubio/query-loop" data-kubio-component="masonry" data-kubio-settings="{&quot;enabled&quot;:&quot;1&quot;,&quot;targetSelector&quot;:&quot;.wp-block-kubio-query-loop__inner&quot;}">
									<div class="position-relative wp-block-kubio-query-loop__inner stormea-home__k__vrf0UGkWrN-inner stormea-local-438-inner h-row">
										<?php stormea_theme()->get('archive-loop')->render(array (
  'view' => 'content/home/loop-item',
)); ?>
									</div>
								</div>
								<?php if(stormea_has_pagination()): ?>
								<div class="wp-block wp-block-kubio-query-pagination  position-relative wp-block-kubio-query-pagination__container stormea-home__k__vD7AVCTELY-container stormea-local-445-container gutters-row-lg-2 gutters-row-v-lg-2 gutters-row-md-2 gutters-row-v-md-2 gutters-row-0 gutters-row-v-2" data-kubio="kubio/query-pagination">
									<div class="position-relative wp-block-kubio-query-pagination__inner stormea-home__k__vD7AVCTELY-inner stormea-local-445-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-2 gutters-col-v-lg-2 gutters-col-md-2 gutters-col-v-md-2 gutters-col-0 gutters-col-v-2">
										<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container stormea-home__k__tBYU0uM8Xx-container stormea-local-446-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
											<div class="position-relative wp-block-kubio-column__inner stormea-home__k__tBYU0uM8Xx-inner stormea-local-446-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-2 h-px-md-0 v-inner-md-2 h-px-0 v-inner-2">
												<div class="position-relative wp-block-kubio-column__align stormea-home__k__tBYU0uM8Xx-align stormea-local-446-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
													<?php if(stormea_has_pagination_button(true)): ?>
													<div class="position-relative wp-block-kubio-pagination-nav-button__spacing stormea-home__k__ELgmeRXRD--spacing stormea-local-447-spacing">
														<span class="wp-block wp-block-kubio-pagination-nav-button  position-relative wp-block-kubio-pagination-nav-button__outer stormea-home__k__ELgmeRXRD--outer stormea-local-447-outer kubio-button-container" data-kubio="kubio/pagination-nav-button">
															<a class="position-relative wp-block-kubio-pagination-nav-button__link stormea-home__k__ELgmeRXRD--link stormea-local-447-link h-w-100 h-global-transition" href="<?php stormea_get_navigation_button_link(true); ?>">
																<span class="position-relative wp-block-kubio-pagination-nav-button__text stormea-home__k__ELgmeRXRD--text stormea-local-447-text kubio-inherit-typography">
																	<?php esc_html_e('Previous', 'stormea'); ?>
																</span>
															</a>
														</span>
													</div>
													<?php endif; ?>
												</div>
											</div>
										</div>
										<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container stormea-home__k__P2OarhUKUK-container stormea-local-448-container d-flex h-col-lg h-col-md h-col" data-kubio="kubio/column">
											<div class="position-relative wp-block-kubio-column__inner stormea-home__k__P2OarhUKUK-inner stormea-local-448-inner d-flex h-flex-basis h-px-lg-2 v-inner-lg-2 h-px-md-2 v-inner-md-2 h-px-1 v-inner-2">
												<div class="position-relative wp-block-kubio-column__align stormea-home__k__P2OarhUKUK-align stormea-local-448-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-center align-self-md-center align-self-center">
													<div class="wp-block wp-block-kubio-pagination-numbers  position-relative wp-block-kubio-pagination-numbers__outer stormea-home__k__tRiQFlrj8q-outer stormea-local-449-outer" data-kubio="kubio/pagination-numbers">
														<?php stormea_pagination_numbers(); ?>
													</div>
												</div>
											</div>
										</div>
										<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container stormea-home__k__2nd5yuWmz9-container stormea-local-450-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
											<div class="position-relative wp-block-kubio-column__inner stormea-home__k__2nd5yuWmz9-inner stormea-local-450-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-2 h-px-md-0 v-inner-md-2 h-px-0 v-inner-2">
												<div class="position-relative wp-block-kubio-column__align stormea-home__k__2nd5yuWmz9-align stormea-local-450-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
													<?php if(stormea_has_pagination_button()): ?>
													<div class="position-relative wp-block-kubio-pagination-nav-button__spacing stormea-home__k__ELgmeRXRD--spacing stormea-local-451-spacing">
														<span class="wp-block wp-block-kubio-pagination-nav-button  position-relative wp-block-kubio-pagination-nav-button__outer stormea-home__k__ELgmeRXRD--outer stormea-local-451-outer kubio-button-container" data-kubio="kubio/pagination-nav-button">
															<a class="position-relative wp-block-kubio-pagination-nav-button__link stormea-home__k__ELgmeRXRD--link stormea-local-451-link h-w-100 h-global-transition" href="<?php stormea_get_navigation_button_link(); ?>">
																<span class="position-relative wp-block-kubio-pagination-nav-button__text stormea-home__k__ELgmeRXRD--text stormea-local-451-text kubio-inherit-typography">
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
