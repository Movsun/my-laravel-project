<?php

use Illuminate\Database\Seeder;

class MaterialTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
          'Animation', 'Assessment Tool', 'Assignment',
          'Case Study', 'Collection', 'Development Tool',
          'Drill and Practice', 'ePortfolio', 'Learning Object Repository',
          'Online Course', 'Online Course Module', 'Open Journal - Article',
          'Open Textbook', 'Presentation', 'Quiz/Test', 'Reference Material',
          'Simulation', 'Social Networking Tool', 'Tutorial', 'Workshop and Training Material',
        ];
        foreach ($data as $d) {
          DB::table('insert')->insert([
            'name' => $d,
          ]);
        }
    }
}
