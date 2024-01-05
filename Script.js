function getStudents() {
  var classSelect = document.getElementsByName("class-select")[0];
  var studentsContainer = document.getElementById("students-container");
  studentsContainer.innerHTML = "";

  if (classSelect.value === "") {
    return;
  }

  var numStudents = prompt("How many students are in this class?");
  for (var i = 0; i < parseInt(numStudents); i++) {
    var div = document.createElement("div");
    div.innerHTML =
      '<h3>STUDENT</h3><label>Student ID:</label> <input type="text" name="SID[]"><br><br>' +
      '<label>Student Name:</label> <input type="text" name="STN[]"><br><br>' +
      '<label>Address:</label> <input type="text" name="ADRS[]"><br><br>' +
      '<label>Date of birth:</label> <input type="date" name="DOB[]"><br><br>' +
      '<label>Gender:</label> <input type="text" name="GND[]"><br><br>' +
      '<label>Guardian:</label> <input type="text" name="GRD[]"><br><br>' +
      '<label>Contact Number:</label> <input type="text" name="CN[]"><br><br><br>';
    studentsContainer.appendChild(div);
  }
}

function deleteBook() {
  var bookName = prompt("Enter the name of the book to be deleted:");
  // Code to delete the book
}
function switchtheme(){
          const theme =
          document.getElementById("theme").value;
          document.getElementsByTagName("meta")
[0].content =theme;
}