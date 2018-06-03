<?php

use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Client::class, 50)->create()->each(function ($c) {
	        $c->addresses()->save(factory(App\Address::class)->make());
            $c->customFieldValues()->save(factory(App\CustomFieldValue::class)->make());
	    });
    }
}
