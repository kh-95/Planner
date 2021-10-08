

<button type="button" class="btn btn-success" data-toggle="modal" data-target="#createModal">Create</button>
<div wire:ignore.self id="createModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="createModalLabel">Add Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true close-btn">×</span>
            </button>

        </div>
        <div class="modal-body">
            <form>

<input type="hidden"   wire:model="project_id" value="$project_id" >

                <div class="form-group">
                    <label for="exampleFormControlInput1"> Name</label>
                    <input type="text" id="exampleFormControlInput1" class="form-control"  placeholder="EnterName" wire:model="name" />
                    @error('name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>


<div class="form-group">
                        <label for="exampleFormControlInput1"> Start_Date</label>
                        <input type="datetime-local" id="exampleFormControlInput1" class="form-control"  placeholder="Enterstart_date" wire:model="start_date" />
                        @error('start_date')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
   

                <button wire:click.prevent="store()" class="btn btn-success">Save</button>
                <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
            </form>
        </div>
    </div>
</div>
</div>
