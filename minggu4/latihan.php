<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Mahasiswa</title>
</head>
<body>
    <table border="1" align="center" width="700px">
    <th colspan="2">
        <h1>Nilai Mahasiswa</h1>
    </th>
    <tr>
        <form action="" method="POST" name="input">
            <td>
                Nim : 
            </td> 
            <td>
                <input type="text" name="nim" >
            </td>
    </tr>
    <tr>
            <td>
                Program Studi : 
            </td>
            <td>
                <select name="studi">
                    <option value="Teknik Informatika S1">Teknik Informatika </option>
                    <option value="Teknik Industri S1"> Teknik Industri</option>
                    <option value="Manajemen"> Manajemen </option>
                </select>
            </td> 
    </tr>
    <tr>
            <td>
                Nilai Tugas : 
            </td>
            <td>
                <input type="text" name="tugas">
            </td>
    </tr>
    <tr>

            <td>
                Nilai UTS : 
            </td>
            <td>
                <input type="text" name="uts">
            </td>
    </tr>
    <tr>
            <td>
                Nilai UAS : 
            </td>
            <td>
                <input type="text" name="uas">
            </td>
    </tr>
    <tr>
            <td>Catatan Khusus : </td>
            <td>
                <input type="checkbox" name="checkboxName[]" value="Kehadiran >= 70 %">Kehadiran >= 70 %<br>
                <input type="checkbox" name="checkboxName[]" value="interaktif dikelas">interaktif dikelas<br>
                <input type="checkbox" name="checkboxName[]" value="Tidak terlambat mengumpulkan tugas">Tidak terlambat mengumpulkan tugas<br>
            </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <input type="submit" name="Input" value="Simpan">
        </td>
    </tr>
</form>
    
</table>
</body>
<center>
    <table border="1" width="1000px">
            <?php
            if(isset($_POST['Input'])){
            if(empty($_POST['nim']) || empty($_POST['studi']) || empty($_POST['tugas']) || empty($_POST['uts']) || empty($_POST['uas'])){
                print "Data Belum diisi";
            }else{
                $nim   = $_POST['nim'];
                $studi  = $_POST['studi'];
                $tugas  = $_POST['tugas'];
                $uts    = $_POST['uts'];
                $uas    = $_POST['uas'];
                $nilai_tugas = $tugas * 0.4;
                $nilai_uts   = $uts * 0.3;
                $nilai_uas   = $uas * 0.3;
                $nilai_akhir = $nilai_tugas + $nilai_uts + $nilai_uas;
                if ($nilai_akhir>=85) {
                    $grade = "A";
                }elseif ($nilai_akhir<=84) {
                    $grade = "B";
                }elseif ($nilai_akhir<=69) {
                    $grade = "C";
                }elseif ($nilai_akhir<=59){
                    $grade = "D";
                }elseif ($nilai_akhir<=50){
                    $grade = "E";
                }else{
                    $grade = "E";
                }
                if($nilai_akhir>=60){
                    $status = "LULUS";
                }elseif($nilai_akhir<=59){
                    $status = "TIDAK LULUS";
                }else{
                    $grade = "E";
                }
            }
        }?>
        <?php
                {
                echo
                "
                <br>
                <tr>
                    <td>Program Studi</td>
                    <td>Nim</td>
                    <td>Nilai Akhir</td>
                    <td>STATUS</td>
                    <td>Catatan Khusus</td>
                </tr>
                ";}?>
                <tr>
                    <td><?php echo $studi?></td>
                    <td><?php echo $nim?></td>
                    <td><?php echo $nilai_akhir?></td>
                    <td><?php echo $status?></td>
                    <td>
                        <?php
                            if (isset($_POST['checkboxName'])) 
                            {
                                echo implode('<br>', $_POST['checkboxName']);
                            }
                        ?>
                    </td>
                </tr>
    </table>
</center>
</html>
