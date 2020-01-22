<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class contactModel extends Model
{
    /**
     * The primary key associated with the table.
     *
     * @var string*/
    protected $table = 'dataset_contacts_3_Feuil1';
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
        
        if(empty($sortingType) || empty($offsetValue) || empty($searchedData) || empty($filterSearchData) || empty($jobResponse)){
            $finalQueryValue = '';
        }
        else{
            $finalQueryValue = $where.$filteredSubQuery;
        }
		
        $sqlQuery = "SELECT * FROM dataset_contacts_3_Feuil1 $finalQueryValue LIMIT 50 OFFSET $offsetValue";
      
     
		return DB::select(DB::raw($sqlQuery));
     	 
    }

     /**
     * This function will get the data from filters.
     * 
     */

   public static function smartSearch($search)
   {
      $sql = "SELECT * FROM dataset_contacts_3_Feuil1 WHERE Name LIKE '%".$search."%' OR 
       First_Name LIKE  '%".$search."%' OR Tag1 LIKE  '%".$search."%' OR Tag2 LIKE '%".$search."%' OR `Group` LIKE '%".$search."%' LIMIT 0, 10";
       return DB::select(DB::raw($sql)); 
   }

    /**
     * This function will get the data on the basis of ID.
     * 
     */
    public static function fetchDataOnID($id){

       $sql = "SELECT * FROM dataset_contacts_3_Feuil1 WHERE id=".$id;
       return DB::select(DB::raw($sql)); 
    
      // return DB::table('dataset_contacts_3_Feuil1')->where('id',$id)->get();
      // return DB::select(DB::raw($sql)); 
    }

}
