<section id="nav" class="global_nav re">
	<ul>
      <h1><?php echo $city; ?>ホームページ制作.COM</h1>
      <li><a href="<?php echo home_url(); ?>#top">トップ</a><ul><li><span>低価格</span>で<span>高品質</span>なサイトをご提供いたします！</li></ul></li>
      <li><a href="<?php echo home_url(); ?>/news/">ニュース</a>
        <ul class="col4">
          <?php
          $loop = new WP_Query (array(
            'post_type'			=> 'news',
            'order'				=> 'DESC',
            'posts_per_page'	=> 4,
          ));
          while ($loop -> have_posts()) : $loop -> the_post();
          ?>
          <li <?php if( $days > $news ){ print 'class="new"'; } ?>>
            <a href="<?php the_permalink(); ?>">
              <figure>
                <?php if (has_post_thumbnail()) : ?>
                <?php $title= get_the_title(); the_post_thumbnail('list-thumb' , array( 'alt' =>$title, 'title' => $title)); ?>
                <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/thumb-noimage.jpg" alt="NoImage" />
                <?php endif ; ?>
              </figure>
              <div class="textbox">
                <div class="info">
                  <?php if(is_object_in_term( $post->ID, 'newscat')): ?>
                  <?php endif ; ?>
                  <h4><?php the_title(); ?></h4>
                  <time>
                    <?php the_time('Y.m.d'); ?>
                  </time>
                </div>
              </div>
            </a>
          </li>
          <?php endwhile; ?>
        </ul>
      </li>
      <li><a href="<?php echo home_url(); ?>#price">新プラン</a><ul><li>新たに<span>創業者パックプラン</span>をご用意しました！</li></ul></li>
      <li><a href="<?php echo home_url(); ?>/price/">価格について</a></li>
      <li><a href="<?php echo home_url(); ?>#contact">お問い合わせ</a></li>
	</ul>
</section>