$(document).ready(function(){
  var slug = $('#slug').attr('slug');
        $.ajax({
            url:'http://localhost/php-boolpress/comments.php?slug=' + slug,
            method:'GET',
            success:function(data){
              var database = JSON.parse(data);
              console.log(database);

                for (var i = 0; i < database.length; i++) {
                  generaHtml(database[i]);
                }



            },
            error:function(){
              alert("errore");
            }




        });





});

function generaHtml(dato) {

 var source   = $('#post-template').html();
 var template = Handlebars.compile(source);

 var data = {
   nome:dato.name,
   email:dato.email,
   comment:dato.body
 };

 var html = template(data);


 $('.cardPost').append(html);
}
