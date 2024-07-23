@include('partials.header')

<main>
    <section class="hero">
        <div class="video-container">
            <video autoplay loop muted>
                <source src="{{ asset('videos/video.mp4') }}" type="video/mp4" />
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="container">
            <div class="box">
                <h1>
                    <span>Novas</span>
                    modalidades
                    <span>e ampliação de</span> horários.
                </h1>

                <p>Aulas de 45 minutos e período de teste gratuito.</p>

                <a href="/" title="saiba mais" class="btn white">saiba mais</a>
            </div>
        </div>
    </section>

    <section class="highlights">
        <div class="swiper swiper-highlights">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="card sports">
                        <figure>
                            <img src="{{ asset('img/blog/img-1.png') }}" alt="Lorem Ipsum dolor Sit Amet Dolor lorem ipsum" />
                        </figure>
                        <div class="content">
                            <a href="/" title="">Lorem Ipsum dolor Sit Amet Dolor lorem ipsum</a>
                            <span><time datetime="2023-04-10">10 de Abril 2023</time>
                                <i class="fa-solid fa-arrow-right"></i></span>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="card business">
                        <figure>
                            <img src="{{ asset('img/blog/img-2.png') }}" alt="Lorem Ipsum dolor Sit Amet Dolor lorem ipsum" />
                        </figure>
                        <div class="content">
                            <a href="/" title="">Lorem Ipsum dolor Sit Amet Dolor lorem ipsum</a>
                            <span><time datetime="2023-04-10">10 de Abril 2023</time>
                                <i class="fa-solid fa-arrow-right"></i></span>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="card sports">
                        <figure>
                            <img src="{{ asset('img/blog/img-3.png') }}" alt="Lorem Ipsum dolor Sit Amet Dolor lorem ipsum" />
                        </figure>
                        <div class="content">
                            <a href="/" title="">Lorem Ipsum dolor Sit Amet Dolor lorem ipsum</a>
                            <span><time datetime="2023-04-10">10 de Abril 2023</time>
                                <i class="fa-solid fa-arrow-right"></i></span>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="card projects">
                        <figure>
                            <img src="{{ asset('img/blog/img-4.png') }}" alt="Lorem Ipsum dolor Sit Amet Dolor lorem ipsum" />
                        </figure>
                        <div class="content">
                            <a href="/" title="">Lorem Ipsum dolor Sit Amet Dolor lorem ipsum</a>
                            <span><time datetime="2023-04-10">10 de Abril 2023</time>
                                <i class="fa-solid fa-arrow-right"></i></span>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="card business">
                        <figure>
                            <img src="{{ asset('img/blog/img-5.png') }}" alt="Lorem Ipsum dolor Sit Amet Dolor lorem ipsum" />
                        </figure>
                        <div class="content">
                            <a href="/" title="">Lorem Ipsum dolor Sit Amet Dolor lorem ipsum</a>
                            <span><time datetime="2023-04-10">10 de Abril 2023</time>
                                <i class="fa-solid fa-arrow-right"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <section class="blog">
        <div class="container">
            <div class="card-category sports">
                <div class="desc">
                    <h2>esportes</h2>
                    <p>Lorem Ipsum dolor Sit Amet Lorem.</p>
                    <a href="/" title="ver todos" class="btn dark">ver todos</a>
                </div>
                <div class="posts">
                    <div class="swiper swiper-blog">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card-blog sports">
                                    <figure>
                                        <img src="{{ asset('img/blog/img-6.png') }}"
                                            alt="Lorem Ipsum dolor Sit Amet Dolor lorem ipsum" />
                                    </figure>
                                    <div class="content">
                                        <a href="/" title="">Lorem Ipsum dolor Sit Amet Dolor lorem ipsum</a>
                                        <span><time datetime="2023-04-10">10 de Abril 2023</time>
                                            <i class="fa-solid fa-arrow-right"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card-blog sports">
                                    <figure>
                                        <img src="{{ asset('img/blog/img-7.png') }}"
                                            alt="Lorem Ipsum dolor Sit Amet Dolor lorem ipsum" />
                                    </figure>
                                    <div class="content">
                                        <a href="/" title="">Lorem Ipsum dolor Sit Amet Dolor lorem ipsum</a>
                                        <span><time datetime="2023-04-10">10 de Abril 2023</time>
                                            <i class="fa-solid fa-arrow-right"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card-blog sports">
                                    <figure>
                                        <img src="{{ asset('img/blog/img-8.png') }}"
                                            alt="Lorem Ipsum dolor Sit Amet Dolor lorem ipsum" />
                                    </figure>
                                    <div class="content">
                                        <a href="/" title="">Lorem Ipsum dolor Sit Amet Dolor lorem ipsum</a>
                                        <span><time datetime="2023-04-10">10 de Abril 2023</time>
                                            <i class="fa-solid fa-arrow-right"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                </div>
            </div>

            <div class="card-category events">
                <div class="desc">
                    <h2>eventos</h2>
                    <p>Lorem Ipsum dolor Sit Amet Lorem.</p>
                    <a href="/" title="ver todos" class="btn dark">ver todos</a>
                </div>
                <div class="posts">
                    <div class="swiper swiper-blog">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card-blog events">
                                    <figure>
                                        <img src="{{ asset('img/blog/img-9.png') }}"
                                            alt="Lorem Ipsum dolor Sit Amet Dolor lorem ipsum" />
                                    </figure>
                                    <div class="content">
                                        <a href="/" title="">Lorem Ipsum dolor Sit Amet Dolor lorem ipsum</a>
                                        <span><time datetime="2023-04-10">10 de Abril 2023</time>
                                            <i class="fa-solid fa-arrow-right"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card-blog events">
                                    <figure>
                                        <img src="{{ asset('img/blog/img-10.png') }}"
                                            alt="Lorem Ipsum dolor Sit Amet Dolor lorem ipsum" />
                                    </figure>
                                    <div class="content">
                                        <a href="/" title="">Lorem Ipsum dolor Sit Amet Dolor lorem ipsum</a>
                                        <span><time datetime="2023-04-10">10 de Abril 2023</time>
                                            <i class="fa-solid fa-arrow-right"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card-blog events">
                                    <figure>
                                        <img src="{{ asset('img/blog/img-11.png') }}"
                                            alt="Lorem Ipsum dolor Sit Amet Dolor lorem ipsum" />
                                    </figure>
                                    <div class="content">
                                        <a href="/" title="">Lorem Ipsum dolor Sit Amet Dolor lorem ipsum</a>
                                        <span><time datetime="2023-04-10">10 de Abril 2023</time>
                                            <i class="fa-solid fa-arrow-right"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
            <div class="card-category services">
                <div class="desc">
                    <h2>serviços</h2>
                    <p>Lorem Ipsum dolor Sit Amet Lorem.</p>
                    <a href="/" title="ver todos" class="btn dark">ver todos</a>
                </div>
                <div class="posts">
                    <div class="swiper swiper-blog">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card-blog services">
                                    <figure>
                                        <img src="{{ asset('img/blog/img-12.png') }}"
                                            alt="Lorem Ipsum dolor Sit Amet Dolor lorem ipsum" />
                                    </figure>
                                    <div class="content">
                                        <a href="/" title="">Lorem Ipsum dolor Sit Amet Dolor lorem ipsum</a>
                                        <span><time datetime="2023-04-10">10 de Abril 2023</time>
                                            <i class="fa-solid fa-arrow-right"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card-blog services">
                                    <figure>
                                        <img src="{{ asset('img/blog/img-13.png') }}"
                                            alt="Lorem Ipsum dolor Sit Amet Dolor lorem ipsum" />
                                    </figure>
                                    <div class="content">
                                        <a href="/" title="">Lorem Ipsum dolor Sit Amet Dolor lorem ipsum</a>
                                        <span><time datetime="2023-04-10">10 de Abril 2023</time>
                                            <i class="fa-solid fa-arrow-right"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card-blog services">
                                    <figure>
                                        <img src="{{ asset('img/blog/img-14.png') }}"
                                            alt="Lorem Ipsum dolor Sit Amet Dolor lorem ipsum" />
                                    </figure>
                                    <div class="content">
                                        <a href="/" title="">Lorem Ipsum dolor Sit Amet Dolor lorem ipsum</a>
                                        <span><time datetime="2023-04-10">10 de Abril 2023</time>
                                            <i class="fa-solid fa-arrow-right"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
            <div class="card-category projects">
                <div class="desc">
                    <h2>projetos</h2>
                    <p>Lorem Ipsum dolor Sit Amet Lorem.</p>
                    <a href="/" title="ver todos" class="btn dark">ver todos</a>
                </div>
                <div class="posts">
                    <div class="swiper swiper-blog">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card-blog projects">
                                    <figure>
                                        <img src="{{ asset('img/blog/img-15.png') }}"
                                            alt="Lorem Ipsum dolor Sit Amet Dolor lorem ipsum" />
                                    </figure>
                                    <div class="content">
                                        <a href="/" title="">Lorem Ipsum dolor Sit Amet Dolor lorem ipsum</a>
                                        <span><time datetime="2023-04-10">10 de Abril 2023</time>
                                            <i class="fa-solid fa-arrow-right"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card-blog projects">
                                    <figure>
                                        <img src="{{ asset('img/blog/img-16.png') }}"
                                            alt="Lorem Ipsum dolor Sit Amet Dolor lorem ipsum" />
                                    </figure>
                                    <div class="content">
                                        <a href="/" title="">Lorem Ipsum dolor Sit Amet Dolor lorem ipsum</a>
                                        <span><time datetime="2023-04-10">10 de Abril 2023</time>
                                            <i class="fa-solid fa-arrow-right"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card-blog projects">
                                    <figure>
                                        <img src="{{ asset('img/blog/img-17.png') }}"
                                            alt="Lorem Ipsum dolor Sit Amet Dolor lorem ipsum" />
                                    </figure>
                                    <div class="content">
                                        <a href="/" title="">Lorem Ipsum dolor Sit Amet Dolor lorem ipsum</a>
                                        <span><time datetime="2023-04-10">10 de Abril 2023</time>
                                            <i class="fa-solid fa-arrow-right"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
            <div class="card-category business">
                <div class="desc">
                    <h2>negócios</h2>
                    <p>Lorem Ipsum dolor Sit Amet Lorem.</p>
                    <a href="/" title="ver todos" class="btn dark">ver todos</a>
                </div>
                <div class="posts">
                    <div class="swiper swiper-blog">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card-blog business">
                                    <figure>
                                        <img src="{{ asset('img/blog/img-18.png') }}"
                                            alt="Lorem Ipsum dolor Sit Amet Dolor lorem ipsum" />
                                    </figure>
                                    <div class="content">
                                        <a href="/" title="">Lorem Ipsum dolor Sit Amet Dolor lorem ipsum</a>
                                        <span><time datetime="2023-04-10">10 de Abril 2023</time>
                                            <i class="fa-solid fa-arrow-right"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card-blog business">
                                    <figure>
                                        <img src="{{ asset('img/blog/img-19.png') }}"
                                            alt="Lorem Ipsum dolor Sit Amet Dolor lorem ipsum" />
                                    </figure>
                                    <div class="content">
                                        <a href="/" title="">Lorem Ipsum dolor Sit Amet Dolor lorem ipsum</a>
                                        <span><time datetime="2023-04-10">10 de Abril 2023</time>
                                            <i class="fa-solid fa-arrow-right"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card-blog business">
                                    <figure>
                                        <img src="{{ asset('img/blog/img-20.png') }}"
                                            alt="Lorem Ipsum dolor Sit Amet Dolor lorem ipsum" />
                                    </figure>
                                    <div class="content">
                                        <a href="/" title="">Lorem Ipsum dolor Sit Amet Dolor lorem ipsum</a>
                                        <span><time datetime="2023-04-10">10 de Abril 2023</time>
                                            <i class="fa-solid fa-arrow-right"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@include('partials.footer')
