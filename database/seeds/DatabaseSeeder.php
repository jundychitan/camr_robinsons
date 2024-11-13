<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
	/*Create User - Admin as Default*/
        DB::table('user_tb')->insert([
            'user_name' => 'admin',
			'user_real_name' => 'DEC',
            'user_password' => '$2y$10$mf.POMmfskSb1frX84JdOeu.D4iFT0ot1sO0LBthCw0rRKkcavkJi',
            'user_type' => 'Admin',
			'user_access' => 'ALL',
			'created_at' => NOW(),
            'created_by_user_idx' => 0,
			'updated_at' => NOW(),
            'modified_by_user_idx' => 0
        ]);

        
/*Configuration File*/
DB::table('meter_configuration_file')->insert( [
'config_id'=>21,
'meter_model'=>'zmd402_serial_2400',
'config_file'=>'zmd402_serial_2400.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>22,
'meter_model'=>'zmd402_serial',
'config_file'=>'zmd402_serial.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>20,
'meter_model'=>'zmd402_optical',
'config_file'=>'zmd402_optical.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>2,
'meter_model'=>'zmd402',
'config_file'=>'zmd402.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>25,
'meter_model'=>'test_2',
'config_file'=>'test_2.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>127,
'meter_model'=>'s4x_s1.cfg',
'config_file'=>'s4x_s1.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>23,
'meter_model'=>'s4x.cfg',
'config_file'=>'s4x.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>7,
'meter_model'=>'S4E',
'config_file'=>'s4e.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>138,
'meter_model'=>'pm2100.cfg',
'config_file'=>'pm2100.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>130,
'meter_model'=>'nc30_dlt645.cfg',
'config_file'=>'nc30_dlt645.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>6,
'meter_model'=>'NC30',
'config_file'=>'nc30.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>41,
'meter_model'=>'mk6_cli_s2.cfg',
'config_file'=>'mk6_cli_s2.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>36,
'meter_model'=>'mk6_cli_s1.cfg',
'config_file'=>'mk6_cli_s1.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>132,
'meter_model'=>'mk6_cli_2400.cfg',
'config_file'=>'mk6_cli_2400.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>37,
'meter_model'=>'mk6_cli.cfg',
'config_file'=>'mk6_cli.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>110,
'meter_model'=>'mk31_serialS1.cfg',
'config_file'=>'mk31_serialS1.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>114,
'meter_model'=>'mk31_serial.cfg',
'config_file'=>'mk31_serial.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>53,
'meter_model'=>'mk29_serialS1.cfg',
'config_file'=>'mk29_serialS1.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>35,
'meter_model'=>'mk29_serial',
'config_file'=>'mk29_serial.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>125,
'meter_model'=>'mk29E_serial.cfg',
'config_file'=>'mk29E_serial.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>136,
'meter_model'=>'mk10_cli_timeout.cfg',
'config_file'=>'mk10_cli_timeout.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>135,
'meter_model'=>'mk10_cli_nopar.cfg',
'config_file'=>'mk10_cli_nopar.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>55,
'meter_model'=>'mk10_cli.cfg',
'config_file'=>'mk10_cli.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>27,
'meter_model'=>'mk10_9600',
'config_file'=>'mk10_9600.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>26,
'meter_model'=>'mk10_2400',
'config_file'=>'mk10_2400.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>137,
'meter_model'=>'mk10A_cli.cfg',
'config_file'=>'mk10A_cli.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>1,
'meter_model'=>'kv2c_serial',
'config_file'=>'kv2c_serial.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>24,
'meter_model'=>'kv2c_optical',
'config_file'=>'kv2c_optical.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>139,
'meter_model'=>'kv2c_opti485_s2.cfg',
'config_file'=>'kv2c_opti485_s2.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>140,
'meter_model'=>'kv2c_opti485_s1.cfg',
'config_file'=>'kv2c_opti485_s1.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>129,
'meter_model'=>'kv2c_opti485_pwd.cfg',
'config_file'=>'kv2c_opti485_pwd.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>47,
'meter_model'=>'kv2c_opti485s1PWD',
'config_file'=>'kv2c_opti485s1PWD.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>46,
'meter_model'=>'kv2c_opti485s1NP',
'config_file'=>'kv2c_opti485s1NP.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>113,
'meter_model'=>'kv2c_opti485.cfg',
'config_file'=>'kv2c_opti485.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>9,
'meter_model'=>'iecTCP',
'config_file'=>'iecTCP.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>8,
'meter_model'=>'iec',
'config_file'=>'iec.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>128,
'meter_model'=>'i210_plus.cfg',
'config_file'=>'i210_plus.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>39,
'meter_model'=>'em3490.cfg',
'config_file'=>'em3490.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>141,
'meter_model'=>'elnet.cfg',
'config_file'=>'elnet.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>11,
'meter_model'=>'dlt645serial.cfg',
'config_file'=>'dlt645serial.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>10,
'meter_model'=>'mk31 RF',
'config_file'=>'dlt645RF.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>58,
'meter_model'=>'ch_trans_sn.cfg',
'config_file'=>'ch_trans_sn.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>38,
'meter_model'=>'ch_trans.cfg',
'config_file'=>'ch_trans.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>44,
'meter_model'=>'ch_meter_s1.cfg',
'config_file'=>'ch_meter_s1.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>111,
'meter_model'=>'ch_meter_pm835.cfg',
'config_file'=>'ch_meter_pm835.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>134,
'meter_model'=>'ch_meter_lora.cfg',
'config_file'=>'ch_meter_lora.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>52,
'meter_model'=>'ch_meter_fe.cfg',
'config_file'=>'ch_meter_fe.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>34,
'meter_model'=>'ch_meter_9600lora.cfg',
'config_file'=>'ch_meter_9600lora.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>32,
'meter_model'=>'ch_meter_9600.cfg',
'config_file'=>'ch_meter_9600.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>112,
'meter_model'=>'ch_meter_4800.cfg',
'config_file'=>'ch_meter_4800.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>43,
'meter_model'=>'ch meter 2400 s1',
'config_file'=>'ch_meter_2400_s1.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>126,
'meter_model'=>'ch_meter_2400_s1.cfg',
'config_file'=>'ch_meter_2400_s1.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>31,
'meter_model'=>'ch_meter_2400.cfg',
'config_file'=>'ch_meter_2400.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>45,
'meter_model'=>'ch_meter_1200_s1.cfg',
'config_file'=>'ch_meter_1200_s1.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>51,
'meter_model'=>'ch_meter_1200par.cfg',
'config_file'=>'ch_meter_1200par.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>33,
'meter_model'=>'ch_meter_1200.cfg',
'config_file'=>'ch_meter_1200.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>28,
'meter_model'=>'ch_meter.cfg',
'config_file'=>'ch_meter.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>50,
'meter_model'=>'ch_fe13.cfg',
'config_file'=>'ch_fe13.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>19,
'meter_model'=>'cedc_zmd402.cfg',
'config_file'=>'cedc_zmd402.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>54,
'meter_model'=>'c2000_protocol25.cfg',
'config_file'=>'c2000_protocol25.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>40,
'meter_model'=>'c2000_np.cfg',
'config_file'=>'c2000_np.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>115,
'meter_model'=>'c2000_7e1_9600.cfg',
'config_file'=>'c2000_7e1_9600.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>49,
'meter_model'=>'c2000_7e1_300s2.cfg',
'config_file'=>'c2000_7e1_300s2.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>48,
'meter_model'=>'c2000_7e1_300s1.cfg',
'config_file'=>'c2000_7e1_300s1.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>30,
'meter_model'=>'c2000_7e1_300.cfg',
'config_file'=>'c2000_7e1_300.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>29,
'meter_model'=>'c2000_300.cfg',
'config_file'=>'c2000_300.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>42,
'meter_model'=>'c2000_2ecom.cfg',
'config_file'=>'c2000_2ecom.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>3,
'meter_model'=>'c2000.cfg',
'config_file'=>'c2000.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>4,
'meter_model'=>'P2000-D',
'config_file'=>'c2000.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>5,
'meter_model'=>'P2000-T',
'config_file'=>'c2000.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>56,
'meter_model'=>'abb_tcp_57.cfg',
'config_file'=>'abb_tcp_57.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>57,
'meter_model'=>'abb_tcp_53.cfg',
'config_file'=>'abb_tcp_53.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>119,
'meter_model'=>'abb_tcp_121.cfg',
'config_file'=>'abb_tcp_121.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>120,
'meter_model'=>'abb_tcp_119.cfg',
'config_file'=>'abb_tcp_119.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>121,
'meter_model'=>'abb_tcp_118.cfg',
'config_file'=>'abb_tcp_118.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>122,
'meter_model'=>'abb_tcp_117.cfg',
'config_file'=>'abb_tcp_117.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>124,
'meter_model'=>'abb_tcp_116.cfg',
'config_file'=>'abb_tcp_116.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>123,
'meter_model'=>'abb_tcp_115.cfg',
'config_file'=>'abb_tcp_115.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>131,
'meter_model'=>'abb_tcp87.cfg',
'config_file'=>'abb_tcp87.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>116,
'meter_model'=>'abb_tcp83.cfg',
'config_file'=>'abb_tcp83.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>100,
'meter_model'=>'abb_tcp81.cfg',
'config_file'=>'abb_tcp81.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>108,
'meter_model'=>'abb_tcp79.cfg',
'config_file'=>'abb_tcp79.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>107,
'meter_model'=>'abb_tcp78.cfg',
'config_file'=>'abb_tcp78.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>106,
'meter_model'=>'abb_tcp77.cfg',
'config_file'=>'abb_tcp77.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>117,
'meter_model'=>'abb_tcp74.cfg',
'config_file'=>'abb_tcp74.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>105,
'meter_model'=>'abb_tcp70.cfg',
'config_file'=>'abb_tcp70.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>103,
'meter_model'=>'abb_tcp68.cfg',
'config_file'=>'abb_tcp68.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>102,
'meter_model'=>'abb_tcp67.cfg',
'config_file'=>'abb_tcp67.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>104,
'meter_model'=>'abb_tcp54.cfg',
'config_file'=>'abb_tcp54.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>118,
'meter_model'=>'abb_tcp52.cfg',
'config_file'=>'abb_tcp52.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>101,
'meter_model'=>'abb_tcp51.cfg',
'config_file'=>'abb_tcp51.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>99,
'meter_model'=>'abb_tcp50.cfg',
'config_file'=>'abb_tcp50.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>98,
'meter_model'=>'abb_tcp49.cfg',
'config_file'=>'abb_tcp49.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>97,
'meter_model'=>'abb_tcp48.cfg',
'config_file'=>'abb_tcp48.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>96,
'meter_model'=>'abb_tcp47.cfg',
'config_file'=>'abb_tcp47.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>95,
'meter_model'=>'abb_tcp46.cfg',
'config_file'=>'abb_tcp46.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>94,
'meter_model'=>'abb_tcp45.cfg',
'config_file'=>'abb_tcp45.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>93,
'meter_model'=>'abb_tcp44.cfg',
'config_file'=>'abb_tcp44.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>92,
'meter_model'=>'abb_tcp43.cfg',
'config_file'=>'abb_tcp43.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>91,
'meter_model'=>'abb_tcp42.cfg',
'config_file'=>'abb_tcp42.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>90,
'meter_model'=>'abb_tcp41.cfg',
'config_file'=>'abb_tcp41.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>89,
'meter_model'=>'abb_tcp40.cfg',
'config_file'=>'abb_tcp40.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>88,
'meter_model'=>'abb_tcp39.cfg',
'config_file'=>'abb_tcp39.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>87,
'meter_model'=>'abb_tcp38.cfg',
'config_file'=>'abb_tcp38.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>86,
'meter_model'=>'abb_tcp37.cfg',
'config_file'=>'abb_tcp37.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>85,
'meter_model'=>'abb_tcp36.cfg',
'config_file'=>'abb_tcp36.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>84,
'meter_model'=>'abb_tcp35.cfg',
'config_file'=>'abb_tcp35.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>83,
'meter_model'=>'abb_tcp34.cfg',
'config_file'=>'abb_tcp34.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>82,
'meter_model'=>'abb_tcp33.cfg',
'config_file'=>'abb_tcp33.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>81,
'meter_model'=>'abb_tcp32.cfg',
'config_file'=>'abb_tcp32.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>80,
'meter_model'=>'abb_tcp31.cfg',
'config_file'=>'abb_tcp31.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>79,
'meter_model'=>'abb_tcp30.cfg',
'config_file'=>'abb_tcp30.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>78,
'meter_model'=>'abb_tcp29.cfg',
'config_file'=>'abb_tcp29.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>77,
'meter_model'=>'abb_tcp28.cfg',
'config_file'=>'abb_tcp28.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>76,
'meter_model'=>'abb_tcp27.cfg',
'config_file'=>'abb_tcp27.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>75,
'meter_model'=>'abb_tcp26.cfg',
'config_file'=>'abb_tcp26.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>74,
'meter_model'=>'abb_tcp25.cfg',
'config_file'=>'abb_tcp25.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>73,
'meter_model'=>'abb_tcp24.cfg',
'config_file'=>'abb_tcp24.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>72,
'meter_model'=>'abb_tcp23.cfg',
'config_file'=>'abb_tcp23.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>71,
'meter_model'=>'abb_tcp22.cfg',
'config_file'=>'abb_tcp22.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>70,
'meter_model'=>'abb_tcp21.cfg',
'config_file'=>'abb_tcp21.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>69,
'meter_model'=>'abb_tcp20.cfg',
'config_file'=>'abb_tcp20.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>59,
'meter_model'=>'abb_tcp19.cfg',
'config_file'=>'abb_tcp19.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>67,
'meter_model'=>'abb_tcp18.cfg',
'config_file'=>'abb_tcp18.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>66,
'meter_model'=>'abb_tcp17.cfg',
'config_file'=>'abb_tcp17.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>65,
'meter_model'=>'abb_tcp16.cfg',
'config_file'=>'abb_tcp16.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>64,
'meter_model'=>'abb_tcp15.cfg',
'config_file'=>'abb_tcp15.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>63,
'meter_model'=>'abb_tcp14.cfg',
'config_file'=>'abb_tcp14.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>62,
'meter_model'=>'abb_tcp13.cfg',
'config_file'=>'abb_tcp13.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>61,
'meter_model'=>'abb_tcp12.cfg',
'config_file'=>'abb_tcp12.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


			
DB::table('meter_configuration_file')->insert( [
'config_id'=>60,
'meter_model'=>'abb_tcp11.cfg',
'config_file'=>'abb_tcp11.cfg',
'created_by_user_idx'=>0,
'created_at'=>NOW(),
'modified_by_user_idx'=>0,
'updated_at'=>NOW()
] );


    }
}
