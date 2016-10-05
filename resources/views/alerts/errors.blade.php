@if(Session::has('message-error'))
  <div id="myAlert" class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" id="linkClose" class="close" data-dismiss="alert" aria-label="close">
      <span aria-hidden="true">&times;</span>
    </button>
    {{Session::get('message-error')}}
  </div>
@endif
