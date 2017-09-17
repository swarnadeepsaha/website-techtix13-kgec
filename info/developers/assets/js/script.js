$(function(){
	
	// container is the DOM element;
	// userText is the textbox
	
	var container = $("#container")
		userText = $('#userText'); 
	
	// Shuffle the contents of container
	container.shuffleLetters();

	// Bind events
	
	// Leave a 4 second pause

	setTimeout(function(){
		
		// Shuffle the container with custom text
		container.shuffleLetters({
			"text": "Swarnadeep Saha & Soumyadeep Dutta  (IT 3rd yr)"                                                             
		});
		
		userText.val("Special Thanks to:Shuvankar Ghosh & MD MIRAJ ANSARI ").fadeIn();
		
	},4000);
	
});

