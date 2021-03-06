<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="referrer" content="no-referrer">

    <title>4Minitz.com - Meeting Minutes WebApp (Free and Open-Source)</title>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
</head>
<script>
    function httpGetAsync(theUrl, callback)
    {
        var xmlHttp = new XMLHttpRequest();
        xmlHttp.onreadystatechange = function() {
            if (xmlHttp.readyState === 4 && xmlHttp.status === 200)
                callback(xmlHttp.responseText);
        };
        xmlHttp.open("GET", theUrl, true); // true for asynchronous
        xmlHttp.send(null);
    }

    document.addEventListener("DOMContentLoaded", function(event) {
        const url = 'https://www.4minitz.com/version/updatecheck/landingpage/0.0';
        httpGetAsync(url, function(responsetext) {
            var tag = JSON.parse(responsetext);
            var version = undefined;
            if (tag.hasOwnProperty("tag")) {
                version = tag.tag;
            }
            console.log("4Minitz Version: >"+version+"<");
            if (version) {
                document.getElementById("4mversion").textContent="Current Stable Version: v"+version;
            }
        });
    });
</script>
<body style="background-color: teal; font-family: Verdana, Helvetica, Arial,sans-serif; color: teal;">

<div class="container">
    <div class="well" style="margin-top: 2em; background-color: #C6E9E7;">
        <div class="row">
            <div class="col-md-12" style="text-align: center;">
                <img src="4minitz_Logo256x256_transparent.png" width="128px"><br>
                <h1><b>4Minitz!</b></h1>
                <a id="4mversion" href="https://github.com/4minitz/4minitz/releases"></a>
                <h2>Simply <span style="text-decoration: line-through">the best</span> a decent free webapp for taking meeting minutes</h2>
                <h3>● Prepare Agenda ● Document Minutes ● Track Topics ●</h3>
                <p style="font-size: 120%;">Every invited & logged in user can watch changes to the current meeting minutes in real time.</p>
                <p style="font-size: 120%;">We made 4Minitz <b>free &amp; open-source software</b> (MIT License),
                as we strongly believe that sensitive information like meeting minutes should not be hosted in the cloud.
                Instead you want to host it on your own infrastructure where you can define
                the level of security and safety you need.</p><br><br>
            </div>
        </div>

        <div class="row" style="margin-top: 0.5em;">
            <div class="col-md-2 col-md-offset-4" style="margin-top: 0.5em;">
                <a class="btn btn-lg btn-danger btn-block" href="#demovideo" role="button">
                    Watch Video</a>
            </div>
            <div class="col-md-2" style="margin-top: 0.5em;">
                <a class="btn btn-lg btn-4minitz btn-block" href="https://demo.4minitz.com" role="button">
                    Try 4Minitz</a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-2 col-md-offset-2" style="margin-top: 0.5em;">
                <a class="btn btn-lg btn-default btn-block" href="https://github.com/4minitz/4minitz/blob/develop/doc/user/usermanual.md" role="button">
                    Read Doc.</a>
            </div>
            <div class="col-md-2" style="margin-top: 0.5em;">
                <a class="btn btn-lg btn-default btn-block" href="https://github.com/4minitz/4minitz/blob/develop/doc/faq.md" role="button">
                    Read F.A.Q.</a>
            </div>
            <div class="col-md-2" style="margin-top: 0.5em;">
                <a class="btn btn-lg btn-default btn-block" href="https://github.com/4minitz/4minitz/blob/develop/doc/admin/adminguide.md" role="button">
                    Install Now</a>
            </div>
            <div class="col-md-2" style="margin-top: 0.5em;">
                <a class="btn btn-lg btn-default btn-block" href="https://github.com/4minitz/4minitz/" role="button">
                    Fork Source</a>
            </div>
        </div>

<div style="text-align: center; margin-top: 2em;">
    <a href="https://www.buymeacoffee.com/4Minitz" target="_blank">
        <img class="highlight_on_hover" src="buymeacoffee_teal_50p.png" style="width: 374px; max-width: 100%;">
    </a>
</div>

        <div class="row" style="margin-top: 3em;">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading" style="font-size: 140%;">
                        <span class="glyphicon glyphicon-send" aria-hidden="true" style="font-size: 150%; top: +0.2em; color:teal;"></span>
                        &nbsp;Prepare Agenda
                    </div>
                    <div class="panel-body">
                        <ul style="padding-left: 10px;">
                            <li>Create your meeting series</li>
                            <li>Invite other users</li>
                            <li>Specify moderators and uploaders</li>
                            <li>Fill agenda with topics</li>
                            <li>Mark recurring topics for standard agenda</li>
                            <li>Send agenda to invited users</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading" style="font-size: 140%;">
                        <span class="glyphicon glyphicon-list-alt" aria-hidden="true" style="font-size: 150%; top: +0.2em; color:teal;"></span>
                        &nbsp;Document Minutes
                    </div>
                    <div class="panel-body">
                        <ul style="padding-left: 10px;">
                            <li>Mark present participants</li>
                            <li>Add action items with responsibles</li>
                            <li>Add information items to topics</li>
                            <li>Add labels like "Decision" to items</li>
                            <li>Upload binary file attachments</li>
                            <li>Send minutes &amp; action items via EMail</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading" style="font-size: 140%;">
                        <span class="glyphicon glyphicon-ok" aria-hidden="true" style="font-size: 150%; top: +0.2em; color:teal;"></span>
                        &nbsp;Track Topics
                    </div>
                    <div class="panel-body">
                        <ul style="padding-left: 10px;">
                            <li>Open action items will show up next time</li>
                            <li>Non-closed topics will show up next time</li>
                            <li>Search list of all ever discussed topics</li>
                            <li>Enrich topics with info items on follow-ups</li>
                            <li>Find topics with labels (e.g. all Decisions)</li>
                            <li>Find items by fulltext search</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <h3 style="text-align: center;">Proudly sponsored by<br>
            <a href="http://www.methodpark.com"><img src="sponsor_methodpark.png" width="250px" style="margin-top: 10px;"></a>
        </h3>
    </div>


    <div class="well" style="margin-top: 2em; background-color: #C6E9E7; text-align: center;">
        <div class="row" style="margin-top: 2em; text-align: center;">
            <a name="demovideo"></a>
            <h3>Demo Video: Learn 4Minitz in 4 Minutes</h3>

<script type="text/javascript">
var my_image = new Image();
my_image.src = 'youtube_4min_2.png';
function hover_in()
{
    document.getElementById('youtubethumb').src = 'youtube_4min_2.png';
}
function hover_out()
{
    document.getElementById('youtubethumb').src = 'youtube_4min_1.png';
}

</script>
            <div class="xembed-responsive xembed-responsive-16by9">
                <a href="https://www.youtube.com/watch?v=v28q6AaEySQ">
                    <img class="highlight_on_hover" id="youtubethumb" src="youtube_4min_1.png" onmouseenter="hover_in();" onmouseleave="hover_out();"
                    style="max-width:900px; width: 100%;">
                </a>
            </div>
        </div>
    </div>


    <div class="well" style="margin-top: 2em; background-color: #C6E9E7; text-align: center;">
        <div class="row" style="margin-top: 2em; text-align: center;">
            <h3>4Minitz Screen Shot</h3>
            (Click image to enlarge)
            <a href="4minitz_screenshot.png"><img class="highlight_on_hover" src="4minitz_screenshot.png" width="100%"></a>
        </div>
    </div>


    <div class="well" style="margin-top: 2em; background-color: #C6E9E7;">
        <div class="row" style="margin-top: 2em;">
            <h3 style="text-align: center;">User Features</h3>
            <div class="col-md-8 col-md-offset-2">
                <ul class="featurelist">
                    <li>Realtime updates for remote participants</li>
                    <li>Secure role concept for invited people
                    <ul class="featurelist2">
                        <li>Moderator: May edit and delete stuff</li>
                        <li>Uploader: May only view stuff, but may also upload files</li>
                        <li>Invited: Only view stuff</li>
                        <li>Informed: No web access, but will receive minutes via mail</li>
                        <li>Additional: One-time participant, will only receive minutes mail</li>
                    </ul></li>
                    <li>Business approved workflow
                    <ul class="featurelist2">
                        <li>Prepare and send agenda</li>
                        <li>Mark present people (one click)</li>
                        <li>Document information and action items</li>
                        <li>Stick customized label categories</li>
                        <li>Finalize meeting and send protocol</li>
                        <li>Open follow-up meeting</li>
                        <li>Track all open topics and action items</li>
                    </ul></li>
                    <li>Clear hierarchical structure: Topics &gt; Information / Action Items &gt; Details</li>
                    <li>Drag'n'Drop to re-order topics and items</li>
                    <li>Quick entry mode for new topics</li>
                    <li>Recurring topics (for standard agenda)</li>
                    <li>Skip topic once (for special agenda)</li>
                    <li>Version number for re-finalized meetings</li>
                    <li>Older meeting minutes cannot be changed</li>
                    <li>Admin Mode: Register & block users, broadcast messages</li>
                    <li>Admin cannot see meeting contents (except: via database dump)</li>
                    <li>Label Editor: per meeting series labels & colors</li>
                    <li>Markdown Editor for details (Easy entry of bold, italic, bullet lists, ...)</li>
                    <li>Upload file attachments (e.g., Powerpoints) to meeting minutes</li>
                    <li>Download finalized meeting protocols for personal backup</li>
                    <li>Search all-time topic history</li>
                    <li>My Action Items: Shows my AI across multiple meeting series</li>
                </ul>
            </div>
        </div>

        <div class="row" style="margin-top: 2em;">
            <h3 style="text-align: center;">Technical Features</h3>
            <div class="col-md-8 col-md-offset-2">
                <ul class="featurelist">
                    <li>Free &amp; open source software: host your own!</li>
                    <li>Very open <a href="https://github.com/4minitz/4minitz/blob/develop/LICENSE.md">
                        MIT License</a></li>
                    <li>Built with <a href="https://www.meteor.com">Meteor JS</a></li>
                    <li>Only two external dependencies: Node.js and MongoDB</li>
                    <li>Browser compatibility: current Chrome, Firefox, Safari, Edge
                        <ul class="featurelist">
                            <li>IE11: seems to work - but not guaranteed ;-)</li>
                        </ul>
                    </li>
                    <li>Docker deployment for quick testing and production use</li>
                    <li>Responsive UI - works on desktops, tablets and smart phones</li>
                    <li>LDAP / ActiveDirectory support (user import and authentication)</li>
                    <li>SMTP for sending agenda, meeting minutes and action items</li>
                    <li>Many admin configuration options. E.g.:
                    <ul class="featurelist2">
                        <li>Binary upload: switch on/off, specify server path, ...</li>
                        <li>User self registering: switch on/off</li>
                        <li>Enforce EMail verification: switch on/off</li>
                        <li>Regular LDAP imports (without password!)</li>
                        <li>Download generated protocols: switch on/off</li>
                    </ul></li>
                    <li>Over 300 End2End and over 300 Unit tests ensure quality</li>
                </ul>
            </div>
        </div>
    </div>


    <div class="well" style="margin-top: 2em; background-color: #C6E9E7; text-align: center;">
        <a href="impress.html">Impressum (Legal Notice)</a> <br><br>
        <a href="dataprivacy.html">Datenschutzerklärung (Data Privacy)</a> <br><br>
        Coded with ❤️  &nbsp;by the <a href="https://github.com/4minitz/4minitz/graphs/contributors">4Minitz Team</a>
        <br><br>
<?php
include("counter.php");
?>
    </div>

    <div class="hidden-xs">
        <a href="https://github.com/4minitz/4minitz" target="_new" class="github-corner"
           aria-label="View 4Minitz source on Github">


            <svg width="80" height="80" viewBox="0 0 250 250"
                 style="fill:#44cccc; color:#151513; position: fixed; top: 0; border: 0; right: 0;" aria-hidden="true">
                <path d="M0,0 L115,115 L130,115 L142,142 L250,250 L250,0 Z"></path>
                <path d="M128.3,109.0 C113.8,99.7 119.0,89.6 119.0,89.6 C122.0,82.7 120.5,78.6 120.5,78.6 C119.2,72.0 123.4,76.3 123.4,76.3 C127.3,80.9 125.5,87.3 125.5,87.3 C122.9,97.6 130.6,101.9 134.4,103.2"
                      fill="currentColor" style="transform-origin: 130px 106px;" class="octo-arm"></path>
                <path d="M115.0,115.0 C114.9,115.1 118.7,116.5 119.8,115.4 L133.7,101.6 C136.9,99.2 139.9,98.4 142.2,98.6 C133.8,88.0 127.5,74.4 143.8,58.0 C148.5,53.4 154.0,51.2 159.7,51.0 C160.3,49.4 163.2,43.6 171.4,40.1 C171.4,40.1 176.1,42.5 178.8,56.2 C183.1,58.6 187.2,61.8 190.9,65.4 C194.5,69.0 197.7,73.2 200.1,77.6 C213.8,80.2 216.3,84.9 216.3,84.9 C212.7,93.1 206.9,96.0 205.4,96.6 C205.1,102.4 203.0,107.8 198.3,112.5 C181.9,128.9 168.3,122.5 157.7,114.1 C157.9,116.9 156.7,120.9 152.7,124.9 L141.0,136.5 C139.8,137.7 141.6,141.9 141.8,141.8 Z"
                      fill="currentColor" class="octo-body"></path>
            </svg>
        </a>
    </div>
</div>
</body>
</html>
