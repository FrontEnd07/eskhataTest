@include('Header.header')
@foreach ($data as $val)
<div>{{$val->id}}</div>
@endforeach
<div class="container tableContent">
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Номер заказа</th>
                    <th scope="col">Имя поставщика</th>
                    <th scope="col">Дата</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $key => $val)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $val->orderdb_id }}</td>
                    <td>{{ $val->name }}</td>
                    <td>{{ $val->date }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@include("Footer.Footer")