<?php
function latest_posts() {
  if( ! Registry::has('latest_posts')) {
    if($article = Registry::get('article')) {
      Registry::set('original_article', $article);
    }
  }

  if( ! $posts = Registry::get('latest_posts')) {
    $posts = Post::where('status', '=', 'published')
             ->sort('created', 'desc')->get();
    Registry::set('latest_posts', $posts = new Items($posts));
  }

  if($result = $posts->valid()) {
    Registry::set('article', $posts->current());
    $posts->next();
  } else {
    $posts->rewind();
    Registry::set('article', Registry::get('original_article'));
    Registry::set('latest_posts', false);
  }

  return $result;
}

function excerpt($text,$numb) {
if (strlen($text) > $numb) { 
  $text = substr($text, 0, $numb); 
  $text = substr($text,0,strrpos($text," ")); 
  $etc = " …";  
  $text = $text.$etc; 
  }
return $text; 
}