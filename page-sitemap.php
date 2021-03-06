<?php get_header(); ?>  
<?php include_once("nav.php"); ?>
<section class="m_ttlArea_1">
   <div id="breadcrumb">
    <ul>
      <li><a href="<?php echo home_url(); ?>/">TOP</a></li>
      <li>&gt;</li>
      <li>サイトマップ</li>
    </ul>
  </div>
  <h1>SITEMAP<span>サイトマップ</span></h1>
</section>
  <!-- main -->
  <main id="sitemap" class="content">
    <section class="sitemapList">
      <div class="sitemapList_inr">
        <ul>
          <li><a href="<?php echo home_url(); ?>">トップ</a>
            <ul>
              <li><a href="<?php echo home_url(); ?>#lead"><?php echo $city; ?>ホームページ制作.COMとは</a></li>
              <li><a href="<?php echo home_url(); ?>#concept">選ばれる３つの理由</a></li>
              <li><a href="<?php echo home_url(); ?>#reason">私たちの強み</a></li>
              <li><a href="<?php echo home_url(); ?>#contents">選べるコンテンツ</a></li>
              <li><a href="<?php echo home_url(); ?>#price">料金のご案内</a></li>
              <li><a href="<?php echo home_url(); ?>#flow/">公開までの流れ</a></li>
              <li><a href="<?php echo home_url(); ?>#faq">よくあるご質問</a></li>
              <li><a href="<?php echo home_url(); ?>#contact">お問い合わせ</a></li>
            </ul>
          </li>
          <li><a href="<?php echo home_url(); ?>/news/">ニュース</a>
              <ul>
                <?php
                $loop = new WP_Query (array(
                    'post_type'			=> 'news',
                    'order'				=> 'DESC',
                    'posts_per_page'	=> 16,
                ));
                while ($loop -> have_posts()) : $loop -> the_post();
                ?>
                <li <?php if( $days > $news ){ print 'class="new"'; } ?>>
                    <a href="<?php the_permalink(); ?>">
                        <h4><?php the_title(); ?></h4>
                    </a>
                </li>
                <?php endwhile; ?>
              </ul>
            </li>
          <li><a href="<?php echo home_url(); ?>/home/">全国対応可能ホームページ制作.com</a>  
            <ul>
              <li><a href="<?php echo home_url(); ?>/home/toyama/">富山ホームページ制作.com</a></li>
              <li><a href="<?php echo home_url(); ?>/home/fukui/">福井ホームページ制作.com</a></li>
            </ul>
          </li>
          <li><a href="<?php echo home_url(); ?>/price/">プラン</a></li>
          <li><a href="<?php echo home_url(); ?>/company/">会社概要</a></li>
          <li><a href="<?php echo home_url(); ?>/privacy/">プライバシーポリシー</a></li>
          <li><a href="<?php echo home_url(); ?>/sitemap/">サイトマップ</a></li>
        </ul>
        <ul>
          <h4>関連リンク</h4>
          <li><a href="http://toyama-venture.com/" target="_parent">北陸ベンチャーハック</a></li>
          <li><a href="http://is-consulting.jp/" target="_parent">I’s Consulting,Inc</a></li>
        </ul>
      </div>
    </section>
  </main>
<!-- /main -->
<?php get_footer(); ?>