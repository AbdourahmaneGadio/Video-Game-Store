<?php
// require_once("../controllers/contactController.php");

// If we want to send a message via the form
if (isset($_POST['send'])) {
    $contact = new Contact();
   $result= $contact->validateAndSendMail();
   $message = $result[0];
   $type = $result[1];
    unset($_POST['send']);
}

?>

<footer>
    <div class="container-fluid">
        @ 2024 - KMUTT Project
    </div>
    <button id="needHelpButton" type="button" class="btn btn-info">Need help ?</button>
</footer>

<!-- This is the block that will show the contact form -->
<div id="contactModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <div class="form-container">
            <form name="frmContact" id="frmContact" method="post" action="" onsubmit="return validateContactForm()">
                <div class="input-row">
                    <label>Name</label> <span id="userName-info" class="info"></span><br />
                    <input type="text" class="input-field" name="userName" id="userName" />
                </div>
                <div class="input-row">
                    <label>Email</label> <span id="userEmail-info" class="info"></span><br />
                    <input type="text" class="input-field" name="userEmail" id="userEmail" />
                </div>
                <div class="input-row">
                    <label>Subject</label> <span id="subject-info" class="info"></span><br />
                    <input type="text" class="input-field" name="subject" id="subject" />
                </div>
                <div class="input-row">
                    <label>Message</label> <span id="userMessage-info" class="info"></span><br />
                    <textarea name="content" id="content" class="input-field" cols="100" rows="6"></textarea>
                </div>
                <div>
                    <input type="submit" name="send" class="btn-submit" value="Send" />
                    <!-- Sent if the message is not empty -->
                    <div id="statusMessage">
                        <?php if (isset($message) && !empty($message)) { ?>
                            <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                        <?php } ?>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="<?= $ROOT_PATH . "/assets/js/bootstrap.bundle.js" ?>"></script>
<script src="<?= $ROOT_PATH . "/assets/js/script.js" ?>"></script>
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script>
    // Fonctions to display or cancel the block
    document.addEventListener('DOMContentLoaded', function() {
        var modal = document.getElementById("contactModal");
        var btn = document.getElementById("needHelpButton");
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    });
</script>
