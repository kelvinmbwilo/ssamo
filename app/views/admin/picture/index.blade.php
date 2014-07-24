@extends("admin.master")

@section('contents')
    <div class="tab-pane fade in active" id="home">
        <div class="col-sm-12" id="listuser">
            @include('admin.picture.list')
        </div>
    </div>
@stop