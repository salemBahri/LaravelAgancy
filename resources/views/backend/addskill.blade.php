@extends('backend.dashboard')
@section('main')

<div class="container-fluid">
    <div class="card-body">
        <h1>Skills</h1>
        
            <form class="needs-validation" method="POST" action="{{route('saveSkill')}}" novalidate>
                @csrf
            <div class="row">
                <div class="col-lg-6">
                    <h5 class="mb-3"></h5>
                    <div class="mb-3">
                        <label for="floatingInput">skill name</label>
                        <input type="text" id="example-input-large" name="name" class="form-control form-control-lg" placeholder="skill name" required="">
                    </div>
                    <div class="mb-3">
                        <label for="floatingInput">years of experience </label>
                        <select class="form-select form-select-lg" name="years_of_experience" id="example-select" required>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>


                </div>

                          <div class="col-lg-6">
                                    <h5 class="mb-3">proficiency level</h5>
                                    <div class="mb-3">
                                        
                                        <select name="proficiency" id="proficiency" class="form-select form-select-lg" required>
                                            <option value="">Select Proficiency Level</option>
                                            <option value="beginner">Beginner</option>
                                            <option value="intermediate">Intermediate</option>
                                            <option value="advanced">Advanced</option>
                                            <option value="expert">Expert</option>
                                        </select>

                                    </div>

                           </div>
            </div>
            <div class="mb-3">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="invalidCheck" required="">
                    <label class="form-check-label form-label" for="invalidCheck">Agree to terms and conditions</label>
                    <div class="invalid-feedback">You must agree before submitting.</div>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Submit form</button>
        </form>

    </div>






</div>



@endsection