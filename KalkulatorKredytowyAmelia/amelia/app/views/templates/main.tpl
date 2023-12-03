<!doctype html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="{$data->desc}">
	<title>{$data->title}</title>
	<link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css" integrity="sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD" crossorigin="anonymous">
	<link rel="stylesheet" href="{$conf->app_url}/css/style.css?v=<?php echo time(); ?>">	
</head>

<body>

<div class="header">
	<h1>{$data->title}</h1>
	<h2>{$data->desc}</h1>
</div>

<div class="content">
{block name=content} Treść .... {/block}
</div><!-- content -->

</body>
</html>