var FrontPage;
function Myfunction() {
    FrontPage = setTimeout(showPage, 2000);
    FrontPage = setTimeout(hideload, 2100);
}
function showPage() {
  document.getElementById("loading").classList.add('deactivate');
}
function hideload() {
  document.getElementById("loading").classList.add('hide');
}


Myfunction();