<x-home>
    <!--Start Page Header-->
    <section class="page-header">
        <div class="page-header__bg"
            style="background-image: url({{ asset('frontend/assets/images/backgrounds/blog.jpg') }})">
        </div>
        <div class="shape1">
            <img src="{{ asset('frontend/assets/images/shapes/page-header-shape1.png') }}" alt="#">
        </div>

        <div class="container">
            <div class="page-header__inner">
                <h2>Daftar Artikel</h2>
                <ul class="thm-breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><span>-</span></li>
                    <li>Daftar Artikel</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Header-->


    <!--Start Blog Grid Page-->
    <section class="blog-grid-page">
        <div class="container">
            <div class="row">

                @foreach ($artikel as $item)
                    <!--Start Blog One Single-->
                    <div class="col-xl-4 col-lg-4 wow animated fadeInUp" data-wow-delay="0.1s">

                        <div class="blog-one__single">
                            <div class="blog-one__single-content">
                                <ul class="meta-box clearfix">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-calendar"></span>
                                        </div>
                                        <div class="text">
                                            <p><a href="#"> {{ $item->created_at->diffForHumans() }} </a></p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon">
                                            <span class="icon-user"></span>
                                        </div>
                                        <div class="text">
                                            <p><a href="#"> by {{ $item->user->name }}</a></p>
                                        </div>
                                    </li>
                                </ul>

                                <div class="blog-one__single-content-inner">
                                    <h2><a href="{{ route('artikeldetail', $item->slug) }}">{{ $item->title }}</a></h2>
                                    <p>{!! Str::limit($item->content, 40) !!}</p>
                                </div>


                                <div class="blog-one__single-content-bottom clearfix">
                                    <ul class="clearfix">
                                        <li>
                                            <div class="comment-box">
                                                <a href="#"> <span class="icon-conversation"></span>
                                                    comments</a>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="btn-box">
                                                <a href="{{ route('artikeldetail', $item->slug) }}">Read More <span
                                                        class="icon-right-arrow-1"></span></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                            </div>

                            <div class="blog-one__single-img">
                                <img src="{{ $item->picture }}" style="width: 370px; height: 235px;" alt="#">
                            </div>
                        </div>

                    </div>
                @endforeach
                <!--End Blog One Single-->

                <!--End Blog One Single-->

            </div>

            <ul class="styled-pagination text-center clearfix">
                @if ($artikel->onFirstPage())
                    <li class="disabled"><span>&lsaquo;</span></li>
                @else
                    <li><a href="{{ $artikel->previousPageUrl() }}" rel="prev">&lsaquo;</a></li>
                @endif

                @foreach ($artikel->links()->elements[0] as $page => $url)
                    @if ($page == $artikel->currentPage())
                        <li class="active"><a href="#">{{ $page }}</a></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach

                @if ($artikel->hasMorePages())
                    <li class="arrow next"><a href="{{ $artikel->nextPageUrl() }}" rel="next"><span
                                class="icon-right-arrow"></span></a></li>
                @else
                    <li class="disabled"><span>&rsaquo;</span></li>
                @endif
            </ul>
        </div>
    </section>
    <!--End Blog Grid Page-->
</x-home>
