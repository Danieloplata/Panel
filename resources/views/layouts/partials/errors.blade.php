@if($errors->any())
  <tr>
    <div class="alert alert-danger">
      <h3 class="panel-title">Errors</h3>
      <br />
      <ul>
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  </tr>
@endif