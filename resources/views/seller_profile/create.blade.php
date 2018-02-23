@extends('template')

@section('content')
    <link rel="stylesheet" href="/css/questionnaire.css">
    <form action="/seller_profile" method="post" class="col-md-12" enctype="multipart/form-data">

        {{csrf_field()}}

        @include('embed.errors')

        <div class="form-row " id="div1">
            <div class="col-md-3">
                <h4>Доступность</h4>
                <span>Дайте нам знать ваши ожидания как исполнителя.</span>
            </div>
            <div class="form-group col-md-3" >
                <label for="work"></label>
                <select class="custom-select" id="work" name="work">
                    <option selected disabled>Я хочу работать</option>
                    <option value="full_time">Полный рабочий день</option>
                    <option value="part_time">Неполный рабочий день</option>
                </select>
            </div>
        </div>
        <div class="form-row" id="div1">
            <div class="col-md-3">
                <h4>Языки</h4>
                <span>На каких языках вы разговариваете?</span>
            </div>
            <div class="form-group col-md-6" >
                <label for="languages"></label>
                <input type="text" class="form-control" name="languages" id="languages" maxlength="100" placeholder="Например, Украинский - Носитель">
            </div>
        </div>
        <div class="form-row" id="div1">
            <div class="col-md-3">
                <h4>Навыки</h4>
                <p>Какими навыками вы обладаете?</p>
                <span>Пусть ваши покупатели знают ваши навыки. Навыки, полученные благодаря вашим предыдущим работам, хобби или даже повседневной жизни.</span>
            </div>
            <div class="form-group col-md-6" >
                <label for="skills"></label>
                <input type="text" class="form-control" name="skills" id="skills" maxlength="100" placeholder="Например, вы делайте хороший дизайн логотипов">
            </div>
        </div>
        <div class="form-row" id="div1">
            <div class="col-md-3">
                <h4>Образование</h4>
                <p>Есть ли у вас образование?</p>
                <span>Напишите какой университет в котором вы учились и года учебы, курсы которые прошли.</span>
            </div>
            <div class="form-group col-md-6" >
                <label for="education"></label>
                <input type="text" class="form-control" name="education" id="education" maxlength="100" placeholder="Например, ОНПУ. Кафедра компьютерных интеллектульных систем и сетей">
            </div>
        </div>
        <div class="form-row" id="div1">
            <div class="col-md-3">
                <h4>Изображение профиля</h4>
                <span>Это изображение будет появлятся в вашем профиле. Можете поставить свою фотографию и тогда заказчики будут знать вас лучше.</span>
            </div>
            <div class="form-group col-md-3" >
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="thumbnail" id="thumbnail" accept="image/*" placeholder="Например, ОНПУ. Кафедра компьютерных интеллектульных систем и сетей">
                    <label class="custom-file-label" for="thumbnail">Выберить файл</label>
                </div>
            </div>
        </div>
        <div class="form-row" id="div1">
            <div class="col-md-3">
                <h4>Описание</h4>
                <span>Расскажи нам больше о себе. Покупатели также заинтересованы в том, чтобы узнать вас как человекa.</span>
            </div>
            <div class="form-group col-md-7" >
                <label for="description"></label>
                <textarea class="form-control" name="description" id="description" maxlength="500" placeholder="Пожалуйста, расскажите нам о ваших увлечениях, дополнительном опыте, или что либо что вы хотите добавить. (Должно быть не более 500 символов)"></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-success btn-lg">Продолжить и создать вашу первую услугу</button>
    </form>
@endsection



@section('jumbotron')
    <div class="jumbotron">
        <div class="container col-md-12">
            <h1 class="display-4 text-center"> Настройки профиля </h1>
        </div>
    </div>
@endsection