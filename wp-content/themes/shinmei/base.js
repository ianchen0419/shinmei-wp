var nowPath=location.pathname.split('/').pop();

function sliderShow(){
	// -80% 1 copy
	// -60% 4
	// -40% 3
	// -20% 2
	// 0% 1
	let sliderPosition=0;
	let isSliding=false;

	var timer=setInterval(sliding, 5000);
	function sliding(){
		isSliding=true;
		if(sliderPosition==-60){
			//第4枚
			sliderPosition=-80;
			sliderWrapper.style.transform="translateX("+sliderPosition+"%)";
			setTimeout(function(){
				sliderWrapper.style.transition="none";
				sliderPosition=0;
				sliderWrapper.style.transform="translateX("+sliderPosition+"%)";
			}, 500);

			setTimeout(function(){
				sliderWrapper.style.transition="";
			}, 900);


		}else{
			//第1枚、第2枚
			sliderPosition-=20;
			sliderWrapper.style.transform="translateX("+sliderPosition+"%)";
		}
	}

	sliderWrapper.addEventListener('transitionend', function(){
		var nowActived=document.querySelector('.dot.active');
		nowActived.classList.remove('active');
		if(sliderPosition==0 || sliderPosition==-80){
			dot1.classList.add('active');
		}else if(sliderPosition==-20){
			dot2.classList.add('active');
		}else if(sliderPosition==-40){
			dot3.classList.add('active');
		}else{
			dot4.classList.add('active');
		}

		isSliding=false;
	});


	dot1.addEventListener('click', function(){
		if(isSliding==false){
			sliderPosition=0;
			sliderWrapper.style.transform="translateX("+sliderPosition+"%)";
			clearInterval(timer);
			timer=setInterval(sliding, 5000);
		}
	});

	dot2.addEventListener('click', function(){
		if(isSliding==false){
			sliderPosition=-20;
			sliderWrapper.style.transform="translateX("+sliderPosition+"%)";
			clearInterval(timer);
			timer=setInterval(sliding, 5000);
		}
	});

	dot3.addEventListener('click', function(){
		if(isSliding==false){
			sliderPosition=-40;
			sliderWrapper.style.transform="translateX("+sliderPosition+"%)";
			clearInterval(timer);
			timer=setInterval(sliding, 5000);
		}
	});

	dot4.addEventListener('click', function(){
		if(isSliding==false){
			sliderPosition=-60;
			sliderWrapper.style.transform="translateX("+sliderPosition+"%)";
			clearInterval(timer);
			timer=setInterval(sliding, 5000);
		}
	});

}

var sections=document.querySelectorAll('section');
var lastY;
function sectionShowUp(e){
	if(lastY-pageYOffset<0){
		for(each in sections){
			if(sections[each].offsetTop-innerHeight<pageYOffset && !sections[each].classList.contains('uping')){
				sections[each].classList.add('uping');
			}
		}
	}
	lastY=pageYOffset;
}

//for only loading in the middle of the page
function middleLoad(){
	for(each in sections){
		if(sections[each].offsetTop-innerHeight<pageYOffset && !sections[each].classList.contains('uping')){
			sections[each].classList.add('uping');
		}
	}
}
middleLoad();

window.addEventListener('scroll', sectionShowUp);

function choose(content){
	dropdownInput.value=content;
	dropdownWrapper.classList.remove('show');
}

function jsonp(url){
    var mailXhr=new XMLHttpRequest();
	mailXhr.open('POST', 'https://work-capital-server.com/postcode/index.php', true);
	mailXhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	mailXhr.onreadystatechange=function(){
		if(mailXhr.readyState==4 && mailXhr.status==200){
			var json=JSON.parse(mailXhr.responseText);
			// console.log(json.city);
			// console.log(json.address);
			// 都道府県
			dropdownInput.value=json.city;
			// 市区町村
			address2.value=json.address;
		}
	};
	mailXhr.send("code="+url);
}

function openMobileMenu(){
	document.body.classList.add('mobile-menu-opened');
	mobileMenu.classList.add('opened');
}

// menu dropdown
function closeMobileMenu(){
	//mobile menu dropdown
	document.body.addEventListener('touchstart', function(event){

		if(event.target.tagName=='BODY' && mobileMenu.classList.contains('opened')){
			document.body.classList.remove('mobile-menu-opened');
			mobileMenu.classList.remove('opened');
		}
	})

}
closeMobileMenu();

function saveValue2(th, e, name){
	e.preventDefault();
	localStorage['inquiry002']=name;
	location.href=th.href;
}

function saveValue4(th, e, name){
	e.preventDefault();
	localStorage['inquiry004']=name;
	location.href=th.href;
}

function saveValue5(th, e, name){
	e.preventDefault();
	localStorage['inquiry005']=name;
	location.href=th.href;
}

function checkEmail(th){
	var firstEmail=document.querySelector('input[name="your_mail"]');
	if(th.value==firstEmail.value){
		th.setCustomValidity("");
	}else{
		if(location.href.indexOf('/en/')!==-1){
			th.setCustomValidity("Entered email address does not match.");
		}else{
			th.setCustomValidity("メールアドレス（確認用）の内容に誤りがあります");
		}
	}
}

if(window['confirmMail']){
	if(confirmMail.value.length>0){
		confirmMail.disabled=false;
	}	
}

function goMail(th, e){
	e.preventDefault();
	var disabledInputs=th.querySelectorAll('input[disabled]');
	var textArea=document.querySelector('textarea');
	for(each in disabledInputs){
		disabledInputs[each].disabled=false;
	}

	var disabledTextarea=th.querySelectorAll('textarea[disabled]');
	for(each in disabledTextarea){
		disabledTextarea[each].disabled=false;
	}
	th.submit();
}
