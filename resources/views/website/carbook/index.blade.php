<!DOCTYPE html>
@extends('admin.admin_template')



<!-- END nav -->

<div class="hero-wrap ftco-degree-bg" style="background-image: url('images/bg_1.jpg');"
     data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
            <div class="col-lg-8 ftco-animate">
                <div class="text w-100 text-center mb-md-5 pb-md-5">
                    <h1 class="mb-4">Fast &amp; Easy Way To Rent A Car</h1>
                    <p style="font-size: 18px;">A small river named Duden flows by their place and supplies it with the
                        necessary regelialia. It is a paradisematic country, in which roasted parts</p>
                    <a href="https://vimeo.com/45830194"
                       class="icon-wrap popup-vimeo d-flex align-items-center mt-4 justify-content-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="ion-ios-play"></span>
                        </div>
                        <div class="heading-title ml-5">
                            <span>Easy steps for renting a car</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-no-pt bg-light">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-12	featured-top">
                <div class="row no-gutters">
                    <div class="col-md-4 d-flex align-items-center">
                        <form action="/order" method="POST"
                              class="request-form ftco-animate bg-primary">
                            {{csrf_field()}}
                            <h2>Make your trip</h2>
                            <div class="form-group">
                                <label for="" class="label">موقع استلام السيارة</label>
                                <select name="car_id">
                                    <option value="1">firaie</option>
                                </select></div>
                            <div class="form-group">
                                <label for="" class="label">رخصة القيادة , اثبات الشخصية ,الجواز</label>
                                <input type="number" class="form-control"
                                       placeholder="اثبات  الشخصية " name="coustmer_linece">
                            </div>


                            <div class="d-flex">
                                <div class="form-group mr-2">
                                    <label for="" class="label">تاريخ استلام السيارة</label>
                                    <input name="pick_date" type="date"
                                           class="form-control" id="" placeholder="Date">
                                </div>
                                <div class="form-group ml-2">
                                    <label for="" class="label">تاريخ السيارة</label>
                                    <input type="date" name="delever_date"
                                           class="form-control" id="
" placeholder="Date">
                                </div>


                            </div>
                            <div class="form-group">
                                <label for="" class="label">زمن استلام السيارة</label>
                                <input type="time" name="time"
                                       class="form-control"
                                       placeholder="Time">
                            </div>
                            <div class="form-group">
                                <button type="submit" value="" class="btn btn-secondary py-3 px-4">اطلب السيارة الان
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-8 d-flex align-items-center">
                        <div class="services-wrap rounded-right w-100">
                            <h3 class="heading-section mb-4">Better Way to Rent Your Perfect Cars</h3>
                            <div class="row d-flex mb-4">
                                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                                    <div class="services w-100 text-center">
                                        <div class="icon d-flex align-items-center justify-content-center"><span
                                                class="flaticon-route"></span></div>
                                        <div class="text w-100">
                                            <h3 class="heading mb-2">Choose Your Pickup Location</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                                    <div class="services w-100 text-center">
                                        <div class="icon d-flex align-items-center justify-content-center"><span
                                                class="flaticon-handshake"></span></div>
                                        <div class="text w-100">
                                            <h3 class="heading mb-2">Select the Best Deal</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                                    <div class="services w-100 text-center">
                                        <div class="icon d-flex align-items-center justify-content-center"><span
                                                class="flaticon-rent"></span></div>
                                        <div class="text w-100">
                                            <h3 class="heading mb-2">Reserve Your Rental Car</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p><a href="#" class="btn btn-primary py-3 px-4">Reserve Your Perfect Car</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>


<section class="ftco-section ftco-no-pt bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                <span class="subheading">What we offer</span>
                <h2 class="mb-2">Feeatured Vehicles</h2>
            </div>
        </div>
        <div class="row" >
            <div class="col-md-12">
                <div class="carousel-car owl-carousel">
                    <div class="item" id="pushhere">
                        <div class="car-wrap rounded ftco-animate">
                            <div class="img rounded d-flex align-items-end"
                                 style="background-image: url(images/car-1.jpg);">
                            </div>
                            <div class="text">
                                <h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2>
                                <div class="d-flex mb-3">
                                    <span class="cat">Cheverolet</span>
                                    <p class="price ml-auto">$500 <span>/day</span></p>
                                </div>
                                <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book
                                        now</a> <a href="#" class="btn btn-secondary py-2 ml-1">Details</a></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- loader -->
<div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00"/>
    </svg>
</div>
</html>
</html>
