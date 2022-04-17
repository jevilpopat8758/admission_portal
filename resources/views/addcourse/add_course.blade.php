@extends('layouts.main')

@section('content')
      
      <!-- Container fluid -->
      <div class="pb-6 pt-6">
            <div class="container-fluid">
                <div id="courseForm" class="bs-stepper">
                    <div class="row">
                        <div class="offset-lg-1 col-lg-10 col-md-12 col-12">
                            <!-- Stepper Button -->
                            <div class="bs-stepper-header shadow-sm" role="tablist">
                            <div class="step" data-target="#test-l-1">
                                <button type="button" class="step-trigger" role="tab" id="courseFormtrigger1" aria-controls="test-l-1">
                                <span class="bs-stepper-circle">1</span>
                                <span class="bs-stepper-label">Campus Selection and Program</span>
                                </button>
                            </div>
                            <div class="bs-stepper-line"></div>
                            <div class="step" data-target="#test-l-2">
                                <button type="button" class="step-trigger" role="tab" id="courseFormtrigger2" aria-controls="test-l-2">
                                <span class="bs-stepper-circle">2</span>
                                <span class="bs-stepper-label">Personal Details</span>
                                </button>
                            </div>
                            <div class="bs-stepper-line"></div>
                            <div class="step" data-target="#test-l-3">
                                <button type="button" class="step-trigger" role="tab" id="courseFormtrigger3" aria-controls="test-l-3">
                                <span class="bs-stepper-circle">3</span>
                                <span class="bs-stepper-label">Academic Details</span>
                                </button>
                            </div>
                            <div class="bs-stepper-line"></div>
                            <div class="step" data-target="#test-l-4">
                                <button type="button" class="step-trigger" role="tab" id="courseFormtrigger4" aria-controls="test-l-4">
                                <span class="bs-stepper-circle">4</span>
                                <span class="bs-stepper-label">Payment</span>
                                </button>
                            </div>
                            </div>
                            <!-- Stepper content -->
                            <div class="bs-stepper-content mt-5">
                            <form action="{{route('app.store')}}" method="POST" enctype="multipart/form-data" class="shadow rounded p-5">
                    @csrf
                                <!-- Content one -->
                                <div id="test-l-1" role="tabpanel" class="bs-stepper-pane fade" aria-labelledby="courseFormtrigger1">
                                <!-- Card -->
                                    <div class="card mb-3  border-0">
                                        <div class="card-header border-bottom px-4 py-3">
                                            <h4 class="mb-0"><strong class="text-danger"> Instruction </strong></h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="card">
                                                <div class="card-body">
                                                    <ul>
                                                        <li>
                                                            <span class="text-dark">
                                                                fields marked with <span class="text-danger">*</span> need to be completely filled.
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="text-dark">
                                                                An online application number will be displayed, once you successfully submit the online form by making an online payment.
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="text-dark">
                                                                This application form is common for all campuses.
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="text-dark">
                                                                Please keep scanned copies handy of your Coloured Photograph, Signature, 10th Marksheet & 12th Marksheet (If passed) for uploading . Upload size is limited to 2 MB only.
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="text-dark">
                                                                Allocation of Seat to a Course selected is subject to availability of seats.
                                                            </span>
                                                        </li>
                                                    </ul>
                                                    <div class="row mb-3">
                                                        <div class="col-lg-6">
                                                            <label class="form-label">Select Program</label>
                                                            <select class="selectpicker" name="applicationforprogram" data-width="100%">
                                                                <option value="">Select Program</option>
                                                                <option value="Agriculture">Agriculture</option>
                                                                <option value="Basic Science">Basic Science</option>
                                                                <option value="Business Management">Business Management</option>
                                                                <option value="Computer Application">Computer Application</option>
                                                                <option value="Engineering">Engineering</option>
                                                                <option value="Hotel Management">Hotel Management</option>
                                                                <option value="Law">Law</option>
                                                                <option value="Nursing">Nursing</option>
                                                                <option value="Paramedical Science">Paramedical Science</option>
                                                                <option value="Pharmacy">Pharmacy</option>
                                                                <option value="Physiotherapy">Physiotherapy</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label class="form-label">Select Specialization</label>
                                                            <select class="selectpicker" name="coursename" data-width="100%">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                <!-- Button -->
                                    <div class="row">
                                        <div class="col-lg-4 text-center">
                                            <button type="submit" class="btn btn-primary col-lg-6" onclick="courseForm.next()">
                                                Save & Exit
                                            </button>
                                        </div>
                                        <div class="col-lg-4 text-center">
                                            <button class="btn btn-primary col-lg-6" onclick="courseForm.next()">
                                                Next
                                            </button>
                                        </div>
                                    </div>
                                </div>
                              </form>
                                <div id="test-l-2" role="tabpanel" class="bs-stepper-pane fade" aria-labelledby="courseFormtrigger2">
                                <!-- Card -->
                                    <div class="card mb-3 ">
                                        <div class="card-header border-bottom px-4 py-3">
                                            <h4 class="mb-0"><strong class="text-danger"> Personal Details </strong></h4>
                                        </div>
                                        <form action="{{route('user.update',auth()->user())}}" method="POST" enctype="multipart/form-data" class="row">
                                       @csrf
                                      @method('PUT')
                                        <!-- Card body -->
                                        <div class="card-body">
                                            <div class="row mb-3">
                                                <div class="col-lg-4">
                                                    <label for="courseTitle" class="form-label">Name</label>
                                                    <input id="courseTitle" class="form-control" name="name" type="text" placeholder="Enter Name" value=""{{auth()->user()->email}}"" />
                                                </div>
                                                <div class="col-lg-4">
                                                    <label for="courseTitle" class="form-label">Email</label>
                                                    <input id="courseTitle" class="form-control" name="email" type="email"  placeholder="Enter Email" />
                                                </div>
                                                <div class="col-lg-4">
                                                    <label for="courseTitle" class="form-label">Mobile No.</label>
                                                    <input id="courseTitle" class="form-control" name="mobileno" type="text" placeholder="Enter Mobile No" />
                                                </div>
                                                <!-- <small>Write a 60 character course title.</small> -->
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-6">
                                                    <label for="courseTitle" class="form-label">Date of Birth</label>
                                                    <input id="courseTitle" class="form-control" name="dateofbirth" type="date"/>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="form-label">Gender</label>
                                                    <select class="selectpicker" name="gender" data-width="100%">
                                                        <option value="">Select Gender</option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                        <option value="Transgender">Transgender</option>
                                                    </select>
                                                </div>
                                                <!-- <div class="col-lg-4">
                                                    <label class="form-label">Marital Staus</label>
                                                    <select class="selectpicker" data-width="100%">
                                                        <option value="">Select Marital Status</option>
                                                        <option value="Married">Married</option>
                                                        <option value="Single">Single</option>
                                                    </select>
                                                </div> -->
                                            </div>
                                            <div class="row mb-3">
                                                <!-- <div class="col-lg-4">
                                                    <label class="form-label">Nationality</label>
                                                    <select class="selectpicker" data-width="100%">
                                                        <option value="">Select Nationality</option>
                                                        <option value="Indian">Indian</option>
                                                        <option value="NRI">NRI</option>
                                                        <option value="Foreign">Foreign</option>
                                                    </select>
                                                </div> -->
                                                <div class="col-lg-6">
                                                    <label for="courseTitle" class="form-label">Father Name</label>
                                                    <input id="courseTitle" class="form-control" type="text" name="fathername" placeholder="Enter Father Name" />
                                                </div>
                                                <div class="col-lg-6">
                                                    <label for="courseTitle" class="form-label">Father No.</label>
                                                    <input id="courseTitle" class="form-control" type="text" name="fathermobile" placeholder="Enter Father Mobile No." />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-header border-bottom px-4 py-3">
                                            <h4 class="mb-0"><strong class="text-danger"> Address for Correspondence </strong></h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="row mb-3">
                                                <div class="col-lg-6">
                                                    <label class="form-label">Country</label>
                                                    <select class="selectpicker" data-width="100%">
                                                        <option value="">Select Country</option>
                                                        <option value="Afganistan">Afghanistan</option>
                                                        <option value="Albania">Albania</option>
                                                        <option value="Algeria">Algeria</option>
                                                        <option value="American Samoa">American Samoa</option>
                                                        <option value="Andorra">Andorra</option>
                                                        <option value="Angola">Angola</option>
                                                        <option value="Anguilla">Anguilla</option>
                                                        <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                                        <option value="Argentina">Argentina</option>
                                                        <option value="Armenia">Armenia</option>
                                                        <option value="Aruba">Aruba</option>
                                                        <option value="Australia">Australia</option>
                                                        <option value="Austria">Austria</option>
                                                        <option value="Azerbaijan">Azerbaijan</option>
                                                        <option value="Bahamas">Bahamas</option>
                                                        <option value="Bahrain">Bahrain</option>
                                                        <option value="Bangladesh">Bangladesh</option>
                                                        <option value="Barbados">Barbados</option>
                                                        <option value="Belarus">Belarus</option>
                                                        <option value="Belgium">Belgium</option>
                                                        <option value="Belize">Belize</option>
                                                        <option value="Benin">Benin</option>
                                                        <option value="Bermuda">Bermuda</option>
                                                        <option value="Bhutan">Bhutan</option>
                                                        <option value="Bolivia">Bolivia</option>
                                                        <option value="Bonaire">Bonaire</option>
                                                        <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                                        <option value="Botswana">Botswana</option>
                                                        <option value="Brazil">Brazil</option>
                                                        <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                                        <option value="Brunei">Brunei</option>
                                                        <option value="Bulgaria">Bulgaria</option>
                                                        <option value="Burkina Faso">Burkina Faso</option>
                                                        <option value="Burundi">Burundi</option>
                                                        <option value="Cambodia">Cambodia</option>
                                                        <option value="Cameroon">Cameroon</option>
                                                        <option value="Canada">Canada</option>
                                                        <option value="Canary Islands">Canary Islands</option>
                                                        <option value="Cape Verde">Cape Verde</option>
                                                        <option value="Cayman Islands">Cayman Islands</option>
                                                        <option value="Central African Republic">Central African Republic</option>
                                                        <option value="Chad">Chad</option>
                                                        <option value="Channel Islands">Channel Islands</option>
                                                        <option value="Chile">Chile</option>
                                                        <option value="China">China</option>
                                                        <option value="Christmas Island">Christmas Island</option>
                                                        <option value="Cocos Island">Cocos Island</option>
                                                        <option value="Colombia">Colombia</option>
                                                        <option value="Comoros">Comoros</option>
                                                        <option value="Congo">Congo</option>
                                                        <option value="Cook Islands">Cook Islands</option>
                                                        <option value="Costa Rica">Costa Rica</option>
                                                        <option value="Cote DIvoire">Cote DIvoire</option>
                                                        <option value="Croatia">Croatia</option>
                                                        <option value="Cuba">Cuba</option>
                                                        <option value="Curaco">Curacao</option>
                                                        <option value="Cyprus">Cyprus</option>
                                                        <option value="Czech Republic">Czech Republic</option>
                                                        <option value="Denmark">Denmark</option>
                                                        <option value="Djibouti">Djibouti</option>
                                                        <option value="Dominica">Dominica</option>
                                                        <option value="Dominican Republic">Dominican Republic</option>
                                                        <option value="East Timor">East Timor</option>
                                                        <option value="Ecuador">Ecuador</option>
                                                        <option value="Egypt">Egypt</option>
                                                        <option value="El Salvador">El Salvador</option>
                                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                        <option value="Eritrea">Eritrea</option>
                                                        <option value="Estonia">Estonia</option>
                                                        <option value="Ethiopia">Ethiopia</option>
                                                        <option value="Falkland Islands">Falkland Islands</option>
                                                        <option value="Faroe Islands">Faroe Islands</option>
                                                        <option value="Fiji">Fiji</option>
                                                        <option value="Finland">Finland</option>
                                                        <option value="France">France</option>
                                                        <option value="French Guiana">French Guiana</option>
                                                        <option value="French Polynesia">French Polynesia</option>
                                                        <option value="French Southern Ter">French Southern Ter</option>
                                                        <option value="Gabon">Gabon</option>
                                                        <option value="Gambia">Gambia</option>
                                                        <option value="Georgia">Georgia</option>
                                                        <option value="Germany">Germany</option>
                                                        <option value="Ghana">Ghana</option>
                                                        <option value="Gibraltar">Gibraltar</option>
                                                        <option value="Great Britain">Great Britain</option>
                                                        <option value="Greece">Greece</option>
                                                        <option value="Greenland">Greenland</option>
                                                        <option value="Grenada">Grenada</option>
                                                        <option value="Guadeloupe">Guadeloupe</option>
                                                        <option value="Guam">Guam</option>
                                                        <option value="Guatemala">Guatemala</option>
                                                        <option value="Guinea">Guinea</option>
                                                        <option value="Guyana">Guyana</option>
                                                        <option value="Haiti">Haiti</option>
                                                        <option value="Hawaii">Hawaii</option>
                                                        <option value="Honduras">Honduras</option>
                                                        <option value="Hong Kong">Hong Kong</option>
                                                        <option value="Hungary">Hungary</option>
                                                        <option value="Iceland">Iceland</option>
                                                        <option value="Indonesia">Indonesia</option>
                                                        <option value="India">India</option>
                                                        <option value="Iran">Iran</option>
                                                        <option value="Iraq">Iraq</option>
                                                        <option value="Ireland">Ireland</option>
                                                        <option value="Isle of Man">Isle of Man</option>
                                                        <option value="Israel">Israel</option>
                                                        <option value="Italy">Italy</option>
                                                        <option value="Jamaica">Jamaica</option>
                                                        <option value="Japan">Japan</option>
                                                        <option value="Jordan">Jordan</option>
                                                        <option value="Kazakhstan">Kazakhstan</option>
                                                        <option value="Kenya">Kenya</option>
                                                        <option value="Kiribati">Kiribati</option>
                                                        <option value="Korea North">Korea North</option>
                                                        <option value="Korea Sout">Korea South</option>
                                                        <option value="Kuwait">Kuwait</option>
                                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                        <option value="Laos">Laos</option>
                                                        <option value="Latvia">Latvia</option>
                                                        <option value="Lebanon">Lebanon</option>
                                                        <option value="Lesotho">Lesotho</option>
                                                        <option value="Liberia">Liberia</option>
                                                        <option value="Libya">Libya</option>
                                                        <option value="Liechtenstein">Liechtenstein</option>
                                                        <option value="Lithuania">Lithuania</option>
                                                        <option value="Luxembourg">Luxembourg</option>
                                                        <option value="Macau">Macau</option>
                                                        <option value="Macedonia">Macedonia</option>
                                                        <option value="Madagascar">Madagascar</option>
                                                        <option value="Malaysia">Malaysia</option>
                                                        <option value="Malawi">Malawi</option>
                                                        <option value="Maldives">Maldives</option>
                                                        <option value="Mali">Mali</option>
                                                        <option value="Malta">Malta</option>
                                                        <option value="Marshall Islands">Marshall Islands</option>
                                                        <option value="Martinique">Martinique</option>
                                                        <option value="Mauritania">Mauritania</option>
                                                        <option value="Mauritius">Mauritius</option>
                                                        <option value="Mayotte">Mayotte</option>
                                                        <option value="Mexico">Mexico</option>
                                                        <option value="Midway Islands">Midway Islands</option>
                                                        <option value="Moldova">Moldova</option>
                                                        <option value="Monaco">Monaco</option>
                                                        <option value="Mongolia">Mongolia</option>
                                                        <option value="Montserrat">Montserrat</option>
                                                        <option value="Morocco">Morocco</option>
                                                        <option value="Mozambique">Mozambique</option>
                                                        <option value="Myanmar">Myanmar</option>
                                                        <option value="Nambia">Nambia</option>
                                                        <option value="Nauru">Nauru</option>
                                                        <option value="Nepal">Nepal</option>
                                                        <option value="Netherland Antilles">Netherland Antilles</option>
                                                        <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                                        <option value="Nevis">Nevis</option>
                                                        <option value="New Caledonia">New Caledonia</option>
                                                        <option value="New Zealand">New Zealand</option>
                                                        <option value="Nicaragua">Nicaragua</option>
                                                        <option value="Niger">Niger</option>
                                                        <option value="Nigeria">Nigeria</option>
                                                        <option value="Niue">Niue</option>
                                                        <option value="Norfolk Island">Norfolk Island</option>
                                                        <option value="Norway">Norway</option>
                                                        <option value="Oman">Oman</option>
                                                        <option value="Pakistan">Pakistan</option>
                                                        <option value="Palau Island">Palau Island</option>
                                                        <option value="Palestine">Palestine</option>
                                                        <option value="Panama">Panama</option>
                                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                                        <option value="Paraguay">Paraguay</option>
                                                        <option value="Peru">Peru</option>
                                                        <option value="Phillipines">Philippines</option>
                                                        <option value="Pitcairn Island">Pitcairn Island</option>
                                                        <option value="Poland">Poland</option>
                                                        <option value="Portugal">Portugal</option>
                                                        <option value="Puerto Rico">Puerto Rico</option>
                                                        <option value="Qatar">Qatar</option>
                                                        <option value="Republic of Montenegro">Republic of Montenegro</option>
                                                        <option value="Republic of Serbia">Republic of Serbia</option>
                                                        <option value="Reunion">Reunion</option>
                                                        <option value="Romania">Romania</option>
                                                        <option value="Russia">Russia</option>
                                                        <option value="Rwanda">Rwanda</option>
                                                        <option value="St Barthelemy">St Barthelemy</option>
                                                        <option value="St Eustatius">St Eustatius</option>
                                                        <option value="St Helena">St Helena</option>
                                                        <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                                        <option value="St Lucia">St Lucia</option>
                                                        <option value="St Maarten">St Maarten</option>
                                                        <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                                        <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                                        <option value="Saipan">Saipan</option>
                                                        <option value="Samoa">Samoa</option>
                                                        <option value="Samoa American">Samoa American</option>
                                                        <option value="San Marino">San Marino</option>
                                                        <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                                        <option value="Senegal">Senegal</option>
                                                        <option value="Seychelles">Seychelles</option>
                                                        <option value="Sierra Leone">Sierra Leone</option>
                                                        <option value="Singapore">Singapore</option>
                                                        <option value="Slovakia">Slovakia</option>
                                                        <option value="Slovenia">Slovenia</option>
                                                        <option value="Solomon Islands">Solomon Islands</option>
                                                        <option value="Somalia">Somalia</option>
                                                        <option value="South Africa">South Africa</option>
                                                        <option value="Spain">Spain</option>
                                                        <option value="Sri Lanka">Sri Lanka</option>
                                                        <option value="Sudan">Sudan</option>
                                                        <option value="Suriname">Suriname</option>
                                                        <option value="Swaziland">Swaziland</option>
                                                        <option value="Sweden">Sweden</option>
                                                        <option value="Switzerland">Switzerland</option>
                                                        <option value="Syria">Syria</option>
                                                        <option value="Tahiti">Tahiti</option>
                                                        <option value="Taiwan">Taiwan</option>
                                                        <option value="Tajikistan">Tajikistan</option>
                                                        <option value="Tanzania">Tanzania</option>
                                                        <option value="Thailand">Thailand</option>
                                                        <option value="Togo">Togo</option>
                                                        <option value="Tokelau">Tokelau</option>
                                                        <option value="Tonga">Tonga</option>
                                                        <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                                        <option value="Tunisia">Tunisia</option>
                                                        <option value="Turkey">Turkey</option>
                                                        <option value="Turkmenistan">Turkmenistan</option>
                                                        <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                                        <option value="Tuvalu">Tuvalu</option>
                                                        <option value="Uganda">Uganda</option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="Ukraine">Ukraine</option>
                                                        <option value="United Arab Erimates">United Arab Emirates</option>
                                                        <option value="United States of America">United States of America</option>
                                                        <option value="Uraguay">Uruguay</option>
                                                        <option value="Uzbekistan">Uzbekistan</option>
                                                        <option value="Vanuatu">Vanuatu</option>
                                                        <option value="Vatican City State">Vatican City State</option>
                                                        <option value="Venezuela">Venezuela</option>
                                                        <option value="Vietnam">Vietnam</option>
                                                        <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                                        <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                                        <option value="Wake Island">Wake Island</option>
                                                        <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                                        <option value="Yemen">Yemen</option>
                                                        <option value="Zaire">Zaire</option>
                                                        <option value="Zambia">Zambia</option>
                                                        <option value="Zimbabwe">Zimbabwe</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="form-label">Select State</label>
                                                    <select class="selectpicker" data-width="100%">
                                                        <option value="">Select State</option>
                                                            <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                            <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                                            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                            <option value="Assam">Assam</option>
                                                            <option value="Bihar">Bihar</option>
                                                            <option value="Chandigarh">Chandigarh</option>
                                                            <option value="Chhattisgarh">Chhattisgarh</option>
                                                            <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                                            <option value="Daman and Diu">Daman and Diu</option>
                                                            <option value="Delhi">Delhi</option>
                                                            <option value="Lakshadweep">Lakshadweep</option>
                                                            <option value="Puducherry">Puducherry</option>
                                                            <option value="Goa">Goa</option>
                                                            <option value="Gujarat">Gujarat</option>
                                                            <option value="Haryana">Haryana</option>
                                                            <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                            <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                                            <option value="Jharkhand">Jharkhand</option>
                                                            <option value="Karnataka">Karnataka</option>
                                                            <option value="Kerala">Kerala</option>
                                                            <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                            <option value="Maharashtra">Maharashtra</option>
                                                            <option value="Manipur">Manipur</option>
                                                            <option value="Meghalaya">Meghalaya</option>
                                                            <option value="Mizoram">Mizoram</option>
                                                            <option value="Nagaland">Nagaland</option>
                                                            <option value="Odisha">Odisha</option>
                                                            <option value="Punjab">Punjab</option>
                                                            <option value="Rajasthan">Rajasthan</option>
                                                            <option value="Sikkim">Sikkim</option>
                                                            <option value="Tamil Nadu">Tamil Nadu</option>
                                                            <option value="Telangana">Telangana</option>
                                                            <option value="Tripura">Tripura</option>
                                                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                            <option value="Uttarakhand">Uttarakhand</option>
                                                            <option value="West Bengal">West Bengal</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-4">
                                                    <label for="courseTitle" class="form-label">Address Line 1</label>
                                                    <input id="courseTitle" class="form-control" type="text" placeholder="Enter Address Line 1" />
                                                </div>
                                                <div class="col-lg-4">
                                                    <label for="courseTitle" class="form-label">Address Line 2</label>
                                                    <input id="courseTitle" class="form-control" type="text" placeholder="Enter Address Line 2" />
                                                </div>
                                                <div class="col-lg-4">
                                                    <label for="courseTitle" class="form-label">Pincode</label>
                                                    <input id="courseTitle" class="form-control" type="text" placeholder="Enter Pincode" />
                                                </div>
                                                <!-- <small>Write a 60 character course title.</small> -->
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-12">
                                                    <label for="courseTitle" class="form-label">Is Permanent Address same as the Correspondence address?</label>
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        Yes
                                                    </label>
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        No
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Button -->
                                    <div class="row">
                                        <div class="col-lg-4 text-center">
                                            <button class="btn btn-primary col-lg-3" onclick="courseForm.next()">
                                                Back
                                            </button>
                                        </div>
                                        <div class="col-lg-4 text-center">
                                            <button class="btn btn-primary col-lg-6" onclick="courseForm.next()">
                                                Save & Exit
                                            </button>
                                        </div>
                                        <div class="col-lg-4 text-center">
                                            <button class="btn btn-primary col-lg-3" onclick="courseForm.next()">
                                                Next
                                            </button>
                                        </div>
                                    </div>
                                </div>
                             </form>
                                <!-- Content two -->
                                <div id="test-l-3" role="tabpanel" class="bs-stepper-pane fade" aria-labelledby="courseFormtrigger3">
                                <!-- Card -->
                                    <div class="card mb-3  border-0">
                                        <div class="card-header border-bottom px-4 py-3">
                                            <h4 class="mb-0"><strong class="text-danger"> Academic Details </strong></h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="row mb-3">
                                                <div class="col-lg-4">
                                                    <label for="courseTitle" class="form-label">Leaving Certificate</label>
                                                    <input id="courseTitle" class="form-control" type="file" name="leavingcertificate"/>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label for="courseTitle" class="form-label">Adharcard</label>
                                                    <input id="courseTitle" class="form-control" type="file" name="adharcard"/>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label for="courseTitle" class="form-label">10th Marksheet</label>
                                                    <input id="courseTitle" class="form-control" type="file" name="marksheet10"/>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-4">
                                                    <label for="courseTitle" class="form-label">12th Marksheet</label>
                                                    <input id="courseTitle" class="form-control" type="file" name="marksheet12"/>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label for="courseTitle" class="form-label">Graduation Certificate</label>
                                                    <input id="courseTitle" class="form-control" type="file" name="marksheetgraduation"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 text-center">
                                            <button class="btn btn-primary col-lg-3" onclick="courseForm.next()">
                                                Back
                                            </button>
                                        </div>
                                        <div class="col-lg-4 text-center">
                                            <button class="btn btn-primary col-lg-6" onclick="courseForm.next()">
                                                Save & Exit
                                            </button>
                                        </div>
                                        <div class="col-lg-4 text-center">
                                            <button class="btn btn-primary col-lg-3" onclick="courseForm.next()">
                                                Next
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Content three -->
                                
                                <!-- Content four -->
                                <div id="test-l-4" role="tabpanel" class="bs-stepper-pane fade" aria-labelledby="courseFormtrigger4">
                                <!-- Card -->
                                <div class="card mb-3  border-0">
                                    <div class="card-header border-bottom px-4 py-3">
                                    <h4 class="mb-0">Requirements</h4>
                                    </div>
                                    <!-- Card body -->
                                    <div class="card-body">
                                    <input name='tags' value='jquery, bootstrap' autofocus>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 text-center">
                                        <button class="btn btn-primary col-lg-3" onclick="courseForm.next()">
                                            Back
                                        </button>
                                    </div>
                                    <div class="col-lg-4 text-center">
                                        <button class="btn btn-primary col-lg-6" onclick="courseForm.next()">
                                            Save & Exit
                                        </button>
                                    </div>
                                    <div class="col-lg-4 text-center">
                                        <button class="btn btn-primary col-lg-3" onclick="courseForm.next()">
                                            Next
                                        </button>
                                    </div>
                                </div>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
   @endif
      <!-- Scripts -->
      <!-- Libs JS -->
@endsection
     