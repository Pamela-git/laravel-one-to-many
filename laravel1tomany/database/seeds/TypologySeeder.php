<?php

use Illuminate\Database\Seeder;
use App\Task;
use App\Typology;


class TypologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(Typology::class, 20)
          -> create()
          ->each(function($typ) {

            $tasks = Task::inRandomOrder() -> limit(3) -> get();
            $typ -> tasks() -> attach($tasks);

          });
    }
}
