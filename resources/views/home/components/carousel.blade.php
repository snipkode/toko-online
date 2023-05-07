<style>
    /* Menentukan tinggi carousel */
    .carousel {
        height: 450px;
        /* border-radius: 15px; */
    }

    /* Menentukan tinggi gambar di dalam carousel */
    .carousel-item img {
        height: 450px;
        object-fit: cover;
        /* border-radius: 15px; */
    }
</style>
<!-- Bootstrap carousel -->
<div class="col-md mb-3">
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselExample" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselExample" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{ URL::asset('/sneat/assets/img/elements/13.jpg') }}"
                    alt="First slide" />
                <div class="carousel-caption d-none d-md-block">
                    <h3>First slide</h3>
                    <p>Eos mutat malis maluisset et, agam ancillae quo te, in vim congue pertinacia.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ URL::asset('/sneat/assets/img/elements/2.jpg') }}"
                    alt="Second slide" />
                <div class="carousel-caption d-none d-md-block">
                    <h3>Second slide</h3>
                    <p>In numquam omittam sea.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ URL::asset('/sneat/assets/img/elements/18.jpg') }}"
                    alt="Third slide" />
                <div class="carousel-caption d-none d-md-block">
                    <h3>Third slide</h3>
                    <p>Lorem ipsum dolor sit amet, virtute consequat ea qui, minim graeco mel no.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="{{ url('#carouselExample') }}" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="{{ url('#carouselExample') }}" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>
</div>
<!-- Bootstrap crossfade carousel -->
