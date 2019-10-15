<?php get_header(); ?>
<?php the_post(); ?>

<header class="header blog">
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
                <section class="single">
                    <div class="thumbnail">
                    <?php if(has_post_thumbnail()){ the_post_thumbnail(); }else{?> <img src="<?php echo get_template_directory_uri() ?>/assets/img/blog/post.jpg" alt=""> <?php  } ?>
                    </div>
                    <div class="mbox">
                        <div class="box">
                            <div class="date_categories">
                                <span><?php the_time('M j') ?> • <?php the_category(' ','','') ?></span>
                            </div>
                            <div class="single_title section-title">
                                <h1><?php the_title(); ?></h1>
                            </div>
                            <div class="single_content">
                                <?php the_content(); ?>
                            </div>
                            <div class="share">
                                <span>Share:
                                    <?php
                                    $text = get_the_title();
                                    $url = get_page_link();
                                    $summary = get_the_excerpt();
                                    $image_url = get_the_post_thumbnail_url();
                                    ?> 
                                    <a href="http://www.facebook.com/sharer.php?s=100&p[url]=<?php echo urlencode( $url ); ?>&p[title]=<?php echo $title ?>&p[summary]=<?php echo $summary ?>&p[images][0]=<?php echo $image_url ?>" onclick="window.open(this.href, this.title, 'toolbar=0, status=0, width=548, height=325'); return false" target="_parent">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/blog/facebook.svg" alt="facebook">
                                    </a>
                                    <a href="http://twitter.com/share?text=<?php echo $text ?>&url=<?php echo urlencode($url) ?>" onclick="window.open(this.href, this.title, 'toolbar=0, status=0, width=548, height=325'); return false" target="_parent">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/blog/twitter.svg" alt="twitter">
                                    </a>
                                    <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode( $url ); ?>&title=<?php echo $title ?>&summary=<?php echo $summary ?>&source=<?php echo $title ?>" onclick="window.open(this.href, 'mywin', 'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/blog/linkedin-logo.svg" alt="linkedin-logo">
                                    </a>
                                </span>
                                <span class="buttons">
                                    <?php previous_post_link('%link','Prev '); ?>
                                    <?php next_post_link('%link','Next '); ?>
                                </span>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
            <!--end main-->
            
<?php get_footer('blog') ?>