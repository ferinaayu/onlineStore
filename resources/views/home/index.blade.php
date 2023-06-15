@extends('layouts.app')

@section('title', $viewData["title"])
@section('content')

<div class="row">
<div class="col-md-6 col-lg-4 mb-2">
<img src="{{ asset('/img/img1.jpg') }}" class="img-fluid rounded">
</div>
<div class="col-md-6 col-lg-4 mb-2">
<img src="{{ asset('/img/img2.jpg') }}" class="img-fluid rounded">
</div>
<div class="col-md-6 col-lg-4 mb-2">
<img src="{{ asset('/img/img3.jpg') }}" class="img-fluid rounded"> </div>
</div>

@endsection
