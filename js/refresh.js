var seconds = 5;
var content = "identifier";
var url = "notification.php";

function refreshContents()
{
   var xmlHttp;
   try
   {
      xmlHttp = new XMLHttpRequest();
   }
   catch(e)
   {
      try
      {
         xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
      }
      catch(f)
      {
         try
         {
            xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
         }
         catch(g)
         {
            alert("Browser not supports Ajax");
            return false;
         }
      }
   }


   xmlHttp.onreadystatechange=function()
   {
      if (xmlHttp.readyState == 4)
      {
         document.getElementById(content).innerHTML = xmlHttp.responseText;
         setTimeout('refreshContents()', seconds*1000);
      }
   }

   xmlHttp.open("GET", url, true);
   xmlHttp.send(null);
}

var seconds = 5;
window.onload = function startrefresh(){
   setTimeout('refreshContents()', seconds*1000);
}