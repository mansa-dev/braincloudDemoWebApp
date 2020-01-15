<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contactModel;

class AjaxController extends Controller
{
    /**
	 * Function to load the html data on ajax call
	 * 
	 */

    public function index(){
       
    	$responseData = contactModel::fetchContactsData($_POST['id']);
    	$response =  view('load_contact',['data'=>$responseData]);
    	echo $response;  
    }

    /**
	 * Function to load data on filter
	 * 
	 */

    public function loadNameFilterData(){

       $sortingType = ($_POST['id'] == '1')?'desc':'asc';
       
       $responseData = contactModel::fetchFilterData($sortingType);
    }
}
