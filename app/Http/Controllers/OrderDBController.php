<?php

namespace App\Http\Controllers;

use \App\Models\orderDB;
use \App\Models\orderitem;
use Illuminate\Http\Request;
use App\Http\Requests\OrderRequest;
use Illuminate\Support\Facades\Validator;

class OrderDBController extends Controller
{
    public function index()
    {
        $orders = OrderDB::all();
        return view('order', ['orders' => $orders]);
    }

    public function create()
    {
        return view('create', ['orders' => "test"]);
    }

    public function store(OrderRequest $request)
    {
        // Данные валидны, сохраняем в базу данных
        $item = new orderitem();
        $item->orderId = $request->OrderIdForm;
        $item->name = $request->NameForm;
        $item->quantity = $request->QuantityForm;
        $item->unit = $request->UnitForm;
        $item->save();

        return redirect()->route('create')->with('success', 'Заказ успешно сохранен.');;
    }

    public function show($id)
    {
        // 
    }


    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
