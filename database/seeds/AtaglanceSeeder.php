<?php

use Illuminate\Database\Seeder;

class AtaglanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       	factory(App\Ataglance::class,120)->create();
    }
}
