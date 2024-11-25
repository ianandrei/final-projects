<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
</head>
<body>
    <!-- header section starts -->

    <header class="header">
        <section class="flex">
            <a href="#home" class="logo">ITcop.</a>

            <nav class="navbar">
                <a href="#home">home</a>
                <a href="#about">about</a>
                <a href="#services">services</a>
                <a href="#team">team</a>
                <a href="#reviews">reviews</a>
                <a href="#contact">contact</a>
            </nav>

            <div class="fas fa-bars" id="menu-btn"></div>
        </section>
    </header>
<!-- header section ends --> 
 
<!-- home section starts -->
<section class="home" id="home">
    <div class="row">

        <div class="content">
            <h3>Your NO.1 <span>IT support</span></h3>
            <a href="#contact" class="btn">learn more</a>
        </div>
        <div class="image">
            <img src="images/consultant.png" alt="" style="height: 400px; width: 400px;">
        </div>
    </div>
</section>
<!-- home section ends -->

<!-- counter section starts -->
<section class="count">
    <div class="box-container">
        <div class="box">
            <i class="fa-solid fa-screwdriver-wrench"></i>
            <div class="content">
                <h3>150+</h3>
                <p>support worldwide</p>
            </div>
        </div>
        <div class="box">
            <i class="fa-solid fa-user"></i>
            <div class="content">
                <h3>1300+</h3>
                <p>users</p>
            </div>
        </div>
        <div class="box">
            <i class="fa-solid fa-user-group"></i>
            <div class="content">
                <h3>80+</h3>
                <p>teams</p>
            </div>
        </div>
        <div class="box">
            <i class="fa-solid fa-star"></i>
            <div class="content">
                <h3>100%</h3>
                <p>satifaction</p>
            </div>
        </div>
    </div>
</section>
<!-- counter section ends -->

<!-- about section starts -->
<section class="about" id="about">
    <div class="row">
        <div class="image">
            <img src="images/customer-service.png" alt="" style="height: 400px; width: 400px;">
        </div>

        <div class="content">
            <h3>Why chose us?</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <a href="#contact" class="btn">contact us</a>
        </div>
    </div>
</section>
<!-- about section ends -->

<!-- services section ends -->
<section class="services" id="services">
    <h1 class="heading">our <span>services</span></h1>
    <div class="swiper services-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide">
                <img src="images/consultant (2).png" alt="" style="height: 250px; width: 250px;">
                <h3>consultant</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
            <div class="swiper-slide slide">
                <img src="images/data-management.png" alt="" style="height: 250px; width: 250px;">
                <h3>database management</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
            <div class="swiper-slide slide">
                <img src="images/cyber-security.png" alt="" style="height: 250px; width: 250px;">
                <h3>network security</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
            <div class="swiper-slide slide">
                <img src="images/cloud-service.png" alt="" style="height: 250px; width: 250px;">
                <h3>cloud services</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
            <div class="swiper-slide slide">
                <img src="images/service.png" alt="" style="height: 250px; width: 250px;">
                <h3>IT repair service</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
            <div class="swiper-slide slide">
                <img src="images/software.png" alt="" style="height: 250px; width: 250px;">
                <h3>software support</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>
<!-- services section ends -->

<!-- teams section starts -->

<section class="teams" id="teams">
    <h1 class="heading">IT <span>experts</span></h1>

    <div class="swiper teams-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide">
                <img src="images/Leader.png" alt="">
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
                <h3>Micael Aguzar</h3>
                <h4>IT Export 1</h4>
                <p>Hi everyone, I'm the leader of this group team. Just a small quote "We must stay focused brothers!</p>
            </div>
            <div class="swiper-slide slide">
                <img src="images/Alarde.jpg" alt="">
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
                <h3>Carlos Miguel Alarde</h3>
                <h4>IT Export 2</h4>
                <p>My name is Carlo alarde and i am always doing my very best to reach my goals in life.</p>
            </div>
            <div class="swiper-slide slide">
                <img src="images/Clark.jpg" alt="">
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
                <h3>Clark Jasper Bombasi</h3>
                <h4>IT Export 3</h4>
                <p>Hello, my name is clark jasper bombasi and i've been studying IT for the past 3 years and willing to learning more.</p>
            </div>
            <div class="swiper-slide slide">
                <img src="images/Crisostomo.jpg" alt="">
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
                <h3>Crisostomo Dumantay</h3>
                <h4>IT Export 4</h4>
                <p>I'm Crisostomo Dumantay I was born to make mistakes, not to fake perfection and to become the strongest.</p>
            </div>
            <div class="swiper-slide slide">
                <img src="images/Andrei.jpg" alt="">
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
                <h3>Ian Andrei Porciuncula</h3>
                <h4>IT Export 5</h4>
                <p>Hello. My name is ian andrei porciuncula and you can call me ian or andrei and I enjoy coding from time to time.</p>
            </div>
            <div class="swiper-slide slide">
                <img src="images/Leader.png" alt="">
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
                <h3>Micael Aguzar</h3>
                <h4>IT Export 6</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>
<!-- teams section ends -->

<!-- review section starts -->

<section class="reviews" id="reviews">
    <h1 class="heading">user's <span>reviews</span></h1>
    <div class="swiper reviews-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <div class="user-info">
                    <img src="images/user.png" alt="" style="height: 250px; width: 250px;">
                    <div class="user-info">
                        <h3>Micael Aguzar</h3>
                        <div class="stars">
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star-half-alt"></li>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide slide">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <div class="user-info">
                    <img src="images/user.png" alt="" style="height: 250px; width: 250px;">
                    <div class="user-info">
                        <h3>Micael Aguzar</h3>
                        <div class="stars">
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star-half-alt"></li>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide slide">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <div class="user-info">
                    <img src="images/user.png" alt="" style="height: 250px; width: 250px;">
                    <div class="user-info">
                        <h3>Micael Aguzar</h3>
                        <div class="stars">
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star-half-alt"></li>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide slide">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <div class="user-info">
                    <img src="images/user.png" alt="" style="height: 250px; width: 250px;">
                    <div class="user-info">
                        <h3>Micael Aguzar</h3>
                        <div class="stars">
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star-half-alt"></li>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide slide">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <div class="user-info">
                    <img src="images/user.png" alt="" style="height: 250px; width: 250px;">
                    <div class="user-info">
                        <h3>Micael Aguzar</h3>
                        <div class="stars">
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star-half-alt"></li>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide slide">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <div class="user-info">
                    <img src="images/user.png" alt="" style="height: 250px; width: 250px;">
                    <div class="user-info">
                        <h3>Micael Aguzar</h3>
                        <div class="stars">
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star-half-alt"></li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>
<!-- review section ends -->

<!-- contact section starts -->

<section class="contact" id="contact">
    <h1 class="heading"><span>Contact</span></h1>
    <div class="row">
        <div class="image">
            <img src="images/contact-us.png" alt="Contact Us" style="height: 500px; width: 500px;">
        </div>
        <?php

        include("php/config.php");

        $response = ['errors' => [], 'success' => false];

        if (isset($_POST['send'])) {
            $name = mysqli_real_escape_string($con, trim($_POST['name']));
            $email = mysqli_real_escape_string($con, trim($_POST['email']));
            $number = mysqli_real_escape_string($con, trim($_POST['number']));
            $service = mysqli_real_escape_string($con, trim($_POST['services']));
            $gender = isset($_POST['gender']) ? mysqli_real_escape_string($con, trim($_POST['gender'])) : '';

            // Validate Name
            if (empty($name)) {
                $response['errors']['name'] = '*Name is required.';
            } elseif (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                $response['errors']['name'] = 'Only letters and white space are allowed.';
            }

            // Validate Email
            if (empty($email)) {
                $response['errors']['email'] = '*Email is required.';
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $response['errors']['email'] = 'Invalid email format.';
            } else {
                $verify_query = mysqli_query($con, "SELECT Email FROM users WHERE Email='$email'");
                if (mysqli_num_rows($verify_query) > 0) {
                    $response['errors']['email'] = 'This email is already in use.';
                }
            }

            // Validate Number
            if (empty($number)) {
                $response['errors']['number'] = '*Number is required.';
            } elseif (!preg_match('/^\d{11}$/', $number)) {
                $response['errors']['number'] = 'Number must be exactly 11 digits.';
            }

            // Validate Service
            if (empty($services)) {
                $response['errors']['services'] = '*Please select a services.';
            }

            // Validate Gender
            if (empty($gender)) {
                $response['errors']['gender'] = '*Please select a gender.';
            }

            // If no errors, proceed
            if (empty($response['errors'])) {
                $query = "INSERT INTO users (Name, Email, Number, Services, Gender) 
                          VALUES ('$name', '$email', '$number', '$services', '$gender')";
                if (mysqli_query($con, $query)) {
                    $response['success'] = true;
                } else {
                    $response['errors']['db'] = 'Failed to save your data. Please try again.';
                }
            }

            // Display messages
            if ($response['success']) {
                echo "<div class='message'><p>Registration successful! We will contact you soon.</p></div>";
            } else {
                foreach ($response['errors'] as $error) {
                    echo "<div class='message'><p>$error</p></div>";
                }
            }
        }
        ?>

        <form action="" method="post">
            <span>Your Name</span>
            <input type="text" placeholder="Enter your full name" maxlength="50" name="name" class="box" required>
            <span>Your Email</span>
            <input type="email" placeholder="Enter your valid email" maxlength="50" name="email" class="box" required>
            <span>Your Number</span>
            <input type="number" placeholder="Enter your valid number" max="99999999999" min="0" name="number" class="box" required>
            <span>Services</span>
            <select name="services" class="box" required>
                <option value="" disabled selected>Select a service</option>
                <option value="consulting">Consulting</option>
                <option value="database management">Database Management</option>
                <option value="network security">Network Security</option>
                <option value="cloud services">Cloud Services</option>
                <option value="repair service">Repair Service</option>
                <option value="software support">Software Support</option>
                <option value="web design">Web Design</option>
            </select>
            <span>Select Gender</span>
            <div class="radio">
                <input type="radio" name="gender" value="male" id="male" required>
                <label for="male">Male</label>
                <input type="radio" name="gender" value="female" id="female" required>
                <label for="female">Female</label>
            </div>
            <input type="submit" value="Send Message" class="btn" name="send">
        </form>
    </div>
</section>

<!-- contact section ends -->

<!-- footer section starts -->

<footer class="footer">
    <section>
        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
                <a href="#" class="fab fa-youtube"></a>
        </div>

        <div class="credit">&copy copyright @ 2024 by <span>Group 2</span> | all rights reserved |</div>
    </section>
</footer>
<!-- footer section ends -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script src="javascript/script.js"></script>
</body>
</html>