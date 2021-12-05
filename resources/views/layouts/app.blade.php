<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

       

        <!-- Styles -->
        {{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}
         <!-- Panel Styles -->
     <link rel="stylesheet" href="{{ mix('css/panel/app.css') }}">
	 <link rel="stylesheet" href="{{ asset('css/panel/vendor.css') }}">

        @livewireStyles

        <!-- Scripts -->
        {{-- <script src="{{ mix('js/app.js') }}" defer></script> --}}
    </head>
    {{-- <body class="font-sans antialiased bg-light">
        <x-jet-banner />
        @livewire('navigation-menu')

        <!-- Page Heading -->
        <header class="d-flex py-3 bg-white shadow-sm border-bottom">
            <div class="container">
                {{ $header }}
            </div>
        </header>

        <!-- Page Content -->
        <main class="container my-5">
            {{ $slot }}
        </main>

        @stack('modals')

        @livewireScripts

        @stack('scripts')
    </body> --}}
    <body class="hold-transition dark-skin sidebar-mini theme-primary fixed">
	
        <div class="wrapper">
         <!-- Header -->
          <x-panel.mainHeader/>
          <!-- Left side column. contains the logo and sidebar -->
          <x-panel.mainSidebar/>
          <!-- Content Wrapper. Contains page content -->
          <div class="content-wrapper">
              <div class="container-full">
                  <!-- Content Header (Page header) -->
                  @isset($header)
                    <div class="content-header">
                        <div class="d-flex align-items-center">
                            <div class="mr-auto">
                                <h3 class="page-title">{{ $header }}</h3>
                                
                                <div class="d-inline-block align-items-center">
                                    <nav>
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="mdi mdi-home-outline"></i></a></li>
                                            <li class="breadcrumb-item active" aria-current="page">{{ $header }}</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                  @endisset
                  
                  
                <!-- Main content -->
                {{ $slot }}
                <!-- /.content -->
              </div>
          </div>
          <!-- /.content-wrapper -->
          <x-panel.footer/>
        </div>
        <!-- ./wrapper -->
              
             
            
            
        <!-- Scripts -->
        <script src="{{ asset('js/panel/vendors.min.js') }}" ></script>
        <script src="{{ asset('assets/icons/feather-icons/feather.min.js') }}" ></script>
        <script src="{{ asset('js/panel/template.js') }}" ></script>
        @stack('modals')

        @livewireScripts

        @stack('scripts')
        </body>
</html>
