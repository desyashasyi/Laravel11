<div>
    <div class="row">
        <div class="col col-sm-12 text-left">
            <div class="row">
                <div class="col col-sm-12 text-left">
                    <b>
                        Paper Registration
                    </b>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col col-sm-10 text-left">
                    {{$titleData}}
                    </input>
                    <x-adminlte-textarea wire:model.live="titleData" label="Title" name="title" placeholder="Please write your paper title!"/>
                </div>
            </div>
            <div class="row">
                <div class="col col-sm-12 text-left">
                    {{$abstract}}
                    <x-adminlte-textarea wire:model="abstract" label="Abstract" name="title" placeholder="Please write your paper abstract!"/>
                </div>
            </div>
            <div class="row">
                <div class="col col-sm-12 text-right">
                    <x-adminlte-button wire:click="save" theme="success" class="btn btn-sm" icon="fa fa-save" label="Save"/>
                </div>
            </div>
        </div>
        
    </div>
</div>

