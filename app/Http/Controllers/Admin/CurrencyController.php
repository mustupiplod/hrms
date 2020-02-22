<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\controller;
use Illuminate\Support\Facades\DB;
use App\Models\CurrencyMaster;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    public function index()
    {
        $currencys = DB::table('currency_masters')->get();
        return view('admin.currency.index',['currencys' => $currencys]);
    }

    public function create()
    {
        return view('admin.currency.create');
    }

    public function store(Request $Request)
    {
        $currency = new CurrencyMaster();
        $currency =CurrencyMaster::create($Request->all());
        $currency->save();
        return redirect('/admin/currency');
    }

    public function edit($id)
    {
        if($currency= CurrencyMaster::whereId($id)->first())
        {
            return view('admin.currency.edit',['currency'=>$currency]);
        }

    }

    public function update(Request $Request, $id)
    {
        $currency = CurrencyMaster::findOrFail($id);
        $currency->update($Request->all());
        $currency->save();
        return redirect('/admin/currency');
    }

    public function delete($id)
    {
        $currency = CurrencyMaster::find($id);
        $currency->delete();
        return redirect('/admin/currency');
    }

}
