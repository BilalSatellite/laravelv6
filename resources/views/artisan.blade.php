<x-app-layout>
  <x-slot name="header">
    {{ __('Artisan Commands') }}
</x-slot> 
<!-- Main content -->
<section class="content">
 <div class="row">
    
     <div class="col-12">
        
             
             <div class="box-body">
        <livewire:panel.admin.artisan-gui/>
              
             </div>
         </div>  
     </div>
 </div>
</section>
<!-- /.content --> 
</x-app-layout>