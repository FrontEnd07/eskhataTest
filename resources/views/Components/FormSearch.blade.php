<script>
    var today = new Date();
    var monthAgo = new Date(today.getFullYear(), today.getMonth() - 1, today.getDate());
    var formattedDate = (monthAgo.getMonth() + 1) + '/' + monthAgo.getDate() + '/' + monthAgo.getFullYear();

    console.log(monthAgo)
    $(document).ready(function() {
        $("#startdate").datepicker("setDate", formattedDate).on('changeDate', function(selected) {
            var minDate = new Date(selected.date.valueOf());
            $('#enddate').datepicker('setStartDate', minDate);
        });

        $("#enddate").datepicker("setDate", today)
            .on('changeDate', function(selected) {
                var maxDate = new Date(selected.date.valueOf());
                $('#startdate').datepicker('setEndDate', maxDate);
            });
        $('#multiple-select-optgroup-field').select2({
            theme: "bootstrap-5",
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: $(this).data('placeholder'),
            closeOnSelect: false,
        });
    });
</script>
<div class="row text-center">
    <div class="input-group date col" id="startdate" data-provide="setStartDate">
        <input type="text" class="form-control" name="startdate" value="{{ old('startdate') }}">
        <div class="input-group-addon">
            <span class="input-group-text bg-light d-block">
                <i class="fa fa-calendar"></i>
            </span>
        </div>
    </div>
    <div class="input-group date col" id="enddate" data-provide="setEndDate">
        <input type="text" class="form-control" name="enddate" value="{{ old('enddate') }}">
        <div class="input-group-addon">
            <span class="input-group-text bg-light d-block">
                <i class="fa fa-calendar"></i>
            </span>
        </div>
    </div>
</div>
<div class="row">
    <div class="d-flex justify-content-between">
        <div class="col-md-12 col-xl-4">
            <select id="multiple-select-optgroup-field" class="form-select col" id="multiple-select-field" data-placeholder="поиск поставщика" multiple>
                @foreach ($provider as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <button type="button" class="btn btn-primary">Поиск</button>
        </div>
    </div>
</div>