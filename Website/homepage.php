
<?php 
   
   session_start();


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Sign In & Sign Up</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="header">
        <h1>Welcome to the Blog</h1>
    </header>
    <main class="container">
        <section class="articles-section">
            <h2>Latest Articles</h2>
            <div class="articles">
                <article>
                    <h3>Article Title 1</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel risus at ligula elementum...</p>
                    <a href="#">Read More</a>
                </article>
                <article>
                    <h3>Article Title 2</h3>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas...</p>
                    <a href="#">Read More</a>
                </article>
                <article>
                    <h3>Article Title 3</h3>
                    <p>Curabitur dignissim libero non augue sodales, a scelerisque risus posuere. Fusce ac suscipit...</p>
                    <a href="#">Read More</a>
                </article>
            </div>
            <div class="auth-buttons">
                <a href="#" class="open-popup" onclick="openPopup('signInPopup')">Sign In</a>
                <a href="#" class="open-popup" onclick="openPopup('signUpPopup')">Sign Up</a>
            </div>
        </section>
    </main>

    <div class="overlay" id="overlay" onclick="closePopup()"></div>

    <section class="auth-section" id="signInPopup">
        <div class="form-container">
            <form class="sign-in-form">
                <h2>Sign In</h2>
                <input type="email" placeholder="Email" required>
                <input type="password" placeholder="Password" required>
                <button type="submit">Sign In</button>
            </form>
        </div>
    </section>

    <section class="auth-section" id="signUpPopup">
        <div class="form-container">
            <?php
                include("php/dbconnnect.php");
                if(isset($_POST['sign_up'])){
                    $username = $_POST['username'];
                    echo $username;


                }

            ?>
            <form class="sign-up-form" action="" method="POST">
                <h2>Sign Up</h2>
                <input type="text" placeholder="Username" name="username" required>
                <input type="email" placeholder="Email" name="email" required>
                <input type="password" placeholder="Password" name="password" required>
                <button type="submit" name="sign_up">Sign Up</button>
            </form>
        </div>
    </section>

    <footer class="footer">
        <p>&copy; 2024 Blog Platform. All rights reserved.</p>
    </footer>

    <script>
        function openPopup(popupId) {
            document.getElementById(popupId).style.display = 'block';
            document.getElementById('overlay').style.display = 'block';
        }

        function closePopup() {
            document.querySelectorAll('.auth-section').forEach(popup => popup.style.display = 'none');
            document.getElementById('overlay').style.display = 'none';
        }
    </script>
</body>
</html>