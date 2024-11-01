@extends('backend.dashboard')
@section('main')

  <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

                <!-- Start Content-->
                <div class="container-fluid">
                    <div class="card-body">
                        <form class="needs-validation" novalidate>
                        <div class="row">
                            <div class="col-lg-6">
                                <h5 class="mb-3"></h5>
                                <div class="mb-3">
                                    <label for="floatingInput">Institution Name</label>
                                    <input type="text" id="example-input-large" name="example-input-large"
                                        class="form-control form-control-lg" placeholder="Institution Name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="floatingInput">Field Of Study</label>
                                    <input type="text" id="example-input-large" name="example-input-large"
                                        class="form-control form-control-lg" placeholder="Field Of Study" required>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="floatingInput">End Date</label>
                                    <input type="date" class="form-control date form-control-lg" id="endDateEducation" data-single-date-picker="true" required >

                                        <li class="list-group-item">
                                            <input class="form-check-input me-1" type="checkbox" value="" id="is_current_education" onchange="toggleEndDateEducation()">
                                            <label class="form-check-label" for="secondCheckbox">Is Current</label>
                                        </li>

                                </div>

                                <h5 class="mb-3 mt-4">Description</h5>
                                <div class="form-floating">
                                    <textarea data-toggle="maxlength" class="form-control" placeholder="This textarea has a limit of 225 chars."
                                        id="floatingTextarea" style="height: 100px" maxlength="225" rows="3" required></textarea>
                                    <label for="floatingTextarea">Description</label>
                                </div>

                            </div>

                            <div class="col-lg-6">
                                <h5 class="mb-3"></h5>
                                <div class="mb-3">
                                    <label for="floatingInput">Degree</label>
                                    <input type="text" id="example-input-large" name="example-input-large"
                                        class="form-control form-control-lg" placeholder="Degree" required>
                                </div>


                                <div class="mb-3">
                                    <label for="">Start Date</label>
                                    <input class="form-control date form-control-lg" id="startDateEducation" type="date" name="date" data-single-date-picker="true" required="">
                                    
                                </div>


                            </div>
                        </div><br><br><br>
                        <div class="mb-3">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="invalidCheck"
                                    required>
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

                </div> <!-- container -->


        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

        <script>
        function toggleEndDateEducation() {
            let endDateInput = document.getElementById("endDateEducation");
            let checkbox = document.getElementById("is_current_education");

            if (checkbox.checked) {
                endDateInput.disabled = true;
                endDateInput.required = false; // Disable required attribute
            } else {
                endDateInput.disabled = false;
                endDateInput.required = true; // enable required attribute
            }
        }
    </script>

@endsection