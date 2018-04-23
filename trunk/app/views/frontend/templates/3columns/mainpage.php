<?php if (!defined('BASEPATH')) exit(__('No direct script access allowed')); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://ogp.me/ns/fb#" xml:lang="en" lang="en"><?php

//Load Head Block
Library('block')->load('page_html/head'); ?>
<body class="codefight-body">

<noscript>
    <div id="js_disabled" class="error center"><strong>This site works better with javascript enabled</strong>.</div>
</noscript>
<div class="top_menu_container">

    <div class="menu_top">
        <div class="logo_text"><a title="Goto <?php echo $this->setting->site_name ?> Home"
                                  href="<?php echo site_url();?>"><?php echo strtoupper($this->setting->site_name); ?></a>
        </div>
        <?php

        //Load page menu horizontal block
        Library('block')->load('menu/page_horizontal'); ?>
        <p class="clear">&nbsp;</p>
    </div>
    <p class="clear">&nbsp;</p>

</div>
<div class="siteContainer">
        <?php
            //Load Language Selection Block
            Library('block')->load('languages');

            //Load message block
            Library('block')->load('page_html/message'); ?>

            <div class="header">
                <div class="userLogged"><?php

                    //Load Template Select Block
                    Library('block')->load('template_select');

                    //Load welcome block
                    Library('block')->load('welcome'); ?>

                </div>
            </div>

            <div class="pageContainer">

                <div class="menuLeft">
                    <div class="blog_categories">
                        <h2>CATEGORIES</h2><?php

                        //Load Blog Categories block
                        Library('block')->load('menu/blog_categories_vertical');?>
                    </div>

                    <p class="clear">&nbsp;</p>

                    <div class="blog_roll">
                        <h2>BLOG ROLL</h2><?php

                        //Load Blog Roll block
                        Library('block')->load('menu/blog_roll_vertical');?>
                    </div>

                    <p class="clear">&nbsp;</p>

                    <div class="blog_roll">
                        <h2>FAVOURITE LINKS</h2><?php

                        //Load Favourite Links block
                        Library('block')->load('menu/favorite_links_vertical');?>
                    </div>

                    <p class="clear">&nbsp;</p>

                    <div class="tag_cloud"><?php

                        //Load Tag Cloud block
                        Library('block')->load('tag_cloud'); ?>
                    </div>

                </div>

                <div class="contents"><?php

                    //Load Content Block
                    Library('block')->load($content_block, '3columns'); ?>

                </div>

                <div class="right_column">
                    <div class="google_search"><?php

                        //Load google Search block
                        Library('block')->load('google_search');?>
                    </div>

                    <div class="favorite_links">
                        <h2>Favorite Links</h2><?php

                        //Load Sponsored Links block
                        Library('block')->load('menu/favorite_links_vertical'); ?>

                    </div>

                </div>

                <p class="clear">&nbsp;</p>
            </div>

            <p class="clear">&nbsp;</p>

            <div id="footer">
                <p class="clear">&nbsp;</p>

                <div class="footer_links"><?php

                    //Load Footer Block
                    Library('block')->load('page_html/footer'); ?>
                </div>
                <p class="clear">&nbsp;</p>

                <div class="footer_recent_entry">
                    <h2>Recent Posts</h2><?php

                    //Load Footer Block
                    Library('block')->load('blog_recent'); ?>
                </div>
                <div class="footer_most_popular">
                    <h2>Most Popular</h2><?php

                    //Load Footer Block
                    Library('block')->load('blog_popular'); ?>
                </div>
                <div class="footer_ontheweb_popular">
                    <h2>Sponsors</h2><?php

                    //Load Footer Block
                    Library('block')->load('menu/sponsored_links_vertical'); ?>
                </div>
                <p class="clear">&nbsp;</p>

                <div class="copyright"><?php

                    //Load copyright Block
                    Library('block')->load('page_html/copyright'); ?>
                </div>
                <p class="clear">&nbsp;</p>

                <div class="powered_by"><?php

                    //Load Powered By Block: I hope you keep as it is. Thanks.
                    Library('block')->load('page_html/powered_by'); ?>
                </div>
            </div>

</div>
</body>
</html>
