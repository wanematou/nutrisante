@extends('layouts.master')
@section('page-content') 
<div class="main-container container-fluid">
    <div class="container">

       
        <div class="breadcrump">
            <a href="/">Accueil</a> / A propos
        </div>
        
        <div class="row bloc2">
            <div class="col-lg-12">
                <div class="card mt-7">
                    <div class="card-body p-5 text-dark">
                        <div class="statistics-info p-4">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="">
                                        <h2 class="fw-bold">Accompagnement sur mesure de <span class="text-yellow">régimes medicale</span></h2>
                                        
                                        <p>Bienvenue chez NutriSante, où nous comprenons que chaque parcours de santé est unique. Nous sommes là pour vous offrir un accompagnement sur mesure dans votre démarche de régime médical. Nos experts en nutrition et en santé travailleront en étroite collaboration avec vous pour créer un plan alimentaire adapté à vos besoins spécifiques.</p>
                                        <p>Nous débutons par une évaluation approfondie de votre situation médicale, de vos préférences alimentaires et de vos objectifs de santé. Cette approche holistique nous permet de concevoir un plan qui vous convient parfaitement.</p>
                                        <p> Nos nutritionnistes expérimentés vous fourniront des conseils détaillés pour vous aider à comprendre les choix alimentaires qui soutiennent au mieux votre santé. Nous sommes là pour répondre à vos questions et ajuster votre plan en fonction de vos progrès et de vos besoins changeants.</p>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="text-center">
                                        <img src="{{asset('images/jolie.jpg')}}" alt="" height="400" width="auto">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="bg-success" style="width: 600px; height:5px; margin-left:220px;">
        <div class="row">
        <div class="col-lg-12">
                
                    <div class="text-center">
                        <h4 class="display-5 fw-bold"> Notre passion pour votre <span class="text-yellow">bien-être </span>genéral<h4>
                        
            
        </div>
        </div>
        <br> <br> <br> <br> <br> <br>
        <div class="row">
            <div class="bloc1">
            <div id="carousel-captions2" class="carousel slide " data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active"  id="carousel">
                        <img class="d-block w-100 br-5" alt="" src="{{asset('images/image10.png')}}" height="450px" data-bs-holder-rendered="true">
                        <div class="carousel-caption" id="carou">
                            
                            <h3 style="height:200px; font-size:45px; width:800px;text-align:left; position:relative; top:200px;">  Que ta nourriture soit ton médicament. <br> Hippocrate </h3>
                            
                        </div>
                    </div>
                    <div class="carousel-item"  id="carousel">
                        <img class="d-block w-100 br-5" alt="" src="{{asset('images/image3.jpg')}}" height="450px" data-bs-holder-rendered="true">
                        <div class="d-none d-md-block"></div>
                        <div class="carousel-caption d-none d-md-block" id="carou">
                            <h1>Nous sonmmes à l'affût des dernières avancées.</h1>
                        </div>
                    </div>
                    <div class="carousel-item"  id="carousel">
                        <img class="d-block w-100 br-5" alt="" src="{{asset('images/image6.png')}}"  data-bs-holder-rendered="true">
                        <div class="d-none d-md-block"></div>
                        <div class="carousel-caption d-none d-md-block"  id="carou">
                            <h3 style="height:200px; font-size:45px; width:800px;text-align:left; position:relative; top:200px;">  Pour des conseils sure et fiable</h3>
                            
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carousel-captions2" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-captions2" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        </div>

        <hr class="bg-success" style="width: 600px; height:5px; margin-left:220px;">
        <div class="row mt-5">
            <div class="text-center">
                <h4 class="display-5 fw-bold"> Nous sommes une <span class="text-yellow">equipe</span><h4>
                
            </div>
            <div class="col-xl-3 col-md-6 col-lg-6 mt-3">
                <div class="card">
                    <div class="card-body text-center">
                        <span class="avatar avatar-xxl bradius cover-image" data-bs-image-src="{{asset('images/valerie.png')}}" style="background: url(&quot;../assets/images/users/15.jpg&quot;) center center;"></span>
                        <h4 class="h4 mb-0 mt-3"> Proffesionnele de santé</h4>
                        <p class="card-text">Nutritionniste</p>
                        <p>
                            Qui aide les individus à optimiser leur bien-être. </p>
                        <div class="row user-social-detail text-center">
                            <p target="_blank" class="social-profile me-4 rounded text-center bg-secondary-transparent">
                                <i class=""></i>
                            </p>
                            <p target="_blank" class="social-profile me-4 rounded text-center bg-danger-transparent">
                                <i class=" text-danger"></i>
                            </p>
                            <p target="_blank" class="social-profile rounded text-center bg-success-transparent">
                                <i class=" text-success"></i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
  
            <div class="col-xl-3 col-md-6 col-lg-6 mt-3">
                <div class="card">
                    <div class="card-body text-center">
                        <span class="avatar avatar-xxl bradius cover-image" data-bs-image-src="{{asset('images/image3.jpg')}}" style="background: url(&quot;../assets/images/users/15.jpg&quot;) center center;"></span>
                        <h4 class="h4 mb-0 mt-3">Developeur</h4>
                        <p class="card-text">Informaticiens</p>
                        <p>
                            Qui crée, concois et assure la maintenance de sites web. </p>
                        <div class="row user-social-detail text-center">
                            <p target="_blank" class="social-profile me-4 rounded text-center bg-secondary-transparent">
                                <i class=""></i>
                            </p>
                            <p target="_blank" class="social-profile me-4 rounded text-center bg-danger-transparent">
                                <i class=" text-danger"></i>
                            </p>
                            <p target="_blank" class="social-profile rounded text-center bg-success-transparent">
                                <i class=" text-success"></i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="col-xl-3 col-md-6 col-lg-6 mt-3">
                <div class="card">
                    <div class="card-body text-center">
                        <span class="avatar avatar-xxl bradius cover-image" data-bs-image-src="{{asset('images/image14.jpg')}}" style="background: url(&quot;../assets/images/users/15.jpg&quot;) center center;"></span>
                        <h4 class="h4 mb-0 mt-3"> Proffesionnele de santé</h4>
                        <p class="card-text">Diéteticiens</p>
                        <p>
                            Qui aide en fonction des bésoins spécifique . </p>
                        <div class="row user-social-detail text-center">
                            <p target="_blank" class="social-profile me-4 rounded text-center bg-secondary-transparent">
                                <i class=""></i>
                            </p>
                            <p target="_blank" class="social-profile me-4 rounded text-center bg-danger-transparent">
                                <i class=" text-danger"></i>
                            </p>
                            <p target="_blank" class="social-profile rounded text-center bg-success-transparent">
                                <i class=" text-success"></i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="col-xl-3 col-md-6 col-lg-6 mt-3">
                <div class="card">
                    <div class="card-body text-center">
                        <span class="avatar avatar-xxl bradius cover-image" data-bs-image-src="{{asset('images/image4.png')}}" style="background: url(&quot;../assets/images/users/15.jpg&quot;) center center;"></span>
                        <h4 class="h4 mb-0 mt-3">Administrateur</h4>
                        <p class="card-text">Admin</p>
                        <p>
                            Qui gère l'administration du site. </p>
                        <div class="row user-social-detail text-center">
                            <p target="_blank" class="social-profile me-4 rounded text-center bg-secondary-transparent">
                                <i class=""></i>
                            </p>
                            <p target="_blank" class="social-profile me-4 rounded text-center bg-danger-transparent">
                                <i class=" text-danger"></i>
                            </p>
                            <p target="_blank" class="social-profile rounded text-center bg-success-transparent">
                                <i class=" text-success"></i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
       
        <hr class="bg-success" style="width: 600px; height:5px; margin-left:220px;">
        <div class="row mt-5">
            <h2 class="text-center fw-semibold">Nos services</h2>
            <div class="col-lg-12">
                <div class="mt-3">
                    <div class="text-dark">
                        <div class="services-statistics">
                            <div class="row text-center">
                                <div class="col-xl-3 col-md-6 col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="counter-status">
                                                <a href="">
                                                    <div class="counter-icon bg-primary-gradient box-shadow-primary">
                                                        <i class="icon icon-people text-white"></i>
                                                    </div>
                                                </a>
                                                <h4 class="mb-2 fw-semibold">Informations</h4>
                                                <p>Nous mettons à votre disposition un blog contenant des articles à jours sur différentes anomalies et leurs régimes</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6 col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="counter-status">
                                               <a href="">
                                                <div class="counter-icon bg-secondary-gradient box-shadow-secondary">
                                                    <i class="icon icon-rocket text-white"></i>
                                                </div>
                                               </a>
                                                <h4 class="mb-2 fw-semibold">Accompagnement</h4>
                                                <p>Notre équipe de medecin est disponible pour des accompagnement personnalisé.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6 col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="counter-statuss">
                                               <a href="">
                                                    <div class="counter-icon bg-success-gradient box-shadow-success">
                                                        <i class="fe fe-instagram text-white"></i>
                                                    </div>
                                               </a>
                                                <h4 class="mb-2 fw-semibold">Sensibilisation</h4>
                                                <p>Nous mettons le doigt sur certains dogme liée aux régime médical</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6 col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="counter-status">
                                               <a href="">
                                                <div class="counter-icon bg-danger-gradient box-shadow-danger">
                                                    <i class="fe fe-shopping-cart text-white"></i>
                                                </div>
                                               </a>
                                                <h4 class="mb-2 fw-semibold">Ressources</h4>
                                                <p>Nous mettons à votre disposition des produits adaptés à votre régime.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- COL-END -->
        </div>
        

    </div>
</div>
@endsection