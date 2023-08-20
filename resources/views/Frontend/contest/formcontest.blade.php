@extends('layout.master')
@section('kuchb')

<div class="container">
    <img src="https://rstheme.com/products/html/shooter/shooter-html/images/banner/2.jpg" alt="">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 mt-5 text-center">
                    <ul class="list-group list-group-horizontal justify-content-center">
                        <li class="list-group-item d-grid">Your Personal Informations</li>
                        <li class="list-group-item">Upload Photo Informations</li>
                        <li class="list-group-item">Preview Details Again</li>
                        <li class="list-group-item">Terms and Conditions</li>
                        <li class="list-group-item">Status </li>
                    </ul>
                    <form>
                        <h5 class="mt-4"><b>Your Personal Informations</b></h5>
                        <input type="text"  name="name" placeholder="Your First Name">
                        <br>
                        <input type="text" name="name" placeholder="Your Last Name">
                        <br>
                        <input type="email" name="email" placeholder="Email">
                        <br>
                        <input type="password" name="pass" placeholder="Password">
                        <br>
                        <input type="password" name="cpass" placeholder="Confirm Password">
                        <br>
                        <input type="button" name="next" class="next_btn margin-0" value="Next >">
                    </form>
                    <form>
                        <h5 class="mt-4"><b>Upload Photo Informations</b></h5>
                        <select class="options">
                            <option>--Select Category--</option>
                            <option>Photo Contest</option>
                            <option>HD Photo</option>
                            <option>Sractch View Photo</option>
                            <option>Normal Photo</option>
                        </select>
                        <br>
                        <input type="text" name="marks" placeholder="Your Photo Name">
                        <br>
                        <input type="text" name="pyear" placeholder="Photo Size">
                        <br>
                        <input type="text" name="univ" placeholder="Photo Color">
                        <br>
                        <input type="file" name="univ">
                        <br>
                        <textarea name="textarea" cols="30" rows="10" placeholder="Photo Upload"></textarea>
                        <br>
                        <input type="button" name="previous" class="pre_btn" value="< Back">
                        <input type="button" name="next" class="next_btn" value="Next >">
                    </form>
                    <form>
                        <h5 class="mt-4"><b>Preview Details Again</b></h5>
                        <ul class="list-group list-group-horizontal justify-content-center">
                            <li><img src="" alt=""></li>
                            <li class="list-group-item"><span>Name :</span>John Deo</li>
                            <li class="list-group-item"><span>E-mail :</span>johndeo@gmail</li>
                            <li class="list-group-item"><span>Photo Name :</span> Natural Photo for Photo Grapher</li>
                            <li class="list-group-item"><span>Photo Category :</span>Natural Photo </li>
                            <li class="list-group-item"><span>Photo Size :</span> 1920x7000 </li>
                            <li class="list-group-item"><span>Photo Nature :</span>HD </li>
                            <li class="list-group-item"><span>Photo Color :</span>  Dark </li>
                            <li class="list-group-item"><span>Photo Status :</span> Publish </li>
                        </ul>

                        <input type="button" name="previous" class="pre_btn" value="< Back">
                        <input type="button" name="next" class="next_btn" value="Next >">
                    </form>
                    <form>
                        <h2 class="mt-4">Terms and Conditions</h2>
                        <div class="term-and-conditions">
                            <input type="checkbox"> I have read and accept Official contest rules
                        </div>
                        <input type="button" name="previous" class="pre_btn" value="< Back">
                        <input type="button" name="next" class="next_btn" value="Submit >">
                    </form>
                    <form>
                        <h2 class="mt-4">Status Sucess</h2>
                        <p>Thanks for your submitting Photo , we will inform you soon.</p>
                    </form>

            </div>
        </div>
    </div>


</div>

@endsection
