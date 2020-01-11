@include('qaz.header')

<div class="container ">
    <ul class="breadcrumb">
        <li><a href="index.html"><i class="fa fa-home"></i></a></li>
        <li><a href="register.html">Register</a></li>
    </ul>


    <div class="row">
        @include('qaz.sitebar')
        
        <div class="col-sm-9" id="content">
            <h1>Создать объявление</h1>
            
            
            @isset($path4)
            {{ $path4 }}
            @endisset
            
            <form action="{{ url('/create') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                <fieldset id="account">
                    <legend>Введите данные по примеру</legend>
                    <div class="form-group required">
                        <label for="input-firstname" class="col-sm-2 control-label">Название услуги</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="input-firstname" placeholder="Маникюр" value="" name="name">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label for="input-email" class="col-sm-2 control-label">Фото (600х800)</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="input-email" placeholder="123.00" value="" name="foto">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label for="input-email" class="col-sm-2 control-label">Старая цена</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="input-email" placeholder="123.00" value="" name="old_price">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label for="input-email" class="col-sm-2 control-label">Цена со скидкой</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="input-email" placeholder="123" value="" name="price">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label for="input-email" class="col-sm-2 control-label">Общая скидка</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="input-email" placeholder="50%" value="" name="sale">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label for="input-email" class="col-sm-2 control-label">Адрес</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="input-email" placeholder="Колпино, Тверская..." value="" name="address">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label for="input-email" class="col-sm-2 control-label">Телефон</label>
                        <div class="col-sm-10">
                            <input type="tel" class="form-control" id="input-email" placeholder="8 (812) 123-45-67" value="" name="tel">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label for="input-email" class="col-sm-2 control-label">Описание</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="input-email" placeholder="Салон красоты Венера..." value="" name="desc">
                        </div>
                    </div>
                <div class="buttons">
                    <div class="pull-right">Нажимая кнопку отправить, я соглашаюсь с <a class="agree" href="#"><b>политикой конфеденциальности </b></a>
                        <input type="submit" class="btn btn-primary" value="Отправить">
                    </div>
                </div>
            </form>
        </div>
</div>
</div>

@include('qaz.footer')