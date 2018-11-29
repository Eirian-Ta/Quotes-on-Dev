$(document).ready(function() {
    
  console.log("ready");
  
  $('#new-quote-button').on('click', function(event){

  console.log('button was clicked');

    $('.hentry').empty();
    
    $.ajax({
      beforeSend: xhr => xhr.setRequestHeader('X-WP-Nonce', red_vars.nonce),
      method:'GET',
      //url: window.location.origin + '/Project5/wp-json/wp/v2/posts?filter[orderby]=rand&filter[posts_per_page]=1' ,
      url: red_vars.root_url + 'wp/v2/posts?filter[orderby]=rand&filter[posts_per_page]=1'
    })

    .done(function(data) {

      var quote_content = data[0].excerpt.rendered,
          quote_author = data[0].title.rendered,
          quote_url = data[0]._qod_quote_source_url,
          quote_source = data[0]._qod_quote_source;

      var content = '';
      content += '<div class="entry-content"><p>' + quote_content + '</p></div>';
      content += '<header class="entry-meta"><h3 class="entry-title">' +  quote_author + '</h3>';
      content += '<span class="source"> <a href="' + quote_url + '">';
      content += quote_source + '</a></span></header>';

      console.log(data);

      $('.hentry').append(content);

    })
    .fail(() => {
      alert('Something went wrong. Please try again.')
    }); 

  });



    $('#submit-quote').on('click', function(event){

    event.preventDefault();

    $.ajax({
      method: 'POST',
      url: red_vars.root_url + 'wp/v2/posts',
      data:{
        title: $('#quote-author').val(),
        content: $('#quote-content').val(),
        _qod_quote_source: $('#quote-source').val(),
        _qod_quote_source_url: $('#quote-source-url').val(),
        status: 'pending'
      },
      beforeSend: xhr => xhr.setRequestHeader('X-WP-Nonce', red_vars.nonce)
    })

    .done ( function (){
      console.log(red_vars.success);
      $('#quote-submission-form').hide();
       $('.submit-success-message').html(red_vars.success);
    })

    
    .fail(function(){
      alert(red_vars.failure);
      });
  });  



});

