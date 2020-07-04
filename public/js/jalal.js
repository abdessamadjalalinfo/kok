      
      const myForm =  document.querySelector('#myForm');

      function validateForm() {
        
        var now=new Date();
        var valeur=document.forms["myForm"].elements["valeurbudget"].value;
        var annee= document.forms["myForm"].elements["annee"].value;
        var anne=now.getFullYear();
        
        var aai = document.forms["myForm"].elements["aai"].value;
        var me = document.forms["myForm"].elements["me"].value;
        var mb = document.forms["myForm"].elements["mb"].value;
        var mil = document.forms["myForm"].elements["mil"].value;
        var mb1 = document.forms["myForm"].elements["mb1"].value;
        var me1 = document.forms["myForm"].elements["me1"].value;
        var fi = document.forms["myForm"].elements["fi"].value;
        var fcl = document.forms["myForm"].elements["fcl"].value;
        var ad = document.forms["myForm"].elements["ad"].value;
        var ee = document.forms["myForm"].elements["ee"].value;
        var c = document.forms["myForm"].elements["c"].value;

        if ( annee.length!=9 || (!( annee.substring(0,4)==anne && (annee.indexOf("/")==4 || annee.indexOf("-")==4 )&& annee.substr(5)==anne+1) && !(annee.substring(0,4)==anne-1 && ( annee.indexOf("/")==4 || annee.indexOf("-")==4) && annee.substr(5)==anne))){
          alert("Veuillez renseigner le champ année universitaire");
           return false;
         }
           if(valeur<10000){
          alert("Veuillez renseigner le champ valeur Budget ");
          return false;
        }
        function reduceValidator (arr,errorHandler,value) {
          // we use filter to remove blank values inside array then we transform string to number on every array item
          // why I tranform string to number ? because I wan't to get the some of all numbers
          let numbers = arr.filter((number)=>number !== "").map((number)=>Number(number))
          // reduce is prebuilt-in function to get sum from array https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/reduce
          if(numbers.reduce((sum,currentValue)=>sum+=currentValue) > value) {
            // if sum of all numbers are greeter than (valeur badget) this function return false to stop submit from executing
            alert("Veuillez Vérifiez le montant pour chaque rubrique ");
            return false
            }
            return true
          }
        


        
        if(reduceValidator([aai,me,mb,mil,mb1,me1,fi,fcl,ad,ee,c],
            document.getElementById("erreur"),
            valeur
            )) {
          
              return true
          }
        }
        
      
   
      

      myForm.addEventListener("submit", (e)=>{
        e.preventDefault() //we can use this prebuild-in function to stop submit event
        if(validateForm()) myForm.submit() // if everything ok we submit the form
       
      });

   function myFunction1() {
  // Get the checkbox
  var checkBox = document.getElementById("myCheck");
  // Get the output text
  var text = document.getElementById("text");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
    text.style.display = "none";
  }
  


  //
  var checkBox1 = document.getElementById("myCheck1");
  // Get the output text
  var text1 = document.getElementById("text1");

  // If the checkbox is checked, display the output text
  if (checkBox1.checked == true){
    text1.style.display = "block";
  } else {
    text1.style.display = "none";
  }
  //----------------
  var checkBox2 = document.getElementById("myCheck2");
  // Get the output text
  var text2 = document.getElementById("text2");

  // If the checkbox is checked, display the output text
  if (checkBox2.checked == true){
    text2.style.display = "block";
  } else {
    text2.style.display = "none";
  }

  //----------------
  var checkBox3 = document.getElementById("myCheck3");
  // Get the output text
  var text3 = document.getElementById("text3");

  // If the checkbox is checked, display the output text
  if (checkBox3.checked == true){
    text3.style.display = "block";
  } else {
    text3.style.display = "none";
  }



  //----------------
  var checkBox4 = document.getElementById("myCheck4");
  // Get the output text
  var text4 = document.getElementById("text4");

  // If the checkbox is checked, display the output text
  if (checkBox4.checked == true){
    text4.style.display = "block";
  } else {
    text4.style.display = "none";
  }


  //----------------
  var checkBox5 = document.getElementById("myCheck5");
  // Get the output text
  var text5 = document.getElementById("text5");

  // If the checkbox is checked, display the output text
  if (checkBox5.checked == true){
    text5.style.display = "block";
  } else {
    text5.style.display = "none";
  }


  //----------------
  var checkBox6 = document.getElementById("myCheck6");
  // Get the output text
  var text6 = document.getElementById("text6");

  // If the checkbox is checked, display the output text
  if (checkBox6.checked == true){
    text6.style.display = "block";
  } else {
    text6.style.display = "none";
  }

  //----------------
  var checkBox7 = document.getElementById("myCheck7");
  // Get the output text
  var text7 = document.getElementById("text7");

  // If the checkbox is checked, display the output text
  if (checkBox7.checked == true){
    text7.style.display = "block";
  } else {
    text7.style.display = "none";
  }

  //----------------
  var checkBox8 = document.getElementById("myCheck8");
  // Get the output text
  var text8 = document.getElementById("text8");

  // If the checkbox is checked, display the output text
  if (checkBox8.checked == true){
    text8.style.display = "block";
  } else {
    text8.style.display = "none";
  }
  //----------------
  var checkBox9 = document.getElementById("myCheck9");
  // Get the output text
  var text9 = document.getElementById("text9");

  // If the checkbox is checked, display the output text
  if (checkBox9.checked == true){
    text9.style.display = "block";
  } else {
    text9.style.display = "none";
  }

  //----------------
  var checkBox10 = document.getElementById("myCheck10");
  // Get the output text
  var text10 = document.getElementById("text10");

  // If the checkbox is checked, display the output text
  if (checkBox10.checked == true){
    text10.style.display = "block";
  } else {
    text10.style.display = "none";
  }

}

    