<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mon Portfolio</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link href="{{asset('css/website_resume.css') }}" rel="stylesheet">
    <link href="{{asset('css/fontawesome-free-5.13.0-web/css/fontawesome.css')}}" rel="stylesheet">
    <link href="{{asset('css/fontawesome-free-5.13.0-web/css/brands.css')}}" rel="stylesheet">
    <link href="{{asset('css/fontawesome-free-5.13.0-web/css/solid.css')}}" rel="stylesheet">
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/website_resume.js') }}"></script>
    <script src="{{ asset('js/Chart.bundle.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<!--
<nav class="nav justify-content-right " >
    <a class="navbar-brand" href="#home">Portfolio</a>
    <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
    <a class="nav-link" href="#about">A propos</a>
    <a class="nav-link" href="#contact">Contact</a>
</nav>
-->
<header id="home" class="container-fluid background " style= "height:auto">

    <div class="row">
        <div class="col-12">
            <img src="images/avatars.png" alt="Avatar" id="avatar">
        </div>

        <div class="col-12">
            <h1 class="mastead-heading-light text-important mb-0">BAPTISTE FESSARD</h1>
        </div>
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>

    </div>
</header>
<section id="portfolio">
    <h2 class="mastead-heading text-important mb-0">Portfolio</h2>
    <div class="container" style="height:auto">
        <div class="row align-items-center">

            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-arrow-down"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <div class="col-sm-12 col-md-5 box" style="background-color:  #a3e4d7 ">
                <div href="" data-toggle="modal" data-target="#modal1">
                    <div class="text-center"> <img class="image-row img-fluid" src="images/box.png" alt="Alt text" id="#box" /> </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-5 box" style="background-color: #fff176">
                <div href="" data-toggle="modal" data-target="#modal2">
                    <div class="text-center"><img class="image-row" src="images/pin.png" alt="Alt text"  /></div>
                </div>
            </div>
            <div class="col-sm-12 col-md-5 box" style="background-color: #f1948a">
                <div href="" data-toggle="modal" data-target="#modal3">
                    <div class="text-center"><img class="image-row" src="images/beer.png" alt="Alt text"  /></div>

                </div>
            </div>
            <div class="col-sm-12 col-md-5 box" style="background-color:  #aed6f1 " >
                <div href="" data-toggle="modal" data-target="#infos">
                    <div class="text-center"> <img class="image-row" src="images/browser.png" alt="Alt text"  /> </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="about" style="height: auto">
    <div class="container-fluid background" >

        <div id="aboutCarousel" class="carousel slide carousel-multi-item aboutCarousel col-md-8" data-ride="carousel" style="">
            <!-- Controls-->
            <a class="carousel-control-prev" href="#aboutCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#aboutCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

            <!--Indicators-->
            <ol class="carousel-indicators">
                <li data-target="#aboutCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#aboutCarousel" data-slide-to="1"></li>
                <li data-target="#aboutCarousel" data-slide-to="2"></li>
                <li data-target="#aboutCarousel" data-slide-to="3"></li>
                <li data-target="#aboutCarousel" data-slide-to="4"></li>

            </ol>
            <!--/.Indicators-->
            <!--Slides-->
            <div class="carousel-inner">
                <!-- Premiere slide -->
                <div class="carousel-item active">
                    <h4 class="card-title text-center">A propros</h4>
                    <div class="divider-custom divider-light">
                        <div class="divider-custom-line"></div>
                        <div class="divider-custom-icon"><i class="fas fa-comment-alt"></i></div>
                        <div class="divider-custom-line"></div>
                    </div>
                    <div class="row" style="">
                        <div class="col-lg-4 ml-auto" style="margin-left: auto;text-align: justify; color: white;padding-top: 5%"><p class="lead">Fort de mon expérience professionnelle en tant que technicien chimiste en recherche et développement depuis 2012, je recherche maintenant de nouvelle perspective d'évolution</p></div>
                        <div class="col-lg-4 mr-auto"style="margin-left: auto;text-align: justify; color: white;padding-top: 5%"><p class="lead">Je souhaite aujourd'hui me reconvertir dans l'informatique et plus précisement dans le développement de programme afin de pouvoir l'appliquer au secteur de la chimie.</p></div>
                    </div>
                    <div class="text-center">
                        <a href="{{asset('downloads/CV_FESSARD_BAPTISTE.pdf')}}" target="_blank" type="button" class="btn btn-primary btn-rounded">Obtenir mon CV  <i class="fas fa-cloud-download-alt"></i> </a>
                    </div>
                </div>
                <!--/First slide-->
                <!-- deuxieme slide -->
                <div class="carousel-item">
                    <h4 class="card-title text-center">Expériences</h4>
                    <div class="divider-custom divider-light">
                        <div class="divider-custom-line"></div>
                        <div class="divider-custom-icon"><i class="fas fa-suitcase"></i></div>
                        <div class="divider-custom-line"></div>
                    </div>

                        <div class="col-xl-10 col-lg-8 col-md-10 col-sm-10" style="margin-left: auto;margin-right:auto;padding-top: 7%">
                            <div class="row row-cols-2" >
                                <div class="col">
                                    <h6 style="color:  #f9e79f ">Octobre 2018- Févriver 2020</h6>
                                    <h4 class="card-title">Technicien de laboratoire - ToyoInk (76)</h4>
                                    <p>Contrôle qualité produits en cours de production et produits fini</p>
                                </div>
                                <div class="col">
                                    <h6 style="color:  #f9e79f ">Avril 2017- Juillet 2017</h6>
                                    <h4 class="card-title">Technicien chimiste - SunChemical (60)</h4>
                                    <p>Laboratoire recherche et développement Encres</p>
                                </div>
                                <div class="col">
                                    <h6 style="color:  #f9e79f ">Juin 2014 - Avril 2017</h6>
                                    <h4 class="card-title">Technicien formulation - Mäder (60)</h4>
                                    <p>Développement d'une nouvelle gamme de vernis d'imprégnation pour pièces automobiles</p>
                                </div>
                                <div class="col">
                                    <h6 style="color:  #f9e79f ">Juillet 2012 - Novembre 2013</h6>
                                    <h4 class="card-title">Technicien formulation - PPG Coatings (76)</h4>
                                    <p>Conception d’une nouvelle gamme d’encres pour impression offset traditionnelle destinée à l’emballage métallique.</p>
                                </div>


                            </div>
                        </div>
                </div>

                <!--/deuxieme slide-->
                <!-- troisieme slide-->
                <div class="carousel-item">
                    <h4 class="card-title text-center">Diplômes</h4>
                    <div class="divider-custom divider-light">
                        <div class="divider-custom-line"></div>
                        <div class="divider-custom-icon"><i class="fas fa-graduation-cap"></i></div>
                        <div class="divider-custom-line"></div>
                    </div>

                    <div class="col-xl-10 col-lg-8 col-md-10 col-sm-10" style="margin-left: auto;margin-right:auto;padding-top: 7%; text-align: center">
                        <p><img src="images/universite-rouen.png" style="max-width: 300px;height: auto"/></p>
                        <div class="row row-cols-3 " >
                            <div class="col" style="">
                                <h6 style="color:  #f9e79f">2011-2012</h6>
                                <h4 class="card-title">Licence professionnelle chimie fine et analytique</h4>
                            </div>
                            <div class="col">
                                <h6 style="color:  #f9e79f">2010-2012</h6>
                                <h4 class="card-title">Licence chimie</h4>

                            </div>
                            <div class="col">

                                <h6 style="color:  #f9e79f">2008-2010</h6>
                                <h4 class="card-title">DUT Chimie</h4>

                            </div>



                        </div>
                    </div>
                </div>
                <!--/troisieme slide-->
                <!-- quatrieme slide-->
                <div class="carousel-item">
                    <h4 class="card-title text-center">Informatique</h4>
                    <div class="divider-custom divider-light">
                        <div class="divider-custom-line"></div>
                        <div class="divider-custom-icon"><i class="fas fa-desktop"></i></div>
                        <div class="divider-custom-line"></div>
                    </div>
                    <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10" style="margin-left: auto;margin-right:auto;padding-top: 5%">
                        <div class="row row-cols-2">
                            <div class="col">
                                <h4 class="card-title text-center">Langages</h4>
                                <div class="text-center">
                                    <img class="image-row grayscale" src="images/html.png" onmouseover="show()" alt="Alt text" id="html" />
                                    <img class="image-row grayscale" src="images/css.png"  alt="Alt text" id="css"  />
                                    <img class="image-row grayscale" src="images/php.png" alt="Alt text" id="php"  />
                                    <img class="image-row grayscale" src="images/javascript.png" alt="Alt text" id="javascript" />
                                    <img class="image-row grayscale" src="images/vba.png" id="vba" alt="Alt text" />
                                </div>
                            </div>
                            <div class="col">
                                <h4 class="card-title text-center">Framework</h4>
                                <div class="text-center">
                                    <img class="image-row grayscale" src="images/laravel.png" alt="Alt text" />
                                    <img class="image-row grayscale" src="images/bootstrap.png" alt="Alt text"  />
                                </div>
                            </div>
                            <div class="col">
                                <h4 class="card-title text-center">Outils</h4>
                                <div class="text-center">
                                    <img class="image-row grayscale" src="images/phpstorm.png" alt="Alt text"  />
                                    <img class="image-row grayscale" src="images/composer.png" alt="Alt text" />
                                    <img class="image-row grayscale" src="images/gitbash.png" alt="Alt text"  />
                                    <img class="image-row grayscale" src="images/github.png" alt="Alt text"  />
                                    <img class="image-row grayscale" src="images/wampserver.png" alt="Alt text"  />
                                </div>
                            </div>
                            <div class="col">
                                <h4 class="card-title text-center">Système gestion base de donnée</h4>
                                <div class="text-center">
                                    <img class="image-row grayscale" src="images/mysql.png" alt="Alt text" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/quatrieme slide-->
                <!-- cinquieme slide-->
                <div class="carousel-item">
                    <h4 class="card-title text-center">Loisirs et passions</h4>
                    <div class="divider-custom divider-light">
                        <div class="divider-custom-line"></div>
                        <div class="divider-custom-icon"><i class="fas fa-user"></i></div>
                        <div class="divider-custom-line"></div>
                    </div>
                    <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10" style="margin-left: auto;margin-right: auto;padding-top: 3%">
                        <div class="row">
                            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                <div class="text-center">
                                    <img class="circle" src="images/jogging.png" alt="Alt text"  />
                                </div>
                                <div class="card-body text-center">
                                    <p class="card-title" style="">Jogging</p>
                                </div>
                            </div>
                            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                <div class="text-center">
                                    <img class="circle" src="images/travel.png" alt="Alt text"/>
                                </div>
                                <div class="card-body text-center">
                                    <p class="card-title" style="">Voyage</p>
                                </div>
                            </div>
                            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                <div class="text-center">
                                    <img class="circle" src="images/popcorn.png" alt="Alt text" />
                                </div>
                                <div class="card-body text-center">
                                    <p class="card-title">Cinéma</p>
                                </div>
                            </div>
                            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                <div class="text-center">
                                    <img class="circle" src="images/beer(1).png" alt="Alt text" />
                                </div>
                                <div class="card-body text-center">
                                    <p class="card-title" style="">Brasseur</p>
                                </div>
                            </div>
                            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                <div class="text-center">
                                    <img class="circle" src="images/chef.png" alt="Alt text" />
                                </div>
                                <div class="card-body text-center">
                                    <p class="card-title" style="">Cuisiner</p>
                                </div>
                            </div>
                            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                <div class="text-center">
                                    <img class="circle" src="images/playstation.png" alt="Alt text" />
                                </div>
                                <div class="card-body text-center">
                                    <p class="card-title" style="">Jeuxvidéo</p>
                                </div>
                            </div>
                        </div>
                    </div>
                <!--/cinquieme slide-->
            </div>
            <!--/.Slides-->

        </div>
    </div>
</section>
<section id="contact">
    <h2 class="mastead-heading text-important mb-0">Contact</h2>
    <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon"><i class="fas fa-envelope-open-text"></i></div>
        <div class="divider-custom-line"></div>
    </div>
    <div class="container-fluid" style="height:500px">
        <div class="row">
            <div class="col-8">
                <div class="panel panel-info">

                    <div class="form-group">
                        {!! Form::open(['url' => '/']) !!}
                        <div class="{!! $errors->has('nom') ? 'has-error' : '' !!} ">
                            {!! Form::text('nom', null, ['class' => 'form-control', 'placeholder' => 'Votre nom']) !!}
                            {!! $errors->first('nom', '<small class="help-block">:message</small>') !!}
                        </div>
                        <div class="{!! $errors->has('email') ? 'has-error' : '' !!} ">
                            {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Votre email']) !!}
                            {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
                        </div>
                        <div class="{!! $errors->has('texte') ? 'has-error' : '' !!} ">
                            {!! Form::textarea ('texte', null, ['class' => 'form-control', 'placeholder' => 'Votre message']) !!}
                            {!! $errors->first('texte', '<small class="help-block">:message</small>') !!}
                        </div>
                        {!! Form::submit('Envoyer !', ['class' => 'btn btn-info pull-right']) !!}
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
            <div class="col-xl-4" style="margin-top: 2%">
                <div class="row">
                    <div class="col-xl-12 " onmouseover="showText('phone')"  onmouseout="removeText('phone')" style="margin-top: 5px; margin-bottom: 5px">
                        <a href="tel:0652122675"><img class="icon-contact blue"  src="images/smartphone.png" id="phone" style=""/></a>
                        <span class="" id="value0" onclick="copy(this.id)" style="padding-left: 10px"></span>
                    </div>
                    <div class="col-xl-12" onmouseover="showText('map')" onmouseout="removeText('map')" style="margin-top: 5px; margin-bottom: 5px">
                        <a href="https://goo.gl/maps/18QpWSYb8nVzqHJm7" target="_blank"><img class=""  src="images/home-run.png" id="home" /></a>
                        <span id="value1" style="padding-left: 10px" ></span>
                    </div>
                    <div class="col-xl-12" onmouseover="showText('mail')" onmouseout="removeText('mail')" style="margin-top: 5px; margin-bottom: 5px">
                        <a href="mailto:baptistefessard@gmail.com"><img  class=""  src="images/email.png" id="home" /></a>
                        <span id="value2" style="padding-left: 10px" ></span>
                    </div>
                    <div class="col-xl-12" onmouseover="showText('skype')" onmouseout="removeText('skype')" style="margin-top: 5px; margin-bottom: 5px">
                        <a href="skype:baptistefessard@gmail.com?chat" ><img class=""  src="images/skype.png" id="home" /></a>
                        <span id="value3" style="padding-left: 10px"></span>
                    </div>
                    <div class="col-xl-12" onmouseover="showText('github')" onmouseout="removeText('github')" style="margin-top: 5px; margin-bottom: 5px">
                        <a href="https://github.com/bfessard?tab=repositories" target="_blank"><img class=""  src="images/github(2).png" id="github2" /></a>
                        <span id="value4" style="padding-left: 10px"></span>
                    </div>
                    <div class="col-xl-12" onmouseover="showText('linkedin')" onmouseout="removeText('linkedin')" style="margin-top: 5px; margin-bottom: 5px">
                        <a href="https://www.linkedin.com/in/baptiste-fessard-8b37a189/" target="_blank"><img class=""  src="images/linkedin.png" id="home" /></a>
                        <span id="value5" style="padding-left: 10px"></span>
                    </div>
                    <div class="boite"></div>

                </div>
            </div>

        </div>
    </div>
</section>
</body>

<!-- modal generator 1 -->
<div class="modal fade left" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-notify modal-info modal-side modal-top-left" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <p class="heading lead">Commande consommable</p>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-text">&times;</span>
                </button>
            </div>

            <!--Body-->
            <div class="modal-body">

                <div class="text-center"><img src="images/box.png" alt=""class="img-fluid image-row" style="background-color: #a3e4d7"></div>

                <div class="text-center">
                    <p>Mon premier développement, cet outil génère et automatise les commandes de fournitures pour les différents laboratoires. </p>
                </div>
            </div>

            <!--Footer-->
            <div class="modal-footer justify-content-center">
                <a href="download/commande.xlsm" type="button" class="btn btn-info">Télécharger <i class="fas fa-file-download"></i></a>

            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!-- modal generator 2 -->
<div class="modal fade left" id="modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-notify modal-info modal-side modal-top-left" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <p class="heading lead">Mon album voyage</p>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-text">&times;</span>
                </button>
            </div>

            <!--Body-->
            <div class="modal-body">

                <div class="text-center"><img src="images/pin.png" alt=""class="img-fluid image-row" style="background-color: #fff176"></div>

                <div class="text-center">
                    <p>Affiche sur une carte les photos des pays et villes que j'ai visité lors de mes différents voyages. </p>
                </div>
            </div>

            <!--Footer-->
            <div class="modal-footer justify-content-center">
                <a href="http://baptistefessard.fr/mesvoyages/" type="button" class="btn btn-info" target="_blank">VISITER <i class="fas fa-play"></i></a>
                <a href="https://github.com/bfessard/mon_site_photo" type="button" class="btn btn-info" target="_blank">GITHUB <i class="fab fa-github"></i></a>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!-- modal generator 3 -->
<div class="modal fade left" id="modal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-notify modal-info modal-side modal-top-left" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <p class="heading lead">CraftMyBeer</p>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-text">&times;</span>
                </button>
            </div>

            <!--Body-->
            <div class="modal-body">

                <div class="text-center"><img src="images/beer.png" alt=""class="img-fluid image-row" style="background-color: #f1948a"></div>

                <div class="text-center">
                    <p>Affiche sur une carte les photos des pays et villes que j'ai visité lors de mes différents voyages. </p> 
                </div>
            </div>

            <!--Footer-->
            <div class="modal-footer justify-content-center">
                <a href="" type="button" class="btn btn-info" target="_blank">WORKING PROGRESS <i class="fas fa-tools"></i></a>
                <a href="https://github.com/bfessard/CraftMyBeer" type="button" class="btn btn-info" target="_blank">GITHUB <i class="fab fa-github"></i></a>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
</html>
<script>







</script>