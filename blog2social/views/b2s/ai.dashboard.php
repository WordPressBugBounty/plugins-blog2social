<?php
wp_nonce_field('b2s_security_nonce', 'b2s_security_nonce');
$b2sSiteUrl = get_option('siteurl') . ((substr(get_option('siteurl'), -1, 1) == '/') ? '' : '/');
?>
<div class="b2s-container">
    <div class="b2s-inbox">
        <div class="col-md-12 del-padding-left">
            <?php require_once (B2S_PLUGIN_DIR . 'views/b2s/html/sidebar.php'); ?>
            <div class="col-md-9 del-padding-left del-padding-right">
                <!--Header|Start - Include-->
                <?php require_once (B2S_PLUGIN_DIR . 'views/b2s/html/header.php'); ?>
                <!--Header|End-->
                <div class="clearfix"></div>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="b2s-ass-title-strong"><?php esc_html_e("Welcome to the AI content creator from Blog2Social!", "blog2social"); ?></h4>  
                                <br>
                                <p><?php esc_html_e("Discover how the Assistini AI can take your social media posts to the next level. Assistini is designed to provide you with creative ideas and optimize your texts to improve the performance of your social media posts and the interaction with your followers. Whether you post on Instagram, Twitter, Facebook, or Linkedin - Assistini is your reliable creative partner.", "blog2social"); ?></p>
                                <br>
                                <a class="b2s-ass-register-btn text-center" target="_blank" href="https://b2s.li/wp-plugin-assistini-login"><?php esc_html_e('Try Assistini for free', 'blog2Social'); ?></a>
                            </div>
                            <div class="col-md-6 hidden-sm hidden-xs text-center">
                                <img class="b2s-ass-img-welcome" src="<?php echo esc_url(plugins_url('/assets/images/ass/assistini-welcome.png', B2S_PLUGIN_FILE)); ?>" alt="Assistini"> 
                            </div>                            
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-md-6 hidden-sm hidden-xs text-center">
                                <img class="b2s-ass-img-rewrite" src="<?php echo esc_url(plugins_url('/assets/images/ass/assistini-rewrite.png', B2S_PLUGIN_FILE)); ?>" alt="Assistini"> 
                            </div>                            
                            <div class="col-md-6">
                                <h4 class="b2s-ass-title-strong"><?php esc_html_e("How can you work with Assistini AI in Blog2Social?", "blog2social"); ?></h4>  
                                <p><?php esc_html_e("Create better social media posts and work smarter. Assistini Al is your personal time saver.", "blog2social"); ?></p>
                                <br>
                                <h5 class="b2s-ass-title-h5">1. <?php esc_html_e("Create and schedule a social media post", "blog2social"); ?></h5>
                                <p><?php esc_html_e("Create your social media post as usual with the Blog2Social \"customizing\" option.", "blog2social"); ?></p>
                                <h5 class="b2s-ass-title-h5">2. <?php esc_html_e("Optimize your existing texts with Assistini AI", "blog2social"); ?></h5>
                                <p><?php esc_html_e("In the preview editor, you can customize your text using Assistini. Click the button \"Rewrite with AI\", and Assistini will quickly generate optimized posts tailored to the social platforms.", "blog2social"); ?></p>
                                <h5 class="b2s-ass-title-h5">3. <?php esc_html_e("Share your post", "blog2social"); ?></h5>
                                <p><?php esc_html_e("You can then share your post on your social media networks as usual.", "blog2social"); ?></p>
                                <br>
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h4 class="b2s-ass-title-strong"><?php esc_html_e("Unleash the full power of the Assistini AI generator!", "blog2social"); ?></h4>  
                                <p><?php esc_html_e("Want to create more social media posts from other content, write captivating blog posts and newsletters, translate your content into multiple languages, and much more?", "blog2social"); ?></p>
                                <br>
                                <p><?php esc_html_e("The full version of Assistini can help you work more efficiently and do much more:", "blog2social"); ?></p>
                                <br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-md-4 text-center">
                                <div class="thumbnail b2s-ass-thumbnail-dashboard">
                                    <img src="<?php echo esc_url(plugins_url('/assets/images/ass/tool_1.png', B2S_PLUGIN_FILE)); ?>" alt="Assistini">
                                    <div class="caption">
                                        <h4><?php esc_html_e("Generate AI based content ideas", "blog2social"); ?></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 text-center">
                                <div class="thumbnail b2s-ass-thumbnail-dashboard">
                                    <img src="<?php echo esc_url(plugins_url('/assets/images/ass/tool_2.png', B2S_PLUGIN_FILE)); ?>" alt="Assistini">
                                    <div class="caption">
                                        <h4><?php esc_html_e("Contextual writing", "blog2social"); ?></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 text-center">
                                <div class="thumbnail b2s-ass-thumbnail-dashboard">
                                    <img src="<?php echo esc_url(plugins_url('/assets/images/ass/tool_3.png', B2S_PLUGIN_FILE)); ?>" alt="Assistini">
                                    <div class="caption">
                                        <h4><?php esc_html_e("Optimization of style and tone", "blog2social"); ?></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-md-offset-2 text-center">
                                <div class="thumbnail b2s-ass-thumbnail-dashboard">
                                    <img src="<?php echo esc_url(plugins_url('/assets/images/ass/tool_4.png', B2S_PLUGIN_FILE)); ?>" alt="Assistini">
                                    <div class="caption">
                                        <h4><?php esc_html_e("Search engine optimized texts", "blog2social"); ?></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 text-center">
                                <div class="thumbnail b2s-ass-thumbnail-dashboard">
                                    <img src="<?php echo esc_url(plugins_url('/assets/images/ass/tool_5.png', B2S_PLUGIN_FILE)); ?>" alt="Assistini">
                                    <div class="caption">
                                        <h4><?php esc_html_e("Language diversity and variation", "blog2social"); ?></h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row text-center">
                            <a class="b2s-ass-register-btn" target="_blank" href="https://b2s.li/wp-plugin-assistini-website"><?php esc_html_e('Learn more', 'blog2Social'); ?></a>
                        </div>


                    </div>
                </div>
                <div class="clearfix"></div>

            </div>
            <?php require_once (B2S_PLUGIN_DIR . 'views/b2s/html/sidebar.php'); ?>
        </div>
    </div>
    <div class="col-md-12">
        <?php
        $noLegend = 1;
        require_once (B2S_PLUGIN_DIR . 'views/b2s/html/footer.php');
        ?>
    </div>
</div>