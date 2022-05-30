 <td><?php echo $data['nama_karyawan'] ?></td>	                <td><?php echo $data['nama_karyawan'] ?></td>
                <td><?php echo $data['jenis_kelamin'] ?></td>	                <td><?php echo $data['jenis_kelamin'] ?></td>
                <td>	                <td>
                <button class="btn btn-warning btn-sm">	                <a href="?page=karyawanupdate&id=<?php echo $data['id'] ?>" class="badge bg-warning">
                  <span data-feather="clipboard"></span>	                <span data-feather="edit">
                </button>	              </a>
                <button class="btn btn-danger btn-sm">	              <a href="?page=karyawandelete&id=<?php echo $data['id'] ?>" class="badge bg-danger">
                  <span data-feather="x-octagon"></span>	                <span data-feather="x-octagon">
              </button>	              </a>
                </td>	                </td>
              </tr>	              </tr>
              <?php 	              <?php 
 0  
