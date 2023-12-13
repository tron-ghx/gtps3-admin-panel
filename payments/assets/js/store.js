var
  mainContainer =	document.getElementById('mainContainer'),
  particleContainer =	document.getElementById('particleContainer'),
  forumButton =		document.getElementById('button1'),
  onlineCounter = 	document.getElementById('onlineCounter');

//voteButton.onclick =	votePopup;
forumButton.onclick =	function(){location.href='index.php';};

function onTransEnd(elem, func){
  elem.addEventListener("transitionend",	func ,false);
  elem.addEventListener("webkitTransitionEnd",	func ,false);
  elem.addEventListener("mozTransitionEnd",	func ,false);
  elem.addEventListener("msTransitionEnd",	func ,false);
  elem.addEventListener("oTransitionEnd",	func ,false);
}