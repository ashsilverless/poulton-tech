
<div class="section" data-anchor="benefits" data-link="benefitsLink">
    <div class="container cols-offset-6-18 pt8">
        <div class="col">
            <div class="heading heading__lg heading__caps mb1 align-center"><?php the_sub_field('title');?></div>
        	<h2 class="heading heading__lg heading__caps heading__primary mt0 align-center"><?php the_sub_field('heading');?></h2>
        	<div class="container cols-18">
        		<div class="col">
	        		<h3 class="heading heading__lg mt0"><?php the_sub_field('sub_heading');?></h3>
	        	</div>
        	</div>
        	<div class="content__twocolumn">
        		<?php the_sub_field('content');?>
                <a href="<?php the_sub_field('page_link')?>" class="button button__transparent button__border-left button__border-right button__border-primary button__border-round">See applications for the PT1</a>
        	</div>
        </div>
    </div>
</div>