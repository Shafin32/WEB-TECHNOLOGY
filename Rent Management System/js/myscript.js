function validation()
{
 
    if(checkname()==false || checkgender()==false || checknum()==false || checkmail()==false || checkpass()==false || checkfile()==false){
    
        return false;
    }
    return true;   
}

function checkname()
{
    var name= document.getElementById("name").value;
    if(name=="" || name.length <3){
      document.getElementById("nameerror").innerHTML=
      "name must be mentioned";
        return false;
    }
    else{
        return true;
    }
}

function checkgender()
{ 
  if(document.getElementById("gender").checked==false)
  {
    document.getElementById("gendererror").innerHTML=
    "gender must be specified";
    return false;
  }
  return true;


}

function checknum()
{
  var number= document.getElementById("number").value;
  if(number=="" )
  {
    document.getElementById("numerror").innerHTML=
    "number must be mentioned";
    return false;
  }
  else{
    return true;
}
}

function checkmail()
{
  var email= document.getElementById("email").value;
    if(email=="")
  {
    document.getElementById("emailerror").innerHTML=
    "email must be specified";
    return false;
  }
  else{
    return true;
} 
}

function checkpass()
{
  var password=document.getElementById("pass").value;
    if(password=="")
  {
    document.getElementById("passworderror").innerHTML=
    "password must be specified";
    return false;
  }
  else{
    return true;
} 
}

function checkfile()
{
  var file=document.getElementById("image").value;
    if(file=="")
  {
    document.getElementById("fileerror").innerHTML=
    "file must be specified";
    return false;
  }
  else{
    return true;
}
}

function fetchAds()
{
  var category = document.getElementById("category").value;
  
  var xttp= new XMLHttpRequest();
  xttp.onreadystatechange = function(){
    if(this.readyState == 4 && this.status== 200)
    {
   document.getElementById("print").innerHTML=this.responseText;
    }
  }
  
  
  
  xttp.open("POST", "http://localhost/project/control/search_control.php", true);
  xttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xttp.send("category="+category);
  
  
  
  }