/*global $, alert, document, eq */

$(function () {
    'use strict';
    
            $("html").niceScroll();
    
      $('#accordion .panel-collapse').on('shown.bs.collapse', function () {
        $(this).prev().find(".fa").removeClass("fa-plus").addClass("fa-minus");
    });

    //The reverse of the above on hidden event:

    $('#accordion .panel-collapse').on('hidden.bs.collapse', function () {
        $(this).prev().find(".fa").removeClass("fa-minus").addClass("fa-plus");
    });
    

    $('.gallery .overlay i').click(function () {
        $('.gallery .overlay').hide();
    });
    
$('.gallery .ovrly23 .buttons .glyphicon').click(function () {
   $('.gallery .overlay').show();
    $('body').css('overflow','hidden');
});
        $('[data-toggle="tooltip"]').tooltip(); 
 $(' .carousel').carousel({
     interval: 2000  
    });
	
	 $('.gallery-item').on('click', function() {
          var num_thumbnails = $('.gallery-item').children().length;
          var sr = $(this).children('img').attr('src');
          var clicked_thumbnail_index = $($('.gallery-it')).index(this);
            if(num_thumbnails > 1) {
              $('.ga').html('<button type="button" class="previous"><<</button><button type="button" class="next">>></button>');
            }
     
          var caption = $(this).children('img').attr('alt');
          $('#modal-image').attr('src', sr);
          $('h4.modal-image-caption').html(caption);
          $('#myModal').modal('show');

    //***************************
    // Modal Navigation:Next code
    //***************************
          $('button.next').on('click', function() {
            clicked_thumbnail_index += 1;
            

            if(clicked_thumbnail_index >= num_thumbnails) {
              clicked_thumbnail_index = 0;
            }

              var next_sibling = $('.gallery-item:eq(' + clicked_thumbnail_index + ')').children('img').attr('src');
              $('#modal-image').attr('src', next_sibling);
              var next_caption = $('.gallery-item:eq(' + clicked_thumbnail_index + ')').children('img').attr('alt');
              $('#modal-image').attr('alt', next_caption);
              $('h4.modal-image-caption').html(next_caption);
            });

    //***************************
    // Modal Navigation:Previous code
    //***************************
            $('button.previous').on('click', function() {
              clicked_thumbnail_index -= 1;

            if(clicked_thumbnail_index < 0) {
              clicked_thumbnail_index = (num_thumbnails - 1);
            }

              var next_sibling = $('.gallery-it:eq(' + clicked_thumbnail_index + ')').children('img').attr('src');
              $('#modal-image').attr('src', next_sibling);
                var next_caption = $('.gallery-it:eq(' + clicked_thumbnail_index + ')').children('img').attr('alt');
              $('#modal-image').attr('alt', next_caption);
              $('h4.modal-image-caption').html(next_caption);
            });

      });
});



