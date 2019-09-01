<?php

use Illuminate\Database\Seeder;

class TodosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(Todo::class)->create(); //  This line creates one instance of a todo 
        factory(App\Todo::class, 5)->create(); //  This line creates 10 instances of a todo 
    }
}
