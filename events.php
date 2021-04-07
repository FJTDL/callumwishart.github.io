<?php include 'topbit.php';?>
        <div class="item3">
                <ul class="tilesWrap"> <!-- wrapper for all different events -->
	                <li>    <!-- first event -->
	           		    <h2>NISS</h2> <!-- Main Header for event -->
		                <h3>North Island Secondary Schools</h3> <!-- sub header for event -->
		                <p>
			This year this event is being held in Palmerston North in the Term One holidays, it is a schools event that MAGS has won for the past 3 years and we hope we will continue that title this coming year.
		                </p>    <!-- paragraph about events -->
                        <a href="https://www.orienteering.org.nz/events/ni-secondary-schools-sprint-champs-placeholder/" target="_blank" class="none"><button>Read more</button></a>  <!-- button to read more which take you to the homepage of each event on ONZ website  -->
	                </li>
	                <li>
		                <h2>NZSS</h2>
		                <h3>New Zealand Secondary Schools</h3>
		                <p>
			This year this event is being held in Hawkes Bay in the Term Two holidays, it is also a schools event that MAGS has previously won.
		                </p>
                        <a href="https://www.orienteering.org.nz/events/" target="_blank" class="none"><button>Read more</button></a>
	                </li>
	                <li>
		                <h2>NZOC</h2>
		                <h3>New Zealand Orienteering Championships</h3>
		                <p>
			This event was held last weekend in Woodhill and Lake Kereta. This a clubs events that people across the country gather together to do. It is the one of the highest level of orienteering in NZ currently.
		                </p>
                        <a href="#" target="_blank" class="none"><button>Read more</button></a>
	               </li>
	                <li>
		                <h2>AKSS</h2>
		                <h3>Auckland Secondary Schools</h3>
		                <p>
			This event will be held in Term Four and we encourage as many people as possible to do as it is easy to get to and lots of fun!!!!
		                </p>
                        <a href="#" target="_blank" class="none"><button>Read more</button></a>
	                </li>
                </ul>
        </div>  
        <div class="aside">
            <div class="calendar"> <!-- code for calendar in side bar -->
                <iframe src="https://calendar.google.com/calendar/embed?height=400&amp;wkst=2&amp;bgcolor=%23ffffff&amp;ctz=Pacific%2FAuckland&amp;src=MjB0aDRoODR0MHA2OWE5MjZpbTBhM2Z2dXNAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;color=%234285F4&amp;showTitle=1&amp;title=Orienteering%20Events&amp;mode=MONTH&amp;showTz=0&amp;showPrint=0&amp;showTabs=1&amp;showCalendars=1" style="border-width:0" width="280" height="400" frameborder="0" scrolling="no"></iframe>
            </div>
            <!-- javascript for poll -->
            <script> 
                function getVote(int) {
                    var xmlhttp=new XMLHttpRequest();
                        xmlhttp.onreadystatechange=function() {
                    if (this.readyState==4 && this.status==200) {
                        document.getElementById("poll").innerHTML=this.responseText;
                        }
                    }
                xmlhttp.open("GET","poll_vote.php?vote="+int,true);
                xmlhttp.send();
                }
            </script>
            <div id="poll"> <!-- area for poll -->
                <h3 class="poll_text">Have you orienteered before?</h3>
                <form> <!-- asks the questions and allows you to answer -->
                    Yes: <input type="radio" name="vote" value="0" onclick="getVote(this.value)"><br>
                    No: <input type="radio" name="vote" value="1" onclick="getVote(this.value)">
                </form>
            </div>
        </div>
<?php include 'bottombit.php';?>