<?php
 
use Illuminate\Database\Seeder;
 
class PcspecsTableSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('pc_specs')->delete();
 
        $pcspecs = array(
            [   'id'=>1,
                'pcid'=>1,
                'slug'=>'biennio-pc1-specs',
                'processor'=>'Intel i7 4510U', 
                'motherboard'=>'Asrock 5230 Lol',
                'ram'=>'4096 MB',
                'videocard'=>'AMD Radeon G2 2048 MB',
                'harddisk'=>'Seagate Barracuda 120GB',
                'size_c'=>60000,
                'size_d'=>60000,
            ]);
 
        // Uncomment the below to run the seeder
        DB::table('pc_specs')->insert($pcspecs);
    }
 
}