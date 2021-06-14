<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tutorial</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="../css/info.css">


  </head>

  <body>
    <main class="container">

      <!-- Left Column / Headphones Image -->
      <div class="left-column contain">
        <img data-image="red" class="active" src="{{$beer->Image_Biere}}" alt="">
      </div>


      <!-- Right Column -->
      <div class="right-column">

        <!-- Product Description -->
        <div class="product-description">
          <span>{{$beer->Image_Biere}}</span>
          <h1>{{$beer->Nom_Biere}}</h1>
          <p>{{$beer->Description}}</p>
        </div>

        <!-- Product Configuration -->
        <div class="product-configuration">

          <!-- Product Color -->
          <div class="product-color">
            <span>Informations</span>

            <div class="color-choose">
              <div>
                <p>Contenance de {{$beer->Contenance_Biere}} cl.</p>
              </div>
            </div>

          </div>

          <!-- Cable Configuration -->
          <div class="cable-config">
            <span>Producteur</span>

            <div class="cable-choose">
              <button onclick="window.location.href='../getproducer/{{$producteur[0]->Id_Producteur}}';">{{$producteur[0]->Nom_Producteur}}</button>
            </div>
          </div>
        </div>
        <div class="product-price">
          <span>{{$beer->Prix_Biere}}€</span>
          <a href="../beers" class="cart-btn">Retour à la liste</a>
        </div>
      </div>
    </main>

    <!-- Scripts -->
  </body>
</html>