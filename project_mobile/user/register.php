<?php
header('Content-Type: application/json; charset=utf8');
require_once('../koneksi.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['username']) && $_POST['username'] != "" && isset($_POST['email']) && $_POST['email'] != "" && isset($_POST['password']) && $_POST['password'] != "" && isset($_POST['ho_hp']) && $_POST['ho_hp'] != "" && isset($_POST['role']) && $_POST['role'] != "") {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $no_hp = $_POST['ho_hp'];
        $role = $_POST['role'];
        $query = "SELECT * FROM user";
        $cek = mysqli_query($kon, $query);
        $count = mysqli_num_rows($cek);

        if($count == 1){
            echo json_encode("gagal");
            
        } else {
            $insert = "INSERT INTO user(username,email,password,ho_hp,role) VALUES ('".$username."','".$email."','".$password."','".$no_hp."','".$role."')";
            $cek = mysqli_query($kon,$insert);
            if($cek){
                echo json_encode("berhasil");
            }
        }

        // $id_user = "";
        // while ($hasilRow = mysqli_fetch_row($cek)) {
        //     $id_user = $hasilRow[0];
        //     $username = $hasilRow[1];
        //     $role = $hasilRow[5];
        // }
        // if ($cek->num_rows > 0) {
        //     $data = [
        //         'type' => true,
        //         'code' => 1,
        //         'status' => 'berhasil login',
        //         'id_user' => $id_user,
        //         'username' => $username,
        //         'role' => $role

        //     ];
        //     echo json_encode([$data]);
        // } else {
        //     $data = [
        //         'type' => false,
        //         'code' => 0,
        //         'status' => 'gagal login',
        //         'id_user' => null,
        //         'username' => null,
        //         'role' => null,
        //     ];
        //     echo json_encode([$data]);
        // }
    }
} else {
    echo json_encode(
        array(
            'code' => 400,
            'status' => 'REQUEST METHOD GAGAL!!!',
        )
    );
}
?>