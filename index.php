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
                    <h3>学生管理系统</h3>
                    <div>
                        <input type="submit" class="btn btn-info" onclick="add()" value="添加学生">
                    </div>
                </div>
                <table class="table table-bordered table-hover">
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">姓名</th>
                        <th class="text-center">性别</th>
                        <th class="text-center">年龄</th>
                        <th class="text-center">班级</th>
                        <th class="text-center">操作</th>
                    </tr>
                    <?php
                    require 'conn.php';
                    $sql = "SELECT * FROM message ";
                    $res = mysqli_query($db,$sql);
                    if ($res){
                        while ($temp = mysqli_fetch_array($res)){
                            $student[] = $temp;
                        }

                        foreach ($student as $key => $value){
                            echo "<tr style='text-align: center'>";
                            echo "<td>{$value['id']}</td>";
                            echo "<td>{$value['name']}</td>";
                            echo "<td>{$value['sex']}</td>";
                            echo "<td>{$value['age']}</td>";
                            echo "<td>{$value['classid']}</td>";
                            echo "<td><a href='javascript:doDel({$value['id']})'>删除</a>
                                    <a href='edit.php?id={$value['id']}'>修改</a>
                                    </td>";
                            echo "</tr>";
                        }
                    }
                    ?>
                </table>

            </div>

        </div>
        <div class="col-md-3"></div>
    </div>
</div>
<script>
    function doDel(id) {
        if(confirm('确定删除?')){
            window.location.href='action.php?action=del&id='+id
        }
    }

    function add() {
        window.location.href='add.php'

    }
</script>
</body>
</html>
