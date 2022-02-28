<section class="mt-0 choose-category text-center py-5 mb-6 bg-area-curso">
    <div class="container-lg align-items-center">
        <h3 class="title d-block">Cursos <strong>mais vendidos</strong></h3>

        {{-- {{dd($cursosDestaques)}} --}}
        @if(count($cursosDestaques) > 0)
            <div class="row">
                @foreach($cursosDestaques as $curso)
                    <div class="col-md-6 col-lg-4 p-md-4 col-sm-12 my-3 my-md-0">
                        <div class="card category-item item">
                            <a class="url-curso" href="{{ route('courses.course_details', [$curso->category_slug, $curso->slug]) }}"
                               title="{{ $curso->title }}">
                                <div class="card-img-top" style="background-image: url('{{ $curso->image }}');"></div>
                                <div class="card-body pt-2 pb-0 px-0 d-flex justify-content-center flex-column">
                                    <div>
                                        <h5 class="card-title my-2 text-semi-bold">{{ $curso->title }}</h5>
                                        
                                        <div class="price__wrapper pt-3 mb-4">
                                            <div class="price__wrapper--content">
                                                <p class="mb-0 text-danger text-line-through h5">DE {{$curso->old_price}} </p>
                                                <p class="price mb-0">
                                                    <span class="price-discount">POR R$ {{ number_format($curso->price, 2, ',', '.') }}</span>
                                                    <span class="price-installments">
                                                        <span>
                                                            <span> 10x de </span>
                                                            <label class="price-discounted h3 text-success font-weight-bold">R$
                                                                {{ number_format($curso->price / 10, 2, ',', '.') }}</label>
                                                        </span>
                                                    </span>
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach

                <div class="col-12 d-flex justify-content-center">
                    <a href="{{ route('courses.index') }}"
                       class="btn btn-lg btn-read-more font-weight-bold waves-effect waves-light m-0 bg-theme-color">
                        Ver todos cursos!
                    </a>
                </div>
            </div>
        @else
            <div class="no-results">
                <h4 class="text-center">NENHUMA CATEGORIA ENCONTRADA</h4>
            </div>
        @endif
    </div>
</section>

<section class="mt-0 choose-category text-center py-5 mb-6 bg-area-curso">
    <div class="container-lg align-items-center">
        <h3 class="title d-block">Diversos <strong>cursos online</strong> em diversas áreas com <strong>certificado</strong>.
            <br/>
            O que você quer <b>aprender</b> hoje?
        </h3>
        @if(count($destaques) > 0)
            <div class="row">
                @foreach($destaques as $categoria)
                    <div class="col-md-6 col-lg-4 p-md-4 col-sm-12 my-3 my-md-0">
                        <div class="card category-item item">
                            <a class="url-curso" href="{{ route('courses.category', $categoria->slug) }}"
                               title="{{ $categoria->title }}">
                                <div class="card-img-top" style="background-image: url('{{ $categoria->image }}');"></div>
                                <div class="card-body pt-2 pb-0 px-0 d-flex justify-content-center flex-column">
                                    <div>
                                        <h5 class="card-title my-2 text-semi-bold">{{ $categoria->title }}</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach

                <div class="col-12 d-flex justify-content-center">
                    <a href="{{ route('courses.index') }}"
                       class="btn btn-lg btn-read-more font-weight-bold waves-effect waves-light m-0 bg-theme-color">
                        Ver todos cursos!
                    </a>
                </div>
            </div>
        @else
            <div class="no-results">
                <h4 class="text-center">NENHUMA CATEGORIA ENCONTRADA</h4>
            </div>
        @endif
    </div>
</section>
