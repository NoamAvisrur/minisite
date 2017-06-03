var slideIndex = 1;
showDivs(slideIndex);

document.querySelector('.nav_left').addEventListener('click', function(){
    showDivs(slideIndex += -1);
});

document.querySelector('.nav_right').addEventListener('click', function(){
   showDivs(slideIndex += 1);
});

function showDivs(n) {
    var i;
    var x = document.querySelectorAll("section");
    if (n > x.length){
        slideIndex = 1;
    }    
    if (n < 1) {
        slideIndex = x.length
    }
    for (i = 0; i < x.length; i++) {
       x[i].classList.add('undisplay');
       x[i].classList.remove('flex');
    }
    x[slideIndex-1].classList.add('flex'); 
    x[slideIndex-1].classList.remove('undisplay');
}

(function changeImg(){
    setInterval(function(){
        showDivs(slideIndex += 1); 
    }, 7000);
})();

function changeText(button, display, undisplay1, undisplay2){
    document.querySelector(button).addEventListener('click', function(){
        document.querySelector(display).classList.remove('undisplay');
        document.querySelector(undisplay1).classList.add('undisplay');
        document.querySelector(undisplay2).classList.add('undisplay');  
    });
}

changeText('button:first-child', '.life_with_text', '.our_home', '.why_adopt_text');
changeText('button:nth-child(2)','.why_adopt_text', '.life_with_text', '.our_home' );
changeText('button:nth-child(3)', '.our_home', '.why_adopt_text', '.life_with_text');

document.querySelector('form').addEventListener('submit', function(e){
    e.preventDefault();
    var formData = "name=" + document.querySelector('input[name="name"]').value + 
    "&tel=" + document.querySelector('input[name="tel"]').value +
    "&email=" + document.querySelector('input[name="email"]').value +
    "&pet=" + document.querySelector('select').value +
    "&why_adopt=" + document.querySelector('textarea').value;
    var request = new Request('api.php', {
	    method: 'POST', 
        body: formData,
        headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' },
    });
    SendInfo(request);
});

function SendInfo(request){
    fetch(request).then(function(data){
        return data.text();
    }).then(function(data){
        console.log(data);
        buildSuccessMSG();
    });
};    

function buildSuccessMSG(){
    document.querySelector('form').innerHTML = "";
    var Success = document.createElement('div');
    Success.className = 'success_msg';
    Success.textContent = "Thank you for decided to adopt a pat, our representative will contact you shortly for";
    document.querySelector('form').appendChild(Success);
};




