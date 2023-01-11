<?php
include('class/database.php');
class Details extends database
{
    public function showDetails()
    {

        $sql = "SELECT * from data_tbl";
        $res = mysqli_query($this->link, $sql);
        $arr = array();
        if (mysqli_num_rows($res) > 0) {
            foreach ($res as $row) {
                $arr[] = $row;
            }
            return json_encode($arr);
        } else {
            return false;
        }
    }
}
$obj = new Details;
echo $obj->showDetails();