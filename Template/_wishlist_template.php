<?php
     if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        if (isset($_POST['delete-wishlist-submit'])){
            $deletedrecord = $Cart->deleteWishlist($_POST['item_id'], 'wishlist');
        }

        if(isset($_POST["cart-submit"])){
            //call method add to cart
            $Cart->saveForLater($_POST['item_id'], 'cart', 'wishlist');        }
    }
  ?>
  
  <!-- Shopping Card -->
  <section id="card" class="py-3">
      <div class="container-fluid w-75">
          <h5 class="font-baloo font-size-20">Wishlist</h5>

          <!-- Shopping Card Items -->
          <div class="row">
              <div class="col-sm-9">
                <?php
                    
                    foreach($product->getData('wishlist') as $item):
                        $cart = $product->getProducts($item['item_id']);
                        $subTotal[] = array_map(function($item){
                ?>
                  <!-- card item -->
                  <div class="row border-top py-3 mt-3">
                      <div class="col-sm-2">
                          <img src="<?php echo $item['item_image']?? "./assets/products/1.png" ?>" style="height: 120px" alt="card1" class="img-fluid" />
                      </div>
                      <div class="col-sm-8">
                          <h5 class="font-baloo font-size-20"><?php echo $item['item_name']?? "Unknown" ?></h5>
                          <small>By <?php echo $item['item_brand']?? "Brand"?>"</small>
                          <div class="d-flex">
                              <!-- Product Rating -->
                              <div class="rating text-warning font-size-12">
                                  <span><i class="fas fa-star"></i></span>
                                  <span><i class="fas fa-star"></i></span>
                                  <span><i class="fas fa-star"></i></span>
                                  <span><i class="fas fa-star"></i></span>
                                  <span><i class="far fa-star"></i></span>
                              </div>
                              <a href="#" class="px-2 font-rale font-size-14">20,534 ratings</a>
                              <!-- !Product Rating -->

                              <!-- Product Qty -->
                              <div class="qty d-flex pt-2 flex-wrap">
                                  
                                    <form method="post">
                                        <input type="hidden" value="<?php echo $item['item_id'] ?? 0; ?>" name="item_id">
                                        <button type="submit" name="delete-wishlist-submit" class="btn font-baloo text-danger pl-0 pr-3 border-right">Delete</button>
                                    </form>
                                    <form method="post">
                                        <input type="hidden" value="<?php echo $item['item_id'] ?? 0; ?>" name="item_id">
                                        <button type="submit" name="cart-submit" class="btn font-baloo text-danger">Add to Cart</button>
                                    </form>
                                      
                              </div>
                              <!-- !Product Qty -->
                          </div>
                      </div>
                      <div class="col-sm-2 text-right">
                          <div class="font-size-20 text-danger font-baloo">
                              $ <span data-id="<?php echo $item['item_id'] ?? '0'; ?>" class="product_price"><?php echo $item['item_price']?? "O" ?> </span>
                          </div>
                      </div>
                  </div>
                  <!-- !card item -->
                <?php
                    return $item['item_price'];
                    }, $cart);// array map
                    endforeach;
                ?>
              </div>
          </div>
          <!-- !Shopping Card Items -->
      </div>
  </section>
  <!-- !Shopping Card -->