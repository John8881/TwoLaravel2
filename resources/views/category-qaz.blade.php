@include('qaz.header')

<div class="container ">
    <ul class="breadcrumb">
        <li><a href="index.html"><i class="fa fa-home"></i></a></li>
        <li><a href="register.html">Register</a></li>
    </ul>


    <div class="row">
        @include('qaz.sitebar2')

        <div id="content" class="col-sm-9">
            <h2 class="category-title">Акции </h2>

            <div class="category-page-wrapper">

              <div class="col-md-2 text-left sort-wrapper">
                <label class="control-label" for="input-sort">Сортировать:</label>
                <div class="sort-inner">
                    
                  
                  <form action="{{route('catos')}}" id="myForm" method="post">
                    @csrf
                  
                <select id="input-sort" class="form-control">
                  <option value="ASC" selected="selected">Дата (Возростание)</option>
                  <option value="DESC">Дата (Убывание)</option>
                  <option value="ASC">Цена (Возростание)</option>
                  <option value="DESC">Цена (Убывание)</option>
                </select>
                <button type="submit">Выбрать</button>
              </form>

                </div>
              </div>
            </div>



          <div class="grid-list-wrapper">
            {{-- ВЫВОД ТОВАРОВ В ОПРЕДЕЛЁННОЙ КАТЕГОРИИ --}}
            @isset($prod)
            @foreach ($prod as $prods)

              <div class="product-layout product-grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="product-thumb">
                  <div class="image product-imageblock"> <a href="product.html"> <img src="{{ asset('/storage/' . $prods->file) }}" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                  </div>
                  <div class="caption product-detail">
                    <h4 class="product-name"> <a href="#" title="#">{{$prods->name}}</a> </h4>
                    <p class="price product-price"><span class="price-old">&#8381 {{$prods->old_price}}</span>{{$prods->price}}</p>
                    <div class="rating">Sale: {{$prods->sale}}%</div>
                  </div>
                </div>
              </div>

            @endforeach
            @endisset



        </div>
            <div class="category-page-wrapper">
              <div class="result-inner">Показанны 8 из 15 (2 страницы)</div>
              <div class="pagination-inner">
                <ul class="pagination">
                  {{-- <li class="active"><span>1</span></li> --}}
                  {{ $prod->links() }}
                  {{-- {{ $prod->count() }} --}}

                  {{-- <li><a href="category.html">2</a></li>
                  <li><a href="category.html">&gt;</a></li>
                  <li><a href="category.html">&gt;|</a></li> --}}
                </ul>
              </div>
            </div>
          </div>
</div>
</div>

@include('qaz.footer')
