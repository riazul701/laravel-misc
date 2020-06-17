<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);

        factory(App\Customer::class, 10)->create()->each(function ($customer) {
            // Seed the relation with one address
            $address = factory(App\CustomerAddress::class)->make();
            $customer->address()->save($address);

            // Seed the relation with 5 purchases
            $purchases = factory(App\CustomerPurchase::class, 5)->make();
            $customer->purchases()->saveMany($purchases);
        });
    }
}
