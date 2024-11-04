@extends('backend.dashboard')
@section('main')


<div class="container-fluid card-header">
    <div class="card-body">
        <form class="needs-validation" method="POST" enctype="multipart/form-data" action="{{route('saveimage')}}" novalidate>
            @csrf
            <div class="mb-3">
                <label for="awardFile">Hi image</label>
                <input type="file" id="awardFile" name="img" class="form-control form-control-lg mt-5">
            </div>
            <button
                type="submit"
                class="btn btn-primary"
            >
                Submit
            </button>
            
            
        </form>

    </div>
</div>


@endsection