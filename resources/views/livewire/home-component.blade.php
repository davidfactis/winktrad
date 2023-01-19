<!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">@lang('public.txd')</div>
            <div class="masthead-heading text-uppercase">@lang('public.txi')</div>
            <a class="btn btn-primary btn-xl text-uppercase" href="/demande">@lang('public.txdm')</a>
        </div>
    </header>

<!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">@lang('public.txn')</h2>
                    <h3 class="section-subheading text-muted">@lang('public.txdet')</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">@lang('public.txdl')</h4>
                        <p class="text-muted">@lang('public.txdlt')</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">@lang('public.txds')</h4>
                        <p class="text-muted">@lang('public.txdnb')</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">@lang('public.txdbn')</h4>
                        <p class="text-muted">@lang('public.txdns')</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">@lang('public.txdqu')</h2>
                    <h3 class="section-subheading text-muted">@lang('public.txdpu')</h3>
                    <h6 class="section-subheading text-muted">@lang('public.txdsiu')</h6>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{asset('assets/img/portfolio/1.jpg')}}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">@lang('public.txdpre')</div>
                                <div class="portfolio-caption-subheading text-muted">ELJOINVEST</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{asset('assets/img/portfolio/2.jpg')}}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">@lang('public.txpre')</div>
                                <div class="portfolio-caption-subheading text-muted">ELJOINVEST</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{asset('assets/img/portfolio/3.jpg')}}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">@lang('public.txdprea')</div>
                                <div class="portfolio-caption-subheading text-muted">ELJOINVEST</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">@lang('public.txdapo')</h2>
                    <h3 class="section-subheading text-muted">@lang('public.txdoff')</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{asset('assets/img/about/1.jpg')}}" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>@lang('public.txd')</h4>
                                <h4 class="subheading">@lang('public.txd1')</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">@lang('public.txdsig')</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{asset('assets/img/about/2.jpg')}}" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>@lang('public.txdvo')</h4>
                                <h4 class="subheading">@lang('public.txvo')</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">@lang('public.txdrea')</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{asset('assets/img/about/3.jpg')}}" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>@lang('public.txpl')</h4>
                                <h4 class="subheading">@lang('public.txple')</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">@lang('public.txplel')</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{asset('assets/img/about/4.jpg')}}" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Un service </h4>
                                <h4 class="subheading">@lang('public.txdcltr')</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">@lang('public.txusvcl')</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                @lang('public.txd11')
                                <br />
                                @lang('public.txd12')
                                <br />
                                @lang('public.txd13')
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">@lang('public.tx1')</h2>
                    <h3 class="section-subheading text-muted">@lang('public.tx2')</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="{{asset('assets/img/team/1.jpg')}}" alt="..." />
                            <h4>@lang('public.tx3')</h4>
                            <p class="text-muted">@lang('public.tx4')</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="{{asset('assets/img/team/2.jpg')}}" alt="..." />
                            <h4>@lang('public.tx5')</h4>
                            <p class="text-muted">@lang('public.tx6')</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="{{asset('assets/img/team/3.jpg')}}" alt="..." />
                            <h4>@lang('public.tx7')</h4>
                            <p class="text-muted">@lang('public.tx8')</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">@lang('public.t1')</p></div>
                </div>
            </div>
        </section>
        <!-- Clients-->
        {{-- <div class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="{{asset('assets/img/logos/microsoft.svg')}}" alt="..." aria-label="Microsoft Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="{{asset('assets/img/logos/google.svg')}}" alt="..." aria-label="Google Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="{{asset('assets/img/logos/facebook.svg')}}" alt="..." aria-label="Facebook Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="{{asset('assets/img/logos/ibm.svg')}}" alt="..." aria-label="IBM Logo" /></a>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">@lang('public.tx9')</h2>
                    <h3 class="section-subheading text-muted">@lang('public.txc')</h3>
                </div>

                <form id="contactForm" data-sb-form-api-token="API_TOKEN"   action="/" method="POST">
                    {{ csrf_field() }}
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control"  name="name" id="name" type="text" placeholder=" @lang('public.yn')*" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">@lang('public.sd5')</div>
                            </div>
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control"  name="lastname"  id="name" type="text" placeholder="@lang('public.yl') *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">@lang('public.sd4')</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control"  name="email" id="email" type="email" placeholder="@lang('public.ye') *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">@lang('public.sd3')</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">@lang('public.sd2')</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input  name="tel" class="form-control" id="phone" type="tel" placeholder="@lang('public.yp') *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">@lang('public.sd1')</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="message" placeholder="@lang('public.ym') *" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">@lang('public.m1')A message is required.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">@lang('public.sd')</div>
                            To activate this form, sign up at
                            <br />
                            {{-- <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a> --}}
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">@lang('public.txd')Error sending message!</div></div>
                    <!-- Submit Button-->
                    <div class="text-center"><button  class="btn btn-primary btn-xl text-uppercase enable" id="submitButton" type="submit">@lang('public.En')</button></div>
                </form>
            </div>
        </section>
