<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags=['divertente','faticoso','veloce','lunga preparazione','pochi ingredienti','molti ingredienti','ricetta di coppia','tradizionale','futuristico','piatti elaborati','gourmet','cene speciali'];
        foreach ($tags as $tag_name) {
            $tag= new Tag;
            $tag->name=$tag_name;
            $tag->slug=Str::of($tag_name)->slug('-');
            $tag->save();
        }
    }
}
