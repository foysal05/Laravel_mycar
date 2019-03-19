@if ($errors->any())
    <div class="alert alert-danger">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <ul>
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </ul>
    </div>
@endif


@if (Session::has('car_delete_success'))
    <div class="alert alert-success" role="alert">
         <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <p>{{Session::get('car_delete_success')}}</p>
    </div>
@endif