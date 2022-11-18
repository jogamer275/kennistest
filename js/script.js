async function openResultPage(e) {
  var btn = e.target;
  var row = btn.parentNode.parentNode;
  var cells = row.getElementsByTagName("td");
  const text = {
    name: cells[1].textContent,
    status: cells[2].textContent,
    date: cells[3].textContent
  };

  var myWindow = window.open('', '_self');
  myWindow.document.write("<head>");
  myWindow.document.write("<meta charset='UTF-8'>");
  myWindow.document.write("<meta http-equiv='X-UA-Compatible' content='IE=edge'>");
  myWindow.document.write("<meta name='viewport' content='width=device-width, initial-scale=1.0'>");

  myWindow.document.write("<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi' crossorigin='anonymous'>");
  myWindow.document.write("<link rel='stylesheet' href='result.css' />");
  myWindow.document.write("<link rel='stylesheet' href='styles/own/orderStyle.css' />");
  myWindow.document.write("<script defer src='js/script.js'></script>");
  myWindow.document.write("<title>Document</title>");
  myWindow.document.write("</head>");
  myWindow.document.write("<body>");

  myWindow.document.write("<nav aria-label='breadcrumb'>");
  myWindow.document.write("<ol class='breadcrumb'>");
  myWindow.document.write("<li class='breadcrumb-item'><a href='http://localhost/'>Home</a></li>");
  myWindow.document.write("<li class='breadcrumb-item active' aria-current='page'>bestelinfo</li>");
  myWindow.document.write("</ol>");
  myWindow.document.write("</nav>");
  myWindow.document.write("<div class='order'>");
  myWindow.document.write("<div class='orderInfo'>");
  myWindow.document.write("<h1>bestelinformatie</h1>");
  myWindow.document.write("<p id='name'>Name: " + text.name + "</p>");
  myWindow.document.write("<p id='status'>Status: </p>");
  myWindow.document.write("<span class='badge text-bg-warning'>" + text.status + "</span>");
  myWindow.document.write("<p id='result'>Date: " + text.date + "</p>");
  myWindow.document.write("</div>");
  myWindow.document.write("</div>");

}