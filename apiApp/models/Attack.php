<?php

class Attack extends Model
{
    private $connection;
    protected $service;
    public $response;
    public $result;

    public function __construct()
    {
        $db = Database::getInstance();
        $this->connection = $db->getConnection();
    }

    /**
     * @param data in json
     * @return httpresponse
     */

    public function filter($data)
    {
        $obj = new Query($data);
        $query = $obj->query;
        $this->result = mysqli_query($this->connection, $query);
        $this->response = array();

        try {
            if ($this->result == false) {
                $res['body'] = "Database error. Your query makes no sense";
                $res['status'] = 400; //bad request
                return $res;
            } else
                while ($row = mysqli_fetch_assoc($this->result)) {
                    $this->response[] = $row;
                }
        } catch (Exception $e) {
            $res['body'] = "Unexpected database error";
            $res['status'] = 500; //internal server error
            return $res;
        }

        //$json = json_encode($this->response);

        $res['body'] = $this->response;
        $res['status'] = 200;
        return $res;
    }

    public function getAll()
    {
        $this->result = mysqli_query($this->connection, "SELECT * FROM DATA LIMIT 100");
        $this->response = array();

        try {
            while ($row = mysqli_fetch_assoc($this->result)) {
                $this->response[] = $row;
            }
        } catch (Exception $e) {
            $res['body'] = "Unexpected database error";
            $res['status'] = 500; //internal server error
            return $res;
        }

        $res['body'] = $this->response;
        $res['status'] = 200;
        return $res;
    }

    public function getAttack($req)
    {
        $this->result = mysqli_query($this->connection, "SELECT * FROM `data` WHERE " . key($req['params']) . "= " . $req['params']['event_id'] . " ");
        $this->response = array();

        try {
            while ($row = mysqli_fetch_assoc($this->result)) {
                $this->response[] = $row;
            }
        } catch (Exception $e) {
            $res['body'] = "Unexpected database error";
            $res['status'] = 500; //internal server error
            return $res;
        }

        if (sizeof($this->response) > 0) {
            $res['body'] = $this->response;
            $res['status'] = 200;
            return $res;
        }
        else {
            $res['body'] = "No data to show";
            $res['status'] = 404;
            return $res;
        }
    }

    public function insertAttack($data)
    {
        $result = mysqli_query($this->connection, "SELECT MAX(event_id) FROM DATA");
        if (($row = mysqli_fetch_assoc($result))) {
            $id = $row["MAX(event_id)"];
        }

        $id = intval($id) + 1;

        $sql_query = "INSERT INTO DATA(event_id, year, month, day, approximate_date, duration,
        country_code, country, region, provence, city, latitude, longitude, location, summary,
        success, suicide, attack_type, target_type, target_subtype, corp, target, target_nationality, group_name,
        group_subname, motive, gun_certain, claim, claim_mode, weapon_type, weapon_subtype, weapon_details,
        total_fatalities, us_citizens_who_died, terrorists_number) VALUES(\"" . $id .
            "\", \"" . $data['year'] . "\",\"" . $data['month'] . "\", \"" .
            $data['day'] . "\", \"" . $data['approximate_date'] . "\", \"" . $data['duration'] . "\", \"" .
            $data['country_code'] . "\", \"" . $data['country'] . "\", \"" . $data['region'] .
            "\", \"" . $data['provence'] . "\", \"" . $data['city'] . "\", \"" . $data['latitude'] .
            "\", \"" . $data['longitude'] . "\", \"" . $data['location'] . "\", \"" . $data['summary'] .
            "\", \"" . $data['success'] . "\", \"" . $data['suicide'] . "\", \"" . $data['attack_type'] .
            "\", \"" . $data['target_type'] . " \", \"" . $data['target_subtype'] . "\", \"" . $data['corp'] .
            "\", \"" . $data['target'] . "\", \"" . $data['target_nationality'] . "\", \"" . $data['group_name'] .
            "\", \"" . $data['group_subname'] . "\", \"" . $data['motive'] . "\", \"" . $data['gun_certain'] .
            "\", \"" . $data['claim'] . "\", \"" . $data['claim_mode'] . "\", \"" . $data['weapon_type'] .
            "\", \"" . $data['weapon_subtype'] . "\", \"" . $data['weapon_details'] . "\", \"" . $data['total_fatalities'] .
            "\", \"" . $data['us_citizens_who_died'] . "\", \"" . $data['terrorists_number'] .  "\")";

        $result = mysqli_query($this->connection, $sql_query);

        if ($result) {
            $res['body'] = "Attack with id " . $id . " successfully added";
            $res['status'] = 201; //created
            return $res;
        } else {
            $res['body'] = "Error occured during insert query: " . $this->connection->error;
            $res['status'] = 405;
            return $res;
        }
    }


    public function deleteAttack($param)
    {
        $this->result = mysqli_query($this->connection, "DELETE FROM DATA where event_id = " . $param['event_id']);

        if ($this->result) {
            $res['body'] = "Attack with id " . $param['event_id'] . " successfully deleted. ";
            $res['status'] = 200;
            return $res;
        } else {
            $res['body'] = "Error occured during delete query: " . $this->connection->error;
            $res['status'] = 500;
            return $res;
        }
    }


    public function updateAttack($data)
    {
        $column = $data['column'];
        $id = $data['id'];
        $newValue = $data['newValue'];

        $sql_query = "UPDATE DATA SET " . $column . " = " . " \"" . $newValue . "\" WHERE event_id =" .
            "\"" . $id . "\"";
        $this->result = mysqli_query($this->connection, $sql_query);

        if ($this->result) {
            $res['body'] = "Attack with id " . $id . " successfully updated. New value for " .
                $column . ": " . $newValue;
            $res['status'] = 200;
            return $res;
        } else {
            $res['body'] = "Error occured during update query: " . $this->connection->error;
            $res['status'] = 405;
            return $res;
        }
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