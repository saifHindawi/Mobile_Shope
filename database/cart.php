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
                    //exit();
                }
            }
        }

            // delete cart item using cart item id
            public function deleteCart($item_id = null, $table = 'cart'){
                if($item_id != null){
                    $result = $this->db->con->query("DELETE FROM {$table} WHERE item_id={$item_id}");
                    if($result){
                        header("Location:" . $_SERVER['PHP_SELF']);
                    }
                    return $result;
                }
            }

        //calculate sub total
        public function subTotal($arr){
            if(isset($arr)){
                $sum = 0;
                foreach ($arr as $item){
                    $sum += floatval($item[0]);
                }
                return sprintf('%.2f' , $sum);
            }
        }

         // get item_it of shopping cart list
        public function getCartId($cartArray = null, $key = "item_id"){
            if ($cartArray != null){
                $cart_id = array_map(function ($value) use($key){
                    return $value[$key];
                }, $cartArray);
                return $cart_id;
            }
        }

         // delete wishlist item using cart item id
         public function deleteWishlist($item_id = null, $table = 'wishlist'){
            if($item_id != null){
                $result = $this->db->con->query("DELETE FROM {$table} WHERE item_id={$item_id}");
                if($result){
                    header("Location:" . $_SERVER['PHP_SELF']);
                }
                return $result;
            }
        }

    // Save for later
    public function saveForLater($item_id = null, $saveTable = "wishlist", $fromTable = "cart"){
        if ($item_id != null){
            $query = "INSERT INTO {$saveTable} SELECT * FROM {$fromTable} WHERE item_id={$item_id};";
            $query .= "DELETE FROM {$fromTable} WHERE item_id={$item_id};";

            // execute multiple query
            $result = $this->db->con->multi_query($query);

            if($result){
                header("Location :" . $_SERVER['PHP_SELF']);
            }
            return $result;
        }
    }
}
?> 