@extends('backend.dashboard')
@section('main')

    
              

                                            <div class="content">

                                                <!-- Start Content-->
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <h2 class="mb-1">Clients</h2>
                                                            <!-- Add Client Button -->
                                                            <div class="text-end mb-3">
                                                                <a href="{{ route('addclient') }}" class="btn btn-success btn-lg"><i class="mdi mdi-plus me-1"></i> Add Client</a>
                                                                
                                                            </div>

                                                        @foreach ($clients as $kay => $client)

                                                        <div class="col-xl-4 col-lg-4 col-md-6">
                                                            <div class="card">
                                                                <div class="position-relative img-overlay">
                                                                    <img src="{{asset('backend/assets/images/small/small-1.jpg')}}" alt="" height="150" width="100%"
                                                                        class="object-fit-cover">
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="text-center">
                                                                        <div class="mx-auto position-absolute z-3 start-50  translate-middle border border-5 border-white"
                                                                            style="top: 40%;">
                                                                            <img src="{{asset('backend/assets/images/users/avatar-1.jpg')}}" alt=""
                                                                                class="avatar-md img-fluid ">
                                                                        </div>
                                
                                                                        <div class="pt-4">
                                                                            <h2 class="mb-1">{{$client->fullname}}</h2>
                                                                            <h4 class="mb-2">{{$client->company}}</h4>
                                                                        </div>
                                
                                                                        <div class="d-flex gap-2 justify-content-center mb-2">
                                                                            <a href="javascript: void(0);" class="fs-22 text-primary"><i
                                                                                    class="mdi mdi-facebook"></i></a>
                                                                            <a href="javascript: void(0);" class="fs-22 text-pink"><i
                                                                                    class="mdi mdi-microsoft-xbox"></i></a>
                                                                            <a href="javascript: void(0);" class="fs-22 text-danger"><i
                                                                                    class="mdi mdi-linkedin"></i></a>
                                                                            <a href="javascript: void(0);" class="fs-22 text-info"><i
                                                                                    class="mdi mdi-twitter"></i></a>
                                                                        </div>
                                
                                                                        <ul
                                                                            class="d-flex justify-content-around list-unstyled border-top border-dark-subtle pt-2 text-center mb-0">
                                                                            <li>
                                                                                <p class="text-muted fw-semibold mb-1">Email</p>
                                                                                <h5><a href="mailto:{{$client->email}}">{{$client->email}}</a></h5>
                                                                            </li>
                                                                            <li>
                                                                                <p class="text-muted fw-semibold mb-1">Phone</p>
                                                                                <h5>{{$client->phone}}</h5>
                                                                            </li>
                                                                            <li>
                                                                                <p class="text-muted fw-semibold mb-1">Company Name</p>
                                                                                <h5><a href="{{$client->company_website}}" target="_blank">website
                                                                                    <svg aria-hidden="true" fill="none" focusable="false" height="16" viewBox="0 0 16 16" width="16" id="cds-react-aria-54" class="css-19e2cig"><path fill-rule="evenodd" clip-rule="evenodd" d="M12.742 2.68l-1.395-1.316.686-.728L14.73 3.18l-2.696 2.544-.686-.728 1.395-1.316h-.992c-1.426 0-2.397.347-3.018.981-.622.636-.982 1.653-.982 3.189V9h-1V7.85c0-1.674.39-2.992 1.268-3.889.88-.898 2.158-1.281 3.732-1.281h.992zM1.5 4.5H6v1H2.5v8h8V10h1v4.5h-10v-10z" fill="currentColor"></path></svg>
                                                                                </a></h5>
                                                                            </li>
                                                                        </ul>
                                
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        @endforeach





                                                    </div>
                                                </div> <!-- container -->
                                
                                            </div> <!-- content -->





                           
@endsection


