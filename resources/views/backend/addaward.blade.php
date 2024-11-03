@extends('backend.dashboard')
@section('main')


<div class="container-fluid card-header">
    <div class="card-body">
        <form class="needs-validation" method="POST" action="{{route('saveAward')}}" novalidate>
            @csrf
            <div class="row">
                <div class="col-lg-6">
                    <h5 class="mb-3">Award Details</h5>
                    <div class="mb-3">
                        <label for="awardTitle">Award Title</label>
                        <input type="text" id="awardTitle" name="title" class="form-control form-control-lg" placeholder="Award Title" required="">
                    </div>

                    <div class="mb-3">
                        <label for="awardOrganization">Organization</label>
                        <input type="text" id="awardOrganization" name="organization" class="form-control form-control-lg" placeholder="Organization" required="">
                    </div>

                    <div class="mb-3">
                        <label for="awardDescription">Description</label>
                        <textarea class="form-control" id="description" name="awardDescription" placeholder="Description of the award" maxlength="225" rows="3" required=""></textarea>
                    </div>
                    

                </div>

                <div class="col-lg-6">
                    
                    <div class="mb-3">
                        <label for="awardDate">Date Received</label>
                        <input type="date" id="awardDate" name="date_received" class="form-control form-control-lg" required="">
                    </div>
                    <div class="mb-3">
                        <label for="awardFile">Certificate or Award Image</label>
                        <input type="file" id="awardFile" name="image" class="form-control form-control-lg">
                    </div>
                </div>
            </div>

            <br><br><br>
            <div class="mb-3">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="awardCheck" required="">
                    <label class="form-check-label form-label" for="awardCheck">Confirm the information is accurate</label>
                    <div class="invalid-feedback">
                        Please confirm before submitting.
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Submit Award</button>
        </form>
    </div>
</div>

@endsection