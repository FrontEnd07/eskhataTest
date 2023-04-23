@include('Header.header')
@foreach ($data as $val)
<div>{{$val->id}}</div>
@endforeach
<div class="container tableContent">
    <div class="row">
        <table class="table">
            @if (count($data) > 0)
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Номер заказа</th>
                    <th scope="col">Имя поставщика</th>
                    <th scope="col">Дата</th>
                    <th scope="col">Действия</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $key => $val)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $val->orderdb_id }}</td>
                    <td>{{ $val->name }}</td>
                    <td>{{ $val->date }}</td>
                    <td class="text-end">
                        <a href="{{ route('order.destroy', ['order' => $val->orderdb_id], false, 'delete') }}" class="btn btn-danger">
                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                        </a>
                        <a href="{{ route('order.edit', ['order' => $val->orderdb_id]) }}" class="btn btn-primary">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            @else
            <p class="text-center">Нет заказов!</p>
            @endif
        </table>
    </div>
</div>
@include("Footer.Footer")