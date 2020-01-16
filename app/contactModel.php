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

     public static function fetchFilterData($sortingType, $offsetValue, $searchedData){

	       if(!empty($searchedData) || !empty($offsetValue)){
	       	  $where = "where";
	       }
	       else{
	       	  $where = "";
	       }
       
		$sqlQuery = "SELECT * FROM contacts $where $searchedData $sortingType LIMIT 10 OFFSET $offsetValue";
		return DB::select(DB::raw($sqlQuery));
     	 
     }
}
