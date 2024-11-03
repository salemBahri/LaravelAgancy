@extends('backend.dashboard')
@section('main')

 <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->



        <div class="container-fluid card-header">
            <h2 class="mb-5">Awards</h2>
            <!-- Add Skill Button -->
            <div class="text-end mb-3">
                <a href="{{ route('addaward') }}" class="btn btn-success btn-lg"><i class="mdi mdi-plus me-1"></i> Add Award</a>
                
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
                                        <th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" style="width: 387.8px;" aria-label="Position: activate to sort column ascending">Award Title</th>
                                        <th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" style="width: 197.8px;" aria-label="New Column: activate to sort column ascending">Organization</th>
                                        <th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" style="width: 176.8px;" aria-label="Start date: activate to sort column ascending">Date Received</th>
                                        <th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" style="width: 176.8px;" aria-label="Start date: activate to sort column ascending">created_at	</th>
                                        <th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" style="width: 176.8px;" aria-label="Start date: activate to sort column ascending">updated_at	</th>
                                        <th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" style="width: 146.8px; display: none;" aria-label="Salary: activate to sort column ascending">Action</th>
                                    </tr>
                                </thead>
    
                                <tbody>
                                    <tr class="odd">
                                        @foreach ($awds as $kay => $awd)
                                        <td tabindex="0" class="sorting_1">{{$kay+1}}</td>
                                        <td>{{$awd->title}}</td>
                                        <td>{{$awd->organization}}</td>
                                        <td>{{\Carbon\Carbon::parse($awd->date_received)->format('Y')}}</td>
                                        <td>{{($awd->created_at)->format('d/m/Y')}}</td>
                                        <td>{{($awd->updated_at)->format('d/m/Y')}}</td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-primary"><i
                                                        icon-name="clipboard-edit"></i></button>
                                                <button type="button" class="btn btn-danger"><i
                                                        icon-name="trash-2"></i></button>
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


