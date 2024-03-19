@extends('layouts.pagesadmin')
@section('content')
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>PUBLIER UN ARTICLE</h4>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <div>
                            <a class="btn btn-primary" href="{{route('dashboard')}}" role="button">
                                Tableau de bord
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pd-20 card-box mb-30">
                <div class="clearfix">
                    <h4 class="text-blue h4">Remplissez le formulaire suivant:</h4>
                </div>

                <div class="wizard-content">
                    <form class="tab-wizard wizard-circle wizard" action="{{route('store-annonce')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <!-- Étape 1: Nom et prix -->
                        <h5>nom et prix de l'article</h5>
                        <section>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label >Nom :</label>
                                        <input type="text" class="form-control" name="nom" id="nom" placeholder="nom" required>
                                        <div class="error"></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label >Prix :</label>
                                        <input type="prix" class="form-control" name="prix" id="prix" placeholder="prix" required>
                                        <div class="error"></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Catégorie :</label>
                                        <div class="input-group">
                                            <select name="idCategorie" class="form-select mb-3" style="width: 100%; padding: 11px; font-size: 14px;">
                                              <option value="" selected disabled>Choisir une catégorie</option>
                                              @foreach ($categories as $categorie)
                                              <option value="{{$categorie->id}}">{{$categorie->libelle}}</option>
                                              @endforeach
                                            </select>
                                            <div class="error"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Étape 2: Description -->
                        <h5>Description</h5>
                        <section>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="textarea_editor form-control border-radius-0" name="description" id="description" placeholder="Saisissez votre texte ..." required></textarea>
                                        <div class="error"></div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Étape 3: Image -->
                        <h5>Image</h5>
                        <section>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Importer une image</label>
                                        <input type="file" name="image" required>
                                        <div class="error"></div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@if(Session::has('success'))
<script>
    toastr.success("{{ Session::get('success') }}", "Succès", {
        positionClass: "toast-top-right",
        closeButton: true,
        progressBar: true,
        timeOut: 5000,
        extendedTimeOut: 2000,
        tapToDismiss: false, // Optionnel : empêche la fermeture en cliquant sur la notification
    });
</script>
@endif
@endsection
