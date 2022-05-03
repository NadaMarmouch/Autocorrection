<div class="form-group">
    <label class="group-title">Major/Faculuty</label>
    <div class="details">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
            <select name="major" class="form-control selectpicker">

                <?php
     if(isset($_SESSION['major']))
     {
      if($_SESSION['major']== "computer science")
      {
    ?>
                <option>Computer Science</option>
                <?php 
      }
      else if($_SESSION['major']=="Alsun")
      {
        ?>
                <option>Alsun</option>

        <?php
      }
      ?>
                <?php
    }
?>
            </select>
        </div>
    </div>
</div>
