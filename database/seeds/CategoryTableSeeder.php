<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //stabilisco le categorie
        $categories=['antipasti','primi','secondi piatti di carne','secondi piatti di pesce','dolci al cucchiaio','torte','piatti orientali'];
       //poi le inietto con il foreach creando un elemento per ciascuna categoria, con relativo nome e SLUG
       foreach($categories as $category_name){
           $newCategory= new Category();
           $newCategory->name=$category_name;   
           $newCategory->slug=Str::of($category_name)->slug('-');
           $newCategory->save();
       }
    }
}
