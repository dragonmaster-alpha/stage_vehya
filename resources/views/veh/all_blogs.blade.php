<!DOCTYPE html>

<html lang="en">



<!------- Vehya Project Starts ON Friday,10-Dec-2021 at 4.00PM ------->


<!DOCTYPE html>

<html lang="en">



<!------- Vehya Project Starts ON Friday,10-Dec-2021 at 4.00PM ------->





<!-- Mirrored from iwebwiserprojects.xyz/Vehya_Project/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Dec 2021 06:22:14 GMT -->

@include('veh.includes.assets')



<body>

    <!------- Main Container Starts ------->

    <div class="main-container">

        <!------- Header section Starts ------->

        @include('veh.includes.header')


        <!------- Header section End ------->




        <!------- Hero Banner(Pricing-banner title) As All bolog banner title Section Start ------->

        <section class="pricing-banner hero-banner-section base-bg">

            <div class="container-fluid">

                <div class="row justify-content-center align-items-center">

                    <div class="col-lg-4 col-12">

                        <!------ Page Hero Title ------>

                        <div class="page-hero-title text-white text-center">

                            <h3 class="text-warning text-uppercase letter-5">vehya</h3>

                            <h1 class="russo-font text-uppercase">Blog Articles</h1>

                            <p class="my-3">

                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor

                                incididunt ut labore et dolore magna

                                aliqua. Ut enim ad minim veniam

                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!------- Hero Banner Section End ------->



        <!------- How Can we Help Section As All Blogs Section Starts  ------->

        <section class="pricing blog-sec can-help">

            <!-- Blog container 1 -->

            <div class="eq-cat cat-1 pt-0">

                <!------- Equipment Category Section Title ------->

                <div class="title mt-lg-5 russo-font position-relative mb-5">

                    <div class="row justify-content-between align-items-center">

                        <div class="col-lg-4 col-12 pb-lg-5">

                            <h2 class="text-truncate-by-2">Showing 9 from 98 result</h2>

                        </div>



                        <div class="col-lg-1 col-6 ms-lg-auto pb-lg-5 text-end">

                            <label for="blog-filter" class="text-dark roboto-font fw-bold">Sort By :-</label>

                        </div>



                        <div class="col-lg-2 col-6 pb-lg-5">

                            <!------- Blog Filter Part ------->

                            <select class="form-select roboto-font" id="blog-filter">

                                <option class="d-none" selected>Sort your blog</option>

                                <option>Newest</option>

                                <option>Oldest</option>

                                <option>Most Read</option>

                                <option>Most Viewed</option>

                            </select>

                        </div>

                    </div>

                </div>



                <!----- Equipment Section Card ----->

                <div class="row gx-lg-5 gx-0 gy-5 justify-content-between align-items-center pt-2 pt-lg-5">

                    <!------- Blog Post 1 ------->

                    <div class="col-lg-4 col-12">

                        <div class="card basic-card border-0">

                            <div class="basic-card-img position-relative">

                                <img src="{{env('APP_URL')}}public/veh/assets/img/blogs.svg" class="card-img-top default-img img-cover"

                                    alt="Product">



                                <a href="#" class="m-0 img-overlay-price">Read More</a>

                            </div>



                            <div class="card-body py-5 px-5">

                                <h3 class="card-title russo-font text-uppercase py-4">BLOG POST 1</h3>



                                <ul class="card-dis-list row list-unstyled gy-5 gx-lg-5 gx-4">

                                    <li class="col-lg-12 col-12">

                                        <h3 class="text-truncate mb-0">November 29, 2021</h3>

                                        <p class="text-muted text-truncate-by-3 my-3">

                                            Lorem ipsum dolor sit amet, consectetur adipiscing

                                            elit, sed do eiusmod tempor incididunt ut labore et

                                            dolore magna aliqua. Ut enim ad minim veniam, quis.

                                            Lorem ipsum dolor sit amet, consectetur adipiscing

                                            elit, sed do eiusmod tempor incididunt ut labore et

                                            dolore magna aliqua. Ut enim ad minim veniam, quis

                                        </p>



                                    </li>

                                </ul>

                            </div>

                        </div>

                    </div>



                    <!------- Blog Post 2 ------->

                    <div class="col-lg-4 col-12">

                        <div class="card basic-card border-0">

                            <div class="basic-card-img position-relative">

                                <img src="{{env('APP_URL')}}public/veh/assets/img/blogs.svg" class="card-img-top default-img img-cover"

                                    alt="Product">



                                <a href="#" class="m-0 img-overlay-price">Read More</a>

                            </div>



                            <div class="card-body py-5 px-5">

                                <h3 class="card-title russo-font text-uppercase py-4">BLOG POST 2</h3>



                                <ul class="card-dis-list row list-unstyled gy-5 gx-lg-5 gx-4">

                                    <li class="col-lg-12 col-12">

                                        <h3 class="text-truncate mb-0">November 29, 2021</h3>

                                        <p class="text-muted text-truncate-by-3 my-3">

                                            Lorem ipsum dolor sit amet, consectetur adipiscing

                                            elit, sed do eiusmod tempor incididunt ut labore et

                                            dolore magna aliqua. Ut enim ad minim veniam, quis.

                                            Lorem ipsum dolor sit amet, consectetur adipiscing

                                            elit, sed do eiusmod tempor incididunt ut labore et

                                            dolore magna aliqua. Ut enim ad minim veniam, quis

                                        </p>



                                    </li>

                                </ul>

                            </div>

                        </div>

                    </div>



                    <!------- Blog Post 3 ------->

                    <div class="col-lg-4 col-12">

                        <div class="card basic-card border-0">

                            <div class="basic-card-img position-relative">

                                <img src="{{env('APP_URL')}}public/veh/assets/img/blogs.svg" class="card-img-top default-img img-cover"

                                    alt="Product">



                                <a href="#" class="m-0 img-overlay-price">Read More</a>

                            </div>



                            <div class="card-body py-5 px-5">

                                <h3 class="card-title russo-font text-uppercase py-4">BLOG POST 3</h3>



                                <ul class="card-dis-list row list-unstyled gy-5 gx-lg-5 gx-4">

                                    <li class="col-lg-12 col-12">

                                        <h3 class="text-truncate mb-0">November 29, 2021</h3>

                                        <p class="text-muted text-truncate-by-3 my-3">

                                            Lorem ipsum dolor sit amet, consectetur adipiscing

                                            elit, sed do eiusmod tempor incididunt ut labore et

                                            dolore magna aliqua. Ut enim ad minim veniam, quis.

                                            Lorem ipsum dolor sit amet, consectetur adipiscing

                                            elit, sed do eiusmod tempor incididunt ut labore et

                                            dolore magna aliqua. Ut enim ad minim veniam, quis

                                        </p>



                                    </li>

                                </ul>

                            </div>

                        </div>

                    </div>



                    <!------- Blog Post 4 ------->

                    <div class="col-lg-4 col-12">

                        <div class="card basic-card border-0">

                            <div class="basic-card-img position-relative">

                                <img src="{{env('APP_URL')}}public/veh/assets/img/blogs.svg" class="card-img-top default-img img-cover"

                                    alt="Product">



                                <a href="#" class="m-0 img-overlay-price">Read More</a>

                            </div>



                            <div class="card-body py-5 px-5">

                                <h3 class="card-title russo-font text-uppercase py-4">BLOG POST 4</h3>



                                <ul class="card-dis-list row list-unstyled gy-5 gx-lg-5 gx-4">

                                    <li class="col-lg-12 col-12">

                                        <h3 class="text-truncate mb-0">November 29, 2021</h3>

                                        <p class="text-muted text-truncate-by-3 my-3">

                                            Lorem ipsum dolor sit amet, consectetur adipiscing

                                            elit, sed do eiusmod tempor incididunt ut labore et

                                            dolore magna aliqua. Ut enim ad minim veniam, quis.

                                            Lorem ipsum dolor sit amet, consectetur adipiscing

                                            elit, sed do eiusmod tempor incididunt ut labore et

                                            dolore magna aliqua. Ut enim ad minim veniam, quis

                                        </p>



                                    </li>

                                </ul>

                            </div>

                        </div>

                    </div>



                    <!------- Blog Post 5 ------->

                    <div class="col-lg-4 col-12">

                        <div class="card basic-card border-0">

                            <div class="basic-card-img position-relative">

                                <img src="{{env('APP_URL')}}public/veh/assets/img/blogs.svg" class="card-img-top default-img img-cover"

                                    alt="Product">



                                <a href="#" class="m-0 img-overlay-price">Read More</a>

                            </div>



                            <div class="card-body py-5 px-5">

                                <h3 class="card-title russo-font text-uppercase py-4">BLOG POST 5</h3>



                                <ul class="card-dis-list row list-unstyled gy-5 gx-lg-5 gx-4">

                                    <li class="col-lg-12 col-12">

                                        <h3 class="text-truncate mb-0">November 29, 2021</h3>

                                        <p class="text-muted text-truncate-by-3 my-3">

                                            Lorem ipsum dolor sit amet, consectetur adipiscing

                                            elit, sed do eiusmod tempor incididunt ut labore et

                                            dolore magna aliqua. Ut enim ad minim veniam, quis.

                                            Lorem ipsum dolor sit amet, consectetur adipiscing

                                            elit, sed do eiusmod tempor incididunt ut labore et

                                            dolore magna aliqua. Ut enim ad minim veniam, quis

                                        </p>



                                    </li>

                                </ul>

                            </div>

                        </div>

                    </div>



                    <!------- Blog Post 6 ------->

                    <div class="col-lg-4 col-12">

                        <div class="card basic-card border-0">

                            <div class="basic-card-img position-relative">

                                <img src="{{env('APP_URL')}}public/veh/assets/img/blogs.svg" class="card-img-top default-img img-cover"

                                    alt="Product">



                                <a href="#" class="m-0 img-overlay-price">Read More</a>

                            </div>



                            <div class="card-body py-5 px-5">

                                <h3 class="card-title russo-font text-uppercase py-4">BLOG POST 6</h3>



                                <ul class="card-dis-list row list-unstyled gy-5 gx-lg-5 gx-4">

                                    <li class="col-lg-12 col-12">

                                        <h3 class="text-truncate mb-0">November 29, 2021</h3>

                                        <p class="text-muted text-truncate-by-3 my-3">

                                            Lorem ipsum dolor sit amet, consectetur adipiscing

                                            elit, sed do eiusmod tempor incididunt ut labore et

                                            dolore magna aliqua. Ut enim ad minim veniam, quis.

                                            Lorem ipsum dolor sit amet, consectetur adipiscing

                                            elit, sed do eiusmod tempor incididunt ut labore et

                                            dolore magna aliqua. Ut enim ad minim veniam, quis

                                        </p>



                                    </li>

                                </ul>

                            </div>

                        </div>

                    </div>



                    <!------- Blog Post 7 ------->

                    <div class="col-lg-4 col-12">

                        <div class="card basic-card border-0">

                            <div class="basic-card-img position-relative">

                                <img src="{{env('APP_URL')}}public/veh/assets/img/blogs.svg" class="card-img-top default-img img-cover"

                                    alt="Product">



                                <a href="#" class="m-0 img-overlay-price">Read More</a>

                            </div>



                            <div class="card-body py-5 px-5">

                                <h3 class="card-title russo-font text-uppercase py-4">BLOG POST 7</h3>



                                <ul class="card-dis-list row list-unstyled gy-5 gx-lg-5 gx-4">

                                    <li class="col-lg-12 col-12">

                                        <h3 class="text-truncate mb-0">November 29, 2021</h3>

                                        <p class="text-muted text-truncate-by-3 my-3">

                                            Lorem ipsum dolor sit amet, consectetur adipiscing

                                            elit, sed do eiusmod tempor incididunt ut labore et

                                            dolore magna aliqua. Ut enim ad minim veniam, quis.

                                            Lorem ipsum dolor sit amet, consectetur adipiscing

                                            elit, sed do eiusmod tempor incididunt ut labore et

                                            dolore magna aliqua. Ut enim ad minim veniam, quis

                                        </p>



                                    </li>

                                </ul>

                            </div>

                        </div>

                    </div>



                    <!------- Blog Post 8 ------->

                    <div class="col-lg-4 col-12">

                        <div class="card basic-card border-0">

                            <div class="basic-card-img position-relative">

                                <img src="{{env('APP_URL')}}public/veh/assets/img/blogs.svg" class="card-img-top default-img img-cover"

                                    alt="Product">



                                <a href="#" class="m-0 img-overlay-price">Read More</a>

                            </div>



                            <div class="card-body py-5 px-5">

                                <h3 class="card-title russo-font text-uppercase py-4">BLOG POST 8</h3>



                                <ul class="card-dis-list row list-unstyled gy-5 gx-lg-5 gx-4">

                                    <li class="col-lg-12 col-12">

                                        <h3 class="text-truncate mb-0">November 29, 2021</h3>

                                        <p class="text-muted text-truncate-by-3 my-3">

                                            Lorem ipsum dolor sit amet, consectetur adipiscing

                                            elit, sed do eiusmod tempor incididunt ut labore et

                                            dolore magna aliqua. Ut enim ad minim veniam, quis.

                                            Lorem ipsum dolor sit amet, consectetur adipiscing

                                            elit, sed do eiusmod tempor incididunt ut labore et

                                            dolore magna aliqua. Ut enim ad minim veniam, quis

                                        </p>



                                    </li>

                                </ul>

                            </div>

                        </div>

                    </div>



                    <!------- Blog Post 9 ------->

                    <div class="col-lg-4 col-12">

                        <div class="card basic-card border-0">

                            <div class="basic-card-img position-relative">

                                <img src="{{env('APP_URL')}}public/veh/assets/img/blogs.svg" class="card-img-top default-img img-cover"

                                    alt="Product">



                                <a href="#" class="m-0 img-overlay-price">Read More</a>

                            </div>



                            <div class="card-body py-5 px-5">

                                <h3 class="card-title russo-font text-uppercase py-4">BLOG POST 9</h3>



                                <ul class="card-dis-list row list-unstyled gy-5 gx-lg-5 gx-4">

                                    <li class="col-lg-12 col-12">

                                        <h3 class="text-truncate mb-0">November 29, 2021</h3>

                                        <p class="text-muted text-truncate-by-3 my-3">

                                            Lorem ipsum dolor sit amet, consectetur adipiscing

                                            elit, sed do eiusmod tempor incididunt ut labore et

                                            dolore magna aliqua. Ut enim ad minim veniam, quis.

                                            Lorem ipsum dolor sit amet, consectetur adipiscing

                                            elit, sed do eiusmod tempor incididunt ut labore et

                                            dolore magna aliqua. Ut enim ad minim veniam, quis

                                        </p>



                                    </li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>



                <!------- Blog Pagination Starts ------->

                <div class="blog-pagination">

                    <nav aria-label="Page navigation">

                        <ul class="pagination justify-content-center">

                            <!----- Previous Button ----->

                            <li class="page-item">

                                <a class="page-link" href="#"><i class="fas fa-angle-double-left"></i></a>

                            </li>

                            <li class="page-item active"><a class="page-link" href="#">1</a></li>

                            <li class="page-item"><a class="page-link" href="#">2</a></li>

                            <li class="page-item"><a class="page-link" href="#">3</a></li>

                            <li class="page-item"><a class="page-link" href="#">4</a></li>

                            <li class="page-item"><a class="page-link" href="#">5</a></li>

                            <li class="page-item"><a class="page-link" href="#">6</a></li>

                            <li class="page-item"><a class="page-link" href="#">7</a></li>



                            <!------ Next Button ----->

                            <li class="page-item">

                                <a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a>

                            </li>

                        </ul>

                    </nav>

                </div>

            </div>

        </section>

        <!------- How Can we Help Section As All Blogs Section End  ------->



        <!------- Have a question Section Starts ------->

        <section class="have-question bg-warning">

            <div class="row g-0">

                <div class="col-lg-6 col-12">

                    <div class="title mt-lg-5 p-lg-0 pt-lg-3 p-3  russo-font position-relative w-75 mx-auto">

                        <h1>Have Questions &#63;</h1>



                        <div class="hav-que-watermark">

                            <p>Have a que</p>

                        </div>



                        <p class="roboto-font mt-lg-5 mt-3 mb-1">

                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor

                            incididunt ut

                            labore et dolore magna aliqua.

                        </p>



                        <div class="have-btn mt-lg-5 mt-4">

                            <a href="{{env('APP_URL')}}veh/get_quote" class="btn bg-dark text-white text-uppercase rounded-0 px-3 py-3">

                                <b>Get A Quote</b> <i class="fas fa-caret-right ms-3"></i>



                                <a href="tel:0987654321" class="btn bg-white text-uppercase rounded-0 px-3 py-3">

                                    <i class="fas fa-phone-volume"></i> <b>224 000 22 11 33</b>

                                </a>

                            </a>

                        </div>



                    </div>

                </div>



                <div class="col-lg-6 col-12">

                    <div class="hav-que-img">

                        <img src="{{env('APP_URL')}}public/veh/assets/img/have-question.svg" alt="Question Image" class="default-img img-cover">

                    </div>

                </div>

            </div>

        </section>

        <!------- Have a question Section End ------->



       <!------- Footer Section Starts ------->

      @include('veh.includes.footer')

      <!------- Footer Section End ------->

  </div>

  <!------- Main Container End ------->



  <!------- All Modals Coding Stats Here ------->



  <!----- Modal-1 ----->



  <!------- All Modals Coding Ends Here ------->





  @include('veh.includes.footer_assets')
</body>





<!-- Mirrored from iwebwiserprojects.xyz/Vehya_Project/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Dec 2021 06:30:54 GMT -->

</html>