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
<?php
try{
    $pdo = new PDO("mysql:host=localhost;dbname=student","root","root");

    }catch (PDOException $e){
        echo $e->getMessage();
}
    $pdo->query("SET NAMES 'UTF8'");

    $sql = "SELECT * FROM message WHERE id=".$_GET['id'];
    $stmt = $pdo->query($sql);
    if ($stmt->rowCount() > 0){
        $stu = $stmt->fetch(PDO::FETCH_ASSOC);
    }else{
        die('没有要修改的数据');
    }

?>
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="panel panel-info">
                <div class="panel-heading text-center">
                    <h3>修改学生信息</h3>
                </div>
                <hr>
                <div>
                <form class="form-horizontal" method="post" action="action.php?action=edit">
                    <div class="form-group">
                        <label for="id" class="col-sm-2 control-label"></label>
                        <div class="col-sm-10">
                            <input type="hidden" name="id" class="form-control" id="id" value="<?php echo $stu['id'] ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">姓名</label>
                        <div class="col-sm-5">
                            <input type="text" name="name" class="form-control" id="name" value="<?php echo $stu['name'] ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="sex" class="col-sm-2 control-label">性别</label>
                        <div class="col-sm-5">
                            <input type="text" name="sex" class="form-control" id="sex" value="<?php echo $stu['sex'] ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="age" class="col-sm-2 control-label">年龄</label>
                        <div class="col-sm-5">
                            <input type="text" name="age" class="form-control" id="age" value="<?php echo $stu['age'] ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="classid" class="col-sm-2 control-label">班级</label>
                        <div class="col-sm-5">
                            <input type="text" name="classid" class="form-control" id="classid" value="<?php echo $stu['classid'] ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-danger">修改</button>
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
