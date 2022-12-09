<?php 
include('cn.php');

if (isset($_POST['dmp'])) {
    unset($_Su)
    $dmp = $_POST['dmp'];
    $sql = 'INSERT INTO dump (dmp) VALUES("'.$dmp.'")';
    $qry = $con->query($sql);
    if ($qry !== TRUE) {
        $_SESSION['error'] = 'Error : ' . $con->connect_error;
        return header('Location: ' . $_SERVER['HTTP_REFERER']);
    }else{
        $_SESSION['success'] = "Success";
        return header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    $con->close();
}else{
    unset($_SESSION['success']);
    $_SESSION['error'] = 'Error , data empty';
    return header('Location: ' . $_SERVER['HTTP_REFERER']);
}
?>