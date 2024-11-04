@extends('backend.dashboard')
@section('main')
<h1>Gallery</h1>

<div class="container-fluid">

    <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
        
    </div>
    
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                
                <img src="{{ asset('storage/upload/1814766486135593.png') }}" class="img-fluid" alt="gallery-image">
                @foreach($images as $image)
                <div class="col-lg-3 col-md-3">
                    <div class="card gallery-container gallery-grid position-relative d-block overflow-hidden rounded">
                        <div class="card-body gallery-image p-0">
                            <a href="{{ Storage::url($image) }}" class="image-popup d-inline-block">
                                <img src="{{ Storage::url($image) }}" class="img-fluid" alt="gallery-image">
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>

</div>

@endsection


