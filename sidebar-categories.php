<sidebar class="sidebar">
    <div class="widget-countries">
        <div class="widget__item">
            <h3>
                <a href=""><?php echo carbon_get_theme_option( 'crb_video_title' . get_lang() ); ?></a>
            </h3>

            <ul class="list">
                <?php if(current_user_can('administrator')): ?>
                    <?php require_once __DIR__.'/template-parts/admin-video.php';?>
                <?php elseif(current_user_can('vegetables')): ?>
                    <?php $term_id = 11; ?>
	                <?php require_once __DIR__.'/template-parts/legumicultura-video.php';?>
                <?php elseif(current_user_can('pomicultura')): ?>
	                <?php $term_id = 12; ?>
	                <?php require_once __DIR__.'/template-parts/legumicultura-video.php';?>
                <?php elseif(current_user_can('viticultura')): ?>
	                <?php $term_id = 13; ?>
	                <?php require_once __DIR__.'/template-parts/legumicultura-video.php';?>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</sidebar>
