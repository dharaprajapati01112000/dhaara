<?php

Route::get('dhara', function(){
	echo 'Hello dhara!';
});
Route::get('add/{a}/{b}', 'First\Test\FirstController@add');
Route::get('subtract/{a}/{b}', 'First\Test\FirstController@subtract');
