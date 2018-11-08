<div class="modal fade" id="confirmationMessage" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><strong>Delete panel</strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>This action cannot be undone. Please confirm.</p>
      </div>
      <div class="modal-footer bg-secondary">
        <!-- route('deletePanel', $panel->id) -->
        <a href="{{ route('deletePanel', $panel->id) }}"<button type="button" class="btn btn-success pull-left">Yes, delete this</button></a>
        <button type="button" class="btn btn-danger" data-dismiss="modal">No, don't delete!</button>
      </div>
    </div>
  </div>
</div>