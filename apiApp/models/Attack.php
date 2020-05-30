<?php

class Attack extends Model {
    private $connection;
    protected $service;
    protected $valid_parameters = "event_id summary success suicide attack_type location year month day
        approximate_date duration country country_code region provence city latitude longitude corp group_name
        group_subname motive gun_certain terrorists_number claim claim_mode target_type target_subtype
        target target_nationality weapon_type weapon_subtype weapon_details total_fatalities us_citizens_who_died";
    public $response;
    public $result;

    public function __construct() {
        $db = Database::getInstance();
        $this->connection = $db->getConnection();
    }

    public function create($data) {

    }

    public function read($params, $values) {

    }

    /**
     * @param data in json
     * @return httpresponse
     */

    public function filter($data) {
        $obj = new Query($data);
        $query = $obj->query;
        $this->result = mysqli_query($this->connection, $query);
        $this->response = array();

        try {
            if($this->result == false)
            {
                $res['body'] = "Database error. Your query makes no sense";
                $res['status'] = 400; //bad request
                return $res;
            }
            else
                while ($row = mysqli_fetch_assoc($this->result))
                {
                    $this->response[] = $row;
                }
        } catch (Exception $e) {
            $res['body'] = "Unexpected database error";
            $res['status'] = 500; //internal server error
            return $res;
        }

        $json = json_encode($this->response);

        $res['body'] = $json;
        $res['status'] = 200;
        return $res;
    }
}

/*
json structure: 

$json = '{
    "select":
        [{
            "column":"country"
        },
        {   
            "column":"year"
        },
        {
            "column":"attack_type"
        }],
    "where":
        [{
            "column":"country",
            "operator":"=",
            "value":"Pakistan"
        },
        {
            "column":"year",
            "operator":">",
            "value":"2005"
        },
        {
            "column":"success",
            "operator":"=",
            "value":"0"
        }],
    "groupBy":
        [{
            "column":"country"
        },
        {
            "column":"year"
        }]
}';


*/