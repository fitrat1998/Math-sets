</div>

<script src="assets/bottom.js"></script>
<script src="assets/bottom2.js"></script>
<script src="assets/amal.js"></script>
<script src="assets/jquery.js" integrity="" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script type="text/javascript">
	$('#hisobla').click(function() {
		$('#lab1').html("Birinchi to'plam elementlari");
		$('#lab2').html("Ikkinchi to'plam elementlari");
		$('#lab3').html("To'plamlarning umumiy natijalari");
		let el1 = $('#t1').val();
		const tuplam1 = el1.split(",");
		console.log(tuplam1);
		for (var i = 0; i < tuplam1.length; i++) {
			let s = tuplam1[i];
			$("#tuplam1").append('<span class="yashil >' + s + '</span>');
			console.log(s);
		}
		let el2 = $('#t2').val();
		const tuplam2 = el2.split(",");
		console.log(tuplam2);
		for (var i = 0; i < tuplam2.length; i++) {
			let s = tuplam2[i];
			$("#tuplam2").append('<span class="sariq >' + s + '</span>');
			console.log(s);
		}
		let el3 = $('#t3').val();
		const tuplam3 = el3.split(",");
		console.log(tuplam3);
		for (var i = 0; i < tuplam3.length; i++) {
			let s = tuplam3[i];
			$("#tuplam3").append('<span class="sariq >' + s + '</span>');
			console.log(s);
		}


	});

	document.getElementsByName("but1").forEach(x => x.addEventListener("click", () => {
		document.getElementById("t1").innerHTML = document
			.getElementById("input-argument-1")
			.value
			.split(" ")
			.map(item =>

				"<button id='myAnimation' class='btn btn-danger  yashil m-1' name='animation'  onclick='myMove()'>" + item + "</button>")
			.join("");

		document.getElementById("t2").innerHTML = document
			.getElementById("input-argument-2")
			.value
			.split(" ")
			.map(item =>
				`<button id="myAnimation2" class="btn btn-warning sariq" name="animation" onclick="myMove2()">${item}</button>`)
			.join("");

			document.getElementById("t3").innerHTML = document
				.getElementById("result")
			.value
			.split(" ")
			.map(item =>
				`<button id="myAnimation3" class="btn btn-warning qizil" name="animation" onclick="myMove3()">${item}</button>`)
			.join("");
 
	}))


	document.getElementById('namoyish').addEventListener('click', function() {
		const yakum = document.getElementById('yakum');
		const duyum = document.getElementById('duyum');
		const seyum = document.getElementById('seyum');
		const chorum = document.getElementById('chorum');

		if (yakum.checked || duyum.checked || seyum.checked || chorum.checked) {
		
            let elements = document.querySelectorAll(".yashil");
            
            for (let i = 0; i < elements.length; i++) { 
          		setTimeout(()=>{
					let items = elements[i];
					myMove(items);
          		}, i*300)	
          	}
		

			let elements2 = document.querySelectorAll(".sariq");

            for (let j = 0; j < elements2.length; j++) {
            setTimeout(()=>{
				let items2 = elements2[j];
            	myMove2(items2);
            }, (elements.length + j)*400)
			    	
		    }
            
            let elements3 = document.querySelectorAll(".qizil");
            
            for (let k = 0; k < elements3.length; k++) { 
          		setTimeout(()=>{
					let items3 = elements3[k];
					myMove3(items3);
          		}, (elements2.length + k)*800)	
          	}

		}

	})

	function superMove(element, container, hiddenElement){

		const point = hiddenElement.getBoundingClientRect();
		const elementPoint = element.getBoundingClientRect(); 
		console.log(point)
		element.style.top += Math.abs(elementPoint.top - point.top) + "px";
		element.style.left = Math.abs(elementPoint.left - point.left) + "px";
		setTimeout(()=>{
			const element = document.cre
			clone.style.position = "none"
			container.appendChild(clone)
			element.remove();

		},500)
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


	var id = null;

	function myMove2(elem) {
		//var elem = document.getElementById("myAnimation");
		// console.log(elem);
		// console.log(elem.style.display);
		
		var pos = 0;
		//clearInterval(id);
		id = setInterval(frame, 1);

		function frame() {
			if (pos == 220) {
				
			} else {
				pos++;
				elem.style.top = pos + 'px';
				elem.style.right = pos + 'px';
				elem.style.background = '#157347';
				elem.style.border = 0;
				elem.style.boxShadow = '0 0 0 #157347';
				elem.style.color = '#fff';
				//elem.style.marginLeft=5+'px';
			}
		}
	}


	var id = null;

	function myMove3(elem) {
		
		var pos = 0;
		
		id = setInterval(frame, 4);

		function frame() {
			if (pos == 190) {
			} else {
				pos++;
				elem.style.top = pos + 'px';
				elem.style.right = pos + 'px';
				elem.style.background = '#157347';
				elem.style.border = 0;
				elem.style.boxShadow = '0 0 0 #157347';
				elem.style.color = '#fff';
			}
		}
	}

		
</script>

</body>

</html>