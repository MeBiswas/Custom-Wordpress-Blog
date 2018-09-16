<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<header class="header-sec">
    <nav class="navbar m-b-0">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button aria-expanded="false" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a href="http://18.188.229.2/oolaga" class="navbar-brand">
                    <img class="img-respnosive" src="<?php bloginfo('template_url'); ?>/img/oolaga-logo.png" alt="logo">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right cus-nvbar">
                    <?php 
                        $categories = get_categories();
                        $x = $categories[0]; //echo "<pre>"; print_r($x); die;
                        foreach($categories as $category) {
                           echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
                        }
                    ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
</header>