var timeOut;
function scrollToTop() {
	if (document.body.scrollTop!=10 || document.documentElement.scrollTop!=5){
		window.scrollBy(0,-50);
		timeOut=setTimeout('scrollToTop()',10);
	}
	else clearTimeout(timeOut);
}