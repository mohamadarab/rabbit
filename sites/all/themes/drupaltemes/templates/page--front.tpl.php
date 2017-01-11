

    <body>
        <div class="container main">
            <div class="row">
                <div class="col-md-6">
					<div id="owl-demo" class="owl-carousel owl-theme">
						<?php print render($page['slider']); ?>
					</div>
                </div>
                <div class="col-md-6 text-center">
                    <div class="logo">
                       <?php if ($logo): ?>
						<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" >
							<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
						</a>
					<?php endif; ?>
                        <h4><?php print $site_name ?></h4>
                    </div>
                    <div class="home-description">
                       <?php print render($page['front-text']); ?>
                    </div>
                    <div class="btn-group-vertical custom_btn">                      
						<?php print render($page['menu']); ?>
                    </div>
                    <div class="social">
                        <?php print render($page['social']); ?>
                    </div>
                </div>
            </div>
        </div>
        

        <footer class="text-center">
            <div class="container bottom">
                <div class="row">
                    <div class="col-sm-12">
                        <p>Made with <i class="fa fa-heartbeat" aria-hidden="true"></i> by <a href="https://drupalthemes.ir/">Drupalthemes</a></p>
                    </div>
                </div>
            </div>
        </footer>
