<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'role:user']);
    }

    public function addCart(Request $request)
    {
        $bookId = $request->input('product_id');
        $qty = $request->input('qty');

        // Mavjud kartani olish yoki bo'sh array yaratish
        $cart = session()->get('cart', []);

        if (isset($cart[$bookId])) {
            // Agar mahsulot kartada mavjud bo'lsa, miqdorni yangilaymiz
            $cart[$bookId]['qty'] += $qty;
        } else {
            // Agar mahsulot kartada mavjud bo'lmasa, yangi mahsulotni qo'shamiz
            $cart[$bookId] = [
                'qty' => $qty,
                'product' => Book::find($bookId)->toJson(),
            ];
        }

        // Kartani sessiyaga qayta saqlaymiz
        session()->put('cart', $cart);

        return back()->with('success', 'Product added to cart!');
    }

    public function showCart()
    {
        $cart = session()->get('cart', []);
        $data = [];

        foreach ($cart as $item) {
            $data[] = [
                'product' => json_decode($item['product'], true),
                'qty' => $item['qty'],
            ];
        }

        return view('frontend.profile.orders', compact('data'));
    }

    public function removeItem($bookId)
    {
        $cart = session()->get('cart', []);

        if($cart[$bookId]){
            unset($cart[$bookId]);
            session()->put('cart', $cart);

            return redirect()->back()->with('status', 'Kitob korzinkadan muvafaqiyatli o\'chirildi');
        }

        return redirect()->back()->with('status', 'Bunaqa kitob mavjud emas');

    }

}


