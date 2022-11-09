<?php
include 'inc/db.php';
include 'inc/form.php';

include 'inc/select.php';


include 'inc/form.php'
?>

<?php include_once 'parts/header.php' ?>



    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
        <div class="col-md-5 p-lg-5 mx-auto">
            <img src="images/win.jpg" alt="win">
            <h1 class="display-4 fw-normal">اربح مع حسن</h1>
            <p class="lead fw-normal">باقي على فتح التسجيل</p>
            <h3 id="countdown"></h3>
            <p class="lead fw-normal">للسحب على ربح نسخة مجانية من برنامج</p>
            <a class="btn btn-outline-secondary" href="#">Coming soon</a>
        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
        <div class="container">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">تابع البث المباشر على صفحتي في الفيسبوك بالتاريخ المذكور أعلاه</li>
            <li class="list-group-item">سأقوم ببث مباشر لمدة ساعة عبارة عن أسئلة وأجوبة حرة للجميع</li>
            <li class="list-group-item">خلال فترة الساعة سيتم فتح صفحة التسجيل هنا حيث ستقوم بتسجيل اسمك وايميلك</li>
            <li class="list-group-item">بنهاية البث سيتم اختيار اسم واحد من قاعدة البيانات بشكل عشوائي</li>
            <li class="list-group-item">الرابح سيحصل على نسخة مجانية من برنامج كامتازيا</li>
        </ul>
        </div>
    </div>







<div class="container">
    <div class="position-relative text-center ">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
<form  action="<?php echo  $_SERVER['PHP_SELF'] ?>" method="post">
    <h3>الرجاء ادخال معلوماتك</h3>
    <div class="mb-3">
        <label for="firstName" class="form-label">الاسم الاول</label>
        <input type="text" name="firstName" class="form-control" value="<?php echo $firstName?>" id="firstName" >
        <div class="form-text error"><?php echo $errors['firstNameError'];?></div>
    </div>

    <div class="mb-3">
        <label for="lastName" class="form-label">الاسم الاخير</label>
        <input type="text" name="lastName" class="form-control" value="<?php echo $lastName?>" id="lastName">
        <div class="form-text error"><?php echo $errors['lastNameError'];?></div>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">البريد الالكتروني</label>
        <input type="email" name="email" class="form-control" value="<?php echo $email?>" id="email">
        <div  class="form-text error"><?php echo $errors['emailError'];?></div>
    </div>


    <button type="submit" name="submit" class="btn btn-secondary">ارسال المعلومات</button>

    <div class="mt-5">
    <div class="form-check">
  <input class="form-check-input" type="checkbox"  id="defaultCheck1" required >
  <label class="form-check-label" for="defaultCheck1">
    بالضغط على هذا الخيار فأنت توافق على تسجيل معلوماتك في قاعدة البيانات الخاصة بهذا النموذج فقط, حيث لن يتم استخدام هذه المعلومات في اي مكان اخر ولا يحق لأي جهة شراء أو بيع أو تبادل هذه المعلومات إلا بعد الموافقة الشخصية بعد إرسال بريد الكتروني يوضح كيفية استخدام هذه المعلومات
  </label>
</div>
</div>
</form>
        </div>
    </div>

    <div class="loader-con">
        <div id="loader">
            <canvas id="circularLoader" width="200" height="200"></canvas>
        </div>
    </div>


    <div class="d-grid gap-2 col-6 mx-auto my-5">
        <button id="winner" type="button" class="btn btn-warning" >
            اختيار الرابح
        </button>

    </div>



    <!-- Modal -->
    <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal">الرابح في المسابقة</h5>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php foreach ($users as $user):?>
                        <h1 class="display-3 text-center modal-title" id="modal"><?php echo htmlspecialchars($user['firstname']).' '.htmlspecialchars($user['lastname']);?></h1>
                    <?php endforeach;?>
                </div>

            </div>
        </div>
    </div>
</div>










<?php include_once 'parts/footer.php';?>
