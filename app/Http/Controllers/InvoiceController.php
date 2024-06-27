<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\InvoiceItem;
use Illuminate\Http\Request;
use niklasravnsborg\LaravelPdf\Facades\Pdf;

class InvoiceController extends Controller
{
    //
    public function admin()
    {
        \App\Helpers\Helper::showAlert();
        $title = 'Danh sách hóa đơn';
        $data = Invoice::orderBy('id', 'DESC')->get();
        return view('admin.invoice.index', compact('title', 'data'));
    }

    public function post(Request $request){
        // dd($request);
        if(isset($request->cancel) || isset($request->wait) || isset($request->done)){
            $id = $request->id;
            if(isset($request->cancel)){
                Invoice::where('id', $id)->update([
                    'status' => 2
                ]);
            }
            if(isset($request->wait)){ // isset kiểm tra có dữ liệu hay không
                Invoice::where('id', $id)->update([
                    'status' => 0
                ]);
            }
            if(isset($request->done)){
                Invoice::where('id', $id)->update([
                    'status' => 1
                ]);
            }
            return redirect(route('admin.invoice'))->withSuccessMessage('Thay đổi trạng thái hóa đơn thành công!');
        }

    }
    public function downloadInvoice($id)
    {
        $font_family = "'Roboto','sans-serif'";
        $order = Invoice::findOrFail((int)$id);
        $item = Invoice::whereRaw("invoice_order.id = $id")
        ->join('invoice_order_item', 'invoice_order_item.order_id', '=', 'invoice_order.id')
        ->select('invoice_order_item.*', 'invoice_order.*', 'invoice_order.id as ioid', 'invoice_order_item.name as pname')->get();
        $sum = InvoiceItem::whereRaw("invoice_order_item.order_id = $id")->sum('total');
        return Pdf::loadView('admin.invoice.downloadInvoice', [
            'order' => $order,
            'item' => $item,
            'sum' => $sum,
            'font_family' => $font_family,
            'direction' => 'ltr',
            'default_text_align' => 'left',
            'reverse_text_align' => 'right'
        ], [], [])->download('INV' . $order->orderID . '.pdf');
    }
}
