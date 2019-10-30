<?php get_header(); ?>

<?php if (have_posts()): ?>
	<?php the_post(); ?>
    <section class="single-idea section-dark page-intro"
             style="background-image: url('<?php echo getThePostThumbSrc(1920, 470) ?>'); background-position: center top">
        <div class="page-intro__container">
            <header class="section__header section__header--center">
                <h2 class="section__title">
					<?php the_title(); ?>
                </h2>
            </header>
            <p><?php echo carbon_get_the_post_meta('crb_idea_subtitle_cite' . get_lang()); ?></p>
        </div>
    </section>
    <section class="single-idea__container">
		<?php the_content(); ?>
    </section>
	<?php require_once __DIR__ . '/template-parts/connect-now.php'; ?>

<?php else: ?>
<?php endif; ?>

<?php get_footer(); ?>
