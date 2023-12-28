<!DOCTYPE html>
<html>
<head>
    <title>Visa Application Form</title>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/egencia.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src='main.js'></script>
</head>
<body>
<div class="desktoplogo">
        <a href="https://www.ivsvisa.com/index.aspx" class="logo-ivs">    
        <img src="https://www.ivsvisa.com/egencia/assets/img/logo-ivs.png" width="450" height="75" alt="header-logo"></a>

        <a href="https://www.ivsvisa.com/index.aspx" class="egencia">
          <img src="https://www.ivsvisa.com/egencia/assets/img/egenica.png" width="300" height="30" alt="header-logo"></a>
        </div>
<div class="header">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?= base_url('Egencia'); ?>">Home</a>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="<?= base_url('Egencia/contact'); ?>">Contact <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="<?= base_url('visa_application.php'); ?>">Request for Application</a>
      <a class="nav-item nav-link" href="Escalation_Matrix-IVS.pdf" target="_blank" class="nav-link" rel="noopener">Escalation Matrix</a>
      <a class="nav-item nav-link" href="#">Make Payment</a>
      <a class="nav-item nav-link" href="#">Coming Soon</a>
    </div>
  </div>
</nav>
</div>
    <h1 style="text-align: center;">Visa Application Form</h1>
    <?php echo form_open('Egencia/submit_form'); ?>
        <label for="full_name">Full Name:<span class="req">*</span></label>
        <input type="text" name="full_name" id="full_name" placeholder="Full Name" required>
        <br>
        <label for="passport_number">Passport Number:<span class="req">*</span></label>
        <input type="text" name="passport_number" id="passport_number" placeholder="Passport Number" required>
        <br>
        <label for="nationality">Nationality:<span class="req">*</span></label>
        <input type="text" name="nationality" id="nationality" placeholder="Nationality" required>
        <br>
        <label for="Contact">Contact Number:<span class="req">*</span></label>
        <input type="text" name="Contact" id="Contact" placeholder="Contact No" required>
        <br>
        <label for="email">Email:<span class="req">*</span></label>
        <input type="text" name="email" id="email" placeholder="Email id" required>
        <br>
        <label for="DOB">Date Of Birth:<span class="req">*</span></label>
        <input type="date" name="DOB" id="DOB" placeholder="Date Of Birth" required>
        <br>
        <label for="Place">Place Of Recedency:<span class="req">*</span></label>
        <input type="text" name="Place" id="Place" placeholder="Place of Recedency" required>
        <br>
        <label for="Region">Region:<span class="req">*</span></label>
    <select name="Region" id="Region" class="form-control">
	<option value="">Please Select</option>
	<option value="North ">North </option>
	<option value="West">West</option>
	<option value="East">East</option>
	<option value="South">South</option>

</select>
        <br>
        <label for="country">Country For which Visa Required:<span class="req">*</span></label>
        <select name="country" id="country" class="form-control">
                            <option value="">Select Country</option>
                            <option value="Afghanistan">Afghanistan</option>
                            <option value="Albania">Albania</option>
                            <option value="Algeria">Algeria</option>
                            <option value="Andorra">Andorra</option>
                            <option value="Angola">Angola</option>
                            <option value="Anguilla">Anguilla</option>
                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                            <option value="Apostolic Nunciature">Apostolic Nunciature</option>
                            <option value="Argentine Republic">Argentine Republic</option>
                            <option value="Armenia">Armenia</option>
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
                            <option value="Bosnia-Herzegovina">Bosnia-Herzegovina</option>
                            <option value="Botswana">Botswana</option>
                            <option value="Brazil">Brazil</option>
                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                            <option value="Bulgaria">Bulgaria</option>
                            <option value="Burkina Faso">Burkina Faso</option>
                            <option value="Burundi">Burundi</option>
                            <option value="Cabo Verde">Cabo Verde</option>
                            <option value="Cambodia">Cambodia</option>
                            <option value="Cameroon">Cameroon</option>
                            <option value="Canada">Canada</option>
                            <option value="Chad">Chad</option>
                            <option value="Chile">Chile</option>
                            <option value="China">China</option>
                            <option value="Colombia">Colombia</option>
                            <option value="Comoros">Comoros</option>
                            <option value="Congo - Democratic Republic">Congo - Democratic Republic</option>
                            <option value="Congo - Republic">Congo - Republic</option>
                            <option value="Cook Islands">Cook Islands</option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="Cote d Ivoire">Cote d Ivoire</option>
                            <option value="Croatia">Croatia</option>
                            <option value="Cuba">Cuba</option>
                            <option value="Cyprus">Cyprus</option>
                            <option value="Czech Republic">Czech Republic</option>
                            <option value="Denmark">Denmark</option>
                            <option value="Djibouti">Djibouti</option>
                            <option value="Dominica">Dominica</option>
                            <option value="Dominican Republic">Dominican Republic</option>
                            <option value="Ecuador">Ecuador</option>
                            <option value="Egypt">Egypt</option>
                            <option value="El Salvador">El Salvador</option>
                            <option value="Eritrea">Eritrea</option>
                            <option value="Estonia">Estonia</option>
                            <option value="Ethiopia">Ethiopia</option>
                            <option value="Fiji">Fiji</option>
                            <option value="Finland">Finland</option>
                            <option value="France">France</option>
                            <option value="Gabon">Gabon</option>
                            <option value="Gambia">Gambia</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Germany">Germany</option>
                            <option value="Ghana">Ghana</option>
                            <option value="Gibraltar">Gibraltar</option>
                            <option value="Greece">Greece</option>
                            <option value="Grenada">Grenada</option>
                            <option value="Guatemala">Guatemala</option>
                            <option value="Guinea">Guinea</option>
                            <option value="Guinea-Bissau">Guinea-Bissau</option>
                            <option value="Guyana">Guyana</option>
                            <option value="Haiti">Haiti</option>
                            <option value="Honduras">Honduras</option>
                            <option value="Hong Kong">Hong Kong</option>
                            <option value="Hungary">Hungary</option>
                            <option value="Iceland">Iceland</option>
                            <option value="India">India</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Iran">Iran</option>
                            <option value="Iraq">Iraq</option>
                            <option value="Ireland">Ireland</option>
                            <option value="Israel">Israel</option>
                            <option value="Italy">Italy</option>
                            <option value="Jamaica">Jamaica</option>
                            <option value="Japan">Japan</option>
                            <option value="Jordan">Jordan</option>
                            <option value="Kazakhstan">Kazakhstan</option>
                            <option value="Kenya">Kenya</option>
                            <option value="Kiribati">Kiribati</option>
                            <option value="Korea North">Korea North</option>
                            <option value="Korea South">Korea South</option>
                            <option value="Kuwait">Kuwait</option>
                            <option value="Kyrgyz Republic">Kyrgyz Republic</option>
                            <option value="Lao">Lao</option>
                            <option value="Latvia">Latvia</option>
                            <option value="Lebanon">Lebanon</option>
                            <option value="Lesotho">Lesotho</option>
                            <option value="Liberia">Liberia</option>
                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
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
                            <option value="Mauritius">Mauritius</option>
                            <option value="Mexico">Mexico</option>
                            <option value="Moldova">Moldova</option>
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
                            <option value="New Zealand">New Zealand</option>
                            <option value="Nicaragua">Nicaragua</option>
                            <option value="Niger">Niger</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="Norway">Norway</option>
                            <option value="Oman">Oman</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Panama">Panama</option>
                            <option value="Papua New Guinea">Papua New Guinea</option>
                            <option value="Paraguay">Paraguay</option>
                            <option value="Peru">Peru</option>
                            <option value="Philippines">Philippines</option>
                            <option value="Poland">Poland</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Qatar">Qatar</option>
                            <option value="Romania">Romania</option>
                            <option value="Russia">Russia</option>
                            <option value="Rwanda">Rwanda</option>
                            <option value="San Marino">San Marino</option>
                            <option value="Saudi Arabia">Saudi Arabia</option>
                            <option value="Senegal">Senegal</option>
                            <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                            <option value="Seychelles">Seychelles</option>
                            <option value="Sierra Leone">Sierra Leone</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Slovak Republic">Slovak Republic</option>
                            <option value="Slovenia">Slovenia</option>
                            <option value="Somalia">Somalia</option>
                            <option value="South Africa">South Africa</option>
                            <option value="Spain">Spain</option>
                            <option value="Sri Lanka">Sri Lanka</option>
                            <option value="Sudan">Sudan</option>
                            <option value="Sudan-South">Sudan-South</option>
                            <option value="Suriname">Suriname</option>
                            <option value="Sweden">Sweden</option>
                            <option value="Switzerland">Switzerland</option>
                            <option value="Syria">Syria</option>
                            <option value="Taiwan">Taiwan</option>
                            <option value="Tajikistan">Tajikistan</option>
                            <option value="Tanzania">Tanzania</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Togo">Togo</option>
                            <option value="Tonga">Tonga</option>
                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                            <option value="Tunisia">Tunisia</option>
                            <option value="Turkey">Turkey</option>
                            <option value="Turkmenistan">Turkmenistan</option>
                            <option value="Uganda">Uganda</option>
                            <option value="Ukraine">Ukraine</option>
                            <option value="United Arab Emirates">United Arab Emirates</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="United States of America">United States of America</option>
                            <option value="Uruguay">Uruguay</option>
                            <option value="Uzbekistan">Uzbekistan</option>
                            <option value="Venezuela">Venezuela</option>
                            <option value="Vietnam">Vietnam</option>
                            <option value="Yemen">Yemen</option>
                            <option value="Zambia">Zambia</option>
                            <option value="Zimbabwe">Zimbabwe</option>
                        </select>
        <br>
        <label for="visa_type">Visa Type:<span class="req">*</span></label>
        <select id="visa_type" name="visa_type" class="form-control visa">
                            <option value="">Select Visa</option>
                            <option value="Travel Visa">Travel Visa</option>
                            <option value="Working Visa">Working Visa</option>
                            <option value="Business Visa">Business Visa</option>
                            <option value="Visitor Visa">Visitor Visa</option>
                        </select>
        <br>
        <label for="exp_date">Expected Date Of Travel:<span class="req">*</span></label>
        <input type="date" name="exp_date" id="exp_date" required>
        <br>
        <label for="billing">Corporate Name(Billing entry):<span class="req">*</span></label>
        <input type="text" name="billing" id="billing" placeholder="Corporate Name" required>
        <br>
        <div class="form-group">
     <input type="checkbox" name="chkAgreeTerm" id="chkAgreeTerm" class="agree-term">
     <label for="agree-term" class="label-agree-term"><span class="req">*</span>The form can be used to request for Official Travel only.
For personal Visa support donot use this medium and contact the team seperately I agree all statements in  <a href="terms-and-condition.php" class="term-service">Terms of service</a></label>
     <input type="hidden" id="hdnSubmitype" name="hdnSubmitype" value="">
     </div>
       <div class="clearfix"></div>
       <div class="submitt text-center">
        <input type="submit" value="Submit Application">
</div>
    <?php echo form_close(); ?>
</body>
</html>
