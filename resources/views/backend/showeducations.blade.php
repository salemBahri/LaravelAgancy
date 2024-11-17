@extends('backend.dashboard')
@section('main')

 <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->



        <div class="container-fluid card-header">
            <h2 class="mb-5">Educations</h2>
            <!-- Add Educations Button -->
            <div class="text-end mb-3">
                <a href="{{ route('addeducation') }}" class="btn btn-success btn-lg">Add Education</a>
            </div>
            
            <div class="card-body">
                <div id="basic-datatable_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                    <div class="row">
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="basic-datatable" class="table table-striped dt-responsive nowrap w-100 dataTable no-footer dtr-inline collapsed"
                                aria-describedby="basic-datatable_info" style="position: relative; width: 1538px;">
                                <thead>
                                    <tr>
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" style="width: 262.8px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Id</th>
                                        <th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" style="width: 387.8px;" aria-label="Position: activate to sort column ascending">Institution Name</th>
                                        <th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" style="width: 197.8px;" aria-label="Office: activate to sort column ascending">Degree</th>
                                        <th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" style="width: 197.8px;" aria-label="New Column: activate to sort column ascending">Field Of Study</th>
                                        <th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" style="width: 94.8px;" aria-label="Age: activate to sort column ascending">Start Date</th>
                                        <th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" style="width: 176.8px;" aria-label="Start date: activate to sort column ascending">End Date</th>
                                        <th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" style="width: 146.8px; display: none;" aria-label="Salary: activate to sort column ascending">Action</th>
                                    </tr>
                                </thead>
    
                                <tbody>
                                    <tr class="odd">
                                        @foreach ($edus as $kay => $edu)
                                        <td tabindex="0" class="sorting_1">{{$kay+1}}</td>
                                        <td>{{$edu->institution}}</td>
                                        <td>{{$edu->degree}}</td>
                                        <td>{{$edu->field_of_study}}</td>
                                        <td>{{$edu->start_date}}</td>
                                        <td>{{ $edu->end_date ? $edu->end_date : 'Present' }}</td>
                                        
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                
                                                    <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#centermodal-{{$edu->id}}">
                                                        <i icon-name="clipboard-edit"></i>
                                                    </button>

                                                    <button type="submit" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#fill-danger-modal-{{$edu->id}}">
                                                        <i icon-name="trash-2"></i>
                                                    </button>

                                        <!-- Danger Filled Modal -->
                                        <div id="fill-danger-modal-{{$edu->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="fill-danger-modalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content modal-filled bg-danger">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="fill-danger-modalLabel">Your Sure to delete !!</h4>
                                                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                        <a href="{{ route('deleteeducation',$edu->id) }}"><button type="button" class="btn btn-outline-light">Delete</button></a>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div>
                                        <!-- /.modal -->



                                        
                                        <!-- Center modal content -->
                                        <div class="modal fade" id="centermodal-{{$edu->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myCenterModalLabel">Center modal</h4>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                        <!-- ============================================================== -->
                                                        <!-- Start Page Content here -->
                                                        <!-- ============================================================== -->
                                                                <!-- Start Content-->
                                                                <div class="container-fluid card-header">
                                                                    <div class="card-body">
                                                                        <form class="needs-validation" method="POST" action="{{route('updateeducation',$edu->id)}}" novalidate>
                                                                            @csrf
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <h5 class="mb-3"></h5>
                                                                                <div class="mb-3">
                                                                                    <label for="floatingInput">Institution Name</label>
                                                                                    <input type="text" value="{{$edu->institution}}" id="example-input-large" name="institution"
                                                                                        class="form-control form-control-lg" placeholder="Institution Name" required>
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <label for="floatingInput">Field Of Study</label>
                                                                                    <input type="text" value="{{$edu->field_of_study}}" id="example-input-large" name="field_of_study"
                                                                                        class="form-control form-control-lg" placeholder="Field Of Study" required>
                                                                                </div>
                                                                                
                                                                                <div class="mb-3">
                                                                                    <label for="floatingInput">End Date</label>
                                                                                    <input type="date" value="{{$edu->end_date}}" name="end_date" class="form-control date form-control-lg" id="endDateEducation" data-single-date-picker="true" required >
                                                                                        <li class="list-group-item">
                                                                                            <input class="form-check-input me-1" type="checkbox" value="" id="is_current_education" onchange="toggleEndDateEducation()">
                                                                                            <label class="form-check-label" for="secondCheckbox">Is Current</label>
                                                                                        </li>

                                                                                </div>

                                                                                <h5 class="mb-3 mt-4">Description</h5>
                                                                                <div class="form-floating">
                                                                                    <textarea data-toggle="maxlength" name="description" class="form-control" placeholder="This textarea has a limit of 225 chars."
                                                                                        id="floatingTextarea" style="height: 100px" maxlength="225" rows="3" required>{{$edu->description}}</textarea>
                                                                                    <label for="floatingTextarea">Description</label>
                                                                                </div>

                                                                            </div>

                                                                            <div class="col-lg-6">
                                                                                <h5 class="mb-3"></h5>
                                                                                <div class="mb-3">
                                                                                    <label for="floatingInput">Degree</label>
                                                                                    <input type="text" value="{{$edu->degree}}" id="example-input-large" name="degree"
                                                                                        class="form-control form-control-lg" placeholder="Degree" required>
                                                                                </div>


                                                                                <div class="mb-3">
                                                                                    <label for="">Start Date</label>
                                                                                    <input class="form-control date form-control-lg" value="{{$edu->start_date}}" id="startDateEducation" type="date" name="start_date" data-single-date-picker="true" required="">
                                                                                    
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
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->



                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                
                            </table>
                        </div>
                    </div>
                    <div class="row">
                    </div>
                </div>
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


