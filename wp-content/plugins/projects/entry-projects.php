		<div class="project_content" data-id="<?php echo get_the_ID();?>">
			<div class="carousel_projects">
				<div><img src="<?php the_field('project_image'); ?>" /></div>
				<div class="project_title"><?php the_title(); ?></div>
				<div>
					<?php the_field('project_body'); ?>
				</div>
				<div>
					<?php the_field('project_category'); ?>
				</div>
			</div>
		</div>
