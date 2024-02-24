// RTl & Ltr
$('<ul class="custom-theme"><li class="demo-li"><a href="../front-end/index.html" target="_blank">Front end</a></li><li class="btn-rtl">RTL</li><li class="btn-dark-setting">Dark</li></ul>').appendTo($('body'));
(function () {
})();
//live customizer js
$(document).ready(function () {

  $('.btn-rtl').on('click', function () {
    $("html").attr("dir", "");
    $(this).toggleClass('rtl');
    if ($('.btn-rtl').hasClass('rtl')) {
      $('.btn-rtl').text('LTR');
      $('body').addClass('rtl');
      $("html").attr("dir", "rtl");
    } else {
      $('.btn-rtl').text('RTL');
      $('body').removeClass('rtl');
      $("html").attr("dir", "");
    }
  });
  var body_event = $("body");
  body_event.on("click", ".btn-dark-setting", function () {
    $(this).toggleClass('dark');
    $('body').removeClass('dark');
    if ($('.btn-dark-setting').hasClass('dark')) {
      $('.btn-dark-setting').text('Light');
      $('body').addClass('dark');
    } else {
      $('#theme-dark').remove();
      $('.btn-dark-setting').text('Dark');
    }

    return false;
  });
});

function previewImage(event) {

  const input = event.target;
  const previewImage = document.getElementById('image-preview');

  if (input.files && input.files[0]) {
      const reader = new FileReader();

      reader.onload = function (e) {
          previewImage.src = e.target.result;
      };

      reader.readAsDataURL(input.files[0]);
  } else {
      previewImage.src = '';
      previewContainer.style.display = 'none';
  }
} 

function deleteBtn(event) {
  // var sliderId = $(this).data('slider-id');

    // Call a function or perform any actions with the obtained slider ID
    $('.deleteForm').attr('action', event);
    console.log('Deleted button ID:', sliderId);


    
    
}

$(document).ready(function () {
  
  $(".data-form").on("submit", function () {
    $(".btn-submit").prop("disabled", true);
});
});


$(document).ready(function () {

  $(".url-slug").on("keyup", function () {
    // alert($(".url-slug").text());
      var inputText = $(this).val();
      var slug = generateSlug(inputText);
      $(this).val(slug);
  });
  
  $(".slug-generator").on("keyup", function () {
    var inputText = $(this).val();
    var slug = generateSlug(inputText);
    $('.url-slug').val(slug);
  });

  function generateSlug(text) {
      console.log(text.trim().toLowerCase().replace(/\s+/g, '-').replace(/[^a-z0-9-]/g, ''));
      return text.toLowerCase().replace(/\s+/g, '-').replace(/[^a-z0-9-]+/g, '-').trim();
  }
});

function previewImages() {
    var preview = document.getElementById('images-preview');
    preview.innerHTML = '';

    var files = document.getElementById('images').files;
    console.log(files)

    for (var i = 0; i < files.length; i++) {
        var file = files[i];
        var reader = new FileReader();

        reader.onload = function (e) {
            var img = document.createElement('img');
            img.src = e.target.result;
            img.style.width = '100px'; // Set the thumbnail width
            img.style.height = '100px'; // Set the thumbnail height
            preview.appendChild(img);
        }

        reader.readAsDataURL(file);
    }
}