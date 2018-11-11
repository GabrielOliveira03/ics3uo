<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Programming Languages</title>
  <meta name="description" content="Webpage about programming languages">
  <meta name="author" content="Gabriel Oliveira">
  <link rel="shortcut icon" href="images/logo.ico">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    body {
      background-image: url("https://wallpaper-gallery.net/images/cool-background-image/cool-background-image-8.jpg");
      height: 100%;
      background-position: top;
      background-repeat: no-repeat;
      background-size: cover;
      color: #3c3c3c;
      font-family: "Futura", Arial, sans-serif;
			background-color: #eee;
			margin: 0;
    }

    table, td {
      padding: 10px;
      background-color: #ffffff;
    }

    th {
      background-color: #003366;
    }

    .programming-languages-list {
      list-style-type: none;
    }

    .programming-languages-list li {
      display: block;
      line-height: 4em;
    }

    #main {
      line-height: 1.4em;
      font-size: 1.2em;
    }

    #layout {
      width: 960px;
      margin: 0px auto;
    }

    #layout th {
      color: #fff;
      padding: 1em;
      font-size: 3em;
    }

    #layout td {
      vertical-align: top;
    }

    .home-button {
      background-color: #1e90ff;
      color: #ffffff;
      padding: 12px 16px;
      margin-left: 1em;
      font-size: 16px;
      cursor: pointer;
    }

    .button:hover {
      background-color: #002366;
    }

    .iframeWrapper {
      position: relative;
      padding-bottom: 56.25%;
      width: 100%;
      height: 0;
    }

    .iframeWrapper iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
    }
  </style>
</head>

<body>
  <nav>
    <a class="home-button" href="https://icsprogramming.ca/2018-2019/oliveiraff730/index.php"><i class="fa fa-home">&nbsp;Home</i></a>
  </nav>
  <div id="main">
    <table id="layout">
      <tr>
        <th colspan="2">Programming Languages</th>
      </tr>
      <tr>
        <td>
          <img src="http://icsprogramming.ca/examples/images/assembly-operating-language-application.jpg" title="Flowchart" alt="flowchart" />
          <p>
            The <strong>operating system</strong> is the most important part of a computer. It's an interface between the hardware of a computer and the programs requesting input/output. It manages the hardware's resources such as processors and memory, and it is responsible for the sharing of I/O between many programs. An OS is split into two parts: System software which manages the operation of a computer and application software which enables the user to perform a specific task.
          </p>
          <p>
            An <strong>application</strong> can come in many forms. It can be a calculator, a web browser, a game or a photo editor. They have user interfaces which help a non-experienced user perform a task without computer knowledge. These applications are written with <strong>programming languages.</strong>
          </p>
          <p>
            <strong>Programming languages</strong> comprise sets of instructions that a computer reads to produce output.
          </p>
          <p>
            There are many different languages that a user can write programs in, and there are many differences between the languages such as runtime and syntax. There are different types of programming languages; some are used for application development, some are used for data manipulation and some can do everything. In conclusion, the languages are used to develop applications which allows the user to do many different things on one single computer.
          </p>
        </td>
        <td>
          <h2>Machine Code/Interpreters & Compilers</h2>
          <div class="iframeWrapper">
            <iframe width="966" height="543" src="https://www.youtube.com/embed/1OukpDfsuXE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          </div>
          <p>
            An assembly language is the most basic programming language for any processor. With an assembly language, a programmer works with operations that are implemented directly inside the CPU. Due to the age of assembly languages, there are no convenient features such as variables and the languages are not portable. However, they can carry out some operations not possible on high-level languages, and because of the simplicity they are very fast to work with, so assembly languages can still be useful. Low-level languages are used to manage and operate the computer's hardware. Because of this, programs written on a low-level language can be directly executed on the computer's hardware without translating it into machine code.
          </p>
          <p>
            High-level languages are languages that are designed to be human-friendly. They are a lot easier to understand (from a human's perspective) which makes them very popular. They are not used for operating hardware and therefore all code must compile; it must be translated into machine language in order for the computer to run it.
          </p>
          <p>
            As explained before, high-level programming languages are easy for humans to learn, as our brains can process the lines into real sentences that tell us what the program is doing. However a computer cannot read these languages, so interpreters and compilers come in to convert the language into machine language, or binary.
          </p>
          <p>
            Interpreters are used by languages such as Python and Ruby, and the main difference is that they scan the code one statement at a time, while compilers (used by languages such as Java and C++) scan the entire program and translates it as a whole. Because of this interpreters scan the code a lot faster but execute the code slower, while compilers take a long time to scan but they execute the code very quickly. Finally, debugging is easy if an interpreter is used because it scans one statement at a time, thus it will stop scanning at the first error which allows you to know where the bugs are. A compiler only displays an error message after it finishes scanning the entire program and so debugging is harder than using an interpreter.
          </p>
        </td>
      </tr>
      <tr>
        <td>
          <h3>More about Programming Languages</h3>
          <ul class="programming-languages-list">
            <li>
              <a href="http://php.net" ><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/2000px-PHP-logo.svg.png" width='100' /></a>
            </li>
            <li>
              <a href="https://www.python.org"><img src="https://img.pngio.com/python-logo-python-logo-png-268_300.png" width='100' /></a>
            </li>
            <li>
              <a href="https://go.java/index.html?intcmp=gojava-banner-java-com"><img src="https://diylogodesigns.com/wp-content/uploads/2017/07/java-logo-vector-768x768.png" width='100' /></a>
            </li>
            <li>
              <a href="https://docs.microsoft.com/en-us/dotnet/csharp/getting-started/introduction-to-the-csharp-language-and-the-net-framework"><img src="https://camo.githubusercontent.com/0617f4657fef12e8d16db45b8d73def73144b09f/68747470733a2f2f646576656c6f7065722e6665646f726170726f6a6563742e6f72672f7374617469632f6c6f676f2f6373686172702e706e67" width='100' /></a>
            </li>
            <li>
              <a href="https://www.thoughtco.com/candand-for-beginners-958278"><img src="https://sdtimes.com/wp-content/uploads/2018/03/cpppp-490x490.png" width='100' /></a>
            </li>
          </ul>
        </td>
        <td>
          <h3>Vancouver, BC</h3>
          <div class="iframeWrapper">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83327.35775787881!2d-123.19394362633214!3d49.2578263202102!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548673f143a94fb3%3A0xbb9196ea9b81f38b!2sVancouver%2C+BC!5e0!3m2!1sen!2sca!4v1536669515418" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
          <p>
            This is a map of the city of Vancouver, British Columbia. It is my favourite place in the world and I have been there 5 times so far. It's an urban city with many parks and beaches, and it's surrounded by mountains and clear water. The climate is a lot nicer than the GTA in that it's more moderate than in the GTA. Vancouver has a good mix of nature and city, and the environment is very well maintained there. There are a lot of outdoor spaces to go and do whatever you want, but there's also many stores in the urban areas so you can always find something to do. To an outsider this is one of two cities you must go to if you're visting Canada, the other being Toronto.
          </p>
        </td>
      </tr>
    </table>
  </div>
</body>
</html>
