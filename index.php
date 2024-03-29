<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafe</title>
    <link href="resources/css/style.css" rel="stylesheet">    
    <link href="resources/css/style_header.css" rel="stylesheet">    
    <link href="resources/css/style_images.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Gabriela' rel='stylesheet'>
    
</head>


<body>

<div id="navbar">
    <div style="width: 50%; float:left">
        <img src= "./resources/img/cafe-logo.png"  width="100" height="100" alt="img">
    </div>
    <div class='topnav-right'>
        <nav class="nav">
            <ul>
                <li>
                    <?php
                    $cookieLoggedIn = "loggedIn";

                    $orderHtml = '
                    <a href="orders.php"> Orders </a>';

                    $loginHtml = '
                    <a href="login.php"> Log in</a>';


                    if(!isset($_COOKIE[$cookieLoggedIn])) {
                        echo $loginHtml;
                    } else {
                        echo $orderHtml;
                    }


                    ?>
                </li>
                </li> 
                <li><a href="#home">Home</a></li>
                <li><a href="#Menu">Menu</a></li>
                <li><a href="#speciality">Speciality</a></li>
                <li><a href="#review">Review</a></li>
                
                
                <li id='checkoutbutton' style='display:none' >
                    <button type="submit" form="formDrinks" value="Submit">Checkout</button>
                </li>
                
            </ul>
        </nav>    
    </div> 
</div>

<section class="container1">        
    <div class="split-left-img" >
        <img src="./resources/img/home.webp" alt="coffee image" style="width:100%;" >
    </div>
    <div class= "centered">
        <h4>Food search </h4>
            <form action="">
                <input type="search" name="search"  placeholder= "Food Search">
                <input type="button" name ="submit"  value="submit">
            </form>  
        <div class="centered.p">
            <h3>
            We are the leading Instagrammable café and lifestyle brand. Everything that we make is irresistibly chic, pink perfection. Our products help our customers create that picture perfect moment – every time. 
            </h3>
        </div>
        <div class="sticker">
            <img src="./resources/img/sticker.png" alt="coffee bean" weight="30" height="30">
        </div>
    </div>
</section>

<section class="container2">
    <div class="Menu" id="Menu">
        <h1><span>Menu</span></h1>
    </div>



    <form hidden name='formDrinks' id="formDrinks" action="/Cafe/PaymentPage/payment.php" method="PoSt">
        <input type="text" id="flatWhite" name="flatWhite"><br>
        <input type="text" id="macchiato" name="macchiato"><br>
        <input type="text" id="cafemocha" name="cafemocha"><br>
        <input type="text" id="espresso" name="espresso"><br>
        <input type="text" id="capppuccino" name="capppuccino"><br>
        <input type="text" id="americano" name="americano"><br>
        <input type="text" id="irishCoffee" name="irishCoffee"><br>
        <input type="text" id="coldCoffeeWithIceCream" name="coldCoffeeWithIceCream"><br>
        <input type="text" id="latte" name="latte"><br>
        <input type="text" id="frappe" name="frappe"><br>
        
        <input type="text" id="price_flatWhite" value = "7" name="price_flatWhite"><br>
        <input type="text" id="price_macchiato" value = "8" name="price_macchiato"><br>
        <input type="text" id="price_cafemocha" value = "5" name="price_cafemocha"><br>
        <input type="text" id="price_espresso" value = "4" name="price_espresso"><br>
        <input type="text" id="price_capppuccino" value = "7" name="price_capppuccino"><br>
        <input type="text" id="price_americano" value = "4" name="price_americano"><br>
        <input type="text" id="price_irishCoffee" value = "8" name="price_irishCoffee"><br>
        <input type="text" id="price_coldCoffeeWithIceCream" value = "10" name="price_coldCoffeeWithIceCream"><br>
        <input type="text" id="price_latte" value = "8" name="price_latte"><br>
        <input type="text" id="price_frappe" value = "8" name="price_frappe"><br>
        
    </form> 
        


    <div class="row">
        <!-- Flat white -->
        <div class="box-container">
            <div class="box">
                <img src="./resources/img/imagesf.jpeg" alt="flatWhite" >
            </div>
            <div class="text">
                <h3>Flat White</h3>
                <div class="stars">
                    <i class="fas fa star"></i>
                    <i class="fas fa star"></i>
                    <i class="fas fa star"></i>
                    <i class="fas fa star"></i>
                    <i class="fas fa star"></i>
                </div>
                
                <button onclick="addItem('flatWhite')"> + </button>
                <span id="flatWhite_display">0</span>
                <span class="price">Add $7</span>
                <button onclick="subItem('flatWhite')"> - </button>
            </div>
        </div>
                              
        <!-- Macchiato -->
        
        <div class="box-container">
            <div class="box">
                <img src="./resources/img/Macchiato.jpg" alt="macchiato" >
            </div>
            <div class="text">
                <h3>Macchiato</h3>
                <div class="stars">
                    <i class="fas fa star"></i>
                    <i class="fas fa star"></i>
                    <i class="fas fa star"></i>
                    <i class="fas fa star"></i>
                    <i class="fas fa star"></i>
                </div>
                <button onclick="addItem('macchiato')"> + </button>
                <span id="macchiato_display">0</span>
                <span class="price">Add $8</span>
                <button onclick="subItem('macchiato')"> - </button>
            </div>
        </div>
        
        <!-- Cafe mocha -->
     
        <div class="box-container">
            <div class="box">
                <img src="./resources/img/cafe mocha.jpg" alt="cafemocha" >
            </div>
            <div class="text">
                <h3>Cafe Mocha</h3>   
                    <div class="stars">
                        <i class="fas fa star"></i>
                        <i class="fas fa star"></i>
                        <i class="fas fa star"></i>
                        <i class="fas fa star"></i>
                        <i class="fas fa star"></i>
                    </div>
                    <button onclick="addItem('cafemocha')"> + </button>
                    <span id="cafemocha_display">0</span>
                    <span class="price">Add $5</span>
                    <button onclick="subItem('cafemocha')"> - </button>
            </div>
        </div>
    </div>

    <!-- Espresso -->
        
    <div class="row">
        <div class="box-container"> 
            <div class="box">
                <img src="./resources/img/espresso.webp" alt="espresso" >
            </div>

            <div class="text">
                <h3>Espresso</h3>
                <div class="stars">
                    <i class="fas fa star"></i>
                    <i class="fas fa star"></i>
                    <i class="fas fa star"></i>
                    <i class="fas fa star"></i>
                    <i class="fas fa star"></i>
                </div>
                <button onclick="addItem('espresso')"> + </button>
                <span id="espresso_display">0</span>
                <span class="price">Add $4</span>
                <button onclick="subItem('espresso')"> - </button>
            </div>
        </div>


        <!-- Cappucino -->
        
        <div class="box-container">
            <div class="box">
                <img src="./resources/img/imagesi.jpeg" alt="capppuccino" >
            </div>
            <div class="text">
                <h3>Capppuccino</h3>
                <div class="stars">
                    <i class="fas fa star"></i>
                    <i class="fas fa star"></i>
                    <i class="fas fa star"></i>
                    <i class="fas fa star"></i>
                    <i class="fas fa star"></i>
                </div>
                <button onclick="addItem('capppuccino')"> + </button>
                <span id="capppuccino_display">0</span>
                <span class="price">Add $7</span>
                <button onclick="subItem('capppuccino')"> - </button>
            </div>
        </div>    

        <!-- Americano -->
        
        <div class="box-container">
            <div class="box">
                <img src="./resources/img/americano.jpeg" alt="americano" >
            </div>
            <div class="text">
                <h3>Americano</h3>
                <div class="stars">
                    <i class="fas fa star"></i>
                    <i class="fas fa star"></i>
                    <i class="fas fa star"></i>
                    <i class="fas fa star"></i>
                    <i class="fas fa star"></i>
                </div>
                <button onclick="addItem('americano')"> + </button>
                <span id="americano_display">0</span>
                <span class="price">Add $4</span>
                <button onclick="subItem('americano')"> - </button>
            </div>
        </div>
    </div>

    <!-- Irish Coffee -->
        
    <div class="row">
        <div class="box-container">
            <div class="box">
                <img src="./resources/img/irish.jpg" alt="Irish Coffee" >
            </div>
                <div class="text">
                    <h3>Irish Coffee</h3>
                    <div class="stars">
                        <i class="fas fa star"></i>
                        <i class="fas fa star"></i>
                        <i class="fas fa star"></i>
                        <i class="fas fa star"></i>
                        <i class="fas fa star"></i>
                    </div>
                    <button onclick="addItem('irishCoffee')"> + </button>
                    <span id="irishCoffee_display">0</span>
                    <span class="price">Add $8</span>
                    <button onclick="subItem('irishCoffee')"> - </button>
            </div>
        </div>

        <!-- Cold-Coffee -->
        <div class="box-container">    
            <div class="box">
                <img src="./resources/img/coldcoffeewithicecream.jpg" alt="coldCoffeeWithIceCream" >
            </div>
            <div class="text">
                <h3>Cold-Coffee with Ice-cream</h3>
                <div class="stars">
                    <i class="fas fa star"></i>
                    <i class="fas fa star"></i>
                    <i class="fas fa star"></i>
                    <i class="fas fa star"></i>
                    <i class="fas fa star"></i>
                </div>
                <button onclick="addItem('coldCoffeeWithIceCream')"> + </button>
                <span id="coldCoffeeWithIceCream_display">0</span>
                <span class="price">Add $10</span>
                <button onclick="subItem('coldCoffeeWithIceCream')"> - </button>
            </div>
        </div>

        <!-- Latte -->
        

        <div class="box-container">    
            <div class="box">
                <img src="./resources/img/latte.jpg" alt="Latte" >
            </div>
            <div class="text">
                <h3>Latte</h3>
                <div class="stars">
                    <i class="fas fa star"></i>
                    <i class="fas fa star"></i>
                    <i class="fas fa star"></i>
                    <i class="fas fa star"></i>
                    <i class="fas fa star"></i>
                </div>
                <button onclick="addItem('latte')"> + </button>
                <span id="latte_display">0</span>
                <span class="price">Add $8</span>
                <button onclick="subItem('latte')"> - </button>
            </div>
        </div>
    </div>      

    <!-- Latte -->

    <div class="row">
        <div class="box-container">   
            <div class="box">
                <img src="./resources/img/frappe.jpg" alt="frappe" >
            </div>
            <div class="text">
                <h3>Frappe</h3>
                <div class="stars">
                    <i class="fas fa star"></i>
                    <i class="fas fa star"></i>
                    <i class="fas fa star"></i>
                    <i class="fas fa star"></i>
                    <i class="fas fa star"></i>
                </div>
                <button onclick="addItem('frappe')"> + </button>
                <span id="frappe_display">0</span>
                <span class="price">Add $8</span>
                <button onclick="subItem('frappe')"> - </button>
            </div>
        </div>
        <div class="box-container empty"></div>
        <div class="box-container empty"></div>
    </div>  
</section>

<section class="container">
    <div class="speciality" id="speciality">
        <h2 class= "heading">
            <span>Speciality</span>
        </h2>
    </div>
<div class="box">
    <img src="./resources/img/imagesf.jpeg" alt="flat white" ></div>
    <div class="text">
        <h3>Flat White</h3>

    <p> The flat white coffee is an espresso-based coffee drink accompanied with steamed milk and microfoam. This microfoam is made up of steamed milk which is gently infused with air. This results in silky, textured milk containing tiny air bubbles.</p>
    </div>
</div>

<div class="box">
    <img src="./resources/img/cold-coffee-with-ice-cream-1.webp" alt="Cold-Coffee with Ice-cream" ></div>
    <div class="text">
        <h3>Flat White</h3>

    <p> Cold Coffee with Ice Cream is a perfect treat for all coffee lovers. Made with only 3 ingredients and ready in 5 minutes it's a great way to cool down during the summer! Also try this Mango Lassi, perfect for hot days!
</div>
</div>
<div class="box">
    <img src="./resources/img/imagesi.jpeg" alt="Capppuccino" ></div>
    <div class="text">
        <h3>Capppuccino</h3>

    <p> A cappuccino is an espresso-based coffee drink that originated in Italy and is prepared with steamed milk foam. 
</div>
</div>
<div class="box">
    <img src="./resources/img/imagesd.jpeg" alt="Espresso" ></div>
    <div class="text">
        <h3>Espresso</h3>

    <p> An espresso is intense and bold, but nonetheless delicious, and the espresso is usually served in small demitasse-style cups for this reason.
</div>
</div>
<div class="box">
    <img src="./resources/img/imagesa.jpeg" alt="Macchiato" ></div>
    <div class="text">
        <h3>Macchiato</h3>

    <p> n Italian, the term "macchiato" translates as "marked" or "stained", meaning a stained or marked coffee. The macchiato is an espresso coffee drink, topped with a small amount of foamed or steamed milk to allow the taste of the espresso to still shine through.
</div>
</div>
<div class="box">
    <img src="./resources/img/imagesj.jpeg" alt="Frappe" ></div>
    <div class="text">
        <h3>Frappe</h3>

    <p> A frappé coffee, Greek frappé, Nescafé frappé, or just frappé is a Greek iced coffee drink made from instant coffee, water, sugar, and milk. 
</div>
</div>
<div class="box">
    <img src="./resources/img/Caramel-Macchiato-1.jpeg" alt= "Caramel Macchiato" ></div>
    <div class="text">
        <h3>Caramel Macchiato"</h3>

    <p> A Caramel Macchiato is a coffee beverage with steamed milk, espresso, vanilla syrup and caramel drizzle. It’s so delicious!
</div> 
</div>
    
<section class="container">
    <div class="review" id ="review">
   
        <h2 class= "heading">our customers<span>review</span></h2>
</div>

        <div class="box">
            <img src="./resources/img/review1.png" alt="review" width="400" height="400">
            <h3>henry</h3>
        
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p>Excellent</P>
        </div>
        <div class="box">
            <img src="./resources/img/review2.png" alt="review" width="400" height="400">
            <h3>Lina</h3>
        
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p>Excellent</P>
        </div>
        <div class="box">
            <img src="./resources/img/review3.png" alt="review" width="400" height="400">
            <h3>Kareena</h3>
        
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p>Delicious</P>
        </div>
        <div class="box">
            <img src="./resources/img/review4.png" alt="review" width="400" height="400">
            <h3>paul</h3>
        
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p>superb!</P>
        </div>
        <div class="box">
            <img src="./resources/img/review5.png" alt="review" width="400" height="400">
            <h3>max</h3>
        
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p>very good!</P>
        </div>
     
    </div>
</div> 
<section class="container">
        <div class ="footer" id="footer">
            <ul>
                <li>
                    <a href= "#" >Facebook</a>
                    <a href= "#" >instagram</a>
                    <a href= "#" >twitter</a>
                </li>
           </ul>

            <p>All right reserved. Designed By <a href="#">Saba Fatima</p>
        </div>  
</section>

    <script src="./Scripts/script.js"></script>
    <script src="./Scripts/script_items.js"></script>

</body>
</html>