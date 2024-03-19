@extends('layouts.pagesclient')
@section('content')

    <!-- ***** Main Banner Area Start ***** -->
    <div class="page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>Consultez nos produits</h2>
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->


    <!-- ***** Products Area Starts ***** -->
    <section class="section" id="products">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Consultez tous nos produits</h2>
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($articles as $article)
                <div class="col-lg-3">
                    <div class="item">
                        <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <li><a href="{{ '/articlesImages/' . $article->image }}"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="{{route('shopdetails', $article)}}"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <img src="{{ '/articlesImages/' . $article->image }}" alt="">
                        </div>
                        <div class="down-content">
                            <h4>{{ $article->nom }}</h4>
                            <span>{{ $article->prix }} Fcfa</span>
                            <ul class="stars">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach

                <!-- <div class="col-lg-12">
                    <div class="pagination">
                        <ul>
                            <li>
                                <a href="#">1</a>
                            </li>
                            <li class="active">
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                            <li>
                                <a href="#">></a>
                            </li>
                        </ul>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!-- ***** Products Area Ends ***** -->
    
@endsection