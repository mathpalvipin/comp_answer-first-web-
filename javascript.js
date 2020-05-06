             
              var fn=document.getElementById("firstname");
              
			var ln=document.getElementById("lastname");
			var phone=document.getElementById("phone");
			var email=document.getElementById("email");
			var cl1=document.getElementById("Clevel1");
			var cl2=document.getElementById("Clevel2");
			var war=document.getElementById("war");
			
			//console.log(fn,ln,phone);
			fn.addEventListener("blur",()=>{
				console.log("firstname is blur");
				let regex= /^[a-zA-Z]([a-zA-z0-9]){0,10}/;
				let str=fn.value;
				var fnv=document.getElementById("fnamevalid");
			
				console.log(regex,str);
	               if(regex.test(str)){
					console.log("its matched");
                    fn.style.border="solid 2px green";
                       fnv.innerHTML="";
                    
				}
				else {fnv.innerHTML="your first name should be in alphabet only";
					fn.style.border="solid 2px red";
				}
			
			})
			ln.addEventListener('blur',()=>{
				console.log("lastname is blur");
				let regex= /^[a-zA-Z]([a-zA-z0-9]){0,10}/;
				let str=ln.value;
				var lnv=document.getElementById("lnamevalid");
				console.log(regex,str);
				if(regex.test(str)){lnv.innerHTML=" "; 
                    
					console.log("its matched");
                    ln.style.border="solid 2px green";
				}
				else{ 
					ln.style.border="solid 2px red";
					lnv.innerHTML="your first name should be in alphabet only";
}
			})
			phone.addEventListener('blur',()=>{
				console.log("phone is blur");
				let regex= /([0-9]){10}/;
				let str=phone.value;
				var pv=document.getElementById("phonevalid");
				console.log(regex,str);
				if(regex.test(str)){pv.innerHTML="";
                   
				console.log("its matched");
                    phone.style.border="solid 2px green";
				}
				else {
					phone.style.border="solid 2px red";
				pv.innerHTML="your first name should be in alphabet only";
}
				
			})
			email.addEventListener('blur',()=>{
				console.log("email is blur");
				let regex= /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
				let str=email.value;
				var ev=document.getElementById("emailvalid");
				console.log(regex,str);
				if(regex.test(str)){ev.innerHTML="";
                   
					console.log("its matched");
                    email.style.border="solid 2px green";
				}
				else {ev.innerHTML="your first name should be in alphabet only";

					email.style.border="solid 2px red";
				}
			})