@extends('layouts.app')

@section('content')
    <section id="brand"  class="brand">
        <div class="container">
            <div class="brand-area">
                <div class="owl-carousel owl-theme brand-item">
                    <div class="item">
                        <a href="#">
                            <img src="{{asset("images/brand/br1.png")}}" alt="brand-image" />
                        </a>
                    </div><!--/.item-->
                    <div class="item">
                        <a href="#">
                            <img src="{{asset("images/brand/br2.png")}}" alt="brand-image" />
                        </a>
                    </div><!--/.item-->
                    <div class="item">
                        <a href="#">
                            <img src="{{asset("images/brand/br3.png")}}" alt="brand-image" />
                        </a>
                    </div><!--/.item-->
                    <div class="item">
                        <a href="#">
                            <img src="{{asset("images/brand/br4.png")}}" alt="brand-image" />
                        </a>
                    </div><!--/.item-->

                    <div class="item">
                        <a href="#">
                            <img src="{{asset("images/brand/br5.png")}}" alt="brand-image" />
                        </a>
                    </div><!--/.item-->

                    <div class="item">
                        <a href="#">
                            <img src="{{asset("images/brand/br6.png")}}" alt="brand-image" />
                        </a>
                    </div><!--/.item-->
                </div><!--/.owl-carousel-->
            </div><!--/.clients-area-->

        </div><!--/.container-->

    </section>
@endsection
