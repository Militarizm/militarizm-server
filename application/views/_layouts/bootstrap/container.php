<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?=$title?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="title" content="<?=$title?>" />
	<meta name="keywords" content="<?=$meta_keywords?>" />
	<meta name="description" content="<?=$meta_description?>" />

    <!-- LESS -->
<!--    <link href="assets/bootstrap/less/bootstrap/bootstrap.less" rel="stylesheet/less">-->
<!--    <link href="assets/bootstrap/less/site.less" rel="stylesheet/less">-->
<!--    <script src="assets/bootstrap/js/less.js"></script>-->

	<!-- CSS -->
	<link href="<?=URL::base()?>assets/bootstrap/css/bootstrap/bootstrap.min.css" rel="stylesheet">
<!--	<link href="assets/bootstrap/css/bootstrap/bootstrap-responsive.css" rel="stylesheet">-->
	<link href="<?=URL::base()?>assets/bootstrap/css/site.css" rel="stylesheet">

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="<?=URL::base()?>assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
<div class="container">

	<div class="row">
	<div class="span12">
		<?=$header_content?>
	</div>
	</div><!-- header-->

	<div class="row">
	<div class="span3">
		<?=$sidebar_content?>
	</div> <!-- sidebar-->
	<div class="span9">
		<?=$main_content?>
	</div>
	</div> <!-- content-->

	<div class="span12">
		<?=$footer_content?>
	</div>

</div>
<?php ProfilerToolbar::render(true); ?>

<!-- Yandex.Metrika counter -->
<div style="display:none;"><script type="text/javascript">
(function(w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter13104421 = new Ya.Metrika({id:13104421, enableAll: true, ut:"noindex", webvisor:true});
        }
        catch(e) { }
    });
})(window, "yandex_metrika_callbacks");
</script></div>
<script src="//mc.yandex.ru/metrika/watch.js" type="text/javascript" defer="defer"></script>
<noscript><div><img src="//mc.yandex.ru/watch/13104421?ut=noindex" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

</body>
</html>