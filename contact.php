<?php

include "header.php"

?>
<div class="container-fluid" id="about-body">
    <div class="container d-flex justify-content-center">
        <form id="contact-form" class="my-4">
            <div class="grid-container name">
                <div id="grid-title">
                    <h1>Contact Us</h1>
                    <p class="lead">Have a job, or questions about a potential project? We're happy to help. Send us
                        your name, some
                        contact information and a breif message and we'll reach out to you about the job in question.
                    </p>
                </div>
                <div class="grid-item1">
                    <label for="firstName">First Name:</label><input type="text" class="ml-2" placeholder="First Name"
                        id="firstName">
                </div>
                <div class="grid-item2">
                    <label for="lastName">Last Name:</label><input type="text" class="ml-2" placeholder="Last Name"
                        id="lastName">
                </div>

                <div class="mt-3 grid-item3">
                    <label for="email">Email Address:</label><input type="email" class="ml-2"
                        placeholder="example@example.com" id="email">
                </div>
                <div class="mt-3 grid-item4">
                    <label for="tele">Phone Number:</label><input type="number" class="ml-2"
                        placeholder="1-555-123-4567" id="tele">
                </div>

                <div class="grid-item5">
                    <label>Send us a message:</label>
                    <textarea class="mt-3 grid-item5" id="message">What can Bretter do for you?</textarea>

                </div>
                <div id="printErrors" class="grid-item6"></div>
                <div class="grid-item7">
                    <input type="button" value="Submit" class="btn" onclick="sendEmail()">
                </div>
            </div>
        </form>
    </div>
</div>

<?php

include "footer.php"

?>