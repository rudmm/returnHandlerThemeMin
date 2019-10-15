<?php
/**
 * Template Name: Blog
 */
?>
<?php get_header(); ?>
<header class="header blog" id="blog">
                        <header>
                            <div class="bg">
                                <div class="mbox">
                                    <div class="fixedblock">
                                        <div class="header_logo">
                                        <?php 
                                        if( has_custom_header( $blog_id ) ){ ?>
                                        <a href="<?php bloginfo('url'); ?>"> <?php
                                            the_custom_header_markup(); ?>
                                            </a> <?php
                                        }else{
                                        ?>
                                        <a href="<?php bloginfo('url'); ?>">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.svg" alt="logo" class="img-fluid">
                                        </a>
                                        <?php }?>
                                        </div>
                                        <div class="btn-menu">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                        <div class="navbar">
                                            <div class="header_menu">
                                            <?php wp_nav_menu( [
                                                'theme_location'  => 'top', 
                                                'container'       => null, 
                                                'container_class' => null, 
                                                'container_id'    => null,
                                                'menu_class'      => 'menu', 
                                                'menu_id'         => null,
                                                'echo'            => true,
                                                'fallback_cb'     => 'wp_page_menu',
                                                'before'          => '',
                                                'after'           => '',
                                                'link_before'     => '',
                                                'link_after'      => '',
                                                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                                'depth'           => 0,
                                                'walker'          => '',
                                            ] ); ?>
                                            </div>
                                            <div class="header_btn">
                                                <a href="#myform">Request Invite</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </header>
                </header>

            <!--end header-->


            <!-- main-->
            <main>
                <section class="posts">
                    <div class="headerblock">
                        <div class="mbox">
                            <div class="blog_name section-title">
                                <h1><?php wp_title(''); ?></h1>
                            </div>
                            <div class="blog_categories">
                                <?php 
                                $args = array(
                                    'show_option_all'    => '',
                                    'show_option_none'   => __('No categories'),
                                    'orderby'            => 'name',
                                    'order'              => 'ASC',
                                    'style'              => 'none',
                                    'show_count'         => 0,
                                    'hide_empty'         => 1,
                                    'use_desc_for_title' => 1,
                                    'child_of'           => 0,
                                    'feed'               => '',
                                    'feed_type'          => '',
                                    'feed_image'         => '',
                                    'exclude'            => '',
                                    'exclude_tree'       => '',
                                    'include'            => '',
                                    'hierarchical'       => true,
                                    'title_li'           => null,
                                    'number'             => NULL,
                                    'echo'               => 1,
                                    'depth'              => 0,
                                    'current_category'   => 0,
                                    'pad_counts'         => 0,
                                    'taxonomy'           => 'category',
                                    'walker'             => 'Walker_Category',
                                    'hide_title_if_empty' => false,
                                    'separator'          => ' ',
                                );
                                    wp_list_categories( $args );
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="postsblock">
                        <div class="mbox">
                            <?php
                            $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1; // определяем текущую страницу блога
                            $args = array(
                                'posts_per_page' => get_option('posts_per_page'), // значение по умолчанию берётся из настроек, но вы можете использовать и собственное
                                'paged'          => $current_page // текущая страница
                            );
                            query_posts( $args );
                             
                            $wp_query->is_archive = true;
                            $wp_query->is_home = false;
                            ?>
                            <?php
                            $i=1;
                            if ( have_posts() ) : while ( have_posts() ) : the_post(); 
                            if($i==1){?>
                                <div class="row">
                            <?php } ?>
                            <div class="post">
                                <div class="post_image"><a href="<?php the_permalink() ?>"><?php if(has_post_thumbnail()){ the_post_thumbnail(); }else{?> <img src="<?php echo get_template_directory_uri() ?>/assets/img/blog/post.jpg" alt=""> <?php  } ?></a></div>
                                <div class="post_date"><span><?php the_time('M j')?> • <?php the_category(' ','',''); ?></span></div>
                                <div class="post_title"><h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3></div>
                            </div>
                            <?php if($i==3){ $i=0; ?>
                                </div>
                            <?php } 
                            $i++;
                            ?>

                            <?php endwhile;
                            if($i<4){ ?>
                                </div>
                            <?php } ?>
                            <?php endif; ?>
                        </div>


                        <?php if (  $wp_query->max_num_pages > 1 ) : ?>
                                <script>
                                let ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
                                let true_posts = '<?php echo serialize($wp_query->query_vars); ?>';
                                let current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
                                let max_pages = '<?php echo $wp_query->max_num_pages; ?>';
                                </script>
                                <div class="load-btn">
                                    <button class="btn btn-blog">Load More</button>
                                </div>
                            <?php endif; ?>
                    </div>
                </section>
            </main>
            <?php $blogpage = 1; ?>
            <!--end main-->

<?php get_footer('blog'); ?>