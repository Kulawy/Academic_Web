
<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Piwerko</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!--[if lt IE 9]>
                    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
                <![endif]-->
    <style>
        
    </style>
</head>

<body>
    <header>
        <a href="#navigation_bar"><img src=_img/banner.png width="100%" height="auto" alt="page banner" /></a>
        <nav id="navigation_bar">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="catalog.html">Catalog</a></li>
                <li><a href="aboutBeer.html">About Beers</a></li>
                <li><a href="about.php">About Page</a></li>
                <li class="active"><a href="contact.html">Contact</a></li>
                <li><a href="additionalnfoForm.html">Tell us about yourself</a></li>
                <li id="log_in"><a href="logIn.html">Register</a></li>
            </ul><br />
        </nav>
    </header>
    <section>
		<div style="text:center;">
			<?php
			    $login = $_POST["login"];
				$password=$_POST["password"];
				if ($login=="admin" and $password=="admin")
				{
				$_SESSION["login"] = $login;
                $_SESSION["password"] = $password;
				$login=$_SESSION["login"];
				print("Witaj $login, zostałeś zalogowany.");
				}
				else
				{
					print("<p>Zły login lub hasło.</p>");
				}
				
			
			?>
		</div>
    </section>
    <footer>
        <details>
            <summary>Copyright &copy; 2018 Jakub Geroń, Marcin Krawczyk - Studenci PWr</summary>
            <p>pictures are taken from googl search but edited</p>
        </details>
    </footer>
    <script type="text/javascript" src="scriptContact.js"></script>
</body>

</html>