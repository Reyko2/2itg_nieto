function saveState(){
        var ans1 = document.querySelector('input[name="select"]:checked').value;

        if (ans1.value == 1){
              ans1.setAttribute("checked","checked");
              ans1.checked = true;
        }
   }
  