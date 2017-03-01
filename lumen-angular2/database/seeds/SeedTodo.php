<?php

use Illuminate\Database\Seeder;

class SeedTodo extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $todo1 = new App\Todo();
        $todo1->name = "Xperia Z3";
        $todo1->description = "Description about Xperia Z3: Xperia Z3 is greats and cool";
        $todo1->images = "product4.jpg";
        $todo1->user_id = 1;
        $todo1->save();

        $todo1 = new App\Todo();
        $todo1->name = "Iphone 7Plus";
        $todo1->description = "Description about Iphone 7Plus: Iphone 7Plus is greats and cool";
        $todo1->images = "product2.jpg";
        $todo1->user_id = 2;
        $todo1->save();


        $todo1 = new App\Todo();
        $todo1->name = "Iphone 5S";
        $todo1->description = "Description about Iphone 5S: Iphone 5S is greats and cool";
        $todo1->images = "product3.jpg";
        $todo1->user_id = 1;
        $todo1->save();

        $todo1 = new App\Todo();
        $todo1->name = "Xperia Z4 PLus";
        $todo1->description = "Description about Xperia Z4 PLus: Xperia Z4 PLus is greats and cool";
        $todo1->images = "product1.jpg";
        $todo1->user_id = 2;
        $todo1->save();

        $todo1 = new App\Todo();
        $todo1->name = "Lumia 9";
        $todo1->description = "Description about Lumia 9: Lumia 9 is greats and cool";
        $todo1->images = "product4.jpg";
        $todo1->user_id = 1;
        $todo1->save();


        $todo8 = new App\Todo();
        $todo8->name = "Xperia Premium Z5";
        $todo8->description = "Description about Xperia Premium Z5: Xperia Premium Z5 is greats";
        $todo8->images = "product2.jpg";
        $todo8->user_id = 1;
        $todo8->save();
    }
}
