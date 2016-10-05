@if(Session::has('message'))
  <div id="myAlert" class="alert alert-success alert-dismissible" role="alert">
    <button type="button" id="linkClose" class="close" data-dismiss="alert" aria-label="close">
      <span aria-hidden="true">&times;</span>
    </button>
    {{Session::get('message')}}
  </div>
@endif
