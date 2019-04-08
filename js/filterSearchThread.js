$(document).ready (function() {
  var threadSection = $("#threadArea").children('div');

   $("#threadSearch").keyup(function () {
       var currentText = $("#threadSearch").val().toLowerCase().replace(/\s/g, '');
       
       var index = currentText.length;
       
       var currentChar = currentText.substr(0, index);

       for (var i = 0; i < threadSection.length; i++) {
           
           var currentId = threadSection.get(i).id;
           var currentCharacter = currentId.substr(0,index).toLowerCase();
           alert(currentCharacter + " " + currentChar);
           if (currentCharacter !== currentChar) {
               threadSection.get(i).style.display = "none";
           } else {
               threadSection.get(i).style.display = "";
           }
       }  
   }); 
});