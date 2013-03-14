<?php

Autoloader::add_namespace('SitemapGenerator', __DIR__.'/classes');

Autoloader::add_classes(array(
		'SitemapGenerator\\Sitemap' => __DIR__.'/classes/sitemap.php',
	));