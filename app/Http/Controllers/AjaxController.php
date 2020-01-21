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

    public function index()
    {

        $responseData = contactModel::fetchContactsData($_GET['id']);
        $response = view('load_contact', ['data' => $responseData]);
        echo $response;
    }

    /**
     * Function to load Grid data
     *
     */

    public function loadGridData()
    {
        // var_dump('fsdfsdf'); die;
        $responseData = contactModel::fetchContactsData($_GET['id']);
        $zoomLevel = !empty($_GET['zoomLevel']) ? $_GET['zoomLevel'] : false;
        $response = view('load_contact_grid', ['data' => $responseData, 'zoomLevel' => $zoomLevel]);

        echo $response;
    }

    /**
     * Function to load data on filter
     *
     */

    public function loadNameFilterData()
    {

        if (isset($_GET['offsetValue']))
        {

            $id = isset($_GET['id']) ? $_GET['id'] : '';
            $sortingType = $this->checkIfSortingTypeEmpty($id);
            $functionSearch = isset($_GET['functionsearchData']) ? $_GET['functionsearchData'] : '';

            $filterSearchData = $this->checkIfSearchEmpty($functionSearch);
            $searchResponse = $this->checkIfSearchEmpty($_GET['search']);
            $gridData = isset($_GET['gridSelectedData']) ? $_GET['gridSelectedData'] : '';
            $jobResponse = $this->checkIfJobTitleEmpty($gridData);
            $selectData = isset($_GET['selectedData']) ? $_GET['selectedData'] : '';
            $nameSelect = $this->checkIfNameEmpty($selectData);

            $responseData = contactModel::fetchFilterData($sortingType, $_GET['offsetValue'], $searchResponse, $nameSelect, $filterSearchData, $jobResponse);
            $response = view('load_contact', ['data' => $responseData]);

            echo "$response";
        }
        else
        {
            echo false;
        }
    }

    /**
     * Function to load data on filter
     *
     */

    public function loadNameFilterGrid()
    {

        if (isset($_GET['offsetValue']))
        {
            $id = isset($_GET['id']) ? $_GET['id'] : '';
            $sortingType = $this->checkIfSortingTypeEmpty($id);
            $functionSearch = isset($_GET['functionsearchData']) ? $_GET['functionsearchData'] : '';
            $filterSearchData = $this->checkIfSearchEmpty($functionSearch);
            $gridData = isset($_GET['gridSelectedData']) ? $_GET['gridSelectedData'] : '';
            $jobResponse = $this->checkIfJobTitleEmpty($gridData);
            $searchResponse = $this->checkIfSearchEmpty($_GET['search']);
            $selectData = isset($_GET['selectedData']) ? $_GET['selectedData'] : '';
            $tagSearch = $this->checkIfNameEmpty($selectData);
            $responseData = contactModel::fetchFilterData($sortingType, $_GET['offsetValue'], $searchResponse, $tagSearch, $filterSearchData, $jobResponse);

            $zoomLevel = !empty($_GET['zoomLevel']) ? $_GET['zoomLevel'] : false;
            $response = view('load_contact_grid', ['data' => $responseData, 'zoomLevel' => $zoomLevel]);

            echo $response;
        }
        else
        {
            echo false;
        }
    }

    /**
     * Function to check if search is empty or not
     *
     */

    public function checkIfSearchEmpty($searchData)
    {

        if (!empty($searchData))
        {

            return "OR (First_Name like '{$searchData}%')";

        }
        else
        {
            return false;
        }

    }

    /**
     * Function to check if search is empty or not
     *
     */
    public function checkIfSortingTypeEmpty($sortingType)
    {

        if (!empty($sortingType))
        {

            if ($sortingType == '1')
            {

                $sorting = 'ASC';

            }
            elseif ($sortingType == '2')
            {

                $sorting = 'DESC';

            }
            else
            {

                $sorting = '';
            }

            if (!empty($sorting))
            {

                return "order by First_Name $sorting";

            }
            else
            {

                return false;
            }

        }
        else
        {
            return false;
        }

    }

    public function checkIfNameEmpty($nameArray)
    {
        if (!empty($nameArray))
        {
          $names = $this->arrayToStringConversion($nameArray);
          if(!empty($names))
          {
            return "First_Name IN ($names)";
          }
          else
          {
            return false; 
          }

        }
        else
        {
            return false;
        }
    }
    /**
     * Function to check if tags are empt or not
     *
     */

    public function checkIfTitleEmpty($titileArray)
    {

        if (!empty($titileArray))
        {

            $titleValue = "'" . implode("','", $titileArray) . "'";
            if (!empty($titleValue))
            {

                return "Tag1 IN ($titleValue) or Tag2 IN ($titleValue) or Tag3 IN ($titleValue) or Tag4 IN ($titleValue) or Tag5 IN ($titleValue) or Tag6 IN ($titleValue) or Tag7 IN ($titleValue) or Tag8 IN ($titleValue)";

            }
            else
            {

                return false;

            }

        }
        else
        {

            return false;

        }

    }

    /**
     * Function to check get the jobtitle
     *
     */

    public function checkIfJobTitleEmpty($jobTitleArray)
    {
        // var_dump($jobTitleArray); die;
        if (!empty($jobTitleArray))
        {

            $jobValue = "'" . implode("','", $jobTitleArray) . "'";
            if (!empty($jobValue))
            {

                return "OR (Job1_Title IN ($jobValue))";

            }
            else
            {

                return false;

            }

        }
        else
        {

            return false;

        }

    }

    /**
     * Function to break the array into comma separated value.
     *
     */

    public function arrayToStringConversion($arrayInfo)
    {

        if (!empty($arrayInfo))
        {
            return "'" . implode("','", $arrayInfo) . "'";
        }
        else
        {
            return false;
        }
    }

}

