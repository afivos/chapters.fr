<?php

return function($site, $pages, $page) {

	$blog = $pages->find('blog'); 
    $categories = $blog->categories()->split();
	$currentCategory = $page->category();

	return compact('blog', 'categories', 'currentCategory');
};