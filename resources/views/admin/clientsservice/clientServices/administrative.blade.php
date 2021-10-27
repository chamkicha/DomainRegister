
    <!--basic form starts-->
    <div class="my-3">
                <div class="card " id="hidepanel1">
                    <div class="card-header text-black ">
                        <span>
                            
                            Administrative details <strong style="color: red;">*</strong>
                        </span>
                                
                    </div>
                    <div class="card-body">

                        <!-- Name input-->
                        <div class="form-group">
                            <div class="row">
                                <div class="col-12  col-sm-12 col-md-3 col-lg-3">
                                    
                                </div>
                                    <div class="col-6 col-sm-6 col-md-6  col-lg-6">
                                        <select name="same_as_registrant" id="select-gear" class="form-control required" onchange="change_type()">
                                            <optgroup>
                                                <option value="2">Add New Administrative details</option>
                                                <option value="1">Same Registrant Contact(Details Above)</option>
                                                
                                            </optgroup>
                                        </select>
                                        {!! $errors->first('same_as_registrant', '<span class="help-block">:message</span>') !!}
                                    </div>
                                <div class="col-6 col-sm-6 col-md-3  col-lg-3">
                                    
                                </div>
                            </div>
                        </div>

                        <!-- Administrative Details hide/show-->
                        <div id="administrative_details_hide_show">

                        <!-- Name input-->
                        <div class="form-group">
                            <div class="row">
                                <div class="col-12  col-sm-12 col-md-3 col-lg-3">
                                    <label class="control-label ">Full name</label>
                                </div>
                                <div class="col-6 col-sm-6 col-md-4  col-lg-4">
                                    <input type="text" class="form-control required" name="administrative_firstName"
                                        placeholder="First Name" />
                                {!! $errors->first('administrative_firstName', '<span class="help-block">:message</span>') !!}
                                </div>
                                <div class="col-6 col-sm-6 col-md-5  col-lg-5">
                                    <input type="text" class="form-control required" name="administrative_lastName"
                                        placeholder="Last Name" />
                                {!! $errors->first('administrative_lastName', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                        </div>

                        <!-- Email input-->
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-3 col-md-3">
                                    <label class="control-label ">Email Address</label>
                                </div>
                                <div class="col-lg-9 col-md-9">
                                    <input type="text" class="form-control required" name="administrative_email"
                                        placeholder="Enter Email Address" />
                                {!! $errors->first('administrative_email', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                        </div>

                        <!-- Phone Number input-->
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-3 col-md-3">
                                    <label class="control-label">Phone Number</label>
                                </div>
                                <div class="col-lg-9 col-md-9">
                                    <input type="text" class="form-control required" name="administrative_phone_number"
                                        placeholder="Phone Number" />
                                {!! $errors->first('administrative_phone_number', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                        </div>

                        <!-- Company name input-->
                        <div class="form-group">
                            <div class="row">
                            <label class="col-md-3 col-lg-3 col-12 control-label" for="email">Company Name</label>
                            <div class="col-md-9 col-lg-9 col-12">
                                <input id="administrative_company_name" name="administrative_company_name" type="text" placeholder="Company Name" class="form-control required"></div>
                                {!! $errors->first('administrative_company_name', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>

                        <!-- Street Address input-->
                        
                        <div class="form-group">
                            <div class="row">
                                <div class="col-12  col-sm-12 col-md-3 col-lg-3">
                                    <label class="control-label ">Street Address</label>
                                </div>
                                <div class="col-6 col-sm-6 col-md-4  col-lg-4">
                                    <input type="text" class="form-control required" name="administrative_street_address"
                                        placeholder="Street Address" />
                                {!! $errors->first('administrative_street_address', '<span class="help-block">:message</span>') !!}
                                </div>
                                <div class="col-6 col-sm-6 col-md-5  col-lg-5">
                                    <input type="text" class="form-control required" name="administrative_postal_address"
                                        placeholder="P.O. Box" />
                                {!! $errors->first('administrative_postal_address', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                        </div>

                        <!-- Adress input-->
                        <div class="form-group">
                            <div class="row">
                                <div class="col-12  col-sm-12 col-md-3 col-lg-3">
                                    <label class="control-label "></label>
                                </div>
                                <div class="col-6 col-sm-6 col-md-3  col-lg-3">
                                    <input type="text" class="form-control required" name="administrative_city"
                                        placeholder="City" />
                                    {!! $errors->first('administrative_city', '<span class="help-block">:message</span>') !!}
                                </div>
                                <div class="col-6 col-sm-6 col-md-3  col-lg-3">
                                    <input type="text" class="form-control required" name="administrative_state"
                                        placeholder="State" />
                                    {!! $errors->first('administrative_state', '<span class="help-block">:message</span>') !!}
                                </div>
                                <div class="col-6 col-sm-6 col-md-3  col-lg-3">
                                    <input type="text" class="form-control required" name="administrative_country"
                                        placeholder="Country" />
                                    {!! $errors->first('administrative_country', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                        </div>

                        <!-- security input-->
                        <div class="form-group {{ $errors->first('administrative_password', 'has-error') }}">
                            <div class="row">
                                <div class="col-12  col-sm-12 col-md-3 col-lg-3">
                                    <label class="control-label ">Account Security</label>
                                </div>
                                <div class="col-6 col-sm-6 col-md-4  col-lg-4">
                                    <input type="password" class="form-control required" name="administrative_password"
                                        placeholder="Password" />
                                    {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
                                </div>
                                <div class="col-6 col-sm-6 col-md-5  col-lg-5">
                                    <input type="password" class="form-control required" name="administrative_password_confirm"
                                        placeholder="Confirm Password" />
                                    {!! $errors->first('administrative_password', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                        </div>

                        </div>
                                
                                
                    </div>
            </div>

                    
    </div>


    
<script type="text/javascript">
    function change_type() 
    {
        var selectBox = document.getElementById("select-gear");
        var selectedValue = selectBox.options[selectBox.selectedIndex].value;
        if (selectedValue=="2")
            {
            $('#administrative_details_hide_show').slideDown();
            }
        else {
            $('#administrative_details_hide_show').slideUp();
            }
    }
</script>
