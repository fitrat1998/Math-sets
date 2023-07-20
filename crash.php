<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
    <link href="assets/style.css" rel="stylesheet"  crossorigin="anonymous">
    <script src="assets/head.js" crossorigin="anonymous"></script>
    <link href="assets/self.css" rel="stylesheet">
</head>
<body>


<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">O'quv jarayoni</button>
    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Mashq rejimi</button>
    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Nazorat rejimi</button>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <!--begining of show-->
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

     <div id="container">
      <div class="row bg">
        <div class="col border" style="margin-left:15px!important;">
          <!--begining of random 1-->
              <input type="number" id="r1" class="border m-2" min="1" max="12" placeholder="0"  oninput="inc()">
              <button class="button btn-warning border-0 m-2" onclick="rand()">Tasodifiy</button>
              <input type="file" onchange="read()" id="text">
              <form id="form">
              </form>
          <!--end of random 1-->
          <!--begining of random 2-->
              <input type="number" id="r2" class="border m-2" min="1" max="12" placeholder="0"  oninput="inc2()">
              <button class="button btn-warning border-0 m-2" onclick="rand2()">Tasodifiy</button>
              <input type="file"  onchange="read2()" id="text2">
              <form id="form2">
              </form>

            </div>
            <div class="col-md-1 border" >
              <select name='sel' id="sort"  onchange="" style="margin:7px 0px;border:2px solid #ECF0F1;border-radius:5px;">
                <option name="s">Satr</option>
                <option name="b">Butun</option>
                <option name="h">Haqiqiy</option>
              </select>
            </div>



    <div class="col border" style="margin-right:15px!important;">
      <h4 align="center">Natija</h4>
      <input type="text" name="hiddenInput" style="visibility: hidden;" id="hiddenInput">
     <div class="col-md-6" >
           
        </div>
      </div>
             
        </div>
      </div>
      <!---start of procces--->
      <div class="row bg m-2">
        <div class="col border">
          <button  id="birlashma" class="btn btn-primary m-1" onclick ="birlashma()" onchange="isInt()">Birlashma</button><br>
          <button  id="ayirmaA" class="btn btn-primary m-1" onclick="ayirmaA()">Ayirma A/B</button><br>
          <button  id="ayirmaB" class="btn btn-primary m-1" onclick="ayirmaB()">Ayirma B/A</button><br>
          <button  id="kesishma" class="btn btn-primary m-1" onclick="kesishma()">Kesishma</button><br>
        </div>
         <div class="col m-1" id="mark"><button class="btn-primary " style="margin-left:1200px;" onclick="window.location.reload();">Yangilash</button></div>
      </div>
      <!---end of procces--->
  </div>

  <!--end of show-->





<!--start of trying-->
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">


 <div id="container">
      <div class="row bg">
        <div class="col border" style="margin-left:15px!important;">
            

              <input type="number" id="r7" class="border m-2" min="1" max="12" placeholder="0"  oninput="inc7()">
              <button class="button btn-warning border-0 m-2" onclick="rand7()">Tasodifiy</button>
              <form id="form7">
              </form>

 
              <input type="number" id="r8" class="border m-2" min="1" max="12" placeholder="0"  oninput="inc8()">
              <button class="button btn-warning border-0 m-2" onclick="rand8()">Tasodifiy</button>
              <form id="form8">
              </form>
               
              <input type="number" id="r9" class="border m-2" min="1" max="12" placeholder="0"  oninput="inc9()">
              
              <form id="form9">
              </form>
              

            </div>
          



    <div class="col border" style="margin-right:15px!important;" id="res11">
    <h4 align="center" class="">Natija</h4> <div
    class="input-group input-group-sm mb-3 btn-success m-1" id="mashq2">
    <span class="input-group-text" id="inputGroup-sizing-sm">To'g'ri
    javoblar</span>
         
        </div>

        <div class="input-group input-group-sm mb-3 m-1 btn-danger" id="mashq">
          <span class="input-group-text" id="inputGroup-sizing-sm">Xato javoblar</span>
         
        </div>
     </div>
             
        </div>
      </div>
      <!---start of procces--->
      <div class="row bg m-2">
        <div class="col border">
          <button   class="btn btn-primary m-1" onclick ="nazorat()">Birlashma</button><br>
          <button   class="btn btn-primary m-1" onclick="nazorat2()">Ayirma A/B</button><br>
          <button   class="btn btn-primary m-1" onclick="nazorat3()">Ayirma B/A</button><br>
          <button   class="btn btn-primary m-1" onclick="simentr4()">Kesishma</button><br>
        </div>
        
      </div>
        <div class="col m-1" id="mark"><button class="btn-primary " style="margin-left:1200px;" onclick="window.location.reload();">Yangilash</button></div>
      <!---end of procces--->

  </div>
  
<!--end of trying-->





  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">

    
 <div id="container">
      <div class="row bg">
        <div class="col border" style="margin-left:15px!important;">
            

              <input type="number" id="r6" class="border m-2" min="1" max="12" placeholder="0"  oninput="inc6()">
              <button class="button btn-warning border-0 m-2" onclick="rand6()">Tasodifiy</button>
              <form id="form6">
              </form>

 
              <input type="number" id="r4" class="border m-2" min="1" max="12" placeholder="0"  oninput="inc4()">
              <button class="button btn-warning border-0 m-2" onclick="rand4()">Tasodifiy</button>
              <form id="form4">
              </form>
               
              <input type="number" id="r5" class="border m-2" min="1" max="12" placeholder="0"  oninput="inc5()">
              
              <form id="form5">
              </form>
              

            </div>
          



    <div class="col border" style="margin-right:15px!important;" id="natija">
      <h4 align="center">Natija</h4>
      </div>
             
        </div>
      </div>
      <!---start of procces--->
      <div class="row bg m-2">
        <div class="col border">
          <button   class="btn btn-primary m-1" onclick ="obedenit()">Birlashma</button><br>
          <button   class="btn btn-primary m-1" onclick="raznostA()">Ayirma A/B</button><br>
          <button   class="btn btn-primary m-1" onclick="raznostB()">Ayirma B/A</button><br>
          <button   class="btn btn-primary m-1" onclick="simentr()">Kesishma</button><br>
        </div>
        
      </div>
         <div class="col m-1" id="mark"><button class="btn-primary " style="margin-left:1200px;" onclick="window.location.reload();">Yangilash</button></div>
      <!---end of procces--->



  </div>
</div>
<script src="assets/bottom.js"></script>
<script src="assets/bottom2.js"></script>
<script src="assets/amal.js"></script>
<script type="text/javascript">

  //mover
let elem = document.getElementById('hiddenInput');
let rect = elem.getBoundingClientRect();
console.log(rect.left);


let right = document.getElementById('birlashma');
let set1 = new Set();
right.addEventListener("click",function(){

  let elements = document.querySelectorAll('.rand1');
  //console.log("click")
  elements.forEach((element,index)=>{
    set1.add(element.value);
    setTimeout(()=>{
      element.style.left = (parseInt(element.style.left) + rect.left -30)+"px";
    }, index* 800)
  })

let elements1 = document.querySelectorAll('.rand2');
  //console.log("click")
  elements1.forEach((element,index)=>{

   if(set1.has(element.value)){
    
    element.style.backgroundColor = '#C0392B ';
    element.style.border = '#CD5C5C';
   }
   else{
    // console.log(text);

    setTimeout(()=>{
      element.style.left = (parseInt(element.style.left) + rect.left -30)+"px";
    }, index* 800)

   }
   
  })
});
//mover

//mover
let ayirA = document.getElementById('ayirmaA');
let set2 = new Set();
let set3 = new Set();

ayirA.addEventListener("click",function(){
  let tuplamcha = new Set();
  let ayirElement1= document.querySelectorAll('.rand2');
  
  ayirElement1.forEach((element,index)=>{
    tuplamcha.add(element.value) 
    if(false){
      setTimeout(()=>{
        element.style.left = (parseInt(element.style.left) + rect.left + rect.right -970 )+"px";
      }, index* 800)
    }
  })
  console.log(tuplamcha);
  let ayirElement = document.querySelectorAll('.rand1');
  //console.log("click")
  ayirElement.forEach((element,index)=>{
    if(!tuplamcha.has(element.value)){
      setTimeout(()=>{
        element.style.left = (parseInt(element.style.left) + rect.left + rect.right - 970)+"px";
      }, index* 800);
    }         
  })


// let set3 = new Set();
  



});
//mover

//mover



let ayirB = document.getElementById('ayirmaB');

ayirB.addEventListener("click",function(){
  let tuplamcha = new Set();
  let ayirBelement = document.querySelectorAll('.rand1');
  //console.log("click")
  ayirBelement.forEach((element,index)=>{
    tuplamcha.add(element.value);
    if(false){
      setTimeout(()=>{
        element.style.left = (parseInt(element.style.left) + rect.left -30)+"px";
      }, index* 800)
    }    
  })

let ayirBelemen2 = document.querySelectorAll('.rand2');
  //console.log("click")
  ayirBelemen2.forEach((element,index)=>{
    if(!tuplamcha.has(element.value)){
      setTimeout(()=>{
        element.style.left = (parseInt(element.style.left) + rect.left -30)+"px";
      }, index* 1000);
    }
  })
});
//mover

// //mover

let kes = document.getElementById('kesishma');

kes.addEventListener("click",function(){
  let tuplamcha = new Set();
  let kesel = document.querySelectorAll('.rand1');
  //console.log("click")
  kesel.forEach((element,index)=>{
    tuplamcha.add(element.value);
    if(false){
      setTimeout(()=>{
        element.style.left = (parseInt(element.style.left) + rect.left -30)+"px";
      }, index* 800)
    }
  })

let kesel2 = document.querySelectorAll('.rand2');
  //console.log("click")
  kesel2.forEach((element,index)=>{
    if(tuplamcha.has(element.value)){
      setTimeout(()=>{
        element.style.left = (parseInt(element.style.left) + rect.left -30)+"px";
      }, index* 1000)
    }    
  })
});
//


  function rand(){

    let inp = document.querySelectorAll('#form input')
    for(let i = 0; i < inp.length; i++){
        inp[i].value = Math.floor(Math.random() * 100)
        //inp[i].value = Math.floor(Math.random() * 100)
    }
  }
  
   function inc() {

    let no = Number(document.querySelector("#r1").value);

    let frm = document.getElementById('form');
    frm.innerHTML = '';
    frm.style.height = "35px";
    for (let i = 0; i < no; i++) {
        let textfield = document.createElement("input");
        textfield.type = "text";
        textfield.id = "foo";
        textfield.name = "inp1";
        textfield.style.left = (i * 55 ) + 35 + "px";
        textfield.classList.add('rand1');
        textfield.classList.add('myAnimation'); //

        frm.append(textfield);
    }    
}

function rand2(){

let inp2 = document.querySelectorAll('#form2 input')
for(let i = 0; i < inp2.length; i++){
    inp2[i].value = Math.floor(Math.random() * 100)
    //inp[i].value = Math.floor(Math.random() * 100)
   }
}
  
   function inc2() {

    let no2 = Number(document.querySelector("#r2").value);

    let frm2 = document.getElementById('form2')
    frm2.innerHTML = ''
    frm2.style.height = "80px";
 
  for (let j = 0; j < no2; j++) {
        let textfield = document.createElement("input");
        textfield.type = "text";
        textfield.id = "foo2";
        textfield.name = "inp2";
        textfield.style.left = (j * 55 ) + 35 + "px";
        textfield.classList.add('rand2'); //myAnimation
        textfield.classList.add('myAnimation2'); //
        frm2.append(textfield);
   }    
}




function rand6(){

let inp3 = document.querySelectorAll('#form6 input')
console.log(inp3)
for(let i = 0; i < inp3.length; i++){
    inp3[i].value = Math.floor(Math.random() * 100)
    //inp[i].value = Math.floor(Math.random() * 100)
   }
}
  
   function inc6() {

    let no6 = Number(document.querySelector("#r6").value);

    let frm6 = document.getElementById('form6')
    frm6.innerHTML = ''
    frm6.style.height = "30px";
 
  for (let j = 0; j < no6; j++) {
        let textfield = document.createElement("input");
        textfield.type = "text";
        textfield.id = "foo6";
        textfield.name = "inp6";
        textfield.style.left = (j * 55 ) + 35 + "px";
        textfield.classList.add('rand6'); //myAnimation
        textfield.classList.add('myAnimation6'); //
        frm6.append(textfield);
   }    
}




function rand4(){

let inp4 = document.querySelectorAll('#form4 input')
for(let i = 0; i < inp4.length; i++){
    inp4[i].value = Math.floor(Math.random() * 100)
    //inp[i].value = Math.floor(Math.random() * 100)
   }
}
  
   function inc4() {

    let no4 = Number(document.querySelector("#r4").value);

    let frm4 = document.getElementById('form4')
    frm4.innerHTML = ''
    frm4.style.height = "30px";
 
  for (let j = 0; j < no4; j++) {
        let textfield = document.createElement("input");
        textfield.type = "text";
        textfield.id = "foo4";
        textfield.name = "inp4";
        textfield.style.left = (j * 55 ) + 35 + "px";
        textfield.classList.add('rand4'); //myAnimation
        textfield.classList.add('myAnimation4'); //
        frm4.append(textfield);
   }    
}

function rand5(){

let inp5 = document.querySelectorAll('#form5 input')
for(let i = 0; i < inp5.length; i++){
    inp5[i].value = Math.floor(Math.random() * 100)
    //inp[i].value = Math.floor(Math.random() * 100)
   }
}
  
   function inc5() {

    let no5 = Number(document.querySelector("#r5").value);

    let frm5 = document.getElementById('form5')
    frm5.innerHTML = ''
    frm5.style.height = "30px";
 
  for (let j = 0; j < no5; j++) {
        let textfield = document.createElement("input");
        textfield.type = "text";
        textfield.id = "foo5";
        textfield.name = "inp5";
        textfield.style.left = (j * 55 ) + 35 + "px";
        textfield.classList.add('rand5'); //myAnimation
        textfield.classList.add('myAnimation5'); //
        frm5.append(textfield);
   }    
}


function rand7(){

let inp5 = document.querySelectorAll('#form7 input')
for(let i = 0; i < inp5.length; i++){
    inp5[i].value = Math.floor(Math.random() * 100)
    //inp[i].value = Math.floor(Math.random() * 100)
   }
}
  
   function inc7() {

    let no5 = Number(document.querySelector("#r7").value);

    let frm5 = document.getElementById('form7')
    frm5.innerHTML = ''
    frm5.style.height = "30px";
 
  for (let j = 0; j < no5; j++) {
        let textfield = document.createElement("input");
        textfield.type = "text";
        textfield.id = "foo5";
        textfield.name = "inp7";
        textfield.style.left = (j * 55 ) + 35 + "px";
        textfield.classList.add('rand5'); //myAnimation
        textfield.classList.add('myAnimation5'); //
        frm5.append(textfield);
   }    
}

function rand8(){

let inp5 = document.querySelectorAll('#form8 input')
for(let i = 0; i < inp5.length; i++){
    inp5[i].value = Math.floor(Math.random() * 100)
    //inp[i].value = Math.floor(Math.random() * 100)
   }
}
  
   function inc8() {

    let no5 = Number(document.querySelector("#r8").value);

    let frm5 = document.getElementById('form8')
    frm5.innerHTML = ''
    frm5.style.height = "30px";
 
  for (let j = 0; j < no5; j++) {
        let textfield = document.createElement("input");
        textfield.type = "text";
        textfield.id = "foo5";
        textfield.name = "inp8";
        textfield.style.left = (j * 55 ) + 35 + "px";
        textfield.classList.add('rand5'); //myAnimation
        textfield.classList.add('myAnimation5'); //
        frm5.append(textfield);
   }    
}

 function inc9() {

    let no5 = Number(document.querySelector("#r9").value);

    let frm5 = document.getElementById('form9')
    frm5.innerHTML = ''
    frm5.style.height = "30px";
 
  for (let j = 0; j < no5; j++) {
        let textfield = document.createElement("input");
        textfield.type = "text";
        textfield.id = "foo5";
        textfield.name = "inp9";
        textfield.style.left = (j * 55 ) + 35 + "px";
        textfield.classList.add('rand9'); //myAnimation
        textfield.classList.add('myAnimation5'); //
        frm5.append(textfield);
   }    
}

//birlashma
function birlashma() {

let arrA= [];
let arrB = [];

let for1 = document.querySelectorAll('#form input');
  arrA = []
  for1.forEach((key)=>{
    arrA.push(key.value)

  }); 


  let for2 = document.querySelectorAll('#form2 input');
  arrB = []
  for2.forEach((key)=>{
    arrB.push(key.value)
  });
    
 
let birlashma = [...new Set([...arrA, ...arrB])];


      let sort=document.getElementsByName("inp1");
      let empty="";
      for (var m=0;m<sort.length;m++) {
          empty+=sort[m].value+" ";   
      }

      let value1 =document.getElementById('sort');
      
      let value = value1.options[value1.selectedIndex].text;
      
      console.log(value)

      
      for (i = 0; i < sort.length; i++)
      {
        if (sort[i].value != Math.ceil(sort[i].value) && value=='Butun')
        {
          alert("Iltimos tog'ri tipni tanlang")
          alert("Iltimos tog'ri raqam  kiriting")
          window.location.reload(true);
          // setTimeout("location.reload(true);",00);
          // window.onload = timedRefresh(5000);
        }else if(sort[i].value ==Math.ceil(sort[i].value) && value=='Haqiqiy')
        {
          alert("Iltimos tog'ri tipni tanlang")
          alert("Iltimos tog'ri raqam  kiriting")
          window.location.reload(true);
          // console.log("haqiqiy zor")
          //alert("Iltimos tog'ri raqam  kiriting")
        }else if(sort[i].value == Math.ceil(sort[i].value) && value=='Butun'){

          //console.log('butun zor')
        }else if( sort[i].value ==sort[i].value && value=='Satr'){
          // console.log('satr zor')
        }
        // console.log('satr zor')
      }


       
     
      
      let sort2=document.getElementsByName("inp2");
      let empty2="";
      for (var n=0;n<sort2.length;n++) {
          empty2+=sort2[n].value+" ";
          
      }
     

     for (i = 0; i < sort2.length; i++)
      {
        if (sort2[i].value != Math.ceil(sort2[i].value) && value=='Butun')
        {
          alert("Iltimos tog'ri tipni tanlang")
          alert("Iltimos tog'ri raqam  kiriting")
          window.location.reload(true);
          // setTimeout("location.reload(true);",00);
          // window.onload = timedRefresh(5000);
        }else if(sort2[i].value ==Math.ceil(sort2[i].value) && value=='Haqiqiy')
        {
          alert("Iltimos tog'ri tipni tanlang")
          alert("Iltimos tog'ri raqam  kiriting")
          window.location.reload(true);
          // console.log("haqiqiy zor")
          //alert("Iltimos tog'ri raqam  kiriting")
        }else if(sort2[i].value == Math.ceil(sort2[i].value) && value=='Butun'){

          //console.log('butun zor')
        }else if( sort2[i].value ==sort2[i].value && value=='Satr'){
          // console.log('satr zor')
        }
        // console.log('satr zor')
      }




      }
//birlashma

//upload from text
function read() {
    let text = document.getElementById('text').files[0];

    let reader = new FileReader();
    
    reader.readAsText(text);


    reader.addEventListener('load',function(){
      console.log(reader.result)
      const rows = reader.result.split("\n");

      rows.forEach((row,index)=>{
        if(index === 0){
          let frm = document.getElementById('form')
          frm.innerHTML = ''
          frm.style.height = "37px";
          row.split(" ").forEach((element, j)=>
          {
            let textfield = document.createElement("input");
            textfield.type = "text";
            textfield.id = "foo";
            textfield.style.left = (j * 55 ) + 35 + "px";
            textfield.classList.add('rand1');
            textfield.classList.add('myAnimation'); //
            textfield.value = element;
            frm.append(textfield);
          })

        }
        return; 
      })
    })  
 }

 function read2() {
    let text = document.getElementById('text2').files[0];

    let reader = new FileReader();
    
    reader.readAsText(text);


    reader.addEventListener('load',function(){
      console.log(reader.result)
      const rows = reader.result.split("\n");

      rows.forEach((row,index)=>{
        if(index === 1){
          let frm2 = document.getElementById('form2')
          frm2.innerHTML = ''
          frm2.style.height = "60px";
          row.split(" ").forEach((element, j)=>
          {
            let textfield = document.createElement("input");
            textfield.type = "text";
            textfield.id = "foo2";
            textfield.style.left = (j * 55 ) + 35 + "px";
            textfield.classList.add('rand2'); //myAnimation
            textfield.value = element;
            textfield.classList.add('myAnimation2'); //
            frm2.append(textfield);
          })

        }
        return; 
      })
    })  
 }
//upload from text

 // ayirma AB
function ayirmaA(){
let arr = []
let arr2 = []
let for1 = document.querySelectorAll('#form input')
  arr = []
  for1.forEach((key)=>{
    arr.push(key.value)
  })  

  let for2 = document.querySelectorAll('#form2 input')
  arr2 = []
  for2.forEach((key)=>{
    arr2.push(key.value)
  })  

let w = new Set(arr);
let w2 = new Set(arr2);

let ayirmaA = new Set([...w].filter(x => !w2.has(x)));
// console.log(ayirmaA);


      let sort=document.getElementsByName("inp1");
      let empty="";
      for (var m=0;m<sort.length;m++) {
          empty+=sort[m].value+" ";   
      }

      let value1 =document.getElementById('sort');
      
      let value = value1.options[value1.selectedIndex].text;
      
      console.log(value)

      
      for (i = 0; i < sort.length; i++)
      {
        if (sort[i].value != Math.ceil(sort[i].value) && value=='Butun')
        {
          alert("Iltimos tog'ri tipni tanlang")
          alert("Iltimos tog'ri raqam  kiriting")
          window.location.reload(true);
          // setTimeout("location.reload(true);",00);
          // window.onload = timedRefresh(5000);
        }else if(sort[i].value ==Math.ceil(sort[i].value) && value=='Haqiqiy')
        {
          alert("Iltimos tog'ri tipni tanlang")
          alert("Iltimos tog'ri raqam  kiriting")
          window.location.reload(true);
          // console.log("haqiqiy zor")
          //alert("Iltimos tog'ri raqam  kiriting")
        }else if(sort[i].value == Math.ceil(sort[i].value) && value=='Butun'){

          //console.log('butun zor')
        }else if( sort[i].value ==sort[i].value && value=='Satr'){
          // console.log('satr zor')
        }
        // console.log('satr zor')
      }


       
     
      
      let sort2=document.getElementsByName("inp2");
      let empty2="";
      for (var n=0;n<sort2.length;n++) {
          empty2+=sort2[n].value+" ";
          
      }
     

     for (i = 0; i < sort2.length; i++)
      {
        if (sort2[i].value != Math.ceil(sort2[i].value) && value=='Butun')
        {
          alert("Iltimos tog'ri tipni tanlang")
          alert("Iltimos tog'ri raqam  kiriting")
          window.location.reload(true);
          // setTimeout("location.reload(true);",00);
          // window.onload = timedRefresh(5000);
        }else if(sort2[i].value ==Math.ceil(sort2[i].value) && value=='Haqiqiy')
        {
          alert("Iltimos tog'ri tipni tanlang")
          alert("Iltimos tog'ri raqam  kiriting")
          window.location.reload(true);
          // console.log("haqiqiy zor")
          //alert("Iltimos tog'ri raqam  kiriting")
        }else if(sort2[i].value == Math.ceil(sort2[i].value) && value=='Butun'){

          //console.log('butun zor')
        }else if( sort2[i].value ==sort2[i].value && value=='Satr'){
          // console.log('satr zor')
        }
        // console.log('satr zor')
      }




      }


//ayirma BA
function ayirmaB() {
let arr = []
let arr2 = []
let for1 = document.querySelectorAll('#form input')
  arr = []
  for1.forEach((key)=>{
    arr.push(key.value)
  })  

  let for2 = document.querySelectorAll('#form2 input')
  arr2 = []
  for2.forEach((key)=>{
    arr2.push(key.value)
  })  

  let w = new Set(arr);
let w2 = new Set(arr2);

let ayirmaB = new Set([...w2].filter(x => !w.has(x)));
console.log(ayirmaB);


      let sort=document.getElementsByName("inp1");
      let empty="";
      for (var m=0;m<sort.length;m++) {
          empty+=sort[m].value+" ";
          
      }
      console.log(empty);
      

      let sort2=document.getElementsByName("inp2");
      let empty2="";
      for (var n=0;n<sort2.length;n++) {
          empty2+=sort2[n].value+" ";
          
      }
      console.log(empty2);

}

function read() {
    let text = document.getElementById('text').files[0];

    let reader = new FileReader();
    
    reader.readAsText(text);


    reader.addEventListener('load',function(){
      console.log(reader.result)
      const rows = reader.result.split("\n");

      rows.forEach((row,index)=>{
        if(index === 0){
          let frm = document.getElementById('form')
          frm.innerHTML = ''
          frm.style.height = "37px";
          row.split(" ").forEach((element, j)=>
          {
            let textfield = document.createElement("input");
            textfield.type = "text";
            textfield.id = "foo";
            textfield.style.left = (j * 55 ) + 35 + "px";
            textfield.classList.add('rand1');
            textfield.classList.add('myAnimation'); //
            textfield.value = element;
            frm.append(textfield);
          })

        }
        return; 
      })
    })  
 }

 function read2() {
    let text = document.getElementById('text2').files[0];

    let reader = new FileReader();
    
    reader.readAsText(text);


    reader.addEventListener('load',function(){
      console.log(reader.result)
      const rows = reader.result.split("\n");

      rows.forEach((row,index)=>{
        if(index === 1){
          let frm2 = document.getElementById('form2')
          frm2.innerHTML = ''
          frm2.style.height = "60px";
          row.split(" ").forEach((element, j)=>
          {
            let textfield = document.createElement("input");
            textfield.type = "text";
            textfield.id = "foo2";
            textfield.style.left = (j * 55 ) + 35 + "px";
            textfield.classList.add('rand2'); //myAnimation
            textfield.value = element;
            textfield.classList.add('myAnimation2'); //
            frm2.append(textfield);
          })

        }
        return; 
      })
    }) 



      let sort=document.getElementsByName("inp1");
      let empty="";
      for (var m=0;m<sort.length;m++) {
          empty+=sort[m].value+" ";   
      }

      let value1 =document.getElementById('sort');
      
      let value = value1.options[value1.selectedIndex].text;
      
      console.log(value)

      
      for (i = 0; i < sort.length; i++)
      {
        if (sort[i].value != Math.ceil(sort[i].value) && value=='Butun')
        {
          alert("Iltimos tog'ri tipni tanlang")
          alert("Iltimos tog'ri raqam  kiriting")
          window.location.reload(true);
          // setTimeout("location.reload(true);",00);
          // window.onload = timedRefresh(5000);
        }else if(sort[i].value ==Math.ceil(sort[i].value) && value=='Haqiqiy')
        {
          alert("Iltimos tog'ri tipni tanlang")
          alert("Iltimos tog'ri raqam  kiriting")
          window.location.reload(true);
          // console.log("haqiqiy zor")
          //alert("Iltimos tog'ri raqam  kiriting")
        }else if(sort[i].value == Math.ceil(sort[i].value) && value=='Butun'){

          //console.log('butun zor')
        }else if( sort[i].value ==sort[i].value && value=='Satr'){
          // console.log('satr zor')
        }
        // console.log('satr zor')
      }


       
     
      
      let sort2=document.getElementsByName("inp2");
      let empty2="";
      for (var n=0;n<sort2.length;n++) {
          empty2+=sort2[n].value+" ";
          
      }
     

     for (i = 0; i < sort2.length; i++)
      {
        if (sort2[i].value != Math.ceil(sort2[i].value) && value=='Butun')
        {
          alert("Iltimos tog'ri tipni tanlang")
          alert("Iltimos tog'ri raqam  kiriting")
          window.location.reload(true);
          // setTimeout("location.reload(true);",00);
          // window.onload = timedRefresh(5000);
        }else if(sort2[i].value ==Math.ceil(sort2[i].value) && value=='Haqiqiy')
        {
          alert("Iltimos tog'ri tipni tanlang")
          alert("Iltimos tog'ri raqam  kiriting")
          window.location.reload(true);
          // console.log("haqiqiy zor")
          //alert("Iltimos tog'ri raqam  kiriting")
        }else if(sort2[i].value == Math.ceil(sort2[i].value) && value=='Butun'){

          //console.log('butun zor')
        }else if( sort2[i].value ==sort2[i].value && value=='Satr'){
          // console.log('satr zor')
        }
        // console.log('satr zor')
      }


 }


//kesishma
function kesishma() {
  let arr = []
let arr2 = []
let for1 = document.querySelectorAll('#form input')
  arr = []
  for1.forEach((key)=>{
    arr.push(key.value)
  })  

  let for2 = document.querySelectorAll('#form2 input')
  arr2 = []
  for2.forEach((key)=>{
    arr2.push(key.value)
  })  
  
  let kesishma = arr.filter(x => arr2.includes(x));
  console.log(kesishma);


      let sort=document.getElementsByName("inp1");
      let empty="";
      for (var m=0;m<sort.length;m++) {
          empty+=sort[m].value+" ";
          
      }
      console.log(empty);
      

      let sort2=document.getElementsByName("inp2");
      let empty2="";
      for (var n=0;n<sort2.length;n++) {
          empty2+=sort2[n].value+" ";
          
      }
      console.log(empty2);

}

function read() {
    let text = document.getElementById('text').files[0];

    let reader = new FileReader();
    
    reader.readAsText(text);


    reader.addEventListener('load',function(){
      console.log(reader.result)
      const rows = reader.result.split("\n");

      rows.forEach((row,index)=>{
        if(index === 0){
          let frm = document.getElementById('form')
          frm.innerHTML = ''
          frm.style.height = "37px";
          row.split(" ").forEach((element, j)=>
          {
            let textfield = document.createElement("input");
            textfield.type = "text";
            textfield.id = "foo";
            textfield.style.left = (j * 55 ) + 35 + "px";
            textfield.classList.add('rand1');
            textfield.classList.add('myAnimation'); //
            textfield.value = element;
            frm.append(textfield);
          })

        }
        return; 
      })
    })  
 }

 function read2() {
    let text = document.getElementById('text2').files[0];

    let reader = new FileReader();
    
    reader.readAsText(text);


    reader.addEventListener('load',function(){
      console.log(reader.result)
      const rows = reader.result.split("\n");

      rows.forEach((row,index)=>{
        if(index === 1){
          let frm2 = document.getElementById('form2')
          frm2.innerHTML = ''
          frm2.style.height = "60px";
          row.split(" ").forEach((element, j)=>
          {
            let textfield = document.createElement("input");
            textfield.type = "text";
            textfield.id = "foo2";
            textfield.style.left = (j * 55 ) + 35 + "px";
            textfield.classList.add('rand2'); //myAnimation
            textfield.value = element;
            textfield.classList.add('myAnimation2'); //
            frm2.append(textfield);
          })

        }
        return; 
      })
    }) 




      let sort=document.getElementsByName("inp1");
      let empty="";
      for (var m=0;m<sort.length;m++) {
          empty+=sort[m].value+" ";   
      }

      let value1 =document.getElementById('sort');
      
      let value = value1.options[value1.selectedIndex].text;
      
      console.log(value)

      
      for (i = 0; i < sort.length; i++)
      {
        if (sort[i].value != Math.ceil(sort[i].value) && value=='Butun')
        {
          alert("Iltimos tog'ri tipni tanlang")
          alert("Iltimos tog'ri raqam  kiriting")
          window.location.reload(true);
          // setTimeout("location.reload(true);",00);
          // window.onload = timedRefresh(5000);
        }else if(sort[i].value ==Math.ceil(sort[i].value) && value=='Haqiqiy')
        {
          alert("Iltimos tog'ri tipni tanlang")
          alert("Iltimos tog'ri raqam  kiriting")
          window.location.reload(true);
          // console.log("haqiqiy zor")
          //alert("Iltimos tog'ri raqam  kiriting")
        }else if(sort[i].value == Math.ceil(sort[i].value) && value=='Butun'){

          //console.log('butun zor')
        }else if( sort[i].value ==sort[i].value && value=='Satr'){
          // console.log('satr zor')
        }
        // console.log('satr zor')
      }


       
     
      
      let sort2=document.getElementsByName("inp2");
      let empty2="";
      for (var n=0;n<sort2.length;n++) {
          empty2+=sort2[n].value+" ";
          
      }
     

     for (i = 0; i < sort2.length; i++)
      {
        if (sort2[i].value != Math.ceil(sort2[i].value) && value=='Butun')
        {
          alert("Iltimos tog'ri tipni tanlang")
          alert("Iltimos tog'ri raqam  kiriting")
          window.location.reload(true);
          // setTimeout("location.reload(true);",00);
          // window.onload = timedRefresh(5000);
        }else if(sort2[i].value ==Math.ceil(sort2[i].value) && value=='Haqiqiy')
        {
          alert("Iltimos tog'ri tipni tanlang")
          alert("Iltimos tog'ri raqam  kiriting")
          window.location.reload(true);
          // console.log("haqiqiy zor")
          //alert("Iltimos tog'ri raqam  kiriting")
        }else if(sort2[i].value == Math.ceil(sort2[i].value) && value=='Butun'){

          //console.log('butun zor')
        }else if( sort2[i].value ==sort2[i].value && value=='Satr'){
          // console.log('satr zor')
        }
        // console.log('satr zor')
      }



 }




function obedenit(){
    
        let arrA= [];
        let arrB = [];
        
        let for1 = document.querySelectorAll('#form6 input');
          arrA = []
          for1.forEach((key)=>{
            arrA.push(key.value)
          }); 
        
        console.log(12)
        
          let for2 = document.querySelectorAll('#form4 input');
          arrB = []
          for2.forEach((key)=>{
            arrB.push(key.value)
          });

          let for3 = document.querySelectorAll('#form5 input');
          arrC = []
          for3.forEach((key)=>{
            arrC.push(key.value)
          });

          let answer = new Set(arrC);

     let a = new Set(arrA);
     let b = new Set(arrB);
         let hlp = []
        let union = new  Set ( [...a, ...b ] ) ;

        answer2 = Array.from(answer)
        union2 = Array.from(union)
        answer2.sort()
        union2.sort()
      
     
       let k = 0;
        for (i = 0; i < union2.length; i++){
          if (union2[i] === answer2[i]) {
            k++
          }
        }
        let z = (k * 100) / union2.length
        //console.log(z)
        if (z >= 0 && z <= 25){
          
         setTimeout(()=>{
               document.getElementById("natija").innerHTML =
                `<div class='alert alert-danger' role='alert'>Sizning bahoyingiz: <span id=''>2 ${z} %</span></div>`;
            },500)

        }
        else if (z > 25 && z <= 50){
          setTimeout(()=>{
               document.getElementById("natija").innerHTML =
                `<div class='alert alert-warning' role='alert'>Sizning bahoyingiz: <span id=''>3 ${z} %</span></div>`;
            },500)
        }
        else if (z > 50 && z <= 75){
          setTimeout(()=>{
               document.getElementById("natija").innerHTML =
                `<div class='alert alert-primary' role='alert'>Sizning bahoyingiz: <span id=''>4 ${z} %</span></div>`;
            },500)
        }
        else if(z > 75 && z <= 100){
            setTimeout(()=>{
               document.getElementById("natija").innerHTML =
                `<div class='alert alert-success' role='alert'>Sizning bahoyingiz: <span id=''>5 ${z} %</span></div>`;
            },500)
        }else{
             setTimeout(()=>{
               document.getElementById("natija").innerHTML =
                `<div class='alert alert-danger' role='alert'>Sizning bahoyingiz: <span id=''>Siz javobni kiritmadingiz!!!</span></div>`;
            },500)
        }

         


        // if (union2.length == answer2.length)
        // {
        //   for(let i=0; i < union2.length; i++){
        //     if (union2[i] !== answer2[i]){
        //       console.log(union2[i]+'SALOM')
        //       setTimeout(()=>{
        //        document.getElementById("natija").innerHTML =
        //         "<div class='alert alert-danger' role='alert'>Sizning bahoyingiz: <span id='span'>2</span></div>";
        //     },500)
        //       break
        //     }
        //     else
        //     {
        //        setTimeout(()=>{
        //        document.getElementById("natija").innerHTML =
        //         "<div class='alert alert-success' role='alert'>Sizning bahoyingiz: <span id='span'>5</span></div>";
        //     },500)
        //    }
        //   }
        //   console.log(hlp[0])

        // }
        // else {
        //   console.log('poyon xato')
        // }

    
}

function raznostA(){
    
        let arr = []
        let arr2 = []
        let for1 = document.querySelectorAll('#form6 input')
          arr = []
          for1.forEach((key)=>{
            arr.push(key.value)
          })  
        
          let for2 = document.querySelectorAll('#form4 input')
          arr2 = []
          for2.forEach((key)=>{
            arr2.push(key.value)
          })  

let for3 = document.querySelectorAll('#form5 input');
          arrC = []
          for3.forEach((key)=>{
            arrC.push(key.value)
          });

          let answer= new Set(arrC);

         //console.log(set3)

          let set1 = new Set(arr);
          let set2 = new Set(arr2);
          let hlp = [];
          let union= new Set([...set1].filter(x => !set2.has(x)));
          
        answer2 = Array.from(answer)
        union2 = Array.from(union)
        answer2.sort()
        union2.sort()
        // console.log(answer2)
        // console.log(union2)

        if (union2.length == answer2.length)
        {
          for(i=0; i < union2.length; i++){
            if (union2[i] !== answer2[i]){
              setTimeout(()=>{
               document.getElementById("natija").innerHTML =
                "<div class='alert alert-danger' role='alert'>Sizning bahoyingiz: <span id='span'>2</span></div>";
            },500)
              break
            }
            else
            {
               setTimeout(()=>{
               document.getElementById("natija").innerHTML =
                "<div class='alert alert-success' role='alert'>Sizning bahoyingiz: <span id='span'>5</span></div>";
            },500)
           }
          }
          console.log(hlp[0])

        }
        else {
          console.log('poyon xato')
        }

        
    
}

function raznostB(){
    
let arr = []
let arr2 = []
let for1 = document.querySelectorAll('#form6 input')
  arr = []
  for1.forEach((key)=>{
    arr.push(key.value)
  })  

  let for2 = document.querySelectorAll('#form4 input')
  arr2 = []
  for2.forEach((key)=>{
    arr2.push(key.value)
  })  


let for3 = document.querySelectorAll('#form5 input');
          arrC = []
          for3.forEach((key)=>{
            arrC.push(key.value)
          });

          let answer = new Set(arrC);

          
  let w = new Set(arr);
let w2 = new Set(arr2);

let union = new Set([...w2].filter(x => !w.has(x)));

answer2 = Array.from(answer)
        union2 = Array.from(union)
        answer2.sort()
        union2.sort()
        // console.log(answer2)
        // console.log(union2)
        let hlp = [];
        if (union2.length == answer2.length)
        {
          for(i=0; i < union2.length; i++){
            if (union2[i] !== answer2[i]){
              setTimeout(()=>{
               document.getElementById("natija").innerHTML =
                "<div class='alert alert-danger' role='alert'>Sizning bahoyingiz: <span id='span'>2</span></div>";
            },500)
              break
            }
            else
            {
               setTimeout(()=>{
               document.getElementById("natija").innerHTML =
                "<div class='alert alert-success' role='alert'>Sizning bahoyingiz: <span id='span'>5</span></div>";
            },500)
           }
          }
          console.log(hlp[0])

        }
        else {
          console.log('poyon xato')
        }    

}

function simentr(){
    
    
let arr = []
let arr2 = []
let for1 = document.querySelectorAll('#form6 input')
  arr = []
  for1.forEach((key)=>{
    arr.push(key.value)
  })  

  let for2 = document.querySelectorAll('#form4 input')
  arr2 = []
  for2.forEach((key)=>{
    arr2.push(key.value)
  })  
  

  let for3 = document.querySelectorAll('#form5 input');
          arrC = []
          for3.forEach((key)=>{
            arrC.push(key.value)
          });

          let answer = new Set(arrC);

          
  let union = arr.filter(x => arr2.includes(x));
 
 answer2 = Array.from(answer)
        union2 = Array.from(union)
        answer2.sort()
        union2.sort()
        // console.log(answer2)
        // console.log(union2)
        let hlp = [];
        if (union2.length == answer2.length)
        {
          for(i=0; i < union2.length; i++){
            if (union2[i] !== answer2[i]){
              setTimeout(()=>{
               document.getElementById("natija").innerHTML =
                "<div class='alert alert-danger' role='alert'>Sizning bahoyingiz: <span id='span'>2</span></div>";
            },500)
              break
            }
            else
            {
               setTimeout(()=>{
               document.getElementById("natija").innerHTML =
                "<div class='alert alert-success' role='alert'>Sizning bahoyingiz: <span id='span'>5</span></div>";
            },500)
           }
          }
          console.log(hlp[0])

        }
        else {
          console.log('poyon xato')
        }
    

}






function nazorat(){
    
        let arrA= [];
        let arrB = [];
        
        let for1 = document.querySelectorAll('#form7 input');
          arrA = []
          for1.forEach((key)=>{
            arrA.push(key.value)
          }); 
        
        
          let for2 = document.querySelectorAll('#form8 input');
          arrB = []
          for2.forEach((key)=>{
            arrB.push(key.value)
          });

          let for3 = document.querySelectorAll('#form9 input');
          arrC = []
          for3.forEach((key)=>{
            arrC.push(key.value)
          });

          let answer = new Set(arrC);
          console.log(answer)

          let mashq = document.querySelector('#mashq');
          let mashq2 = document.querySelector('#mashq2');
          
          
          let a = new Set(arrA);
          let b = new Set(arrB);
          let union = new  Set ( [...a, ...b ] ) ;
          console.log(union)

        
          for (let v of answer){
            if (!union.has(v)){
              console.log(`${v} xato!`)
              mashq.append(`${v} `)
            }
          };

          for(let n of union) {
            mashq2.append(`${n} `);
          }


      }
         


    

function nazorat2(){
    
        let arr = []
        let arr2 = []
        let for1 = document.querySelectorAll('#form7 input')
          arr = []
          for1.forEach((key)=>{
            arr.push(key.value)
          })  
        
          let for2 = document.querySelectorAll('#form8 input')
          arr2 = []
          for2.forEach((key)=>{
            arr2.push(key.value)
          })  

let for3 = document.querySelectorAll('#form9 input');
          arrC = []
          for3.forEach((key)=>{
            arrC.push(key.value)
          });

          let answer= new Set(arrC);

         //console.log(set3)

          let set1 = new Set(arr);
          let set2 = new Set(arr2);
          let hlp = [];
          let union= new Set([...set1].filter(x => !set2.has(x)));
          
        answer2 = Array.from(answer)
        union2 = Array.from(union)
        answer2.sort()
        union2.sort()
        // console.log(answer2)
        // console.log(union2)

        if (union2.length == answer2.length)
        {
          for(i=0; i < union2.length; i++){
            if (union2[i] !== answer2[i]){
              setTimeout(()=>{
               document.getElementById("natija").innerHTML =
                "<div class='alert alert-danger' role='alert'>Sizning bahoyingiz: <span id='span'>2</span></div>";
            },500)
              break
            }
            else
            {
               setTimeout(()=>{
               document.getElementById("natija").innerHTML =
                "<div class='alert alert-success' role='alert'>Sizning bahoyingiz: <span id='span'>5</span></div>";
            },500)
           }
          }
          console.log(hlp[0])

        }
        else {
          console.log('poyon xato')
        }

        
    
}

function nazorat3(){
    
let arr = []
let arr2 = []
let for1 = document.querySelectorAll('#form7 input')
  arr = []
  for1.forEach((key)=>{
    arr.push(key.value)
  })  

  let for2 = document.querySelectorAll('#form8 input')
  arr2 = []
  for2.forEach((key)=>{
    arr2.push(key.value)
  })  


let for3 = document.querySelectorAll('#form9 input');
          arrC = []
          for3.forEach((key)=>{
            arrC.push(key.value)
          });

          let answer = new Set(arrC);

          
  let w = new Set(arr);
let w2 = new Set(arr2);

let union = new Set([...w2].filter(x => !w.has(x)));

answer2 = Array.from(answer)
        union2 = Array.from(union)
        answer2.sort()
        union2.sort()
        // console.log(answer2)
        // console.log(union2)
        let hlp = [];
        if (union2.length == answer2.length)
        {
          for(i=0; i < union2.length; i++){
            if (union2[i] !== answer2[i]){
              setTimeout(()=>{
               document.getElementById("natija").innerHTML =
                "<div class='alert alert-danger' role='alert'>Sizning bahoyingiz: <span id='span'>2</span></div>";
            },500)
              break
            }
            else
            {
               setTimeout(()=>{
               document.getElementById("natija").innerHTML =
                "<div class='alert alert-success' role='alert'>Sizning bahoyingiz: <span id='span'>5</span></div>";
            },500)
           }
          }
          console.log(hlp[0])

        }
        else {
          console.log('poyon xato')
        }    

}

function nazorat4(){
    
    
let arr = []
let arr2 = []
let for1 = document.querySelectorAll('#form7 input')
  arr = []
  for1.forEach((key)=>{
    arr.push(key.value)
  })  

  let for2 = document.querySelectorAll('#form8 input')
  arr2 = []
  for2.forEach((key)=>{
    arr2.push(key.value)
  })  
  

  let for3 = document.querySelectorAll('#form9 input');
          arrC = []
          for3.forEach((key)=>{
            arrC.push(key.value)
          });

          let answer = new Set(arrC);

          
  let union = arr.filter(x => arr2.includes(x));
 
 answer2 = Array.from(answer)
        union2 = Array.from(union)
        answer2.sort()
        union2.sort()
        // console.log(answer2)
        // console.log(union2)
        let hlp = [];
        if (union2.length == answer2.length)
        {
          for(i=0; i < union2.length; i++){
            if (union2[i] !== answer2[i]){
              setTimeout(()=>{
               document.getElementById("natija").innerHTML =
                "<div class='alert alert-danger' role='alert'>Sizning bahoyingiz: <span id='span'>2</span></div>";
            },500)
              break
            }
            else``
            {
               setTimeout(()=>{
               document.getElementById("natija").innerHTML =
                "<div class='alert alert-success' role='alert'>Sizning bahoyingiz: <span id='span'>5</span></div>";
            },500)
           }
          }
          console.log(hlp[0])

        }
        else {
          console.log('poyon xato')
        }
    

}

</script>
</body>
</html



















let k = 0;
        for (i = 0; i < union2.length; i++){
          if (union2[i] === answer2[i]) {
            k++
          }
        }
        let z = (k * 100) / union2.length
        console.log(z)
        if (z >= 0 && z <= 25){
         
         console.log(2)

        }
        else if (z > 25 && z <= 50){
          console.log(3)
        }
        else if (z > 50 && z <= 75){
          console.log(4)
        }
        else {
          console.log(5)
        }



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
    <link href="assets/style.css" rel="stylesheet"  crossorigin="anonymous">
    <script src="assets/head.js" crossorigin="anonymous"></script>
    <link href="assets/self.css" rel="stylesheet">
</head>
<body>


<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">O'quv jarayoni</button>
    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Mashq rejimi</button>
    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Nazorat rejimi</button>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <!--begining of show-->
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

     <div id="container">
      <div class="row bg">
        <div class="col border" style="margin-left:15px!important;">
          <!--begining of random 1-->
              <input type="number" id="r1" class="border m-2" min="1" max="12" placeholder="0"  oninput="inc()">
              <button class="button btn-warning border-0 m-2" onclick="rand()">Tasodifiy</button>
              <input type="file" onchange="read()" id="text">
              <form id="form">
              </form>
          <!--end of random 1-->
          <!--begining of random 2-->
              <input type="number" id="r2" class="border m-2" min="1" max="12" placeholder="0"  oninput="inc2()">
              <button class="button btn-warning border-0 m-2" onclick="rand2()">Tasodifiy</button>
              <input type="file"  onchange="read2()" id="text2">
              <form id="form2">
              </form>

            </div>
            <div class="col-md-1 border" >
              <select name='sel' id="sort"  onchange="" style="margin:7px 0px;border:2px solid #ECF0F1;border-radius:5px;">
                <option name="s">Satr</option>
                <option name="b">Butun</option>
                <option name="h">Haqiqiy</option>
              </select>
            </div>



    <div class="col border" style="margin-right:15px!important;">
      <h4 align="center">Natija</h4>
      <input type="text" name="hiddenInput" style="visibility: hidden;" id="hiddenInput">
     <div class="col-md-6" >
           
        </div>
      </div>
             
        </div>
      </div>
      <!---start of procces--->
      <div class="row bg m-2">
        <div class="col border">
          <button  id="birlashma" class="btn btn-primary m-1" onclick ="birlashma()" onchange="isInt()">Birlashma</button><br>
          <button  id="ayirmaA" class="btn btn-primary m-1" onclick="ayirmaA()">Ayirma A/B</button><br>
          <button  id="ayirmaB" class="btn btn-primary m-1" onclick="ayirmaB()">Ayirma B/A</button><br>
          <button  id="kesishma" class="btn btn-primary m-1" onclick="kesishma()">Kesishma</button><br>
        </div>
        <div class="col border">1</div>
      </div>
      <!---end of procces--->
  </div>

  <!--end of show-->





<!--start of trying-->
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">


 <div id="container">
      <div class="row bg">
        <div class="col border" style="margin-left:15px!important;">
            

              <input type="number" id="r7" class="border m-2" min="1" max="12" placeholder="0"  oninput="inc7()">
              <button class="button btn-warning border-0 m-2" onclick="rand7()">Tasodifiy</button>
              <form id="form7">
              </form>

 
              <input type="number" id="r8" class="border m-2" min="1" max="12" placeholder="0"  oninput="inc8()">
              <button class="button btn-warning border-0 m-2" onclick="rand8()">Tasodifiy</button>
              <form id="form8">
              </form>
               
              <input type="number" id="r9" class="border m-2" min="1" max="12" placeholder="0"  oninput="inc9()">
              
              <form id="form9">
              </form>
              

            </div>
          



    <div class="col border" style="margin-right:15px!important;" id="res11">
     
      </div>
             
        </div>
      </div>
      <!---start of procces--->
      <div class="row bg m-2">
        <div class="col border">
          <button  id="birlashma" class="btn btn-primary m-1" onclick ="nazorat()">Birlashma</button><br>
          <button  id="ayirmaA" class="btn btn-primary m-1" onclick="nazorat2()">Ayirma A/B</button><br>
          <button  id="ayirmaB" class="btn btn-primary m-1" onclick="nazorat3()">Ayirma B/A</button><br>
          <button  id="kesishma" class="btn btn-primary m-1" onclick="simentr4()">Kesishma</button><br>
        </div>
        
      </div>
        <div class="col border" id="mark">1</div>
      <!---end of procces--->

  </div>
  
<!--end of trying-->





  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">

    
 <div id="container">
      <div class="row bg">
        <div class="col border" style="margin-left:15px!important;">
            

              <input type="number" id="r6" class="border m-2" min="1" max="12" placeholder="0"  oninput="inc6()">
              <button class="button btn-warning border-0 m-2" onclick="rand6()">Tasodifiy</button>
              <form id="form6">
              </form>

 
              <input type="number" id="r4" class="border m-2" min="1" max="12" placeholder="0"  oninput="inc4()">
              <button class="button btn-warning border-0 m-2" onclick="rand4()">Tasodifiy</button>
              <form id="form4">
              </form>
               
              <input type="number" id="r5" class="border m-2" min="1" max="12" placeholder="0"  oninput="inc5()">
              
              <form id="form5">
              </form>
              

            </div>
          



    <div class="col border" style="margin-right:15px!important;" id="natija">
     
      </div>
             
        </div>
      </div>
      <!---start of procces--->
      <div class="row bg m-2">
        <div class="col border">
          <button  id="birlashma" class="btn btn-primary m-1" onclick ="obedenit()">Birlashma</button><br>
          <button  id="ayirmaA" class="btn btn-primary m-1" onclick="raznostA()">Ayirma A/B</button><br>
          <button  id="ayirmaB" class="btn btn-primary m-1" onclick="raznostB()">Ayirma B/A</button><br>
          <button  id="kesishma" class="btn btn-primary m-1" onclick="simentr()">Kesishma</button><br>
        </div>
        
      </div>
        <div class="col border" id="mark">1</div>
      <!---end of procces--->



  </div>
</div>
<script src="assets/bottom.js"></script>
<script src="assets/bottom2.js"></script>
<script src="assets/amal.js"></script>
<script type="text/javascript">

//filter

// var inputs=document.getElementsByName("inp1");
// var admissionNumber="";
// for (var m=0;m<inputs.length;m++) {
//     admissionNumber+=inputs[m].value+" ";
//     console.log(admissionNumber);
// }
// console.log(admissionNumber);

// function getSort(){

//   let value =document.getElementById('sort').value;
//   console.log(value)
// }

//filter
// let test =10;
// for(w = 0;w < test ;w++){
  
//   alert('Hello world '+ w)
// }



  //mover
let elem = document.getElementById('hiddenInput');
let rect = elem.getBoundingClientRect();
console.log(rect.left);


let right = document.getElementById('birlashma');
let set1 = new Set();
right.addEventListener("click",function(){

  let elements = document.querySelectorAll('.rand1');
  //console.log("click")
  elements.forEach((element,index)=>{
    set1.add(element.value);
    setTimeout(()=>{
      element.style.left = (parseInt(element.style.left) + rect.left -30)+"px";
    }, index* 800)
  })

let elements1 = document.querySelectorAll('.rand2');
  //console.log("click")
  elements1.forEach((element,index)=>{

   if(set1.has(element.value)){
    
    element.style.backgroundColor = '#C0392B ';
    element.style.border = '#CD5C5C';
   }
   else{
    // console.log(text);

    setTimeout(()=>{
      element.style.left = (parseInt(element.style.left) + rect.left -30)+"px";
    }, index* 1000)

   }
   
  })
});
//mover

//mover
let ayirA = document.getElementById('ayirmaA');
let set2 = new Set();
let set3 = new Set();

ayirA.addEventListener("click",function(){
  let tuplamcha = new Set();
  let ayirElement1= document.querySelectorAll('.rand2');
  
  ayirElement1.forEach((element,index)=>{
    tuplamcha.add(element.value) 
    if(false){
      setTimeout(()=>{
        element.style.left = (parseInt(element.style.left) + rect.left + rect.right -970 )+"px";
      }, index* 800)
    }
  })
  console.log(tuplamcha);
  let ayirElement = document.querySelectorAll('.rand1');
  //console.log("click")
  ayirElement.forEach((element,index)=>{
    if(!tuplamcha.has(element.value)){
      setTimeout(()=>{
        element.style.left = (parseInt(element.style.left) + rect.left + rect.right - 970)+"px";
      }, index* 800);
    }         
  })


// let set3 = new Set();
  



});
//mover

//mover



let ayirB = document.getElementById('ayirmaB');

ayirB.addEventListener("click",function(){
  let tuplamcha = new Set();
  let ayirBelement = document.querySelectorAll('.rand1');
  //console.log("click")
  ayirBelement.forEach((element,index)=>{
    tuplamcha.add(element.value);
    if(false){
      setTimeout(()=>{
        element.style.left = (parseInt(element.style.left) + rect.left -30)+"px";
      }, index* 800)
    }    
  })

let ayirBelemen2 = document.querySelectorAll('.rand2');
  //console.log("click")
  ayirBelemen2.forEach((element,index)=>{
    if(!tuplamcha.has(element.value)){
      setTimeout(()=>{
        element.style.left = (parseInt(element.style.left) + rect.left -30)+"px";
      }, index* 1000);
    }
  })
});
//mover

// //mover

let kes = document.getElementById('kesishma');

kes.addEventListener("click",function(){
  let tuplamcha = new Set();
  let kesel = document.querySelectorAll('.rand1');
  //console.log("click")
  kesel.forEach((element,index)=>{
    tuplamcha.add(element.value);
    if(false){
      setTimeout(()=>{
        element.style.left = (parseInt(element.style.left) + rect.left -30)+"px";
      }, index* 800)
    }
  })

let kesel2 = document.querySelectorAll('.rand2');
  //console.log("click")
  kesel2.forEach((element,index)=>{
    if(tuplamcha.has(element.value)){
      setTimeout(()=>{
        element.style.left = (parseInt(element.style.left) + rect.left -30)+"px";
      }, index* 1000)
    }    
  })
});
//


  function rand(){

    let inp = document.querySelectorAll('#form input')
    for(let i = 0; i < inp.length; i++){
        inp[i].value = Math.floor(Math.random() * 100)
        //inp[i].value = Math.floor(Math.random() * 100)
    }
  }
  
   function inc() {

    let no = Number(document.querySelector("#r1").value);

    let frm = document.getElementById('form');
    frm.innerHTML = '';
    frm.style.height = "35px";
    for (let i = 0; i < no; i++) {
        let textfield = document.createElement("input");
        textfield.type = "text";
        textfield.id = "foo";
        textfield.name = "inp1";
        textfield.style.left = (i * 55 ) + 35 + "px";
        textfield.classList.add('rand1');
        textfield.classList.add('myAnimation'); //

        frm.append(textfield);
    }    
}

function rand2(){

let inp2 = document.querySelectorAll('#form2 input')
for(let i = 0; i < inp2.length; i++){
    inp2[i].value = Math.floor(Math.random() * 100)
    //inp[i].value = Math.floor(Math.random() * 100)
   }
}
  
   function inc2() {

    let no2 = Number(document.querySelector("#r2").value);

    let frm2 = document.getElementById('form2')
    frm2.innerHTML = ''
    frm2.style.height = "80px";
 
  for (let j = 0; j < no2; j++) {
        let textfield = document.createElement("input");
        textfield.type = "text";
        textfield.id = "foo2";
        textfield.name = "inp2";
        textfield.style.left = (j * 55 ) + 35 + "px";
        textfield.classList.add('rand2'); //myAnimation
        textfield.classList.add('myAnimation2'); //
        frm2.append(textfield);
   }    
}




function rand6(){

let inp3 = document.querySelectorAll('#form6 input')
console.log(inp3)
for(let i = 0; i < inp3.length; i++){
    inp3[i].value = Math.floor(Math.random() * 100)
    //inp[i].value = Math.floor(Math.random() * 100)
   }
}
  
   function inc6() {

    let no6 = Number(document.querySelector("#r6").value);

    let frm6 = document.getElementById('form6')
    frm6.innerHTML = ''
    frm6.style.height = "30px";
 
  for (let j = 0; j < no6; j++) {
        let textfield = document.createElement("input");
        textfield.type = "text";
        textfield.id = "foo6";
        textfield.name = "inp6";
        textfield.style.left = (j * 55 ) + 35 + "px";
        textfield.classList.add('rand6'); //myAnimation
        textfield.classList.add('myAnimation6'); //
        frm6.append(textfield);
   }    
}




function rand4(){

let inp4 = document.querySelectorAll('#form4 input')
for(let i = 0; i < inp4.length; i++){
    inp4[i].value = Math.floor(Math.random() * 100)
    //inp[i].value = Math.floor(Math.random() * 100)
   }
}
  
   function inc4() {

    let no4 = Number(document.querySelector("#r4").value);

    let frm4 = document.getElementById('form4')
    frm4.innerHTML = ''
    frm4.style.height = "30px";
 
  for (let j = 0; j < no4; j++) {
        let textfield = document.createElement("input");
        textfield.type = "text";
        textfield.id = "foo4";
        textfield.name = "inp4";
        textfield.style.left = (j * 55 ) + 35 + "px";
        textfield.classList.add('rand4'); //myAnimation
        textfield.classList.add('myAnimation4'); //
        frm4.append(textfield);
   }    
}

function rand5(){

let inp5 = document.querySelectorAll('#form5 input')
for(let i = 0; i < inp5.length; i++){
    inp5[i].value = Math.floor(Math.random() * 100)
    //inp[i].value = Math.floor(Math.random() * 100)
   }
}
  
   function inc5() {

    let no5 = Number(document.querySelector("#r5").value);

    let frm5 = document.getElementById('form5')
    frm5.innerHTML = ''
    frm5.style.height = "30px";
 
  for (let j = 0; j < no5; j++) {
        let textfield = document.createElement("input");
        textfield.type = "text";
        textfield.id = "foo5";
        textfield.name = "inp5";
        textfield.style.left = (j * 55 ) + 35 + "px";
        textfield.classList.add('rand5'); //myAnimation
        textfield.classList.add('myAnimation5'); //
        frm5.append(textfield);
   }    
}


function rand7(){

let inp5 = document.querySelectorAll('#form7 input')
for(let i = 0; i < inp5.length; i++){
    inp5[i].value = Math.floor(Math.random() * 100)
    //inp[i].value = Math.floor(Math.random() * 100)
   }
}
  
   function inc7() {

    let no5 = Number(document.querySelector("#r7").value);

    let frm5 = document.getElementById('form7')
    frm5.innerHTML = ''
    frm5.style.height = "30px";
 
  for (let j = 0; j < no5; j++) {
        let textfield = document.createElement("input");
        textfield.type = "text";
        textfield.id = "foo5";
        textfield.name = "inp7";
        textfield.style.left = (j * 55 ) + 35 + "px";
        textfield.classList.add('rand5'); //myAnimation
        textfield.classList.add('myAnimation5'); //
        frm5.append(textfield);
   }    
}

function rand8(){

let inp5 = document.querySelectorAll('#form8 input')
for(let i = 0; i < inp5.length; i++){
    inp5[i].value = Math.floor(Math.random() * 100)
    //inp[i].value = Math.floor(Math.random() * 100)
   }
}
  
   function inc8() {

    let no5 = Number(document.querySelector("#r8").value);

    let frm5 = document.getElementById('form8')
    frm5.innerHTML = ''
    frm5.style.height = "30px";
 
  for (let j = 0; j < no5; j++) {
        let textfield = document.createElement("input");
        textfield.type = "text";
        textfield.id = "foo5";
        textfield.name = "inp8";
        textfield.style.left = (j * 55 ) + 35 + "px";
        textfield.classList.add('rand5'); //myAnimation
        textfield.classList.add('myAnimation5'); //
        frm5.append(textfield);
   }    
}

 function inc9() {

    let no5 = Number(document.querySelector("#r9").value);

    let frm5 = document.getElementById('form9')
    frm5.innerHTML = ''
    frm5.style.height = "30px";
 
  for (let j = 0; j < no5; j++) {
        let textfield = document.createElement("input");
        textfield.type = "text";
        textfield.id = "foo5";
        textfield.name = "inp9";
        textfield.style.left = (j * 55 ) + 35 + "px";
        textfield.classList.add('rand9'); //myAnimation
        textfield.classList.add('myAnimation5'); //
        frm5.append(textfield);
   }    
}

//birlashma
function birlashma() {

let arrA= [];
let arrB = [];

let for1 = document.querySelectorAll('#form input');
  arrA = []
  for1.forEach((key)=>{
    arrA.push(key.value)
  }); 


  let for2 = document.querySelectorAll('#form2 input');
  arrB = []
  for2.forEach((key)=>{
    arrB.push(key.value)
  });
    
 
let birlashma = [...new Set([...arrA, ...arrB])];


      let sort=document.getElementsByName("inp1");
      let empty="";
      for (var m=0;m<sort.length;m++) {
          empty+=sort[m].value+" ";   
      }

      let value1 =document.getElementById('sort');
      
      let value = value1.options[value1.selectedIndex].text;
      
      

      // for (i = 0; i < sort.length; i++)
      // {
      //   if (sort[i].value != Math.ceil(sort[i].value) && value!='Haqiqiy' ){
   
      //         alert("Iltimos to'g'ri tipni tanlang va mos raqamlarni kiriting!!!")

      //   }else if(sort[i].value != Math.ceil(sort[i].value) && value=='Haqiqiy' ){
      //     console.log("hammash joyashba")
      //   }else{
      //     console.log(1)
      //   }
      // }
       
    
      for (i = 0; i < sort.length; i++)
      {
        if (sort[i].value != Math.ceil(sort[i].value) && value=='Butun')
        {
          alert("Iltimos tog'ri tipni tanlang")
          alert("Iltimos tog'ri raqam  kiriting")
          window.location.reload(true);
          // setTimeout("location.reload(true);",00);
          // window.onload = timedRefresh(5000);
        }else if(sort[i].value ==sort[i].value && value=='Haqiqiy')
        {
          //console.log("haqiqiy zor")
          //alert("Iltimos tog'ri raqam  kiriting")
        }else if(sort[i].value == Math.ceil(sort[i].value) && value=='Butun'){

          //console.log('butun zor')
        }else if( sort[i].value ==sort[i].value && value=='Satr'){
          // console.log('satr zor')
        }
        // console.log('satr zor')
      }


       
     
      
      let sort2=document.getElementsByName("inp2");
      let empty2="";
      for (var n=0;n<sort2.length;n++) {
          empty2+=sort2[n].value+" ";
          
      }
     


for (i = 0; i < sort2.length; i++)
      {
        if (sort2[i].value != Math.ceil(sort2[i].value) && value!='Haqiqiy')
        {
          alert("Iltimos tog'ri tipni tanlang")
          alert("Iltimos tog'ri raqam  kiriting")
          window.location.reload(true);
        }else if(sort2[i].value ==sort2[i].value && value=='Haqiqiy')
        {
          //console.log("haqiqiy zor")
          //alert("Iltimos tog'ri raqam  kiriting")
        }else if(sort2[i].value == Math.ceil(sort2[i].value) && value=='Butun'){

          //console.log('butun zor')
        }else if( sort2[i].value ==sort2[i].value && value=='Satr'){
          // console.log('satr zor')
        }
        // console.log('satr zor')
      }

      }
//birlashma

//upload from text
function read() {
    let text = document.getElementById('text').files[0];

    let reader = new FileReader();
    
    reader.readAsText(text);


    reader.addEventListener('load',function(){
      console.log(reader.result)
      const rows = reader.result.split("\n");

      rows.forEach((row,index)=>{
        if(index === 0){
          let frm = document.getElementById('form')
          frm.innerHTML = ''
          frm.style.height = "37px";
          row.split(" ").forEach((element, j)=>
          {
            let textfield = document.createElement("input");
            textfield.type = "text";
            textfield.id = "foo";
            textfield.style.left = (j * 55 ) + 35 + "px";
            textfield.classList.add('rand1');
            textfield.classList.add('myAnimation'); //
            textfield.value = element;
            frm.append(textfield);
          })

        }
        return; 
      })
    })  
 }

 function read2() {
    let text = document.getElementById('text2').files[0];

    let reader = new FileReader();
    
    reader.readAsText(text);


    reader.addEventListener('load',function(){
      console.log(reader.result)
      const rows = reader.result.split("\n");

      rows.forEach((row,index)=>{
        if(index === 1){
          let frm2 = document.getElementById('form2')
          frm2.innerHTML = ''
          frm2.style.height = "60px";
          row.split(" ").forEach((element, j)=>
          {
            let textfield = document.createElement("input");
            textfield.type = "text";
            textfield.id = "foo2";
            textfield.style.left = (j * 55 ) + 35 + "px";
            textfield.classList.add('rand2'); //myAnimation
            textfield.value = element;
            textfield.classList.add('myAnimation2'); //
            frm2.append(textfield);
          })

        }
        return; 
      })
    })  
 }
//upload from text

 // ayirma AB
function ayirmaA(){
let arr = []
let arr2 = []
let for1 = document.querySelectorAll('#form input')
  arr = []
  for1.forEach((key)=>{
    arr.push(key.value)
  })  

  let for2 = document.querySelectorAll('#form2 input')
  arr2 = []
  for2.forEach((key)=>{
    arr2.push(key.value)
  })  

let w = new Set(arr);
let w2 = new Set(arr2);

let ayirmaA = new Set([...w].filter(x => !w2.has(x)));
// console.log(ayirmaA);




let sort=document.getElementsByName("inp1");
      let empty="";
      for (var m=0;m<sort.length;m++) {
          empty+=sort[m].value+" ";   
      }

      let value1 =document.getElementById('sort');
      
      let value = value1.options[value1.selectedIndex].text;
      
      

      // for (i = 0; i < sort.length; i++)
      // {
      //   if (sort[i].value != Math.ceil(sort[i].value) && value!='Haqiqiy' ){
   
      //         alert("Iltimos to'g'ri tipni tanlang va mos raqamlarni kiriting!!!")

      //   }else if(sort[i].value != Math.ceil(sort[i].value) && value=='Haqiqiy' ){
      //     console.log("hammash joyashba")
      //   }else{
      //     console.log(1)
      //   }
      // }
       
    
      for (i = 0; i < sort.length; i++)
      {
        if (sort[i].value != Math.ceil(sort[i].value) && value=='Butun')
        {
        alert("Iltimos tog'ri tipni tanlang")
          alert("Iltimos tog'ri raqam  kiriting")
          window.location.reload(true);
          // setTimeout("location.reload(true);",00);
          // window.onload = timedRefresh(5000);
        }else if(sort[i].value ==sort[i].value && value=='Haqiqiy')
        {
          //console.log("haqiqiy zor")
          //alert("Iltimos tog'ri raqam  kiriting")
        }else if(sort[i].value == Math.ceil(sort[i].value) && value=='Butun'){

          //console.log('butun zor')
        }else if( sort[i].value ==sort[i].value && value=='Satr'){
          // console.log('satr zor')
        }
        //console.log('satr zor')
      }


       
     
      
      let sort2=document.getElementsByName("inp2");
      let empty2="";
      for (var n=0;n<sort2.length;n++) {
          empty2+=sort2[n].value+" ";
          
      }
     


for (i = 0; i < sort2.length; i++)
      {
        if (sort2[i].value != Math.ceil(sort2[i].value) && value=='Butun')
        {
          alert("Iltimos tog'ri tipni tanlang")
          alert("Iltimos tog'ri raqam  kiriting")
          window.location.reload(true);
        }else if(sort2[i].value ==sort2[i].value && value=='Haqiqiy')
        {
          //console.log("haqiqiy zor")
          //alert("Iltimos tog'ri raqam  kiriting")
        }else if(sort2[i].value == Math.ceil(sort2[i].value) && value=='Butun'){

          //console.log('butun zor')
        }else if( sort2[i].value ==sort2[i].value && value=='Satr'){
          // console.log('satr zor')
        }
        // console.log('satr zor')
      }




      }


//ayirma BA
function ayirmaB() {
let arr = []
let arr2 = []
let for1 = document.querySelectorAll('#form input')
  arr = []
  for1.forEach((key)=>{
    arr.push(key.value)
  })  

  let for2 = document.querySelectorAll('#form2 input')
  arr2 = []
  for2.forEach((key)=>{
    arr2.push(key.value)
  })  

  let w = new Set(arr);
let w2 = new Set(arr2);

let ayirmaB = new Set([...w2].filter(x => !w.has(x)));
console.log(ayirmaB);


      let sort=document.getElementsByName("inp1");
      let empty="";
      for (var m=0;m<sort.length;m++) {
          empty+=sort[m].value+" ";
          
      }
      console.log(empty);
      

      let sort2=document.getElementsByName("inp2");
      let empty2="";
      for (var n=0;n<sort2.length;n++) {
          empty2+=sort2[n].value+" ";
          
      }
      console.log(empty2);

}

function read() {
    let text = document.getElementById('text').files[0];

    let reader = new FileReader();
    
    reader.readAsText(text);


    reader.addEventListener('load',function(){
      console.log(reader.result)
      const rows = reader.result.split("\n");

      rows.forEach((row,index)=>{
        if(index === 0){
          let frm = document.getElementById('form')
          frm.innerHTML = ''
          frm.style.height = "37px";
          row.split(" ").forEach((element, j)=>
          {
            let textfield = document.createElement("input");
            textfield.type = "text";
            textfield.id = "foo";
            textfield.style.left = (j * 55 ) + 35 + "px";
            textfield.classList.add('rand1');
            textfield.classList.add('myAnimation'); //
            textfield.value = element;
            frm.append(textfield);
          })

        }
        return; 
      })
    })  
 }

 function read2() {
    let text = document.getElementById('text2').files[0];

    let reader = new FileReader();
    
    reader.readAsText(text);


    reader.addEventListener('load',function(){
      console.log(reader.result)
      const rows = reader.result.split("\n");

      rows.forEach((row,index)=>{
        if(index === 1){
          let frm2 = document.getElementById('form2')
          frm2.innerHTML = ''
          frm2.style.height = "60px";
          row.split(" ").forEach((element, j)=>
          {
            let textfield = document.createElement("input");
            textfield.type = "text";
            textfield.id = "foo2";
            textfield.style.left = (j * 55 ) + 35 + "px";
            textfield.classList.add('rand2'); //myAnimation
            textfield.value = element;
            textfield.classList.add('myAnimation2'); //
            frm2.append(textfield);
          })

        }
        return; 
      })
    }) 




    let sort=document.getElementsByName("inp1");
      let empty="";
      for (var m=0;m<sort.length;m++) {
          empty+=sort[m].value+" ";   
      }

      let value1 =document.getElementById('sort');
      
      let value = value1.options[value1.selectedIndex].text;
      
      

      // for (i = 0; i < sort.length; i++)
      // {
      //   if (sort[i].value != Math.ceil(sort[i].value) && value!='Haqiqiy' ){
   
      //         alert("Iltimos to'g'ri tipni tanlang va mos raqamlarni kiriting!!!")

      //   }else if(sort[i].value != Math.ceil(sort[i].value) && value=='Haqiqiy' ){
      //     console.log("hammash joyashba")
      //   }else{
      //     console.log(1)
      //   }
      // }
       
    
      for (i = 0; i < sort.length; i++)
      {
        if (sort[i].value != Math.ceil(sort[i].value) && value=='Butun')
        {
          alert("Iltimos tog'ri tipni tanlang")
          alert("Iltimos tog'ri raqam  kiriting")
          window.location.reload(true);
          // setTimeout("location.reload(true);",00);
          // window.onload = timedRefresh(5000);
        }else if(sort[i].value ==sort[i].value && value=='Haqiqiy')
        {
          //  console.log("haqiqiy zor")
          //alert("Iltimos tog'ri raqam  kiriting")
        }else if(sort[i].value == Math.ceil(sort[i].value) && value=='Butun'){

          //console.log('butun zor')
        }else if( sort[i].value ==sort[i].value && value=='Satr'){
         // console.log('satr zor')
        }
        //console.log('satr zor')
      }


       
     
      
      let sort2=document.getElementsByName("inp2");
      let empty2="";
      for (var n=0;n<sort2.length;n++) {
          empty2+=sort2[n].value+" ";
          
      }
     


for (i = 0; i < sort2.length; i++)
      {
        if (sort2[i].value != Math.ceil(sort2[i].value) && value=='Butun')
        {
          alert("Iltimos tog'ri tipni tanlang")
          alert("Iltimos tog'ri raqam  kiriting")
          window.location.reload(true);
        }else if(sort2[i].value ==sort2[i].value && value=='Haqiqiy')
        {
          //console.log("haqiqiy zor")
          //alert("Iltimos tog'ri raqam  kiriting")
        }else if(sort2[i].value == Math.ceil(sort2[i].value) && value=='Butun'){

          //console.log('butun zor')
        }else if( sort2[i].value ==sort2[i].value && value=='Satr'){
          // console.log('satr zor')
        }
        // console.log('satr zor')
      } 
 }


//kesishma
function kesishma() {
  let arr = []
let arr2 = []
let for1 = document.querySelectorAll('#form input')
  arr = []
  for1.forEach((key)=>{
    arr.push(key.value)
  })  

  let for2 = document.querySelectorAll('#form2 input')
  arr2 = []
  for2.forEach((key)=>{
    arr2.push(key.value)
  })  
  
  let kesishma = arr.filter(x => arr2.includes(x));
  console.log(kesishma);


      let sort=document.getElementsByName("inp1");
      let empty="";
      for (var m=0;m<sort.length;m++) {
          empty+=sort[m].value+" ";
          
      }
      console.log(empty);
      

      let sort2=document.getElementsByName("inp2");
      let empty2="";
      for (var n=0;n<sort2.length;n++) {
          empty2+=sort2[n].value+" ";
          
      }
      console.log(empty2);

}

function read() {
    let text = document.getElementById('text').files[0];

    let reader = new FileReader();
    
    reader.readAsText(text);


    reader.addEventListener('load',function(){
      console.log(reader.result)
      const rows = reader.result.split("\n");

      rows.forEach((row,index)=>{
        if(index === 0){
          let frm = document.getElementById('form')
          frm.innerHTML = ''
          frm.style.height = "37px";
          row.split(" ").forEach((element, j)=>
          {
            let textfield = document.createElement("input");
            textfield.type = "text";
            textfield.id = "foo";
            textfield.style.left = (j * 55 ) + 35 + "px";
            textfield.classList.add('rand1');
            textfield.classList.add('myAnimation'); //
            textfield.value = element;
            frm.append(textfield);
          })

        }
        return; 
      })
    })  
 }

 function read2() {
    let text = document.getElementById('text2').files[0];

    let reader = new FileReader();
    
    reader.readAsText(text);


    reader.addEventListener('load',function(){
      console.log(reader.result)
      const rows = reader.result.split("\n");

      rows.forEach((row,index)=>{
        if(index === 1){
          let frm2 = document.getElementById('form2')
          frm2.innerHTML = ''
          frm2.style.height = "60px";
          row.split(" ").forEach((element, j)=>
          {
            let textfield = document.createElement("input");
            textfield.type = "text";
            textfield.id = "foo2";
            textfield.style.left = (j * 55 ) + 35 + "px";
            textfield.classList.add('rand2'); //myAnimation
            textfield.value = element;
            textfield.classList.add('myAnimation2'); //
            frm2.append(textfield);
          })

        }
        return; 
      })
    }) 


    let sort=document.getElementsByName("inp1");
      let empty="";
      for (var m=0;m<sort.length;m++) {
          empty+=sort[m].value+" ";   
      }

      let value1 =document.getElementById('sort');
      
      let value = value1.options[value1.selectedIndex].text;
      
      

      // for (i = 0; i < sort.length; i++)
      // {
      //   if (sort[i].value != Math.ceil(sort[i].value) && value!='Haqiqiy' ){
   
      //         alert("Iltimos to'g'ri tipni tanlang va mos raqamlarni kiriting!!!")

      //   }else if(sort[i].value != Math.ceil(sort[i].value) && value=='Haqiqiy' ){
      //     console.log("hammash joyashba")
      //   }else{
      //     console.log(1)
      //   }
      // }
       
    
      for (i = 0; i < sort.length; i++)
      {
        if (sort[i].value != Math.ceil(sort[i].value) && value=='Butun')
        {
          alert("Iltimos tog'ri tipni tanlang")
          alert("Iltimos tog'ri raqam  kiriting")
          window.location.reload(true);
          // setTimeout("location.reload(true);",00);
          // window.onload = timedRefresh(5000);
        }else if(sort[i].value ==sort[i].value && value=='Haqiqiy')
        {
          //console.log("haqiqiy zor")
          //alert("Iltimos tog'ri raqam  kiriting")
        }else if(sort[i].value == Math.ceil(sort[i].value) && value=='Butun'){

          //console.log('butun zor')
        }else if( sort[i].value ==sort[i].value && value=='Satr'){
          //console.log('satr zor')
        }
        //console.log('satr zor')
      }


       
     
      
      let sort2=document.getElementsByName("inp2");
      let empty2="";
      for (var n=0;n<sort2.length;n++) {
          empty2+=sort2[n].value+" ";
          
      }
     


for (i = 0; i < sort2.length; i++)
      {
        if (sort2[i].value != Math.ceil(sort2[i].value) && value=='Butun')
        {
          alert("Iltimos tog'ri tipni tanlang")
          alert("Iltimos tog'ri raqam  kiriting")
          window.location.reload(true);
        }else if(sort2[i].value ==sort2[i].value && value=='Haqiqiy')
        {
          //console.log("haqiqiy zor")
          //alert("Iltimos tog'ri raqam  kiriting")
        }else if(sort2[i].value == Math.ceil(sort2[i].value) && value=='Butun'){

          //console.log('butun zor')
        }else if( sort2[i].value ==sort2[i].value && value=='Satr'){
          // console.log('satr zor')
        }
        // console.log('satr zor')
      }

 }




function obedenit(){
    
        let arrA= [];
        let arrB = [];
        
        let for1 = document.querySelectorAll('#form6 input');
          arrA = []
          for1.forEach((key)=>{
            arrA.push(key.value)
          }); 
        
        console.log(12)
        
          let for2 = document.querySelectorAll('#form4 input');
          arrB = []
          for2.forEach((key)=>{
            arrB.push(key.value)
          });

          let for3 = document.querySelectorAll('#form5 input');
          arrC = []
          for3.forEach((key)=>{
            arrC.push(key.value)
          });

          let answer = new Set(arrC);

          // console.log(set3)
          // console.log(arrA)
          // console.log(arrB)

       
            
            

     let a = new Set(arrA);
     let b = new Set(arrB);
         let hlp = []
        let union = new  Set ( [...a, ...b ] ) ;

        answer2 = Array.from(answer)
        union2 = Array.from(union)
        answer2.sort()
        union2.sort()
      

        if (union2.length == answer2.length)
        {
          for(let i=0; i < union2.length; i++){
            if (union2[i] !== answer2[i]){
              console.log(union2[i]+'SALOM')
              setTimeout(()=>{
               document.getElementById("natija").innerHTML =
                "<div class='alert alert-danger' role='alert'>Sizning bahoyingiz: <span id='span'>2</span></div>";
            },500)
              break
            }
            else
            {
               setTimeout(()=>{
               document.getElementById("natija").innerHTML =
                "<div class='alert alert-success' role='alert'>Sizning bahoyingiz: <span id='span'>5</span></div>";
            },500)
           }
          }
          console.log(hlp[0])

        }
        else {
          console.log('poyon xato')
        }

    
}

function raznostA(){
    
        let arr = []
        let arr2 = []
        let for1 = document.querySelectorAll('#form6 input')
          arr = []
          for1.forEach((key)=>{
            arr.push(key.value)
          })  
        
          let for2 = document.querySelectorAll('#form4 input')
          arr2 = []
          for2.forEach((key)=>{
            arr2.push(key.value)
          })  

let for3 = document.querySelectorAll('#form5 input');
          arrC = []
          for3.forEach((key)=>{
            arrC.push(key.value)
          });

          let answer= new Set(arrC);

         //console.log(set3)

          let set1 = new Set(arr);
          let set2 = new Set(arr2);
          let hlp = [];
          let union= new Set([...set1].filter(x => !set2.has(x)));
          
        answer2 = Array.from(answer)
        union2 = Array.from(union)
        answer2.sort()
        union2.sort()
        // console.log(answer2)
        // console.log(union2)

        if (union2.length == answer2.length)
        {
          for(i=0; i < union2.length; i++){
            if (union2[i] !== answer2[i]){
              setTimeout(()=>{
               document.getElementById("natija").innerHTML =
                "<div class='alert alert-danger' role='alert'>Sizning bahoyingiz: <span id='span'>2</span></div>";
            },500)
              break
            }
            else
            {
               setTimeout(()=>{
               document.getElementById("natija").innerHTML =
                "<div class='alert alert-success' role='alert'>Sizning bahoyingiz: <span id='span'>5</span></div>";
            },500)
           }
          }
          console.log(hlp[0])

        }
        else {
          console.log('poyon xato')
        }

        
    
}

function raznostB(){
    
let arr = []
let arr2 = []
let for1 = document.querySelectorAll('#form6 input')
  arr = []
  for1.forEach((key)=>{
    arr.push(key.value)
  })  

  let for2 = document.querySelectorAll('#form4 input')
  arr2 = []
  for2.forEach((key)=>{
    arr2.push(key.value)
  })  


let for3 = document.querySelectorAll('#form5 input');
          arrC = []
          for3.forEach((key)=>{
            arrC.push(key.value)
          });

          let answer = new Set(arrC);

          
  let w = new Set(arr);
let w2 = new Set(arr2);

let union = new Set([...w2].filter(x => !w.has(x)));

answer2 = Array.from(answer)
        union2 = Array.from(union)
        answer2.sort()
        union2.sort()
        // console.log(answer2)
        // console.log(union2)
        let hlp = [];
        if (union2.length == answer2.length)
        {
          for(i=0; i < union2.length; i++){
            if (union2[i] !== answer2[i]){
              setTimeout(()=>{
               document.getElementById("natija").innerHTML =
                "<div class='alert alert-danger' role='alert'>Sizning bahoyingiz: <span id='span'>2</span></div>";
            },500)
              break
            }
            else
            {
               setTimeout(()=>{
               document.getElementById("natija").innerHTML =
                "<div class='alert alert-success' role='alert'>Sizning bahoyingiz: <span id='span'>5</span></div>";
            },500)
           }
          }
          console.log(hlp[0])

        }
        else {
          console.log('poyon xato')
        }    

}

function simentr(){
    
    
let arr = []
let arr2 = []
let for1 = document.querySelectorAll('#form6 input')
  arr = []
  for1.forEach((key)=>{
    arr.push(key.value)
  })  

  let for2 = document.querySelectorAll('#form4 input')
  arr2 = []
  for2.forEach((key)=>{
    arr2.push(key.value)
  })  
  

  let for3 = document.querySelectorAll('#form5 input');
          arrC = []
          for3.forEach((key)=>{
            arrC.push(key.value)
          });

          let answer = new Set(arrC);

          
  let union = arr.filter(x => arr2.includes(x));
 
 answer2 = Array.from(answer)
        union2 = Array.from(union)
        answer2.sort()
        union2.sort()
        // console.log(answer2)
        // console.log(union2)
        let hlp = [];
        if (union2.length == answer2.length)
        {
          for(i=0; i < union2.length; i++){
            if (union2[i] !== answer2[i]){
              setTimeout(()=>{
               document.getElementById("natija").innerHTML =
                "<div class='alert alert-danger' role='alert'>Sizning bahoyingiz: <span id='span'>2</span></div>";
            },500)
              break
            }
            else
            {
               setTimeout(()=>{
               document.getElementById("natija").innerHTML =
                "<div class='alert alert-success' role='alert'>Sizning bahoyingiz: <span id='span'>5</span></div>";
            },500)
           }
          }
          console.log(hlp[0])

        }
        else {
          console.log('poyon xato')
        }
    

}






function nazorat(){
    
        let arrA= [];
        let arrB = [];
        
        let for1 = document.querySelectorAll('#form7 input');
          arrA = []
          for1.forEach((key)=>{
            arrA.push(key.value)
          }); 
        
        
          let for2 = document.querySelectorAll('#form8 input');
          arrB = []
          for2.forEach((key)=>{
            arrB.push(key.value)
          });

          let for3 = document.querySelectorAll('#form9 input');
          arrC = []
          for3.forEach((key)=>{
            arrC.push(key.value)
          });

          let answer = new Set(arrC);
         
          // console.log(set3)
          // console.log(arrA)
          // console.log(arrB)

          // console.log(answer)
            
            

     let a = new Set(arrA);
     let b = new Set(arrB);
         
        let union = new  Set ( [...a, ...b ] ) ;

        //console.log(union)

        answer2 = Array.from(answer)

        union2 = Array.from(union)
        
      // if (answer2.length != union2.length) {
      //   alert("Javoblar miqdorini to'g'ri kiriting!")
      // }
      // else {
      //   let hlp2 = [];
      //   for (i=0; i < answer2.length; i++){
      //     if (answer2[i] !== union2[i]){
      //       hlp2.push(0)
          
      //     }
          
      //   }

      //   if (hlp2.length == 0) {
      //     alert("Javob to'g'ri!")
      //   }
      //   else {
      //       alert("Javob xato! Sizning javobingiz " + answer2 + ",   To'g'ri javob " + union2);
      //       // alert("Javob xato! Sizning javobingiz " + answer2 + ". To'g'ri javob " + union2);

      //   }
      //   }




      }
         


    

function nazorat2(){
    
        let arr = []
        let arr2 = []
        let for1 = document.querySelectorAll('#form7 input')
          arr = []
          for1.forEach((key)=>{
            arr.push(key.value)
          })  
        
          let for2 = document.querySelectorAll('#form8 input')
          arr2 = []
          for2.forEach((key)=>{
            arr2.push(key.value)
          })  

let for3 = document.querySelectorAll('#form9 input');
          arrC = []
          for3.forEach((key)=>{
            arrC.push(key.value)
          });

          let answer= new Set(arrC);

         //console.log(set3)

          let set1 = new Set(arr);
          let set2 = new Set(arr2);
          let hlp = [];
          let union= new Set([...set1].filter(x => !set2.has(x)));
          
        answer2 = Array.from(answer)
        union2 = Array.from(union)
        answer2.sort()
        union2.sort()
        // console.log(answer2)
        // console.log(union2)

        if (union2.length == answer2.length)
        {
          for(i=0; i < union2.length; i++){
            if (union2[i] !== answer2[i]){
              setTimeout(()=>{
               document.getElementById("natija").innerHTML =
                "<div class='alert alert-danger' role='alert'>Sizning bahoyingiz: <span id='span'>2</span></div>";
            },500)
              break
            }
            else
            {
               setTimeout(()=>{
               document.getElementById("natija").innerHTML =
                "<div class='alert alert-success' role='alert'>Sizning bahoyingiz: <span id='span'>5</span></div>";
            },500)
           }
          }
          console.log(hlp[0])

        }
        else {
          console.log('poyon xato')
        }

        
    
}

function nazorat3(){
    
let arr = []
let arr2 = []
let for1 = document.querySelectorAll('#form7 input')
  arr = []
  for1.forEach((key)=>{
    arr.push(key.value)
  })  

  let for2 = document.querySelectorAll('#form8 input')
  arr2 = []
  for2.forEach((key)=>{
    arr2.push(key.value)
  })  


let for3 = document.querySelectorAll('#form9 input');
          arrC = []
          for3.forEach((key)=>{
            arrC.push(key.value)
          });

          let answer = new Set(arrC);

          
  let w = new Set(arr);
let w2 = new Set(arr2);

let union = new Set([...w2].filter(x => !w.has(x)));

answer2 = Array.from(answer)
        union2 = Array.from(union)
        answer2.sort()
        union2.sort()
        // console.log(answer2)
        // console.log(union2)
        let hlp = [];
        if (union2.length == answer2.length)
        {
          for(i=0; i < union2.length; i++){
            if (union2[i] !== answer2[i]){
              setTimeout(()=>{
               document.getElementById("natija").innerHTML =
                "<div class='alert alert-danger' role='alert'>Sizning bahoyingiz: <span id='span'>2</span></div>";
            },500)
              break
            }
            else
            {
               setTimeout(()=>{
               document.getElementById("natija").innerHTML =
                "<div class='alert alert-success' role='alert'>Sizning bahoyingiz: <span id='span'>5</span></div>";
            },500)
           }
          }
          console.log(hlp[0])

        }
        else {
          console.log('poyon xato')
        }    

}

function nazorat4(){
    
    
let arr = []
let arr2 = []
let for1 = document.querySelectorAll('#form7 input')
  arr = []
  for1.forEach((key)=>{
    arr.push(key.value)
  })  

  let for2 = document.querySelectorAll('#form8 input')
  arr2 = []
  for2.forEach((key)=>{
    arr2.push(key.value)
  })  
  

  let for3 = document.querySelectorAll('#form9 input');
          arrC = []
          for3.forEach((key)=>{
            arrC.push(key.value)
          });

          let answer = new Set(arrC);

          
  let union = arr.filter(x => arr2.includes(x));
 
 answer2 = Array.from(answer)
        union2 = Array.from(union)
        answer2.sort()
        union2.sort()
        // console.log(answer2)
        // console.log(union2)
        let hlp = [];
        if (union2.length == answer2.length)
        {
          for(i=0; i < union2.length; i++){
            if (union2[i] !== answer2[i]){
              setTimeout(()=>{
               document.getElementById("natija").innerHTML =
                "<div class='alert alert-danger' role='alert'>Sizning bahoyingiz: <span id='span'>2</span></div>";
            },500)
              break
            }
            else
            {
               setTimeout(()=>{
               document.getElementById("natija").innerHTML =
                "<div class='alert alert-success' role='alert'>Sizning bahoyingiz: <span id='span'>5</span></div>";
            },500)
           }
          }
          console.log(hlp[0])

        }
        else {
          console.log('poyon xato')
        }
    

}


</script>
</body>
</html
































<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
    <link href="assets/style.css" rel="stylesheet"  crossorigin="anonymous">
    <script src="assets/head.js" crossorigin="anonymous"></script>
    <link href="assets/self.css" rel="stylesheet">
</head>
<body>


<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">O'quv jarayoni</button>
    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Mashq rejimi</button>
    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Nazorat rejimi</button>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <!--begining of show-->
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

     <div id="container">
      <div class="row bg">
        <div class="col border" style="margin-left:15px!important;">
          <!--begining of random 1-->
              <input type="number" id="r1" class="border m-2" min="1" max="12" placeholder="0"  oninput="inc()">
              <button class="button btn-warning border-0 m-2" onclick="rand()">Tasodifiy</button>
              <input type="file" onchange="read()" id="text">
              <form id="form">
              </form>
          <!--end of random 1-->
          <!--begining of random 2-->
              <input type="number" id="r2" class="border m-2" min="1" max="12" placeholder="0"  oninput="inc2()">
              <button class="button btn-warning border-0 m-2" onclick="rand2()">Tasodifiy</button>
              <input type="file"  onchange="read2()" id="text2">
              <form id="form2">
              </form>

            </div>
            <div class="col-md-1 border" >
              <select name='sel' id="sort"  onchange="" style="margin:7px 0px;border:2px solid #ECF0F1;border-radius:5px;">
                <option name="s">Satr</option>
                <option name="b">Butun</option>
                <option name="h">Haqiqiy</option>
              </select>
            </div>



    <div class="col border" style="margin-right:15px!important;">
      <h4 align="center">Natija</h4>
      <input type="text" name="hiddenInput" style="visibility: hidden;" id="hiddenInput">
     <div class="col-md-6" >
           
        </div>
      </div>
             
        </div>
      </div>
      <!---start of procces--->
      <div class="row bg m-2">
        <div class="col border">
          <button  id="birlashma" class="btn btn-primary m-1" onclick ="birlashma()" onchange="isInt()">Birlashma</button><br>
          <button  id="ayirmaA" class="btn btn-primary m-1" onclick="ayirmaA()">Ayirma A/B</button><br>
          <button  id="ayirmaB" class="btn btn-primary m-1" onclick="ayirmaB()">Ayirma B/A</button><br>
          <button  id="kesishma" class="btn btn-primary m-1" onclick="kesishma()">Kesishma</button><br>
        </div>
        <div class="col border">1</div>
      </div>
      <!---end of procces--->
  </div>

  <!--end of show-->





<!--start of trying-->
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">


 <div id="container">
      <div class="row bg">
        <div class="col border" style="margin-left:15px!important;">
            

              <input type="number" id="r7" class="border m-2" min="1" max="12" placeholder="0"  oninput="inc7()">
              <button class="button btn-warning border-0 m-2" onclick="rand7()">Tasodifiy</button>
              <form id="form7">
              </form>

 
              <input type="number" id="r8" class="border m-2" min="1" max="12" placeholder="0"  oninput="inc8()">
              <button class="button btn-warning border-0 m-2" onclick="rand8()">Tasodifiy</button>
              <form id="form8">
              </form>
               
              <input type="number" id="r9" class="border m-2" min="1" max="12" placeholder="0"  oninput="">
              
              <form id="form9">
              </form>
              

            </div>
          



    <div class="col border" style="margin-right:15px!important;" id="res11">
     
      </div>
             
        </div>
      </div>
      <!---start of procces--->
      <div class="row bg m-2">
        <div class="col border">
          <button  id="birlashma" class="btn btn-primary m-1" onclick ="nazorat()">Birlashma</button><br>
          <button  id="ayirmaA" class="btn btn-primary m-1" onclick="nazorat2()">Ayirma A/B</button><br>
          <button  id="ayirmaB" class="btn btn-primary m-1" onclick="nazorat3()">Ayirma B/A</button><br>
          <button  id="kesishma" class="btn btn-primary m-1" onclick="simentr4()">Kesishma</button><br>
        </div>
        
      </div>
        <div class="col border" id="mark">1</div>
      <!---end of procces--->

  </div>
  
<!--end of trying-->





  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">

    
 <div id="container">
      <div class="row bg">
        <div class="col border" style="margin-left:15px!important;">
            

              <input type="number" id="r6" class="border m-2" min="1" max="12" placeholder="0"  oninput="inc6()">
              <button class="button btn-warning border-0 m-2" onclick="rand6()">Tasodifiy</button>
              <form id="form6">
              </form>

 
              <input type="number" id="r4" class="border m-2" min="1" max="12" placeholder="0"  oninput="inc4()">
              <button class="button btn-warning border-0 m-2" onclick="rand4()">Tasodifiy</button>
              <form id="form4">
              </form>
               
              <input type="number" id="r5" class="border m-2" min="1" max="12" placeholder="0"  oninput="inc5()">
              
              <form id="form5">
              </form>
              

            </div>
          



    <div class="col border" style="margin-right:15px!important;" id="natija">
     
      </div>
             
        </div>
      </div>
      <!---start of procces--->
      <div class="row bg m-2">
        <div class="col border">
          <button  id="birlashma" class="btn btn-primary m-1" onclick ="obedenit()">Birlashma</button><br>
          <button  id="ayirmaA" class="btn btn-primary m-1" onclick="raznostA()">Ayirma A/B</button><br>
          <button  id="ayirmaB" class="btn btn-primary m-1" onclick="raznostB()">Ayirma B/A</button><br>
          <button  id="kesishma" class="btn btn-primary m-1" onclick="simentr()">Kesishma</button><br>
        </div>
        
      </div>
        <div class="col border" id="mark">1</div>
      <!---end of procces--->



  </div>
</div>
<script src="assets/bottom.js"></script>
<script src="assets/bottom2.js"></script>
<script src="assets/amal.js"></script>
<script type="text/javascript">

//filter

// var inputs=document.getElementsByName("inp1");
// var admissionNumber="";
// for (var m=0;m<inputs.length;m++) {
//     admissionNumber+=inputs[m].value+" ";
//     console.log(admissionNumber);
// }
// console.log(admissionNumber);

// function getSort(){

//   let value =document.getElementById('sort').value;
//   console.log(value)
// }

//filter
// let test =10;
// for(w = 0;w < test ;w++){
  
//   alert('Hello world '+ w)
// }



  //mover
let elem = document.getElementById('hiddenInput');
let rect = elem.getBoundingClientRect();
console.log(rect.left);


let right = document.getElementById('birlashma');
let set1 = new Set();
right.addEventListener("click",function(){

  let elements = document.querySelectorAll('.rand1');
  //console.log("click")
  elements.forEach((element,index)=>{
    set1.add(element.value);
    setTimeout(()=>{
      element.style.left = (parseInt(element.style.left) + rect.left -30)+"px";
    }, index* 800)
  })

let elements1 = document.querySelectorAll('.rand2');
  //console.log("click")
  elements1.forEach((element,index)=>{

   if(set1.has(element.value)){
    
    element.style.backgroundColor = '#C0392B ';
    element.style.border = '#CD5C5C';
   }
   else{
    // console.log(text);

    setTimeout(()=>{
      element.style.left = (parseInt(element.style.left) + rect.left -30)+"px";
    }, index* 1000)
   }
   
  })
});
//mover

//mover
let ayirA = document.getElementById('ayirmaA');
let set2 = new Set();
let set3 = new Set();

ayirA.addEventListener("click",function(){

  let ayirElement = document.querySelectorAll('.rand1');
  //console.log("click")
  ayirElement.forEach((element,index)=>{
    set2.add(element.value);
       setTimeout(()=>{
      element.style.left = (parseInt(element.style.left) + rect.left + rect.right - 970)+"px";
    }, index* 800)
  
   
  })


// let set3 = new Set();
let ayirElement1= document.querySelectorAll('.rand2');
  
  ayirElement1.forEach((element,index)=>{
   set3.add(element.value) 
   if(!set2.has(element.value)){
    setTimeout(()=>{
      element.style.left = (parseInt(element.style.left) + rect.left + rect.right -970 )+"px";
    }, index* 800)
  }else{
    console.log('xato')
  }
  
  })



});
//mover

//mover



let ayirB = document.getElementById('ayirmaB');

ayirB.addEventListener("click",function(){

  let ayirBelement = document.querySelectorAll('.rand1');
  //console.log("click")
  ayirBelement.forEach((element,index)=>{

    setTimeout(()=>{
      element.style.left = (parseInt(element.style.left) + rect.left -30)+"px";
    }, index* 800)
  })

let ayirBelemen2 = document.querySelectorAll('.rand2');
  //console.log("click")
  ayirBelemen2.forEach((element,index)=>{
    setTimeout(()=>{
      element.style.left = (parseInt(element.style.left) + rect.left -30)+"px";
    }, index* 1000)
  })
});
//mover

// //mover

let kes = document.getElementById('kesishma');

kes.addEventListener("click",function(){

  let kesel = document.querySelectorAll('.rand1');
  //console.log("click")
  kesel.forEach((element,index)=>{

    setTimeout(()=>{
      element.style.left = (parseInt(element.style.left) + rect.left -30)+"px";
    }, index* 800)
  })

let kesel2 = document.querySelectorAll('.rand2');
  //console.log("click")
  kesel2.forEach((element,index)=>{
    setTimeout(()=>{
      element.style.left = (parseInt(element.style.left) + rect.left -30)+"px";
    }, index* 1000)
  })
});
//


  function rand(){

    let inp = document.querySelectorAll('#form input')
    for(let i = 0; i < inp.length; i++){
        inp[i].value = Math.floor(Math.random() * 100)
        //inp[i].value = Math.floor(Math.random() * 100)
    }
  }
  
   function inc() {

    let no = Number(document.querySelector("#r1").value);

    let frm = document.getElementById('form');
    frm.innerHTML = '';
    frm.style.height = "35px";
    for (let i = 0; i < no; i++) {
        let textfield = document.createElement("input");
        textfield.type = "text";
        textfield.id = "foo";
        textfield.name = "inp1";
        textfield.style.left = (i * 55 ) + 35 + "px";
        textfield.classList.add('rand1');
        textfield.classList.add('myAnimation'); //

        frm.append(textfield);
    }    
}

function rand2(){

let inp2 = document.querySelectorAll('#form2 input')
for(let i = 0; i < inp2.length; i++){
    inp2[i].value = Math.floor(Math.random() * 100)
    //inp[i].value = Math.floor(Math.random() * 100)
   }
}
  
   function inc2() {

    let no2 = Number(document.querySelector("#r2").value);

    let frm2 = document.getElementById('form2')
    frm2.innerHTML = ''
    frm2.style.height = "80px";
 
  for (let j = 0; j < no2; j++) {
        let textfield = document.createElement("input");
        textfield.type = "text";
        textfield.id = "foo2";
        textfield.name = "inp2";
        textfield.style.left = (j * 55 ) + 35 + "px";
        textfield.classList.add('rand2'); //myAnimation
        textfield.classList.add('myAnimation2'); //
        frm2.append(textfield);
   }    
}




function rand6(){

let inp3 = document.querySelectorAll('#form6 input')
console.log(inp3)
for(let i = 0; i < inp3.length; i++){
    inp3[i].value = Math.floor(Math.random() * 100)
    //inp[i].value = Math.floor(Math.random() * 100)
   }
}
  
   function inc6() {

    let no6 = Number(document.querySelector("#r6").value);

    let frm6 = document.getElementById('form6')
    frm6.innerHTML = ''
    frm6.style.height = "30px";
 
  for (let j = 0; j < no6; j++) {
        let textfield = document.createElement("input");
        textfield.type = "text";
        textfield.id = "foo6";
        textfield.name = "inp6";
        textfield.style.left = (j * 55 ) + 35 + "px";
        textfield.classList.add('rand6'); //myAnimation
        textfield.classList.add('myAnimation6'); //
        frm6.append(textfield);
   }    
}




function rand4(){

let inp4 = document.querySelectorAll('#form4 input')
for(let i = 0; i < inp4.length; i++){
    inp4[i].value = Math.floor(Math.random() * 100)
    //inp[i].value = Math.floor(Math.random() * 100)
   }
}
  
   function inc4() {

    let no4 = Number(document.querySelector("#r4").value);

    let frm4 = document.getElementById('form4')
    frm4.innerHTML = ''
    frm4.style.height = "30px";
 
  for (let j = 0; j < no4; j++) {
        let textfield = document.createElement("input");
        textfield.type = "text";
        textfield.id = "foo4";
        textfield.name = "inp4";
        textfield.style.left = (j * 55 ) + 35 + "px";
        textfield.classList.add('rand4'); //myAnimation
        textfield.classList.add('myAnimation4'); //
        frm4.append(textfield);
   }    
}

function rand5(){

let inp5 = document.querySelectorAll('#form5 input')
for(let i = 0; i < inp5.length; i++){
    inp5[i].value = Math.floor(Math.random() * 100)
    //inp[i].value = Math.floor(Math.random() * 100)
   }
}
  
   function inc5() {

    let no5 = Number(document.querySelector("#r5").value);

    let frm5 = document.getElementById('form5')
    frm5.innerHTML = ''
    frm5.style.height = "30px";
 
  for (let j = 0; j < no5; j++) {
        let textfield = document.createElement("input");
        textfield.type = "text";
        textfield.id = "foo5";
        textfield.name = "inp5";
        textfield.style.left = (j * 55 ) + 35 + "px";
        textfield.classList.add('rand5'); //myAnimation
        textfield.classList.add('myAnimation5'); //
        frm5.append(textfield);
   }    
}


function rand7(){

let inp5 = document.querySelectorAll('#form5 input')
for(let i = 0; i < inp5.length; i++){
    inp5[i].value = Math.floor(Math.random() * 100)
    //inp[i].value = Math.floor(Math.random() * 100)
   }
}
  
   function inc7() {

    let no5 = Number(document.querySelector("#r7").value);

    let frm5 = document.getElementById('form7')
    frm5.innerHTML = ''
    frm5.style.height = "30px";
 
  for (let j = 0; j < no5; j++) {
        let textfield = document.createElement("input");
        textfield.type = "text";
        textfield.id = "foo5";
        textfield.name = "inp7";
        textfield.style.left = (j * 55 ) + 35 + "px";
        textfield.classList.add('rand5'); //myAnimation
        textfield.classList.add('myAnimation5'); //
        frm5.append(textfield);
   }    
}

function rand8(){

let inp5 = document.querySelectorAll('#form8 input')
for(let i = 0; i < inp5.length; i++){
    inp5[i].value = Math.floor(Math.random() * 100)
    //inp[i].value = Math.floor(Math.random() * 100)
   }
}
  
   function inc8() {

    let no5 = Number(document.querySelector("#r8").value);

    let frm5 = document.getElementById('form8')
    frm5.innerHTML = ''
    frm5.style.height = "30px";
 
  for (let j = 0; j < no5; j++) {
        let textfield = document.createElement("input");
        textfield.type = "text";
        textfield.id = "foo5";
        textfield.name = "inp8";
        textfield.style.left = (j * 55 ) + 35 + "px";
        textfield.classList.add('rand5'); //myAnimation
        textfield.classList.add('myAnimation5'); //
        frm5.append(textfield);
   }    
}


//birlashma
function birlashma() {

let arrA= [];
let arrB = [];

let for1 = document.querySelectorAll('#form input');
  arrA = []
  for1.forEach((key)=>{
    arrA.push(key.value)
  }); 


  let for2 = document.querySelectorAll('#form2 input');
  arrB = []
  for2.forEach((key)=>{
    arrB.push(key.value)
  });
    
 
let birlashma = [...new Set([...arrA, ...arrB])];


      let sort=document.getElementsByName("inp1");
      let empty="";
      for (var m=0;m<sort.length;m++) {
          empty+=sort[m].value+" ";   
      }

      let value1 =document.getElementById('sort');
      
      let value = value1.options[value1.selectedIndex].text;
      
      

      // for (i = 0; i < sort.length; i++)
      // {
      //   if (sort[i].value != Math.ceil(sort[i].value) && value!='Haqiqiy' ){
   
      //         alert("Iltimos to'g'ri tipni tanlang va mos raqamlarni kiriting!!!")

      //   }else if(sort[i].value != Math.ceil(sort[i].value) && value=='Haqiqiy' ){
      //     console.log("hammash joyashba")
      //   }else{
      //     console.log(1)
      //   }
      // }
       
    
      for (i = 0; i < sort.length; i++)
      {
        if (sort[i].value != Math.ceil(sort[i].value) && value=='Butun')
        {
          alert("Iltimos tog'ri tipni tanlang")
          alert("Iltimos tog'ri raqam  kiriting")
          window.location.reload(true);
          // setTimeout("location.reload(true);",00);
          // window.onload = timedRefresh(5000);
        }else if(sort[i].value ==sort[i].value && value=='Haqiqiy')
        {
          //console.log("haqiqiy zor")
          //alert("Iltimos tog'ri raqam  kiriting")
        }else if(sort[i].value == Math.ceil(sort[i].value) && value=='Butun'){

          //console.log('butun zor')
        }else if( sort[i].value ==sort[i].value && value=='Satr'){
          // console.log('satr zor')
        }
        // console.log('satr zor')
      }


       
     
      
      let sort2=document.getElementsByName("inp2");
      let empty2="";
      for (var n=0;n<sort2.length;n++) {
          empty2+=sort2[n].value+" ";
          
      }
     


for (i = 0; i < sort2.length; i++)
      {
        if (sort2[i].value != Math.ceil(sort2[i].value) && value!='Haqiqiy')
        {
          alert("Iltimos tog'ri tipni tanlang")
          alert("Iltimos tog'ri raqam  kiriting")
          window.location.reload(true);
        }else if(sort2[i].value ==sort2[i].value && value=='Haqiqiy')
        {
          //console.log("haqiqiy zor")
          //alert("Iltimos tog'ri raqam  kiriting")
        }else if(sort2[i].value == Math.ceil(sort2[i].value) && value=='Butun'){

          //console.log('butun zor')
        }else if( sort2[i].value ==sort2[i].value && value=='Satr'){
          // console.log('satr zor')
        }
        // console.log('satr zor')
      }

      }
//birlashma

//upload from text
function read() {
    let text = document.getElementById('text').files[0];

    let reader = new FileReader();
    
    reader.readAsText(text);


    reader.addEventListener('load',function(){
      console.log(reader.result)
      const rows = reader.result.split("\n");

      rows.forEach((row,index)=>{
        if(index === 0){
          let frm = document.getElementById('form')
          frm.innerHTML = ''
          frm.style.height = "37px";
          row.split(" ").forEach((element, j)=>
          {
            let textfield = document.createElement("input");
            textfield.type = "text";
            textfield.id = "foo";
            textfield.style.left = (j * 55 ) + 35 + "px";
            textfield.classList.add('rand1');
            textfield.classList.add('myAnimation'); //
            textfield.value = element;
            frm.append(textfield);
          })

        }
        return; 
      })
    })  
 }

 function read2() {
    let text = document.getElementById('text2').files[0];

    let reader = new FileReader();
    
    reader.readAsText(text);


    reader.addEventListener('load',function(){
      console.log(reader.result)
      const rows = reader.result.split("\n");

      rows.forEach((row,index)=>{
        if(index === 1){
          let frm2 = document.getElementById('form2')
          frm2.innerHTML = ''
          frm2.style.height = "60px";
          row.split(" ").forEach((element, j)=>
          {
            let textfield = document.createElement("input");
            textfield.type = "text";
            textfield.id = "foo2";
            textfield.style.left = (j * 55 ) + 35 + "px";
            textfield.classList.add('rand2'); //myAnimation
            textfield.value = element;
            textfield.classList.add('myAnimation2'); //
            frm2.append(textfield);
          })

        }
        return; 
      })
    })  
 }
//upload from text

 // ayirma AB
function ayirmaA(){
let arr = []
let arr2 = []
let for1 = document.querySelectorAll('#form input')
  arr = []
  for1.forEach((key)=>{
    arr.push(key.value)
  })  

  let for2 = document.querySelectorAll('#form2 input')
  arr2 = []
  for2.forEach((key)=>{
    arr2.push(key.value)
  })  

let w = new Set(arr);
let w2 = new Set(arr2);

let ayirmaA = new Set([...w].filter(x => !w2.has(x)));
// console.log(ayirmaA);




let sort=document.getElementsByName("inp1");
      let empty="";
      for (var m=0;m<sort.length;m++) {
          empty+=sort[m].value+" ";   
      }

      let value1 =document.getElementById('sort');
      
      let value = value1.options[value1.selectedIndex].text;
      
      

      // for (i = 0; i < sort.length; i++)
      // {
      //   if (sort[i].value != Math.ceil(sort[i].value) && value!='Haqiqiy' ){
   
      //         alert("Iltimos to'g'ri tipni tanlang va mos raqamlarni kiriting!!!")

      //   }else if(sort[i].value != Math.ceil(sort[i].value) && value=='Haqiqiy' ){
      //     console.log("hammash joyashba")
      //   }else{
      //     console.log(1)
      //   }
      // }
       
    
      for (i = 0; i < sort.length; i++)
      {
        if (sort[i].value != Math.ceil(sort[i].value) && value=='Butun')
        {
        alert("Iltimos tog'ri tipni tanlang")
          alert("Iltimos tog'ri raqam  kiriting")
          window.location.reload(true);
          // setTimeout("location.reload(true);",00);
          // window.onload = timedRefresh(5000);
        }else if(sort[i].value ==sort[i].value && value=='Haqiqiy')
        {
          //console.log("haqiqiy zor")
          //alert("Iltimos tog'ri raqam  kiriting")
        }else if(sort[i].value == Math.ceil(sort[i].value) && value=='Butun'){

          //console.log('butun zor')
        }else if( sort[i].value ==sort[i].value && value=='Satr'){
          // console.log('satr zor')
        }
        //console.log('satr zor')
      }


       
     
      
      let sort2=document.getElementsByName("inp2");
      let empty2="";
      for (var n=0;n<sort2.length;n++) {
          empty2+=sort2[n].value+" ";
          
      }
     


for (i = 0; i < sort2.length; i++)
      {
        if (sort2[i].value != Math.ceil(sort2[i].value) && value=='Butun')
        {
          alert("Iltimos tog'ri tipni tanlang")
          alert("Iltimos tog'ri raqam  kiriting")
          window.location.reload(true);
        }else if(sort2[i].value ==sort2[i].value && value=='Haqiqiy')
        {
          //console.log("haqiqiy zor")
          //alert("Iltimos tog'ri raqam  kiriting")
        }else if(sort2[i].value == Math.ceil(sort2[i].value) && value=='Butun'){

          //console.log('butun zor')
        }else if( sort2[i].value ==sort2[i].value && value=='Satr'){
          // console.log('satr zor')
        }
        // console.log('satr zor')
      }




      }


//ayirma BA
function ayirmaB() {
let arr = []
let arr2 = []
let for1 = document.querySelectorAll('#form input')
  arr = []
  for1.forEach((key)=>{
    arr.push(key.value)
  })  

  let for2 = document.querySelectorAll('#form2 input')
  arr2 = []
  for2.forEach((key)=>{
    arr2.push(key.value)
  })  

  let w = new Set(arr);
let w2 = new Set(arr2);

let ayirmaB = new Set([...w2].filter(x => !w.has(x)));
console.log(ayirmaB);


      let sort=document.getElementsByName("inp1");
      let empty="";
      for (var m=0;m<sort.length;m++) {
          empty+=sort[m].value+" ";
          
      }
      console.log(empty);
      

      let sort2=document.getElementsByName("inp2");
      let empty2="";
      for (var n=0;n<sort2.length;n++) {
          empty2+=sort2[n].value+" ";
          
      }
      console.log(empty2);

}

function read() {
    let text = document.getElementById('text').files[0];

    let reader = new FileReader();
    
    reader.readAsText(text);


    reader.addEventListener('load',function(){
      console.log(reader.result)
      const rows = reader.result.split("\n");

      rows.forEach((row,index)=>{
        if(index === 0){
          let frm = document.getElementById('form')
          frm.innerHTML = ''
          frm.style.height = "37px";
          row.split(" ").forEach((element, j)=>
          {
            let textfield = document.createElement("input");
            textfield.type = "text";
            textfield.id = "foo";
            textfield.style.left = (j * 55 ) + 35 + "px";
            textfield.classList.add('rand1');
            textfield.classList.add('myAnimation'); //
            textfield.value = element;
            frm.append(textfield);
          })

        }
        return; 
      })
    })  
 }

 function read2() {
    let text = document.getElementById('text2').files[0];

    let reader = new FileReader();
    
    reader.readAsText(text);


    reader.addEventListener('load',function(){
      console.log(reader.result)
      const rows = reader.result.split("\n");

      rows.forEach((row,index)=>{
        if(index === 1){
          let frm2 = document.getElementById('form2')
          frm2.innerHTML = ''
          frm2.style.height = "60px";
          row.split(" ").forEach((element, j)=>
          {
            let textfield = document.createElement("input");
            textfield.type = "text";
            textfield.id = "foo2";
            textfield.style.left = (j * 55 ) + 35 + "px";
            textfield.classList.add('rand2'); //myAnimation
            textfield.value = element;
            textfield.classList.add('myAnimation2'); //
            frm2.append(textfield);
          })

        }
        return; 
      })
    }) 




    let sort=document.getElementsByName("inp1");
      let empty="";
      for (var m=0;m<sort.length;m++) {
          empty+=sort[m].value+" ";   
      }

      let value1 =document.getElementById('sort');
      
      let value = value1.options[value1.selectedIndex].text;
      
      

      // for (i = 0; i < sort.length; i++)
      // {
      //   if (sort[i].value != Math.ceil(sort[i].value) && value!='Haqiqiy' ){
   
      //         alert("Iltimos to'g'ri tipni tanlang va mos raqamlarni kiriting!!!")

      //   }else if(sort[i].value != Math.ceil(sort[i].value) && value=='Haqiqiy' ){
      //     console.log("hammash joyashba")
      //   }else{
      //     console.log(1)
      //   }
      // }
       
    
      for (i = 0; i < sort.length; i++)
      {
        if (sort[i].value != Math.ceil(sort[i].value) && value=='Butun')
        {
          alert("Iltimos tog'ri tipni tanlang")
          alert("Iltimos tog'ri raqam  kiriting")
          window.location.reload(true);
          // setTimeout("location.reload(true);",00);
          // window.onload = timedRefresh(5000);
        }else if(sort[i].value ==sort[i].value && value=='Haqiqiy')
        {
          //  console.log("haqiqiy zor")
          //alert("Iltimos tog'ri raqam  kiriting")
        }else if(sort[i].value == Math.ceil(sort[i].value) && value=='Butun'){

          //console.log('butun zor')
        }else if( sort[i].value ==sort[i].value && value=='Satr'){
         // console.log('satr zor')
        }
        //console.log('satr zor')
      }


       
     
      
      let sort2=document.getElementsByName("inp2");
      let empty2="";
      for (var n=0;n<sort2.length;n++) {
          empty2+=sort2[n].value+" ";
          
      }
     


for (i = 0; i < sort2.length; i++)
      {
        if (sort2[i].value != Math.ceil(sort2[i].value) && value=='Butun')
        {
          alert("Iltimos tog'ri tipni tanlang")
          alert("Iltimos tog'ri raqam  kiriting")
          window.location.reload(true);
        }else if(sort2[i].value ==sort2[i].value && value=='Haqiqiy')
        {
          //console.log("haqiqiy zor")
          //alert("Iltimos tog'ri raqam  kiriting")
        }else if(sort2[i].value == Math.ceil(sort2[i].value) && value=='Butun'){

          //console.log('butun zor')
        }else if( sort2[i].value ==sort2[i].value && value=='Satr'){
          // console.log('satr zor')
        }
        // console.log('satr zor')
      } 
 }


//kesishma
function kesishma() {
  let arr = []
let arr2 = []
let for1 = document.querySelectorAll('#form input')
  arr = []
  for1.forEach((key)=>{
    arr.push(key.value)
  })  

  let for2 = document.querySelectorAll('#form2 input')
  arr2 = []
  for2.forEach((key)=>{
    arr2.push(key.value)
  })  
  
  let kesishma = arr.filter(x => arr2.includes(x));
  console.log(kesishma);


      let sort=document.getElementsByName("inp1");
      let empty="";
      for (var m=0;m<sort.length;m++) {
          empty+=sort[m].value+" ";
          
      }
      console.log(empty);
      

      let sort2=document.getElementsByName("inp2");
      let empty2="";
      for (var n=0;n<sort2.length;n++) {
          empty2+=sort2[n].value+" ";
          
      }
      console.log(empty2);

}

function read() {
    let text = document.getElementById('text').files[0];

    let reader = new FileReader();
    
    reader.readAsText(text);


    reader.addEventListener('load',function(){
      console.log(reader.result)
      const rows = reader.result.split("\n");

      rows.forEach((row,index)=>{
        if(index === 0){
          let frm = document.getElementById('form')
          frm.innerHTML = ''
          frm.style.height = "37px";
          row.split(" ").forEach((element, j)=>
          {
            let textfield = document.createElement("input");
            textfield.type = "text";
            textfield.id = "foo";
            textfield.style.left = (j * 55 ) + 35 + "px";
            textfield.classList.add('rand1');
            textfield.classList.add('myAnimation'); //
            textfield.value = element;
            frm.append(textfield);
          })

        }
        return; 
      })
    })  
 }

 function read2() {
    let text = document.getElementById('text2').files[0];

    let reader = new FileReader();
    
    reader.readAsText(text);


    reader.addEventListener('load',function(){
      console.log(reader.result)
      const rows = reader.result.split("\n");

      rows.forEach((row,index)=>{
        if(index === 1){
          let frm2 = document.getElementById('form2')
          frm2.innerHTML = ''
          frm2.style.height = "60px";
          row.split(" ").forEach((element, j)=>
          {
            let textfield = document.createElement("input");
            textfield.type = "text";
            textfield.id = "foo2";
            textfield.style.left = (j * 55 ) + 35 + "px";
            textfield.classList.add('rand2'); //myAnimation
            textfield.value = element;
            textfield.classList.add('myAnimation2'); //
            frm2.append(textfield);
          })

        }
        return; 
      })
    }) 


    let sort=document.getElementsByName("inp1");
      let empty="";
      for (var m=0;m<sort.length;m++) {
          empty+=sort[m].value+" ";   
      }

      let value1 =document.getElementById('sort');
      
      let value = value1.options[value1.selectedIndex].text;
      
      

      // for (i = 0; i < sort.length; i++)
      // {
      //   if (sort[i].value != Math.ceil(sort[i].value) && value!='Haqiqiy' ){
   
      //         alert("Iltimos to'g'ri tipni tanlang va mos raqamlarni kiriting!!!")

      //   }else if(sort[i].value != Math.ceil(sort[i].value) && value=='Haqiqiy' ){
      //     console.log("hammash joyashba")
      //   }else{
      //     console.log(1)
      //   }
      // }
       
    
      for (i = 0; i < sort.length; i++)
      {
        if (sort[i].value != Math.ceil(sort[i].value) && value=='Butun')
        {
          alert("Iltimos tog'ri tipni tanlang")
          alert("Iltimos tog'ri raqam  kiriting")
          window.location.reload(true);
          // setTimeout("location.reload(true);",00);
          // window.onload = timedRefresh(5000);
        }else if(sort[i].value ==sort[i].value && value=='Haqiqiy')
        {
          //console.log("haqiqiy zor")
          //alert("Iltimos tog'ri raqam  kiriting")
        }else if(sort[i].value == Math.ceil(sort[i].value) && value=='Butun'){

          //console.log('butun zor')
        }else if( sort[i].value ==sort[i].value && value=='Satr'){
          //console.log('satr zor')
        }
        //console.log('satr zor')
      }


       
     
      
      let sort2=document.getElementsByName("inp2");
      let empty2="";
      for (var n=0;n<sort2.length;n++) {
          empty2+=sort2[n].value+" ";
          
      }
     


for (i = 0; i < sort2.length; i++)
      {
        if (sort2[i].value != Math.ceil(sort2[i].value) && value=='Butun')
        {
          alert("Iltimos tog'ri tipni tanlang")
          alert("Iltimos tog'ri raqam  kiriting")
          window.location.reload(true);
        }else if(sort2[i].value ==sort2[i].value && value=='Haqiqiy')
        {
          //console.log("haqiqiy zor")
          //alert("Iltimos tog'ri raqam  kiriting")
        }else if(sort2[i].value == Math.ceil(sort2[i].value) && value=='Butun'){

          //console.log('butun zor')
        }else if( sort2[i].value ==sort2[i].value && value=='Satr'){
          // console.log('satr zor')
        }
        // console.log('satr zor')
      }

 }




function obedenit(){
    
        let arrA= [];
        let arrB = [];
        
        let for1 = document.querySelectorAll('#form6 input');
          arrA = []
          for1.forEach((key)=>{
            arrA.push(key.value)
          }); 
        
        
          let for2 = document.querySelectorAll('#form4 input');
          arrB = []
          for2.forEach((key)=>{
            arrB.push(key.value)
          });

          let for3 = document.querySelectorAll('#form5 input');
          arrC = []
          for3.forEach((key)=>{
            arrC.push(key.value)
          });

          let answer = new Set(arrC);

          // console.log(set3)
          console.log(arrA)
          console.log(arrB)

          console.log(answer)
            
            

     let a = new Set(arrA);
     let b = new Set(arrB);
         let hlp = []
        let union = new  Set ( [...a, ...b ] ) ;

        answer2 = Array.from(answer)
        union2 = Array.from(union)
        answer2.sort()
        union2.sort()
        console.log(answer2)
        console.log(union2)

        if (union2.length == answer2.length)
        {
          for(i=0; i < union2.length; i++){
            if (union2[i] !== answer2[i]){
              setTimeout(()=>{
               document.getElementById("natija").innerHTML =
                "<div class='alert alert-danger' role='alert'>Sizning bahoyingiz: <span id='span'>2</span></div>";
            },500)
              break
            }
            else
            {
               setTimeout(()=>{
               document.getElementById("natija").innerHTML =
                "<div class='alert alert-success' role='alert'>Sizning bahoyingiz: <span id='span'>5</span></div>";
            },500)
           }
          }
          console.log(hlp[0])

        }
        else {
          console.log('poyon xato')
        }

    
}

function raznostA(){
    
        let arr = []
        let arr2 = []
        let for1 = document.querySelectorAll('#form6 input')
          arr = []
          for1.forEach((key)=>{
            arr.push(key.value)
          })  
        
          let for2 = document.querySelectorAll('#form4 input')
          arr2 = []
          for2.forEach((key)=>{
            arr2.push(key.value)
          })  

let for3 = document.querySelectorAll('#form5 input');
          arrC = []
          for3.forEach((key)=>{
            arrC.push(key.value)
          });

          let answer= new Set(arrC);

         //console.log(set3)

          let set1 = new Set(arr);
          let set2 = new Set(arr2);
          let hlp = [];
          let union= new Set([...set1].filter(x => !set2.has(x)));
          
        answer2 = Array.from(answer)
        union2 = Array.from(union)
        answer2.sort()
        union2.sort()
        console.log(answer2)
        console.log(union2)

        if (union2.length == answer2.length)
        {
          for(i=0; i < union2.length; i++){
            if (union2[i] !== answer2[i]){
              setTimeout(()=>{
               document.getElementById("natija").innerHTML =
                "<div class='alert alert-danger' role='alert'>Sizning bahoyingiz: <span id='span'>2</span></div>";
            },500)
              break
            }
            else
            {
               setTimeout(()=>{
               document.getElementById("natija").innerHTML =
                "<div class='alert alert-success' role='alert'>Sizning bahoyingiz: <span id='span'>5</span></div>";
            },500)
           }
          }
          console.log(hlp[0])

        }
        else {
          console.log('poyon xato')
        }

        
    
}

function raznostB(){
    
let arr = []
let arr2 = []
let for1 = document.querySelectorAll('#form6 input')
  arr = []
  for1.forEach((key)=>{
    arr.push(key.value)
  })  

  let for2 = document.querySelectorAll('#form4 input')
  arr2 = []
  for2.forEach((key)=>{
    arr2.push(key.value)
  })  


let for3 = document.querySelectorAll('#form5 input');
          arrC = []
          for3.forEach((key)=>{
            arrC.push(key.value)
          });

          let answer = new Set(arrC);

          
  let w = new Set(arr);
let w2 = new Set(arr2);

let union = new Set([...w2].filter(x => !w.has(x)));

answer2 = Array.from(answer)
        union2 = Array.from(union)
        answer2.sort()
        union2.sort()
        console.log(answer2)
        console.log(union2)
        let hlp = [];
        if (union2.length == answer2.length)
        {
          for(i=0; i < union2.length; i++){
            if (union2[i] !== answer2[i]){
              setTimeout(()=>{
               document.getElementById("natija").innerHTML =
                "<div class='alert alert-danger' role='alert'>Sizning bahoyingiz: <span id='span'>2</span></div>";
            },500)
              break
            }
            else
            {
               setTimeout(()=>{
               document.getElementById("natija").innerHTML =
                "<div class='alert alert-success' role='alert'>Sizning bahoyingiz: <span id='span'>5</span></div>";
            },500)
           }
          }
          console.log(hlp[0])

        }
        else {
          console.log('poyon xato')
        }    

}

function simentr(){
    
    
let arr = []
let arr2 = []
let for1 = document.querySelectorAll('#form6 input')
  arr = []
  for1.forEach((key)=>{
    arr.push(key.value)
  })  

  let for2 = document.querySelectorAll('#form4 input')
  arr2 = []
  for2.forEach((key)=>{
    arr2.push(key.value)
  })  
  

  let for3 = document.querySelectorAll('#form5 input');
          arrC = []
          for3.forEach((key)=>{
            arrC.push(key.value)
          });

          let answer = new Set(arrC);

          
  let union = arr.filter(x => arr2.includes(x));
 
 answer2 = Array.from(answer)
        union2 = Array.from(union)
        answer2.sort()
        union2.sort()
        console.log(answer2)
        console.log(union2)
        let hlp = [];
        if (union2.length == answer2.length)
        {
          for(i=0; i < union2.length; i++){
            if (union2[i] !== answer2[i]){
              setTimeout(()=>{
               document.getElementById("natija").innerHTML =
                "<div class='alert alert-danger' role='alert'>Sizning bahoyingiz: <span id='span'>2</span></div>";
            },500)
              break
            }
            else
            {
               setTimeout(()=>{
               document.getElementById("natija").innerHTML =
                "<div class='alert alert-success' role='alert'>Sizning bahoyingiz: <span id='span'>5</span></div>";
            },500)
           }
          }
          console.log(hlp[0])

        }
        else {
          console.log('poyon xato')
        }
    

}






function nazorat(){
    
        let arrA= [];
        let arrB = [];
        
        let for1 = document.querySelectorAll('#form7 input');
          arrA = []
          for1.forEach((key)=>{
            arrA.push(key.value)
          }); 
        
        
          let for2 = document.querySelectorAll('#form8 input');
          arrB = []
          for2.forEach((key)=>{
            arrB.push(key.value)
          });

          let for3 = document.querySelectorAll('#form9 input');
          arrC = []
          for3.forEach((key)=>{
            arrC.push(key.value)
          });

          let answer = new Set(arrC);

          // console.log(set3)
          console.log(arrA)
          console.log(arrB)

          console.log(answer)
            
            

     let a = new Set(arrA);
     let b = new Set(arrB);
         let hlp = []
        let union = new  Set ( [...a, ...b ] ) ;

        answer2 = Array.from(answer)
        union2 = Array.from(union)
        answer2.sort()
        union2.sort()
        console.log(answer2)
        console.log(union2)

        if (union2.length == answer2.length)
        {
          for(i=0; i < union2.length; i++){
            if (union2[i] !== answer2[i]){
              setTimeout(()=>{
               document.getElementById("natija").innerHTML =
                "<div class='alert alert-danger' role='alert'>Sizning bahoyingiz: <span id='span'>2</span></div>";
            },500)
              break
            }
            else
            {
               setTimeout(()=>{
               document.getElementById("natija").innerHTML =
                "<div class='alert alert-success' role='alert'>Sizning bahoyingiz: <span id='span'>5</span></div>";
            },500)
           }
          }
          console.log(hlp[0])

        }
        else {
          console.log('poyon xato')
        }

    
}

function nazorat2(){
    
        let arr = []
        let arr2 = []
        let for1 = document.querySelectorAll('#form7 input')
          arr = []
          for1.forEach((key)=>{
            arr.push(key.value)
          })  
        
          let for2 = document.querySelectorAll('#form8 input')
          arr2 = []
          for2.forEach((key)=>{
            arr2.push(key.value)
          })  

let for3 = document.querySelectorAll('#form9 input');
          arrC = []
          for3.forEach((key)=>{
            arrC.push(key.value)
          });

          let answer= new Set(arrC);

         //console.log(set3)

          let set1 = new Set(arr);
          let set2 = new Set(arr2);
          let hlp = [];
          let union= new Set([...set1].filter(x => !set2.has(x)));
          
        answer2 = Array.from(answer)
        union2 = Array.from(union)
        answer2.sort()
        union2.sort()
        console.log(answer2)
        console.log(union2)

        if (union2.length == answer2.length)
        {
          for(i=0; i < union2.length; i++){
            if (union2[i] !== answer2[i]){
              setTimeout(()=>{
               document.getElementById("natija").innerHTML =
                "<div class='alert alert-danger' role='alert'>Sizning bahoyingiz: <span id='span'>2</span></div>";
            },500)
              break
            }
            else
            {
               setTimeout(()=>{
               document.getElementById("natija").innerHTML =
                "<div class='alert alert-success' role='alert'>Sizning bahoyingiz: <span id='span'>5</span></div>";
            },500)
           }
          }
          console.log(hlp[0])

        }
        else {
          console.log('poyon xato')
        }

        
    
}

function nazorat3(){
    
let arr = []
let arr2 = []
let for1 = document.querySelectorAll('#form7 input')
  arr = []
  for1.forEach((key)=>{
    arr.push(key.value)
  })  

  let for2 = document.querySelectorAll('#form8 input')
  arr2 = []
  for2.forEach((key)=>{
    arr2.push(key.value)
  })  


let for3 = document.querySelectorAll('#form9 input');
          arrC = []
          for3.forEach((key)=>{
            arrC.push(key.value)
          });

          let answer = new Set(arrC);

          
  let w = new Set(arr);
let w2 = new Set(arr2);

let union = new Set([...w2].filter(x => !w.has(x)));

answer2 = Array.from(answer)
        union2 = Array.from(union)
        answer2.sort()
        union2.sort()
        console.log(answer2)
        console.log(union2)
        let hlp = [];
        if (union2.length == answer2.length)
        {
          for(i=0; i < union2.length; i++){
            if (union2[i] !== answer2[i]){
              setTimeout(()=>{
               document.getElementById("natija").innerHTML =
                "<div class='alert alert-danger' role='alert'>Sizning bahoyingiz: <span id='span'>2</span></div>";
            },500)
              break
            }
            else
            {
               setTimeout(()=>{
               document.getElementById("natija").innerHTML =
                "<div class='alert alert-success' role='alert'>Sizning bahoyingiz: <span id='span'>5</span></div>";
            },500)
           }
          }
          console.log(hlp[0])

        }
        else {
          console.log('poyon xato')
        }    

}

function nazorat4(){
    
    
let arr = []
let arr2 = []
let for1 = document.querySelectorAll('#form7 input')
  arr = []
  for1.forEach((key)=>{
    arr.push(key.value)
  })  

  let for2 = document.querySelectorAll('#form8 input')
  arr2 = []
  for2.forEach((key)=>{
    arr2.push(key.value)
  })  
  

  let for3 = document.querySelectorAll('#form9 input');
          arrC = []
          for3.forEach((key)=>{
            arrC.push(key.value)
          });

          let answer = new Set(arrC);

          
  let union = arr.filter(x => arr2.includes(x));
 
 answer2 = Array.from(answer)
        union2 = Array.from(union)
        answer2.sort()
        union2.sort()
        console.log(answer2)
        console.log(union2)
        let hlp = [];
        if (union2.length == answer2.length)
        {
          for(i=0; i < union2.length; i++){
            if (union2[i] !== answer2[i]){
              setTimeout(()=>{
               document.getElementById("natija").innerHTML =
                "<div class='alert alert-danger' role='alert'>Sizning bahoyingiz: <span id='span'>2</span></div>";
            },500)
              break
            }
            else
            {
               setTimeout(()=>{
               document.getElementById("natija").innerHTML =
                "<div class='alert alert-success' role='alert'>Sizning bahoyingiz: <span id='span'>5</span></div>";
            },500)
           }
          }
          console.log(hlp[0])

        }
        else {
          console.log('poyon xato')
        }
    

}


</script>
</body>
</html




//////


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
    <link href="assets/style.css" rel="stylesheet"  crossorigin="anonymous">
    <script src="assets/head.js" crossorigin="anonymous"></script>
    <link href="assets/self.css" rel="stylesheet">
</head>
<body>


<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">O'quv jarayoni</button>
    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Mashq rejimi</button>
    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Nazorat rejimi</button>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <!--begining of show-->
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

     <div id="container">
      <div class="row bg">
        <div class="col border" style="margin-left:15px!important;">
          <!--begining of random 1-->
              <input type="number" id="r1" class="border m-2" min="1" max="12" placeholder="0"  oninput="inc()">
              <button class="button btn-warning border-0 m-2" onclick="rand()">Tasodifiy</button>
              <input type="file" onchange="read()" id="text">
              <form id="form">
              </form>
          <!--end of random 1-->
          <!--begining of random 2-->
              <input type="number" id="r2" class="border m-2" min="1" max="12" placeholder="0"  oninput="inc2()">
              <button class="button btn-warning border-0 m-2" onclick="rand2()">Tasodifiy</button>
              <input type="file"  onchange="read2()" id="text2">
              <form id="form2">
              </form>

            </div>
            <div class="col-md-1 border" >
              <select name='sel' id="sort"  onchange="" style="margin:7px 0px;border:2px solid #ECF0F1;border-radius:5px;">
                <option name="s">Satr</option>
                <option name="b">Butun</option>
                <option name="h">Haqiqiy</option>
              </select>
            </div>



    <div class="col border" style="margin-right:15px!important;">
      <h4 align="center">Natija</h4>
      <input type="text" name="hiddenInput" style="visibility: hidden;" id="hiddenInput">
     <div class="col-md-6" >
           
        </div>
      </div>
             
        </div>
      </div>
      <!---start of procces--->
      <div class="row bg m-2">
        <div class="col border">
          <button  id="birlashma" class="btn btn-primary m-1" onclick ="birlashma()" onchange="isInt()">Birlashma</button><br>
          <button  id="ayirmaA" class="btn btn-primary m-1" onclick="ayirmaA()">Ayirma A/B</button><br>
          <button  id="ayirmaB" class="btn btn-primary m-1" onclick="ayirmaB()">Ayirma B/A</button><br>
          <button  id="kesishma" class="btn btn-primary m-1" onclick="kesishma()">Kesishma</button><br>
        </div>
        <div class="col border">1</div>
      </div>
      <!---end of procces--->
  </div>

  <!--end of show-->





<!--start of trying-->
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
    
 <div id="container">
      <div class="row bg">
        <div class="col border" style="margin-left:15px!important;">
            

              <input type="number" id="r6" class="border m-2" min="1" max="12" placeholder="0"  oninput="inc6()">
              <button class="button btn-warning border-0 m-2" onclick="rand6()">Tasodifiy</button>
              <form id="form6">
              </form>

 
              <input type="number" id="r4" class="border m-2" min="1" max="12" placeholder="0"  oninput="inc4()">
              <button class="button btn-warning border-0 m-2" onclick="rand4()">Tasodifiy</button>
              <form id="form4">
              </form>
               
              <input type="number" id="r5" class="border m-2" min="1" max="12" placeholder="0"  oninput="inc5()">
              
              <form id="form5">
              </form>
              

            </div>
          



    <div class="col border" style="margin-right:15px!important;" id="natija">
     
      </div>
             
        </div>
      </div>
      <!---start of procces--->
      <div class="row bg m-2">
        <div class="col border">
          <button  id="birlashma" class="btn btn-primary m-1" onclick ="obedenit()">Birlashma</button><br>
          <button  id="ayirmaA" class="btn btn-primary m-1" onclick="raznostA()">Ayirma A/B</button><br>
          <button  id="ayirmaB" class="btn btn-primary m-1" onclick="raznostB()">Ayirma B/A</button><br>
          <button  id="kesishma" class="btn btn-primary m-1" onclick="simentr()">Kesishma</button><br>
        </div>
        
      </div>
        <div class="col border" id="mark">1</div>
      <!---end of procces--->
  </div>
  
<!--end of trying-->





  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">salam</div>
</div>
<script src="assets/bottom.js"></script>
<script src="assets/bottom2.js"></script>
<script src="assets/amal.js"></script>
<script type="text/javascript">

//filter

// var inputs=document.getElementsByName("inp1");
// var admissionNumber="";
// for (var m=0;m<inputs.length;m++) {
//     admissionNumber+=inputs[m].value+" ";
//     console.log(admissionNumber);
// }
// console.log(admissionNumber);

// function getSort(){

//   let value =document.getElementById('sort').value;
//   console.log(value)
// }

//filter
// let test =10;
// for(w = 0;w < test ;w++){
  
//   alert('Hello world '+ w)
// }



  //mover
let elem = document.getElementById('hiddenInput');
let rect = elem.getBoundingClientRect();
console.log(rect.left);


let right = document.getElementById('birlashma');
let set1 = new Set();
right.addEventListener("click",function(){

  let elements = document.querySelectorAll('.rand1');
  //console.log("click")
  elements.forEach((element,index)=>{
    set1.add(element.value);
    setTimeout(()=>{
      element.style.left = (parseInt(element.style.left) + rect.left -30)+"px";
    }, index* 800)
  })

let elements1 = document.querySelectorAll('.rand2');
  //console.log("click")
  elements1.forEach((element,index)=>{

   if(set1.has(element.value)){
    
    element.style.backgroundColor = '#C0392B ';
    element.style.border = '#CD5C5C';
   }
   else{
    // console.log(text);

    setTimeout(()=>{
      element.style.left = (parseInt(element.style.left) + rect.left -30)+"px";
    }, index* 1000)
   }
   
  })
});
//mover

//mover
let ayirA = document.getElementById('ayirmaA');
let set2 = new Set();
let set3 = new Set();
ayirA.addEventListener("click",function(){

  let ayirElement = document.querySelectorAll('.rand1');
  //console.log("click")
  ayirElement.forEach((element,index)=>{
    set2.add(element.value);
    if(!set2.has(set3))
    {
   console.log('xato')
   }else{

       console.log('xato')
       setTimeout(()=>{
      element.style.left = (parseInt(element.style.left) + rect.left + rect.right - 970)+"px";
    }, index* 800)
   }
  })


// let set3 = new Set();
let ayirElement1= document.querySelectorAll('.rand2');
  console.log("set3F")
  ayirElement1.forEach((element,index)=>{
   set3.add(element.value) 
   console.log(set3) 
    setTimeout(()=>{
      element.style.left = (parseInt(element.style.left) + rect.left + rect.right -970 )+"px";
    }, index* 1000)
  })



});
//mover

//mover



let ayirB = document.getElementById('ayirmaB');

ayirB.addEventListener("click",function(){

  let ayirBelement = document.querySelectorAll('.rand1');
  //console.log("click")
  ayirBelement.forEach((element,index)=>{

    setTimeout(()=>{
      element.style.left = (parseInt(element.style.left) + rect.left -30)+"px";
    }, index* 800)
  })

let ayirBelemen2 = document.querySelectorAll('.rand2');
  //console.log("click")
  ayirBelemen2.forEach((element,index)=>{
    setTimeout(()=>{
      element.style.left = (parseInt(element.style.left) + rect.left -30)+"px";
    }, index* 1000)
  })
});
//mover

// //mover

let kes = document.getElementById('kesishma');

kes.addEventListener("click",function(){

  let kesel = document.querySelectorAll('.rand1');
  //console.log("click")
  kesel.forEach((element,index)=>{

    setTimeout(()=>{
      element.style.left = (parseInt(element.style.left) + rect.left -30)+"px";
    }, index* 800)
  })

let kesel2 = document.querySelectorAll('.rand2');
  //console.log("click")
  kesel2.forEach((element,index)=>{
    setTimeout(()=>{
      element.style.left = (parseInt(element.style.left) + rect.left -30)+"px";
    }, index* 1000)
  })
});
//


  function rand(){

    let inp = document.querySelectorAll('#form input')
    for(let i = 0; i < inp.length; i++){
        inp[i].value = Math.floor(Math.random() * 100)
        //inp[i].value = Math.floor(Math.random() * 100)
    }
  }
  
   function inc() {

    let no = Number(document.querySelector("#r1").value);

    let frm = document.getElementById('form');
    frm.innerHTML = '';
    frm.style.height = "35px";
    for (let i = 0; i < no; i++) {
        let textfield = document.createElement("input");
        textfield.type = "text";
        textfield.id = "foo";
        textfield.name = "inp1";
        textfield.style.left = (i * 55 ) + 35 + "px";
        textfield.classList.add('rand1');
        textfield.classList.add('myAnimation'); //

        frm.append(textfield);
    }    
}

function rand2(){

let inp2 = document.querySelectorAll('#form2 input')
for(let i = 0; i < inp2.length; i++){
    inp2[i].value = Math.floor(Math.random() * 100)
    //inp[i].value = Math.floor(Math.random() * 100)
   }
}
  
   function inc2() {

    let no2 = Number(document.querySelector("#r2").value);

    let frm2 = document.getElementById('form2')
    frm2.innerHTML = ''
    frm2.style.height = "80px";
 
  for (let j = 0; j < no2; j++) {
        let textfield = document.createElement("input");
        textfield.type = "text";
        textfield.id = "foo2";
        textfield.name = "inp2";
        textfield.style.left = (j * 55 ) + 35 + "px";
        textfield.classList.add('rand2'); //myAnimation
        textfield.classList.add('myAnimation2'); //
        frm2.append(textfield);
   }    
}




function rand6(){

let inp3 = document.querySelectorAll('#form6 input')
console.log(inp3)
for(let i = 0; i < inp3.length; i++){
    inp3[i].value = Math.floor(Math.random() * 100)
    //inp[i].value = Math.floor(Math.random() * 100)
   }
}
  
   function inc6() {

    let no6 = Number(document.querySelector("#r6").value);

    let frm6 = document.getElementById('form6')
    frm6.innerHTML = ''
    frm6.style.height = "30px";
 
  for (let j = 0; j < no6; j++) {
        let textfield = document.createElement("input");
        textfield.type = "text";
        textfield.id = "foo6";
        textfield.name = "inp6";
        textfield.style.left = (j * 55 ) + 35 + "px";
        textfield.classList.add('rand6'); //myAnimation
        textfield.classList.add('myAnimation6'); //
        frm6.append(textfield);
   }    
}




function rand4(){

let inp4 = document.querySelectorAll('#form4 input')
for(let i = 0; i < inp4.length; i++){
    inp4[i].value = Math.floor(Math.random() * 100)
    //inp[i].value = Math.floor(Math.random() * 100)
   }
}
  
   function inc4() {

    let no4 = Number(document.querySelector("#r4").value);

    let frm4 = document.getElementById('form4')
    frm4.innerHTML = ''
    frm4.style.height = "30px";
 
  for (let j = 0; j < no4; j++) {
        let textfield = document.createElement("input");
        textfield.type = "text";
        textfield.id = "foo4";
        textfield.name = "inp4";
        textfield.style.left = (j * 55 ) + 35 + "px";
        textfield.classList.add('rand4'); //myAnimation
        textfield.classList.add('myAnimation4'); //
        frm4.append(textfield);
   }    
}

function rand5(){

let inp5 = document.querySelectorAll('#form5 input')
for(let i = 0; i < inp5.length; i++){
    inp5[i].value = Math.floor(Math.random() * 100)
    //inp[i].value = Math.floor(Math.random() * 100)
   }
}
  
   function inc5() {

    let no5 = Number(document.querySelector("#r5").value);

    let frm5 = document.getElementById('form5')
    frm5.innerHTML = ''
    frm5.style.height = "30px";
 
  for (let j = 0; j < no5; j++) {
        let textfield = document.createElement("input");
        textfield.type = "text";
        textfield.id = "foo5";
        textfield.name = "inp5";
        textfield.style.left = (j * 55 ) + 35 + "px";
        textfield.classList.add('rand5'); //myAnimation
        textfield.classList.add('myAnimation5'); //
        frm5.append(textfield);
   }    
}


//birlashma
function birlashma() {

let arrA= [];
let arrB = [];

let for1 = document.querySelectorAll('#form input');
  arrA = []
  for1.forEach((key)=>{
    arrA.push(key.value)
  }); 


  let for2 = document.querySelectorAll('#form2 input');
  arrB = []
  for2.forEach((key)=>{
    arrB.push(key.value)
  });
    
 
let birlashma = [...new Set([...arrA, ...arrB])];


      let sort=document.getElementsByName("inp1");
      let empty="";
      for (var m=0;m<sort.length;m++) {
          empty+=sort[m].value+" ";   
      }

      let value1 =document.getElementById('sort');
      
      let value = value1.options[value1.selectedIndex].text;
      
      

      // for (i = 0; i < sort.length; i++)
      // {
      //   if (sort[i].value != Math.ceil(sort[i].value) && value!='Haqiqiy' ){
   
      //         alert("Iltimos to'g'ri tipni tanlang va mos raqamlarni kiriting!!!")

      //   }else if(sort[i].value != Math.ceil(sort[i].value) && value=='Haqiqiy' ){
      //     console.log("hammash joyashba")
      //   }else{
      //     console.log(1)
      //   }
      // }
       
    
      for (i = 0; i < sort.length; i++)
      {
        if (sort[i].value != Math.ceil(sort[i].value) && value=='Butun')
        {
          alert("Iltimos tog'ri tipni tanlang")
          alert("Iltimos tog'ri raqam  kiriting")
          window.location.reload(true);
          // setTimeout("location.reload(true);",00);
          // window.onload = timedRefresh(5000);
        }else if(sort[i].value ==sort[i].value && value=='Haqiqiy')
        {
          //console.log("haqiqiy zor")
          //alert("Iltimos tog'ri raqam  kiriting")
        }else if(sort[i].value == Math.ceil(sort[i].value) && value=='Butun'){

          //console.log('butun zor')
        }else if( sort[i].value ==sort[i].value && value=='Satr'){
          // console.log('satr zor')
        }
        // console.log('satr zor')
      }


       
     
      
      let sort2=document.getElementsByName("inp2");
      let empty2="";
      for (var n=0;n<sort2.length;n++) {
          empty2+=sort2[n].value+" ";
          
      }
     


for (i = 0; i < sort2.length; i++)
      {
        if (sort2[i].value != Math.ceil(sort2[i].value) && value!='Haqiqiy')
        {
          alert("Iltimos tog'ri tipni tanlang")
          alert("Iltimos tog'ri raqam  kiriting")
          window.location.reload(true);
        }else if(sort2[i].value ==sort2[i].value && value=='Haqiqiy')
        {
          //console.log("haqiqiy zor")
          //alert("Iltimos tog'ri raqam  kiriting")
        }else if(sort2[i].value == Math.ceil(sort2[i].value) && value=='Butun'){

          //console.log('butun zor')
        }else if( sort2[i].value ==sort2[i].value && value=='Satr'){
          // console.log('satr zor')
        }
        // console.log('satr zor')
      }

      }
//birlashma

//upload from text
function read() {
    let text = document.getElementById('text').files[0];

    let reader = new FileReader();
    
    reader.readAsText(text);


    reader.addEventListener('load',function(){
      console.log(reader.result)
      const rows = reader.result.split("\n");

      rows.forEach((row,index)=>{
        if(index === 0){
          let frm = document.getElementById('form')
          frm.innerHTML = ''
          frm.style.height = "37px";
          row.split(" ").forEach((element, j)=>
          {
            let textfield = document.createElement("input");
            textfield.type = "text";
            textfield.id = "foo";
            textfield.style.left = (j * 55 ) + 35 + "px";
            textfield.classList.add('rand1');
            textfield.classList.add('myAnimation'); //
            textfield.value = element;
            frm.append(textfield);
          })

        }
        return; 
      })
    })  
 }

 function read2() {
    let text = document.getElementById('text2').files[0];

    let reader = new FileReader();
    
    reader.readAsText(text);


    reader.addEventListener('load',function(){
      console.log(reader.result)
      const rows = reader.result.split("\n");

      rows.forEach((row,index)=>{
        if(index === 1){
          let frm2 = document.getElementById('form2')
          frm2.innerHTML = ''
          frm2.style.height = "60px";
          row.split(" ").forEach((element, j)=>
          {
            let textfield = document.createElement("input");
            textfield.type = "text";
            textfield.id = "foo2";
            textfield.style.left = (j * 55 ) + 35 + "px";
            textfield.classList.add('rand2'); //myAnimation
            textfield.value = element;
            textfield.classList.add('myAnimation2'); //
            frm2.append(textfield);
          })

        }
        return; 
      })
    })  
 }
//upload from text

 // ayirma AB
function ayirmaA(){
let arr = []
let arr2 = []
let for1 = document.querySelectorAll('#form input')
  arr = []
  for1.forEach((key)=>{
    arr.push(key.value)
  })  

  let for2 = document.querySelectorAll('#form2 input')
  arr2 = []
  for2.forEach((key)=>{
    arr2.push(key.value)
  })  

let w = new Set(arr);
let w2 = new Set(arr2);

let ayirmaA = new Set([...w].filter(x => !w2.has(x)));
// console.log(ayirmaA);




let sort=document.getElementsByName("inp1");
      let empty="";
      for (var m=0;m<sort.length;m++) {
          empty+=sort[m].value+" ";   
      }

      let value1 =document.getElementById('sort');
      
      let value = value1.options[value1.selectedIndex].text;
      
      

      // for (i = 0; i < sort.length; i++)
      // {
      //   if (sort[i].value != Math.ceil(sort[i].value) && value!='Haqiqiy' ){
   
      //         alert("Iltimos to'g'ri tipni tanlang va mos raqamlarni kiriting!!!")

      //   }else if(sort[i].value != Math.ceil(sort[i].value) && value=='Haqiqiy' ){
      //     console.log("hammash joyashba")
      //   }else{
      //     console.log(1)
      //   }
      // }
       
    
      for (i = 0; i < sort.length; i++)
      {
        if (sort[i].value != Math.ceil(sort[i].value) && value=='Butun')
        {
        alert("Iltimos tog'ri tipni tanlang")
          alert("Iltimos tog'ri raqam  kiriting")
          window.location.reload(true);
          // setTimeout("location.reload(true);",00);
          // window.onload = timedRefresh(5000);
        }else if(sort[i].value ==sort[i].value && value=='Haqiqiy')
        {
          //console.log("haqiqiy zor")
          //alert("Iltimos tog'ri raqam  kiriting")
        }else if(sort[i].value == Math.ceil(sort[i].value) && value=='Butun'){

          //console.log('butun zor')
        }else if( sort[i].value ==sort[i].value && value=='Satr'){
          // console.log('satr zor')
        }
        //console.log('satr zor')
      }


       
     
      
      let sort2=document.getElementsByName("inp2");
      let empty2="";
      for (var n=0;n<sort2.length;n++) {
          empty2+=sort2[n].value+" ";
          
      }
     


for (i = 0; i < sort2.length; i++)
      {
        if (sort2[i].value != Math.ceil(sort2[i].value) && value=='Butun')
        {
          alert("Iltimos tog'ri tipni tanlang")
          alert("Iltimos tog'ri raqam  kiriting")
          window.location.reload(true);
        }else if(sort2[i].value ==sort2[i].value && value=='Haqiqiy')
        {
          //console.log("haqiqiy zor")
          //alert("Iltimos tog'ri raqam  kiriting")
        }else if(sort2[i].value == Math.ceil(sort2[i].value) && value=='Butun'){

          //console.log('butun zor')
        }else if( sort2[i].value ==sort2[i].value && value=='Satr'){
          // console.log('satr zor')
        }
        // console.log('satr zor')
      }




      }


//ayirma BA
function ayirmaB() {
let arr = []
let arr2 = []
let for1 = document.querySelectorAll('#form input')
  arr = []
  for1.forEach((key)=>{
    arr.push(key.value)
  })  

  let for2 = document.querySelectorAll('#form2 input')
  arr2 = []
  for2.forEach((key)=>{
    arr2.push(key.value)
  })  

  let w = new Set(arr);
let w2 = new Set(arr2);

let ayirmaB = new Set([...w2].filter(x => !w.has(x)));
console.log(ayirmaB);


      let sort=document.getElementsByName("inp1");
      let empty="";
      for (var m=0;m<sort.length;m++) {
          empty+=sort[m].value+" ";
          
      }
      console.log(empty);
      

      let sort2=document.getElementsByName("inp2");
      let empty2="";
      for (var n=0;n<sort2.length;n++) {
          empty2+=sort2[n].value+" ";
          
      }
      console.log(empty2);

}

function read() {
    let text = document.getElementById('text').files[0];

    let reader = new FileReader();
    
    reader.readAsText(text);


    reader.addEventListener('load',function(){
      console.log(reader.result)
      const rows = reader.result.split("\n");

      rows.forEach((row,index)=>{
        if(index === 0){
          let frm = document.getElementById('form')
          frm.innerHTML = ''
          frm.style.height = "37px";
          row.split(" ").forEach((element, j)=>
          {
            let textfield = document.createElement("input");
            textfield.type = "text";
            textfield.id = "foo";
            textfield.style.left = (j * 55 ) + 35 + "px";
            textfield.classList.add('rand1');
            textfield.classList.add('myAnimation'); //
            textfield.value = element;
            frm.append(textfield);
          })

        }
        return; 
      })
    })  
 }

 function read2() {
    let text = document.getElementById('text2').files[0];

    let reader = new FileReader();
    
    reader.readAsText(text);


    reader.addEventListener('load',function(){
      console.log(reader.result)
      const rows = reader.result.split("\n");

      rows.forEach((row,index)=>{
        if(index === 1){
          let frm2 = document.getElementById('form2')
          frm2.innerHTML = ''
          frm2.style.height = "60px";
          row.split(" ").forEach((element, j)=>
          {
            let textfield = document.createElement("input");
            textfield.type = "text";
            textfield.id = "foo2";
            textfield.style.left = (j * 55 ) + 35 + "px";
            textfield.classList.add('rand2'); //myAnimation
            textfield.value = element;
            textfield.classList.add('myAnimation2'); //
            frm2.append(textfield);
          })

        }
        return; 
      })
    }) 




    let sort=document.getElementsByName("inp1");
      let empty="";
      for (var m=0;m<sort.length;m++) {
          empty+=sort[m].value+" ";   
      }

      let value1 =document.getElementById('sort');
      
      let value = value1.options[value1.selectedIndex].text;
      
      

      // for (i = 0; i < sort.length; i++)
      // {
      //   if (sort[i].value != Math.ceil(sort[i].value) && value!='Haqiqiy' ){
   
      //         alert("Iltimos to'g'ri tipni tanlang va mos raqamlarni kiriting!!!")

      //   }else if(sort[i].value != Math.ceil(sort[i].value) && value=='Haqiqiy' ){
      //     console.log("hammash joyashba")
      //   }else{
      //     console.log(1)
      //   }
      // }
       
    
      for (i = 0; i < sort.length; i++)
      {
        if (sort[i].value != Math.ceil(sort[i].value) && value=='Butun')
        {
          alert("Iltimos tog'ri tipni tanlang")
          alert("Iltimos tog'ri raqam  kiriting")
          window.location.reload(true);
          // setTimeout("location.reload(true);",00);
          // window.onload = timedRefresh(5000);
        }else if(sort[i].value ==sort[i].value && value=='Haqiqiy')
        {
          //  console.log("haqiqiy zor")
          //alert("Iltimos tog'ri raqam  kiriting")
        }else if(sort[i].value == Math.ceil(sort[i].value) && value=='Butun'){

          //console.log('butun zor')
        }else if( sort[i].value ==sort[i].value && value=='Satr'){
         // console.log('satr zor')
        }
        //console.log('satr zor')
      }


       
     
      
      let sort2=document.getElementsByName("inp2");
      let empty2="";
      for (var n=0;n<sort2.length;n++) {
          empty2+=sort2[n].value+" ";
          
      }
     


for (i = 0; i < sort2.length; i++)
      {
        if (sort2[i].value != Math.ceil(sort2[i].value) && value=='Butun')
        {
          alert("Iltimos tog'ri tipni tanlang")
          alert("Iltimos tog'ri raqam  kiriting")
          window.location.reload(true);
        }else if(sort2[i].value ==sort2[i].value && value=='Haqiqiy')
        {
          //console.log("haqiqiy zor")
          //alert("Iltimos tog'ri raqam  kiriting")
        }else if(sort2[i].value == Math.ceil(sort2[i].value) && value=='Butun'){

          //console.log('butun zor')
        }else if( sort2[i].value ==sort2[i].value && value=='Satr'){
          // console.log('satr zor')
        }
        // console.log('satr zor')
      } 
 }


//kesishma
function kesishma() {
  let arr = []
let arr2 = []
let for1 = document.querySelectorAll('#form input')
  arr = []
  for1.forEach((key)=>{
    arr.push(key.value)
  })  

  let for2 = document.querySelectorAll('#form2 input')
  arr2 = []
  for2.forEach((key)=>{
    arr2.push(key.value)
  })  
  
  let kesishma = arr.filter(x => arr2.includes(x));
  console.log(kesishma);


      let sort=document.getElementsByName("inp1");
      let empty="";
      for (var m=0;m<sort.length;m++) {
          empty+=sort[m].value+" ";
          
      }
      console.log(empty);
      

      let sort2=document.getElementsByName("inp2");
      let empty2="";
      for (var n=0;n<sort2.length;n++) {
          empty2+=sort2[n].value+" ";
          
      }
      console.log(empty2);

}

function read() {
    let text = document.getElementById('text').files[0];

    let reader = new FileReader();
    
    reader.readAsText(text);


    reader.addEventListener('load',function(){
      console.log(reader.result)
      const rows = reader.result.split("\n");

      rows.forEach((row,index)=>{
        if(index === 0){
          let frm = document.getElementById('form')
          frm.innerHTML = ''
          frm.style.height = "37px";
          row.split(" ").forEach((element, j)=>
          {
            let textfield = document.createElement("input");
            textfield.type = "text";
            textfield.id = "foo";
            textfield.style.left = (j * 55 ) + 35 + "px";
            textfield.classList.add('rand1');
            textfield.classList.add('myAnimation'); //
            textfield.value = element;
            frm.append(textfield);
          })

        }
        return; 
      })
    })  
 }

 function read2() {
    let text = document.getElementById('text2').files[0];

    let reader = new FileReader();
    
    reader.readAsText(text);


    reader.addEventListener('load',function(){
      console.log(reader.result)
      const rows = reader.result.split("\n");

      rows.forEach((row,index)=>{
        if(index === 1){
          let frm2 = document.getElementById('form2')
          frm2.innerHTML = ''
          frm2.style.height = "60px";
          row.split(" ").forEach((element, j)=>
          {
            let textfield = document.createElement("input");
            textfield.type = "text";
            textfield.id = "foo2";
            textfield.style.left = (j * 55 ) + 35 + "px";
            textfield.classList.add('rand2'); //myAnimation
            textfield.value = element;
            textfield.classList.add('myAnimation2'); //
            frm2.append(textfield);
          })

        }
        return; 
      })
    }) 


    let sort=document.getElementsByName("inp1");
      let empty="";
      for (var m=0;m<sort.length;m++) {
          empty+=sort[m].value+" ";   
      }

      let value1 =document.getElementById('sort');
      
      let value = value1.options[value1.selectedIndex].text;
      
      

      // for (i = 0; i < sort.length; i++)
      // {
      //   if (sort[i].value != Math.ceil(sort[i].value) && value!='Haqiqiy' ){
   
      //         alert("Iltimos to'g'ri tipni tanlang va mos raqamlarni kiriting!!!")

      //   }else if(sort[i].value != Math.ceil(sort[i].value) && value=='Haqiqiy' ){
      //     console.log("hammash joyashba")
      //   }else{
      //     console.log(1)
      //   }
      // }
       
    
      for (i = 0; i < sort.length; i++)
      {
        if (sort[i].value != Math.ceil(sort[i].value) && value=='Butun')
        {
          alert("Iltimos tog'ri tipni tanlang")
          alert("Iltimos tog'ri raqam  kiriting")
          window.location.reload(true);
          // setTimeout("location.reload(true);",00);
          // window.onload = timedRefresh(5000);
        }else if(sort[i].value ==sort[i].value && value=='Haqiqiy')
        {
          //console.log("haqiqiy zor")
          //alert("Iltimos tog'ri raqam  kiriting")
        }else if(sort[i].value == Math.ceil(sort[i].value) && value=='Butun'){

          //console.log('butun zor')
        }else if( sort[i].value ==sort[i].value && value=='Satr'){
          //console.log('satr zor')
        }
        //console.log('satr zor')
      }


       
     
      
      let sort2=document.getElementsByName("inp2");
      let empty2="";
      for (var n=0;n<sort2.length;n++) {
          empty2+=sort2[n].value+" ";
          
      }
     


for (i = 0; i < sort2.length; i++)
      {
        if (sort2[i].value != Math.ceil(sort2[i].value) && value=='Butun')
        {
          alert("Iltimos tog'ri tipni tanlang")
          alert("Iltimos tog'ri raqam  kiriting")
          window.location.reload(true);
        }else if(sort2[i].value ==sort2[i].value && value=='Haqiqiy')
        {
          //console.log("haqiqiy zor")
          //alert("Iltimos tog'ri raqam  kiriting")
        }else if(sort2[i].value == Math.ceil(sort2[i].value) && value=='Butun'){

          //console.log('butun zor')
        }else if( sort2[i].value ==sort2[i].value && value=='Satr'){
          // console.log('satr zor')
        }
        // console.log('satr zor')
      }

 }




function obedenit(){
    
        let arrA= [];
        let arrB = [];
        
        let for1 = document.querySelectorAll('#form6 input');
          arrA = []
          for1.forEach((key)=>{
            arrA.push(key.value)
          }); 
        
        
          let for2 = document.querySelectorAll('#form4 input');
          arrB = []
          for2.forEach((key)=>{
            arrB.push(key.value)
          });

          let for3 = document.querySelectorAll('#form5 input');
          arrC = []
          for3.forEach((key)=>{
            arrC.push(key.value)
          });

          let answer = new Set(arrC);

          // console.log(set3)
          console.log(arrA)
          console.log(arrB)

          console.log(answer)
            
            

     let a = new Set(arrA);
     let b = new Set(arrB);
         let hlp = []
        let union = new  Set ( [...a, ...b ] ) ;

        answer2 = Array.from(answer)
        union2 = Array.from(union)
        answer2.sort()
        union2.sort()
        console.log(answer2)
        console.log(union2)

        if (union2.length == answer2.length)
        {
          for(i=0; i < union2.length; i++){
            if (union2[i] !== answer2[i]){
              setTimeout(()=>{
               document.getElementById("natija").innerHTML =
                "<div class='alert alert-danger' role='alert'>Sizning bahoyingiz: <span id='span'>2</span></div>";
            },500)
              break
            }
            else
            {
               setTimeout(()=>{
               document.getElementById("natija").innerHTML =
                "<div class='alert alert-success' role='alert'>Sizning bahoyingiz: <span id='span'>5</span></div>";
            },500)
           }
          }
          console.log(hlp[0])

        }
        else {
          console.log('poyon xato')
        }

          




// const isEqual = (a, b) => {
//   if (a.size !== b.size) {
//     return false;
//   }
//   a.forEach((item) => {
//     if (!b.has(item)) {
//       return false;
//     }
//   });
//   return true;
// }

// let equal = isEqual(a, b);


// if (union === answer)
//           {
//             console.log("Malato'q")
//           }
//           else
//           {
//             console.log("O'lib ketmaysanmi")
//           }
//           console.log(equal);

        // if (union.size !== answer.size){
        //  setTimeout(()=>{
        //  document.getElementById("natija").innerHTML =
        //   "<div class='alert alert-danger' role='alert'>Sizning bahoyingiz: <span id='span'>2</span></div>";
        //     },500)
        // }else{
        //   setTimeout(()=>{
        //  document.getElementById("natija").innerHTML =
        //   "<div class='alert alert-success' role='alert'>Sizning bahoyingiz: <span id='span'>5</span></div>";
        //     },500)
        // }

             
             
          

        
           
        // if(false)
        // {
        //   setTimeout(()=>{
        //  document.getElementById("natija").innerHTML =
        //   "<div class='alert alert-success' role='alert'>Sizning bahoyingiz: <span id='span'>5</span></div>";
        // },500)

        // }else{
          
        //   setTimeout(()=>{
        //  document.getElementById("natija").innerHTML =
        //   "<div class='alert alert-danger' role='alert'>Sizning bahoyingiz:<span id='span1'>2</span id='span1></div>";
        // },500)
        // }
    
}

function raznostA(){
    
        let arr = []
        let arr2 = []
        let for1 = document.querySelectorAll('#form6 input')
          arr = []
          for1.forEach((key)=>{
            arr.push(key.value)
          })  
        
          let for2 = document.querySelectorAll('#form4 input')
          arr2 = []
          for2.forEach((key)=>{
            arr2.push(key.value)
          })  

let for3 = document.querySelectorAll('#form5 input');
          arrC = []
          for3.forEach((key)=>{
            arrC.push(key.value)
          });

          let answer= new Set(arrC);

         //console.log(set3)

          let set1 = new Set(arr);
          let set2 = new Set(arr2);
          let hlp = [];
          let union= new Set([...set1].filter(x => !set2.has(x)));
          
        answer2 = Array.from(answer)
        union2 = Array.from(union)
        answer2.sort()
        union2.sort()
        console.log(answer2)
        console.log(union2)

        if (union2.length == answer2.length)
        {
          for(i=0; i < union2.length; i++){
            if (union2[i] !== answer2[i]){
              setTimeout(()=>{
               document.getElementById("natija").innerHTML =
                "<div class='alert alert-danger' role='alert'>Sizning bahoyingiz: <span id='span'>2</span></div>";
            },500)
              break
            }
            else
            {
               setTimeout(()=>{
               document.getElementById("natija").innerHTML =
                "<div class='alert alert-success' role='alert'>Sizning bahoyingiz: <span id='span'>5</span></div>";
            },500)
           }
          }
          console.log(hlp[0])

        }
        else {
          console.log('poyon xato')
        }

        
    
}

function raznostB(){
    
let arr = []
let arr2 = []
let for1 = document.querySelectorAll('#form6 input')
  arr = []
  for1.forEach((key)=>{
    arr.push(key.value)
  })  

  let for2 = document.querySelectorAll('#form4 input')
  arr2 = []
  for2.forEach((key)=>{
    arr2.push(key.value)
  })  


let for3 = document.querySelectorAll('#form5 input');
          arrC = []
          for3.forEach((key)=>{
            arrC.push(key.value)
          });

          let answer = new Set(arrC);

          
  let w = new Set(arr);
let w2 = new Set(arr2);

let union = new Set([...w2].filter(x => !w.has(x)));

answer2 = Array.from(answer)
        union2 = Array.from(union)
        answer2.sort()
        union2.sort()
        console.log(answer2)
        console.log(union2)
        let hlp = [];
        if (union2.length == answer2.length)
        {
          for(i=0; i < union2.length; i++){
            if (union2[i] !== answer2[i]){
              setTimeout(()=>{
               document.getElementById("natija").innerHTML =
                "<div class='alert alert-danger' role='alert'>Sizning bahoyingiz: <span id='span'>2</span></div>";
            },500)
              break
            }
            else
            {
               setTimeout(()=>{
               document.getElementById("natija").innerHTML =
                "<div class='alert alert-success' role='alert'>Sizning bahoyingiz: <span id='span'>5</span></div>";
            },500)
           }
          }
          console.log(hlp[0])

        }
        else {
          console.log('poyon xato')
        }    

}

function simentr(){
    
    
let arr = []
let arr2 = []
let for1 = document.querySelectorAll('#form6 input')
  arr = []
  for1.forEach((key)=>{
    arr.push(key.value)
  })  

  let for2 = document.querySelectorAll('#form4 input')
  arr2 = []
  for2.forEach((key)=>{
    arr2.push(key.value)
  })  
  

  let for3 = document.querySelectorAll('#form5 input');
          arrC = []
          for3.forEach((key)=>{
            arrC.push(key.value)
          });

          let answer = new Set(arrC);

          
  let union = arr.filter(x => arr2.includes(x));
 
 answer2 = Array.from(answer)
        union2 = Array.from(union)
        answer2.sort()
        union2.sort()
        console.log(answer2)
        console.log(union2)
        let hlp = [];
        if (union2.length == answer2.length)
        {
          for(i=0; i < union2.length; i++){
            if (union2[i] !== answer2[i]){
              setTimeout(()=>{
               document.getElementById("natija").innerHTML =
                "<div class='alert alert-danger' role='alert'>Sizning bahoyingiz: <span id='span'>2</span></div>";
            },500)
              break
            }
            else
            {
               setTimeout(()=>{
               document.getElementById("natija").innerHTML =
                "<div class='alert alert-success' role='alert'>Sizning bahoyingiz: <span id='span'>5</span></div>";
            },500)
           }
          }
          console.log(hlp[0])

        }
        else {
          console.log('poyon xato')
        }
    

}



</script>
</body>
</html

////


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
    <link href="assets/style.css" rel="stylesheet"  crossorigin="anonymous">
    <script src="assets/head.js" crossorigin="anonymous"></script>
    <link href="assets/self.css" rel="stylesheet">
</head>
<body>


<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</button>
    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <!--begining of show-->
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

     <div id="container">
      <div class="row bg">
        <div class="col border" style="margin-left:15px!important;">
          <!--begining of random 1-->
              <input type="number" id="r1" class="border m-2" min="1" max="12" placeholder="0"  oninput="inc()">
              <button class="button btn-warning border-0 m-2" onclick="rand()">Tasodifiy</button>
              <input type="file" onchange="read()" id="text">
              <form id="form">
              </form>
          <!--end of random 1-->
          <!--begining of random 2-->
              <input type="number" id="r2" class="border m-2" min="1" max="12" placeholder="0"  oninput="inc2()">
              <button class="button btn-warning border-0 m-2" onclick="rand2()">Tasodifiy</button>
              <input type="file"  onchange="read2()" id="text2">
              <form id="form2">
              </form>

            </div>
            <div class="col-md-1 border" >
              <select name='sel' id="sort"  onchange="" style="margin:7px 0px;border:2px solid #ECF0F1;border-radius:5px;">
                <option name="s">Satr</option>
                <option name="b">Butun</option>
                <option name="h">Haqiqiy</option>
              </select>
            </div>



    <div class="col border" style="margin-right:15px!important;">
      <h4 align="center">Natija</h4>
      <input type="text" name="hiddenInput" style="visibility: hidden;" id="hiddenInput">
     <div class="col-md-6" >
           
        </div>
      </div>
  

          <div id="result">
            
          </div>
             
        </div>
      </div>
      <!---start of procces--->
      <div class="row bg m-2">
        <div class="col border">
          <button  id="birlashma" class="btn btn-primary m-1" onclick ="birlashma()" onchange="isInt()">Birlashma</button><br>
          <button  id="ayirmaA" class="btn btn-primary m-1" onclick="ayirmaA()">Ayirma A/B</button><br>
          <button  id="ayirmaB" class="btn btn-primary m-1" onclick="ayirmaB()">Ayirma B/A</button><br>
          <button  id="kesishma" class="btn btn-primary m-1" onclick="kesishma()">Kesishma</button><br>
        </div>
        <div class="col border">1</div>
      </div>
      <!---end of procces--->
  </div>

  <!--end of show-->






  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">durud</div>
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">salam</div>
</div>
<script src="assets/bottom.js"></script>
<script src="assets/bottom2.js"></script>
<script src="assets/amal.js"></script>
<script type="text/javascript">

//filter

// var inputs=document.getElementsByName("inp1");
// var admissionNumber="";
// for (var m=0;m<inputs.length;m++) {
//     admissionNumber+=inputs[m].value+" ";
//     console.log(admissionNumber);
// }
// console.log(admissionNumber);

// function getSort(){

//   let value =document.getElementById('sort').value;
//   console.log(value)
// }

//filter


  //mover
let elem = document.getElementById('hiddenInput');
let rect = elem.getBoundingClientRect();
console.log(rect.left);


let right = document.getElementById('birlashma');

right.addEventListener("click",function(){

  let elements = document.querySelectorAll('.rand1');
  //console.log("click")
  elements.forEach((element,index)=>{

    setTimeout(()=>{
      element.style.left = (parseInt(element.style.left) + rect.left -30)+"px";
    }, index* 800)
  })

let elements1 = document.querySelectorAll('.rand2');
  //console.log("click")
  elements1.forEach((element,index)=>{
    setTimeout(()=>{
      element.style.left = (parseInt(element.style.left) + rect.left -30)+"px";
    }, index* 1000)
  })
});
//mover

//mover
let ayirA = document.getElementById('ayirmaA');

ayirA.addEventListener("click",function(){

  let ayirElement = document.querySelectorAll('.rand1');
  //console.log("click")
  ayirElement.forEach((element,index)=>{

    setTimeout(()=>{
      element.style.left = (parseInt(element.style.left) + rect.left + rect.right - 970)+"px";
    }, index* 800)
  })

let ayirElement1= document.querySelectorAll('.rand2');
  //console.log("click")
  ayirElement1.forEach((element,index)=>{
    setTimeout(()=>{
      element.style.left = (parseInt(element.style.left) + rect.left + rect.right -970 )+"px";
    }, index* 1000)
  })
});
//mover

//mover



let ayirB = document.getElementById('ayirmaB');

ayirB.addEventListener("click",function(){

  let ayirBelement = document.querySelectorAll('.rand1');
  //console.log("click")
  ayirBelement.forEach((element,index)=>{

    setTimeout(()=>{
      element.style.left = (parseInt(element.style.left) + rect.left -30)+"px";
    }, index* 800)
  })

let ayirBelemen2 = document.querySelectorAll('.rand2');
  //console.log("click")
  ayirBelemen2.forEach((element,index)=>{
    setTimeout(()=>{
      element.style.left = (parseInt(element.style.left) + rect.left -30)+"px";
    }, index* 1000)
  })
});
//mover

// //mover

let kes = document.getElementById('kesishma');

kes.addEventListener("click",function(){

  let kesel = document.querySelectorAll('.rand1');
  //console.log("click")
  kesel.forEach((element,index)=>{

    setTimeout(()=>{
      element.style.left = (parseInt(element.style.left) + rect.left -30)+"px";
    }, index* 800)
  })

let kesel2 = document.querySelectorAll('.rand2');
  //console.log("click")
  kesel2.forEach((element,index)=>{
    setTimeout(()=>{
      element.style.left = (parseInt(element.style.left) + rect.left -30)+"px";
    }, index* 1000)
  })
});
//


  function rand(){

    let inp = document.querySelectorAll('#form input')
    for(let i = 0; i < inp.length; i++){
        inp[i].value = Math.floor(Math.random() * 100)
        //inp[i].value = Math.floor(Math.random() * 100)
    }
  }
  
   function inc() {

    let no = Number(document.querySelector("#r1").value);

    let frm = document.getElementById('form');
    frm.innerHTML = '';
    frm.style.height = "35px";
    for (let i = 0; i < no; i++) {
        let textfield = document.createElement("input");
        textfield.type = "text";
        textfield.id = "foo";
        textfield.name = "inp1";
        textfield.style.left = (i * 55 ) + 35 + "px";
        textfield.classList.add('rand1');
        textfield.classList.add('myAnimation'); //

        frm.append(textfield);
    }    
}

function rand2(){

let inp2 = document.querySelectorAll('#form2 input')
for(let i = 0; i < inp2.length; i++){
    inp2[i].value = Math.floor(Math.random() * 100)
    //inp[i].value = Math.floor(Math.random() * 100)
   }
}
  
   function inc2() {

    let no2 = Number(document.querySelector("#r2").value);

    let frm2 = document.getElementById('form2')
    frm2.innerHTML = ''
    frm2.style.height = "80px";
 
  for (let j = 0; j < no2; j++) {
        let textfield = document.createElement("input");
        textfield.type = "text";
        textfield.id = "foo2";
        textfield.name = "inp2";
        textfield.style.left = (j * 55 ) + 35 + "px";
        textfield.classList.add('rand2'); //myAnimation
        textfield.classList.add('myAnimation2'); //
        frm2.append(textfield);
   }    
}

//birlashma
function birlashma() {
let arrA= [];
let arrB = [];

let for1 = document.querySelectorAll('#form input');
  arrA = []
  for1.forEach((key)=>{
    arrA.push(key.value)
  }); 

  let for2 = document.querySelectorAll('#form2 input');
  arrB = []
  for2.forEach((key)=>{
    arrB.push(key.value)
  });
    let birlashma = [...new Set([...arrA, ...arrB])];



      let sort=document.getElementsByName("inp1");
      let empty="";
      for (var m=0;m<sort.length;m++) {
          empty+=sort[m].value+" ";
          
      }



      let value1 =document.getElementById('sort');
      
      let value = value1.options[value1.selectedIndex].text;
      console.log(value)
      

      // for (i = 0; i < sort.length; i++)
      // {
      //   if (sort[i].value != Math.ceil(sort[i].value) && value!='Haqiqiy' ){
   
      //         alert("Iltimos to'g'ri tipni tanlang va mos raqamlarni kiriting!!!")

      //   }else if(sort[i].value != Math.ceil(sort[i].value) && value=='Haqiqiy' ){
      //     console.log("hammash joyashba")
      //   }else{
      //     console.log(1)
      //   }
      // }
       
    
      for (i = 0; i < sort.length; i++)
      {
        if (sort[i].value != Math.ceil(sort[i].value) && value!='Haqiqiy')
        {
          alert("Iltimos tog'ri tipni tanlang")
          alert("Iltimos tog'ri raqam  kiriting")
          break;
        }else if(sort[i].value ==sort[i].value && value=='Haqiqiy')
        {
          alert("haqiqiy zor")
          //alert("Iltimos tog'ri raqam  kiriting")
        }else if(sort[i].value == Math.ceil(sort[i].value) && value=='Butun'){

          alert('butun zor')
        }else if( sort[i].value ==sort[i].value && value=='Satr'){
          alert('satr zor')
        }
        console.log('satr zor')
      }


       
     
      
      let sort2=document.getElementsByName("inp2");
      let empty2="";
      for (var n=0;n<sort2.length;n++) {
          empty2+=sort2[n].value+" ";
          
      }
      console.log(empty2);


for (i = 0; i < sort2.length; i++)
      {
        if (sort2[i].value != Math.ceil(sort2[i].value) && value!='Haqiqiy')
        {
          alert("Iltimos tog'ri tipni tanlang")
          alert("Iltimos tog'ri raqam  kiriting")
          break;
        }else if(sort2[i].value ==sort2[i].value && value=='Haqiqiy')
        {
          alert("haqiqiy zor")
          //alert("Iltimos tog'ri raqam  kiriting")
        }else if(sort2[i].value == Math.ceil(sort2[i].value) && value=='Butun'){

          alert('butun zor')
        }else if( sort2[i].value ==sort2[i].value && value=='Satr'){
          alert('satr zor')
        }
        console.log('satr zor')
      }

      }
//birlashma

//upload from text
function read() {
    let text = document.getElementById('text').files[0];

    let reader = new FileReader();
    
    reader.readAsText(text);


    reader.addEventListener('load',function(){
      console.log(reader.result)
      const rows = reader.result.split("\n");

      rows.forEach((row,index)=>{
        if(index === 0){
          let frm = document.getElementById('form')
          frm.innerHTML = ''
          frm.style.height = "37px";
          row.split(" ").forEach((element, j)=>
          {
            let textfield = document.createElement("input");
            textfield.type = "text";
            textfield.id = "foo";
            textfield.style.left = (j * 55 ) + 35 + "px";
            textfield.classList.add('rand1');
            textfield.classList.add('myAnimation'); //
            textfield.value = element;
            frm.append(textfield);
          })

        }
        return; 
      })
    })  
 }

 function read2() {
    let text = document.getElementById('text2').files[0];

    let reader = new FileReader();
    
    reader.readAsText(text);


    reader.addEventListener('load',function(){
      console.log(reader.result)
      const rows = reader.result.split("\n");

      rows.forEach((row,index)=>{
        if(index === 1){
          let frm2 = document.getElementById('form2')
          frm2.innerHTML = ''
          frm2.style.height = "60px";
          row.split(" ").forEach((element, j)=>
          {
            let textfield = document.createElement("input");
            textfield.type = "text";
            textfield.id = "foo2";
            textfield.style.left = (j * 55 ) + 35 + "px";
            textfield.classList.add('rand2'); //myAnimation
            textfield.value = element;
            textfield.classList.add('myAnimation2'); //
            frm2.append(textfield);
          })

        }
        return; 
      })
    })  
 }
//upload from text

 // ayirma AB
function ayirmaA(){
let arr = []
let arr2 = []
let for1 = document.querySelectorAll('#form input')
  arr = []
  for1.forEach((key)=>{
    arr.push(key.value)
  })  

  let for2 = document.querySelectorAll('#form2 input')
  arr2 = []
  for2.forEach((key)=>{
    arr2.push(key.value)
  })  

let w = new Set(arr);
let w2 = new Set(arr2);

let ayirmaA = new Set([...w].filter(x => !w2.has(x)));
console.log(ayirmaA);


      let sort=document.getElementsByName("inp1");
      let empty="";
      for (var m=0;m<sort.length;m++) {
          empty+=sort[m].value+" ";
          
      }
      console.log(empty);
     

 


      let sort2=document.getElementsByName("inp2");
      let empty2="";
      for (var n=0;n<sort2.length;n++) {
          empty2+=sort2[n].value+" ";
          
      }
      console.log(empty2);

}
//ayirma BA
function ayirmaB() {
  let arr = []
let arr2 = []
let for1 = document.querySelectorAll('#form input')
  arr = []
  for1.forEach((key)=>{
    arr.push(key.value)
  })  

  let for2 = document.querySelectorAll('#form2 input')
  arr2 = []
  for2.forEach((key)=>{
    arr2.push(key.value)
  })  

  let w = new Set(arr);
let w2 = new Set(arr2);

let ayirmaB = new Set([...w2].filter(x => !w.has(x)));
console.log(ayirmaB);


      let sort=document.getElementsByName("inp1");
      let empty="";
      for (var m=0;m<sort.length;m++) {
          empty+=sort[m].value+" ";
          
      }
      console.log(empty);
      

      let sort2=document.getElementsByName("inp2");
      let empty2="";
      for (var n=0;n<sort2.length;n++) {
          empty2+=sort2[n].value+" ";
          
      }
      console.log(empty2);

}

function read() {
    let text = document.getElementById('text').files[0];

    let reader = new FileReader();
    
    reader.readAsText(text);


    reader.addEventListener('load',function(){
      console.log(reader.result)
      const rows = reader.result.split("\n");

      rows.forEach((row,index)=>{
        if(index === 0){
          let frm = document.getElementById('form')
          frm.innerHTML = ''
          frm.style.height = "37px";
          row.split(" ").forEach((element, j)=>
          {
            let textfield = document.createElement("input");
            textfield.type = "text";
            textfield.id = "foo";
            textfield.style.left = (j * 55 ) + 35 + "px";
            textfield.classList.add('rand1');
            textfield.classList.add('myAnimation'); //
            textfield.value = element;
            frm.append(textfield);
          })

        }
        return; 
      })
    })  
 }

 function read2() {
    let text = document.getElementById('text2').files[0];

    let reader = new FileReader();
    
    reader.readAsText(text);


    reader.addEventListener('load',function(){
      console.log(reader.result)
      const rows = reader.result.split("\n");

      rows.forEach((row,index)=>{
        if(index === 1){
          let frm2 = document.getElementById('form2')
          frm2.innerHTML = ''
          frm2.style.height = "60px";
          row.split(" ").forEach((element, j)=>
          {
            let textfield = document.createElement("input");
            textfield.type = "text";
            textfield.id = "foo2";
            textfield.style.left = (j * 55 ) + 35 + "px";
            textfield.classList.add('rand2'); //myAnimation
            textfield.value = element;
            textfield.classList.add('myAnimation2'); //
            frm2.append(textfield);
          })

        }
        return; 
      })
    })  
 }


//kesishma
function kesishma() {
  let arr = []
let arr2 = []
let for1 = document.querySelectorAll('#form input')
  arr = []
  for1.forEach((key)=>{
    arr.push(key.value)
  })  

  let for2 = document.querySelectorAll('#form2 input')
  arr2 = []
  for2.forEach((key)=>{
    arr2.push(key.value)
  })  
  
  let kesishma = arr.filter(x => arr2.includes(x));
  console.log(kesishma);


      let sort=document.getElementsByName("inp1");
      let empty="";
      for (var m=0;m<sort.length;m++) {
          empty+=sort[m].value+" ";
          
      }
      console.log(empty);
      

      let sort2=document.getElementsByName("inp2");
      let empty2="";
      for (var n=0;n<sort2.length;n++) {
          empty2+=sort2[n].value+" ";
          
      }
      console.log(empty2);

}

function read() {
    let text = document.getElementById('text').files[0];

    let reader = new FileReader();
    
    reader.readAsText(text);


    reader.addEventListener('load',function(){
      console.log(reader.result)
      const rows = reader.result.split("\n");

      rows.forEach((row,index)=>{
        if(index === 0){
          let frm = document.getElementById('form')
          frm.innerHTML = ''
          frm.style.height = "37px";
          row.split(" ").forEach((element, j)=>
          {
            let textfield = document.createElement("input");
            textfield.type = "text";
            textfield.id = "foo";
            textfield.style.left = (j * 55 ) + 35 + "px";
            textfield.classList.add('rand1');
            textfield.classList.add('myAnimation'); //
            textfield.value = element;
            frm.append(textfield);
          })

        }
        return; 
      })
    })  
 }

 function read2() {
    let text = document.getElementById('text2').files[0];

    let reader = new FileReader();
    
    reader.readAsText(text);


    reader.addEventListener('load',function(){
      console.log(reader.result)
      const rows = reader.result.split("\n");

      rows.forEach((row,index)=>{
        if(index === 1){
          let frm2 = document.getElementById('form2')
          frm2.innerHTML = ''
          frm2.style.height = "60px";
          row.split(" ").forEach((element, j)=>
          {
            let textfield = document.createElement("input");
            textfield.type = "text";
            textfield.id = "foo2";
            textfield.style.left = (j * 55 ) + 35 + "px";
            textfield.classList.add('rand2'); //myAnimation
            textfield.value = element;
            textfield.classList.add('myAnimation2'); //
            frm2.append(textfield);
          })

        }
        return; 
      })
    })  
 }





</script>
</body>
</html



//////////////////

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
    <link href="assets/style.css" rel="stylesheet"  crossorigin="anonymous">
    <script src="assets/head.js" crossorigin="anonymous"></script>
    <link href="assets/self.css" rel="stylesheet">
</head>
<body>


<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</button>
    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <!--begining of show-->
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

     <div id="container">
      <div class="row bg">
        <div class="col border" style="margin-left:15px!important;">
          <!--begining of random 1-->
              <input type="number" id="r1" class="border m-2" min="1" max="12" placeholder="0"  oninput="inc()">
              <button class="button btn-warning border-0 m-2" onclick="rand()">Tasodifiy</button>
              <input type="file" onchange="read()" id="text">
              <form id="form">
              </form>
          <!--end of random 1-->
          <!--begining of random 2-->
              <input type="number" id="r2" class="border m-2" min="1" max="12" placeholder="0"  oninput="inc2()">
              <button class="button btn-warning border-0 m-2" onclick="rand2()">Tasodifiy</button>
              <input type="file"  onchange="read2()" id="text2">
              <form id="form2">
              </form>

            </div>
            <div class="col-md-1 border" >
              <select name='sel' id="sort"  onchange="" style="margin:7px 0px;border:2px solid #ECF0F1;border-radius:5px;">
                <option name="">Tanlash</option>
                <option name="s">Satr</option>
                <option name="b">Butun</option>
                <option name="h">Haqiqiy</option>
              </select>
            </div>



    <div class="col border" style="margin-right:15px!important;">
      <h4 align="center">Natija</h4>
      <input type="text" name="hiddenInput" style="visibility: hidden;" id="hiddenInput">
     <div class="col-md-6" >
           
        </div>
      </div>
  

          <div id="result">
            
          </div>
             
        </div>
      </div>
      <!---start of procces--->
      <div class="row bg m-2">
        <div class="col border">
          <button  id="birlashma" class="btn btn-primary m-1" onclick ="birlashma()" onchange="isInt()">Birlashma</button><br>
          <button  id="ayirmaA" class="btn btn-primary m-1" onclick="ayirmaA()">Ayirma A/B</button><br>
          <button  id="ayirmaB" class="btn btn-primary m-1" onclick="ayirmaB()">Ayirma B/A</button><br>
          <button  id="kesishma" class="btn btn-primary m-1" onclick="kesishma()">Kesishma</button><br>
        </div>
        <div class="col border">1</div>
      </div>
      <!---end of procces--->
  </div>

  <!--end of show-->






  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">durud</div>
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">salam</div>
</div>
<script src="assets/bottom.js"></script>
<script src="assets/bottom2.js"></script>
<script src="assets/amal.js"></script>
<script type="text/javascript">

//filter

// var inputs=document.getElementsByName("inp1");
// var admissionNumber="";
// for (var m=0;m<inputs.length;m++) {
//     admissionNumber+=inputs[m].value+" ";
//     console.log(admissionNumber);
// }
// console.log(admissionNumber);

// function getSort(){

//   let value =document.getElementById('sort').value;
//   console.log(value)
// }

//filter


  //mover
let elem = document.getElementById('hiddenInput');
let rect = elem.getBoundingClientRect();
console.log(rect.left);


let right = document.getElementById('birlashma');

right.addEventListener("click",function(){

  let elements = document.querySelectorAll('.rand1');
  //console.log("click")
  elements.forEach((element,index)=>{

    setTimeout(()=>{
      element.style.left = (parseInt(element.style.left) + rect.left -30)+"px";
    }, index* 800)
  })

let elements1 = document.querySelectorAll('.rand2');
  //console.log("click")
  elements1.forEach((element,index)=>{
    setTimeout(()=>{
      element.style.left = (parseInt(element.style.left) + rect.left -30)+"px";
    }, index* 1000)
  })
});
//mover

//mover
let ayirA = document.getElementById('ayirmaA');

ayirA.addEventListener("click",function(){

  let ayirElement = document.querySelectorAll('.rand1');
  //console.log("click")
  ayirElement.forEach((element,index)=>{

    setTimeout(()=>{
      element.style.left = (parseInt(element.style.left) + rect.left + rect.right - 970)+"px";
    }, index* 800)
  })

let ayirElement1= document.querySelectorAll('.rand2');
  //console.log("click")
  ayirElement1.forEach((element,index)=>{
    setTimeout(()=>{
      element.style.left = (parseInt(element.style.left) + rect.left + rect.right -970 )+"px";
    }, index* 1000)
  })
});
//mover

//mover



let ayirB = document.getElementById('ayirmaB');

ayirB.addEventListener("click",function(){

  let ayirBelement = document.querySelectorAll('.rand1');
  //console.log("click")
  ayirBelement.forEach((element,index)=>{

    setTimeout(()=>{
      element.style.left = (parseInt(element.style.left) + rect.left -30)+"px";
    }, index* 800)
  })

let ayirBelemen2 = document.querySelectorAll('.rand2');
  //console.log("click")
  ayirBelemen2.forEach((element,index)=>{
    setTimeout(()=>{
      element.style.left = (parseInt(element.style.left) + rect.left -30)+"px";
    }, index* 1000)
  })
});
//mover

// //mover

let kes = document.getElementById('kesishma');

kes.addEventListener("click",function(){

  let kesel = document.querySelectorAll('.rand1');
  //console.log("click")
  kesel.forEach((element,index)=>{

    setTimeout(()=>{
      element.style.left = (parseInt(element.style.left) + rect.left -30)+"px";
    }, index* 800)
  })

let kesel2 = document.querySelectorAll('.rand2');
  //console.log("click")
  kesel2.forEach((element,index)=>{
    setTimeout(()=>{
      element.style.left = (parseInt(element.style.left) + rect.left -30)+"px";
    }, index* 1000)
  })
});
//


  function rand(){

    let inp = document.querySelectorAll('#form input')
    for(let i = 0; i < inp.length; i++){
        inp[i].value = Math.floor(Math.random() * 100)
        //inp[i].value = Math.floor(Math.random() * 100)
    }
  }
  
   function inc() {

    let no = Number(document.querySelector("#r1").value);

    let frm = document.getElementById('form');
    frm.innerHTML = '';
    frm.style.height = "35px";
    for (let i = 0; i < no; i++) {
        let textfield = document.createElement("input");
        textfield.type = "text";
        textfield.id = "foo";
        textfield.name = "inp1";
        textfield.style.left = (i * 55 ) + 35 + "px";
        textfield.classList.add('rand1');
        textfield.classList.add('myAnimation'); //

        frm.append(textfield);
    }    
}

function rand2(){

let inp2 = document.querySelectorAll('#form2 input')
for(let i = 0; i < inp2.length; i++){
    inp2[i].value = Math.floor(Math.random() * 100)
    //inp[i].value = Math.floor(Math.random() * 100)
   }
}
  
   function inc2() {

    let no2 = Number(document.querySelector("#r2").value);

    let frm2 = document.getElementById('form2')
    frm2.innerHTML = ''
    frm2.style.height = "80px";
 
  for (let j = 0; j < no2; j++) {
        let textfield = document.createElement("input");
        textfield.type = "text";
        textfield.id = "foo2";
        textfield.name = "inp2";
        textfield.style.left = (j * 55 ) + 35 + "px";
        textfield.classList.add('rand2'); //myAnimation
        textfield.classList.add('myAnimation2'); //
        frm2.append(textfield);
   }    
}

//birlashma
function birlashma() {
let arrA= [];
let arrB = [];

let for1 = document.querySelectorAll('#form input');
  arrA = []
  for1.forEach((key)=>{
    arrA.push(key.value)
  }); 

  let for2 = document.querySelectorAll('#form2 input');
  arrB = []
  for2.forEach((key)=>{
    arrB.push(key.value)
  });
    let birlashma = [...new Set([...arrA, ...arrB])];



      let sort=document.getElementsByName("inp1");
      let empty="";
      for (var m=0;m<sort.length;m++) {
          empty+=sort[m].value+" ";
          
      }



      let value1 =document.getElementById('sort');
      
      let value = value1.options[value1.selectedIndex].text;
     
      if(value!='Butun')
      {
        alert("Iltimos to'g'ri tipni tanlang");
        
      }else
      {
        console.log('hammesh zor hast')
      }
      
      
    
      // for (i = 0; i < sort.length; i++)
      // {
      //   if (sort[i].value != Math.ceil(sort[i].value))
      //   {
      //     console.log('ok')
      //     break;
      //   }else if(sort[i].value == Math.ceil(sort[i].value))
      //   {
      //     console.log('in integer hast')
      //   }
      // }


       
     
      
      let sort2=document.getElementsByName("inp2");
      let empty2="";
      for (var n=0;n<sort2.length;n++) {
          empty2+=sort2[n].value+" ";
          
      }
      console.log(empty2);


      }
//birlashma

//upload from text
function read() {
    let text = document.getElementById('text').files[0];

    let reader = new FileReader();
    
    reader.readAsText(text);


    reader.addEventListener('load',function(){
      console.log(reader.result)
      const rows = reader.result.split("\n");

      rows.forEach((row,index)=>{
        if(index === 0){
          let frm = document.getElementById('form')
          frm.innerHTML = ''
          frm.style.height = "37px";
          row.split(" ").forEach((element, j)=>
          {
            let textfield = document.createElement("input");
            textfield.type = "text";
            textfield.id = "foo";
            textfield.style.left = (j * 55 ) + 35 + "px";
            textfield.classList.add('rand1');
            textfield.classList.add('myAnimation'); //
            textfield.value = element;
            frm.append(textfield);
          })

        }
        return; 
      })
    })  
 }

 function read2() {
    let text = document.getElementById('text2').files[0];

    let reader = new FileReader();
    
    reader.readAsText(text);


    reader.addEventListener('load',function(){
      console.log(reader.result)
      const rows = reader.result.split("\n");

      rows.forEach((row,index)=>{
        if(index === 1){
          let frm2 = document.getElementById('form2')
          frm2.innerHTML = ''
          frm2.style.height = "60px";
          row.split(" ").forEach((element, j)=>
          {
            let textfield = document.createElement("input");
            textfield.type = "text";
            textfield.id = "foo2";
            textfield.style.left = (j * 55 ) + 35 + "px";
            textfield.classList.add('rand2'); //myAnimation
            textfield.value = element;
            textfield.classList.add('myAnimation2'); //
            frm2.append(textfield);
          })

        }
        return; 
      })
    })  
 }
//upload from text

 // ayirma AB
function ayirmaA(){
let arr = []
let arr2 = []
let for1 = document.querySelectorAll('#form input')
  arr = []
  for1.forEach((key)=>{
    arr.push(key.value)
  })  

  let for2 = document.querySelectorAll('#form2 input')
  arr2 = []
  for2.forEach((key)=>{
    arr2.push(key.value)
  })  

let w = new Set(arr);
let w2 = new Set(arr2);

let ayirmaA = new Set([...w].filter(x => !w2.has(x)));
console.log(ayirmaA);


      let sort=document.getElementsByName("inp1");
      let empty="";
      for (var m=0;m<sort.length;m++) {
          empty+=sort[m].value+" ";
          
      }
      console.log(empty);
     

 


      let sort2=document.getElementsByName("inp2");
      let empty2="";
      for (var n=0;n<sort2.length;n++) {
          empty2+=sort2[n].value+" ";
          
      }
      console.log(empty2);

}
//ayirma BA
function ayirmaB() {
  let arr = []
let arr2 = []
let for1 = document.querySelectorAll('#form input')
  arr = []
  for1.forEach((key)=>{
    arr.push(key.value)
  })  

  let for2 = document.querySelectorAll('#form2 input')
  arr2 = []
  for2.forEach((key)=>{
    arr2.push(key.value)
  })  

  let w = new Set(arr);
let w2 = new Set(arr2);

let ayirmaB = new Set([...w2].filter(x => !w.has(x)));
console.log(ayirmaB);


      let sort=document.getElementsByName("inp1");
      let empty="";
      for (var m=0;m<sort.length;m++) {
          empty+=sort[m].value+" ";
          
      }
      console.log(empty);
      

      let sort2=document.getElementsByName("inp2");
      let empty2="";
      for (var n=0;n<sort2.length;n++) {
          empty2+=sort2[n].value+" ";
          
      }
      console.log(empty2);

}

function read() {
    let text = document.getElementById('text').files[0];

    let reader = new FileReader();
    
    reader.readAsText(text);


    reader.addEventListener('load',function(){
      console.log(reader.result)
      const rows = reader.result.split("\n");

      rows.forEach((row,index)=>{
        if(index === 0){
          let frm = document.getElementById('form')
          frm.innerHTML = ''
          frm.style.height = "37px";
          row.split(" ").forEach((element, j)=>
          {
            let textfield = document.createElement("input");
            textfield.type = "text";
            textfield.id = "foo";
            textfield.style.left = (j * 55 ) + 35 + "px";
            textfield.classList.add('rand1');
            textfield.classList.add('myAnimation'); //
            textfield.value = element;
            frm.append(textfield);
          })

        }
        return; 
      })
    })  
 }

 function read2() {
    let text = document.getElementById('text2').files[0];

    let reader = new FileReader();
    
    reader.readAsText(text);


    reader.addEventListener('load',function(){
      console.log(reader.result)
      const rows = reader.result.split("\n");

      rows.forEach((row,index)=>{
        if(index === 1){
          let frm2 = document.getElementById('form2')
          frm2.innerHTML = ''
          frm2.style.height = "60px";
          row.split(" ").forEach((element, j)=>
          {
            let textfield = document.createElement("input");
            textfield.type = "text";
            textfield.id = "foo2";
            textfield.style.left = (j * 55 ) + 35 + "px";
            textfield.classList.add('rand2'); //myAnimation
            textfield.value = element;
            textfield.classList.add('myAnimation2'); //
            frm2.append(textfield);
          })

        }
        return; 
      })
    })  
 }


//kesishma
function kesishma() {
  let arr = []
let arr2 = []
let for1 = document.querySelectorAll('#form input')
  arr = []
  for1.forEach((key)=>{
    arr.push(key.value)
  })  

  let for2 = document.querySelectorAll('#form2 input')
  arr2 = []
  for2.forEach((key)=>{
    arr2.push(key.value)
  })  
  
  let kesishma = arr.filter(x => arr2.includes(x));
  console.log(kesishma);


      let sort=document.getElementsByName("inp1");
      let empty="";
      for (var m=0;m<sort.length;m++) {
          empty+=sort[m].value+" ";
          
      }
      console.log(empty);
      

      let sort2=document.getElementsByName("inp2");
      let empty2="";
      for (var n=0;n<sort2.length;n++) {
          empty2+=sort2[n].value+" ";
          
      }
      console.log(empty2);

}

function read() {
    let text = document.getElementById('text').files[0];

    let reader = new FileReader();
    
    reader.readAsText(text);


    reader.addEventListener('load',function(){
      console.log(reader.result)
      const rows = reader.result.split("\n");

      rows.forEach((row,index)=>{
        if(index === 0){
          let frm = document.getElementById('form')
          frm.innerHTML = ''
          frm.style.height = "37px";
          row.split(" ").forEach((element, j)=>
          {
            let textfield = document.createElement("input");
            textfield.type = "text";
            textfield.id = "foo";
            textfield.style.left = (j * 55 ) + 35 + "px";
            textfield.classList.add('rand1');
            textfield.classList.add('myAnimation'); //
            textfield.value = element;
            frm.append(textfield);
          })

        }
        return; 
      })
    })  
 }

 function read2() {
    let text = document.getElementById('text2').files[0];

    let reader = new FileReader();
    
    reader.readAsText(text);


    reader.addEventListener('load',function(){
      console.log(reader.result)
      const rows = reader.result.split("\n");

      rows.forEach((row,index)=>{
        if(index === 1){
          let frm2 = document.getElementById('form2')
          frm2.innerHTML = ''
          frm2.style.height = "60px";
          row.split(" ").forEach((element, j)=>
          {
            let textfield = document.createElement("input");
            textfield.type = "text";
            textfield.id = "foo2";
            textfield.style.left = (j * 55 ) + 35 + "px";
            textfield.classList.add('rand2'); //myAnimation
            textfield.value = element;
            textfield.classList.add('myAnimation2'); //
            frm2.append(textfield);
          })

        }
        return; 
      })
    })  
 }





</script>
</body>
</html



//////

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
    <link href="assets/style.css" rel="stylesheet"  crossorigin="anonymous">
    <script src="assets/head.js" crossorigin="anonymous"></script>
    <link href="assets/self.css" rel="stylesheet">
</head>
<body>


<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</button>
    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <!--begining of show-->
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

     <div id="container">
      <div class="row bg">
        <div class="col border" style="margin-left:15px!important;">
          <!--begining of random 1-->
              <input type="number" id="r1" class="border m-2" min="1" max="12" placeholder="0"  oninput="inc()">
              <button class="button btn-warning border-0 m-2" onclick="rand()">Tasodifiy</button>
              <input type="file" onchange="read()" id="text">
              <form id="form">
              </form>
          <!--end of random 1-->
          <!--begining of random 2-->
              <input type="number" id="r2" class="border m-2" min="1" max="12" placeholder="0"  oninput="inc2()">
              <button class="button btn-warning border-0 m-2" onclick="rand2()">Tasodifiy</button>
              <input type="file"  onchange="read2()" id="text2">
              <form id="form2">
              </form>

            </div>
            <div class="col-md-1 border" >
              <select name='sel' id="sort"  onchange="" style="margin:7px 0px;border:2px solid #ECF0F1;border-radius:5px;">
                <option name="">Tanlash</option>
                <option name="s">Satr</option>
                <option name="b">Butun</option>
                <option name="h">Haqiqiy</option>
              </select>
            </div>



    <div class="col border" style="margin-right:15px!important;">
      <h4 align="center">Natija</h4>
      <input type="text" name="hiddenInput" style="visibility: hidden;" id="hiddenInput">
     <div class="col-md-6" >
           
        </div>
      </div>
  

          <div id="result">
            
          </div>
             
        </div>
      </div>
      <!---start of procces--->
      <div class="row bg m-2">
        <div class="col border">
          <button  id="birlashma" class="btn btn-primary m-1" onclick ="birlashma()" onchange="isInt()">Birlashma</button><br>
          <button  id="ayirmaA" class="btn btn-primary m-1" onclick="ayirmaA()">Ayirma A/B</button><br>
          <button  id="ayirmaB" class="btn btn-primary m-1" onclick="ayirmaB()">Ayirma B/A</button><br>
          <button  id="kesishma" class="btn btn-primary m-1" onclick="kesishma()">Kesishma</button><br>
        </div>
        <div class="col border">1</div>
      </div>
      <!---end of procces--->
  </div>

  <!--end of show-->






  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">durud</div>
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">salam</div>
</div>
<script src="assets/bottom.js"></script>
<script src="assets/bottom2.js"></script>
<script src="assets/amal.js"></script>
<script type="text/javascript">

//filter

// var inputs=document.getElementsByName("inp1");
// var admissionNumber="";
// for (var m=0;m<inputs.length;m++) {
//     admissionNumber+=inputs[m].value+" ";
//     console.log(admissionNumber);
// }
// console.log(admissionNumber);

// function getSort(){

//   let value =document.getElementById('sort').value;
//   console.log(value)
// }

//filter


  //mover
let elem = document.getElementById('hiddenInput');
let rect = elem.getBoundingClientRect();
console.log(rect.left);


let right = document.getElementById('birlashma');

right.addEventListener("click",function(){

  let elements = document.querySelectorAll('.rand1');
  //console.log("click")
  elements.forEach((element,index)=>{

    setTimeout(()=>{
      element.style.left = (parseInt(element.style.left) + rect.left -30)+"px";
    }, index* 800)
  })

let elements1 = document.querySelectorAll('.rand2');
  //console.log("click")
  elements1.forEach((element,index)=>{
    setTimeout(()=>{
      element.style.left = (parseInt(element.style.left) + rect.left -30)+"px";
    }, index* 1000)
  })
});
//mover

//mover
let ayirA = document.getElementById('ayirmaA');

ayirA.addEventListener("click",function(){

  let ayirElement = document.querySelectorAll('.rand1');
  //console.log("click")
  ayirElement.forEach((element,index)=>{

    setTimeout(()=>{
      element.style.left = (parseInt(element.style.left) + rect.left + rect.right - 970)+"px";
    }, index* 800)
  })

let ayirElement1= document.querySelectorAll('.rand2');
  //console.log("click")
  ayirElement1.forEach((element,index)=>{
    setTimeout(()=>{
      element.style.left = (parseInt(element.style.left) + rect.left + rect.right -970 )+"px";
    }, index* 1000)
  })
});
//mover

//mover



let ayirB = document.getElementById('ayirmaB');

ayirB.addEventListener("click",function(){

  let ayirBelement = document.querySelectorAll('.rand1');
  //console.log("click")
  ayirBelement.forEach((element,index)=>{

    setTimeout(()=>{
      element.style.left = (parseInt(element.style.left) + rect.left -30)+"px";
    }, index* 800)
  })

let ayirBelemen2 = document.querySelectorAll('.rand2');
  //console.log("click")
  ayirBelemen2.forEach((element,index)=>{
    setTimeout(()=>{
      element.style.left = (parseInt(element.style.left) + rect.left -30)+"px";
    }, index* 1000)
  })
});
//mover

// //mover

let kes = document.getElementById('kesishma');

kes.addEventListener("click",function(){

  let kesel = document.querySelectorAll('.rand1');
  //console.log("click")
  kesel.forEach((element,index)=>{

    setTimeout(()=>{
      element.style.left = (parseInt(element.style.left) + rect.left -30)+"px";
    }, index* 800)
  })

let kesel2 = document.querySelectorAll('.rand2');
  //console.log("click")
  kesel2.forEach((element,index)=>{
    setTimeout(()=>{
      element.style.left = (parseInt(element.style.left) + rect.left -30)+"px";
    }, index* 1000)
  })
});
//


  function rand(){

    let inp = document.querySelectorAll('#form input')
    for(let i = 0; i < inp.length; i++){
        inp[i].value = Math.floor(Math.random() * 100)
        //inp[i].value = Math.floor(Math.random() * 100)
    }
  }
  
   function inc() {

    let no = Number(document.querySelector("#r1").value);

    let frm = document.getElementById('form');
    frm.innerHTML = '';
    frm.style.height = "35px";
    for (let i = 0; i < no; i++) {
        let textfield = document.createElement("input");
        textfield.type = "text";
        textfield.id = "foo";
        textfield.name = "inp1";
        textfield.style.left = (i * 55 ) + 35 + "px";
        textfield.classList.add('rand1');
        textfield.classList.add('myAnimation'); //

        frm.append(textfield);
    }    
}

function rand2(){

let inp2 = document.querySelectorAll('#form2 input')
for(let i = 0; i < inp2.length; i++){
    inp2[i].value = Math.floor(Math.random() * 100)
    //inp[i].value = Math.floor(Math.random() * 100)
   }
}
  
   function inc2() {

    let no2 = Number(document.querySelector("#r2").value);

    let frm2 = document.getElementById('form2')
    frm2.innerHTML = ''
    frm2.style.height = "80px";
 
  for (let j = 0; j < no2; j++) {
        let textfield = document.createElement("input");
        textfield.type = "text";
        textfield.id = "foo2";
        textfield.name = "inp2";
        textfield.style.left = (j * 55 ) + 35 + "px";
        textfield.classList.add('rand2'); //myAnimation
        textfield.classList.add('myAnimation2'); //
        frm2.append(textfield);
   }    
}

//birlashma
function birlashma() {
let arrA= [];
let arrB = [];

let for1 = document.querySelectorAll('#form input');
  arrA = []
  for1.forEach((key)=>{
    arrA.push(key.value)
  }); 

  let for2 = document.querySelectorAll('#form2 input');
  arrB = []
  for2.forEach((key)=>{
    arrB.push(key.value)
  });
    let birlashma = [...new Set([...arrA, ...arrB])];



      let sort=document.getElementsByName("inp1");
      let empty="";
      for (var m=0;m<sort.length;m++) {
          empty+=sort[m].value+" ";
          
      }



      let value =document.getElementById('sort').value;
      console.log(value)

      for (i = 0; i < sort.length; i++)
      {
        if (sort[i].value != Math.ceil(sort[i].value))
        {
          console.log('Survor!');
          break;
        }
      }
   
      
      let sort2=document.getElementsByName("inp2");
      let empty2="";
      for (var n=0;n<sort2.length;n++) {
          empty2+=sort2[n].value+" ";
          
      }
      console.log(empty2);


      }
//birlashma

//upload from text
function read() {
    let text = document.getElementById('text').files[0];

    let reader = new FileReader();
    
    reader.readAsText(text);


    reader.addEventListener('load',function(){
      console.log(reader.result)
      const rows = reader.result.split("\n");

      rows.forEach((row,index)=>{
        if(index === 0){
          let frm = document.getElementById('form')
          frm.innerHTML = ''
          frm.style.height = "37px";
          row.split(" ").forEach((element, j)=>
          {
            let textfield = document.createElement("input");
            textfield.type = "text";
            textfield.id = "foo";
            textfield.style.left = (j * 55 ) + 35 + "px";
            textfield.classList.add('rand1');
            textfield.classList.add('myAnimation'); //
            textfield.value = element;
            frm.append(textfield);
          })

        }
        return; 
      })
    })  
 }

 function read2() {
    let text = document.getElementById('text2').files[0];

    let reader = new FileReader();
    
    reader.readAsText(text);


    reader.addEventListener('load',function(){
      console.log(reader.result)
      const rows = reader.result.split("\n");

      rows.forEach((row,index)=>{
        if(index === 1){
          let frm2 = document.getElementById('form2')
          frm2.innerHTML = ''
          frm2.style.height = "60px";
          row.split(" ").forEach((element, j)=>
          {
            let textfield = document.createElement("input");
            textfield.type = "text";
            textfield.id = "foo2";
            textfield.style.left = (j * 55 ) + 35 + "px";
            textfield.classList.add('rand2'); //myAnimation
            textfield.value = element;
            textfield.classList.add('myAnimation2'); //
            frm2.append(textfield);
          })

        }
        return; 
      })
    })  
 }
//upload from text

 // ayirma AB
function ayirmaA(){
let arr = []
let arr2 = []
let for1 = document.querySelectorAll('#form input')
  arr = []
  for1.forEach((key)=>{
    arr.push(key.value)
  })  

  let for2 = document.querySelectorAll('#form2 input')
  arr2 = []
  for2.forEach((key)=>{
    arr2.push(key.value)
  })  

let w = new Set(arr);
let w2 = new Set(arr2);

let ayirmaA = new Set([...w].filter(x => !w2.has(x)));
console.log(ayirmaA);


      let sort=document.getElementsByName("inp1");
      let empty="";
      for (var m=0;m<sort.length;m++) {
          empty+=sort[m].value+" ";
          
      }
      console.log(empty);
     

 


      let sort2=document.getElementsByName("inp2");
      let empty2="";
      for (var n=0;n<sort2.length;n++) {
          empty2+=sort2[n].value+" ";
          
      }
      console.log(empty2);

}
//ayirma BA
function ayirmaB() {
  let arr = []
let arr2 = []
let for1 = document.querySelectorAll('#form input')
  arr = []
  for1.forEach((key)=>{
    arr.push(key.value)
  })  

  let for2 = document.querySelectorAll('#form2 input')
  arr2 = []
  for2.forEach((key)=>{
    arr2.push(key.value)
  })  

  let w = new Set(arr);
let w2 = new Set(arr2);

let ayirmaB = new Set([...w2].filter(x => !w.has(x)));
console.log(ayirmaB);


      let sort=document.getElementsByName("inp1");
      let empty="";
      for (var m=0;m<sort.length;m++) {
          empty+=sort[m].value+" ";
          
      }
      console.log(empty);
      

      let sort2=document.getElementsByName("inp2");
      let empty2="";
      for (var n=0;n<sort2.length;n++) {
          empty2+=sort2[n].value+" ";
          
      }
      console.log(empty2);

}

function read() {
    let text = document.getElementById('text').files[0];

    let reader = new FileReader();
    
    reader.readAsText(text);


    reader.addEventListener('load',function(){
      console.log(reader.result)
      const rows = reader.result.split("\n");

      rows.forEach((row,index)=>{
        if(index === 0){
          let frm = document.getElementById('form')
          frm.innerHTML = ''
          frm.style.height = "37px";
          row.split(" ").forEach((element, j)=>
          {
            let textfield = document.createElement("input");
            textfield.type = "text";
            textfield.id = "foo";
            textfield.style.left = (j * 55 ) + 35 + "px";
            textfield.classList.add('rand1');
            textfield.classList.add('myAnimation'); //
            textfield.value = element;
            frm.append(textfield);
          })

        }
        return; 
      })
    })  
 }

 function read2() {
    let text = document.getElementById('text2').files[0];

    let reader = new FileReader();
    
    reader.readAsText(text);


    reader.addEventListener('load',function(){
      console.log(reader.result)
      const rows = reader.result.split("\n");

      rows.forEach((row,index)=>{
        if(index === 1){
          let frm2 = document.getElementById('form2')
          frm2.innerHTML = ''
          frm2.style.height = "60px";
          row.split(" ").forEach((element, j)=>
          {
            let textfield = document.createElement("input");
            textfield.type = "text";
            textfield.id = "foo2";
            textfield.style.left = (j * 55 ) + 35 + "px";
            textfield.classList.add('rand2'); //myAnimation
            textfield.value = element;
            textfield.classList.add('myAnimation2'); //
            frm2.append(textfield);
          })

        }
        return; 
      })
    })  
 }


//kesishma
function kesishma() {
  let arr = []
let arr2 = []
let for1 = document.querySelectorAll('#form input')
  arr = []
  for1.forEach((key)=>{
    arr.push(key.value)
  })  

  let for2 = document.querySelectorAll('#form2 input')
  arr2 = []
  for2.forEach((key)=>{
    arr2.push(key.value)
  })  
  
  let kesishma = arr.filter(x => arr2.includes(x));
  console.log(kesishma);


      let sort=document.getElementsByName("inp1");
      let empty="";
      for (var m=0;m<sort.length;m++) {
          empty+=sort[m].value+" ";
          
      }
      console.log(empty);
      

      let sort2=document.getElementsByName("inp2");
      let empty2="";
      for (var n=0;n<sort2.length;n++) {
          empty2+=sort2[n].value+" ";
          
      }
      console.log(empty2);

}

function read() {
    let text = document.getElementById('text').files[0];

    let reader = new FileReader();
    
    reader.readAsText(text);


    reader.addEventListener('load',function(){
      console.log(reader.result)
      const rows = reader.result.split("\n");

      rows.forEach((row,index)=>{
        if(index === 0){
          let frm = document.getElementById('form')
          frm.innerHTML = ''
          frm.style.height = "37px";
          row.split(" ").forEach((element, j)=>
          {
            let textfield = document.createElement("input");
            textfield.type = "text";
            textfield.id = "foo";
            textfield.style.left = (j * 55 ) + 35 + "px";
            textfield.classList.add('rand1');
            textfield.classList.add('myAnimation'); //
            textfield.value = element;
            frm.append(textfield);
          })

        }
        return; 
      })
    })  
 }

 function read2() {
    let text = document.getElementById('text2').files[0];

    let reader = new FileReader();
    
    reader.readAsText(text);


    reader.addEventListener('load',function(){
      console.log(reader.result)
      const rows = reader.result.split("\n");

      rows.forEach((row,index)=>{
        if(index === 1){
          let frm2 = document.getElementById('form2')
          frm2.innerHTML = ''
          frm2.style.height = "60px";
          row.split(" ").forEach((element, j)=>
          {
            let textfield = document.createElement("input");
            textfield.type = "text";
            textfield.id = "foo2";
            textfield.style.left = (j * 55 ) + 35 + "px";
            textfield.classList.add('rand2'); //myAnimation
            textfield.value = element;
            textfield.classList.add('myAnimation2'); //
            frm2.append(textfield);
          })

        }
        return; 
      })
    })  
 }





</script>
</body>
</html

//////
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
    <link href="assets/style.css" rel="stylesheet"  crossorigin="anonymous">
    <script src="assets/head.js" crossorigin="anonymous"></script>
    <link href="assets/self.css" rel="stylesheet">
</head>
<body>


<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</button>
    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <!--begining of show-->
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

     <div id="container">
      <div class="row bg">

        <div class="col border" style="margin-left:15px!important;">
          <!--begining of random 1-->
              <input type="number" id="r1" class="border m-2" min="1" max="12" placeholder="0"  oninput="inc()">
              <button class="button btn-warning border-0 m-2" onclick="rand()">Tasodifiy</button>
              <input type="file" onchange="read()" id="text">
              <form id="form">
              </form>
          <!--end of random 1-->
          <!--begining of random 2-->
              <input type="number" id="r2" class="border m-2" min="1" max="12" placeholder="0"  oninput="inc2()">
              <button class="button btn-warning border-0 m-2" onclick="rand2()">Tasodifiy</button>
              <input type="file"  onchange="read2()" id="text2">
              <form id="form2">
              </form>
            </div>


    <div class="col border" style="margin-right:15px!important;">
      <h4 align="center">Natija</h4>
      <input type="text" name="hiddenInput" style="visibility: hidden;" id="hiddenInput">
     <div class="col-md-6" >
           
        </div>
      </div>
  

          <div id="result">
            
          </div>
             
        </div>
      </div>
      <!---start of procces--->
      <div class="row bg m-2">
        <div class="col border">
          <button  id="birlashma" class="btn btn-primary m-1" onclick="birlashma()" onchange="read()">Birlashma</button><br>
          <button  id="ayirmaA" class="btn btn-primary m-1" onclick="ayirmaA()">Ayirma A/B</button><br>
          <button  id="ayirmaB" class="btn btn-primary m-1" onclick="ayirmaB()">Ayirma B/A</button><br>
          <button  id="kesishma" class="btn btn-primary m-1" onclick="kesishma()">Kesishma</button><br>
        </div>
        <div class="col border">1</div>
      </div>
      <!---end of procces--->
  </div>

  <!--end of show-->






  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">durud</div>
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">salam</div>
</div>
<script src="assets/bottom.js"></script>
<script src="assets/bottom2.js"></script>
<script src="assets/amal.js"></script>
<script type="text/javascript">


// let elem1 = document.getElementById('hiddenInput');
// let rect = elem1.getBoundingClientRect();
// console.log(rect.left);


// let right = document.getElementById('birlashma');

// right.addEventListener("click",function(){

//   let elements = document.querySelectorAll('.rand1');
//   //console.log("click")
//   elements.forEach((element,index)=>{
//     setTimeout(()=>{
//       element.style.left = (parseInt(element.style.left) + rect.left -30)+"px";
//     }, index* 800)
//   })

// let elements1 = document.querySelectorAll('.rand2');
//   //console.log("click")
//   elements1.forEach((element,index)=>{
//     setTimeout(()=>{
//       element.style.left = (parseInt(element.style.left) + rect.left -30)+"px";
//     }, index* 1600)
//   })
// });




  function rand(){

    let inp = document.querySelectorAll('#form input')
    for(let i = 0; i < inp.length; i++){
        inp[i].value = Math.floor(Math.random() * 100)
        //inp[i].value = Math.floor(Math.random() * 100)
    }
  }
  
   function inc() {

    let no = Number(document.querySelector("#r1").value);

    let frm = document.getElementById('form');
    frm.innerHTML = '';
    frm.style.height = "35px";
    for (let i = 0; i < no; i++) {
        let textfield = document.createElement("input");
        textfield.type = "text";
        textfield.id = "foo";
        textfield.style.left = (i * 55 ) + 35 + "px";
        textfield.classList.add('rand1');
        textfield.classList.add('myAnimation'); //

        frm.append(textfield);
    }    
}

function rand2(){

let inp2 = document.querySelectorAll('#form2 input')
for(let i = 0; i < inp2.length; i++){
    inp2[i].value = Math.floor(Math.random() * 100)
    //inp[i].value = Math.floor(Math.random() * 100)
   }
}
  
   function inc2() {

    let no2 = Number(document.querySelector("#r2").value);

    let frm2 = document.getElementById('form2')
    frm2.innerHTML = ''
    frm2.style.height = "37px";
 
  for (let j = 0; j < no2; j++) {
        let textfield = document.createElement("input");
        textfield.type = "text";
        textfield.id = "foo2";
        textfield.style.left = (j * 55 ) + 35 + "px";
        textfield.classList.add('rand2'); //myAnimation
        textfield.classList.add('myAnimation2'); //
        frm2.append(textfield);
   }    
}

//birlashma
function birlashma() {
let arrA= [];
let arrB = [];

let for1 = document.querySelectorAll('#form input');
  arrA = []
  for1.forEach((key)=>{
    arrA.push(key.value)
  }); 

  let for2 = document.querySelectorAll('#form2 input');
  arrB = []
  for2.forEach((key)=>{
    arrB.push(key.value)
  });
    let birlashma = [...new Set([...arrA, ...arrB])];
}


let elem1 = document.getElementById('hiddenInput');
let rect = elem1.getBoundingClientRect();
console.log(rect.left);


let right = document.getElementById('birlashma');

right.addEventListener("click",function(){

  let elements = document.querySelectorAll('.rand1');
  //console.log("click")
  elements.forEach((element,index)=>{
    setTimeout(()=>{
      element.style.left = (parseInt(element.style.left) + rect.left -30)+"px";
    }, index* 800)
  })

let elements1 = document.querySelectorAll('.rand2');
  //console.log("click")
  elements1.forEach((element,index)=>{
    setTimeout(()=>{
      element.style.left = (parseInt(element.style.left) + rect.left -30)+"px";
    }, index* 1600)
  })
});



function read() {
    let text = document.getElementById('text').files[0];

    let reader = new FileReader();
    
    reader.readAsText(text);


    reader.addEventListener('load',function(){
      console.log(reader.result)
      const rows = reader.result.split("\n");

      rows.forEach((row,index)=>{
        if(index === 0){
          let frm = document.getElementById('form')
          frm.innerHTML = ''
          frm.style.height = "37px";
          row.split(" ").forEach((element, j)=>
          {
            let textfield = document.createElement("input");
            textfield.type = "text";
            textfield.id = "foo";
            textfield.style.left = (j * 55 ) + 35 + "px";
            textfield.classList.add('rand1');
            textfield.classList.add('myAnimation'); //
            textfield.value = element;
            frm.append(textfield);
          })

        }
        return; 
      })
    })  
 }

 function read2() {
    let text = document.getElementById('text2').files[0];

    let reader = new FileReader();
    
    reader.readAsText(text);


    reader.addEventListener('load',function(){
      console.log(reader.result)
      const rows = reader.result.split("\n");

      rows.forEach((row,index)=>{
        if(index === 1){
          let frm2 = document.getElementById('form2')
          frm2.innerHTML = ''
          frm2.style.height = "60px";
          row.split(" ").forEach((element, j)=>
          {
            let textfield = document.createElement("input");
            textfield.type = "text";
            textfield.id = "foo2";
            textfield.style.left = (j * 55 ) + 35 + "px";
            textfield.classList.add('rand2'); //myAnimation
            textfield.value = element;
            textfield.classList.add('myAnimation2'); //
            frm2.append(textfield);
          })

        }
        return; 
      })
    })  
 }


 // ayirma AB
function ayirmaA(){
let arr = []
let arr2 = []
let for1 = document.querySelectorAll('#form input')
  arr = []
  for1.forEach((key)=>{
    arr.push(key.value)
  })  

  let for2 = document.querySelectorAll('#form2 input')
  arr2 = []
  for2.forEach((key)=>{
    arr2.push(key.value)
  })  

let w = new Set(arr);
let w2 = new Set(arr2);

let ayirmaA = new Set([...w].filter(x => !w2.has(x)));
console.log(ayirmaA);



let elem1 = document.getElementById('hiddenInput');
let rect = elem1.getBoundingClientRect();
console.log(rect.left);


let right = document.getElementById('birlashma');

right.addEventListener("click",function(){

  let elements = document.querySelectorAll('.rand1');
  //console.log("click")
  elements.forEach((element,index)=>{
    setTimeout(()=>{
      element.style.left = (parseInt(element.style.left) + rect.left -30)+"px";
    }, index* 800)
  })

let elements1 = document.querySelectorAll('.rand2');
  //console.log("click")
  elements1.forEach((element,index)=>{
    setTimeout(()=>{
      element.style.left = (parseInt(element.style.left) + rect.left -30)+"px";
    }, index* 800)
  })
});



function read() {
    let text = document.getElementById('text').files[0];

    let reader = new FileReader();
    
    reader.readAsText(text);


    reader.addEventListener('load',function(){
      console.log(reader.result)
      const rows = reader.result.split("\n");

      rows.forEach((row,index)=>{
        if(index === 0){
          let frm = document.getElementById('form')
          frm.innerHTML = ''
          frm.style.height = "37px";
          row.split(" ").forEach((element, j)=>
          {
            let textfield = document.createElement("input");
            textfield.type = "text";
            textfield.id = "foo";
            textfield.style.left = (j * 55 ) + 35 + "px";
            textfield.classList.add('rand1');
            textfield.classList.add('myAnimation'); //
            textfield.value = element;
            frm.append(textfield);
          })

        }
        return; 
      })
    })
}
//ayirma BA
function ayirmaB() {
  let arr = []
let arr2 = []
let for1 = document.querySelectorAll('#form input')
  arr = []
  for1.forEach((key)=>{
    arr.push(key.value)
  })  

  let for2 = document.querySelectorAll('#form2 input')
  arr2 = []
  for2.forEach((key)=>{
    arr2.push(key.value)
  })  

  let w = new Set(arr);
let w2 = new Set(arr2);

let ayirmaB = new Set([...w2].filter(x => !w.has(x)));
console.log(ayirmaB);
}

//kesishma
function kesishma() {
  let arr = []
let arr2 = []
let for1 = document.querySelectorAll('#form input')
  arr = []
  for1.forEach((key)=>{
    arr.push(key.value)
  })  

  let for2 = document.querySelectorAll('#form2 input')
  arr2 = []
  for2.forEach((key)=>{
    arr2.push(key.value)
  })  
  
  let kesishma = arr.filter(x => arr2.includes(x));
  console.log(kesishma);
}




</script>
</body>
</html

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
    <link href="assets/style.css" rel="stylesheet"  crossorigin="anonymous">
    <script src="assets/head.js" crossorigin="anonymous"></script>
    <link href="assets/self.css" rel="stylesheet">
</head>
<body>


<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</button>
    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <!--begining of show-->
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

     <div id="container">
      <div class="row bg">
        <div class="col border" style="margin-left:15px!important;">
          <!--begining of random 1-->
              <input type="number" id="r1" class="border m-2" min="1" max="12" placeholder="0"  oninput="inc()">
              <button class="button btn-warning border-0 m-2" onclick="rand()">Tasodifiy</button>
              <input type="file" onchange="read()" id="text">
              <form id="form">

              </form>
          <!--end of random 1-->
          <!--begining of random 2-->
              <input type="number" id="r2" class="border m-2" min="1" max="12" placeholder="0"  oninput="inc2()">
              <button class="button btn-warning border-0 m-2" onclick="rand2()">Tasodifiy</button>
              <input type="file"  onchange="read2()" id="text2">
              <form id="form2">
              </form>
            </div>



    <div class="col border" style="margin-right:15px!important;">
      <h4 align="center">Natija</h4>
      <input type="text" name="hiddenInput" style="visibility: hidden;" id="hiddenInput">
     <div class="col-md-6" >
           
        </div>
      </div>
  

          <div id="result">
            
          </div>
             
        </div>
      </div>
      <!---start of procces--->
      <div class="row bg m-2">
        <div class="col border">
          <button  id="birlashma" class="btn btn-primary m-1" onclick="birlashma()" onchange="read()">Birlashma</button><br>
          <button  id="ayirmaA" class="btn btn-primary m-1" onclick="ayirmaA()">Ayirma A/B</button><br>
          <button  id="ayirmaB" class="btn btn-primary m-1" onclick="ayirmaB()">Ayirma B/A</button><br>
          <button  id="kesishma" class="btn btn-primary m-1" onclick="kesishma()">Kesishma</button><br>
        </div>
        <div class="col border">1</div>
      </div>
      <!---end of procces--->
  </div>

  <!--end of show-->






  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">durud</div>
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">salam</div>
</div>
<script src="assets/bottom.js"></script>
<script src="assets/bottom2.js"></script>
<script src="assets/amal.js"></script>
<script type="text/javascript">


let elem1 = document.getElementById('hiddenInput');
let rect = elem1.getBoundingClientRect();
console.log(rect.left);


let right = document.getElementById('birlashma');

right.addEventListener("click",function(){

  let elements = document.querySelectorAll('.rand1');
  //console.log("click")
  elements.forEach((element,index)=>{
    setTimeout(()=>{
      element.style.left = (parseInt(element.style.left) + rect.left -30)+"px";
    }, index* 800)
  })

let elements1 = document.querySelectorAll('.rand2');
  //console.log("click")
  elements1.forEach((element,index)=>{
    setTimeout(()=>{
      element.style.left = (parseInt(element.style.left) + rect.left -30)+"px";
    }, index* 1000)
  })
});




  function rand(){

    let inp = document.querySelectorAll('#form input')
    for(let i = 0; i < inp.length; i++){
        inp[i].value = Math.floor(Math.random() * 100)
        //inp[i].value = Math.floor(Math.random() * 100)
    }
  }
  
   function inc() {

    let no = Number(document.querySelector("#r1").value);

    let frm = document.getElementById('form');
    frm.innerHTML = '';
    frm.style.height = "35px";
    for (let i = 0; i < no; i++) {
        let textfield = document.createElement("input");
        textfield.type = "text";
        textfield.id = "foo";
        textfield.style.left = (i * 55 ) + 35 + "px";
        textfield.classList.add('rand1');
        textfield.classList.add('myAnimation'); //

        frm.append(textfield);
    }    
}

function rand2(){

let inp2 = document.querySelectorAll('#form2 input')
for(let i = 0; i < inp2.length; i++){
    inp2[i].value = Math.floor(Math.random() * 100)
    //inp[i].value = Math.floor(Math.random() * 100)
   }
}
  
   function inc2() {

    let no2 = Number(document.querySelector("#r2").value);

    let frm2 = document.getElementById('form2')
    frm2.innerHTML = ''
    frm2.style.height = "37px";
 
  for (let j = 0; j < no2; j++) {
        let textfield = document.createElement("input");
        textfield.type = "text";
        textfield.id = "foo2";
        textfield.style.left = (j * 55 ) + 35 + "px";
        textfield.classList.add('rand2'); //myAnimation
        textfield.classList.add('myAnimation2'); //
        frm2.append(textfield);
   }    
}

//birlashma
function birlashma() {
let arrA= [];
let arrB = [];

let for1 = document.querySelectorAll('#form input');
  arrA = []
  for1.forEach((key)=>{
    arrA.push(key.value)
  }); 

  let for2 = document.querySelectorAll('#form2 input');
  arrB = []
  for2.forEach((key)=>{
    arrB.push(key.value)
  });
    let birlashma = [...new Set([...arrA, ...arrB])];
}

function read() {
    let text = document.getElementById('text').files[0];

    let reader = new FileReader();
    
    reader.readAsText(text);


    reader.addEventListener('load',function(){
      console.log(reader.result)
      const rows = reader.result.split("\n");

      rows.forEach((row,index)=>{
        if(index === 0){
          let frm = document.getElementById('form')
          frm.innerHTML = ''
          frm.style.height = "37px";
          row.split(" ").forEach((element, j)=>
          {
            let textfield = document.createElement("input");
            textfield.type = "text";
            textfield.id = "foo";
            textfield.style.left = (j * 55 ) + 35 + "px";
            textfield.classList.add('rand1');
            textfield.classList.add('myAnimation'); //
            textfield.value = element;
            frm.append(textfield);
          })

        }
        return; 
      })
    })  
 }

 function read2() {
    let text = document.getElementById('text2').files[0];

    let reader = new FileReader();
    
    reader.readAsText(text);


    reader.addEventListener('load',function(){
      console.log(reader.result)
      const rows = reader.result.split("\n");

      rows.forEach((row,index)=>{
        if(index === 1){
          let frm2 = document.getElementById('form2')
          frm2.innerHTML = ''
          frm2.style.height = "60px";
          row.split(" ").forEach((element, j)=>
          {
            let textfield = document.createElement("input");
            textfield.type = "text";
            textfield.id = "foo2";
            textfield.style.left = (j * 55 ) + 35 + "px";
            textfield.classList.add('rand2'); //myAnimation
            textfield.value = element;
            textfield.classList.add('myAnimation2'); //
            frm2.append(textfield);
          })

        }
        return; 
      })
    })  
 }


 // ayirma AB
function ayirmaA(){
let arr = []
let arr2 = []
let for1 = document.querySelectorAll('#form input')
  arr = []
  for1.forEach((key)=>{
    arr.push(key.value)
  })  

  let for2 = document.querySelectorAll('#form2 input')
  arr2 = []
  for2.forEach((key)=>{
    arr2.push(key.value)
  })  

let w = new Set(arr);
let w2 = new Set(arr2);

let ayirmaA = new Set([...w].filter(x => !w2.has(x)));
console.log(ayirmaA);
}
//ayirma BA
function ayirmaB() {
  let arr = []
let arr2 = []
let for1 = document.querySelectorAll('#form input')
  arr = []
  for1.forEach((key)=>{
    arr.push(key.value)
  })  

  let for2 = document.querySelectorAll('#form2 input')
  arr2 = []
  for2.forEach((key)=>{
    arr2.push(key.value)
  })  

  let w = new Set(arr);
let w2 = new Set(arr2);

let ayirmaB = new Set([...w2].filter(x => !w.has(x)));
console.log(ayirmaB);
}

//kesishma
function kesishma() {
  let arr = []
let arr2 = []
let for1 = document.querySelectorAll('#form input')
  arr = []
  for1.forEach((key)=>{
    arr.push(key.value)
  })  

  let for2 = document.querySelectorAll('#form2 input')
  arr2 = []
  for2.forEach((key)=>{
    arr2.push(key.value)
  })  
  
  let kesishma = arr.filter(x => arr2.includes(x));
  console.log(kesishma);
}




</script>
</body>
</html






// let arr = []
// let arr2 = [] 
// function getText() {
//   let for1 = document.querySelectorAll('#form input')
//   arr = []
//   for1.forEach((key)=>{
//     arr.push(key.value)
//   })  
//   console.log(arr);

//   let for2 = document.querySelectorAll('#form2 input')
//   arr2 = []
//   for2.forEach((key)=>{
//     arr2.push(key.value)
//   })  
//   console.log(arr2);     
// }

// document.getElementById('birlashma').addEventListener('click', function() {
  
//     let elements = document.querySelectorAll(".rand1");
            
//             for (let i = 0; i < elements.length; i++) { 
//                setTimeout(()=>{
//                 let items = elements[i];
//                 myMove(items);
//               }, i*500) 
//             }
      
 

//         let elements2 = document.querySelectorAll(".rand2");
            
//             for (let j = 0; j < elements2.length; j++) { 
//               setTimeout(()=>{
//           let items2 = elements2[j];
//           myMove(items2);
//               }, j*300) 
//             }


// })
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
    <link href="assets/style.css" rel="stylesheet"  crossorigin="anonymous">
    <script src="assets/head.js" crossorigin="anonymous"></script>
    <link href="assets/self.css" rel="stylesheet">
</head>
<body>


<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</button>
    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <!--begining of show-->
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

     <div id="container">
      <div class="row bg">
        <div class="col border" style="margin-left:15px!important;">
          <!--begining of random 1-->
              <input type="number" id="r1" class="border m-2" min="1" max="100" placeholder="0"  oninput="inc()">
              <button class="button btn-warning border-0 m-2" onclick="rand()">Tasodifiy</button>
              <form id="form">
              </form>
          <!--end of random 1-->
          <!--begining of random 2-->
              <input type="number" id="r2" class="border m-2" min="1" max="100" placeholder="0"  oninput="inc2()">
              <button class="button btn-warning border-0 m-2" onclick="rand2()">Tasodifiy</button>
              <form id="form2">
              </form>
            </div>



    <div class="col border" style="margin-right:15px!important;">
      <input type="text" name="hiddenInput" style="visibility: hidden;" id="hiddenInput">
     <div class="col-md-6" >
           natija
        </div>
      </div>
  

          <div id="result">
            
          </div>
             
        </div>
      </div>
      <!---start of procces--->
      <div class="row bg m-2">
        <div class="col border">
          <button  id="birlashma" class="btn btn-primary m-1" onclick="birlashma()">Birlashma</button><br>
          <button  id="ayirmaA" class="btn btn-primary m-1" onclick="ayirmaA()">Ayirma A/B</button><br>
          <button  id="ayirmaB" class="btn btn-primary m-1" onclick="ayirmaB()">Ayirma B/A</button><br>
          <button  id="kesishma" class="btn btn-primary m-1" onclick="kesishma()">Kesishma</button><br>
        </div>
        <div class="col border">1</div>
      </div>
      <!---end of procces--->
  </div>

  <!--end of show-->






  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">durud</div>
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">salam</div>
</div>
<script src="assets/bottom.js"></script>
<script src="assets/bottom2.js"></script>
<script src="assets/amal.js"></script>
<script type="text/javascript">


let elem1 = document.getElementById('hiddenInput');
let rect = elem1.getBoundingClientRect();
console.log("x: "+ );
console.log("y: "+ rect.y);


let right = document.getElementById('birlashma');

right.addEventListener("click",function(){

  let elements = document.querySelectorAll('.rand1');
  console.log("click")
  elements.forEach((element,index)=>{
    setTimeout(()=>{
      element.style.left = (parseInt(element.style.left) + rect.left)+"px";
    }, index* 800)
  })


  // let pos = parseInt(window.getComputedStyle(redBox,null).getPropertyValue("left"), 10);
  // let move = pos + 40;
  // redBox.style.left = move + 'px';
});




function rand(){

let inp = document.querySelectorAll('#form input')
for(let i = 0; i < inp.length; i++){
    inp[i].value = Math.floor(Math.random() * 100)
    //inp[i].value = Math.floor(Math.random() * 100)
}
}
  
   function inc() {

    let no = Number(document.querySelector("#r1").value);

    let frm = document.getElementById('form');
    frm.innerHTML = '';
    frm.style.height = "35px";
    for (let i = 0; i < no; i++) {
        let textfield = document.createElement("input");
        textfield.type = "text";
        textfield.id = "foo";
        textfield.style.left = (i * 55 ) + 35 + "px";

        textfield.onclick = function () {
            myMove();
        };
        textfield.classList.add('rand1');
        textfield.classList.add('myAnimation'); //

        frm.append(textfield);


   }    
}

function rand2(){

let inp2 = document.querySelectorAll('#form2 input')
for(let i = 0; i < inp2.length; i++){
    inp2[i].value = Math.floor(Math.random() * 100)
    //inp[i].value = Math.floor(Math.random() * 100)
   }
}
  
   function inc2() {

    let no2 = Number(document.querySelector("#r2").value);

    let frm2 = document.getElementById('form2')
    frm2.innerHTML = ''
 
  for (let j = 0; j < no2; j++) {
        let textfield = document.createElement("input");
        textfield.type = "text";
        textfield.id = "foo2";
        textfield.classList.add('rand2'); //myAnimation
        textfield.classList.add('myAnimation2'); //

        frm2.append(textfield);
   }    
}


// let arr = []
// let arr2 = [] 
// function getText() {
//   let for1 = document.querySelectorAll('#form input')
//   arr = []
//   for1.forEach((key)=>{
//     arr.push(key.value)
//   })  
//   console.log(arr);

//   let for2 = document.querySelectorAll('#form2 input')
//   arr2 = []
//   for2.forEach((key)=>{
//     arr2.push(key.value)
//   })  
//   console.log(arr2);     
// }

// document.getElementById('birlashma').addEventListener('click', function() {
  
//     let elements = document.querySelectorAll(".rand1");
            
//             for (let i = 0; i < elements.length; i++) { 
//                setTimeout(()=>{
//                 let items = elements[i];
//                 myMove(items);
//               }, i*500) 
//             }
      
 

//         let elements2 = document.querySelectorAll(".rand2");
            
//             for (let j = 0; j < elements2.length; j++) { 
//               setTimeout(()=>{
//           let items2 = elements2[j];
//           myMove(items2);
//               }, j*300) 
//             }


// })

document.getElementById('ayirmaA').addEventListener('click', function() {
  
      


})

document.getElementById('ayirmaB').addEventListener('click', function() {
  
    


})

document.getElementById('kesishma').addEventListener('click', function() {
  
    


})


//birlashma
function birlashma() {
let arrA= [];
let arrB = [];

let for1 = document.querySelectorAll('#form input');
  arrA = []
  for1.forEach((key)=>{
    arrA.push(key.value)
  }); 

  let for2 = document.querySelectorAll('#form2 input');
  arrB = []
  for2.forEach((key)=>{
    arrB.push(key.value)
  });
    let birlashma = [...new Set([...arrA, ...arrB])];
     let div = document.getElementById("result"); 
      for(let l=0;l < birlashma.length; l++){
           
           birlashma[l];

           //div.append(birlashma[l]);

      }


}
 
 // ayirma AB
function ayirmaA(){
let arr = []
let arr2 = []
let for1 = document.querySelectorAll('#form input')
  arr = []
  for1.forEach((key)=>{
    arr.push(key.value)
  })  

  let for2 = document.querySelectorAll('#form2 input')
  arr2 = []
  for2.forEach((key)=>{
    arr2.push(key.value)
  })  

let w = new Set(arr);
let w2 = new Set(arr2);

let ayirmaA = new Set([...w].filter(x => !w2.has(x)));
console.log(ayirmaA);
}
//ayirma BA
function ayirmaB() {
  let arr = []
let arr2 = []
let for1 = document.querySelectorAll('#form input')
  arr = []
  for1.forEach((key)=>{
    arr.push(key.value)
  })  

  let for2 = document.querySelectorAll('#form2 input')
  arr2 = []
  for2.forEach((key)=>{
    arr2.push(key.value)
  })  

  let w = new Set(arr);
let w2 = new Set(arr2);

let ayirmaB = new Set([...w2].filter(x => !w.has(x)));
console.log(ayirmaB);
}

//kesishma
function kesishma() {
  let arr = []
let arr2 = []
let for1 = document.querySelectorAll('#form input')
  arr = []
  for1.forEach((key)=>{
    arr.push(key.value)
  })  

  let for2 = document.querySelectorAll('#form2 input')
  arr2 = []
  for2.forEach((key)=>{
    arr2.push(key.value)
  })  
  
  let kesishma = arr.filter(x => arr2.includes(x));
  console.log(kesishma);
}




</script>
</body>
</html

//07/05

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
    <link href="assets/style.css" rel="stylesheet"  crossorigin="anonymous">
    <script src="assets/head.js" crossorigin="anonymous"></script>
    <link href="assets/self.css" rel="stylesheet">
</head>
<body>


<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</button>
    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <!--begining of show-->
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

     <div id="container">
      <div class="row bg">
        <div class="col border" style="margin-left:15px!important;">
          <!--begining of random 1-->
              <input type="number" id="r1" class="border m-2" min="1" max="100" placeholder="0"  oninput="inc()">
              <button class="button btn-warning border-0 m-2" onclick="rand()">Tasodifiy</button>
              <form id="form">
              </form>
          <!--end of random 1-->
          <!--begining of random 2-->
              <input type="number" id="r2" class="border m-2" min="1" max="100" placeholder="0"  oninput="inc2()">
              <button class="button btn-warning border-0 m-2" onclick="rand2()">Tasodifiy</button>
              <form id="form2">
              </form>
            </div>



        <div class="col border" style="margin-right:15px!important;">

     <div class="col-md-6" >
       <div id="myContainer">
        <h1 id="lab1"></h1>
        <div id="t1" class="myAnimation" style="border: 1px solid #ececec; width: 100%; height:auto; margin: 10px 0px;padding: 10px;">
        </div>
        </div>

        <div id="myContainer2">
        <h1 id="lab1"></h1>
        <div id="t2" class="myAnimation2" style="border: 1px solid #ececec; width: 100%; height:auto; margin: 10px 0px; padding: 10px;">
        </div>
        </div>

        <div id="myContainer3">
        <h1 id="lab1"></h1>
        <div id="t3" class="myAnimatio3" style="border: 1px solid #ececec; width: 100%; height:auto; margin: 10px 0px; padding: 10px;">
        </div>
        </div>
      </div>
  

          <div id="result">
            
          </div>
             
        </div>
      </div>
      <!---start of procces--->
      <div class="row bg m-2">
        <div class="col border">
          <button  id="birlashma" class="btn btn-primary m-1" onclick="birlashma()">Birlashma</button><br>
          <button  id="ayirmaA" class="btn btn-primary m-1" onclick="ayirmaA()">Ayirma A/B</button><br>
          <button  id="ayirmaB" class="btn btn-primary m-1" onclick="ayirmaB()">Ayirma B/A</button><br>
          <button  id="kesishma" class="btn btn-primary m-1" onclick="kesishma()">Kesishma</button><br>
        </div>
        <div class="col border">1</div>
      </div>
      <!---end of procces--->

     </div>
  </div>

  <!--end of show-->






  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">durud</div>
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">salam</div>
</div>
<script src="assets/bottom.js"></script>
<script src="assets/bottom2.js"></script>
<script src="assets/amal.js"></script>
<script type="text/javascript">
function rand(){

let inp = document.querySelectorAll('#form input')
for(let i = 0; i < inp.length; i++){
    inp[i].value = Math.floor(Math.random() * 100)
    //inp[i].value = Math.floor(Math.random() * 100)
}
}
  
   function inc() {

    let no = Number(document.querySelector("#r1").value);

    let frm = document.getElementById('form');
    frm.innerHTML = '';
 
  for (let i = 0; i < no; i++) {
        let textfield = document.createElement("input");
        textfield.type = "text";
        textfield.id = "foo";
        textfield.onclick = function () {
            myMove();
        };
        textfield.classList.add('rand1');
        textfield.classList.add('myAnimation'); //

        frm.append(textfield);


   }    
}

function rand2(){

let inp2 = document.querySelectorAll('#form2 input')
for(let i = 0; i < inp2.length; i++){
    inp2[i].value = Math.floor(Math.random() * 100)
    //inp[i].value = Math.floor(Math.random() * 100)
   }
}
  
   function inc2() {

    let no2 = Number(document.querySelector("#r2").value);

    let frm2 = document.getElementById('form2')
    frm2.innerHTML = ''
 
  for (let j = 0; j < no2; j++) {
        let textfield = document.createElement("input");
        textfield.type = "text";
        textfield.id = "foo2";
        textfield.classList.add('rand2'); //myAnimation
        textfield.classList.add('myAnimation2'); //

        frm2.append(textfield);
   }    
}


// let arr = []
// let arr2 = [] 
// function getText() {
//   let for1 = document.querySelectorAll('#form input')
//   arr = []
//   for1.forEach((key)=>{
//     arr.push(key.value)
//   })  
//   console.log(arr);

//   let for2 = document.querySelectorAll('#form2 input')
//   arr2 = []
//   for2.forEach((key)=>{
//     arr2.push(key.value)
//   })  
//   console.log(arr2);     
// }

document.getElementById('birlashma').addEventListener('click', function() {
  
    let elements = document.querySelectorAll(".rand1");
            
            for (let i = 0; i < elements.length; i++) { 
               setTimeout(()=>{
                let items = elements[i];
                myMove(items);
              }, i*500) 
            }
      
 

        let elements2 = document.querySelectorAll(".rand2");
            
            for (let j = 0; j < elements2.length; j++) { 
              setTimeout(()=>{
          let items2 = elements2[j];
          myMove(items2);
              }, j*300) 
            }


})

document.getElementById('ayirmaA').addEventListener('click', function() {
  
      


})

document.getElementById('ayirmaB').addEventListener('click', function() {
  
    


})

document.getElementById('kesishma').addEventListener('click', function() {
  
    


})


//birlashma
function birlashma() {
let arrA= [];
let arrB = [];

let for1 = document.querySelectorAll('#form input');
  arrA = []
  for1.forEach((key)=>{
    arrA.push(key.value)
  }); 

  let for2 = document.querySelectorAll('#form2 input');
  arrB = []
  for2.forEach((key)=>{
    arrB.push(key.value)
  });
    let birlashma = [...new Set([...arrA, ...arrB])];
     let div = document.getElementById("result"); 
      for(let l=0;l < birlashma.length; l++){
           
           birlashma[l];

           //div.append(birlashma[l]);

      }


}
 
 // ayirma AB
function ayirmaA(){
let arr = []
let arr2 = []
let for1 = document.querySelectorAll('#form input')
  arr = []
  for1.forEach((key)=>{
    arr.push(key.value)
  })  

  let for2 = document.querySelectorAll('#form2 input')
  arr2 = []
  for2.forEach((key)=>{
    arr2.push(key.value)
  })  

let w = new Set(arr);
let w2 = new Set(arr2);

let ayirmaA = new Set([...w].filter(x => !w2.has(x)));
console.log(ayirmaA);
}
//ayirma BA
function ayirmaB() {
  let arr = []
let arr2 = []
let for1 = document.querySelectorAll('#form input')
  arr = []
  for1.forEach((key)=>{
    arr.push(key.value)
  })  

  let for2 = document.querySelectorAll('#form2 input')
  arr2 = []
  for2.forEach((key)=>{
    arr2.push(key.value)
  })  

  let w = new Set(arr);
let w2 = new Set(arr2);

let ayirmaB = new Set([...w2].filter(x => !w.has(x)));
console.log(ayirmaB);
}

//kesishma
function kesishma() {
  let arr = []
let arr2 = []
let for1 = document.querySelectorAll('#form input')
  arr = []
  for1.forEach((key)=>{
    arr.push(key.value)
  })  

  let for2 = document.querySelectorAll('#form2 input')
  arr2 = []
  for2.forEach((key)=>{
    arr2.push(key.value)
  })  
  
  let kesishma = arr.filter(x => arr2.includes(x));
  console.log(kesishma);
}



let elem = '';
  function myMove(elem) {
    var id = null;
    var pos = 0;
    //clearInterval(id);
    id = setInterval(frame,0);

    function frame() {
      if (pos == 245) {
        clearInterval(id);
      } else {
        pos++;
        elem.style.top = pos + 'px';
        elem.style.right = pos + 'px';
        //elem.style.left=0+'px';

        elem.style.background = '#157347';
        elem.style.border = 0;
        elem.style.boxShadow = '0 0 0 #157347';
        elem.style.color = '#fff';
        //lem.style.marginRight=10;
        //elem.style.animationFimingunction: linear;
      }
    }
  }



</script>
</body>
</html
// 07/05
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
    <link href="assets/style.css" rel="stylesheet"  crossorigin="anonymous">
    <script src="assets/head.js" crossorigin="anonymous"></script>
    <link href="assets/self.css" rel="stylesheet">
</head>
<body>


<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</button>
    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
	<!--begining of show-->
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

     <div id="container">
     	<div class="row bg">
     		<div class="col border" style="margin-left:15px!important;">
          <!--begining of random 1-->
              <input type="number" id="r1" class="border m-2" min="1" max="100" placeholder="0"  oninput="inc()">
              <button class="button btn-warning border-0 m-2" onclick="rand()">Tasodifiy</button>
              <form id="form">
              </form>
          <!--end of random 1-->
          <!--begining of random 2-->
              <input type="number" id="r2" class="border m-2" min="1" max="100" placeholder="0"  oninput="inc2()">
              <button class="button btn-warning border-0 m-2" onclick="rand2()">Tasodifiy</button>
              <form id="form2">
              </form>
            </div>



     		<div class="col border" style="margin-right:15px!important;">Natija
             
     		</div>
     	</div>
      <!---start of procces--->
      <div class="row bg m-2">
        <div class="col border">
          <button class="btn btn-primary m-1" onclick="birlashma()">Birlashma</button><br>
          <button class="btn btn-primary m-1" onclick="ayirmaA()">Ayirma A/B</button><br>
          <button class="btn btn-primary m-1" onclick="ayirmaB()">Ayirma B/A</button><br>
          <button class="btn btn-primary m-1" onclick="kesishma()">Kesishma</button><br>
        </div>
        <div class="col border">1</div>
      </div>
      <!---end of procces--->

     </div>
  </div>

	<!--end of show-->






  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">durud</div>
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">salam</div>
</div>
<script src="assets/bottom.js"></script>
<script src="assets/bottom2.js"></script>
<script src="assets/amal.js"></script>
<script type="text/javascript">
function rand(){

let inp = document.querySelectorAll('#form input')
for(let i = 0; i < inp.length; i++){
    inp[i].value = Math.floor(Math.random() * 100)
    //inp[i].value = Math.floor(Math.random() * 100)
}
}
  
   function inc() {

    let no = Number(document.querySelector("#r1").value);

    let frm = document.getElementById('form');
    frm.innerHTML = '';
 
  for (let i = 0; i < no; i++) {
        let textfield = document.createElement("input");
        textfield.type = "text";
        textfield.id = "foo";
        textfield.classList.add('rand1');
        frm.append(textfield);
   }    
}

function rand2(){

let inp2 = document.querySelectorAll('#form2 input')
for(let i = 0; i < inp2.length; i++){
    inp2[i].value = Math.floor(Math.random() * 100)
    //inp[i].value = Math.floor(Math.random() * 100)
   }
}
  
   function inc2() {

    let no2 = Number(document.querySelector("#r2").value);

    let frm2 = document.getElementById('form2')
    frm2.innerHTML = ''
 
  for (let j = 0; j < no2; j++) {
        let textfield = document.createElement("input");
        textfield.type = "text";
        textfield.id = "foo2";
        textfield.classList.add('rand2');
        frm2.append(textfield);
   }    
}


// let arr = []
// let arr2 = [] 
// function getText() {
//   let for1 = document.querySelectorAll('#form input')
//   arr = []
//   for1.forEach((key)=>{
//     arr.push(key.value)
//   })  
//   console.log(arr);

//   let for2 = document.querySelectorAll('#form2 input')
//   arr2 = []
//   for2.forEach((key)=>{
//     arr2.push(key.value)
//   })  
//   console.log(arr2);     
// }

//birlashma
function birlashma() {
let arrA= [];
let arrB = [];

let for1 = document.querySelectorAll('#form input');
  arrA = []
  for1.forEach((key)=>{
    arrA.push(key.value)
  }); 

  let for2 = document.querySelectorAll('#form2 input');
  arrB = []
  for2.forEach((key)=>{
    arrB.push(key.value)
  });




    let birlashma = [...new Set([...arrA, ...arrB])];

    console.log(birlashma)
}
 
 // ayirma AB
function ayirmaA(){
let arr = []
let arr2 = []
let for1 = document.querySelectorAll('#form input')
  arr = []
  for1.forEach((key)=>{
    arr.push(key.value)
  })  

  let for2 = document.querySelectorAll('#form2 input')
  arr2 = []
  for2.forEach((key)=>{
    arr2.push(key.value)
  })  

let w = new Set(arr);
let w2 = new Set(arr2);

let ayirmaA = new Set([...w].filter(x => !w2.has(x)));
console.log(ayirmaA);
}
//ayirma BA
function ayirmaB() {
  let arr = []
let arr2 = []
let for1 = document.querySelectorAll('#form input')
  arr = []
  for1.forEach((key)=>{
    arr.push(key.value)
  })  

  let for2 = document.querySelectorAll('#form2 input')
  arr2 = []
  for2.forEach((key)=>{
    arr2.push(key.value)
  })  

  let w = new Set(arr);
let w2 = new Set(arr2);

let ayirmaB = new Set([...w2].filter(x => !w.has(x)));
console.log(ayirmaB);
}

//kesishma
function kesishma() {
  let arr = []
let arr2 = []
let for1 = document.querySelectorAll('#form input')
  arr = []
  for1.forEach((key)=>{
    arr.push(key.value)
  })  

  let for2 = document.querySelectorAll('#form2 input')
  arr2 = []
  for2.forEach((key)=>{
    arr2.push(key.value)
  })  
  
  let kesishma = arr.filter(x => arr2.includes(x));
  console.log(kesishma);
}


</script>
</body>
</html