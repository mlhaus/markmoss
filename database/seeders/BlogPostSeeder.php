<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use League\Csv\Reader;

class BlogPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear the table first
        DB::table('blog_posts')->truncate();

        $csv = Reader::createFromPath(database_path('seeders/data/blog_posts.csv'), 'r');
        $csv->setHeaderOffset(0); // Assumes the first row is the header

        foreach ($csv as $record) {
            DB::table('blog_posts')->insert([
                'title'       => $record['title'],
                'content'      => $record['content'],
                'user_id'      => $record['user_id'],
                'status'   => $record['status'],
                'published_at'   => $record['published_at'],
                'featured_image_url'   => $record['featured_image_url'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);

        }
    }
}
