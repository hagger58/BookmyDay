@extends('layouts.main')

@section('title', '| Productpage')

@section('content')

<div class="row">
        <div class="col-12"></div>
        <div class="col-4">
            <div class="product col-md-4 service-image-left">
                <img src="images/paulien_cornelissen.jpg"/>
            </div>
            <div class="container service1-items col-sm-2 col-md-2 pull-left"></div>
        <br></div>
        <div class="col-8"><div class="product-title">Boek Titel</div>
            <div class="product-desc">Productomschrijving<p>Het laatste boek van professor Stephen Hawking. Een prachtig eerbetoon aan een fantastische een mooi boek van een super schrijver kan je nu online kopen bij bookmyday</p></div>
            <div class="product-rating">Reviews:<i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star-o"></i> </div>
            <hr>
            <div class="product-price">€ 19.95</div>
            <div class="product-stock">Op voorraad</div>
            <hr>
                <div class="btn-group cart">
                    <button type="button" class="btn btn-success">
                        Winkelmand 
                    </button>
                </div>
                <div class="btn-group wishlist">
                    <button type="button" class="btn btn-danger">
                        Wenslijst 
                    </button>
                </div>
        </div>
        <div class="container">
                <div class="col-md-12 product-info">
                        <ul id="myTab" class="nav nav-tabs nav_tabs btn btn-space">
                        <button type="button" class="btn btn-warning btn-color btn-bg-color btn-sm col-xs-2"><li class="active"><a href="#service-one" data-toggle="tab">OMSCHRIJVING</a></li></button> 
                        <button type="button" class="btn btn-warning btn-color btn-bg-color btn-sm col-xs-2"><li><a href="#service-two" data-toggle="tab">PRODUCT INFO</a></li></button>
                        <button type="button" class="btn btn-warning btn-color btn-bg-color btn-sm col-xs-2"><li><a href="#service-three" data-toggle="tab">REVIEWS</a></li></button>      
                        </ul>
                    </div>
            </div>
        <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade in active" id="service-one">             
                        <section class="container product-info">
                            dé jaarlijkse sensatie voor jong en oud: Guinness World Records 2019. Deze spiksplinternieuwe Nederlandse editie bevat weer duizenden records en recordfoto's. Het allerbeste cadeau voor alle leeftijden. Maak kennis met de meest verbluffende en illustere recordhouders en ontdek hoe zij de top bereikten.
                            <h3>Guinness World Records</h3>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </section>                
                </div>
                <div class="tab-pane fade" id="service-two">
                    <section class="container">
                            <li>Auteur Guinness World Records Ltd</li>
                            <li>Taal Nederlands</li>
                            <li>Uitgever de Fontein Jeugd</li>
                            <li>ISBN 9789026146022</li>
                            <li>Productsoort Boek</li>
                            <li>Categorie Encyclopedieën & Naslagwerken , Bruna Top 100 , Altijd goed boekjes om cadeau te doen , De 25 beste kinderboeken</li>
                            <li>Leeftijd Volwassenen</li>
                            <li>Verschenen september 2018</li>
                            <li>Pagina's 256</li>
                            <li>Formaat 304 x 230 x 23 mm</li>       
                    </section> 
                </div>
                <div class="tab-pane fade" id="service-three">
                                                
                </div>
        </div>

        <div class="container">
  <h2>Dynamic Tabs</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
    <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
    <li><a data-toggle="tab" href="#menu3">Menu 3</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>HOME</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Menu 1</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
  </div>
</div>
@endsection