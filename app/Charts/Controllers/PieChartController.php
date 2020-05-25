<?php
class PieChartController {
    public $mysqli;
    public $sql;
    public $result;
    public $structure;
    public $params;
    public $value;
    public $category;

    function __construct() {
        $this->params = func_get_args();
        $this->structure = array();
    }

    public function createQuery($connection, $field) {
        $this->sql = "SELECT " . $field . " as `category`, COUNT(" . $field . ") AS `value` FROM data GROUP BY " . $field . " ORDER BY `value` DESC LIMIT 15";
        $this->result = mysqli_query($connection, $this->sql);
    }

    public function setStructure() {
        $this->structure = array();
    }

    public function doAll() {
        $index = 0;
        while ($row = mysqli_fetch_assoc($this->result))
        {
            if(!isset($structure[$row['value']]))
            {
                $structure[$index] = array();
            }
            $structure[$index]['category'] =  $row['category'];
            $structure[$index]['value'] =  intval($row['value']);
            $index = $index + 1;
        }
        mysqli_free_result($this->result);

        //encode to json
        $json = json_encode($structure);

        return $json;
    }
}
?>
