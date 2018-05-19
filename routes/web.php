<?php

Route::get('/', 'TwitterController@twitterUserTimeLine');
Route::post('tweet', ['as' => 'post.tweet', 'uses'=>'TwitterController@tweet']);