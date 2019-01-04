<?php
...
 
Route::resource('products', 'ProductController')->middleware('auth');
  
...
?>
