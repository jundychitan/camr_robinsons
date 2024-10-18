<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gd9y5clCvO7yxGrY',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login-user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login-user',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/passwordreset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passwordreset',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reset-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sendTemporaryPasswordtoEmail',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4jaxOCDXiZ82MNAE',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/site' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/site/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'AdminSiteList',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/site/user/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'UserSiteList',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/create_site_post' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'create_site_post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update_site_post' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update_site_post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/site_info' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site_info',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/delete_site_confirmed' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete_site_confirmed',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/save_site_tab' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'save_site_tab',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/getGateway' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'getGateway',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/getOfflineGateway' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'getOfflineGateway',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/getGatewayPerBLGandEEROOM' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'getGatewayPerBLGandEEROOM',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ReloadGatewayOption' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ReloadGatewayOption',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/create_gateway_post' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'create_gateway_post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update_gateway_post' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update_gateway_post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/gateway_info' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gateway_info',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/delete_gateway_confirmed' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete_gateway_confirmed',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/import_meters' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'import_meters',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/enablecsvUpdate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'enablecsvUpdate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/disablecsvUpdate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'disablecsvUpdate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/enablesitecodeUpdate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'enablesitecodeUpdate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/disablesitecodeUpdate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'disablesitecodeUpdate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/enableSSH' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'enableSSH',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/disableSSH' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'disableSSH',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/enableLP' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'enableLP',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/disableLP' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'disableLP',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/getMeter' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'getMeter',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/getMetersPerGateway' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'getMetersPerGateway',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/getOfflineMeter' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'getOfflineMeter',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/create_meter_post' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CREATE_METER_INFO',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update_meter_post' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'UPDATE_METER_INFO',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/meter_info' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'MeterInfo',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/delete_meter_confirmed' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'DeleteMeterInfo',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/getBuilding' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'getBuilding',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/create_building_post' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CREATE_BUILDING_INFO',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update_building_post' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'UPDATE_BUILDING_INFO',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/building_info' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'BldgInfo',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/delete_building_confirmed' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'DeleteBuildingInfo',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/get_building_accordion' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'get_building_accordion',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/getMeterLocation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'getMeterLocation',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/create_meter_location_post' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CREATE_METER_LOCATION_INFO',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update_meter_location_post' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'UPDATE_METER_LOCATION_INFO',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/meter_location_info' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'MeterLocationInfo',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/delete_meter_location_confirmed' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'DeleteMeterLocationInfo',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/get_ee_room_location_accordion' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'get_ee_room_location_accordion',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/generate_building_list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'GetBuildingList',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/generate_meter_list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'GetMeterList',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sap_report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'SAPReport',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/generate_sap_report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generate_sap_report',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/generate_sap_report_excel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generate_sap_report_excel',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/download_offline_gateway' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'download_offline_gateway',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/download_offline_meter' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'download_offline_meter',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/raw_report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'RAWReport',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/generate_raw_report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generate_raw_report',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/generate_raw_report_excel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generate_raw_report_excel',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/site_report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'SiteReport',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/generate_site_report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generate_site_report',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/generate_site_report_excel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generate_site_report_excel',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/generate_site_as_built_excel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generate_site_as_built_excel',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/consumption_report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ConsumptionReport',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/generate_consumption_report/hourly' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'consumption_report_hourly',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/generate_consumption_report/daily' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'consumption_report_daily',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/download_consumption_report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'download_consumption_report',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/demand_report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'DemandReport',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/generate_demand_report/hourly' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'demand_report_hourly',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/generate_demand_report/fifteen' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'demand_report_15',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/download_demand_report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'download_demand_report',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user_list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'UserList',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/create_user_post' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'create_user_post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user_site_access' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'getUserSiteAccess',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/add_user_access_post' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'add_user_access_post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/company' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'company',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/company_list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CompanyList',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/create_company_post' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'create_company_post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/company_info' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'company_info',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update_company_post' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update_company_post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/delete_company_confirmed' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete_company_confirmed',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/division' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'division',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/division_list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'DivisionList',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/create_division_post' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'create_division_post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/division_info' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'division_info',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update_division_post' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update_division_post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/delete_division_confirmed' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete_division_confirmed',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user_info' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user_info',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update_user_post' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update_user_post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/delete_user_confirmed' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete_user_confirmed',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user_account_post' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user_account_post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/check_time.php' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'check_time',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/http_post_server' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'http_post_server',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/site_details(?|/([^/]++)(*:32)|_2/([^/]++)(*:50))|/rtu/index\\.php/rtu/rtu_check_update/([^/]++)/(?|get_(?|update_(?|csv(*:127)|location(*:143))|content_(?|csv(*:166)|location(*:182)))|r(?|eset_(?|update_(?|csv(*:217)|location(*:233))|force_lp(*:250))|tu_remote_ssh(*:272))|force_lp(*:289)))/?$}sDu',
    ),
    3 => 
    array (
      32 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site_details',
          ),
          1 => 
          array (
            0 => 'siteID',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      50 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site_details_2',
          ),
          1 => 
          array (
            0 => 'siteID',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      127 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'csv_update_status',
          ),
          1 => 
          array (
            0 => 'mac',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      143 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site_code_update_status',
          ),
          1 => 
          array (
            0 => 'mac',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      166 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'csv_download',
          ),
          1 => 
          array (
            0 => 'mac',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      182 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site_code_download',
          ),
          1 => 
          array (
            0 => 'mac',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      217 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'csv_update_status_reset',
          ),
          1 => 
          array (
            0 => 'mac',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      233 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site_code_update_status_reset',
          ),
          1 => 
          array (
            0 => 'mac',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      250 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'force_load_profile_status_reset',
          ),
          1 => 
          array (
            0 => 'mac',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      272 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gateway_ssh',
          ),
          1 => 
          array (
            0 => 'mac',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      289 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'force_load_profile_status',
          ),
          1 => 
          array (
            0 => 'mac',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'generated::gd9y5clCvO7yxGrY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'alreadyLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\CAMRUserAuthController@login',
        'controller' => 'App\\Http\\Controllers\\CAMRUserAuthController@login',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::gd9y5clCvO7yxGrY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'login-user' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login-user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CAMRUserAuthController@loginUser',
        'controller' => 'App\\Http\\Controllers\\CAMRUserAuthController@loginUser',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'login-user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passwordreset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'passwordreset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CAMRUserAuthController@passwordreset',
        'controller' => 'App\\Http\\Controllers\\CAMRUserAuthController@passwordreset',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'passwordreset',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'sendTemporaryPasswordtoEmail' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reset-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\EmailController@sendTemporaryPasswordtoEmail',
        'controller' => 'App\\Http\\Controllers\\EmailController@sendTemporaryPasswordtoEmail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'sendTemporaryPasswordtoEmail',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::4jaxOCDXiZ82MNAE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CAMRUserAuthController@logout',
        'controller' => 'App\\Http\\Controllers\\CAMRUserAuthController@logout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::4jaxOCDXiZ82MNAE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\CAMRSiteController@site',
        'controller' => 'App\\Http\\Controllers\\CAMRSiteController@site',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'site',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'AdminSiteList' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\CAMRSiteController@getSiteForAdmin',
        'controller' => 'App\\Http\\Controllers\\CAMRSiteController@getSiteForAdmin',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'AdminSiteList',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'UserSiteList' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/user/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\CAMRSiteController@getSiteForUser',
        'controller' => 'App\\Http\\Controllers\\CAMRSiteController@getSiteForUser',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'UserSiteList',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'create_site_post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'create_site_post',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\CAMRSiteController@create_site_post',
        'controller' => 'App\\Http\\Controllers\\CAMRSiteController@create_site_post',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'create_site_post',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'update_site_post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update_site_post',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\CAMRSiteController@update_site_post',
        'controller' => 'App\\Http\\Controllers\\CAMRSiteController@update_site_post',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'update_site_post',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site_info' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'site_info',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\CAMRSiteController@site_info',
        'controller' => 'App\\Http\\Controllers\\CAMRSiteController@site_info',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'site_info',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'delete_site_confirmed' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'delete_site_confirmed',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\CAMRSiteController@delete_site_confirmed',
        'controller' => 'App\\Http\\Controllers\\CAMRSiteController@delete_site_confirmed',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'delete_site_confirmed',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site_details' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site_details/{siteID}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\CAMRSiteController@site_details_2',
        'controller' => 'App\\Http\\Controllers\\CAMRSiteController@site_details_2',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'site_details',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site_details_2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site_details_2/{siteID}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\CAMRSiteController@site_details_2',
        'controller' => 'App\\Http\\Controllers\\CAMRSiteController@site_details_2',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'site_details_2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'save_site_tab' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'save_site_tab',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\CAMRSiteController@save_site_tab',
        'controller' => 'App\\Http\\Controllers\\CAMRSiteController@save_site_tab',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'save_site_tab',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'getGateway' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'getGateway',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\CAMRGatewayController@getGateway',
        'controller' => 'App\\Http\\Controllers\\CAMRGatewayController@getGateway',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'getGateway',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'getOfflineGateway' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'getOfflineGateway',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\CAMRGatewayController@getOfflineGateway',
        'controller' => 'App\\Http\\Controllers\\CAMRGatewayController@getOfflineGateway',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'getOfflineGateway',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'getGatewayPerBLGandEEROOM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'getGatewayPerBLGandEEROOM',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\CAMRGatewayController@getGatewayPerBLGandEEROOM',
        'controller' => 'App\\Http\\Controllers\\CAMRGatewayController@getGatewayPerBLGandEEROOM',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'getGatewayPerBLGandEEROOM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'ReloadGatewayOption' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ReloadGatewayOption',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\CAMRGatewayController@ReloadGatewayOption',
        'controller' => 'App\\Http\\Controllers\\CAMRGatewayController@ReloadGatewayOption',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'ReloadGatewayOption',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'create_gateway_post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'create_gateway_post',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\CAMRGatewayController@create_gateway_post',
        'controller' => 'App\\Http\\Controllers\\CAMRGatewayController@create_gateway_post',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'create_gateway_post',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'update_gateway_post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update_gateway_post',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\CAMRGatewayController@update_gateway_post',
        'controller' => 'App\\Http\\Controllers\\CAMRGatewayController@update_gateway_post',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'update_gateway_post',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'gateway_info' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'gateway_info',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\CAMRGatewayController@gateway_info',
        'controller' => 'App\\Http\\Controllers\\CAMRGatewayController@gateway_info',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'gateway_info',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'delete_gateway_confirmed' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'delete_gateway_confirmed',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\CAMRGatewayController@delete_gateway_confirmed',
        'controller' => 'App\\Http\\Controllers\\CAMRGatewayController@delete_gateway_confirmed',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'delete_gateway_confirmed',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'import_meters' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'import_meters',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\CAMRGatewayController@import_meters',
        'controller' => 'App\\Http\\Controllers\\CAMRGatewayController@import_meters',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'import_meters',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'enablecsvUpdate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'enablecsvUpdate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\CAMRGatewayController@enablecsvUpdate',
        'controller' => 'App\\Http\\Controllers\\CAMRGatewayController@enablecsvUpdate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'enablecsvUpdate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'disablecsvUpdate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'disablecsvUpdate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\CAMRGatewayController@disablecsvUpdate',
        'controller' => 'App\\Http\\Controllers\\CAMRGatewayController@disablecsvUpdate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'disablecsvUpdate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'enablesitecodeUpdate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'enablesitecodeUpdate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\CAMRGatewayController@enablesitecodeUpdate',
        'controller' => 'App\\Http\\Controllers\\CAMRGatewayController@enablesitecodeUpdate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'enablesitecodeUpdate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'disablesitecodeUpdate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'disablesitecodeUpdate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\CAMRGatewayController@disablesitecodeUpdate',
        'controller' => 'App\\Http\\Controllers\\CAMRGatewayController@disablesitecodeUpdate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'disablesitecodeUpdate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'enableSSH' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'enableSSH',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\CAMRGatewayController@enableSSH',
        'controller' => 'App\\Http\\Controllers\\CAMRGatewayController@enableSSH',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'enableSSH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'disableSSH' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'disableSSH',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\CAMRGatewayController@disableSSH',
        'controller' => 'App\\Http\\Controllers\\CAMRGatewayController@disableSSH',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'disableSSH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'enableLP' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'enableLP',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\CAMRGatewayController@enableLP',
        'controller' => 'App\\Http\\Controllers\\CAMRGatewayController@enableLP',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'enableLP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'disableLP' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'disableLP',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\CAMRGatewayController@disableLP',
        'controller' => 'App\\Http\\Controllers\\CAMRGatewayController@disableLP',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'disableLP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'getMeter' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'getMeter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\CAMRMeterController@getMeter',
        'controller' => 'App\\Http\\Controllers\\CAMRMeterController@getMeter',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'getMeter',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'getMetersPerGateway' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'getMetersPerGateway',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\CAMRMeterController@getMetersPerGateway',
        'controller' => 'App\\Http\\Controllers\\CAMRMeterController@getMetersPerGateway',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'getMetersPerGateway',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'getOfflineMeter' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'getOfflineMeter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\CAMRMeterController@getOfflineMeter',
        'controller' => 'App\\Http\\Controllers\\CAMRMeterController@getOfflineMeter',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'getOfflineMeter',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'CREATE_METER_INFO' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'create_meter_post',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\CAMRMeterController@create_meter_post',
        'controller' => 'App\\Http\\Controllers\\CAMRMeterController@create_meter_post',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'CREATE_METER_INFO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'UPDATE_METER_INFO' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update_meter_post',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\CAMRMeterController@update_meter_post',
        'controller' => 'App\\Http\\Controllers\\CAMRMeterController@update_meter_post',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'UPDATE_METER_INFO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'MeterInfo' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'meter_info',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\CAMRMeterController@meter_info',
        'controller' => 'App\\Http\\Controllers\\CAMRMeterController@meter_info',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'MeterInfo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'DeleteMeterInfo' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'delete_meter_confirmed',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\CAMRMeterController@delete_meter_confirmed',
        'controller' => 'App\\Http\\Controllers\\CAMRMeterController@delete_meter_confirmed',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'DeleteMeterInfo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'getBuilding' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'getBuilding',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\CAMRBuildingController@get_Building',
        'controller' => 'App\\Http\\Controllers\\CAMRBuildingController@get_Building',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'getBuilding',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'CREATE_BUILDING_INFO' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'create_building_post',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\CAMRBuildingController@create_building_post',
        'controller' => 'App\\Http\\Controllers\\CAMRBuildingController@create_building_post',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'CREATE_BUILDING_INFO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'UPDATE_BUILDING_INFO' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update_building_post',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\CAMRBuildingController@update_building_post',
        'controller' => 'App\\Http\\Controllers\\CAMRBuildingController@update_building_post',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'UPDATE_BUILDING_INFO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'BldgInfo' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'building_info',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\CAMRBuildingController@building_info',
        'controller' => 'App\\Http\\Controllers\\CAMRBuildingController@building_info',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'BldgInfo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'DeleteBuildingInfo' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'delete_building_confirmed',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\CAMRBuildingController@delete_building_confirmed',
        'controller' => 'App\\Http\\Controllers\\CAMRBuildingController@delete_building_confirmed',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'DeleteBuildingInfo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'get_building_accordion' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'get_building_accordion',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\CAMRBuildingController@get_building_accordion',
        'controller' => 'App\\Http\\Controllers\\CAMRBuildingController@get_building_accordion',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'get_building_accordion',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'getMeterLocation' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'getMeterLocation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\CAMRMeterLocationController@get_MeterLocation',
        'controller' => 'App\\Http\\Controllers\\CAMRMeterLocationController@get_MeterLocation',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'getMeterLocation',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'CREATE_METER_LOCATION_INFO' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'create_meter_location_post',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\CAMRMeterLocationController@create_meter_location_post',
        'controller' => 'App\\Http\\Controllers\\CAMRMeterLocationController@create_meter_location_post',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'CREATE_METER_LOCATION_INFO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'UPDATE_METER_LOCATION_INFO' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update_meter_location_post',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\CAMRMeterLocationController@update_meter_location_post',
        'controller' => 'App\\Http\\Controllers\\CAMRMeterLocationController@update_meter_location_post',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'UPDATE_METER_LOCATION_INFO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'MeterLocationInfo' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'meter_location_info',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\CAMRMeterLocationController@meter_location_info',
        'controller' => 'App\\Http\\Controllers\\CAMRMeterLocationController@meter_location_info',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'MeterLocationInfo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'DeleteMeterLocationInfo' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'delete_meter_location_confirmed',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\CAMRMeterLocationController@delete_meter_location_confirmed',
        'controller' => 'App\\Http\\Controllers\\CAMRMeterLocationController@delete_meter_location_confirmed',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'DeleteMeterLocationInfo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'get_ee_room_location_accordion' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'get_ee_room_location_accordion',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\CAMRMeterLocationController@get_ee_room_location_accordion',
        'controller' => 'App\\Http\\Controllers\\CAMRMeterLocationController@get_ee_room_location_accordion',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'get_ee_room_location_accordion',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'GetBuildingList' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'generate_building_list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportSettingsController@generate_building_list',
        'controller' => 'App\\Http\\Controllers\\ReportSettingsController@generate_building_list',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'GetBuildingList',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'GetMeterList' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'generate_meter_list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportSettingsController@generate_meter_list',
        'controller' => 'App\\Http\\Controllers\\ReportSettingsController@generate_meter_list',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'GetMeterList',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'SAPReport' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sap_report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\SAPReportController@sap_report',
        'controller' => 'App\\Http\\Controllers\\SAPReportController@sap_report',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'SAPReport',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generate_sap_report' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'generate_sap_report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\SAPReportController@generate_sap_report',
        'controller' => 'App\\Http\\Controllers\\SAPReportController@generate_sap_report',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generate_sap_report',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generate_sap_report_excel' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'generate_sap_report_excel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\SAPReportController@generate_sap_report_excel',
        'controller' => 'App\\Http\\Controllers\\SAPReportController@generate_sap_report_excel',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generate_sap_report_excel',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'download_offline_gateway' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'download_offline_gateway',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\OfflineReportController@download_offline_gateway',
        'controller' => 'App\\Http\\Controllers\\OfflineReportController@download_offline_gateway',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'download_offline_gateway',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'download_offline_meter' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'download_offline_meter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\OfflineReportController@download_offline_meter',
        'controller' => 'App\\Http\\Controllers\\OfflineReportController@download_offline_meter',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'download_offline_meter',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'RAWReport' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'raw_report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\RAWReportController@raw_report',
        'controller' => 'App\\Http\\Controllers\\RAWReportController@raw_report',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'RAWReport',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generate_raw_report' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'generate_raw_report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\RAWReportController@generate_raw_report',
        'controller' => 'App\\Http\\Controllers\\RAWReportController@generate_raw_report',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generate_raw_report',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generate_raw_report_excel' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'generate_raw_report_excel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\RAWReportController@generate_raw_report_excel',
        'controller' => 'App\\Http\\Controllers\\RAWReportController@generate_raw_report_excel',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generate_raw_report_excel',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'SiteReport' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site_report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\SiteReportController@site_report',
        'controller' => 'App\\Http\\Controllers\\SiteReportController@site_report',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'SiteReport',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generate_site_report' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'generate_site_report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\SiteReportController@generate_site_report',
        'controller' => 'App\\Http\\Controllers\\SiteReportController@generate_site_report',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generate_site_report',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generate_site_report_excel' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'generate_site_report_excel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\SiteReportController@generate_site_report_excel',
        'controller' => 'App\\Http\\Controllers\\SiteReportController@generate_site_report_excel',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generate_site_report_excel',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generate_site_as_built_excel' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'generate_site_as_built_excel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\SiteAsBuiltController@generate_site_as_built_excel',
        'controller' => 'App\\Http\\Controllers\\SiteAsBuiltController@generate_site_as_built_excel',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generate_site_as_built_excel',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'ConsumptionReport' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'consumption_report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\ConsumptionReportController@consumption_report',
        'controller' => 'App\\Http\\Controllers\\ConsumptionReportController@consumption_report',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'ConsumptionReport',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'consumption_report_hourly' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'generate_consumption_report/hourly',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\ConsumptionReportController@consumption_report_hourly',
        'controller' => 'App\\Http\\Controllers\\ConsumptionReportController@consumption_report_hourly',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'consumption_report_hourly',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'consumption_report_daily' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'generate_consumption_report/daily',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\ConsumptionReportController@consumption_report_daily',
        'controller' => 'App\\Http\\Controllers\\ConsumptionReportController@consumption_report_daily',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'consumption_report_daily',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'download_consumption_report' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'download_consumption_report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\ConsumptionReportController@download_consumption_report',
        'controller' => 'App\\Http\\Controllers\\ConsumptionReportController@download_consumption_report',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'download_consumption_report',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'DemandReport' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'demand_report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\DemandReportController@demand_report',
        'controller' => 'App\\Http\\Controllers\\DemandReportController@demand_report',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'DemandReport',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'demand_report_hourly' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'generate_demand_report/hourly',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\DemandReportController@demand_report_hourly',
        'controller' => 'App\\Http\\Controllers\\DemandReportController@demand_report_hourly',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'demand_report_hourly',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'demand_report_15' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'generate_demand_report/fifteen',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\DemandReportController@demand_report_15',
        'controller' => 'App\\Http\\Controllers\\DemandReportController@demand_report_15',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'demand_report_15',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'download_demand_report' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'download_demand_report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\DemandReportController@download_demand_report',
        'controller' => 'App\\Http\\Controllers\\DemandReportController@download_demand_report',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'download_demand_report',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'user' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@user',
        'controller' => 'App\\Http\\Controllers\\UserController@user',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'UserList' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user_list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@getUserList',
        'controller' => 'App\\Http\\Controllers\\UserController@getUserList',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'UserList',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'create_user_post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'create_user_post',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@create_user_post',
        'controller' => 'App\\Http\\Controllers\\UserController@create_user_post',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'create_user_post',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'getUserSiteAccess' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user_site_access',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\UserSiteAccessController@getUserSiteAccess',
        'controller' => 'App\\Http\\Controllers\\UserSiteAccessController@getUserSiteAccess',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'getUserSiteAccess',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'add_user_access_post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'add_user_access_post',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\UserSiteAccessController@add_user_access_post',
        'controller' => 'App\\Http\\Controllers\\UserSiteAccessController@add_user_access_post',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'add_user_access_post',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'company' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'company',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\CompanyController@company',
        'controller' => 'App\\Http\\Controllers\\CompanyController@company',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'company',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'CompanyList' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'company_list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\CompanyController@getCompanyList',
        'controller' => 'App\\Http\\Controllers\\CompanyController@getCompanyList',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'CompanyList',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'create_company_post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'create_company_post',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\CompanyController@create_company_post',
        'controller' => 'App\\Http\\Controllers\\CompanyController@create_company_post',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'create_company_post',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'company_info' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'company_info',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\CompanyController@company_info',
        'controller' => 'App\\Http\\Controllers\\CompanyController@company_info',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'company_info',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'update_company_post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update_company_post',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\CompanyController@update_company_post',
        'controller' => 'App\\Http\\Controllers\\CompanyController@update_company_post',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'update_company_post',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'delete_company_confirmed' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'delete_company_confirmed',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\CompanyController@delete_company_confirmed',
        'controller' => 'App\\Http\\Controllers\\CompanyController@delete_company_confirmed',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'delete_company_confirmed',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'division' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'division',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\DivisionController@division',
        'controller' => 'App\\Http\\Controllers\\DivisionController@division',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'division',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'DivisionList' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'division_list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\DivisionController@getDivisionList',
        'controller' => 'App\\Http\\Controllers\\DivisionController@getDivisionList',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'DivisionList',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'create_division_post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'create_division_post',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\DivisionController@create_division_post',
        'controller' => 'App\\Http\\Controllers\\DivisionController@create_division_post',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'create_division_post',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'division_info' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'division_info',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\DivisionController@division_info',
        'controller' => 'App\\Http\\Controllers\\DivisionController@division_info',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'division_info',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'update_division_post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update_division_post',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\DivisionController@update_division_post',
        'controller' => 'App\\Http\\Controllers\\DivisionController@update_division_post',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'update_division_post',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'delete_division_confirmed' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'delete_division_confirmed',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\DivisionController@delete_division_confirmed',
        'controller' => 'App\\Http\\Controllers\\DivisionController@delete_division_confirmed',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'delete_division_confirmed',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'user_info' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user_info',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@user_info',
        'controller' => 'App\\Http\\Controllers\\UserController@user_info',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'user_info',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'update_user_post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update_user_post',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@update_user_post',
        'controller' => 'App\\Http\\Controllers\\UserController@update_user_post',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'update_user_post',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'delete_user_confirmed' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'delete_user_confirmed',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@delete_user_confirmed',
        'controller' => 'App\\Http\\Controllers\\UserController@delete_user_confirmed',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'delete_user_confirmed',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'user_account_post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user_account_post',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@user_account_post',
        'controller' => 'App\\Http\\Controllers\\UserController@user_account_post',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'user_account_post',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'check_time' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'check_time.php',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CAMRGatewayDeviceController@check_time',
        'controller' => 'App\\Http\\Controllers\\CAMRGatewayDeviceController@check_time',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'check_time',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'csv_update_status' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'rtu/index.php/rtu/rtu_check_update/{mac}/get_update_csv',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CAMRGatewayDeviceController@csv_update_status',
        'controller' => 'App\\Http\\Controllers\\CAMRGatewayDeviceController@csv_update_status',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'csv_update_status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'csv_download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'rtu/index.php/rtu/rtu_check_update/{mac}/get_content_csv',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CAMRGatewayDeviceController@csv_download',
        'controller' => 'App\\Http\\Controllers\\CAMRGatewayDeviceController@csv_download',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'csv_download',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'csv_update_status_reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'rtu/index.php/rtu/rtu_check_update/{mac}/reset_update_csv',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CAMRGatewayDeviceController@csv_update_status_reset',
        'controller' => 'App\\Http\\Controllers\\CAMRGatewayDeviceController@csv_update_status_reset',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'csv_update_status_reset',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site_code_update_status' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'rtu/index.php/rtu/rtu_check_update/{mac}/get_update_location',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CAMRGatewayDeviceController@site_code_update_status',
        'controller' => 'App\\Http\\Controllers\\CAMRGatewayDeviceController@site_code_update_status',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'site_code_update_status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site_code_download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'rtu/index.php/rtu/rtu_check_update/{mac}/get_content_location',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CAMRGatewayDeviceController@site_code_download',
        'controller' => 'App\\Http\\Controllers\\CAMRGatewayDeviceController@site_code_download',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'site_code_download',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site_code_update_status_reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'rtu/index.php/rtu/rtu_check_update/{mac}/reset_update_location',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CAMRGatewayDeviceController@site_code_update_status_reset',
        'controller' => 'App\\Http\\Controllers\\CAMRGatewayDeviceController@site_code_update_status_reset',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'site_code_update_status_reset',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'gateway_ssh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'rtu/index.php/rtu/rtu_check_update/{mac}/rtu_remote_ssh',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CAMRGatewayDeviceController@gateway_ssh',
        'controller' => 'App\\Http\\Controllers\\CAMRGatewayDeviceController@gateway_ssh',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'gateway_ssh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'force_load_profile_status' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'rtu/index.php/rtu/rtu_check_update/{mac}/force_lp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CAMRGatewayDeviceController@force_load_profile_status',
        'controller' => 'App\\Http\\Controllers\\CAMRGatewayDeviceController@force_load_profile_status',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'force_load_profile_status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'force_load_profile_status_reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'rtu/index.php/rtu/rtu_check_update/{mac}/reset_force_lp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CAMRGatewayDeviceController@force_load_profile_status_reset',
        'controller' => 'App\\Http\\Controllers\\CAMRGatewayDeviceController@force_load_profile_status_reset',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'force_load_profile_status_reset',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'http_post_server' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'http_post_server',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CAMRGatewayDeviceController@http_post_server',
        'controller' => 'App\\Http\\Controllers\\CAMRGatewayDeviceController@http_post_server',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'http_post_server',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
  ),
)
);
