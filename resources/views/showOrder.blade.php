@include('Header.header')
<div class="container">
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">quantity</th>
                    <th scope="col">unit</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $key => $val)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $val->name }}</td>
                    <td>{{ $val->quantity }}</td>
                    <td>{{ $val->unit }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@include("Footer.Footer")