$(document).ready(function(){
  var base_url = $('.base_url').val();
  $(document).on('submit', '#addForm', function(){
    var formData = $(this).serialize();
    $.ajax({
      url: base_url+'Users_Controller/do_upload',
      type:"post",
      data: new FormData(this),
      processData:false,                     
      contentType:false,
      cache:false,
      async:false,                     
      success: function(res){
        console.log(res);
      }
    });
  })
});
