<?php

/**
 * Class Query
 * @author Calin Irina
 */

 class Query {

    public $query;
    public $columns;

    public function __construct($data) {     
        $select_arr = array();
        $where_arr = array();
        $group_arr = array();
        
        $select_arr = $data["select"];
        $where_arr = $data["where"];
        $group_arr = $data["groupBy"];
        $limit = $data["limit"];
        

        $select = array();
        $where_columns = array();
        $where_operators = array();
        $where_values = array();
        $where = array();
        $group = array();
        
        for($index=0;$index<count($select_arr);$index++)
            array_push($select, $select_arr[$index]["column"]);
        
        for($index=0;$index<count($where_arr);$index++)
            array_push($where_columns, $where_arr[$index]["column"]);
        
        for($index=0;$index<count($where_arr);$index++)
            array_push($where_operators, $where_arr[$index]["operator"]);
        
        for($index=0;$index<count($where_arr);$index++)
            array_push($where_values, $where_arr[$index]["value"]);
        
        for($index=0;$index<count($group_arr);$index++)
            array_push($group, $group_arr[$index]["column"]);
        
        for($index=0;$index<count($where_arr);$index++)
            {
                $str = $where_columns[$index] . " " . $where_operators[$index] . " " . $where_values[$index];
                array_push($where, $str);
            }

        $this->columns = $select;

        $select_expr = implode(', ', $select);
        $where_expr = implode(' and ', $where);
        $group_expr = implode(', ', $group);
        
        $optional = "";
        $optional2 = "";
        
        $mandatory = "SELECT " . $select_expr . " FROM DATA ";
        if($where_expr!=null)
            $optional = " WHERE " . $where_expr;
        if($group_expr!=null)
            $optional2 = " GROUP BY " . $group_expr;
        
        $this->query = $mandatory . $optional  . $optional2 . " ORDER BY 2 DESC LIMIT " . $limit;

        // echo $this->query;
    }
}

?>