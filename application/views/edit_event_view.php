<div class="container">
    <div class="row">
        <h2 class="text-center text-dark mt-3">Edit Event</h2>

        <div id="error" class='row'> </div>
        <div class="card">
            <div class="card-body">
            <input type="text" hidden id="event_id" value="<?= $events[0]->id; ?>" >
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="title">Event Title</label>
                            <input type="text" id="title" name="title" value="<?= $events[0]->title; ?>" placeholder="Event title." class="form-control col-md-12">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="customerID">Customer ID</label>
                            <select id="customerID" class="form-control browser-default custom-select" name="customerID">
                                <option value=""> Select the customer </option>
                                <option value="all" <?php if($events[0]->customerID == 0) { echo 'selected'; } ?>> All </option>

                                <?php
                                foreach ($customer as $r) : ?>
                                    <option value="<?= $r->id ?>" <?php if($events[0]->customerID == $r->id) { echo 'selected'; } ?>> <?= $r->first_name ?> <?= $r->last_name ?> </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="category">Category</label>
                            <input type="text" id="category" name="category" value="<?= $events[0]->category ?>" placeholder="Enter category." class="form-control col-md-12">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="requirement">Requirements</label>
                            <input type="text" id="requirements" name="requirement" value="<?= $events[0]->requirements ?>" placeholder="Enter requirements separated by commas..." class="form-control col-md-12">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="date">Date</label>
                            <input type="date" id="date" name="date" value="<?= $events[0]->date ?>" class="form-control col-md-12">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="discount">Discount</label>
                            <input type="number" id="discount" value="<?= $events[0]->discount ?>" name="discount" placeholder="Discount" class="form-control col-md-12">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="note">Description</label>
                            <textarea rows="4" id='note' cols="40" name="note" placeholder="Enter extra text concerning the event here..." class="form-control col-md-12"><?= $events[0]->note ?></textarea>
                        </div>
                    </div>
                </div>
                <button class="btn btn-dark" style="margin-top:3%;padding-left:2%;padding-right:2%;float:right;" onclick="submitForm()">Update Event </button>
            </div>
        </div>

    </div>
</div>

<script>
    function submitForm() {
        let event_id = $('#event_id').val();
        let note = $('#note').val();
        let title = $('#title').val();
        let customerID = $('#customerID').val();
        let category = $('#category').val();
        let requirements = $('#requirements').val();

        let date = $('#date').val();
        let discount = $('#discount').val();

        if (title == "" || title == undefined) {
            showError('error', 'Please enter the title !!!!');

        } else if (customerID == "" || customerID == undefined) {
            showError('error', 'Please select at least one customer  !!!!');


        }
        else if (event_id == "" || event_id == undefined) {
            showError('error', 'Event id not found !!!!');


        }
        else if (category == "" || category == undefined) {
            showError('error', 'Please enter category of event  !!!!');
        } else if (requirements == "" || requirements == undefined) {
            showError('error', 'Please enter requirements of event  !!!!');
        } else if (date == "" || date == undefined) {
            showError('error', 'Please select date of event !!!!');
        } else if (discount == "" || discount == undefined) {
            showError('error', 'Please add discount of event !!!!');
        } else {
            if (confirm('Are you sure you want to submit the form?')) {
                // If the user confirms, submit the form using AJAX
                $.ajax({
                    url: "<?= $this->config->base_url('event/update_event') ?>",
                    type: 'POST',
                    data: {
                        event_id:event_id,
                        title: title,
                        customerID: customerID,
                        category: category,
                        requirements: requirements,
                        date: date,
                        discount: discount,
                        note: note,
                        user_id: '<?= $_SESSION['user_data']['id'] ?>'

                    },
                    success: function(response) {
                        res = JSON.parse(response);
                        if (res.msg == 'success') {

                            showSuccess('error', 'Event Updated Successfully !!!')
                        } else {
                            showError('error', 'Please try again later !!!!');

                        }
                    },
                    error: function() {
                        showError('error', 'An error occurred while submitting the form !!!!');

                    }
                });
            }
        }






    }
</script>