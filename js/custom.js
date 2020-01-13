$(document).ready(function(){
  $('button').click(function(){
  if(this.id == 'btn1'){
    $('.div1').show();
    $('.div2').hide();
  }else{
    $('.div1').hide();
    $('.div2').show();
  }
})

});
