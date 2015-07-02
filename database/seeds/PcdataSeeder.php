<?php
 
use Illuminate\Database\Seeder;
 
class PcdataTableSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('pc_datas')->delete();
 
        $pcdatas = array(
            [   'id'=>1,
                'pc_name'=>'biennio-pc1',
                'slug'=>'biennio-pc1',
                'workgroup'=>'WORKGROUP', 
                'admin_pass'=>'ciccio',
                'pc_inventory'=>'3750',
                'screen_inventory'=>'',
                'drop_motivation'=>'',
                'so'=>'Ubuntu 15.04',
                'pk_win'=>'aw55e8f5v2ca4w9f6as5',
                'pk_office'=>'aw55e8f5v2ca4w9f6as5',
                'installed_software' => 'Autocad 2005 - Lamp stack',
                'antivirus'=>'avira antivir',
                'browser'=>'Firefox, Chrome, Opera']);
 
        // Uncomment the below to run the seeder
        DB::table('pc_datas')->insert($pcdatas);
    }
 
}