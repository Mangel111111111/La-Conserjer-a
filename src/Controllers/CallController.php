<?php

    namespace App\Controllers;

    use App\Models\Call;
    use App\Core\View;

    class CallController {

        public function __construct(){

            
            if(isset($_GET["action"]) && ($_GET["action"]) == "create") {
                $this->create();
                return;
            }
            
            if(isset($_GET["action"]) && ($_GET["action"]) == "delete"){
                $this->delete($_GET["id"]);
                return;
            }

            if(isset($_GET["action"]) && ($_GET["action"]) == "store"){
                $this->store($_POST);
                return;
            }

            if(isset($_GET["action"]) && ($_GET["action"]) == "update"){
                $this->update($_GET["id"]);
                return;
            }
            if(isset($_GET["action"]) && ($_GET["action"]) == "updateSQL"){
                $this->updateSQL($_POST, $_GET["id"]);
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

            $newCall = new Call(null, $request["room"], $request["issue"], $request["dateTime"]);
            $newCall->save();

            header("Location: ./index.php");
            exit();

            
        }
        
        public function delete($id){
            $callDelete = new Call;
            $call = $callDelete->findById($id);
            $call ->destroy();

            header("Location: ./index.php");
            exit();

        }

        public function create() {

            new View("callCreate");

        }

        public function update($id) {

            $callUpdate = new Call;
            $call = $callUpdate->findById($id);

            new View("callUpdate", ["call" => $call]);


        }

        public function updateSQL(array $request, $id) {
            $updateCall = new Call( $id, $request["room"], $request["issue"], $request["dateTime"]);
            $updateCall->update();
            
            header("Location: ./index.php");
            exit();

        }
    }


