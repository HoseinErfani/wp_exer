

jQuery(document).ready(function($){


    let uploader;
    $(document).on('click','#choosePicture',function(e){
       e.preventDefault();

       if(uploader){
           uploader.open();
           return;
       }
       uploader=wp.media({
           title:'انتخاب تصویر',
           button:{
               text:'انتخاب ',
           },
           multiple:false
       });
       uploader.on('select',function(){
           let attachment=uploader.state().get('selection').first().toJSON();
          $('#the-img').attr('src',attachment.url);
          $('#text-field').text( attachment.url);
       });
    })
})