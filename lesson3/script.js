$(function () {
    $.ajax({
      url: 'chat.txt',
    })
      .done(function (data) {
        data.split('\n').forEach(function (chat) {
          const post_text = chat.split(',')[0];
          const post_time = chat.split(',')[1];
          if (post_text) {
            const li = `<li>${post_text}<span>${post_time}</span><li>`;
            $('ul').append(li);

          }
        });

      });
  });