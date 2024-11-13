<?php

    namespace App\Controllers;

    use App\Models\Call;
    use App\Core\View;

    class CallController {

        public function __construct(){

            
            if(isset($_GET["action"]) && (isset($_GET["action"]) == "create")) {
                $this->create();
                return;
            }
            
            if(isset($_GET["action"]) && (isset($_GET["action"]) == "delete")){
                $this->delete($_GET["id"]);
                return;
            }

            if(isset($_GET["action"]) && (isset($_GET["action"]) == "store")){
                $this->store($_POST);
                return;
            }
            
            

            $this->index();
        }

        public function index(){
           $call = new Call;
           $calls = $call->all();
           new View("callList", ["call" => $calls]);
        }

        public function store(array $request){
            $newCall = new Call(null, $request["room"], $request["issue"], null);
            $newCall->save();
            $this->index();
        }
        
        public function delete($id){
            $callDelete = new Call;
            $call = $callDelete->findById($id);
            $call ->destroy();
            $this ->index();
        }

        public function create() {
            new View("callCreate");
        }
    }

?>