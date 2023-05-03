<style>
    label {
        font-weight: 600;
        color: #666;
    }



    .cardbody-color {
        background-color: #ebf2fa;
    }

    .box8 {
        box-shadow: 0px 0px 5px 1px #999;
    }

    .mx-t3 {
        margin-top: -3rem;
    }

    .btn-color {
        background-color: #0e1c36;
        color: #fff;

    }
</style>


<div class="container">
    <div class="row">

        <div class="col-md-12">
            <div class="row">
                <h2 class="text-center text-dark mt-3">List of Events</h2>


            </div>
            <div class="row mt-2">
                <table id="myTable" class="display">
                    <thead>
                        <tr>
                            <th>Event Id</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Requirements </th>
                            <th>Date of Event</th>
                            <th>Discount</th>

                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($events as $r) :?>
                        <tr>
                            <td><?= $r->id ?></td>
                            <td><?= $r->title ?></td>
                            <td><?= $r->category ?></td>

                            <td>
                            <?php $requirement=explode(',',$r->requirements) ;
                            foreach($requirement as $re)
                            {
                                echo $re.'<br>';
                            }
                            ?>    
                            </td>
                            <td><?= $r->date ?></td>

                            <td><?= $r->discount ?></td>
                            <td>
                                <?php 
                                if(isset($_SESSION['user_data'])){

                             
                                if ($_SESSION['user_data']['user_type'] == 'admin') { ?>
                                    <a href="#" class="add">Add</a>

                                    <a href="#" class="view">View</a>
                                    <a href="#" class="edit">Edit</a>
                                    <a href="#" class="edit">Delete</a>
                                <?php } else if ($_SESSION['user_data']['user_type'] == 'Customer') { ?>
                                    <a href="#" class="book">Book Now</a>
                                <?php  } else if ($_SESSION['user_data']['user_type'] == 'Manager') { ?>
                                    <a href="#" class="discount">Apply Discount</a>

                                <?php } 
                                   }
                                   else { ?>
                                    <a href="#" class="book">Book Now</a>

                                  <?php }
                                ?>
                            </td>
                        </tr>
                        <?php endforeach ?>

                    </tbody>
                </table>
            </div>

        </div>

    </div>
</div>


<script type="text/javascript">
    $(document).ready(function() {
        $('#myTable').DataTable({
            columnDefs: [{
                targets: -1,
                render: function(data, type, full, meta) {
<?php if(isset($_SESSION['user_data']['user_type'] )) {?>
                    if ("<?= $_SESSION['user_data']['user_type'] ?>" == 'admin') {

                        return '<a style="margin-right: 2%;" href="<?= $this->config->base_url('event/add_event') ?>"  class="add btn btn-sm btn-outline-secondary"><i class="fas fa-plus"> </i></a>'+ 
                        '<a style="margin-right: 2%;" href="<?= $this->config->base_url('event/view_event/') ?>' + full[0] + '" class="view btn btn-sm btn-outline-secondary"><i class="fas fa-eye"> </i></a>' +
                            '<a style="margin-right: 2%;" href="<?= $this->config->base_url('event/edit_event/') ?>' + full[0] + '"class="edit btn btn-sm btn-outline-secondary"><i class="fas fa-edit"> </i></a>' +
                            '<a style="margin-right: 2%;" href="<?= $this->config->base_url('event/delete_event/') ?>' + full[0] + '" class="delete btn btn-sm btn-outline-secondary"><i class="fas fa-trash"></i></a>';
                    } else if ("<?= $_SESSION['user_data']['user_type'] ?>" == 'customer') {
                        return '<a style="margin-right: 5%;" href="<?= $this->config->base_url('event/book_event') ?>"  class="book btn btn-sm btn-outline-secondary">Book Now</a>';
                    } else if ("<?= $_SESSION['user_data']['user_type'] ?>" == 'manager') {
                        return '<a style="margin-right: 5%;" href="<?= $this->config->base_url('event/discount_event') ?>"  class="discount btn btn-sm btn-outline-secondary">Apply Discount</a>';
                    }
                    else {
                        return '<a style="margin-right: 5%;" href="#"  class="book btn btn-sm btn-outline-secondary">Book Now</a>';

                    }
                <?php } else {?>
                    return '<a style="margin-right: 5%;" href="#"  class="book btn btn-sm btn-outline-secondary">Book Now</a>';

                    <?php }?>
                }
            }]
        });
    });
</script>