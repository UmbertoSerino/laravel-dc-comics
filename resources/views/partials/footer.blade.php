<footer>
    <div class="big-container-footer">
        <section class="footer-top">
            <div class="container-list">
                <div>
                    <ul class="me-5">
                        <h1>dc comics</h1>
                        @for ($i = 0; $i < count($dcComicsList); $i++) <li class="fs-5">{{ $dcComicsList[$i] }}</li>
                            @endfor
                    </ul>
                    <ul class="me-5">
                        <h1>
                            Shop
                        </h1>
                        @for ($i = 0; $i < count($shopList); $i++) <li class="fs-5">{{ $shopList[$i] }}</li>
                            @endfor
                    </ul>
                </div>
                <div>
                    <ul class="me-5">
                        <h1>
                            dc
                        </h1>
                        @for ($i = 0; $i < count($dcList); $i++) <li class="fs-5">{{ $dcList[$i] }}</li>
                            @endfor
                    </ul>
                </div>
                <div>


                    </ul>

                </div>
            </div>
            <div>
                <img src="../assets/img/dc-logo-bg.png" alt="">
            </div>
        </section>
    </div>
    <section class="footer-bottom">
        <div class="container-footer-bottom">
            <div>
                <button>Sign-Up Now!</button>
            </div>
            <div class="container-icon">
                <p class="follow">Follow us</p>
                <img src="{{ Vite::asset('resources/assets/img/footer-facebook.png') }}" alt="pictures logo facebook">
                <img src="{{ Vite::asset('resources/assets/img/footer-twitter.png') }}" alt="picture logo twitter">
                <img src="{{ Vite::asset('resources/assets/img/footer-youtube.png') }}" alt="picture logo youtube">
                <img src="{{ Vite::asset('resources/assets/img/footer-pinterest.png') }}" alt="picture logo pinterest">
                <img src="{{ Vite::asset('resources/assets/img/footer-periscope.png') }}" alt="picture logo periscope">
            </div>
        </div>
    </section>
</footer>