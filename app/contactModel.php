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
        
	    return DB::table('contacts')->offset($offset)->limit(50)->get();
    
    }

     /**
     * This function will get the data from filters.
     * 
     */

     public static function fetchFilterData($sortingType, $offsetValue, $searchedData, $tagSearch, $filterSearchData, $jobResponse){

        


	       if(!empty($searchedData) || !empty($tagSearch) || !empty($filterSearchData) || !empty($jobResponse)){
	       	  $where = "where 1=1";
	       }
	       else{
	       	  $where = "";
	       }

       
		$sqlQuery = "SELECT * FROM contacts $where $tagSearch $jobResponse $filterSearchData $searchedData $sortingType LIMIT 50 OFFSET $offsetValue";

		return DB::select(DB::raw($sqlQuery));
     	 
     }



}
