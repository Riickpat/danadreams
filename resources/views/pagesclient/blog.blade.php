@extends('layouts.pagesclient')
@section('content')

    <!-- ***** Main Banner Area Start ***** -->
    <div class="page-heading about-page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>Lisez toutes nos annonces & actualités</h2>
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Blog Area Starts ***** -->
    <section class="our-services" style="padding: 80px 0; background-color: #f8f9fa;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2 style="font-size: 36px; margin-bottom: 30px; text-align: center;">Nos actualités</h2>
                        <span style="display: block; font-size: 18px; color: #666; text-align: center;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</span>
                    </div>
                </div>
                @foreach ($blogs as $blog)
                <div class="col-lg-4">
                    <div class="blog-item" style="background-color: #fff; border-radius: 10px; overflow: hidden; box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);">
                        <div class="blog-image" style="border-bottom: 2px solid #f0f0f0;">
                            <img src="{{asset('/articlesImages/' . $blog->image)}}" alt="" style="width: 100%; height: auto; max-height: 300px;">
                        </div>
                        <div class="blog-content" style="padding: 20px;">
                            <h4 style="font-size: 24px; margin-bottom: 10px;overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">{{ $blog->titre }}</h4>
                            <p style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">{{($blog->description)}}</p>
                            <div class="blog-details" style="margin-top: 20px;">
                                <span style="font-size: 14px; color: #FF0000; float: left;">{{$blog->created_at->format('d F Y')}}</span>
                                <a href="{{route('blogdetails', $blog)}}" style="font-size: 14px; color: #007bff; text-decoration: none; transition: color 0.3s; float: right;">Lire la suite</a>
                                <div style="clear: both;"></div> <!-- Pour assurer le bon alignement des éléments -->
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ***** Blog Area End ***** -->

@endsection