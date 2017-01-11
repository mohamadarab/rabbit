
        <div class="container main">
            <div class="row">
                <div class="col-md-6">
					<div id="owl-demo" class="owl-carousel owl-theme">
						<?php print render($page['slider']); ?>
					</div>
                </div>
                <div class="col-md-6">
                    <a href="<?php print $front_page; ?>" class="btn btn-rabbit back">  صفحه اصلی  <i class="fa fa-angle-left" aria-hidden="true"></i></a>
                    <div id="watermark">
                        <h2 class="page-title" text-center><?php print $title; ?></h2>
                        <!--<div class="marker"><?php print $site_name ?></div>-->
                    </div>
                   
                    <div class="info">
                       <?php if (!empty($page['highlighted'])): ?>
						<div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
					<?php endif; ?>
					<a id="main-content"></a>
					<?php print render($title_prefix); ?>
						<?php if (!empty($title) && !drupal_is_front_page()): ?>
			
					<?php endif; ?>
						<?php print render($title_suffix); ?>
						
						<?php print $messages; ?>
						<?php if (!empty($tabs)): ?>
						<?php print render($tabs); ?>
					<?php endif; ?>
					<?php if (!empty($page['help'])): ?>
					<?php print render($page['help']); ?>
					<?php endif; ?>
					<?php if (!empty($action_links)): ?>
					<ul class="action-links"><?php print render($action_links); ?></ul>
					<?php endif; ?>
					<?php print render($page['content']); ?>
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
