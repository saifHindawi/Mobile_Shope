<?php 

    class cart{
        public $db = null;
        public function __construct(DBController $db){
            if (!isset($db->con)) return null; 
            $this->db = $db; 
        }

        //insert into cart table
        public function insertIntoCart($params = null, $table = "cart"){
            if($this->db->con != null){
                if($params != null){
                    $columns = implode(", ", array_keys($params));
                    //print_r($columns);
                    $values = implode(", ", array_values($params));
                    //print_r($values);

                    //creat sql query
                    $query_string = sprintf("INSERT INTO %s(%s) VALUES(%s)", $table, $columns, $values);

                    //excute query
                    $result = $this->db->con->query($query_string);
                    return $result;
                }
            }
        }

        //to get user_id and item_id and insert into table
        public function addToCart($userID, $itemID){
            if(isset($userID) && isset($itemID)){
                $params = array(
                    "user_id" => $userID,
                    "item_id" => $itemID,
                );
                $result = $this->insertIntoCart($params);
                if($result){
                    //reload the page
                    header("Location".$_SERVER["PHP_SELF"]);
                    exit();
                }
            }
        }
}
?> 