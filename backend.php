<?php

require_once('helper/SimpleXLSX.php');

define('BASE_DIR',dirname(__FILE__));

Class Helpers{
    /**
    * Method to read the CSV file chunk wise
    */
    static function file_get_contents_chunked($file, $callback) {
        try {
            //select the correct Plugin to parse the excel attendance sheet
            $extension = pathinfo($file, PATHINFO_EXTENSION);
            if ($extension == 'xlsx') {
                $simpleXLSX = new SimpleXLSX($file);
                $xlsx = $simpleXLSX->parse($file);
            }
            // } else {
            //     $simpleXLS = new SimpleXLS($file);
            //     $xlsx = $simpleXLS->parse($file);
            // }
            $i = 0;

            foreach ($xlsx->rows() as $rows) {

                call_user_func_array($callback, array($rows, &$row, $i));
                $i++;
            }
        } catch (Exception $e) {
            trigger_error("file_get_contents_chunked::" . $e->getMessage(), E_USER_NOTICE);
            return false;
        }

        return true;
    }

    static function readExcel($filePath){

        $success = self::file_get_contents_chunked($filePath, function($rowData, &$row, $iteration) {
            echo "<pre>";
print_r($rowData);
            if ($iteration && $iteration > 1) {
                $row = $rowData;
                $count = count($row);
print_r($row);die;
                if (!empty($row) && $count) {

                    // $userData[$iteration]['email'] = $row[6]; //via GIA sheet
                    // $userData[$iteration]['name'] = $row[2];
                    // $userData[$iteration]['exists'] = 0;
                    // $userData[$iteration]['exam_language'] = $row[19]; //online exam language
                    // $userData[$iteration]['training_language'] = $row[17]; //training language
                }
                
                
            }
        });
    }  
}

Helpers::readExcel(BASE_DIR.'/dataset_contacts_2.xlsx');
?>