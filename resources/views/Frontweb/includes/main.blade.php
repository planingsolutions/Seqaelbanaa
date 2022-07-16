<div class="hero" style="background-image: url({{asset('assets/images/jason-dent-w3eFhqXjkZE-unsplash.jpg')}});">
        <div class="layer"></div>
        <div class="hero-slide">
        </div>
        <div class="container">
            <div class="row justify-content-center align-items-center">
                @foreach($query as $Tittlee)
                    <div class="col-lg-9 text-center">
                        <h1 class="heading" data-aos="fade-up">{{$Tittlee->Tittle}} </h1>
                        <p style="color:#fff ;"></p>
                    </div>
                @endforeach
            </div>
        </div>
</div>