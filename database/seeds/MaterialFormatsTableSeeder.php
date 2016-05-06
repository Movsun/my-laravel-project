<?php

use Illuminate\Database\Seeder;

class MaterialFormatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
          'ActiveX', 'Flash', 'QuickTime', 'Authorwar File', 'HTML/Text', 'SCORM',
          'Audio', 'Image', 'Shockwave', 'CD-ROM', 'Java Applet', 'Video', 'Common Cartridge',
          'Javascript', 'VRML', 'Director File', 'PDF', 'Wiki', 'Executable Program', 'Podcast',
        ];
        foreach ($data as $d) {
          DB::table('material_formats')->insert([
            'name' => $d,
          ]);
        }
    }
}
