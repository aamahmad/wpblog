<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootswatch: Yeti</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/custom.min.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../bower_components/html5shiv/dist/html5shiv.js"></script>
      <script src="../bower_components/respond/dest/respond.min.js"></script>
    <![endif]-->
	<?php wp_head();?>
  </head>
  <body>
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
		  <a href="<?php bloginfo('wpurl');?>" class="navbar-brand"><?php echo get_bloginfo('name'); ?></a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav">
            <li><a href="<?php bloginfo('wpurl');?>">Home</a></li>
			<?php wp_list_pages('&title_li='); ?>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="http://builtwithbootstrap.com/" target="_blank">fb</a></li>
            <li><a href="https://wrapbootstrap.com/?ref=bsw" target="_blank">twiter</a></li>
          </ul>

        </div>
      </div>
    </div>


    <div class="container">

      <div class="page-header" id="banner">
        
		<div class="row">
          <div class="col-lg-8 col-md-7 col-sm-6">
            <p class="lead"><?php echo get_bloginfo('description'); ?></p>
          </div>
        </div>