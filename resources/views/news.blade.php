@extends('layout.interface')

@section('content')
    <!-- Start Page Title Area -->
    <div style="margin-top: 90pt" class="page-title">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <h3>حالیہ سرگرمیاں</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <section class="news-area ptb-100">
        <div class="container">
            <div class="section-title">
                <h3>حالیہ سرگرمیاں</h3>
            </div>
            <div class="row">
                    @foreach($news as $n)
                        <div class="col-lg-4 col-md-4">
                            <div class="single-blog-post">
                                <img src="{{asset('assets/img/blog-one.jpg')}}" alt="blog" />
                                <div class="date"><span>{{date('d-M-Y', strtotime($n->created_at))}}</span></div>
                                <div class="blog-post-content">
                                    <h3><a href="#">{{substr($n->title, 0, 50)}}</a></h3>
                                    <p>{{substr($n->detail, 0, 70)}}</p>
                                    <a href="{{route('news_detail', $n->id)}}" class="read-more">
                                        <span class="left"><i class="icofont-rounded-double-right"></i></span> مزید جانتے <span class="right"><i class="icofont-rounded-double-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
            </div>
        </div>
    </section>

@endsection
