@extends('layout.interface')

@section('content')
    <!-- Start Page Title Area -->
    <div style="margin-top: 90pt" class="page-title">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <h3>News Details</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Blog Details Area -->
    <section class="blog-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="offset-lg-2 col-lg-8 col-md-12">
                    <div class="blog-details">
                        <div class="article-text">
                            <ul class="post-meta">
                                <li><i class="icofont-clock-time"></i> {{ \Carbon\Carbon::parse($news->created_at)->isoFormat("MMM D YYYY") }}</li>
                            </ul>
                            <h4 class="title">{{$news->title}}</h4>

                            <p>{{$news->detail}}</p>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Details Area -->

@endsection
