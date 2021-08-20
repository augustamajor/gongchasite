// Get all .faq-question
var questions = document.getElementsByClassName("faq-question");

// Assign openQuestion on click
for (var i = 0; i < questions.length; i++) {

    questions[i].onclick = openQuestion;

}

// Apply .hidden to sibling .faq-answer
// Apply .open to .faq-question
function openQuestion(e) {

    var answer = (event.target).parentNode.getElementsByClassName("faq-answer")[0];

    if (-1 !== answer.className.indexOf("hidden")) {

        answer.className = answer.className.replace(" hidden", "");

    } else {
        answer.className += " hidden";

    }
    if (-1 !== event.target.className.indexOf("open")) {
        event.target.className = event.target.className.replace(" open", "");

    } else {

        event.target.className += " open";
    }

}