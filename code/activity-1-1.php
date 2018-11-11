<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>ACTIVITY 1-1 - Gabriel</title>

  <meta name="description" content="Activity 1-1 - Computer Programming">
  <meta name="author" content="Gabriel Oliveira">
  <link rel="shortcut icon" href="images/logo.ico">

  <!-- styles - internal (not linked) -->
  <style>
    body {
      padding: 10px;
      background: url("https://icsprogramming.ca/test/images/fence.jpg");
      color: #333333;  /* font color */
      font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif;
    }

    table, th, td {
      border: 1px solid black;
    }

    a:link, a:visited, a:active {
      color: #3e3e3e;
      text-decoration: underline;
    }

    a:hover {
      color: #ffffff;
      text-decoration: none;
      background-color: #9400d3;
    }

    .para1 {
      font-size: 1.4em;
      color: #0355fa;
      font-family: "Papyrus";
      background-color: #ffa500;
      padding: 20px;
    }

    .red-text {
      color: #ff0000;
    }

    .green-text {
      color: #00ff00;
    }

    .blue-text {
      color: #0000ff;
    }
  </style>
</head>

<body>
  <!-- main content -->

  <h1>This is an h1 heading.</h1>

  <p>
    This activity involves creating HTML code that will reproduce this output accurately.  The body has a 10px padding around the whole thing and the font is "Century Gothic." There is a background ­image: url("http://ics.actonhighschool.ca/test/images/fence.jpg"); as well. The default links have a link, visited, and active color of 3e3e3e and text­ decoration underline. The hover state color is #ffffff (white), no text­ decoration and background­ color of #9400d3.
  </p>
  <hr />
  <h2>HTML is Easy To Learn (h2 title)</h2>
  <hr />
  <p>
    Welcome to the world of the <strong>World Wide Web</strong>. This is the first paragraph. While short it is <em>still</em> a paragraph!
  </p>
  <p>
    This is the second paragraph. It is also short and boring. Let's create a link to the <a href="https://www.w3schools.com/tags/">HTML Element Reference</a>.
  <p>
    In the third paragraph we'll try line breaks...
    <br />H
    <br />E
    <br />L
    <br />L
    <br />O
    <br />
    <br />
  </p>
  <p>
    Let's create two different types of links.
  </p>
  <p>
    &raquo; Link to <a href="https://www.google.com/?safe=active&ssui=on">google</a>
  </p>
  <p>
    &raquo; Create an email (mailto) link to <a href="mailto:braunc@hdsb.ca">braunc@hdsb.ca</a>
  </p>
  <p class="para1">
    This paragraph has the font "Papyrus", font-size of 1.4em, and text color #0355fa. This paragraph has the class name of "para1". It also has a padding of 20px and a background-color of #FFA500 (orange).
  </p>
  <p>
    Different colours using the "span" tag: <span class="red-text">class "red­-text" and color #ff0000 ­- RED</span> - <span class="blue-text">class "blue­-text" and color #0000ff -­ BLUE</span> ­- <span class="green-text">class "green­-text" and color #00ff00 ­- GREEN</span>
  </p>
  <p>
    Now to the good stuff. <em><strong>Unordered Lists!</strong></em>
  </p>
  <ul>
    <li>Dog</li>
    <li>Cat</li>
    <li>Bird</li>
  </ul>
  <p>
    And <em><strong>Ordered lists!</strong></em>
  </p>
  <ol>
    <li>First</li>
    <li>Second</li>
    <li>Third</li>
  </ol>
  <p>
    Finally, a basic table
  </p>
  <table>
    <thead>
      <tr>
        <th>COLUMN 1</th>
        <th>COLUMN 2</th>
        <th>COLUMN 3</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Python</td>
        <td>Ruby</td>
        <td>Java</td>
      </tr>
      <tr>
        <td>C++</td>
        <td>C#</td>
        <td>SQL</td>
      </tr>
      <tr>
        <td>HTML</td>
        <td>CSS</td>
        <td>PHP</td>
      </tr>
    </tbody>
  </table>
  <!-- end main content -->

  <!-- load jquery -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</body>
</html>
