            <!-- app-Header -->
<div class="app-header header sticky">
    <div class="container-fluid main-container">
        <div class="d-flex">
            <div class="d-flex order-lg-2 ms-auto header-right-icons">
                <div class="navbar navbar-collapse responsive-navbar p-0">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                        <div class="d-flex order-lg-2">
                            <div class="breadcrumb" id="breadcrumb">
                                <a href="blog-post.html" class="btn btn-green">Front-end</a>
                            </div>

                            <div class="dropdown d-flex profile-1">
                                <a href="javascript:void(0)" data-bs-toggle="dropdown" class="nav-link leading-none d-flex">
                                    <img src="{{ asset('images/Nutrisante.png')}}" width="150" height="auto" class="nback">
                                    <img src="{{asset('images/medecin.png')}}" alt="profile-user"
                                     class="avatar  profile-user brround cover-image">
                                </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <div class="dropdown-divider m-0"></div>
                                    <a class="dropdown-item" href="{{route('profile.edit')}}">
                                        <i class="dropdown-icon fe fe-user"></i> Profil
                                    </a>
                                    <a class="dropdown-item" href="email-inbox.html">
                                        <i class="dropdown-icon fe fe-mail"></i> Liste de rendez-vous
                                        <span class="badge bg-danger rounded-pill float-end">5</span>
                                    </a>
                                    
                                    <a class="dropdown-item" href="login.html">
                                        <i class="dropdown-icon fe fe-alert-circle"></i> deconexion
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
            



            