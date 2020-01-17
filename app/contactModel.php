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
     * This function will get all the data from table contact
     * 
     */

    public static function fetchContactsData($offset){
        
	    return DB::table('contacts')->offset($offset)->limit(10)->get();
    
    }

     /**
     * This function will get filter data
     * 
     */

     public static function fetchFilterData($sortingType, $offsetValue, $searchedData, $tagSearch, $filterSearchData, $jobResponse){

        


	       if(!empty($searchedData) || !empty($tagSearch) || !empty($filterSearchData) || !empty($jobResponse)){
	       	  $where = "where 1=1";
	       }
	       else{
	       	  $where = "";
	       }



       
		$sqlQuery = "SELECT * FROM contacts $where $tagSearch $jobResponse $filterSearchData $searchedData $sortingType LIMIT 10 OFFSET $offsetValue";

		return DB::select(DB::raw($sqlQuery));
     	 
     }



}
