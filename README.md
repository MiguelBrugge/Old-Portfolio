# Portfolio
This is the first Portfolio made by me.
It includes my social media, elevator pitch, teamroles, hobbies, skills, strenghts, weaknesses, grades, education, projects and contact page.

### Hobby music page
When you enter the hobby page you will see a new backgroud appear and music play. This is both done with JavaScript.

```JavaScript
<audio id="myAudio">
  <source src="Content/BinarySunset.mp3" type="audio/mpeg">
</audio>

<script>

        if(cityName == "Hobbies"){
            document.getElementById('body').style.backgroundImage = "linear-gradient(to top, rgba(245, 246, 252, 0), rgba(0, 0, 0, 0.697), rgb(0, 0, 0)), url('Images/StarWarsBackground.png')";
            playAudio();
        }else{
            document.getElementById('body').style.backgroundImage = "none";
            stopAudio();
        }


</script>
```
I did this by editing the page code. I added some lines that basically say: "If you enter the hobby page you will get the music and the image otherwise there will be no image and the audio will stop."
```JavaScript
    function stopAudio() { 
        x.pause();
    } 
```
The stop function makes the audio pause so when you re enter the page the music will continue instead of starting from zero.
