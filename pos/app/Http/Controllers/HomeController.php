<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $kd_transaction = Transaksi::select('kode_transaksi')
        ->latest()
        ->distinct()
        ->take(5)
        ->get();
        $transactions = Transaksi::all();
        $array = array();
        foreach ($transactions as $no => $transaction) {
            array_push($array, $transactions[$no]->created_at->toDateString());
        }
        $dates = array_unique($array);
        rsort($dates);

        $arr_ammount = count($dates);
        $incomes_data = array();
        if ($arr_ammount > 7) {
            for ($i = 0; $i < 7; $i++) {
                array_push($incomes_data, $dates[$i]);
            }
        } elseif ($arr_ammount > 0) {
            for ($i = 0; $i < $arr_ammount; $i++) {
                array_push($incomes_data, $dates[$i]);
            }
        }
        $incomes = array_reverse($incomes_data);
        $kode_transaksi_dis = Transaksi::select('kode_transaksi')
        ->distinct()
        ->get();
        $kode_transaksi_dis_daily = Transaksi::whereDate('created_at', Carbon::now())
        ->select('kode_transaksi')
        ->distinct()
        ->get();
        $all_incomes = 0;
        $incomes_daily = 0;
        foreach ($kode_transaksi_dis as $kode) {
            $transaksi = Transaksi::where('kode_transaksi', $kode->kode_transaksi)->first();
            $all_incomes += $transaksi->subtotal;
        }
        foreach ($kode_transaksi_dis_daily as $kode) {
            $transaksi_daily = Transaksi::where('kode_transaksi', $kode->kode_transaksi)->first();
            $incomes_daily += $transaksi_daily->subtotal;
        }
        $customers_daily = count($kode_transaksi_dis_daily);
        $min_date = Transaksi::min('created_at');
        $max_date = Transaksi::max('created_at');
 
        return view('dashboard', compact('kd_transaction', 'incomes', 'incomes_daily', 'customers_daily', 'all_incomes', 'min_date', 'max_date'));
    }
}
