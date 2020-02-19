<?php $image = get_sub_field('title_image');?>

<div class="container h50 mt5 cols-offset-12-12 align-vert-c">
	<div class="col">
		<h1 class="heading heading__lg heading__caps"><?php the_sub_field('title');?></h1>
		<img src="<?php echo esc_url($image['url']);?>"/>
	</div>
</div>