## Front-End Fundamentals Day 2

(Class 2) Exploring
• Set up Github: repositories, forks
• Continue with HTML and introduce CSS  
• Google Chrome Dev Tools
• Individual: Style your web page
• BREAKOUT GROUPS: Style the MassArt web page
HOMEWORK: Debug a web page. Identify problems. Suggest solutions. 
http://www.joylakinggallery.com/

## Code to demonstrate

<!-- Internal Style Sheet - Show Later -->
  <style>
body {
  background-color: #e9ecee;
}

h1 {
  font-family: Georgia;
  font-size: 42px;
  color: #9d3b3b;
  margin-left: 40px;
}

p {
  color: #0187d1;
  width: 600px;
  margin: 0 50% 12px 0;
}
/* --- comment out a css rule
li, a {
  color: #a61393;
}
--- */

blockquote {
  color: #0187d1;
  width: 450px;
  margin: 12px 0;
  padding: 20px;
  font-family: Georgia;
  font-size: 36px;
  text-align: center;
  border: 1px solid #0187d1;
}
</style>
<!-- End of Internal Style Sheet -->


<!-- Basic Menu at top of page -->
    <li><a href="index.html">day1</a></li>
    <li><a href="day3.html">day3</a></li>
    <h1>Diving Deeper</h1>
    <h2>More HTML</h2>
    <h3>More About Text</h3>
    <p>When you want to emphasize something, you might use <strong>bold</strong> or <em>italics</em>.</p>

    <h3>More About Links</h3>
    <h4>Image as Link</h4>
    <p><a href="sample-tutorial.html" target="_self"><img src="images/2020-02-22-09.45.58-orchid-195.jpg" alt="orchid">
    <br/></a></p>

<!-- Find Your Own Image and Place it in the document -->
    <p><a href="https://massart.edu/"><img src="images/massart-cacphome.jpg" alt="massart"></a>
    <br/>
<!-- What happens when we move the image? -->

    <h4>Email Address</h4>
    <a href="mailto:someone@example.com">Send email</a>
    <a href="mailto:anne@askdesign.biz">CONTACT US</a>
    <h3>Button Links</h3>
    <button onclick="document.location='sample-relative-link.html'">Button Link</button>

    <h3>Navigation Menus</h3>
    <p>Are you getting tired of clicking on the link at the bottom of the home page? LOL</p> 
    <p>Let's build a nav menu!<br>
    STEP 1: create a list<br>
    STEP 2: add hyperlinks to each list item<br>
    STEP 3: test!
    <ul>
      <li><a href="index.html">Home<a></li>
      <li><a href="day2.html">Day 2</li>
      <li><a href="day3.html">Day 3</li>
    </ul>

    <h3>More About Images</h3>
    <h4>Size, optimization</h4>
    <p><a href="sample-tutorial.html" target="_self"><img src="images/2020-02-22-09.45.58-orchid-195.jpg" alt="orchid" width="100";></a>

    <h3>Character codes</h3>
    <p>There are character codes for many different characters in many different languages<br>
     <p><img src="images/example-characters.jpg" alt="character codes"></p>
    Copyright symbol: &copy; ©<br>
    Registered mark: &reg; ®<br>
    Ampersand: &amp; &<br>
    A full list is available at <a href="https://dev.w3.org/html5/html-author/charref">https://dev.w3.org/html5/html-author/charref</a>

<!-- Version Control: REPL to Github -->


<!-- Back to slide show for a few minutes -->
    <h2>CSS</h2>
    <h3>What can it do?</h3>
    <ul>
      <li>Colors: fonts, background</li>
      <li>Fonts: font-family (defaults), size, weight, style</li>
      <li>Sizes: heads, text</li>
      <li>Position: alignment, margins, padding</li>
      <li>Borders</li>
    </ul>
    <p><img src="images/cssrule.jpg" alt="css rule diagram" width="500"></p>
    <ul>
      <li>A block of CSS code is a rule.</li>
      <li>The rule starts with a selector.</li>
      <li>It has sets of properties and values.</li>
      <li>A property-value pair is a declaration.</li>
    </ul>

<!-- Inline -->
    <h1>Default web fonts</h1>
    <ul>
      <li style="font-family: Arial">Arial (sans-serif)</li>
      <li style="font-family:Verdana,sans-serif">Verdana (sans-serif)</li>
      <li style="font-family: Helvetica">Helvetica, sans serif</li>
      <li style="font-family: Tahoma">Tahoma (sans-serif)</li>
      <li style="font-family: Trebuchet MS">Trebuchet MS (sans-serif)</li>
      <li style="font-family: Times">Times New Roman (serif)</li>
      <li style="font-family: Georgia">Georgia (serif)</li>
      <li style="font-family: Garamond">Garamond (serif)</li>
      <li style="font-family: Courier">Courier (monospace)</li>
      <li style="font-family: Brush Script MT">Brush Script MT (cursive)</li>
    </ul>

    <h1>Default serif web font is Times Roman</h1>
    <h1>Default h1 size is 2em (2x16px = 32px)</h2>
    <h2 style="font-family: Helvetica">Headline 2 font changed to Helvetica; default is 1.5em (1.5x16px = 24px)</h2>
    <h2 style="font-family: Arial; font-size: 28px;">Headline 2 in Arial, 28px</h2>
    <h3 style="font-family: Tahoma">Headline 3 in Tahoma; default is 1.17em (18.72px)</h3>
    <h3 style="font-family: Georgia; font-size: 20px";>Headline 3 in Georgia, 20px</h3>
    <h4 style="font-family: Garamond";>Headline 4 in Garamond; default size is 1em</h4>
    <h5 style="font-family: Courier">Headline 5 in Courier; default is .83em (13.28px)</h5>
    <h6 style="font-family: Courier";>Headline 6 in Courier; default is .67em (10.72px)</h6>
    
    <h6>What is the default weight of all headlines?</h6>
    <h6 style="font-weight: normal";>Headline 6 in Courier, normal weight</h6>
        

    <!-- paragraphs -->
http://www.cupcakeipsum.com/
    <p style="color:#0187d1">Default paragraph size is 16px. Let's grab some placeholder text. Cupcake ipsum dolor sit amet. Soufflé cake jujubes pie. Cheesecake candy canes jelly-o.

    <p style="color:#0187d1">Fruitcake dessert marshmallow donut croissant jujubes. Soufflé sweet roll lemon drops gummies pudding cake tootsie roll. Marshmallow marshmallow tiramisu macaroon jujubes cake muffin. Dessert cheesecake candy canes oat cake sesame snaps biscuit liquorice gummi bears lemon drops.</p>

    <p style="color:#0e0e43; background-color: #d4db1b">Donut chupa chups caramels tootsie roll candy canes croissant. Apple pie caramels cookie. Pie pastry dragée.</p>

    <ul style="list-style-type: none; margin:0; padding:0">
      <li style="color:#a61393">Active page.</li>
      <li style="color:#13a664">The rule starts with a selector.</li>
      <li style="color:#13a664">It has sets of properties and values.</li>
      <li style="color:#13a664">A property-value pair is a declaration.</li>
    </ul>
    <p>&nbsp;</p>

<!-- Inline -->
    <ul style="list-style-type: none; margin:0; padding:0">
      <li style="color:#a61393"><a href="#"; style="color:#a61393">Active page.</a></li>
      <li style="color:#13a664"><a href="#">The rule starts with a selector.</a></li>
      <li style="color:#13a664"><a href="#">It has sets of properties and values.</a></li>
      <li style="color:#13a664"><a href="#">A property-value pair is a declaration.</a></li>
    </ul>
<p>&nbsp;</p>
<!-- Internal - add to head area -->
<!-- Let's switch to Internal CSS -->

    <ul style="list-style-type: none; margin:0; padding:0">
      <li><a href="#">Active page.</a></li>
      <li><a href="#">The rule starts with a selector.</a></li>
      <li><a href="#">It has sets of properties and values.</a></li>
      <li><a href="#">A property-value pair is a declaration.</a></li>
    </ul>

<!-- Let's style the Quote! -->
    <blockquote>"Either the well was very deep, or she fell very slowly, for she had plenty of time as she went down to look about her and to wonder what was going to happen next….then she looked at the sides of the well, and noticed that they were filled with cupboards and book-shelves; here and there she saw maps and pictures hung upon pegs. She took down a jar from one of the shelves as she passed; it was labelled ‘ORANGE MARMALADE’, but to her great disappointment it was empty: (Ch. 1)"</blockquote>

<!-- External -->

