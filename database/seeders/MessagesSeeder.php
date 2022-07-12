<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MessagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Feeling Good',
            'slug' => 'good',
            'description' => 'The category for messages when feeling good',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('categories')->insert([
            'name' => 'Feeling Neutral',
            'slug' => 'neutral',
            'description' => 'The category for messages when feeling neutral',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('categories')->insert([
            'name' => 'Feeling down',
            'slug' => 'down',
            'description' => 'The category for messages when feeling down',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Feeling Good Messages
        DB::table('messages')->insert([
            'name' => 'Helen Keller',
            'message' => 'Never bend your head. Always hold it high. Look the world straight in the eye.',
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('messages')->insert([
            'name' => 'Tony Robbins',
            'message' => 'The only limit to your impact is your imagination and commitment.',
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('messages')->insert([
            'name' => 'Albert Einstein',
            'message' => 'Life is like riding a bicycle. To keep your balance, you must keep moving',
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('messages')->insert([
            'name' => 'Nelson Mandela',
            'message' => 'It always seems impossible until it’s done.',
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //Feeling Neutral
        DB::table('messages')->insert([
            'name' => 'Dalai Lama',
            'message' => 'Choose to be optimistic, it feels better.',
            'category_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('messages')->insert([
            'name' => 'Steve Jobs',
            'message' => 'Your time is limited, so don’t waste it living someone else’s life.',
            'category_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('messages')->insert([
            'name' => 'Walt Disney',
            'message' => 'Happiness is a state of mind. It’s just according to the way you look at things.',
            'category_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('messages')->insert([
            'name' => 'C.S. Lewis',
            'message' => 'Hardships often prepare ordinary people for an extraordinary destiny.',
            'category_id' => 3,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('messages')->insert([
            'name' => 'Confucius',
            'message' => 'Our greatest glory is not in never falling but in rising every time we fall.',
            'category_id' => 3,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('messages')->insert([
            'name' => 'Robert Tew',
            'message' => 'The struggle you’re in today is developing the strength you need for tomorrow. Don’t give up.',
            'category_id' => 3,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
