<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<title>Gabriel Oliveira: ICS3UO</title>
	<meta name="description" content="Gabriel Oliveira's webpage for the ICS3UO course.">
	<meta name="author" content="Gabriel Oliveira">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="styles/Skeleton-2.0.4/css/normalize.css">
  <link rel="stylesheet" href="styles/Skeleton-2.0.4/css/skeleton.css">

	<style>
		body {
		  font-family: "Futura";
		  background-color: #fff;
		}

		.home-button {
		  background-color: #1e90ff;
		  color: #ffffff;
		  padding: 12px 16px;
		  margin-left: 1em;
		  font-size: 16px;
		  cursor: pointer;
		}

		.container {
			background-color: #f9fbfb;
		}

		.programs-container {
			margin-top: 1em;
		}

		.programs-container h2 {
			background-color: #124699;
			color: #fff;
			padding: 0.6em 0.6em 0.6em 0.6em;
			text-align: center;
		}
		.jobs-container h2 {
			background-color: #b20000;
			color: #fff;
			padding: 0.6em 0.6em 0.6em 0.6em;
			text-align: center;
		}
		.bib-container h2 {
			background-color: #006400;
			color: #fff;
			padding: 0.6em 0.6em 0.6em 0.6em;
			text-align: center;
		}
    .bib2-container h2 {
      background-color: #999900;
			color: #fff;
			padding: 0.6em 0.6em 0.6em 0.6em;
			text-align: center;
    }
		.header {
			padding: 1em 1em 0 1em;
			background-color: #ffb486;
			color: #fff;
			border: 1px solid #e76106;
		}

		.header h1 {
		  border-bottom: 1px solid #fff;
		}

		.school-info {
			background-color: #7397d0;
			color: #fff;
			padding: 1em;
			margin-bottom: 1em;
			border: 2px solid #124699;
		}
		.job-info {
			background-color: #ff6666;
			color: #fff;
			padding: 1em;
			margin-bottom: 1em;
			border: 2px solid #b20000;
		}
		.bib-info {
			background-color: #32cd32;
			color: #fff;
			padding: 1em;
			margin-bottom: 1em;
			border: 2px solid #006400;
		}
    .bib2-info {
      background-color: #FFFF33;
			color: #fff;
			padding: 1em;
			margin-bottom: 1em;
			border: 2px solid #999900;
    }
		.school-info h3, .school-info h4 {
			border-bottom: 2px solid #fff;
		}

		.award {
			font-weight: bold;
			color: #0b3476;
		}
		a.programs {
			color: #fff;
		}
		a.programs:hover {
			color: #124669;
		}
		a.bib {
			color: #fff;
		}
		a.bib:hover {
			color: #006400;
		}

	</style>

	<link rel="shortcut icon" href="images/logo.ico">
</head>

<body>
	<nav>
  	<a class="home-button" href="https://icsprogramming.ca/2018-2019/oliveiraff730/index.php"><i class="fa fa-home">&nbsp;Home</i></a>
	</nav><br />

  <div class="container">
		<div class="row">
			<div class="twelve columns header">
	    	<h1>Machine Learning</h1>

				<h2>Information</h2>

				<p class="information">This page displays a trend in computer science known as "machine learning", and it will tell you what machine learning is, various methods of machine learning, the outlook of machine learning in the future, and various applications of machine learning in real life.</p>
			</div>
		</div>
    <div class="row programs-container">
      <div class="column">
        <h2>About Machine Learning</h2>
        <div class="school-info">
          <h3>Definition</h3>
          <p>Machine learning is a type of artificial intelligence where systems will automatically improve and advance their programs from experience, without being programmed by a human. It focuses on the development of programs that can use data in order to learn for themselves.</p>
          <h3>How it Works</h3>
          <p>The process begins with the machine making observations from instructions or direct experience, so it can find patterns in data and make better decisions in the future based on examples that humans provide. The aim is to allow computers to learn automatically without the help of humans.</p>
          <h3>Methods of Machine Learning</h3>
          <h5>Supervised machine learning algorithms</h5>
  <p>can use what has been learned in the past to new data using examples to predict future events. Starting from analyzing a known data set, the learning algorithm produces a function to make predictions about the output values. The algorithm can also compare its output with the correct, intended output and find errors in order to modify the model accordingly.</p><hr />
          <h5>Unsupervised machine learning algorithms</h5>
          <p>are used when the information used to train the machine is not labeled nor classified. Unsupervised learning studies how systems can infer a function to describe hidden structures from unlabeled data. The system does not figure out the correct output, but it observes the data and can draw inferences from datasets in order to describe hidden structures from unlabeled data.</p><hr />
          <h5>Semi-supervised machine learning algorithms</h5>
          <p>fall in between supervised and unsupervised learning, since they use both labeled and unlabeled data – usually there is a small amount of labeled data and a large amount of unlabeled data. The systems that use this method can greatly improve their learning accuracy. Usually, semi-supervised learning is used when the acquired labeled data requires skilled and relevant resources in order to learn from it. Otherwise, acquiring unlabeled data generally doesn’t require additional resources.</p><hr />
          <h5>Reinforcement machine learning algorithms</h5>
          <p>is a method that interacts with its environment by producing actions and discovers errors or rewards. Trial and error rewards are the most relevant characteristics of reinforcement learning. This allows machines and software agents to determine the ideal behavior within a specific context in order to maximize its performance. Simple reward feedback is needed for the agent to learn which action is best. This is known as the reinforcement signal.</p>
        </div>
      </div>
    </div>

    <div class="row jobs-container">
      <div class="column">
        <h2>Applications of Machine Learning</h2>
        <div class="job-info">
          <ul>
            <li>Self driving cars have to use machine learning in order to know how to navigate</li>
            <li>Recommendations on Youtube, Netflix, and Amazon use machine learning algorithms to figure out what might be interesting to you based on what you have seen before</li>
            <li>AI assistants like Alexa and Siri use machine learning algorithms to give answers and recommendations that are tailored to your preferences</li>
            <li>Security cameras don't have to be used by humans; the cameras can detect unusual movements like people standing motionless for a long time using machine learning</li>
            <li>Social media apps use algorithms to recommend people you should follow</li>
            <li>Email services like Gmail will use machine learning algorithms to detect spam mail and will automatically filter it</li>
            <li>Search engines like google use algorithms to automatically rank search results in order of relevancy according to what you have previously looked up</li>
            <li>Machines at Paypal and online money services use machine learning algorithm to track monetary fraud. They compare millions of transactions in order to distinguish legitimate and illegitimate transactions</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row bib-container">
      <div class="column">
        <h2>The Future of Machine Learning</h2>
        <div class="bib-info">
          <h3>Predictions</h3>
          <ul>
            <li><b>Most applications will use machine learning.</b> Machine learning is a vital aspect of technology and the future of it. As technology advances, lots of more systems will use machine learning algorithms so humans do not have to do as much work, as well as making many recommendations according to the user's preferences. This level of personalization will improve customer experience everywhere.</li>
            <li><b>Machines will learn to talk like humans.</b> As AI continues to evolve, machines will be able to understand the nuances of human interactions. They will learn how to speak like humans, act like humans, and interact with humans.</li>
            <li><b>Algorithms will constantly train at a faster pace.</b> Right now, most machine learning algorithms only train once. Based on the initial training, the machine will address the new data in order to learn from the mistakes. However, machines are being developed that can connect to the internet and constantly retrain for better and faster information.</li>
            <li><b>Machine learning algorithms will lead to faster and more powerful computers.</b> CPUs themselves have had limited success running machine learning algorithms. On the other hand, GPUs are better for running these algorithms because they have a large number of simple cores. There are businesses developing field-programmable gate arrays for machine learning. At times, they can outperform GPUs.</li>
            <li><b>Machine learning will be used as a service.</b> As machine learning becomes more important in business applications, it is very likely that this technology will be offered as a cloud-based service known as Machine Learning-as-a-Service.</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row bib2-container">
      <div class="column">
        <h2>Bibliography</h2>
        <div class="bib2-info">
        <p><a href="https://www.expertsystem.com/machine-learning-definition/" class="programs">“What Is Machine Learning? A Definition.” Expert System: Artificial Intelligence: Cognitive Computing Company, 5 Oct. 2017, www.expertsystem.com/machine-learning-definition/.</a></p>
        <p><a href="https://www.sas.com/en_ca/insights/analytics/machine-learning.html" class="programs">“Machine Learning: What It Is and Why It Matters.” SAS, www.sas.com/en_ca/insights/analytics/machine-learning.html.</a></p>
        <p><a href="https://medium.com/app-affairs/9-applications-of-machine-learning-from-day-to-day-life-112a47a429d0" class="programs">Software, Daffodil. “9 Applications of Machine Learning from Day-to-Day Life.” Medium.com, Medium, 31 July 2017, medium.com/app-affairs/9-applications-of-machine-learning-from-day-to-day-life-112a47a429d0.</a></p>
        <p><a href="https://www.ibmbigdatahub.com/blog/5-predictions-future-machine-learning" class="programs">“5 Predictions for the Future of Machine Learning.” IBM Big Data & Analytics Hub, www.ibmbigdatahub.com/blog/5-predictions-future-machine-learning.</a></p>
        <p><a href="http://www.dataversity.net/future-machine-learning-artificial-intelligence/" class="programs">“The Future of Machine Learning and Artificial Intelligence.” DATAVERSITY, 5 Oct. 2018, www.dataversity.net/future-machine-learning-artificial-intelligence/.</a></p>
        <p><a href="https://www.mathworks.com/discovery/machine-learning.html" class="programs">“What Is Machine Learning? | How It Works, Techniques & Applications.” Reconstructing an Image from Projection Data - MATLAB & Simulink Example, www.mathworks.com/discovery/machine-learning.html.</a></p>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
