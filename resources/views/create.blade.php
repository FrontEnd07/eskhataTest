<style>
    .row.form_content {
        margin-top: 100px;
    }
</style>
@include('Header.header')
<div class="h-100">
    <div class="container h-100">
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        <form class="row form_content" method="POST" action="{{ route('store') }}">
            @csrf
            <div class="col-md-12 col-xl-3">
                <div class="input-group col-md-3 col-xl-3">
                    <span class="input-group-text" id="addon-wrapping">OrderId</span>
                    <input type="text" name="OrderIdForm" class="@error('OrderIdForm') is-invalid @enderror form-control" placeholder="(int)" aria-label="(int)" aria-describedby="addon-wrapping" value="{{ old('OrderIdForm') }}">
                    @error('OrderIdForm')
                    <div>{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-12 col-xl-3">
                <div class="input-group col-md-3 col-xl-3">
                    <span class="input-group-text" id="addon-wrapping">Name</span>
                    <input type="text" name="NameForm" class="@error('NameForm') is-invalid @enderror form-control" placeholder="(int)" aria-label="Username" aria-describedby="addon-wrapping" value="{{ old('NameForm') }}">
                    @error('NameForm')
                    <div>{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-12 col-xl-3">
                <div class="input-group col-md-3 col-xl-3">
                    <span class="input-group-text" id="addon-wrapping">Quantity</span>
                    <input type="text" name="QuantityForm" class="@error('QuantityForm') is-invalid @enderror form-control" placeholder="(float)" aria-label="Username" aria-describedby="addon-wrapping" value="{{ old('QuantityForm') }}">
                    @error('QuantityForm')
                    <div>{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-12 col-xl-3">
                <div class="input-group col-md-3 col-xl-3">
                    <span class="input-group-text" id="addon-wrapping">Unit</span>
                    <input type="text" name="UnitForm" class="@error('UnitForm') is-invalid @enderror form-control" placeholder="(int)" aria-label="Username" aria-describedby="addon-wrapping" value="{{ old('UnitForm') }}">
                    @error('NameForm')
                    <div>{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <br />
            <br />
            <br />
            <hr>
            <p><button class="btn btn-warning" type="submit">Добавить</button></p>
        </form>
    </div>
</div>
@include("Footer.Footer")