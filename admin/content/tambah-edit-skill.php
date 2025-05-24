<?php
include "config/koneksi.php";
if (isset($_POST['simpan'])) {
    $skill_name = $_POST['skill_name'];

    $insertSkill = mysqli_query($config, "INSERT INTO skills (skill_name) VALUES ('$skill_name')");
    header("location:?level=" . base64_encode($_SESSION['LEVEL']) . "&page=manage-skill");
}
?>
<form action="" method="post">
    <label for="" class="form-label">Skill Name</label>
    <input type="text" class="form-control" name="skill_name">
    <button type="submit" name="simpan" class="btn btn-primary mt-2">Simpan</button>
</form>