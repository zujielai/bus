<form class="row" action="{{route('addQr')}}" method="post" enctype="multipart/form-data"><br> @csrf
<div class="col-12">
    <label for="image" class="form-label">Image:</label>
    <input name="image" type="file" class="form-control">
  </div>
  <button type="submit" class="btn btn-info">Add Schedule</button>