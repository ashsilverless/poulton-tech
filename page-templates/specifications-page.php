<?php
/**
 * ============== Template Name: Specifications Page
 *
 * @package poulton
 */
get_header();?>

<?php if( have_rows('hero') ):
    while ( have_rows('hero') ) : the_row();
?>
	<?php get_template_part('template-parts/_hero');?>
<?php endwhile; endif;?>

<div class="container cols-offset-4-20 pt5 specifications">
	<div class="col container cols-8-16 grid-gap">
		<?php if( have_rows('content') ):
	            while ( have_rows('content') ) : the_row();
	        ?>
		<div class="col">
			<h2 class="heading heading__md mr1 ml2 heading__primary heading__caps font400 mt0"><?php the_sub_field('heading');?></h2>
		</div>
		<div class="col list list__style-line list__min-padding pb5">
			<?php the_sub_field('content');?>
		</div>
		<?php if( have_rows('specifications') ):
            while ( have_rows('specifications') ) : the_row();
            	$table = get_sub_field( 'table' );
            	?>
        <div class="col">
			<h2 class="heading heading__md mr1 ml2 heading__primary heading__caps font400 mt0"><?php the_sub_field('title');?></h2>
		</div>
		<div class="col list list__style-line list__min-padding pb5">
			<div class="mt0"><?php the_sub_field('content');?></div>
			<?php if ( ! empty ( $table ) ) {
				?>
				<table class="specification_table" cellspacing="0" cellpadding="0">
				<?php if ( ! empty( $table['caption'] ) ) { ;?>
				<caption><?php $table['caption'];?></caption>
				<?php }
					if ( ! empty( $table['header'] ) ) { ;?>
					<thead>
						<tr>
							<?php foreach ( $table['header'] as $th ) { ;?>
								<th>
                        			<?php echo $th['c'];?>
								</th>
                			<?php }?>
						</tr>
					</thead>
				<?php } ?>
					<tbody>
						<?php foreach ( $table['body'] as $tr ) { ?>
							<tr>
								<?php foreach ( $tr as $td ) { ?>
									<td <?php if ( ! empty( $td['c'] ) ){?> class="cellBorder"<?php };?>>
                       					<?php echo $td['c'];?>
                    				</td>
               					<?php } ?>
							</tr>
        				<?php } ?>
					</tbody>
				</table>
			<?php };?>
			<div><?php the_sub_field('table_note');?></div>
		</div>
		<?php  endwhile; endif;?>
		<div class="col"></div>
		<div class="col list list__style-line list__min-padding pb5">
			<a href="<?php the_sub_field('page_link')?>" class="button button__transparent button__border-round">Get in touch</a>
		</div>
			
		<div>
			<?php endwhile; endif;?>
	</div>
</div>

<?php get_footer();?>