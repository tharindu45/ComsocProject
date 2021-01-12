<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <!-- Title Page-->
    <title>KananiyamForm</title>

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="css/articleFormStyle.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">Upload Article for Kananiyam</h2>
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="form-row">
                            <div class="name">Registration_No</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="RegistrationNo">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Name</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="Name">
                                </div>
                            </div>
                        </div>
                         <div class="form-row">
                            <div class="name">Article Title</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="Title">
                                </div>
                            </div>
                        </div>
						<div class="form-row">
                            <div class="name">Description</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="description" placeholder="I this article, ........."></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Upload Article</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input class="input-file" type="file" name="file_cv" id="file">
                                    <label class="label--file" for="file">Choose file</label>
                                    <span class="input-file__info">No file chosen</span>
                                </div>
                                <div class="label--desc">Upload your article. Max file size 50 MB</div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <button class="btn btn--radius-2 btn--blue-2" type="submit">Upload</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="js/jque.min.js"></script>


    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>
<!-- end document-->