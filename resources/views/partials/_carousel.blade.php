<div class="container" id="carousel">
    <div class="row">
            <div id="carousel" style="width: 1194px" class="carousel slide" data-ride="carousel" data-interval="6000">
                <div class="carousel-inner col-sm w-100 mx-auto" role="listbox" id="img-saveurs">
                    <div class="carousel-item active">
<<<<<<< HEAD
                        <div class="row" >
=======
                        <div class="row" style="width: 1194px">
>>>>>>> 073d9a6395cfdb7a32d6e83e5432707bdc4e3ffd
                            @if (count($images) > 0)
                                @foreach($images as $image)
                                    <div class="col-md-2">
                                        <img class="img-fluid mx-auto d-block" src="images/{{ $image->image }}">
                                        <div class="card-body">
                                            <a class="btn btn-primary">Button</a>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                            <div class="col-md-2">
                                    <img class="img-fluid mx-auto d-block" src="images/7zussen.jpg">
                                    <div class="card-body">
                                            <a class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <img class="img-fluid mx-auto d-block" src="images/aardbevingen.jpg" >
                                    <div class="card-body">
                                            <a class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <img class="img-fluid mx-auto d-block" src="images/geluk.jpg" >
                                    <div class="card-body">
                                            <a class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <img class="img-fluid mx-auto d-block" src="images/heterdaad.jpg" >
                                    <div class="card-body">
                                            <a class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <img class="img-fluid mx-auto d-block" src="images/reuzenperzik.jpg" >
                                    <div class="card-body">
                                            <a class="btn btn-primary">Button</a>
                                    </div>
<<<<<<< HEAD
                                </div>
=======
                                </div>                                
>>>>>>> 073d9a6395cfdb7a32d6e83e5432707bdc4e3ffd
                            @endif
                            </div>
                        </div>

<<<<<<< HEAD


                        <div class="carousel-item">
                            <div class="row" style="width: 1194px !important;">

=======
                    

                        <div class="carousel-item">
                            <div class="row" style="width: 1194px !important;">
                                
>>>>>>> 073d9a6395cfdb7a32d6e83e5432707bdc4e3ffd
                            @if (count($images2) > 0)
                                @foreach($images2 as $image2)
                                    <div class="col-md-2">
                                        <img class="img-fluid mx-auto d-block" src="images/{{ $image->image }}">
                                        <div class="card-body">
                                            <a class="btn btn-primary">Button</a>
                                        </div>
                                    </div>
                                @endforeach
                            @else
<<<<<<< HEAD

=======
                                
>>>>>>> 073d9a6395cfdb7a32d6e83e5432707bdc4e3ffd
                                <div class="col-md-2">
                                    <img class="img-fluid mx-auto d-block" src="images/obama.jpg" >
                                    <div class="card-body">
                                            <a class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <img class="img-fluid mx-auto d-block" src="images/gorgels.jpg" >
                                    <div class="card-body">
                                            <a class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <img class="img-fluid mx-auto d-block" src="images/taal.jpg"  >
                                    <div class="card-body">
                                            <a class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <img class="img-fluid mx-auto d-block" src="images/building.jpg" >
                                    <div class="card-body">
                                            <a class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <img class="img-fluid mx-auto d-block" src="images/nieuwe.jpg" >
                                    <div class="card-body">
                                            <a class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
