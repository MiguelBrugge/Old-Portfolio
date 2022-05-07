
<div id="AboutMe" class="container-fluid secondBgColor backgroundSize pageContainer">
<h1 class="title">About Me</h1>
    <div class="aboutMeItemParent">
        <div class="aboutMeItem myself">
            <img class="aboutMeIcon" src="Images/MyselfIcon.png">
            <div class="aboutMeItemText">
                <span class="secondTextColor itemTitle">Myself</span><br>
                Learn more about my hobbies and teamroles.
            </div>
            <button class="Button aboutMeItemButton" id="myselfButton" type="button" data-bs-toggle="offcanvas" data-bs-target="#myselfCanvas">
                Read more
            </button>
        </div>
        <div class="aboutMeItem education">
            <img class="aboutMeIcon" src="Images/EducationIcon.png">
            <div class="aboutMeItemText">
                <span class="secondTextColor itemTitle">Education</span><br>
                Find out why I choce this career path and how it is going so far.
            </div>
            <button class="Button aboutMeItemButton" type="button" data-bs-toggle="offcanvas" data-bs-target="#educationCanvas">
                Read more
            </button>
        </div>
        <div class="aboutMeItem codeLanguages">
            <img class="aboutMeIcon" src="Images/CodeIcon.png">
            <div class="aboutMeItemText">
                <span class="secondTextColor itemTitle">Code Languages</span><br>
                These are the coding languages I learned.
                The progressbars is based on my grades.
            </div>
            <div class="codingLanguageBars">
                <div class="codingLanguage">
                    Java
                    <div class="progress">
                    <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 85%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="codingLanguage">
                    SQL
                    <div class="progress">
                    <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 70%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="codingLanguage">
                    HTML/CSS
                    <div class="progress">
                    <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 80%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="codingLanguage">
                    PHP
                    <div class="progress">
                    <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 75%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="codingLanguage me-5">
                    JavaScript
                    <div class="progress">
                    <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 70%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="offcanvas offcanvas-bottom h-75 d-inline-block Canvas myselfCanvas" id="myselfCanvas">
<div id="body">
    <div class="offcanvas-header">
        <button type="button" class="closeButton bg-white border" id="close" data-bs-dismiss="offcanvas">Close</button>
    </div>
    <h1 class="title">Myself</h1>

    <div class="tab">
            <button class="tablinks active" onclick="openCity(event, 'Teamroles')">Teamroles</button>
            <button class="tablinks" onclick="openCity(event, 'Hobbies')">Hobbies</button>
    </div>

    <div class="pageContainer">

        <div id="Teamroles" class="tabcontent scrollContent" style="display: block;">
            <h3>My Teamroles</h3>
            I took two teamrole tests and these are my results.
            <br></br>
            
            <h4 class="itemTitle secondTextColor">Belbin</h4>
            <p>
                <h5>Specialist</h5>
                Brings in-depth knowledge of a key area to the team.
                Single-minded, self-starting and dedicated. Provide knowledge and skills.
                <br><br>
                <h5>Monitor</h5>
                Provides a logical eye, making impartial judgements where required and 
                weighs up the team's options in a dispassionate way.
                Sober, strategic and discerning. Sees all options and judges accurately.
            <p>
            <br>

            <h4 class="itemTitle secondTextColor">Idrlabs</h4>
            <p>
                <h5>Diplomat</h5>
                Sympathetic empaths who keep the team running smoothly. They are good listeners and mediators, talented at 
                smoothing over conflicts and helping opposed parties understand one another without becoming confrontational.
                <br><br>
                <h5>Judge-Appraiser</h5>
                Fair and logically minded observers and evaluators of what 
                is going on with the team. Since they are good at detaching themselves from bias, 
                they are often the ones to see all available options with the greatest clarity and impartiality.
            </p>
        </div>

        <div id="Hobbies" class="tabcontent scrollContent hobbyContent">
            <h3>Hobbies</h3>
            These are my hobbies. 
            <br><br>
            <h5>Judo</h5>
                I was doing Judo from age 6 to 16. I got the brown belt.
                I did Judo every friday for fun and I did not do any competitions.
                <br><br>
            <h5>Watching Films/Series</h5>
                As you can see by the background I am a Star Wars fan. I like to play games, 
                watch films/movies/video's and talk about Star Wars. I also watch other movies 
                like The Lord Of The Ring and Spiderman. 
                <br><br>
            <h5>Gaming</h5>
                I am not the biggest gamer, but I still like to play games. Some games I loved
                playing are: Minecraft, Roblox, Star Wars Battlefront 2, Adventure Quest Worlds
                and Need for Speed. The games I still play are Roblox and Battlefront.
                <br><br>
            <h5>Developing</h5>
                A few years ago I made games on the Roblox platform. 
                I learned the basics of the Lua scripting language.
                <br><br>
            <h5>Modeling</h5>
                Part of my developing experience was to learn how to model 3D objects 
                using Blender(a 3D software). I started doing it to make Robux(ingame currency on Roblox)
                by doing commissions for other Roblox developers. I stopped after a few months and sometimes 
                make 3D models for fun now.
                <br><br>
            <h5>Image editing</h5>
                During the pandemic I teached myself the basics of image editing using 
                Photopea(a software image editing compareable to Photoshop.) I still edit 
                images for fun.
                <br><br>
        </div>

    </div>
</div>
</div>

<div class="offcanvas offcanvas-bottom h-75 d-inline-block Canvas myselfCanvas" id="educationCanvas">
<div id="body canvasBody">
    <div class="offcanvas-header">
        <button type="button" class="closeButton bg-white border" id="close" data-bs-dismiss="offcanvas">Close</button>
    </div>
    <h1 class="title">Education</h1>

    <div class="tab">
            <button class="tablinks active" onclick="openCity(event, 'Education')">Education</button>
            <button class="tablinks" onclick="openCity(event, 'Sprint1')">Sprint 1</button>
            <button class="tablinks" onclick="openCity(event, 'Sprint2')">Sprint 2</button>
            <button class="tablinks" onclick="openCity(event, 'Sprint3')">Sprint 3</button>
            <button class="tablinks" onclick="openCity(event, 'Sprint4')">Sprint 4</button>
            <button class="tablinks" onclick="openCity(event, 'Sprint5')">Sprint 5</button>
            <button class="tablinks" onclick="openCity(event, 'Sprint6')">Sprint 6</button>
    </div>

    <div class="pageContainer educationContainer">

        <div id="Education" class="tabcontent" style="display: block;">
            <h3>My career choice</h3>
                The career choice I made is to become a Software Developer. I go to school to become one.
                I chose to become a Software Developer, because I love to program and I want to become better
                at it. My end goal is to become a real Software developer and be able to create whatever I want or need to.
                <br><br>
        </div>

        <div id="Sprint1" class="tabcontent">
            <h3>Sprint 1</h3>
            <br></br>
            <table>
                <tr>
                    <th>Subject</th>
                    <th>Assignment</th>
                    <th>Test</th>
                    <th>Assessment</th>
                </tr>
                <tr>
                    <td>Programming</td>
                    <td>G</td>
                    <td>10</td>
                    <td>G</td>
                </tr>
                <tr>
                    <td>Databases</td>
                    <td>V</td>
                    <td>9</td>
                    <td>V</td>
                </tr>
                <tr>
                    <td>Front-End</td>
                    <td>G</td>
                    <td>8,8</td>
                    <td>G</td>
                </tr>
                <tr>
                    <td>Scrum</td>
                    <td>G</td>
                    <td>8</td>
                    <td>G</td>
                </tr>
                <tr>
                    <td>Career management</td>
                    <td>V</td>
                    <td>7</td>
                    <td>V</td>
                </tr>
                <tr>
                    <td>Software Engineering</td>
                    <td>G</td>
                    <td>7,3</td>
                    <td>V</td>
                </tr>
            </table>
        </div>

        <div id="Sprint2" class="tabcontent">
        <h3>Sprint 2</h3>
            <br></br>
            <table>
                <tr>
                    <th>Subject</th>
                    <th>Assignment</th>
                    <th>Test</th>
                    <th>Assessment</th>
                </tr>
                <tr>
                    <td>Programming</td>
                    <td>G</td>
                    <td>7,5</td>
                    <td>V</td>
                </tr>
                <tr>
                    <td>Databases</td>
                    <td>G</td>
                    <td>9</td>
                    <td>G</td>
                </tr>
                <tr>
                    <td>Front-End</td>
                    <td>G</td>
                    <td>8,1</td>
                    <td>G</td>
                </tr>
                <tr>
                    <td>Scrum</td>
                    <td>G</td>
                    <td>8</td>
                    <td>G</td>
                </tr>
                <tr>
                    <td>Career management</td>
                    <td>G</td>
                    <td>7</td>
                    <td>V</td>
                </tr>
                <tr>
                    <td>Software Engineering</td>
                    <td>V</td>
                    <td>9,1</td>
                    <td>V</td>
                </tr>
            </table>
        </div>

        <div id="Sprint3" class="tabcontent">
        <h3>Sprint 3</h3>
            <br></br>
            <table>
                <tr>
                    <th>Subject</th>
                    <th>Assignment</th>
                    <th>Test</th>
                    <th>Assessment</th>
                </tr>
                <tr>
                    <td>Programming</td>
                    <td>V</td>
                    <td>8,5</td>
                    <td>V</td>
                </tr>
                <tr>
                    <td>Databases</td>
                    <td>G</td>
                    <td>9</td>
                    <td>G</td>
                </tr>
                <tr>
                    <td>Front-End</td>
                    <td>G</td>
                    <td>9</td>
                    <td>G</td>
                </tr>
                <tr>
                    <td>Scrum</td>
                    <td>G</td>
                    <td>8</td>
                    <td>G</td>
                </tr>
                <tr>
                    <td>Career management</td>
                    <td>G</td>
                    <td>8</td>
                    <td>G</td>
                </tr>
                <tr>
                    <td>Software Engineering</td>
                    <td>G</td>
                    <td>9,6</td>
                    <td>G</td>
                </tr>
            </table>
        </div>

        <div id="Sprint4" class="tabcontent">
        <h3>Sprint 4</h3>
            <br></br>
            <table>
                <tr>
                    <th>Subject</th>
                    <th>Assignment</th>
                    <th>Test</th>
                    <th>Assessment</th>
                </tr>
                <tr>
                    <td>Programming</td>
                    <td>G</td>
                    <td>9</td>
                    <td>G</td>
                </tr>
                <tr>
                    <td>Databases</td>
                    <td>G</td>
                    <td>7</td>
                    <td>V</td>
                </tr>
                <tr>
                    <td>Front-End</td>
                    <td>G</td>
                    <td>-</td>
                    <td>G</td>
                </tr>
                <tr>
                    <td>Scrum</td>
                    <td>G</td>
                    <td>8</td>
                    <td>G</td>
                </tr>
                <tr>
                    <td>Career management</td>
                    <td>G</td>
                    <td>8</td>
                    <td>G</td>
                </tr>
                <tr>
                    <td>Software Engineering</td>
                    <td>G</td>
                    <td>8</td>
                    <td>G</td>
                </tr>
            </table>
        </div>

        <div id="Sprint5" class="tabcontent">
            <h3>Sprint 5</h3>
            <br></br>
            <table>
                <tr>
                    <th>Subject</th>
                    <th>Assignment</th>
                    <th>Test</th>
                    <th>Assessment</th>
                </tr>
                <tr>
                    <td>Programming</td>
                    <td>G</td>
                    <td>10</td>
                    <td>G</td>
                </tr>
                <tr>
                    <td>Databases</td>
                    <td>V</td>
                    <td>9</td>
                    <td>V</td>
                </tr>
                <tr>
                    <td>Front-End</td>
                    <td>G</td>
                    <td>9</td>
                    <td>G</td>
                </tr>
                <tr>
                    <td>Scrum</td>
                    <td>G</td>
                    <td>8</td>
                    <td>G</td>
                </tr>
                <tr>
                    <td>Career management</td>
                    <td>G</td>
                    <td>7</td>
                    <td>V</td>
                </tr>
                <tr>
                    <td>Software Engineering</td>
                    <td>G</td>
                    <td>8</td>
                    <td>G</td>
                </tr>
            </table>
        </div>

        <div id="Sprint6" class="tabcontent">
            <h3>Sprint 6</h3>
            <br></br>
            <table>
                <tr>
                    <th>Subject</th>
                    <th>Assignment</th>
                    <th>Test</th>
                    <th>Assessment</th>
                </tr>
                <tr>
                    <td>Programming</td>
                    <td>G</td>
                    <td>8</td>
                    <td>G</td>
                </tr>
                <tr>
                    <td>Databases</td>
                    <td>G</td>
                    <td>10</td>
                    <td>G</td>
                </tr>
                <tr>
                    <td>Front-End</td>
                    <td>G</td>
                    <td>8</td>
                    <td>G</td>
                </tr>
                <tr>
                    <td>Scrum</td>
                    <td>G</td>
                    <td>8</td>
                    <td>G</td>
                </tr>
                <tr>
                    <td>Career management</td>
                    <td>G</td>
                    <td>8</td>
                    <td>G</td>
                </tr>
                <tr>
                    <td>Software Engineering</td>
                    <td>G</td>
                    <td>9</td>
                    <td>V</td>
                </tr>
            </table>
        </div>

    </div>
</div>
</div>

</div>

<audio id="myAudio">
  <source src="Content/BinarySunset.mp3" type="audio/mpeg">
</audio>

<script>

    var clicked;

    function openCity(evt, cityName) {
        clicked = cityName;
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
        if(cityName == "Hobbies"){
            document.getElementById('body').style.backgroundImage = "linear-gradient(to top, rgba(245, 246, 252, 0), rgba(0, 0, 0, 0.697), rgb(0, 0, 0)), url('Images/StarWarsBackground.png')";
            playAudio();
        }else{
            document.getElementById('body').style.backgroundImage = "none";
            stopAudio();
        }
    }

    document.getElementById('myselfButton').onclick = function(){
        if(clicked == "Hobbies"){
            playAudio();
        }
    }

    document.getElementById('close').onclick = function(){
        stopAudio();
    }

    var x = document.getElementById("myAudio"); 
    x.currentTime = 51;
    function playAudio() { 
        x.play(); 
        x.volume = 0.1;
    } 
    
    function stopAudio() { 
        x.pause();
    } 

</script>