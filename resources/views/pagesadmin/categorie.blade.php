@extends('layouts.pagesadmin')

@section('content')
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>CATEGORIE</h4>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <div>
                            <a class="btn btn-primary" href="#" role="button" data-toggle="modal" data-target="#ajouterCategorieModal">
                                Ajouter une categorie
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                @foreach ($categories as $categorie)
                <div class="col-lg-4 col-md-6 col-sm-12 mb-30">
                    <div class="pd-20 card-box text-center height-100-p">
                        <h5 class="pt-20 h5 mb-30" value="{{$categorie->id}}">{{$categorie->libelle}}</h5>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<!-- Modal pour l'ajout de catégorie -->
<div class="modal fade" id="ajouterCategorieModal" tabindex="-1" role="dialog" aria-labelledby="ajouterCategorieModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ajouterCategorieModalLabel">Ajouter une catégorie</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('ajouter-categorie') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="libelle">Libellé de la catégorie:</label>
                        <input type="text" class="form-control" id="libelle" name="libelle" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
