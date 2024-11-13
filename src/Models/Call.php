<?php

namespace App\Models;

use App\DataBase;

class Call{
    public ?int $id;
    public string $room;
    public string $issue;
    public ?string $dateTime;
    public $database;
    public $table = "problems";

    public function __construct($id=null, $room="", $issue="", $dateTime=null)
    {
        $this->id = $id;
        $this->room = $room;
        $this->issue = $issue;
        $this->dateTime = $dateTime;
        
        if(!$this->database){
            $this->database= new Database();
        }
    }
    
    public function all(){
        $query = $this->database->mysql->query("SELECT * FROM {$this->table}");
        $callArray = $query->fetchAll();
        $callList = [];

        foreach($callArray as $call){
            $callItem = new Call($call["id"],$call["room"],$call["issue"],$call["dateTime"]);
            array_push($callList, $callItem);
        }

        return $callList;
    }

    public function findById($id){
        $query = $this->database->mysql->query("SELECT * FROM {$this->table} WHERE 'Id'=($id)");
        $result = $query->fetchAll();

        return new Call($result[0]["id"], $result[1]["room"], $result[2]["issue"], $result[3]["dateTime"]);
    }
}
?>