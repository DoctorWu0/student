<?php
try{
    $pdo = new PDO("mysql:host=localhost;dbname=student",'root','root');
}catch (PDOException $e){
    die('数据库连接失败'.$e->getMessage());
}
switch ($_GET['action']){
    case 'del':
        $id = $_GET['id'];
        $sql_del = "DELETE  FROM message WHERE id=".$id;
        $pdo->exec($sql_del);
            header("Location:index.php");
        break;
    case 'edit':
        $name = $_POST['name'];
        $sex = $_POST['sex'];
        $age = $_POST['age'];
        $classid = $_POST['classid'];
        $id = $_POST['id'];
        $sql_edit = "UPDATE message SET name='{$name}',sex='{$sex}',age='{$age}',classid='{$classid}' WHERE id='{$id}'";
        $res = $pdo->exec($sql_edit);
        if ($res > 0 ){
            echo "<script>alert('修改成功');window.location='index.php'</script>";
        }else{
            echo "<script>alert('修改失败');window.history.back();</script>";

        }
        break;
    case 'add':
        $name = $_POST['name'];
        $sex = $_POST['sex'];
        $age = $_POST['age'];
        $classid = $_POST['classid'];
        $sql_add = "INSERT INTO message SET name='{$name}',sex='{$sex}',age='{$age}',classid='{$classid}'";
        $res_add = $pdo->exec($sql_add);
        if ($res_add > 0){
            echo "<script>alert('添加成功');window.location='index.php'</script>";
        }else{
            echo "<script>alert('添加失败');window.history.back();</script>";
        }
        break;
    }
