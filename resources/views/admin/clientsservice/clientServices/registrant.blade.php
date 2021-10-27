
<!--basic form starts-->
<div class="my-3">
    <div class="card " id="hidepanel1">
        <div class="card-header text-black ">
            <span>
                
                Registrant details <strong style="color: red;">*</strong>
            </span>
                    
        </div>
        <div class="card-body">
                <!-- CSRF Token -->
                    <!-- Name input-->
                    <div class="form-group">
                        <div class="row">
                            <label class="col-md-3 col-lg-3 col-12 control-label" for="name">Registrant Name:</label>
                            <div class="col-md-9 col-lg-5 col-12">
                                
            
                                <select name="registrants" id="select21" class="form-control select2 required">
                                
                                        <option value="">Select Registrant Name</option>
                                        @foreach($registrants as $registrant)
                                        <option value="{{ $registrant->user_id}}">
                                            <?php
                                            $registrant_name = DB::table('users')->where('id', $registrant->user_id)->first();
                                            print_r($registrant_name->first_name);
                                            ?>
                                        </option>
                                        @endforeach
                                    </optgroup>
                                </select>
                                
                            {!! $errors->first('registrants', '<span class="help-block">:message</span>') !!}
                            </div>

                            <div class="col-md-9 col-lg-4 col-12">
                                <a href="{{ route('admin.client.clients.create') }}" class="btn btn-sm btn-secondary"><span class="fa fa-plus"></span> @lang('Create New Registrant')</a>
                            </div>
    
                        </div>
                    </div>
                    
                    
        </div>
    </div>
</div>