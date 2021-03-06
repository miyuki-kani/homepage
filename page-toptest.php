
<?php
/*
Template Name: toptest
*/
?>
<?php get_header(); ?>
<!-- end modal-main -->
<style>
    @media screen and (max-width: 425px) {
        #top #price .price_inr {
            width: 90%; } }
    #top #price .price_inr .price_inr_table2 {
      margin: 30px auto; }
    @media screen and (max-width: 425px) {
            #top #price .price_inr .price_inr_table2 {
                width: 100%;
                overflow: scroll; } }
      #top #price .price_inr .price_inr_table2 table {
        width: 100%;
        margin: 1em auto;
        border-spacing: 0; }
      #top #price .price_inr .price_inr_table2 td {
        height: 50px;
        line-height: 1.4em;
        padding: 15px 10px;
        border-bottom: 1px solid #cdcdcd;
        border-left: 1px solid #cdcdcd;
        border-right: 1px solid #cdcdcd;
        box-shadow: 0 1px 0 white;
        -moz-box-shadow: 0 1px 0 white;
        -webkit-box-shadow: 0 1px 0 white;
        white-space: normal;
        text-align: center;
        width: 18%; }
        @media screen and (max-width: 425px) {
          #top #price .price_inr .price_inr_table2 td {
            font-size: 13px;
            padding: 12px;
            white-space: nowrap; } }
        @media screen and (min-width: 426px) and (max-width: 999px) {
          #top #price .price_inr .price_inr_table2 td {
            font-size: 14px; } }
        @media screen and (min-width: 1000px) {
          #top #price .price_inr .price_inr_table2 td {
            font-size: 14px; } }
        @media screen and (max-width: 425px) {
          #top #price .price_inr .price_inr_table2 td:nth-child(1) {
            font-size: 13px; } }
        @media screen and (min-width: 426px) and (max-width: 999px) {
          #top #price .price_inr .price_inr_table2 td:nth-child(1) {
            font-size: 12px; } }
        @media screen and (min-width: 1000px) {
          #top #price .price_inr .price_inr_table2 td:nth-child(1) {
            font-size: 12px; } }
    #top #price .price_inr .price_inr_table2 tbody tr:nth-child(1) td {
        text-align: left;
        font-size: 13px; }
     #top #price .price_inr .price_inr_table2 tbody tr:nth-child(1) td:nth-child(1) {
        text-align: center;
        font-size: 14px; }
    #top #price .price_inr .price_inr_table2 tbody tr:nth-child(8) td:nth-child(5) {
        text-align: left;
        font-size: 13px; }
    #top #price .price_inr .price_inr_table2 tbody tr:nth-child(8) td:nth-child(6) {
        text-align: left;
        font-size: 13px; }
        #top #price .price_inr .price_inr_table2 td:nth-child(1) {
          width: 5%; }
        #top #price .price_inr .price_inr_table2 td:nth-child(4) {
          color: #2994CC;
          font-weight: bold;
          border-right: 4px solid #2994CC;
          border-left: 4px solid #2994CC; }
          @media screen and (max-width: 425px) {
            #top #price .price_inr .price_inr_table2 td:nth-child(4) {
              /* font-size: 3vw; */ } }
          @media screen and (min-width: 426px) and (max-width: 999px) {
            #top #price .price_inr .price_inr_table2 td:nth-child(4) {
              /* font-size: 15px; */ } }
          @media screen and (min-width: 1000px) {
            #top #price .price_inr .price_inr_table2 td:nth-child(4) {
              /* font-size: 15px; */ } }
      #top #price .price_inr .price_inr_table2 tr:nth-child(even) {
        background: #f1f1f1; }
      #top #price .price_inr .price_inr_table2 tr:last-child td:nth-child(4) {
        border-bottom: 4px solid #2994CC; }
      #top #price .price_inr .price_inr_table2 thead td {
        background: #2e3b4e;
        color: #fff;
        font-weight: bold; }
        @media screen and (max-width: 425px) {
          #top #price .price_inr .price_inr_table2 thead td {
            font-size: 2.8vw; } }
        @media screen and (min-width: 426px) and (max-width: 999px) {
          #top #price .price_inr .price_inr_table2 thead td {
            font-size: 14px; } }
        @media screen and (min-width: 1000px) {
          #top #price .price_inr .price_inr_table2 thead td {
            font-size: 14px; } }
      #top #price .price_inr .price_inr_table2 thead td:nth-child(1) {
        border-left: none;
        background-color: #fff; }
      #top #price .price_inr .price_inr_table2 thead td:nth-child(2) {
        background: #828995;
        color: #fff; }
        @media screen and (max-width: 425px) {
          #top #price .price_inr .price_inr_table2 thead td:nth-child(2) {
            font-size: 2.8vw; } }
        @media screen and (min-width: 426px) and (max-width: 999px) {
          #top #price .price_inr .price_inr_table2 thead td:nth-child(2) {
            font-size: 14px; } }
        @media screen and (min-width: 1000px) {
          #top #price .price_inr .price_inr_table2 thead td:nth-child(2) {
            font-size: 14px; } }
      #top #price .price_inr .price_inr_table2 thead td:nth-child(4) {
        border-top: 4px solid #2994CC;
        background: #2994CC;
        color: #fff; }
        @media screen and (max-width: 425px) {
          #top #price .price_inr .price_inr_table2 thead td:nth-child(4) {
            font-size: 3.6vw; } }
        @media screen and (min-width: 426px) and (max-width: 999px) {
          #top #price .price_inr .price_inr_table2 thead td:nth-child(4) {
            font-size: 18px; } }
        @media screen and (min-width: 1000px) {
          #top #price .price_inr .price_inr_table2 thead td:nth-child(4) {
            font-size: 18px; } }
</style>
<section id="nav" class="global_nav re">
  <ul>
    <li><a href="/news">最新記事</a>
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
    <li><a href="#price">新プラン</a><ul><li>新たに<span>新パックプラン</span>をご用意しました！</li></ul></li>
    <li><a href="<?php echo home_url(); ?>/price/">価格について</a></li>
    <li><a href="#faq">Q&amp;A</a><ul><li>よくある<span>ご質問</span>にお答えします。</li></ul></li>
    <li><a href="#contact">お問い合わせ</a></li>
  </ul>
</section>
<main id="top" class="content">
  <section id="menu_btn">
    <img src="<?php echo get_template_directory_uri(); ?>/images/top_menu_btn.png" class="on" alt="MENU">
    <img src="<?php echo get_template_directory_uri(); ?>/images/top_menu_btn_close.png" class="off" alt="CLOSE">
  </section>
  <!-- end SP MENU -->
  <section class="hero">
    <ul class="hero_slider">
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/kv_img_01_pc.jpg" class="imgchange" alt="北陸石川の金沢でホームページを制作を依頼するなら"></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/kv_img_02_pc.jpg" class="imgchange" alt="創業者に嬉しい格安ホームページ制作会社"></li>
    </ul>
    <div class="hero_banner">
      <h3>ホームページ制作に<br class="sp">新しいフツーを。</h3>
      <ul>
        <li><a href="#price">驚きの新プランを見る</a></li>
        <li><a href="#contact">相談してみる</a></li>
      </ul>
    </div>
  </section>
  <!-- end hero -->
  <section id="lead">
    <div class="lead_inr">
      <h2>私たちが提案する<br class="sp">新しいフツーの制作プラン<br>創業プラン49,800円からホームページを制作いたします。</h2>
      <p>弊社は⾦沢で2015年に創業したばかりのまだ新しいベンチャー企業です。コンサルティングを得意とするWEBアナリストの代表と、<br>ホームページ制作・デザイン・動画制作といったクリエイティブフィールドの第⼀線で活躍してきたWEBクリエイターの３⼈で活動をしております。<br>クリエイティブによる経営改善を第一に考えるホームページ制作会社です。<br></p>
      <p>制作プランの中でも、創業プランは企画・制作段階での徹底的な効率化によって、石川・金沢トップクラスのクオリティを保ちながら、<span>49,800円</span>という<br>金沢のホームページ制作会社の中では圧倒的低価格でホームページを制作することが可能になりました。<br>また本気でWEBからの集客を考えられているお客様からは、しっかりとしたSEO対策が可能なゴールドプラン以上も大変好評です。</p>
          <p>弊社は創業パックや、すぐにWEB集客のできるホームページによって北陸をHOTにするベンチャー企業を応援します！</p>
    </div>
  </section>
  <!-- end lead -->
  <section id="price">
    <div class="price_inr">
      <h2>どんなご相談も承ります！<span>あくまで一例です。<br class="sp">御社に沿ったプランをご提案させていただきます。</span></h2>
      <div class="price_inr_table2">
        <table>
          <thead>
            <tr>
              <td></td>
              <td>創業プラン</td>
              <td>LPプラン</td>
              <td>ゴールドプラン</td>
              <td>プラチナプラン</td>
              <td>ブラックプラン</td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>概要</td>
              <td>基本的に1Pの簡易HPですが、<br class="sp">12個のメニューのうち<br class="sp">6個を自由に組み合わせ、<br class="sp">オリジナルのデザインで<br class="sp">制作します。</td>
              <td>完全オリジナルデザインで、<br class="sp">商品・サービスの販売に特化した<br class="sp">ページを制作いたします。<br class="sp">リスティング広告の有資格者が<br class="sp">広告ランク・品質スコア・広告関連性など<br class="sp">を意識した制作をご提案を致します。</td>
              <td>会社としてしっかりとした<br class="sp">ホームページを作りたい！<br class="sp">競合他社より上位表示したい！<br class="sp">といった方におすすめの<br class="sp">コスパの良いゴールドプラン。<br class="sp">スマートフォン対応から<br class="sp">アクセス解析ツール設置といった<br class="sp">要点をしっかり抑えた<br class="sp">ホームページ制作プランです。</td>
              <td>会社の看板として<br class="sp">ビジネスゴールを製作段階に設計、<br class="sp">しっかりと機能するホームページを<br class="sp">制作致します。<br class="sp">お客様に書いていただいた原稿を<br class="sp">SEOに合わせて修正を行うことで<br class="sp">Web集客を行うことができる<br class="sp">ホームページ制作プランです。</td>
              <td>専属のWebマーケティング担当者が<br class="sp">ホームページ制作から、<br class="sp">リリース後３ヶ月間<br class="sp">Web集客ができるようになるまで<br class="sp">立ち上がりの運用をサポートし、<br class="sp">SEOに強いコンテンツSEO記事も<br class="sp">制作するビジネスコミット型の<br class="sp">ホームページ制作プランです。</td>                
            </tr>
            <tr>
              <td>制作費用</td>
              <td>49,800円</td>
              <td>180,000円</td>
              <td>388,000円</td>
              <td>628,000円</td>
              <td>1,180,000円</td>
            </tr>
            <tr>
              <td>制作日数</td>
              <td>30日</td>
              <td>45日</td>
              <td>60日</td>
              <td>90日</td>
              <td>105日</td>
            </tr>
            <tr>
              <td>ページ数</td>
              <td>１P+α</td>
              <td>1P</td>
              <td>5P</td>
              <td>8P</td>
              <td>10P</td>
            </tr>
            <tr>
              <td>デザイン</td>
              <td>1案</td>
              <td>1案</td>
              <td>1案</td>
              <td>TOPのみ2案</td>
              <td>TOPのみ2案、スマホTOP1案</td>
            </tr>
            <tr>
              <td>スマホ対応</td>
              <td>自動対応</td>
              <td>自動対応</td>
              <td>自動対応</td>
              <td>自動対応</td>
              <td>TOPのデザインにあわせ対応</td>
            </tr>
            <tr>
              <td>写真素材</td>
              <td>お客様支給または<br>数百点の素材からご用意</td>
              <td>お客様支給または<br>数百点の素材からご用意</td>
              <td>お客様支給または<br>数百点の素材からご用意</td>
              <td>お客様支給または<br>数百点の素材からご用意</td>
              <td>お客様支給または<br>数百点の素材からご用意</td>
            </tr>
            <tr>
              <td>原稿</td>
              <td>弊社フォーマットに<br>記入するだけ</td>
              <td>弊社フォーマットに<br>記入するだけ</td>
              <td>弊社フォーマットに<br>記入するだけ</td>
              <td>ご用途をヒアリングし、<br class="sp">SEOに沿った原稿キーワードを提示。<br>
                  最適化したファーマットを<br class="sp">ご用意しますので、<br class="sp">その形式にしたがって<br class="sp">ご記入ください。</td>
              <td>いただいた原稿内容を<br class="sp">コンテンツSEOに沿って構築、<br class="sp">最適化したものを<br class="sp">提案いたします。</td>
            </tr>
            <tr>
              <td>SEO対策</td>
              <td>◯</td>
              <td>◯</td>
              <td>◯</td>
              <td>◎</td>
              <td>◎</td>
            </tr>
            <tr>
              <td>コンテンツ<br>SEO</td>
              <td>-</td>
              <td>-</td>
              <td>-</td>
              <td>1記事サービス</td>
              <td>3記事サービス</td>
            </tr>
            <tr>
              <td>WordPress</td>
              <td>◯</td>
              <td>-</td>
              <td>◯</td>
              <td>カスタム可能</td>
              <td>カスタム可能</td>
            </tr>
            <tr>
              <td>アクセス<br>解析</td>
              <td>◎</td>
              <td>◎</td>
              <td>◎</td>
              <td>◎</td>
              <td>◎</td>
            </tr>
            <tr>
              <td>Search Console</td>
              <td>◎</td>
              <td>◎</td>
              <td>◎</td>
              <td>◎</td>
              <td>◎</td>
            </tr>
            <tr>
              <td>ドメイン</td>
              <td>初期費用に含む</td>
              <td>初期費用に含む</td>
              <td>初期費用に含む</td>
              <td>初期費用に含む</td>
              <td>初期費用に含む</td>
            </tr>
            <tr>
              <td>サーバー</td>
              <td>◯</td>
              <td>◯</td>
              <td>◯</td>
              <td>◯</td>
              <td>◯</td>
            </tr>
            <tr>
              <td>メール<br>アドレス</td>
              <td>10個まで</td>
              <td>10個まで</td>
              <td>10個まで</td>
              <td>無制限</td>
              <td>無制限</td>
            </tr>
          </tbody>
        </table>
      </div>
          <p>※別途ご予算にて、写真素材を撮影から承ることも可能です。<br class="sp">商品や社屋、人物などを撮影いたします。お気軽にご相談ください。</p>
          <p>※メールアドレスの設定は初期設定のみとなります。<br class="sp">追加についてはご相談ください。</p>
          <p>※サーバー・ドメイン・メールアドレスの管理費は<br class="sp">月々9,000円（＋税）となります。</p>
        <div class="view_btn"><a href="<?php echo home_url(); ?>/price/" class="arrow">料金プランの詳細はこちら</a></div>
    </div>
  </section>
  <!-- end price -->
  <section id="concept">
    <div class="concept_inr">
      <h2>新規ホームページサイト制作、<br class="sp">サイトリニューアルも。</h2>
      <ul class="col3">
        <li><figure><img src="<?php echo get_template_directory_uri(); ?>/images/concept_li_img1.png"></figure><p>WordPressによる<br>トップクラスの<span>SEO対策</span></p></li>
        <li><figure><img src="<?php echo get_template_directory_uri(); ?>/images/concept_li_img2.png"></figure><p><span>レスポンシブ</span><br>WEBデザイン(スマホ対応)</p></li>
        <li><figure><img src="<?php echo get_template_directory_uri(); ?>/images/concept_li_img3.png"></figure><p>高いクオリティ＆<br>依頼しやすい<span>低価格</span></p></li>
      </ul>
      <div class="view_btn"><a class="arrow" href="#contact">相談してみる</a></div>
    </div>
  </section>
  <!-- end reason -->
  <section id="contents">
    <div class="contents_inr">
      <h2>WEBの困ったをご相談ください。<br class="sp"><span>創業パックプランであれば<em>最⼤６つ</em>お選びいただくことが可能です。</span></h2>
      <ul class="col2">
        <li>
          <figure><img src="<?php echo get_template_directory_uri(); ?>/images/01.png" alt="01"></figure>
          <div><h4>メインビジュアル</h4><p>インパクトを与えてエンドユーザーの直帰率を下げるメインビジュアル。</p></div>
        </li>
        <li>
          <figure><img src="<?php echo get_template_directory_uri(); ?>/images/02.png" alt="02"></figure>
          <div><h4>コンセプト</h4><p>商品（サービス）の持つ特⻑やブランドストーリーを端的に伝えるコンセプト。</p></div>
        </li>
        <li>
          <figure><img src="<?php echo get_template_directory_uri(); ?>/images/03.png" alt="03"></figure>
          <div><h4>こんなお悩みありませんか？</h4><p>エンドユーザーの興味や希望、願望といった意識を刺激するための問題提起。</p></div>
        </li>
        <li>
          <figure><img src="<?php echo get_template_directory_uri(); ?>/images/04.png" alt="04"></figure>
          <div><h4>商品（サービス）の強み</h4><p>商品やサービスのメリット・ベネフィットといった打ち出したい強みをPRします。</p></div>
        </li>
        <li>
          <figure><img src="<?php echo get_template_directory_uri(); ?>/images/05.png" alt="05"></figure>
          <div><h4>制作事例</h4><p>エンドユーザーに安⼼感を与えられ、ホームページの信頼性にも直結する過去実績。</p></div>
        </li>
        <li>
          <figure><img src="<?php echo get_template_directory_uri(); ?>/images/06.png" alt="06"></figure>
          <div><h4>お客様の声</h4><p>信頼感と⼈気感の裏付けとなる、実際に商品が購⼊されて評価を得ているという客観的事実。</p></div>
        </li>
        <li>
          <figure><img src="<?php echo get_template_directory_uri(); ?>/images/07.png" alt="07"></figure>
          <div><h4>他者との比較スペック</h4><p>数字として⽬に⾒える価格やスペック内容を他社と⽐較して御社の強みを打ち出します。</p></div>
        </li>
        <li>
          <figure><img src="<?php echo get_template_directory_uri(); ?>/images/08.png" alt="08"></figure>
          <div><h4>スタッフ紹介</h4><p>御社の雰囲気やイメージを、スタッフ紹介を通すことでより具体的･多⾯的に伝えます。</p></div>
        </li>
        <li>
          <figure><img src="<?php echo get_template_directory_uri(); ?>/images/09.png" alt="09"></figure>
          <div><h4>サービスの流れ</h4><p>商品やサービス導⼊に関する⼼配や不安を払拭するためのフローをピックアップ。</p></div>
        </li>
        <li>
          <figure><img src="<?php echo get_template_directory_uri(); ?>/images/10.png" alt="10"></figure>
          <div><h4>お問い合わせフォーム</h4><p>ホームページ上でのエンドユーザーとの窓⼝となり、御社事業の効率化にも役⽴つコンタクトフォーム。</p></div>
        </li>
        <li>
          <figure><img src="<?php echo get_template_directory_uri(); ?>/images/11.png" alt="11"></figure>
          <div><h4>よくある質問</h4><p>エンドユーザーの疑問を解決して離脱を防ぎ、また商品やサービスに専⾨性を加えます。</p></div>
        </li>
        <li>
          <figure><img src="<?php echo get_template_directory_uri(); ?>/images/12.png" alt="12"></figure>
          <div><h4>ブログ</h4><p>エンドユーザーに有益な情報（コンテンツ）を発信し続けることはSEO的にも重要です。</p></div>
        </li>
      </ul>
    </div>
  </section>
  <!-- end concept -->
  <section id="seo">
    <div class="seo_inr">
      <h2>どこよりも徹底的に。<br>あなたのホームページをサポートします。</h2>
      <div class="lead">
        <i>
          <svg version="1.1" id="analytics" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
               viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve">
            <path d="M62.9,93.3c-1.7-1.3-1.9-3.2-1.9-3.2L60.4,86H39.6L39,90.2c0,0-0.2,1.9-1.9,3.2c-1.7,1.3-3.1,2.4-1.7,2.6
                     c1.3,0.2,13.7,0,14.7,0c0.9,0,13.3,0.2,14.7,0C66,95.7,64.7,94.6,62.9,93.3z"/>
            <g>
              <rect x="22.8" y="49.5" width="8" height="15"/>
              <rect x="39.8" y="42.5" width="8" height="22"/>
              <rect x="55.8" y="49.5" width="8" height="15"/>
              <rect x="70.8" y="42.5" width="8" height="22"/>
              <polygon points="44.6,34.1 60.8,44.4 83.2,28.2 80.8,25 60.7,39.6 44.9,29.4 16.8,43.8 18.7,47.4 	"/>
            </g>
            <path d="M96,16H4c-2.2,0-4,1.8-4,4v58c0,2.2,1.8,4,4,4h92c2.2,0,4-1.8,4-4V20C100,17.8,98.2,16,96,16z M94,70H6V22h88V70z"/>
          </svg>
          </i>
          <div><h3>金沢ホームページ制作.COMのSEO対策サービスは内部対策中心で、他者の外部リンクに頼ったSEO対策は行いません。</h3>
          <p>Googleの検索アルゴリズムの変動にもアンテナを張り巡らせ細かな変化にも対応し、順位変動をコントロールいたします。<br>
          費用はかけられないお客様にもご利用いただくためにSEO対策に対するディレクションのみでのお仕事や、SEOコンテンツの修正を丸投げといった<br>
          ご要望に柔軟なサービスをご提供しております。<br>
          <span>※ また検索結果が上位に表示されなければ、費用は一切いただきませんのでご安心ください。</span></p>
      </div>
    </div>
    
    <div class="lead">
      <i><svg version="1.1" id="seotag" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve"><g>
             <path d="M71.8,28.2c0.8,0.8,2,0.8,2.8,0l14.9-14.9c0.8-0.8,0.8-2,0-2.8c-0.8-0.8-2-0.8-2.8,0L71.8,25.4C71,26.2,71,27.4,71.8,28.2z"/>
             <g><path d="M60.8,37.7c-0.9-0.9-1.8-1.5-2.7-1.9c-0.9-0.4-1.8-0.4-2.7-0.2s-1.6,0.6-2.3,1.3c-0.5,0.5-0.9,1-1.1,1.6c-0.2,0.6-0.3,1.2-0.3,1.9s0.3,1.3,0.6,2.1c0.4,0.7,0.9,1.4,1.6,2.1c0.7,0.7,1.4,1.2,2.1,1.6c0.7,0.4,1.4,0.6,2.1,0.7
                       c0.7,0,1.3,0,1.9-0.3c0.6-0.2,1.1-0.6,1.6-1.1c0.6-0.6,1.1-1.4,1.3-2.2c0.2-0.8,0.1-1.7-0.2-2.7C62.5,39.6,61.8,38.6,60.8,37.7z"
                    />
              <path d="M85.8,25.3L83,22.5L79.5,26c0.5,2.3-0.2,4.8-2,6.6c-2.8,2.8-7.4,2.8-10.2,0c-2.8-2.8-2.8-7.4,0-10.2
                       c1.8-1.8,4.3-2.4,6.6-2l3.5-3.5l-2.8-2.8c-1.9-1.9-21.8-1.9-23.7,0L11.4,53.7c-1.9,1.9-1.9,5,0,7l27.9,27.9c1.9,1.9,5,1.9,7,0
                       L85.8,49C87.7,47.1,87.7,27.2,85.8,25.3z M42.2,67.9C41.8,69,41.1,70,40.1,71c-1.2,1.2-2.4,2-3.6,2.3c-0.9,0.2-1.8,0.2-2.7,0
                       c-0.9-0.2-1.6-0.6-2.1-1.1c-0.3-0.3-0.5-0.7-0.5-1.1c0-0.4,0.2-0.8,0.5-1.1c0.3-0.3,0.6-0.4,0.9-0.4c0.3,0,0.7,0.1,1.2,0.3
                       c0.5,0.2,1,0.4,1.5,0.5c0.4,0.1,0.9,0,1.4-0.1c0.5-0.2,1-0.5,1.5-1c0.7-0.7,1.2-1.5,1.3-2.3c0.1-0.8-0.1-1.4-0.6-2
                       c-0.4-0.4-0.9-0.6-1.4-0.6c-0.5,0-1,0.1-1.5,0.4c-0.5,0.3-1.2,0.6-2,1.1c-1.1,0.7-2,1.2-2.9,1.5c-0.9,0.3-1.7,0.4-2.5,0.3
                       c-0.8-0.1-1.6-0.5-2.3-1.2c-0.7-0.7-1.1-1.4-1.2-2.3c-0.2-0.9,0-1.8,0.4-2.8c0.4-1,1.1-1.9,2-2.9c0.7-0.7,1.5-1.3,2.2-1.7
                       c0.7-0.4,1.4-0.6,2.1-0.6c0.7-0.1,1.2,0,1.8,0.2c0.5,0.2,0.9,0.4,1.2,0.7c0.3,0.3,0.5,0.7,0.5,1.1c0,0.4-0.1,0.8-0.4,1.1
                       c-0.3,0.3-0.6,0.4-0.9,0.4s-0.7-0.1-1.2-0.2c-0.7-0.2-1.3-0.3-1.9-0.3c-0.6,0.1-1.2,0.4-1.9,1.1c-0.6,0.6-1,1.3-1.1,2
                       c-0.1,0.7,0,1.2,0.4,1.6c0.2,0.2,0.5,0.4,0.8,0.4c0.3,0,0.6,0,1-0.1c0.4-0.1,0.7-0.2,1-0.4c0.3-0.2,0.8-0.5,1.5-0.9
                       c0.8-0.5,1.6-1,2.4-1.3c0.8-0.4,1.5-0.6,2.1-0.7c0.7-0.1,1.3-0.1,2,0.1c0.6,0.2,1.3,0.6,1.9,1.2c0.7,0.7,1.2,1.6,1.4,2.5
                       C42.7,65.9,42.6,66.9,42.2,67.9z M55,55.7l-6.7,6.7c-0.5,0.5-1,0.8-1.5,0.8c-0.5,0-1-0.3-1.5-0.8l-9.1-9.1c-0.4-0.4-0.6-0.7-0.7-1
                       c-0.1-0.3-0.1-0.7,0-1s0.4-0.7,0.7-1l6.5-6.5c0.4-0.4,0.8-0.6,1.1-0.6s0.7,0.1,1,0.4c0.3,0.3,0.4,0.6,0.4,1c0,0.4-0.2,0.7-0.6,1.1
                       L39,51.2l3,3l5.1-5.1c0.4-0.4,0.7-0.6,1.1-0.6c0.4,0,0.7,0.1,0.9,0.4s0.4,0.6,0.4,0.9c0,0.4-0.2,0.7-0.6,1.1L43.8,56l3.5,3.5
                       l5.7-5.7c0.4-0.4,0.8-0.6,1.1-0.6c0.4,0,0.7,0.1,1,0.4c0.3,0.3,0.4,0.6,0.4,1C55.6,55,55.4,55.3,55,55.7z M65.8,44.4
                       c-0.4,1-1.1,2-2.1,3c-1,1-2,1.6-3,2.1c-1.1,0.4-2.1,0.6-3.2,0.6c-1.1-0.1-2.1-0.3-3.2-0.9c-1-0.5-2-1.2-2.9-2.2
                       c-0.9-0.9-1.7-1.9-2.2-3c-0.5-1-0.8-2.1-0.8-3.2s0.2-2.1,0.6-3.1c0.4-1,1.1-2,2-2.9c1.3-1.3,2.6-2.1,4-2.5s2.8-0.3,4.2,0.1
                       c1.4,0.5,2.7,1.4,4,2.6c0.9,0.9,1.7,1.9,2.2,2.9c0.5,1,0.8,2.1,0.9,3.1C66.4,42.3,66.2,43.4,65.8,44.4z"/></g>
          </g></svg></i>
      <div>
        <h3>ホームページ集客におけるSEO対策とは？</h3>
        <p>SEO対策とは「Search Engine Optimization」の略で「検索エンジン最適化」といったホームページ集客におけるマーケティング手法のことです。<br> 一般的にはGoogleやYahoo!等で検索するユーザーをターゲットとして、ホームページを検索結果で多く露出させホームページへのアクセスを増やすマーケティング手法を意味します。<br>当社のSEO対策は検索結果の上位表示のみといった部分的な支援にとどまらず、ホームページからの成果を最大化させ達成することを目的としております。</p>
      </div>
    </div>
    <div class="lead">
      <i><svg version="1.1" id="ishikawa" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
             y="0px" viewBox="0 0 125 204" style="enable-background:new 0 0 125 204;" xml:space="preserve"><g><path class="st0" d="M86,53.1c0.5-0.9,1.5-2.3,2.1-1.8s0.9,2,0.5,3.2c-0.5,1.2,1.1,2,0.5,2.9s-2.3,1.4-3.3,1.8
                                 c-1.1,0.5-1.2-1.7-2.3-1.4c-1.1,0.3-2.3,1.5-2.6,2.7c-0.3,1.2-0.8-0.6-1.5,0c-0.8,0.6-1.5,2.4-1.7,2c-0.1-0.5-1.2-4.7-1.8-5
                                 c-0.6-0.3-1.7-0.1-1.7-0.6s-0.9-0.6-1.1-1.1c-0.1-0.5-0.5-1.2,0.3-2s1.5-0.6,1.5,0.5s0.6,2.7,1.4,2c0.8-0.8,0.6-1.7,1.4-1.5
                                 s2,0,2.9-0.8s2.1-0.9,2.4-0.2c0.3,0.8,0.2,1.8,1.4,1.7C85.6,55.3,86,53.1,86,53.1z"/><path class="st0" d="M3,176.3c0.7,0.5,2-0.2,3.2,0.5s2.2,3.4,2.2,4.7c0,1.2,1.7,5.1,2.4,7.1s4.6,1,5.6,0.5s2,0.2,2.2,1.7
                                 s2.9,2.7,3.9,2.9s2.2-0.7,2.2-0.7s4.6-0.7,5.6-0.5s2.9-1.2,4.2-1.2c1.2,0,2.2,1.7,3.7,2.9c0,0,1.5,0.7,2,2.2s2.9,2.7,3.7,2.7
                                 c0.7,0,1.5,0.7,1.7,1.5c0.2,0.7,0.2,2.4,1.5,2.4c1.2,0,4.2-1.2,4.2-1.2l3.4-0.5l2.2-0.1c-0.2-0.4-0.2-0.9-0.1-1.8
                                 c0.1-1,2-3.7,2.3-4.6c0.4-1-0.2-3.5,0-4.4s1.2-0.6,1.7-1.2s2.4-3.3,2.9-3.9c0.5-0.6,0.5-2,1.1-2.7s2.2-3.9,2.2-3.9
                                 s-0.9-1.6-1.1-2.1s-1.1-0.2-2.4-0.6c-1.3-0.4-1.2-2-1.7-3.1c-0.1-0.3-0.3-0.8-0.5-1.3c-0.8,0.4-1.6,0.7-1.9,0.9
                                 c0.3-0.2,1.1-0.6,1.9-0.9c-0.5-1.2-1-2.9-1-4.1c0-1.7-0.1-2.1,1.6-3.7c1.7-1.6,0-1.3-0.1-2.2s-0.6-1.5-0.6-3.2s-2.1-2.8-2.6-3.1
                                 c-0.5-0.2-0.4-2,0-2s2-1.3,2.7-2.6c0.7-1.2-0.4-2.9,0.1-3.6c0.5-0.6,0.2-1.8-0.1-2.2c-0.4-0.4-0.1-1.7,0-2.6c0.1-0.9,0.2-1.5,0.7-2
                                 s1.3-3.1,1.3-3.9s-1.3-2-2.2-2.1s-0.4-1.8-0.4-2.8s-0.7-3.7-0.6-4.7c0.1-1,0.9-1.2,1.3-1.7c0.5-0.5,0.1-1.6,0.1-1.6
                                 s0.7-0.4,0.9-1.1c0.1-0.7,1.2-1.3,1.3-1.7s0.1-2-0.2-2.2c-0.4-0.2-0.7-0.2-0.6-1.3c0.1-1.1,0.1-0.5-1.6-2.4c-1.7-2,0.4-2.4,1-2.3
                                 s1.5-0.6,1.6-1.1s1.3-1.5,1.8-1.6s1.7-2.6,1.3-3.2c-0.4-0.6-1-1.3-0.4-1.7c0.6-0.4,0.7-1.6,0.6-2.3c-0.1-0.7-0.1-2.1,0.4-2.6
                                 s1-3.7,1.1-4.2s-0.4-1.7,0.5-2.3c0.9-0.6,1.5-2.9,1.2-3.9c-0.2-1-0.1-2.2,0.9-3.7s1.8-1.2,2.7-1.8c0.9-0.6,1.7-2.8,3.4-3.2
                                 c1.7-0.4,1.5,0.6,2.7,1.1s1.5-1,1.7-1.7s1.5-0.7,2.4-0.5c1,0.2,3.9-0.5,3.9-0.5l1.1,0.9c0.5-1,0.1-3,0.1-6.6
                                 c0-4.5,0.1-8.3,0.3-10.1c0.2-1.8-0.8-2-0.4-2.6c0.3-0.6,0.9-1.8-0.3-1.4c-1.2,0.5-3.5,1.5-4.1,3.2s0.3,2-0.5,3
                                 C83.5,66.8,84,66,83.1,66s-0.6,0.3-1.2,0.6c-0.6,0.3-2,1.4-2.6,0.5s0.5-2-0.3-2.1c-0.8-0.2-2.9,0.3-2.4-1.2
                                 c0.5-1.5,1.2-1.2-0.1-1.4c-1.4-0.1-2.3-0.9-2.9-0.5c-0.6,0.5,0.2,1.5-0.9,2.1c-1.1,0.6-2.4,0.9-3.8,0c-1.4-0.9,0-0.8,0.3-1.5
                                 c0.3-0.8-0.1-2.1-0.1-3s0.5-1.8,0.8-0.9c0.3,0.9,1.5,0.8,1.8-0.3s0.8-1.5,0.8-2.1s-0.3-1.4-0.8-1.5c-0.5-0.2-1.5,0.6-1.5,0.6
                                 s-0.5-0.8,0.1-2s2.9-3.9,3.3-5.3c0.5-1.4-0.3-0.9,0.5-1.4s2.3-0.2,2-1.4s-2-1.7-1.5-2.1c0.5-0.5,2.3,1.1,2-0.1
                                 c-0.3-1.2,0.5-0.8,1.1-0.6s2-1.4,1.5-0.5s-0.5,2.9,0.3,3.6c0.8,0.8,3.5,1.2,3.9,1.8c0.5,0.6,1.4,1.7,2.3,1.1c0.9-0.6,2.1-1.4,2-2.1
                                 c-0.1-0.8,1.2-1.1,2.4-1.2s0.6-1.5,1.4-3s2.4-2.1,2.6-3.2c0.1-1.1,0.8-3.2,2.6-4.2c1.8-1.1,4.2-1.7,4.2-2.1s1.5-0.3,2.1,0
                                 s2.9,0.5,3.6,0.2c0.8-0.3,2.4,1.1,3.3,0c0.9-1.1,0.5-1.2,1.2-1.7c0.8-0.5,1.8-2.3,2.1-3.2c0.3-0.9-1.2-0.6-0.8-1.1
                                 c0.4-0.5,1.4-2.7,0.9-2.4c-0.5,0.3-1.8,0.8-2.1-0.2c-0.3-0.9-0.9-2.6-0.9-2.6s1.4-7.2,3-8.3c1.7-1.1,3.9-0.5,5.9-0.1
                                 c2,0.3,5.3-1.2,4.4-3.3s-2.7-2.7-1.8-4.4c0.9-1.7,1.5-3,0.1-3.8s-1.7-0.8-2-1.5c-0.3-0.8-1.4-0.6-2.3-0.5s-3.2-0.5-4.2,0
                                 c-1.1,0.5-1.4,1.2-2.6,1.7s-2,0.9-3.5,1.7s-1.8,0.8-3.3,0.8s-3.3-0.5-6.2,1.5s-6.3,6-6.9,6s-2.3,0-2.9,1.1s-2.9,1.2-4.1,1.8
                                 s-3.3,2-4.4,2.3c-1.1,0.3-1.8,0.6-2.4,1.4s-3.3,1.5-3.8,0.8c-0.5-0.8,0.1-1.2-1.4-0.9c-1.5,0.3-4.2,0.1-5.4,0.6
                                 c-1.2,0.5-2.1,2-3.2,2s-1.4,1.2-1.8,1.4c-0.5,0.2-1.7,0-2.3,0.5s-0.6,0.9-1.7,0.9c-1.1,0-1.8,0.8-1.2,1.5c0.6,0.8-0.3,2-0.9,1.8
                                 c-0.6-0.2-0.9-0.8-1.4,0s0,1.2-0.9,2s-0.5,5.1,0.2,5.6c0.6,0.5-0.2,4.2-1.4,5s-2.3,1.8-2,3s0.1,1.5-0.8,2.4c-0.9,0.9-1.5,2-1.5,3.2
                                 s-0.3,1.5-0.6,3.8s-0.2,3.3,0.3,3.5s2.1,1.1,2.3,0s1.1-1.8,1.8-1.2c0.8,0.6,2.9,4.1,2,6.5s-1.2,3.5-0.9,5c0.3,1.5,1.1,2.3,1.7,3.2
                                 c0.6,0.9,1.5,1.7,0.9,3c-0.6,1.4,0.3,1.8,0.8,2.3s1.2-0.6,1.8,2.1s0,5-0.8,6.6c-0.8,1.7-1.2,2.3-0.6,3.3c0,0,1.5,3.2,0.8,6
                                 c-0.8,2.9-2.7,11.3-5.3,14.9s-8.3,16.3-9.8,17.5c-1.5,1.2-2.3,2-2.3,2.7c0,0.8,2.1,1.5,1.2,1.8c-0.9,0.3-2.4-0.8-2.4-0.8
                                 s-0.8,0.8-0.9,1.5c-0.2,0.8-9.9,13.1-11.9,15.7c-2,2.6-5.7,8.1-8.6,11s-7.2,7.2-8.9,7.4c-1.7,0.1-3,0.6-3.9,2.4
                                 c-0.9,1.8-1.8,3.3-2.9,4.4c-0.2,0.2-0.8,0.8-1.7,1.4l1,1.2C1,172.9,2.2,175.8,3,176.3z"/>
          </g></svg></i>
      <div>
        <h3>金沢だけでなく石川県全域のSEO対策を承ります。</h3>
        <p>弊社の事業拠点である金沢市はもちろん、石川県全域・富山県全域・福井県全域といった北陸におけるホームページの最適化を全力で支援いたします。これまでのデザインベースのホームページ制作だけでは結果に繋がりにくく、コンテンツSEOとデザインを両立したホームページ集客支援を弊社では心がけております。SEO対策やホームページ制作といったWEB全般のお悩みはお気軽にご相談ください！</p>
      </div>
    </div>
    <div class="method">
      <ul>
        <li><h5>戦略的SEO</h5><p>SEOはお客様のターゲットをしっかりと把握して、WEB市場の調査、キーワード調査を行いビッグキーワードをはじめとしたミドルキーワードといった成果の上がりやすいものから施策展開を行い競合他社に勝るSEO戦略を立案いたします。金沢ホームページ制作.COMでは、内部・外部SEOにおける自社チェック項目を活用しておりますので「もれなく・だぶりなく」SEO対策を行い健全なホワイトハットを心がけておりますのでご安心ください。</p></li>
        <li><h5>最適化</h5><p>SEOとはホームページをユーザーの求める優れたコンテンツに最適化することがとても重要になります。検索エンジンは昔に比べてコンテンツを重視する傾向があります。そのためこれまでのSEO業者のようなスパムのような被リンクを送るだけの手法では逆に剣先順位を下げてしまうリスクも生じてしまいます。検索エンジンの最適化・コンテンツの最適化といった両面から優秀なホームページを制作することでSEOに対するお客様の求める結果をご提供させていただいております。</p></li>
        <li><h5>臨機応変</h5><p>SEOにおいて重要な要素である検索エンジンのアルゴリズムですが、これらは日々ルールの変更を行なっております。例えば、スマートフォンが普及した昨今では、スマホ対応（モバイルフレンドリー）がされていないサイトでは、検索結果が著しく下がるといった環境にあります。このような検索エンジンのルールが日々変更されている中で、金沢ホームページ制作.COMでは検索エンジンのルールが変わるたびにホームページを適応させ検索順位の下降を防ぎます。</p></li>
        <li><h5>結果重視</h5><p>ホームページ集客のゴールは、アクセスを増やすことではなくあくまで事業の売上に貢献することです。SEOは検索順位が上位に表示され、トラフィックを増やすことが目的ではありません。本当の目的は反響や売上が増えて初めて目標の達成と言えるのではないでしょうか。金沢ホームページ制作.COMでは「結果にコミットするホームページ」の提案（新規ホームページ制作からリニューアル）まで一貫してご提案いたします。</p></li>
      </ul>
      <div class="view_btn"><a class="arrow" href="#contact">相談してみる</a></div>
    </div>
    </div>
  </section>
  <!-- end seo -->
  <section id="reason">
    <div class="reason_inr">
      <div class="reason_inr_box">
        <h2>高クオリティなホームページをつくります。</h2>
        <ul class="col2">
          <li>
           <h4>代理店に頼らない独自集客をするホームページ制作会社です</h4>
            <p>金沢にある通常のホームページ制作会社では、代理店経由で仕事を受注するため少ない⼈材とコストで業務を⾏わなければならないといったホームページ制作業界独特の風潮があります。</p>
            <p>しかし弊社では、代理店やコンペに頼らず、ホームページからの独⾃集客でお仕事を受けているためホームページ制作にコストを回すことができる仕組みを作りました。</p>
          </li>
          <li>
            <h4>WordPressに特化したホームページ制作会社です</h4>
            <p>WordPress（ワードプレス）にこだわっています。WordPressはGoogleの幹部が認めるほどSEOに強く、管理画⾯は直感的で使いやすいため、ページの追加も簡単です。WordPressの専⽤エンジニアが年間100件を越えるカスタマイズを⾏うことによって、同じWordPressでも他の業者とは違ってGoogleに評価されるホームページを制作することができるのです。</p>
          </li>
        </ul>
      </div>
      <div class="reason_inr_box">
        <h2>圧倒的なコスパを実現。</h2>
        <ul class="col2">
          <li>
           <h4>ガイドラインの徹底活用</h4>
            <p>全てのお客様に⾼品質な作品を提供できるよう、ガイドラインによる社内標準化を図っております。W3C標準に準拠したユーザビリティの⾼い、無駄のないソースコードでホームページを制作します。結果としてGoogleからの評価が⾼くなり、SEOの効果が期待できます。</p>
            <p>さらに作業⼯数の削減につながり、低価格でクオリティの⾼いホームページを制作できるようになるのです。</p>
          </li>
          <li>
            <h4>ホームページは作った後が大切</h4>
            <p>弊社では、ホームページを作った後の運⽤がとても⼤切と考えております。これまでのホームページ制作会社では、お客様の予算を全て制作に使ってしまう考えをしております。</p>
            <p>私たちは作った後の運⽤もしっかりと考えていただきたいと思っておりますので、低価格でホームページを作り、そのあともちゃんと予算をかけて運⽤していけるためにも導⼊しやすい⾦額に設定いたしました！</p>
          </li>
        </ul>
      </div>
      <div class="reason_inr_box">
        <h2>他のホームページ制作会社とは違います。</h2>
        <ul class="col2">
          <li>
            <h4>リスティング広告の有資格者がサポート</h4>
            <p>ホームページを制作した後に、多くの方々がホームページからWEBで集客をしたいと思いリスティング広告を活用されています。弊社では、リスティング広告運用有資格者とWebデザイナーが相談して、より効果的なリスティング広告運用ができるようにホームページをデザイン段階から設計いたします。</p>
          </li>
          <li>
            <h4>ヒートマップツールの無料導入</h4>
            <p>ユーザーのサイト内での行動をサーモグラフィーで見える化できるコンサルティング現場では必ず使われるヒートマップツールを無料でホームページに導入いたします。Web場でのユーザーの動きをより細かく分析することでより良いホームページ運用が可能になります。</p>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <section id="flow">
    <div class="flow_inr">
      <h2>お申し込みから制作、<br class="sp">公開までの流れ</h2>
      <ul class="col4">
        <li>
          <figure><img src="<?php echo get_template_directory_uri(); ?>/images/step1.png" alt="step1"></figure>
          <h4>お申し込み</h4>
          <p>まずは、お問合せフォームから「どんなホームページを作りたいか」をお聞かせください。</p>
        </li>
        <li>
          <figure><img src="<?php echo get_template_directory_uri(); ?>/images/step2.png" alt="step1"></figure>
          <h4>ヒアリング</h4>
          <p>実際に面談で打ち合わせなどを行い、ホームページの目的やターゲット顧客・コンテンツなどの必要な情報をお聞かせください。</p>
        </li>
        <li>
          <figure><img src="<?php echo get_template_directory_uri(); ?>/images/step3.png" alt="step1"></figure>
          <h4>ご確認</h4>
          <p>お客様の原稿をもとにホームページをクオリティの高い効果的なデザインを制作します。</p>
        </li>
        <li>
          <figure><img src="<?php echo get_template_directory_uri(); ?>/images/step4.png" alt="step1"></figure>
          <h4>納品</h4>
          <p>納品はゴールではなくスタートですので、ホームページを更新・追加して育てていきましょう。</p>
        </li>
      </ul>
      <div class="view_btn"><a class="arrow" href="#contact">相談してみる</a></div>
    </div>
  </section>
  <!-- end flow -->
  <section id="faq">
    <div class="faq_inr">
      <h2>よくあるご質問</h2>
      <ul class="col2">
        <li>
          <h4>ホームページに関する知識がないのですが。</h4>
          <p>半数以上の⽅は、ホームページ制作に詳しくありませんのでご安⼼ください。お客様にご理解いただける⾔葉で説明するよう努めておりますので、お気軽にご相談ください。</p>
        </li>
        <li>
          <h4>制作期間を教えてください。</h4>
          <p>契約の書類が全て整ってから30〜60日程度となります。お急ぎの⽅はご相談ください</p>
        </li>
        <li>
          <h4>支払いはどのようにすればいいですか。</h4>
          <p>クレジットカードまたは⼝座振込からお選びいただけます。【クレジットカードの場合】別途メールにてご連絡致しますのでそちらよりお⼿続きをお願いいたします。</p>
        </li>
        <li>
          <h4>契約期間はどのくらいですか。</h4>
          <p>基本的な契約期間は2年間です。その後は2年契約の⾃動延⻑となります。</p>
        </li>
        <li>
          <h4>月々の管理費を教えてください。</h4>
          <p>サーバー・ドメイン・メールアドレス管理費として毎月9,000円（＋税）がかかります。</p>
        </li>
        <li>
          <h4>デザインの修正はできますか。</h4>
          <p>創業プランはお客様からいただいた原稿を元に弊社がオリジナルでデザインを⾏いますが、デザインの修正は基本的にはできませんので、オプションとなります。</p>
        </li>
        <li>
          <h4>49,800円でホームページが制作<br>できるのですか。</h4>
          <p>はい、ご安⼼ください。創業プランの制作費は基本的に49,800円（＋税）以外はかかりません。オプションとしてかかるものは「撮影」「取材・原稿作成」「追加ページ」などがございますが、必要なものは別途お⾒積書を提出いたします。制作事例、お客様の声、スタッフ紹介など各カテゴリーの追加は1件につき10,000円+ 税のオプション追加費⽤がかかります。</p>
        </li>
        <li>
          <h4>ホームページの改修・リニューアルも<br class="sp">できますか？</h4>
          <p>もちろんホームページの改修・リニューアルもお受けしております。お問い合わせフォームよりご相談ください。</p>
        </li>
        <li>
          <h4>SEO対策って何をするんですか？</h4>
          <p>検索結果で狙ったキーワードを上位表示させるSEO対策ですが、検索結果で上位表示させるために内部施策をおこないます。<br>検索結果で上位表示したいキーワードを決定し、そのキーワード軸とした関連キーワードのツリーマップなども制作します。</p>
        </li>
        <li>
          <h4>コンテンツSEOってなんですか？</h4>
          <p>コンテンツSEOとは、狙ったキーワード似合わせて投稿形式でユーザーにとって有益な情報を提供することを指します。<br>コンテンツSEOを行うことでTOPページ以外のページでも集客を行うことができ、ロングテールでユーザーを獲得する施策として効果的です。</p>
        </li>
      </ul>
    </div>
  </section>
  <!-- end faq -->
  <section id="contact">
    <div class="contact_inr">
      <h3><span>CONTACT</span></h3>
      <h2>お問い合わせ</h2>
      <div id="document" class="contact_inr_input"><!--本番公開はkey19 ローカル環境は6070-->
        <?php echo do_shortcode( '[mwform_formkey key="19"]' ); ?>
      </div>
    </div>
  </section>
  <!-- end contact-->
  <section id="news">
  <div class="news_inr">
    <h2>ニュース<span>ホームページに関するあれこれを発信しております。</span></h2>
    <ul class="col2">
      <?php
      $loop = new WP_Query (array(
        'post_type'			=> 'news',
        'order'				=> 'DESC',
        'posts_per_page'	=> 2,
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
              <i><?php $terms = get_the_terms($post->ID, 'newscat'); foreach($terms as $term){ $term_name = $term->name; echo $term_name; break; }; ?></i>　|<?php endif ; ?>
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
    <ul class="col4">
      <?php
      $loop = new WP_Query (array(
          'post_type'			=> 'news',
          'order'				=> 'DESC',
          'posts_per_page'	=> 4,
          'offset' => 2
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
              <i><?php $terms = get_the_terms($post->ID, 'newscat'); foreach($terms as $term){ $term_name = $term->name; echo $term_name; break; }; ?></i>　|<?php endif ; ?>
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
    <div class="view_btn"><a class="arrow" href="/news/">もっと見る</a></div>
  </div>
  </section>
  <!-- end news -->
</main>
<!-- end main -->
<?php get_footer(); ?>