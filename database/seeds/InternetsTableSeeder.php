<?php

use Illuminate\Database\Seeder;
use App\Internet;

class InternetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = 100;
        factory(Internet::class, $count)->create();
    }
}
