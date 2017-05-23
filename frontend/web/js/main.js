$("#input").change(function(){ // событие выбора файла
$("#form").submit(); // отправка формы
});

    $(function(){
$('#modalButton').click(function(){
    $('#modal').modal('show')
        .find('#modalContent')
        .load($(this).attr('value'));
});
});
