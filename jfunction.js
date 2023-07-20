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