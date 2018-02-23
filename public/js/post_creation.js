$(document).ready(function() {
    $("#category").change(function() {
        var val = $(this).val();
        if (val == "1"){
            $("#sub_category").html("<option value='1'>Web-программирование</option><option value='2'>Мобильные приложения</option>" +
                "<option value='3'>Чат Боты</option><option value='4'>Базы Данных</option>");
        } else if (val == "2") {
            $("#sub_category").html("<option value='5'>SEO</option><option value='6'>Web Аналитика</option>" +
                "<option value='7'>Мобильная реклама</option><option value='8'>SMM</option>");
        } else if (val == "3") {
            $("#sub_category").html("<option value='9'>Интро и Анимационные логотипы</option><option value='10'>Лирика и Музыкальные видео</option>" +
                "<option value='11'>Рекламные видеоролики</option><option value='12'>Редактирование треков и Post Production</option>");
        }else if (val == "4") {
            $("#sub_category").html("<option value='13'>Дизайн Логотипа</option><option value='14'>3D и 2D Модели</option>" +
                "<option value='15'>Футболки</option><option value='16'>Флаеры и Плакаты</option>");
        }else if (val == "5") {
            $("#sub_category").html("<option value='17'>Онлайн Уроки</option><option value='18'>Здоровье, Питание и Фитнес</option>" +
                "<option value='19'>Гейминг</option><option value='20'>Прочее</option>");
        }else if (val == "6") {
            $("#sub_category").html("<option value='21'>Виртуальный помошник</option><option value='22'>Бизнес планы</option>" +
                "<option value='23'>Исследование рынка</option><option value='24'>Совет по карьере</option>");
        }
    });
});