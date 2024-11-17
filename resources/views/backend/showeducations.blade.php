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
                                        <td>{{$edu->start_date	}}</td>
                                        <td>{{ $edu->end_date ? $edu->end_date : 'Present' }}</td>
                                        
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button type="submit" class="btn btn-primary"><i
                                                        icon-name="clipboard-edit"></i></button>


                                                
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

@endsection


