<div class="jumbotron jumbotron-fluid bg-danger">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="display-4 font-weight-bold text-light">Trip Location &raquo; Poll</h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <?php if($success = $this->session->flashdata('success')): ?>
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-success"><?= $success; ?></div>
            </div>
        </div>
    <?php elseif($failed = $this->session->flashdata('failed')): ?>
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-danger"><?= $failed; ?></div>
            </div>
        </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-md-8">
            <h2 class="font-weight-light">Choose a location for trip planned by AH Group</h2>
            <form action="<?= base_url('poll/submit_poll'); ?>" method="post">
                <div class="form-check mb-4">
                    <input class="form-check-input" type="radio" name="poll_item" id="exampleRadios1" value="Mushkpuri">
                    <label class="form-check-label" for="exampleRadios1">
                        Mushkpuri
                    </label>
                </div>
                <div class="form-check mb-4">
                    <input class="form-check-input" type="radio" name="poll_item" id="exampleRadios1" value="Nathiagali">
                    <label class="form-check-label" for="exampleRadios1">
                        Nathigali
                    </label>
                </div>
                <div class="form-check mb-4">
                    <input class="form-check-input" type="radio" name="poll_item" id="exampleRadios1" value="Khanpur Dam">
                    <label class="form-check-label" for="exampleRadios1">
                        Khanpur Dam
                    </label>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-sm">Vote</button>
                    <button type="reset" class="btn btn-danger btn-sm">Cancel</button>
                </div>
            </form>
        </div>
        <div class="col-md-4">
            <h2 class="font-weight-light">Results</h2>
            <h4 class="font-weight-light">Total no. of Votes: <strong><?php echo $total = $option1 + $option2 + $option3; ?></h4></strong>
            Mushkpuri stands at
            <div class="progress mb-4" style="height: 30px;">
                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: <?= $option1; ?>%" aria-valuenow="<?= $option1; ?>" aria-valuemin="0" aria-valuemax="100"><?= $option1/$total*100; ?>%</div>
            </div>
            Khanpur Dam stands at
            <div class="progress mb-4" style="height: 30px;">
                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: <?= $option2; ?>%" aria-valuenow="<?= $option2; ?>" aria-valuemin="0" aria-valuemax="100"><?= $option2/$total*100; ?>%</div>
            </div>
            Nathiagali Dam stands at <?= $option3; ?>
            <div class="progress" style="height: 30px;">
                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: <?= $option3; ?>%" aria-valuenow="<?= $option3; ?>" aria-valuemin="0" aria-valuemax="100"><?= $option3/$total*100; ?>%</div>
            </div>
        </div>
    </div>
</div>