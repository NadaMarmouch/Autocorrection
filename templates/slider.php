<!--image slider start-->
<div class="slider">
  <div class="slides">
    <!--radio buttons start-->
    <input type="radio" name="radio-btn" id="radio1">
    <input type="radio" name="radio-btn" id="radio2">
    <input type="radio" name="radio-btn" id="radio3">
    
    <!--radio buttons end-->
    <!--slide images start-->
    <div class="slide first">
      <img src="pictures/5.png" alt="">
    </div>
    <div class="slide">
      <img src="pictures/3.png" alt="">
    </div>
    <div class="slide">
      <img src="pictures/4.png" alt="">
    </div>
    
    <!--slide images end-->
    <!--automatic navigation start-->
    <div class="nav-auto">
      <div class="auto-btn1"></div>
      <div class="auto-btn2"></div>
      <div class="auto-btn3"></div>
      
      
    </div>
    <!--automatic navigation end-->
  </div>
  <!--manual navigation start-->
  <div class="nav-manual">
    <label for="radio1" class="manual-btn"></label>
    <label for="radio2" class="manual-btn"></label>
    <label for="radio3" class="manual-btn"></label>
    
   

  </div>
  <!--manual navigation end-->
</div>
<!--image slider end-->


<!--JS function-->
<script type="text/javascript">
var counter = 1;
setInterval(function(){
  document.getElementById('radio' + counter).checked = true;
  counter++;
  if(counter > 3){
    counter = 1;
  }
}, 5000);
</script>