<?php
/**
 * Template Name: Works
 */
?>
<?php get_header(); ?>

<header class="header works">
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
                            <h1>Examine hundreds of data points in seconds</h1>
                        </div>
                        <div class="text">
                            <p><strong>ReturnHandler</strong> artificial intelligence (AI) incentivize customers to reduce returns and disincentivize returns abuse on the same time.</p>
                        </div>
                    </section>
                </div>
                <div class="top-image">
                    <div class="wrapper">
                        <div class="image_animate">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/works/work.svg" alt="work" class="work element">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/works/work1.svg" alt="work1" class="work1 element">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/works/bar.svg" alt="bar" class="bar element">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/works/Speech Bubble.svg" alt="speech" class="speech element">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/works/grafic.svg" alt="grafic" class="grafic element">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/works//work2.svg" alt="work2" class="work2 element">
                        </div>
                    </div>
                </div>
            </header>

            <!--end header-->


            <!-- main-->
            <main>
                <!--begin infoflex section-->
                
                <section class="infoflex">
                    <div class="mbox my_container">
                        <div class="wrapper-block">
                            <div class="info_block col1">
                                <div class="image_block">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/works/machine.svg" alt="machine" class="img-fluid">
                                </div>
                                <div class="section-title">
                                    <h2>Machine learning</h2>
                                </div>
                                <div class="block_text">
                                    <p><strong>ReturnHandler</strong> is smart and always gets better for you. Our algorithms are based on big data from the e- commerce space, review websites, locations, industry trends, and user- generated-content.</p>
                                </div>
                            </div>
                            <div class="info_block col2">
                                <div class="image_block">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/works/tailor.svg" alt="tailor" class="img-fluid">
                                </div>
                                <div class="section-title">
                                    <h2>Tailor-made behaviour</h2>
                                </div>
                                <div class="block_text">
                                    <p><strong>ReturnHandler</strong> responses dynamically and most probably different to each customer, just like the best customer retention represent would.</p>
                                </div>
                            </div>
                            <div class="info_block col3">
                                <div class="image_block">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/works/ai.svg" alt="ai" class="img-fluid">
                                </div>
                                <div class="section-title">
                                    <h2>100’s of parameters</h2>
                                </div>
                                <div class="block_text">
                                    <p>Behind the scenes, ReturnHandler AI tool considers hundreds of parameters, before understanding what he should offer your customer, when, and why.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!--end infoflex section-->

                <section class="brain">
                    <div class="brain-image">
                        <div class="wrapper">
                            <div class="animate">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/works/lefttoptext.svg" alt="text" class="lefttoptext element">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/works/righttoptext.svg" alt="text" class="element righttoptext">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/works/brain.svg" alt="brain" class="element brain">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/works/rightbottom.svg" alt="" class="rightbottom arrow element">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/works/leftbottom.svg" alt="" class="leftbottom arrow element">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/works/rightbottomtext.svg" alt="text" class="element rightbottomtext">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/works/lefttop.svg" alt="" class="lefttop arrow element">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/works/leftbottomtext.svg" alt="text" class="leftbottomtext element">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/works/righttop.svg" alt="" class="righttop arrow element">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/works/bottom.svg" alt="" class="element bottom arrow">
                                <div class="element phone_brain">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/works/phone.png" alt="phone" class="img-fluid">
                                    <div class="btn">
                                        <a href="javascript:void(0);">Try it for free</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </main>
            <!--end main-->

<?php get_footer(); ?>