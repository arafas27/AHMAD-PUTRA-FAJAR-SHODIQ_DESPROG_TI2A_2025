$(document).ready(function() {

  $('#contactForm').on('submit', function(e) {
    e.preventDefault();

    const $btn = $(this).find('button'); 
    $btn.prop('disabled', true).find('span').text('Sending...'); 

    // Kirim data 
    $.ajax({
      url: 'proses.php',   
      method: 'POST',    
      dataType: 'json',    
      data: $(this).serialize(),
    })

    .done(function(res) {
      if (res.success) {
        alert(' Message saved successfully!');
        $('#contactForm')[0].reset();
      } else {
        alert(' Error saving message: ' + (res.error || 'Unknown error'));
      }
    })

    .fail(function() {
      alert(' Server error. Please try again.');
    })

    .always(function() {
      $btn.prop('disabled', false).find('span').text('Send Message');
    });
  });


  $('#showHistory').on('click', function() {
    $.ajax({
      url: 'riwayat_pesan.json', 
      method: 'POST',             
      dataType: 'json',         
      cache: false               
    })
    .done(function(data) {
      const $tbody = $('#historyTable tbody'); 
      $tbody.empty(); 

      if (data.length === 0) {
        $tbody.append('<tr><td colspan="5" style="text-align:center;">No messages yet.</td></tr>');
      } else {
        let no = 1;
        data.slice().reverse().forEach(msg => {
          $tbody.append(`
            <tr>
              <td>${no++}</td>
              <td>${msg.name}</td>
              <td>${msg.email}</td>
              <td>${msg.message}</td>
              <td>${msg.time}</td>
            </tr>
          `);
        });
      }

      $('#historyContainer').fadeToggle(300);
    })

    .fail(function() {
      alert(' Failed to load message history.');
    });
  });
});
