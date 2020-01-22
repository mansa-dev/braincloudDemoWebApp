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

            $functionSearch = isset($_GET['functionsearchData']) ? $_GET['functionsearchData'] : '';
            // $filterSearchData = $this->checkIfSearchEmpty($functionSearch, $lastName, $name);
            $gridData = isset($_GET['gridSelectedData']) ? $_GET['gridSelectedData'] : '';
            $jobResponse = $this->checkIfJobTitleEmpty($gridData);
            $lastNameSearch = isset($_GET['lastSearch']) ? $_GET['lastSearch'] : '';
            $selectBoxFilter = isset($_GET['selectedData']) ? $_GET['selectedData'] : '';
            $selectData = $this->mergedSearchData($selectBoxFilter, $_GET['tagFilterSearch']);
            $groupNameSearch = isset($_GET['groupNameSearch']) ? $_GET['groupNameSearch'] : '';
            $companyTitle = isset($_GET['companyTileDetails']) ? $_GET['companyTileDetails'] : '';
            $filteredCompanyValue = $this->arrayToStringConversion($companyTitle);

            $networkOrder = isset($_GET['networkOrder']) ? $_GET['networkOrder'] : '';
            $gender = isset($_GET['gender']) ? $_GET['gender'] : '';
            $todoSearch = isset($_GET['todoSearch']) ? $_GET['todoSearch'] : '';

            $minValue = isset($_GET['minAgeValue']) ? $_GET['minAgeValue'] : '';
            $maxValue = isset($_GET['maxAgeValue']) ? $_GET['maxAgeValue'] : '';

            $searchResponse = $this->checkIfSearchEmpty($functionSearch, $lastNameSearch, $_GET['search'], $selectData, $groupNameSearch, $filteredCompanyValue, $gender, $todoSearch, $minValue, $maxValue);
            $selectData = isset($_GET['selectedData']) ? $_GET['selectedData'] : '';
            $tagSearch = $this->checkIfNameEmpty($selectData);
            $tagOrder = isset($_GET['tagOrderFilter']) ? $_GET['tagOrderFilter'] : '';
            $groupNameSearch = isset($_GET['groupNameSearch']) ? $_GET['groupNameSearch'] : '';
            $ageOrderFilter = isset($_GET['ageOrderFilter']) ? $_GET['ageOrderFilter'] : '';

            $lastNameFilter = isset($_GET['lastNameOrderFilter']) ? $_GET['lastNameOrderFilter'] : '';
            $sortingType = $this->checkIfSortingTypeEmpty($id, $lastNameFilter, $tagOrder, $networkOrder, $ageOrderFilter);

            $tagOrder = isset($_GET['tagOrderFilter']) ? $_GET['tagOrderFilter'] : '';
            $responseData = contactModel::fetchFilterData($sortingType, $_GET['offsetValue'], $searchResponse, $tagSearch, $jobResponse, $selectData);

            $zoomLevel = !empty($_GET['zoomLevel']) ? $_GET['zoomLevel'] : false;

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

            $functionSearch = isset($_GET['functionsearchData']) ? $_GET['functionsearchData'] : '';
            // $filterSearchData = $this->checkIfSearchEmpty($functionSearch, $lastName, $name);
            $gridData = isset($_GET['gridSelectedData']) ? $_GET['gridSelectedData'] : '';
            $jobResponse = $this->checkIfJobTitleEmpty($gridData);
            $lastNameSearch = isset($_GET['lastSearch']) ? $_GET['lastSearch'] : '';
            $groupNameSearch = isset($_GET['groupNameSearch']) ? $_GET['groupNameSearch'] : '';
            $selectBoxFilter = isset($_GET['selectedData']) ? $_GET['selectedData'] : '';
            $selectData = $this->mergedSearchData($selectBoxFilter, $_GET['tagFilterSearch']);
            $companyTitle = isset($_GET['companyTileDetails']) ? $_GET['companyTileDetails'] : '';
            $filteredCompanyValue = $this->arrayToStringConversion($companyTitle);
            $gender = isset($_GET['gender']) ? $_GET['gender'] : '';
            $todoSearch = isset($_GET['todoSearch']) ? $_GET['todoSearch'] : '';
            $minValue = isset($_GET['minAgeValue']) ? $_GET['minAgeValue'] : '';
            $maxValue = isset($_GET['maxAgeValue']) ? $_GET['maxAgeValue'] : '';

            $searchResponse = $this->checkIfSearchEmpty($functionSearch, $lastNameSearch, $_GET['search'], $selectData, $groupNameSearch, $filteredCompanyValue, $gender, $todoSearch, $minValue, $maxValue);
            $selectData = isset($_GET['selectedData']) ? $_GET['selectedData'] : '';
            $tagSearch = $this->checkIfNameEmpty($selectData);
            $tagOrder = isset($_GET['tagOrderFilter']) ? $_GET['tagOrderFilter'] : '';

            $networkOrder = isset($_GET['networkOrder']) ? $_GET['networkOrder'] : '';

            $ageOrderFilter = isset($_GET['ageOrderFilter']) ? $_GET['ageOrderFilter'] : '';
            $lastNameFilter = isset($_GET['lastNameOrderFilter']) ? $_GET['lastNameOrderFilter'] : '';

            $sortingType = $this->checkIfSortingTypeEmpty($id, $lastNameFilter, $tagOrder, $networkOrder, $ageOrderFilter);

            $tagOrder = isset($_GET['tagOrderFilter']) ? $_GET['tagOrderFilter'] : '';

            $responseData = contactModel::fetchFilterData($sortingType, $_GET['offsetValue'], $searchResponse, $tagSearch, $jobResponse, $selectData);

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

    public function checkIfSearchEmpty($functionData, $lastSearch, $searchName, $tagData, $groupNameSearch, $company, $gender, $todoSearch)
    {

        if (!empty($functionData) || !empty($lastSearch) || !empty($tagData) || !empty($searchName) || !empty($groupNameSearch) || !empty($company) || !empty($gender) || $todoSearch)
        {
            return "OR First_Name like '$searchName' or Name like '$lastSearch' or Tag1 IN ($tagData) or Tag2 IN ($tagData) or Tag3 IN ($tagData) or Tag4 IN ($tagData) or Tag5 IN ($tagData) or Tag6 IN ($tagData) or Tag7 IN ($tagData) or Tag6 IN ($tagData) or `Group` like '$groupNameSearch' or Job1_Company IN ($company) or Gender like '$gender' or  `To Do` LIKE '$todoSearch'";
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
    public function checkIfSortingTypeEmpty($sortingType, $lastNameOrder, $tagOrder, $networkOrder)
    {

        if (!empty($sortingType) || !empty($lastNameOrder) || !empty($tagOrder) || !empty($networkOrder))
        {

            $sorting = $this->fetchOrderDetails($sortingType);
            if (!empty($sorting))
            {
                $firstNameOrder = "First_Name $sorting";
            }
            else
            {
                $firstNameOrder = '';
            }

            $lastNameSorting = $this->fetchOrderDetails($lastNameOrder);
            if (!empty($lastNameOrder))
            {
                $lastNameOrder = ",Name $lastNameSorting";
            }
            else
            {
                $lastNameOrder = '';
            }

            $tagFilterOrder = $this->fetchOrderDetails($tagOrder);
            if (!empty($tagFilterOrder))
            {
                $tagFilterOrder = ",Tag1 $tagFilterOrder, Tag2 $tagFilterOrder, Tag3 $tagFilterOrder";
            }
            else
            {
                $tagFilterOrder = '';
            }

            $networkOrder = $this->fetchOrderDetails($networkOrder);
            if (!empty($networkOrder))
            {
                $networkOrder = ",Network $networkOrder";
            }
            else
            {
                $networkOrder = '';
            }

            $concatinateOrder = $firstNameOrder . $lastNameOrder . $tagFilterOrder . $networkOrder;
            $filteredOrderedValue = ltrim(trim($concatinateOrder) , ",");
            return "order by $filteredOrderedValue";

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
            if (!empty($names))
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
            return "''";
        }
    }

    /**
     * Function to get the order asc or desc
     *
     */

    public function fetchOrderDetails($sortingType)
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

        return $sorting;
    }
    /**
     * Function  merge serach text box and selected box array
     *
     */
    function mergedSearchData($selectBoxData, $searchBoxData)
    {

        $arrayInfo = array();
        if (!empty($selectBoxData))
        {
            foreach ($selectBoxData as $value)
            {
                $arrayInfo[] = str_replace('#', '', $value);
            }
        }

        $searchedArray = array(
            $searchBoxData
        );

        $finalArray = array_merge($searchedArray, $arrayInfo);

        return $this->arrayToStringConversion($finalArray);

    }

    /**
     * Function  get data and show suggestion list
     *
     */
    function smartSearch(Request $request)
    {

        $data = contactModel::smartSearch($request->search);

        $result = json_encode($data);
        echo $result;

    }

    /**
     * Function  get data and show result on smart search
     *
     */

    function gettingResult(Request $request)
    {
        $responseData = contactModel::smartSearch($request->search);
        $zoomLevel = !empty($_GET['zoomLevel']) ? $_GET['zoomLevel'] : false;
        $response = view($request->view, ['data' => $responseData, 'zoomLevel' => $zoomLevel]);
        echo $response;
    }

}

