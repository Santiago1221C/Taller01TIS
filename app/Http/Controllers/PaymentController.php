<?php  


namespace App\Http\Controllers;  

use App\Models\Payment;  
use Illuminate\Http\Request;  
use Illuminate\View\View;  

class PaymentController extends Controller  
{  
    public function index(): View  
    {  
        $payments = Payment::all();  
        return view('payment.index', [  
            'payments' => $payments,  
            'title' => 'List of Payments',  
            'subtitle' => 'Payment details'  
        ]);  
    }  

    public function create(): View  
    {  
        return view('payment.create', [  
            'title' => 'Create Payment',  
            'subtitle' => 'Add a new payment'  
        ]);  
    }  

    public function store(Request $request)  
    {  
        $request->validate([  
            'method' => 'required|string',  
            'status' => 'required|string',  
            'order_id' => 'required|string'  
        ]);  

        Payment::create([  
            'method' => $request->method,  
            'status' => $request->status,  
            'order_id' => $request->order_id  
        ]);  

        return redirect()->route('payment.index')->with('success', 'Payment created correctly.');  
    }  

    public function destroy($id)  
    {  
         
        $payment = Payment::find($id);  

        
        if (!$payment) {  
            return redirect()->route('payment.index')->with('error', 'Payment has not been found.');  
        }  

          
        $payment->delete();  

         
        return redirect()->route('payment.index')->with('success', 'Payment deleted correctly');  
    }  

    public function show($id)  
    {  
        $payment = Payment::findOrFail($id);
        return view('payment.show', compact('payment'));
    }
}