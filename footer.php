			<?php get_sidebar( 'primary' ); // Loads the sidebar-primary.php template. ?>

		</div><!-- #main -->

		<?php get_sidebar( 'subsidiary' ); // Loads the sidebar-subsidiary.php template. ?>

		<?php get_template_part( 'menu', 'subsidiary' ); // Loads the menu-subsidiary.php template. ?>

		<footer id="footer">

			<div class="wrap">

				<div class="footer-content">
					<?php echo apply_atomic_shortcode( 'footer_content', '<p class="copyright">' . __( 'Copyright &copy; [the-year] [site-link].', 'seamless' ) . '</p>' . '<p class="credit">' . __( 'Powered by [wp-link] and [theme-link].', 'seamless' ) . '</p>' ); ?>
				</div><!-- .footer-content -->

			</div>

		</footer><!-- #footer -->

	</div><!-- #container -->

	<?php wp_footer(); // wp_footer ?>

</body>
</html>