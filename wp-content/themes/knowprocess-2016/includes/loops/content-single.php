<?php
/*
The Single Posts Loop
=====================
*/
?> 

<?php if(have_posts()): while(have_posts()): the_post(); ?>
    <article role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
        <header>
            <h2><?php the_title()?></h2>
            <h4>
              <em>
                <span class="text-muted author">
                  <img class="img-rounded" src="<?php echo 'https://www.gravatar.com/avatar/'.md5( strtolower( get_the_author_meta('email') ) ).'?d='.urlencode( $default ).'&s=48'; ?>">
                  <?php the_author() ?>,</span>
                <time  class="text-muted" datetime="<?php the_time('d-m-Y')?>"><?php the_time('jS F Y') ?></time>
              </em>
            </h4>
            <?php if (have_comments() && get_comments_number( $post->ID )>0) { ?>
              <p class="text-muted" style="margin-bottom: 30px;">
                <i class="glyphicon glyphicon-folder-open"></i>&nbsp; <?php _e('Filed under', 'bst'); ?>: <?php the_category(', ') ?><br/>
                <i class="glyphicon glyphicon-comment"></i>&nbsp; <?php _e('Comments', 'bst'); ?>: <?php comments_popup_link(__('None', 'bst'), '1', '%'); ?>
              </p>
            <?php } ?>
        </header>
        <section>
            <?php
              the_post_thumbnail( 'full', array( 'class' => 'img-responsive'));
            ?>
            <?php the_content()?>
            <?php wp_link_pages(); ?>
        </section>
    </article>
<?php if (have_comments() && get_comments_number( $post->ID )>0) { ?>
  <?php comments_template('/includes/loops/comments.php'); ?>
<?php } ?>
<?php endwhile; ?>
<?php else: get_template_part('includes/loops/content', 'none'); ?>
<?php endif; ?>
