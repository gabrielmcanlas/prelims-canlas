<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrollment form</title>
</head>
<body>
<style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
      background-color: #fff;
    }

    h1 {
      text-align: center;
      color: #333;
      margin-bottom: 20px; 
    }

    h2 {
      max-width: 1100px;  
      margin: 0 auto; 
    }

    form {
      max-width: 1100px;  
      margin: 0 auto;
    }

    label {
      display: inline-block;
      margin-bottom: 10px; 
      font-weight: bold;
    }

    input[type="text"], input[type="email"], input[type="number"], select {
      width: 100%;
      padding: 12px; 
      margin-bottom: 15px; 
      border: 1px solid #ccc;
      border-radius: 6px; 
      box-sizing: border-box; 
    }

    input[type="radio"] {
      margin-right: 10px; 
    }

    .form-row {
      margin-bottom: 20px; 
    }

    input[type="submit"] {
      background-color: #007BFF; 
      color: white;
      padding: 8px 16px; 
      border: none;
      border-radius: 6px; 
      cursor: pointer;
      width: auto; 
      margin-top: 20px; 
      display: inline-block; 
      font-size: 14px; 
    }

    input[type="submit"]:hover {
      background-color: #0056b3; 
    }

    /* Hide the grade entry form initially */
    #grade-form {
      display: none;
    }

  </style>
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

  <!-- Grade Entry Form -->
  <div id="grade-form">
    <h2>Enter Grades </h2>

    <form action="submit_grades.php" method="post">
      <div class="form-row">
        <label for="prelim">Prelim Grade:</label>
        <input type="number" id="prelim" name="prelim" required><br><br>
      </div>

      <div class="form-row">
        <label for="midterm">Midterm Grade:</label>
        <input type="number" id="midterm" name="midterm" required><br><br>
      </div>

      <div class="form-row">
        <label for="final">Final Grade:</label>
        <input type="number" id="final" name="final" required><br><br>
      </div>

      <input type="submit" value="Submit Grades">
    </form>
  </div>
</div>
</body>
</html>