<?php if (!defined('HTMLY')) die('HTMLy'); ?>
<!DOCTYPE html>
<html lang="<?php echo str_replace('_', '-', config('language'));?>">
  <head>
	<?php echo head_contents();?>
    <title><?php echo $title;?></title>
	<meta name="description" content="<?php echo $description; ?>"/>
	<meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <link rel="canonical" href="<?php echo $canonical; ?>" />
    <link href='https://fonts.googleapis.com/css?family=Chivo:900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php echo site_url();?>themes/ben/css/stylesheet.css" media="screen">
	<style>
	nav ul {
  list-style: none;
  margin: 0 auto;
  padding: 0;
  width: 100%;
  overflow: hidden;
 
}
nav ul li {
  display: inline-block;
  margin: 0;
  padding: 0 .5em;
 
  text-transform: uppercase;
}
nav ul li a {
  display: block;
  padding: .5em 0;
}
nav.menu {
 
}
nav.menu li {
  margin: 0 .5em;
  padding: 0;
}
</style>
    
    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>

    <![endif]-->
  </head>

  <body>
	<?php if (facebook()) { echo facebook(); } ?>
	<?php if (login()) { toolbar(); } ?>
    <div id="container">
      <div class="inner">

        <header>
		  <?php if(is_index()) {?>
			<h1><a href="<?php echo site_url();?>"><?php echo blog_title();?></a></h1>
		<?php } else { ?>
			<h1><a href="<?php echo site_url();?>"><?php echo blog_title();?></a></h1>
		<?php } ?>
        </header>

        <nav>		
          <!-- a href="<?php echo site_url();?>" id="download-zip" class="button"><span>Home</span></a -->
		  <?php echo menu(); ?>		
        <nav>
		<br>
		<hr></hr>

        <section id="main_content">
		<?php echo content();?>
        </section>

        <footer>
          <?php echo blog_description();?>
          <br>
          <?php echo copyright();?>
        </footer>
		<?php if (analytics()): ?><?php echo analytics() ?><?php endif; ?>
        
      </div>
    </div>
  </body>
</html>
