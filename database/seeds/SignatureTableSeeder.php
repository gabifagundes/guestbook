<?php

use Illuminate\Database\Seeder;

class SignatureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Signature::class, 10)->create();
    }
}
