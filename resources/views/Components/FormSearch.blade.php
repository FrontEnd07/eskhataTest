<script>
    $(document).ready(function() {
        $("#startdate").datepicker({
            todayBtn: 1,
            autoclose: true,
        }).on('changeDate', function(selected) {
            var minDate = new Date(selected.date.valueOf());
            $('#enddate').datepicker('setStartDate', minDate);
        });

        $("#enddate").datepicker()
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
        <input type="text" class="form-control">
        <div class="input-group-addon">
            <span class="input-group-text bg-light d-block">
                <i class="fa fa-calendar"></i>
            </span>
        </div>
    </div>
    <div class="input-group date col" id="enddate" data-provide="setEndDate">
        <input type="text" class="form-control">
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
                <option>Christmas Island</option>
                <option>South Sudan</option>
                <option>Jamaica</option>
                <option>Kenya</option>
                <option>French Guiana</option>
            </select>
        </div>
        <div>
            <button type="button" class="btn btn-primary">Поиск</button>
        </div>
    </div>
</div>