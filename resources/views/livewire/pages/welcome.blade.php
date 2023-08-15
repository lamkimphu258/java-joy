@pushOnce('styles')
@vite(['resources/scss/pages/welcome.scss'])
@endPushOnce

@pushOnce('scripts')
@vite(['resources/js/welcome.js'])
@endPushOnce

<main>
    <!-- Hero Section -->
    <section id="hero" class="section">
        <div id="hero-wrapper" class="w-container">
            <div class="hero-text animate__animated animate__fadeInLeft">
                <span class="hero-introduction">Revive your coffee love</span>
                <span class="hero-description">Coffee contains caffeine, a natural stimulant that can help increase alertness and reduce fatigue.It also contains antioxidants and other beneficial compounds.</span>
                <x-button content="view more details" type="primary" :link="route('products.index')"/>
            </div>
            <div class="hero-img animate__animated animate__fadeInRight">
                <img id="hero-stamp" src="images/hero-stamp.webp" alt="Hero Stamp" class="animate__animated animate__fadeIn animate__delay-1s" />
                <img src="images/hero-img.webp" alt="Hero Image" />
            </div>
        </div>
    </section>

    <!-- Feature Product Section -->
    <section id="featured-product" class="w-container section">
        <div class="title-wrapper animate__animated">
            <h2 class="title">OUR BLEND DELIVER</h2>
            <p class="description">
                Hot, Cold, Sweet or straight up, we've got the brew for you.
            </p>
            <x-button content="all product" type="secondary" class="my-8" :link="route('products.index')" />
        </div>
        <livewire:featured-product />
    </section>

    <!-- Info Section -->
    <section id="info" class="section">
        <div class="info-content w-container animate__animated">
            <h2 class="info-title">CAFFEINE INFUSED DELIGHT</h2>
            <p class="info-description">Coffee can be enjoyed in a variety of forms, from a simple cup of black coffee to more elaborate drinks like lattes and cappuccinos. It is a popular social beverage and often enjoyed as a part of social gatherings, meetings, or alone as a moment of relaxation.</p>
        </div>

        <div class="video-container">
            <video autoplay loop muted>
                <source src="videos/info-video.mp4" type="video/mp4">
                <source src="videos/info-movie.webm" type="video/webm">
                Your browser does not support the video tag.
            </video>
        </div>
    </section>

    <!-- Menu Section -->
    <section id="menu" class="section">
        <div class="w-container menu-wrapper">
            <div class="menu-introduction animate__animated">
                <div class="sticky top-28">
                    <h2 class="menu-title">WHAT MAKES OUR COFFEE BEST?</h2>
                    <p class="menu-description">Coffee can be served hot or cold and can be prepared in a variety of ways, such as drip brewing, French press, espresso, and more. The flavor and strength of the coffee depend on the type of beans used, the roasting process, and the brewing method.</p>
                </div>
            </div>
            <div class="menu-right-side animate__animated">
                <div class="menu-card">
                    <p class="menu-title">ORGANIC COFFEE</p>
                    <ul class="menu-content">
                        <li>Pure flavor</li>
                        <li>Natural taste</li>
                        <li>Chemical-free beans</li>
                        <li>Sustainable farming</li>
                    </ul>
                </div>
                <div class="menu-card">
                    <p class="menu-title">FRESH ROASTED</p>
                    <ul class="menu-content">
                        <li>Full-bodied flavor</li>
                        <li>Aromatic beans</li>
                        <li>High-quality roast</li>
                        <li>Fresh aroma</li>
                    </ul>
                </div>
                <div class="menu-card">
                    <p class="menu-title">ORIGINAL TASTE</p>
                    <ul class="menu-content">
                        <li>Classic flavor</li>
                        <li>Authentic taste</li>
                        <li>Original recipe</li>
                        <li>Traditional blend</li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section id="testimonial" class="section bg-primaryColor">
        <div class="w-container animate__animated">
            <h2 class="section-title">OUR TESTIMONIAL</h2>

            <div class="testimonial-container">
                <img id="arrow-left" src="images/arrow-left.svg" alt="Arrow Left" class="arrow arrow-left" />
                <img id="arrow-right" src="images/arrow-right.svg" alt="Arrow Right" class="arrow arrow-right" />
                <div id="quote-1" class="quote animate__animated animate__bounceIn">
                    <img src="images/double-quotes.svg" alt="Double Quotes" width="50" height="50" />
                    <p class="content">
                        "I'm a very stubborn person. I think it has helped me over my career. I'm sure it has hindered me at times as well, but not too many times. I know that if I set my mind to do something,I will achieve it."
                    </p>
                    <p class="author">ANN DEN SMITH</p>
                    <p class="role">Manager</p>
                </div>

                <div id="quote-2" class="quote hidden animate__animated">
                    <img src="images/double-quotes.svg" alt="Double Quotes" width="50" height="50" />
                    <p class="content">
                        "I'm a very stubborn person. I think it has helped me over my career. I'm sure it has hindered me at times as well, but not too many times. I know that if I set my mind to do something,I will achieve it."
                    </p>
                    <p class="author">RENIE JOHN</p>
                    <p class="role">Owner</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Recent Posts Section -->
    <section id="recent-posts" class="section bg-black">
        <div class="w-container">
            <h2 class="section-title animate__animated">our recent posts</h2>

            <div>
                <livewire:recent-post limit="3" />
            </div>
        </div>
    </section>
</main>
