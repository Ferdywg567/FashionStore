@extends('buyer.layouts.app')
@section('buyer-content')


        <!-- Product List Start -->
        <div class="product-view">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="product-view-top">
                                    <div class="row">
                                       
                                       
                            @foreach ($data as $d)
                            <div class="col-md-4">
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="">{{$d->name}}</a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="product-detail.html">
                                            <img src="{{$d->image}}" height='200px'  alt="Product Image">
                                        </a>
                                        <div class="product-action">
                                            <a href="#"><i class="fa fa-cart-plus"></i></a>
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="#"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <h3><span>Rp. </span>{{$d->price}}</h3><br><br>
                                        
                                    </div>
                                </div>
                            </div>
                            @endforeach

     @endsection                     
                       
        
        