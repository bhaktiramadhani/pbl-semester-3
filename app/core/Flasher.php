<?php

class Flasher
{
    public static function setFlash($pesan, $aksi, $tipe, $isConfirm = false)
    {
        $_SESSION['flash'] = [
            'pesan' => $pesan,
            'aksi' => $aksi,
            'tipe' => $tipe,
            'isConfirm' => $isConfirm
        ];
    }

    public static function flash()
    {

        if (isset($_SESSION['flash'])) {
            if ($_SESSION['flash']['isConfirm']) {
                echo '
                <script>
                Swal.fire({
                    title: "data ' . $_SESSION['flash']['pesan'] . ' ' . $_SESSION['flash']['aksi'] . '",
                    icon: "' . $_SESSION['flash']['tipe'] . '",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Ya",
                  }).then((result) => {
                    // if(result.isConfirmed) return true;
                    $.ajax()
                  });
                </script>
            ';
            } else {
                echo '
                <script>
                Swal.fire({
                    title: "' . $_SESSION['flash']['pesan'] . ' ' . $_SESSION['flash']['aksi'] . '",
                    icon: "' . $_SESSION['flash']['tipe'] . '",
                  });
                </script>
            ';
            }



            unset($_SESSION['flash']);
        }
    }
}
