  $(document).ready(function(){
    $('.slider').slider({
  	 	interval:3500,
  	 	height: 640
  	 });
    $('.sidenav').sidenav();
    $('.modal').modal();
    $('input#input_text, textarea#textarea2').characterCounter();

  });

      