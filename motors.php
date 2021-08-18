<!DOCTYPE html>
<html>
<head> 
   <title>Motors Controls</title>
  <meta name="viewpoint" content="width=device-width , initial-scale=1.0"/>
  <!--CSS codes have been added here so that all the
           codes for the interface are on the same page -->
  <style> 
 body {
    background-image: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
    
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;

    min-height: 100vh;
    font-family: 'Lato', sans-serif;
    margin: 0;
}
input[type=range] {
    width: 300px;
    margin: 18px 0;
    -webkit-appearance: none;
}

input[type=range] + label {
    background-color: #fff;
    border-radius: 4px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
    padding: 5px 0;
    position: absolute;
    top: -25px;
    left: 110px;
    text-align: center;
    width: 80px;
}
input[type=range]::-webkit-slider-runnable-track {
    animate: 0.2s;
    background-color: purple;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
    height: 7.5px;
}
input[type=range]::-webkit-slider-thumb {
    background: #ffffff;
    border-radius: 50%;
    border: 1px solid purple;
    cursor: pointer;
    height: 20px;
    width: 20px;
    margin-top: -7px;
    -webkit-appearance: none;
} 
h3{
  color: #59116F;
  margin-right: 60%
}
p{
  color: #59116F;
} 
.button {
  background-color: purple;
  color: white; 
  border: none;
  padding: 16px 30px;
  text-align: center;
  font-size: 15px;
  opacity: 0.7;
  display: inline-block;
  text-decoration: none;
  cursor: pointer;
}
</style>
</head> 
<body> 
<!-- The form has been linked to the PHP page that contains
 the codes used to link the form to the database-->
<form action="insert.php" method="POST"> 
<center> 
  <label class="custom-range-slider range">
    <h3>Engine 1</h3> 
    </lable>  
  <input type="range" name="engine1" min="0" max="180" value="90" oninput="rangeValue1.innerText = this.value">
<p id="rangeValue1">90</p> 

<label class="custom-range-slider range">
<h3>Engine 2</h3>  
</lable> 
<input type="range" name="engine2"  min="0" max="180" value="90" oninput="rangeValue2.innerText = this.value">
<p id="rangeValue2">90</p> 

<label class="custom-range-slider range">
<h3>Engine 3</h3>
 </lable> 
<input type="range" name="engine3" min="0" max="180" value="90" oninput="rangeValue3.innerText = this.value">
<p id="rangeValue3">90</p> 

<label class="custom-range-slider range">
<h3>Engine 4</h3> 
</lable>   
<input type="range" name="engine4" min="0" max="180" value="90" oninput="rangeValue4.innerText = this.value">
<p id="rangeValue4">90</p> 

<label class="custom-range-slider range">
<h3>Engine 5</h3>
 </lable>   
<input type="range" name="engine5" min="0" max="180" value="90" oninput="rangeValue5.innerText = this.value">
<p id="rangeValue5">90</p> 

<label class="custom-range-slider range">
<h3>Engine 6 </h3> 
</lable>  
<input type="range" name="engine6" min="0" max="180" value="90" oninput="rangeValue6.innerText = this.value">
<p id="rangeValue6">90</p> 

<button class="button">PLAY</button>
<button class="button">SAVE</button>
</center>
 </form>
</body>
</html>

