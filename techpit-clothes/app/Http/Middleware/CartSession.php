<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;
use App\Cart;

class CartSession
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //セッションにカートIDがあるかの確認。cartというキーの値が存在しない場合true
        if(!Session::has('cart')){
            //cartの生成
            $cart = Cart::create();
            //セッションにカートIDを保存
            Session::put('cart', $cart->id);
        }
        return $next($request);
    }
}
