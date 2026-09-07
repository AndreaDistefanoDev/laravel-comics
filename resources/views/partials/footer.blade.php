<footer class="text-white-50">

    <div class="w-100 position-relative text-white-50 overflow-hidden"
         style="background-image: url('{{ Vite::asset('resources/img/footer-bg.jpg') }}'); 
                background-size: cover; 
                background-repeat: no-repeat; 
                min-height: 380px;
                padding-top: 3rem; 
                padding-bottom: 3rem;">
        
        <div class="container">
            <div class="row">
                

                <div class="col col-md-2 col-6 mb-4 mb-md-0">
                    <p class="text-white text-uppercase font-weight-bold mb-3 small" style="letter-spacing: 0.5px;">DC COMICS</p>
                    <ul class="list-unstyled lh-sm small mb-4">
                        <li>Characters</li>
                        <li>Comics</li>
                        <li>Movies</li>
                        <li>TV</li>
                        <li>Games</li>
                        <li>Videos</li>
                        <li>News</li>
                    </ul>
                    
                    <p class="text-white text-uppercase font-weight-bold mb-3 small" style="letter-spacing: 0.5px;">SHOP</p>
           
                    <ul class="list-unstyled lh-sm small m-0">
                        <li>Shop DC</li>
                        <li>Shop DC Collecltibles</li>
                    </ul>
                </div>

                
                <div class="col-md-2 col-6 mb-4 mb-md-0">
                    <p class="text-white text-uppercase font-weight-bold mb-3 small" style="letter-spacing: 0.5px;">DC</p>
                    <ul class="list-unstyled lh-sm small m-0">
                        <li>Terms Of Use</li>
                        <li>Privacy Policy</li>
                        <li>Ad Choices</li>
                        <li>Advertising</li>
                        <li>Jobs</li>
                        <li>Subscriptions</li>
                        <li>Talent Workshops</li>
                        <li>CPSC Certificates</li>
                        <li>Ratings</li>
                        <li>Shop Help</li>
                        <li>Contact Us</li>
                    </ul>
                </div> 

                
                <div class="col-md-2 col-6">
                    <p class="text-white text-uppercase font-weight-bold mb-3 small" style="letter-spacing: 0.5px;">SITES</p>
                    <ul class="list-unstyled lh-sm small m-0">
                        <li>DC</li>
                        <li>MAD Magazine</li>
                        <li>DC Kids</li>
                        <li>DC Universe</li>
                        <li>DC Power Visa</li>
                    </ul>
                </div>
            
               
                <div class="col-md-6 d-none d-md-block">
                    
                    <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" 
                         alt="DC Logo Gigante" 
                         style="position: absolute; right: 0; bottom: -40px; height: 450px; object-fit: contain; z-index: 1;">
                </div>

            </div> 
        </div> 
    </div> 


    <div class="w-100 py-4 position-relative" style="background-color: #303030; z-index: 2;">
        <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center gap-3">
            <div>
                <button class="btn btn-outline-primary border-2 text-white font-weight-bold rounded-0 px-3 py-2 text-uppercase btn-sm" 
                        style="border-color: #0282f9; font-size: 0.85rem;">
                    Sign-up now!
                </button>
            </div>
            
            <div class="d-flex align-items-center gap-3">
                <span class="font-weight-bold text-uppercase" style="color: #0282f9; font-size: 1rem; letter-spacing: 0.5px;">
                    Follow us
                </span>
                <div class="d-flex gap-2">
                    <a href="#"><img src="{{ Vite::asset('resources/img/footer-facebook.png') }}" alt="Facebook" style="width: 32px; height: 32px;"></a>
                    <a href="#"><img src="{{ Vite::asset('resources/img/footer-twitter.png') }}" alt="Twitter" style="width: 32px; height: 32px;"></a>
                    <a href="#"><img src="{{ Vite::asset('resources/img/footer-youtube.png') }}" alt="YouTube" style="width: 32px; height: 32px;"></a>
                    <a href="#"><img src="{{ Vite::asset('resources/img/footer-pinterest.png') }}" alt="Pinterest" style="width: 32px; height: 32px;"></a>
                    <a href="#"><img src="{{ Vite::asset('resources/img/footer-periscope.png') }}" alt="Periscope" style="width: 32px; height: 32px;"></a>
                </div>
            </div>
        </div>
    </div>
</footer>
