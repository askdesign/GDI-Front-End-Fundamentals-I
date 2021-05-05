## Front-End Fundamentals Day 4

(Class 4) Styling and Customizations
• Style 1 interior page
• Build a nav menu
• Google Fonts
• Alternatives to divs and floats: flexbox, grid
• Sizing Images, making them responsive
• Web hosts and domain name - on Tues.
• Maybe: Build a form for a Contact page
• Give people my Github account URL:
https://github.com/askdesign/GDI-Front-End-Fundamentals-I

## Code to demonstrate

View VS code pages in browser - Install this extension:
https://marketplace.visualstudio.com/items?itemName=techer.open-in-browser

<!-- Nav Menu -->
https://www.w3schools.com/css/css_navbar.asp


<!-- Forms -->
https://www.w3schools.com/html/html_forms.asp

https://www.w3schools.com/css/css_form.asp

<! -- Accordion -->
https://www.w3schools.com/howto/howto_js_accordion.asp


<!-- Styled Menu at top of page -->
<header>
  <nav id="primary-nav"><ul>
  <li><a href="index.html">day1</a></li>
  <li><a href="day2.html">day2</a></li>
  <li><a href="day3.html">day3</a></li>
  <li><a class="active" href="day4.html">day4</a></li>
  </ul></nav>

  <h1>Styling and Customizations</h1>
</header>

<!-- Styled Menu at on left side of page -->
<section>
  <nav id="vertical-nav"><ul>
    <li><a href="index.html">day1</a></li>
    <li><a href="day2.html">day2</a></li>
    <li><a href="day3.html">day3</a></li>
    <li><a class="active" href="day4.html">day3</a></li>
    </ul></nav>
</section>

<section>
    <h3>Divs and Floats</h3>
    <h3>Layout</h3>
    <h4>Review: HTML5 Semantic Elements</h4>
    <p><img src="images/html-semantics-element-diagram.jpg" alt="html semantics diagram"></p>

    <ul>
      <li>Google Chrome Dev Tools</li>
      <li>Google Fonts</li>
      <li>Bootstrap Framework</li>
      <li>Alternatives to divs and floats: flexbox, grid</li>
      <ul>
        <li>https://www.w3schools.com/css/css3_flexbox.asp</li>
        <li>https://css-tricks.com/snippets/css/a-guide-to-flexbox/</li>
        <li>https://www.w3schools.com/css/css_grid.asp</li>
        <li>https://css-tricks.com/snippets/css/complete-guide-grid/</li>
        <li>https://www.sitepoint.com/css-grid-generators/<li>
        </ul>
    </ul>
</section>


<section>
<article class="contactform">
<h3>Forms</h3>
<!-- https://www.htmldog.com/techniques/formtoemail/ -->
<!-- Try with Get and Post -->
<h4>Text Fields</h4>
<form action="contact_action.php" target="_blank" method="post">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value="Jane"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="Doe"><br><br>
  <input type="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "contact_action.php".</p>
<p>Get = After you submit, notice that the form values is visible in the address bar of the new browser tab.</p>
<p>Post = After you submit, notice that, unlike the GET method, the form values is NOT visible in the address bar of the new browser tab.</p>
</article>

<article class="contactform">
  <h4>Radio Buttons</h4>
<form action="contact_action.php" target="_blank" method="get">
  <input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label><br>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label><br>
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Other</label><br><br>
  <input type="submit" value="Submit">
</form>
</article>

<article>
<h4>Check Boxes</h4>
<form action="contact_action.php" target="_blank" method="get">
  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
  <label for="vehicle1"> I have a bike</label><br>
  <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
  <label for="vehicle2"> I have a car</label><br>
  <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
  <label for="vehicle3"> I have a boat</label><br><br>
  <input type="submit" value="Submit">
</form>
</article>

<article class="contactform">
  <h4>Send e-mail to someone@example.com:</h4>

<form action="mailto:askdesign2@yahoo.com" method="post" enctype="text/plain">
  First Name:<br>
  <input type="text" name="fname"><br>
  Last Name:<br>
  <input type="text" name="lname"><br>
E-mail:<br>
<input type="text" name="mail"><br>
Comment:<br>
<input type="text" name="comment" size="50"><br><br>
<input type="submit" value="Send">
<input type="reset" value="Reset">
</form>
</article></section>
