<?php 
require('connection.php');
session_start();
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true){
    setcookie('logged_in', 'true', time() + (86400 * 30), "/");
} else {
    setcookie('logged_in', '', time() - 3600, "/");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Gaming Website Design</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <a href="#" class="logo"><img src="logo.png" height="50px">
            <p>Gaming Hub</p>
        </a>
        <ul class="nav">
            <li><a href="#Home">Home</a></li>
            <li><a href="#About">About</a></li>
            <li><a href="#Games">Games</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <?php  
    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true){
        echo"<div class='user'>
        <a href='logout.php'>Logout</a>
        </div>";
    }else{
        echo"
        <div class='sign-in-up'>
        <button type='button' onclick=\"popup('login-popup')\">Login</button>
        <button type='button' onclick=\"popup('register-popup')\">Register</button>
    </div>";
    }
    ?>
        <div class="toggleMenu" onclick="toggleMenu();"></div>
    </header>

    <div class="popup-container" id="login-popup">
        <div class="popup">
            <form method="post" action="login_register.php">
                <h2>
                    <img src="logo.png" height="50px">
                    <span>Login</span>
                    <button type="reset" class="close-btn" onclick="popup('login-popup')">&times;</button>
                </h2>
                <input type="text" placeholder="Username or Email" name="email_username" autocomplete="off" required>
                <input type="password" placeholder="Password" name="password">
                <button type="submit" class="submit-btn" value="login" name="login">Login</button>
            </form>
        </div>
    </div>

    <div class="popup-container" id="register-popup">
        <div class="register popup">
            <form method="post" action="login_register.php">
                <h2>
                    <img src="logo.png" height="50px">
                    <span>Register</span>
                    <button type="reset" class="close-btn" onclick="popup('register-popup')">&times;</button>
                </h2>
                <input type="text" placeholder="Name" name="name" autocomplete="off" required>
                <input type="text" placeholder="Username" name="username" autocomplete="off" required>
                <input type="text" placeholder="Email" name="email" autocomplete="off" required>
                <input type="password" placeholder="Password" name="password" required>
                <button type="submit" class="submit-btn" value="Register" name="register">Register</button>
            </form>
        </div>
    </div>

    <!--Home banner--->
<div class='banner animeX' id='Home'>
    <div class='bg'>
        <div class='content'>
            <h2>Games That are<br>
                Made For You<?php echo isset($_SESSION['username']) ? ' ' . htmlspecialchars($_SESSION['username']) : ''; ?></h2>
            <a href='https://play.google.com/store/apps/details?id=com.gameloft.android.ANMP.GloftA8HM&hl=en-US'>Install</a>
        </div>
        <img src='Image/asp-8.png'>
    </div>
</div>
<!--About-->
<div class='about animeX' id='About'>
    <div class='contentbox'>
        <h2>About us</h2>
        <p>Welcome to Gaming Hub your ultimate destination for all things gaming! Founded by passionate gamers
            Mahendra Choudhary and Sohail Shaikh, we created this site with one goal in mind: to bring together a
            community of like-minded players who share a love for gaming, from casual to hardcore.
            Our mission is to create a space where gamers can connect, share their experiences,
            and keep up with the fast-paced world of video games. From newcomers to seasoned pros,
            we’ve got something for everyone.
            Join us on this exciting journey and let’s level up together!
        </p>
        <a href='Read more.html'>Read more</a>
    </div>
    <img src='logo.png'>
</div>


<!--Games-->
<div class='games animeX' id='Games'>
    <h2>Popular Games</h2>
    <div class='cardbx'>

        <div class='card' data-item='pc'>
            <a href='Asphalt-8.html'><img src='Image/asp-8.png'></a>
            <div class='content'>
                <h4><a href='Asphalt-8.html'>Asphalt-8</a></h4>
                <div class='info'>
                    <p>Type:<br><span>Car Racing</span></p>
                    <a href='https://play.google.com/store/apps/details?id=com.gameloft.android.ANMP.GloftA8HM&hl=en-US'>Install</a>
                </div>
            </div>
        </div>

        <div class='card' data-item='pc'>
            <a href='Apex Legends.html'><img src='Image/apex_legends.jpg'></a>
            <div class='content'>
                <h4><a href='Apex Legends.html'>Apex Legends</a></h4>
                <div class='info'>
                    <p>Type:<br><span>Figthing</span></p>
                    <a href='https://www.ea.com/games/apex-legends/apex-legends'>Install</a>
                </div>
            </div>
        </div>

        <div class='card' data-item='pc'>
            <a href='Fortnite.html'><img src='Image/fortnite.jpg'></a>
            <div class='content'>
                <h4><a href='Fortnite.html'>Fortnite</a></h4>
                <div class='info'>
                    <p>Type:<br><span>Multiplayer</span></p>
                    <a href='https://www.fortnite.com/download?lang=en-US'>Install</a>
                </div>
            </div>
        </div>

        <div class='card' data-item='pc'>
            <a href='Fall Guys.html'><img src='Image/FallGuys.jpg'></a>
            <div class='content'>
                <h4><a href='Fall Guys.html'>Fall Guys</a></h4>
                <div class='info'>
                    <p>Type<br><span>Multiplayer</span></p>
                    <a href='https://www.fallguys.com/en-US'>Install</a>
                </div>
            </div>
        </div>

        <div class='card' data-item='pc'>
            <a href='Marvel Future Fight.html'><img src='Image/marvelfutureFight.jpg'></a>
            <div class='content'>
                <h4><a href='Marvel Future Fight.html'>Marvel Future Fight</a></h4>
                <div class='info'>
                    <p>Type:<br><span>Figthing</span></p>
                    <a href='https://play.google.com/store/apps/details?id=com.netmarble.mherosgb&hl=en-us'>Install</a>
                </div>
            </div>
        </div>

        <div class='card' data-item='pc'>
            <a href='Among Us.html'><img src='Image/among us.jpg'></a>
            <div class='content'>
                <h4><a href='Among Us.html'>Among Us</a></h4>
                <div class='info'>
                    <p>Type:<br><span>Multiplayer</span></p>
                    <a href='https://play.google.com/store/apps/details?id=com.innersloth.spacemafia&hl=en-US'>Install</a>
                </div>
            </div>
        </div>

        <div class='card' data-item='pc'>
            <a href='eFootball.html'><img src='Image/efootball.webp'></a>
            <div class='content'>
                <h4><a href='eFootball.html'>eFootball</a></h4>
                <div class='info'>
                    <p>Type:<br><span>Football Game</span></p>
                    <a href='https://play.google.com/store/apps/details?id=jp.konami.pesam&hl=en-US'>Install</a>
                </div>
            </div>
        </div>

        <div class='card' data-item='pc'>
            <a href='COD Black Ops III.html'><img src='Image/cod.jpg'></a>
            <div class='content'>
                <h4><a href='COD Black Ops III.html'>COD Black Ops III</a></h4>
                <div class='info'>
                    <p>Type:<br><span>Figthing</span></p>
                    <a href='https://apps.microsoft.com/detail/9p2z4lp10zmc?hl=en-US&gl=US'>Install</a>
                </div>
            </div>
        </div>

        <div class='card' data-item='pc'>
            <a href='COC.html'><img src='Image/coc.jpg'></a>
            <div class='content'>
                <h4><a href='COC.html'>COC</a></h4>
                <div class='info'>
                    <p>Type:<br><span>Multiplayer</span></p>
                    <a href='https://play.google.com/store/apps/details?id=com.supercell.clashofclans&hl=en-US'>Install</a>
                </div>
            </div>
        </div>

        <div class='card' data-item='pc'>
            <a href='GTA 5.html'><img src='Image/gta.jpg'></a>
            <div class='content'>
                <h4><a href='GTA 5.html'>GTA 5</a></h4>
                <div class='info'>
                    <p>Type<br><span>Open World</span></p>
                    <a href='https://www.rockstargames.com/gta-v?info=download'>Install</a>
                </div>
            </div>
        </div>
    </div>
    <ul>
        <li><a href='ALL_games.html'><p>All</p></a></li>
        <li><a href='PC_games.html'><p>PC</p></a></li>
        <li><a href='MOBILE_games.html'><p>Mobile</p></a></li>
    </ul>
</div>

<!-- Contact -->
<div class='contact animeX' id='contact'>
    <img src='Image/contact_image.webp'>
    <div class='form'>
        <h1>Contact Us</h1>
        <form action='Contact.php' method='post'>
            <div class='inputBx'>
                <p>Enter Name</p>
                <input type='text' placeholder='Enter your name' name='name' required>
            </div>
            <div class='inputBx'>
                <p>Enter Email</p>
                <input type='text' placeholder='Enter your email' name='email' required>
            </div>
            <div class='inputBx'>
                <p>Message</p>
                <input type='text' placeholder='Enter your message' name='message' required>
            </div>
            <div class='inputBx'>
                <input type='submit' name='submit' src='ALL_games.html'>
            </div>
        </form>
    </div>
</div>

<!-- footer -->

<footer>
    <div class='info'>
        <a href='#' class='logo'>
            <center><img src='logo.png' height='50px'></center>
            <p>Gaming Hub</p>
        </a>
        <p><i class='bx bx-copyright'></i>2025 All Right Reserved</p>
        <ul>
            <li><a href='https://www.facebook.com/'><i class='bx bxl-facebook'></i></a></li>
            <li><a href='https://www.instagram.com/accounts/login/'><i class='bx bxl-instagram-alt'></i></a></li>
            <li><a href='https://www.twitter.com'><i class='bx bxl-twitter'></i></a></li>
            <li><a href='https://www.linkedin.com'><i class='bx bxl-linkedin'></i></a></li>
        </ul>
    </div>
</footer>

    <script>
        const isLoggedIn = <?php echo (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) ? 'true' : 'false'; ?>;

        function popup(popup_name) {
            get_popup = document.getElementById(popup_name);
            if (get_popup.style.display == "flex") {
                get_popup.style.display = "none";
            }
            else {
                get_popup.style.display = "flex";
            }
        }
        function toggleMenu() {
            const toggleMenu = document.querySelector('.toggleMenu');
            const nav = document.querySelector('.nav');
            toggleMenu.classList.toggle('active');
            nav.classList.toggle('active');
        }

        // Intercept clicks on features if not logged in
        document.addEventListener('click', function (e) {
            if (!isLoggedIn) {
                // Find if the click is on a link
                let targetLink = e.target.closest('a');
                if (targetLink) {
                    const href = targetLink.getAttribute('href');
                    // Block access to games, install links, category pages, etc.
                    // Except navigation anchors on the current page (#Home, etc.) and login/register action buttons
                    if (href && !href.startsWith('#') && href !== 'logout.php') {
                        e.preventDefault();
                        popup('login-popup');
                        return;
                    }
                }
                
                // Block contact form submission
                let targetInput = e.target.closest('input[type="submit"]');
                if (targetInput) {
                    e.preventDefault();
                    popup('login-popup');
                }
            }
        });

        // Auto open login popup if redirected with showLogin=true
        window.addEventListener('DOMContentLoaded', () => {
            const urlParams = new URLSearchParams(window.location.search);
            if (urlParams.get('showLogin') === 'true' && !isLoggedIn) {
                popup('login-popup');
            }
        });
    </script>

</body>

</html>
