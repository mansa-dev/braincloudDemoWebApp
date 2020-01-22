<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class contactModel extends Model
{
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

     /**
     * This function will get all the data from table contact. Firstly only 50 recods will be Fetched.
     * 
     */

    public static function fetchContactsData($offset){
        
	    return DB::table('dataset_contacts_3_Feuil1')->offset($offset)->limit(50)->get();
    
    }

     /**
     * This function will get the data from filters.
     * 
     */

     public static function fetchFilterData($sortingType, $offsetValue, $searchedData, $filterSearchData, $jobResponse){

        


	       if(!empty($searchedData) || !empty($filterSearchData) || !empty($jobResponse)){
	       	  $where = "where ";
	       }
	       else{
	       	  $where = "";
	       }
        
        $subQuery =  "$jobResponse $filterSearchData $searchedData $sortingType";
        $filteredSubQuery  = ltrim(trim($subQuery),"OR");
		$sqlQuery = "SELECT * FROM dataset_contacts_3_Feuil1 $where $filteredSubQuery LIMIT 50 OFFSET $offsetValue";
      
     
		return DB::select(DB::raw($sqlQuery));
     	 
    }



}
