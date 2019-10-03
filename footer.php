<?php
/**
 * The template for displaying the footer
 * @package poulton
 */
?>

</main>

<footer class="footer">

	<div class="pre-socket"></div><!--pre-socket-->
	
	<div class="socket">
	
		<div class="container cols-4">
			
			<div class="col colophon">&copy; poulton Master Theme <?php echo date ('Y');?></div>
			
			<div class="col poulton">
				
				<a href="https://poulton.co.uk"><?php get_template_part('inc/img/poulton', 'logo');?></a>
				
			</div>
			
			<div class="col mandatory">
				
				<a href="<?php echo home_url() . '/terms-conditions'; ?>">Terms</a>
				
				<span class="divider">|</span>
				
				<a href="<?php echo home_url() . '/privacy-policy'; ?>">Privacy</a>
				
			</div>
			
		</div>
	
	</div>
	
	</div><!--socket-->

</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
