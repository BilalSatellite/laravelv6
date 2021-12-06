<x-jet-form-section submit="updateProfileInformation">
    {{-- <x-slot name="title">
        {{ __('Profile Information') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Update your account\'s profile information and email address.') }}
    </x-slot> --}}

    <x-slot name="form">



        <!-- Profile Photo -->
        {{-- @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <div class="mb-3" x-data="{photoName: null, photoPreview: null}">
                <!-- Profile Photo File Input -->
                <input type="file" hidden
                       wire:model="photo"
                       x-ref="photo"
                       x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />

                <x-jet-label for="photo" value="{{ __('Photo') }}" />

                <!-- Current Profile Photo -->
                <div class="mt-2" x-show="! photoPreview">
                    <img src="{{ $this->user->profile_photo_url }}" class="rounded-circle" height="80px" width="80px">
                </div>

                <!-- New Profile Photo Preview -->
                <div class="mt-2" x-show="photoPreview">
                    <img x-bind:src="photoPreview" class="rounded-circle" width="80px" height="80px">
                </div>

                <x-jet-secondary-button class="mt-2 me-2" type="button" x-on:click.prevent="$refs.photo.click()">
                    {{ __('Select A New Photo') }}
				</x-jet-secondary-button>

				@if ($this->user->profile_photo_path)
                    <x-jet-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
                        <div wire:loading wire:target="deleteProfilePhoto" class="spinner-border spinner-border-sm" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>

                        {{ __('Remove Photo') }}
                    </x-jet-secondary-button>
                @endif

                <x-jet-input-error for="photo" class="mt-2" />
            </div>
        @endif

        <div class="w-md-75">
            <!-- Name -->
            <div class="mb-3">
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}" wire:model.defer="state.name" autocomplete="name" />
                <x-jet-input-error for="name" />
            </div>

            <!-- Email -->
            <div class="mb-3">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" type="email" class="{{ $errors->has('email') ? 'is-invalid' : '' }}" wire:model.defer="state.email" />
                <x-jet-input-error for="email" />
            </div>
        </div> --}}


            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <div class="col-12 col-lg-5 col-xl-4 box box-inverse bg-img" style="background-image: url(../images/gallery/full/1.jpg);"
                data-overlay="2"  x-data="{photoName: null, photoPreview: null}">
                <!-- Profile Photo File Input -->
                <input type="file" hidden
                       wire:model="photo"
                       x-ref="photo"
                       x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />




                <div class="box-body text-center pb-50">
                    <a href="#">
                        <!-- Current Profile Photo -->
                        <img class="avatar avatar-xxl avatar-bordered" src="{{ $this->user->profile_photo_url }}"  alt="">
                        @if ($this->user->photoPreview)
                        <img x-bind:src="photoPreview"class="avatar avatar-xxl avatar-bordered" alt="">
                        @endif

                    </a>
                    <h4 class="mt-2 mb-0"><a class="hover-primary text-white" href="#">Roben Parkar</a></h4>
                    <span><i class="fa fa-map-marker w-20"></i> Miami</span>
                </div>

                <ul class="box-body flexbox flex-justified text-center mb-1" data-overlay="4">
                    <li>
                        {{-- <span class="opacity-60">Followers</span><br>
                        <span class="font-size-20">8.6K</span> --}}
                             <x-jet-secondary-button class="" type="button" x-on:click.prevent="$refs.photo.click()">
                                {{ __('New Photo') }}
                            </x-jet-secondary-button>
                    </li>
                    <li>
                        {{-- <span class="opacity-60">Following</span><br>
                        <span class="font-size-20">8457</span> --}}
                        @if ($this->user->profile_photo_path)
                    <x-jet-secondary-button type="button" class="" wire:click="deleteProfilePhoto">
                        <div wire:loading wire:target="deleteProfilePhoto" class="spinner-border spinner-border-sm" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>

                        {{ __('Remove Photo') }}
                    </x-jet-secondary-button>
                @endif
                    </li>
                    {{-- <li>
                        <span class="opacity-60">Tweets</span><br>
                        <span class="font-size-20">2154</span>
                    </li> --}}
                </ul>
                @endif
            </div>

            <div class="col-12 col-lg-5 col-xl-4 w-md-75">
                <x-jet-action-message on="saved">
                    {{ __('Saved.') }}
                </x-jet-action-message>
                <!-- Name -->
                <div class="mb-3">
                    <x-jet-label for="name" value="{{ __('Name') }}" />
                    <x-jet-input id="name" type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}"
                        wire:model.defer="state.name" autocomplete="name" />
                    <x-jet-input-error for="name" />
                </div>

                <!-- Email -->
                <div class="mb-3">
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" type="email" class="{{ $errors->has('email') ? 'is-invalid' : '' }}"
                        wire:model.defer="state.email" />
                    <x-jet-input-error for="email" />
                </div>
            </div>
            <x-slot name="actions">
                <div class="d-flex align-items-baseline">
                    <x-jet-button>
                        <div wire:loading class="spinner-border spinner-border-sm" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>

                        {{ __('Save') }}
                    </x-jet-button>
                </div>
            </x-slot>



</x-slot>
</x-jet-form-section>
