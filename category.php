<?php
get_header();
$category = get_queried_object();
$category_id = $category->term_id;
?>

<section class="news">
    <section class="section-dark page-intro news-page"
             style="background-image: url('<?php echo carbon_get_term_meta($category_id, 'crb_category_image'); ?>'); background-position: center 18%">
        <div class="page-intro__container">
            <header class="section__header section__header--center">
                <h2 class="section__title"><?php echo carbon_get_term_meta($category_id, 'crb_category_title' . get_lang()); ?></h2>
            </header>
            <p><?php echo carbon_get_term_meta($category_id, 'crb_category_subtitle' . get_lang()); ?></p>
        </div>
    </section>
	<?php
	$all = carbon_get_theme_option('crb_news_filter_all_title' . get_lang());
	$finance = carbon_get_theme_option('crb_news_filter_finanace_title' . get_lang());
	$social = carbon_get_theme_option('crb_news_filter_social_title' . get_lang());
	$more = carbon_get_theme_option('crb_news_filter_more_title' . get_lang());
	$about = carbon_get_theme_option('crb_news_filter_about_title' . get_lang());
	$bussiness = carbon_get_theme_option('crb_news_filter_bussiness_title' . get_lang());
	$idea = carbon_get_theme_option('crb_news_filter_idea_title' . get_lang());
	$history = carbon_get_theme_option('crb_news_filter_history_title' . get_lang());
	?>

    <div class="news__container" id="js-news__container">
        <div class="news__navigation" id="js-news__navigation">
            <div class="news__list-mobile-show" id="js-news__list-mobile-show"><?php echo $all; ?></div>
            <div class="news__list-mobile" id="js-news__list-mobile">
                <div class="news__list-mobile__item active" data-filter="all"><span><?php echo $all; ?></span>
                    <div class="news__list-mobile__item-checked"></div>
                </div>
                <div class="news__list-mobile__item" data-filter=".finance"><span><?php echo $finance; ?></span>
                    <div class="news__list-mobile__item-checked"></div>
                </div>
                <div class="news__list-mobile__item" data-filter=".social"><span><?php echo $social; ?></span>
                    <div class="news__list-mobile__item-checked"></div>
                </div>
                <div class="news__list-mobile__item"><span><?php echo $more; ?></span>
                    <div class="news__list-mobile__item-checked"></div>
                </div>
                <div class="news__list-mobile__item" data-filter=".about"><span><?php echo $about; ?></span>
                    <div class="news__list-mobile__item-checked"></div>
                </div>
                <div class="news__list-mobile__item" data-filter=".business"><span><?php echo $bussiness; ?></span>
                    <div class="news__list-mobile__item-checked"></div>
                </div>
                <div class="news__list-mobile__item" data-filter=".idea"><span><?php echo $idea; ?></span>
                    <div class="news__list-mobile__item-checked"></div>
                </div>
                <div class="news__list-mobile__item" data-filter=".history"><span><?php echo $history; ?></span>
                    <div class="news__list-mobile__item-checked"></div>
                </div>
            </div>
            <ul class="news__list">
                <li class="active" data-filter="all"><?php echo $all; ?></li>
                <li data-filter=".finance"><?php echo $finance; ?></li>
                <li data-filter=".social"><?php echo $social; ?></li>
                <li class="sub-list"><?php echo $more; ?>
                    <ul class="news__sub-list">
                        <li data-filter=".about"><?php echo $about; ?></li>
                        <li data-filter=".business"><?php echo $bussiness; ?></li>
                        <li data-filter=".idea"><?php echo $idea; ?></li>
                        <li data-filter=".story"><?php echo $history; ?></li>
                    </ul>
                </li>

            </ul>
            <div class="news__search">
                <div class="show-search" id="js-show-search">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/i/svg/search.svg">
                </div>
                <div class="news__search-block" id="js-news__search-block">
                    <input type="text" placeholder="Search">
                    <div class="news__search-close" id="js-news__search-close"></div>
                </div>
            </div>
        </div>

        <div class="news__content">
			<?php if (have_posts()): ?>
				<?php while (have_posts()): ?>
					<?php the_post(); ?>
					<?php
					$tags = get_the_tags();
					$tags_str = '';
					
					if ($tags) {
						foreach ($tags as $tag) {
							$tags_str .= $tag->slug . ' ';
						}
					} else {
						$tags_str = '';
					}

					?>
					<?php $post_img_src = kama_thumb_src('w=300 &h=300'); ?>
                    <div class="news__item mix <?php echo $tags_str; ?>">
                        <div class="news__item-bg" style="background-image: url('<?php echo $post_img_src; ?>')"></div>
                        <div class="news__item-content">
                            <div class="news__item-header">
                                <img src="<?php echo get_template_directory_uri().'/assets/i/logo.png'; ?>" alt="">
                                <div class="news__item-data">
                                    <div class="news__item-data-header">
                                        <h6 class="news__item-data-title">Eu Consult</h6>
                                        <svg class="ALGr5" xmlns="http://www.w3.org/2000/svg" width="19"
                                                viewbox="0 0 19 19"
                                                style="fill-rule:evenodd">
                                            <path d="M15.3812,6.495914 L12.6789333,8.77258837 C12.6191333,8.84477644 12.5099333,8.85722265 12.4354,8.79997005 C12.4215333,8.79001308 12.4094,8.77756686 12.3998667,8.76429089 L9.78686667,6.14327115 C9.67766667,5.99225704 9.46186667,5.95491839 9.305,6.05863687 C9.26946667,6.08186981 9.23913333,6.11091099 9.21573333,6.14493065 L6.60013333,8.81075677 C6.5464,8.88626383 6.43893333,8.90534803 6.3592,8.85390366 C6.34446667,8.84394669 6.33146667,8.83233022 6.32106667,8.81905425 L3.61966667,6.50587098 C3.5018,6.36149485 3.28426667,6.33577266 3.13346667,6.44861837 C3.0494,6.51167921 3,6.60792997 3,6.70998895 L4,14 L15,14 L16,6.70169148 C16,6.51831719 15.8448667,6.36979232 15.6533333,6.36979232 C15.5476,6.36979232 15.4470667,6.41625821 15.3812,6.495914 Z"></path>
                                        </svg>
                                    </div>
                                    <div class="news__item-show-link">
                                        <div class="news__item-circle"><span></span><span></span><span></span></div>
                                        <a class="news__item-link"  rel="nofollow" href="https://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>&amp;t=<?php the_title(); ?>" class="social-fb" target="_blank">
                                            <svg class="blog-icon-fill" xmlns="http://www.w3.org/2000/svg" width="19"
                                                    viewbox="0 0 19 19" role="img">
                                                <path d="M16.9410444,8.39109677 C17.0195644,8.46818967 17.0195644,8.59371274 16.9410444,8.67080564 L11.9026789,13.6176004 C11.7063789,13.8103326 11.3872657,13.8103326 11.1909657,13.6176004 C11.096339,13.5246935 11.0429857,13.3991705 11.0429857,13.2677172 L11.0429857,11.0013834 C7.27402658,11.0013834 4.38690723,12.7339971 2.38263435,16.1972475 C2.27794104,16.3781194 1.99204777,16.3049799 2.0001011,16.0964337 C2.24975438,10.0357454 5.2637137,6.69011101 11.0429857,6.05953059 L11.0429857,3.79418524 C11.0429857,3.52040659 11.268479,3.29999995 11.5463189,3.29999995 C11.6802056,3.29999995 11.8080522,3.35139522 11.9026789,3.44430206 L16.9410444,8.39109677 Z M3.43409745,13.1243046 C5.43837033,11.0576217 7.98624309,10.0139024 11.0434891,10.0139024 L12.0501555,10.0139024 L12.0501555,12.0746551 L15.6600614,8.53035818 L12.0501555,4.98704968 L12.0501555,6.94501178 L11.1542224,7.0418721 C6.94635665,7.50146442 4.39949056,9.49994971 3.43409745,13.1243046 Z"></path>
                                            </svg>
                                            <span>Partajeaza postarea</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="news__item-time">
                                    <div class="news__item-date"><span><?php echo get_the_date('d M Y'); ?></span>
                                        <span><?php echo carbon_get_the_post_meta('crb_news_time'); ?> min</span>
                                    </div>
                                </div>
                            </div>
                            <h3 class="news__item-title">
                                <a href="<?php the_permalink(); ?>">
									<?php the_title(); ?>
                                </a>
                            </h3>
                            <p class="news__short-text">
<!--                                --><?php //echo get_short_text_clear(get_the_content(), 220) . '...'; ?>
                            </p>
                            <footer class="news__item-footer">
                                <div class="news__item-view">
                                    <svg class="ALGr5" xmlns="http://www.w3.org/2000/svg" width="19" viewbox="0 0 19 19"
                                         role="img" aria-label="Views count">
                                        <path d="M18.6514224,10.4604595 C17.3924224,11.9688254 13.9774224,15.4790227 9.46342244,15.5 L9.42442244,15.5 C6.26242244,15.5 3.20842244,13.7938483 0.345422443,10.4264963 C-0.115140814,9.88163847 -0.115140814,9.08439833 0.345422443,8.5395405 C1.60442244,7.03117456 5.01942244,3.52097727 9.53342244,3.5 L9.57342244,3.5 C12.7354224,3.5 15.7894224,5.20615167 18.6524224,8.5735037 C19.1122856,9.11875503 19.1118633,9.91569484 18.6514224,10.4604595 Z M17.8674224,9.2228003 C15.2084224,6.09518855 12.4194224,4.50990594 9.57442244,4.50990594 L9.54042244,4.50990594 C5.46142244,4.52888537 2.30642244,7.78335969 1.14042244,9.18084575 C0.991393136,9.3517953 0.988008897,9.60533857 1.13242244,9.78019645 C3.79142244,12.9078082 6.58142244,14.4920919 9.42542244,14.4920919 L9.46042244,14.4920919 C13.5394224,14.4741114 16.6934224,11.2196371 17.8604224,9.822151 C18.0095734,9.6511131 18.0125381,9.39726759 17.8674224,9.2228003 L17.8674224,9.2228003 Z M9.49942244,13.3932823 C7.35251405,13.3646853 5.63255349,11.6080263 5.65157552,9.46333471 C5.67059754,7.31864313 7.42144652,5.59270141 9.56852513,5.6021069 C11.7156037,5.61151239 13.4512316,7.35272696 13.4514224,9.49750271 C13.4349115,11.6625186 11.6668124,13.4054651 9.49942244,13.3932823 L9.49942244,13.3932823 Z M9.49942244,6.61762258 C7.91092198,6.63961751 6.63891624,7.93990193 6.65354481,9.52676854 C6.66817338,11.1136351 7.96393479,12.3902997 9.55257137,12.3830695 C11.1412079,12.3758393 12.4252698,11.0874333 12.4254224,9.50049946 C12.4127657,7.89797688 11.1037033,6.60820738 9.49942244,6.61762258 L9.49942244,6.61762258 Z"></path>
                                    </svg>
                                    <div class="news__item-num"><?php echo do_action('pageviews'); ?></div>
                                </div>
                                <a class="news__item-comment" href="#"><?php echo carbon_get_theme_option('crb_write_a_comment_all'.get_lang()); ?></a>
                                <div class="news__item-likes">
                                   <?php echo do_shortcode('[wp_ulike]'); ?>
                                </div>
                            </footer>
                        </div>
                    </div>
				
				<?php endwhile; ?>
			<?php else: ?>
			<?php endif; ?>

        </div>
    </div>
	<?php require_once __DIR__ . '/template-parts/connect-now.php'; ?>
</section>

<?php require_once __DIR__ . '/template-parts/connect-now.php'; ?>
<?php get_footer(); ?>

