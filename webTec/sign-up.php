<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            .modal-header, h4, .close {
                background-color: #800080;
                color:white !important;
                text-align: center;
                font-size: 30px;
            }
            .modal-footer {
                background-color: #ffffff;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="modal fade" id="myModal1" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content ">
                        <div class="modal-header" style="padding:35px 50px;">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4><span class="glyphicon glyphicon-lock"></span> Üye-Ol</h4>
                        </div>
                        <div class="modal-body" style="padding:40px 30px;">
                            <form role="form" action="process.php" method="POST">
                                <div class="form-group">
                                    <label><span class="glyphicon glyphicon-user"></span> Kullanıcı Adı</label>
                                    <input type="text" class="form-control" id="user" placeholder="Username" required>
                                </div>
			                    <div class="form-group">
                                    <label><span class="glyphicon glyphicon-envelope"></span> E-posta</label>
                                    <input type="text" class ="form-control" id="mail" placeholder="e-mail" required>
			                    </div>
                                <div class="form-group">
                                    <label><span class="glyphicon glyphicon-eye-open"></span> Parola</label>
                                    <input type="password" class="form-control" id="pass" placeholder="Password" required>
                                </div>
                                <button type="submit" class="btn btn-success btn-block">
                                    <span class="glyphicon glyphicon-off"></span> Üye-Ol
                                </button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
                                <span class="glyphicon glyphicon-remove"></span> İptal </button>
                            <p>Üyeyim zaten? <a href="#"> Giriş</a></p>
                            - veya - <a href="#"> Ziyaretçi olarak devam et </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
        $(document).ready(function(){
            $("#myBtn1").click(function(){
                $("#myModal1").modal();
            });
        });
        </script>
    </body>
</html>
