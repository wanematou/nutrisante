@extends('layouts.master')
@section('page-content')

<div class="col-xl-6 col-lg-12 offset-3 mt-2">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Inscription professionnel de santé</h4>
        </div>
        <div class="card-body">
            <form class="form-horizontal">
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Nom</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" placeholder="nom">
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Prenom</label>
                    <div class="col-md-9">
                        <input type="text" name="prenom" class="form-control" placeholder="prenom">
                    </div>
                </div>
                <div class="row mb-4">
                    <label class="col-md-3 form-label" for="email">Email</label>
                    <div class="col-md-9">
                        <input type="email" id="example-email" name="email" class="form-control" placeholder="Email" autocomplete="username">
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Mot de passe</label>
                    <div class="col-md-9">
                        <input type="password" class="form-control" value="password" name="password" autocomplete="new-password">
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Ville de résidence</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" value="ville" name="ville">
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Photo</label>
                    <div class="col-md-9">
                        <input type="file" name="photo" class="form-control" value="Photo">
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Rôle</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" value="role">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection