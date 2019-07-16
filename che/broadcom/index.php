<?php
  include '../includes/variables.php';

  // Define page title
  $pageTitle = 'Eclipse Che | Broadcom';
  // Define body class
  $bodyClass = 'technology';

  include '../includes/head.php';
  include '../includes/header.php';
?>


<div class="jumbotron">
  <div class="container-fluid">
    <h1>Case Study</h1>
    <h3>CA Technologies, A Broadcom Company.</h3>
    <img alt="" class="img-responsive" src="../images/hero-technology@2x.png" />
  </div> <!-- /.container-fluid -->
</div> <!-- /.jumbotron -->

<div class="tech">
  <div class="container-fluid content">
    <h2>Overview</h2>
    <p><b></b></p>
    <p>CA Technologies, a Broadcom company, has been leveraging Eclipse Che and the Language Server Protocol (LSP) to deliver a modern development environment for COBOL developers on the IBM System z mainframe. Recently CA's Venkat Balabhadrapatruni talked about CA's experience with Che. This post is based on his presentation, <a href="https://www.youtube.com/watch?v=Z9w2iDYsgKg">which can be viewed here</a>. </p>
    <p>This use case emphasizes Che's flexibility; it's doubtful that many people think of Che as a mainframe development platform. CA wants to provide a modern development environment for IBM System z developers. Although they're still in the early stages, they have made a great deal of progress.</p>
    <p><b>Some background:</b> CA is the largest independent software vendor on z/OS. Their focus is to provide tools for mainframe access, monitoring, tuning, and other things useful to developers and operators. Venkat's group is specifically focused on delivering DevOps solutions for the z/OS community, emphasizing that DevOps is as applicable to the mainframe environment as it is to anywhere else. They're keeping the mainframe community in sync with the latest trends in the world of software development.</p>
    <p>Any modern development lifecycle needs an SCM; CA's product, Endeavor, is the biggest SCM system running on the mainframe. It delivers a full set of versioning capabilities as well as the build environment. They also have a debugger and a fault analyzer (“fault” the mainframe term for an exception, more or less). Their tools handle COBOL, PL/I, and assembler. Other CA products include data access and file editors. Those are the core of the CA product portfolio, all of which run natively on the mainframe. </p>
    <p>In any enterprise digital transformation, mainframes are included. Their reliability and scalability and security are unmatched. DevOps transformation with mainframes is a major business initiative. You can't swipe a credit card without a mainframe getting involved. </p>
    <p>In today’s industry, there is a changing of the guard. The original developers of the software that runs the world are slowly retiring, so organizations are bringing in new talent to maintain and transform mainframe applications. Given that every bank and insurance company has a mobile application, speed and flexibility are critical. That's what is driving the current mainframe software development environment. </p>
    <p>The mainframe is not just a big honking box; it has evolved over the years to support pretty much any app you can think of. Docker on z/Linux and Apache Spark clusters are two examples you probably don’t think of when you hear the word “mainframe.” The mainframe is constantly evolving. Development tools should as well. CA's goal is to make their tools look like any development environment.</p>
    <p><a href="https://zowe.org/home/">Zowe</a> is part of the Open Mainframe Project. It is a collaboration by CA, IBM, and Rocket Software. They announced the first version of Zowe in October, 2018. It's an extensible framework that provides access to z/OS. The goal is to make the z/OS mainframe an agile platform. The core tenet that delivers this is providing access via standard REST APIs. All of the source code for Zowe is licensed under EPL 2.0.</p>
    <p>Zowe contains an API mediation layer, a CLI, and a web desktop. The cloud/web IDE is Che, as you would expect, and it leverages the Zowe infrastructure. Che uses the Zowe REST API and other tools. This gives CA a CLI for build and deploy, a web desktop for operations, and a Che-based IDE and CLI. The core of Zowe includes the API mediation layer, the CLI, and the web desktop for the ops folks. CA is adding extensions to Che to invoke Zowe. This givesmainframe developers a much cleaner, easy-to-use UI that lets them develop a COBOL application or a mobile application in a seamless way using the same IDE.</p>
    <p></p>
    <p></p>
    <h2>Why Che?</h2>
    <p>Their goals were to offer a state-of-the-art solution for mainframe developers that provides access to mainframe tools. The CA team wants easy, faster access to tool stacks to develop multi-language, multi-platform applications, and they want to provide developers choice through server-based abstraction layers like the LSP and DAP (the Debugger Adapter Protocol). They want to get away from the ISPF interface used by many mainframe applications. By leveraging Eclipse, they created plugins that provide access to the mainframe data. That gave them an IDE that worked with the mainframe.</p>
    <p>The Che community is familiar with the common problems with a rich client environment: If you've got 2,000 mainframe developers, maintaining those 2,000 images is extremely difficult. They wanted something that is web-based, easy to onboard, delivers faster access to tools, and has easy setup and maintenance. Those are the core problems with the Eclipse IDE. Containerization is another issue. They want to build containerized apps. They wanted a modern IDE that could be integrated with other tools. So they picked Che.</p>
    <p>The first thing a developer needs is access to the artifacts. CA uses Endevor, so they provided a git interface to the Endevor subsystem. That lets Che assume it's working with a git repo. Anything that Che does (a git push, for example) is automatically mapped to the appropriate Endevor environment. That means new developers don't have to know anything other than git.</p>
    <p>They started their journey with COBOL. Not a lot of new COBOL development is going on right now, but there is lots of maintenance on 20K - 30K LOC COBOL apps. They delivered LSP adapters for COBOL, PL/I, JCL, and assembler. They also support VSAM and the IMS database. Another complication: the mainframe has record-oriented languages (every line is 80 characters long). So you need to have an awareness of the rules for line continuation, for example. In addition, the mainframe is in EBCDIC while the workstation running Che is ASCII/UTF-8. That means the editor has to handle this automatically and correctly every time.</p>
    <p>For debugging, they are working on a prototype of a DAP adapter to drive the CA debugger on the mainframe using their REST interfaces. As part of his presentation, Venkat did a demo of a Che workspace that interacts with the mainframe. He showed a preconfigured workspace that can do a clone of an Endeavor repo. The code in the Che workspace is actually on the mainframe in a different SCM, but the LSP and the git interface to the mainframe SCM makes this transparent. Venkat showed syntax highlighting, error flagging, code assist, etc. Users now have the ability to take advantage of whatever git offers. They can do compares, merges, etc. They can even do a git commit that actually pushes the file into Endevor and kicks off the pipeline that rebuilds the code. Venkat also mentioned their prototype implementation of DAP. It currently only has breakpoints, but they’re working to expand its capabilities. The demo was an overview of where they are and how they are extending Che to make the life of a developer easier.</p>
    <p>CA is pushing the boundaries of what Che can do and where it can be useful. If you’re a mainframe developer, you should definitely keep an eye on the project as it goes forward. </p>
    <p>Source material: <a href="https://www.youtube.com/watch?v=Z9w2iDYsgKg">Extending Che for the Modern Mainframe Developer</a></p>

      <div class="clearfix"></div>
    </div> <!-- .row -->


  </div> <!-- .container-fluid -->
</div> <!-- .tech -->

<hr class="gray">
<div class="container-fluid content">
    <h2>Who is Extending Che?</h2>

    <div class="row">
      <div class="col-md-4">
        <a href="<?php echo $rootPath; ?>/extend/more/" target="_blank" style="text-decoration: none"><img src="../images/img-start-plugin.png" style="height: 111px" class="img-responsive" alt="extend-eclipse-che"></a>
        <h3><a href="<?php echo $rootPath; ?>/extend/more/" target="_blank">Interested to Contribute?</a></h3>
        <p>Discover how to build Eclipse Che plug-ins and create your custom Cloud IDEs.</p>
      </div>

      <div class="col-md-4">
        <a href="<?php echo $rootPath; ?>/extend/silexica/" target="_blank"><img src="<?php echo $rootPath; ?>/images/logo-silexica@2x.png" style="height: 111px" class="img-responsive"></a>
        <h3><a href="<?php echo $rootPath; ?>/extend/silexica/" target="_blank">Silexica</a></h3>
        <p>Developer tooling for simplifying multicore platform development based on Che.</p>
      </div>

      <div class="col-md-4">
        <a href="<?php echo $rootPath; ?>/extend/sap/" target="_blank"><img src="../images/logo-extend-sap@2x.jpg" style="height: 111px" alt="Samsung"></a>
        <h3><a href="<?php echo $rootPath; ?>/extend/sap/" target="_blank">SAP IDE for HANA</a></h3>
        <p>A tailored development environment for SAP HANA based on Che.</p>
      </div>
    </div> <!-- .row -->

    <div class="row">
      <p>&nbsp;</p>
      <br>
      <h3 class="col-sm-12">More Case Studies</h3>

      <ul class="col-md-12">
        <li><a href="<?php echo $rootPath; ?>/extend/bitnami/">Bitnami integrates developer containers</a> with frameworks for Express, Laravel, Rails, and others.</li>
      </ul>

    </div> <!-- .row -->
  </div>
</div>

<?php include '../includes/footer.php'; ?>
