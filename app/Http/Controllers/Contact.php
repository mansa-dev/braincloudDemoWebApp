<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contactModel;


class Contact extends Controller
{
    
	/**
	* This function runs when the website url calls.
	* 
	*/
    public function index(){
        
        $responseData = contactModel::fetchContactsData(0);
    	return view('contact',['data'=>$responseData]);
    
    }
	 


}
