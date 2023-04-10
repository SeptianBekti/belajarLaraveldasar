<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//1. Kalau misal ada rute yg metode requestnya get (ketika akses url browser ) yg alamatnya adalah / "slash" maka dia akan menjalankan fungsi berikut yakni :welcome
Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

// 1.
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Septian Bekti Purwandi",
        "email" => "septianbekti99@gmail.com",
        "image" => "septian.jpg"
    ]);
});


// 1.
Route::get('/blog', function () {

    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Septian Bekti Purwandi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum porro eligendi accusamus architecto nobis. Repellendus totam recusandae delectus quasi deleniti nobis ad eveniet nulla in! Nisi, tempore in modi facilis vero quam est hic deserunt quos suscipit rerum vitae a cum voluptatum impedit excepturi ducimus ea. Reprehenderit illo maiores nemo? Non nemo, id culpa quam molestias doloribus necessitatibus quos, ad rem labore placeat quia temporibus provident. Consequatur in et eligendi repudiandae. Labore, vitae porro? Soluta obcaecati aspernatur recusandae placeat fugit. Eum enim exercitationem dolorem. Reiciendis veritatis voluptates distinctio? Placeat fugiat sit culpa, architecto, amet recusandae maiores quis earum quae dolor vero neque dolorem nisi? Debitis ipsa voluptas aut et, ea totam ut ipsum at culpa enim ab! Ducimus perspiciatis ullam est aperiam molestiae, asperiores officiis cum laboriosam ipsum iste quia, odit itaque. Laboriosam aliquid sed, totam voluptas facilis et voluptatibus magni dicta quaerat, quo cum suscipit reiciendis ducimus perferendis cumque error ullam est dolorum ipsa rerum explicabo ab. Veritatis neque illum odio corporis! Consectetur aperiam praesentium perspiciatis, animi necessitatibus atque est corporis facere qui sint maiores cupiditate excepturi, explicabo et, quas tenetur dolore aut! Accusamus, illo ea repudiandae nemo ducimus odit blanditiis mollitia magni sint dolores. Rerum dolorum non odit aliquid voluptas minima. Id ab dignissimos magnam dolore explicabo tenetur pariatur totam, aut praesentium non, facilis rem voluptatem maxime suscipit at incidunt saepe corporis, dolorum nesciunt culpa animi? Fugiat a excepturi rerum ut molestiae atque minus culpa commodi mollitia ad. Sunt aspernatur quam minima accusantium ducimus aut facilis, dignissimos labore suscipit cumque! Saepe vero esse minima dolorum deleniti, ad tenetur, eligendi eveniet aperiam, distinctio numquam qui assumenda repellendus rerum libero laudantium. Velit, deserunt, magni culpa reiciendis cupiditate quas tempora dolor voluptatibus unde quo totam expedita placeat aspernatur fuga aut amet officiis a delectus accusamus consectetur aperiam. Sint tenetur nulla voluptates!"
        ],
    
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Gus Kanjeng",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores est ipsa omnis a pariatur, voluptatibus deleniti culpa ipsum adipisci doloremque veritatis. Dignissimos id earum omnis iste distinctio asperiores dolor. Deleniti dolorem nemo tempore magni illo quis harum quidem, tenetur corporis! Eligendi beatae quas ratione pariatur dolor possimus numquam non exercitationem tempore laborum! Amet ipsa suscipit assumenda dolorum nobis ducimus neque, voluptates illum distinctio ad autem. Debitis sit delectus dolorum aut unde, a ex voluptatibus, incidunt iure ea, consequatur sed. Sint illo, magnam, distinctio suscipit quidem sequi fugiat animi, atque ipsum sunt omnis dolorem rerum quo! Dicta magnam, veritatis earum quidem expedita rerum enim dignissimos inventore atque commodi dolor. Eum dicta perferendis alias suscipit at sed beatae in voluptatem, sit aliquam? Voluptatum necessitatibus sed quidem doloribus error expedita ratione dolore illo consectetur harum in omnis ab atque iste fuga saepe natus aliquid vero quam, cupiditate, iusto quibusdam cumque repellat. Optio harum rerum perferendis reprehenderit nostrum veniam neque quam a deserunt provident odit, sunt itaque esse blanditiis ut laboriosam sapiente totam, dolorem maiores atque adipisci. Doloremque aut, eveniet cum velit illum quas fugiat quod, magnam, non doloribus harum delectus asperiores nulla obcaecati inventore laudantium mollitia quisquam reprehenderit soluta. Reprehenderit eaque eos corporis.
            "
        ]
    ];
    

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// halaman single post
Route::get('posts/{slug}', function($slug) {

    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Septian Bekti Purwandi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum porro eligendi accusamus architecto nobis. Repellendus totam recusandae delectus quasi deleniti nobis ad eveniet nulla in! Nisi, tempore in modi facilis vero quam est hic deserunt quos suscipit rerum vitae a cum voluptatum impedit excepturi ducimus ea. Reprehenderit illo maiores nemo? Non nemo, id culpa quam molestias doloribus necessitatibus quos, ad rem labore placeat quia temporibus provident. Consequatur in et eligendi repudiandae. Labore, vitae porro? Soluta obcaecati aspernatur recusandae placeat fugit. Eum enim exercitationem dolorem. Reiciendis veritatis voluptates distinctio? Placeat fugiat sit culpa, architecto, amet recusandae maiores quis earum quae dolor vero neque dolorem nisi? Debitis ipsa voluptas aut et, ea totam ut ipsum at culpa enim ab! Ducimus perspiciatis ullam est aperiam molestiae, asperiores officiis cum laboriosam ipsum iste quia, odit itaque. Laboriosam aliquid sed, totam voluptas facilis et voluptatibus magni dicta quaerat, quo cum suscipit reiciendis ducimus perferendis cumque error ullam est dolorum ipsa rerum explicabo ab. Veritatis neque illum odio corporis! Consectetur aperiam praesentium perspiciatis, animi necessitatibus atque est corporis facere qui sint maiores cupiditate excepturi, explicabo et, quas tenetur dolore aut! Accusamus, illo ea repudiandae nemo ducimus odit blanditiis mollitia magni sint dolores. Rerum dolorum non odit aliquid voluptas minima. Id ab dignissimos magnam dolore explicabo tenetur pariatur totam, aut praesentium non, facilis rem voluptatem maxime suscipit at incidunt saepe corporis, dolorum nesciunt culpa animi? Fugiat a excepturi rerum ut molestiae atque minus culpa commodi mollitia ad. Sunt aspernatur quam minima accusantium ducimus aut facilis, dignissimos labore suscipit cumque! Saepe vero esse minima dolorum deleniti, ad tenetur, eligendi eveniet aperiam, distinctio numquam qui assumenda repellendus rerum libero laudantium. Velit, deserunt, magni culpa reiciendis cupiditate quas tempora dolor voluptatibus unde quo totam expedita placeat aspernatur fuga aut amet officiis a delectus accusamus consectetur aperiam. Sint tenetur nulla voluptates!"
        ],
    
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Gus Kanjeng",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores est ipsa omnis a pariatur, voluptatibus deleniti culpa ipsum adipisci doloremque veritatis. Dignissimos id earum omnis iste distinctio asperiores dolor. Deleniti dolorem nemo tempore magni illo quis harum quidem, tenetur corporis! Eligendi beatae quas ratione pariatur dolor possimus numquam non exercitationem tempore laborum! Amet ipsa suscipit assumenda dolorum nobis ducimus neque, voluptates illum distinctio ad autem. Debitis sit delectus dolorum aut unde, a ex voluptatibus, incidunt iure ea, consequatur sed. Sint illo, magnam, distinctio suscipit quidem sequi fugiat animi, atque ipsum sunt omnis dolorem rerum quo! Dicta magnam, veritatis earum quidem expedita rerum enim dignissimos inventore atque commodi dolor. Eum dicta perferendis alias suscipit at sed beatae in voluptatem, sit aliquam? Voluptatum necessitatibus sed quidem doloribus error expedita ratione dolore illo consectetur harum in omnis ab atque iste fuga saepe natus aliquid vero quam, cupiditate, iusto quibusdam cumque repellat. Optio harum rerum perferendis reprehenderit nostrum veniam neque quam a deserunt provident odit, sunt itaque esse blanditiis ut laboriosam sapiente totam, dolorem maiores atque adipisci. Doloremque aut, eveniet cum velit illum quas fugiat quod, magnam, non doloribus harum delectus asperiores nulla obcaecati inventore laudantium mollitia quisquam reprehenderit soluta. Reprehenderit eaque eos corporis.
            "
        ]
    ];

    $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
