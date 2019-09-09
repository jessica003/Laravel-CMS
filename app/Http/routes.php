<?php
use App\Post;
use App\User;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// Route::get('contact/{id}','PostController@contact');

Route::get('/', function () {
    return view('welcome');
});


//insert data

Route::get('/insert', function(){
	DB::insert('insert  into posts(title,content) value(?,?)',['PHP with Laravel','Laravel isthe best thing that has happened']);
});


//DATABASE Raw SQL Queries
//reading data

// Route::get('/insert', function(){
// $results=DB::select('select * from posts where id=?',[1]);
// foreach ($results as $post) {
// 	// return $post->title;
// 	// return $results;
// 	return var_dump($results);
// }
// });


//update data
// Route::get('/insert', function(){
// 	$updated=DB::update('update posts set title="Update title" where id=?',[1]);
// 	return $updated;
// });

//delete data
// Route::get('/delete', function(){
// 	$deleted=DB::delete('delete from posts where id=?',[2]);
// 	return $deleted;
// });

//ELOQUENT

// Route::get('/read',function(){
// $posts = Post::all();
// foreach ($posts as $post) {
// 	return $post->title;
// }
// });
// Route::get('/find',function(){
// $post = Post::find(1);
// 	return $post->content;
// });

// Route::get('/findwhere',function(){
// $post = Post::where('id',1)->orderBy('id','desc')->take(1)->get();
// 	return $post;
// });

// Route::get('/findmore',function(){
// // $post = Post::findOrFail(3);
// // 	return $post;

// $post = Post::where('users_count','<',50)->firstOrFail();	
// });

Route::get('/basicinsert',function(){
	$post = new Post;
	$post->title='New Eloquent title insert';
	$post->content='Wow eloquent is really cool,look at this content';
	$post->save();
});
// Route::get('/basicupdate',function(){
// 	$post = Post::find(2);
// 	$post->title='New Eloquent title update';
// 	$post->content='Wow eloquent is really cool,look at this content';
// 	$post->save();
// });

// Route::get('/create',function(){
// 	Post::create(['title'=>'demo','content'=>'Wow i am learning laravel']);
// });

// Route::get('/update',function(){
// 	Post::where('id',2)->where('is_admin',0)->update(['title'=>'New PHP title','content'=>'I love Laravel']);
// });

// Route::get('/delete',function(){
// 	$post = Post::find(5);
// 	$post->delete();
// });

// Route::get('/delete2',function(){
// 	// Post::destroy(1);
// 	// Post::destroy([3,4]);

// 	// Post::where('is_admin',0)->delete();
// });

// Route::get('/softdelete',function(){
// 	$post = Post::find(6);
// 	$post->delete();
// });

// Route::get('/readsoftdelete',function(){
// 	// $post = Post::find(5);
// 	// return $post;
// 	// $post = Post::withTrashed()->where('id',5)->get();
// 	// return $post;
// 	$post = Post::onlyTrashed()->where('is_admin',0)->get();
// 	return $post;
// });

// Route::get('/restore',function(){
// 	Post::withTrashed()->where('is_admin',0)->restore();
// });

// Route::get('/forcedelete',function(){
// 	Post::onlyTrashed()->where('is_admin',0)->forcedelete();
// });

//Eloquent relationship//
//one to one relationship//

// route::get('/user/{id}/post',function($id){
// 	return User::find($id)->post;
// });

//inverse of one to one relationship

// Route::get('/post/{id}/user',function($id){
// 	return Post::find($id)->user->name;
// });