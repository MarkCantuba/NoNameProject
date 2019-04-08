$(document).ready(function() {
   var getChildren = $("#categoryTableBody").children('tr'); 
   
   $("#categorySearch").keyup(function () {
       var currentValue = $("#categorySearch").val().replace(/\s/g, '').toLowerCase();
       var currentIndex = currentValue.length;
       
       for (var i = 0; i < getChildren.length; i++) {
           var getCurrentId = getChildren.get(i).id.toLowerCase();
           
           var currentChar = currentValue.substr(0, currentIndex);
           var currentIdChar = getCurrentId.substr(0, currentIndex);
           
           if (currentChar !== currentIdChar) {
               getChildren.get(i).style.display = "none";
           } else {
               getChildren.get(i).style.display = "";
           }
       } 
   });
});