$("#video1").prop('muted', true);
$(".mutear").click( function (){
  if( $("#video1").prop('muted') )
  {
      $("#video1").prop('muted', false);
  }

  else {
  $("video").prop('muted', true);
  }

});
