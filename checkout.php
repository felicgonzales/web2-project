<?php
require_once "lib/lib-db-film.php";
if(isset($_POST)){
        $username = $_POST['username'];
        $shows_id = $_POST['shows_id'];
        $tickets = $_POST['tickets'];
        $cnt_tickets = count(explode(',',$tickets));
        $result_user = cariAkunByUser($username);
        $date = date('Y-m-d H:i:s');
        $id_user = $result_user['id'];  
        $result_check = cariPembelian($id_user, $shows_id, $tickets);
        $hitung_check = hitungPembelian($id_user, $shows_id, $tickets);
        if($hitung_check < 1){
            $result = addPembelian($id_user, $shows_id, $tickets, $cnt_tickets, $date);
            print_r($result);
            if($result){
                $_SESSION['success'] = "Pemesanan Tiket Berhasil";
                return header('Location: index.php');
            }
            else {
                print_r("Something Bad Happened");
                die();
            }
        }
        else {
            $_SESSION['error'] = "Pembelian sejenis telah dilakukan";

            return header('Location: index.php');
        }
    }
    ?>