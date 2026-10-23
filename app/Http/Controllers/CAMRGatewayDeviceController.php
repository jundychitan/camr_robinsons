<?php

namespace App\Http\Controllers;
//use Illuminate\Support\Facades\Request;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\GatewayModel;
use App\Models\MeterModel;

class CAMRGatewayDeviceController extends Controller
{
	/*Check Server Time*/
	public function check_time(Request $request){

    $server_time=date('Y-m-d H:i:s');
	echo $server_time;
		
	}	
	
	/*********************************************************************/
	/*Check CSV Update*/
	public function csv_update_status(Request $request){
		
		$mac_address = request()->segment(5);
		
		$data = GatewayModel::select('update_rtu')->where('gateway_mac', $mac_address)->get();
		
		echo $data[0]['update_rtu'];
		
	}
	
	/*CSV/Meter List Download*/
	public function csv_download(Request $request){
		
		$mac_address = request()->segment(5);
		$clientIpAddress = $request->ip();
		
		$gateway_info = GatewayModel::select('rtu_id','update_rtu')->where('gateway_mac', $mac_address)->get();
		
		$gatewayID = $gateway_info[0]['rtu_id'];
		$update_rtu = $gateway_info[0]['update_rtu'];
		
		if ($update_rtu==1) {	
		
		/*
		$gateway_meter_list = MeterModel::select(
        'meter_name',
        'meter_status',
		'meter_config_file',
		'meter_default_name'
		)
		->where('rtu_idx', $gatewayID)
		->where('meter_status', 'Active')
		->get();
		*/
		//$products = $art->products->skip(0)->take(10)->get(); //get first 10 rows
		$gateway_meter_list = MeterModel::join('meter_configuration_file', 'meter_configuration_file.config_id', '=', 'meter_details.config_idx')
				->where('meter_details.rtu_idx', $gatewayID)
				->where('meter_details.meter_status', 'Active')
				->skip(0)
				->take(32)
				->get([
					'meter_details.meter_id',
					'meter_details.meter_name',
					'meter_details.meter_default_name',
					'meter_configuration_file.config_file'
					]);		
		
		foreach ($gateway_meter_list as $meter_list_col){
	 
					 if($meter_list_col['meter_name']==$meter_list_col['meter_default_name']){
						 $meter_name = $meter_list_col['meter_name'];
						 $addressable_meter = $meter_list_col['meter_default_name'];
						 }
					 elseif($meter_list_col['meter_default_name']=='1'){
						 $meter_name = '1';
						 $addressable_meter = $meter_list_col['meter_default_name'];
						 }
					 else{
						 $meter_name = $meter_list_col['meter_name'];
						 $addressable_meter = $meter_list_col['meter_default_name'];
						 }
					 
					 echo "$meter_name,$meter_list_col[config_file],$addressable_meter\n";
				
				}

		}		

	}	
	
	/*Reset CSV/Meter List Download Status*/
	public function csv_update_status_reset(Request $request){
		
		$mac_address = request()->segment(5);
		$clientIpAddress = $request->ip();
		
		$gateway_info = GatewayModel::select('rtu_id')->where('gateway_mac', $mac_address)->get();
		
		$gatewayID = $gateway_info[0]['rtu_id'];
		
			$site = new GatewayModel();
			$site = GatewayModel::find($gatewayID);
			$site->update_rtu = 0;
			$result = $site->update();
	
	}
	
	/*********************************************************************/
	/*Check Site Code Update*/
	public function site_code_update_status(Request $request){
		
		$mac_address = request()->segment(5);
		
		$data = GatewayModel::select('update_rtu_location')->where('gateway_mac', $mac_address)->get();
		
		echo $data[0]['update_rtu_location'];
		
	}	
	
	/*Download Site Code Download Status*/
	public function site_code_download(Request $request){
		
		$mac_address = request()->segment(5);
		$clientIpAddress = $request->ip();
		
		$gateway_info = GatewayModel::select('rtu_id','update_rtu_location','site_code')->where('gateway_mac', $mac_address)->get();
		
		$gatewayID = $gateway_info[0]['rtu_id'];
		$update_rtu_location = $gateway_info[0]['update_rtu_location'];
		$_rtu_site_code = $gateway_info[0]['site_code'];
		
		if ($update_rtu_location==1) {	
		
			$rtu_site_code = '"' . $_rtu_site_code . '"';
			
			echo "location = $rtu_site_code\n";

		}		

	}	
	
	/*Reset Site Code Download Status*/
	public function site_code_update_status_reset(Request $request){
		
		$mac_address = request()->segment(5);
		$clientIpAddress = $request->ip();
		
		$gateway_info = GatewayModel::select('rtu_id')->where('gateway_mac', $mac_address)->get();
		
		$gatewayID = $gateway_info[0]['rtu_id'];
		
			$site = new GatewayModel();
			$site = GatewayModel::find($gatewayID);
			$site->update_rtu_location = 0;
			$result = $site->update();
	
	}	
	
	/*********************************************************************/
	/*SSH Status*/
	public function gateway_ssh(Request $request){
		
		$mac_address = request()->segment(5);
		
		$data = GatewayModel::select('update_rtu_ssh')->where('gateway_mac', $mac_address)->get();
		
		echo $data[0]['update_rtu_ssh'];
	
	}	 
	
	/*********************************************************************/
	/*Force Load Profile*/
	public function force_load_profile_status(Request $request){
		
		$mac_address = request()->segment(5);
		
		$data = GatewayModel::select('update_rtu_force_lp')->where('gateway_mac', $mac_address)->get();
		
		echo $data[0]['update_rtu_force_lp'];
	
	}	
	
	/*Reset Force Load Profile Status*/
	public function force_load_profile_status_reset(Request $request){
		
		$mac_address = request()->segment(5);
		$clientIpAddress = $request->ip();
		
		$gateway_info = GatewayModel::select('rtu_id')->where('gateway_mac', $mac_address)->get();
		
		$gatewayID = $gateway_info[0]['rtu_id'];
		
			$site = new GatewayModel();
			$site = GatewayModel::find($gatewayID);
			$site->update_rtu_force_lp = 0;
			$result = $site->update();
	
	}	
	
	/*********************************************************************/
	/*Save Reading of Meters*/

	public function http_post_server_A(Request $request){
		
	$server_time=date('Y-m-d H:i:s');
	echo "OK, $server_time";	

	}

	public function http_post_server(Request $request){

		$server_time = date('Y-m-d H:i:s');

		if ($request->input('save_to_meter_data') == 1) {
			$location = (string) $request->input('location', '');
			$meter_id = (string) $request->input('meter_id', '');
			$datetime = str_replace('%20', ' ', (string) $request->input('datetime', ''));
			$mac_addr = (string) $request->input('mac_address', $request->input('gateway_mac', ''));
			$soft_rev = (string) $request->input('soft_rev', '');

			$data = [
				'location' => $location,
				'meter_id' => $meter_id,
				'datetime' => $datetime,
				'mac_addr' => $mac_addr,
				'soft_rev' => $soft_rev,
				'relay_status' => (int) $request->input('relay_status', 0),
			];

			$readings = [
				'vrms_a', 'vrms_b', 'vrms_c', 'irms_a', 'irms_b', 'irms_c',
				'freq', 'pf', 'watt', 'va', 'var',
				'wh_del', 'wh_rec', 'wh_net', 'wh_total',
				'varh_neg', 'varh_pos', 'varh_net', 'varh_total', 'vah_total',
				'max_rec_kw_dmd', 'max_del_kw_dmd',
				'max_pos_kvar_dmd', 'max_neg_kvar_dmd',
				'v_ph_angle_a', 'v_ph_angle_b', 'v_ph_angle_c',
				'i_ph_angle_a', 'i_ph_angle_b', 'i_ph_angle_c',
			];

			foreach ($readings as $field) {
				$data[$field] = (float) $request->input($field, 0);
			}

			foreach (['max_rec_kw_dmd_time', 'max_del_kw_dmd_time',
				'max_pos_kvar_dmd_time', 'max_neg_kvar_dmd_time'] as $field) {
				$data[$field] = $request->input($field) ?: null;
			}

			DB::table('meter_data')->insertOrIgnore($data);
			DB::table('meter_rtu')
				->where('site_code', $location)
				->where('gateway_mac', $mac_addr)
				->update(['last_log_update' => $datetime, 'soft_rev' => $soft_rev]);
			DB::table('meter_details')
				->where('site_code', $location)
				->where('meter_name', $meter_id)
				->update(['last_log_update' => $datetime]);
			DB::table('meter_site')
				->where('site_code', $location)
				->update(['last_log_update' => $datetime]);
		}

		return response("OK, $server_time", 200, ['Content-Type' => 'text/plain; charset=UTF-8']);
	}

}
