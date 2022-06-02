<?php
namespace App\Models;

class Post {
    private static $blog_posts = [
        [
            "title"=>"Judul post pertama",
            "slug"=>"judul-post-pertama",
            "author"=>"Kirara Bernstein",
            "body"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta nobis repudiandae dolor animi autem aspernatur adipisci praesentium. Illum voluptate iste quis itaque. Quibusdam nihil velit, dolorem eum magni consequatur sapiente!"   
        ],
        [
            "title"=>"Judul post kedua",
            "slug"=>"judul-post-kedua",
            "author"=>"Katou Megumi",
            "body"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta nobis repudiandae dolor animi autem aspernatur adipisci praesentium. Illum voluptate iste quis itaque. Quibusdam nihil velit, dolorem eum magni consequatur sapiente!"   
    
        ]
    ];
    public static function all(){
        return collect(self::$blog_posts);
    }
    public static function find($slug){
        $posts = static::all();
        return $posts->firstWhere('slug',$slug);
    }
}