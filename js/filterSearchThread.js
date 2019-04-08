$(document).ready (function() {
  var threadSection = $("#threadArea").children();
  
   $("#threadSearch").keyup(function () {
       var currentText = $("#threadSearch").val().toLowerCase().replace(' ', '');
       
       var index = currentText.length - 1;
       var currentChar = currentText.charAt(index);
       
       for (var i = 0; i < threadSection.length; i++) {
           var currentId = threadSection.get(i).id;
           var currentCharacter = currentId.charAt(index).toLowerCase();
           
           if (currentCharacter !== currentChar) {
               $("#"+currentId).hide();
           } else {
               $("#"+currentId).show();
           }
       }
       
        
   });
   
});