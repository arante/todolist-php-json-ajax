// Check Off Specific Todos By Clicking
$("ul").on("click", "li", function(){
	$(this).toggleClass("completed");

    $.post('done.php',
        {id: $(this).attr('id')},
        function(data, status) {
        }
    );
});

//Click on X to delete Todo
$("ul").on("click", "span", function(event){
	$(this).parent().fadeOut(500,function(){
		$(this).remove();
	});

	event.stopPropagation();

    $.post('delete.php',
        { id: $(this).parent().attr('id') },
        function(data, status) {
            console.log(data);
        }
    );
});

$("input[type='text']").keypress(function(event){

	if(event.which === 13){
		//grabbing new todo text from input
		var todoText = $(this).val();

		$(this).val("");

        $.post('create.php',
            {task: todoText},
            function(data, status) {
                //create a new li and add to ul
                $("ul").append("<li id='" + data + "'><span><i class='fa fa-trash'></i></span> " + todoText + "</li>")
            }
        );

	}
});

$(".fa-plus").click(function(){
	$("input[type='text']").fadeToggle();
});
