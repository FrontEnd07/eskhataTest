<style>
    .form_content {
        margin-top: 100px;
    }
</style>
@include('Header.header')
<div class="h-100">
    <div class="container h-100">
        <form class="form_content">
            @csrf
            <div class="fields">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="input-group">
                            <select class="form-select" name="provider" aria-label="Default select example">
                                @foreach ($provider as $item)
                                <option value="{{ $item->id }}" {{ $item->id === 0 ? 'selected' : '' }}>{{ $item->name }}</option>
                                @endforeach
                            </select>
                            <span class="input-group-text" id="addon-wrapping">поставщики</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-xl-4">
                        <div class="input-group">
                            <input type="text" error="NameForm.0" name="NameForm[0]" class="@error('NameForm.0') is-invalid @enderror form-control" placeholder="(int)" />
                            <span class="input-group-text" id="addon-wrapping">Name</span>
                        </div>
                    </div>
                    <div class="col-md-12 col-xl-4">
                        <div class="input-group">
                            <input type="text" name="QuantityForm[0]" error="QuantityForm.0" class="@error('QuantityForm.0') is-invalid @enderror form-control" placeholder="(float)" />
                            <span class="input-group-text" id="addon-wrapping">Quantity</span>
                        </div>
                    </div>
                    <div class="col-md-12 col-xl-4">
                        <div class="input-group">
                            <input type="text" name="UnitForm[0]" error="UnitForm.0" class="@error('UnitForm.0') is-invalid @enderror form-control" placeholder="(int)" />
                            <span class="input-group-text" id="addon-wrapping">Unit</span>
                        </div>
                    </div>
                </div>
            </div>
            <br />
            <hr>
            <span>
                <button class="btn btn-warning" type="submit">Добавить</button>
            </span>
            <span>
                <div class="btn btn-warning" id="add-input">Добавить поле ввода</div>
            </span>
        </form>
    </div>
</div>
<script>
    function closed(key) {
        document.querySelector(`[close="${key}"]`).remove();
    }
    $(document).ready(function() {
        var i = 1;
        $('#add-input').click(function() {
            var newInput = `<div class="row" close="${i}">
                    <div class="col-md-12 col-xl-4">
                        <div class="input-group">
                            <input type="text" error="NameForm.${i}" name="NameForm[${i}]" class="@error('NameForm.${i}') is-invalid @enderror form-control" placeholder="(int)" />
                            <span class="input-group-text" id="addon-wrapping">Name</span>
                        </div>
                    </div>
                    <div class="col-md-12 col-xl-4">
                        <div class="input-group">
                            <input type="text" error="QuantityForm.${i}" name="QuantityForm[${i}]" class="@error('QuantityForm.${i}') is-invalid @enderror form-control" placeholder="(float)" />
                            <span class="input-group-text" id="addon-wrapping">Quantity</span>
                        </div>
                    </div>
                    <div class="col-md-12 col-xl-4">
                        <div class="input-group">
                            <input type="text" error="UnitForm.${i}" name="UnitForm[${i}]" class="@error('UnitForm.${i}') is-invalid @enderror form-control" placeholder="(int)" />
                            <span onclick="closed(${i})" class="input-group-text text-white bg-danger" id="addon-wrapping"><i class="fa fa-times"></i></span>
                        </div>
                    </div>
                </div>`;
            $('.fields').append(newInput);
            i++;
        });

        $('.form_content').submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: `{{ route('store') }}`,
                data: $('.form_content').serialize(),
                success: function(response) {
                    $('.fields').append('<div style="margin-top: 10px" class="alert alert-success">Заказ успешно сохранен.</div>');
                    setTimeout(() => {
                        window.location.replace('/create')
                    }, 2000);
                },
                error: function(xhr, status, error) {
                    // Обработка ошибки
                    var errors = xhr.responseJSON.errors;
                    $.each(errors, function(key, value) {
                        var input = $('.form_content [error="' + key + '"]');
                        input.addClass('is-invalid');
                        input.closest('.input-group').append('<div class="invalid-feedback">' + value[0] + '</div>');
                    });
                    setTimeout(() => {
                        $.each(errors, function(key, value) {
                            var input = $('.form_content [error="' + key + '"]');
                            input.removeClass('is-invalid');
                            $(".invalid-feedback").remove()
                        });
                    }, 3000);
                }
            });
        });
    });
</script>
@include("Footer.Footer")