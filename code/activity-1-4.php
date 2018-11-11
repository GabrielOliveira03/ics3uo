<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Big Mac Attack!</title>

  <meta name="description" content="Big Mac Attack! Table Formatting">
  <meta name="author" content="Gabriel Oliveira">
  <link rel="shortcut icon" href="images/logo.ico">

  <link rel="shortcut icon" href="http://bit.ly/14jpviZ" />

  <!-- styles - internal (not linked) -->
  <style type="text/css">
    body {
      padding: 20px 20px 20px 20px;
      Background: url("http://actonhighschool.ca/ics/test/images/fastfood_new.jpg");
      background-size: cover;
      background-attachment: fixed;
      color: #ffffff;  /* font color */
      font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif;
    }

    #wrapper {
      position: relative;
      margin-left: auto;
      margin-right: auto;
      width: 700px;
      padding: 20px;
      background: rgba(0,0,0,0.4);
      text-align: center /* options are: left, center, right, justify */
    }
  </style>
</head>
<body>
  <!-- main content -->
  <div id="wrapper">

    <h1>Big Mac Attack!</h1>

    <h2>Table Formatting Activity</h2>

    <table border="1" cellspacing="0" cellpadding="0" width="600" height="500" align="center">

      <!-- your rows and columns go here -->
      <tr>
        <td bgcolor="#3498db" align="left";>
          <img src="https://icsprogramming.ca/test/images/big-mac.png" />
        </td>
        <td width='150px'; bgcolor="#c0392b"; align="right"; valign="top";>
          <img src="https://icsprogramming.ca/test/images/big-mac.png" />
        </td>
        <td bgcolor="#f1c40f"; valign="bottom";>
          <img src="https://icsprogramming.ca/test/images/big-mac.png" />
        </td>
      </tr>
      <tr>
        <td colspan="3" bgcolor="#95a5a6";>
          <img src="https://icsprogramming.ca/test/images/big-mac.png" align="middle" />
        </td>
      </tr>
      <tr>
        <td bgcolor="#f39c12"; align="left"; valign="bottom";>
          <img src="https://icsprogramming.ca/test/images/big-mac.png" />
        </td>
        <td colspan="2" bgcolor="#2c3e50"; align="right"; valign="top";>
          <img src="https://icsprogramming.ca/test/images/big-mac.png" />
        </td>
      </tr>

    </table>

  </div>
  <!-- /main content -->

  <!-- load jquery -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</body>
</html>
