<!DOCTYPE html>
<html lang="ja">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-SS6FNDT1SF"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'G-SS6FNDT1SF');
	</script>
	<meta charset="utf-8">
	<meta name="robots" content="noindex">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="Keywords" content="野球,野球リーグ,NOL">
	<meta name="Description" content="NOL公式サイト">
	<meta name="author" content="NOL 公式サイト">
	<meta name="format-detection" content="telephone=no">
	<meta property="og:site_name" content="NOL 公式サイト">
	<meta property="og:title" content="NOL 公式サイト">
	<meta property="og:type" content="website">
	<meta property="og:url" content="">
	<meta property="og:description" content="NOL 公式サイト">
	<meta property="og:image" content="img/ogimage.jpg">
	<link rel="icon" href="img/favicon.ico">
	<link rel="apple-touch-icon" href="img/apple-touch-icon.jpg" sizes="180x180">
	<title>NOL 公式サイト</title>
	<!-- SLICK -->
	<link href="https://cdn.jsdelivr.net/jquery.slick/1.5.9/slick-theme.css" rel="stylesheet" />
	<link href="https://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css" rel="stylesheet" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" type="text/css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery-yycountdown.css" type="text/css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/demo1.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/commons/commons.css" type="text/css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/front/front.css" type="text/css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/front/topics.css" type="text/css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/front/news.css" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js"></script>


	<script>
		(function(d) {
			var config = {
					kitId: 'utn7uue',
					scriptTimeout: 3000,
					async: true
				},
				h = d.documentElement,
				t = setTimeout(function() {
					h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
				}, config.scriptTimeout),
				tk = d.createElement("script"),
				f = false,
				s = d.getElementsByTagName("script")[0],
				a;
			h.className += " wf-loading";
			tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
			tk.async = true;
			tk.onload = tk.onreadystatechange = function() {
				a = this.readyState;
				if (f || a && a != "complete" && a != "loaded") return;
				f = true;
				clearTimeout(t);
				try {
					Typekit.load(config)
				} catch (e) {}
			};
			s.parentNode.insertBefore(tk, s)
		})(document);
	</script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<main id="main">