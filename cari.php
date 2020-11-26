<?php
$conn = mysqli_connect("localhost","root","","pemerintah");
$cari = $_POST["cari"];
if (!empty($cari)){
    $query = "SELECT
    nama
    FROM peserta
    WHERE
    nama LIKE '%$cari%'
    ORDER BY nama ASC";
    $results = mysqli_query($conn, $query);
    $mahasiswa = array();
    while( $row = mysqli_fetch_assoc($results) ) {
        $mahasiswa[] = $row;
    }
    echo '<table class="namelist" style="margin: 0 auto;">';
    if(!empty($mahasiswa)){ ?>
    <tbody class="isi">
        <?php foreach ($mahasiswa as $mhs) { ?>
        <tr>
            <td class="isi_tulisan">
                <?php echo $mhs["nama"]; ?>
            </td>
        <?php } ?>
    </tbody>
    <?php } else { ?>
    <tbody class="isi">
        <tr>
            <td style="text-align:center;">
                Sorry, we can't find you.
            </td>
        </tr>
    </tbody>
    <?php } ?>
</table>
<?php } ?>
