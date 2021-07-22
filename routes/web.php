<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controlador;
use App\Http\Controllers\PostsController;
use App\Models\Post;
use App\Models\User;
use App\Models\Role;
use App\Models\Country;
use App\Models\Photo;
use App\Models\Video;
use App\Models\Tag;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});




// Route::get('/contact', [controlador::class, 'contact']);

// /*
// |--------------------------------------------------------------------------
// | Database - Query
// |--------------------------------------------------------------------------
// |
// */

//  Route::get('/insert', function(){ //insertar información en una tabla dentro de una base de datos

//      DB::insert('insert into users(id, name, email, password) values( ?, ?, ?, ?)', ['1', 'Ali', 'ali@email.com', '123']);
//      DB::insert('insert into users(id, name, email, password) values( ?, ?, ?, ?)', ['2', 'Maria', 'maria@email.com', '123']);
//      DB::insert('insert into posts(title, content, user_id) values( ?, ?, ?)', ['Post 1', 'Laravel is the best thing ever ever', '1']);
//      DB::insert('insert into posts(title, content, user_id) values( ?, ?, ?)', ['Post 2', 'Laravel is the best thing ever ever', '2']);
//      DB::insert('insert into posts(title, content, user_id) values( ?, ?, ?)', ['Post 3', 'Laravel is the best thing ever ever', '1']);
//      DB::insert('insert into posts(title, content, user_id) values( ?, ?, ?)', ['Post 4', 'Laravel is the best thing ever ever', '1']);
//      DB::insert('insert into posts(title, content, user_id) values( ?, ?, ?)', ['Post 5', 'Laravel is the best thing ever ever', '1']);
//      DB::insert('insert into posts(title, content, user_id) values( ?, ?, ?)', ['Post 6', 'Laravel is the best thing ever ever', '2']);



//  });

// Route::get('/read', function(){ //leer información de una tabla dentro de una base de datos

//     $results = DB::select('select * from posts where id = ?', [1]);
//     //  return $results;
//     // foreach($results as $post){
//     //     return $post->content;
//     // }

//      return var_dump($results);
// });


//  Route::get('/update', function(){

//      $updated = DB::update('update posts set is_admin = 1 where id = ?', [3]);

//      return $updated;

//  });

// // Route::get('/delete', function(){

// //     DB::delete('delete from posts where id = ?', [1]);

// // });



//  /*
//  |--------------------------------------------------------------------------
//  | Eloquent (OBR)
//  |--------------------------------------------------------------------------
//  |
//  */


// Route::get('/read', function(){


//     return Post::get();  //add 'use App\Models\Post;' to use it

//         // foreach($posts as $post){
//         //     return var_dump($post);
//         // }

// });

// Route::get('/find', function(){

//     $posts = Post::find(2);

//     foreach($posts as $post){
//         return $posts;
//     }


// });

// Route::get('/findwhere', function(){
//      $posts = Post::where('is_admin',1)->orderBy('id', 'desc')->take(2)->get();

//      return $posts;
// });

// Route::get('/findmore', function(){


//     //$posts = Post::findOrFail(8);
//     $posts = Post::find(8);
//     return User::find(1);
//     //$posts = Post::where('id','>', 3)->first();
//     //$posts = Post::where('id','>', 50)->firstOrFail();
//     //$posts = Post::firstWhere('id','>',3);


//     return $posts;
// });

// Route::get('/basicinsert',function(){

//     $posts = new Post;
//     $posts -> id = '3';
//     $posts->title = 'new ORM title';
//     $posts->content = 'wooow, eloquent is really cool';
//     $posts->save();

//     //$posts = new Post::find;



// });

// Route::get('/updateORM', function(){

//     $posts = Post::find(1);
//     $posts->content = "New content";
//     $posts->save();

// });

// Route::get('/create', function(){

//     Post::create(['user_id'=>'1','title'=>'new post', 'content'=>'this is the content']);
//     // Post::create(['user_id'=>'2','title'=>'Post 2', 'content'=>'this is the content', 'id'=>'2']);
//     // Post::create(['user_id'=>'1','title'=>'Post 3', 'content'=>'this is the content', 'id'=>'3']);
//     // Post::create(['user_id'=>'1','title'=>'Post 4', 'content'=>'this is the content', 'id'=>'4']);
//     // Post::create(['user_id'=>'2','title'=>'Post 5', 'content'=>'this is the content', 'id'=>'5']);
//     // Post::create(['user_id'=>'1','title'=>'Post 6', 'content'=>'this is the content', 'id'=>'6']);
//     // User::create(['id'=> '1', 'name'=>'ali', 'email'=>'ali@email.com', 'password'=> '123']);
//     // User::create(['id'=> '2', 'name'=>'maria', 'email'=>'maria@email.com', 'password'=> '123']);

// });



// Route::get('/updateORM2', function(){

//     Post::where('id', 2)-> where('is_admin',0)->update(['title'=>'NEW PHP TITLE', 'content'=>'This is id=2 and is_admin=0']);
//     //Post::find(1)->update(['title'=>'NEW PHP TITLE']);

// });

// Route::get('/delete', function(){
//     // $post = Post::find(3);
//     // $post->delete();

//     // Post::where('is_admin', 0)->delete();
//     User::where('id', 1)->delete();

// });

// Route::get('/delete2', function(){
//     Post::destroy(3);
//     //Post::destroy([4,5]);
// });

// Route::get('/softdelete', function(){

//         Post::find(7)->delete();

// });

// Route::get('/readsoftdelete', function(){

//         $post = Post::withTrashed()->where('id',6)->get();
//         return $post;
//         //return Post::onlyTrashed()->get();

// });


// Route::get('/restore', function(){

//     // Post::withTrashed()->where('is_admin', 0)->restore();
//     // Post::withTrashed()->find(7)->restore();
//     Post::onlyTrashed()->restore();

// });


// Route::get('/forcedelete', function(){

//     //Post::onlyTrashed()->find(7)->forceDelete();
//     Post::onlyTrashed()->where('is_admin',0)->forceDelete();

// });

//Esto es un cambio realizado en la rama1


 /*
 |--------------------------------------------------------------------------
 | Eloquent Relationships
 |--------------------------------------------------------------------------
 |
 */

//  // One to one relationship
// Route::get('/user/{id}/post', function($id){

//     return User::find($id)->post->title;

// });

// //Inverse relation one to one

// Route::get('/post/{id}/user', function($id){

//     return Post::find($id)->user->name;

// });

// // One to many relationship
// Route::get('/posts', function(){

//         $user = User::find(1);

//         foreach($user->posts as $post){
//             echo $post->title. "<br>";
//         }
// });

// //Many to many relations
// Route::get('/user/{id}/role', function($id){
//     // $user=User::find($id);

//     // foreach($user->roles as $role){
//     //     return $role->name;
//     // }


//     $user = User::find($id)->roles()->get();
//     return $user;
// });

// //Inverse many to many
// Route::get('/role/{id}/user', function($id){
//     $role=Role::find($id)->users()->get();
//     return $role;

// });

// //Access to pivot table
// Route::get('/user/{id}/role', function($id){
//     $user=User::find($id);

//     foreach($user->roles as $role){
//         echo $role->pivot;
//     }

// });

// Route::get('/user/country', function(){

//     $country = Country::find(3);

//     foreach($country->posts as $post){

//         echo $post->title ."<br>";
//     }

// });


// //Polymorphic relationship

// Route::get('/user/photos', function(){

//     $user = User::find(1);

//     foreach($user->photos as $photo){
//         echo $photo->path ."<br>";
//     }

// });

// Route::get('/post/photos', function(){

//     $post = Post::find(1);

//     foreach($post->photos as $photo){
//         echo $photo->path."<br>";
//     }

// });

// //Jugando con las relaciones polimorficas y las vistas

// Route::get('/{padre}/{id}/photos', function($padre,$id){

//     if ($padre == "post"){
//         $padre = Post::find($id);
//     }elseif ($padre == "user"){
//         $padre = User::find($id);
//     }else {
//         echo "No se ha especificado correctamente el padre. Opciones válidas: post y user";
//         return view('error');

//     }

//     foreach($padre->photos as $photo){
//         echo $photo->path."<br>";
//     }

// });

// //Polymorphic inverse

// Route::get('/photo/{id}/post', function($id){

//     $photo = Photo::findOrFail($id);
//     return $photo->photoable;

// });

// //Many to many polymorphic
// Route::get('/post/tag', function(){

//     $post = Post::find(1);

//     foreach ($post->tags as $tag){
//         return $tag->name;
//     }

// });
// Route::get('/video/tag', function(){

//     $video = Video::find(1);

//     foreach ($video->tags as $tag){
//         echo $tag->name. "<br>";
//     }

// });


// //Inverse many to many polymorphic

// Route::get('/tag/post', function(){

//     $tag = Tag::find(1);

//     foreach($tag->posts as $post){
//         echo $post;

//     }
// });

// Route::get('/tag/video', function(){

//     $tag = Tag::find(1);

//     foreach($tag->videos as $video){
//         echo $video->name. "<br>";

//     }
// });



 /*
 |--------------------------------------------------------------------------
 | CRUD application. Learning forms and validation
 |--------------------------------------------------------------------------
 |
 */

 Route::resource('/posts', PostsController::class);
// Route::get('/posts/create', [PostsController::class, 'create']);
// Route::post('/posts', [PostsController::class, 'store']);
