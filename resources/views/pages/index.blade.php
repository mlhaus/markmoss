<x-master-layout>
<!-- Start Banner Area
============================================= -->
<section class="ic-banner">
    <div class="ic-container">
        <!-- slider main container -->
        <div class="ic-banner-slider">
            <div class="banner-slider-item">
                <div class="row">
                    <div class="col-lg-10">
            <span class="animated" data-animation-in="fadeInUp"
            >Solo Acoustic Artist: Dallas/Fort&nbsp;Worth,&nbsp;TX</span
            >
                        <h1 class="animated" data-animation-in="fadeInUp">Mark Moss</h1>
                        <h2 class="animated" data-animation-in="fadeInUp">
                            One Stunning Voice
                        </h2>
                        <p class="animated" data-animation-in="fadeInUp">
                            Mark Moss is a solo acoustic artist based out of Dallas / Fort Worth, Texas. Mark started doing solo acoustic performances in 2001 and has been performing around the Midwest ever since. Performances feature a wide variety of music, from classic rock to current to original work off his CD’s. From black tie affairs, coffeeshops, weddings, parties, corporate events to live music venues large and small, Mark is a hit anywhere.
                        </p>
                        <p class="animated" data-animation-in="fadeInUp">
                            Mark is known for his extreme singing range, dexterity on the acoustic guitar, and knack for reading the crowd. He enjoys performing and it shows! His enthusiasm with the crowd and strong skills has resulted in a solid following. Check out his upcoming events below to catch him at a show near you!
                        </p>
                        <x-master-button url="/contact">Book Me</x-master-button>
                    </div>
                </div>
            </div>
        </div>

        <!-- slider arrow -->
        <!-- <div class="ic-banner-slider-arrow">
          <button class="ic-banner-slider-prev">
            <i class="icofont-thin-left"></i>
          </button>
          <button class="ic-banner-slider-next">
            <i class="icofont-thin-right"></i>
          </button>
        </div> -->
    </div>
</section>
<!-- End Banner -->

<!-- Upcoming Events
============================================= -->
<section class="ic-upcoming-tour">
    <div class="ic-container">
        <div class="ic-heading-title">
            <h3
                class="wow fadeInDown"
                data-wow-duration="1.5s"
                data-wow-delay=".5s"
            >
                Upcoming Events
            </h3>
            <img src="{{asset('images/heading-shape.png')}}" alt="shape" />
            <p class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".5s">
                Be ready to be subjected to a barrage of excellent music, from one of the most popular musicians in the area.
            </p>
        </div>
        <div class="row g-3">
            <div class="col-lg-8 mx-auto">
                <div
                    class="ic-tour-info wow fadeInLeft"
                    data-wow-duration="1.5s"
                    data-wow-delay=".5s"
                >
                @forelse($upcomingEvents as $event)
                    <div class="ic-upcoming-tour-item">
                        <div class="ic-upcoming-tour-date">
                            <span>{{ $event->event_date->format('F j') }}</span>
                            <span>{{ $event->event_date->format('Y') }}</span>
                        </div>
                        <div class="ic-upcoming-tour-info">
                            <h5>{{ $event->title }}</h5>
                            @if(!empty($event->featured_image_url))
                                <img src="{{asset('images/'.$event->featured_image_url)}}" alt="{{ $event->title }}">
{{--                                Or use double quotes {{ asset("images/{$event->featured_image_url}") }}--}}
                            @endif
                            <p>{!! $event->sanitized_content !!}</p>
{{--                            <p>by <strong>{{ $event->user->display_name }}</strong></p>--}}
                            <div class="ic-upcoming-tour-address">
                                @if(!empty($event->map_url))
                                <p><a href="{{ $event->map_url }}" target="_blank">
                                    <i class="icofont-location-pin"></i>
                                    <span>{{ $event->venue }}, {{ $event->city_state }}</span>
                                </a></p>
                                @endif
                                @if(!empty($event->tickets_url))
                                <p><a href="{{ $event->tickets_url }}" target="_blank">
                                    <i class="icofont-ticket"></i>
                                    <span>Tickets</span>
                                </a></p>
                                @endif
                                <p>
                                    <i class="icofont-clock-time"></i>
                                    <span>{{ $event->event_date->format('g:i a') }}</span>
                                </p>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>No events found</p>
                @endforelse
                </div>
            </div>
{{--            <div--}}
{{--                class="col-lg-6 wow fadeInRight"--}}
{{--                data-wow-duration="1.5s"--}}
{{--                data-wow-delay=".5s"--}}
{{--            >--}}
{{--                <div class="ic-upcoming-image">--}}
{{--                    <img--}}
{{--                        src="{{asset('images/MarkMoss-BW.jpg')}}"--}}
{{--                        class="img-fluid w-100"--}}
{{--                        alt="Mark Moss"--}}
{{--                    />--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
        <x-master-button url="/events" align="center">View All Events</x-master-button>
    </div>
</section>
<!-- End Upcoming Events -->


<!-- latest news
============================================= -->
<section class="ic-latest-news">
    <div class="ic-container">
        <div class="ic-heading-title">
            <h3
                class="wow fadeInDown"
                data-wow-duration="1.5s"
                data-wow-delay=".5s"
            >
                latest news
            </h3>
            <img src="{{asset('images/heading-shape.png')}}" alt="shape" />
        </div>
        <div class="row g-3 justify-content-center">
            @forelse($latestNews as $post)
                <div class="col-lg-4 col-md-6">
                    <a href="blog-details.html" class="d-block">
                        <div
                            class="ic-news-item wow fadeInUp"
                            data-wow-duration="1s"
                            data-wow-delay=".5s"
                        >
                            <div class="ic-news-image">
                                @if(!empty($post->featured_image_url))
                                    <img src="{{asset("images/$post->featured_image_url")}}" alt="{{ $post->title }}">
                                @endif
                            </div>
                            <div class="ic-news-info">
                                <h5>
                                    {{$post->title}}
                                </h5>
                                <p>{!! $post->sanitized_content !!}</p>
                                <div class="ic-news-user">
                                    <span><i class="icofont-user-male"></i> By {{ $post->user->display_name }}</span>
                                    <span><i class="icofont-clock-time"></i> {{ $post->published_at->format('F j, Y') }}</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @empty
                <p>No news found</p>
            @endforelse
        </div>
        <x-master-button url="/news" align="center">View All News</x-master-button>
    </div>
</section>
<!-- End latest news -->
</x-master-layout>
