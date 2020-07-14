<?php
include_once("Plantilla/cabezera.php");
?>
	
<section class="full-width section">
<div class="container">
<div class="row">
<div class="col-xs-12 col-sm-4 col-md-4">
<div class="full-width user-menu-xs">
</div>
</div>
<div class="col-xs-12 col-sm-4 col-md-4">
<div class="registration-form">
<div class="full-width post-user-info" style="margin: 0 !important;">
<!--<i class="fa fa-user NavBar-Nav-icon" aria-hidden="true"></i>-->
<img src="../assets/img/user.png" class="NavBar-Nav-icon" alt="User">
<p class="full-width"><small> <b>Almacener@:<br>Lisbeth</b></h1></small></p><br><br>
</div><br>
<form>
	    <div class="form-group">
            <input class="form-control item" type="text" name="" maxlength="100" minlength="4"  id="" placeholder="Nombre" required>
        </div>
        <div class="form-group">
            <input class="form-control item" type="text" name=""  style="WIDTH: 360px; HEIGHT: 98px" maxlength="200" minlength="4" size=32  id="" placeholder="Detalle" required>
        </div>
        <div class="form-group">
        <label for=""> Categotia:</label>
            <select name="" id="">
            <option value="">A</option>
            <option value="">e</option>
            </select>
        </div>
        <div class="form-group">
        <label for=""> Unidades:</label>
            <select name="" id="">
            <option value="">A</option>
            <option value="">e</option>
            </select>
        </div>
        <div class="form-group">
            <input class="form-control item" type="text" name="username" maxlength="15" minlength="4"  id="" placeholder="Cantidad" required>
        </div>
        <div class="form-group">
            <button class="btn btn-primary btn-block create-account" type="submit"> Modificar</button>
        </div>
    </form>
<div class="list-group-item text-center">
<a href="" class="list-group-item" id="categori-2">
<i class="fa fa-times-circle" aria-hidden="true"></i> Cancelar</a>
</div>
</div>
</div>
</section><br>
<!--Pie de pagina-->
<?php
include_once("Plantilla/pie.php");
?>
