        <div class="side right"><br/>
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Header Left Sidebar') ) : ?>
              <ul>
                <li><a href="<?php bloginfo('url'); ?>">home</a></li>
                <?php wp_list_pages('title_li='); ?>
                <li><a href="<?php bloginfo('atom_url'); ?>">feed</a></li>
			    <?php get_links(-1, '<li>', '</li>', ' - '); ?>
                <?php if (is_user_logged_in()) { ?>
                	<li><a href="<?php echo get_option('siteurl'); ?>/wp-admin/">Admin</a></li>
                <?php } ?>
              </ul>
            <?php endif; ?>
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Header Right Sidebar') ) : ?>
            <?php endif; ?>
          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Body Right Sidebar') ) : ?>
            <br/><h3>posts</h3>
            <ul>
              <?php wp_get_archives('type=postbypost&limit=10'); ?> 
            </ul>
            <?php if (function_exists('get_recent_comments')) { ?>
              <h3>comments</h3>
              <ul>
                <?php get_recent_comments(); ?>
              </ul>
            <?php } ?>
            <?php if (function_exists('mdv_most_commented')) { ?>
              <h3>Most Commented Posts</h3>
              <ul>
                <?php mdv_most_commented(10, '<li>', '</li>', false); ?>
              </ul>
            <?php } ?>
		  <?php endif; ?>
        </div>