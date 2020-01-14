<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    /**
	 * Function to load the html data on ajax call
	 * 
	 */

    public function index(){
       
    	$responseData = contactModel::fetchContactsData($_POST['id']);
    	$response =  view('load_contact',['data'=>$responseData]);
    	var_dump($response); die; 
    }
}
