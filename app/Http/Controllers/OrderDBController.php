<?php

namespace App\Http\Controllers;

use \App\Models\orderDB;
use \App\Models\provider;
use \App\Models\orderitem;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Requests\OrderRequest;
use Illuminate\Support\Facades\Validator;

use function GuzzleHttp\Promise\all;

class OrderDBController extends Controller
{
    public function index()
    {
        $provider = provider::all();
        return view('order', ['provider' => $provider]);
    }

    public function create()
    {
        $provider = provider::all();
        return view('create', ['provider' => $provider]);
    }

    public function store(OrderRequest $request)
    {
        $orderitem = new orderitem();
        $orderDB = new orderDB();
        $now = Carbon::now();

        $orderDB->date = $now->toDateTimeString();
        $orderDB->providerId = $request->provider;
        $orderDB->save();
        $orderid = $orderDB->latest()->first()->id;
        foreach ($request->NameForm as $key => $val) {
            $item[] = [
                "orderId" => $orderid,
                "name" => $request->NameForm[$key],
                "quantity" => $request->QuantityForm[$key],
                "unit" => $request->UnitForm[$key],
            ];
        }
        $orderitem->insert($item);

        return response()->json(["status" => 200]);
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
