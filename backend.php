<?php

require_once('helper/SimpleXLSX.php');
require_once('connection.php');
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
           // echo "<br><pre> iteration: $iteration";
            global $mysqli;
            if ($iteration && $iteration > 0) {
                $row = $rowData;
                $count = count($row);

                if (!empty($row) && $count) {
			
				//echo "<br>". 
				$sql = "INSERT into contacts SET  Name = '".mysqli_real_escape_string($mysqli, $row[0])."', First_Name = '".mysqli_real_escape_string($mysqli, $row[1])."', Birthdate = '".mysqli_real_escape_string($mysqli, $row[2])."', Age = '".mysqli_real_escape_string($mysqli, $row[3])."', Astrological_Sign = '".mysqli_real_escape_string($mysqli, $row[4])."', Place_Of_Birth = '".mysqli_real_escape_string($mysqli, $row[5])."', PhoneNumber1 = '".mysqli_real_escape_string($mysqli, $row[6])."', PhoneNumber2 = '".mysqli_real_escape_string($mysqli, $row[7])."', Email1 = '".mysqli_real_escape_string($mysqli, $row[8])."', Email2 = '".mysqli_real_escape_string($mysqli, $row[9])."', Father = '".mysqli_real_escape_string($mysqli, $row[10])."', Mother = '".mysqli_real_escape_string($mysqli, $row[11])."', Sister1 = '".mysqli_real_escape_string($mysqli, $row[12])."', Sister2 = '".mysqli_real_escape_string($mysqli, $row[13])."', Brother1 = '".mysqli_real_escape_string($mysqli, $row[14])."', Brother2 = '".mysqli_real_escape_string($mysqli, $row[15])."', Study1_Start = '".mysqli_real_escape_string($mysqli, $row[16])."', Study1_End = '".mysqli_real_escape_string($mysqli, $row[17])."', Study1_Title = '".mysqli_real_escape_string($mysqli, $row[18])."', Study1_University = '".mysqli_real_escape_string($mysqli, $row[19])."', Study2_Start = '".mysqli_real_escape_string($mysqli, $row[20])."', Study2_End = '".mysqli_real_escape_string($mysqli, $row[21])."', Study2_Title = '".mysqli_real_escape_string($mysqli, $row[22])."', Study2_University = '".mysqli_real_escape_string($mysqli, $row[23])."', Job1_Start = '".mysqli_real_escape_string($mysqli, $row[24])."', Job1_End = '".mysqli_real_escape_string($mysqli, $row[25])."', Job1_Title = '".mysqli_real_escape_string($mysqli, $row[26])."', Job1_Company = '".mysqli_real_escape_string($mysqli, $row[27])."', Job1_City = '".mysqli_real_escape_string($mysqli, $row[28])."', Tag1 = '".mysqli_real_escape_string($mysqli, $row[29])."', Tag2 = '".mysqli_real_escape_string($mysqli, $row[30])."', Tag3 = '".mysqli_real_escape_string($mysqli, $row[31])."', Tag4 = '".mysqli_real_escape_string($mysqli, $row[32])."', Tag5 = '".mysqli_real_escape_string($mysqli, $row[33])."', Tag6 = '".mysqli_real_escape_string($mysqli, $row[34])."', Tag7 = '".mysqli_real_escape_string($mysqli, $row[35])."', Tag8 = '".mysqli_real_escape_string($mysqli, $row[36])."';";
					$res = RunQuery($sql);
                }
             }
        });
//echo "All processing done!!";
    }  
}
?>