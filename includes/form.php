<label id="firstname">First name*: </label>
<input placeholder="Required" value="<?php echo($FirstName);?>" type="text"   name="FirstName" id="firstname2" required>
<p class="errorContainer <?php if ($fnameValid) { echo($HIDDEN_ERROR_CLASS);} ?>" id="fnameError">
      First name is required.
</p>
<label id="lastname">Last name*: </label>
<input placeholder="Required" value="<?php echo($LastName);?>" id="lastname2" type="text"  name="LastName" required>
<p class="errorContainer <?php if ($lnameValid) { echo($HIDDEN_ERROR_CLASS);} ?>" id="lnameError">
      Last name is required.
</p>
<label id="willingness2">Are you going to this festival?</label>
<select  id="willingness" name="willingness">
<option id="option1" value="inline">Yes</option>
<option id="option2" value="none">No</option>
</select>
<section id="day">
<label>When are you planning to go?</label>
<input class="radio" type="radio" name="day" value="Friday"><label class="weekend">Friday</label>
<input class="radio" type="radio" name="day" value="Saturday"><label class="weekend">Saturday</label>
<input class="radio" type="radio" name="day" value="Sunday"><label class="weekend">Sunday</label>
</section>
<label>  Please rate this website
(10-Very Excellent)
</label>
<select name="rate">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
</select>
<label>Any improvements you'd like to recommend?*</label>
<textarea placeholder="Required" name="feedback" id="feedback" required><?php echo ($feedback);
?></textarea>
<p id="feedbackError" class="errorContainer <?php if ($feedbackValid) { echo($HIDDEN_ERROR_CLASS);} ?>">
      Your thought matters.
</p>

<div id="join">
<label id="exception">
Join the Mailing List to learn more (Optional)
</label>
</div>
<div id="mailinglist">

   <div>
     <label>E-mail:</label>
     <input placeholder="example@domain.com" value="<?php echo($Email);?>" type="email" id="eemail" name="email"/>
     <p id="emailErrorNoEmail" class="errorContainer <?php if ($emailIsValid) { echo($HIDDEN_ERROR_CLASS);} ?>">
           Invalid email.
     </p>
</div>

</div>
<button type="submit"  name="submitButton">Submit</button>
<button type="reset">Reset</button>
