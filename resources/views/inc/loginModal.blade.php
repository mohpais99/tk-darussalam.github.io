<!-- Modal Structure -->
<div id="terms" class="modal">
  <div class="modal-content">
    <h4>Add an Image</h4>

    <div class="row">
      <form class="col s12">
        <div class="row modal-form-row">
          <div class="input-field col s12">
            <input id="image_url" type="text" class="validate">
            <label for="image_url">Image URL</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="image_title" type="text" class="validate">
            <label for="image_title">Title</label>
          </div>
        </div>       
        <div class="row">
          <div class="input-field col s12">
            <textarea id="image_description" type="text" class="materialize-textarea validate"></textarea>
            <label for="image_description">Description</label>
          </div>
        </div>             
      </form>
    </div>
  </div>
  <div class="modal-footer">
    <a class=" modal-action modal-close waves-effect waves-green btn-flat">Submit</a>
  </div>
</div>