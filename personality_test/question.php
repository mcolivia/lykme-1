<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Personality Test</title>
        <link rel="stylesheet" href="question_style.css"/>
        
    </head>
    <body>
    <div class="wrapper">
    <div class="wrap" id="q1">
        <div class="text-center pb-4">
            <div class="h5 font-weight-bold"><span id="number"> </span>1 of 5 </div>
        </div>
        <div class="h4 font-weight-bold"> I would enjoy attending a large party</div>
        <div class="pt-4">
            <form> 
                <label class="options">Strongly Agree <input type="radio" name="radio"> <span class="checkmark"></span> </label> 
                <label class="options">Agree <input type="radio" name="radio"> <span class="checkmark"></span> </label> 
                <label class="options">Disagree <input type="radio" name="radio"> <span class="checkmark"></span> </label> 
                <label class="options">Strongly Disagree <input type="radio" name="radio"> <span class="checkmark"></span> </label> 
            </form>
        </div>
        <div class="d-flex justify-content-end pt-2"> <button class="btn btn-primary" id="next1">Next <span class="fas fa-arrow-right"></span> </button> </div>
    </div>
    <div class="wrap" id="q2">
        <div class="text-center pb-4">
            <div class="h5 font-weight-bold"> <span id="number"> </span>2 of 5 </div>
        </div>
        <div class="h4 font-weight-bold"> I have trouble sticking to a routine</div>
        <div class="pt-4">
            <form> 
                <form> 
                    <label class="options">Strongly Agree <input type="radio" name="radio"> <span class="checkmark"></span> </label> 
                    <label class="options">Agree <input type="radio" name="radio"> <span class="checkmark"></span> </label> 
                    <label class="options">Disagree <input type="radio" name="radio"> <span class="checkmark"></span> </label> 
                    <label class="options">Strongly Disagree <input type="radio" name="radio"> <span class="checkmark"></span> </label> 
                </form>
        </div>
        <div class="d-flex justify-content-end pt-2"> <button class="btn btn-primary mx-3" id="back1"> <span class="fas fa-arrow-left pr-1"></span>Previous </button> <button class="btn btn-primary" id="next2">Next <span class="fas fa-arrow-right"></span> </button> </div>
    </div>
    <div class="wrap" id="q3">
        <div class="text-center pb-4">
            <div class="h5 font-weight-bold"> <span id="number"> </span>3 of 5 </div>
        </div>
        <div class="h4 font-weight-bold"> I maintain balance under extreme stress</div>
        <div class="pt-4">
            <form> 
                <label class="options">Strongly Agree <input type="radio" name="radio"> <span class="checkmark"></span> </label> 
                    <label class="options">Agree <input type="radio" name="radio"> <span class="checkmark"></span> </label> 
                    <label class="options">Disagree <input type="radio" name="radio"> <span class="checkmark"></span> </label> 
                    <label class="options">Strongly Disagree <input type="radio" name="radio"> <span class="checkmark"></span> </label> 
                </form>
        </div>
        <div class="d-flex justify-content-end pt-2"> <button class="btn btn-primary mx-3" id="back2"> <span class="fas fa-arrow-left pr-2"></span>Previous </button> <button class="btn btn-primary" id="next3">Next </button> </div>
    </div>
    <div class="wrap" id="q4">
        <div class="text-center pb-4">
            <div class="h5 font-weight-bold"> <span id="number"> </span>4 of 5 </div>
        </div>
        <div class="h4 font-weight-bold"> I find it challenging to make new friends</div>
        <div class="pt-4">
            <form> 
                <label class="options">Strongly Agree <input type="radio" name="radio"> <span class="checkmark"></span> </label> 
                    <label class="options">Agree <input type="radio" name="radio"> <span class="checkmark"></span> </label> 
                    <label class="options">Disagree <input type="radio" name="radio"> <span class="checkmark"></span> </label> 
                    <label class="options">Strongly Disagree <input type="radio" name="radio"> <span class="checkmark"></span> </label> 
                </form>
        </div>
        <div class="d-flex justify-content-end pt-2"> <button class="btn btn-primary mx-3" id="back3"> <span class="fas fa-arrow-left pr-3"></span>Previous </button> <button class="btn btn-primary" id="next4">Next </button> </div>
    </div>
    <div class="wrap" id="q5">
        <div class="text-center pb-4">
            <div class="h5 font-weight-bold"> <span id="number"> </span>5 of 5 </div>
        </div>
        <div class="h4 font-weight-bold"> I have trouble controlling my impulses</div>
        <div class="pt-4">
            <form> 
                <label class="options">Strongly Agree <input type="radio" name="radio"> <span class="checkmark"></span> </label> 
                    <label class="options">Agree <input type="radio" name="radio"> <span class="checkmark"></span> </label> 
                    <label class="options">Disagree <input type="radio" name="radio"> <span class="checkmark"></span> </label> 
                    <label class="options">Strongly Disagree <input type="radio" name="radio"> <span class="checkmark"></span> </label> 
                </form>
        </div>
        <div class="d-flex justify-content-end pt-2"> <button class="btn btn-primary mx-3" id="back4"> <span class="fas fa-arrow-left pr-4"></span>Previous </button> <button class="btn btn-primary" id="next5">Submit </button> </div>
    </div>
</div>
<div class="d-flex flex-column align-items-center">
    <div class="h3 font-weight-bold text-white">Go Dark</div> <label class="switch"> <input type="checkbox"> <span class="slider round"></span> </label>
</div>
<script>
    var q1 = document.getElementById("q1");
    var q2 = document.getElementById("q2");
    var q3 = document.getElementById("q3");
    var q4 = document.getElementById("q4");
    var q5 = document.getElementById("q5");
    var next1 = document.getElementById('next1')
    var back1 = document.getElementById('back1')
    var next2 = document.getElementById('next2')
    var back2 = document.getElementById('back2')
    var next3 = document.getElementById('next3')
    var back3 = document.getElementById('back3')
    var next4 = document.getElementById('next4')
    var back4 = document.getElementById('back4')
    document.addEventListener('DOMContentLoaded', function() {
        let query = window.matchMedia("(max-width: 767px)");
        if (query.matches) {
            next1.onclick = function() {
                q1.style.left = "-650px";
                q2.style.left = "15px";
            }
            back1.onclick = function() {
                q1.style.left = "15px";
                q2.style.left = "650px";
            }
            back2.onclick = function() {
                q2.style.left = "15px";
                q3.style.left = "650px";
            }
            next2.onclick = function() {
                q2.style.left = "-650px";
                q3.style.left = "15px";
            }
            next3.onclick = function() {
                q3.style.left = "-650px";
                q4.style.left = "15px";
            }
            back3.onclick = function() {
                q3.style.left = "15px";
                q4.style.left = "650px";
            }
            next4.onclick = function() {
                q4.style.left = "-650px";
                q5.style.left = "15px";
            }
            back4.onclick = function() {
                q4.style.left = "15px";
                q5.style.left = "650px";
            }
           
        } else {
            next1.onclick = function() {
                q1.style.left = "-650px";
                q2.style.left = "50px";
            }
            back1.onclick = function() {
                q1.style.left = "50px";
                q2.style.left = "650px";
            }
            back2.onclick = function() {
                q2.style.left = "50px";
                q3.style.left = "650px";
            }
            next2.onclick = function() {
                q2.style.left = "-650px";
                q3.style.left = "50px";
            }
            next3.onclick = function() {
                q3.style.left = "-650px";
                q4.style.left = "50px";
            }
            back3.onclick = function() {
                q3.style.left = "50px";
                q4.style.left = "650px";
            }
            next4.onclick = function() {
                q4.style.left = "-650px";
                q5.style.left = "50px";
            }
            back4.onclick = function() {
                q4.style.left = "50px";
                q5.style.left = "650px";
            }
        }
    });

    function uncheck() {
        var rad = document.getElementById('rd')
        rad.removeAttribute('checked')
    }
    document.addEventListener('DOMContentLoaded', function() {
        const main = document.querySelector('body')
        const toggleSwitch = document.querySelector('.slider')
        toggleSwitch.addEventListener('click', () => {
            main.classList.toggle('dark-theme')
        })
    })
</script>
</body>
</html>