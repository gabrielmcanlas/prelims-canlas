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

  
  <form id="enrollmentForm" action="#" method="post" onsubmit="showGradeForm(event)" class="w-100 w-md-75 w-lg-50">
      <h5>Student Enrollment Form</h5>

      <div class="mb-3">
        <label for="first_name">First Name</label>
        <input type="text" id="first_name" name="first_name" class="form-control" required>
      </div>
      <div class="mb-3">
        <label for="last_name">Last Name</label>
        <input type="text" id="last_name" name="last_name" class="form-control" required>
      </div>
      <div class="mb-3">
        <label for="age">Age</label>
        <input type="number" id="age" name="age" class="form-control" required>
      </div>
      <div class="mb-3">
        <label>Gender:</label>
        <div>
          <input type="radio" id="male" name="gender" value="Male" required checked>
          <label for="male">Male</label>
          <input type="radio" id="female" name="gender" value="Female" required>
          <label for="female">Female</label>
        </div>
      </div>
      <div class="mb-3">
        <label for="course">Course</label>
        <select id="course" name="course" class="form-select" required>
          <option value="BSIT" checked>BSIT</option>
          <option value="BSHRM">BSHRM</option>
          <option value="BSBA">BSBA</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-primary w-10">Submit Student Information</button>
    </form>


    <div class="grade-form w-100 w-md-75 w-lg-50" id="gradeForm" style="display: none;">
      <h5>Enter Grades for: <span id="studentName"></span></h5>

      <form id="gradesForm" action="#" method="post" onsubmit="submitGrades(event)">
        <div class="mb-3">
          <label for="prelim">Prelim</label>
          <input type="number" id="prelim" name="prelim" class="form-control" required min="0" max="100">
        </div>
        <div class="mb-3">
          <label for="midterm">Midterm</label>
          <input type="number" id="midterm" name="midterm" class="form-control" required min="0" max="100">
        </div>
        <div class="mb-3">
          <label for="finals">Finals</label>
          <input type="number" id="finals" name="finals" class="form-control" required min="0" max="100">
        </div>
        <button type="submit" class="btn btn-primary w-10">Submit Grades</button>
      </form>
    </div>


    <div id="studentDetails" class="student-details w-100 w-md-75 w-lg-50 mt-4" style="display: none;">
    <form id="enrollmentForm" action="#" method="post" onsubmit="showGradeForm(event)" class="w-100 w-md-75 w-lg-50">
      <h5>Student Enrollment Form</h5>

      <div class="mb-3">
        <label for="first_name">First Name</label>
        <input type="text" id="first_name" name="first_name" class="form-control" required>
      </div>
      <div class="mb-3">
        <label for="last_name">Last Name</label>
        <input type="text" id="last_name" name="last_name" class="form-control" required>
      </div>
      <div class="mb-3">
        <label for="age">Age</label>
        <input type="number" id="age" name="age" class="form-control" required>
      </div>
      <div class="mb-3">
        <label>Gender:</label>
        <div>
          <input type="radio" id="male" name="gender" value="Male" required checked>
          <label for="male">Male</label>
          <input type="radio" id="female" name="gender" value="Female" required>
          <label for="female">Female</label>
        </div>
      </div>
      <div class="mb-3">
        <label for="course">Course</label>
        <select id="course" name="course" class="form-select" required>
          <option value="BSIT" checked>BSIT</option>
          <option value="BSHRM">BSHRM</option>
          <option value="BSBA">BSBA</option>
          
        </select>
      </div>
      <div class="mb-3">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" class="form-control" required><br>
      </div>
      <button type="submit" class="btn btn-primary w-10">Submit Student Information</button>
    </form>
    
    <h3>Student Details</h3>
      <p><b>First Name:</b> <span id="displayFirstName"></span></p>
      <p><b>Last Name:</b> <span id="displayLastName"></span></p>
      <p><b>Age:</b> <span id="displayAge"></span></p>
      <p><b>Gender:</b> <span id="displayGender"></span></p>
      <p><b>Course:</b> <span id="displayCourse"></span></p>
      <p><b>Email:</b> <span id="displayEmail"></span></p>
      <h3>Grades</h3>
      <p><b>Prelim:</b> <span id="displayPrelim"></span></p>
      <p><b>Midterm:</b> <span id="displayMidterm"></span></p>
      <p><b>Finals:</b> <span id="displayFinals"></span></p>
      <h3>Average Grade</h3>
      <p><span id="displayAverage"></span></p>
    </div>
  </div>

  <script>

    function showGradeForm(event) {
      event.preventDefault();

      const firstName = document.getElementById('first_name').value;
      const lastName = document.getElementById('last_name').value;
      const age = document.getElementById('age').value;
      const gender = document.querySelector('input[name="gender"]:checked').value;
      const course = document.getElementById('course').value;
      const email = document.getElementById('email').value;

      window.studentDetails = { firstName, lastName, age, gender, course, email };

      document.getElementById('studentName').textContent = firstName + ' ' + lastName;

      document.getElementById('enrollmentForm').style.display = 'none';
      document.getElementById('gradeForm').style.display = 'block';
    }

    function submitGrades(event) {
      event.preventDefault();

      const prelim = parseFloat(document.getElementById('prelim').value);
      const midterm = parseFloat(document.getElementById('midterm').value);
      const finals = parseFloat(document.getElementById('finals').value);
      const average = ((prelim + midterm + finals) / 3).toFixed(2);

      let status = average >= 75 ? 'Passed' : 'Failed';
      let statusClass = average >= 75 ? 'status-passed' : 'status-failed';

      document.getElementById('displayFirstName').textContent = window.studentDetails.firstName;
      document.getElementById('displayLastName').textContent = window.studentDetails.lastName;
      document.getElementById('displayAge').textContent = window.studentDetails.age;
      document.getElementById('displayGender').textContent = window.studentDetails.gender;
      document.getElementById('displayCourse').textContent = window.studentDetails.course;
      document.getElementById('displayEmail').textContent = window.studentDetails.email;
      document.getElementById('displayPrelim').textContent = prelim;
      document.getElementById('displayMidterm').textContent = midterm;
      document.getElementById('displayFinals').textContent = finals;
      document.getElementById('displayAverage').textContent = `${average} (${status})`;
      document.getElementById('displayAverage').classList.add(statusClass);

      document.getElementById('gradeForm').style.display = 'none';
      document.getElementById('studentDetails').style.display = 'block';
    }
  </script>
</body>
</html>