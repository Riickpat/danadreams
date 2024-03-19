@extends('layouts.pagesadmin')
@section('content')
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>VOIR MES BLOGS</h4>
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
                    <h4 class="text-blue h4">Liste de mes blogs publiés :</h4>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Images</th>
                                <th>Titre</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($blogs as $blog)
                            <tr>
                                <td class="table-plus">
                                    <img src="{{ asset('/articlesImages/' . $blog->image) }}" class="rounded-circle img-rounded" width="40" height="40" alt="">
                                </td>

                                <td>{{$blog->titre}}</td>
                                <td>{{$blog->description}}</td>
                                <td>
                                    <div class="dropdown">
                                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                            <i class="dw dw-more"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                            <button type="button" class="btn btn-primary btn-xs m-2" data-toggle="modal" data-target="#modal{{$blog->id}}"><i class="bx bxs-pencil"></i></button>
                                            <button class="btn btn-sm btn-danger" onclick="confirmDelete('{{ $blog->id }}')"><i class='bx bxs-trash'></i></button>
                                            <form id="form-{{ $blog->id }}" action="{{ route('delete-blog', ['blog' => $blog->id]) }}" method="post">
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
@foreach($blogs as $blog)
<!-- Modal pour la modification de l'article -->
<div class="modal fade" id="modal{{$blog->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modifier le blog</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Formulaire pour la modification -->
                <form action="{{ route('update-annonce', $blog->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="titre">Titre</label>
                        <input type="titre" class="form-control" id="titre" name="titre" value="{{$blog->prix}}">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="4">{{$blog->description}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control-file" id="image" name="image">
                        <img src="{{asset('/storage/'.$blog->image)}}" width="70" height="70" alt="">
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
    function confirmDelete(blogId) {
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
                document.getElementById('form-' + blogId).submit();
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
