 <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <br><br>
                <form action="" method="post">
                    <input type="text" name="txt">
                    <input type="submit" name="btn" value="جستجو">
                </form>
                <header class="panel-heading">
                                لیست منو های اصلی وب سایت
                </header>
                <?php
                if (isset($_POST['btn'])):
                $txt=$_POST['txt'];
                include 'app/contact.php';
                $obj=new contact();
                $obj->setTbl('contact_tbl');
                $result=$obj->LikeData('name',$txt);
                ?>
                <table class="table table-striped table-advance table-hover">
                    <thead>
                    <tr>
                        <th>نام</th>
                        <th>نام خانوادگی</th>
                        <th>شماره تماس </th>
                        <th>آدرس</th>
                        <th>ویرایش</th>
                        <th>حذف</th>
                    </tr>
                    

                    </thead>
                    <tbody>
                        <?php
                            foreach ($result as $value):
                        ?>
                    <tr>
                        <td><?php echo $value->name?></td>
                        <td><?php echo $value->lastname?></td>
                        <td><?php echo $value->tel?></td>
                        <td><?php echo $value->addr?></td>
                        <td><a href="dashbord.php?contact=edit&&id=<?php echo $value->id?>" class="btn btn-primary btn-xs"><i class="icon-pencil"></i></a></td>
                        <td><a href="dashbord.php?contact=delete&&id=<?php echo $value->id?>" class="btn btn-danger btn-xs"><i class="icon-trash "></i></a></td>
                    </tr>
                    <?php
                        endforeach;
                        endif;
                    ?>
                    </tbody>
                </table>
            </section>
        </div>
    </div>
