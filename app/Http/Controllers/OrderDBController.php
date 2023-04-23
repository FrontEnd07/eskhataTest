<?php

namespace App\Http\Controllers;

use \App\Models\orderDB;
use \App\Models\provider;
use \App\Models\orderitem;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Requests\OrderRequest;
use App\Http\Requests\filterseach;
use Illuminate\Support\Facades\Validator;

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

    public function show(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'provider' => 'required',
            'startdate' => 'required|date|date_format:m/d/Y',
            'enddate' => 'required|date|date_format:m/d/Y',
        ]);

        if ($validator->fails()) {
            return redirect('/')
                ->withErrors($validator)
                ->withInput();
        }

        $orderDB = new orderDB();
        $startdate = Carbon::createFromFormat('m/d/Y', $request->startdate)->format('Y-m-d');
        $enddate = Carbon::createFromFormat('m/d/Y', $request->enddate)->format('Y-m-d');

        $data = $orderDB
            ->whereIn('orderdb.providerId', $request->provider)
            ->whereDate('orderdb.created_at', '>=', $startdate)
            ->select('orderdb.id as orderdb_id', 'provider.id as provider_id', "number", "date", "name")
            ->whereDate('orderdb.created_at', '<=', $enddate)
            ->join('provider', 'orderdb.providerId', '=', 'provider.id')->get();

        // dd($data);

        return view('show', ['data' => $data]);
    }


    public function edit($id)
    {
        $orderitem = new orderitem();
        $data = $orderitem->where("orderId", $id)->get();
        // dd($data);
        return view('showOrder', ['data' => $data]);
    }
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $orderDB = new orderDB();
        $orderitem = new orderitem();
        $orderId = $orderDB->findOrFail($id)->id;
        $orderDB->find($id)->delete();
        $orderitem->where('orderId', $orderId)->delete();

        return redirect("/");
    }
}
