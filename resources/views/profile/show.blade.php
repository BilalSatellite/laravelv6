<x-app-layout>
    <x-slot name="header">
        {{ __('Profile') }}
    </x-slot>

    {{-- <div>
        @if (Laravel\Fortify\Features::canUpdateProfileInformation())
            @livewire('profile.update-profile-information-form')

            <x-jet-section-border />
        @endif

        @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
            @livewire('profile.update-password-form')

            <x-jet-section-border />
        @endif

        @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
            @livewire('profile.two-factor-authentication-form')

            <x-jet-section-border />
        @endif

        @livewire('profile.logout-other-browser-sessions-form')

        @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
            <x-jet-section-border />

            @livewire('profile.delete-user-form')
        @endif
    </div> --}}
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-12 col-lg-5 col-xl-4">

                <div class="box box-inverse bg-img" style="background-image: url(../images/gallery/full/1.jpg);"
                    data-overlay="2">


                    <div class="box-body text-center pb-50">
                        <a href="#">
                            <img class="avatar avatar-xxl avatar-bordered"  src="{{ auth()->user()->profile_photo_url }}" alt="{{ auth()->user()->name }}">
                        </a>
                        <h4 class="mt-2 mb-0"><a class="hover-primary text-white" href="#">{{ auth()->user()->name }}</a></h4>
                        <span><i class="fa fa-map-marker w-20"></i> Miami</span>
                    </div>

                    <ul class="box-body flexbox flex-justified text-center" data-overlay="4">
                        <li>
                            <span class="opacity-60">Followers</span><br>
                            <span class="font-size-20">8.6K</span>
                        </li>
                        <li>
                            <span class="opacity-60">Following</span><br>
                            <span class="font-size-20">8457</span>
                        </li>
                        <li>
                            <span class="opacity-60">Tweets</span><br>
                            <span class="font-size-20">2154</span>
                        </li>
                    </ul>
                </div>

                <!-- Profile Image -->
                <div class="box">
                    <div class="box-body box-profile">
                        <div class="row">
                            <div class="col-12">
                                <div>
                                    <p>Email :<span class="text-gray pl-10">{{ auth()->user()->email }}</span> </p>
                                    <p>Phone :<span class="text-gray pl-10">+11 123 456 7890</span></p>
                                    <p>Address :<span class="text-gray pl-10">123, Lorem Ipsum, Florida, USA</span></p>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="pb-15">
                                    <p class="mb-10">Social Profile</p>
                                    <div class="user-social-acount">
                                        <button class="btn btn-circle btn-social-icon btn-facebook"><i
                                                class="fa fa-facebook"></i></button>
                                        <button class="btn btn-circle btn-social-icon btn-twitter"><i
                                                class="fa fa-twitter"></i></button>
                                        <button class="btn btn-circle btn-social-icon btn-instagram"><i
                                                class="fa fa-instagram"></i></button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- /.box-body -->
                </div><!-- /.box -->
            </div>
            <div class="col-12 col-lg-7 col-xl-8">

                <div class="nav-tabs-custom box-profile">
                    <ul class="nav nav-tabs">
                        <li><a class="active" href="#usertimeline" data-toggle="tab">Timeline</a></li>
                        <li><a href="#activity" data-toggle="tab">Activity</a></li>
                        <li><a href="#settings" data-toggle="tab">Settings</a></li>
                    </ul>

                    <div class="tab-content">

                        <div class="active tab-pane" id="usertimeline">
                            <div class="box p-15">
                                @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                                  @livewire('profile.update-profile-information-form')
                                 @endif


                            </div>
                        </div>
                        <!-- /.tab-pane -->

                        <div class="tab-pane" id="activity">

                            <div class="box p-15">

                            </div>

                        </div>
                        <!-- /.tab-pane -->

                        <div class="tab-pane" id="settings">

                            <div class="box p-15">
                                {{-- <form class="form-horizontal form-element col-12">
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 control-label">Name</label>

                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="inputName" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="inputEmail" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPhone" class="col-sm-2 control-label">Phone</label>

                                        <div class="col-sm-10">
                                            <input type="tel" class="form-control" id="inputPhone" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputExperience" class="col-sm-2 control-label">Experience</label>

                                        <div class="col-sm-10">
                                            <textarea class="form-control" id="inputExperience"
                                                placeholder=""></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputSkills" class="col-sm-2 control-label">Skills</label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputSkills" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="ml-auto col-sm-10">
                                            <div class="checkbox">
                                                <input type="checkbox" id="basic_checkbox_1" checked="">
                                                <label for="basic_checkbox_1"> I agree to the</label>
                                                &nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Terms and Conditions</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="ml-auto col-sm-10">
                                            <button type="submit" class="btn btn-rounded btn-success">Submit</button>
                                        </div>
                                    </div>
                                </form> --}}
                                <x-jet-label for="update-password-form" value="{{ __('Update Password:') }}" />

                                 @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                                 @livewire('profile.update-password-form')
                                @endif
                                <x-jet-section-border />
                                @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                                @livewire('profile.two-factor-authentication-form')
                                @endif
                                <x-jet-section-border />
                                @livewire('profile.logout-other-browser-sessions-form')
                              @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                              <x-jet-section-border />
                             @livewire('profile.delete-user-form')
                            @endif
                            </div>
                        </div>
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
        </div>
        <!-- /.row -->

    </section>
    <!-- /.content -->
</x-app-layout>
