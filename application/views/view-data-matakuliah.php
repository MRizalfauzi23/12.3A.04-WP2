<html>
<body>
    <center>
        <table>
            <tr>
                <th coslpan="3">
                    tampil data matakuliah
                </th>
            </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>kode MTK</th>
                    <th>:</th>
                    <td>
                        <?= $kode; ?>
                    </td>
                </tr> 
                <tr>
                    <td>Nama MTK</td>
                    <td>:</td>
                    <td>
                        <?= $Nama; ?>
                    </td>
                    </tr> 
                <tr>
                    <td>SKS</td>
                    <td>:</td>
                    <td>
                        <?= $sks; ?>
                    </td>
                </tr>
                <td colspan="3" align="center">
                    <a herf="<?= base_url('Matakuliah'); ?>">Kembali</a>
                </td>
            </tr>
        </table>
    </center>
</body>

</html>
