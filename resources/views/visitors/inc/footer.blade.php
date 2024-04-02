<footer class="footer-area">
    <div class="container">
        <div class="footer-up">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <img src="{{ config('app.url') }}/img/rbps-white.png" alt="expoint-logo">
                    <p>99278 66639 | 99270 03923 | 7533807702 </p>
                    <p>Etah Road, Sikrari, Tundla, Firozabad</p>
                    <div class="social-area">
                        <a href="#"><i class="lab la-facebook-f"></i></a>
                        <a href="#"><i class="lab la-instagram"></i></a>
                        <a href="#"><i class="lab la-twitter"></i></a>
                        <a href="#"><i class="la la-skype"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-6 com-sm-12">
                    <h5>About Us</h5>
                    <ul>
                        <li>
                            <!-- <a href="#" ><span>-</span> About</a> -->
                            <a href="{{ url('/visitors/overview') }}"><span>-</span>Overview</a>
                            <a href="{{ url('/visitors/mission-vission') }}"><span>-</span> Mission & Vision </a>
                            <a href="{{ url('/visitors/manager') }}"><span>-</span> Manager's Message</a>
                            <a href="{{ url('/visitors/principal') }}"><span>-</span> Principal's Message</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12">
                    <h5>Academics</h5>
                    <ul>
                        <li><a href="https://cbseacademic.nic.in//curriculum_2024.html" target="_blank">Curriculum
                                (2024-25)</a></li>
                        <li><a href="https://cbseacademic.nic.in//SQP_CLASSXII_2024-25.html" target="_blank">Sample
                                Papers Class XII
                                (2024-25)</a></li>
                        <li><a href="https://cbseacademic.nic.in//SQP_CLASSX_2024-25.html" target="_blank">Sample Papers
                                Class X (2024-25)</a>
                        </li>
                        <li><a href="https://www.cbse.gov.in/cbsenew/cbse.html" target="_blank">Latest @
                                CBSE</a></li>
                        <li><a href="https://cbseacademic.nic.in/circulars.html" target="_blank">CBSE
                                circulars</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12">
                    <h5>Ouick Link</h5>
                    <ul>
                        <li>
                            <a href="{{ url('/visitors/media') }}">Media</a>

                            <a href="{{ url('/visitors/Infrastructure') }}">Infrastructure</a>
                            <a href="{{ url('/visitors/admissionform') }}">Admission Form</a> <a
                                href="{{ url('/visitors/fee') }}">Fee
                                Structure</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12">
                    <h5>Ouick Link</h5>
                    <ul>
                        <li>
                            <a href="{{ url('/visitors/curricular') }}">Co-Curricular</a>

                            <a href="{{ url('/visitors/faq') }}">FAQ's</a>

                            <a href="{{ url('/visitors/admissionform') }}">Admission-Form</a>

                            <a href="{{ url('/visitors/contact') }}">Contact us</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</footer>

<!-- Footer Bottom Area -->
<div class="footer-bottom">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <p class="copyright-line">RBPS TUNDLA &copy; 2024. All rights reserved. Developed By <a
                        href="https://svtindia.in/" target="_blank" style="font-size: 12px;
                    line-height: 1.5;
                    ">SVT India</a></p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <p class="privacy">Privacy Policy | Terms &amp; Conditions</p>
            </div>
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header" style="    background: #19a6ec;">
                <h5 class="modal-title" id="exampleModalCenterTitle">Send Enquiry</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="    background: #19a6ec;">
                <form>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control mb-2" id="inputEmail3" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Mobile</label>
                        <div class="col-sm-10">
                            <input type="tel" class="form-control mb-2" id="inputEmail3" placeholder="Mobile">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control mb-2" id="inputEmail3" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Message</label>
                        <div class="col-sm-10">
                            <textarea class="form-control mb-2" id="inputEmail3" placeholder="Message">

							</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="button" class="btn btn-warning">Submit</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<!-- Scroll Top Area -->
<a href="#top" class="go-top"><i class="las la-angle-up"></i></a>
<a class="paoc-popup-link" style="padding: 3px 0px 0px 0px;
    text-align: center;
    margin: 0px;
    width: 152px;
    height: 30px;
    background: red;
    z-index: 15;
    color: #fff !important;
    border-radius: 5px 5px 0px 0px;
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    -webkit-transform: rotate(-90deg);
    transform-origin: bottom right;
    position: fixed;
    right: 0px;
    top: 280px;
    display: block;
    text-decoration: none !important;
    z-index: 9999 !important;" data-toggle="modal" data-target="#exampleModalCenter" href="javascript:void(0);">Enquire
    Now</a>

@if (Session::has('success'))
<script>
    swal("Success", "{{ Session::get('success') }}", 'success', {
                    buttons: {
                        confirm: "OK",
                    },
                });
</script>
@endif
