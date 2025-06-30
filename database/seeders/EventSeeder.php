<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use League\Csv\Reader;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear the table first
        DB::table('events')->truncate();

        $csv = Reader::createFromPath(database_path('seeders/data/events.csv'), 'r');
        $csv->setHeaderOffset(0); // Assumes the first row is the header
        foreach ($csv as $record) {
            DB::table('events')->insert([
                'title'       => $record['title'],
                'content'      => $record['content'],
                'user_id'      => $record['user_id'],
                'event_date'      => $record['event_date'],
                'status'   => $record['status'],
                'published_at'   => $record['event_date'],
                'city_state'      => $record['city_state'],
                'venue'      => $record['venue'],
                'map_url'      => $record['map_url'],
                'tickets_url'      => $record['tickets_url'],
                'featured_image_url'   => $record['featured_image_url'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);

        }
    }
}
