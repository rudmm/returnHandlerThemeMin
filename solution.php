<?php
/**
 * Template Name: Solution
 */
?>
<?php get_header(); ?>
<header class="header solution">
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
                <div class="mbox">
                <section class="header-content">
                        <div class="section-title">
                            <h1>Reducing the return rate by incentivizing customers</h1>
                        </div>
                        <div class="text">
                            <p>We’ve managed to reduce the return rates by 15-65% to e-commerce brands in a variety of industries.</p>
                        </div>
                    </section>
                </div>
                <div class="top-image">
                    <div class="wrapper">
                        <div class="image_animate">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/solution/cart.svg" alt="cart" class="cart element">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/solution/star.svg" alt="star" class="star element">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/solution/map.svg" alt="map" class="map element">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/solution/love.svg" alt="love" class="love element">    
                        </div>
                    </div>
                </div>
            </header>

            <!--end header-->


            <!-- main-->
            <main>
                <!--begin first section-->
                <section class="infosection">
                    
                    <div class="info solutioninfo">
                        <div class="info_image">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/solution/flex.svg" alt="flex" class="img-fluid">
                        </div>
                        <div class="info_text">
                            <div class="text_block">
                                <div class="info_text_title">
                                    <h2>What is <br> happening <span>today</span></h2>
                                </div>
                                <div class="info_text_p">
                                    <p>Having a great return policy is great, no doubt about it. There are a variety of solutions who helps you optimizing this process, technology-wise, and logistic wise.</p>
                                </div>
                            </div>
                            <div class="text_block">
                                <div class="info_text_title">
                                    <h2>The <span>new approach</span></h2>
                                </div>
                                <div class="info_text_p">
                                    <p><strong>ReturnHandler</strong> comes into the place between the phrase when customers asking for a return to the beginning of the return process.</p>
                                    <br>
                                    <p>We believe that avoiding the whole return is better than optimizing the return itself, either the customer and the seller.</p>
                                </div>
                            </div>
                            <div class="text_block">
                                <div class="info_text_title">
                                    <h2><span>How</span> it is done</h2>
                                </div>
                                <div class="info_text_p">
                                    <p>When a customer asking for a return, you let our cute AI tool offer him the compensation he deserves. If the customer agrees, everyone is happy. If he declines, he can just continue to the standard return policy you have.</p>
                                </div>
                            </div>
                        </div>
                    </div>              
                </section>
                <!--end first section-->

                <!--begin section emoji-->

                <section class="emoji">
                    <div class="mbox">
                        <div class="section-title">
                            <h2>Tiny change in the return flow process makes all different</h2>
                        </div>
                        <div class="image_emoji">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/solution/emoji.png" alt="" class="img-fluid">
                        </div>
                        <!--<div class="emoji_image">
                            <div class="emoji_image_title">
                                <h3>You Today</h3>
                            </div>
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/solution/emoji1.svg" alt="emoji1" class="img-fluid">
                            <div class="emoji_image_text">   
                                <p>Customer wants to make a return</p>
                            </div>
                        </div>
                        <div class="emoji_image two">
                            <div class="emoji_image_title">
                                <h3>You Tomorrow</h3>
                            </div>
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/solution/emoji2.svg" alt="emoji2" class="img-fluid">
                            <div class="emoji_image_text">   
                                <p>Customer wants to make a return</p>
                            </div>
                            <div class="emoji_image_text top">
                                <p>Customer declines to the incentive</p>
                            </div>
                        </div>-->
                    </div>
                </section>

                <!--end emoji section-->

                <!--begin phone section-->

                <section class="phone">
                    <div class="section-title">
                        <h2>Tailer-made smart compensation <br> to the customer</h2>
                    </div>
                    <div class="phone_image">
                        <video src="<?php echo get_template_directory_uri() ?>/assets/img/solution/phone.mp4" playsinline loop muted autoplay></video>
                    </div>
                </section>

                <!--end phone section-->


                 <!--begin section questions-->

                 <section class="questions">
                     <div class="mbox">
                        <div class="section-title">
                            <h2>I have some questions</h2>
                        </div>
                        <div class="questions-list">
                            <?php
                            $page = (get_query_var('paged')) ? get_query_var('paged') : 1;
                            $args = array('posts_per_page' => 0, 'paged' => $page, 'post_type' => 'questions');
                            query_posts($args);
                            ?>
                            <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : the_post(); ?>
                            <div class="list-item">
                                <div class="question">
                                    <h4><?php the_title(); ?></h4>
                                    <div class="circle">
                                        <span class="arrow-lines"><span class="arrow-line left"></span><span class="arrow-line right"></span></span>
                                    </div>
                                </div>
                                <div class="wrapper_line">
                                    <div class="answer_line"></div>
                                </div>
                                
                                <div class="answer">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                            <?php
                                endwhile;
                                endif;
                            ?>  
                        </div>
                        <div class="btn btn-questions"><a href="javascript:void(0);">Request a Free Invite</a></div>  
                    </div>
                </section>
    
                <!--end questions section-->
            </main>
            <!--end main-->
<?php get_footer(); ?>