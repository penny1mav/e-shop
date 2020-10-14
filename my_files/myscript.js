function one(){

var ele2 = document.getElementById('password2');



document.getElementById('toggleBtn2').onclick = function() {
	if( this.innerHTML == 'Show' ) {
  	this.innerHTML = 'Hide'
  	ele2.type="text";
  } else {
  	this.innerHTML = 'Show'
  	ele2.type="password";
  }
}
}




function RNG() {
    var input1=document.getElementById("check1");
    var input2=document.getElementById("check2");
    var input3=document.getElementById("check3");
    var input4=document.getElementById("check4");
    var input5=document.getElementById("check5");
    var input6=document.getElementById("check6");

    var flip1=document.getElementById("cake1").value=Math.floor(Math.random()*6);
    var flip2=document.getElementById("cake2").value=Math.floor(Math.random()*6);
    var flip3=document.getElementById("cake3").value=Math.floor(Math.random()*6);
    var flip4=document.getElementById("cake4").value=Math.floor(Math.random()*6);
    var flip5=document.getElementById("cake5").value=Math.floor(Math.random()*6);
    var flip6=document.getElementById("cake6").value=Math.floor(Math.random()*6);

    input1.checked = false;
    input2.checked = false;
    input3.checked = false;
    input4.checked = false;
    input5.checked = false;
    input6.checked = false;

        if(flip1 !=0){
            input1.checked = true;
        }
        if(flip2 !=0 ){
            input2.checked = true;
    }
        if(flip3 !=0 ){
            input3.checked = true;
        }
        if(flip4 != 0 ){
            input4.checked = true;
        }
        if(flip5 !=0 ){
            input5.checked = true;
            }
        if(flip6 !=0 ){
            input6.checked = true;
            }


    TotalCost();

}

function RNG2() {
    var input1=document.getElementById("check1");
    var input2=document.getElementById("check2");
    var input3=document.getElementById("check3");
    var input4=document.getElementById("check4");
    var input5=document.getElementById("check5");
    var input6=document.getElementById("check6");

    var flip1=document.getElementById("cupcake1").value=Math.floor(Math.random()*6);
    var flip2=document.getElementById("cupcake2").value=Math.floor(Math.random()*6);
    var flip3=document.getElementById("cupcake3").value=Math.floor(Math.random()*6);
    var flip4=document.getElementById("cupcake4").value=Math.floor(Math.random()*6);
    var flip5=document.getElementById("cupcake5").value=Math.floor(Math.random()*6);
    var flip6=document.getElementById("cupcake6").value=Math.floor(Math.random()*6);

    input1.checked = false;
    input2.checked = false;
    input3.checked = false;
    input4.checked = false;
    input5.checked = false;
    input6.checked = false;

        if(flip1 !=0){
            input1.checked = true;
        }
        if(flip2 !=0 ){
            input2.checked = true;
    }
        if(flip3 !=0 ){
            input3.checked = true;
        }
        if(flip4 != 0 ){
            input4.checked = true;
        }
        if(flip5 !=0 ){
            input5.checked = true;
            }
        if(flip6 !=0 ){
            input6.checked = true;
            }


    TotalCost2();

}
function RNG3() {
    var input1=document.getElementById("check1");
    var input2=document.getElementById("check2");
    var input3=document.getElementById("check3");
    var input4=document.getElementById("check4");
    var input5=document.getElementById("check5");
    var input6=document.getElementById("check6");

    var flip1=document.getElementById("drink1").value=Math.floor(Math.random()*6);
    var flip2=document.getElementById("drink2").value=Math.floor(Math.random()*6);
    var flip3=document.getElementById("drink3").value=Math.floor(Math.random()*6);
    var flip4=document.getElementById("drink4").value=Math.floor(Math.random()*6);
    var flip5=document.getElementById("drink5").value=Math.floor(Math.random()*6);
    var flip6=document.getElementById("drink6").value=Math.floor(Math.random()*6);

    input1.checked = false;
    input2.checked = false;
    input3.checked = false;
    input4.checked = false;
    input5.checked = false;
    input6.checked = false;

        if(flip1 !=0){
            input1.checked = true;
        }
        if(flip2 !=0 ){
            input2.checked = true;
    }
        if(flip3 !=0 ){
            input3.checked = true;
        }
        if(flip4 != 0 ){
            input4.checked = true;
        }
        if(flip5 !=0 ){
            input5.checked = true;
            }
        if(flip6 !=0 ){
            input6.checked = true;
            }


    TotalCost3();

}
function select(){
    document.getElementById("check1").checked = true;
    document.getElementById("check2").checked = true;
    document.getElementById("check3").checked=true;
    document.getElementById("check4").checked=true;
    document.getElementById("check5").checked=true;
    document.getElementById("check6").checked=true;
}
function unselect(){
    document.getElementById("check1").checked = false;
    document.getElementById("check2").checked = false;
    document.getElementById("check3").checked=false;
    document.getElementById("check4").checked=false;
    document.getElementById("check5").checked=false;
    document.getElementById("check6").checked=false;
}

function step2(){


    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close2")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
      modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }


}
function step2cup(){


    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close2")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
      modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }


}

function step2drink(){


    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close2")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
      modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }


}




function step1(){


    var modal = document.getElementById("myModal");
    var span = document.getElementsByClassName("close2")[0];

    span.onclick = function() {
        modal.style.display = "none";
      }




}



function step1cup(){


    var modal = document.getElementById("myModal");
    var span = document.getElementsByClassName("close2")[0];

    span.onclick = function() {
        modal.style.display = "none";
      }



}



function step1drink(){


    var modal = document.getElementById("myModal");
    var span = document.getElementsByClassName("close2")[0];

    span.onclick = function() {
        modal.style.display = "none";
      }




}



function step3(){





var modal = document.getElementById("myModal2");

// Get the button that opens the modal
var btn = document.getElementById("nextBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close2")[1];




// When the user clicks the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

}

function step4() {
    var selectBox = document.getElementById("selectBoxx");
    var selectedValue = selectBox.options[selectBox.selectedIndex].value;
    var btn = document.getElementById("nextBtn2");



    if(selectedValue=="card"){
        var modal2 = document.getElementById("myModal4");
        var span2 = document.getElementsByClassName("close2")[2];
        btn.onclick = function() {
        modal2.style.display = "block";
    }

    span2.onclick = function() {
    modal2.style.display = "none";
    }


    }
    else if(selectedValue=="pay on delivery"){
        var modal3 = document.getElementById("myModal3");
        var span3 = document.getElementsByClassName("close2")[2];

        btn.onclick = function() {
          modal3.style.display = "block";
        }
                span3.onclick = function() {
          modal3.style.display = "none";
        }

       }
}

function success(){

    alert("success! ");
}



function success2(){
    var txt;
    var x=document.getElementById("remBox");

    var r =  confirm("Are you sure ?");
    if (r == true) {
        x.checked=true;
    } else {
        x.checked=false;
    }
    }


function welcome(){
    alert("New choco maniac has arrived! ");
}


function TotalCost(){
var input1=document.getElementById("check1");
var input2=document.getElementById("check2");
var input3=document.getElementById("check3");
var input4=document.getElementById("check4");
var input5=document.getElementById("check5");
var input6=document.getElementById("check6");
var input7=document.getElementById("expr");


var test1=parseInt(document.getElementById("cake1").value);
var test2=parseInt(document.getElementById("cake2").value);
var test3=parseInt(document.getElementById("cake3").value);
var test4=parseInt(document.getElementById("cake4").value);
var test5=parseInt(document.getElementById("cake5").value);
var test6=parseInt(document.getElementById("cake6").value);

var test=test1*10+test2*10+test3*10+test4*10+test5*10+test6*10;
var s=document.getElementById("BoughtItemsContainer");

s.innerHTML="";
if(input1.checked==true || test1!=0){
    var x=test1;
    var cakeAinfo=document.createElement("h2");
    cakeAinfo.innerHTML="Ferrero cake " +x  +" x 10$";
    s.appendChild(cakeAinfo);

}
if(input2.checked==true || test2!=0){
var x2=test2;
var cakeBinfo=document.createElement("h2");
cakeBinfo.innerHTML="Blackforest Cake " +x2 +" x 10$";
s.appendChild(cakeBinfo);


}
if(input3.checked==true || test3!=0){
    var x3=test3;
    var cakeCinfo=document.createElement("h2");
    cakeCinfo.innerHTML="Strawberry Cake " +x3 +" x 10$";
    s.appendChild(cakeCinfo);
}

if(input4.checked==true || test4!=0){
    var x4=test4;
    var cakeDinfo=document.createElement("h2");
    cakeDinfo.innerHTML="Nutella Cake " +x4 +" x 10$";
    s.appendChild(cakeDinfo);
}

if(input5.checked==true || test5!=0){
    var x5=test5;
    var cakeEinfo=document.createElement("h2");
    cakeEinfo.innerHTML="Bueno Cake " +x5 +" x 10$";
    s.appendChild(cakeEinfo);
}

if(input6.checked==true || test6!=0){
    var x6=test6;
    var cakeGinfo=document.createElement("h2");
    cakeGinfo.innerHTML="Oreo Cake " +x6 +" x 10$";
    s.appendChild(cakeGinfo);
    }
console.log(input7.checked);
var total1=document.getElementById("total");
if(test<=0)
{
    total1.innerHTML="";
    return 0
}
if(test>30){
total1.innerHTML="Total:" +test +"$";
}
else{

    if(input7.checked){
        var w=test+6;
        total1.innerHTML="Total:" +w +"$";
    }
    else{
    var w=test+2;
    total1.innerHTML="Total:" +w +"$";
    }

}


return test;

    }
    function TotalCost2(){
        var input1=document.getElementById("check1");
        var input2=document.getElementById("check2");
        var input3=document.getElementById("check3");
        var input4=document.getElementById("check4");
        var input5=document.getElementById("check5");
        var input6=document.getElementById("check6");
        var input7=document.getElementById("expr");


        var test1=parseInt(document.getElementById("cupcake1").value);
        var test2=parseInt(document.getElementById("cupcake2").value);
        var test3=parseInt(document.getElementById("cupcake3").value);
        var test4=parseInt(document.getElementById("cupcake4").value);
        var test5=parseInt(document.getElementById("cupcake5").value);
        var test6=parseInt(document.getElementById("cupcake6").value);


        var test=test1*4+test2*4+test3*4+test4*4+test5*4+test6*4;
        var s=document.getElementById("BoughtItemsContainer");

        s.innerHTML="";
        if(input1.checked==true || test1!=0){
            var x=test1;
            var cakeAinfo=document.createElement("h2");
            cakeAinfo.innerHTML="Strawberry Cupcake " +x  +" x 4$";
            s.appendChild(cakeAinfo);

        }
        if(input2.checked==true || test2!=0){
        var x2=test2;
        var cakeBinfo=document.createElement("h2");
        cakeBinfo.innerHTML="Nutella Cupcake " +x2 +" x 4$";
        s.appendChild(cakeBinfo);


        }
        if(input3.checked==true || test3!=0){
            var x3=test3;
            var cakeCinfo=document.createElement("h2");
            cakeCinfo.innerHTML="Caramel Cupcake " +x3 +" x 4$";
            s.appendChild(cakeCinfo);
        }

        if(input4.checked==true || test4!=0){
            var x4=test4;
            var cakeDinfo=document.createElement("h2");
            cakeDinfo.innerHTML="Lemon Cupcake " +x4 +" x 4$";
            s.appendChild(cakeDinfo);
        }

        if(input5.checked==true || test5!=0){
            var x5=test5;
            var cakeEinfo=document.createElement("h2");
            cakeEinfo.innerHTML="Oreo Cupcake " +x5 +" x 4$";
            s.appendChild(cakeEinfo);
        }

        if(input6.checked==true || test6!=0){
            var x6=test6;
            var cakeGinfo=document.createElement("h2");
            cakeGinfo.innerHTML="Bueno Cupcake " +x6 +" x 4$";
            s.appendChild(cakeGinfo);
            }

            console.log(input7.checked);
var total1=document.getElementById("total");
if(test<=0)
{
    console.log("1234");
    total1.innerHTML="";
    return 0
}
if(test>30){
total1.innerHTML="Total:" +test +"$";
}
else{

    if(input7.checked){
        var w=test+6;
        total1.innerHTML="Total:" +w +"$";
    }
    else{
    var w=test+2;
    total1.innerHTML="Total:" +w +"$";
    }

        }
    }

        function TotalCost3(){
            var input1=document.getElementById("check1");
            var input2=document.getElementById("check2");
            var input3=document.getElementById("check3");
            var input4=document.getElementById("check4");
            var input5=document.getElementById("check5");
            var input6=document.getElementById("check6");
            var input7=document.getElementById("expr");


            var test1=parseInt(document.getElementById("drink1").value);
            var test2=parseInt(document.getElementById("drink2").value);
            var test3=parseInt(document.getElementById("drink3").value);
            var test4=parseInt(document.getElementById("drink4").value);
            var test5=parseInt(document.getElementById("drink5").value);
            var test6=parseInt(document.getElementById("drink6").value);

            var test=test1*2+test2*2+test3*2+test4*2+test5*2+test6*2;
            var s=document.getElementById("BoughtItemsContainer");

            s.innerHTML="";
            if(input1.checked==true || test1!=0){
                var x=test1;
                var cakeAinfo=document.createElement("h2");
                cakeAinfo.innerHTML="Ferrero Drink " +x  +" x 2$";
                s.appendChild(cakeAinfo);

            }
            if(input2.checked==true || test2!=0){
            var x2=test2;
            var cakeBinfo=document.createElement("h2");
            cakeBinfo.innerHTML="Nutella Drink " +x2 +" x 2$";
            s.appendChild(cakeBinfo);


            }
            if(input3.checked==true || test3!=0){
                var x3=test3;
                var cakeCinfo=document.createElement("h2");
                cakeCinfo.innerHTML="Strawberry Drink " +x3 +" x 2$";
                s.appendChild(cakeCinfo);
            }

            if(input4.checked==true || test4!=0){
                var x4=test4;
                var cakeDinfo=document.createElement("h2");
                cakeDinfo.innerHTML="Bueno Drink " +x4 +" x 2$";
                s.appendChild(cakeDinfo);
            }

            if(input5.checked==true || test5!=0){
                var x5=test5;
                var cakeEinfo=document.createElement("h2");
                cakeEinfo.innerHTML="Caramel Drink " +x5 +" x 2$";
                s.appendChild(cakeEinfo);
            }

            if(input6.checked==true || test6!=0){
                var x6=test6;
                var cakeGinfo=document.createElement("h2");
                cakeGinfo.innerHTML="Oreo Drink " +x6 +" x 2$";
                s.appendChild(cakeGinfo);
                }


            console.log(input7.checked);
            var total1=document.getElementById("total");
            if(test<=0)
            {
                console.log("1234");
                total1.innerHTML="";
                return 0;
            }
            if(test>30){
            total1.innerHTML="Total:" +test +"$";
            }
            else{

                if(input7.checked){
                    var w=test+6;
                    total1.innerHTML="Total:" +w +"$";
                }
                else{
                var w=test+2;
                total1.innerHTML="Total:" +w +"$";
                }
            }
        }

        function startTime() {
            var today = new Date();
            var h = today.getHours();
            var m = today.getMinutes();
            var s = today.getSeconds();
            m = checkTime(m);
            s = checkTime(s);
            document.getElementById('demo').innerHTML =
            h + ":" + m + ":" + s;
            var t = setTimeout(startTime, 500);
          }
          function checkTime(i) {
            if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
            return i;
          }


