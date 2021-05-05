## Front-End Fundamentals Day 3

(Class 3) Styling and Customizations
• Set up code editor (Visual Studio Code)
• Set up Github Desktop
• Learn more CSS and start to style Home page
1. IDs and Classes
2. Divs and Floats
3. Layout
• Google Chrome Dev Tools
• Google Fonts
• Alternatives to divs and floats: flexbox, grid

## Code to demonstrate

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Front-End Fundamentals I - day 3</title>
    <link href="style.css" rel="stylesheet" type="text/css" />

    <style>
body {
  background-color: #e9ecee;
}

header {
  background-color: #a0abe5;
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
<!-- Let's copy this to an external style sheet -->

  </head>
  <body>
    <script src="script.js"></script>


<!-- Basic Menu at top of page -->
<header>
    <nav>
    <li><a href="index.html">day1</a></li>
    <li><a href="day2.html">day2</a></li>
    </nav>

    <h1>Styling and Customizations</h1>
</header>

<main>
  <section>
    <article>
    <h3>HTML5 Semantic Elements</h3>
    <p><img src="images/html-semantics-element-diagram.jpg" alt="html semantics diagram"></p>
    </article>
    <article>
    <h2>Visual Studio Code</h2>
    </article>
    <article>
    <h2>Github Desktop</h2>
    </article>
  </section>
  <section>
    <h2>More CSS</h2>
    <h3>IDs and Classes</h3>
    <h3>CSS exercises - https://www.w3schools.com/css/exercise.asp</h3>
  </section>
  <!-- Commit changes to Git -->

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
        <li>https://css-tricks.com/snippets/css/complete-guide-grid/
</li>
    </ul></ul>
  </section>

<!-- Commit changes to Git -->
    <p><a href="https://massart.edu/"><img src="images/massart-cacphome.jpg" alt="massart"></a>
    <br/>
<!-- Quiz -->
<a href="https://www.w3schools.com/quiztest/quiztest.asp?qtest=CSS">CSS Quiz</a>

<!-- Compare divs to flexbox -->

</main>


  </body>
</html>

