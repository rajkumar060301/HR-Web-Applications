<!DOCTYPE html>
<html>
<head>
  <script>
    function submitForm() {
      // Check if form has been submitted today
      if (localStorage.getItem("submittedDate") !== getCurrentDate()) {
        // Save the current date in local storage
        localStorage.setItem("submittedDate", getCurrentDate());

        // Perform the form submission or any desired action
        document.getElementById("myForm").submit();
        console.log(alert('submitted'));
        document.location.href ='raj.php';

      } else {
        // Display a message or take alternative action
        console.log(alert('Form already submitted today!'));

      }
    }

    function getCurrentDate() {
      var today = new Date();
      var date = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
      return date;
    }
  </script>
</head>
<body>
  <form id="myForm" action="raj.php">
    <!-- Your form fields go here -->

    <input type="submit" value="Submit" onclick="submitForm(); return false;">
  </form>
</body>
</html>
