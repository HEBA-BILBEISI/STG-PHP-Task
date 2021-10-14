<!-- <?php
      // include"config.php";
      ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Creating Editable Elements in HTML5</title>
</head>
<body>
    <h3 contentEditable="true">Your Name</h3>
    <div class="test" id= "test" contentEditable="true">Add Text</div> -->

<!-- <p contentEditable="true">Your Comment</p> -->
<!-- <p><input type="submit" value="Send"/></p>
</body>
</html>
<script>
  alert($('.test').html());
</script> -->

<div class="big_wrapper" contenteditable>
  PAGE CONTENT
</div>

<input type="button" value="Send Data" id="mybutt">

<script type="text/javascript">
  $('#mybutt').click(function() {
    var myTxt = $('.big_wrapper').html();
    $.ajax({
      type: 'post',
      url: 'sent_data.php',
      data: 'varname=' + myTxt + '&anothervar=' + moreTxt
    });
  });





  $('.editable').prop('disabled', true);

  $('.editbutt').click(function() {
    var num = $(this).attr('id').split('-')[1];
    $('#edit-' + num).prop('disabled', false).focus();
  });

  $('.editable').blur(function() {
    var myTxt = $(this).val();
    $.ajax({
      type: 'post',
      url: 'some_php_file.php',
      data: 'varname=' + myTxt + '&anothervar=' + moreTxt
    });
  });
</script>