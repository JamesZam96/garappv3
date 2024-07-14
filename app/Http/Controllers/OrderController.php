<?php

namespace App\Http\Controllers;

use App\Http\Services\DataServices;
use App\Models\Cart;
use App\Models\OrderModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Servicio de datos para interactuar con el modelo Order.
     *
     * @var DataServices
     */
    protected $dataServices;

    /**
     * Crea una nueva instancia del controlador.
     *
     * Inicializa el servicio de datos con el modelo Order.
     *
     * @return void
     */
    public function __construct()
    {
        $this->dataServices = new DataServices(new OrderModel());
    }

    /**
     * Muestra una lista de órdenes.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $orders = $this->dataServices->getAll();
        return view('order.index', compact('orders'));
    }
    /**
     * Almacena una nueva orden en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('order.create');
        }
        $order = $this->dataServices->create($request->all());
        return redirect()->route('orders.index');
    }

    /**
     * Muestra los detalles de una orden específica.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $order = $this->dataServices->getById($id);
        return view('order.show', compact('order'));
    }
    /**
     * Actualiza los datos de una orden en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        if ($request->isMethod('get')) {
            $order = $this->dataServices->getById($id);
            return view('order.edit', compact('order'));
        }
        $order = $this->dataServices->update($id, $request->all());
        if (!$order) {
            abort(404, 'Order not found');
        }
        return redirect()->route('orders.index');
    }

    /**
     * Elimina una orden de la base de datos.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $order = $this->dataServices->delete($id);
        if (!$order) {
            abort(404, 'Order not found');
        }
        return redirect()->route('orders.index');
    }

    public function confirmOrder(Request $request){

        $date = $request->date;
        $name_customer = $request->name_customer;
        $address = $request->address;
        $phone = $request->phone;
        $userid = Auth::user()->id;
        $cart = Cart::where('user_id',$userid)->get();

        foreach($cart as $carts){

            $order = new OrderModel();
            $order->date = $date;
            $order->name_customer = $name_customer;
            $order->address = $address;
            $order->phone = $phone;
            $order->user_id = $userid;
            $order->product_id = $carts->product_id;
            $order->service_id = $carts->service_id;
            $order->save();
        }

        $cartRemove = Cart::where('user_id',$userid)->get();
        foreach ($cartRemove as $remove) {
            $data = Cart::find($remove->id);
            $data->delete();
        }
        
        return redirect()->back();
    }
}
