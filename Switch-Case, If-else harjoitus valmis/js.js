function selectfunction(){ //Function for which value user chooses, values are hidden
     document.getElementById("div1").hidden = true;
     document.getElementById("div2").hidden = true;
     let shapes=document.getElementById("shapes").value;
    
    if (shapes == "circle") 
    {
      document.getElementById("div1").hidden = false;
    } 
    if (shapes == "rectangle") 
    {
      document.getElementById("div2").hidden = false;
    }
}

function buttonfuction(){ //button function and calculating circle and rectangle values
let shapes = document.getElementById("shapes").value;
let area = 0;

switch (shapes) // switch case which calculates shape value which user chose
{
  case "circle":
    let radius = document.getElementById("radius").value; //if user chose circle, this case is calculated
    area = Math.PI * radius * radius;
    let a = document.getElementById("myCanvas");
let ctx = a.getContext("2d");
ctx.beginPath();
ctx.arc(100, 75, 50, radius, 0, 2 * Math.PI);
ctx.lineWidth = 10;
ctx.strokeStyle="magenta";
ctx.stroke()
ctx.fillStyle = "chartreuse";
ctx.fill();
    break;

  case "rectangle":
    let stem = document.getElementById("stem").value; //if user chose rectangle, this case is calculated
    let height = document.getElementById("height").value;
    area = stem * height;
    let b = document.getElementById("myCanvas");
let d = b.getContext("2d");
d.beginPath();
d.rect(20, 50, stem, height);
d.stroke();
// Create gradient
let grd = d.createLinearGradient(20, 50, stem, height);
grd.addColorStop(0,"#FF00FF");
grd.addColorStop(1,"#DFFF00");

// Fill with gradient
d.fillStyle = grd;
d.fillRect(20, 50, stem, height);
    break;
}
document.getElementById("result").innerHTML= + area; // moves answer to html
  if (area <0) //if statement is in same function in switch statement and shows string attached to result of math answer. 
  {
  document.getElementById("result2").innerHTML = "Jotain meni pieleen";
  }
  else if(area <10)
  {
  document.getElementById("result2").innerHTML = "Pieni pinta-ala";
  }
  else if(area >=10 && area<=50)
  {
  document.getElementById("result2").innerHTML = "Sopiva pinta-ala";
  }
  else if(area >50)
  {
  document.getElementById("result2").innerHTML = "Suuri pinta-ala";
  }
}