<div>
    <div class="row">
        <div class="col col-sm-12 text-left">
            <livewire:author.papers.lists>
        </div>
    </div>
    @if(is_null($addPaperEnable))
        <div class="row">
            <div class="col col-sm-12 text-right">
                <x-adminlte-button wire:click="paperAdd_Enable" theme="success" icon="fa fa-plus-circle" label="Add paper"/>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col col-sm-12 text-right">
                <x-adminlte-button wire:click="paperAdd_Enable" class="btn btn-xs" theme="danger" icon="fa fa-minus-circle" label="Close"/>
                <livewire:author.papers.register>
            </div>
        </div>
    @endif
</div>
