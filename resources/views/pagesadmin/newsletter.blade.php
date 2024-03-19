@extends('layouts.pagesadmin')

@section('content')
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>NEWSLETTER</h4>
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

                <!-- Export Datatable start -->
                <div class="card-box mb-30">
                    <div class="pd-20">
                    </div>
                    <div class="pb-20">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover multiple-select-row data-table-export nowrap">
                                <thead>
                                    <tr>
                                        <th>Téléphone</th>
                                        <th>Emails</th>
                                        <th>Dates</th>
                                        <th>Heures</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($newsletter as $newsletter)
                                    <tr>
                                        <td>{{$newsletter->telephone}}</td>
                                        <td>{{$newsletter->email}}</td>
                                        <td>{{$newsletter->created_at->format('d/m/Y')}}</td>
                                        <td>
                                            {{ $newsletter->created_at->format('H:i')}}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Export Datatable End -->
            </div>
        </div>
    </div>
@endsection
