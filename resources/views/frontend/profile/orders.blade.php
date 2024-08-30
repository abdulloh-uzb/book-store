<x-frontend-layout>

    <div class="cart-section section-padding">
        <div class="container">
            <div class="main-cart-wrapper">
                <div class="row g-5">

                    @if (!empty($data))

                        <div class="col-xl-9">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Nomi</th>
                                            <th>Narxi</th>
                                            <th>Soni</th>
                                            <th>Jami narx</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($data as $item)
                                            <tr>
                                                <td>
                                                    <span class="d-flex gap-5 align-items-center">
                                                        <form action="{{ route('cart.remove', $item['product']['id']) }}"
                                                            method="POST">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button type="submit" class="remove-icon">
                                                                <img src="/assets/img/icon/icon-9.svg" alt="img">
                                                            </button>
                                                        </form>

                                                        <span class="cart">
                                                            <img src="/assets/img/shop-cart/01.png" alt="img">
                                                        </span>
                                                        <span class="cart-title">
                                                            {{ $item['product']['title'] }}
                                                        </span>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="cart-price">${{ $item['product']['price'] }}</span>
                                                </td>
                                                <td>
                                                    <span class="quantity-basket">
                                                        <span class="qty">
                                                            <button class="qtyminus" aria-hidden="true">−</button>
                                                            <input type="number" name="qty" id="qty2"
                                                                min="1" max="10" step="1"
                                                                value="{{ $item['qty'] }}">
                                                            <button class="qtyplus" aria-hidden="true">+</button>
                                                        </span>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="subtotal-price">$
                                                        {{ $item['qty'] * $item['product']['price'] }}</span>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>


                        </div>
                        <div class="col-xl-3">
                            <div class="table-responsive cart-total">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Cart Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <span class="d-flex gap-5 align-items-center justify-content-between">
                                                    <span class="sub-title">Subtotal:</span>
                                                    <span class="sub-price">$84.00</span>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="d-flex gap-5 align-items-center  justify-content-between">
                                                    <span class="sub-title">Shipping:</span>
                                                    <span class="sub-text">
                                                        Free
                                                    </span>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="d-flex gap-5 align-items-center  justify-content-between">
                                                    <span class="sub-title">Total: </span>
                                                    <span class="sub-price sub-price-total">$84.00</span>
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="checkout.html" class="theme-btn">Proceed to checkout</a>
                            </div>
                        </div>

                    @endif



                </div>
            </div>
        </div>
    </div>

</x-frontend-layout>
