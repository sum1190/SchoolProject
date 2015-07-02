<?php
 
use Illuminate\Database\Seeder;
 
class PcmantTableSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('pc_mants')->delete();
 		$dt = new DateTime();

        $pcmants = array(
            [   'id'=>1,
                'pcid'=>1,
                'slug'=>'biennio-pc1-mant',
                'date_mant'=>$dt->format('d-m-Y'), 
                'text_mant'=>'Sostituita scheda video non funzionante'
            ]);
 
        // Uncomment the below to run the seeder
        DB::table('pc_mants')->insert($pcmants);
    }
 
}