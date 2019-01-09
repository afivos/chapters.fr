<?php

return function($site, $pages, $page) {

  // get all articles
  $articles = $page->children()->visible()->flip();

  // if there is a category filter appended to the url : http://web.com?category={category}
  if($filter = get('category')) {
  	// we keep only the articles with the given category
  	// https://getkirby.com/docs/cheatsheet/pages/filter
  	$articles = $articles->filter(function($article) use($filter) {
  		// we have used str::slug to create our link so we need to compare it with the same function applied
  		return str::slug($article->category()) == $filter;
  	});
  }

  // add pagination
  $articles = $articles->paginate(6);

  // create a shortcut for pagination
  $pagination = $articles->pagination();

  // pass $articles and $pagination to the template
  return compact('articles', 'pagination');

};