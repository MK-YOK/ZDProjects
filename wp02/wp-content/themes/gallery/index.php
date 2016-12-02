<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>Strolling Around | blog</title>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
<script src="js/jquery-2.1.4.min.js"></script>
<link rel="stylesheet" href="js/colorbox/colorbox.css">
<script src="js/colorbox/jquery.colorbox-min.js"></script>
<script src="js/blog.js"></script>
<?php wp_head(); ?>
</head>
<body>
<div id="container">
  <header>
    <div id="logo">
      <p><?php bloginfo('description')?></p>
      <h1><a href="index.html">Strolling Around</a></h1>
    </div>
    <nav>
      <ul>
        <li class="menu-item"><a href="index.html">top</a></li>
        <li class="menu-item current-menu-item current_page_item"><a href="blog.html">blog</a></li>
        <li class="menu-item"><a href="gallery.html">gallery</a></li>
        <li class="menu-item"><a href="profile.html">profile</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <article class="post">
      <p class="date">1/20</p>
      <h2>浅草散歩</h2>
      <div class="entry">
        <p><a href="sample/blog_asakusa.jpg"><img class="alignleft" src="sample/blog_asakusa-300x198.jpg" alt="" width="300" height="198"></a></p>
        <p>観光客と新成人で賑わう成人の日。</p>
        <p>色鮮やかな着物が浅草の風景に映える。</p>
      </div>
    </article><!-- post -->
    <article class="post">
      <p class="date">11/27</p>
      <h2>新宿散歩</h2>
      <div class="entry">
        <p><a href="sample/blog_shinjuku.jpg"><img class="alignleft" src="sample/blog_shinjuku-300x198.jpg" alt="" width="300" height="198"></a></p>
        <p>新宿御苑で紅葉を楽しむ。</p>
        <p>色鮮やかな葉も美しいが、枯れた葉っぱにも風情がある。</p>
      </div>
    </article><!-- post -->
    <article class="post">
      <p class="date">9/25</p>
      <h2>上野散歩</h2>
      <div class="entry">
        <p><a href="sample/blog_ueno.jpg"><img class="alignleft" src="sample/blog_ueno-300x198.jpg" alt="" width="300" height="198"></a></p>
        <p>上野動物園といえば、やっぱりパンダ。</p>
        <p>暑さもやわらぎ、パンダの表情もなんだか涼やか。</p>
      </div>
    </article><!-- post -->
    <div id="link">
      <a href="#" >&laquo; 前ページへ</a>
      <a href="#" >次ページへ &raquo;</a>
    </div>
  </main>
  <footer>
    <p>Copyright &copy; Taro Yamada. All rights reserved.</p>
  </footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
