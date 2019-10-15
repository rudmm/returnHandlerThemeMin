<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ReturnHandler</title>
    <?php wp_head(); ?>
    <script>
        let adminUrl = '<?php echo admin_url('admin-ajax.php?action=send_mail'); ?>';
    </script>
</head>
<body>
    <div class="global-wrapper">
        <div class="mbox">
        <section class="form" id="myform" >
            <div class="wrapper" >
                <div class="contact-form" >
                    <span class="close">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/delete.svg" alt="close" >
                    </span>
                    <div class="form-title">
                        <h1>Easy integration, no credit card. <br><span>6 months for free!</span></h1>
                    </div>
                    <form id="form_connect" action="" method="post">
                        <label for="name">Name<span>*</span></label>
                        <input required type="text" id="name" placeholder="What’s your full name?">
                        <label for="email">Email<span>*</span></label>
                        <input required type="email" id="email" placeholder="you@example.com">
                        <div class="block_website">
                            <label for="website">Website</label>
                            <input type="text" id="website" placeholder="https://example.com">
                        </div>
                        <div class="block_platform">
                        <label for="platform">Platform</label>
                        <select id="platform">
                            <option value="shopify" selected>Shopify</option>
                            <option value="magento" >Magento</option>
                            <option value="big commerce" >Big commerce</option>
                            <option value="woo commerce" >Woo commerce</option>
                            <option value="other" >Other</option>
                        </select>
                        </div>
                        <label for="comment">Comments</label>
                        <textarea name="" id="comment" cols="" rows="" placeholder="Please type here…."></textarea>
                        <div class="success">
                        <button class="submit-js">Request Free Invite</button>
                        
                        </div>
                        
                    </form>
                </div>
                </div>
            </section>