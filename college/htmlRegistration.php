<?php require_once('header.php'); ?> 

<form action="regestrationpageDB.php" method="POST" accept-charset="utf-8" enctype="multipart/form-data">


    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">


                <div class="messages"></div>
                <div class="controls">

                    <div class="row">
                        <fieldset class="fieldone">
                            <legend><span class="legendname">Student Information</span></legend>
                            <div class="col-md-12">

                                <input type="hidden"   required  name="hide_admisson_button_id" value="<?php echo $_SESSION["user_id"] ?>">



                                <div class="input-group ">
                                    <span class="input-group-addon">Student Name*</span>
                                    <input  type="text" class="form-control"   required  name="StudentName" placeholder="Enter Your Name" >
                                </div>

                                <div class="input-group ">
                                    <span class="input-group-addon">Father Name*</span>
                                    <input  type="text" class="form-control"   required  name="StudentFatherName" placeholder="Enter Your Father Name" >
                                </div>


                                <div class="input-group">
                                    <span class="input-group-addon">Mother Name*</span>
                                    <input type="text" class="form-control"   required  name="StudentMotherName" placeholder="Enter Your Mother Name" >
                                </div>



                                <div class="input-group">
                                    <span class="input-group-addon">Date Of Birth*</span>
                                    <input  type="date" class="form-control"   required  name="StudentDateOfBirth" >
                                </div>


                                <div class="input-group">
                                    <span class="input-group-addon">Religion*</span>
                                    <select class="form-control"   required  name="StudentReligion">
                                        <option value="" class="form-control" >---Select your Religion---</option>
                                        <option value="Islam" class="form-control" >Islam</option>
                                        <option value="Hinduism" class="form-control" >Hinduism</option>
                                        <option value="Buddhism" class="form-control" >Buddhism</option>
                                        <option value="Christianity" class="form-control" >Christianity</option>
                                    </select>
                                </div>



                                <div class="input-group">
                                    <span class="input-group-addon">NID No:</span>
                                    <input  type="text" class="form-control"     name="StudentNidNo" >
                                </div>


                                <div class="input-group">
                                    <span class="input-group-addon">Birth Certificate Number*</span>
                                    <input  type="text" class="form-control"   required  name="StudentBirthCertificateNumber">
                                </div>


                                <div class="input-group">
                                    <span class="input-group-addon">Nationality*</span>
                                    <select class="form-control"   required  name="studentNationality" >
                                        <option value="" class="form-control" >---Select your Nationality---</option>
                                        <option value="Bangladeshi" class="form-control" >Bangladeshi</option>
                                        <option value="Barbadians" class="form-control" >Barbadians</option>
                                        <option value="Indians" class="form-control" >Indians</option>
                                    </select>
                                </div>




                                <div class="input-group">
                                    <span class="input-group-addon ">Gender*</span>
                                    <span class="form-control" >
                                        <input type="radio"   required  name="studentGender" value="Male" > Male
                                        <input type="radio"   name="studentGender" value="Female" > Female
                                        <input type="radio"   name="studentGender" value="Other" > Other 
                                    </span>
                                </div>



                                <div class="input-group">
                                    <span class="input-group-addon">Email Address*</span>
                                    <input  type="email" class="form-control"   required  name="StudentEmailAddress" >
                                </div>

                                <div class="input-group">
                                    <span class="input-group-addon">Phone Number*</span>
                                    <input  type="tel" class="form-control"   required  name="StudentPhoneNumber" >
                                </div>


                                <input type="hidden" class="form-control" id="amount"   required  name="admitnumber" value="<?php echo $_SESSION["user_id"]; ?>">

                                <input type="hidden" class="form-control" id="amount"   required  name="admissionVerification" value="1">



                                <div class="input-group">
                                    <span class="input-group-addon">Upload Your Image*</span>
                                    <input  type="file" class="form-control"   required  name="StudentPersonalImage"/>
                                </div> 

                            </div>
                        </fieldset>





                        <fieldset class="fieldtwo">
                            <legend><span class="legendname">Educational Qualification</span></legend>

                            <div class="col-md-6">

                                <!-- SSC -->
                                <div class="input-group">
                                    <span class="input-group-addon">Exam Name*</span>
                                    <select class="form-control"   required  name="StudentSSCexamNameSelection" >
                                        <option value="" class="form-control" >---Select The Name Of Exam</option>
                                        <option value="SSC" class="form-control" >SSC</option>
                                    </select>
                                </div>

                                <div class="input-group">
                                    <span class="input-group-addon">Board*</span>
                                    <select class="form-control"   required  name="StudentSSCExamBoard">
                                        <option value="" class="form-control" >---Select Your SSC Exam Board---</option>
                                        <option value="Dhaka" class="form-control" >Dhaka</option>
                                        <option value="Comilla" class="form-control" >Comilla</option>
                                        <option value="Rajshahi" class="form-control" >Rajshahi</option>
                                        <option value="Sylhet" class="form-control" >Sylhet</option>
                                        <option value="Barisal" class="form-control" >Barisal</option>
                                        <option value="Jessore" class="form-control" >Jessore</option>
                                        <option value="Dinajpur" class="form-control" >Dinajpur</option>
                                    </select>
                                </div>

                                <div class="input-group">
                                    <span class="input-group-addon">Passing Year*</span>
                                    <input  type="text" class="form-control"   required  name="StudentSSCPassingYear" placeholder="Enter Your Passing Year" >
                                </div>

                                <div class="input-group">
                                    <span class="input-group-addon">Institute Name*</span>
                                    <input  type="text" class="form-control"   required  name="StudentSSCInstituteName" placeholder="Enter Your Institute Name" >
                                </div>

                                <div class="input-group">
                                    <span class="input-group-addon">Roll Number*</span>
                                    <input  type="text" class="form-control"   required  name="StudentSSCboardRoll" placeholder="Enter Your Roll Number" >
                                </div>

                                <div class="input-group">
                                    <span class="input-group-addon">Registration Number*</span>
                                    <input  type="text" class="form-control"   required  name="StudentSSCRegistrationNumber" placeholder="Enter Your Registration Number" >
                                </div>

                                <div class="input-group">
                                    <span class="input-group-addon">Group*</span>
                                    <select class="form-control"   required  name="StudentSSCExamGroup" >
                                        <option value="" class="form-control" >---Select Your Group---</option>
                                        <option value="Science" class="form-control" >Science</option>
                                        <option value="Commerce" class="form-control" >Commerce </option>
                                        <option value="Arts" class="form-control" >Arts</option>
                                    </select>
                                </div>




                                <div class="input-group">
                                    <span class="input-group-addon">SSC Result*</span>
                                    <input  type="text" class="form-control"   required  name="SSCResult" placeholder="Enter Your SSC GPA">
                                </div>






                            </div>
                            <!-- Hsc -->

                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon">Exam Name*</span>
                                    <select class="form-control"   required  name="StudentHSCexamNameSelection" >
                                        <option value="" class="form-control" >---Select The Name Of Exam</option>
                                        <option value="HSC" class="form-control" >HSC</option>
                                    </select>
                                </div>

                                <div class="input-group">
                                    <span class="input-group-addon">Board*</span>
                                    <select class="form-control"   required  name="StudentHSCExamBoard">
                                        <option value="" class="form-control" >---Select Your HSC Exam Board---</option>
                                        <option value="Dhaka" class="form-control" >Dhaka</option>
                                        <option value="Comilla" class="form-control" >Comilla</option>
                                        <option value="Rajshahi" class="form-control" >Rajshahi</option>
                                        <option value="Sylhet" class="form-control" >Sylhet</option>
                                        <option value="Barisal" class="form-control" >Barisal</option>
                                        <option value="Jessore" class="form-control" >Jessore</option>
                                        <option value="Dinajpur" class="form-control" >Dinajpur</option>
                                    </select>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon">Passing Year*</span>
                                    <input  type="text" class="form-control"   required  name="StudentHSCPassingYear" placeholder="Enter Your Passing Year" >
                                </div>

                                <div class="input-group">
                                    <span class="input-group-addon">Institute Name*</span>
                                    <input  type="text" class="form-control"   required  name="StudentHSCInstituteName" placeholder="Enter Your Institute Name" >
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon">Roll Number*</span>
                                    <input  type="text" class="form-control"   required  name="StudentHSCboardRoll" placeholder="Enter Your Roll Number" >
                                </div>

                                <div class="input-group">
                                    <span class="input-group-addon">Registration Number*</span>
                                    <input  type="text" class="form-control"   required  name="StudentHSCRegistrationNumber" placeholder="Enter Your Registration Number" >
                                </div>

                                <div class="input-group">
                                    <span class="input-group-addon">Group*</span>
                                    <select class="form-control"   required  name="StudentHSCExamGroup">
                                        <option value="" class="form-control" >---Select Your Group---</option>
                                        <option value="Science" class="form-control" >Science</option>
                                        <option value="Commerce" class="form-control" >Commerce </option>
                                        <option value="Arts" class="form-control" >Arts</option>
                                    </select>
                                </div>


                                <div class="input-group">
                                    <span class="input-group-addon">HSC Result*</span>
                                    <input  type="text" class="form-control"   required  name="HSCResult" placeholder="Enter Your HSC GPA">
                                </div>



                            </div>


                        </fieldset>


                        <fieldset class="fieldthree">
                            <legend><span class="legendname">Present Address</span></legend>
                            <div class="col-md-12">
                                <div class="input-group">
                                    <span class="input-group-addon">Village/House/Road*</span>
                                    <input  type="text" class="form-control"   required  name="StudentPresentAddressVillageHouseRoad" placeholder="Enter Your Village/House/Road" >
                                </div>

                                <div class="input-group">
                                    <span class="input-group-addon">District*</span>
                                    <input  type="text" class="form-control"   required  name="StudentPresentAddressDistrict" placeholder="Enter Your District" >
                                </div>

                                <div class="input-group">
                                    <span class="input-group-addon">Upozilla*</span>
                                    <input  type="text" class="form-control"   required  name="StudentPresentAddressUpozilla" placeholder="Enter Your Upozilla" >
                                </div>

                                <div class="input-group">
                                    <span class="input-group-addon">Post Office*</span>
                                    <input  type="text" class="form-control"   required  name="StudentPresentAddressPostOffice" placeholder="Enter Your Post Office" >
                                </div>

                                <div class="input-group">
                                    <span class="input-group-addon">Post Code*</span>
                                    <input  type="text" class="form-control"   required  name="StudentPresentAddressPostCode" placeholder="Enter Your Post Code" >
                                </div> 
                            </div>
                        </fieldset>




                        <fieldset class="fieldfour">
                            <legend><span class="legendname">Permanent Address</span></legend>
                            <div class="col-md-12">
                                <div class="input-group">
                                    <span class="input-group-addon">Village/House/Road*</span>
                                    <input  type="text" class="form-control"   required  name="StudentpermanentAddressVillageHouseRoad" placeholder="Enter Your Village/House/Road" >
                                </div>

                                <div class="input-group">
                                    <span class="input-group-addon">District*</span>
                                    <input  type="text" class="form-control"   required  name="StudentpermanentAddressDistrict" placeholder="Enter Your District" >
                                </div>

                                <div class="input-group">
                                    <span class="input-group-addon">Upozilla*</span>
                                    <input  type="text" class="form-control"   required  name="StudentpermanentAddressUpozilla" placeholder="Enter Your Upozilla" >
                                </div>

                                <div class="input-group">
                                    <span class="input-group-addon">Post Office*</span>
                                    <input  type="text" class="form-control"   required  name="StudentpermanentAddressPostOffice" placeholder="Enter Your Post Office" >
                                </div>

                                <div class="input-group">
                                    <span class="input-group-addon">Post Code*</span>
                                    <input  type="text" class="form-control"   required  name="StudentpermanentAddressPostCode" placeholder="Enter Your Post Code" >
                                </div> 

                            </div>

                        </fieldset>




                        <fieldset class="fieldfour">
                            <legend><span class="legendname">Upload Your Signature</span></legend>
                            <div class="col-md-12">

                                <div class="input-group">
                                    <span class="input-group-addon">Upload Your Signature*</span>
                                    <input  type="file" class="form-control"   required  name="StudentSignature"/>
                                </div> 



                            </div>

                        </fieldset>




                    </div>

                </div>

                <div class="col-md-6 " id="checkboxsetting">
                    <input type="checkbox"   required  name="studentunderstand1stcheckbox" value="I HAVE READ AND UNDERSTAND THIS FORM, AND I GIVE ALL OF MY TRUE INFORMATION.">I HAVE READ AND UNDERSTAND THIS FORM, AND I GIVE ALL OF MY TRUE INFORMATION.<br>
                    <input type="checkbox"   required  name="studentsubmition2ndcheckbox" value="I am fully determinded to SUBMIT This Admission Form.">I am fully determinded to SUBMIT This Admission Form.<br>
                </div>




                <div class="col-md-12 captchasetting" >

                    <div class="col-md-6" style=" margin-left: -20px;" >
                        <div class="form-group">
                            <div class="g-recaptcha" data-sitekey="6LdVXjEUAAAAAJSDLWvZ-Dt2ltW5Xm05_6sSm2wW" data-callback="YourOnSubmitFn">
                            </div>
                        </div>
                    </div>



                    <div class="col-md-6 yahoomm">
                        <div class="col-md-4">
                            <input type="reset" class="btn btn-info btn-reset" value="Reset">
                        </div>
                        <div class="col-md-4">

                            <input type="submit" class="btn btn-success btn-send"  name="submit" value="Submit">
                        </div>

                    </div>

                </div>



            </div>

        </div>

    </div>

</form>

<?php require_once('footer.php'); ?> 








