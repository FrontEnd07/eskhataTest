@include('Header.header')
<div class="h-100" style="margin-top: 40px;">
    <div class="container h-100">
        <form class="form_content" method="POST" action="{{ route('order.update.post', ['order' => $order[0]->id]) }}">
            @csrf
            <div class="fields">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="input-group">
                            <select class="form-select" name="provider" aria-label="Default select example">
                                @foreach ($provider as $itemprovider)
                                <option value="{{ $itemprovider->id }}" {{ $itemprovider->id === $order[0]->providerId ? 'selected' : '' }}>{{ $itemprovider->name }}</option>
                                @endforeach
                            </select>
                            <span class="input-group-text" id="addon-wrapping">поставщики</span>
                        </div>
                    </div>
                </div>
                @foreach ($item as $key => $item)
                <div class="row">
                    <div class="col-md-12 col-xl-4">
                        <div class="input-group">
                            <input type="text" value="{{ $item->name }}" name="NameForm[{{ $item->id }}]" class="@error('NameForm.$item->id') is-invalid @enderror form-control" placeholder="(int)" />
                            <span class="input-group-text" id="addon-wrapping">Name</span>
                        </div>
                    </div>
                    <div class="col-md-12 col-xl-4">
                        <div class="input-group">
                            <input type="text" name="QuantityForm[{{ $item->id }}]" class="@error('QuantityForm.$item->id') is-invalid @enderror form-control" placeholder="(float)" value="{{ $item->quantity }}" />
                            <span class="input-group-text" id="addon-wrapping">Quantity</span>
                        </div>
                    </div>
                    <div class="col-md-12 col-xl-4">
                        <div class="input-group">
                            <input type="text" value="{{ $item->unit }}" name="UnitForm[{{ $item->id }}]" class="@error('UnitForm.$item->id') is-invalid @enderror form-control" placeholder="(int)" />
                            <span class="input-group-text" id="addon-wrapping">Unit</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <br />
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            @endif
            <hr>
            <span>
                <button class="btn btn-warning" type="submit">Изменить</button>
            </span>
        </form>
    </div>
</div>
@include("Footer.Footer")