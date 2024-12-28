<!DOCTYPE html>
<html lang="en">
<head>
  <title>Chat GPT Laravel | Code with Ross</title>
  <link rel="icon" href="https://assets.edlin.app/favicon/favicon.ico"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- JavaScript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <!-- End JavaScript -->

  <!-- CSS -->
  <link href="{{ asset('css/gpt.css') }}" rel="stylesheet">
  <!-- End CSS -->

</head>

<body>
<div class="chat">

  <!-- Header -->
  <div class="top">
    <img src="https://media.istockphoto.com/id/1300845620/vector/user-icon-flat-isolated-on-white-background-user-symbol-vector-illustration.jpg?s=612x612&w=0&k=20&c=yBeyba0hUkh14_jgv1OKqIH0CCSWU_4ckRkAoy2p73o=" alt="Avatar">
    <div>
      <p>Ross Edlin</p>
      <small>Online</small>
    </div>
  </div>
  <!-- End Header -->

  <!-- Chat -->
  <div class="messages">
    <div class="left message">
      <img src="https://media.istockphoto.com/id/1300845620/vector/user-icon-flat-isolated-on-white-background-user-symbol-vector-illustration.jpg?s=612x612&w=0&k=20&c=yBeyba0hUkh14_jgv1OKqIH0CCSWU_4ckRkAoy2p73o=" alt="Avatar">
      <p>Start chatting with Chat GPT AI below!!</p>
    </div>
  </div>
  <!-- End Chat -->

  <!-- Footer -->
  <div class="bottom">
    <form>
      <input type="text" id="message" name="message" placeholder="Enter message..." autocomplete="off">
      <button type="submit"></button>
    </form>
  </div>
  <!-- End Footer -->

</div>
</body>

<script>
  //Broadcast messages
  $("form").submit(function (event) {
    event.preventDefault();

    //Stop empty messages
    if ($("form #message").val().trim() === '') {
      return;
    }

    //Disable form
    $("form #message").prop('disabled', true);
    $("form button").prop('disabled', true);

    $.ajax({
      url: "/chat",  // Make sure this matches your route
      method: 'POST',
      headers: {
        'X-CSRF-TOKEN': "{{ csrf_token() }}"
      },
      data: {
        "content": $("form #message").val()  // Send the user input as content
      }
    }).done(function (res) {
      // Add the user's message to the chat
      $(".messages").append('<div class="right message">' +
        '<p>' + $("form #message").val() + '</p>' +
        '<img src="https://media.istockphoto.com/id/1300845620/vector/user-icon-flat-isolated-on-white-background-user-symbol-vector-illustration.jpg?s=612x612&w=0&k=20&c=yBeyba0hUkh14_jgv1OKqIH0CCSWU_4ckRkAoy2p73o=" alt="Avatar">' +
        '</div>');

      // Add the AI's response to the chat
      $(".messages").append('<div class="left message">' +
        '<img src="https://media.istockphoto.com/id/1300845620/vector/user-icon-flat-isolated-on-white-background-user-symbol-vector-illustration.jpg?s=612x612&w=0&k=20&c=yBeyba0hUkh14_jgv1OKqIH0CCSWU_4ckRkAoy2p73o=" alt="Avatar">' +
        '<p>' + res + '</p>' +
        '</div>');

      // Clear input field
      $("form #message").val('');

      // Scroll to the bottom
      $(document).scrollTop($(document).height());

      // Enable form inputs
      $("form #message").prop('disabled', false);
      $("form button").prop('disabled', false);
    }).fail(function() {
      alert('Error: Could not communicate with GPT.');
    });
  });
</script>

</html>
