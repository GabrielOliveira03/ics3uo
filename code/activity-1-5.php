<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>CSS Tips & Tricks Practice</title>
  <meta name="description" content="More about CSS">
  <meta name="author" content="Gabriel Oliveira">
  <link rel="shortcut icon" href="images/logo.ico">

  <!-- styles - internal (not linked) -->
  <style>
    body {
      padding: 20px 20px 20px 20px;
      color: #333333;  /* font color */
      font-family: "Futura";
      /* css backgrounds...http://lea.verou.me/css3patterns/ */
      background-color: gray;
      background-image: linear-gradient(90deg, transparent 50%, rgba(255,255,255,.5) 50%);
      background-size: 50px 50px;
    }

    a.teacher-button:link, a.teacher-button:visited , a.teacher-button:active {
      position: relative;
      display: inline-block;
      padding: 1%;
      margin: 2%; /* 2px around the outside of the link */
      background-image: linear-gradient(to top right, #f06d06, #ffffff);
      color: #333333;
      font-size: 2.1em; /* 210% of normal size */
      text-decoration: none;  /* underline or none */
      font-family: Calibri;
      border-radius: 0 0.2em 0 0.2em; /*Top/Right/Botton/Left */
      -moz-border-radius: 0.3em 0.3em 0.3em 0.3em;
      -webkit-border-radius: 0.3em 0.3em 0.3em 0.3em;
    }

    a.teacher-button:hover {
      background: #ffffff;
      color: #f06d06;
      box-shadow: 5px 5px 5px #222222;
      -webkit-box-shadow: 5px 5px 5px #222222;
      -moz-box-shadow: 5px 5px 5px #222222;
    }

    /* style the paragraph */
    p.norm {
      position: relative;
      display: inline-block;
      padding: 5px;
      background: rgba(0,0,0,0.7);
      color: #ffffff;
    }

    /* your button styles */
    a.my-button1, a.my-button2, a.my-button3, a.my-button4 {
      padding: 8px 15px;
      display: inline-block;
      margin: 0.4em 0;
    }

    a.my-button1 {
      -webkit-border-radius: 0.5em;
      -moz-border-radius: 0.5em;
      border-radius: 0.5em;
    }

    a.my-button1:link, a.my-button1:visited , a.my-button1:active {
      background: #ff0a0a;
      background-image: -webkit-linear-gradient(top, #ff0a0a, #000000);
      background-image: -moz-linear-gradient(top, #ff0a0a, #000000);
      background-image: -ms-linear-gradient(top, #ff0a0a, #000000);
      background-image: -o-linear-gradient(top, #ff0a0a, #000000);
      background-image: linear-gradient(to bottom, #ff0a0a, #000000);
      -webkit-box-shadow: 0px 3px 3px #666666;
      -moz-box-shadow: 0px 3px 3px #666666;
      box-shadow: 0px 3px 3px #666666;
      font-family: "Helvetica";
      color: #ffffff;
      font-size: 28px;
      text-decoration: none;
    }

    a.my-button1:hover {
      background: #ffffff;
      color: #f00;
      box-shadow: 5px 5px 5px #222222;
      -webkit-box-shadow: 5px 5px 5px #222222;
      -moz-box-shadow: 5px 5px 5px #222222;
    }

    a.my-button1:active{
      -webkit-box-shadow: 0px 2px 0px #d35400;
      -moz-box-shadow: 0px 2px 0px #d35400;
      box-shadow: 0px 2px 0px #d35400;
      transform: translateY(4px);
    }

    a.my-button2 {
      font-style: italic;
      -webkit-border-radius: 60px;
      -moz-border-radius: 60px;
      border-radius: 60px;
    }

    a.my-button2:link, a.my-button2:visited , a.my-button2:active {
      background: #002bff;
      background-image: -webkit-linear-gradient(top, #002bff, #e6e6e6);
      background-image: -moz-linear-gradient(top, #002bff, #e6e6e6);
      background-image: -ms-linear-gradient(top, #002bff, #e6e6e6);
      background-image: -o-linear-gradient(top, #002bff, #e6e6e6);
      background-image: linear-gradient(to bottom, #002bff, #e6e6e6);
      -webkit-box-shadow: 0px 3px 3px #666666;
      -moz-box-shadow: 0px 3px 3px #666666;
      box-shadow: 0px 3px 3px #666666;
      font-family: "Georgia";
      color: #ffffff;
      font-size: 28px;
      text-decoration: none;
    }

    a.my-button2:hover {
      background: #ffffff;
      color: #002bff;
      box-shadow: 5px 5px 5px #222222;
      -webkit-box-shadow: 5px 5px 5px #222222;
      -moz-box-shadow: 5px 5px 5px #222222;
    }

    a.my-button2:active {
      -webkit-box-shadow: 0px 2px 0px #d35400;
      -moz-box-shadow: 0px 2px 0px #d35400;
      box-shadow: 0px 2px 0px #d35400;
      transform: translateY(4px);
    }

    a.my-button3:link, a.my-button3:visited {
      font-size: 28px;
      color: #ecf0f1;
      text-decoration: none;
      border-radius: 5px;
      border: solid 1px #f39c12;
      background:#e67e22;
      text-align: center;
      -webkit-transition: all 0.1s;
      -moz-transition: all 0.1s;
      transition: all 0.1s;
      -webkit-box-shadow: 0px 6px 0px #d35400;
      -moz-box-shadow: 0px 6px 0px #d35400;
      box-shadow: 0px 6px 0px #d35400;
      font-family: "Futura";
    }

    a.my-button3:hover{
      background: #ffad66;
      color: #ffffff;
      -webkit-box-shadow: 0px 6px 0px #e07f43;
      -moz-box-shadow: 0px 6px 0px #e07f43;
      box-shadow: 0px 6px 0px #e07f43;
    }

    a.my-button3:active {
      transform: translateY(4px);
      -webkit-box-shadow: 0px 2px 0px #d35400;
      -moz-box-shadow: 0px 2px 0px #d35400;
      box-shadow: 0px 2px 0px #d35400;
    }

    a.my-button4:link, a.my-button4:visited {
      border-radius: 60px;
      -webkit-border-radius: 60px;
      -moz-border-radius: 60px;
      background-color: #f4511e;
      border: none;
      color: #FFFFFF;
      font-family: "Times New Roman";
      text-align: center;
      font-size: 28px;
      transition: all 0.5s;
      cursor: pointer;
    }

    a.my-button4 span {
      cursor: pointer;
      display: inline-block;
      position: relative;
      transition: 0.5s;
    }

    a.my-button4 span:after {
      content: '\00bb';
      position: absolute;
      opacity: 0;
      top: 0;
      right: -20px;
      transition: 0.5s;
    }

    a.my-button4:hover span {
      padding-right: 25px;
    }

    a.my-button4:hover span:after {
      opacity: 1;
      right: 0;
    }

  </style>
</head>
<body>
  <!-- main content -->
  <h1>Styling Links &amp; Other Cool Stuff</h1>

  <p class="norm">
    In this activity you will create at least one other link style with a defined class.  From this point forward all of your links on your activities must be styled.  You may want to research other css properties to further understand the cool styles you can add.
  </p>

  <h2>Teacher's Link</h2>

  <p>
    <a href="mailto:braunc@hdsb.ca" class="teacher-button">TEACHER'S LINK</a>
  </p>

  <h2>My Links</h2>

  <p>
    <a href="https://www.youtube.com" class="my-button1">Youtube</a>
  </p>

  <p>
    <a href="http://google.com" class="my-button2">
      Google
    </a>
  </p>

  <p>
    <a href="http://randomcolour.com" class="my-button3">Click here to see a random colour.</a>
  </p>

  <p>
    <a href="http://www.blankwindows.com" class="my-button4"><span>Click here to see blank windows.</span></a>
  </p>
  <!-- /main content -->

  <!-- load jquery -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</body>
</html>
