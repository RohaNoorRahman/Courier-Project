<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Address;
use App\Models\Customer;
use App\Models\Receiver;
use App\Models\Branch;
use App\Models\Employee;
use App\Models\Vehicle;
use App\Models\Package;
use App\Models\Payment;
use App\Models\Shipment;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(20)->create();
        Address::factory(20)->create();
        customer::factory(20)->create();
        receiver::factory(20)->create();
        Branch::factory(20)->create();
        Employee::factory(20)->create();
        Vehicle::factory(20)->create();
        Package::factory(20)->create();
        Payment::factory(20)->create();
        Shipment::factory(20)->create();




        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        
    }
}
