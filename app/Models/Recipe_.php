<?php

namespace App\Models;



class Recipe_
{
   private static $recipe_posts = [
        [
            "title" => "Judul Recipe Satu",
            "slug" => "judul-recipe-satu",
            "author" => "Reynard",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde soluta esse odio fuga. Magni architecto inventore nesciunt a? Nostrum corrupti repudiandae asperiores eius nemo sed sint, veniam quisquam doloremque officiis eum, deleniti beatae perferendis quae. Tenetur, minima perferendis nihil repellat fuga enim nostrum reprehenderit, impedit quasi dolore maiores unde repudiandae provident aliquid natus qui autem, iusto numquam debitis blanditiis ullam vero dolor vitae. Possimus perferendis exercitationem eveniet nesciunt dolorem iure adipisci aperiam! Ducimus esse fuga aspernatur quasi. Magnam, necessitatibus?"
        ],
        [
            "title" => "Judul Recipe Dua",
            "slug" => "judul-recipe-dua",
            "author" => "Reynard H",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Est hic accusantium ipsam nemo laborum ullam necessitatibus deleniti ex quis, corporis quo, asperiores, assumenda libero neque. Saepe ipsa tempora accusantium inventore, quibusdam alias, mollitia tenetur eaque repudiandae dolore quam possimus nihil perspiciatis quod ea officiis expedita dolorum sed. Deleniti porro accusamus voluptatibus nemo, magni ea eum placeat quasi enim debitis sed veniam ipsa fugit nam aut, deserunt natus unde? Nisi quaerat deserunt pariatur ab ducimus cum sint eligendi quos illum assumenda quod possimus rem provident dolor impedit omnis quidem, quis numquam culpa. Dolor maxime minima tempora ut modi sequi, voluptas praesentium?"
        ]
    ];

    public static function all()
    {
        return collect(self::$recipe_posts); 
    }

    public static function find($slug){
        $recipes = static::all();
        
        return $recipes->firstWhere('slug', $slug);
    }

}
