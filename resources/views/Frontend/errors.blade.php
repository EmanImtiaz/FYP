<div class="container mt-2">
    @if ($errors->any())
       <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
        <div>{{$error}}</div>
        @endforeach
       </div>
    @endif
</div>
