<?php get_header(); ?>
            <header class="header">
                    <header>
                        <div class="bg">
                            <div class="my_container mbox">
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
                            <h1>Reduce your returns. Increase the retention. Make more profits.</h1>
                        </div>
                        <div class="text">
                            <p>A smart artificial intelligence tool that will handle your return requests and minimize it by offering incentives to your customers.</p>
                        </div>
                        <div class="top-btn">
                            <a href="javascript:void(0);" class="btn">Try It For Free</a>
                        </div>
                    </section>
                </div>
                <div class="top-image">
                    <div class="wrapper">
                        <div class="image_animate">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/top.svg" alt="top" class="img-fluid headerelement element">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/element4.svg" alt="element4" class=" element4 element">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/element1.svg" alt="element1" class=" element element1">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/element2.svg" alt="element2" class=" element element2">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/element3.svg" alt="element3" class=" element element3">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/element5.svg" alt="element5" class=" element element5">
                        </div>
                    </div>
                </div>
            </header>

            <!--end header-->


            <!-- main-->
            <main>
                <!--begin first section-->
                <section class="infosection col">
                    <div class="my_container">
                        <div class="info">
                            <div class="info_image">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/flexone.svg" alt="flexone" class="img-fluid">
                            </div>
                            <div class="info_text">
                                <div class="info_text_title">
                                    <h2><span>Different</span> approach</h2>
                                </div>
                                <div class="info_text_p">
                                    <p><strong>ReturnHandler</strong> is changing the way brands look at returns and exchanges. Instead of trying to decrease return disappointing process, good customers get free incentives to buy again and cancel the return.</p>
                                </div>
                                <div class="info_text_btn">
                                    <a href="<?php bloginfo('url') ?>/solution">Learn more about our solution  <img src="<?php echo get_template_directory_uri() ?>/assets/img/right.svg" alt="right" class="img-fluid"></a>
                                </div>
                            </div>
                        </div>
                        <div class="info reverse">
                            <div class="info_image">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/flextwo.svg" alt="flextwo" class="img-fluid">
                            </div>
                            <div class="info_text">
                                <div class="info_text_title">
                                    <h2><span>Avoid</span>  abuse and <br> serial returners</h2>
                                </div>
                                <div class="info_text_p">
                                    <p>As you already know, good return policy increase conversions. However, serial returners abuse your policy and take your margin down. We will handle this for you from now on.</p>
                                </div>
                            </div>
                        </div>
                        <div class="info">
                            <div class="info_image">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/flexthree.svg" alt="flexthree" class="img-fluid">
                            </div>
                            <div class="info_text">
                                <div class="info_text_title">
                                    <h2>Works <span>like a magic</span></h2>
                                </div>
                                <div class="info_text_p">
                                    <p>It looks like magic, but it is not. We analyze (a lot) of data using sophisticated mathematical models based on machine learning and AI, considering hundreds of parameters.</p>    
                                </div>
                                <div class="info_text_btn">
                                    <a href="<?php bloginfo('url') ?>/works">Learn more about how it works  <img src="<?php echo get_template_directory_uri() ?>/assets/img/right.svg" alt="right" class="img-fluid"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--end first section-->

                <!--begin section platform-->
                <section class="platform">
                    <div class="my_container">
                        <div class="info reverse">
                            <div class="info_image">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/platform.svg" alt="flextwo" class="img-fluid">
                            </div>
                            <div class="info_text">
                                <div class="info_text_title">
                                    <h2><span>Easily plug</span> to your platform</h2>
                                </div>
                                <div class="info_text_p">
                                    <p>Easily plug our solution to popular e-commerce platforms such as Shopify and Magento. Not only we instantly get the data needed, but we also provide you with reports which prove we increase the button line profit of your business.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!--end section platform-->

                 <!--begin help section-->

                 <section class="help">
                     <div class="my_container">
                        <div class="help_content">
                            <div class="help_content_title">
                                <h2>Help the planet. Make more profit. <br> On the same time.</h2>
                            </div>
                            <div class="help_content_btn">
                                <a href="javascript:void(0);">Request Invite</a>
                            </div>
                        </div>
                    </div>
                </section>
    
                <!--end help section-->

            </main>
            <!--end main-->
<?php get_footer(); ?>