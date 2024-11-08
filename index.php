<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrollment form</title>
</head>
<body>
<h1>Student Enrollment And Grade Processing System</h1>

<!-- Enrollment Form -->
<div id="enrollment-form">
  <h2> Student Enrollment Form </h2>

  <form id="enroll" action="submit_form.php" method="post" onsubmit="showGradeForm(event)">
    <div class="form-row">
      <label for="first_name">First Name:</label>
      <input type="text" id="first_name" name="first_name" required>
    </div>

    <div class="form-row">
      <label for="last_name">Last Name:</label>
      <input type="text" id="last_name" name="last_name" required>
    </div>

    <div class="form-row">
      <label for="age">Age:</label>
      <input type="number" id="age" name="age" required>
    </div>

    <div class="form-row">
      <label>Gender:</label><br>
      <input type="radio" id="male" name="gender" value="male" required>
      <label for="male">Male</label>
      <input type="radio" id="female" name="gender" value="female" required>
      <label for="female">Female</label>
    </div>

    <div class="form-row">
      <label for="course">Course:</label>
      <select id="course" name="course" required>
        <option value="">Select a course</option>
        <option value="bsit">BSIT</option>
        <option value="bsba">BSBA</option>
        <option value="bshm">BSHM</option>
      </select>
    </div>

    <div class="form-row">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
    </div>

    <input type="submit" value="Submit Student Information">
  </form>
</div>
</body>
</html>