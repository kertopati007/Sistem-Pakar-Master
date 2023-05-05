# Sispak-master
Master Aplikasi Sistem Pakar (Website)

Edit pada bagian `perhitungan.php` untuk mengubah perhitungan

                /if (($cf >= 0) && ($cf * $cflama >= 0)) {
                  $cflama = $cflama + ($cf * (1 - $cflama));
                }
                if ($cf * $cflama < 0) {
                  $cflama = ($cflama + $cf) / (1 - Math . Min(Math . abs($cflama), Math . abs($cf)));
                }
                if (($cf < 0) && ($cf * $cflama >= 0)) {
                  $cflama = $cflama + ($cf * (1 + $cflama));
                }
