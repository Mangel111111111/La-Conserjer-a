<?php
namespace App\Models;
use App\DataBase;
class Call{
    public ?int $id;
    public string $room;
    public string $issue;
    public ?string $dateTime;
    public $database;
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
}
?>