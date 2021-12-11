<div>




    <div class="input-group">
       <span class="input-group-addon" id="basic-addon1">Mack</span>
        {{-- <input  id="makecontroller" type="text" class="form-control"  wire:model.defer="command"> --}}
        <select name="systems" wire:model.defer="command" class="form-control" >
            <option value=""></option>
              @foreach ($commands as $key)
                <option value="{{ $key}}">{{ $key }}</option>
              @endforeach
          </select>
        <span class="input-group-addon" id="basic-addon1">controller Name</span>
        <input id="argcontroller" type="text" class="form-control"  wire:model.defer="name">
        <button wire:click="run"class="btn btn-success"><i class="fa fa-check"></i>Run</button>
    </div>
<br>
<br>
<br>
<p>{{ $output }}</p>

</div>
