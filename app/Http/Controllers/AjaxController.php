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
      

      if(isset($_POST['offsetValue'])){
      
           $sortingType = $this->checkIfSortingTypeEmpty($_POST['id']);
           $searchResponse = $this->checkIfSearchEmpty($_POST['search']);
           $responseData = contactModel::fetchFilterData($sortingType, $_POST['offsetValue'], $searchResponse);
           $response = view('load_contact',['data'=>$responseData]);
           echo $response;
      }
      else{
           echo false;  
      }
    }


    /**
   * Function to check if search is empty or not
   * 
   */

    public function checkIfSearchEmpty($searchData){
     
      if(!empty($searchData)){

          return "(First_Name like '{$searchData}%'  or Tag1 like '{$searchData}%' or Tag2 like '{$searchData}%' or Tag3 like '{$searchData}%' or Tag4 like '{$searchData}%' or Tag5 like '{$searchData}%'or Tag6 like '{$searchData}%' or Tag7 like '{$searchData}%' or Tag8 like '{$searchData}%' or Job1_Company like '{$searchData}%')";

      }
      else{
          return false;
      }   
   
    }

  /**
   * Function to check if search is empty or not
   * 
   */
      public function checkIfSortingTypeEmpty($sortingType){

          if(!empty($sortingType)){
              
              if($sortingType == '1'){
                  
                  $sorting = 'ASC';
              
              }
              elseif ($sortingType == '2' ) {
                
                  $sorting = 'DESC';

              }
              else{
                  
                  $sorting = '';
              }

              return "First_Name order by First_Name $sorting";

          }
          else{
              return false;
          }   

      }
   

}
