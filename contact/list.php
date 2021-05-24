 <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                                لیست منو های اصلی وب سایت
                </header>
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
                        include 'app/contact.php';
                        $obj=new contact();
                        $obj->setTbl('contact_tbl');
                        $result=$obj->list_contact();
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
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </section>
        </div>
    </div>
