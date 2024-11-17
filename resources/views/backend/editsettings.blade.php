@extends('backend.dashboard')
@section('main')

<div class="container-fluid card-header">
    <div class="card-body">
        <form class="needs-validation" method="POST" action="{{route('updatesettings')}}" enctype="multipart/form-data" novalidate>
            @csrf
            <input type="hidden" name="id" value="{{$setting->id}}">
            <div class="row">
                <div class="col-lg-6">
                    <h5 class="mb-3"></h5>
                    <div class="mb-3">
                        <label for="floatingInput">Application Name</label>
                        <input type="text" value="{{$setting->agency_name}}" id="example-input-large" name="agency_name" class="form-control form-control-lg" placeholder="First Name" required="">
                    </div>
                    <div class="mb-3">
                        <label for="floatingInput">Phone</label>
                        <input type="text" value="{{$setting->phone}}" id="example-input-large" name="phone" class="form-control form-control-lg" placeholder="Email" required="">
                    </div>
                    <div class="mb-3">
                        <label for="floatingInput">Application Logo</label>
                        <input type="file" value="{{$setting->logo}}" name="logo" id="example-fileinput" accept="image/*"  class="form-control form-control-lg">
                    </div>
                    <div class="mb-3">
                        <img style="object-fit: cover;" src="/upload/{{$setting->logo}}" alt="image" class="img-fluid avatar-lg rounded">
                    </div>
                </div>

                <div class="col-lg-6">
                    <h5 class="mb-3"></h5>
                    <div class="mb-3">
                        <label for="floatingInput">Email</label>
                        <input type="text" value="{{$setting->email}}" id="example-input-large" name="email" class="form-control form-control-lg" placeholder="Last Name" required="">
                    </div>
                    <div class="mb-3">
                        <label for="floatingInput">Address</label>
                        <input type="text" value="{{$setting->address}}" id="example-input-large" name="address" class="form-control form-control-lg" placeholder="Phone" required="">
                    </div>

                    <h5 class="mb-3 mt-4">Description</h5>
                        <div class="form-floating">
                          <textarea data-toggle="maxlength" name="description" class="form-control" placeholder="This textarea has a limit of 225 chars."
                             id="floatingTextarea" style="height: 100px" maxlength="225" rows="3" required>{{$setting->description}}</textarea>
                        </div>
                </div>
            </div><br><br><br>
            <div class="mb-3">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="invalidCheck" required="">
                    <label class="form-check-label form-label" for="invalidCheck">Agree to terms and conditions</label>
                    <div class="invalid-feedback">
                        You must agree before submitting.
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Submit form</button>

            <!-- Display success or error message below the button -->
            @if (session('success'))
            <div class="alert alert-success alert-dismissible text-bg-success border-0 fade show mt-3" role="alert">
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                <strong>Success - </strong> {{ session('success') }}
            </div>
            @endif
            
            @if (session('error'))
            <div class="alert alert-danger alert-dismissible text-bg-danger border-0 fade show mt-3" role="alert">
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                <strong>Error - </strong>{{ session('error') }}
            </div>
            @endif
        </form>
    </div>
</div>

@endsection
