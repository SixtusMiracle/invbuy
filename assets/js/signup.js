function processSignup() {
  // clear error message and red borders on signupButton click
  $('#error').html('');

  $.ajax({
    url: 'inc/process_signup.php',
    data: $('#reg-form').serialize(),
    type: 'POST',
    dataType: 'json',
    success: function (data) {
      if ('ok' == data.status) {
        $('#error').html(data.message).css('color', 'green');
      } else if ('fail' == data.status) {
        $('#error').html(data.message);
        $(window).scrollTop(0);
      }
    },
  });
}

function processSignin() {
  // clear error message and red borders on signupButton click
  $('#error').html('');

  $.ajax({
    url: 'inc/process_signin.php',
    data: $('#signin-form').serialize(),
    type: 'POST',
    dataType: 'json',
    success: function (data) {
      if ('ok' == data.status) {
        window.location.href = '../components/dashboard.php';
      } else if ('fail' == data.status) {
        $('#error').html(data.message);
        $(window).scrollTop(0);
      }
    },
  });
}

/* Behaviours */

$('#signupButton').on('click', function (e) {
  // onClick for signup button
  e.preventDefault();
  processSignup();
});

$('#signup .form-input').keyup(function (e) {
  if (e.keyCode == 13) {
    // enter key
    processSignup();
  }
});

$('#signinButton').on('click', function (e) {
  // onClick for signin button
  e.preventDefault();
  processSignin();
});

$('#signin .form-input').keyup(function (e) {
  if (e.keyCode == 13) {
    // enter key
    processSignin();
  }
});
