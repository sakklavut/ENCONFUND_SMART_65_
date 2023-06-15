<?php include('comtop.php'); ?>
<?php include('header.php'); ?>

<div class="bg_application_form">
     <div class="container">
          <div class="row">
               <div class="col-xl-12">
                    <h1>ตรวจสอบสถานนะ</h1>
               </div>
          </div>
     </div>
</div>
<div class="container">
     <div class="row">
          <!-- <nav class="mt-3" style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
               <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php" class="nag_link">หน้าหลัก</a></li>
                    <li class="breadcrumb-item active" aria-current="page">ประกาศรับสมัครงาน</li>
               </ol>
          </nav> -->
          <nav aria-label="breadcrumb" class="mt-3">
               <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php" class="nag_link">หน้าหลัก</a></li>
                    <li class="breadcrumb-item active" aria-current="page">ตรวจสอบสถานนะ</li>
               </ol>
          </nav>
     </div>
     <hr class="mt-1 line_footer mb-2">
</div>
<div class="container">
     <div class="row">
          <div class="col-xl-12 mt-4">
               <h1>ตรวจสอบสถานะการสมัครสอบ</h1>
          </div>
     </div>
     <form>
          <div class="row mb-5 mt-4">
               <div class="col-xl-10 col-sm-10 col-md-10">         
                    <input type="text" placeholder="000-00-000-0000" maxlength="13"  class="form-control is-invalid" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                         กรอกเลขประจำตัวประชาชน
                    </div>
               </div>
               <div class="col-xl-2 col-sm-2 col-md-2">
                    <button type="button submit"  value="Submit" class="btn detail_button ">สมัครงาน</button>
               </div>
          </div>
     </form>
</div>






 







<?php include('footer.php'); ?>
<?php include('combottom.php'); ?>