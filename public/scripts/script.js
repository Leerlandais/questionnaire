window.addEventListener('resize', displayScreenWidth); 

function displayScreenWidth() { 
    const screenwidth = document.getElementById("screenwidth");
    let theWidth = window.innerWidth;                                             
    screenwidth.innerHTML = 'The screen width is: ' + theWidth;
}
displayScreenWidth();


if (document.getElementById("askForm")) {
    
    document.getElementById("askForm").addEventListener("submit", function(event) {
        const radioInp = document.querySelectorAll(".radioInp");
        let radioChecked = false;
        
        for (let i = 0; i < radioInp.length; i++) {
            if (radioInp[i].checked) {
                radioChecked = true;
                break;
            }
        }
        if (!radioChecked) {
            alert("Please select one option.");
            event.preventDefault();
        }
    });
    
}

if (document.querySelector('#hideMyInfo')) {
    const hideMyInfo = document.querySelectorAll("#hideMyInfo");
    for (let i = 0; i < hideMyInfo.length; i++) {
        hideMyInfo[i].addEventListener("click", function(){
            for (let i = 0; i < hideMyInfo.length; i++) {
                hideMyInfo[i].nextElementSibling.style.display = "none";
            }
            this.nextElementSibling.style.display = "inline";
        });
    }
}
    