<!DOCTYPE html>
<html>
<head>
  <title>Grades</title>
  <link rel="stylesheet" type="text/css" href="grades.css">
</head>
<body>
  <h1>Grades</h1>
  <div class="semester">
    <h2>First Semester</h2>
    <table>
      <tr>
        <th>Subject</th>
        <th>Grade</th>
      </tr>
      <tr>
        <td>ITEC 65</td>
        <td><input type="text" id="grade1-itec65"></td>
      </tr>
      <tr>
        <td>GNED 08</td>
        <td><input type="text" id="grade1-gned08"></td>
      </tr>
      <tr>
        <td>FITT 4</td>
        <td><input type="text" id="grade1-fitt4"></td>
      </tr>
      <tr>
        <td>ITEC 60</td>
        <td><input type="text" id="grade1-itec60"></td>
      </tr>
      <tr>
        <td>DCIT 55</td>
        <td><input type="text" id="grade1-dcit55"></td>
      </tr>
      <tr>
        <td>ITEC 70</td>
        <td><input type="text" id="grade1-itec70"></td>
      </tr>
      <tr>
        <td>DCIT 25</td>
        <td><input type="text" id="grade1-dcit25"></td>
      </tr>
    </table>
  </div>
  <div class="semester">
    <h2>Second Semester</h2>
    <table>
      <tr>
        <th>Subject</th>
        <th>Grade</th>
      </tr>
      <tr>
        <td>ITEC 65</td>
        <td><input type="text" id="grade2-itec65"></td>
      </tr>
      <tr>
        <td>GNED 08</td>
        <td><input type="text" id="grade2-gned08"></td>
      </tr>
      <tr>
        <td>FITT 4</td>
        <td><input type="text" id="grade2-fitt4"></td>
      </tr>
      <tr>
        <td>ITEC 60</td>
        <td><input type="text" id="grade2-itec60"></td>
      </tr>
      <tr>
        <td>DCIT 55</td>
        <td><input type="text" id="grade2-dcit55"></td>
      </tr>
      <tr>
        <td>ITEC 70</td>
        <td><input type="text" id="grade2-itec70"></td>
      </tr>
      <tr>
        <td>DCIT 25</td>
        <td><input type="text" id="grade2-dcit25"></td>
      </tr>
    </table>
  </div>
  <button onclick="outputGrades()">Submit</button>

  <script src="script.js"></script>
</body>
</html>