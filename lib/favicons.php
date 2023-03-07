<?php
/** Adds Favicons **/
function favicons() { 
$icon_dir = get_template_directory_uri().'/img/favicon'; ?>
<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?=$icon_dir;?>/apple-touch-icon-57x57.png" />
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=$icon_dir;?>/apple-touch-icon-114x114.png" />
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=$icon_dir;?>/apple-touch-icon-72x72.png" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=$icon_dir;?>/apple-touch-icon-144x144.png" />
<link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?=$icon_dir;?>/apple-touch-icon-60x60.png" />
<link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?=$icon_dir;?>/apple-touch-icon-120x120.png" />
<link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?=$icon_dir;?>/apple-touch-icon-76x76.png" />
<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?=$icon_dir;?>/apple-touch-icon-152x152.png" />
<link rel="icon" type="image/png" href="<?=$icon_dir;?>/favicon-196x196.png" sizes="196x196" />
<link rel="icon" type="image/png" href="<?=$icon_dir;?>/favicon-96x96.png" sizes="96x96" />
<link rel="icon" type="image/png" href="<?=$icon_dir;?>/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="<?=$icon_dir;?>/favicon-16x16.png" sizes="16x16" />
<link rel="icon" type="image/png" href="<?=$icon_dir;?>/favicon-128.png" sizes="128x128" />
<meta name="application-name" content="&nbsp;"/>
<meta name="msapplication-TileColor" content="#FFFFFF" />
<meta name="msapplication-TileImage" content="<?=$icon_dir;?>/mstile-144x144.png" />
<meta name="msapplication-square70x70logo" content="<?=$icon_dir;?>/mstile-70x70.png" />
<meta name="msapplication-square150x150logo" content="<?=$icon_dir;?>/mstile-150x150.png" />
<meta name="msapplication-wide310x150logo" content="<?=$icon_dir;?>/mstile-310x150.png" />
<meta name="msapplication-square310x310logo" content="<?=$icon_dir;?>/mstile-310x310.png" />
<?php }
add_action( 'wp_head', 'favicons', 5 );