<?php include("template/header.php"); ?>

    <!-- .container is main centered wrapper -->
    <div class="container">
        <!-- The above form looks like this -->
        <form method="post" name="feedbackform" action="form.php">
            <div class="row" style="padding-top:20px;">
                <h3 style="color:green;">Sweet, you're connected!</h3>
                <h4>Quick question: how's your experience at Overstand so far today?</h4>

                <label for="rating">Service/Food/Coffee/Vibe/etc.</label>
                <select id="rating" name="rating">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                    </select>

                <input class="button button-primary" type="submit" value="Submit">
            </div>
        </form>


        <!-- Always wrap checkbox and radio inputs in a label and use a <span class="label-body"> inside of it -->

        <!-- Note: The class .u-full-width is just a utility class shorthand for width: 100% -->

    </div>


<?php include("template/footer.php"); ?>
