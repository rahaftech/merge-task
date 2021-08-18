<!DOCTYPE html>
<html>
<head>
<style>
.button {
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}

.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}

</style>
</head>
<body> 
<form action="in.php" method="POST">
<div align='center'>

<h1>Control Panel</h1>
<button class="button button2" name="forw" value='forw'>Forward</button> 
<br>
<button class="button button2" name="righ" value='righ'> Right </button>
<button class="button button1" name="stop" value='stop'>Stop</button> 
<button class="button button2" name="lef" value='lef'>Left  </button>
<br>
<button class="button button2" name="back" value='back'>Backward</button>
</div> </form> 
<script>
  window.watsonAssistantChatOptions = {
      integrationID: "35e819a5-d05f-44ec-8aec-45bd7bd7cf20", // The ID of this integration.
      region: "eu-gb", // The region your integration is hosted in.
      serviceInstanceID: "a5788071-7846-44c6-8471-09c37859278a", // The ID of your service instance.
      onLoad: function(instance) { instance.render(); }
    };
  setTimeout(function(){
    const t=document.createElement('script');
    t.src="https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
    document.head.appendChild(t);
  });
</script>
</body>
</html>