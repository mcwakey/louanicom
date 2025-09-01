<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}" />

<meta name="description" content="Name of your web site">
<meta name="author" content="Marketify">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>{{ config('app.name', 'LouaniCom') }} | Home</title>

<!-- STYLES -->
<link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


<link rel="stylesheet" type="text/css" href="{{ asset('css/plugins.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/colors.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/darkMode.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
<!--[if lt IE 9]> <script type="text/javascript" src="{{ asset('js/modernizr.custom.js') }}"></script> <![endif]-->
<!-- /STYLES -->


    {{-- <meta charset="utf-8"> --}}
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1"> --}}
    {{-- <title>{{ config('app.name','Site') }}</title> --}}
    {{-- <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}" /> --}}
    {{-- <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200;400;600;800&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('css/colors.css') }}">
    <link rel="stylesheet" href="{{ asset('css/darkMode.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}

</head>

<body> <!-- FOR DARK MODE: Add class "dark" Example: <body class="dark"> -->

    <!-- PRELOADER -->
    <div id="preloader">
        <div class="loader_line"></div>
    </div>
    <!-- /PRELOADER -->

<!-- WRAPPER ALL -->
<div class="grax_tm_all_wrap" data-magic-cursor="" data-color="crimson">

    <!-- MAGIC CURSOR VALUES: "", hide -->
    <!-- COLOR VALUES: blue, green, brown, pink, orange, black, white, purple, sky, cadetBlue, crimson, olive, red -->

    <!-- SETTINGS -->
    <div class="grax_tm_settings">
        <div class="icon">
            <img class="svg" src="{{ asset('img/svg/setting.svg') }}" alt="" />
            <a class="link" href="#"></a>
        </div>
        <div class="wrapper">
            <ul class="direction">
                <li><a class="active light" href="#"><img class="svg" src="{{ asset('img/svg/weather.svg') }}" alt=" /"></a></li>
                <li><a class="dark" href="#"><img class="svg" src="{{ asset('img/svg/islam.svg') }}" alt=" /"></a></li>
            </ul>
            <span class="title">Unlimited Colors</span>
            <ul class="colors">
                <li><a class="blue" href="#"></a></li>
                <li><a class="green" href="#"></a></li>
                <li><a class="brown" href="#"></a></li>
                <li><a class="pink" href="#"></a></li>
                <li><a class="orange" href="#"></a></li>
                <li class="bl"><a class="black" href="#"></a></li>
                <li class="wh"><a class="white" href="#"></a></li>
                <li><a class="purple" href="#"></a></li>
                <li><a class="sky" href="#"></a></li>
                <li><a class="cadetBlue" href="#"></a></li>
                <li><a class="crimson" href="#"></a></li>
                <li><a class="olive" href="#"></a></li>
                <li><a class="red" href="#"></a></li>
            </ul>
            <span class="title">Magic Cursor</span>
            <ul class="cursor">
                <li><a class="showme show" href="#"></a></li>
                <li><a class="hide" href="#"><img class="svg" src="{{ asset('img/svg/arrow.svg') }}" alt="" /></a></li>
            </ul>
        </div>
    </div>
    <!-- /SETTINGS -->

    <!-- MODALBOX NEWS -->
    <div class="grax_tm_modalbox_news">
        <div class="box_inner">
            <div class="close">
                <a href="#"><img class="svg" src="{{ asset('img/svg/cancel.svg') }}" alt="" /></a>
            </div>
            <div class="description_wrap scrollable">
            </div>
        </div>
    </div>
    <!-- /MODALBOX NEWS -->

    <!-- TOPBAR -->
    <div class="grax_tm_topbar">
        <div class="container">
            <div class="topbar_inner">
                <div class="logo">
                    @if(!empty($settings['logo_path']))
                        <a class="dark" href="#"><img src="{{ asset('storage/'.$settings['logo_path']) }}" alt="{{ $settings['site_name'] ?? config('app.name') }}" /></a>
                        <a class="light" href="#"><img src="{{ asset('storage/'.$settings['logo_path']) }}" alt="{{ $settings['site_name'] ?? config('app.name') }}" /></a>
                    @else
                        <a class="dark" href="#"><img src="{{ asset('img/logo/dark.png') }}" alt="" /></a>
                        <a class="light" href="#"><img src="{{ asset('img/logo/logo.png') }}" alt="" /></a>
                    @endif
                </div>
                <div class="menu">
                    <ul class="anchor_nav">
                        @if(!empty($menu) && $menu->count())
                            @foreach($menu as $m)
                                <li><a href="{{ $m->url ?? $m->anchor ?? '#home' }}">{{ $m->title }}</a></li>
                            @endforeach
                        @else
                            <li class="current"><a href="#home">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#portfolio">Experience</a></li>
                            <li><a href="#partners">Partners</a></li>
                            <li><a href="#contact">Contact</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /TOPBAR -->

    <!-- MOBILE MENU -->
    <div class="grax_tm_mobile_menu">
        <div class="topbar_inner">
            <div class="container bigger">
                <div class="topbar_in">
                    <div class="logo">
                        <a href="#"><img src="{{ asset('img/logo/dark.png') }}" alt="" /></a>
                    </div>
                    <div class="my_trigger">
                        <div class="hamburger hamburger--collapse-r">
                            <div class="hamburger-box">
                                <div class="hamburger-inner"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dropdown">
            <div class="container">
                <div class="dropdown_inner">
                    <ul class="anchor_nav">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#portfolio">Experience</a></li>
                        <li><a href="#partners">Partners</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /MOBILE MENU -->

    <!-- HERO (slider) -->
    <div class="grax_tm_hero" id="home">
        <div class="bg">
            @if(isset($heroes) && $heroes->count())
                @foreach($heroes as $i => $h)
                    <div class="image slide {{ $i === 0 ? 'active' : '' }}"
                         style="background-image: url('{{ $h->media_path ? asset('storage/'.$h->media_path) : asset('img/slider/2.jpg') }}');"
                         data-title="{{ e($h->title) }}"
                         data-description="{{ e($h->description) }}">
                        <img src="{{ $h->media_path ? asset('storage/'.$h->media_path) : asset('img/slider/2.jpg') }}" alt="{{ e($h->title) }}" style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover;z-index:0;" />
                    </div>
                @endforeach
            @else
                <div class="image slide active" style="background-image: url('{{ asset('img/slider/2.jpg') }}');" data-title="{{ $hero->title ?? 'Your Name' }}" data-description="{{ $hero->description ?? 'Web & Mobile App Developer' }}"></div>
            @endif
            <div class="overlay"></div>
        </div>
        <div class="content">
            <div class="container">
                <div class="details" data-animation="toTop"> <!-- Animation Values: toTop, toRight, scale, rotate -->
                    <h3 class="fn_animation name">{{ $hero->title ?? 'Your Name' }}</h3>
                    <span class="fn_animation job">{{ $hero->description ?? 'Web & Mobile App Developer' }}</span>
                </div>
                <div class="hero-dots" style="text-align:center;margin-top:18px">
                    @if(isset($heroes) && $heroes->count())
                        @foreach($heroes as $i => $h)
                            <button class="dot {{ $i === 0 ? 'active' : '' }}" data-index="{{ $i }}" aria-label="Go to slide {{ $i+1 }}"></button>
                        @endforeach
                    @endif
                </div>
                <div class="grax_tm_down" data-skin="light">
                    <div class="line_wrapper">
                        <div class="line"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /HERO -->

    <!-- ABOUT -->
    <div class="grax_tm_section" id="about">
        <div class="grax_tm_about">
            <div class="container">
                <div class="about_inner">
                    <div class="left wow fadeInLeft" data-wow-duration="1.5s">
                        <div class="image parallax" data-relative-input="true">
                            <img src="{{ asset('img/placeholders/3-4.jpg') }}" alt="" />
                            @if($about && $about->image_path)
                            <div class="main layer" data-img-url="{{ asset('storage/'.$about->image_path) }}" data-depth="0.04"></div>
                            @else
                            <div class="main layer" data-img-url="{{ asset('img/about/1.jpg') }}" data-depth="0.04"></div>
                            @endif
                        </div>
                    </div>
                    <div class="right wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".2s">
                        <div class="grax_tm_title_holder">
                            <h3>{{ $about->title ?? 'About' }} <span>Me</span></h3>
                        </div>
                        <div class="text">
                            <p>{!! nl2br(e($about->description ?? 'Write something about yourself.')) !!}</p>
                        </div>
                        <div class="grax_tm_button">
                            @if(!empty($about->action_link))
                                <a href="{{ $about->action_link }}">{{ $about->action_text ?? 'Action' }}</a>
                            @else
                                <a href="#">{{ $about->action_text ?? 'Download CV' }}</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /ABOUT -->

    <!-- PORTFOLIO / EXPERIENCE -->
    <div class="grax_tm_section" id="portfolio">
        <div class="grax_tm_portfolio">
            <div class="container">
                <div class="grax_tm_title_holder">
                    <h3>Selected <span>Works</span></h3>
                </div>
                <div class="portfolio_list">
                    <ul class="gallery_zoom my_waypoint">
                        @forelse($experiences as $exp)
                        <li class="wow fadeInLeft" data-wow-duration="1.5s">
                            <div class="list_inner">
                                <div class="image">
                                    <img src="{{ asset('img/placeholders/1-1.jpg') }}" alt="" />
                                    <div class="main" data-img-url="{{ $exp->image_path ? asset('storage/'.$exp->image_path) : asset('img/portfolio/1.jpg') }}"></div>
                                </div>
                                <div class="overlay"></div>
                                <div class="details">
                                    <span>{{ $exp->type ?? 'Project' }}</span>
                                    <h3>{{ $exp->title }}</h3>
                                </div>
                                @if(!empty($exp->link))
                                    <a class="grax_tm_full_link" href="{{ $exp->link }}" target="_blank"></a>
                                @else
                                    <a class="grax_tm_full_link zoom" href="{{ $exp->image_path ? asset('storage/'.$exp->image_path) : asset('img/portfolio/1.jpg') }}"></a>
                                @endif
                            </div>
                        </li>
                        @empty
                        <li>No experiences yet.</li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /PORTFOLIO -->

    <!-- PARTNERS -->
    {{-- <div id="partners-scatter" class="relative w-full h-72 md:h-96 lg:h-[36rem] overflow-hidden bg-transparent">
        @foreach($partners as $p)
            <img
                class="partner-logo absolute opacity-0 transform scale-95 will-change-transform"
                data-src="{{ $p->image_path ? asset('storage/'.$p->image_path) : asset('img/partners/1.png') }}"
                src="{{ $p->image_path ? asset('storage/'.$p->image_path) : asset('img/partners/1.png') }}"
                alt="{{ $p->title ?? 'Partner' }}"
                loading="lazy"
                style="top:0; left:0; width:auto; height:auto;"
                />
        @endforeach
    </div> --}}
    <!-- /PARTNERS -->



	<!-- PROGRESS -->
	<div class="grax_tm_progress_part">
		<div class="container">
			<div class="part_inner">
				<div class="left wow fadeInLeft" data-wow-duration="1.5s">
					<h3>I have high skills in developing and programming</h3>
					<p>I was doing everything in my power to provide me with all the experiences to provide cost-effective and high quality products to satisfy my customers all over the world</p>
				</div>
				<div class="right wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".2s">
					<div class="kioto_progress">
						<div class="progress_inner" data-value="95">
							<span><span class="label">Web Development</span><span class="number">95%</span></span>
							<div class="background"><div class="bar"><div class="bar_in"></div></div></div>
						</div>
						<div class="progress_inner" data-value="80" >
							<span><span class="label">Brand Identity</span><span class="number">80%</span></span>
							<div class="background"><div class="bar"><div class="bar_in"></div></div></div>
						</div>
						<div class="progress_inner" data-value="90">
							<span><span class="label">Logo Design</span><span class="number">90%</span></span>
							<div class="background"><div class="bar"><div class="bar_in"></div></div></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /PROGRESS -->

	<!-- TALK -->
	<div class="grax_tm_section">
		<div class="grax_tm_talk">
			<div class="container">
				<div class="talk_inner">
					<div class="text wow fadeInLeft" data-wow-duration="1.5s">
						<h3><span>Always around to make you great</span></h3>
					</div>
					<div class="button wow fadeInLeft anchor" data-wow-duration="1.5s" data-wow-delay=".2s">
						<a href="#contact">Contact Us</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /TALK -->

	<!-- PARTNERS -->
	<div class="grax_tm_section" id="partners">
		<div class="grax_tm_news">
			<div class="container">
				<div class="grax_tm_title_holder">
					<h3>Our <span>parteners</span></h3>
				</div>
				<div class="news_list">
					<div id="partners-scatter" class="relative w-full h-72 md:h-96 lg:h-[36rem] overflow-hidden bg-transparent">
                        @foreach($partners as $p)
                            <img
                                class="partner-logo absolute opacity-0 transform scale-95 will-change-transform"
                                data-src="{{ $p->image_path ? asset('storage/'.$p->image_path) : asset('img/partners/1.png') }}"
                                src="{{ $p->image_path ? asset('storage/'.$p->image_path) : asset('img/partners/1.png') }}"
                                alt="{{ $p->title ?? 'Partner' }}"
                                loading="lazy"
                                style="top:0; left:0; width:auto; height:auto;"
                                />
                        @endforeach
                    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- /NEWS -->

    <div class="grax_tm_contact" id="contact">
		<div class="container">
			<div class="grax_tm_title_holder">
				<h3>Get in <span>Touch</span></h3>
			</div>
			<div class="contact_inner">
				<div class="left wow fadeInLeft" data-wow-duration="1s">
					<div class="text">
						<p>Please fill out the form on this section to contact with me. Or call between 9:00 a.m. and 8:00 p.m. ET, Monday through Friday</p>
					</div>
					<div class="info_list">
						<ul>
                            <li>
                                <div class="list_inner">
                                    <img class="svg" src="img/svg/location.svg" alt="" />
                                    <p><span class="first">Address:</span><span class="second">{{ $settings['contact_address'] ?? 'Brook 103, New York, USA' }}</span></p>
                                </div>
                            </li>
                            <li>
                                <div class="list_inner">
                                    <img class="svg" src="img/svg/email.svg" alt="" />
                                    <p><span class="first">Email:</span><span class="second"><a href="mailto:{{ $settings['contact_email'] ?? 'example@gmail.com' }}">{{ $settings['contact_email'] ?? 'example@gmail.com' }}</a></span></p>
                                </div>
                            </li>
                            <li>
                                <div class="list_inner">
                                    <img class="svg" src="img/svg/phone.svg" alt="" />
                                    <p><span class="first">Phone:</span><span class="second"><a href="tel:{{ $settings['contact_phone'] ?? '+77 033 442 55 57' }}">{{ $settings['contact_phone'] ?? '+77 033 442 55 57' }}</a></span></p>
                                </div>
                            </li>
                            <li>
                                <div class="list_inner">
                                    <img class="svg" src="img/svg/social/dribbble.svg" alt="" />
                                    <p><span class="first">Website:</span><span class="second"><a href="{{ $settings['social_facebook'] ?? '#' }}">{{ $settings['social_facebook'] ? (parse_url($settings['social_facebook'], PHP_URL_HOST) ?? $settings['social_facebook']) : 'www.myaddress.com' }}</a></span></p>
                                </div>
                            </li>
                            <li>
                                <div class="list_inner">
                                    <img class="svg" src="img/svg/social/twitter.svg" alt="" />
                                    <p><span class="first">Twitter:</span><span class="second"><a href="{{ $settings['social_twitter'] ? (strpos($settings['social_twitter'],'@')===0 ? 'https://twitter.com/'.ltrim($settings['social_twitter'],'@') : $settings['social_twitter']) : '#' }}">{{ $settings['social_twitter'] ?? '@twitternickname' }}</a></span></p>
                                </div>
                            </li>
                            <li>
                                <div class="list_inner">
                                    <img class="svg" src="img/svg/social/facebook.svg" alt="" />
                                    <p><span class="first">Facebook:</span><span class="second"><a href="{{ $settings['social_facebook'] ?? '#' }}">{{ $settings['social_facebook'] ?? '@facebooknickname' }}</a></span></p>
                                </div>
                            </li>
						</ul>
					</div>
				</div>











				<div class="right wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s">
					<div class="fields">
                        <form action="{{ route('contact.store') }}" method="post" class="contact_form" id="contact_form">
                            @csrf
							<div class="returnmessage" data-success="Your message has been received, We will contact you soon."></div>
							<div class="empty_notice"><span>Please fill out the form on this section to contact with me. Or call between {{ $settings['contact_hours'] ?? '9:00 a.m. and 8:00 p.m. ET, Monday through Friday' }}</span></div>
							<div class="first">
								<ul>
									<li>
                            <input id="name" name="name" type="text" placeholder="Name" required>
									</li>
									<li>
                            <input id="email" name="email" type="email" placeholder="Email" required>
									</li>
								</ul>
							</div>
							<div class="last">
                            <textarea id="message" name="message" placeholder="Message" required></textarea>
							</div>
							<div class="grax_tm_button">
                            <button id="send_message" type="submit" class="btn">Send Message</button>
								<a id="send_message" href="#">Send Message</a>
							</div>

							<!-- If you want to change mail address to yours, please open modal.php and go to line 4 -->

						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

    <!-- CONTACT -->
    {{-- <div class="grax_tm_contact" id="contact">
        <div class="container">
            <div class="grax_tm_title_holder">
                <h3>Get in <span>Touch</span></h3>
            </div>
            <div class="contact_inner">
                <div class="left wow fadeInLeft" data-wow-duration="1s">
                    <div class="text">
                        <p>Please fill out the form on this section to contact with me. Or call between 9:00 a.m. and 8:00 p.m. ET, Monday through Friday</p>
                    </div>
                </div>
                <div class="right wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s">
                    <div class="fields">
                        <form action="{{ route('contact.store') }}" method="post" class="contact_form" id="contact_form">
                            @csrf
                            <div class="returnmessage" data-success="Your message has been received, We will contact you soon."></div>
                            <div class="empty_notice"><span>Please Fill Required Fields</span></div>
                            <div class="first">
                                <ul>
                                    <li><input name="name" type="text" placeholder="Your Name" required></li>
                                    <li><input name="email" type="email" placeholder="Email" required></li>
                                </ul>
                            </div>
                            <div class="last">
                                <textarea id="message" name="message" placeholder="Message" required></textarea>
                            </div>
                            <div class="grax_tm_button">
                                <button type="submit" id="send_message" class="btn">Send Message</button>
                            </div>

                            <!-- If you want to change mail address to yours, please open modal.php and go to line 4 -->

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- /CONTACT -->

    <!-- COPYRIGHT -->
    <div class="grax_tm_section">
        <div class="grax_tm_copyright">
            <div class="my_wave">
                <svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <defs></defs>
                    <path id="wave_img" data-color="#fff" d="M 0 185.609 C 317.16666666666663 118.136 317.16666666666663 118.136 634.3333333333333 151.87 C 951.4999999999999 185.609 951.4999999999999 185.609 1268.6666666666665 116.402 C 1585.833333333333 47.195 1585.833333333333 47.195 1903 131.925 L 1903 507 L 0 507 Z" fill="#fff"></path>
                </svg>
            </div>
            <div class="container">
                <div class="copyright_inner">
                    <div class="logo wow fadeInLeft" data-wow-duration="1s">
                        <img src="{{ asset('storage/'.$settings['logo_path']) }}" alt="" style="width:220px; height:auto;" />
                    </div>
                    <div class="social wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s">
                        <ul>
                            @if(!empty($settings['social_facebook']))
                                <li><a href="{{ $settings['social_facebook'] }}" target="_blank" rel="noopener"><img class="svg" src="{{ asset('img/svg/social/facebook.svg') }}" alt="Facebook" /></a></li>
                            @endif
                            @if(!empty($settings['social_twitter']))
                                <li><a href="{{ $settings['social_twitter'] }}" target="_blank" rel="noopener"><img class="svg" src="{{ asset('img/svg/social/twitter.svg') }}" alt="Twitter" /></a></li>
                            @endif
                            @if(!empty($settings['social_instagram']))
                                <li><a href="{{ $settings['social_instagram'] }}" target="_blank" rel="noopener"><img class="svg" src="{{ asset('img/svg/social/dribbble.svg') }}" alt="Instagram" /></a></li>
                            @endif
                            @if(!empty($settings['social_tiktok']))
                                <li><a href="{{ $settings['social_tiktok'] }}" target="_blank" rel="noopener"><img class="svg" src="{{ asset('img/svg/social/tik-tok.svg') }}" alt="TikTok" /></a></li>
                            @endif
                        </ul>
                    </div>
                    <div class="copy wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s">
                        <p>&copy; Copyright {{ date('Y') }} {{ config('app.name','Marketify') }} by <a href="https://clicksoftwaregh.com">ClickSoftwareGH</a></p>
                        {{-- Admin quick link: goes to admin dashboard when logged in, otherwise to login page --}}
                        <div style="margin-top:6px">
                            @if(auth()->check())
                                <a href="{{ route('admin.heroes.index') }}" class="text-muted">Admin Portal</a>
                            @else
                                <a href="{{ route('login') }}" class="text-muted">Admin Login</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /COPYRIGHT -->

    <!-- CURSOR -->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>
    <!-- /CURSOR -->

    <!-- START: Page Progress -->
    <div class="progressbar">
        <a href="#"><span class="text">To Top</span></a>
        <span class="line"></span>
    </div>
    <!-- END: Page Progress -->

</div>
<!-- / WRAPPER ALL -->
<!-- SCRIPTS -->
<script src="{{ asset('js/jquery.js') }}"></script>
<!--[if lt IE 10]> <script type="text/javascript" src="{{ asset('js/ie8.js') }}"></script> <![endif]-->
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/init.js') }}"></script>

<!-- Hero slider (simple jQuery) -->
<style>
    .grax_tm_hero .bg { position: relative; overflow: hidden; }
    .grax_tm_hero .bg .slide { position: absolute; inset:0; background-size:cover; background-position:center; opacity:0; transition:opacity .6s ease-in-out; }
    .grax_tm_hero .bg .slide.active{ opacity:1; z-index:1 }
    .hero-dots { display:flex; justify-content:center; gap:8px; margin-top:16px }
    .hero-dots .dot{ width:10px; height:10px; border-radius:50%; background:rgba(255,255,255,0.5); border:0; cursor:pointer }
    .hero-dots .dot.active{ background:rgba(255,255,255,0.95) }

        /* subtle entrance animation */
    .partner-logo {
      transition: opacity .6s ease, transform .6s cubic-bezier(.2,.9,.3,1);
      opacity: 0;
      transform: scale(.94);
      pointer-events: auto;
      /* keep images crisp when scaled */
      image-rendering: -webkit-optimize-contrast;
    }

    /* added after positioning */
    .partner-visible {
      opacity: 1 !important;
      transform: scale(1) !important;
    }
</style>
<script>
(function(){
  const container = document.getElementById('partners-scatter');
  if(!container) return;

  const imgs = Array.from(container.querySelectorAll('.partner-logo'));
  // configuration
  const attemptsPerImage = 300;
  const sizePct = { min: 0.06, max: 0.16 }; // fraction of container width
  const gapPx = 6; // small padding between logos

  // simple debounce
  function debounce(fn, wait){
    let t;
    return (...args) => { clearTimeout(t); t = setTimeout(()=>fn(...args), wait); };
  }

  function rectsOverlap(a, b){
    return !(a.left + a.w + gapPx <= b.left ||
             b.left + b.w + gapPx <= a.left ||
             a.top + a.h + gapPx <= b.top ||
             b.top + b.h + gapPx <= a.top);
  }

  function placeLogos(){
    const contW = container.clientWidth;
    const contH = container.clientHeight;
    if (contW === 0 || contH === 0) return;

    const placed = [];

    // ensure images load natural sizes before computing aspect
    const loadPromises = imgs.map(img => {
      return new Promise(resolve => {
        if(img.complete && img.naturalWidth) return resolve(img);
        img.onload = () => resolve(img);
        img.onerror = () => resolve(img);
      });
    });

    Promise.all(loadPromises).then(() => {
      imgs.forEach((img, index) => {
        // randomize target width in px
        let pct = sizePct.min + Math.random() * (sizePct.max - sizePct.min);
        // on very small screens, scale sizes down
        if (contW < 480) pct = Math.max(pct * 0.6, 0.05);
        let targetW = Math.round(contW * pct);
        // preserve aspect ratio
        const natW = img.naturalWidth || targetW;
        const natH = img.naturalHeight || (targetW * 0.5);
        let targetH = Math.round(targetW * (natH / natW));

        // clamp if taller than container
        if(targetH > contH * 0.7){
          targetH = Math.round(contH * 0.6);
          targetW = Math.round(targetH * (natW / natH));
        }

        // try random positions
        let placedRect = null;
        for(let attempt = 0; attempt < attemptsPerImage; attempt++){
          const left = Math.floor(Math.random() * Math.max(1, contW - targetW));
          const top = Math.floor(Math.random() * Math.max(1, contH - targetH));
          const rect = { left, top, w: targetW, h: targetH };

          // check bounds (already ensured by random range) and collisions
          let collision = false;
          for(const p of placed){
            if(rectsOverlap(rect, p)){
              collision = true; break;
            }
          }
          if(!collision){
            placedRect = rect; break;
          }

          // on many failures reduce size slightly and retry
          if(attempt % 50 === 0){
            targetW = Math.max(40, Math.round(targetW * 0.92));
            targetH = Math.round(targetW * (natH / natW));
          }
        }

        // fallback: if still not placed, place along a spiral/stack area
        if(!placedRect){
          let l = (index * 30) % Math.max(1, contW - targetW);
          let t = Math.min(contH - targetH, (index * 20) % (contH - targetH || 1));
          placedRect = { left: l, top: t, w: targetW, h: targetH };
        }

        // apply styles
        img.style.width = placedRect.w + 'px';
        img.style.height = placedRect.h + 'px';
        img.style.left = placedRect.left + 'px';
        img.style.top = placedRect.top + 'px';
        // layering: slight z-index by top so overlaps look natural
        img.style.zIndex = String(200 + Math.round((container.clientHeight - placedRect.top)));
        // show with animation
        requestAnimationFrame(() => img.classList.add('partner-visible'));

        placed.push(placedRect);
      });
    });
  }

  // initialize: small delay so CSS and layout settle
  setTimeout(placeLogos, 80);

  // reposition on resize (debounced)
  window.addEventListener('resize', debounce(() => {
    // reset opacity to re-run animation if desired
    imgs.forEach(i => i.classList.remove('partner-visible'));
    placeLogos();
  }, 180));

})();
</script>
<script>
    (function($){
        $(function(){
            var $slides = $('.grax_tm_hero .bg .slide');
            var $dots = $('.hero-dots .dot');
            var current = $slides.filter('.active').index();
            if(current < 0) current = 0;
            var total = $slides.length;
            function go(i){
                $slides.removeClass('active').eq(i).addClass('active');
                $dots.removeClass('active').eq(i).addClass('active');
                var title = $slides.eq(i).data('title') || '';
                var desc = $slides.eq(i).data('description') || '';
                $('.grax_tm_hero .details .name').text(title);
                $('.grax_tm_hero .details .job').text(desc);
                current = i;
            }
            $dots.on('click', function(){ go(parseInt($(this).data('index'))); });
            if(total > 1){
                setInterval(function(){
                    var next = (current + 1) % total;
                    go(next);
                },10000);
            }
        });
    })(jQuery);
</script>

<!-- Partners slider CSS/JS -->
<style>
    .partners_slider_wrap{overflow:hidden;padding:20px 0}
    .partners-slider { position: relative; display:flex; align-items:center; }
    .partners-slider .viewport{ overflow:hidden; width:100%; }
    .partners-slider .track{display:flex;gap:20px;transition:transform 0.5s ease}
    .partner-item{flex:0 0 calc((100% - 80px)/5);display:flex;align-items:center;justify-content:center}
    .partner-item img{width:200px;height:70px;object-fit:contain;display:block}
    .partners-arrow{background:transparent;border:0;font-size:28px;cursor:pointer;padding:8px 12px}
    @media(max-width:900px){ .partner-item{flex:0 0 calc((100% - 40px)/3)} }
    @media(max-width:600px){ .partner-item{flex:0 0 calc((100% - 20px)/2)} }
</style>
<script>
    (function($){
        $(function(){
            var $wrap = $('.partners_slider_wrap');
            var $track = $wrap.find('.track');
            if(!$track.length) return;

            var $viewport = $wrap.find('.viewport');
            var $items = $track.children();
            var originalCount = $items.length;

            // ensure each image has explicit width/height attributes to avoid layout shift
            $track.find('img').each(function(){
                if(!this.complete) return;
                var w = this.naturalWidth || 200;
                var h = this.naturalHeight || 70;
                // set CSS fallback sizing if not present
                $(this).attr('width', $(this).attr('width') || 200);
                $(this).attr('height', $(this).attr('height') || 70);
            });

            // clone items to enable seamless loop
            if(originalCount > 0){
                $track.append($items.clone());
            }

            var children = $track.children();
            var total = children.length;
            var itemWidth = children.first().outerWidth(true);
            var pos = 0;
            var stepPx = itemWidth;
            var timerInterval = 3000;
            var timer;

            function startTimer(){ timer = setInterval(function(){ step(1); }, timerInterval); }
            function stopTimer(){ clearInterval(timer); }

            function step(dir){
                dir = dir || 1;
                pos += stepPx * dir;
                var wrapAt = itemWidth * (total / 2);
                if(pos >= wrapAt) pos = 0;
                if(pos < 0) pos = wrapAt - stepPx;
                $track.css('transform','translateX(-'+pos+'px)');
            }

            // init
            itemWidth = children.first().outerWidth(true);
            stepPx = itemWidth;
            startTimer();

            // arrows
            $wrap.on('click', '.partners-next', function(){ stopTimer(); step(1); startTimer(); });
            $wrap.on('click', '.partners-prev', function(){ stopTimer(); step(-1); startTimer(); });

            // pause on hover
            $wrap.on('mouseenter', function(){ stopTimer(); }).on('mouseleave', function(){ startTimer(); });

            // touch / swipe
            var startX = 0, deltaX = 0, dragging = false;
            $viewport.on('touchstart', function(e){ stopTimer(); dragging = true; startX = e.originalEvent.touches[0].clientX; });
            $viewport.on('touchmove', function(e){ if(!dragging) return; deltaX = e.originalEvent.touches[0].clientX - startX; $track.css('transform','translateX(' + (-pos + -deltaX) + 'px)'); });
            $viewport.on('touchend touchcancel', function(e){ if(!dragging) return; dragging = false; if(Math.abs(deltaX) > (itemWidth/4)){ step(deltaX < 0 ? 1 : -1); } else { $track.css('transform','translateX(-'+pos+'px)'); } deltaX = 0; startTimer(); });

            // adjust on resize
            $(window).on('resize', function(){
                itemWidth = children.first().outerWidth(true);
                stepPx = itemWidth;
            });
        });
    })(jQuery);
</script>

</body>
</html>








{{-- <!doctype html> --}}
{{-- <html lang="en"> --}}
<head>
    {{-- <meta charset="utf-8"> --}}
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1"> --}}
    {{-- <title>{{ config('app.name','Site') }}</title> --}}
    {{-- <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}" /> --}}
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200;400;600;800&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('css/colors.css') }}">
    <link rel="stylesheet" href="{{ asset('css/darkMode.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
{{-- <body> --}}
    <!-- keep the single page template design unchanged; only areas below are dynamic -->

    <!-- HERO -->
    {{-- <div class="grax_tm_hero" id="home">
        <div class="bg">
            <div class="image" style="background-image: url('{{ optional($hero)->media_path ? asset('storage/'.optional($hero)->media_path) : asset('img/slider/2.jpg') }}')"></div>
            <div class="overlay"></div>
        </div>
        <div class="content">
            <div class="container">
                <div class="details" data-animation="toTop">
                    <h3 class="fn_animation name">{{ $hero->title ?? 'Your Name' }}</h3>
                    <span class="fn_animation job">{{ $hero->description ?? 'Web & Mobile App Developer' }}</span>
                </div>
                <div class="grax_tm_down" data-skin="light"><div class="line_wrapper"><div class="line"></div></div></div>
            </div>
        </div>
    </div> --}}

    <!-- ABOUT -->
    {{-- <div class="grax_tm_section" id="about">
        <div class="grax_tm_about">
            <div class="container">
                <div class="about_inner">
                    <div class="left">
                        <div class="image">
                            <img src="{{ optional($about)->image_path ? asset('storage/'.optional($about)->image_path) : asset('img/placeholders/3-4.jpg') }}" alt="" />
                        </div>
                    </div>
                    <div class="right">
                        <div class="grax_tm_title_holder"><h3>About <span>Me</span></h3></div>
                        <div class="text"><p>{!! nl2br(e($about->description ?? 'Describe yourself here.')) !!}</p></div>
                        @if(optional($about)->action_link)
                        <div class="grax_tm_button"><a href="{{ $about->action_link }}">{{ $about->action_text ?? 'Learn more' }}</a></div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- EXPERIENCE -->
    {{-- <div class="grax_tm_section" id="portfolio">
        <div class="grax_tm_portfolio">
            <div class="container">
                <div class="grax_tm_title_holder"><h3>Selected <span>Works</span></h3></div>
                <div class="portfolio_list">
                    <ul class="gallery_zoom">
                        @foreach($experiences as $exp)
                        <li>
                            <div class="list_inner">
                                <div class="image"><img src="{{ $exp->image_path ? asset('storage/'.$exp->image_path) : asset('img/placeholders/1-1.jpg') }}" alt="" />
                                    <div class="main" style="background-image:url('{{ $exp->image_path ? asset('storage/'.$exp->image_path) : asset('img/portfolio/1.jpg') }}')"></div>
                                </div>
                                <div class="details"><span>{{ $exp->type }}</span><h3>{{ $exp->title }}</h3></div>
                                @if($exp->link)
                                <a class="grax_tm_full_link" href="{{ $exp->link }}"></a>
                                @endif
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- PARTNERS -->
    {{-- <div class="grax_tm_section" id="news">
        <div class="grax_tm_news">
            <div class="container">
                <div class="grax_tm_title_holder"><h3>Our <span>Partners</span></h3></div>
                <div class="news_list">
                    <ul>
                        @foreach($partners as $p)
                        <li>
                            <div class="list_inner">
                                <div class="image"><img src="{{ $p->image_path ? asset('storage/'.$p->image_path) : asset('img/partners/1.png') }}" alt="" /></div>
                                <div class="details"><h3 class="title">{{ $p->title }}</h3></div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- CONTACT FORM -->
    {{-- <div class="grax_tm_contact" id="contact">
        <div class="container">
            <div class="grax_tm_title_holder"><h3>Get in <span>Touch</span></h3></div>
            <div class="contact_inner">
                <div class="right">
                    <div class="fields">
                        <form action="{{ route('contact.store') }}" method="post">
                            @csrf
                            <div class="first">
                                <ul>
                                    <li><input type="text" name="name" placeholder="Name" required></li>
                                    <li><input type="email" name="email" placeholder="Email" required></li>
                                </ul>
                            </div>
                            <div class="last"><textarea name="message" placeholder="Message" required></textarea></div>
                            <div class="grax_tm_button"><button type="submit">Send Message</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/init.js') }}"></script> --}}
{{-- </body>
</html> --}}
