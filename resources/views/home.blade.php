@extends('layout.interface')
<style>
    #scroll-container {
        overflow: hidden;
    }

    #scroll-text {
        /* animation properties */
        -moz-transform: translateX(100%);
        -webkit-transform: translateX(100%);
        transform: translateX(100%);

        -moz-animation: my-animation 15s linear infinite;
        -webkit-animation: my-animation 15s linear infinite;
        animation: my-animation 15s linear infinite;
    }

    /* for Firefox */
    @-moz-keyframes my-animation {
        from { -moz-transform: translateX(100%); }
        to { -moz-transform: translateX(-100%); }
    }

    /* for Chrome */
    @-webkit-keyframes my-animation {
        from { -webkit-transform: translateX(100%); }
        to { -webkit-transform: translateX(-100%); }
    }

    @keyframes my-animation {
        from {
            -moz-transform: translateX(100%);
            -webkit-transform: translateX(100%);
            transform: translateX(100%);
        }
        to {
            -moz-transform: translateX(-100%);
            -webkit-transform: translateX(-100%);
            transform: translateX(-100%);
        }
    }

</style>
@section('content')
    <div style="margin-top: 100px" class="main-banners">
        <div class="container">
            <div class="main-banner-content">
                <div class="home-slides">
                    <div class="hero-content">
                        <img style="width: 350px !important; display: block; margin-left: auto; margin-right: auto;" src="assets/ilm_logo_w.png">
                        <p>
                            ہمیں فخر ہے الحمدللہ! تمام دینی درساگاہیں اپنے اکابرین سے ملے روایتی نہج کے مطابق، اپنے
                            سائبان وفاق المدارس العربیہ پاکستان کے تحت تعلیمی سفر رواں دواں رکھے ہوئے ہیں۔
                        </p>
                        <a href="{{ route('about') }}" class="btn btn-primary">مزید جانتے</a>
                    </div>

                    <div class="hero-content">
                        <img style="width: 350px !important; display: block; margin-left: auto; margin-right: auto;" src="assets/ilm_logo_w.png">
                        <p>
                            مدارس کے طلباء میں ہم آہنگی کے فروغ کے لیے ایسا علمی ماحول پیدا کیا جائے جس سے تمام طلباءو
                            فضلاء مستفید ہوسکیں۔
                        </p>
                        <a href="{{ route('about') }}" class="btn btn-primary">مزید جانتے</a>
                    </div>
                </div>

            </div>
        </div>
        <div class="animation-shape">
            <div class="shape1"><img src="assets/img/shape1.png" alt="shape"/></div>
            <div class="shape2"><img src="assets/img/shape2.png" alt="shape"/></div>
        </div>
    </div>

    <div id="scroll-container">
        <div id="scroll-text">علمی وفکری محاضراتـ کا سلسلہ شروع ہوچکا ہے۔<div>
            </div>
        </div>

    <section class="about-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="about-content">
                        <h3 style="text-align: right">اہداف</h3>

                        <p style="text-align: right">:۔ حفظ القرآن کے لیے جدید طرزتدریس پر مبنی دارالقرآن کا قیام</p>

                        <p style="text-align: right" class="mb-0">ریسرچ سینٹر کا قیام: جس کے تحتـ علمی موضوعاتـ کی مقالہ جاتـ کی صورتـ میں اشاعتـ۔</p>
                        <p style="text-align: right" class="mb-0">:۔ دارالتحقیق والارشاد کا قیام: جس کا مقصد روزمرہ زندگی کے درپیش مسائل میں اکابرواسلاف کی تحقیقاتـ کی روشنی میں امتـ کی راہنمائی</p>
                        <p style="text-align: right" class="mb-0">اہل علم اور مطالعہ کاشوق رکھنے والے عامۃالمسلمین  کے لئےمختلف دینی موضوعاتـ پر لائبریری کا قیام۔</p>
                        <p style="text-align: right" class="mb-0">مدارس كے طلباء وفضلاء کو ایسے فنون سکھانا جن کی بدولتـ وہ اپنی معاشی مشکلاتـ دور کرسکیں۔</p>
                        <p style="text-align: right" class="mb-0">دینی و عصری تعلیم کے بیکـ وقتـ حصول کے مواقع فراہم کرنا۔</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="about-content">
                        <h3 style="text-align: right" >تعارف</h3>
                        <p style="text-align: right" >ہمیں فخر ہے الحمدللہ! تمام دینی درساگاہیں اپنے اکابرین سے ملے روایتی نہج کے مطابق اپنے سائبان وفاق المدارس العربیہ پاکستان کے تحتـ  تعلیمی سفر رواں دواں    رکھے ہوئے ہیں۔</p>
                        <p style="text-align: right" class="mb-0">البتہ  ضرورتـ اس امر کی ہےکہ مدارسـ کے طلباء میں ہم آہنگی کے فروغ کے لیے ایسا  علمی ماحول پیدا کیا جائے  جس سے تمام طلباءو فضلاء مستفید ہو سکیں۔ خاص طور پر سکول وکالجزکے نوجوان طلباء کو دینی تعلیم سے روشناس کروایا جاسکے۔</p>
                        <p style="text-align: right" class="mb-0">عوامی حلقوں اور مساجد میں فہم دین کے عنواناتـ پر مختلفـ موضوعاتـ کے کورسز کروائے جائیں گے۔ انہی ضروریاتـ کو مدنظر رکھتے ہوئےمفکرِ اسلام حضرتـ مولانا زاہدالراشدی صاحبـ دامتـ برکاتہم، حضرتـ مولانا ڈاکٹر الیاس فیصل صاحبـ دامتـ برکاتہم مقیم مدینہ منورہ اور حضرت مولانا محمد عبیداللہ عامر صاحبـ دامتـ برکاتہم کی سرپرستی میں الحمد للہ! جون 2022ء کو ادارۃ العلم گوجرانوالہ کا قیام عمل میں لایا گیا۔</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="news-area ptb-100">
        <div class="container">
            <div class="section-title">
                <h3>حالیہ سرگرمیاں</h3>
            </div>
            <div class="row">
                <div class="news-slider">
                    @foreach($news as $n)
                    <div class="col-lg-12 col-md-12">
                        <div class="single-blog-post">
                            <img src="{{asset('assets/img/blog-one.jpg')}}" alt="blog" />
                            <div class="date"><span>May, 2022</span></div>
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
        </div>
    </section>

    <section class="featured-courses">
        <div class="container">
            <div class="section-title">
                <h3>نمایاں کورسز</h3>
                <p>ایک ساتھ سیکھنے اور بڑھنے کی جگہ</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-courses">
                        <div class="icon bg-1"><i class="icofont-pen-holder"></i></div>
                        <h3>Norani Qaida</h3>
                        <p>Al-Qaeda Noorani is a book used for beginner students which is very effective for learning
                            Arabic...</p>
                        <a href="#" class="read-more">
                            <span class="left"><i class="icofont-rounded-double-right"></i></span> مزید پڑھیں <span
                                class="right"><i class="icofont-rounded-double-right"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-courses">
                        <div class="icon bg-1"><i class="icofont-pen-holder"></i></div>
                        <h3>Tajweed Quran</h3>
                        <p>Tajweed means to create beauty in readingAnd each letter is pronounced according to all the
                            adjectives . </p>
                        <a href="#" class="read-more">
                            <span class="left"><i class="icofont-rounded-double-right"></i></span> مزید پڑھیں <span
                                class="right"><i class="icofont-rounded-double-right"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-courses">
                        <div class="icon bg-1"><i class="icofont-pen-holder"></i></div>
                        <h3>Hifz Quran</h3>
                        <p>For Holy Quran Online Memorization Course 100% practical and standard class is reserved </p>
                        <a href="#" class="read-more">
                            <span class="left"><i class="icofont-rounded-double-right"></i></span> مزید پڑھیں <span
                                class="right"><i class="icofont-rounded-double-right"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-courses">
                        <div class="icon bg-1"><i class="icofont-pen-holder"></i></div>
                        <h3>Hadith</h3>
                        <p>Hadith in Islam refers to the words, deeds and speech of the Prophet of Islam, Hazrat
                            Muhammad (PBUH).</p>
                        <a href="#" class="read-more">
                            <span class="left"><i class="icofont-rounded-double-right"></i></span> مزید پڑھیں <span
                                class="right"><i class="icofont-rounded-double-right"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
