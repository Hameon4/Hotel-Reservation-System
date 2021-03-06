<?php
  require "header.php";
 ?>

 <main>
    <div class="block-31" style="position: relative;" id="home">
      <div class="owl-carousel loop-block-31 ">
        <div class="block-30 item" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-md-10">
                <span class="subheading-sm">
                  <?php
                    if (isset($_SESSION['userUid'])){
                      echo $_SESSION['userUid'];
                    }
                    else {
                      echo "Welcome to the";
                    }
                   ?>
                </span>
                <h2 class="heading">Alain Dream Hotel</h2>
                <?php
                  if (isset($_SESSION['userId'])) {
                    echo '<p><a href="booking.php" class="btn py-4 px-5 btn-primary" style="font-size: 20px;">Book Now</a></p>';
                  }
                  else {
                    echo '<p><span class="subheading-sm">For More Features</span><br><a href="signup.php" class="btn py-4 px-5 btn-primary" style="font-size: 20px;">Sign Up</a></p>';
                  }
                  ?>
              </div>
            </div>
          </div>
        </div>
        <div class="block-30 item" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-md-10">
                <span class="subheading-sm">
                  <?php
                    if (isset($_SESSION['userUid'])){
                      echo $_SESSION['userUid'];
                    }
                    else {
                      echo "Welcome";
                    }
                   ?>
                </span>
                <h2 class="heading">Bigger & Better</h2>
                <?php
                  if (isset($_SESSION['userId'])) {
                    echo '<p><a href="booking.php" class="btn py-4 px-5 btn-primary" style="font-size: 20px;">Book Now</a></p>';
                  }
                  else {
                    echo '<p><span class="subheading-sm">For More Features</span><br><a href="signup.php" class="btn py-4 px-5 btn-primary" style="font-size: 20px;">Sign Up</a></p>';
                  }
                ?>
              </div>
            </div>
          </div>
        </div>
        <div class="block-30 item" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-md-10">
                <span class="subheading-sm">
                  <?php
                    if (isset($_SESSION['userUid'])){
                      echo $_SESSION['userUid'];
                    }
                    else {
                      echo "Welcome";
                    }
                   ?>
                </span>
                <h2 class="heading">Great Foods & Drinks</h2>
                <?php
                  if (isset($_SESSION['userId'])) {
                    echo '<p><a href="booking.php" class="btn py-4 px-5 btn-primary" style="font-size: 20px;">Book Now</a></p>';
                  }
                  else {
                    echo '<p><span class="subheading-sm">For More Features</span><br><a href="signup.php" class="btn py-4 px-5 btn-primary" style="font-size: 20px;">Sign Up</a></p>';
                  }

                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="container">


        <div class="row site-section" id="services">
          <div class="col-md-12">
            <div class="row mb-5">
              <div class="col-md-7 section-heading">
                <span class="subheading-sm">Services</span>
                <h2 class="heading">Facilities &amp; Services</h2>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="media block-6">
              <div class="icon"><span class="flaticon-double-bed"></span></div>
              <div class="media-body">
                <h3 class="heading">Luxury Rooms</h3>
                <p>All types of room you can imagine exist here.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="media block-6">
              <div class="icon"><span class="flaticon-wifi"></span></div>
              <div class="media-body">
                <h3 class="heading">Fast &amp; Free Wifi</h3>
                <p>Highly efficient. Great speed.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="media block-6">
              <div class="icon"><span class="flaticon-customer-service"></span></div>
              <div class="media-body">
                <h3 class="heading">Call Us 24/7</h3>
                <p>We are always available for help.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="media block-6">
              <div class="icon"><i class="flaticon-pool" style="font-size: 40px;"></i></div>
              <div class="media-body">
                <h3 class="heading">Leisure</h3>
                <p>Free your mind with our remedying facilities.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="media block-6">
              <div class="icon"><span class="flaticon-credit-card"></span></div>
              <div class="media-body">
                <h3 class="heading">Different Payment Methods</h3>
                <p>
                  <ul>
                    <li>Cash</li>
                    <li>Visa</li>
                  </ul>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="media block-6">
              <div class="icon"><span class="flaticon-dinner"></span></div>
              <div class="media-body">
                <h3 class="heading">Restaurant</h3>
                <p>We got great meals with many of the greatest cooks in the world.</p>
              </div>
            </div>
          </div>

        </div>
      </div>

      <div class="site-section block-13 bg-light" id="rooms">
        <div class="container">
           <div class="row mb-5">
              <div class="col-md-7 section-heading">
                <span class="subheading-sm">Featured Rooms</span>
                <h2 class="heading">Rooms &amp; Suites</h2>
                <p>Enjoy your stay at ADHRS with our numerous and spectacular room types!</p>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="nonloop-block-13 owl-carousel">
                    <div class="item">
                      <div class="block-34">
                        <div class="image">
                          <a href="#"><img src="images/img_1.jpg" alt="Image placeholder"></a>
                        </div>
                        <div class="text">
                          <h2 class="heading">Single Room</h2>
                          <div class="price"><sup>AED</sup><span class="number">156</span><sub>/per night</sub></div>
                          <ul class="specs">
                            <li><strong>Adults:</strong> 1</li>
                            <li><strong>Categories:</strong> Single</li>
                            <li><strong>Facilities:</strong> Closet with hangers, HD flat-screen TV, Telephone</li>
                            <li><strong>Size:</strong> 20m<sup>2</sup></li>
                            <li><strong>Bed Type:</strong> One-bed</li>
                          </ul>
                        </div>
                      </div>
                    </div>

                    <div class="item">
                      <div class="block-34">
                        <div class="image">
                          <a href="#"><img src="images/img_2.jpg" alt="Image placeholder"></a>
                        </div>
                        <div class="text">
                          <h2 class="heading">Family Room</h2>
                          <div class="price"><sup>AED</sup><span class="number">500</span><sub>/per night</sub></div>
                          <ul class="specs">
                            <li><strong>Adults:</strong> 4</li>
                            <li><strong>Categories:</strong> Family</li>
                            <li><strong>Facilities:</strong> Closet with 4 hangers, HD flat-screen TV, PS4 console with 3 joysticks Telephone</li>
                            <li><strong>Size:</strong> 40m<sup>2</sup></li>
                            <li><strong>Bed Type:</strong> Double-bed, Double-bed</li>
                          </ul>
                        </div>
                      </div>
                    </div>


                    <div class="item">
                      <div class="block-34">
                        <div class="image">
                          <a href="#"><img src="images/img_4.jpg" alt="Image placeholder"></a>
                        </div>
                        <div class="text">
                          <h2 class="heading">Double Room</h2>
                          <div class="price"><sup>AED</sup><span class="number">320</span><sub>/per night</sub></div>
                          <ul class="specs">
                            <li><strong>Adults:</strong> 2</li>
                            <li><strong>Categories:</strong> Double</li>
                            <li><strong>Facilities:</strong> Closet with 2 hangers, HD flat-screen TV, Telephone</li>
                            <li><strong>Size:</strong> 30m<sup>2</sup></li>
                            <li><strong>Bed Type:</strong> Double-bed</li>
                          </ul>
                        </div>
                      </div>
                    </div>


                    <div class="item">
                      <div class="block-34">
                        <div class="image">
                          <a href="#"><img src="images/img_6.jpg" alt="Image placeholder"></a>
                        </div>
                        <div class="text">
                          <h2 class="heading">King-Sized Room</h2>
                          <div class="price"><sup>AED</sup><span class="number">760</span><sub>/per night</sub></div>
                          <ul class="specs">
                            <li><strong>Adults:</strong> 2</li>
                            <li><strong>Categories:</strong> Single</li>
                            <li><strong>Facilities:</strong> Closet with 2 hangers, HD flat-screen TV, City view, Telephone</li>
                            <li><strong>Size:</strong> 50m<sup>2</sup></li>
                            <li><strong>Bed Type:</strong> One-bed</li>
                          </ul>
                        </div>
                      </div>
                    </div>

                </div>

              </div> <!-- .col-md-12 -->
            </div>
        </div>
      </div>

      <div class="site-section bg-light" id="menu">
        <div class="container">
          <div class="row mb-5">
              <div class="col-md-7 section-heading">
                <span class="subheading-sm">Menus</span>
                <h2 class="heading">Restaurant Menu</h2>
              </div>
            </div>

          <div class="block-35">

            <ul class="nav" id="pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Breakfast</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Lunch</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Dinner</a>
              </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="row">
                  <div class="col-md-12 block-13">
                    <div class="nonloop-block-13 owl-carousel">
                      <div class="item">
                        <div class="block-34">
                          <div class="image">
                            <a href="#"><img src="images/menu_1.jpg" alt="Image placeholder"></a>
                          </div>
                          <div class="text">
                            <h2 class="heading">Arabian Breakfast</h2>
                            <p>
                              <ul>
                                <li>Fool and tameya</li>
                                <li>Shakshuka</li>
                                <li>Manoucheh zaatar</li>
                                <li>Falafel, labneh with olive oil and green olives</li>
                              </ul>
                            </p>
                            <div class="price"><sup>AED</sup><span class="number">30.75-45.5</span></div>
                          </div>
                        </div>
                      </div>

                      <div class="item">
                        <div class="block-34">
                          <div class="image">
                            <a href="#"><img src="images/menu_2.jpg" alt="Image placeholder"></a>
                          </div>
                          <div class="text">
                            <h2 class="heading">Asian Breakfast</h2>
                            <p>
                              <ul>
                                <li>Vietnamese banh mi op la (Fried Egg)</li>
                                <li>Japanese Omurice (Fried Rice Omelette)</li>
                                <li>Filipino Tamales</li>
                                <li>Chinese Jianbing (Savory Crepe)</li>
                              </ul>
                            </p>
                            <div class="price"><sup>AED</sup><span class="number">50-65.25</span></div>
                          </div>
                        </div>
                      </div>

                      <div class="item">
                        <div class="block-34">
                          <div class="image">
                            <a href="#"><img src="images/menu_3.jpg" alt="Image placeholder"></a>
                          </div>
                          <div class="text">
                            <h2 class="heading">European Breakfast</h2>
                            <p>
                              <ul>
                                <li>Rye Bread</li>
                                <li>French Baguettes & Jam</li>
                                <li>Churros & Chocolate</li>
                                <li>The Full English Breakfast</li>
                              </ul>
                            </p>
                            <div class="price"><sup>AED</sup><span class="number">40.25-50.5</span></div>
                          </div>
                        </div>
                      </div>

                      <div class="item">
                        <div class="block-34">
                          <div class="image">
                            <a href="#"><img src="images/menu_4.jpg" alt="Image placeholder"></a>
                          </div>
                          <div class="text">
                            <h2 class="heading">More Continental Breakfasts</h2>
                            <p>
                              <ul>
                                <li>North American Dishes</li>
                                <li>South American Dishes</li>
                                <li>Australian Dishes</li>
                                <li>More!</li>
                              </ul>
                            </p>
                            <div class="price"><sup>AED</sup><span class="number">30.25-50.0</span></div>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>


              <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="row">
                  <div class="col-md-12 block-13">
                    <div class="nonloop-block-13 owl-carousel">
                      <div class="item">
                        <div class="block-34">
                          <div class="image">
                            <a href="#"><img src="images/menu_2.jpg" alt="Image placeholder"></a>
                          </div>
                          <div class="text">
                            <h2 class="heading">Arabian Lunch</h2>
                            <p>
                              <ul>
                                <li>Biriyani Chicken</li>
                                <li>Saloona Chicken</li>
                                <li>Fish Matchboos</li>
                                <li>Adobo Chicken</li>
                              </ul>
                            </p>
                            <div class="price"><sup>AED</sup><span class="number">45.5-60.25</span></div>
                          </div>
                        </div>
                      </div>

                      <div class="item">
                        <div class="block-34">
                          <div class="image">
                            <a href="#"><img src="images/menu_1.jpg" alt="Image placeholder"></a>
                          </div>
                          <div class="text">
                            <h2 class="heading">Asian Lunch</h2>
                            <p>
                              <ul>
                                <li>Shrimp and Broccoli Stir Fry</li>
                                <li>CPK’s Kung Pao Spaghetti</li>
                                <li>Crab Rangoon Dip</li>
                                <li>Thai Stir Fried Noodles (Pad See Ew)</li>
                              </ul>
                            </p>
                            <div class="price"><sup>AED</sup><span class="number">50.35-70.25</span></div>
                          </div>
                        </div>
                      </div>

                      <div class="item">
                        <div class="block-34">
                          <div class="image">
                            <a href="#"><img src="images/menu_3.jpg" alt="Image placeholder"></a>
                          </div>
                          <div class="text">
                            <h2 class="heading">European Lunch</h2>
                            <p>
                              <ul>
                                <li>Oysters</li>
                                <li>Beef Steak</li>
                                <li>Salad With Olive Oil</li>
                                <li>Lasagna</li>
                              </ul>
                            </p>
                            <div class="price"><sup>AED</sup><span class="number">45.45-65.5</span></div>
                          </div>
                        </div>
                      </div>

                      <div class="item">
                        <div class="block-34">
                          <div class="image">
                            <a href="#"><img src="images/menu_4.jpg" alt="Image placeholder"></a>
                          </div>
                          <div class="text">
                            <h2 class="heading">Much More Continental Lunch!</h2>
                            <p>
                              <ul>
                                <li>North American Dishes</li>
                                <li>South American Dishes</li>
                                <li>Australian Dishes</li>
                                <li>More!</li>
                              </ul>
                            </p>
                            <div class="price"><sup>AED</sup><span class="number">45.45-65.25</span></div>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <div class="row">
                  <div class="col-md-12 block-13">
                    <div class="nonloop-block-13 owl-carousel">
                      <div class="item">
                        <div class="block-34">
                          <div class="image">
                            <a href="#"><img src="images/menu_3.jpg" alt="Image placeholder"></a>
                          </div>
                          <div class="text">
                            <h2 class="heading">Arabian Dinner</h2>
                            <p>
                              <ul>
                                <li>Saudi Arabian Chicken Kabsa</li>
                                <li>Palestinian Musakhan</li>
                                <li>Moroccan Chicken Tagine</li>
                                <li>Slow Cooker Chicken Shawarma</li>
                              </ul>
                            </p>
                            <div class="price"><sup>AED</sup><span class="number">20.25-35.5</span></div>
                          </div>
                        </div>
                      </div>

                      <div class="item">
                        <div class="block-34">
                          <div class="image">
                            <a href="#"><img src="images/menu_1.jpg" alt="Image placeholder"></a>
                          </div>
                          <div class="text">
                            <h2 class="heading">Asian Dinner</h2>
                            <p>
                              <ul>
                                <li>Thai-style fishcakes with sweet and sour cucumber pickle</li>
                                <li>Beef tataki rolls</li>
                                <li>Asian lettuce wraps</li>
                                <li>Chicken-fried chicken with peanut soy</li>
                              </ul>
                            </p>
                            <div class="price"><sup>AED</sup><span class="number">30.0-40.5</span></div>
                          </div>
                        </div>
                      </div>

                      <div class="item">
                        <div class="block-34">
                          <div class="image">
                            <a href="#"><img src="images/menu_2.jpg" alt="Image placeholder"></a>
                          </div>
                          <div class="text">
                            <h2 class="heading">European Dinner</h2>
                            <p>
                              <ul>
                                <li>Orecchiette with Kale and Spicy Pangrattto</li>
                                <li>Spanish Baked Paella with Prawns, Tenderstem and Peppers</li>
                                <li>Gorgonzola, Steak, Guinness and Potato Pie</li>
                                <li>Baked Cod in a Chorizo Broth</li>
                              </ul>
                            </p>
                            <div class="price"><sup>AED</sup><span class="number">25.5-35.5/span></div>
                          </div>
                        </div>
                      </div>

                      <div class="item">
                        <div class="block-34">
                          <div class="image">
                            <a href="#"><img src="images/menu_4.jpg" alt="Image placeholder"></a>
                          </div>
                          <div class="text">
                            <h2 class="heading">More Continental Dinner Waiting!</h2>
                            <p>
                              <ul>
                                <li>North American Dishes</li>
                                <li>South American Dishes</li>
                                <li>Australian Dishes</li>
                                <li>More!</li>
                              </ul>
                            </p>
                            <div class="price"><sup>AED</sup><span class="number">20.0-40.25</span></div>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

</main>

<?php
  require "footer.php";
 ?>
