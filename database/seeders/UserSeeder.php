<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use League\Csv\Reader;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Clear the table first
        DB::table('users')->truncate();

        $csv = Reader::createFromPath(database_path('seeders/data/users.csv'), 'r');
        $csv->setHeaderOffset(0); // Assumes the first row is the header

        foreach ($csv as $record) {
            DB::table('users')->insert([
                'display_name'       => $record['display_name'],
                'email'      => $record['email'], // Make sure column name matches your CSV
                'email_verified_at'      => now(), // Make sure column name matches your CSV
                // Set a secure, random, unknowable password for each user.
                'password'          => Hash::make(Str::random(40)),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

        }
    }
}

