
<?php
if (isset($_COOKIE['s_id']))
{
	session_id($_COOKIE['s_id']);
	echo($_COOKIE['s_id']);
}
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Piwerko</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <!--[if lt IE 9]>
                    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
                <![endif]-->
    <style>
        
    </style>
</head>

<body>
    <header>
        <a href="#navigation_bar"><img src=../_img/banner.png width="100%" height="auto" alt="page banner" /></a>
        <nav id="navigation_bar">
            <ul>
                <li><a href="../html/index.html">Home</a></li>
                <li><a href="../html/catalog.html">Catalog</a></li>
                <li><a href="../html/aboutBeer.html">About Beers</a></li>
                <li><a href="../html/about.php">About Page</a></li>
                <li class="active"><a href="../html/contact.html">Contact</a></li>
                <li><a href="../html/additionalnfoForm.html">Tell us about yourself</a></li>
                <li id="log_in"><a href="../html/logIn.html">Register</a></li>
            </ul><br />
        </nav>
    </header>
    <section>
		<div style="text:center;">
			<?php
				if(isset($_COOKIE['s_id'])) 
				{
					print('Jesteś zalogowany, możesz edytować swoje dane');
					
				?>
				<h2>Edytuj dane</h2>
				<form class="contactForm" method="POST" action="editData.php">
                <label>login:</label>
			    <div>
                <input type="text" name="login" id="address" value="login" />
			    </div>
				
				<label>Name:</label>
			    <div>
                <input type="text" name="name" id="address" value="login" />
			    </div>
				
				<label>Lastname:</label>
			    <div>
                <input type="text" name="lastname" id="address" value="login" />
			    </div>
			   
                <label>Password:</label>
			    <div>
			    <input type="password" name="password"  value="password" />
			    </div>

            <input id="sendMsg" type="submit" value="Submit" />
        </form>
			<?php }
			    else 
				{ ?>
					
					
					
				<h2>Zarejestruj się</h2>
				<form class="contactForm" method="POST" action="registerData.php">
                <label>login:</label>
			    <div>
                <input type="text" name="login" id="address"  />
			    </div>
				
				<label>Name:</label>
			    <div>
                <input type="text" name="name" id="address"  />
			    </div>
				
				<label>Lastname:</label>
			    <div>
                <input type="text" name="lastname" id="address"  />
			    </div>
			   
                <label>Password:</label>
			    <div>
			    <input type="password" name="password"  value="password" />
			    </div>
				<input id="sendMsg" type="submit" value="Submit" />
					
			<?php	
			
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