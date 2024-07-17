<?php

namespace App\Http\Controllers;
use App\Models\DeviceId;

use Illuminate\Http\Request;

class DeviceIdController extends Controller
{
    //add Device_Id
    function addDeviceId(Request $req)
    {
        $add = new DeviceId;
        $add->device_id=$req->device_id;
        $result=$add->save();
        if($result)
    { 
    return ["Success"=>True,"Msg"=>"Device Id is Added",];
    }
    else{
    return["Success"=>False,"Msg"=>"Something went wrong"];   
    }
    }
}
