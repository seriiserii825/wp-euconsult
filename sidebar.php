<sidebar class="sidebar">
    <div class="widget-countries line-bottom">
        <div class="widget__item">
            <?php $moldova_page_link = get_page_link(82); ?>
            <h3>
                <a href="<?php echo $moldova_page_link; ?>"><?php echo carbon_get_theme_option('crb_finance_moldova_title' . get_lang()); ?></a>
            </h3>
			
			<?php
			$finance_moldova = new WP_Query([
				'post_type' => 'finance_moldova',
				'posts_per_page' => -1
			]);
			?>
            <ul class="list">
				<?php if ($finance_moldova->have_posts()): ?>
					<?php $i = 1; while ($finance_moldova->have_posts()): ?>
						<?php $finance_moldova->the_post(); ?>
                        <li>
                            <a href="<?php echo $moldova_page_link.'#js-moldova-'.$i; ?>"><?php the_title(); ?></a>
                        </li>
					<?php $i++; endwhile; ?>
                    <?php wp_reset_postdata(); ?>
				<?php else: ?>
				<?php endif; ?>
            </ul>

        </div>

        <div class="widget__item">
	        <?php $romania_page_link = get_page_link(84); ?>
            <h3>
                <a href="<?php echo $romania_page_link; ?>"><?php echo carbon_get_theme_option('crb_finance_romania_title' . get_lang()); ?></a>
            </h3>
	
	        <?php
	        $finance_romania = new WP_Query([
		        'post_type' => 'finance_romania',
		        'posts_per_page' => -1
	        ]);
	        ?>

            <ul class="list">
		        <?php if ($finance_romania->have_posts()): ?>
			        <?php $i=1; while ($finance_romania->have_posts()): ?>
				        <?php $finance_romania->the_post(); ?>
                        <li>
                            <a href="<?php echo $romania_page_link.'#js-romania-'.$i; ?>"><?php the_title(); ?></a>
                        </li>
			        <?php $i++; endwhile; ?>
			        <?php wp_reset_postdata(); ?>
		        <?php else: ?>
		        <?php endif; ?>
            </ul>
        </div>

        <div class="widget__item">
	        <?php $eu_page_link = get_page_link(86); ?>
            <h3>
<!--                <a href="--><?php //echo $eu_page_link; ?><!--">--><?php //echo carbon_get_theme_option('crb_finance_ue_title' . get_lang()); ?><!--</a>-->
                <a href=""><?php echo carbon_get_theme_option('crb_finance_ue_title' . get_lang()); ?></a>
            </h3>
        </div>
    </div>

    <div class="sidebar__contacts">
        <h4 class="sidebar__title">Contactele noastre:</h4>
        <ul>
            <li>
                <img src="<?php echo get_template_directory_uri() ?>/assets/i/icon-map.png">
                <a href="#"><?php echo carbon_get_theme_option('crb_address_just_city'.get_lang()); ?></a>
            </li>
            <li>
	            <?php $gmail = carbon_get_theme_option('crb_gmail'); ?>
                <img src="<?php echo get_template_directory_uri() ?>/assets/i/icon-letter.png">
                <a href="mailto:<?php echo $gmail; ?>"><?php echo $gmail; ?></a>
            </li>
            <li>
                <?php $phone = carbon_get_theme_option('crb_phone_with_space');
                    $phone_clear = clear_phone($phone);
                ?>
                <img src="<?php echo get_template_directory_uri() ?>/assets/i/icon-phone.png">
                <a href="tel:<?php echo $phone_clear; ?>"><?php echo $phone; ?></a>
            </li>
        </ul>
    </div>
</sidebar>
