function ow1oeffnen() {
    window.open('/overwatch1_web_referat_s1.html');
}

function ow2oeffnen() {
    window.open('/overwatch2_web_referat_s1.html');
}

function mw1oeffnen() {
    window.open('/codmw1_web_referat_s1.html');
}

function mw2oeffnen() {
    window.open('/codmw2_web_referat_s1.html');
}

function zurueck() {
    // window.close(this);
    window.open("/index_web_referat_s1.html", "_self");
 //href="/index_web_referat_s1.html"

 //vlt open. ...
}

function zurueck2() {
    window.close(this);
}

// function search() {
     // //Declare variables
  // var input, filter, ul, li, a, i, txtValue;
  // input = document.getElementById('myInput');
  // filter = input.value.toUpperCase();
  // ul = document.getElementById("spiele");
  // li = ul.getElementsByTagname('figure'); debugger

  // //Loop through all list items, and hide those who don't match the search query
  // for (i = 0; i < li.length; i++) {
  //   a = li[i].getElementsByTagName("figcaption")[0];
  //   txtValue = a.textContent || a.innerText;
  //   if (txtValue.toUpperCase().indexOf(filter) > -1) {
  //     li[i].style.display = "";
  //   } else {
  //     li[i].style.display = "none";
  //   }
  // }
// }


//search function
  document.getElementById('search_input').addEventListener('keyup', function() {
    var searchQuery = this.value;
    // console.log(searchQuery);

    if (!searchQuery) {
      $('#search_output').html("");
      return;
    }

    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'search.php?q=' + searchQuery, true);
    xhr.onload = function() {
      if (this.status == 200) {
        var name = this.responseText;
        // document.getElementById('search_output').value = name;
        // console.log(JSON.parse(name));

        var ergebnis = JSON.parse(name);

        $('#search_output').html("");
        // $('#search_output').html("<ul>");
        for (var i = 0; i < ergebnis.length; i++) {
          $('#search_output').append("<p>");
          $('#search_output').append(ergebnis[i]);
          $('#search_output').append("</p>");
        }

        // $('#search_output').append("</ul>");

      }
    };
    xhr.send();
  });




function schliessen() {
    window.close(this);  //Spiele-Window wird geschlossen
}

function deleteaccount() {
  let confirmAction = confirm('Are you sure you want to delete your current account?');
  if (confirmAction) {
    deleteaccount2();
  }
  else {
    return;
  }
}

  window.history.forward();
  function noback() {
    window.history.forward();
}

function spieleladen() {
  var xhr = new XMLHttpRequest();
    xhr.open('GET', 'sql.php?spieleladen');
    xhr.onload = function() {
      if (this.status == 200) {
        var name = this.responseText;
        // document.getElementById('search_output').value = name;
        // console.log(JSON.parse(name));

        var ergebnis = JSON.parse(name);

        // $('#loadgames').html("");
        // $('#search_output').html("<ul>");
        for (var i = 0; i < ergebnis.length; i++) {
          $('#loadgames').append("<div>");
          $('#loadgames').append(ergebnis[i]);
          $('#loadgames').append("</div>");
        }

        // $('#search_output').append("</ul>");

      }
    };
    xhr.send();
  }
