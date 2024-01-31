<?php

namespace App\Http\Controllers;

use App\Models\Tax;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaxController extends Controller
{
    const REDIRECT_VIEW = "/";
    const TITLE = "Pencatatan Pajak";

    public function index()
    {
        if (Auth::check()) {
            return view('taxes', [
                'taxes' => Tax::latest('created_at')->get(),
                'title' => self::TITLE,
            ]);
        }
   
        return redirect('login')->withSuccess(AuthController::NOT_ALLOWED);
    }

    public function addPage()
    {
        if (Auth::check()) {
            return view('add', [
                'title' => self::TITLE,
            ]);
        }
   
        return redirect('login')->withSuccess(AuthController::NOT_ALLOWED);
    }

    public function addData(Request $request)
    {
        if (Auth::check()) {
            $this->validate($request, [
                'penjualan' => 'required',
                'beban_administrasi' => 'required',
                'beban_pemasaran' => 'required',
                'beban_lainnya' => 'required',
                'pendapatan_lain' => 'required',
                'total' => 'required',
                'total_pajak' => 'required',
            ]);

            Tax::create([
                'penjualan' => $request->input('penjualan'),
                'beban_administrasi' => $request->input('beban_administrasi'),
                'beban_pemasaran' => $request->input('beban_pemasaran'),
                'beban_lainnya' => $request->input('beban_lainnya'),
                'pendapatan_lain' => $request->input('pendapatan_lain'),
                'total' => $request->input('total'),
                'total_pajak' => $request->input('total_pajak'),
            ]);
            
            return redirect(self::REDIRECT_VIEW);
        }
   
        return redirect('login')->withSuccess(AuthController::NOT_ALLOWED);
    }

    public function updateData(Request $request)
    {
        if (Auth::check()) {
            $id = $request->input('taxId');

            $this->validate($request, [
                'penjualan' => 'required',
                'beban_administrasi' => 'required',
                'beban_pemasaran' => 'required',
                'beban_lainnya' => 'required',
                'pendapatan_lain' => 'required',
                'total' => 'required',
                'total_pajak' => 'required',
            ]);

            $tax = Tax::find($id);
            $tax->penjualan = $request->input('penjualan');
            $tax->beban_administrasi = $request->input('beban_administrasi');
            $tax->beban_pemasaran = $request->input('beban_pemasaran');
            $tax->beban_lainnya = $request->input('beban_lainnya');
            $tax->pendapatan_lain = $request->input('pendapatan_lain');
            $tax->total = $request->input('total');
            $tax->total_pajak = $request->input('total_pajak');
            $tax->save();
            
            return redirect(self::REDIRECT_VIEW);
        }
   
        return redirect('login')->withSuccess(AuthController::NOT_ALLOWED);
    }

    public function deleteData($id)
    {
        if (Auth::check()) {
            $tax = Tax::findOrFail($id);
            $tax->delete();
            
            return redirect(self::REDIRECT_VIEW);
        }
   
        return redirect('login')->withSuccess(AuthController::NOT_ALLOWED);
    }
}
