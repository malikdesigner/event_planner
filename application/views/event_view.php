<div class="container">
    <div class="row">
        <h2 class="text-center text-dark mt-3">View Event</h2>

        <div id="error" class='row'> </div>
        <div class="card">
            <div class="card-body">
            <input type="text" hidden id="event_id" value="<?= $events[0]->id; ?>" >
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="title">Event Title</label>
                            <input disabled type="text" id="title" name="title" value="<?= $events[0]->title; ?>" placeholder="Event title." class="form-control col-md-12">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="customerID">Customer ID</label>
                            <select disabled id="customerID" class="form-control browser-default custom-select" name="customerID">
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
                            <input disabled type="text" id="category" name="category" value="<?= $events[0]->category ?>" placeholder="Enter category." class="form-control col-md-12">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="requirement">Requirements</label>
                            <input disabled type="text" id="requirements" name="requirement" value="<?= $events[0]->requirements ?>" placeholder="Enter requirements separated by commas..." class="form-control col-md-12">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="date">Date</label>
                            <input disabled type="date" id="date" name="date" value="<?= $events[0]->date ?>" class="form-control col-md-12">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="discount">Discount</label>
                            <input disabled type="number" id="discount" value="<?= $events[0]->discount ?>" name="discount" placeholder="Discount" class="form-control col-md-12">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="note">Description</label>
                            <textarea disabled rows="4" id='note' cols="40" name="note" placeholder="Enter extra text concerning the event here..." class="form-control col-md-12"><?= $events[0]->note ?></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

