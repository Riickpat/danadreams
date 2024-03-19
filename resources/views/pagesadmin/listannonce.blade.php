@extends('layouts.pagesadmin')

@section('content')
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>VOIR MES ARTICLES</h4>
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
                    <h4 class="text-blue h4">Liste de mes articles publiés :</h4>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Images</th>
                                <th>Nom</th>
                                <th>Prix</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($articles as $article)
                            <tr>
                                <td class="table-plus">
                                    <!-- <img src="{{asset('/storage/'.$article->image)}}" width="70" height="70" alt=""> -->
                                    <img src="{{ asset('/articlesImages/' . $article->image) }}" class="rounded-circle img-rounded" width="40" height="40" alt="">
                                </td>
                                <td>
                                    <h5 class="font-16">{{$article->nom}}</h5>
                                </td>
                                <td>{{$article->prix}}</td>
                                <td>{{$article->description}}</td>
                                <td>
                                    <div class="dropdown">
                                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                            <i class="dw dw-more"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                            <button type="button" class="btn btn-primary btn-xs m-2" data-toggle="modal" data-target="#modal{{$article->id}}"><i class="bx bxs-pencil"></i></button>
                                            <!-- <form action="{{route('delete-annonce',($article->id))}}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cet Article ?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger m-2" id="sa-warning"><i class='bx bxs-trash'></i></button>
                                            </form> -->
                                            <button class="btn btn-sm btn-danger" onclick="confirmDelete('{{ $article->id }}')"><i class='bx bxs-trash'></i></button>
                                            <form id="form-{{ $article->id }}" action="{{ route('delete-annonce', ['article' => $article->id]) }}" method="post">
                                                @csrf
                                                <input type="hidden" name="_method" value="delete">
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            <!-- Vos données d'annonces ici -->
                        </tbody>
                    </table>
                </div>

                <div class="text-center mt-4">
                    <!-- Pagination -->
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Précédent</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Suivant</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Styles CSS -->
<style>
    /* Vos styles CSS ici */
    .main-container {
        /* Vos styles pour le conteneur principal */
    }

    .table {
        /* Styles pour la table */
    }

    /* Ajoutez vos autres styles ici */
</style>

<!-- Scripts JS -->
<script>
    // Vos scripts JS ici
</script>


<!-- Ajoute ce code dans ta vue où tu veux afficher le modal -->
@foreach($articles as $article)
<!-- Modal pour la modification de l'article -->
<div class="modal fade" id="modal{{$article->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modifier l'article</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Formulaire pour la modification -->
                <form action="{{ route('update-annonce', $article->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input type="text" class="form-control" id="nom" name="nom" value="{{$article->nom}}">
                    </div>
                    <div class="form-group">
                        <label for="prix">Prix</label>
                        <input type="prix" class="form-control" id="prix" name="prix" value="{{$article->prix}}">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="4">{{$article->description}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control-file" id="image" name="image">
                        <img src="{{asset('/storage/'.$article->image)}}" width="70" height="70" alt="">
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Modifier</button>
                        <button type="button" class="btn btn-secondary ml-2" data-dismiss="modal">Fermer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach


@endsection
@section('scripts')
<script>
    function confirmDelete(articleId) {
        Swal.fire({
            title: 'Êtes-vous sûr?',
            text: 'Cette action est irréversible!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Oui, supprimer!'
        }).then((result) => {
            if (result.isConfirmed) {
                // Si l'utilisateur confirme, soumettre le formulaire de suppression
                document.getElementById('form-' + articleId).submit();
            }
        });
    }
</script>
@if(Session::has('success'))
<script>
    toastr.success("{{Session::get('success')}}", {
        positionClass: "toast-top-right",
        closeButton: true,
        progressBar: true,
        timeOut: 5000,
        extendedTimeOut: 2000,
    });
</script>
@endif
@endsection
