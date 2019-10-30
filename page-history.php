<?php
	/**
	 * Template Name: History Success
	 */
	get_header();
?>

<section class="history-succes">
	<?php $ramb_bg_img_src = kama_thumb_src('w=1905 &h=940 &post_id='.get_the_ID().''); ?>
    <section class="section-dark page-intro"
             style="background-image: url('<?php echo $ramb_bg_img_src; ?>'); background-position: center 18%">
        <div class="page-intro__container">
            <header class="section__header section__header--center">
                <h2 class="section__title"><?php the_title(); ?></h2>
            </header>
            <?php if(have_posts()): ?>
                    <?php the_post(); ?>
                    <?php the_content(); ?>
                    
                <?php else: ?>
            <?php endif; ?>
        </div>
    </section>
    <div class="history-succes__content">
	    <?php $history = new WP_Query([
		    'post_type' => 'reviews',
		    'posts_per_page' => -1,
            'order' => 'ASC'
	    ]); ?>
        <?php if($history->have_posts()): ?>
            <?php while($history->have_posts()): ?>
                <?php $history->the_post(); ?>
                <div class="history-succes__item">
                    <h4 class="history-succes__title"><?php the_title(); ?></h4>
                    <div class="history-succes__text">
                        <?php the_content(); ?>
                    </div>
                    <div class="history-succes__reviews">
                        <div class="history-succes__reviews-text"><?php echo carbon_get_the_post_meta('crb_reviews_cite'.get_lang()); ?></div>
                        <div class="history__author">
                            <div class="history__img">
                                <?php if(has_post_thumbnail()): ?>
	                                <?php the_post_thumbnail('full'); ?>
                                <?php endif; ?>
                            </div>
                            <div class="history__name"><?php echo carbon_get_the_post_meta('crb_reviews_title'.get_lang()); ?></div>
                        </div>
                    </div>
                </div>
                
            <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
            <?php else: ?>
        <?php endif; ?>
    </div>
    <?php require_once __DIR__.'/template-parts/connect-now.php';?>
</section>
<?php get_footer(); ?>
