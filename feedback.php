<?php include("template/header.php"); ?>

    <!-- .container is main centered wrapper -->
    <div class="container">
        <!-- The above form looks like this -->
        <form method="post" name="feedbackform" action="form.php">
            <div class="row" style="padding-top:20px;">
                <div class="row">
                    <div class="one-half column">
                      <h3>I'm sorry.</h3>
                        <label for="feedback">What could we do better next time?</label>
                        <textarea class="u-full-width" placeholder="Hey Rodney, I didn't like..." id="feedback" name="feedback"></textarea>
                        <input class="button-primary" type="submit" value="Submit Feedback">
                    </div>
                    <div class="one-half column">
                      <img src="img/sad.gif" class="u-full-width">
                    </div>
                </div>




            </div>
        </form>


        <!-- Always wrap checkbox and radio inputs in a label and use a <span class="label-body"> inside of it -->

        <!-- Note: The class .u-full-width is just a utility class shorthand for width: 100% -->

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="js/jquery.barrating.js"></script>
    <script type="text/javascript">
        $(function() {
            $('#rating').barrating({
                theme: 'fontawesome-stars'
            });
        });
    </script>

<?php include("template/footer.php"); ?>
