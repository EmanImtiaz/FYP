
@extends('layout.master')
@section('kuchb')



        <div class="container">
            <img src="https://rstheme.com/products/html/shooter/shooter-html/images/banner/2.jpg" alt="">
        <div class="row justify-content-center mt-3">
            <div class="col-lg-6 col-md-6 col-sm-6 ">
                <h1>About <span style="color: #d32f2f;"> Raise Photographers</span></h1>
                <p>Welcome to <span style="color: #d32f2f;">Raise Photographers</span>, where passion for photography meets a vibrant community of creative individuals. We believe in the power of visual storytelling and the ability of every photographer to capture the extraordinary in everyday moments.</p>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-9 col-md-9 col-sm-9">
                <h1>Our Mission <span style="color: #d32f2f;"> Raise Photographers</span></h1>
                <p>At Raise Photographers, our mission is simple: to empower photographers to shine and to connect clients with the perfect photographer for their needs. We're committed to fostering a community that celebrates creativity, skill, and the art of photography.</p>
            </div>
        </div>


            <div class="row">
                <div class="col-lg-9 col-md-12 col-sm-12">
                        <h1>What <span style="color: #d32f2f;">We Offer</span></h1>
                        <div class="row mt-3">
                            <div class="col-lg-9 col-md-12 col-sm-12">
                                <h4 >Photographer Showcase:</h4>
                                <p>Our platform is designed for photographers to showcase their portfolios. It's your canvas to highlight your unique skills, style, and the stories you tell through your lens.</p></div>
                            <div class="col-lg-9 col-md-12 col-sm-12">
                                <h4 >User-Friendly Search Filters:</h4>
                                <p>Clients can effortlessly find and book photographers based on their location and budget. Our intuitive search filters simplify the process, ensuring clients discover the perfect photographer for their special moments.</p></div>
                            <div class="col-lg-9 col-md-12 col-sm-12">
                                <h4 >The Power of Feedback: </h4>
                                <p>We understand the importance of feedback. Clients have the opportunity to leave reviews about their photographer's work, helping others make informed decisions and fostering a culture of continuous improvement.</p></div>
                            <div class="col-lg-9 col-md-12 col-sm-12">
                                <h4 >Photography Contests and Rankings:</h4>
                                <p >We're passionate about recognizing outstanding photographers in our community. Our photography contests allow users to vote for their favorite photographers, resulting in a dynamic ranking system that showcases the best talents.</p></div>
                            <div class="col-lg-9 col-md-12 col-sm-12">
                                <h4 >Photography Equipment: </h4>
                                <p>Whether you're a seasoned professional or just starting out, we've got you covered. Explore our extensive selection of photography equipment, including cameras, stands, lenses, and accessories. Elevate your creative journey with the right tools.</p></div>
                            </div>
                        </div>
                        <div class="col-lg-3 g-4">
                             <img src="https://rstheme.com/products/html/shooter/shooter-html/images/about-featured.png" alt=""></div>
                            </div>


            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h1 style="color: #d32f2f;">Join Our Community</h1>
                    <p>Unlock a world of photography excellence with Raise Photographers. Connect with like-minded individuals, book unforgettable events, and be part of a community that thrives on celebrating creativity.</p>
                    <h5 class="text-center">Join us today and let's raise photography together.</h5>
                    <h5><a  style="color: #d32f2f;" href="{{ route('signup')}}">Sign Up Now</a> or <a style="color: #d32f2f;" href="{{ route('contact')}}">Contact Us </a>for more information.</h5>
                </div>
            </div>
        </div>

@endsection
