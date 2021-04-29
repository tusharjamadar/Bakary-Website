<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royal Bakery | royalbakery.com</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our App</h3>
                    <p>Download app for android and ios mobile phone.</p>
                    <div class="app-logo">
                        <img src="images/play-store.png">
                        <img src="images/app-store.png">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="images/new-logo-white.png">
                    <p>Our Purpose Is To Sustainably Make the Pleasure and Benefits Cakes to the many.</p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links:</h3>
                    <ul>
                        <li>Offers</li>
                        <li>About Us</li>
                        <li>Contact Us</li>
                        <li>Sitemap</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow us:</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Instagram</li>
                        <li>Twitter</li>
                        <li>Telegram</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright By Tushar Jamadar</p>
        </div>
    </div>
</body>
<!------------ JS for toggle menu --------------------->
<script>
    var MenuItems = document.getElementById("MenuItems");
        MenuItems.style.maxHeight= "0px";
        function menutoggel(){
            if(MenuItems.style.maxHeight == "0px")
            {
                MenuItems.style.maxHeight= "200px";
            }
            else{
                MenuItems.style.maxHeight= "0px";
            }
        }
</script>

</html>