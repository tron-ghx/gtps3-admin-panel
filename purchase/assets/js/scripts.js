var
  mainContainer =	document.getElementById('mainContainer'),
  particleContainer =	document.getElementById('particleContainer'),
  voteButton =		document.getElementById('button2'),
  forumButton =		document.getElementById('button1'),
  storeButton =		document.getElementById('button3'),
  onlineCounter = 	document.getElementById('onlineCounter');

//voteButton.onclick =	votePopup;
voteButton.onclick =    function(){location.href='https://privategt.com/tutorial/';};
forumButton.onclick =	function(){location.href='https://privategt.com/discord/';};
storeButton.onclick =	function(){location.href='store.php';};

function onTransEnd(elem, func){
  elem.addEventListener("transitionend",	func ,false);
  elem.addEventListener("webkitTransitionEnd",	func ,false);
  elem.addEventListener("mozTransitionEnd",	func ,false);
  elem.addEventListener("msTransitionEnd",	func ,false);
  elem.addEventListener("oTransitionEnd",	func ,false);
}

(function getPlayers() {
	var xhr = new XMLHttpRequest();
	xhr.open('GET', 'http://privategts1.eu/online.php', true);
	xhr.send(null);
	xhr.onload = function() {
		var res = parseInt(xhr.responseText);
		onlineCounter.innerHTML = isNaN(res)
			? '<h2 style=color:red>Server offline!</h2>'
			: '<h2>Join <span class="highlight">' + res + '</span> other players at <span class="highlight">privategt.com/tutorial</span>!</h2>';

		setTimeout(getPlayers, 2000);
	};
})();
