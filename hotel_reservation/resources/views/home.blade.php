<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Website</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- swiper js cdn link -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!-- custom css link -->
    <link rel="stylesheet" href="roch/style.css">
</head>
<body>

    <?php include 'roch/components/user_header.php'; ?>

    <!--refresh-->
    <div id="preloader"></div>



    <!-- header -->

    <header class="header">

        <div class="logo">
            <img src="roch/images/logo.jpg" alt=""> <i>Hotel del Luna</i>
        </div>
        <nav class="navbar">
            <a href="index.php">home</a>
            <a href="roch/#about">about</a>
            <a href="roch/#room">room</a>
            <a href="roch/#ig">gallery</a>
            <a class="booked" href="book.php" class="btn"> my book</a>
            <a href="#" class="btn"> log in</a> <!-- Added onclick event to open the login popup -->
            
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </header>

    <!-- end -->
    <!-- home -->

    <section class="home" id="home">

        <div class="swiper home-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide" style="background: url(images/home-slide1.jpg) no-repeat;">
                    <div class="content">
                        <h3></h3>
                        <a href="roch/reservation.html" class="btn"> Reserve Now</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background: url(images/home-slide2.jpg) no-repeat;">
                    <div class="content">
                        <h3>Welcome, we will provide the best service. But, only for ghosts!” shows the special nature of the hotel.” </h3>
                        <a href="roch/#room" class="btn"> visit our offer</a>
                    </div>
                </div>



            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>

    </section>

    <!-- end -->
    <!-- availability -->

   <!-- availability section starts  -->

<section class="availability" id="availability">

   <form action="" method="post">
      
         <div class="box">
            <p>check in <span>*</span></p>
            <input type="date" name="check_in" class="input" required>
         </div>
         <div class="box">
            <p>check out <span>*</span></p>
            <input type="date" name="check_out" class="input" required>
         </div>
         <div class="box">
            <p>adults <span>*</span></p>
            <select name="adults" class="input" required>
               <option value="1">1 adult</option>
               <option value="2">2 adults</option>
               <option value="3">3 adults</option>
               <option value="4">4 adults</option>
               <option value="5">5 adults</option>
               <option value="6">6 adults</option>
            </select>
         </div>
         <div class="box">
            <p>childs <span>*</span></p>
            <select name="childs" class="input" required>
               <option value="-">0 child</option>
               <option value="1">1 child</option>
               <option value="2">2 childs</option>
               <option value="3">3 childs</option>
               <option value="4">4 childs</option>
               <option value="5">5 childs</option>
               <option value="6">6 childs</option>
            </select>
         </div>
         <div class="box">
            <p>rooms <span>*</span></p>
            <select name="rooms" class="input" required>
               <option value="1">1 room</option>
               <option value="2">2 rooms</option>
               <option value="3">3 rooms</option>
               <option value="4">4 rooms</option>
               <option value="5">5 rooms</option>
               <option value="6">6 rooms</option>
            </select>
         </div>
         <div class="box">
                <p>room type <span>*</span></p>
                <select name="room_type" id= "room_type" class="input">
                    <option value="1-Single Room">Single Room</option>
                    <option value="2-Double Room">Double Room</option>
                    <option value="3-Standard Room">Standard Room</option>
                    <option value="2-Honeymoon Suite">Honeymoon Suite</option>
                    <option value="5-Presidential Suite">Presidential Suite</option>
                    <option value="7-Family Room">Family Room</option>
                    <option value="6-Deluxe Room">Deluxe Room</option>
                    <option value="2-Executive Suite">Executive Suite</option>
                    <option value="4-Junior Suite">Junior Suite</option>
                </select>
            </div>

      </div>
      <input type="submit" value="check availability" name="check" class="btn">
   </form>

</section>

    <!-- end -->
   

    <!-- room -->

    <section class="room" id="room">

        <h1 class="heading">Best Offers</h1>

        <div class="swiper room-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <div class="image">
                        <span class="price">₱7,000/night</span>
                        <img src="roch/images/room-1.jpg" alt="">
                        <a href="#" class="fas fa-shopping-cart"></a>
                    </div>
                    <div class="content">
                        <h3>Executive Suite</h3>
                        <p>Executive suite is an opulent and roomy lodging choice that provides a higher degree of comfort and amenities. They frequently ooze elegance and refinement, incorporating elegant furniture, stylish accents, and upmarket finishes.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <a href="#" class="btn">Reserve Now!</a>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <span class="price">₱11,000/night</span>
                        <img src="roch/images/room-2.jpg" alt="">
                        <a href="#" class="fas fa-shopping-cart"></a>
                    </div>
                    <div class="content">
                        <h3>Deluxe Room</h3>
                        <p>Step down from deluxe rooms,consist of a bigger bed, a couch, a desk, and improved bathroom amenities. The best accommodations are deluxe rooms, which are comparable to normal rooms but frequently provide a higher level of comfort.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <a href="#" class="btn">Reserve Now</a>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <span class="price">₱9,999/night</span>
                        <img src="roch/images/room-3.jpg" alt="">
                        <a href="#" class="fas fa-shopping-cart"></a>
                    </div>
                    <div class="content">
                        <h3>Junior Suite</h3>
                        <p> includes a well-appointed bedroom area with a king or queen-sized bed, plush bedding, and stylish furnishings. The separate sitting area may include a cozy sofa, armchairs, and a coffee table, creating a designated space for relaxation or socializing.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <a href="#" class="btn">Reserve Now</a>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <span class="price">₱6,000/night</span>
                        <img src="roch/images/room-4.jpg" alt="">
                        <a href="#" class="fas fa-shopping-cart"></a>
                    </div>
                    <div class="content">
                        <h3>Family Room</h3>
                        <p>Multiple beds are frequently found in family rooms, including arrangements like two queen beds or a king-sized bed plus one or more twin beds. This makes it convenient for families to stay together in one room and keeps everyone near by.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <a href="#" class="btn">Reserve Now</a>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <span class="price">₱2,999/night</span>
                        <img src="roch/images/room-5.jpg" alt="">
                        <a href="#" class="fas fa-shopping-cart"></a>
                    </div>
                    <div class="content">
                        <h3>Single Room</h3>
                        <p>A hotel single room is a welcoming and comfortable lodging choice made for lone visitors. Single rooms normally have a comfortable single bed with quality bedding, ensuring a restful night's sleep. It is a small, effective area.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <a href="#" class="btn">Reserve Now</a>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <span class="price">₱4,999/night</span>
                        <img src="roch/images/room-6.jpg" alt="">
                        <a href="#" class="fas fa-shopping-cart"></a>
                    </div>
                    <div class="content">
                        <h3>Standard Room</h3>
                        <p>The standard room is a cozy and well-equipped lodging choice made to accommodate the majority of guests. In order to ensure a comfortable and convenient stay, it normally offers a variety of amenities and conveniences.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <a href="#" class="btn">Reserve Now</a>
                    </div>
                </div>
                <div class="swiper-slide slide">
                    <div class="image">
                        <span class="price">₱3,999/night</span>
                        <img src="roch/images/room-7.jpg" alt="">
                        <a href="#" class="fas fa-shopping-cart"></a>
                    </div>
                    <div class="content">
                        <h3>Double Room</h3>
                        <p>A common lodging choice for hotels is the double room, which is made for two people. For couples, groups of friends, or families traveling together, a double room offers a cozy and practical space. Amenities found in double rooms.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <a href="#" class="btn">Reserve Now</a>
                    </div>
                </div>
                <div class="swiper-slide slide">
                    <div class="image">
                        <span class="price">₱5,999/night</span>
                        <img src="roch/images/room-9.jpg" alt="">
                        <a href="#" class="fas fa-shopping-cart"></a>
                    </div>
                    <div class="content">
                        <h3>Honeymoon Suite</h3>
                        <p>Honeymoon suite in a hotel is a luxurious and romantic accommodation option specifically designed for couples celebrating their honeymoon or a special occasion. It offers an intimate and indulgent experience, providing a private retreat for couples memories.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <a href="#" class="btn">Reserve Now</a>
                    </div>
                </div>
                <div class="swiper-slide slide">
                    <div class="image">
                        <span class="price">₱20,000/night</span>
                        <img src="roch/images/room-10.jpg" alt="">
                        <a href="#" class="fas fa-shopping-cart"></a>
                    </div>
                    <div class="content">
                        <h3>Presidential Suite</h3>
                        <p>presidential suite in a hotel is the epitome of luxury and exclusivity. It is the most prestigious and opulent accommodation option available, often reserved for VIPs, high-profile guests, or those seeking an extravagant and unforgettable experience.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <a href="#" class="btn">Reserve Now</a>
                    </div>
                </div>
            </div>

            <div class="swiper-pagination"></div>

        </div>

    </section>

    <!-- end -->
    <!-- services -->

    <section class="services">

        <div class="box-container">

            <div class="box">
                <img src="roch/images/service1.png" alt="">
                <h3>swimming pool</h3>
            </div>


            <div class="box">
                <img src="roch/images/service3.png" alt="">
                <h3>restaurant</h3>
            </div>

            <div class="box">
                <img src="roch/images/service4.png" alt="">
                <h3>fitness</h3>
            </div>

            <div class="box">
                <img src="roch/images/service5.png" alt="">
                <h3>beauty spa</h3>
            </div>

            <div class="box">
                <img src="roch/images/service6.png" alt="">
                <h3>resort beach</h3>
            </div>

        </div>

    </section>

    <!-- end -->

    <section class="ig" id="ig">
        <h1 class="heading">Snap-Pic</h1>
        <div class="insta-gallery">

            <img src="roch/images/insta1.jpg" />
            <img src="roch/images/insta2.jpg" />
            <img src="roch/images/insta3.jpg" />
            <img src="roch/images/insta4.jpg" />
            <img src="roch/images/insta5.jpg" />
            <img src="roch/images/insta6.jpg" />
            <img src="roch/images/insta7.jpg" />
            <img src="roch/images/insta8.jpg" />
            <img src="roch/images/insta9.jpg" />
            <img src="roch/images/insta10.jpg" />
            <img src="roch/images/insta11.jpg" />
            <img src="roch/images/insta12.jpg" />
            <img src="roch/images/insta13.jpg" />
            <img src="roch/images/insta14.jpg" />
            <img src="roch/images/insta15.jpg" />
        </div>
    </section>
    <!--map-->
    <div class="contact-in">
        <div class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3162.551746954215!2d126.97522138339006!3d37.56562345210068!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca2f208c205d7%3A0xfd82ff77088737d0!2sLa%20Seine!5e0!3m2!1sen!2sph!4v1685073924013!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="contact-form">
            <h1>Contact Us</h1>
             <form action="" method="post">
                <input type="text" name="name" required maxlength="50" placeholder="enter your name" class="contact-form-txt" />
                 <input type="email" name="email" required maxlength="50" placeholder="enter your email" class="contact-form-txt" />
                <input type="number" name="number" required maxlength="10" min="0" max="9999999999" placeholder="enter your number" class="contact-form-txt" />
                  <textarea name="message"  class="contact-form-textarea" required maxlength="1000" placeholder="enter your message" cols="30" rows="10"></textarea>
                <input type="submit"  value="send message" name="send" class="contact-form-btn" />
            </form>
        </div>
    </div>





    <!--guest-review-->

    <div class="rev-section">

        <h6 class="title">The Love From Our Guest</h6>
        <p class="note">Step into a world of unparalleled luxury and tranquility with a stay at Hotel del Luna. </p>

        <div class="reviews">

            <div class="review">
                <div class="head-review">
                    <img src="roch/images/shan.jpg" width="250px">
                </div>
                <div class="body-review">
                    <div class="name-review">Shean A.</div>
                    <div class="place-review">Philippines</div>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>
                    </div>
                    <div class="desc-review">I recently had the pleasure of staying at Hotel del Luna for a weekend getaway, and I must say it exceeded all my expectations. From the moment I arrived, I was greeted with warmth and professionalism by the attentive hotel staff.</div>
                </div>
            </div>
            <div class="review">
                <div class="head-review">
                    <img src="roch/images/raffy.jpg" width="250px">
                </div>
                <div class="body-review">
                    <div class="name-review">Ralph H.</div>
                    <div class="place-review">Singapore</div>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="desc-review">I recently had the pleasure of staying at Hotel del Luna for a much-needed vacation, and I am thrilled to share my incredible experience. This hotel truly exceeded my expectations and left me with unforgettable memories.</div>
                </div>
            </div>
            <div class="review">
                <div class="head-review">
                    <img src="roch/images/mar.jpg" width="250px">
                </div>
                <div class="body-review">
                    <div class="name-review">Marinelle D.</div>
                    <div class="place-review">Buhangin</div>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>
                    </div>
                    <div class="desc-review">The room I stayed in was nothing short of paradise. It was beautifully decorated, spacious, and boasted breathtaking ocean views. The bed was incredibly comfortable, ensuring a restful night's sleep, and the room amenities were thoughtfully arranged.</div>
                </div>
            </div>

        </div>

    </div>

    <!--book now-->


<section class="reservation" id="reservation">

   <form action="" method="post">
      <h1 class="heading">Reservation Form</h1>
      <div class="container">
         <div class="box">
            <p>your name <span>*</span></p>
            <input type="text" name="name" maxlength="50" required placeholder="enter your name" class="input">
         </div>
         <div class="box">
            <p>your email <span>*</span></p>
            <input type="email" name="email" maxlength="50" required placeholder="enter your email" class="input">
         </div>
         <div class="box">
            <p>your number <span>*</span></p>
            <input type="number" name="number" maxlength="10" min="0" max="9999999999" required placeholder="enter your number" class="input">
         </div>
         <div class="box">
            <p>rooms <span>*</span></p>
            <select name="rooms" class="input" required>
               <option value="1" selected>1 room</option>
               <option value="2">2 rooms</option>
               <option value="3">3 rooms</option>
               <option value="4">4 rooms</option>
               <option value="5">5 rooms</option>
               <option value="6">6 rooms</option>
            </select>
         </div>
         <div class="box">
            <p>check in <span>*</span></p>
            <input type="date" name="check_in" class="input" required>
         </div>
         <div class="box">
            <p>check out <span>*</span></p>
            <input type="date" name="check_out" class="input" required>
         </div>
         <div class="box">
            <p>adults <span>*</span></p>
            <select name="adults" class="input" required>
               <option value="1" selected>1 adult</option>
               <option value="2">2 adults</option>
               <option value="3">3 adults</option>
               <option value="4">4 adults</option>
               <option value="5">5 adults</option>
               <option value="6">6 adults</option>
            </select>
         </div>
         <div class="box">
            <p>childs <span>*</span></p>
            <select name="childs" class="input" required>
               <option value="0" selected>0 child</option>
               <option value="1">1 child</option>
               <option value="2">2 childs</option>
               <option value="3">3 childs</option>
               <option value="4">4 childs</option>
               <option value="5">5 childs</option>
               <option value="6">6 childs</option>
            </select>
         </div>
      </div>
      <input type="submit" value="book now" name="book" class="btn">
   </form>

</section>














    <?php include 'roch/components/footer.php'; ?>

   

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
   

    <script src="roch/script.js"></script>



    <?php include 'roch/components/message.php'; ?>
</body>
</html>