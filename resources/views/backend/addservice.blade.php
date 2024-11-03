@extends('backend.dashboard')
@section('main')



<div class="container-fluid card-header">
    <div class="card-body">
        <form class="needs-validation" method="POST" action="{{route('saveService')}}" novalidate>
            @csrf
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="serviceName">Service Name</label>
                        <input type="text" id="serviceName" name="title" class="form-control form-control-lg" placeholder="Service Name" required="">
                    </div>
                    <div class="mb-3">
                        <label for="serviceDuration">Duration</label>
                        <input type="text" id="serviceDuration" name="duration" class="form-control form-control-lg" placeholder="Duration (e.g., 1 hour, 1 day)" required="">
                    </div>
                    <div class="mb-3">
                        <label for="serviceDescription">Description</label>
                        <textarea class="form-control" id="serviceDescription" name="description" placeholder="Service Description" maxlength="225" rows="3" required=""></textarea>
                    </div>
                    
                </div>

                <div class="col-lg-6">
                    
                    <div class="mb-3">
                        <label for="servicePrice">Price</label>
                        <input type="number" id="servicePrice" name="price" class="form-control form-control-lg" placeholder="Price" required="">
                    </div>
                    
                    <div class="mb-3">
                        <label for="serviceImage">Service Image</label>
                        <input type="file" id="serviceImage" name="image" class="form-control form-control-lg" required="">
                    </div>
                </div>
            </div>

            <br><br><br>
            <div class="mb-3">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="serviceCheck" required="">
                    <label class="form-check-label form-label" for="serviceCheck">Confirm information is accurate</label>
                    <div class="invalid-feedback">
                        Please confirm before submitting.
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Submit Service</button>
        </form>
    </div>
</div>

@endsection