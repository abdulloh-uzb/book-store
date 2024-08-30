<x-frontend-layout>


    <!-- Shop Section start  -->
    <section class="shop-section section-padding fix pt-0">
        <div class="container">
            <div class="section-title-area">
                <div class="section-title">
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">Featured Books</h2>
                </div>
                <a href="shop.html" class="theme-btn transparent-btn wow fadeInUp" data-wow-delay=".5s">Explore More <i
                        class="fa-solid fa-arrow-right-long"></i></a>
            </div>
            <div class="swiper book-slider">
                <div class="swiper-wrapper">
                    @foreach ($books as $book)

                    <div class="swiper-slide">
                        <div class="shop-box-items style-2">
                            <div class="book-thumb center">
                                <a href="{{route("book.view", $book->slug)}}"><img src="assets/img/book/01.png" alt="img"></a>
                                <ul class="post-box">
                                    {{-- <li>
                                        Hot
                                    </li>
                                    <li>
                                        -30%
                                    </li> --}}
                                </ul>
                                <ul class="shop-icon d-grid justify-content-center align-items-center">
                                    <li>
                                        <a href="/add-cart"><i class="far fa-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="/add-cart">
                                            <img class="icon" src="assets/img/icon/shuffle.svg" alt="svg-icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/add-cart"><i class="far fa-eye"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="shop-content">
                                <h5> {{$book->category->name}} </h5>
                                <h3><a href="/add-cart">{{$book->title}}</a></h3>
                                <ul class="price-list">
                                    <li>${{$book->price}}</li>
                                    {{-- <li>
                                        <del>$39.99</del>
                                    </li> --}}
                                </ul>
                                <ul class="author-post">
                                    <li class="authot-list">
                                        <span class="thumb">
                                            <img src="assets/img/testimonial/client-1.png" alt="img">
                                        </span>
                                        <span class="content">{{$book->author->first_name}}</span>
                                    </li>
                                    <li class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </li>
                                </ul>
                            </div>
                            <div class="shop-button">
                                <a href="/add-cart" class="theme-btn"><i
                                        class="fa-solid fa-basket-shopping"></i> Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>

    <!-- Team Section start  -->
    <section class="team-section fix section-padding pt-0 margin-bottom-30">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="mb-3 wow fadeInUp" data-wow-delay=".3s">Featured Author</h2>
                <p class="wow fadeInUp" data-wow-delay=".5s">Interdum et malesuada fames ac ante ipsum primis in
                    faucibus. <br> Donec at nulla nulla. Duis posuere ex lacus</p>
            </div>
            <div class="array-button">
                <button class="array-prev"><i class="fal fa-arrow-left"></i></button>
                <button class="array-next"><i class="fal fa-arrow-right"></i></button>
            </div>
            <div class="swiper team-slider">
                <div class="swiper-wrapper">
                    @foreach ($authors as $author)
                    <div class="swiper-slide">
                        <div class="team-box-items">
                            <div class="team-image">
                                <div class="thumb">
                                    <img src="assets/img/team/01.jpg" alt="img">
                                </div>
                                <div class="shape-img">
                                    <img src="assets/img/team/shape-img.png" alt="img">
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h6><a href="/author/{{$author->id}}">{{$author->first_name}}</a></h6>
                                <p>{{count($author->books)}} Published Books</p>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>

</x-frontend-layout>
