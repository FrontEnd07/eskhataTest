@include('Header.header')
<div class="intro">
    <div class="container">
        @include('Components.FormSearch')
    </div>
</div>

@if ($errors->any())
<div class="container">
    <div class="row">
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endif
@include("Footer.Footer")