$statement->bindParam(3, $jenis_kelamin);
                $statement->bindParam(4, $status_menikah);
                $statement->execute();

                header('Location: main.php?page=karyawan');

              }