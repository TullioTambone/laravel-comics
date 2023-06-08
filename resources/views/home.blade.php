@extends( 'layout.app' )

@section('titlePage')
    Laravel App | COMICS
@endsection

@section( 'content' )

<div class="container-fluid" id="jumbotron">
</div>
<div class="container-fluid" id="card-section">
    <div class="container card-section p-5">
        <span id="current-series">
            CURRENT SERIES
        </span>

        <div class="row">
            @foreach( $comicsArray as $elem )
            <div class="my-card col-12 col-md-2 col-lg-2">
                <img src="{{$elem['thumb']}}" alt="">
                <h6>{{$elem['series']}}</h6>
            </div>
            @endforeach
        </div>
        <span id="load-more">LOAD MORE</span>
    </div>
    <div class="container-fluid" id="buy">
        <div class="container p-4" id="buy-section">
            <div class="row text-white justify-content-center">
                <div class="col-2">
                    <img src="/images/buy-comics-digital-comics.png" style="width: 40px;" alt="">
                    DIGITAL COMICS
                </div>
                <div class="col-2">
                    <img src="/images/buy-comics-merchandise.png" alt="">
                    DC MERCHANDISE
                </div>
                <div class="col-2">
                    <img src="/images/buy-comics-subscriptions.png" alt="">
                    SUBSCRIPION
                </div>
                <div class="col-2">
                    <img src="/images/buy-comics-shop-locator.png" style="width: 40px;" alt="">
                    COMIC SHOP LOCATOR
                </div>
                <div class="col-2">
                    <img src="/images/buy-dc-power-visa.svg" alt="">
                    DC POWER VISA
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
