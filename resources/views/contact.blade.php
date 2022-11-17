@extends('layout.interface')

@section('content')

    <div style="margin-top: 90pt" class="page-title">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <h3>رابطہ کریں۔</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Contact Area -->
    <section class="contact-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="contact-box">
                        <div class="icon">
                            <i class="icofont-phone"></i>
                        </div>

                        <div class="content">
                            <h4>Phone</h4>
                            <p><a href="#">+92 308 3435365</a></p>
                            <p><a href="#">+92 304 9677598</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="contact-box">
                        <div class="icon">
                            <i class="icofont-envelope"></i>
                        </div>

                        <div class="content">
                            <h4>E-mail</h4>
                            <p><a href="#"><span class="__cf_email__" >idaratulilmgrw@gmail.com</span> </a></p>
                            <p><a href="#"><span class="__cf_email__" >info@idaratulilm.com</span></a></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="contact-box">
                        <div class="icon">
                            <i class="icofont-google-map"></i>
                        </div>

                        <div class="content">
                            <h4>Location</h4>
                            <p>کیمپس جامع مسجد صدیقیہ 149/Bسیٹلائٹ ٹاؤن،
                                <span>گوجرانوالہ</span></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
                    <!-- Map Area -->
                    <div id="map">
                        <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=gujranwala+(idaratulilmgrw)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.maps.ie/distance-area-calculator.html">distance maps</a></iframe>
                    </div>
                    <!-- End Map Area -->
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="leave-your-message">
                        <h3>Leave Your Message</h3>
                        <p>If you have any questions about the services we provide simply use the form below. We try and respond to all queries and comments within 24 hours.</p>

                        <div class="stay-connected">
                            <h3>Stay Connected</h3>
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/Idaratulilmgrw.pk">
                                        <i class="icofont-facebook"></i>

                                        <span>Facebook</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="https://www.youtube.com/channel/UCwmuWaT0dccClBmqRR24WoQ">
                                        <i class="icofont-youtube"></i>

                                        <span>Youtube</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-md-12">
                    <form id="contactSubmit" method="post" action="#" >
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label for="name">Name*</label>
                                    <input type="text" class="form-control" name="name" required data-error="Please enter your name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label for="email">Email*</label>
                                    <input type="email" class="form-control" name="email" required data-error="Please enter your email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label for="number">Phone Number*</label>
                                    <input type="text" class="form-control" name="number" required data-error="Please enter your number">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label for="message">Message*</label>
                                    <textarea name="message" class="form-control" cols="30" rows="4" required data-error="Write your message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <button onclick="submitForm()" type="submit" name="submit" class="btn btn-primary">Send Message</button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Area -->

    <script>
        function submitForm() {
            $('#contactSubmit').submit();
        }
    </script>


@endsection
