<?php

use App\Invoices;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserTableSeeder::class);

        Model::unguard();

        $faker = Faker\Factory::create();

        $this->seedInvoices($faker);

        Model::reguard();


    }

    public function seedInvoices($faker)
    {
        foreach (range(0,100) as $number) {
            $invoices= new Invoices();

            $invoices->name = $faker->sentence;
            $invoices->totalAmmount= $faker->randomNumber;

            $invoices->save();

        }
    }
}
