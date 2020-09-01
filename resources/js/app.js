require('./bootstrap');

var $ = require('jquery');

var Handlebars = require("handlebars");

$(document).ready(function() {
  $.ajax(
    {
      url: 'http://localhost:8000/api/students',
      method: 'GET',
      success: function(dataResponse) {
        var allStudents = dataResponse.students;

        var source = $("#student-template").html();
        var template = Handlebars.compile(source);

        for (var i = 0; i < allStudents.length; i++) {
          var thisStudent = allStudents[i];
          var html = template(thisStudent);
          $('#studentList').append(html);
        }

      },
      error: function() {
        alert('error');
      }
    }
  );
});
