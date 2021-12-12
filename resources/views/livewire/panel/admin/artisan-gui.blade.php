{{-- <div class="row">
    <p>{{ $output }}</p>
 <div class="col-lg-6">
    <div class="box overflow-hidden pull-up">
<form wire:submit.prevent="makecontroller">
<div class="box">
        <div class="box-body">
        <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Make:</span>
            <input  wire:model="name" id="makecontroller" type="text" class="form-control" placeholder="Make:Controller Enter Name">
          <span class="input-group-btn">
              <button  type="submit" class="btn btn-success">Run</button>
          </span>
      </div>
    </div>
    <div class="flexbox px-4">
        <input type="checkbox" id="resource" class="filled-in chk-col-warning" value="1"wire:model="option">
        <label for="resource">Resource</label>
    </div>
  </div>
</form> 
    </div>
</div>
</div> --}}

<div class="box box-default">
    <div class="box-header with-border">
      <h4 class="box-title">Artisan Commands:</h4><span>
       <x-jet-validation-errors/>
      </span>
      <h6 class="box-subtitle"><code>{{ $output }} </code></h6>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs justify-content-center" role="tablist">
            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home12" role="tab" aria-selected="true"><span>Make:</span> <span class="hidden-xs-down ml-15"></span></a> </li>
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile12" role="tab" aria-selected="false"><span><i class="ion-person"></i></span> <span class="hidden-xs-down ml-15">Profile</span></a> </li>
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#messages12" role="tab" aria-selected="false"><span><i class="ion-email"></i></span> <span class="hidden-xs-down ml-15">Messages</span></a> </li>
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#setting12" role="tab" aria-selected="false"><span><i class="ion-settings"></i></span> <span class="hidden-xs-down ml-15">Setting</span></a> </li>
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#about12" role="tab" aria-selected="false"><span><i class="ion-person"></i></span> <span class="hidden-xs-down ml-15">About</span></a> </li>
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#contact12" role="tab" aria-selected="false"><span><i class="ion-camera"></i></span> <span class="hidden-xs-down ml-15">Contact</span></a> </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content tabcontent-border">
            <div class="tab-pane active" id="home12" role="tabpanel">
                <div class="p-15">
                    <div class="row">
                        <div class="col-lg-6">
                            <form wire:submit.prevent="makecontroller">
                                <div class="box bg-gradient-success-dark">
                                        <div class="box-body">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1">Make:</span>
                                            <input  wire:model="name" id="makecontroller" type="text" class="form-control" placeholder="Make:Controller Enter Name">
                                          <span class="input-group-btn">
                                              <button  type="submit" class="btn btn-success">Run</button>
                                          </span>
                                      </div>
                                    </div>
                                    <div class="flexbox px-4">
                                        <input type="checkbox" id="resource" class="filled-in chk-col-warning" value="1"wire:model="option">
                                        <label for="resource">Resource</label>
                                    </div>
                                  </div>
                                </form> 
                        </div>
                        <div class="col-lg-6">
                            <form wire:submit.prevent="makemodel">
                                <div class="box bg-gradient-secondary-dark">
                                        <div class="box-body">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1">Make:</span>
                                            <input  wire:model="name" id="makecontroller" type="text" class="form-control" placeholder="Make:Modle Enter Name">
                                          <span class="input-group-btn">
                                              <button  type="submit" class="btn btn-success">Run</button>
                                          </span>
                                      </div>
                                    </div>
                                    <div class="flexbox px-4">
                                        <input type="checkbox" id="resource1" class="filled-in chk-col-warning" value=""wire:model.lazy="option">
                                        <label for="resource1">Resource</label>
                                    </div>
                                  </div>
                                </form> 

                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="tab-pane" id="profile12" role="tabpanel">
                <div class="p-15">
                    <h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
                    <p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
                    <h3>Donec vitae laoreet neque, id convallis ante.</h3>
                </div>
            </div>
            <div class="tab-pane" id="messages12" role="tabpanel">
                <div class="p-15">
                    <h3>Donec vitae laoreet neque, id convallis ante.</h3>
                    <p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
                    <h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
                </div>
            </div>
            <div class="tab-pane" id="setting12" role="tabpanel">
                <div class="p-15">
                    <h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
                    <h3>Donec vitae laoreet neque, id convallis ante.</h3>
                    <p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
                </div>
            </div>
            <div class="tab-pane" id="about12" role="tabpanel">
                <div class="p-15">
                    <p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
                    <h3>Donec vitae laoreet neque, id convallis ante.</h3>
                    <h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
                </div>
            </div>
            <div class="tab-pane" id="contact12" role="tabpanel">
                <div class="p-15">
                    <h3>Donec vitae laoreet neque, id convallis ante.</h3>
                    <p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
                    <h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
                </div>
            </div>
        </div>
    </div>
    <!-- /.box-body -->
  </div>