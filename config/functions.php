<?php 

    function connection($data_base_config) {

        try {
            $connection = new PDO ("mysql:host=".$data_base_config['host'].";dbname=".$data_base_config['data_base'], 
                    $data_base_config['user'], 
                    $data_base_config['password']);
            return $connection;
        }catch(PDOException $e){
            print "Error:" . $e->getMessage(). "<br/>";
            die();
        }

    }
?>