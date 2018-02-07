<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Mail;
use Carbon\Carbon;
use DB;

use App\Http\Requests\Item as ItemRequest;
use App\Item;
use App\Order;

class ItemController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->only([
            'category'
        ]);

        $items = Item::query();
        $items = $items->orderBy('id', 'desc');

        if (isset($search['category']) && $search['category'] != ''){
            $items = $items->where('category_id', '=', $search['category']);
        }

        if (isset($search['area']) && $search['area'] != ''){
            $items = $items->where('area', '=', $search['area']);
        }

        $items = $items->paginate(100)->setPath('');

        return view('item.index')
            ->with([
            'items' => $items,
        ]);
    }

    public function show($id)
    {
        $item = Item::findOrFail($id);
        return view('item.show')
            ->with([
            'item' => $item,
            'order' => new Order()
        ]);
    }

    public function order(ItemRequest\OrderRequest $request)
    {
        $orderData = $request->only([
            'item_id',
            'hours',
            'prefer_date',
            'prefer_hour',
            'prefer_date2',
            'prefer_hour2',
            'prefer_date3',
            'prefer_hour3',
            'comment'
        ]);

        $user = auth()->user();
        $orderData['user_id'] = $user->id;
        $orderData['status'] = Order::ORDER_STATUS_NEW;

        $item = Item::findOrFail($orderData['item_id']);
        $orderData['price'] = $item->price;
        $orderData['title'] = $item->title;
        $orderData['prefer_at'] = $orderData['prefer_date'] . " " . $orderData['prefer_hour'] . ":00";
        if($orderData['prefer_date2'])
            $orderData['prefer_at2'] = $orderData['prefer_date2'] . " " . $orderData['prefer_hour2'] . ":00";
        if($orderData['prefer_date3'])
            $orderData['prefer_at3'] = $orderData['prefer_date3'] . " " . $orderData['prefer_hour3'] . ":00";

        if ($order = Order::create($orderData)) {

            // send mail for user
            Mail::send(
                ['text' => 'mail.order_created'],
                compact('order'),
                function ($m) use ($order) {
                    $m->from(
                        config('my.mail.from'),
                        config('my.mail.name')
                    );
                    $m->to($order->user->email, $order->user->getName());
                    $m->subject(
                        config('my.order.created.mail_subject')
                    );
                }
            );
            // send mail for staff
            Mail::send(
                ['text' => 'staff.mail.order_created'],
                compact('order'),
                function ($m) use ($order) {
                    $m->from(
                        config('my.mail.from'),
                        config('my.mail.name')
                    );
                    $m->to($order->item->staff->email, $order->item->staff->getName());
                    $m->subject(
                        config('my.order.created_for_staff.mail_subject')
                    );
                }
            );


            $request->session()->flash('info', '依頼しました。結果がくるまでしばらくお待ちください。');
            return redirect()
                ->route('root.index')
            ;
        }
        return redirect()
            ->back()
            ->withInput($orderData)
        ;
    }
}
