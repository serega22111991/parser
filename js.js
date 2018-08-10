$('div.title').each(function(i,elem) {

var admin = $(this).text();
$.ajax({
url: "toBaze.php",  //название базы куда скидывать 
type: "POST",         // метод передачи
data: ({name: admin}),  //name - название получаемой переменной в файле PHP, admin - название переменной с JS
dataType: "html",       // тип передаваемых данных
beforeSend: funcBefore,  //функция , что показывает что-то во время срабатывание аякса
success: funcSuccess     // функция, что покажет, что-то после срабатывания аякса 
 
});


});


function funcBefore () {
$("#information").text("waiting");
}
function funcSuccess (data){
$("#information").text(data);
}

