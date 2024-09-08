  <!-- Shopping Card -->
  <section id="card" class="py-3">
      <div class="container-fluid w-75">
          <h5 class="font-baloo font-size-20">Shopping Card</h5>

          <!-- Shopping Card Items -->
          <div class="row">
              <div class="col-sm-9">
                  <!-- card item -->
                  <div class="row border-top py-3 mt-3">
                      <div class="col-sm-2">
                          <img src="./assets/products/1.png" style="height: 120px" alt="card1" class="img-fluid" />
                      </div>
                      <div class="col-sm-8">
                          <h5 class="font-baloo font-size-20">Samsung Galaxy 10</h5>
                          <small>By Samsung</small>
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
                                  <div class="d-flex font-rale" style="">
                                      <button class="qty-up border bg-light" data-id="pro1">
                                          <i class="fas fa-angle-up"></i>
                                      </button>
                                      <input data-id="pro1" type="text" class="qty-input border px-2 w-100 bg-light"
                                          readonly />
                                      <button data-id="pro1" class="qty-down border bg-light">
                                          <i class="fas fa-angle-down"></i>
                                      </button>
                                  </div>
                                  <div class="d-flex justify-content-around w-70 mt-2">
                                      <button type="submit" class="btn font-baloo text-danger px-3 border-right">
                                          Delete
                                      </button>
                                      <button type="submit" class="btn font-baloo text-danger">
                                          Save for Later
                                      </button>
                                  </div>
                              </div>
                              <!-- !Product Qty -->
                          </div>
                      </div>
                      <div class="col-sm-2 text-right">
                          <div class="font-size-20 text-danger font-baloo">
                              $ <span class="product_price">152</span>
                          </div>
                      </div>
                  </div>
                  <!-- !card item -->
                  <!-- card item -->
                  <div class="row border-top py-3 mt-3">
                      <div class="col-sm-2">
                          <img src="./assets/products/1.png" style="height: 120px" alt="card1" class="img-fluid" />
                      </div>
                      <div class="col-sm-8">
                          <h5 class="font-baloo font-size-20">Samsung Galaxy 10</h5>
                          <small>By Samsung</small>
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
                                  <div class="d-flex font-rale" style="">
                                      <button data-id="pro2" class="qty-up border bg-light">
                                          <i class="fas fa-angle-up"></i>
                                      </button>
                                      <input data-id="pro2" type="text" class="qty-input border px-2 w-100 bg-light"
                                          readonly />
                                      <button data-id="pro2" class="qty-down border bg-light">
                                          <i class="fas fa-angle-down"></i>
                                      </button>
                                  </div>
                                  <div class="d-flex justify-content-around w-70 mt-2">
                                      <button type="submit" class="btn font-baloo text-danger px-3 border-right">
                                          Delete
                                      </button>
                                      <button type="submit" class="btn font-baloo text-danger">
                                          Save for Later
                                      </button>
                                  </div>
                              </div>
                              <!-- !Product Qty -->
                          </div>
                      </div>
                      <div class="col-sm-2 text-right">
                          <div class="font-size-20 text-danger font-baloo">
                              $ <span class="product_price">152</span>
                          </div>
                      </div>
                  </div>
                  <!-- !card item -->
              </div>
              <!-- sub total-->
              <div class="col-sm-3">
                  <div class="sub-total border text-center mt-2">
                      <h6 class="font-rale font-size-12 text-success py-3">
                          <i class="fas fa-check"></i> Your oeder is eligible for Free
                          Delivary
                      </h6>
                      <div class="border-top py-4">
                          <h5 class="font-baloo font-size-20">
                              Subtotal (2 item):&nbsp;
                              <span class="text-danger">$
                                  <span class="text-danger" id="deal-price">304.00</span></span>
                          </h5>
                          <button type="submit" class="btn btn-warning mt-3">
                              Proceed to Buy
                          </button>
                      </div>
                  </div>
              </div>
              <!-- !sub total-->
          </div>
          <!-- !Shopping Card Items -->
      </div>
  </section>
  <!-- !Shopping Card -->