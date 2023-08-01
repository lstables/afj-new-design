<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }} - UK Number 1 Tribute to Foreigner &amp; Journey</title>
        <meta name="description" content="UK Number 1 tribute act to Foreigner &amp; Journey. We take things much beyond a mere ‘tribute act’ we turn our show into a living, breathing and powerful show">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
{{--         <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
 --}}        <!-- Fonts -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

        {{-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/> --}}

        <link rel="stylesheet" type="text/css" href="css/sweetalert.css">
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>


        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>

        <div id="app">

            @include('layouts.nav')
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mb-5">
                    <img src="../images/band.jpg" class="img-fluid logo">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 mb-4 mt-5">

                    <div class="card text-white bg-dark mb-3">
                        <div class="card-body dates-mob">
                            <h4 class="text-center mt-2">UPCOMING TOUR DATES</h4>
                            <div class="table-responsive mt-5 mb-4">
                            <table class="table table-gold">
                                <tbody>
                                @foreach ($dates->take(6) as $d)
                                    <tr>
                                        <td>{{ $d->date->format('l') }} {{ $d->date->format('jS') }} {{ $d->date->format('M') }} {{ $d->date->format('Y') }}</td>
                                        <td class="gold">{{ ucwords(strtolower($d->venue)) }}</td>
                                        <td class="text-center">{{ ucwords(strtolower($d->name)) }}</td>
                                        {{-- @if($d->box_office)<td>{{ $d->box_office }}</td>@endif
                                        @if($d->ticket_url)<td><a href="{!! $d->ticket_url !!}" class="gold" target="_blank">Tickets &raquo; </a></td>@endif --}}
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 text-center mb-5">
                                        <a href="{{ url('#tour') }}" class="mt-3 gold" style="font-size: 22px;">VIEW ALL {{ date('Y') }} TOUR DATES</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-4 mb-4 mt-5">
                     <div class="card text-white bg-dark mb-3">
                        <div class="card-body text-center">
                            <div class="mb-5 mt-2">
                                <img src="images/5 stars.png" class="img-fluid pb-2" style="width: 140px;">
                                <p class="f20"><strong style="font-weight: 600;">'A mixture of classic songs, delivered impeccably'</strong><br />
                                <small class="gold f18 reg">Planet Rock</small>
                                </p>
                            </div>

                           <div class="mb-5">
                                <img src="images/5 stars.png" class="img-fluid pb-2" style="width: 140px;">
                                <p class="f20"><strong style="font-weight: 600;">'Check out this amazing band, they ROCK!'</strong><br />
                                <small class="gold f18 reg">Jeff Pilson, Foreigner</small></p>
                           </div>


                           <div>
                                <img src="images/5 stars.png" class="img-fluid" style="width: 140px;">
                                <p class="f20"><strong style="font-weight: 600;">'The UK's best tribute to Foreigner &amp; Journey'</strong><br />
                                <small class="gold f18 reg">National Tribute Music Awards</small>
                                </p>
                           </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card text-white bg-dark mb-3">
                        <div class="card-body">
                            <div class="embed-responsive embed-responsive-16by9 mb-4">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/bchT3-ZBTBM" allowfullscreen></iframe>
                            </div>
                            <div class="col-md-9 text-center mx-auto" style="width: 90%">
                               <p>
                                   <strong>
                                   Legendary bands Foreigner and Journey are giants of the AOR (Adult Orientated Rock) and Classic Rock genres, attracting huge audiences as live acts since forming in the 1970’s. The two bands have achieved massive commercial and critical success and both sold in excess of 80 million albums, with their supreme musical quality ensuring that they’ve never been victims of trends or passing fashions, and even their earliest hits are still being played on radio shows worldwide every day.
                                   </strong>
                               </p>
                               <p>
                                    Sadly for those in the UK, their shows over here have been few and far between, and most fans of their music have not experienced the thrill of hearing it played live.
                                    Thankfully, however, the next best thing is here in the shape of the award-winning band A FOREIGNERS JOURNEY.

                               </p>
                               <p>
                                   They have toured throughout the UK and Europe for the last 10 years, headlined a number of festivals and played to packed theatres and venues, safely establishing themselves as one of the most respected and known tribute shows around
                               </p>

                            </div>
                       </div>
                   </div>
                </div>
            </div>

            <div id="tour">
                <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card text-white bg-dark mb-3">
                        <div class="card-body">
                            <h4 class="text-center mt-2">{{ date('Y') }} TOUR DATES</h4>
                            <div class="table-responsive mt-5 mb-4">
                                <table class="table-gold fixed_header">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>City/Town</th>
                                            <th class="text-center">Venue</th>
                                            <th>Box Office</th>
                                            <th>Tickets</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($dates as $d)
                                        <tr>
                                            <td>{{ $d->date->format('l') }} {{ $d->date->format('jS') }} {{ $d->date->format('M') }} {{ $d->date->format('Y') }}</td>
                                            <td class="gold">{{ ucwords(strtolower($d->venue)) }}</td>
                                            <td class="text-center">{{ ucwords(strtolower($d->name)) }}</td>
                                            <td>{{ $d->box_office ? $d->box_office : 'n/a' }}</td>
                                            @if($d->ticket_url)<td><a href="{!! $d->ticket_url !!}" class="gold" target="_blank">Tickets &raquo; </a></td>@endif
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div><!-- end tour div -->

            <div id="band">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h4 class="text-center mt-2 mb-4">A FOREIGNERS JOURNEY ARE</h4>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="card text-white bg-dark mb-3">
                            <div class="card-body andrea">
                                <div class="text-left w-75">
                                    <h5 class="gold">Adam</h5>
                                    <h6 class="text-white">Lead Vocals</h6><br />
                                    Adam has been honing his craft for the past 15 years, and during this time, he has fronted several original bands and begun to build a reputation as a formidable Front man. Over the years, his incredible vocal range and control have earned him the nickname 'Pipes' and watching him perform you can really see why.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="card text-white bg-dark mb-3">
                            <div class="card-body ricky img-fluid">
                                 <div class="text-left w-75">
                                    <h5 class="gold">Ricky</h5>
                                    <h6 class="text-white">Guitars</h6><br />
                                    Ricky started his musical education and journey at the tender age of 3. With no less than 4 immediate family members being musicians too, it was inevitable that music was in his blood. Fast forward a few years and Ricky eventually landed the perfect gig - A Foreigners Journey.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="card text-white bg-dark mb-3">
                            <div class="card-body paul">
                                 <div class="text-left w-75">
                                    <h5 class="gold">Paul</h5>
                                    <h6 class="text-white">Bass Guitar</h6><br />
                                    Paul started his musical journey at the age of 14 learning to play the guitar initially, his first live performance was with a band called ‘Arnhem’ in the mid 80’s.
                                    In 2006 Paul was invited by his friend and mentor Jeff Pilson of Foreigner to see their show in Las Vegas which ended up being the catalyst in putting A Foreigners Journey together here in the UK.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="card text-white bg-dark mb-3">
                            <div class="card-body jon">
                                <div class="text-left w-75">
                                    <h5 class="gold">Lee</h5>
                                    <h6 class="text-white">Keyboards</h6><br />
                                    Raised on the tunes of The Beatles, Lee soon became obsessed with music.
                                    At the age of 11 Lee discovered keyboards and songwriting and is 100% self taught.
                                    He's played and sang lead vocals in multiple bands from Jazz Orchestras to Prog/Rock bands in an array of venues over the years as well as some studio session work.
                                    Lee relocated to yorkshire where he eventually discovered AFJ....
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 offset-md-3">
                        <div class="card text-white bg-dark mb-3">
                            <div class="card-body ian">
                                <div class="text-left w-75">
                                    <h5 class="gold">Ben </h5>
                                    <h6 class="text-white">Drums</h6><br />
                                    Ben is the engine room for AFJ, and provides the power and groove to underpin all the classic hits. Ben changes through the gears with passion and tenacity, and is a commanding presence behind his signature double-kick kit.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- end band div -->

            <div id="gallery" class="mb-5 d-none d-sm-block">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h4 class="text-center mt-5">PHOTO GALLERY</h4>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="slide">
                          <ul>
                            <li data-bg="images/slider/slide1.png" class="img-fluid"></li>
                            <li data-bg="images/slider/slide2.png" class="img-fluid"></li>
                            <li data-bg="images/slider/slide3.png" class="img-fluid"></li>
                            <li data-bg="images/slider/slide4.png" class="img-fluid"></li>
                            <li data-bg="images/slider/slide5.png" class="img-fluid"></li>
                          </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end container -->

            {{-- <div class="row">
                <div class="col">
                    <div class="newsletter-signup">
                        <div class="row">
                            <div class="col">
                                <h4 class="text-center">Mailing List</h4>
                                <h5 class="text-center">Sign up for news, upcoming gigs plus much more....</h5>
                            </div>
                        </div>
                        <br/>
                        <div class="d-flex justify-content-center">
                            <form class="form-inline needs-validation" method="post" action="/mailing-list/join" novalidate>

                                @csrf

                                <label class="sr-only" for="inlineFormInputName2">Name</label>
                                <input type="text" name="first_name" class="form-control mb-2 mr-sm-3 form-control-lg" id="inlineFormInputName2" placeholder="First Name" value="{!! old('first_name') !!}" aria-describedby="validationTooltipFirstNamePrepend" required><br /><br />

                                <label class="sr-only" for="inlineFormInputName2">Location</label>
                                <input type="text" name="location" class="form-control mb-2 mr-sm-3 form-control-lg" id="inlineFormInputName2" placeholder="Your location" value="{!! old('location') !!}" aria-describedby="validationTooltipLocationPrepend" required><br /><br />

                                <label class="sr-only" for="inlineFormInputName2">Email</label>
                                <input type="text" name="email" class="form-control mb-2 mr-sm-3 form-control-lg" id="inlineFormInputName2" placeholder="Your email address" value="{!! old('email') !!}" aria-describedby="validationTooltipEmailPrepend" required><br /><br />

                                <div class="invalid-tooltip">
                                    All fields are required
                                </div>
                                <button type="submit" class="btn btn-outline-light mb-2 cta">Signup</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
 --}}
            <div id="contact" style="margin-top:0px;">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 p-4">
                        <h4 class="text-center mt-2 mb-4">CONTACT US</h4>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-8 text-center mx-auto pb-5">
                        <p>All booking enquires</p>
                        <ul class="list-unstyled">
                            <li><a class="gold" href="mailto: rickyafj1@gmail.com">Ricky Middleton</a> - 07947 346956</li>
                            <li><a class="gold" href="mailto: firestarmusicgroup@gmail.com">FireStar Music</a> - 07772 682074</li>
                            <li><a class="gold" href="mailto: melafj1@gmail.com">Melanie Perrett</a> - Press Officer - 07979 502254</li>
                            <li><br /></li>
                            <li><a class="gold" href="https://afjgallery.s3.eu-west-2.amazonaws.com/StageSetup.pdf">Stage Plan for Venues</a></li>
                        </ul>

                        <form action="{{ route('contact') }}" method="post">
                        @csrf

                        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                            <div class="col-lg-12">
                                <input type="text" name="name" class="form-control" value="{{  old('name') }}" autocomplete="off" placeholder="Name" required>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-lg-12">
                                <input type="text" name="email" class="form-control" value="{{ old('email') }}" autocomplete="off" placeholder="Email" required>
                                 @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12">
                                <input type="text" name="subect" class="form-control" value="{{ old('subject') }}" autocomplete="off" placeholder="Subject"  required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-12">
                                <textarea name="comments" class="form-control" rows="4" placeholder="Your message" required>{{ old('comments') }}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-12">
                                <div class="g-recaptcha" data-sitekey="6LeqXMEUAAAAAM2HyJ_VGgw1VzbbIHTPBiuhZTd_"></div>
                            </div>
                        </div>

                        <button class="btn btn-gold ml-3 btn-lg">SEND</button>


                        </form>
                    </div>
                </div>
            </div><!-- end contact -->

            @include('frontend.footer')

        </div>
        <script src="js/sweetalert.js"></script>
        @include('Alerts::show')
        <script src="js/slide.js"></script>
        <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function() {
                'use strict';
                window.addEventListener('load', function() {
                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                    var forms = document.getElementsByClassName('needs-validation');
                    // Loop over them and prevent submission
                    var validation = Array.prototype.filter.call(forms, function(form) {
                        form.addEventListener('submit', function(event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add('was-validated');
                        }, false);
                    });
                }, false);

                // $('.slider').slick({
                //     responsive: true,
                //     //dots: true,
                //     arrows: true,
                //     prevArrow: '<span class="prev"><i class="fas fa-chevron-left"></i></span>',
                //     nextArrow: '<span class="next"><i class="fas fa-chevron-right"></i></span>',
                // });
                $('.slide').slide({
                  'slideSpeed': 3000,
                  'isShowDots': false,
                  'isShowArrow': true,
                  'dotsEvent': 'mouseenter',
                  'isLoadAllImgs': true
                });
            })();

            $(document).on('click', 'a[href^="#"]', function(e) {
                // target element id
                var id = $(this).attr('href');

                // target element
                var $id = $(id);
                if ($id.length === 0) {
                    return;
                }

                // prevent standard hash navigation (avoid blinking in IE)
                e.preventDefault();

                // top position relative to the document
                var pos = $id.offset().top;

                // animated top scrolling
                $('body, html').animate({scrollTop: pos}, 2000);

            });
        </script>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-99600183-1', 'auto');
            ga('send', 'pageview');
        </script>

    </body>
</html>
