<?php
/**
 * Display navbar with search.
 *
 * @package WPAMPTheme
 */

?>
<div class="travel-no-focus" role="button" tabindex="-1">

	<!-- Results Navbar -->
	<header class="travel-results-navbar pt4 pr4 pl4">
		<div class="px1 md-px2 flex justify-between items-stretch">
			<div class="flex items-stretch">
				<a href="<?php echo esc_html( home_url() ); ?>" class="travel-results-navbar-icon h2 circle my1 md-my2">
					<svg class="travel-icon travel-icon-logo h2" viewbox="0 0 100 100"><g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-width="7.5"><circle cx="50" cy="50" r="45"></circle><path d="M20.395 83.158c-2.37-10.263-.79-18.553 4.737-24.87 8.29-9.472 17.763-1.183 26.052-9.472 8.29-8.29 2.37-18.948 10.658-26.053 5.526-4.737 12.237-6.316 20.132-4.737M39.084 95c-2.788-10.2-1.912-17.304 2.627-21.316 6.808-6.017 14.956-.68 24.088-9.623 9.13-8.94 3.062-17.133 10.255-23.534 4.795-4.267 10.282-5.668 16.46-4.203"></path></g></svg>
				</a>
				<div class="search-info flex flex-auto items-center md-hide lg-hide">
					<div>
						<div class="h3 line-height-2 bold">
							<?php esc_html_e( 'Results for:', 'travel' ); ?>
						</div>
						<div class="travel-results-navbar-subheading h6 caps line-height-4">
							<?php echo ! empty( $_GET['s'] ) ? esc_attr( $_GET['s'] ) . '•' : ''; ?>
							<?php echo ! empty( $_GET['start'] ) ? sprintf( 'From %s', esc_attr( $_GET['start'] ) ) : ''; ?>
							<?php echo ! empty( $_GET['end'] ) ? sprintf( 'Until %s', esc_attr( $_GET['end'] ) ) : ''; ?>
						</div>
					</div>
				</div>
				<div class="ml3 flex items-center xs-hide sm-hide">

					<div class="flex items-center">
						<label class="travel-input-icon relative">
							<input class="travel-input travel-input-dark rounded" type="text" name="query" placeholder="<?php esc_html_e( 'Search' ); ?>" on='
								input-throttled:AMP.setState({
									fields_query: event.value,
									fields_query_live: event.value,
									fields_query_edited: query_query != event.value
								});' value="<?php echo esc_attr( $_GET['s'] ); ?>">
						</label>
						<label class="travel-date-input travel-input-dark travel-date-input-touched bold relative rounded ml2">
							<input class="block relative p0 z1" type="date" placeholder="yyyy-mm-dd" on='
								change:AMP.setState({
									fields_start: event.value
								})' pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" title="yyyy-mm-dd" name="departure"
								value="<?php echo isset( $_GET['start'] ) ? esc_attr( $_GET['start'] ) : ''; ?>">

							<div class="travel-date-input-label">
								Departure
							</div>
						</label>
						<label class="travel-date-input travel-input-dark travel-date-input-touched bold relative rounded ml2">
							<input class="block relative p0 z1" type="date" placeholder="yyyy-mm-dd" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" on='
								change:AMP.setState({
									fields_end: event.value
								})' title="yyyy-mm-dd" name="return"
								value="<?php echo isset( $_GET['end'] ) ? esc_attr( $_GET['end'] ) : ''; ?>">

							<div class="travel-date-input-label">
								<?php esc_html_e( 'Return', 'travel' ); ?>
							</div>
						</label>
						<a href="<?php echo esc_url( site_url() ); ?>?s=<?php echo esc_attr( $_GET['s'] ); ?>" [href]="'<?php echo esc_url( site_url() ); ?>?s=' + fields_query_live + '&start=' + (fields_start || '') + '&end=' + (fields_end || '')" class="search-travel-btn travel-input travel-input-dark rounded ampstart-btn white bold">
							<?php esc_html_e( 'Find adventures', 'travel' ); ?>
						</a>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!--/ Results Navbar -->
</div>
