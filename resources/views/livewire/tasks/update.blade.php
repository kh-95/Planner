
<div wire:ignore.self id="updateModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
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


                <div class="form-group">
                    <label for="exampleFormControlInput1"> Name</label>
                    <input type="text" id="exampleFormControlInput1" class="form-control"  placeholder="EnterName" wire:model="name" />
                    @error('name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>


<div class="form-group">
                        <label for="exampleFormControlInput1">Number_Hours</label>
                        <input type="number" id="exampleFormControlInput1" class="form-control"  placeholder="Enter number_hours" wire:model="num_hours" />
                        @error('number_hours')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Order</label>
                        <input type="number" id="exampleFormControlInput1" class="form-control"  placeholder="EnterOrder" wire:model="order" />
                        @error('order')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">

<label>Type</label>

<select wire:model="type" class="form-control"  >

<option> </option>



<option value="task" >Task</option>
<option value="free">Free</option>



</select>


@error('type')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
</div>



   <button wire:click.prevent="update()" class="btn btn-success">Save</button>
    <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
            </form>
        </div>
    </div>
</div>
</div>
