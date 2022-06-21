<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'    => 'Joel'||'Jimmy',
            'email'    => 'joelumuhuza@gmail.com'||'jimmy@gmail.com',
            'password'   =>  Hash::make('joel'),
            
        ]);
    }
}
