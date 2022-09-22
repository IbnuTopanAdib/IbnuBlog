<?php

namespace App\Models;


class Post 
{
   private static $blog_post= [
        [
            "judul" => "Kontolodon beranak Megalodon",
            "slug" => "kontolodon-beranak-megalodon",
            "penulis" => "jean babtiste tod",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere ducimus, neque repellat consequatur laudantium eligendi beatae voluptate delectus, ipsum odio culpa officia ex veniam fugit repellendus quidem esse. Recusandae, voluptas."
    
        ],
        [
            "judul" => "Cara Bermain Gitar",
            "slug" => "cara-bermain-gitar",
            "penulis" => "bohly",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere ducimus, neque repellat consequatur laudantium eligendi beatae voluptate delectus, ipsum odio culpa officia ex veniam fugit repellendus quidem esse. Recusandae, voluptas."
    
        ]
        ];
    
    public static function takeAll(){
        return collect(self::$blog_post);
    }
    public static function find($slug){
       
        $posts = static::takeAll(); 
        
        return $posts->firstWhere('slug', $slug);
    }
}
