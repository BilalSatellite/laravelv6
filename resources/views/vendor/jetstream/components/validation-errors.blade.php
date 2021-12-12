@if ($errors->any())
    <div {!! $attributes->merge(['class' => 'alert alert-danger text-sm']) !!} role="alert">
        {{-- <div class="font-weight-bold">{{ __('Whoops! Something went wrong.') }}</div> --}}

        
            @foreach ($errors->all() as $error)
               <small>
                {{ $error }}
                </small> 
            @endforeach
        
    </div>
@endif
