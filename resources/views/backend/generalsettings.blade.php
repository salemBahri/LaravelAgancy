@extends('backend.dashboard')
@section('main')


<div class="container-fluid card-header">
    <div class="card-body">
        <form class="needs-validation" method="POST" action="{{route('savesettings')}}" novalidate>
            @csrf
            <div class="row">
                <div class="col-lg-6">
                    <h5 class="mb-3"></h5>
                    <div class="mb-3">
                        <label for="floatingInput">Application Name</label>
                        <input type="text" id="example-input-large" name="agency_name" class="form-control form-control-lg" placeholder="First Name" required="">
                    </div>
                    <div class="mb-3">
                        <label for="floatingInput">Phone</label>
                        <input type="text" id="example-input-large" name="phone" class="form-control form-control-lg" placeholder="Email" required="">
                    </div>
                    <div class="mb-3">
                        <label for="floatingInput">Application Logo</label>
                        <input type="file" name="logo" id="example-fileinput" class="form-control form-control-lg">
                    </div>

                   
                </div>

                <div class="col-lg-6">
                    <h5 class="mb-3"></h5>
                    <div class="mb-3">
                        <label for="floatingInput">Email</label>
                        <input type="text" id="example-input-large" name="email" class="form-control form-control-lg" placeholder="Last Name" required="">
                    </div>

                    <div class="mb-3">
                        <label for="floatingInput">Address</label>
                        <input type="text" id="example-input-large" name="address" class="form-control form-control-lg" placeholder="Phone" required="">
                    </div>

                    

                    <h5 class="mb-3 mt-4">Description</h5>
                        <div class="form-floating">
                          <textarea data-toggle="maxlength" name="description" class="form-control" placeholder="This textarea has a limit of 225 chars."
                             id="floatingTextarea" style="height: 100px" maxlength="225" rows="3" required></textarea>
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
        </form>

    </div>
</div>

@endsection