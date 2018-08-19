
$(document).ready(function(){
	 $("#container .button input").click(function(){//клик по кнопке
		
		 var text = $(this).val();//берем значение у кнопки	
		 if(text == "спрятать мёд") {//сравниваем
			 $(this).val("показать мёд");//если совпадает, то меняем значение
			 $("#container .left img").fadeOut(1000);//прячем мёд
		 }
		 if(text == "показать мёд") {//если занчение наоборот такое
			 $(this).val("спрятать мёд");//то, меняем значение
			 $("#container .left img").fadeIn(1000);//и показываем мёд
		 }	    
	 });
});