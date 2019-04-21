
<!DOCTYPE html> 
<html lang="en">

<head>
    <title> Yo Yo YO </title>
	<script src="https://www.gstatic.com/firebasejs/5.9.3/firebase.js"></script>
  
	<!-- Firebase App is always required and must be first -->
	<script src="https://www.gstatic.com/firebasejs/5.9.3/firebase-app.js"></script>
	<script src="https://www.gstatic.com/firebasejs/5.9.3/firebase-database.js"></script>
	<script>
	  // Initialize Firebase
	  var config = {
	    apiKey: process.env.FIREBASE_TOKEN,
	    authDomain: "mydashi.firebaseapp.com",
	    databaseURL: "https://mydashi.firebaseio.com",
	    projectId: "mydashi",
	    storageBucket: "mydashi.appspot.com",
	    messagingSenderId: "1028456675021"
	  };
	  var defaultApp = firebase.initializeApp(config);

	  console.log(defaultApp.name);  // "[DEFAULT]"
	  var defaultDatabase = firebase.database();

	</script> 	
</head>

    <style>
		
       
    </style>
    
<body>
    
    <h1>Welcome to my website: Home of my DaShi!</h1>
	<img src="https://insideretail.asia/wp-content/uploads/2018/07/Detective-Conan.jpg" alt="Picture"/>
	<br/>
	<a href="sia.mp3">click here for awesome music!</a>
	<br/>
	<a href="CloneWars.html">Click here for game</a>

	
 </body>

