<?php

namespace Database\Seeders;

use App\Models\Tenant;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $domainName = 'buraq.' . config('tenancy.central_domains')[2];

        // User::factory(10)->create();

        $tenant = Tenant::create([
            'id' => 'buraq', // Company name as tenant ID
            'contact' => '03124235113',
            'email' =>'buraq@gmail.com',
            'address' => "abc",
            'status' => '1'

        ]);

        $tenant->domains()->create(['domain' => $domainName]);

        // Create the tenant user
        tenancy()->initialize($tenant);

        $user = new User;
        $user->name =  'Buraq Travel Alliance';
        $user->email =  'buraq@example.com';
        $user->role =  'su_admin';
        $user->password = Hash::make('Buraq!23');
        $user->save();

        tenancy()->end();

        // Create Central User

        $user = new User;
        $user->name =  'Buraq Travel Alliance';
        $user->email =  'buraq@example.com';
        $user->role =  'su_admin';
        $user->password = Hash::make('Buraq!23');
        $user->save();
    }
}
