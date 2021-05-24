<?php

include_once "app/contact.php";
$obj = new contact();

if (isset($_POST['btnA'])) {
    $data = $_POST['frm'];
    $obj->add_contact($data);
}
?>
<h1 class="pageLables">افزودن شماره تماس جدید</h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        <section class="panel">
            <header class="panel-heading">
                افزودن شماره تماس جدید
            </header>
            <div class="panel-body">
                <form role="form" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">نام</label>
                        <input type="text" name="frm[name]" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">نام خانوادگی</label>
                        <input type="text" name="frm[lastname]" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">شماره تماس</label>
                        <input type="text" name="frm[tel]" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">آدرس</label>
                        <input type="text" name="frm[addr]" class="form-control">
                    </div>
                    <button type="submit" name="btnA" class="btn btn-info">افزودن</button>
                </form>

            </div>
        </section>
    </div>
</div>