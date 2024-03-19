<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta content="" name="keywords">
    <title>Détails du produit - Dana Dreams</title>
    <link rel="icon" type="image/png" href="app/ressources/views/client/assets/images/Logo-DDREAMS-removebg-preview.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="font-family: Arial, sans-serif; background-color: #fff; margin: 0; padding: 0;">

    <!-- ***** Main Banner Area Start ***** -->
    <header class="page-heading" id="top" style="background-color: #35424a; color: #fff; padding: 20px 0; text-align: center;">
        <div class="container">
            <h2 style="margin: 0;">Détails du produit</h2>
            <span>Dana Dreams</span>
        </div>
    </header>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Product Area Starts ***** -->
    <section class="section" id="product" style="padding: 30px 0;">
        <div class="container" style="width: 80%; margin: 0 auto; overflow: hidden;">
            <div class="product-details" style="display: flex; justify-content: space-between; flex-wrap: wrap;">
                <div class="product-images" style="flex: 0 0 40%; max-width: 40%; margin-bottom: 20px;">
                    <img src="{{ '/articlesImages/' . $article->image }}" alt="" style="max-width: 100%; height: auto;">
                </div>
                <div class="product-info" style="background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); flex: 0 0 50%; max-width: 50%;">
                    <h3 style="color: #35424a; font-size: 24px; margin-bottom: 10px;">{{ $article->nom }}</h3>
                    <span class="price" style="font-size: 20px; color: #ff5733; font-weight: bold; margin-bottom: 10px;">{{ $article->prix }} fcfa</span>
                    <div class="product-rating" style="color: #ffd700; font-size: 18px; margin-bottom: 10px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    <div class="customer-review" style="margin-top: 20px;">
                        <div class="quote" style="background-color: #35424a; color: #fff; padding: 20px; border-radius: 5px; font-style: italic;">
                            <i class="fa fa-quote-left" style="margin-right: 5px;"></i><p>{{ $article->description }}</p>
                        </div>
                    </div>
                    <div class="product-info" style="margin-top: 20px;">
                        <a href="https://wa.me/92146589" target="_blank" style="display: inline-block;color: #fff; padding: 10px 20px; text-decoration: none; border-radius: 5px; background-color: #35424a;">
                            <button style="font-size:18px; background-color:#35424a; border:none; color:#fff;"> Ecrivez-nous sur whatsapp <i class="fa fa-whatsapp" style="color:green; font-size:28px;"></i></button>
                        </a>
                        <a href="tel:92146589" target="_blank" style="display: inline-block;color: #fff; padding: 10px 20px; text-decoration: none; border-radius: 5px; background-color: #35424a;">
                            <button style="font-size:18px; background-color:#35424a; border:none; color:#fff;"> Appelez-nous <i class="fa fa-phone" style="color:green; font-size:28px;"></i></button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Product Area Ends ***** -->
    
    <!-- ***** Footer Area Starts ***** -->
    <footer class="footer" style="background-color: #35424a; color: #fff; padding: 20px 0; text-align: center;">
        <div class="container">
            <!-- Contenu de votre pied de page ici -->
        </div>
    </footer>
    <!-- ***** Footer Area Ends ***** -->

</body>
</html>
