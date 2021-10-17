<div style="margin: auto; width: 900px">
    <h1>
        <a href="http://localhost/TugasYoutube/PHP%20SMK%2017-22/kategori/insert.php">TAMBAH DATA</a>
    </h1>

    <?php

    require_once "../function.php";

    if (isset($_GET["update"])) {
        $id = $_GET["update"];
        require_once("update.php");
    }

    if (isset($_GET["hapus"])) {
        $id = $_GET["hapus"];
        require_once("delete.php");
    }

    echo "<br>";

    $SQL = "SELECT idkategori FROM tblkategori";

    $result = mysqli_query($koneksi, $SQL);
    $jumlah = mysqli_num_rows($result);

    $START = 3;
    $LENGTH = 3;

    $AMOUNT = ceil($jumlah / $LENGTH);

    for ($i = 1; $i <= $AMOUNT; $i++) {
        echo "<a href='?p=$i'>" . $i . "</a>";
        echo "&nbsp &nbsp &nbsp";
    }

    if (isset($_GET["p"])) {
        $p = $_GET["p"];
        $start = ($p * $LENGTH) - $LENGTH;
    } else {
        $start = 0;
    }

    echo "<br> <br>";

    $SQL = "SELECT * FROM tblkategori LIMIT $start, $LENGTH";

    $result = mysqli_query($koneksi, $SQL);
    $jumlah = mysqli_num_rows($result);

    echo "
        <table border='1px'>
            <tr>
                <th>#</th>
                <th>kategori</th>
                <th>hapus</th>
                <th>update</th>
            </tr>
    ";

    if ($jumlah > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["idkategori"] . "</td>";
            echo "<td>" . $row["kategori"] . "</td>";
            echo "<td>" . "<a href='?hapus=" . $row["idkategori"] . "'>Hapus</a>" . "</td>";
            echo "<td>" . "<a href='?update=" . $row["idkategori"] . "'>Update</a>" . "</td>";
            echo "</tr>";
        }
    }

    echo "</table>";

    ?>

</div>