<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
    <title><?= $title; ?></title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary sticky-top">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="<?= base_url(); ?>">HIMS</a>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url(); ?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('about'); ?>">About Us</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admissions</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">How to apply</a>
                    <a class="dropdown-item" href="#">Eligibility Criteria</a>
                    <a class="dropdown-item" href="#">Tuition Fee</a>
                    <a class="dropdown-item" href="#">Refund Policy</a>
                    <a class="dropdown-item" href="#">Scholarships</a>
                    <a class="dropdown-item" href="#">Migrations</a>
                    <a class="dropdown-item" href="#">Online Admissions</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Programs</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">BS (Hons) Programs</a>
                    <a class="dropdown-item" href="#">Dr. of Physical Therapy (DPT)</a>
                    <a class="dropdown-item" href="#">F.Sc Medical Technologies</a>
                    <a class="dropdown-item" href="#">Diploma Medical Technolgies</a>
                    <a class="dropdown-item" href="#">Short Courses</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('curriculums'); ?>">Curriculums</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('registration'); ?>">Registration</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('affiliation'); ?>">Affiliation</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('hospital-training'); ?>">Hospital Training</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('contact'); ?>">Contact</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    </nav>