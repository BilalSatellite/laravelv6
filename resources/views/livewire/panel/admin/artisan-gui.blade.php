<div>
    <form wire:submit.prevent="run">
        <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">Command Name</span>
        <input id="makecontroller" type="text" class="form-control"  wire:model.defer="command">
        <span class="input-group-addon" id="basic-addon1">controller Name</span>
        <input id="argcontroller" type="text" class="form-control"  wire:model.defer="name">
        <button class="btn btn-success"><i class="fa fa-check"></i>Run</button>
    </div>
    </form>
<p>{{ $output }}</p>

</div>
