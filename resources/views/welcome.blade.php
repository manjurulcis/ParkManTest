<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel and Angular Comment System</title>

    <!-- CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css"> <!-- load bootstrap via cdn -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"> <!-- load fontawesome -->
    <style>
        body 		{ padding-top:30px; }
        form 		{ padding-bottom:20px; }
        .comment 	{ padding-bottom:20px; }
    </style>
    <script>
        var siteurl = "<?php echo url('/'); ?>";
    </script>

    <!-- JS -->
    <script src="js/jquery.min.js"></script>

    <script src="js/app.js"></script> <!-- load our application -->

</head>
<!-- declare our angular app and controller -->
<body class="container" ng-app="commentApp" ng-controller="mainController">
<div class="col-md-12">

    <!-- PAGE TITLE -->
    <div class="page-header">
        <h2>ParkMan Test  Application</h2>

    </div>

    <!-- NEW COMMENT FORM -->
    <h4>Search By Country</h4>
    <form id="searchbycountry"> <!-- ng-submit will disable the default form action and use our function -->

        <!-- AUTHOR -->
        <div class="form-group">
            <input type="text" class="form-control input-sm" name="country" id="country"  placeholder="Please enter a country name">
        </div>
        <!-- SUBMIT BUTTON -->
        <div class="form-group text-right">
            <button type="submit" id="btncountrysearch" class="btn btn-primary btn-lg">Submit</button>
        </div>
    </form>

    <!-- NEW COMMENT FORM -->
    <h4>Search By Garage Name</h4>
    <form id="searchbycountry"> <!-- ng-submit will disable the default form action and use our function -->

        <!-- AUTHOR -->
        <div class="form-group">
            <input type="text" class="form-control input-sm" name="garagename" id="garagename"  placeholder="Please enter a garage name">
        </div>
        <!-- SUBMIT BUTTON -->
        <div class="form-group text-right">
            <button type="submit" id="btngaragenamesearch" class="btn btn-primary btn-lg">Search</button>
        </div>
    </form>

    <!-- NEW COMMENT FORM -->
    <h4>Search By Owner Name/Email</h4>
    <form id="searchbycountry"> <!-- ng-submit will disable the default form action and use our function -->

        <!-- AUTHOR -->
        <div class="form-group">
            <input type="text" class="form-control input-sm" name="ownername" id="ownername"  placeholder="Please enter a garage owner name or email">
        </div>
        <!-- SUBMIT BUTTON -->
        <div class="form-group text-right">
            <button type="submit" id="btnownernamesearch" class="btn btn-primary btn-lg">Search</button>
        </div>
    </form>

    <!-- NEW COMMENT FORM -->
    <h4>Search By Location</h4>
    <form id="searchbycountry"> <!-- ng-submit will disable the default form action and use our function -->

        <!-- AUTHOR -->
        <div class="form-group">
            <input type="text" class="form-control input-sm" name="latlon" id="latlon"  placeholder="Please enter a location(lat lon or both)">
        </div>
        <!-- SUBMIT BUTTON -->
        <div class="form-group text-right">
            <button type="submit" id="btnlatlonsearch" class="btn btn-primary btn-lg">Search</button>
        </div>
    </form>

    <div id="result" style="min-height: 400px; background-color: #fdfdfd;border: 1px solid #999; padding: 20px;word-break: break-all">

    </div>




</div>
</body>
</html>
