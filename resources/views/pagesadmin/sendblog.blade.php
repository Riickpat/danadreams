@extends('layouts.pagesadmin')
@section('content')
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>PUBLIER UN BLOG</h4>
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

            <!-- horizontal Basic Forms Start -->
				<div class="pd-20 card-box mb-30">
					<form action="{{route('store-blog')}}" method="post" enctype="multipart/form-data">
                        @csrf
						<div class="form-group">
							<label>Titre</label>
							<input class="form-control" type="name" placeholder="titre du blog" name="titre" required>
                            <div class="error"></div>
						</div>
						<div class="form-group">
							<label>Description</label>
							<textarea class="form-control" type="name" placeholder="description" name="description" required></textarea>
                            <div class="error"></div>
						</div>
						<div class="form-group">
							<label>Entrée de fichier personnalisé</label>
							<div class="custom-file">
								<input type="file" class="custom-file-input" name="image">
								<label class="custom-file-label">Choisir un fichier</label>
							</div>
						</div>
                        <button type="submit" class="model_bt btn btn-primary">Publier</button>
					</form>
				</div>
				<!-- horizontal Basic Forms End -->
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