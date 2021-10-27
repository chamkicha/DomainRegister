 <!--basic form starts-->
<div class="col-11">
    <div class="my-3">
                <div class="card " id="hidepanel1">
                    <div class="card-header text-black ">
                        <span>
                            
                           
                        </span>
                                
                    </div>
                    <div class="card-body">
                            <!-- CSRF Token -->

                                <!-- Name input-->
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-12  col-sm-12 col-md-3 col-lg-3">
                                            <label class="control-label ">Domain Name</label>
                                        </div>
                                        <div class="col-6 col-sm-6 col-md-4  col-lg-4">
                                            <input type="text" class="form-control" name="domain_name"
                                                placeholder="Domain Name" />
                                        </div>
                                        <div class="col-6 col-sm-6 col-md-5  col-lg-5">
                                            
                                        </div>
                                    </div>
                                </div>



                                <!-- Registration Period input-->
                                <div class="form-group">
                                  <div class="row">
                                    <label class="col-md-3 col-lg-3 col-12 control-label" for="email">Registration Period</label>
                                    <div class="col-md-9 col-lg-9 col-12">
                                    
                                        
                                        <div class="form-check abc-radio abc-radio-info form-check-inline">
                                            <input class="form-check-input" type="radio" id="inlineRadio1" value="1" name="registration_period" checked>
                                            <label class="form-check-label" for="inlineRadio1"> 1 Year/s </label>
                                        </div>
                                        <div class="form-check abc-radio form-check-inline abc-radio-info">
                                            <input class="form-check-input" type="radio" id="inlineRadio2" value="2" name="registration_period">
                                            <label class="form-check-label" for="inlineRadio2"> 2 Year/s </label>
                                        </div>
                                        <div class="form-check abc-radio form-check-inline abc-radio-info">
                                            <input class="form-check-input" type="radio" id="inlineRadio2" value="3" name="registration_period">
                                            <label class="form-check-label" for="inlineRadio3"> 3 Year/s </label>
                                        </div>
                                     </div>
                                  </div>
                                </div>

                                <!-- security input-->
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-12  col-sm-12 col-md-4 col-lg-4">
                                        </div>
                                        <div class="col-6 col-sm-6 col-md-4  col-lg-4">
                                        <br>
                                            <label class="control-label ">Nameservers</label>
                                            
                                        </div>
                                        <div class="col-6 col-sm-6 col-md-4  col-lg-4">
                                            
                                        </div>
                                    </div>
                                </div>

                                <!-- Adress input-->
                                <div class="form-group">
                                    <div class="row">
                                    {{--  @foreach($nameserver as $nameservers)
                                        <div class="col-12  col-sm-12 col-md-3 col-lg-3">
                                            <label class="control-label ">Nameserver {{$loop->iteration}}</label>
                                            <input name="same_as_registrant" type="text" class="form-control" name="city"
                                                placeholder="City" value="{{ old('name', $nameservers->name) }}"/>
                                        </div>
                                    @endforeach  --}}
                                        <div class="col-12  col-sm-12 col-md-3 col-lg-3">
                                            <label class="control-label ">Nameserver1</label>
                                            <input name="nameserver[]" type="text" class="form-control" name="city"
                                                placeholder="Nameserver1" value="{{ old('name', $nameserver[0]->name) }}"/>
                                        </div>
                                        <div class="col-12  col-sm-12 col-md-3 col-lg-3">
                                            <label class="control-label ">Nameserver2 </label>
                                            <input name="nameserver[]" type="text" class="form-control" name="city"
                                                placeholder="Nameserver2" value="{{ old('name', $nameserver[1]->name) }}"/>
                                        </div>
                                        <div class="col-12  col-sm-12 col-md-3 col-lg-3">
                                            <label class="control-label ">Nameserver3 </label>
                                            <input name="nameserver[]" type="text" class="form-control" name="city"
                                                placeholder="Nameserver3" value="{{ old('name', $nameserver[2]->name) }}"/>
                                        </div>
                                        <div class="col-12  col-sm-12 col-md-3 col-lg-3">
                                            <label class="control-label ">Nameserver4 </label>
                                            <input name="nameserver[]" type="text" class="form-control" name="city"
                                                placeholder="Nameserver4" />
                                        </div>
                                        
                                    </div>
                                </div>
                                
                                
                        </div>
                    </div>
    </div>
</div>

    

<div class="col-11">
  @include('admin.clientsservice.clientServices.form_action')
</div>


