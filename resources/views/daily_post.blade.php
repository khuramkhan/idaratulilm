@extends('layout.interface')

@section('content')
    <!-- Start Page Title Area -->
    <div style="margin-top: 90pt" class="page-title">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <h3>ڈیلی پوسٹ</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <section class="news-area ptb-100">
        <div class="container">
            <div class="section-title">
                <h3>ڈیلی پوسٹ</h3>
            </div>
            <div class="row">
                    @foreach($dailyPost as $n)
                        <div class="col-lg-4 col-md-4">
                            <div style="border-style: solid; border-width: 1px " class="p-2">
                                <img src="{{'storage/'.$n->image}}" alt="blog" />
                                <div class="date"><span>{{date('d-M-Y', strtotime($n->created_at))}}</span></div>
                                <div class="blog-post-content">
                                    <h3><a href="#">{{substr($n->title, 0, 50)}}</a></h3>
                                    <p>{{substr($n->detail, 0, 70)}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
            </div>
        </div>
    </section>

@endsection
