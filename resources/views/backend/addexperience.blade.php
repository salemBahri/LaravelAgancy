@extends('backend.dashboard')
@section('main')


<div class="container-fluid card-header" data-select2-id="select2-data-8-k7ak">
    <div class="card-body" data-select2-id="select2-data-7-zpm5">
        
        <form class="needs-validation" method="POST" action="{{route('saveExperience')}}" novalidate>
            @csrf
            <div class="row" data-select2-id="select2-data-5-3frx">
                <div class="col-lg-6">
                    <h5 class="mb-3"></h5>
                    <div class="mb-3">
                        <label for="floatingInput">Job Title</label>
                        <input type="text" id="example-input-large" name="job_title" class="form-control form-control-lg" placeholder="job_title" required="">
                    </div>
                    <div class="mb-3">
                        <label for="floatingInput">Location </label>
                        <input type="text" id="example-input-large" name="location" class="form-control form-control-lg" placeholder="location" required="">
                    </div>


                    <div class="mb-3">
                        <label for="floatingInput">Start Date</label>
                        <input class="form-control date form-control-lg" id="endDateEducation" type="date" name="start_date" data-single-date-picker="true" required="">
                    </div>


                    <h5 class="mb-3 mt-4">Description</h5>
                    <div class="form-floating">
                        <textarea data-toggle="maxlength" class="form-control" name="description" placeholder="This textarea has a limit of 225 chars." id="floatingTextarea" style="height: 100px" maxlength="225" rows="3" required=""></textarea>
                        <label for="floatingTextarea">Description</label>
                    </div>



                </div>

                <div class="col-lg-6" data-select2-id="select2-data-4-io7n">
                    <h5 class="mb-3"></h5>
                    <div class="mb-3">
                        <label for="floatingInput">Company Name</label>
                        <input type="text" id="example-input-large" name="company_name" class="form-control form-control-lg" placeholder="company_name" required="">
                    </div>
                    <h5 class="mb-3"></h5>
                    <div class="mb-3">
                        <label for="floatingInput">Technologies Used</label>


                        <select class="select2 form-control form-control-lg select2-multiple select2-hidden-accessible" name="technologies_used[]" data-toggle="select2" multiple="" data-placeholder="Choose ..." data-select2-id="select2-data-1-seol" tabindex="-1" aria-hidden="true" >
                            <optgroup label="JavaScript" data-select2-id="select2-data-13-q1xe">
                                <option value="Vanilla JS" data-select2-id="select2-data-14-6pxo">Vanilla JS</option>
                                <option value="React" data-select2-id="select2-data-15-v2q2">React</option>
                                <option value="Vue.js" data-select2-id="select2-data-16-5l0u">Vue.js</option>
                                <option value="Angular" data-select2-id="select2-data-17-yuc2">Angular</option>
                                <option value="Node.js" data-select2-id="select2-data-18-yz5v">Node.js</option>
                            </optgroup>

                            <optgroup label="Python" data-select2-id="select2-data-19-rmjb">
                                <option value="Native" data-select2-id="select2-data-20-gg1e">Native</option>
                                <option value="Django" data-select2-id="select2-data-21-hs8x">Django</option>
                                <option value="Flask" data-select2-id="select2-data-22-w6mo">Flask</option>
                                <option value="FastAPI" data-select2-id="select2-data-23-bz2w">FastAPI</option>
                            </optgroup>

                            <optgroup label="Java" data-select2-id="select2-data-24-nhxa">
                                <option value="Native" data-select2-id="select2-data-25-cbwk">Native</option>
                                <option value="Spring" data-select2-id="select2-data-26-bely">Spring</option>
                                <option value="Hibernate" data-select2-id="select2-data-27-e6w5">Hibernate</option>
                            </optgroup>

                            <optgroup label="Ruby" data-select2-id="select2-data-28-m1g8">
                                <option value="Native" data-select2-id="select2-data-29-1ds9">Native</option>
                                <option value="Ruby on Rails" data-select2-id="select2-data-30-l74m">Ruby on Rails</option>
                                <option value="Sinatra" data-select2-id="select2-data-31-qt9x">Sinatra</option>
                            </optgroup>

                            <optgroup label="C#" data-select2-id="select2-data-32-bzsg">
                                <option value="Native" data-select2-id="select2-data-33-0woa">Native</option>
                                <option value=".NET" data-select2-id="select2-data-34-jkco">.NET</option>
                                <option value="ASP.NET" data-select2-id="select2-data-35-mmq6">ASP.NET</option>
                            </optgroup>

                            <optgroup label="C++" data-select2-id="select2-data-36-62w9">
                                <option value="Native" data-select2-id="select2-data-37-rsg2">Native</option>
                                <option value="Qt" data-select2-id="select2-data-38-qrw4">Qt</option>
                                <option value="Boost" data-select2-id="select2-data-39-5a6h">Boost</option>
                            </optgroup>

                            <optgroup label="Go" data-select2-id="select2-data-40-ekwv">
                                <option value="Native" data-select2-id="select2-data-41-yfny">Native</option>
                                <option value="Gin" data-select2-id="select2-data-42-it3l">Gin</option>
                                <option value="Beego" data-select2-id="select2-data-43-i6z2">Beego</option>
                                <option value="Echo" data-select2-id="select2-data-44-lpof">Echo</option>
                            </optgroup>

                            <optgroup label="Swift" data-select2-id="select2-data-45-292y">
                                <option value="Native" data-select2-id="select2-data-46-6mkn">Native</option>
                                <option value="SwiftUI" data-select2-id="select2-data-47-jg6s">SwiftUI</option>
                                <option value="UIKit" data-select2-id="select2-data-48-calf">UIKit</option>
                                <option value="Vapor" data-select2-id="select2-data-49-kr34">Vapor</option>
                            </optgroup>

                            <optgroup label="Kotlin" data-select2-id="select2-data-50-u32r">
                                <option value="Native" data-select2-id="select2-data-51-lwjc">Native</option>
                                <option value="Ktor" data-select2-id="select2-data-52-xyt0">Ktor</option>
                                <option value="Spring Boot" data-select2-id="select2-data-53-vd7h">Spring Boot</option>
                                <option value="Jetpack Compose" data-select2-id="select2-data-54-0zjz">Jetpack Compose</option>
                            </optgroup>

                            <optgroup label="Rust" data-select2-id="select2-data-55-wf0s">
                                <option value="Native" data-select2-id="select2-data-56-wame">Native</option>
                                <option value="Rocket" data-select2-id="select2-data-57-ahqg">Rocket</option>
                                <option value="Actix" data-select2-id="select2-data-58-5our">Actix</option>
                                <option value="Tide" data-select2-id="select2-data-59-qro5">Tide</option>
                            </optgroup>

                            <optgroup label="TypeScript" data-select2-id="select2-data-60-acjo">
                                <option value="Native" data-select2-id="select2-data-61-cyrg">Native</option>
                                <option value="NestJS" data-select2-id="select2-data-62-qfnk">NestJS</option>
                                <option value="Next.js" data-select2-id="select2-data-63-e00y">Next.js</option>
                                <option value="Remix" data-select2-id="select2-data-64-7ynh">Remix</option>
                            </optgroup>

                            <optgroup label="R" data-select2-id="select2-data-65-9sny">
                                <option value="Native" data-select2-id="select2-data-66-5xm1">Native</option>
                                <option value="Shiny" data-select2-id="select2-data-67-ybar">Shiny</option>
                                <option value="Plumber" data-select2-id="select2-data-68-wcbk">Plumber</option>
                            </optgroup>

                            <optgroup label="Scala" data-select2-id="select2-data-69-9sry">
                                <option value="Native" data-select2-id="select2-data-70-ktmz">Native</option>
                                <option value="Play" data-select2-id="select2-data-71-sekh">Play</option>
                                <option value="Akka" data-select2-id="select2-data-72-1jlv">Akka</option>
                                <option value="Lift" data-select2-id="select2-data-73-5i9l">Lift</option>
                            </optgroup>

                            <optgroup label="Perl" data-select2-id="select2-data-74-40rh">
                                <option value="Native" data-select2-id="select2-data-75-a139">Native</option>
                                <option value="Mojolicious" data-select2-id="select2-data-76-naid">Mojolicious</option>
                                <option value="Dancer" data-select2-id="select2-data-77-tcdv">Dancer</option>
                                <option value="Catalyst" data-select2-id="select2-data-78-exgr">Catalyst</option>
                            </optgroup>

                            <optgroup label="Haskell" data-select2-id="select2-data-79-doqc">
                                <option value="Native" data-select2-id="select2-data-80-eylr">Native</option>
                                <option value="Yesod" data-select2-id="select2-data-81-cbko">Yesod</option>
                                <option value="Scotty" data-select2-id="select2-data-82-olw2">Scotty</option>
                                <option value="Snap" data-select2-id="select2-data-83-rau0">Snap</option>
                            </optgroup>

                            <optgroup label="Elixir" data-select2-id="select2-data-84-2r9r">
                                <option value="Native" data-select2-id="select2-data-85-3xet">Native</option>
                                <option value="Phoenix" data-select2-id="select2-data-86-70ho">Phoenix</option>
                            </optgroup>
                            <optgroup label="PHP" data-select2-id="select2-data-87-09nu">
                                <option value="Native" data-select2-id="select2-data-88-cbid">Native</option>
                                <option value="Laravel" data-select2-id="select2-data-89-pq8z">Laravel</option>
                                <option value="Symfony" data-select2-id="select2-data-90-kqzk">Symfony</option>
                                <option value="CodeIgniter" data-select2-id="select2-data-91-tkrd">CodeIgniter</option>
                                <option value="Zend Framework" data-select2-id="select2-data-92-v1vu">Zend Framework</option>
                                <option value="CakePHP" data-select2-id="select2-data-93-iska">CakePHP</option>
                                <option value="Phalcon" data-select2-id="select2-data-94-o1p9">Phalcon</option>
                                <option value="Yii" data-select2-id="select2-data-95-wzwh">Yii</option>
                                <option value="Slim" data-select2-id="select2-data-96-v1rb">Slim</option>
                                <option value="FuelPHP" data-select2-id="select2-data-97-y1oq">FuelPHP</option>
                            </optgroup>
                            <optgroup label="HTML" data-select2-id="select2-data-98-zg8j">
                                <option value="HTML5" data-select2-id="select2-data-99-rk59">HTML5</option>
                                <option value="XHTML" data-select2-id="select2-data-100-myt7">XHTML</option>
                                <option value="HTML4" data-select2-id="select2-data-101-a18r">HTML4</option>
                            </optgroup>

                            <optgroup label="CSS" data-select2-id="select2-data-102-1jvl">
                                <option value="CSS3" data-select2-id="select2-data-103-lylj">CSS3</option>
                                <option value="SCSS" data-select2-id="select2-data-104-azp8">SCSS</option>
                                <option value="SASS" data-select2-id="select2-data-105-c10u">SASS</option>
                                <option value="LESS" data-select2-id="select2-data-106-397s">LESS</option>
                                <option value="Bootstrap" data-select2-id="select2-data-107-n6dl">Bootstrap</option>
                                <option value="Tailwind" data-select2-id="select2-data-108-da5k">Tailwind</option>
                            </optgroup>
                        </select>

                    </div>
                    <div class="mb-3">
                        <label for="floatingInput">End Date</label>
                        <input class="form-control date form-control-lg" id="endDateExperience" type="date" name="end_date" data-single-date-picker="true" required="">

                        <li class="list-group-item">
                            <input class="form-check-input me-1" type="checkbox" value="" id="is_current_experience" onchange="toggleEndDateExperience()">
                            <label class="form-check-label" for="secondCheckbox">Is Current</label>
                        </li>
                    </div>

                </div>
            </div><br><br><br>
            <div class="mb-3">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="invalidCheck" required="">
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

<script>

    function toggleEndDateExperience() {
        let endDateInput = document.getElementById("endDateExperience");
        let checkbox = document.getElementById("is_current_experience");

        if (checkbox.checked) {
            endDateInput.disabled = true;
        } else {
            endDateInput.disabled = false;
        }
    }



</script>

@endsection