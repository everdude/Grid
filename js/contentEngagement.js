/*
scroll tracking
*/
var scroll = false;
window.addEventListener("scroll", function() {
    // div at bottom of article
    var elementTarget = document.getElementById("scroll-js");
    // get window height
    var h = window.innerHeight;
    if (window.scrollY > (elementTarget.offsetTop + elementTarget.offsetHeight - h)) {
        scroll = true;
        console.log("You've scrolled to the end");
    }
});

/*
number of words in content
    (stackoverflowed this: https://stackoverflow.com/questions/765419/javascript-word-count-for-any-given-dom-element)
*/
function get_text(el) {
    ret = "";
    var length = el.childNodes.length;
    for(var i = 0; i < length; i++) {
        var node = el.childNodes[i];
        // If the node is not a comment (nodeType 8)
        if(node.nodeType != 8) {
            // think this is saying if nodeType is not an element then get text value else get the child node and reloop
            ret += node.nodeType != 1 ? node.nodeValue : get_text(node);
        }
    }
    return ret;
}
// gets text of div
var words = get_text(document.getElementById("wordCount-js"));
// gets word count
var count = words.split(' ').length;
console.log("word count: "+ count);
// Slow reader: 150-200 wpm. Average adult reader: 250wpm. College student: 300wpm
var wordsPerMinute = 250;
// read time in milliseconds
var readTime = count / wordsPerMinute * 60000;
console.log("read time: "+ readTime);

/*
timer and visitor
*/
var startTime = new Date().getTime();
console.log("Time: "+ startTime);

function calcTime(){
    var currentTime = new Date().getTime();
    var elapsedTime = currentTime - startTime;
    var timeToRead = count / wordsPerMinute;

    // visior types
    if (elapsedTime < readTime && scroll == false) {
        var audience = "Bouncer";
        gtag("event", audience, {
            "event_category": "content-engagement",
            "event_label": timeToRead
        });
    }
    else if (elapsedTime < readTime && scroll == true) {
        var audience = "Skimmer";
        gtag("event", audience, {
            "event_category": "content-engagement",
            "event_label": timeToRead
        });
    }
    else if (elapsedTime > readTime && scroll == false) {
        var audience = "Dweller";
        gtag("event", audience, {
            "event_category": "content-engagement",
            "event_label": timeToRead
        });
    }
    else if (elapsedTime > readTime && scroll == true) {
        var audience = "Consumer";
        gtag("event", audience, {
            "event_category": "content-engagement",
            "event_label": timeToRead
        });
    }
    console.log(audience +" - scroll: "+ scroll +" -  time: "+ elapsedTime +" - url: "+ source );
}

window.addEventListener("beforeunload", calcTime);
