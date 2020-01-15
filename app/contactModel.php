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

    public static function fetchContactsData(){
    
	    $result = DB::table('contacts')->offset(0)->limit(15)->get();
	    return $result;
    
    }
}
