<div class="container">
  <section class="page-section" id="services">
      <div class="container">
        <h2 class="text-center mt-0">Gallery</h2>
        <hr class="divider my-4">
        <button type="button" class="btn btn-default btn-primary pull-right" data-toggle="modal" data-target="#myModal" name="button">Add</button>
        <br>
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center">
            <div class="mt-5">
              <i class="fas fa-4x fa-gem text-primary mb-4"></i>
              <h3 class="h4 mb-2">Sturdy Themes</h3>
              <p class="text-muted mb-0">Our themes are updated regularly to keep them bug free!</p>
            </div>
          </div>
        </div>
      </div>
    </section>

</div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Form</h4>
      </div>
      <div class="modal-body">
        <form id="addForm" action="javascript:;" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="Name">Name</label>
            <input type="text" class="form-control" name="name" value="">
          </div>
          <div class="form-group">
            <label for="Photo">Photo</label>
            <input type="file" class="form-control" name="photo" value="">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
