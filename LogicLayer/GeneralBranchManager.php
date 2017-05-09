<?php
require_once("DataLayer/DB.php");
require_once("GeneralBranch.php");

class GeneralBranchManager
{
    public static function getGeneralBranches(){
        $db=new DB();
        $result = $db->getDataTable("select name,ID from generalbranch order by ID");
        $generalBranches = array();
        while($row=$result->fetch_assoc()){
            $generalBranchObj = new GeneralBranch($row["name"],$row["ID"]);
            array_push($generalBranches, $generalBranchObj);
        }
        return $generalBranches;
    }
}
?>