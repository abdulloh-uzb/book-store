<x-frontend-layout>
    <!-- Shop Details Section Start -->
    <section class="shop-details-section fix section-padding">
        <div class="container">
            <div class="shop-details-wrapper">
                <div class="row g-4">
                    <div class="col-lg-5">
                        <div class="shop-details-image">
                            <div class="tab-content">
                                <div id="thumb1" class="tab-pane fade show active">
                                    <div class="shop-details-thumb">
                                        <img src="/assets/img/shop-details/01.png" alt="img">
                                    </div>
                                </div>
                                <div id="thumb2" class="tab-pane fade">
                                    <div class="shop-details-thumb">
                                        <img src="/assets/img/shop-details/02.png" alt="img">
                                    </div>
                                </div>
                                <div id="thumb3" class="tab-pane fade">
                                    <div class="shop-details-thumb">
                                        <img src="/assets/img/shop-details/03.png" alt="img">
                                    </div>
                                </div>
                                <div id="thumb4" class="tab-pane fade">
                                    <div class="shop-details-thumb">
                                        <img src="/assets/img/shop-details/04.png" alt="img">
                                    </div>
                                </div>
                                <div id="thumb5" class="tab-pane fade">
                                    <div class="shop-details-thumb">
                                        <img src="/assets/img/shop-details/05.png" alt="img">
                                    </div>
                                </div>
                            </div>
                            <ul class="nav">
                                <li class="nav-item">
                                    <a href="#thumb1" data-bs-toggle="tab" class="nav-link active">
                                        <img src="/assets/img/shop-details/sm-1.png" alt="img">
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#thumb2" data-bs-toggle="tab" class="nav-link">
                                        <img src="/assets/img/shop-details/sm-2.png" alt="img">
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#thumb3" data-bs-toggle="tab" class="nav-link">
                                        <img src="/assets/img/shop-details/sm-3.png" alt="img">
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#thumb4" data-bs-toggle="tab" class="nav-link">
                                        <img src="/assets/img/shop-details/sm-4.png" alt="img">
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#thumb5" data-bs-toggle="tab" class="nav-link">
                                        <img src="/assets/img/shop-details/sm-5.png" alt="img">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="shop-details-content">
                            <div class="title-wrapper">
                                <h2>{{ $book->title }}</h2>
                                <h5>{{ $book->getAvailability() }}</h5>
                            </div>
                            <div class="star">
                                <a href="shop-details.html"> <i class="fas fa-star"></i></a>
                                <a href="shop-details.html"><i class="fas fa-star"></i></a>
                                <a href="shop-details.html"> <i class="fas fa-star"></i></a>
                                <a href="shop-details.html"><i class="fas fa-star"></i></a>
                                <a href="shop-details.html"><i class="fa-regular fa-star"></i></a>
                                <span>(1 Customer Reviews)</span>
                            </div>
                            <p>{{ $book->description }}</p>
                            <div class="price-list">
                                <h3>$ {{ $book->price }}</h3>
                            </div>
                            <div class="cart-wrapper">



                                @if (array_key_exists($book->id, session()->get('cart', [])))
                                    <p><a href="{{ route('cart') }}">Allaqachon savatga qo'shilgan</a></p>
                                @else
                                    <form action="{{ route('add') }}" method="POST">
                                        @csrf
                                        <input type="text" name="product_id" value="{{ $book->id }}" hidden>
                                        <div class="quantity-basket">
                                            <p class="qty">
                                                <button class="qtyminus" aria-hidden="true">−</button>
                                                <input type="number" name="qty" id="qty2" min="1"
                                                    max="{{ $book->quantity }}" step="1" value="1">
                                                <button class="qtyplus" aria-hidden="true">+</button>
                                            </p>
                                        </div>
                                        <button type="submit" class="theme-btn"><i
                                                class="fa-solid fa-basket-shopping"></i> Savatga qo'shish</button>
                                    </form>
                                @endif


                            </div>

                        </div>
                    </div>
                </div>
                <div class="single-tab section-padding pb-0">
                    <ul class="nav mb-5" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a href="#description" data-bs-toggle="tab" class="nav-link ps-0 active"
                                aria-selected="true" role="tab">
                                <h6>Tavsif</h6>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#additional" data-bs-toggle="tab" class="nav-link" aria-selected="false"
                                tabindex="-1" role="tab">
                                <h6>Malumotlar </h6>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#review" data-bs-toggle="tab" class="nav-link" aria-selected="false"
                                tabindex="-1" role="tab">
                                <h6>Sharhlar (3)</h6>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="description" class="tab-pane fade show active" role="tabpanel">
                            <div class="description-items">
                                <p>
                                    {{ $book->description }}
                                </p>
                            </div>
                        </div>
                        <div id="additional" class="tab-pane fade" role="tabpanel">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td class="text-1">Mavjudligi?</td>
                                            <td class="text-2">{{ $book->getAvailability() }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-1">Kategoriya</td>
                                            <td class="text-2">{{ $book->category->name }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-1">Nashr qilingan sana</td>
                                            <td class="text-2">{{ $book->published_year }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-1">Sahifalar soni</td>
                                            <td class="text-2">330</td>
                                        </tr>
                                        <tr>
                                            <td class="text-1">Formati</td>
                                            <td class="text-2">{{ $book->format->name }}</td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div id="review" class="tab-pane fade" role="tabpanel">
                            <div class="review-items">
                                <div class="review-wrap-area d-flex gap-4">
                                    <div class="review-thumb">
                                        <img src="/assets/img/shop-details/review.png" alt="img">
                                    </div>
                                    <div class="review-content">
                                        <div
                                            class="head-area d-flex flex-wrap gap-2 align-items-center justify-content-between">
                                            <div class="cont">
                                                <h5><a href="news-details.html">Leslie Alexander</a></h5>
                                                <span>February 10, 2024 at 2:37 pm</span>
                                            </div>
                                            <div class="star">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                            </div>
                                        </div>
                                        <p class="mt-30 mb-4">
                                            Neque porro est qui dolorem ipsum quia quaed inventor veritatis et quasi
                                            architecto var sed efficitur turpis gilla sed sit amet finibus eros. Lorem
                                            Ipsum is <br> simply dummy
                                        </p>
                                    </div>
                                </div>
                                <div class="review-title mt-5 py-15 mb-30">
                                    <h4>Your Rating*</h4>
                                    <div class="rate-now d-flex align-items-center">
                                        <p>Your Rating*</p>
                                        <div class="star">
                                            <i class="fa-light fa-star"></i>
                                            <i class="fa-light fa-star"></i>
                                            <i class="fa-light fa-star"></i>
                                            <i class="fa-light fa-star"></i>
                                            <i class="fa-light fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="review-form">
                                    <form action="#" id="contact-form" method="POST">
                                        <div class="row g-4">
                                            <div class="col-lg-6">
                                                <div class="form-clt">
                                                    <span>Your Name*</span>
                                                    <input type="text" name="name" id="name"
                                                        placeholder="Your Name">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-clt">
                                                    <span>Your Email*</span>
                                                    <input type="text" name="email" id="email"
                                                        placeholder="Your Email">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 wow fadeInUp animated" data-wow-delay=".8">
                                                <div class="form-clt">
                                                    <span>Message*</span>
                                                    <textarea name="message" id="message" placeholder="Write Message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 wow fadeInUp animated" data-wow-delay=".9">
                                                <div class="form-check d-flex gap-2 from-customradio">
                                                    <input type="checkbox" class="form-check-input"
                                                        name="flexRadioDefault" id="flexRadioDefault12">
                                                    <label class="form-check-label" for="flexRadioDefault12">
                                                        i accept your terms & conditions
                                                    </label>
                                                </div>
                                                <button type="submit" class="theme-btn">
                                                    Submit now
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-frontend-layout>
