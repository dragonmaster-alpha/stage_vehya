<!DOCTYPE html>

<html lang="en">



<!------- Vehya Project Starts ON Friday,10-Dec-2021 at 4.00PM ------->





<!DOCTYPE html>

<html lang="en">



<!------- Vehya Project Starts ON Friday,10-Dec-2021 at 4.00PM ------->







@include('veh.includes.assets')



<body>

    <!------- Main Container Starts ------->

    <div class="main-container">

        <!------- Header section Starts ------->

        @include('veh.includes.header')


        <!------- Header section End ------->



        <!------- Hero Banner(Blog Page Breadcrumb) As All bolog banner title Section Start ------->

        <section class="hero-banner-section blog-banner">

            <div class="container-fluid">

                <div class="row justify-content-center align-items-center">

                    <div class="col-lg-12 col-12">

                        <!------ Page Hero Title ------>

                        <div class="blog-breadcrumb">

                            <nav>

                                <ol class="breadcrumb">

                                    <li class="breadcrumb-item"><a href="{{env('APP_URL')}}veh/index">Home</a></li>

                                    <li class="breadcrumb-item"><a href="{{env('APP_URL')}}veh/all_blogs">Blog Articles</a></li>

                                    <li class="breadcrumb-item active"><a href="{{env('APP_URL')}}veh/blog_1">Blog Post 1</a></li>

                                </ol>

                            </nav>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!------- Hero Banner Section End ------->



        <!------- Detailed Banner Section Starts  -------->

        <section class="blog-data pricing can-help pt-0">

            <!----- Blog container ------>

            <div class="card border-0">

                <div class="row">

                    <div class="col-lg-5 col-12">

                        <div class="basic-card-img position-relative">

                            <img src="{{env('APP_URL')}}public/veh/assets/img/blogs.svg" class="card-img-top default-img img-cover" alt="Product">

                        </div>

                    </div>



                    <div class="col-lg-5 col-12 mx-auto">

                        <div class="card-body">

                            <h2 class="text-warning text-uppercase letter-1">vehya</h2>



                            <h3 class="card-title russo-font text-uppercase pt-4">BLOG POST 1</h3>



                            <ul class="card-dis-list row list-unstyled gy-5 gx-lg-5 gx-4">

                                <li class="col-lg-12 col-12">

                                    <p class="text-muted mb-5 mt-4">

                                        <?php echo $blog[0]->blog; ?>

                                    </p>




                                </li>

                            </ul>



                            <div class="about-blog d-flex justify-content-between align-items-center">

                                <h3 class="card-title russo-font text-uppercase py-4">November 29, 2021</h3>

                                <h3 class="card-title russo-font text-uppercase py-4">Post Author</h3>

                                <h3 class="card-title russo-font text-uppercase py-4">Post Category</h3>

                            </div>

                        </div>

                    </div>



                    <div class="col-lg-1 col-12 ms-auto">

                        <div class="blog-social d-lg-block d-flex justify-content-evenly">

                            <p class="d-lg-block d-inline-block"><a href="www.linkedin.html"><i

                                        class="fab fa-linkedin"></i></a></p>

                            <p class="d-lg-block d-inline-block"><a href="www.linkedin.html"><i

                                        class="fab fa-twitter"></i></a></p>

                            <p class="d-lg-block d-inline-block"><a href="www.linkedin.html"><i

                                        class="fab fa-facebook"></i></a></p>

                        </div>

                    </div>



                    <!------- Blog Content Container Starts -------->

                    <div class="col-lg-12 col-12">

                        <nav class="blog-data pt-5 mt-5">

                            <div class="nav nav-tabs justify-content-lg-start justify-content-evenly" id="nav-tab">

                                <!------- Blog Discription Button ------->

                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#blog-disc"

                                    type="button">

                                    <h3 class="russo-font">Discription</h3>

                                </button>



                                <!------- Blog comments Button ------->

                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#blog-comment"

                                    type="button">

                                    <h3 class="russo-font">Comments</h3>

                                </button>

                            </div>

                        </nav>



                        <!------ Content Container ------>

                        <div class="tab-content">

                            <div class="tab-pane fade show active pt-5 mt-5" id="blog-disc">

                                <h3 class="russo-font mb-4">lorem ipsum doller init initial lorem ipsum</h3>



                                <p class="mb-5 pb-5">

                                    <?php echo $blog[0]->blog; ?>

                                </p>



                                

                            </div>



                            

                        </div>

                    </div>

                    <!------- Blog Content Container End -------->

                </div>

            </div>

        </section>

        <!------- Detailed Banner Section End -------->



        <!------- How Can we Help Section As All Blogs Section Starts  ------->

        <section class="pricing blog-sec can-help pt-0">

            <!-- Blog container 1 -->

            <div class="eq-cat cat-1 pt-0">

                <!------- Equipment Category Section Title ------->

                <div class="title mt-lg-5 russo-font">

                    <h1 class="text-truncate-by-2">Related Blog Posts</h1>

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