<?php
	get_header();
	$category = get_queried_object();
	$category_id = $category->term_id;
?>

<section class="section-dark page-intro history-page-intro"
        style="background-image: url('<?php echo carbon_get_term_meta($category_id, 'crb_category_image'); ?>'); background-position: center 18%">
    <div class="page-intro__container">
        <header class="section__header section__header--center">
            <h2 class="section__title"><?php echo carbon_get_term_meta($category_id, 'crb_category_title' . get_lang()); ?></h2>
        </header>
        <p><?php echo carbon_get_term_meta($category_id, 'crb_category_subtitle' . get_lang()); ?></p>
    </div>
</section>
<div class="history-succes__content">
    <?php $category_history = new WP_Query([
        'category_name' => 'story',
        'posts_per_page' => -1,
        'order' => 'ASC'
    ]); ?>
	<?php if($category_history->have_posts()): ?>
		<?php while($category_history->have_posts()): ?>
			<?php $category_history->the_post(); ?>
			<div class="history-succes__item">
				<h4 class="history-succes__title"><?php the_title(); ?></h4>
				<div class="history-succes__text">
					<?php the_content(); ?>
				</div>
<!--				<div class="history-succes__reviews">-->
<!--					<div class="history-succes__reviews-text">--><?php //echo carbon_get_the_post_meta('crb_reviews_cite'.get_lang()); ?><!--</div>-->
<!--					<div class="history__author">-->
<!--						<div class="history__img">-->
<!--							--><?php //if(has_post_thumbnail()): ?>
<!--								--><?php //the_post_thumbnail('full'); ?>
<!--							--><?php //endif; ?>
<!--						</div>-->
<!--						<div class="history__name">--><?php //echo carbon_get_the_post_meta('crb_reviews_title'.get_lang()); ?><!--</div>-->
<!--					</div>-->
<!--				</div>-->
			</div>
		
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
	<?php else: ?>
	<?php endif; ?>
</div>

<?php require_once __DIR__ . '/template-parts/connect-now.php'; ?>
<?php get_footer(); ?>

