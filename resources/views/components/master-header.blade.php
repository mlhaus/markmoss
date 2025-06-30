<header>
    <!-- Start Navigation -->
    <nav class="ic-navbar navbar navbar-expand-xl">
        <div class="ic-container d-flex align-items-center position-relative">
            <!-- Start Header Navigation -->
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{asset('images/markmoss_logo@2x.png')}}" alt="Mark Moss logo" />
            </a>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span></span>
                <span></span>
                <span></span>
            </button>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ic-navbar-nav ms-auto mb-2 mb-lg-0">
                    <x-master-link url="/" :active="request()->is('/')">Home</x-master-link>
                    <x-master-link url="/music" :active="request()->is('/music')">Music</x-master-link>
                    <x-master-link url="/events" :active="request()->is('/events')">Events</x-master-link>
                    <x-master-link url="/gallery" :active="request()->is('/gallery')">Gallery</x-master-link>
                    <x-master-link url="/news" :active="request()->is('/news')">News</x-master-link>
                    <x-master-link url="/albums" :active="request()->is('/albums')">Albums</x-master-link>
                    <x-master-link url="/contact" :active="request()->is('/contact')">Contact</x-master-link>
                </ul>
                <div class="ic-right-side d-flex ms-auto">
                    <!-- <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                      ><i class="icofont-search"></i
                    ></a> -->
                </div>
            </div>
        </div>
    </nav>
    <!-- End Navigation -->
</header>
<!-- End Header -->
