<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<?php if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
	<aside id="secondary" class="sidebar widget-area" role="complementary">

		<section>
			<h2>Unsere Standorte</h2>
			<address>
				<h3>Standort Neustadt</h3>
					<label>Tel.:</label>
					<a href="tel:4940428843200">040/428 843 -200</a><br>
					<label>Mail:</label>
					<a href="neustadt@schule-am-hafen.eu">neustadt@schule-am-hafen.eu</a><br>
					Neustädter Straße 60<br>
					20355 Hamburg
			</address>
			<address>
				<h3>Standort St. Pauli</h3>
					<label>Telefon-Nr.:</label>
					<a href="tel:+4940428843400">040/428843 -400</a><br>
					<label>E-Mail:</label>
					<a href="st.pauli@schule-am-hafen.eu">st.pauli@schule-am-hafen.eu</a><br>
					Friedrichstraße 55<br>
					20359 Hamburg
			</address>
			<address>
				<h3>Standort Oberstufe</h3>
					<label>Telefon-Nr.:</label>
					<a href="tel:+4940428973265">040/428973 -265</a><br>
					<label>E-Mail:</label>
					<a href="oberstufe@schule-am-hafen.eu">oberstufe@schule-am-hafen.eu</a><br>
					Budapester Straße 58<br>
					20359 Hamburg
			</address>
		</section>

		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</aside><!-- .sidebar .widget-area -->
<?php endif; ?>
