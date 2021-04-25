<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"style="margin-top:0px;">

    <div class="carousel-inner">
        @foreach($slider as $data)
        <div class="carousel-item">
            <img src="{{URL::to('images/slider', $data->image_name)}}" class="d-block w-100" alt="#">
        </div>
        @endforeach
            <div class="carousel-item">
                <img src="{{URL::to('images/slider', $data->image_name)}}" class="d-block w-100" alt="#">
            </div>


    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
