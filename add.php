<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>学生管理系统</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="panel panel-info">
                <div class="panel-heading text-center">
                    <h3>添加学生信息</h3>
                </div>
                <hr>
                <div>
                    <form class="form-horizontal" method="post" action="action.php?action=add">
                        <div class="form-group">
                            <label for="id" class="col-sm-2 control-label"></label>
                            <div class="col-sm-10">
                                <input type="hidden" name="id" class="form-control" id="id" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">姓名</label>
                            <div class="col-sm-5">
                                <input type="text" name="name" class="form-control" id="name" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sex" class="col-sm-2 control-label">性别</label>
                            <div class="col-sm-5">
                                <input type="text" name="sex" class="form-control" id="sex" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="age" class="col-sm-2 control-label">年龄</label>
                            <div class="col-sm-5">
                                <input type="text" name="age" class="form-control" id="age" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="classid" class="col-sm-2 control-label">班级</label>
                            <div class="col-sm-5">
                                <input type="text" name="classid" class="form-control" id="classid">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-danger">添加</button>
                                <input type="reset" id="reset" class="btn btn-info">
                            </div>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>
