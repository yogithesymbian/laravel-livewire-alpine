<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateStudentModal" tabindex="-1" role="dialog" aria-labelledby="updateStudentLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="updateStudentLabel">Update Student</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <input type="hidden" wire:model="ids">
          <div class="form-group">
            <label for="firstname">First Name</label>
            <input type="text" name="firstname" class="form-control" wire:model="firstname">
            @error('firstname')
                <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="lastname">Last Name</label>
            <input type="text" name="lastname" class="form-control" wire:model="lastname">
            @error('lastname')
                <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control" wire:model="email">
            @error('email')
                <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" name="phone" class="form-control" wire:model="phone">
            @error('phone')
                <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" wire:click.prevent="resetInputFields()">Close</button>
        <button type="button" class="btn btn-primary" wire:click.prevent="update()">Save changes</button>
      </div>
    </div>
  </div>
</div>