<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('categories')->insert([
          'name' => 'Story'
        ]);
        DB::table('categories')->insert([
            'name' => 'Poem'
          ]);
          DB::table('categories')->insert([
              'name' => 'Travel'
          ]);

            DB::table('categories')->insert([
                'name' => 'Fashion'
          ]);

              DB::table('categories')->insert([
                  'name' => 'Food'
          ]);

                DB::table('categories')->insert([
                    'name' => 'Sports'
          ]);

    }
}
