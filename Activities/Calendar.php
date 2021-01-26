<div>
            
            <div class="container">
      <div class="calendar">
        <div class="month">
          <i class="fas fa-angle-left prev"></i>
          <div class="date">
            <h1></h1>
            <p></p>
          </div>
          <i class="fas fa-angle-right next"></i>
        </div>
        <div class="weekdays">
          <div>Sun</div>
          <div>Mon</div>
          <div>Tue</div>
          <div>Wed</div>
          <div>Thu</div>
          <div>Fri</div>
          <div>Sat</div>
        </div>
        <div data-modal-target="#modal" class="days"></div>
      </div>
    </div>
        <!-- PONIZEJ JEST POPUP -->

      <div class="modal" id="modal">
        <div class="modal-header">
          <div class="title"></div>
          <button class="close-button">&times;</button>
        </div>
        <div class="modal-body" id="modal-body">
          <form action="Activities/redirection.php" method="POST" id="form">
            <textarea name="date" id="hiddenTitle" style="display:none"></textarea>
              <div class="radio-toolbar">
                <b>Planned activities:</b><br>
                <input type="radio" id="radioGym" name="activityButton" value="gym">
                <label for="radioGym">Gym</label>

                <input type="radio" id="radioSwimming" name="activityButton" value="swimming">
                <label for="radioSwimming">Swimming</label>

                <input type="radio" id="radioJogging" name="activityButton" value="jogging">
                <label for="radioJogging">Jogging</label>

                <input type="radio" id="radioCycling" name="activityButton" value="cycling"">
                <label for="radioCycling">Cycling</label><br><br>
                
                <b>Done activities:</b><br>
                <input type="radio" id="radioGymComparison" name="activityButton" value="gymComp">
                <label for="radioGymComparison">Gym</label>
                
                <input type="radio" id="radioSwimmingComparison" name="activityButton" value="swimmingComp">
                <label for="radioSwimmingComparison">Swimming</label>
                
                <input type="radio" id="radioJoggingComparison" name="activityButton" value="joggingComp">
                <label for="radioJoggingComparison">Jogging</label>
                
                <input type="radio" id="radioCyclingComparison" name="activityButton" value="cyclingComp">
                <label for="radioCyclingComparison">Cycling</label><br><br>
              </div>
              <input type="submit" value="Edit choosen activity"/>
          </form>
        </div>
      </div>
      <div id="overlay"></div>

    <script src="script.js"></script>
            
            </div>