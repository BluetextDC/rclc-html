(function($) {

// Filter system js
$('.dropdown-menu').click(function(e) {
  e.stopPropagation();
});

$('.apply-filter-category').on('click', function(){
  var categories = [];
  $('#cate-check li .alm-checkbox').each(function() {
    if ($(this).is(':checked')) {
      categories.push($(this).val()); 
    }
  });
  $('#categories').val(categories.join(','));
  $(this).parent().parent().parent().removeClass('open');

});

$('.apply-filter-tag').on('click', function(){
  var tags = [];
  $('#tag-check li .alm-checkbox').each(function() {
    if ($(this).is(':checked')) {
      tags.push($(this).val()); 
    }
  });
  $('#tags').val(tags.join(','));
  $(this).parent().parent().parent().removeClass('open');

});
// Apply all trigger
$('#apply_all_data').on('click', function(){
  $('.apply-filter-tag').trigger('click');
  $('.apply-filter-category').trigger('click');
});

// filter function
function addfilters() {
  var selectfilters = [];
  $(".dropdown-menu li .alm-checkbox").each(function() {
    if ($(this).is(':checked')) {
      selectfilters.push($(this).val());
    }
  });

  fLen = selectfilters.length;
  text = "<ul class='tag-list'>";
  for (i = 0; i < fLen; i++) {
    text += "<li>" + selectfilters[i] + "</li>";
  }
  text += "</ul>";
  document.getElementById("filter-added").innerHTML = text;
}

function filterme() {
  var data = {};
  var keys = [];
  var values = [];
  var operators = [];
  var relations = [];
  var categories = [];
  var tags = [];
  $('.dropdown-menu li .alm-checkbox').each(function() {
    if ($(this).is(':checked')) {
      if($(this).attr('name') == 'category'){
        categories.push($(this).val()); 
      }else if($(this).attr('name') == 'post_tag'){
        tags.push($(this).val()); 
      }
    }
  });
  data['category'] = categories.join(",");
  data['tag'] = tags.join(",");
  console.log(data);
}

// print taglist tags
function haveText(){
  var haveText = $(".taglist-outer .filter-added ul li");
  $(".taglist-outer").hide();
  if(haveText.length != 0){
    $(".taglist-outer").show();
  }
}

$.fn.almEmpty = function(alm){
  var el = $(alm.content),
  msg = 'Sorry nothing found try again!';
  el.append('<div class="nothingfound">'+ msg +'</div>');  
  $(".result-filter").removeClass("showdata");
};

$('.filter-added ul.tag-list li').on('click', function(){

  var ttype = $(this).data('type');
  var tslug = $(this).data('slug');
  var tt = $('#'+ttype).val();
  var stt = tt.split(",");
  var index = stt.indexOf(tslug);
  if (index !== -1) stt.splice(index, 1);
  $('#'+ttype).val(stt.join(","));
  $("#filter-form").submit();
});

        // news listing tags
        $('#clear-data').on('click', function(){
          var data = {};
          data['category'] = "";
          data['tag'] = "";
          $.fn.almFilter('fade', '300', data);
          document.getElementById("filter-added").innerHTML = "";
          $('.taglist-outer').hide();
          $(".dropdown-menu li .alm-checkbox").each(function(){
            $(this).prop("checked", false);
          });
        });

        // blog listing tags
        $('#clear-post-tags').on('click', function(){
          $('#categories').val('');
          $('#tags').val('');
          $("#filter-form").submit();
        });

        $('#clear-all-tags').on('click', function(){
          $('#tags').val('');
          $("#filter-form").submit();
        });

        $('#clear-all-category').on('click', function(){
          $('#categories').val('');
          $("#filter-form").submit();
        });

        // category clear

        $('.clearCheckBox').on('click', function(){

          $('#cate-check li .alm-checkbox').each(function(){
            $(this).prop("checked", false);
          });
          $(this).parent().parent().parent().removeClass('open');
          filterme();
          addfilters();
        });

        // tag clear

        $('.tagclearCheckBox').on('click', function(){
          $('#tag-check li .alm-checkbox').each(function(){
            $(this).prop("checked", false);
          });
          $(this).parent().parent().parent().removeClass('open');
          filterme();
          addfilters();
        });
        


      })(jQuery);
