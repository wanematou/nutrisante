
@extends('layouts.master')
@section('page-content')   
        <div class="bloc1">
            <div id="carousel-captions2" class="carousel slide " data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active"  id="carousel">
                        <img class="d-block w-100 br-5" alt="" src="{{asset('images/image7.png')}}"  data-bs-holder-rendered="true">
                        <div class="carousel-caption" id="carou">
                            <h3>Conseils nutritionnel</h3>
                            <p>Savourez la fraîcheur locale</p>
                            
                        </div>
                    </div>
                    <div class="carousel-item"  id="carousel">
                        <img class="d-block w-100 br-5" alt="" src="{{asset('images/image2.png')}}"  data-bs-holder-rendered="true">
                        <div class="d-none d-md-block"></div>
                        <div class="carousel-caption d-none d-md-block" id="carou">
                            <h1>Exploration gourmande des produits de chez nous</h1>
                        </div>
                    </div>
                    <div class="carousel-item"  id="carousel">
                        <img class="d-block w-100 br-5" alt="" src="{{asset('images/image6.png')}}"  data-bs-holder-rendered="true">
                        <div class="d-none d-md-block"></div>
                        <div class="carousel-caption d-none d-md-block"  id="carou">
                            <h2>Conseils de nos Experts en Nutrition</h2>
                            
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
        <div class="bloc2">
            <div class="section pb-0 bg-landing">
                <div class="container">
                    <div class="row" id="bloc2">
                        <h4 class="text-center fw-semibold" id="h4">Objectifs</h4>
                        <span class="landing-title"></span>
                        <h3 class="text-center fw-semibold mb-7">Vous aider à respecter votre régime avec des aliments disponible sur nos marchés locaux <br> avec des: </h3>
                    </div>
            </div>
            <div class="row bg-landing h-auto">
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 ">
                    <div class="card service">
                        <div class="card-body">
                            <div class="item-box text-center">
                                <div class=" text-center  mb-4 text-primary"> <img src="{{asset('images/medecin3.png')}}" alt="" width="500" height="auto"> </div>
                                <div class="item-box-wrap">
                                <h5 class="mb-2">Professionnels de Santé dynamique et qualifiés</h5>
                                <p class="text-muted mb-0">Pour vous guider et vous conseiller dans la gestion de votre régime médical.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                <div class="card service">
                    <div class="card-body">
                        <div class="item-box text-center">
                            <div class=" text-center text-danger-gradient mb-4"><img src="{{asset('images/image3.jpg')}}" alt="" width="500" height="auto"></div>
                            <div class="item-box-wrap">
                                <h5 class="mb-2">Articles à jour sur les regimes medicales</h5>
                                <p class="text-muted mb-0">Pour vous tenir à jour des avancés scientifiques en nutrition médicale.  </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                <div class="card service">
                    <div class="card-body">
                        <div class="item-box text-center">
                            <div class=" text-center text-success mb-4"><img src="{{asset('images/image4.png')}}" alt="" width="500" height="auto"></div>
                            <div class="item-box-wrap">
                            <h5 class="mb-2">Développeurs passionnés</h5>
                            <p class="text-muted mb-0">Pour penser et concevoir les cannaux d'information.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                <div class="card service">
                    <div class="card-body">
                        <div class="item-box text-center">
                            <div class="text-center text-warning-gradient mb-4"><img src="{{asset('images/image5.jpg')}}" alt="" width="500" height="auto"></div>
                            <div class="item-box-wrap">
                                <h5 class="mb-2">Ressources</h5>
                                <p class="text-muted mb-0">Pour mettre à votre disposition tout les produits dont vous avez bésoins.</p>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="sptb section bg-white" id="bloc3">
                <div class="container " id="Features">
                    <div class="row" id="features">
                        <h4 class="text-center fw-semibold" id="h4">Régimes</h4>
                        <span class="landing-title"></span>
                        <h2 class="fw-semibold text-center">Vous êtes sous régime médicale par ce que vous souffrez de:</h2>
                        <div class="row mx-auto">
                            <div class="col-lg-6 col-md-12">
                                <div class="card"
                                data-wow-delay="5s">
    
                                <div class="text-left"  id="textleft">
                                    
                                    <p class=" mb-0"><img src="{{asset('images/ob.jpg')}}" alt="" height="300" width="450"></p>
                                    <h5 class="text-left fw-bold" id="h4">De surpoids ou d'obésité?</h5>
                                </div>
                                </div>
                            </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class=""
                                    data-wow-delay="5s">
                                                    
                                        <div class="text-left"  id="textleft">
                                            
                                            <p class="mb-0">
                                            <img src="{{asset('images/irc.jpg')}}" alt="" height="300" width="450">
                                            </p>
                                            <h5 class="fw-bold">D'insuffisance renale?</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="card features"
                                        data-wow-delay="0.1s">                                                                                               
                                        <div class="text-left" id="textleft">
                                            
                                            <p class="mb-0">
                                                <img src="{{asset('images/hta.jpg')}}" alt="" height="300" width="450">
                                            </p>
                                            <h5 class="fw-bold">D'hypertension arterielle?</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="card "
                                        data-wow-delay="0.1s">                                               
                                        <div class="text-left"  id="textleft">
                                           
                                            <p class="mb-0">
                                            <img src="{{asset('images/cancer.jpg')}}" alt="" height="300" width="450">.
                                            </p>
                                            <h5 class="fw-bold">De cancer?</h5>
                                        </div>
                                    </div>
                                </div>
                                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
                       
        <div class="section bg-landing pb-0 bg-image-style" id="About">
            <div class="container">
                <div class="row">
                    <h4 class="text-center fw-semibold" id="h4">Notre mission</h4>
                    <span class="landing-title"></span>
                    <div class="text-center">
                        <h2 class="text-center fw-semibold">Bien-être par la nutrition médicale.
                    </h2>
                </div>
                <div class="col-lg-12">
                    <div class="card bg-transparent">
                        <div class="card-body text-dark">
                            <div class="statistics-info">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 ps-0">
                                        <div class="">
                                            <img src="{{asset('images/image12.jpeg')}}" alt="" height="400" width="550">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 pe-0 my-auto">

                                        <div class="">
                                            <h2 class="text-start fw-semibold fs-25 mb-6">La nutrition médicale offre bien plus que de simples repas. 
                                            </h2>
                                                                
                                            <div class="ms-5 mb-4">
                                                <h5 class="fw-bold">Comprendre la Nutrition Médicale
                                                </h5>
                                                <p>La nutrition médicale va au-delà de la simple alimentation. Elle consiste à choisir des aliments qui nourrissent votre corps en profondeur, favorisant la guérison et le bien-être. Explorez les bases de la nutrition médicale et apprenez à reconnaître les aliments riches en nutriments.
                                                </p>
                                            </div>
                                                                
                                                                
                                            <div class="ms-5 mb-4">
                                                <h5 class="fw-bold">Planification de Repas Équilibrés :</h5>
                                                <p>
                                                    Investir dans votre bien-être par le biais de la nutrition médicale est un cadeau que vous vous faites à vous-même. En adoptant des choix alimentaires judicieux, vous nourrissez votre corps de l'intérieur, favorisant une vie saine et équilibrée. Commencez dès aujourd'hui pour un avenir plus sain et plus heureux !
                                                </p>
                                            </div>
                                                               
                                        </div>
                                    </div>
                                </div>
                            </div>
                                           
                        </div>
                    </div>
                </div>
            </div>
        </div>



        
@endsection
