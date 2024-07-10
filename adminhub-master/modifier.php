<?php

include "connexiondb.php";
if(isset($_POST['edit'])){
  $id=$_POST['id'];
 
}

$req="SELECT * FROM `user` WHERE id='$id'";
$res=$pdo->query($req);
$planning=$res->fetch();
?>

<form method="POST" action="modification.php" enctype="multipart/form-data">
  <div class="row">
  <div class="form-group col-12" style="display:none;">
      <input type="number" name="id"  class="form-control"  value="<?php echo $planning['id'] ?>"/>
    </div>
    <label>Day</label>
    <div class="form-group col-12">
      <input type="date" name="day"  class="form-control"  value="<?php echo $planning['nom'] ?>"/>
    </div>
    <br>
    <label>Type </label>
    <div class="form-group col-12">
      <input type="time" name="time"  class="form-control" value="<?php echo $planning['prenom'] ?>"/>
    </div>
    <label>Photo </label>
    <div class="form-group col-12">
      <input type="text" name="course"  class="form-control" value="<?php echo $planning['email'] ?>"/>
    </div>
    <label>Védio</label>

    <div class="form-group col-12">
      <input type="text" name="coach"  class="form-control" value="<?php echo $planning['mdp'] ?>"/>
    </div>
    <label>Védio</label>

<div class="form-group col-12">
  <input type="text" name="coach"  class="form-control" value="<?php echo $planning['tel'] ?>"/>
</div>
</div>
 
<br>
    <div class="row" style="position:absolute;transform:translate(-50%,-50%);left:50%">
    <div class="form-group col-6">
      <input type="submit"  class="btn btn-danger" name="enregistrer" value="Enregister"/>
    </div>
    <div class="form-group col-6">
      <input type="reset"  class="btn btn-danger" value="Annuler"/>
    </div>
    </div>

  
</form>