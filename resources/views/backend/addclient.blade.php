@extends('backend.dashboard')
@section('main')


<div class="container-fluid card-header">
    <div class="card-body">
        <form class="needs-validation" method="POST" action="{{route('saveClient')}}"  enctype="multipart/form-data" novalidate>
            @csrf
            <div class="row">
                <div class="col-lg-6">
                    <h5 class="mb-3"></h5>
                    <div class="mb-3">
                        <label for="floatingInput">Fullname</label>
                        <input type="text" id="example-input-large" name="fullname" class="form-control form-control-lg" placeholder="Fullname" >
                    </div>
                    <div class="mb-3">
                        <label for="floatingInput">Phone</label>
                        <input type="text" id="example-input-large" name="phone" class="form-control form-control-lg" placeholder="Phone" >
                    </div>
                    <div class="mb-3">
                        <label for="floatingInput">Company Website</label>
                        <input type="text" id="example-input-large" name="company_website" class="form-control form-control-lg" placeholder="Company Website" >
                    </div>

                   
                </div>

                <div class="col-lg-6">
                    <h5 class="mb-3"></h5>
                    <div class="mb-3">
                        <label for="floatingInput">Email</label>
                        <input type="text" id="example-input-large" name="email" class="form-control form-control-lg" placeholder="Email" >
                        <!-- Error message -->
                            @error('email')
                                <p class="btn btn-danger btn-sm" data-bs-toggle="popover" 
                                data-bs-content="e.g : abc@abc.com" 
                                data-bs-original-title="A valid email must be entered">Email Not Valid</p>
                            @enderror
                    </div>

                    <div class="mb-3">
                        <label for="floatingInput">Company Name</label>
                        <input type="text" id="example-input-large" name="company" class="form-control form-control-lg" placeholder="Company Name" >
                    </div>

                    

                    <div class="mb-3">
                        <label for="floatingInput">Company Logo</label>
                        <input type="file" name="image" id="example-fileinput" accept="image/*" class="form-control form-control-lg">
                    </div>

                </div>
            </div><br><br><br>
            <div class="mb-3">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="invalidCheck" >
                    <label class="form-check-label form-label" for="invalidCheck">Agree to
                        terms
                        and conditions</label>
                    <div class="invalid-feedback">
                        You must agree before submitting.
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Submit form</button>
        </form>

    </div>
</div>


@endsection