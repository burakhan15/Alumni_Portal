@extends('frontEnd.app')

@section('content')


<div class="container" style="padding-bottom: 30px;">
 <div class="sub-headline" style="padding-bottom: 10px;">
  <h2>Register</h2>
</div>
<div class="row justify-content-md-center">
  <div class="col-lg-5">
   <form action="{{url('registerControl')}}" method="POST" id="form">
     @csrf
     <div class="register-area">
         <small>Name</small>
         
         @if(isset($Rdata))
         <input type="text" name="name" class="form-control" placeholder="*Name..." value="{{$Rdata[0]->name}}" readonly="readonly" style="background-color: #ccc">
         <small>Surname</small>
         <input type="text" name="sur_name" class="form-control" placeholder="*Surname..." value="{{$Rdata[0]->sur_name}}" readonly="readonly" style="background-color: #ccc">
         @else
         <input type="text" name="name" class="form-control" placeholder="*Name..." value="{{old('name')}}" readonly="readonly" style="background-color: #ccc">
         <small>Surname</small>
         <input type="text" name="sur_name" class="form-control" placeholder="*Surname..." value="{{old('sur_name')}}" readonly="readonly" style="background-color: #ccc">
         @endif
         <small>Email</small>
         <input type="text" name="email" id="email"class="form-control" placeholder="*example@mail.com" value="{{old('email')}}">
         <small>Birth Date</small>
         @if(isset($Rdata))
         <input style="background-color: #ccc" type="date" name="birth_date" class="form-control"  value="{{$Rdata[0]->birth_date}}" readonly="readonly">
         <small>School start date:</small>
         <input style="background-color: #ccc" type="date" name="start_date" class="form-control" value="{{$Rdata[0]->start_date}}" readonly="readonly">
         <small>Graduated date:</small>
         <input style="background-color: #ccc" type="date" name="graduated_date" class="form-control"  value="{{$Rdata[0]->graduation}}" readonly="readonly">
         <small>Department</small>
         <input style="background-color: #ccc" type="text" name="department" class="form-control" placeholder="Ex: Computer Engineering..." value="{{$Rdata[0]->department}}" readonly="readonly">
         @else
         <input style="background-color: #ccc" type="date" name="birth_date" class="form-control" value="{{old('birth_date')}}" readonly="readonly">
         <small>School start date:</small>
         <input style="background-color: #ccc" type="date" name="start_date" class="form-control" value="{{old('start_date')}}" readonly="readonly">
         <small>Graduated date:</small>
         <input style="background-color: #ccc" type="date" name="graduated_date" class="form-control"  value="{{old('graduated_date')}}" readonly="readonly">
         <small>Department</small>
         <input style="background-color: #ccc" type="text" name="department" class="form-control" placeholder="Ex: Computer Engineering..." value="{{old('department')}}" readonly="readonly">
         @endif
         <small>Country</small>
         <select class="form-control" name="country"
             @if($errors->any())
             <option value="{{old('country')}}" >{{old('country')}}</option>
             @else
             <option value="">Seçiminiz</option>
             @endif
             <option value="Turkey">Turkey</option>
             <option value="United States">United States</option>
             <option value="Canada">Canada</option>
             <option value="Denmark">Denmark</option>
             <option value="France">France</option>
             <option value="Great Britain">Great Britain</option>
             <option value="Italy">Italy</option>
             <option value="Japan">Japan</option>
             <option value="Mexico">Mexico</option>
             <option value="Spain">Spain</option>
             <option value="">-------------</option>
             <option value="Afghanistan">Afghanistan</option>
             <option value="Albania">Albania</option>
             <option value="Algeria">Algeria</option>
             <option value="American Samoa">American Samoa</option>
             <option value="Andorra">Andorra</option>
             <option value="Angola">Angola</option>
             <option value="Anguilla">Anguilla</option>
             <option value="Antarctica">Antarctica</option>
             <option value="Antigua And Barbuda">Antigua And Barbuda</option>
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
             <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
             <option value="Botswana">Botswana</option>
             <option value="Bouvet Island">Bouvet Island</option>
             <option value="Brazil">Brazil</option>
             <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
             <option value="Brunei Darussalam">Brunei Darussalam</option>
             <option value="Bulgaria">Bulgaria</option>
             <option value="Burkina Faso">Burkina Faso</option>
             <option value="Burma">Burma</option>
             <option value="Burundi">Burundi</option>
             <option value="Cambodia">Cambodia</option>
             <option value="Cameroon">Cameroon</option>
             <option value="Canada">Canada</option>
             <option value="Cape Verde">Cape Verde</option>
             <option value="Cayman Islands">Cayman Islands</option>
             <option value="Central African Republic">Central African Republic</option>
             <option value="Chad">Chad</option>
             <option value="Chile">Chile</option>
             <option value="China">China</option>
             <option value="Christmas Island">Christmas Island</option>
             <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
             <option value="Colombia">Colombia</option>
             <option value="Comoros">Comoros</option>
             <option value="Congo">Congo</option>
             <option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>
             <option value="Cook Islands">Cook Islands</option>
             <option value="Costa Rica">Costa Rica</option>
             <option value="Cote d'Ivoire">Cote d'Ivoire</option>
             <option value="Croatia">Croatia</option>
             <option value="Cuba">Cuba</option>
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
             <option value="England">England</option>
             <option value="Equatorial Guinea">Equatorial Guinea</option>
             <option value="Eritrea">Eritrea</option>
             <option value="Espana">Espana</option>
             <option value="Estonia">Estonia</option>
             <option value="Ethiopia">Ethiopia</option>
             <option value="Falkland Islands">Falkland Islands</option>
             <option value="Faroe Islands">Faroe Islands</option>
             <option value="Fiji">Fiji</option>
             <option value="Finland">Finland</option>
             <option value="France">France</option>
             <option value="French Guiana">French Guiana</option>
             <option value="French Polynesia">French Polynesia</option>
             <option value="French Southern Territories">French Southern Territories</option>
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
             <option value="Guinea-Bissau">Guinea-Bissau</option>
             <option value="Guyana">Guyana</option>
             <option value="Haiti">Haiti</option>
             <option value="Heard and Mc Donald Islands">Heard and Mc Donald Islands</option>
             <option value="Honduras">Honduras</option>
             <option value="Hong Kong">Hong Kong</option>
             <option value="Hungary">Hungary</option>
             <option value="Iceland">Iceland</option>
             <option value="India">India</option>
             <option value="Indonesia">Indonesia</option>
             <option value="Ireland">Ireland</option>
             <option value="Israel">Israel</option>
             <option value="Italy">Italy</option>
             <option value="Iran">Iran</option>
             <option value="Iraq">Iraq</option>
             <option value="Jamaica">Jamaica</option>
             <option value="Japan">Japan</option>
             <option value="Jordan">Jordan</option>
             <option value="Kazakhstan">Kazakhstan</option>
             <option value="Kenya">Kenya</option>
             <option value="Kiribati">Kiribati</option>
             <option value="Korea, Republic of">Korea, Republic of</option>
             <option value="Korea (South)">Korea (South)</option>
             <option value="Kuwait">Kuwait</option>
             <option value="Kyrgyzstan">Kyrgyzstan</option>
             <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
             <option value="Latvia">Latvia</option>
             <option value="Lebanon">Lebanon</option>
             <option value="Lesotho">Lesotho</option>
             <option value="Liberia">Liberia</option>
             <option value="Liechtenstein">Liechtenstein</option>
             <option value="Lithuania">Lithuania</option>
             <option value="Luxembourg">Luxembourg</option>
             <option value="Macau">Macau</option>
             <option value="Macedonia">Macedonia</option>
             <option value="Madagascar">Madagascar</option>
             <option value="Malawi">Malawi</option>
             <option value="Malaysia">Malaysia</option>
             <option value="Maldives">Maldives</option>
             <option value="Mali">Mali</option>
             <option value="Malta">Malta</option>
             <option value="Marshall Islands">Marshall Islands</option>
             <option value="Martinique">Martinique</option>
             <option value="Mauritania">Mauritania</option>
             <option value="Mauritius">Mauritius</option>
             <option value="Mayotte">Mayotte</option>
             <option value="Mexico">Mexico</option>
             <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
             <option value="Moldova, Republic of">Moldova, Republic of</option>
             <option value="Monaco">Monaco</option>
             <option value="Mongolia">Mongolia</option>
             <option value="Montserrat">Montserrat</option>
             <option value="Morocco">Morocco</option>
             <option value="Mozambique">Mozambique</option>
             <option value="Myanmar">Myanmar</option>
             <option value="Namibia">Namibia</option>
             <option value="Nauru">Nauru</option>
             <option value="Nepal">Nepal</option>
             <option value="Netherlands">Netherlands</option>
             <option value="Netherlands Antilles">Netherlands Antilles</option>
             <option value="New Caledonia">New Caledonia</option>
             <option value="New Zealand">New Zealand</option>
             <option value="Nicaragua">Nicaragua</option>
             <option value="Niger">Niger</option>
             <option value="Nigeria">Nigeria</option>
             <option value="Niue">Niue</option>
             <option value="Norfolk Island">Norfolk Island</option>
             <option value="Northern Ireland">Northern Ireland</option>
             <option value="Northern Mariana Islands">Northern Mariana Islands</option>
             <option value="Norway">Norway</option>
             <option value="Oman">Oman</option>
             <option value="Pakistan">Pakistan</option>
             <option value="Palau">Palau</option>
             <option value="Panama">Panama</option>
             <option value="Papua New Guinea">Papua New Guinea</option>
             <option value="Paraguay">Paraguay</option>
             <option value="Peru">Peru</option>
             <option value="Philippines">Philippines</option>
             <option value="Pitcairn">Pitcairn</option>
             <option value="Poland">Poland</option>
             <option value="Portugal">Portugal</option>
             <option value="Puerto Rico">Puerto Rico</option>
             <option value="Qatar">Qatar</option>
             <option value="Reunion">Reunion</option>
             <option value="Romania">Romania</option>
             <option value="Russia">Russia</option>
             <option value="Rwanda">Rwanda</option>
             <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
             <option value="Saint Lucia">Saint Lucia</option>
             <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
             <option value="Samoa (Independent)">Samoa (Independent)</option>
             <option value="San Marino">San Marino</option>
             <option value="Sao Tome and Principe">Sao Tome and Principe</option>
             <option value="Saudi Arabia">Saudi Arabia</option>
             <option value="Scotland">Scotland</option>
             <option value="Senegal">Senegal</option>
             <option value="Serbia and Montenegro">Serbia and Montenegro</option>
             <option value="Seychelles">Seychelles</option>
             <option value="Sierra Leone">Sierra Leone</option>
             <option value="Singapore">Singapore</option>
             <option value="Slovakia">Slovakia</option>
             <option value="Slovenia">Slovenia</option>
             <option value="Solomon Islands">Solomon Islands</option>
             <option value="Somalia">Somalia</option>
             <option value="South Africa">South Africa</option>
             <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
             <option value="South Korea">South Korea</option>
             <option value="Spain">Spain</option>
             <option value="Sri Lanka">Sri Lanka</option>
             <option value="St. Helena">St. Helena</option>
             <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
             <option value="Suriname">Suriname</option>
             <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
             <option value="Swaziland">Swaziland</option>
             <option value="Sweden">Sweden</option>
             <option value="Switzerland">Switzerland</option>
             <option value="Taiwan">Taiwan</option>
             <option value="Tajikistan">Tajikistan</option>
             <option value="Tanzania">Tanzania</option>
             <option value="Thailand">Thailand</option>
             <option value="Togo">Togo</option>
             <option value="Tokelau">Tokelau</option>
             <option value="Tonga">Tonga</option>
             <option value="Trinidad">Trinidad</option>
             <option value="Trinidad and Tobago">Trinidad and Tobago</option>
             <option value="Tunisia">Tunisia</option>
             <option value="Turkmenistan">Turkmenistan</option>
             <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
             <option value="Tuvalu">Tuvalu</option>
             <option value="Uganda">Uganda</option>
             <option value="Ukraine">Ukraine</option>
             <option value="United Arab Emirates">United Arab Emirates</option>
             <option value="United Kingdom">United Kingdom</option>
             <option value="United States">United States</option>
             <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
             <option value="Uruguay">Uruguay</option>
             <option value="Uzbekistan">Uzbekistan</option>
             <option value="Vanuatu">Vanuatu</option>
             <option value="Vatican City State (Holy See)">Vatican City State (Holy See)</option>
             <option value="Venezuela">Venezuela</option>
             <option value="Viet Nam">Viet Nam</option>
             <option value="Virgin Islands (British)">Virgin Islands (British)</option>
             <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
             <option value="Wales">Wales</option>
             <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
             <option value="Western Sahara">Western Sahara</option>
             <option value="Yemen">Yemen</option>
             <option value="Zambia">Zambia</option>
             <option value="Zimbabwe">Zimbabwe</option></select>
             <br>
             <hr>
             <small>Password</small>
             <input type="password" name="password" class="form-control" placeholder="*Password...">
             <hr>
             @if(isset($Rdata))
             <input type="hidden" name="school_id" id="school_id" value="{{$Rdata[0]->school_id}}">
             <input type="hidden" name="identity_id"  value="{{$Rdata[0]->identity_id}}">
             @endif
             @if($errors->any())
             <input type="hidden" name="school_id" id="school_id" value="{{old('school_id')}}">
             <input type="hidden" name="identity_id"  value="{{old('identity_id')}}">
             @endif
             <button class="btn btn-danger btn-sm">Finish My Registration</button>
             <hr>
             <small>Already Member? <a href="{{url('login')}}">Click here to Login</a></small>
       </div>
 </form>
</div> 
</div><!-- row -->
</div><!-- container -->
@endsection
@section('css')
<link href={{asset('frontEnd/css/sweetalert2.min.css')}} rel="stylesheet">
@endsection
@section('js')
<script src={{asset('frontEnd/js/jquery.form.min.js')}}></script>
<script src={{asset('frontEnd/js/jquery.validate.min.js')}}></script>
<script src={{asset('frontEnd/js/messages_tr.min.js')}}></script>
<script src={{asset('frontEnd/js/sweetalert2.min.js')}}></script>
<script>
     $(document).ready(function() {
        
         if ({{$errors->any()}}) {
          swal({
             type: 'error',
             title: 'Oops...',
             text: '{{$errors->first("title")}}',
             footer: '<a href>Why do I have this issue?</a>',
       })
    }

});
</script>
@endsection
